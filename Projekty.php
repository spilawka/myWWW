<?php require_once('files/visits.php'); ?>
<?php require_once('files/form.php') ?>
<?php require_once('files/comment-generator.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php $head = file_get_contents('files/webFragments/head.txt'); echo $head;?>
<body>
    <?php require_once('files/webFragments/header.php'); ?>
    
    <main id="main" class="main-container border">
        <?php require_once('files/webFragments/sidebar.php'); generateSidebar("projects"); ?>
        <article id="content">
            <!-- Projekt 1 -->
            <section class="project">
                <header>
                    <img class="project-img" src="files/img/Projekt1.jpg" alt="Projekt 1" width="100" height="50">
                    <h2>7-bit Displayer</h2>
                </header>
                <h4> Wyswietlacz liczb 7-bitowych z zakresu 0-99</h4>
                <p>Układ wykorzystuje jedynie bramki logiczne do wyświetlania pożądanych liczb. Na razie realizowana jest wersja "naiwna", wykorzysująca przekształcenia algebrą Boola siatek Karnaugha.</p>
                <p>W planach przewiduję również alternatywną wersję, wykorzystującą własny konwerter BCD podłączony do dwóch niezależnych wyświetlaczy 0-9.</p>
                <section class="image-container-single">
                    <img src="files/img/P1.jpg" alt="Failed to load image">
                    <h3>Część układu odpowiedzialna za jedną z kresek</h3>
                </section>
                <?php generateCommentInput(1); ?>
                <?php fetchAndDisplayComments(1);?>
            </section>
            <!-- Projekt 2 -->
            <section class="project">
                <header>
                    <h2>Kuuri</h2>
                </header>
                <h4>Moja pierwsza i najbardziej chaotyczna gra.</h4>
                <p>Stworzona w liceum, kiedy nie miałem jeszcze pojęcia czym jest struktura w języku C. Kuuri to tekstowa gra RPG, zabierająca gracza w średniowieczną rzeczywistość. Gra zawierała prosty, turowy system walki, opcje rozwoju postaci, klasy, losowo generowany świat, historie poboczne dość smutnego świata Kuuri, a nawer minigrę inspirowaną "Gwintem".</p>
                <p>Kod o długości 3800 linijek nie jest idealny. Ba, powiedziałbym że jest wręcz okropny i niesamowicie nieczytelny.</p>
                <p>Jednak nie chodzi mi w tym projekcie o poprawność czy idealność. Wciąż jestem pod własnym wrażeniem że zabrałem się za tak ambitny projekt z naprawdę podstawową wiedzą programistyczną.</p>
                <section class="image-container-single">
                    <img src="files/img/P2.jpg" alt="Failed to load image">
                    <h3>Fragment mechanizmu wyboru we wspomnianej minigrze</h3>
                </section>
                <?php generateCommentInput(2); ?>
                <?php fetchAndDisplayComments(2);?>
            </section>
            <section class="project">
                <header>
                    <h2>Stonka Database</h2>
                </header>
                <h4>Prosta aplikacja obsługująca bazę danych</h4>
                <p>Program napisany na potrzeby listy zadań z trzeciego semestru na przedmiocie Technologia Programowania. Jest on napisany na potrzeby obsługi (fikcyjnego) sklepu spożywczego o nazwie Stonka.</p>
                <p>Aplikacja zawiera możliwość tworzenia własnych (dynamicznych) zapytań SQL na bazie danych, z ograniczeniem do zezwoleń danego użytkownika</p>
                <section class="image-container-single">
                    <img src="files/img/Stonka.jpg" alt="Failed to load image">
                    <h3>Mechanizm dodawania filtrów do zapytania SQL</h3>
                </section>
                <?php generateCommentInput(3); ?>
                <?php fetchAndDisplayComments(3);?>
            </section>
       </article>
    </main>

    <?php $footer = file_get_contents('files/webFragments/footer.txt'); echo $footer;?>
</body>
</html>