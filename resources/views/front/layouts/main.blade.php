<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('jssocial/jssocials.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('jssocial/jssocials-theme-flat.css') }}" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script type="text/javascript" src="{{ asset('jssocial/jssocials.min.js') }}"></script>


      <title>BookSharing</title>
      @yield('custom_css')

  </head>
  <body>
    @yield('content')
    @include('users.layouts.footer')

  </body>
  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  @yield('custom_js')

</html>

