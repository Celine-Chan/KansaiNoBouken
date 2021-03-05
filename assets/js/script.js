// Scroll To Top
    
    const btn = document.getElementById('scrollTop');

    btn.addEventListener('click', () => window.scrollTo({
    top: 0,
    behavior: 'smooth',
    }));

// Afficher le mot de passe
function maskPassword() {

    var showPassword = document.getElementById("passConnexion");

    if (showPassword.type === "password") {
        showPassword.type = "text";
    } else {
        showPassword.type = "password";
    }
}


