<?php
header("content-type:text/html;charset=utf-8");
$coon=mysql_connect("localhost","root","88888888");
mysql_select_db("my_blog",$coon);
mysql_query("set names utf8");
?>