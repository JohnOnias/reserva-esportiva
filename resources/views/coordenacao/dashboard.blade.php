@extends('layouts.app')

@section('content')

@if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif
<div class="container my-4">
  <div class="row g-4">
    <nav class="col-lg-3">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
          <h2 class="h5 mb-0">Menu de Controle</h2>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-0">
            <button data-tab="dashboard" class="btn btn-success w-100 rounded-0 text-start d-flex align-items-center px-3 py-2 active">
              <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </button>
          </li>
          <li class="list-group-item p-0">
            <button data-tab="reservations" class="btn btn-light w-100 rounded-0 text-start d-flex align-items-center px-3 py-2">
              <i class="fas fa-calendar-check me-2"></i> Reservas
            </button>
          </li>
          <li class="list-group-item p-0">
            <button data-tab="history" class="btn btn-light w-100 rounded-0 text-start d-flex align-items-center px-3 py-2">
              <i class="fas fa-history me-2"></i> Histórico
            </button>
          </li>
          <li class="list-group-item p-0">
            <button data-tab="penalties" class="btn btn-light w-100 rounded-0 text-start d-flex align-items-center px-3 py-2">
              <i class="fas fa-ban me-2"></i> Penalidades
            </button>
          </li>
          <li class="list-group-item p-0">
            <button data-tab="users" class="btn btn-light w-100 rounded-0 text-start d-flex align-items-center px-3 py-2">
              <i class="fas fa-users me-2"></i> Usuários
            </button>
          </li>
          <li class="list-group-item p-0">
            <button data-tab="settings" class="btn btn-light w-100 rounded-0 text-start d-flex align-items-center px-3 py-2">
              <i class="fas fa-cog me-2"></i> Configurações
            </button>
          </li>
        </ul>
      </div>

      <div class="card shadow-sm mt-4">
        <div class="card-body">
          <h3 class="h6 mb-3">Estatísticas Rápidas</h3>
          <dl class="row mb-0">
            <dt class="col-7 text-muted small">Reservas Hoje</dt>
            <dd class="col-5 fw-bold mb-2">12</dd>
            <dt class="col-7 text-muted small">Penalidades Ativas</dt>
            <dd class="col-5 fw-bold mb-2">3</dd>
            <dt class="col-7 text-muted small">Usuários Bloqueados</dt>
            <dd class="col-5 fw-bold">2</dd>
          </dl>
        </div>
      </div>
    </nav>

    <main class="col-lg-9">
      <section id="dashboard" class="tab-content active card shadow-sm p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="h4 mb-0">Visão Geral</h2>
          <select class="form-select form-select-sm w-auto">
            <option>Hoje</option>
            <option>Esta semana</option>
            <option selected>Este mês</option>
            <option>Este ano</option>
          </select>
        </div>

        <div class="row g-3 mb-4">
          <div class="col-md-4">
            <div class="card bg-primary bg-opacity-10 border-0 h-100">
              <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-primary fw-medium mb-1">Total Reservas</p>
                  <h3 class="fw-bold mb-1">84</h3>
                  <small class="text-primary"><i class="fas fa-arrow-up me-1"></i>12% em relação ao mês passado</small>
                </div>
                <div class="bg-primary bg-opacity-25 rounded-circle p-3">
                  <i class="fas fa-calendar text-primary fs-4"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-success bg-opacity-10 border-0 h-100">
              <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-success fw-medium mb-1">Reservas Concluídas</p>
                  <h3 class="fw-bold mb-1">72</h3>
                  <small class="text-success"><i class="fas fa-arrow-up me-1"></i>8% em relação ao mês passado</small>
                </div>
                <div class="bg-success bg-opacity-25 rounded-circle p-3">
                  <i class="fas fa-check-circle text-success fs-4"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-danger bg-opacity-10 border-0 h-100">
              <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-danger fw-medium mb-1">Cancelamentos</p>
                  <h3 class="fw-bold mb-1">5</h3>
                  <small class="text-danger"><i class="fas fa-arrow-down me-1"></i>2% em relação ao mês passado</small>
                </div>
                <div class="bg-danger bg-opacity-25 rounded-circle p-3">
                  <i class="fas fa-times-circle text-danger fs-4"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h3 class="h5 mb-3">Atividade Recente</h3>
          <div class="bg-light rounded p-3">
            <div class="d-flex mb-3">
              <div class="bg-success bg-opacity-25 rounded-circle p-2 me-3">
                <i class="fas fa-calendar-plus text-success"></i>
              </div>
              <div>
                <p class="mb-1 fw-semibold">Nova reserva realizada</p>
                <small class="text-muted d-block">João Silva reservou a quadra de futsal para 15/07 às 14:00</small>
                <small class="text-muted">10 minutos atrás</small>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="bg-danger bg-opacity-25 rounded-circle p-2 me-3">
                <i class="fas fa-ban text-danger"></i>
              </div>
              <div>
                <p class="mb-1 fw-semibold">Penalidade aplicada</p>
                <small class="text-muted d-block">Maria Oliveira recebeu suspensão por 7 dias por não comparecimento</small>
                <small class="text-muted">1 hora atrás</small>
              </div>
            </div>
            <div class="d-flex">
              <div class="bg-primary bg-opacity-25 rounded-circle p-2 me-3">
                <i class="fas fa-user-shield text-primary"></i>
              </div>
              <div>
                <p class="mb-1 fw-semibold">Usuário bloqueado</p>
                <small class="text-muted d-block">Carlos Mendes foi bloqueado por violação repetida das regras</small>
                <small class="text-muted">3 horas atrás</small>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="reservations" class="tab-content card shadow-sm p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="h4 mb-0">Gerenciamento de Reservas</h2>
          <div class="d-flex gap-2">
            <div class="position-relative">
              <input type="text" placeholder="Buscar reservas..." class="form-control ps-5" />
              <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
            </div>
            
          </div>
        </div>

        <!-- FORMULÁRIO DE RESERVA DE EQUIPAMENTO-->

        <form class="bg-light rounded p-3 mb-4 row g-3" method="post" >
        
          @csrf

          <div class="col-6 col-md-3">
            <label class="form-label small">Matricula</label>
            <input  type="text" class="form-select form-select-sm" name="matricula"> <!--Mudar para texto-->
          </div>

          <div class="col-6 col-md-3">
            <label class="form-label small">Equipamento</label>

            <select class="form-select form-select-sm" name="selecao_equipamento">
                <option value=""></option>
                @foreach($equipamentos as $equipamento)
                  <option value="{{$equipamento->id}}">{{$equipamento->nome}}</option>
                  <!-- <option value="ping pong">Ping Pong</option>
                  <option value="volei">Vôlei</option>
                  <option value="basquete">Basquete</option> -->
                @endforeach
            </select>
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label small">Horário Inicial</label>
            <input type="datetime-local" class="form-control form-control-sm" name="data_inicial" />
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label small">Horário Final</label>
            <input type="datetime-local" class="form-control form-control-sm" name="data_final" />
          </div>

          <button class="btn btn-success d-flex align-items-center">
              <i class="fas fa-plus me-2"></i> Reservar
          </button>
        </form>

        <div class="table-responsive">
          <table class="table table-striped align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Esporte</th>
                <th>Data/Horário</th>
                <th>Status</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr class="reservation-row">
                <td>#RES-001</td>
                <td>João Silva</td>
                <td>Futsal</td>
                <td>15/07/2023 14:00-15:00</td>
                <td><span class="badge bg-success text-dark">Confirmada</span></td>
                <td>
                  <button class="btn btn-sm btn-success me-1"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary me-1"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr class="reservation-row">
                <td>#RES-002</td>
                <td>Maria Oliveira</td>
                <td>Ping Pong</td>
                <td>16/07/2023 10:00-11:00</td>
                <td><span class="badge bg-warning text-dark">Pendente</span></td>
                <td>
                  <button class="btn btn-sm btn-success me-1"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary me-1"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr class="reservation-row">
                <td>#RES-003</td>
                <td>Carlos Mendes</td>
                <td>Vôlei</td>
                <td>14/07/2023 16:00-17:00</td>
                <td><span class="badge bg-danger">Cancelada</span></td>
                <td>
                  <button class="btn btn-sm btn-success me-1"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary me-1"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr class="reservation-row">
                <td>#RES-004</td>
                <td>Ana Souza</td>
                <td>Basquete</td>
                <td>13/07/2023 18:00-19:00</td>
                <td><span class="badge bg-info text-dark">Concluída</span></td>
                <td>
                  <button class="btn btn-sm btn-success me-1"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary me-1"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3">
          <small class="text-muted">Mostrando 1 a 4 de 12 reservas</small>
          <nav>
            <ul class="pagination pagination-sm mb-0">
              <li class="page-item"><button class="page-link">Anterior</button></li>
              <li class="page-item active"><button class="page-link">1</button></li>
              <li class="page-item"><button class="page-link">2</button></li>
              <li class="page-item"><button class="page-link">3</button></li>
              <li class="page-item"><button class="page-link">Próximo</button></li>
            </ul>
          </nav>
        </div>
      </section>

      <!-- Outras tabs podem ser convertidas de forma similar -->
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Script simples para troca de tabs
  document.querySelectorAll('button[data-tab]').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
      document.querySelectorAll('button[data-tab]').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById(btn.getAttribute('data-tab')).classList.add('active');
    });
  });
</script>

</body>
</html>


@endsection