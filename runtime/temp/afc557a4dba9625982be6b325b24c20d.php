<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"D:\user\htdocs\userBusiness\public/../application/user\view\ucenter\reg_user.html";i:1508929386;s:43:"../application/user/view/layout/header.html";i:1508929386;s:40:"../application/user/view/layout/nav.html";i:1508929386;s:42:"../application/user/view/ucenter/form.html";i:1508929386;s:43:"../application/user/view/layout/footer.html";i:1508929386;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0030)https://www.zhdls.com/main.php -->
<html lang="zh-CN" class="tablesaw-enhanced"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会员商务系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link rel="shortcut icon" href="https://www.zhdls.com/favicon.ico">
    <link href="/static/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/static/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/tablesaw.css">
    <link href="/static/css/animate.min.css" rel="stylesheet">
    <link href="/static/css/style_inspina.css" rel="stylesheet">
    <link href="/static/css/xin.css" rel="stylesheet">
    <link href="/static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="/static/css/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/static/css/jquery.gritter.css" rel="stylesheet">

    <link href="/static/css/datepicker3.css" rel="stylesheet">

    <!--<link href="yimaotheme/style/css/blueimp-gallery.min.css" rel="stylesheet">-->

    <!--<link rel="stylesheet" type="text/css" href="yimaotheme/style/css/bootstrap-markdown.min.css" />-->

    <link rel="stylesheet" type="text/css" href="/static/css/simditor.css">

    <link href="/static/css/slick.css" rel="stylesheet">
    <link href="/static/css/slick-theme.css" rel="stylesheet">

    <!--<link href="yimaotheme/style/css/bootstrap-select.min.css" rel="stylesheet">-->


    <link href="/static/css/city-picker.css" rel="stylesheet" type="text/css">

    <!-- Ladda style -->
    <link href="/static/css/ladda-themeless.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="/static/css/sweetalert.css" rel="stylesheet">

    <!-- Switchery -->
    <link href="/static/css/switchery.css" rel="stylesheet">
    <style>
        /*@media (max-width: 1200px) {*/
        .container{
            width: 100%;
            padding-left: 20px;
            padding-right: 20px;
        }
        .wrapper-content{
            padding-left: 0px;
            padding-right: 0px;
        }
        .top-navigation .wrapper.wrapper-content{
            padding-left: 0px;
            padding-right: 0px;
        }
        /*}*/
        @media screen and (max-width: 767px) {
            .table-responsive > .table > tbody > tr > td, .table-responsive > .table > tbody > tr > th, .table-responsive > .table > tfoot > tr > td, .table-responsive > .table > tfoot > tr > th, .table-responsive > .table > thead > tr > td, .table-responsive > .table > thead > tr > th {
                white-space: inherit;
            }
        }
        @media (min-width: 768px){
            .top-navigation{
                margin-top:87px;
            }
            #topMenu{
                z-index: 1000;width: 100%;position: fixed;top:0px;
            }
        }

        @media (max-width: 768px) {
            .container{
                width: 100%;
                padding-left: 0px;
                padding-right: 0px;
            }
        }
        @media (max-width: 900px) {
            #pc-top{
                display: none;
            }
        }
        @media (max-width: 768px) {
            /* .top-navigation .navbar-collapse{
                 position: absolute;
                 min-height: 100%;
                 z-index: 1000;
                 background: #fff;
                 transition: transform .15s ease-in-out,width .15s ease-in-out;
                 transform: translate(-160px, 0);
             }
             .top-navigation .in{
                 transform: translate(0, 0);
             }*/
        }
    </style>




















    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>

    <!--<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>-->

    <!-- bootstrap-table-->

    <script src="/static/js/toastr.min.js"></script>

    <script src="/static/js/respond.js"></script><!--[endif]---->
    <script src="/static/js/jquery.js"></script>
    <script src="/static/js/tablesaw.js"></script>
    <script src="/static/js/tablesaw-init.js"></script>

    <script src="/static/js/jquery.gritter.min.js"></script>

    <script src="/static/js/bootstrap-datepicker.js"></script>

    <script src="/static/js/jquery.blueimp-gallery.min.js"></script>


    <!--<script type="text/javascript" src="yimaotheme/style/js/markdown.js"></script>-->
    <!--<script type="text/javascript" src="yimaotheme/style/js/to-markdown.js"></script>-->
    <!--<script type="text/javascript" src="yimaotheme/style/js/bootstrap-markdown.js"></script>-->
    <!--<script type="text/javascript" src="yimaotheme/style/js/bootstrap-markdown.zh.js"></script>-->

    <script type="text/javascript" src="/static/js/module.js"></script>
    <script type="text/javascript" src="/static/js/uploader.js"></script>
    <script type="text/javascript" src="/static/js/hotkeys.js"></script>
    <script type="text/javascript" src="/static/js/simditor.js"></script>

    <!-- slick carousel-->
    <script src="/static/js/slick.min.js"></script>

    <!--<link href="../../Resource/plugins/assets/plugins/bootstrap-select/yimaotheme/style/js/bootstrap-select.js" rel="stylesheet">-->


    <!-- Ladda -->
    <script src="/static/js/spin.min.js"></script><style type="text/css"></style><style type="text/css"></style>
    <script src="/static/js/ladda.min.js"></script>
    <script src="/static/js/ladda.jquery.min.js"></script>

    <!-- Sweet alert -->
    <script src="/static/js/sweetalert.min.js"></script>

    <!-- Switchery -->
    <script src="/static/js/switchery.js"></script>
    <!-- toastr -->
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "1000",
            "timeOut": "7000",
            "extendedTimeOut": "3000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        function showToastrMessage(text,type){
            switch (type) {
                case 'success':
                    toastr.success(text);break;
                case 'error':
                    toastr.error(text);break;
                default :
                    toastr.info(text);break;
            }
        }
    </script>
    <script>
        function showSweetAlert(title,msg,type,my_function) {
            swal({
                title:title,
                text: msg,
                type: type,
                confirmButtonText: "确定",
                cancelButtonText: "取消"
            },my_function);

        }
    </script>
    <script>
        function sendAjax(buttonId,goPage){
            var thisTicket = "#"+buttonId;
            var l = $(thisTicket).ladda();

            // Start loading
            l.ladda('start');
            setTimeout(function () {
                $.ajax({
                    url: goPage,
                    type: "post",
                    dataType: "json",
                    data: $("#sendForm").serialize(),
                    error: function (msg) {
                        showSweetAlert('', msg, 'error');
                    },
                    success: function (msg) {
                        if (msg.resultType != 1) {
                            showSweetAlert('', msg.msg, 'error')
                        } else {
                            showSweetAlert("", msg.msg, "success",function (isConfirm) {
                                location.href = msg.toUrl;
                            });
                            setTimeout(function () {
                                location.href = msg.toUrl;
                            },2000);
                        }
                        l.ladda('stop');
                    }
                });
            }, 500);
        }
    </script>
    <link href="/static/css/slick.css" rel="stylesheet">
    <link href="/static/css/slick-theme.css" rel="stylesheet">
