document.addEventListener("DOMContentLoaded", function(event) { 
    document.getElementById("link-menu").addEventListener("click", function(e) { 
        e.preventDefault();
        document.getElementById("cont-menu-full-screen").classList.toggle("openMenu");
    });
    document.getElementById("cont-menu-full-screen").addEventListener("click", function(e) {
        document.getElementById("cont-menu-full-screen").classList.remove("openMenu");
    });
}); 