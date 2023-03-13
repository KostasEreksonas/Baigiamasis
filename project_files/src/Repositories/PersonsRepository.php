<?php

namespace Baigiamasis\Repositories;

use Baigiamasis\Models\Person;

class PersonsRepository extends BaseRepository implements RepositoryInterface
{
    protected const TABLE_NAME = 'persons';
    protected const MODEL_CLASS = Person::class;
}