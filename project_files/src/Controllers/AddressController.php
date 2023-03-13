<?php

namespace Baigiamasis\Controllers;

use Baigiamasis\HtmlRender;
use Baigiamasis\Managers\AddressManager;
use Baigiamasis\Response;
use Baigiamasis\Traits\ListToTable;

class AddressController extends BaseController implements ControllerInterface
{
    use ListToTable;
    public const TITLE = 'Adresai';

    public function __construct(AddressManager $manager, Response $response, HtmlRender $htmlRender)
    {
        $this->manager = $manager;
        parent::__construct($htmlRender, $response);
    }
}