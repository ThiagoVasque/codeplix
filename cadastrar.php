<?php include "cabecalho.php"?>

<body>
    <nav class="nav-extended">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1><a href ="galeria.php">Codeflix</a></h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent deep-orange darken-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <!-- Código acima é réplica do cabeçalho-->

    <!-- Fomulario -->
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content ">
                    <span class="card-title">Cadastrar Filme</span>

                    <!-- Inserção do Titulo do Filme-->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" require>
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>
                    <!-- Inserção da Sinopse do Filme-->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Inserção da Nota do Filme-->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                            <label for="nota">Nota do Filme</label>
                        </div>
                    </div>
                    <!-- Inserir a capa do filme-->
                    <div class="file-field input-field">
                        <div class="btn orange darken-4">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <!-- Botões de cadastro e cancelamento -->
                    <div class="card-action">
                        <a class="waves-effect waves-light btn grey darken-1" href="galeria.php">Cancelar</a>
                        <a href="#" class="waves-effect waves-light btn green">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>