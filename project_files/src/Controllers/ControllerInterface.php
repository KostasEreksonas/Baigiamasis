<?php

namespace Baigiamasis\Controllers;

use Baigiamasis\Request;
use Baigiamasis\Response;

interface ControllerInterface
{
    public function list(Request $request): Response;

    public function show(Request $request): Response;

    public function store(Request $request): Response;

    public function update(Request $request): Response;

    public function delete(Request $request): Response;

}