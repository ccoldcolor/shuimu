<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ($TEMPLATE_PATH); ?>css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ($TEMPLATE_PATH); ?>css/iconfont.css"/>
    <title>河北水木文化传播有限公司</title>
</head>
<body>
<div class="header_box">
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_headerBgL.png" class="header_bgLeft" alt="header左侧背景" />
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_headerBgR.png" class="header_bgRight" alt="header右侧背景" />
    <div class="content">
        <a href="index.html" class="logo">
            <img src="<?php echo ($TEMPLATE_PATH); ?>img/logoT.png" width="240" alt="河北水木文化logo">
        </a>
    </div>
    <div class="nav_box">
        <div class="content">
            <ul class="nav">
                <li>
                    <a href="/" <?php if($now_action == 'index'): ?>class="active"<?php endif; ?>>网站首页</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/classic_case');?>" <?php if($now_action == 'classic_case'): ?>class="active"<?php endif; ?>>经典案例</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/video');?>" <?php if($now_action == 'video'): ?>class="active"<?php endif; ?>>视频链接</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/about');?>" <?php if($now_action == 'about'): ?>class="active"<?php endif; ?>>关于我们</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/contact');?>" <?php if($now_action == 'contact'): ?>class="active"<?php endif; ?>>联系我们</a>
                </li>
            </ul>
        </div>
    </div> 
    <div class="index_comInfo" id="jilu">
        <div class="content">
            <img src="<?php echo ($TEMPLATE_PATH); ?>img/logo_gray.png" width="110" alt="河北水木灰色logo" class="logo_gray"/>
            <div class="info_box">
                <p>在漫长的人生征途中，与你并肩作战&nbsp;/</p>
                <p class="indent">与过去和解，对世界温柔&nbsp;/</p>
                <p>时光清浅，却自有力量，见证水木的不凡&nbsp;/</p>
                <p class="indent">弱水三千，只取一木&nbsp;/</p>
            </div>
            <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_headerPic.png" alt="河北水木文化传播" class="header_pic">
        </div>
    </div>
</div>
<div class="center_navBox">
    <hr class="line">
    <div class="content">
        <ul class="center_nav">
            <li>
                <a href="#jilu" class="active">纪录片</a>
            </li>
            <li>
                <a href="#guanggao">广告片</a>
            </li>
            <li>
                <a href="#qixuan">企宣片</a>
            </li>
            <li>
                <a href="#jianzhu">建筑漫游</a>
            </li>
        </ul>
    </div>
</div>
<div class="jilu">
    <div class="content">
        <ul class="imgBox">
            <li class="pic_list first">
                <a class="pic" href="#">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jiluPic01.png" alt="故宫文物"/>
                    <p class="pic_title white"><span>故宫文物</span></p>
                </a>
            </li>
            <li class="pic_list">
                <a class="pic" href="#">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jiluPic02.png" alt="环岛日志"/>
                    <p class="pic_title white"><span>环岛日志</span></p>
                </a>
            </li>
            <li class="pic_list">
                <a class="pic" href="#">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jiluPic03.png" alt="遥远星球"/>
                    <p class="pic_title white"><span>遥远星球</span></p>
                </a>
            </li>
            <li class="pic_list last">
                <a class="pic" href="#">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jiluPic04.png" alt="一片树叶"/>
                    <p class="pic_title white"><span>一片树叶</span></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="guanggao_info" id="guanggao">
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_guanggaoTBgL.png" class="gauanggao_BgLeft" alt="广告左侧背景" />
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_guanggaoTBgR.png" class="gauanggao_BgRight" alt="广告右侧背景" />
    <div class="content">
        <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_guanggaoPic.png" alt="影视广告片" class="guanggao_pic"/>
        <div class="info_box">
            <p>在漫长的人生征途中，与你并肩作战&nbsp;/</p>
            <p class="indent">与过去和解，对世界温柔&nbsp;/</p>
            <p>时光清浅，却自有力量，见证水木的不凡&nbsp;/</p>
            <p class="indent">弱水三千，只取一木&nbsp;/</p>
            <p class="info_title">影视广告片</p>
        </div>
    </div>
</div>
<div class="center_navBox">
    <hr class="line">
    <div class="content">
        <ul class="center_nav">
            <li>
                <a href="#jilu">纪录片</a>
            </li>
            <li>
                <a href="#guanggao" class="active">广告片</a>
            </li>
            <li>
                <a href="#qixuan">企宣片</a>
            </li>
            <li>
                <a href="#jianzhu">建筑漫游</a>
            </li>
        </ul>
    </div>
