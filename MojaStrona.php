<?php require_once('files/visits.php'); ?>
<?php require_once('files/form.php') ?>
<!DOCTYPE html>
<html lang="pl">
<?php $head = file_get_contents('files/webFragments/head.txt'); echo $head;?>
<body>
    <?php require_once('files/webFragments/header.php'); ?>
    <main id="main" class="main-container border">
        <?php require_once('files/webFragments/sidebar.php'); generateSidebar("main"); ?>
        <article id="content">
            <section class="about">
                <header>
                    <h2>O mnie</h2>
                </header>
                <p>Mam na imię Szymon, urodziłem się w Szczecinie gdzie spędziłem pierwsze 18 lat mojego życia.</p>
                <p>Aktualnie studiuję na kierunku Informatyka Algorytmiczna na Politechnice Wrocławskiej.</p>
                <p>W przyszłości chciałbym posiadać dobrze płatną pracę w zakresie informatyki oraz mieć czas na inne zainteresowania: aktualne lub takie których jeszcze nie znam.</p>
            </section>
        </article>
        
    </main>
    <?php $footer = file_get_contents('files/webFragments/footer.txt'); echo $footer;?>
</body>
</html>