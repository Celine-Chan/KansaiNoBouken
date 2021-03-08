// Scroll To Top
    const btn = document.getElementById('scrollTop');

    btn.addEventListener('click', () => window.scrollTo({
    top: 0,
    behavior: 'smooth',
    }));

// Afficher le mot de passe connexion
function maskPassword() {

    var showPassword = document.getElementById("passConnexion");

    if (showPassword.type === "password") {
        showPassword.type = "text";
    } else {
        showPassword.type = "password";
    }
}

// Afficher le mot de passe inscription
function showPassword() {

    var showPassword = document.getElementById("password");

    if (showPassword.type === "password") {
        showPassword.type = "text";
    } else {
        showPassword.type = "password";
    }
}

// Afficher confirmation de mot de passe inscription
function showConfirmPassword() {

    var showPassword = document.getElementById("confirmPassword");

    if (showPassword.type === "password") {
        showPassword.type = "text";
    } else {
        showPassword.type = "password";
    }
}