</div>
<div class="guanggao">
    <div class="content">
        <ul class="imgBox">
            <li class="pic_list first">
                <a class="pic" href="#">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_guanggaoPic01.png" alt="海洋故事"/>
                    <p class="pic_title"><span>海洋故事</span></p>
                </a>
            </li>
            <li class="pic_list">
                <a class="pic" href="#">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_guanggaoPic02.png" alt="单车旅记"/>
                    <p class="pic_title"><span>单车旅记</span></p>
                </a>
            </li>
            <li class="pic_list">
                <a class="pic" href="#">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_guanggaoPic03.png" alt="玛莎"/>
                    <p class="pic_title"><span>玛莎</span></p>
                </a>
            </li>
            <li class="pic_list last">
                <a class="pic" href="#">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_guanggaoPic04.png" alt="汤姆巡航"/>
                    <p class="pic_title"><span>汤姆巡航</span></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="qixuan_info" id="qixuan">
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_qixuanTBgL.png" class="qixuan_TBgLeft" alt="企业宣传片左侧背景">
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_qixuanTBgR.png" class="qixuan_TBgRight" alt="企业宣传片右侧背景">
    <div class="content">
        <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_qixuanPic.png" alt="企业宣传片" class="qixuan_pic"/>
        <div class="info_box">
            <p>在漫长的人生征途中，与你并肩作战&nbsp;/</p>
            <p class="indent">与过去和解，对世界温柔&nbsp;/</p>
            <p>时光清浅，却自有力量，见证水木的不凡&nbsp;/</p>
            <p class="indent">弱水三千，只取一木&nbsp;/</p>
            <p class="info_title">企业宣传片</p>
        </div>
    </div>
</div>
<div class="center_navBox">
    <hr class="line">
    <div class="content">
        <ul class="center_nav">
            <li>
                <a href="#jilu">纪录片</a>
            </li>
            <li>
                <a href="#guanggao">广告片</a>
            </li>
            <li>
                <a href="#qixuan" class="active">企宣片</a>
            </li>
            <li>
                <a href="#jianzhu">建筑漫游</a>
            </li>
        </ul>
    </div>
</div>
<div class="qixuan">
    <div class="content">
        <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_qixuanPic01.png" alt="企业宣传片" class="qixuan_left">
        <div class="qixuan_right">
            <a href="#" class="num01">
                <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_qixuanPic02.png" alt="企业宣传片">
            </a>
            <a href="#" class="num02">
                <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_qixuanPic03.png" alt="企业宣传片">
            </a><br>
            <a href="#" class="num03">
                <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_qixuanPic04.png" alt="企业宣传片">
            </a>
            <a href="#" class="num04">
                <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_qixuanPic05.png" alt="企业宣传片">
            </a>
        </div>
    </div>
</div>
<div class="jianzhu_info" id="jianzhu">
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jianzhuTBgL.png" class="jianzhu_TBgLeft" alt="建筑漫游左侧背景">
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jianzhuTBgR.png" class="jianzhu_TBgRight" alt="建筑漫游右侧背景">
    <div class="content">
        <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jianzhuPic.png" alt="建筑漫游" class="jianzhu_pic"/>
        <div class="info_box">
            <p>在漫长的人生征途中，与你并肩作战&nbsp;/</p>
            <p class="indent">与过去和解，对世界温柔&nbsp;/</p>
            <p>时光清浅，却自有力量，见证水木的不凡&nbsp;/</p>
            <p class="indent">弱水三千，只取一木&nbsp;/</p>
            <p class="info_title">建筑漫游</p>
        </div>
    </div>
</div>
<div class="center_navBox">
    <hr class="line">
    <div class="content">
        <ul class="center_nav">
            <li>
                <a href="#jilu">纪录片</a>
            </li>
            <li>
                <a href="#guanggao">广告片</a>
            </li>
            <li>
                <a href="#qixuan">企宣片</a>
            </li>
            <li>
                <a href="#jianzhu" class="active">建筑漫游</a>
            </li>
        </ul>
    </div>
</div>
<div class="jianzhu">
    <div class="content">
        <a href="#" class="pic first">
            <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jianzhuPic01.png" alt="建筑漫游">
        </a>
        <a href="#" class="pic">
            <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jianzhuPic02.png" alt="建筑漫游">
        </a>
        <a href="#" class="pic last">
            <img src="<?php echo ($TEMPLATE_PATH); ?>img/index_jianzhuPic01.png" alt="建筑漫游">
        </a>
    </div>
</div>
<div class="partner">
    <div class="content">
        <div class="partner_title">
            <p><span>合作客户</span></p>
        </div>
        <div class="partner_list">
            <ul>
                <li>高邑县人民检察院</li>
                <li>北京百变空间网络科技有限公司</li>
                <li>石家庄云高网络科技有限公司</li>
                <li>石家庄裕华区法院</li>
                <li>糖烟酒周刊</li>
            </ul>
            <ul>
                <li>兴业银行石家庄分行</li>
                <li>光大银行石家庄分行</li>
                <li>糖烟酒周刊</li>
                <li>光大银行石家庄分行</li>
                <li>石家庄裕华区法院</li>
            </ul>
            <ul>
                <li>高邑县人民检察院</li>
                <li>北京百变空间网络科技有限公司</li>
                <li>石家庄云高网络科技有限公司</li>
                <li>兴业银行石家庄分行</li>
            </ul>
        </div>
    </div>
    <a href="index.html" class="logo_bottom">
        <img src="<?php echo ($TEMPLATE_PATH); ?>img/logoB.png" alt="底部logo" width="180">
    </a>
</div>

<div class="footer">
    <p class="footer_top">“弱水三千，只取一木”</p>
    <p class="footer_bottom">河北水木文化传播有限公司&nbsp;|&nbsp;版权所有2008—2016&nbsp;冀ICP备16010573号</p>
</div>
<script src="<?php echo ($TEMPLATE_PATH); ?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ($TEMPLATE_PATH); ?>js/jquery.backgroundcover.min.js" type="text/javascript"></script>
<script src="<?php echo ($TEMPLATE_PATH); ?>js/index.js" type="text/javascript"></script>
</body>
</html>