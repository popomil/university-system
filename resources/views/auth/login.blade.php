<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | System University</title>

  @vite('resources/js/app.js')

  <style>
    body.login-page {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-box {
        width: 440px;
    }
    .login-logo a {
        font-size: 34px;
        font-weight: bold;
        color: #ffffff !important;
        text-shadow: 2px 2px 6px rgba(0,0,0,0.3);
    }
    .card {
        border-radius: 1rem;
        box-shadow: 0 12px 28px rgba(0,0,0,0.25);
    }
    .login-card-body {
        font-size: 1.1rem;
    }
    .form-control {
        height: 52px;
        font-size: 1rem;
        border-radius: .75rem;
    }
    .btn-primary {
        background: #1e3c72;
        border: none;
        font-size: 1.1rem;
        padding: 12px;
        border-radius: .75rem;
        transition: 0.3s;
    }
    .btn-primary:hover {
        background: #2a5298;
    }
    .login-box-msg {
        font-size: 1.2rem;
        font-weight: 500;
        color: #333;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>System</b> University 🎓</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login to your account</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email -->
        <div class="input-group mb-4">
          <input type="email" class="form-control" name="email" placeholder="University Email" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
          </div>
        </div>

        <!-- Password -->
        <div class="input-group mb-4">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>

        <!-- Remember Me -->
        <div class="row mb-3">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember"> Remember Me </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <!-- Forgot password -->
      @if (Route::has('password.request'))
      <p class="mb-2">
        <a href="{{ route('password.request') }}">Forgot your password?</a>
      </p>
      @endif

      <!-- Register -->
      @if (Route::has('register'))
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new account</a>
      </p>
      @endif
    </div>
  </div>
</div>
</body>
</html>
