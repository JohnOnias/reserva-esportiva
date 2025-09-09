@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Auth Section -->
<section class="py-5">
    
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

    <div class="container">
        <div class="card shadow rounded-4 mx-auto" style="max-width: 500px;">
            <div class="card-body">

                <!-- Register Form -->
                <form id="register-form" method="POST">
                    @csrf
                    <h2 class="h5 mb-4 fw-bold text-center">Crie sua conta</h2>

                    <div class="mb-3">
                        <label class="form-label">Nome Completo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Seu nome completo" required name="nome">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Matrícula IFCE</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            <input type="text" class="form-control" placeholder="Sua matrícula" required name="matricula">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-mail Institucional</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="seu@email.ifce.edu.br" required name="email">
                        </div>
                    </div>

                    <!-- Campo de senha -->
                    <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Crie uma senha" required name="senha">
                        <button class="btn btn-outline-secondary toggle-password" type="button" aria-label="Mostrar ou ocultar senha">
                        <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    </div>

                    <!-- Script para exibir/ocultar senha -->
                    <script>
                    document.querySelectorAll('.toggle-password').forEach(btn => {
                        btn.addEventListener('click', function() {
                        const input = this.parentElement.querySelector('input');
                        const icon = this.querySelector('i');

                        if (input.type === "password") {
                            input.type = "text";
                            icon.classList.remove("fa-eye");
                            icon.classList.add("fa-eye-slash");
                        } else {
                            input.type = "password";
                            icon.classList.remove("fa-eye-slash");
                            icon.classList.add("fa-eye");
                        }
                        });
                    });
                    </script>



                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="accept-terms" required>
                        <label for="accept-terms" class="form-check-label">
                            Eu concordo com os <a href="#" class="text-success">Termos de Serviço</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        <i class="fas fa-user-plus me-2"></i> Registrar
                    </button>

                    <p class="text-center mt-3">Já tem uma conta?
                        <a href="{{ route('telaLogin') }}" id="switch-to-login" class="text-success fw-bold">Faça login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
