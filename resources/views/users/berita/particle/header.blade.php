<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="assets/css/berita_style.css">
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="icon" href="../assets/logoOSIS.png" type="image/icon type">


</head>

<body>

  @include('users.berita.particle.navbar');
  @yield('');
  @include('users.berita.particle.footer');

</body>

</html>
