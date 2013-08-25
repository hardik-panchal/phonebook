<?php

/**
 * Admin side Login file
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package phonebook
 * @since August 25, 2013
 * 
 */
if (!isset($_SESSION['user'])) {    // CHECK ADMIN LOGIN
    if ($_REQUEST['username']) {
	$user_name = _escape($_REQUEST['username']);
	$password = _escape($_REQUEST['password']);

	if (User::doLogin($user_name, $password)) {
	    User::setSession($user_name);
	    if (isset($_SESSION['user']['user_type']) && $_SESSION['user']['user_type'] == 'general_user') {
		_R(lr('home'));
	    } else {
		_R(lr('home'));
	    }
	} else {
	    $error = "Invalid Login";
	}
    }

    $no_visible_elements = true;

    $jsInclude = "login.js.php";
    _cg("page_title", "Login");
} else {
    _R(lr('home'));
}
?>