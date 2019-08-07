<!DOCTYPE html>
<html>

<head>
  <title>Social Idea</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="csrf_token" content ="{!!csrf_token()!!}" />
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
  <script src="https://kit.fontawesome.com/28693c824e.js"></script>
  
  <!-- Styles -->
  
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/materialize.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/js/jq.js') }}" defer></script>
 

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>
