function alertTestJs(){
    alert("Le JS fonctionne");
}


function stepperColor(stepperidmod){
    var element = document.getElementById(stepperidmod);
    element.classList.add('text-blue-600','dark:text-blue-500','font-bold');
    var stepspan = element.firstElementChild;
    console.log(stepspan);
    stepspan.classList.add('border-blue-600','border-2');
    var elementsubtitle = document.getElementById(stepperidmod+"-p");
    elementsubtitle.classList.add('text-black');
}

function radioFormOpen(elementhidden){
var element = document.getElementById(elementhidden);
    element.classList.remove('hidden');
}

function radioFormClose(elementhidden){
    var element = document.getElementById(elementhidden);
        element.classList.add('hidden');
    }

