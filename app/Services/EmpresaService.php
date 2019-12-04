<?php

namespace App\Services;
use Illuminate\Database\QueryException;
use Exception;
use Prettus\Validator\Exceptions\ValidatorException;
use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\EmpresaRepository;
use App\Validators\EmpresaValidator;
class EmpresaService
{
	private $repository;
	private $validator;
	public function __construct(EmpresaRepository $repository, EmpresaValidator $validator)
	{
		$this->repository 	= $repository;
		$this->validator 	= $validator;
	}
	public function store(array $data)
	{
		try
		{
			$this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
			$empresa = $this->repository->create($data);
			return [
				'success' 	=> true,
				'messages' 	=> "Empresa cadastrada",
				'data' 	  	=> $empresa,
			];
		}
		catch(Exception $e)
		{
			return[
				'success' => false,
				'messages' => $e ->getMessageBag(),
			];
		}
	}
	public function update($data, $id)
	{
		try
		{
			$this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
			$usuario = $this->repository->update($data, $id);
			return [
				'success' 	=> true,
				'messages' 	=> "Usuário atualizado",
				'data' 	  	=> $empresa,
			];
		}
		catch(Exception $e)
		{
			switch(get_class($e))
			{
				case QueryException::class 		:  return ['success' => false, 'messages' => $e->getMessage()];
				case ValidatorException::class 	:  return ['success' => false, 'messages' => $e->getMessageBag()];
				case Exception::class 			:  return ['success' => false, 'messages' => $e->getMessage()];
				default 						:  return ['success' => false, 'messages' => get_class($e)];
			}
		}
	}
	public function destroy($user_id)
	{
		try
		{
			$this->repository->delete($user_id);
			return [
				'success' 	=> true,
				'messages' 	=> "Usuário removido.",
				'data' 	  	=> null,
			];
		}
		catch(Exception $e)
		{
			switch(get_class($e))
			{
				case QueryException::class 		:  return ['success' => false, 'messages' => $e->getMessage()];
				case ValidatorException::class 	:  return ['success' => false, 'messages' => $e->getMessageBag()];
				case Exception::class 			:  return ['success' => false, 'messages' => $e->getMessage()];
				default 						:  return ['success' => false, 'messages' => get_class($e)];
			}
		}
	}
}