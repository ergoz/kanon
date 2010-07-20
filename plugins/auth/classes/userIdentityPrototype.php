<?php
class userIdentityPrototype implements IUserIdentity{
	protected $_isAuthenticated = false;
	protected $_user = null;
	protected $_identityModel = null;
	/**
	 * @return boolean whether the identity is valid
	 */
	public function isAuthenticated(){
		return $this->_isAuthenticated;
	}
}