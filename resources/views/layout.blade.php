<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prompt:400,700&display=swap&subset=thai" rel="stylesheet">

    <!-- Icons -->
    {{-- <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>@yield('title','Laravel')</title>

    <style>
      html, body {
        font-family: 'Prompt', sans-serif;
      },

      .material-icons {
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;  /* Preferred icon size */
        display: inline-block;
        line-height: 1;
        text-transform: none;
        letter-spacing: normal;
        word-wrap: normal;
        white-space: nowrap;
        direction: ltr;

        /* Support for all WebKit browsers. */
        -webkit-font-smoothing: antialiased;
        /* Support for Safari and Chrome. */
        text-rendering: optimizeLegibility;

        /* Support for Firefox. */
        -moz-osx-font-smoothing: grayscale;

        /* Support for IE. */
        font-feature-settings: 'liga';
      }

      .material-icons.md-18 { font-size: 18px; }
      .material-icons.md-24 { font-size: 24px; }
      .material-icons.md-36 { font-size: 36px; }
      .material-icons.md-48 { font-size: 48px; }

      /* Rules for using icons as black on a light background. */
      .material-icons.md-dark { color: rgba(0, 0, 0, 0.54); }
      .material-icons.md-dark:hover { color: red; }
      .material-icons.md-dark.md-inactive { color: rgba(0, 0, 0, 0.26); }

      /* Rules for using icons as white on a dark background. */
      .material-icons.md-light { color: rgba(255, 255, 255, 1); }
      .material-icons.md-light.md-inactive { color: rgba(255, 255, 255, 0.3); }

      .btn-no-padding {
        padding: 0rem 0rem;
      }
    </style>
  </head>
  <body>
    @include('nav')
    <div class="container mt-3">
      @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Success</h4>
          <hr/>
          <p>{{ session()->get('message') }}</p>
        </div>
      @endif

      @yield('content')

      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    @yield('scripts')
  </body>
</html>