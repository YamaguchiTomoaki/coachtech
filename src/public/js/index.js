window.formSwitch = function () {
    hoge = document.getElementsByName('item')
    if (hoge[0].checked) {
        // 好きな食べ物が選択されたら下記を実行します
        document.getElementById('recommendation__content').style.display = "";
        document.getElementById('mylist__content').style.display = "none";
    } else if (hoge[1].checked) {
        console.log('ok');

        // 好きな場所が選択されたら下記を実行します
        document.getElementById('recommendation__content').style.display = "none";
        document.getElementById('mylist__content').style.display = "";
    } else {
        document.getElementById('recommendation__content').style.display = "none";
        document.getElementById('mylist__content').style.display = "none";
    }
}
window.addEventListener('load', formSwitch());