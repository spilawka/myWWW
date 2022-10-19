<?php
include_once("db-handler.php");
session_start();

$IS_SESSION_ACTIVE = false;

if (isset($_SESSION["START"])) {
    $IS_SESSION_ACTIVE = true;
}

if ($IS_SESSION_ACTIVE == true)  {
    checkSessionTimeout();
}

function checkSessionTimeout() {
    $len = time() - $_SESSION["START"];
    if ($len > 5){
        logOut(true);
        return false;
    }
    return true;
}

function logOut($isErr) {
    $IS_SESSION_ACTIVE = false;
    $_SESSION = array();
    session_unset();
    session_destroy();
    if ($isErr)
        $_SESSION["errorMsg"] = "Koniec sesji!";
    else {
        $_SESSION["errorMsg"] = "Wylogowano!";
    }
}

?>