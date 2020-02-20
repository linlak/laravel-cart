<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    private $_status = 200;
    private $_result = [];
    private $_val = false;

    protected $_msgTitle = "Error";
    protected $_msg = "Error";
    protected $_msgType = "error";


    final protected function _setResult(string $key, $value) {
        $this->_result[$key] = $value;
    }

    private function genMessage() {
        $this->_setResult('msg', [
            'type' => $this->_msgType,
            'message' => $this->_msg,
            'title' => $this->_msgTitle
        ]);
    }
    final protected function _showResult() {

        if($this->_isVal()){
            $this->genMessage();
        }
        return \response()->json($this->_result,$this->_status);
    }

    final protected function _isVal() {
        return $this->_val;
    }

    final protected function _enVal() {
        $this->_val = true;
    }


}
