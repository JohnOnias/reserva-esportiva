<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
<!-- nav bar bootstrap pra editar-->

  <header class="bg-success text-white py-4 shadow-sm">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="d-flex align-items-center mb-3 mb-md-0">
                <img src="https://www.ifce.edu.br/++theme++ifce.theme/img/logo.png" alt="IFCE Logo" class="me-3" style="height:70px">
                <div>
                    <h1 class="h4 fw-bold">IFCE Campus Cedro</h1>
                    <p class="mb-0 text-white-50">Sistema de Reservas Esportivas</p>
                </div>
            </div>
            <!-- NavBar de fora do projeto -->
            <!-- <nav class="nav">
                 <a href="#" class="nav-link text-white">Início</a>
                <a href="#reservas" class="nav-link text-white">Reservas</a>
                <a href="#equipamentos" class="nav-link text-white">Equipamentos</a>
                <a href="#regras" class="nav-link text-white">Regras</a> -->
                <!-- <a href="#" class="btn btn-light text-success fw-bold">Cadastro</a> 
            </nav> -->
        </div>
    </header>
<!-- fim nav bar-->




<!-- conteudo --> 
  <div class="container">
        @yield('content')
    </div>




<!-- Footer -->
<footer class="bg-dark text-white py-5">
  <div class="container">
    <div class="row">
      <!-- Coluna 1 -->
      <div class="col-md-3 mb-4">
        <h3 class="h5 fw-bold mb-3">IFCE Campus Cedro</h3>
        <p class="text-white-50">Sistema de reservas esportivas</p>
      </div>

      <!-- Coluna 2 -->
      <div class="col-md-3 mb-4">
        <h3 class="h5 fw-bold mb-3">Contato</h3>
        <ul class="list-unstyled text-white-50">
          <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> (88) xxxxx-xxxx</li>
          <li class="mb-2"><i class="fas fa-envelope me-2"></i> xxxxx@cedro.ifce.edu.br</li>
          <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> xxxxxxxxxxxx, xxxx</li>
        </ul>
      </div>

      <!-- Coluna 3 -->
      <div class="col-md-3 mb-4">
        <h3 class="h5 fw-bold mb-3">Horário de Funcionamento</h3>
        <ul class="list-unstyled text-white-50">
          <li>Segunda a Sexta: 6h - 22h</li>
          <li>Sábado: 8h - 12h</li>
          <li>Domingo: Fechado</li>
        </ul>
      </div>

      <!-- Coluna 4 -->
      <div class="col-md-3 mb-4">
        <h3 class="h5 fw-bold mb-3">Redes Sociais</h3>
        <div class="d-flex gap-3">
          <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Linha final -->
    <div class="border-top border-secondary pt-3 mt-4 text-center text-white-50">
      <p class="mb-0">&copy; 2025 IFCE Campus Cedro. Todos os direitos reservados.</p>
    </div>
  </div>
</footer>

