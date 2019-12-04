<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\LeadCreateRequest;
use App\Http\Requests\LeadUpdateRequest;
use App\Repositories\LeadRepository;
use App\Validators\LeadValidator;
use App\Services\LeadService;
use App\Entities\Lead;

/**w
 * Class LeadsController.
 *
 * @package namespace App\Http\Controllers;
 */
class LeadsController extends Controller
{
    /**
     * @var LeadRepository
     */
    protected $repository;

    /**
     * @var LeadValidator
     */
    protected $validator;

    /**
     * LeadsController constructor.
     *
     * @param LeadRepository $repository
     * @param LeadValidator $validator
     */
    protected $service;
    public function __construct(LeadRepository $repository, LeadValidator $validator, LeadService $service )
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$users = $this->repository->all();
        return view('lead.index', [
			'leads' => $users
		]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  LeadCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(LeadCreateRequest $request)
    {   
       
   
    
        $request = $this->service->store($request->all());

    
        $lead = $request['success'] ? $request['data'] : null;
           dd($request);    
        session()->flash('success', [
            'success' => $request['success'],
            'messages' => $request['messages']
        ]);
          
        return redirect()->route('lead.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lead = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $lead,
            ]);
        }

        return view('leads.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = $this->repository->find($id);

        return view('leads.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  LeadUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(LeadUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $lead = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Lead updated.',
                'data'    => $lead->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Lead deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Lead deleted.');
    }
}
