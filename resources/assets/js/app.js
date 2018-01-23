let secret = "3838404037393739666513";
let input = "";
let timer;

document.addEventListener('keyup', e => {
    input += e.which;

    clearTimeout(timer);
    timer = setTimeout(() => { input = ""; }, 2000);

    check_input();
});

function check_input() {
    if (input == secret) {
        document.getElementById("audio").play();
    }
}
