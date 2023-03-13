<?php

namespace Baigiamasis\Controllers;

use Baigiamasis\Response;

class KontaktaiController extends BaseController
{
    public function index(): Response
    {
        return $this->render('kontaktai');
    }
}