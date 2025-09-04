@extends('layouts.app')

@section('content')

               
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <!-- Auth Section -->
    <section class="py-5">
        <div class="container">
            <div class="card shadow rounded-4 mx-auto" style="max-width: 500px;">
                <div class="card-header d-flex">
                    <button class="btn flex-fill btn-success" id="login-tab">
                        <i class="fas fa-sign-in-alt me-2"></i> Login
                    </button>
                    <button class="btn flex-fill btn-light" id="register-tab">
                        <i class="fas fa-user-plus me-2"></i> Registrar
                    </button>
                </div>
                <div class="card-body">

                    <!-- Login Form -->
                    <!-- <form id="login-form">
                        <h2 class="h5 mb-4 fw-bold text-center">Acesse sua conta</h2>

                        <div class="mb-3">
                            <label for="login-email" class="form-label">Matrícula ou E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="login-email" placeholder="Sua matrícula ou e-mail" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="login-password" class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="login-password" placeholder="Sua senha" required>
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Lembrar-me</label>
                                </div>
                                <a href="#" class="small text-success">Esqueceu a senha?</a>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            <i class="fas fa-sign-in-alt me-2"></i> Entrar
                        </button>

                        <p class="text-center mt-3">Não tem uma conta?
                            <a href="#" id="switch-to-register" class="text-success fw-bold">Registre-se</a>
                        </p>
                    </form> -->

                    <!-- Register Form -->
                    <form id="register-form" class="d-none" method="post">
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
                                <input type="text" class="form-control" placeholder="Sua matrícula" required name='matricula'>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">E-mail Institucional</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="seu@email.ifce.edu.br" required name="email">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Crie uma senha" required name="senha">
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- <div class="mb-3">
                            <label class="form-label">Confirmar Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Confirme sua senha" required>
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div> -->

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
                            <a href="#" id="switch-to-login" class="text-success fw-bold">Faça login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
        const loginForm = document.getElementById("login-form");
        const registerForm = document.getElementById("register-form");
        const loginTab = document.getElementById("login-tab");
        const registerTab = document.getElementById("register-tab");
        const switchToRegister = document.getElementById("switch-to-register");
        const switchToLogin = document.getElementById("switch-to-login");

        loginTab.addEventListener("click", () => {
            loginForm.classList.remove("d-none");
            registerForm.classList.add("d-none");
            loginTab.classList.add("btn-success");
            registerTab.classList.remove("btn-success");
            registerTab.classList.add("btn-light");
        });

        registerTab.addEventListener("click", () => {
            registerForm.classList.remove("d-none");
            loginForm.classList.add("d-none");
            registerTab.classList.add("btn-success");
            loginTab.classList.remove("btn-success");
            loginTab.classList.add("btn-light");
        });

        if (switchToRegister) {
            switchToRegister.addEventListener("click", (e) => {
                e.preventDefault();
                registerTab.click();
            });
        }

        if (switchToLogin) {
            switchToLogin.addEventListener("click", (e) => {
                e.preventDefault();
                loginTab.click();
            });
        }

        document.querySelectorAll(".toggle-password").forEach(btn => {
            btn.addEventListener("click", () => {
                const input = btn.previousElementSibling;
                const icon = btn.querySelector("i");
                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.replace("fa-eye", "fa-eye-slash");
                } else {
                    input.type = "password";
                    icon.classList.replace("fa-eye-slash", "fa-eye");
                }
            });
        });
    </script>
    @endsection