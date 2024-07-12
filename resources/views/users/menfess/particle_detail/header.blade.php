<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/menfess_form.css') }}">
    <link rel="icon" href="{{ asset('assets/logo-mpk.png') }}" type="iamge/icon type" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

  @include('users.menfess.particle_detail.navbar')
  @yield('')
  @include('users.menfess.particle_detail.footer')

</body>

</html>