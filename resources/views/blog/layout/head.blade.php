<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="google-site-verification" content="z1KbkHEdJj-BJDxIOodhQTgc_FmZFHX4ZAvollyLR7I" />
  <title>{{ config('app.name', 'Blog') }}</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="{{ url('blog/css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ url('blog/css/index.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="{{ url('blog/css/font-awesome-4.3.0/css/font-awesome.min.css') }}" />
  <link rel="shortcut icon" href="{{ url('blog/images/favicon (9).ico') }}" type="image/x-icon" />
  <link rel="icon" href="{{ url('blog/images/favicon (9).ico') }}" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf" />

  @yield('head')
</head>