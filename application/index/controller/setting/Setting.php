<?php
namespace app\index\controller;

use think\Controller;

class Setting extends Controller
{
    public function menu()
    {
        return $this->fetch('setting/menu');
    }
}
