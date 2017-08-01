<?php
namespace Home\Controller;
use Common\Controller\BaseController;
class IndexController extends BaseController {
    public function _initialize(){
        parent::_initialize ();
        $now_action = ACTION_NAME;
        $this->assign('now_action',$now_action);
    }
    public function index(){
        $this->display();
    }
    public function classic_case(){
        $this->display('index/case');
    }
    public function video(){
        $this->display();
    }
    public function about(){
        $this->display();
    }
    public function contact(){
        $this->display();
    }

}