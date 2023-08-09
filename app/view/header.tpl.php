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
            <h2><a href="<?= $absoluteURL?>">
                    <i class="fa-solid fa-house"></i>Home
                </a>
            </h2>
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
    <div class="left">

    <p ><i class="fa-solid fa-chevron-left"></i></p>
    </div>
    <?php for($i=0;$i<1;$i++): ?>
        <img src="<?= $absoluteURL?>/<?=$viewData['types'][$i]->getPicture()?>" alt="img">
    <?php endfor;?>
    </main>
</header>

</body>

