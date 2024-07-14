<?
$feesh = include("data/feesh.php")
?>
<section class="card-block margin-top">
    <?foreach($feesh as $card){?>
        <div class="card">
            <h2 class="title card__title">
                <?=$card["param1"]?>
            </h2>
            <ul class="card__list list">
                <li class="card__item"><?=$card["param2"]?></li>
                <li class="card__item"><?=$card["param3"]?></li>
                <li class="card__item"><?=$card["param4"]?></li>
                <li class="card__item"><?=$card["param5"]?></li>
            </ul>
        </div>
    <?}?>
</section>