<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Register | Glamyo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon"/>
    <!-- CSS files -->
    <link href="{{asset('assets/backend/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/backend/css/demo.min.css')}}" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
      <div class="container-tight py-6">
        <div class="text-center mb-4">
          <img src="{{asset('assets/backend/img/static/logo.png')}}" height="46" alt="">
        </div>
        <form class="card card-md" method="POST" action="{{ route('register') }}">
            @csrf
          <div class="card-body">
            <h2 class="mb-5 text-center">Register Here</h2>
            <div class="mb-3">
              <label class="form-label">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">City</label>
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Enter City" value="{{ old('city') }}" required autocomplete="city" autofocus>
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Mobile Number</label>
                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Mobile Number" value="{{ old('phone') }}" autocomplete="phone" required>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="input-group-text">
                  <a class="link-secondary toggle" id="btnToggle" title="Show password" data-toggle="tooltip" data-placement="right"><i class="fa fa-eye text-primary"></i>
                  </a>
                </span>
              </div>
            </div>
            <label class="form-label">Confirm Password</label>
              <div class="input-group input-group-flat">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary btn-block">Create new account</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted">
          Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Tabler Core -->
    <script src="{{asset('assets/backend/js/tabler.min.js')}}"></script>
    <script type="text/javascript">
        function valid()
        {
         if(document.registration.password.value!= document.registration.password_again.value)
        {
        alert("Password fields do not match!");
        document.registration.password_again.focus();
        return false;
        }
        return true;
        }
    </script>
    <script>
      let passwordInput = document.getElementById('password'),
      toggle = document.getElementById('btnToggle'),
      icon =  document.getElementById('eyeIcon');
      function togglePassword() {
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          icon.classList.add("fa-eye-slash");
        } else {
          passwordInput.type = 'password';
          icon.classList.remove("fa-eye-slash");
        }
      }
      toggle.addEventListener('click', togglePassword, false);
      passwordInput.addEventListener('keyup', checkInput, false);
    </script>
  </body>
</html>