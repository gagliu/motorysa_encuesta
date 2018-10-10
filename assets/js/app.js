$(document).foundation();
/*
$(document).ready(function(){

//interceptor del submit

    $('input[type="submit"]').on("click", function () {
        
        msgError = interceptor_inputs();

        if(msgError != ""){
            $('#overlay-error-msg').html(msgError);
            $('#overlay-error').css('display','flex');
            return false;
        }


    });

    $('#overlay-error-cerrar').on('click', function(){
        $('#overlay-error').css('display','none');
    });

     $('#user_ciudad').on('change', function(){
      
        $('#tiempo_text').html($('#user_ciudad option:selected').text());
    });
});*/


var interceptor_inputs = function(){
    var msg = '';
    $(document).find('form').find('input').each(function(){
        msg += input_validate($(this));
    });
    $(document).find('form').find('select').each(function(){
        msg += input_validate($(this));
    });
    msg += aditional_validations();
    return msg;
}


var input_validate = function(element){
    var msg = '';
    
    if(element.data('required')){

        if(element.attr('type') == 'text'){
            if($.trim(element.val()).length < 1){
                msg = input_validate_message(element.data('name'));
            }
        }

        if(element.is("select")) {
            if(element.val() == "" || element.val() == 'NULL'){
                msg = input_validate_message_select(element.data('name'));
            }
        }
        if(element.attr('type') == 'text'){
            if($.trim(element.val()).length < 1){
                msg = input_validate_message(element.data('name'));
            }
        }

        if(element.attr('type') == 'email'){

            var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

            if($.trim(element.val()).length < 1) {  
               msg = input_validate_message(element.data('name')); 
            } else {
                // Se utiliza la funcion test() nativa de JavaScript
                if (regex.test(element.val().trim())) {
                    
                } else {
                   msg = input_validate_message_email(element.data('name'));
                }
            }
        }

        if(element.attr('type') == 'checkbox'){
            if(!element.is(':checked')){
                msg = input_validate_message_checkbox(element.data('name'))
            }   
        }


    }

    return msg;
}

var input_validate_message = function(msg){
    return '<li>El campo '+msg+' es obligatorio</li>';
}

var input_validate_message_email = function(msg){
    return '<li>El '+msg+' no tiene el formato adecuado</li>';
}

var input_validate_message_select = function(msg){
    return '<li>Se debe seleccionar una '+msg+'</li>';
}

var input_validate_message_checkbox = function(msg){
    return '<li>Se debe aceptar que '+msg+'</li>';
}

/****************** ADITIONAL VALIDATIONS **********************/

var aditional_validations = function(){
    if($('#user_opcion').val() == "nuevo" || $('#user_opcion').val() == "pos_repuestos"){
        if($('#user_marca').val() == ""){
            return "<li>Se debe seleccionar una marca</li>";
        }
    }
    return "";
}

$(document).ready(function(){
    $('#user_opcion').on('change', function(){
        if($('#user_opcion').val() == "nuevo" || $('#user_opcion').val() == "pos_repuestos"){
            $('#fila_marca').css('display','');
        }else{
            $('#fila_marca').css('display','none');
        }
        $('#user_marca option:eq(0)').prop('selected', true);
    });
});