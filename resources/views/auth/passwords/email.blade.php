<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Reset Password | Glamyo</title>
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
        <form class="card card-md" method="POST" action="{{ route('password.email') }}">
        @csrf
          <div class="card-body">
            <h2 class="mb-2 text-center">Reset Password</h2>
            <div class="mb-3">
                <label class="form-label">E-Mail Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-footer mb-2">
              <button type="submit" class="btn btn-primary btn-block"  name="submit">Send Password Reset Link</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Tabler Core -->
    <script src="{{asset('assets/backend/js/tabler.min.js')}}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</body>
</html>