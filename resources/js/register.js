let form = document.getElementById('regsiter_form');
let error = document.getElementById('error');

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
        let message = "Le nom est tres long";
        showError(message);
        return;
    }

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.value.match(emailPattern)) {
        let message = "Email n'est pas valide";
        showError(message);
        return;
    }

    if (password.value.length < 6) {
        let message = "Le mot de passe doit etre plus de 6 caractere";
        showError(message);
        return;
    }

    if (password.value !== password_confirmation.value) {
        let message = "Les mots de passe ne correspondent pas"
        showError(message);
        return
    }

    form.submit();
})

function showError(message)
{
    if (!error) {
        return;
    }

    error.textContent = message;
    error.classList.remove("opacity-0");
    error.classList.add("opacity-100");

    window.scrollTo({ top: 0, behavior: "smooth" });

    setTimeout(() => {
        error.textContent = "";
        error.classList.remove("opacity-100");
    error.classList.add("opacity-0");
    }, 5000);
}