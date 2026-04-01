let form = document.getElementById('regsiter_form');
let error = document.getElementById('error');
error.style.display = "none"

form.addEventListener("submit", function (e) {
    e.preventDefault();

    let firstname = document.getElementById('firstname');
    let lastname = document.getElementById('lastname');
    let email = document.getElementById('email');
    let password = document.getElementById('password');
    let password_confirmation = document.getElementById('password_confirmation');

    error.textContent = "";

    if (firstname.value.length > 20) {
        error.textContent = "Le prenom est tres long";
        error.style.display = "flex";
        return;
    }

    if (lastname.value.length > 20) {
        error.textContent = "Le nom est tres long";
        error.style.display = "flex";
        return;
    }

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

    if (password.value !== password_confirmation.value) {
        error.textContent = "Les mots de passe ne correspondent pas"
        error.style.display = "flex";
        return
    }

    form.submit();
})