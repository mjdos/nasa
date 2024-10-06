<!-- NAV BAR STARTS -->
<nav class="navbar navbar-expand-sm fixed-top" style="background-color: #100F0F">
    <a class="navbar-brand" href="index.html" style="color: White;">Aetheris</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route('home.index')}}" style="color:#ffdc6c">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('campeao.index')}}" style="color:White">Campeões</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color:White" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Função
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('funcao.index')}}">Ver</a>
                <a class="dropdown-item" href="{{route('funcao.create')}}">Cadastrar</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color:White" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Personagem
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('personagem.create')}}">Cadastrar</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Gallery.html" style="color:White">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Contact.html" style="color:White">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Blog.html" style="color: White;">Blog</a>
        </li>
    </ul>
    <form class="form-inline ml-auto" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" style="border-radius: 8px; background-color: orange;" type="submit">Search</button>
    </form>
</nav>

<!-- NAV BAR END -->
