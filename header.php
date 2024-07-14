<?$links = include("data/links.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/main.css">
    <title>LANDING CLASSROOM PHP</title>
</head>

<body>

    <div class="wrapper">

        <header class="main-header">
            <div class="container header-block">
                <img src="img/header-logo.png" alt="Логотип ПХП" class="logo" width="150" height="50">
                <ul class="navigation list">
                    <?foreach($links as $kk => $vv) {
                    $path = "/?link=".$vv;
                    if ($vv == "home") $path = "/";
                    ?>
                    <li class="navigation__item">
                        <a href=<?=$path?> class="navigation__link link"><?=$vv?></a>
                    </li>
                    <?}?>
                </ul>
            </div>
        </header>
