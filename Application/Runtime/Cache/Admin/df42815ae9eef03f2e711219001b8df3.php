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
            <form class="layui-form x-center" action="" style="width:70%">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">链接名</label>
                    <div class="layui-input-inline">
                      <input type="text" name="name"  placeholder="链接名" autocomplete="off" class="layui-input">
                    </div>
                    <label class="layui-form-label">URL</label>
                    <div class="layui-input-inline">
                      <input type="text" name="link"  placeholder="http://www.baidu.com" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="*"><i class="layui-icon">&#xe608;</i>添加</button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            链接名
                        </th>
                        <th>
                            url
                        </th>
                        <th>
                            排序
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            学并思
                        </td>
                        <td >
                            http://www.xuebingsi.com
                        </td>
                        <td >
                            0
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="javascript:;" onclick="link_edit('编辑','link-edit.html','4','','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="link_del(this,'1')" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            百度
                        </td>
                        <td >
                            http://www.baidu.com
                        </td>
                        <td >
                            0
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="javascript:;" onclick="link_edit('编辑','link-edit.html','4','','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="link_del(this,'1')" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div id="page"></div>
        </div>
        <script src="<?php echo ($TEMPLATE_PATH); ?>/lib/layui/layui.js" charset="utf-8"></script>
        <script src="<?php echo ($TEMPLATE_PATH); ?>/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['element','laypage','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层
              form = layui.form();//弹出层

              //监听提交
              form.on('submit(*)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("增加成功", {icon: 6});
                $('#x-link').prepend('<tr><td><input type="checkbox"value="1"name=""></td><td>1</td><td>'+data.field.name+'</td><td>'+data.field.link+'</td><td>0</td><td class="td-manage"><a title="编辑"href="javascript:;"onclick="link_edit(\'编辑\',\'link-edit.html\',\'4\',\'\',\'510\')"class="ml-5"style="text-decoration:none"><i class="layui-icon">&#xe642;</i></a><a title="删除"href="javascript:;"onclick="link_del(this,\'1\')"style="text-decoration:none"><i class="layui-icon">&#xe640;</i></a></td></tr>');
                return false;
              });
            })

              //以上模块根据需要引入

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }
            
            

            // 用户-编辑
            function link_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            
            /*删除*/
            function link_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }
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