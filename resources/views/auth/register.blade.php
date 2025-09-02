<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | System University</title>

  {{-- استدعاء ملفات CSS/JS --}}
  @vite('resources/js/app.js')

  <style>
    body.register-page {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        height: 100vh;
        color: white;
    }
    .register-logo a {
        color: #fff !important;
        font-size: 26px;
        font-weight: bold;
    }
    .register-card-body {
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.95);
        color: #333;
    }
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="#"><b>System</b> University 🎓</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Create a new account</p>

            <form action="{{ route('newregister') }}" method="POST">
                @csrf

                {{-- Full Name --}}
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" placeholder="Full name" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('name')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Retype password" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>

                {{-- Role --}}
                <div class="input-group mb-3">
                    <select name="role" class="form-control @error('role') is-invalid @enderror" required>
                        <option value="" disabled selected>-- Select Role --</option>
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="student">Student</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user-tag"></span></div>
                    </div>
                    @error('role')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-8">
                        <a href="{{ route('login') }}" class="text-center">Already have an account?</a>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>
