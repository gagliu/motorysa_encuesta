$(document).ready(function(){

    var tiempo = {
        hora: 0,
        minuto: 0,
        segundo: 0
    };

    var tiempo_corriendo = null;

    $("#exampleModalCenter" || "#btn-comenzar" || "#empezar_btn").click(function(){

            // $(this).text('Detener');
            tiempo_corriendo = setInterval(function(){
                // Segundos
                tiempo.segundo++;
                if(tiempo.segundo >= 60)
                {
                    tiempo.segundo = 0;
                    tiempo.minuto++;
                }

                // Minutos
                if(tiempo.minuto >= 60)
                {
                    tiempo.minuto = 0;
                    tiempo.hora++;
                }

                $("#hour").text(tiempo.hora < 10 ? '0' + tiempo.hora : tiempo.hora);
                $("#minute").text(tiempo.minuto < 10 ? '0' + tiempo.minuto : tiempo.minuto);
                $("#second").text(tiempo.segundo < 10 ? '0' + tiempo.segundo : tiempo.segundo);
            }, 1000);

    })
})


var step = 1;
var next = function(){
    window.scrollTo(0, 0);
    //console.log('next '+'raw step '+step);
    if (step < 5) {
      step++;
      //step++;
      //console.log('next '+'step '+step);
      // $('.steps').hide();
      // $('.step'+step).show();
      // $('.step_ico').removeClass('active');
      // for (var i = 1; i <= step; i++) {
      //     $('.step_ico'+i).addClass('active');
      // }
      go(step);
    }
}

var prev = function(){
    if(step > 1){
      step--;
      //step--;
      //console.log('prev '+'step '+step);
      go(step);
    }
}

var go = function(i){
    step = i;
    //console.log('go '+'step '+step);
    //step++;
    //console.log('go '+'step '+step);
    $('.steps').hide();
    $('.step'+step).show();
    $('.step_ico').removeClass('active');
    for (var i = 1; i <= step; i++) {
        $('.step_ico'+i).addClass('active');
    }
    //next();
}

var send = function(){
    $('.steps').show();
    //$('#form_send').submit();
    var msgError = interceptor_inputs();
    if(msgError != ""){
        $('.steps').hide();
        $('.step5').show();
        alert(msgError);
        return false;
    }else{
        $('#form_send').submit();
    }
}



/**************************/

var interceptor_inputs = function(){
    //console.log('interceptor_inputs');
    var msg = '';
    $(document).find('form').find('input, textarea').each(function(){
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
        if(element.is("textarea")){
            if($.trim(element.val()).length < 1){
                msg = input_validate_message(element.data('name'));
            }
        }

        if(element.attr('type') == 'radio'){
            if(!$('input[name="'+element.attr('name')+'"]').is(":checked")){
                msg = input_validate_message(element.data('name'));
            }
        }

        if(element.is("select")) {
            if(element.val() == "" || element.val() == 'NULL'){
                msg = input_validate_message_select(element.data('name'));
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
    return '- '+msg+' es un campo obligatorio\n';
}

var input_validate_message_email = function(msg){
    return '- El '+msg+' no tiene el formato adecuado\n';
}

var input_validate_message_select = function(msg){
    return '- Se debe seleccionar una '+msg+'\n';
}

var input_validate_message_checkbox = function(msg){
    return '- Se debe aceptar que '+msg+'\n';
}

/****************** ADITIONAL VALIDATIONS **********************/

var aditional_validations = function(){
    if($('#user_opcion').val() == "nuevo" || $('#user_opcion').val() == "pos_repuestos"){
        if($('#user_marca').val() == ""){
            return "<li>Se debe seleccionar una marca\n";
        }
    }
    return "";
}
