<?php
namespace app\user\controller;

use app\common\controller\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return $this->fetch();
    }
}
