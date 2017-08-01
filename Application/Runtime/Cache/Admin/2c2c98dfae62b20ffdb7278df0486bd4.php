<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            水木后台管理
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="<?php echo ($TEMPLATE_PATH); ?>/css/x-admin.css" media="all">
    </head>
    <body>
        <div class="layui-layout layui-layout-admin">
            <div class="layui-header header header-demo">
                <div class="layui-main">
                    <a class="logo" href="./index.html">
                        水木后台管理
                    </a>
                    <ul class="layui-nav" lay-filter="">
                      <li class="layui-nav-item"><img src="<?php echo ($TEMPLATE_PATH); ?>/images/logo.png" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
                      <li class="layui-nav-item">
                        <a href="javascript:;"><?php echo ($admin_info["username"]); ?></a>
                        <dl class="layui-nav-child"> <!-- 二级菜单 -->
                          <dd><a href="">个人信息</a></dd>
                          <dd><a href="">切换帐号</a></dd>
                          <dd><a href="./login.html">退出</a></dd>
                        </dl>
                      </li>
                      <li class="layui-nav-item x-index"><a href="/">前台首页</a></li>
                    </ul>
                </div>
            </div>
<div class="layui-side layui-bg-black x-side">
    <div class="layui-side-scroll">
        <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">

            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe62d;</i><cite>产品管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="<?php echo U('System/index');?>">
                                <cite>产品列表</cite>
                            </a>
                        </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe634;</i><cite>轮播管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./banner-list.html">
                                <cite>轮播列表</cite>
                            </a>
                        </dd>
                    </dd>
                </dl>
            </li>

            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>分类管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="javascript:;" _href="./category.html">
                            <cite>分类列表</cite>
                        </a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                   <i class="layui-icon" style="top: 3px;">&#xe612;</i><cite>会员管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="javascript:;" _href="./admin-list.html">
                            <cite>管理员列表</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./admin-role.html">
                            <cite>角色管理</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./admin-cate.html">
                            <cite>权限分类</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./admin-rule.html">
                            <cite>权限管理</cite>
                        </a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe614;</i><cite>系统设置</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="<?php echo U('System/index');?>">
                            <cite>系统设置</cite>
                        </a>
                    </dd>

                    <dd class="">
                        <a href="javascript:;" _href="./sys-log.html">
                            <cite>系统日志</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="<?php echo U('System/link');?>">
                            <cite>合作客户</cite>
                        </a>
                    </dd>

                </dl>
            </li>
            <li class="layui-nav-item" style="height: 30px; text-align: center">
            </li>
        </ul>
    </div>

</div>
    <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true" >
        <div class="x-body">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
              <ul class="layui-tab-title">
                <li class="layui-this">网站设置</li>
                <li>其它设置</li>
              </ul>
              <div class="layui-tab-content" >
                <div class="layui-tab-item layui-show">
                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>网站名称
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="title" autocomplete="off" placeholder="控制在25个字、50个字节以内"
                                class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>关键词
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="title" autocomplete="off" placeholder="5个左右,8汉字以内,用英文,隔开"
                                class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>描述
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="title" autocomplete="off" placeholder="空制在80个汉字，160个字符以内"
                                class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>上传目录配置
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="title" autocomplete="off" placeholder="默认为uploadfile"
                                class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>底部版权信息
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="title" autocomplete="off" placeholder="&copy; 2016 X-admin"
                                class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>备案号
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="title" autocomplete="off" placeholder="京ICP备00000000号"
                                class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <button class="layui-btn" lay-submit="" lay-filter="*">
                                保存
                            </button>
                        </div>
                    </form>
                    <div style="height:100px;"></div>
                </div>
                <div class="layui-tab-item">
                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>电话
                            </label>
                            <div class="layui-input-inline">
                                <input type="text" name="title" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>邮箱
                            </label>
                            <div class="layui-input-inline">
                                <input type="text" name="title" autocomplete="off"  class="layui-input">
                            </div>
                        </div>
                         <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>QQ
                            </label>
                            <div class="layui-input-inline">
                                <input type="text" name="title" autocomplete="off"  class="layui-input">    
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>地址
                            </label>
                            <div class="layui-input-inline">
                                <input type="text" name="title" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                         <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>地址坐标
                            </label>
                            <div class="layui-input-inline">
                                <input type="text" name="title" autocomplete="off" class="layui-input" placeholder="形式：x,y">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <button class="layui-btn" lay-submit="" lay-filter="*">
                                保存
                            </button>
                        </div>
                    </form>
                </div>
              </div>
            </div> 
        </div>
        <script src="<?php echo ($TEMPLATE_PATH); ?>/lib/layui/layui.js" charset="utf-8"></script>
        <script src="<?php echo ($TEMPLATE_PATH); ?>/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['element','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              layer = layui.layer;//弹出层
              form = layui.form()
            

             //监听提交
              form.on('submit(*)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("保存成功", {icon: 6});
                return false;
              });

              })
            </script>
            
            <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>
</html>