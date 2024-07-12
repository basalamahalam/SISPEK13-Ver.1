// toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// ketika diklik
document.querySelector("#hamburger-menu").onclick = () => {
    navbarNav.classList.toggle("active");
};

//untuk menghilangkan side bar
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("active");
    }
});

const accordion = document.getElementsByClassName("content-box");

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function () {
        this.classList.toggle("active");
    });
}

function signInFunction() {
    window.location.href = "{{ url('/signup') }}";
}
