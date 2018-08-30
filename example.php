<?php
require('gapi.php');

use sinacloud\sae\Gapi;
/*ACCESSKEY 和 SECRETKEY从新浪云的应用信息处可以查询，如果在SAE PHP环境使用可以直接使用以下常量*/
$i = new Gapi(SAE_ACCESSKEY, SAE_SECRETKEY);
$post_data = array();
$post_data['context'] = 'hi12';
$post_data['word_tag'] = 1;
$post_data['encoding'] = 'UTF-8';
$ret = $i->post('/segment/urlclient.php', $post_data);
var_dump($ret);
$ret = json_decode($ret, true);
var_dump($ret);