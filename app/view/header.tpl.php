<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=$absoluteURL?>/css/reset.css">
    <link rel="stylesheet" href="<?=$absoluteURL?>/css/style.css">


</head>
<body>
<header>
    <div class="logo">
        <div class="brand">
            <h1><a href="<?= $absoluteURL?>">
                    Nuance de douceurs
                </a>
            </h1>
        </div>
        <div class="button">
            <button id="buttonNav">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>



    </div>

    <nav class="display">
        <div class="bg"> </div>
        <div class="navigations">



            <?php foreach($viewData['types'] as $type) :?>
                <h3><a href="<?=$router->generate('prestationDetail',['id'=>$type->getId()])?>"><?= $type->getName() ?></a></h3>
            <?php endforeach;?>

            <h3><a href="#">Contact</a></h3>

        </div>
    </nav>
<div class="slider">


    <div class="slider_button">
        <div class="left">

            <p ><i class="fa-solid fa-chevron-left"></i></p>
        </div>
        <div class="right">

            <p ><i class="fa-solid fa-chevron-right"></i></p>
        </div>

    </div>

    <?php foreach($viewData['types'] as $type): ?>
        <?php if ($type->getPicture() !== null):?>
            <h3 class="slider-title display"> <a href="#"><?=$type->getName()?> </a> </h3>
            <img src="<?= $absoluteURL?>/<?=$type->getPicture()?>" alt="img" class="display img-slider">
            <div class="box-slider-bar">

                <?php for ($i=0; $i<count($viewData['types'])-1;$i++):?>
                    <hr class="bar ">
                <?php endfor;?>
            </div>
        <?php endif;?>

    <?php endforeach;?>




</div>

    </main>
</header>

</body>

