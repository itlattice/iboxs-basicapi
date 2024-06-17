<?php

namespace iboxs\basicapi;

use iboxs\basicapi\common\Base;
use iboxs\basicapi\operation\basicapi;
use iboxs\basicapi\operation\Request;
use iboxs\basicapi\operation\shopapi;

class IBoxsApi extends Base
{
    /**
     * 调用接口
     * @param $appid APPID(可使用配置文件配置，若传入的，以传入值为准)
     * @param $appkey APPKEY(可使用配置文件配置，若传入的，以传入值为准)
     * @return
     */
    public static function Request($action, $datas, $appid=null, $appkey=null){
        list($appid,$appkey)=self::requestApiClass($appid,$appkey);
        return (new Request($appid,$appkey))->request($action,$datas);
    }
    /**
     * 调用基础通用接口
     * @param $companyNo 绑定的公司编号(可使用配置文件配置，若传入的，以传入值为准)
     * @param $appid APPID(可使用配置文件配置，若传入的，以传入值为准)
     * @param $appkey APPKEY(可使用配置文件配置，若传入的，以传入值为准)
     * @return
     */
    public static function Direct($action,$datas){
        $url=(new self())->domain."/v1/direct/{$action}";
        $url.="?". http_build_query($datas);
        return $url;
    }
}
