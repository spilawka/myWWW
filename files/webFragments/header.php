<?php
echo '<header id="banner" class="main-container border">';
echo '	<img id="banner-img" src="files/img/prof.jpg" alt="Failed to load image" width="100" height="100">';
echo '	<section id="banner-content">';
echo '	    <h1>Szymon Pilawka</h1>';
if (isset($_SESSION["user"])) {
    	
	echo '<form id="logout-form" method="post" action="files/form-handler.php">';
    echo '<p style="padding-right: 20px";>Zalogowano jako: ' . $_SESSION["user"] . '</p>';
	echo '<input type="hidden" name="operation" value="Logout"/>';
	echo '<input type="submit" value="Wyloguj"/>';
}
else {
    echo '<form id="login-form" method="post" action="files/form-handler.php">';
    echo '<input type="text" name="user" placeholder="Login">';
    echo '<input type="password" name="pwd" placeholder="Hasło">';
	echo '<input type="hidden" name="operation" value="LoginRegister"/>';
    echo '<select name="type" size="1">';
    echo '<option value="register">Rejestracja</option>';
    echo '<option value="login" selected="login">Login</option>';
    echo '</select>';
    echo '<input type="submit" value="Wyślij"/>';
}
if (isset($_SESSION["errorMsg"])) {
    echo '	<p id = "error-msg" style="padding-right: 20px";>' . $_SESSION["errorMsg"] . '</p>';
    unset($_SESSION["errorMsg"]);
}
echo '	<p id="visits" style="padding-right: 20px";>liczba wizyt: ' . $cnt . '</p>';
echo '	</section>';
echo '</header>';
?>