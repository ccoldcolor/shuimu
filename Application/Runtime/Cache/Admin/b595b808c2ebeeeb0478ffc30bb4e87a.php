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
        <div class="x-slide_left"></div>
        <div class="layui-tab-content site-demo site-demo-body">
            <div class="layui-tab-item layui-show">
                       <div class="x-body">
    <blockquote class="layui-elem-quote">
        欢迎使用水木后台管理<span class="f-14">v1.0</span>官方交流群： 1111111
    </blockquote>
    <p>登录次数：18 </p>
    <p>上次登录时间： 2017-01-01 11:19:55</p>
    <fieldset class="layui-elem-field layui-field-title site-title">
      <legend><a name="default">信息统计</a></legend>
    </fieldset>
    <table class="layui-table">
        <thead>
            <tr>
                <th>统计</th>
                <th>资讯库</th>
                <th>图片库</th>
                <th>产品库</th>
                <th>用户</th>
                <th>管理员</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>总数</td>
                <td>92</td>
                <td>9</td>
                <td>0</td>
                <td>8</td>
                <td>20</td>
            </tr>
            <tr>
                <td>今日</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>昨日</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>本周</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>本月</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
</div>

        <script src="<?php echo ($TEMPLATE_PATH); ?>/lib/layui/layui.js" charset="utf-8"></script>
        <script src="<?php echo ($TEMPLATE_PATH); ?>/js/x-admin.js"></script>
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