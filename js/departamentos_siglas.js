function sigla(cadena){


        var palabras = cadena,
        array = palabras.split(" "),
        total = array.length,
        resultado = "";

        if (cadena.charAt(cadena.length-1)==0) { return;}// si la cadena viene en blanco se sale de la funcion

        for (var i = 0; i < total; resultado += array[i][0], i++);
            $("#siglas").val(resultado.toUpperCase()); 
     
        if (cadena.length==1){
            $("#siglas").val(""); 
        }


}

function siglamodal(cadena){


        var palabras = cadena,
        array = palabras.split(" "),
        total = array.length,
        resultado = "";

        if (cadena.charAt(cadena.length-1)==0) { return;}// si la cadena viene en blanco se sale de la funcion

        for (var i = 0; i < total; resultado += array[i][0], i++);
            $("#esiglas").val(resultado.toUpperCase()); 
     
        if (cadena.length==1){
            $("#esiglas").val(""); 
        }


}