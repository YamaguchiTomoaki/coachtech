window.onload = function () {
    document.getElementById('sell__content').style.display = "";
    document.getElementById('buy__content').style.display = "none";
}

window.formSwitch = function () {
    hoge = document.getElementsByName('item')
    if (hoge[0].checked) {
        document.getElementById('sell__content').style.display = "";
        document.getElementById('buy__content').style.display = "none";
    } else if (hoge[1].checked) {
        console.log('ok');

        document.getElementById('sell__content').style.display = "none";
        document.getElementById('buy__content').style.display = "";
    } else {
        document.getElementById('sell__content').style.display = "none";
        document.getElementById('buy__content').style.display = "none";
    }
}
window.addEventListener('load', formSwitch());
