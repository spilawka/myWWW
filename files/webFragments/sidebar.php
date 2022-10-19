<?php
function generateSidebar($currPage) {
	echo '<aside id="sidebar"><nav><button id="hamburger" type="button" onclick="displayMenu()"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Hamburger_icon.svg/1200px-Hamburger_icon.svg.png"/></button>';

	if ($currPage == "main") {
		echo '<a class="hamburger-link" id="current-link" href="#content">O mnie</a>';
	}
	else {
		echo '<a class="hamburger-link" href="../MojaStrona.php">O mnie</a>';
	}

	if ($currPage == "projects") {
		echo '<a class="hamburger-link" id="current-link" href="#content">Projekty</a>';
	}
	else {
		echo '<a class="hamburger-link" href="Projekty.php">Projekty</a>';
	}

	if ($currPage == "hobby") {
		echo '<a class="hamburger-link" id="current-link" href="#content">Hobby</a>';
	}
	else {
		echo '<a class="hamburger-link" href="Hobby.php">Hobby</a>';
	}

	if ($currPage == "interests") {
		echo '<a class="hamburger-link" id="current-link" href="#content">Zainteresowania</a>';
	}
	else {
		echo '<a class="hamburger-link" href="Zainteresowania.php">Zainteresowania</a>';
	}

	if ($currPage == "math") {
		echo '<a class="hamburger-link" id="current-link" href="#content">Math</a>';
	}
	else {
		echo '<a class="hamburger-link" href="Math.php">Math</a>';
	}

	echo '<a class="hamburger-link" id="last-link"  href="#kontakt">Kontakt</a></nav></aside>';
}

?>
