<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>
        {{isset($title)?$title:'Trùm hack | Hướng dẫn hack game online, game điện thoại, game PC'}}
    </title>
    <link rel="icon" href="/media/img/favicon.ico" type="image/x-icon">
    <!--iOS/android/handheld specific -->
    <link rel="apple-touch-icon" href="/media/img/apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="fb:app_id" content="725883087532941">
    <link rel="stylesheet" type="text/css" media="all" href="/media/thuthuat-theme/files/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="/media/thuthuat-theme/files/custom.css">
     <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="/js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/media/thuthuat-theme/files/jquery.min.js"></script>
    <script type="text/javascript" src="/media/thuthuat-theme/files/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/media/thuthuat-theme/files/modernizr.min.js"></script>
    <script type="text/javascript" src="/media/thuthuat-theme/files/customscript.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <meta name="description" content="{{isset($description)?$description:''}}">
    <meta name="keywords" content="{{isset($keyword)?$keyword:''}}">
    <link href="/media/thuthuat-theme/files/streamtestbadge.css" type="text/css" rel="stylesheet">
</head>
<body id="blog" class="home blog main">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-37745280-22', 'auto');
    ga('send', 'pageview');

</script>
<style>
#fat-menu{
 margin-top: 30px;
}
   @media screen and (max-width:728px) {
        #fat-menu{
         margin-top: 0;
         display: inline-block;
        }
    }
</style>
<header class="main-header">
    <div class="container">
        <div id="header">
            <h1 id="logo">
                <a href="/" title="Trùm Hack"><img src="/media/img/logo.png" alt="Trùm Hack"></a>
            </h1>
            <div class="widget-header">
                <div class="user" style="margin-top: 10px">
                @if(Auth::user())
                <div id="fat-menu" class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-user"></i>
                      {{Auth::user()->username}}
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="drop3">
                    <li><a href="/charge/new"><i class="fa fa-usd"></i> Số dư: {{ceil(Auth::user()->getAccount()->balance)}} XU</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="/charge/new" target="_blank"><i class="fa fa-credit-card"></i> Nạp xu</a></li>
                    <li><a href="/user/change-pass"><i class="fa fa-pencil"></i> Thay đổi mật khẩu</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/user/logout"><i class="fa fa-sign-out"></i> Thoát</a></li>
                  </ul>
                </div>

                @else
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Đăng nhập</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalRegister">Đăng ký</button>
                @endif
                </div>
            </div>
        </div>
        <!--#header-->
        <div class="secondary-navigation">
            <nav id="navigation">
                <ul id="menu-main-navigation" class="menu sf-js-enabled">
                    <li><a href="/"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="">
                        <a href="/hack-game-online.html" class="sf-with-ul">Hack Game Online<span class="sf-sub-indicator"> »</span></a>
                        <ul class="sub-menu sf-js-enabled" style="display: none; visibility: hidden;">
                            <li><a href="/hack-webgame.html"><i class="fa fa-chrome"></i> Hack Webgame</a></li>
                            <li><a href="/hack-game-android.html"><i class="fa fa-android"></i> Hack game Android</a></li>
                            <li><a href="/hack-game-ios.html"><i class="fa fa-apple"></i> Hack game iOS</a></li>
                            <li><a href="/hack-game-pc.html"><i class="fa fa-desktop"></i> Hack game PC</a></li>
                        </ul>
                    </li>
                    <li><a href="/hack-game-offline.html">Hack Game Offline</a></li>
                    <li><a href="/nap-so-garena.html">Nạp Sò Garena x10</a></li>
                    <li><a href="/thu-thuat.html">Thủ thuật</a></li>
                    <li><a href="/tin-tuc.html">Tin tức</a></li>
                    <li><a rel="nofollow" href="#">Liên Hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>


</header>
<!-- Modal reg-->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="max-width: 400px">
    <div class="modal-content">
      <div class="modal-header" style="background: #3276b1; text-align: center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: #fff; font-weight: bold">ĐĂNG KÝ</h4>
      </div>
      <div class="modal-body">
        {{Form::open(array('url'=>'#'))}}
        <div class="form-group has-error" style="margin-bottom: 0; display: none" id="ajaxMsgReg">
            <label class="control-label" for="inputError" ></label>
        </div>
        <div class="form-group">
            {{Form::text('username', null, array('class'=>'form-control', 'id'=>'txtUsername', 'placeholder'=>'Tên đăng nhập'))}}
        </div>
        <div class="form-group">
            {{Form::password('password', array('class'=>'form-control', 'id'=>'txtPassword', 'placeholder'=>'Mật khẩu'))}}
        </div>
         <div class="form-group">
            {{Form::password('password-confirmation', array('class'=>'form-control', 'id'=>'txtPasswordConfirmation', 'placeholder'=>'Nhập lại mật khẩu'))}}
        </div>
        {{Form::close()}}
      </div>
      <div class="modal-footer" style="margin-top: 0">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Đóng</button>
        <button type="button" class="btn btn-primary" onclick="register();" id="regBtn"><i class="glyphicon glyphicon-ok"></i>  Đăng ký</button>
        <img src="/images/loading.gif" alt="" style="display: none" id="loadingImg" />
      </div>
    </div>
  </div>
