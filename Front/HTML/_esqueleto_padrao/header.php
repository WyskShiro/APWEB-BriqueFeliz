<!--
--------- Cabeçalho padrão nas páginas da aplicação 
-->

    <nav class="navbar navbar-expand-lg navbar-light " style="background:#60267D">
        <a class="navbar-brand text-center" style="background:#60267D" href="index.php?#">
        <img src="./Recursos/logo-brinque-feliz.png" class="img-fluid mx-auto " style="width:55%; backgroud:#60267D"  alt="Página Inicial">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav text-white mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" style="color:#FFFF00; font-weight:bold;" href="#">Home <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#FFFF00; font-weight:bold;" href="#">Ajuda</a>
                </li>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" style="border-radius: 6px ;" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-warning my-2 my-sm-0" style="color: #60267D;" type="submit"><strong>Pesquisar</strong></button>
                </form>
            </ul>

            <div class="nav-item dropdown text-white">
                <a class="nav-link dropdown-toggle" style="color: #FFFF00;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><strong>Olá,XXXXX</strong></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="#">Outra ação</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Sair</a>
                </div>
            </li>
        </div>
    </nav>
