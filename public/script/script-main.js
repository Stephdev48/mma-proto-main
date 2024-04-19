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

