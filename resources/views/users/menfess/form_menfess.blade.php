@extends('users.menfess.particle_detail.header')

@section('')
<section class="one">
    <div class="top-card">
        <h1 class="top-card-title">Form Menfess</h1>
        <h4>Vol. April</h4>
        <hr style="height:2px;border-width:5;color:black;background-color: black">
        <form method="post" action="/form_menfess/store" id="form">
            @csrf
            <div class="from">
                <label for="name">Dari:</label>
                <input type="text" id="name" name="from" required>
            </div>

            <div class="for">
                <label for="name">Untuk: </label>
                <input type="text" id="name" name="to" required>
            </div>

            <div class="say">
                <label for="message">Ucapan:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="btn-box">
                <input type="submit" name="submit" value="Submit" class="btn-send">
                <input type="reset" value="Reset" class="btn-send"
                    onclick="document.getElementById('form').reset(); document.getElementById('to').value = null; document.getElementById('message').value = null;">
            </div>

        </form>
    </div>

</section>
@endsection