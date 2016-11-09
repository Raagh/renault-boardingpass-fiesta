var input = document.getElementById('inputName');
var label = document.getElementById('labelName');
var inscripto = false;

input.addEventListener('input', function() {
    label.innerHTML = input.value;
});

function init() {
    var result = getJsonFromUrl();
    if (result.name != null) {
        var text = document.getElementById('inputName');
        var text2 = document.getElementById('labelName');

        text.value = result.name;
        text2.innerHTML = result.name;
        window.alert('Gracias por Inscribirte!');
        inscripto = true;
    }
}

function getJsonFromUrl() {
    var query = location.search.substr(1);
    var result = {};
    query.split("&").forEach(function(part) {
        var item = part.split("=");
        result[item[0]] = decodeURIComponent(item[1]);
    });
    return result;
}

function imprimir() {

    if (inscripto) {
        var button = document.getElementById('btnSubmit');
        var button2 = document.getElementById('btnPrint');
        var text = document.getElementById('text1');
        var text2 = document.getElementById('text2');
        button.style.display = 'none';
        button2.style.display = 'none';
        text.innerHTML = '&nbsp;';
        text2.innerHTML = '&nbsp;';
        window.print();
    } else {
        window.alert('Debes inscribirte antes de imprimir el Boarding Pass.');
    }
    return false;
}

init();