<?php
// +----------------------------------------------------------------------
// | 系统公共函数库
// +----------------------------------------------------------------------
// | foreveryoung （永远年轻，永远热泪盈眶）
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://foreveryoung.xin All rights reserved.
// +----------------------------------------------------------------------
// | Author: WangMode <WangMode@163.cn>
// +----------------------------------------------------------------------

//Unisoft常量定义
const UniSoft_CACHE_MODEL ='Area';
//生成密码
function creatpwd($pwd, $str = ''){
  if(!$str){$str = randStr;}
  $password = md5($pwd.$str);
  return $password;
}

/**
 * 检测用户是否登录
 * @return integer 0-未登录，大于0-当前登录用户ID
 */
function is_login($admin = '1'){
    $loginarr=array('member_info','admin_info');
    $authname = $loginarr[$admin];
    $user = session($authname);
    if (empty($user)) {return 0;} else {
        return $user[$authname . '_auth_sign'] == data_auth_sign($user) ? $user['id'] : 0;
    }
}

/**
 * 生成随机字符串
 * @return String
 */
function randStr($length = 6,$chars = 'abcdefghijkmnpqrstuvwxyz123456789'){$randStr = str_shuffle($chars.$chars);return substr($randStr, 0, $length);}