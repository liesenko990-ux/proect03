<?php
include 'template/head.php';
include 'template/bd.php';
session_start();
if (!empty($_SESSION['role'])) {
    $role = ($_SESSION['role']);

    if ($role == 'Воспитатель') {
        include 'template/nav_vospitatel.php';
    } if ($role == 'Медицинская') {
        include 'template/nav_med.php'; 
    }
     if ($role == 'Руководитель ') {
        include 'template/nav_rykov.php';
}
}
else {
  
    include 'template/nav.php';
}

?>
 <h2>Добро пожаловать в наш сказочный мир детства!</h2>
        <p>Детский сад № 13 «Сказочный мир» — это уютный уголок, где каждый малыш чувствует себя комфортно и защищенно. Мы создаем атмосферу тепла и заботы, где развитие проходит весело и интересно.</p>

        <article>
            <h3>Наша миссия</h3>
            <p>Мы стремимся раскрыть потенциал каждого ребенка, развиваем творческие способности и помогаем расти уверенными и счастливыми.</p>
        </article>

        <article>
            <h3>Почему выбирают нас?</h3>
            <ul>
                <li>Опытные педагоги</li>
                <li>Безопасная игровая площадка</li>
                <li>Индивидуальный подход</li>
                <li>Современная развивающая среда</li>
            </ul>
        </article>
    </section>
    <?php
    include 'template/footer.php';
    ?>