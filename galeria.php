<?php include "cabecalho.php"?>

<?php

$filme1 = [
  "titulo"=>"Interestelar", 
  "nota"=>9.4,
  "sinopse"=>"As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de
  verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da
  espécie. Cooper é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver
  os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.",
  "poster"=>"https://www.themoviedb.org/t/p/w600_and_h900_bestv2/nCbkOyOMTEwlEV0LtCOvCnwEONA.jpg"];

  
  $filme2 = [
    "titulo"=>"Liga da Justiça de Zack Snyder", 
    "nota"=>7.5,
    "sinopse"=>"Determinado a garantir que o sacrifício final do Superman não foi em vão, Bruce Wayne alinha forças com Diana Prince com planos de recrutar uma equipe de metahumanos para proteger o mundo de uma ameaça de proporções catastróficas que se aproxima.",
    "poster"=>"https://www.themoviedb.org/t/p/original/ArWn6gCi61b3b3hclD2L0LOk66k.jpg"];


  $filmes = [$filme1, $filme2];    
?>

<body>

    <nav class="nav-extended">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Codeflix</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent deep-orange darken-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
      <?php foreach($filmes as $filme) : ?>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="<?= $filme["poster"] ?>">
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i>
                    </a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i> <?= $filme["nota"] ?>
                    </p>
                    <span class="card-title"><?= $filme["titulo"] ?></span>
                    <p><?= $filme["sinopse"] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>

</body>

</html>