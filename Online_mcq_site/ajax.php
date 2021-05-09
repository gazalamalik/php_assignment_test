<?php 

require "DataCon.php";
require "classes/Chat.php";
require "classes/ChatBase.php";
require "classes/ChatLine.php";
require "classes/ChatUser.php";

session_name('webchat');
session_start();

if(get_magic_quotes_gpc()){

    // If magic quotes is enabled, strip the extra slashes
    array_walk_recursive($_GET,create_function('&$v,$k','$v = stripslashes($v);'));
    array_walk_recursive($_POST,create_function('&$v,$k','$v = stripslashes($v);'));
}

try{

    // Connecting to the database
    DB::init($dbOptions);

    $response = array();

    // Handling the supported actions:

    switch($_GET['action']){

        case 'login':
            $response = Chat::login($_POST['name'],$_POST['email']);
        break;

        case 'checkLogged':
            $response = Chat::checkLogged();
        break;

        case 'logout':
            $response = Chat::logout();
        break;

        case 'submitChat':
            $response = Chat::submitChat($_POST['chatText']);
        break;

        case 'getUsers':
            $response = Chat::getUsers();
        break;

        case 'getChats':
            $response = Chat::getChats($_GET['lastID']);
        break;

        default:
            throw new Exception('Wrong action');
    }

    echo json_encode($response);
}
catch(Exception $e){
    die(json_encode(array('error' => $e->getMessage())));
}

?>