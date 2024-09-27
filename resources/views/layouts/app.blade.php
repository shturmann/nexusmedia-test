<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <div id="app">
      @if(Auth::user())
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="dashboard">
          <div class="dashboard__row">
            <div class="dashboard--right-column"><div style="height: 100%;">@yield('content')</div></div>
          </div>
        </div>
      @else
        @yield('content')
      @endif

    </div>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
