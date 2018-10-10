<?php

session_start();

//$_SESSION["cedula"] = $_POST['cedula'];

//echo $_SESSION["cedula"];
?>
<!doctype html>
<html lang="es">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="stylesheet" href="assets/font/css/font-ct.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
      <title>Test Drive | Plan de Acogida</title>
   </head>
   <body class="d-flex flex-column">
        <a href="#" class="net"><<p class="ml-1 hidde d-none d-sm-block" onclick="prev()">Anterior</p></a>
         <a href="#" class="prev"><p class="mr-1 hidde d-none d-sm-block" onclick="next()">Siguiente</p>></a>
      <div class="form-group col-md-12 col-lg-12 no-gutters  col-sm-12 d-flex justify-content-center align-items-center flex-column" style="padding: 0px;">
         <img class="img-fluid logo mt-4" style="width: 250px" src="assets/img/logo.png" alt="">
         <div class="pasos">
            <ul>
               <li><a onclick="go(1)" class="step_ico step_ico1 active">1</a></li>
               <li><a onclick="go(2)" class="step_ico step_ico2 ">2</a></li>
               <li><a onclick="go(3)" class="step_ico step_ico3 ">3</a></li>
               <li><a onclick="go(4)" class="step_ico step_ico4 ">4</a></li>
               <li><a onclick="go(5)" class="step_ico step_ico5 ">5</a></li>
            </ul>
         </div>
      </div>
      <form id="form_send" action="send.php" method="post">
        <!--  <div class="count-timer">
         <i class="demo-icon icon-5"></i>
         <p class="mx-3">|</p>
         <section id="contReloj">
            <p id="hour">00</p>
               <p>:</p>
            <p id="minute">00</p>
            <p>:</p>
            <p id="second">00</p>
         </section>

         </div> -->
         <!-- PREGUNTA 1 -->
         <div class="form-signin row steps step1" style="">
            <div class="form-group col-md-12 col-lg-12 col-sm-12 d-flex justify-content-center align-items-center flex-column">
               <h2 class="h3 my-3 mt-1 font-weight-normal text-center titulo"><i class="demo-icon icon-84"></i>PISTA 1</h2>
            </div>
            <p class="px-3 text-muted"><span class=""><b>1.</b></span> Integranet es nuestro canal virtual de comunicación interna creado en el año 2017 por Gestión Humana en colaboración con Tecnología en respuesta a la necesidad de favorecer la comunicación en tiempo real entre la compañía y los colaboradores, sin importar el lugar del país donde se encuentren.</p>
            <p class="px-3 text-muted">Al ingresar a Integranet,  podrás consultar el menú Nuestra compañía (al lado izquierdo de la pantalla) y conocer la historia de nuestra empresa, su estrategia corporativa, sus principios corporativos y su política integral. Te invitamos a explorar este menú y responder las siguientes preguntas:</p>
            <div class="d-flex flex-column mx-3" style="width: 100%;">
               <p class="text text-primary">RESUELVE!</p>
            </div>
            <div class="mx-3 row" style="width: 100%;">
               <label for="box-txt-1">
                  <p style="line-height:1.4; font-size:14px;"><b>La misión de la compañía es:</b></p>
               </label>
               <textarea class="form-control" placeholder="Responder Aquí" rows="3" name="preg_1_1" id="preg_1_1" data-required='true' data-name="PISTA 1: pregunta 1"></textarea>
            </div>
            <a class="btn btn-lg mx-3 mt-3 btn-primary btn-block" onclick="next()">Registrar Respuesta</a>
            <div class="form-group col-md-12 col-lg-12 col-sm-12">
               <p class="mt-4 mb-3 text-muted small text-center">Motorysa &copy; 2017-2018</p>
            </div>
         </div>
         <!-- PREGUNTA 1 -->
         <!-- PREGUNTA 2 -->
         <div class="form-signin row  steps step2" style="display: none;">
            <div class="form-group col-md-12 col-lg-12 col-sm-12 d-flex justify-content-center align-items-center flex-column">
               <h2 class="h3 my-3 mt-1 font-weight-normal text-center titulo"><i class="demo-icon icon-84"></i>PISTA 2</h2>
            </div>
            <p class="px-3 text-muted"><span class=""><b>2.</b></span> En el año 2017 se creó la Unidad de Servicios Compartidos (USC); una unidad estratégica que gestiona los procesos administrativos de las empresas Motorysa y CasaToro.</p>
            <div class="d-flex flex-column mx-3" style="width: 100%;">
               <p class="text text-primary">RESUELVE!</p>
               <p>Ingresando al menú Unidad de Servicios Compartidos, ubicado al lado izquierdo de la pantalla,  podrás conocer las áreas que componen dicha unidad, sus responsabilidades, el organigrama y el directorio telefónico. También podrás ver dos videos explicativos sobre el uso de las Herramientas Informáticas GIS (Gestión de Incidencia y Soluciones) y SAI (Soluciones Administrativos Integrales). Te invitamos a explorar este menú y responder las siguientes preguntas:</p>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>1. Las áreas que componen la Unidad de Servicios Compartidos (USC) son:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_1" id="exampleRadios1" value="A" data-required="true" data-name="PISTA 2: pregunta 1">
                     <label class="form-check-label" for="exampleRadios1">
                        <p class="small" style="margin-bottom: 0px;">A. Gerencia General, Gestión Humana, Gerencia de Tecnología, Gerencia Financiera, Gerencia Administrativa, Contabilidad y la Gerencia Jurídica.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_1" id="exampleRadios2" value="B">
                     <label class="form-check-label" for="exampleRadios2">
                        <p class="small" style="margin-bottom: 0px;">B. Mercadeo, Publicidad, Servicio al cliente.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_1" id="exampleRadios3" value="C">
                     <label class="form-check-label" for="exampleRadios3">
                        <p class="small" style="margin-bottom: 0px;">C. Ninguna de las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>2. Las áreas de la Unidad de Servicios Compartidos (USC), que se encuentran ubicadas en la Sede AV 68 son:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_2" id="exampleRadios1.2" value="A" data-required="true" data-name="PISTA 2: pregunta 2">
                     <label class="form-check-label" for="exampleRadios1.2">
                        <p class="small" style="margin-bottom: 0px;">A. Gestión Humana, Gerencia de Tecnología, Contabilidad y la Gerencia Jurídica.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_2" id="exampleRadios2.2" value="B">
                     <label class="form-check-label" for="exampleRadios2.2">
                        <p class="small" style="margin-bottom: 0px;">B. Administrativo, Nómina y Logística</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_2" id="exampleRadios3.2" value="C">
                     <label class="form-check-label" for="exampleRadios3.2">
                        <p class="small" style="margin-bottom: 0px;">C. Ninguna de las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>3. En caso de tener requerimientos en temas de tecnología, el procedimiento a seguir es:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_3" id="exampleRadios1.3" value="A" data-required="true" data-name="PISTA 2: pregunta 3">
                     <label class="form-check-label" for="exampleRadios1.3">
                        <p class="small" style="margin-bottom: 0px;">A. Buscar al personal de sistemas para que me solucione inmediatamente</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_3" id="exampleRadios2.3" value="B">
                     <label class="form-check-label" for="exampleRadios2.3">
                        <p class="small" style="margin-bottom: 0px;">B. Enviar el requerimiento por chat, vía telefónica o celular </p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_3" id="exampleRadios3.3" value="C">
                     <label class="form-check-label" for="exampleRadios3.3">
                        <p class="small" style="margin-bottom: 0px;">C. Ingresar a la herramienta GIS y crear una incidencia.</p>
                     </label>
                  </div>
               </div>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>4. En caso de tener requerimientos en temas  administrativos  (Servicios Generales, Seguros, Activos Fijos, Telefonía Móvil, Vigilancia, Archivo, Gestión Ambiental, Gestión de Calidad y Logística entre otros), yo debo:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_4" id="exampleRadios1.4" value="A" data-required="true" data-name="PISTA 2: pregunta 4">
                     <label class="form-check-label" for="exampleRadios1.4">
                        <p class="small" style="margin-bottom: 0px;">A. Buscar al personal administrativo para que me solucione inmediatamente.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_4" id="exampleRadios2.4" value="B">
                     <label class="form-check-label" for="exampleRadios2.4">
                        <p class="small" style="margin-bottom: 0px;">B. Enviar el requerimiento por chat, vía telefónica o celular. </p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_2_4" id="exampleRadios3.4" value="C">
                     <label class="form-check-label" for="exampleRadios3.4">
                        <p class="small" style="margin-bottom: 0px;">C. Ingresar a la herramienta SAI y crear una incidencia.</p>
                     </label>
                  </div>
               </div>
            </div>
            <a class="btn btn-lg mx-3 mt-3 btn-primary btn-block " onclick="next()">Registrar Respuesta</a>
            <div class="form-group col-md-12 col-lg-12 col-sm-12">
               <p class="mt-4 mb-3 text-muted small text-center">Motorysa &copy; 2017-2018</p>
            </div>
         </div>
         <!-- PREGUNTA 2 -->
         <!-- PREGUNTA 3 -->
         <div class="form-signin row  steps step3" style="display: none;">
            <div class="form-group col-md-12 col-lg-12 col-sm-12 d-flex justify-content-center align-items-center flex-column">
               <h2 class="h3 my-3 mt-1 font-weight-normal text-center titulo">
                  <i class="demo-icon icon-84"></i>PISTA 3<br>
                  <p class="small" style="margin-bottom: 0px; font-size:14px;">GESTIÓN HUMANA</p>
               </h2>
            </div>
            <p class="px-3 text-muted"><span class=""><b>3.</b></span> Trabaja para fortalecer la cultura organizacional con el objetivo de aumentar la productividad, fomentando el desarrollo de nuestros colaboradores en concordancia con la estrategia corporativa.</p>
            <p class="text-muted px-3">Las actividades que desarrolla el área se orientan a:</p>
            <ul>
               <li class="text-muted ">Atraer el mejor talento.</li>
               <li class="text-muted ">Fomentar la calidad de vida de los colaboradores.</li>
               <li class="text-muted ">Garantizar una sana convivencia.</li>
               <li class="text-muted ">Desarrollar talentos.</li>
               <li class="text-muted ">Ofrecer un ambiente seguro y saludable.</li>
               <li class="text-muted ">Promover la creatividad y la innovación.</li>
            </ul>
            <div class="d-flex flex-column mx-3" style="width: 100%;">
               <p class="text text-primary">RESUELVE!</p>
               <p>Te invitamos a explorar el menú Gestión Humana en Integranet, leer la información y responder las siguientes preguntas:</p>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>1. De acuerdo con el modelo de Gestión por competencias de la compañía:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_3_1" id="exampleRadios1.5" value="A" data-required="true" data-name="PISTA 3: pregunta 1">
                     <label class="form-check-label" for="exampleRadios1.5">
                        <p class="small" style="margin-bottom: 0px;">A. El modelo determina el conjunto de características necesarias del equipo de trabajo para alcanzar los objetivos organizacionales.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_3_1" id="exampleRadios2.5" value="B" >
                     <label class="form-check-label" for="exampleRadios2.5">
                        <p class="small" style="margin-bottom: 0px;">B. Las competencias organizacionales de la compañía son Construcción de relaciones, Contribución a los resultados e Innovación.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_3_1" id="exampleRadios3.5" value="C" >
                     <label class="form-check-label" for="exampleRadios3.5">
                        <p class="small" style="margin-bottom: 0px;">C. Todas las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>2. El manual de descripción de cargos:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_3_2" id="exampleRadios1.6" value="A" data-required="true" data-name="PISTA 3: pregunta 2">
                     <label class="form-check-label" for="exampleRadios1.6">
                        <p class="small" style="margin-bottom: 0px;">A. Sirve de soporte para los procesos de reclutamiento y selección de personal.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_3_2" id="exampleRadios2.6" value="B">
                     <label class="form-check-label" for="exampleRadios2.6">
                        <p class="small" style="margin-bottom: 0px;">B. Orienta a los colaboradores en las responsabilidades que deben desempeñar en los diferentes cargos </p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_3_2" id="exampleRadios3.6" value="C">
                     <label class="form-check-label" for="exampleRadios3.6">
                        <p class="small" style="margin-bottom: 0px;">C. Todas las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <a class="btn btn-lg mx-3 mt-3 btn-primary btn-block " onclick="next()">Registrar Respuesta</a>
            <div class="form-group col-md-12 col-lg-12 col-sm-12">
               <p class="mt-4 mb-3 text-muted small text-center">Motorysa &copy; 2017-2018</p>
            </div>
         </div>
         <!-- PREGUNTA 3 -->
         <!-- PREGUNTA 4 -->
         <div class="form-signin row  steps step4" style="display: none;">
            <div class="form-group col-md-12 col-lg-12 col-sm-12 d-flex justify-content-center align-items-center flex-column">
               <h2 class="h3 my-3 mt-1 font-weight-normal text-center titulo">
                  <i class="demo-icon icon-84"></i>PISTA 4<br>
                  <p class="small" style="margin-bottom: 0px; font-size:14px;">SISTEMA DE GESTIÓN INTEGRAL</p>
               </h2>
            </div>
            <p class="px-3 text-muted"><span class=""><b>4.</b></span> Un Sistema Integrado de Gestión (SIG) es una herramienta que permite unificar la normatividad legal e internacional tomando como referencia los lineamientos estratégicos de la empresa para lograr los objetivos del negocio y la satisfacción de clientes, accionistas y colaboradores. </p>
            <p class="text-muted px-3">Los siguientes son los Sistemas de Gestión que la empresa ha adoptado en respuesta a requerimientos del mercado y la legislación:</p>
            <ul>
               <li class="text-muted ">Sistema de Gestión de Calidad</li>
               <li class="text-muted ">Sistema de Gestión Ambiental</li>
               <li class="text-muted ">Sistema de Gestión de Seguridad y Salud en el trabajo</li>
               <li class="text-muted ">Sistema de Administración de Riesgo de Lavado de Activos y Financiación del Terrorismo (Sarlaft)</li>
            </ul>
            <div class="d-flex flex-column mx-3" style="width: 100%;">
               <p class="text text-primary">RESUELVE!</p>
               <p>En el menú Sistema de Gestión Integral, encontrarás el manual, la estructura del Sistema, la descripción de los procesos de la compañía y los procedimientos, así como los formatos e instructivos establecidos. Te invitamos a explorar este menú y responder las siguientes preguntas:</p>
            </div>
            <div class="mx-3 row" style="width: 100%;">
               <label for="box-txt-2">
                  <p style="line-height:1.4; font-size:14px;"><b>1. Considero que desde las responsabilidades de mi cargo, puedo contribuir al cumplimiento de la política del Sistema de Gestión Integral de la siguiente manera:</b></p>
               </label>
               <textarea class="form-control" name="preg_4_1" id="box-txt-2" placeholder="Responder Aquí" rows="3" data-required="true" data-name="PISTA 4: pregunta 1"></textarea>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>2. Son objetivos del sistema de Gestión Integral:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_2" id="exampleRadios1.7" value="A" data-required="true" data-name="PISTA 4: pregunta 2" >
                     <label class="form-check-label" for="exampleRadios1.7">
                        <p class="small" style="margin-bottom: 0px;">A. Mantener y aumentar la rentabilidad sobre patrimonio.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_2" id="exampleRadios2.7" value="B" >
                     <label class="form-check-label" for="exampleRadios2.7">
                        <p class="small" style="margin-bottom: 0px;">B. Mantener o incrementar la participación en el mercado.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_2" id="exampleRadios3.7" value="C" >
                     <label class="form-check-label" for="exampleRadios3.7">
                        <p class="small" style="margin-bottom: 0px;">C. Todas las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>3. Son obligaciones de los colaboradores:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_3" id="exampleRadios1.8" value="A" data-required="true" data-name="PISTA 4: pregunta 3">
                     <label class="form-check-label" for="exampleRadios1.8">
                        <p class="small" style="margin-bottom: 0px;">A. Cumplir con las políticas y normas internas en SST e informar oportunamente a su jefe inmediato acerca de los peligros y riesgos en su lugar de trabajo.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_3" id="exampleRadios2.8" value="B">
                     <label class="form-check-label" for="exampleRadios2.8">
                        <p class="small" style="margin-bottom: 0px;">B. Procurar el cuidado integral de su salud.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_3" id="exampleRadios3.8" value="C">
                     <label class="form-check-label" for="exampleRadios3.8">
                        <p class="small" style="margin-bottom: 0px;">C. Todas las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>4. Elementos de Protección Personal son:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_4" id="exampleRadios1.9" value="A" data-required="true" data-name="PISTA 4: pregunta 4">
                     <label class="form-check-label" for="exampleRadios1.9">
                        <p class="small" style="margin-bottom: 0px;">A. Un conjunto de elementos y dispositivos diseñados para proteger las partes del cuerpo que se encuentran expuestos a riesgos durante el ejercicio de una labor.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_4" id="exampleRadios2.9" value="B">
                     <label class="form-check-label" for="exampleRadios2.9">
                        <p class="small" style="margin-bottom: 0px;">B. Un mecanismo de control de riesgos.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_4" id="exampleRadios3.9" value="C">
                     <label class="form-check-label" for="exampleRadios3.9">
                        <p class="small" style="margin-bottom: 0px;">C. Todas las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>5. Es accidente de trabajo:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_5" id="exampleRadios1.10" value="A" data-required="true" data-name="PISTA 4: pregunta 5">
                     <label class="form-check-label" for="exampleRadios1.10">
                        <p class="small" style="margin-bottom: 0px;">A. Todo acontecimiento repentino que suceda por causa o con ocasión del trabajo que desempeña una persona y que por este hecho el trabajador tenga una lesión en su cuerpo, se perturben sus funciones, se le genere una invalidez o incluso el trabajador muera.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_5" id="exampleRadios2.10" value="B">
                     <label class="form-check-label" for="exampleRadios2.10">
                        <p class="small" style="margin-bottom: 0px;">B. Cuando la actividad que está desarrollando la persona se relaciona directamente con la labor que desempeña.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_4_5" id="exampleRadios3.10" value="C">
                     <label class="form-check-label" for="exampleRadios3.10">
                        <p class="small" style="margin-bottom: 0px;">C. Todas las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <div class="mx-3 row" style="width: 100%;">
               <label for="box-txt-3">
                  <p style="line-height:1.4; font-size:14px;"><b>6. Somos responsables de prevenir que nuestra compañía sea utilizada como medio para llevar a cabo el delito de lavado de activos y financiación del terrorismo. Mencione las acciones que implementará para cumplir con dicha responsabilidad:</b></p>
               </label>
               <textarea class="form-control" name="preg_4_6" id="box-txt-3" placeholder="Responder Aquí" rows="3" data-required="true" data-name="PISTA 4: pregunta 6"></textarea>
            </div>
            <a class="btn btn-lg mx-3 mt-3 btn-primary btn-block " onclick="next()">Registrar Respuesta</a>
            <div class="form-group col-md-12 col-lg-12 col-sm-12">
               <p class="mt-4 mb-3 text-muted small text-center">Motorysa &copy; 2017-2018</p>
            </div>
         </div>
         <!-- PREGUNTA 4 -->
         <!-- PREGUNTA 5 -->
         <div class="form-signin row  steps step5" style="display: none;">
            <div class="form-group col-md-12 col-lg-12 col-sm-12 d-flex justify-content-center align-items-center flex-column">
               <h2 class="h3 my-3 mt-1 font-weight-normal text-center titulo">
                  <i class="demo-icon icon-84"></i>PISTA 5<br>
                  <p class="small" style="margin-bottom: 0px; font-size:14px;">SPIGA</p>
               </h2>
            </div>
            <p class="px-3 text-muted"><span class=""><b>5.</b></span> Spiga es una aplicación ERP (Enterprise Resource Planning), este  sistema nos brinda herramientas que facilitan la gestión administrativa y comercial de la compañía y permiten integrar la información de toda  la organización. Se implementó en Casa Toro en el año 2016 y en Motorysa en el año 2017, con el propósito de optimizar los procesos de la compañía. </p>
            <div class="d-flex flex-column mx-3" style="width: 100%;">
               <p class="text text-primary">RESUELVE!</p>
               <p>En el menú Tecnología, encontrarás Flujogramas Spiga y Tips Tecnológicos. Te invitamos a explorar esta información y responder la siguiente pregunta:</p>
            </div>
            <div class="pregunta-box">
               <p style="line-height:1.4; font-size:14px;"><b>1. En el diagrama de flujo de Spiga se pueden observar los siguientes procesos:</b></p>
               <div class="mx-3 row" style="width: 100%;">
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_5_1" id="exampleRadios1.11" value="A" data-required="true" data-name="PISTA 5: pregunta 1">
                     <label class="form-check-label" for="exampleRadios1.11">
                        <p class="small" style="margin-bottom: 0px;">A. Nuevos, Usados.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_5_1" id="exampleRadios2.11" value="B" >
                     <label class="form-check-label" for="exampleRadios2.11">
                        <p class="small" style="margin-bottom: 0px;">B. Repuestos, Servicio Técnico, Servicio Técnico Maquinaria.</p>
                     </label>
                  </div>
                  <div class="form-group col-md-12 col-lg-12 col-sm-12">
                     <input class="form-check-input" type="radio" name="preg_5_1" id="exampleRadios3.11" value="C" >
                     <label class="form-check-label" for="exampleRadios3.11">
                        <p class="small" style="margin-bottom: 0px;">C. Ninguna de las anteriores</p>
                     </label>
                  </div>
               </div>
            </div>
            <a class="btn btn-lg mx-3 mt-3 btn-primary btn-block " onclick="send()">Registrar Respuesta</a>
            <div class="form-group col-md-12 col-lg-12 col-sm-12">
               <p class="mt-4 mb-3 text-muted small text-center">Motorysa &copy; 2017-2018</p>
            </div>
         </div>
         <!-- PREGUNTA 5 -->
      </form>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" id="btn-comenzar" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body form-group col-md-12 col-lg-12 col-sm-12 d-flex justify-content-center align-items-center flex-column ">
                  <h1 class="h3 my-3 font-weight-normal text-center titulo"><i class="demo-icon icon-84"></i>BIENVENIDO</h1>
                  <div>
                     <h6 class=" text-left px-3 text-primary">Instrucciones</h6>
                     <p class="px-3 text-muted ">Eres parte de nuestra compañía y queremos invitarte a conocer nuestra casa, participando en una carrera de observación virtual.

                        La metodología de rally es muy sencilla, consiste en seguir cinco pistas y contestar las preguntas sin exceder el límite de tiempo estipulado.

                        Puedes empezar a participar teniendo en cuenta la siguiente pista:
                     </p>
                     <div class="row mx-3">
                        <div class="form-group col-md-12 col-lg-12 col-sm-12 mb-4">
                           <img class="img-fluid" src="assets/img/aa.png" alt="">
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-sm-12 d-flex align-items-center justify-content-center">
                           <p class="px-3 text-muted">Te recomendamos mantener la integrante abierta en una pestaña y en la siguiente acceder al Test Rally para que puedas movilizarte fácilmente entre ambos y obtener mejores resultados.</p>
                        </div>
                     </div>
                      <a id="empezar_btn"  data-dismiss="modal" aria-label="Close" class="close btn btn-lg mx-3 mt-2 btn-primary d-flex align-items-center justify-content-center"><i class="demo-icon icon-3"></i> Empezar</a>
                  </div>
               </div>
               <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                  </div> -->
            </div>
         </div>
      </div>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="bootstrap/js/popper.min.js"></script>
      <script src="assets/js/main.js?time=<?php echo date('YmdHis') ?>"></script>
      <script type="text/javascript">
         $('#exampleModalCenter').modal({
         show: true
         })
      </script>
   </body>
</html>
