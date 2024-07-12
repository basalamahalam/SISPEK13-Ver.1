<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
    <link rel="icon" href="{{ asset('assets/logoOSIS.png') }}" type="image/icon type" />
</head>

<body>

  @include('admin.particle.sidebar')
  @yield('')
  
</body>

</html>
