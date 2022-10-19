<?php
require_once("form.php");

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $formOper = $_POST["operation"];

    if ($formOper == "Comment") {
        if (($_SERVER["REQUEST_METHOD"] == "POST")) {
            if (!isset($_SESSION["user"])) {
                //error - koniec sesji
            }
            else {
                $msg = stripString($_POST["comment"]);
                $projectId = $_POST["projectId"];
                $user = $_SESSION["user"];
                addComment($msg,$projectId,$user);
            }
        }
        header("Location: ../Projekty.php");
    }
}