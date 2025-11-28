<<<<<<< HEAD
import './bootstrap';
=======
document.addEventListener("DOMContentLoaded", () => {

    const modal = document.getElementById("loginModal");

    if (!modal) {
        console.error("Modal não encontrado!");
        return;
    }

    const loginBtn = document.getElementById("loginBtn");
    const closeBtn = modal.querySelector(".close");

    if (loginBtn) {
        loginBtn.addEventListener("click", () => modal.style.display = "block");
    }

    if (closeBtn) {
        closeBtn.addEventListener("click", () => modal.style.display = "none");
    }

    window.addEventListener("click", e => {
        if (e.target === modal) modal.style.display = "none";
    });

    // --- LEITURA DO ATRIBUTO BLADE (SEM BLADE NO JS) ---
    const shouldOpen = modal.dataset.open === "true";
  
    if (shouldOpen) {
        modal.style.display = "block";
    }
});
>>>>>>> eab2ac936aaf74bb979374edf2363efc9a74d23f
