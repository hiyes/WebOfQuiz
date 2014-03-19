<?php
/* 单一入口测试 */
//echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']."<br/>"; exit;
// 引入常用函数及全局变量
define('ROOT', dirname(__FILE__) );
//define('BACKDOOR', ROOT.'/backdoor/');
//require_once(ROOT.'/include/func.inc.php');
//require_once(ROOT.'/include/memlogin.class.php');
//require_once(ROOT.'/include/dedesql.class.php');
//require_once(ROOT.'/data/common.inc.php');
//require_once(ROOT.'/data/common.cfg.php');

$cfg_base_url = "http://127.0.0.4";
// 对url 进行分析

//phpinfo();

if(file_exists(ROOT.'/frontend/url_rewrite.php')){
    require(ROOT.'/frontend/url_rewrite.php');
}
else {
	echo "aa<br/>";
	echo "十分<br/>";
  echo "抱歉，系统出现错误，不能正确做出相应";
  exit;
}
?>