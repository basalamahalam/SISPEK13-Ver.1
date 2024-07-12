<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SISPEK13</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

    <section>
        <div class="top-card">
            <h1 class="top-card-title">Login Admin</h1>
            <h4>Website SISPEK13</h4><br>
            <hr class="line"><br>
            @if (session()->has('is-errors'))
                <div style="text-align: center; color: red; padding-bottom: 1rem;">
                    {{ session('is-errors') }}
                </div>
            @endif
            <form action="/login" method="POST">
                @csrf
                @error('email')
                    <div style="text-align: center; color: red; padding-bottom: 1rem;">
                        {{ $message }}
                    </div>
                @enderror
                <div class="from">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" autofocus required>
                </div>

                <div class="for">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" autofocus required>
                </div>
                <div class="btn-box">
                    <input type="submit" name="submit" value="Submit" class="btn-send">
                </div>

            </form>
        </div>
    </section>
</body>
</html>