#### 新浪云中文分词服务SDK

您可以直接从公网通过g.sae.sina.com.cn新浪云提供的API直接使用中文分词服务。

##### 接口调用必要条件

- 注册了新浪云 <https://www.sinalcoud.com>
- 有一个SAE的应用 <https://sae.sina.com.cn>

##### 接口文档

请参考 <https://www.sinacloud.com/doc/api.html> 分词服务部分。

##### 代码示例

```php
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
```

##### 返回值样例

```
string(89) "[ {"word":"hi","word_tag":"95","index":"0"}, {"word":"12","word_tag":"90","index":"1"} ] " array(2) { [0]=> array(3) { ["word"]=> string(2) "hi" ["word_tag"]=> string(2) "95" ["index"]=> string(1) "0" } [1]=> array(3) { ["word"]=> string(2) "12" ["word_tag"]=> string(2) "90" ["index"]=> string(1) "1" } }
```