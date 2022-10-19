<?php require_once('files/visits.php'); ?>
<?php require_once('files/form.php') ?>
<!DOCTYPE html>
<html lang="pl">
<?php $head = file_get_contents('files/webFragments/head.txt'); echo $head;?>
<body>
    <?php require_once('files/webFragments/header.php'); ?>
    
    <main id="main" class="main-container border">
        <?php require_once('files/webFragments/sidebar.php'); generateSidebar("interests"); ?>
        
	<article id="content">
            <section class="interest">
                <header>
                    <h2>Programowanie niskopoziomowe</h2>
                </header>
                <p>Optymalizacja kodu dzięki operacjom niskopoziomowych (operatory logiczne, przesunięcia bitowe, obrót bitów, manipulacja rejestrami) </p>
            </section>
            <section class="interest">
                <header>
                    <h2>Projektowanie mikroukładów</h2>
                </header>
            <p>Tworzenie prostych układów o różnych zadaniach za pomocą bramek logicznych.</p>
            </section>
            <section class="interest">
                <header>
                    <h2>Porównania skuteczności algorytmów</h2>
                </header>
            <p>Przeprowadzanie statystyk dla algorytmów o podobnych zadaniach. Szacowanie złożoności obliczeniowej. Doświadczalne testy mające na celu uzyskanie porównania stałych złożoności obliczeniowej algorytmów.</p>
            </section>
        </article>
    </main>

    <?php $footer = file_get_contents('files/webFragments/footer.txt'); echo $footer;?>
</body>
</html>