</head>


<body class="top-navigation" lim:visitorcapacity="1">
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg">
            <style type="text/css">
            .bk-toolBar {
                line-height: 36px;
                background-color: #2a333a;
            }
            .pull-left {
                float: left!important;
            }
            .bk-toolBar>ul,li,dl,dt,dd{
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .bk-toolBar>ul>li {
                display: inline-block;
                height: 100%;
                color: #7c8187;
            }
            .bk-toolBar>ul>li p {
                margin: 0;
            }
            .bk-toolBar>.btn.btn-skew {
                -webkit-transform: skew(-20deg);
                -moz-transform: skew(-20deg);
                -o-transform: skew(-20deg);
                transform: skew(-20deg);
            }
            .bk-toolBar>.btn.btn-skew span {
                -webkit-transform: skew(20deg);
                -moz-transform: skew(20deg);
                -o-transform: skew(20deg);
                transform: skew(20deg);
            }

        </style>
        <!-- Live800在线客服图标:默认图标[浮动图标]开始-->
        <div style="display:none;"><a href="https://www.live800.com/">web聊天</a></div><script language="javascript" src="/static/js/floatButton.js"></script><script language="javascript" src="/static/js/floatButtonStatic.js"></script><div style="display:none;"><a href="https://en.live800.com/">live chat</a></div>
        <!-- 在线客服图标:默认图标结束-->
        <div class="row border-bottom white-bg" id="topMenu">
<div class="bk-toolBar clearfix" id="pc-top">
    <ul class="pull-left" id="topMenuPrice">
        <li><p>&nbsp;&nbsp;<i class="fa fa-fire"></i>&nbsp;欢迎您！ <span class="text-warning"><?php echo $data['mobile']; ?>！</span></p></li>
        <li><p>&nbsp;&nbsp;这是您第 <span class="text-warning"><?php echo $data['total']; ?></span> 次登录系统</p></li>
        <li><p>&nbsp;&nbsp;您上次的登录时间是 <span class="text-warning"><?php echo $data['time']; ?></span> </p></li>
        <li><p>&nbsp;&nbsp;本次登录IP <span class="text-warning"><?php echo $data['ip']; ?></span></p></li>
    </ul>
    <ul class="pull-right" id="topMenuNav" style="margin-top:1px;margin-right: 20px;">
        <li id="menuNew"><a href="" target="_self"><span class="text-warning">信息资讯<span class="badge"></span></span></a></li>
    </ul>
    <a id="btnRecommed" role="button" class="btn btn-primary btn-skew btn-sm pull-right" style="margin-top:4px;margin-right: 20px;" target="_self">
    <span><i class="fa fa-clock-o"></i> <span id="timer"></span></span>
    <script language="javascript">
        document.getElementById('timer').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());
        setInterval("document.getElementById('timer').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
    </script>
    </a>
</div>
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <i class="fa fa-reorder"></i>
                    </button>
                    <a href="https://www.zhdls.com/main.php#" class="navbar-brand">会员商务系统</a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a aria-expanded="false" role="button" href="/user"><i class="fa fa-home" style="font-size: 1.2em;"></i>首页</a>
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="/user/ucenter/" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-paper-plane"></i>资料管理<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="/user/ucenter">数据中心</a></li>
                                <li><a href="/user/ucenter/myinfo">个人资料</a></li>
                                <li><a href="/user/ucenter/changePwd">密码修改</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i>团队管理<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="/user/ucenter/reg_user">会员申请</a></li>
                                <li><a href="">推荐会员</a></li>
                                <li><a href="">已注册会员</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i>财务管理<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="">存券</a></li>
                                <li><a href="">换券</a></li>
                                <li><a href="">转券</a></li>
                                <li><a href="">奖金记录</a></li>
                                <li><a href="">积分记录</a></li>
                                <li><a href="">兑券</a></li>
                                <li><a href="">购券</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="https://www.zhdls.com/order.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i>产品中心<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="">产品订购</a></li>
                                <li><a href="">订单列表</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="https://www.zhdls.com/order.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart"></i>股权中心<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="">购入股权</a></li>
                                <li><a href="">公司回购</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="https://www.zhdls.com/announces.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i>信息管理<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="">系统公告</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a onclick="return confirm('确定退出吗？')">
                                <i class="fa fa-sign-out"></i>安全退出
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    <script src="/static/js/luhmCheck.js"></script>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>注册新会员</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="https://www.zhdls.com/main.php">首页</a>
                    </li>
                    <li>
                        <a>团队管理</a>
                    </li>
                    <li class="active">
                        <strong>注册新会员</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>注册新会员
                    <small>（打<i class="text-danger">*</i> 号为必填项）</small>
                </h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" name="sendForm" id="sendForm" method="post" action="reg.php">
                <input type="hidden" name="act" value="add">
                <input type="hidden" name="__hash__" value="49d3d2c47a2897b966e273a0f86c814a7fb2396d">
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">用户账号：<i class="text-danger">*</i></label>

                    <div class="col-sm-10">
                        <input name="userid" id="userid" type="text" value="" placeholder="请输入手机号码" class="form-control" required="">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> 输入短信验证码： <i class="text-danger">*</i></label>
                    <div class="col-sm-8">
                        <input name="smsyzm" type="text" id="smsyzm" value="" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="button" class="form-control" id="sendSms" style="background-color:#f67a62;color:white;" value="获取短信验证码">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">真实姓名： <i class="text-danger">*</i></label>

                    <div class="col-sm-10" id="check_name">
                        <input name="truename" type="text" placeholder="请输入您的真实姓名" value="" id="name" class="form-control" required="">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">推荐人账号：<i class="text-danger">*</i></label>

                    <div class="col-sm-10">
                        <input name="tuname" type="text" id="tuname" value="" class="form-control" required="">
                    </div>
                </div>
                <script type="text/javascript">
                    var rgpwd1=0;
                    var rgpwd1xx="一级密码";
                </script>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> 一级密码： <i class="text-danger">*</i></label>

                    <div class="col-sm-10">
                        <input name="rgpwd1" type="password" id="rgpwd1" size="20" value="111111" class="form-control" required=""><span class="help-block m-b-none">默认密码：111111</span>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> 确认一级密码： <i class="text-danger">*</i></label>

                    <div class="col-sm-10">
                        <input name="rgpwd1" type="password" id="rgpwd1" size="20" value="111111" class="form-control" required="">
                    </div>
                </div>
                <script type="text/javascript">
                    var rgpwd2=0;
                    var rgpwd2xx="二级密码";
                </script>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> 二级密码： <i class="text-danger">*</i></label>

                    <div class="col-sm-10">
                        <input name="rgpwd2" type="password" id="rgpwd2" size="20" value="222222" class="form-control" required=""><span class="help-block m-b-none">默认密码：222222</span>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> 确认二级密码： <i class="text-danger">*</i></label>

                    <div class="col-sm-10">
                        <input name="rgpwd2" type="password" id="rgpwd2" size="20" value="222222" class="form-control" required="">
                    </div>
                </div>
                <script type="text/javascript">
                    var rgaddress=0;
                    var rgaddressxx="收货地址";
                </script>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> 收货地址： <i class="text-danger">*</i></label>

                    <div class="col-sm-10">

                        <input name="rgaddress" type="text" id="rgaddress" value="" class="form-control">

                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> 开户银行： <i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <select name="bankname" id="bankname" class="form-control">
                                <option value="">请选择开户行</option>
                                <option value="工商银行">工商银行</option>
                                <option value="农业银行">农业银行</option>
                                <option value="交通银行">交通银行</option>
                                <option value="建设银行">建设银行</option>
                                <option value="邮政银行">邮政银行</option>
                            </select>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label"> 银行卡号： <i class="text-danger">*</i></label>
                        <div class="col-sm-10" id="reband">
                            <input name="bankcard" type="text" id="bankcard" size="35" class="form-control" maxlength="19" value="" required="">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label"> 开户行： <i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <input name="bankaddress" type="text" id="bankaddress" size="35" class="form-control" maxlength="19" value="" required="">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <label>
                                <input id="protocol" name="protocol" type="checkbox" class="wst_ipt">我已阅读并同意
                                <a href="javascript:;" style="color:#69b7b5;" id="protocolInfo" onclick="showProtocol();">《用户注册协议》</a>
                            </label>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="button" id="sendReg"><span class="ladda-label">注册</span><span class="ladda-spinner"></span></button>
                            <!--<button class="btn btn-white" onclick="history.go(-1)">取消</button>-->
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
</div>

            </div>
            <script src="/static/js/jquery.cokie.min.js" type="text/javascript"></script>
            <script src="/static/js/autoreg.js" type="text/javascript"></script>
            <script src="/static/js/layer.js" type="text/javascript"></script>
            <script type="text/javascript">
                var protocol = '<div class=content><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:center;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family: 宋体">壹众商城注册协议（含风险告知）</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;color:#676A6C">本协议是您（用户）与壹众商城网站所有者之间就壹众商城网站服务等相关事宜所订立的契约，请您仔细阅读本协议，您点击</span><strong><span style="font-size: 13px">同意并继续</span></strong><span style="font-size:13px;color:#676A6C">按钮后，本协议即构成对双方有约束力的法律文件。</span><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">1</span></strong><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">、</span></strong><span style="font-size:13px;color:#676A6C">服务条款的确认基础</span><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;1.1</span></strong><span style="font-size:13px;color:#676A6C">本站的各项电子服务的所有权和运作权归壹众公司所有。用户同意所有协议条款并完成网站设置的程序，才能成为本站的用户。</span><strong><span style="font-size: 13px">用户确认：本协议条款是处理双方权利义务的契约，始终有效，法律另有强制性规定或双方另有特别约定的，依其规定和约定。</span></strong><strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">&nbsp;</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;1.2</span></strong><span style="font-size:13px;color:#676A6C">用户点击同意本协议的，即视为用户确认自己具有遵守本站交易规则、享受本站服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任。</span><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;1.3</span></strong><span style="font-size:13px;color:#676A6C">用户应是具备从事网络电子商务交易的合格主体且有相关电子商务交易经验，属于年满十八周岁的自然人，或依法成立的法人和其他经济组织。具有独立的民事主体资格，能以自有财产承担民事责任。</span><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">2</span></strong><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">、用户信息</span></strong><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;2.1</span></strong><span style="font-size:13px;color:#676A6C">用户须以真实的、合法的身份实名认证开户，并自愿行使自己名下资金（期票）财产等处置权。</span><strong><span style="font-size: 13px">自行诚信向本站提供注册身份资料，用户承诺其提供的注册资料真实、准确、完整、合法有效，用户注册资料如有变动的，应及时更新其注册资料。</span></strong><span style="font-size:13px;color:#676A6C">如果用户提供的注册资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应法律责任及后果。</span><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;2.2</span></strong><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">用户注册成功后，将产生用户名和密码等账户信息，您可以根据本站规定改变您的密码。用户应谨慎合理的保存、使用其用户名和密码。</span></strong><span style="font-size:13px;color:#676A6C">用户对其参与商品电子交易的所有相关账户户名、密码和验证码等存在保密义务，不得将其交由他人使用。</span><strong><span style="font-size: 13px;font-family: 宋体">用户通过其交易账户登录交易系统进行交易，用户在其交易账户的所有交易行为均视为该用户的交易行为。</span></strong><strong><span style="font-size: 13px">用户不得将在本站注册获得的账户信息借给他人使用，否则视为用户本人在使用，用户应承担由此产生的全部责任，并与实际使用人承担连带责任。</span></strong><strong><span style="font-size:13px;color:#676A6C">用户对其交易账户发出的所有交易申请及交易结果承担法律责任。</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C;font-weight:normal">&nbsp;2.3</span></strong><strong><span style="font-size:13px;font-family:宋体;color:#676A6C;font-weight:normal">用户同意，壹众商城拥有通过电子邮件、电话短信、即时通讯工具等形式，向在本商城注册、购物等用户、收货人发送订单信息、促销活动等告知信息的权利。</span></strong><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">3</span></strong><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">、交易规则</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">&nbsp;3.1</span></strong><strong><span style="font-size: 13px">用户通过注</span></strong><strong><span style="font-size:13px">册登录后，可向自己名下的订货券账户充值。当订货券存到优惠卷里，</span></strong><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;">10%</span></strong><strong><span style="font-size:13px">由系统自动设定为提货券，</span></strong><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;">90%</span></strong><strong><span style="font-size:13px">由系统自动投入优惠卷，并且系统会自动赠送相应的优惠卷。提货券只能用于在壹众商城购买实物商品。</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;">&nbsp;3.2</span></strong><strong><span style="font-size:13px">优惠券的使用和运行规则，适用壹众商城相关规定。</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;">&nbsp;3.3</span></strong><strong><span style="font-size:13px">提货券仅限用于壹众商城提供的购物消费，不得转让。</span></strong><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;">&nbsp;</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;3.4</span><span style="font-size:13px;color:#676A6C">购买商品或服务前请确认您的购物信息正确无误，包括购买商品的型号、数量、价格以及收件信息等。成功购买后信息不可更改。如因收件信息填写错误导致快件寄失等问题，责任由用户个人承担。</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;3.5</span><span style="font-size:13px;color:#676A6C">用户购买实物商品或服务等时，不得利用商城网站</span><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">bug</span><span style="font-size: 13px;color:#676A6C">损害壹众商城利益。否则，壹众商城有权取消本次交易并拒绝发货。对恶意购买的，壹众商城有权暂时冻结该用户账户订货券和优惠券，直至用户改正。</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">4</span></strong><strong><span style="font-size: 13px;font-family: 宋体">、用户</span></strong><strong><span style="font-size: 13px">须知晓的风险事项</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">&nbsp;4.1&nbsp;</span></strong><strong><span style="font-size: 13px">提货券和优惠券风险提示</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;&nbsp; &nbsp;</span><span style="font-size:13px;color:#676A6C">用户在使用壹众商城期间，可能会面临如下风险因素。因此，根据有关法律法规规定的要求，在用户选择购买本商城提供的服务产品之前，请确保自己符合相关法律法规规定以及本商城关于余额使用的规则规定，并完全明白本协议及壹众商城上发布的相关协议或公告。可能面临的风险包括但不限于：</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.1.1</span><span style="font-size:13px;color:#676A6C">政策监管风险：有关法律、法规及相关政策、规则发生变化，导致无法实现您的交易，您由此可能遭受损失；</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.1.2</span><span style="font-size:13px;color:#676A6C">流动性风险：除另有约定的情形外，壹众网络商城上的服务产品须在符合约定的各项条件下方可转让，前述安排存在导致用户无法随时取消服务退出的风险；</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.1.3</span><span style="font-size:13px;color:#676A6C">成交风险：由于壹众网络商城投放的服务产品数量有限，用户所提交的认购请求可能无法最终达成，由此无法成交；</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.1.4</span><span style="font-size:13px;color:#676A6C">管理风险：受管理人员经验、技能、判断力、执行力等方面的限制，以及网络服务提供商的因素，可能会存在影响用户使用优惠券的风险；</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.1.5</span><span style="font-size:13px;color:#676A6C">由不可抗力因素导致的风险：由于包括但不限于地震、台风、洪水、火灾、瘟疫、战争、政变、恐怖主义行动、骚乱、罢工以及新法律或国家政策颁布或对原法律或国家政策的修改等因素导致的风险；</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.1.6</span><span style="font-size:13px;color:#676A6C">操作风险：因用户的过错操作导致的风险，该等过错操作包括但不限于：决策失误、操作不当、遗忘或泄露壹众商城账户、密码、验证码等，或密码被他人破解、使用的计算机系统或手机被第三方侵入、委托他人代理交易时他人恶意或不当操作而造成的损失；</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.1.7</span><span style="font-size:13px;color:#676A6C">其他壹众商城无法预见、无法避免或无法控制的风险。</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;&nbsp;&nbsp; </span><span style="font-size:13px;color:#676A6C">以上风险提示并不能揭示用户在壹众商城使用订货券购买服务所面临的全部风险及市场的全部情形。用户在做出交易决策前，应全面了解壹众商城服务产品的实际情况，根据用户自身的需求、经验和承受能力等判断是否需要购买相应服务产品，谨慎决策，并自行承担全部风险。</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-indent:27px;line-height:22px;background:white">    <span style="font-size: 13px;color:#676A6C">壹众网络商城将谨慎履行本协议项下的相关义务，但并不承诺亦不担保用户使用订货券没有风险。</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">&nbsp;4.2</span></strong><strong><span style="font-size: 13px">订货券使用风险提示</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.2.1</span><span style="font-size:13px;color:#676A6C">用户应当知晓从事电子购物交易存在的风险，全面评估自身的经济实力、产品认知能力、风险控制能力、生理及心理承受能力等。<strong><span style="font-family:宋体">除非另有明确的书面说明</span></strong></span><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">,</span></strong><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">本商城及其所包含的或以其它方式通过本商城提供给用户的全部信息、内容、材料、产品（包括软件）和配套服务，均是在按现状和按现有的基础上提供的。除非另有明确的书面说明，壹众商城不对本站的运营及其包含在本商城上的信息、内容、材料、产品（包括软件）或配套服务作任何形式的、明示或默示的声明或担保（根据中华人民共和国法律另有规定的以外）。</span></strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;&nbsp;&nbsp; </span></strong><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">由于商城上商品信息的数量极其庞大，虽然管理者会尽最大努力保证用户所浏览商品信息的准确性，但由于众所周知的互联网技术因素等客观原因存在，网页显示的信息可能会有一定的滞后性或差错，对此情形您知悉并理解；壹众商城欢迎纠错，并会视情况给予纠错者一定的奖励。</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; </span></strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">4.2.2</span><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">在用户下订单时，请仔细确认所购商品的名称、价格、数量、型号、规格、尺寸、联系地址、电话、收货人等信息。收货人与用户本人不一致的，收货人的行为和意思表示视为用户的行为和意思表示，用户应对收货人的行为及意思表示的法律后果承担连带责任。</span></strong></p><p style="line-height:24px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.2.3</span><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">除法律另有强制性规定外，双方约定如下：本站上销售方展示的商品和价格等信息仅仅是要约邀请，用户下单时须填写希望购买的商品数量、价款及支付方式、收货人、联系方式、收货地址（合同履行地点）、合同履行方式等内容；系统生成的订单信息是计算机信息系统根据用户填写的内容自动生成的数据，仅是用户向销售方发出的合同要约；销售方收到该订单信息后，已将货物实际直接向用户发出时，方视为用户与销售方之间就发出的货物建立了合同关系；如果用户在一份订单里订购了多种商品并且销售方只给用户发出了部分商品时，用户与销售方之间仅就实际向用户发出的商品建立了合同关系。</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp; 4.2.4</span><strong><span style="font-size: 13px;font-family:宋体;color:#676A6C">由于市场变化及各种以合理商业努力难以控制的因素的影响，本站无法保证用户提交的订单信息中希望购买的商品都会有货；如拟购买的商品发生缺货，用户有权取消订单。</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></strong><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C;font-weight:normal">&nbsp;4.2.5</span></strong><strong><span style="font-size:13px;font-family:宋体;color:#676A6C">用户在壹众商场购买商品只能使用提货券进行支付和结算。用户应当妥善保管和使用用于支付购物的账户、密码、验证码和用于收取验证码的手机号码。</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">5</span></strong><strong><span style="font-size: 13px">、协议变更事项</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;&nbsp;&nbsp; </span><span style="font-size:13px;color:#676A6C">根据国家法律法规变化及网站运营需要，壹众商城有权对协议条款不时地进行修改，修改后的协议一旦公示在壹众商城即生效，并代替原来的协议。用户可随时登录查阅最新协议；</span><span style="font-size: 13px;font-family: Helvetica, sans-serif">&nbsp;</span><strong><span style="font-size: 13px;font-family: 宋体">用户有义务不时关注并阅读最新版的协议及网站公告。如用户不同意更新后的协议，可以且应立即停止接受壹众商城网站依据本协议提供的服务；如用户继续使用本网站提供的服务的，即视为同意更新后的协议，且无需事先征求用户意见。壹众商城建议您在使用本商城之前认真阅读本协议及本站的公告。</span></strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">&nbsp;</span><span style="font-size:13px;color:#676A6C">如果本协议中任何一条被视为废止、无效或因任何理由不可执行，该条应视为可分的且并不影响任何其余条款的有效性和可执行性。</span><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">6</span></strong><strong><span style="font-size: 13px;font-family: 宋体">、法律适用及诉讼管辖</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;&nbsp;&nbsp; </span><span style="font-size:13px;color:#676A6C">本协议的订立、执行和解释及争议的解决均应适用在中华人民共和国大陆地区适用之有效法律（但不包括其冲突法规则）。如发生本协议与适用之法律相抵触时，则这些条款将完全按法律规定重新解释，而其它有效条款继续有效。就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，任何一方均可向壹众商城网站所有者注册登记地的人民法院提起诉讼。</span><strong><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></strong></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">7</span></strong><strong><span style="font-size: 13px;font-family: 宋体">、特别提示和声明</span></strong><span style="font-size: 13px;font-family: Helvetica, sans-serif">&nbsp;</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-size: 13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">7.1</span></strong><span style="font-size:13px;color:#676A6C">本协议内容中以黑体、加粗、下划线、斜体等方式显著标识的条款，请用户着重阅读。</span><span style="font-size:13px;font-family:&#39;Helvetica&#39;,&#39;sans-serif&#39;;color:#676A6C">&nbsp;</span></p><p style="margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;line-height:22px;background:white">    <strong><span style="font-family: Helvetica, sans-serif;font-weight: normal">7.2</span></strong><strong>您点击本协议下方的“同意并继续”按钮即视为您完全接受本协议，在点击之前请您再次确认已知悉并完全理解本协议的全部内容。并承诺在壹众商场购买产品和服务产生的任何风险，本人自愿承担。</strong></p><p style="line-height:35px">    <span style="font-size:19px">&nbsp;</span></p><p>    <br/></p></div>';

                function showProtocol(){
                    layer.open({
                        type: 1,
                        title: '用户注册协议',
                        shadeClose: true,
                        shade: 0.8,
                        area: ['1000px', ($(window).height() - 50) +'px'],
                        content: protocol,
                        btn: ['同意并注册'],
                        yes: function(index, layero){
                            layer.close(index);
                            $("#protocol").attr("checked", true);
                        }
                    });
                }
            </script>
            <script>
                $(document).ready(function () {


                    var l = $('#sendReg').ladda();

                    $('#sendForm').bind('submit',function () {
                        $('#sendReg').trigger('click');
                        return false;
                    }) ;

                    l.click(function () {
                        // Start loading
                        smsyzm = $('#smsyzm').val();
                        //swal(smsyzm.length());
                        if(!$('#protocol').is(':checked')){
                            showSweetAlert('',"请先同意用户注册协议!", '');
                        }
                        //else if(smsyzm.length==0){
                            //swal("请输入短信验证码!");
                            //$('#smsyzm')[0].focus();
                            //showSweetAlert('',"请输入短信验证码!", '');
                        //}
                        else{
                            //l.ladda('start');
                            //setTimeout(function () {
                            $.ajax({
                                url: "/user/ucenter/useradd",
                                type: "post",
                                dataType: "json",
                                data: $("#sendForm").serialize(),
                                error: function (msg) {
                                    showSweetAlert('', msg, 'error');
                                },
                                success: function (msg) {
                                    if (msg.code != 1) {
                                        showSweetAlert('', msg.msg, 'error')
                                    } else {
                                        showSweetAlert("", msg.Description, "success",function (isConfirm) {
                                            location.href = msg.url;
                                        });
                                        setTimeout(function () {
                                            location.href = msg.url;
                                        },2000);
                                    }
                                    l.ladda('stop');
                                }
                            });
                            //}, 500
                        }
                    });
                });
            </script>


    <div class="footer">
    <div class="pull-right">
        <strong>欢迎登录商务系统</strong>
    </div>
    <div>
        <strong>备案号：</strong> <a href="/"></a>
    </div>
</div>
<script>
    function IsPC() {
        var userAgentInfo = navigator.userAgent;
        var Agents = ["Android", "iPhone",img
            "SymbianOS", "Windows Phone",
            "iPad", "iPod"];
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
    }
</script>

        </div>


    </div>
</div><div>
</body></html>
