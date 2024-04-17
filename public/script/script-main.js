function alertTest(){
    alert("Test ça marche !");
}

function stepperColor(steppermod){
    var element = document.getElementById(steppermod);
    element.classList.add('text-blue-600','dark:text-blue-500','font-bold');
    var stepspan = element.firstElementChild;
    console.log(stepspan);
    stepspan.classList.add('border-blue-600','border-2');
}