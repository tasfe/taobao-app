<?php
define('ROOTDIR', dirname(__FILE__));
require_once ROOTDIR.'/scroll.class.php';


// echo $_SERVER['HTTP_HOST'],'<br/>start',$_SERVER['REQUEST_URI'],'end<br/> ',$_SERVER['QUERY_STRING'],'<br/>',getcwd();
// var_dump($_SERVER['HTTP_HOST'],$_SERVER['']);
$objScroll=new scroll();
$objScroll->parseQueryString($_SERVER['QUERY_STRING']);
// $objScroll->appKey=$objScroll->param['top_appkey'];
$objScroll->url='http://gw.api.tbsandbox.com/router/rest?';
// $objScroll->sessionKey=$objScroll->param['top_session'];
// $param=base64_decode($objScroll->param['top_parameters']);
// $param=str_replace('&', '', $param);
$appKey=$objScroll->param['top_appkey'];
$appSession=$objScroll->param['top_session'];
$appSecret='sandboxe9cbe50276372571eaf61add1';
$aParam=array(
            'appkey'=>$appKey,
            'format'=>'json',
            'method'=>'taobao.trades.sold.get',
            'v'=>'2.0',
            'sign_method'=>'md5',
//             'timestamp'=>date('Y-m-d H:i:s'),
            'fields'=>'buyer_nick,created,title',
            'nick'=>'sandbox_luguo'
        );

$objScroll->bb='bbc';