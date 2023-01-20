<!--navbar-->
<nav class="navbar ">
    <div class="container-fluid ">
      <div>
      <a class="navbar-brand" href="{{ url('/')}}"><img src="/img/logotipo.png" width="70" height="55"></a>
      <a href="{{url('/sobre-contactos')}}" class="link-secondary" style="font-size:25px;">Sobre nós </a>
      @auth
      {{$teste}}
      @endauth
        </div>
      <form class="d-flex">
        <input class="form-control form-control-lg ps-3 pe-3 rounded-pill" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success color-green-2 rounded-circle " type="submit"><span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></span></button>
      </form>
      <div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar_carrinho" aria-controls="offcanvasNavbar">
            <span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-cart-check-fill " viewBox="0 0 20 16">
              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg></span>
          </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar_desejos" aria-controls="offcanvasNavbar">
          <span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-star-fill" viewBox="0 0 20 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg></span>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-person-fill color-green-1" viewBox="0 0 18 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg></span>
        </button>
      </div>
  
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar_carrinho" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          <h5 class="offcanvas-title me-5" id="offcanvasNavbarLabel">Carrinho de Compras</h5>
        </div>
        <div class="offcanvas-body ">
        </div>
      </div>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar_desejos" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          <h5 class="offcanvas-title me-5" id="offcanvasNavbarLabel">Lista de Desejos</h5>
        </div>
        <div class="offcanvas-body ">
          @foreach($desejos as $desejo)
              <li>{{ $desejo->p_id }}</li>
          @endforeach
        </div>
      </div>
  
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          @auth
          <h5 class="offcanvas-title me-5" id="offcanvasNavbarLabel">Olá {{Auth::user()->u_nome}}</h5>
          @endauth
        </div>
        <div class="offcanvas-body ">
          <ul class="navbar-nav justify-content-center align-items-center d-flex ">
            @guest
            <li class="nav-item p-3">
              <a href="{{ url('/utilizador/login')}}"><button type="button" class="btn btn-outline-secondary">Login</button>
              </a>
              <a href="{{ url('/utilizador/registo')}}"><button type="button" class="btn btn-outline-secondary">Criar conta</button>
              </a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link active" aria-current="page" href="{{ url('/utilizador/login')}}">Dados Pessoais</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link active" href="{{ url('/utilizador/login')}}">As minhas encomendas</a>
            </li>
            @endguest
            @auth
            @if (Auth::user()->u_tipo == 1)
            <li class="nav-item p-2">
              <a class="nav-link active" aria-current="page" href="{{ url('/administracao/utilizadores')}}">Utilizadores</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link active" href="{{ url('/produtos/verprodutos')}}">Produtos</a>
            </li>
            @else
            <li class="nav-item p-2">
              <a class="nav-link active" aria-current="page" href="{{ url('/utilizador/perfil')}}">Dados Pessoais</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link active" href="{{ url('/utilizador/encomendas')}}">As minhas encomendas</a>
            </li>
            @endif
            @if (Auth::user()->u_tipo == 2)
            <li class="nav-item p-2">
              <a class="nav-link active" aria-current="page" href="{{ url('/produtos/verprodutos')}}">Os meus produtos</a>
            </li>
            @endif
            <li class="nav-item p-3">
              <a href="{{ url('/utilizador/logout')}}"><button type="button" class="btn btn-outline-secondary">Terminar Sessão</button>
              </a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </div>
  </nav>