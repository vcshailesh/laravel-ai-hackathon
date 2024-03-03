// user dropdown 
function userDropdown() {
    var x = document.getElementById("user-menu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

// notification dropdown 
function notification() {
    var x = document.getElementById("notification-menu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function logout(event) {
    event.preventDefault();
    document.getElementById('logout-form').submit();
}
function mobileMenu() {
    var x = document.getElementById("sidebar-menu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}