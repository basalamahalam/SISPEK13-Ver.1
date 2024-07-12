<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="icon" href="assets/logo-mpk.png" type="image/icon type" />
    <link rel="stylesheet" href="assets/css/menfess_style.css">
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>

  @include('users.menfess.particle.navbar')
  @yield('')
  @include('users.menfess.particle.footer')

</body>

</html>
