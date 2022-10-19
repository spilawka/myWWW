<?php
require_once("form.php");

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $formOper = $_POST["operation"];

    if ($formOper == "Logout") {
        logOut(false);
        header("Location: ../MojaStrona.php");
    }
    else if ($formOper == "Comment") {
        if (($_SERVER["REQUEST_METHOD"] == "POST")) {
            if (!isset($_SESSION["user"])) {
                //error - koniec sesji
            }
            else {
                $msg = stripString($_POST["comment"]);
                if ($msg != "") {
                    $projectId = $_POST["projectId"];
                    $user = $_SESSION["user"];
                    addComment($msg,$projectId,$user);
                }
            }
        }
        header("Location: ../Projekty.php");
    }
    else if ($formOper == "LoginRegister") {
        $formPwd = stripString($_POST["pwd"]);
        $formUser = stripString($_POST["user"]);
        $formType = stripString($_POST["type"]);

	    if ($formPwd != "" && $formUser != "") {
            if ($formType == "login") {
                if (verifyLogin($formUser,$formPwd)) {
                    $_SESSION["START"] = time();
                    $_SESSION["user"] = $formUser; 
                }
                else {
                    $_SESSION["errorMsg"] = "Błąd logowania";
                }
            }
            else if ($formType == "register") {
                if (addUser($formUser,$formPwd)) {
                    $_SESSION["errorMsg"] = "Utworzono użytkownika " . $formUser;
                }
                else {
                    $_SESSION["errorMsg"] = "Błąd przy tworzeniu użytkownika";
                }
            }
        }

        header("Location: ../MojaStrona.php");
    }
    
}

?>