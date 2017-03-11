<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
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
<div data-role="page" id="page1">
  <div data-role="header" data-theme="f"> 
    <a href="../Index/index.html" data-ajax="false" data-role="button" data-icon="home">首页</a>
    <h3 id="reg"> 用户登录 </h3>
  </div>
  <div data-role="content" data-theme="f">
    <form name="RegForm" method="post" action="logindo" data-ajax="false">
      <div data-role="fieldcontain">
        <label for="username"> 用户名 </label>
        <input name="user_name" id="username"  value="" type="text" required>
      </div>
      <div data-role="fieldcontain">
        <label for="password"> 密码 </label>
        <input name="user_pwd" id="password" placeholder="" value="" type="password" required>
      </div>
      <div align="center">
        <input data-inline="true" type="submit" name="submit" value="登录"/>
        <a data-inline="true"  data-role="button"  href="Index.html"> 取消 </a>
        </div>
        <!-- </form>
        <form method="post" action="/mbook1/index.php/Home/Index/otheruser">
        <input type="submit" value="更换账号"/>
              </form> -->
  </div>
  <div data-role="footer" data-theme="f">
    <h1>机电书店</h1>
  </div>
</div>
</body>
</html>