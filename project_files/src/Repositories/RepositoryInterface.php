<?php

namespace Baigiamasis\Repositories;

use Baigiamasis\Database;
use Baigiamasis\Models\ModelInterface;

interface RepositoryInterface
{
    public function getDb(): Database;

    public function create(array $data): void;
    public function all(): array;
    public function findById(int $id): ModelInterface;
    public function update(array $data): void;
    public function delete(int $id): void;
}