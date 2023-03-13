<?php

namespace Baigiamasis\Repositories;

use Baigiamasis\Models\Address;

class AddressRepository extends BaseRepository implements RepositoryInterface
{
    protected const TABLE_NAME = 'addresses';
    protected const MODEL_CLASS = Address::class;
}