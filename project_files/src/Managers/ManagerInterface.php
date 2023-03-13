<?php

namespace Baigiamasis\Managers;

use Baigiamasis\Models\ModelInterface;
use Baigiamasis\Repositories\RepositoryInterface;
use Baigiamasis\Request;

interface ManagerInterface
{
    public function getRepository(): RepositoryInterface;

    public function getAll(): array;

    public function getOne(Request $request): ModelInterface;

    public function store(Request $request): void;

    public function update(Request $request): void;

    public function delete(Request $request): void;

    public function getModelName(): string;
}