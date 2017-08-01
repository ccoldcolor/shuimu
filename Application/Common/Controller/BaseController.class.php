<?php
namespace Common\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){
        $this->TEMPLATE_PATH=__ROOT__.substr(APP_PATH,1).MODULE_NAME.'/'.C('DEFAULT_V_LAYER').'/';//自定义模板路径
    }
}