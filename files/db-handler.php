<?php

$dbConn;

function getDatabaseConnection() {
    global $dbConn;

    if (isset($dbConn)) return $dbConn;

    $serv = "localhost";
    $username = "www";
    $password = "www";
    $dbName = "www";
    try {
        $dbConn = new PDO("mysql:host=$serv;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex) {
        echo "Blad" . $ex->getMessage();
    }
    return $dbConn;
}

function verifyLogin ($login, $pwd) {
    $dbConn = getDatabaseConnection();

    try {
        $stmt = $dbConn->prepare("SELECT pwd FROM data WHERE username=?");
        $stmt->execute([$login]);

        $res = $stmt->fetch();
        if (!isset($res["pwd"])) return false;

        if ($res["pwd"] == $pwd) return true;
        return false;
    }
    catch (PDOException $ex) {
        echo "Blad" . $ex->getMessage();
        return false;
    }
}

function addUser ($login, $pwd) {
    $dbConn = getDatabaseConnection();

    try {
        $stmt = $dbConn->prepare("INSERT INTO data VALUES (?,?)");
        $stmt->execute([$login,$pwd]);
    }
    catch (PDOException $ex) {
        echo "Blad" . $ex->getMessage();
        return false;
    }
    return true;
}

function stripString($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function addComment($comment, $id, $user) {
    $dbConn = getDatabaseConnection();

    try {
        $stmt = $dbConn->prepare("INSERT INTO comments (msg,num,usr) VALUES (?,?,?)");
        $stmt->execute([$comment,$id,$user]);
    }
    catch (PDOException $ex) {
        echo "Blad" . $ex->getMessage();
        return false;
    }
    return true;
}

function fetchComments($id) {
    $dbConn = getDatabaseConnection();

    try {
        $stmt = $dbConn->prepare("SELECT * FROM comments WHERE num = ? ORDER BY id DESC");
        $stmt->execute([$id]);
        $res = $stmt->fetchAll();

        return $res;
    }
    catch (PDOException $ex) {
        echo "Blad" . $ex->getMessage();
        return null;
    }
}

function fetchAndDisplayComments($project) {
    $arr = fetchComments($project);
    foreach($arr as $ele) {
        echo '<p id="comment">[' . $ele["usr"] . ']: ' . $ele["msg"] . '</p>';
    }
}

?>