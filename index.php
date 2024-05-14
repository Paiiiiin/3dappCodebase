<?php
require 'controller/control.php';//引入控制器文件
$action= isset($_GET['action'])?$_GET['action']:'index';
$show=new Control();
$show->showcontrol($action);//调用控制器方法