<?php

namespace iboxs\basicapi\lib;

trait Sign
{
    public function getToken(){
        $cacheToken=$this->getCacheToken();
        if($cacheToken!=false){
            return $cacheToken;
        }
        $headers = [
            'Content-Type: application/json', // 必须设置，表明请求体是JSON格式
        ];
        $url="/v1/getauthorization";
        $now=time();
        $data=[
            'appid'=>$this->appid,
            'time'=>$now,
            'sign'=>$this->getSign($now)
        ];
        $response=$this->postJson($this->domain.$url,$data,$headers);
        if($response['code']!=0){
            throw new \Exception($response['msg']);
        }
        $cacheToken=$response['authorization'];
        return $this->setTokenCache($cacheToken,$response['expire_time']);
    }

    public function getSign($now){
        $tmpSign=md5(md5($this->appid.$now).$this->appkey);
        return $tmpSign;
    }
}