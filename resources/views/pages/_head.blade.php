<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- <meta name="csrf-token" content="amJvM3JxNlUrNypKXxUOMjIMB1o7R0E8DRJYRR1IchwhFFceFR98Bg=="> -->
  <title>{{ $title }}</title>
  <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="{{ $description }}">
  <link href="/css/{{ $style }}" rel="stylesheet">
  <style>
    .b-logo {
      display: block;
      height: 95px;
      background: url(../img/logo.png) no-repeat 50% 30px;
      background-size: 140px;
    }
  </style>

  <script>
  window.Laravel =  <?php echo json_encode([
      'csrfToken' => csrf_token(),
  ]); ?>
  </script>
</head>
