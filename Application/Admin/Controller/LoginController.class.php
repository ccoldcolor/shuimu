<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
class LoginController extends BaseController {
	public function _initialize(){parent::_initialize ();}
	public function index()
	{
		$admin_mod = M('Admin');
		if (IS_POST) {
			$username = I('post.username');
			$password = I('post.password');
			if (!$username || !$password) {
                $return['status'] = 0;
                $return['info'] = '用户名或密码不能为空';
                $this->ajaxReturn($return);
			}

			$map = array();
			$map['username'] = $username;
			$map["status"] = array('gt', 0);

			$admin_info = $admin_mod->where($map)->field(true)->find();		//调取管理员信息
			//使用用户名、密码和状态的方式进行认证
			if (empty($admin_info)) {
			    $return['status'] = 0;
                $return['info'] = '该账户不存在或已被禁用';
                $this->ajaxReturn($return);
			} else {
				$checkpassword = creatpwd($password, $admin_info['salt']);
				if ($checkpassword != $admin_info['password']) {
                    $return['status'] = 0;
                    $return['info'] = '密码错误';
                    $this->ajaxReturn($return);
				}
				session('admin_info', $admin_info);
				$userdata['id'] = $admin_info['id'];
				$userdata['login_count'] = array('exp', 'login_count+1');
				$userdata['last_login_time'] = NOW_TIME;
				$admin_mod->save($userdata);
                $return['status'] = 1;
                $return['info'] = '登录成功';
                $this->ajaxReturn($return);
			}
		}else{
			$this->display();
		}

	}
	//退出登录
	public function logout()
	{
		$admin_info = session('admin_info');
		if (isset($admin_info)) {
			session('admin_info', null);
			$this->success('退出登录成功！', U('Login/index'));
		} else {
			$this->error('已经退出登录！');
		}
	}
}
