<?php

namespace Baigiamasis\Managers;

use Baigiamasis\Exceptions\ForeignKeyException;
use Baigiamasis\Repositories\PersonsRepository;
use Baigiamasis\Request;

class PersonsManager extends BaseManager implements ManagerInterface
{
    private UserManager $userManager;
    private AddressManager $addressManager;

    public function __construct(PersonsRepository $repository, AddressManager $addressManager, UserManager $userManager)
    {
        $this->repository = $repository;
        $this->addressManager = $addressManager;
        $this->userManager = $userManager;
    }

    /**
     * @throws ForeignKeyException
     */
    public function delete(Request $request): void
    {
        $id = $request->get('id');
        $this->userManager->deleteByPersonId($id);
        $this->addressManager->deleteByPersonId($id);
        $this->repository->delete($id);
    }
}