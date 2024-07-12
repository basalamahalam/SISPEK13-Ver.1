<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Menfess</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

    <section class="one">
        <div class="top-card">
            <h1 class="top-card-title">Register Admin</h1>
            <h4>Website SISPEK13</h4><br>
            <hr style="height:2px;border-width:5;color:black;background-color: black"><br>
            @if (session()->has('is-errors'))
                {{ session('is-errors') }}
            @endif
            <form action="/register" method="POST">
                @csrf
                <div class="from">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" autofocus required>
                </div>

                <div class="from">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" autofocus required>
                </div>

                <div class="from">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Email" autofocus required>
                </div>

                <div class="for">
                    <label for="name">Password</label>
                    <input type="text" id="password" name="password" placeholder="Password" autofocus required>
                </div>
                <div class="btn-box">
                    <input type="submit" name="submit" value="Submit" class="btn-send">
                </div>

            </form>
        </div>

    </section>

        <!-- bottom-nav -->

        <!-- <div class="btm-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">OSIS</a></li>
                <li><a href="#">MPK</a></li>
                <li><a href="#">Kontak Kami</a></li>
            </ul>
        </div>
    
        <footer>
            <p>Website by SISPEK 13 & PROKON 6</p>
        </footer> -->
    
</body>
</html>