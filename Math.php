<?php require_once('files/visits.php'); ?>
<?php require_once('files/form.php') ?>
<!DOCTYPE html>
<html lang="pl">
<?php $head = file_get_contents('files/webFragments/head.txt'); echo $head;?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<body>
    <?php require_once('files/webFragments/header.php'); ?>
    <main id="main" class="main-container border">
        <?php require_once('files/webFragments/sidebar.php'); generateSidebar("math"); ?>
        <article id="content">
            <section class="about">
                <header>
                    <h2>Math</h2>
                </header>
                <p>Wzór oraz trójkątne uporządkowanie współczynników dwumianowych przypisuje się często Blaise’owi Pascalowi, który opisał je w XVII wieku, ale były one znane wielu matematykom żyjącym przed nim.</p>
                <p>Dla dowolnego \(x\), \(y\) zachodzi:
                $$\left(x + y\right)^{n} = \sum_{k=0}^n {n\choose k} x^{n-k} y^{k} $$
                </p>
                <p>Interpolacja Lagrange'a</p>
                <p>Mając dane \(t\) różnych punktów \({x_i,y_i}\) nieznanego wielomianu \(f\)
                stopnia mniejszego od \(t\) możemy policzyć jego współczynniki korzystając ze wzoru:
                $$f(x) = \sum_{i=1}^t \Big(y_i \prod_{{i\leq j \leq t}, {j \ne i}} \frac{x - x_j}{x_i - x_j}\mod p \Big)
                $$
                </p>
            </section>
        </article>

    </main>
    <?php $footer = file_get_contents('files/webFragments/footer.txt'); echo $footer;?>
</body>
</html>
