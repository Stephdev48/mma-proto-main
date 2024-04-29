function alertTestJs(){
    alert("Le JS fonctionne");
}

function showElement(elementhidden){
var element = document.getElementById(elementhidden);
    element.classList.remove('hidden');
}

function hideElement(elementvisible){
    var element = document.getElementById(elementvisible);
        element.classList.add('hidden');
    }

function buttonActivate(elementdisabled, checkboxhome){
    var checkbox = document.getElementById(checkboxhome);
    var element = document.getElementById(elementdisabled);
    if (checkbox.checked == true){
        element.classList.remove('hidden');
    } else {
        element.classList.add('hidden');
    }
}
