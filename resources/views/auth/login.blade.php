<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PONDA Si</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (untuk icon mata) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff;
        }

        .login-left {
            padding: 3rem;
            width: 100%;
        }

        .login-left h2 {
            color: #ff6600;
            font-weight: 700;
        }

        .btn-login {
            background-color: #ff6600;
            color: #fff;
        }

        .btn-login:hover {
            background-color: #e45600;
            color: #fff;
        }

        .right-top-logo {
            width: 150px;
            margin-bottom: 2rem;
        }

        .right-bottom-img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        @media (max-width: 991.98px) {
            .login-left {
                padding: 2rem 1rem;
            }

            .right-top-logo {
                width: 120px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- Left Side (Form) -->
            <div class="col-lg-6 d-flex align-items-center">
                <div class="login-left">
                    <img src="{{ asset('assets/foto/logo.png') }}" alt="Logo kecil" style="height:40px;" class="mb-3">
                    <h2>Sign in</h2>
                    {{-- <p>Don’t have an account? <a href="#">Create now</a></p> --}}

                    <form action="{{ url('loginproses') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="example@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password <span
                                    class="text-muted">(required)</span></label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="•••••">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                            <a href="#" class="text-muted">Forgot Password?</a>
                        </div> --}}
                        <button type="submit" class="btn btn-login w-100">Sign in</button>
                    </form>
                </div>
            </div>

            <!-- Right Side (Images) -->
            <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
                <img src="{{ asset('assets/foto/logo2.png') }}" alt="Logo besar" class="right-top-logo">
                <img src="{{ asset('assets/foto/bglogin.png') }}" alt="Gambar rumah" class="right-bottom-img">
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // show/hide password
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const icon = this.querySelector('i');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "{{ session('error') }}"
            });
        </script>
    @endif
</body>

</html>
