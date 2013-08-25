<?php

/**
 * Admin side Phone-Book List file
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package phonebook
 * @since August 25, 2013
 * 
 */
//Phone-Book Update
if (isset($_REQUEST['fields']['phone_id']) && $_REQUEST['fields']['phone_id'] > 0) {
    $phone_check = Phonebook::duplicate_phone($_REQUEST['fields']['phone'], $_REQUEST['fields']['phone_id']);
    if ($phone_check == 0) {
	$edit_phone_id = Phonebook::update($_REQUEST['fields'], $_REQUEST['fields']['phone_id']);
	if ($edit_phone_id) {
	    unset($_REQUEST['fields']);
	    $greetings = "Phone number updated successfully";
	} else {
	    $error = "Unable to update phone number";
	}
    } else {
	$error = "Phone number already available";
    }
    //json_die(true,$data);
}

//Phone-Book Add
if ($_REQUEST['fields']['phone'] && $_REQUEST['fields']['phone_id'] == '') {
    $phone_check = Phonebook::duplicate_phone($_REQUEST['fields']['phone']);
    if ($phone_check == 0) {
	$new_phone_id = Phonebook::add($_REQUEST['fields']);
	if ($new_phone_id) {
	    unset($_REQUEST['fields']);
	    $greetings = "New phone number added successfully";
	} else {
	    $error = "Unable to add phone number";
	}
    } else {
	$error = "Phone number already available";
    }
}

//Get Phone-Book Detail at Edit Time
if ($_REQUEST['editContent']) {
    $id = mysql_real_escape_string($_REQUEST['editContent']);
    $data = Phonebook::get_phone_detail($id);
    json_die(true, $data);
}

//Phone-Book Delete
if ($_REQUEST['deleteContent']) {
    $affected_rows = Phonebook::delete($_REQUEST['deleteContent']);
    json_die($affected_rows ? true : false);
}

$phone_books = Phonebook::get_all_phones();  //Get List Of All Phone-Book List
$bc[] = array('text' => 'Phone-Books');
$jsInclude = "phonebook.js.php";
_cg("page_title", "Phone-Books");
?>
