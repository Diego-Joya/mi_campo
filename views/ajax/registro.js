function validarre(){
    var nombres = document.querySelector('#nombres').value;
      

    if (nombres !=""){
        var expresion = /^[a-zA-Z0-9]*$/;

        if (!expresion.test(nombres)){
            document.querySelector("label[for='nombres'}").innerHTML +="<br> no se admiten caracteres especialese"
       return false;
        }
    }
    return true;

}