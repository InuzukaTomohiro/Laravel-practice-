<?php
namespace App\TestClasses;
 
class TestService
{
    private $strMsg;
    private $aryData;
 
    public function __construct() {
        $this->strMsg = 'これはTestserviceです。';
        $this->aryData = ['one', 'two', 'three'];
    }
 
    public function say() {
        return $this->strMsg;
    }
 
    public function data() {
        return $this->aryData;
    }
}
