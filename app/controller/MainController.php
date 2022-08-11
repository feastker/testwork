<?php
use Imy\Core\Controller;
use Imy\Core\Tools;

class MainController extends Controller
{
    function init()
    {
        $this->v['name'] = 'Тестовое задание';

        
    }

    function ajax_test() {
        $template = tpl('tmp.test');
        $this->v['message'] = Tools::get_include_contents($template,[
            'ajaxtestvar' => 33
        ]);
    }

}
