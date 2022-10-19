<?php require_once('files/visits.php'); ?>
<?php require_once('files/form.php') ?>
<!DOCTYPE html>
<html lang="pl">
<?php $head = file_get_contents('files/webFragments/head.txt'); echo $head;?>
<body>
    <?php require_once('files/webFragments/header.php'); ?>
     
    <main id="main" class="main-container border">
        <?php require_once('files/webFragments/sidebar.php'); generateSidebar("hobby"); ?>
        <article id="content">
            <section class="hobby">
                <header>
                    <h2>Formuła 1</h2>
                </header> 
                <h4>Pasja najszybszym motorsportem na świecie</h4>
                <p>Powyższy motorsport śledzę już od najmłodszych lat, a konkretniej od 6 roku życia. Wpierw moje zainteresowanie płynęło z samego spektaklu wyścigu, jednak wraz z upływem czasu zacząłem odkrywać ten sport od zupełnie nowej strony.</p>
                <p>Zaimponowała mi strona logistyczna sportu jak i organizacja poszczególnych zespołów. Ciągły rozwój oraz nacisk ze strony rywali. Znaczenie każdego członka kilkuset-osobowego zespołu w ogólnym aspekcie spektaklu.</p>
                <p>Ostatnio stałem się fanem zespołu Alpha Tauri (byłe Toro Rosso). Włoski zespół imponuje mi ciągłą chęcią walki oraz rozsądnym podejściem do sportu.</p>
                <section class="image-container">
                    <img src="files/img/F1_1.jpg" alt="Failed to load image">
                    <img class="hide-portrait" src="files/img/F1_2.jpg" alt="Failed to load image">
                    <img class="hide-portrait" src="files/img/F1_3.jpg" alt="Failed to load image">
                </section>
            </section>
            <section class="hobby">
                <header>
                    <h2>Synteza dźwięków (muzyka)</h2>
                </header>
                <h4>Nowe kombinacje częstotliwości</h4>
                <p>Pojęciem syntezy dźwięku zacząłem się interesować w kwietniu 2020, w trakcie pierwszego "lockdownu". Dodatkowo, zainspirował mnie do tego mój ulubiony artysta muzyczny - Austin Colins. Zawsze byłem pod wrażeniem dźwięków syntezowanych przez amerykanina, oraz sposobu łączenia nieziemskich dźwięków w muzyczną całość.</p>
                <p>W swoich dźwiękach kieruję się unikalnością. Nie kieruję się trendami, wolę iść pod prąd i tworzyć coś nowego.</p>
                <p>Synteza sprawia mi frajdę. Jeśli nic z tego nie wyjdzie to trudno, mam inne rzeczy do roboty.</p>
            </section>
            <section class="hobby">
                <header>
                    <h2>Mapowanie w grach komputerowych</h2>
                </header>  
                <h4>Tworzenie własnej rzeczywistości</h4>
                <p>Od dawna interesuję się tworzeniem map/tras w grach komputerowych. Bardzo cenię gry komputerowe, zawierające własne edytory zawartości, przykładem takiej gry jest Trackmania w której tworzenie nowych tras sprawia mi sporą przyjemność.</p>
                <p>Dzięki możliwościom edytorów można przenieść swoje wyobrażenia do świata gry, będącego pewnego rodzaju środkiem medialnym w tej sytuacji.</p>
                <section class="image-container">
                    <img src="files/img/TM1.jpg" alt="Failed to load image">
                    <img class="hide-portrait" src="files/img/TM2.jpg" alt="Failed to load image">
                    <img class="hide-portrait" src="files/img/TM3.jpg" alt="Failed to load image">
                </section>
            </section>
        </article>
    </main>

    <?php $footer = file_get_contents('files/webFragments/footer.txt'); echo $footer;?>
</body>
</html>