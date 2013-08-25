<?php
$auth_pages = array();
$auth_pages[] = "home";
$auth_pages[] = "phonebook";


if ($_REQUEST['logout']) {
        User::killSession();
}

_auth_url($auth_pages, "login");
?>