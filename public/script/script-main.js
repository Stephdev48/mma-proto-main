function alertTestJs(){
    alert("Le JS fonctionne");
}

function radioFormOpen(elementhidden){
var element = document.getElementById(elementhidden);
    element.classList.remove('hidden');
}

function radioFormClose(elementvisible){
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
