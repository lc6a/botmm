<?php


namespace botmm\GradeeBundle\Oicq\Tlv;


class Tlv_t121 extends Tlv_t
{
    public function __construct()
    {
        parent::__construct();
        $this->_cmd = 0x121;
    }
}