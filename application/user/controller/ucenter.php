<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use think\Request;

class Ucenter extends BaseController
{

    public function __construct(Request $request = null) {
        parent::__construct($request);
    }

    public function index()
    {
        $this->checkSecondPwd();

    }
}
