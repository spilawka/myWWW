<?php
$counterPath = "files/count.txt";
$cookieName1 = "lastVisit";
$cookieName2 = "lastIP";
//Timeout ciasteczka dokładnie na 1 dzien;
$cookieTimeout = time() + 86400;

$cnt = 0;

$connection = $_SERVER["REMOTE_ADDR"];

if (!isset($_COOKIE[$cookieName1]) || !isset($_COOKIE[$cookieName2])) {
    $now = getMyDate();
    setcookie($cookieName1,$now,$cookieTimeout);
    setcookie($cookieName2,$connection,$cookieTimeout);
    increaseCounter();
}
else {
    $date = $_COOKIE[$cookieName1];
    $now = getMyDate();
    $lastConnection = $_COOKIE[$cookieName2];

    if ($date != $now || $lastConnection != $connection) {
        //ustaw nowe ciasteczko
        setcookie($cookieName1,$now,$cookieTimeout);
        setcookie($cookieName2,$connection,$cookieTimeout);
        
        increaseCounter();
    }
    else {
        //juz odwiedzono w danym dniu
        readCounter();
    }
}

/**Funkcja zwraca date w podanym formacie */
function getMyDate() {
    date_default_timezone_set("CET");
    //return date("d.m.y G:i.s");
    return date("d.m.y");
}

/** Funkcja zwieksza ilosc odwiedzin w pliku 
 * okreslonym w $counterPath
 * @return ilosc odwiedzin
 */
function increaseCounter() {
    global $counterPath;
    global $cnt;

    readCounter();

    $cnt++;

    $counterFile = fopen($counterPath,'w');
    fwrite($counterFile,$cnt);
    fclose($counterFile);
}

function readCounter() {
    global $cnt;
    global $counterPath;

    if (!file_exists($counterPath)) {
        $counterFile = fopen($counterPath, 'w');
        fwrite($counterFile,'0');
        fclose($counterFile);
    }
    $counterFile = fopen($counterPath, 'r');
    $cnt = (int) fread($counterFile,filesize($counterPath));
    fclose($counterFile);
}
?>