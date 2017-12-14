<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
class IndexController extends BaseController {
    public function _initialize(){
        parent::_initialize ();
    }
    public function index(){
        
        $admin_info = session('admin_info');
        if(!$admin_info){
            $this->redirect('Login/index');
        }
        $this->assign('admin_info',$admin_info);
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