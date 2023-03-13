<?php

namespace Baigiamasis\Controllers;

use Baigiamasis\HtmlRender;
use Baigiamasis\Managers\PersonsManager;
use Baigiamasis\Response;
use Baigiamasis\Traits\ListToTable;

class PersonController extends BaseController implements ControllerInterface
{
    use ListToTable;
    public const TITLE = 'Asmenys';

    public function __construct(PersonsManager $manager, Response $response, HtmlRender $htmlRender)
    {
        $this->manager = $manager;
        parent::__construct($htmlRender, $response);
    }
}