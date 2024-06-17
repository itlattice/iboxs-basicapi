<?php
namespace iboxs\basicapi\operation;

use iboxs\basicapi\common\BaseOperation;

class Request extends BaseOperation{
    public function action($action,$data){
        return $this->request($action,$data);
    }
}
?>