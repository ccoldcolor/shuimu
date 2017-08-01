<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
class SystemController extends BaseController {
    public function _initialize(){
        parent::_initialize ();
        $admin_info = session('admin_info');
        if(!$admin_info){
            $this->redirect('Login/index');
        }
        $this->assign('admin_info',$admin_info);
    }
    public function index(){

        $this->display();
    }

    public function do_save(){

    }
    public function link(){
        $this->display();
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