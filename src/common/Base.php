<?php

namespace iboxs\basicapi\common;

use Exception;
use Redis;

class Base
{
    public $domain="https://api.gz8.co";
    public static function requestApiClass($appid=null,$appkey=null){
        $appid=$appid?$appid:iboxsapiconfig('iboxsapi.appid');
        $appkeyKey='iboxsapi.appkey';
        $appkey=$appkey?$appkey:iboxsapiconfig($appkeyKey);
        return array($appid,$appkey);
    }
}