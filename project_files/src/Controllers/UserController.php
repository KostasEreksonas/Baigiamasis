<?php

namespace Baigiamasis\Controllers;

use Baigiamasis\HtmlRender;
use Baigiamasis\Managers\UserManager;
use Baigiamasis\Response;
use Baigiamasis\Traits\ListToTable;

class UserController extends BaseController implements ControllerInterface
{
    use ListToTable;
    public const TITLE = 'Users';

    public function __construct(UserManager $userManager, HtmlRender $htmlRender, Response $response)
    {
        $this->manager = $userManager;
        parent::__construct($htmlRender, $response);
    }
}