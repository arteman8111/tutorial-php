<?require("header.php")?>
<?
$vladimir = include("assets/human.php");
$links__header = [
    "home" => "Практикум по PHP",
    "PHTML" => "Отрисовка HTML с PHP и разные задачи",
    "OOP" => "Объектно-ориентированное программирование",
    "FORM" => "Запросы POST/GET",
    "Array" => "Массивы разные",
    "Object" => "Работа с объектами",
    "Form" => "Работа с формами",
    "SQL_Connect" => "Коннектер SQL для БД",
    "AJAX" => "AJAX-запросы",
    "Another" => "Другое"
];
$roadmap = [];
?>
<main role="main">
    <div class="container">

        <section class="tutorial">
            
            <!-- Страницы параметров -->
            <?if (!empty($_GET['link'])) {?>
                <!-- ALL TITLES -->
                <?foreach($links as $kk => $vv) {
                    if ($_GET["link"] != $vv) continue; 
                    ?>
                    <h1 class="tutorial__title title margin-top"><?=$links__header[$vv]?></h1>
                <?}?>
                
                <!-- PHTML -->
                <?if ($_GET["link"] == "PHTML"){?>
                    Тут будет PHTML...
                    <?include("components/card.php");?>                            
                <?}?>
                    
                <!-- OOP -->
                <?if ($_GET["link"] == "OOP"){?>
                    Тут будет ООП...
                    <pre><?var_export($vladimir)?></pre>
                    <block><?echo $vladimir->getPassportInfo();?></block>
                <?}?>

                <!-- FORM -->
                <?if ($_GET["link"] == "FORM"){?>
                    <h2 class="subtitle">Тут будет про form, обработку запросов GET/POST</h2>
                    
                <?}?>
                        
            <?}?>
                        
                <!-- Домашняя страница  -->
            <?if (empty($_GET['link'])) {?>
                <h1 class="tutorial__title title margin-top">Роудмап по изучению PHP</h1>
                <!-- Для вывода кода -->
                <pre>$links: <?var_export($links)?></pre>
                <pre>$links__header: <?var_export($links__header)?></pre>
                <?}?>

        </section>

    </div>
</main>
<?require("footer.php")?>