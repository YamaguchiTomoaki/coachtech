window.onload = function () {
    document.getElementById('recommendation__content').style.display = "";
    document.getElementById('mylist__content').style.display = "none";
}

window.formSwitch = function () {
    hoge = document.getElementsByName('item')
    if (hoge[0].checked) {
        document.getElementById('recommendation__content').style.display = "";
        document.getElementById('mylist__content').style.display = "none";
    } else if (hoge[1].checked) {
        console.log('ok');

        document.getElementById('recommendation__content').style.display = "none";
        document.getElementById('mylist__content').style.display = "";
    } else {
        document.getElementById('recommendation__content').style.display = "none";
        document.getElementById('mylist__content').style.display = "none";
    }
}
window.addEventListener('load', formSwitch());