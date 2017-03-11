<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/mbook1/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/mbook1/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/mbook1/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
<style>
body {
  margin: 0 auto;
  text-align:center;
  padding:0;
}
div, ul, li, dl, dt, dd, h1, h2, h3, h4, p {
  margin:0;
  padding:0;
  list-style:none;
}
a {
  text-decoration:none;
}

.ui-bar-f
{
background-color:#F07;
border:#FF0 1px solid;
}
.ui-bar-f .ui-btn
{
background-color:gray;
}
.ui-bar-f .ui-btn:hover
{
background-color:green;
}
.ui-body-f
{
background-color:pink;
}
.ui-body-f .ui-btn
{
  background-color:pink;
}
.ui-body-f .ui-btn:hover
{
  background-color:pink;
}
</style>
</head>

<body>
<div data-role="page" id="page1" data-theme="f">
  <div data-role="header" data-theme="f"> 
    <a href="../Index/index.html" data-ajax="false" data-role="button" data-icon="home" data-theme="a">首页</a>
    <a href="../Index/login.html" data-role="button" data-icon="info" data-theme="a">登陆</a>
    <h3 id="reg"> 用户注册 </h3>
  </div>
  <div data-role="content" data-theme="f">
    <form name="RegForm" method="post" action="/mbook1/index.php/Home/User/insert" data-ajax="false">
      <div data-role="fieldcontain" data-theme="f">
        <label for="username"> 用户名 </label>
        <input name="user_name" id="username"  value="" type="text" required>
      </div>
      <div data-role="fieldcontain" data-theme="f">
        <label for="password"> 密码 </label>
        <input name="user_pwd" id="password" placeholder="" value="" type="password" required>
      </div>
      <div data-role="fieldcontain" data-theme="f">
        <label for="repass"> 确认密码 </label>
        <input name="repass" id="repass" placeholder="" value="" type="password" required>
      </div>
      
      <div data-role="fieldcontain" data-theme="f">
      <fieldset data-role="controlgroup" data-type="horizontal"   data-theme="f">
        <legend>性别</legend>
        <label for="male">男</label>
        <input type="radio" name="user_sex" id="male" value="男" data-theme="a">
        <label for="female">女</label>
        <input type="radio" name="user_sex" id="female" value="女" data-theme="a">
      </fieldset>
      </div>
      <div data-role="fieldcontain" data-theme="f">
        <label for="email"> 邮箱 </label>
        <input name="user_email" id="email"  value="" type="email">
      </div>
      <div >
        <input data-inline="true" type="submit" name="submit" value="提交"  data-theme="a" />
        <a data-inline="true"  data-role="button"  href="../Index/index.html" data-theme="a"> 取消 </a> 
      </div>
    </form>
  </div>
</div>
</body>
</html>