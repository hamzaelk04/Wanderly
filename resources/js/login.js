let form = document.getElementById('login_form');
let error = document.getElementById('error');

form.addEventListener("submit", function (e) {
    e.preventDefault();

    let email = document.getElementById('email');
    let password = document.getElementById('password');

    error.textContent = "";

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.value.match(emailPattern)) {
        let message = "Email n'est pas valide";
        showError(message)
        return;
    }

    if (password.value.length < 6) {
        let message = "Le mot de passe doit etre plus de 6 caractere";
        showError(message)
        return;
    }

    form.submit();
})

function showError(message) {
    if (!error) return;

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