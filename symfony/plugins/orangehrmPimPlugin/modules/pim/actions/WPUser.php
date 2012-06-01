<?php
class WPUser
{
	 var $id=1;
	var $name="test";
	function __construct($userinfo = array())
	{
	}
	
	 function createWPUser($user_name=NULL, $passwd=NULL, $email=NULL) {
		//if (is_null($user_name) || is_null($passwd) || is_null($email))
	    $user_id = username_exists( $user_name );
		if ( !$user_id ) {
			$user_id = wp_create_user( $user_name, $passwd, $email );
			return $user_id;
		}else {
			return -1;
		}		
		
	}
	
	 function updateWPUserInfo($user_id=NULL, &$posts=array()) {
	 	
	 	$userinfo["ID"] = $user_id;
	 	$userinfo["first_name"] = $posts["firstName"];
	 	$userinfo["last_name"] = $posts["lastName"];
	 	$userinfo["user_login"] = $posts["user_name]"];
	 	$userinfo["user_pass"] = $posts["user_password"];
	 	$userinfo["user_email"] = $posts["employeeEmail"];
	 	
		if (!is_null($user_id)) {
			wp_insert_user( $userinfo );
		}	
		
	}
	
}