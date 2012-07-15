<?php
class scroll
{
/* 	protected $error=array();
	private   $url=''; */
	protected $debug=false;
	protected $data=array();
	
	public function __construct(){
		
	}
	
	/* 设置变量 
	 * return bool
	 * */
	public function __set($name='',$value=''){
	    if ($name && $value){
	        $this->data[$name]=$value;
	        return true;
	    }
	    return false;
	}
	
	/* 获取数据 */
	public function __get($key=''){
	    return $key?$this->data[$key]:$this->data;
	}
	
	/* 解析回调函数的url参数 
	 * @param qs string
	 * */
	public function parseQueryString($qs=''){
	    $qs && $aqs=explode('&', $qs);
	    foreach ($aqs as $qsVal){
	        $qsVal=explode('=', $qsVal);
	        $this->data['param'][$qsVal[0]]=$qsVal[1];
	    }
	}
	
	/* 验证签名 
	 * @param  sign string
	 * @param  orgSign     string
	 * return  bool
	 * */
	public function checkSignature($sign='',$orgSign=''){
	    if ($sign && $orgSign){
	        $sign=base64_decode($sign);
	        
	    }
	}
}
