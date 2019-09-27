<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="robots" content="index, follow" />

  <link rel="apple-touch-icon" sizes="114x114" href="{{ get_theme_file_uri().'/resources/assets/images/favicons' }}/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ get_theme_file_uri().'/resources/assets/images/favicons' }}/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ get_theme_file_uri().'/resources/assets/images/favicons' }}/favicon-16x16.png">
  <link rel="manifest" href="{{ get_theme_file_uri().'/resources/assets/images/favicons' }}/site.webmanifest">
  <link rel="mask-icon" href="{{ get_theme_file_uri().'/resources/assets/images/favicons' }}/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="#1C4495">

  <!-- Head Scripts -->
  @if(get_field('header_scripts', 'option'))
    {{ the_field('header_scripts', 'option') }}
  @endif


  @php wp_head() @endphp
</head>
