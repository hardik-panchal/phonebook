<?php

/**
 * Phone-Book Class
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package phonebook
 * @since August 25, 2013
 * 
 */
class Phonebook {

    public function __construct() {
	
    }

    /**
     * Function to add phonebook
     * @param String $fields
     * @return booleen 
     */
    public static function add($fields) {
	// Escape array for sql hijacking prevention

	$data = _escapeArray($fields);
	$map = array();
	$map['name'] = 'name';
	$map['phone'] = 'phone';
	$map['notes'] = 'notes';
	$ds = _bindArray($data, $map);
	return qi('phonebook', $ds);
    }

    /**
     * Function to update phonebook
     * @param String $fields
     * @param String $id
     * @return booleean 
     */
    public static function update($fields, $id) {
	// Escape array for sql hijacking prevention
	$data = _escapeArray($fields);
	$map = array();
	$map['name'] = 'name';
	$map['phone'] = 'phone';
	$map['notes'] = 'notes';
	$ds = _bindArray($data, $map);
	$condition = " id = " . $id;
	return qu('phonebook', $ds, $condition);
    }

    /**
     * Function retrieve all the phonebook data
     * @param integer $id
     * @return array 
     */
    public static function get_all_phones($id='') {
	$id = _escape($id);
	$where = $id != '' ? " AND id = " . $id : "";
	return q(" select * from phonebook where 1=1 " . $where . " order by modified_at DESC ");
    }

    //Delete Phone-Book Record
    public static function delete($id) {
	$id = _escape($id);
	return qd("phonebook", " id = '{$id}' ");
    }

    //Get Phone-Book Detail By ID 
    public static function get_phone_detail($id) {
	return qs(sprintf("select * from phonebook where id = '%f'", $id));
    }

    //Check Phone-Book Record Available Or Not
    public static function duplicate_phone($phone, $id='') {
	$id = _escape($id);
	$id_con = $id != '' ? " AND id != " . $id : '';

	$res = qs(sprintf("select * from phonebook where `phone` = '%s'" . $id_con, $phone));
	return empty($res) ? 0 : $res;
    }

}

?>