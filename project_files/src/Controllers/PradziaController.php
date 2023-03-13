<?php

namespace Baigiamasis\Controllers;

use Baigiamasis\Response;
use Baigiamasis\Request;

class PradziaController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->render('pradzia', $request->all());
    }
}