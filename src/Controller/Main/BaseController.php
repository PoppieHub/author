<?php

namespace App\Controller\Main;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function renderDefult()
    {
        return [
            'title' => 'Автор',
        ];
    }
}
