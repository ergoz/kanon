<?php
class event{
	protected $_subject = null;
	protected $_name = '';
	protected $_parameters = array();
	protected $_processed = false;
	protected $_value = null;
	public function __construct($subject, $name, $parameters = array()){
		$this->_subject = $subject;
		$this->_name = $name;
		$this->_parameters = $parameters;
	}
	public function getName(){
		return $this->_name;
	}
	public function getSubject(){
		return $this->_subject;
	}
	public function setProcessed($processed){
		$this->_processed = (boolean) $processed;
	}
	public function isProcessed(){
		return $this->_processed;
	}
	public function setReturnValue($value){
		$this->_value = $value;
	}
	public function getReturnValue(){
		return $this->_value;
	}
}