<?php

namespace Baigiamasis\Managers;

use Baigiamasis\Repositories\AddressRepository;

class AddressManager extends BaseManager implements ManagerInterface
{
    public function __construct(AddressRepository $repository)
    {
        $this->repository = $repository;
    }
}