<?php

namespace Controller;

use Controller\BaseController;

class HomeController extends BaseController
{
    public function list()
    {
        $this->render("home.html.php");
    }
    public function mitra()
    {
        // il s'affichera grâce à views
        $this->render("home.html.php");
    }
}
