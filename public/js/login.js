function showPassword() {
    var passInput = document.getElementById("passField");
    var img = document.getElementById("imgToggle");

    if (passInput.type === "password") {
        passInput.type = "text";
        img.src = "./images/web/eye-slash.svg"
    } else {
        passInput.type = "password";
        img.src = "./images/web/eye.svg"
    }
}

const animationRemote = bodymovin.loadAnimation({
    container: document.getElementById('test'),
    path: 'https://assets9.lottiefiles.com/packages/lf20_hKebN8.json',
    autoplay: true,
    renderer: 'svg',
    loop: true
})

$("#login").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        password: {
            required: true,
        },
    },
})

var params = {
    container: document.getElementById("person"),
    renderer: "svg",
    loop: true,
    autoplay: true,
    animationData: test,
};
var anim;
anim = lottie.loadAnimation(params);