</div>

<!-- Modal login-->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="max-width: 400px">
    <div class="modal-content">
      <div class="modal-header" style="background: #3276b1; text-align: center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: #fff; font-weight: bold">ĐĂNG NHẬP</h4>
      </div>
      <div class="modal-body">
        {{Form::open(array('url'=>'#'))}}
        <div class="form-group has-error" style="margin-bottom: 0; display: none" id="ajaxMsgLog">
            <label class="control-label" for="inputError" ></label>
        </div>
        <div class="form-group">
            {{Form::text('username', null, array('class'=>'form-control', 'id'=>'txtUsernameLog', 'placeholder'=>'Tên đăng nhập'))}}
        </div>
        <div class="form-group">
            {{Form::password('password', array('class'=>'form-control', 'id'=>'txtPasswordLog', 'placeholder'=>'Mật khẩu'))}}
        </div>
        <div class="checkbox">
            <label>
              <input type="checkbox" checked id="chkRemember"> Ghi nhớ
            </label>
          </div>
        {{Form::close()}}
      </div>
      <div class="modal-footer" style="margin-top: 0">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Đóng</button>
        <button type="button" class="btn btn-primary" onclick="login();" id="logBtn"><i class="glyphicon glyphicon-ok"></i>  Đăng nhập</button>
        <img src="/images/loading.gif" alt="" style="display: none" id="loadingImgLog" />
      </div>
    </div>
  </div>
</div>

<script>
    $(function(){
        $('#modalRegister').on('shown.bs.modal', function () {
          $('#txtUsername').focus()
        });
        $('#modalRegister').on('hidden.bs.modal', function () {
          $('#txtUsername').val('');
          $('#txtPassword').val('');
          $('#txtPasswordConfirmation').val('');
          $('#ajaxMsgReg label').html('');
        });
        $('#modalLogin').on('shown.bs.modal', function () {
          $('#txtUsernameLog').focus()
        });
        $('#modalLogin').on('hidden.bs.modal', function () {
          $('#txtUsernameLog').val('');
          $('#txtPasswordLog').val('');
          $('#ajaxMsgLog label').html('');
        });
         $("#txtUsername").keypress(function(e){
            if(e.which==13){
                register();
            }
        });
        $("#txtPassword").keypress(function(e){
            if(e.which==13){
                register();
            }
        });
        $("#txtPasswordLog").keypress(function(e){
            if(e.which==13){
                login();
            }
        });
         $("#txtUsernameLog").keypress(function(e){
            if(e.which==13){
                login();
            }
        });
    });

    function register(){
        username = $('#txtUsername').val();
        password = $('#txtPassword').val();
        password_confirmation = $('#txtPasswordConfirmation').val();
        $('#loadingImg').show();
        $('#regBtn').hide();
        $.post('/user/create',
        { username:username, password:password, password_confirmation:password_confirmation }
        ,function(result){
            $('#ajaxMsgReg').show();
            $('#ajaxMsgReg label').html(result.msg);
            if(result.success){
                $('#modalRegister').modal('hide');
                location.reload();
            }else{

            }
            $('#loadingImg').hide();
            $('#regBtn').show();
        }, 'json');
    }
    function login(){
        username = $('#txtUsernameLog').val();
        password = $('#txtPasswordLog').val();
        remember = $('#chkRemember').is(':checked')?1:0;
        $('#loadingImgLog').show();
        $('#logBtn').hide();
        $.post('/user/login',
        { username:username, password:password, remember:remember }
        ,function(result){
            console.log(result);
            $('#ajaxMsgLog').show();
            $('#ajaxMsgLog label').html(result.msg);
            if(result.success){
                $('#modalLogin').modal('hide');
                location.reload();
            }else{

            }
            $('#loadingImgLog').hide();
            $('#logBtn').show();
        }, 'json');
    }
</script>