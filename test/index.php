<?php
require_once __DIR__.'/../vendor/autoload.php';
//var_dump(hwtconfig('aa'));
// var_dump(\iboxs\basicapi\IBoxsApi::Request()->action('goods.basicinfo.code',[
//     'code'=>'6921168509256'
// ]));
//var_dump(\iboxs\basicapi\IBoxsApi::Direct('image-barcode',[
//    'txt'=>'6921168509256',
//]));
var_dump(\iboxs\basicapi\IBoxsApi::Request('basic.common.ip',[]));