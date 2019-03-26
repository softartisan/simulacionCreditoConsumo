//Validador y formateador automatico de rut
function checkRut(rut) {
    // Se quitan los puntos y los guiones mediante el metodo replace
    var valor = rut.value.replace('.','');
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    var cuerpo = valor.slice(0,-1);
    var dv = valor.slice(-1).toUpperCase();
    
    // Formatear rut
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { 
        rut.setCustomValidity("RUT Incompleto"); return false;
    }
    
    // Calcular Dígito Verificador
    var suma = 0;
    var multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(var i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        var index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { 
            multiplo = multiplo + 1; 
        }else{ 
            multiplo = 2; 
        }
    }
    
    // se calcula el dv con modulo 11
    var dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    if(dv == 'K'){
        dv = 10;
    }else{
        dv=dv;
    }
    if(dv == 0){
       dv = 11;
    }else{
       dv = dv;
    }
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv){ 
        rut.setCustomValidity("RUT Inválido"); return false; 
    }
    
   //se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
    rut.setCustomValidity('');
}

//validador para los aspectos del telefono
function validarTelefono(telefono){
    var numero = telefono.value; //se asigna el valor de telefono a la variable numero
    
     if(numero==""){//valida que hay algo escrito
        telefono.setCustomValidity("Ingrese algun valor numerico");
        return false;
    }else if(numero.includes(" ")){//valida que no hay espacios
        telefono.setCustomValidity("Quite los espacios por favor ");
        return false;
    }else if(isNaN(numero)){ //verifica que solo sean valores numericos
        telefono.setCustomValidity("Introduce solo valores numericos");
        return false;
    }else if(numero.length < 9){
        telefono.setCustomValidity("El largo del telefono es insuficiente, escriba uno de 9 o mas");//se define un largo minimo a respetar
        return false;
    }
telefono.setCustomValidity('');//se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
}

//validador que verifica que el nombre no este vacio y al menos empiece on una mayuscula
function validaNombre(nombre){
    var nombre1 = nombre.value; //asigno el valor de la variable nombre a una nueva variable
    var primeraLetra = nombre1.charAt(0); //asigno el valor de la primera letra a una variable nueva
    var patron=/[A-Z]/g; //se crea un patron
    
            if( nombre1==''||primeraLetra.match(patron)==null)//si el nombre esta vacio o no se encuentra una coincidencia de la primera letra con el patron devuelve el mensaje con setCustomValidity
            {
                nombre.setCustomValidity("Tiene que iniciar con mayuscula");
                return false;
            }
    nombre.setCustomValidity(''); //se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
}

function validaPass(pass){
    var pass1 = pass.value; //asigno el valor de la variable nombre a una nueva variable
    
    if (pass1.length < 6){
        pass.setCustomValidity("Tiene que tener mas de 6 caracteres");
        return false;
    }//si la password tiene menos de 6 caracteres sean cuales sean devolvera el mensaje de setCustomValidity
    
    pass.setCustomValidity(''); //se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
}

function checkNumero(numero){
	
	//Se reemplaza de tal forma de solo aceptar numeros enteros y positivos
	var valor = this.value;
	valor = valor.replace(/\D|\-/,'');
	
	var numerov = numero.value;
	
	//Verifica que el valor sea entero, positivo y que no esté vacio,despliega un mensaje en el caso contrario
	if(numerov==''||numero.match(valor)==null)
	{
		numero.setCustomValidity("Ingrese un numero entero y positivo");
		return false;
	}
	
	numero.setCustomValidity(''); //se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
}

function checkDecimal(interes){
	
	//Este patron permite revisar al compararlo con un numero si dicho numero es decimal
	var decimal= /^[-+]?[0-9]+\.[0-9]+$/; 
	
	//Se guarda el valor en otra variable
	var interesv = interes.value;
	
	//Verifica que el valor sea decimal y que no esté vacio, se despliega un mensaje en el caso contrario
	if(interesv==''||interes.match(decimal)==null)
	{
		interes.setCustomValidity("Ingrese un numero decimal");
		return false;
	}
	
	interes.setCustomValidity(''); //se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
}

function checkFecha(fecha){
	
	//Este patron permite revisar si la fecha fue ingresada en el formato dd/mm/aaaa
	var valor = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
	
	//Se guarda el valor en otra variable
	var fechav = fecha.value; 
	
	//Verifica que la fecha haya sido ingresada correctamente y que no esté vacia, se despliega un mensaje en el caso contrario
	if(fechav==''||fecha.match(valor)==null)
	{
		fecha.setCustomValidity("Ingrese una fecha en el formato dd/mm/aaaa");
		return false;
	}
	
	fecha.setCustomValidity(''); //se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
	
}

