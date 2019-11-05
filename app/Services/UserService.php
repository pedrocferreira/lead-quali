<?php
namespace App\Services;

use App\Repositories\UserRepository;

class UserService{
    private $repository;
    private $validator;


    public function __construct(UserRepository $repository,){

    }
}
