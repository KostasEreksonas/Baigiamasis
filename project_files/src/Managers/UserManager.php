<?php

namespace Baigiamasis\Managers;

use Baigiamasis\Repositories\UsersRepository;

class UserManager extends BaseManager implements ManagerInterface
{
    public function __construct(UsersRepository $repository)
    {
        $this->repository = $repository;
    }
}