<!-- bottom-nav -->

<div class="btm-nav">
    <ul>
        <li><a href="{{ URL::to('/') }}">Home</a></li>
        <li><a href="{{ URL::to('/osis') }}">OSIS</a></li>
        <li><a href="{{ URL::to('/mpk') }}">MPK</a></li>
        <li><a href="#">Kontak Kami</a></li>
    </ul>
</div>

<footer>
    <p>Website by Sixth Project</p>
</footer>
<script>
    feather.replace();
</script>
<!-- My Java Script -->
<script src="assets/js/script.js"></script>
<script>
    const burgerMenu = document.querySelector('.navbar-extra');
    const menu = document.querySelector('.navbar-nav');

    burgerMenu.addEventListener('click', () => {
        menu.classList.toggle('show-menu');
    });
</script>
