function showStudentsInputs(){
    var input = document.getElementById("select-alumnos")
    var value = input.value
    var text = input.options[input.selectedIndex].text;
    var alumno2 = document.getElementById("alumno-2")
    var alumno3 = document.getElementById("alumno-3")
    var alumno4 = document.getElementById("alumno-4")
    var alumno5 = document.getElementById("alumno-5")
    console.log(value)
    switch (value) {
        case "2":
            alumno2.classList.add("show")
            alumno2.required = true;
            alumno3.classList.remove("show")
            alumno3.required = false;
            alumno4.classList.remove("show")
            alumno4.required = false;
            alumno5.classList.remove("show")
            alumno5.required = false;
            break;
        case "3":
            alumno2.classList.add("show")
            alumno2.required = true;
            alumno3.classList.add("show")
            alumno3.required = true;
            alumno4.classList.remove("show")
            alumno4.required = false;
            alumno5.classList.remove("show")
            alumno5.required = false;
            break;
        case "4":
            alumno2.classList.add("show")
            alumno2.required = true;
            alumno3.classList.add("show")
            alumno3.required = true;
            alumno4.classList.add("show")
            alumno4.required = true;
            alumno5.classList.remove("show")
            alumno5.required = false;
            break;
        case "5":
            alumno2.classList.add("show")
            alumno2.required = true;
            alumno3.classList.add("show")
            alumno3.required = true;
            alumno4.classList.add("show")
            alumno4.required = true;
            alumno5.classList.add("show")
            alumno5.required = true;
            break;
        default:
            alumno2.classList.remove("show")
            alumno3.classList.remove("show")
            alumno4.classList.remove("show")
            break;
    }
}
function setRequired(input){
    var input = document.getElementById("show-not").getElementsByTagName('input');
    for(i = 0; i < input.length; i++){
        input[i].required = val;
    }
}