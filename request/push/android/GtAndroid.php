<?php
require_once(dirname(__FILE__) . '/' . 'GtUps.php');

class GtAndroid extends GtApiRequest
{
    //android厂商通道推送消息内容
    private $ups;

    public function getUps()
    {
        return $this->ups;
    }

    public function setUps($ups)
    {
        $this->ups = $ups;
    }

    public function getApiParam()
    {
        if ($this->ups != null){
            $this->apiParam["ups"] = $this->ups->getApiParam();
        }
        return $this->apiParam;
    }
}