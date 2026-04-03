let form = document.getElementById('login_form');
let error = document.getElementById('error');
error.style.display = "none"

form.addEventListener("submit", function (e) {
    e.preventDefault();

    let email = document.getElementById('email');
    let password = document.getElementById('password');

    error.textContent = "";

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.value.match(emailPattern)) {
        error.textContent = "Email n'est pas valide";
        error.style.display = "flex";
        return;
    }

    if (password.value.length < 6) {
        error.textContent = "Le mot de passe doit etre plus de 6 caractere";
        error.style.display = "flex";
        return;
    }

    form.submit();
})