
<?php header ('content-type:text-html; lang=pt-br; charset:utf-8'); ?>

<!DOCTYPE html>

<html lang="pt-br">

<!--  <html http-equiv="Content-Type" content="text/html; charset=iso-8859-1">  <!--  ISO-8859-1  -->
<!--  <html http-equiv="Content-Type" content="text/html; charset=utf-8">  <!--  UTF-8  -->
<!--  <html http-equiv="Content-Type" content="text/html; charset=utf-8">  <!--  HTML 4  -->

<head>
        <!-- <meta charset="UTF-8" lang="BR" content="text/html">   <!--  HTML 5  -->
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  <!--  HTML 4  --> 
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">  <!--  ISO-8859-1  -->
		
        <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrarp, PHP, JQuery, Ajax, MySQL, SQL, Java">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  <!-- compativel com navegadores -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   <!-- uso com Mobile -->        

        <!-- inicio do cabeçalho (propriedades padrão) -->
        <base href="http://www.anagauna.eti.br/" target="_sef">
        <meta http-equiv="refresh" content="999999;url=http://www.anagauna.eti.br/?musicas.php">
        <basefont size="14" color="black">		

        <title>MÚSICAS PREFERIDAS | ANA GAUNA TECH </title>
        <link rel="icon" href="img/anagauna.ico" type="image/x-icon">  <!-- falta fazer icon da imagem do titulo -->	
        <meta name="date" content="18/04/2017">
        <meta name="author" content="Ana Mercedes Gauna">
		
        <meta name="description" content="Ana Mercedes Gauna, Brasileira, AMGAUNA TECNOLOGIA CONSULTORIA COMÉRCIO E SERVIÇOS (CNPJ: 29.052.589/0001-53),		
	          Redes Sociais: @amgauna @anagaunatech, email: anagauna@anagauna.eti.br , email: amgauna@gmail.com , 
	          Skype: amgauna@hotmail.com , Website: anagauna.eti.br , Blog: anagauna.wordpress.com , Blog: anagaunatech.blogspot.com" />	

        <meta name="keywords" content="Ana Mercedes Gauna, CRA-RJ: 03-03161, AMGAUNA CONSULTORIA TECNOLOGIA COMÉRCIO E SERVIÇOS (CNPJ: 29.052.589/0001-53),
	    Senior Business Systems Analyst, it Consultant, Analista de Sistemas, Gerente de Negócios, Gerente de Projetos, Analista de Infraestrutura Client-Server,
		SEO, Facebook Ads, Dev, Big Data, Tecnologia da Informação, IT, TI, amgauna@gmail.com , amgauna@hotmail.com, CTO, IoT, Developer ,
		Segurança das Informações, ISO 27001, ISO 27002, ISO 27003, Segurança, Tecnologia da Informação, Information Technology, Web ,
	    Twitter, @amgauna, @AnaGaunaTech , GitHUB: @anagauna, IT Projects , Projetos Tech, Rio de Janeiro/RJ, RJ, CCNA, CCNA2 , Programador Web ,
		Cloud Solution Provider (CSP), Microsoft Windows Server, Microsoft SQL Server, TCP/IP, SQL, suporte técnico, MCSE, suporte TI , 
        Botafogo, Flamengo, Copacabana, Centro, Glória, Largo do Machado, Ipanema, Humaita, Gávea, Jardim Botânico, Leme, Leblon, zona sul" />


         <!-- Google Analitycs ID = UA-32400539-10 (Ana Mercedes Gauna) -->
         <script>  
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
         ga('create', 'UA-32400539-10', 'auto');
         ga('send', 'pageview');
         </script>

        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T3DD67"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T3DD67');</script>
        <!-- End Google Tag Manager -->

		
		<!-- BOOTSTRAP 3.3.7  / JavaScript / CSS  --> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
        <!--  JQUERY / AJAX -->
         <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>     		
         <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		       
		
         <style>   <!--  CSS -->
		        p:lang(BR) {
                @charset 'UTF-8';
                blockquote, article { font-family: Georgia, Arial, Helvetica, Times, Serif; font-size: large; }
	     </style>

		 
		 <!--  Background Image Responsive -->
<style>
  img background-image { max-width: 1000%; height: auto; 
      background-image: url ("img/motion2018-dark-vermelho.jpg");
      background-repeat: no-repeat;
      background-size: 100% 100%;  
      border: 0px solid silver; }
</style> 
 
 
    <!-- inicio do MENU HOME / Bootstrap -->  <b>
	<style>  <!-- CSS MENU / Bootstrap  -->
	     .navbar {
			 margin-botton: 0;
			 background-color: #f4511e; /* cor laranja */
			 s-index: 9999;
			 border: 0;
			 font-size: 12px !important;
			 line-height: 1.42857143 !important;
			 letter-spacing: 4px;
			 border-radius: 0; }
		 .navbar li a, .navbar .navbar-brand { color: #fffffff !important; }
         .navbar-nav li a:hover, .navbar-nav li.active a
		  { color: #f4511e !important;  /* cor laranja */ 
		    background-color: #ffffff !important; }	
		  .navbar-default .navbar-toggle 
		  { border-color: transparent; color: #ffffff !important; }
	</style>
	

</head>  <!-- fim do cabecalho -->


<body  background="aliceblue">

    <!-- primeira coluna -->
	<div class="col-md-12" style="background:white; margin:0; padding:10px; border:0px solid #aaa">  <!-- primeira coluna -->
		     <center> <p> </p>
			<!--     <img src="http://www.anagauna.eti.br/img/Amgauna2018-LogoAzul.jpg" width="60%" height="auto" align="left">
		     	<p> </p>			 
	
	
            <!--  Rede Social / Bootstrap  -->	
            <div class="hidden-xs" align="right">
			    <p> <br> </p> <center> 
                <a href="https://twitter.com/anagaunatech">      <i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
                <a href="https://twitter.com/amgauna">           <i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
				<a href="https://instagram.com/amgauna">         <i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
				<a href="https://instagram.com/anagaunatech">    <i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
				<a href="https://www.facebook.com/amgauna">      <i class="fa fa-2x fa-fw fa-facebook text-inverse"></i></a>
                <a href="https://br.linkedin.com/in/amgauna">    <i class="fa fa-2x fa-fw fa-linkedin text-inverse"></i></a>
				<a href="https://br.behance.com/in/amgauna">     <i class="fa fa-2x fa-fw fa-behance text-inverse"></i></a> 
                <a href="https://github.com/amgauna">            <i class="fa fa-2x fa-fw fa-github text-inverse"></i></a>
                <a href="https://plus.google.com/+AnaGaunaTech"> <i class="fa fa-2x fa-fw fa-google text-inverse"></i></a>
                <a href="https://anagauna.wordpress.com/">       <i class="fa fa-2x fa-fw fa-wordpress text-inverse"></i></a>
                <a href="https://medium.com/@anagauna">          <i class="fa fa-2x fa-fw fa-medium text-inverse"></i></a>
                <a href="https://www.pinterest.com/amgauna/">    <i class="fa fa-2x fa-fw fa-pinterest text-inverse"></i></a>
                <a href="https://flickr.com/amgauna">            <i class="fa fa-2x fa-fw fa-flickr text-inverse"></i></a>
                <a href="https://tumblr.com/amgauna">            <i class="fa fa-2x fa-fw fa-tumblr text-inverse"></i></a>
                <p> <br></p> </center>
            </div>  <!--  FIM / Rede social  -->
			
			<center> <p>
			<h3> <span style="color:darkblue;"> <b> email:  </b> 
			     <a href="mailto:anagauna@anagauna.eti.br" align="right"> <b> anagauna@anagauna.eti.br </b> </a> 
				 </span> </h3> <br>
			</center>
        </div>

	
    <!-- inicio do MENU HOME / Bootstrap -->  <b>
<div class="col-md-12" style="background:#ffffff; margin:0px; padding:0px; border:0px solid #aaa">	<!-- primeira coluna -->
<nav class="navbar navbar-default navbar-fixed">  <b>
	<div id="MyPage" data-spy="scroll" data-target=".navbar" data-offset="60">		
            <div class="container-fluid">
                <div class="navbar-header">                   			  
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">  
                             <span class="sr-only">Toggle navigation</span>					  
                             <span class="icon-bar"> <a href="#"> </a> </span> 
                             <span class="icon-bar"> <a href="#"> </a> </span> 		
                             <span class="icon-bar"> <a href="#"> </a> </span>  							 
					  </button> 
					  <a class="navbar-brand navbar-right" href="#Menu"> 
					  <span style="color:darkblue;"> <?php include('contadorvisitas.php'); ?> </span> </a> 
                </div>
				<div class="collapse navbar-collapse container-fluid" id="myNavBar">
                     <ul class="nav navbar-nav navbar-right">
                        <li> <a href="http://www.anagauna.eti.br/home.php">Home</a> </li>
						<li> <a href="http://www.anagauna.eti.br/sobremim.php">Sobre Mim</a> </li> 
                        <li> <a href="http://www.anagauna.eti.br/servicos.php">Serviços</a> </li>
                        <li> <a href="http://www.anagauna.eti.br/artigos.php">Artigos</a> </li>
                        <li> <a href="http://www.anagauna.eti.br/antivirus.php">Antivirus</a> </li>
						<li class="active"> <a href="http://www.anagauna.eti.br/musicas.php"> Músicas </a> </li>						
                        <li> <a href="http://pt.gravatar.com/amgauna">Gravatar</a> </li>
                        <li> <a href="http://https://plus.google.com/u/0/+AnaGaunaTech">Google++</a> </li> 
						<li> <a href="http://www.anagauna.eti.br/twitter.php">Twitter</a> </li>				 
                        <li> <a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li> <a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                   </ul>
                </div> 
        </div> </div>
    </nav>  </b>
</div>
<!-- fim do MENU -->


<!--	
<div class="section">
<div class="container">		
<div class="row">	
-->

    <div class="col-md-12"> <!-- terceira coluna -->
         <p> </p>
	    <center>
		<h2><span style="color:darkblue;"> Videos preferidos do Youtube - Cantores e músicas que gosto de ouvir </a> </span> </h2> 
        </center>
    </div>


	
	<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Dinho / Capital Inicial <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/jabmx3QoJGA">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/ekupEx3YLSk">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/kwNTWXm5BtI">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>			
    </div>	
	
	
	<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Os Paralamas do Sucesso <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/ZZmOVlCSCt8">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/trFdRPqjwyk">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/jkDLGRNIEYM">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>			
    </div>	
	

	
	
<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Roupa Nova <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/Ey_O48VB_fU">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/LLbx7lReGx4">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/pXZIktkupz8">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>			
    </div>

<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Jota Quest <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/SW9U-ra2BUA">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/h8y-45T_Hak">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/IUO-o_Bg8AY">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>			
    </div>	
	
	
	<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Skank <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/7UZNHXYLQds">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/81Szobx5SLM">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/qCqIQmMPIEM">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>			
    </div>	

	<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Laura Pausine <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/LnOGdsxakc0">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/s5LAMxM4OV0">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/rKgBvNITpmE">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>			
    </div>		
	
	
	 <div class="col-md-3"> <!-- terceira coluna -->
             <p></p> Jennifer Lopez <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/bjgFH01k0gU">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/t4H_Zoh7G5A">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/IgLcQmlN2Xg">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
	</div>	
	
	
	
		 <div class="col-md-3"> <!-- terceira coluna -->
             <p></p> Rihanna <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/kOkQ4T5WO9E">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/1Uw6ZkbsAH8">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/rJYcmq__nDM">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
	</div>	
	
	
		 <div class="col-md-3"> <!-- terceira coluna -->
             <p></p> Banda Malta <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/TBHQajuE4MM">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/snPSCIScSo0">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/JR7TiUHp4Ak">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
	</div>	
	
	

	<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Enrique Iglesias <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/9sg-A-eS6Ig">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/xFutjZEBTXs">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/rhEqzW5WtbE">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>
    </div>

	
	
	 <div class="col-md-3"> <!-- terceira coluna -->
             <p></p> Luis Fonsi <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/TyHvyGVs42U">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/kJQP7kiw5Fk">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/ejtRWr8fZXg">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
	</div>


		 <div class="col-md-3"> <!-- terceira coluna -->
             <p></p> Maluma <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/t_jHrUE5IOk">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/PJniSb91tvo">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/9xByMBYDRmY">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
	</div>
	
	
		 <div class="col-md-3"> <!-- terceira coluna -->
             <p></p> Ricky Martin <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/iOe6dI2JhgU">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/a3I7wBck0e4">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/p47fEXGabaY">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
	</div>
	
	
	<!-- terceira coluna -->
    <div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Ivete Sangalo <br> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/tnaomsnBIxU">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/0tafa3b6OFI">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/_c3HAz1JPdk">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
	</div>

	
	<!-- terceira coluna -->
    <div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Paula Fernandes <br> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/vrJE0OLpT1k">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/RJPBP_uP58c">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/9l8ghAxFCb8">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
	</div>

	 <div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Victor e Léo <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/7eST1nQ6fiI">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/qTjjBequjGY">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/DULQudMe7vA">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>			
    </div>	
	
	<!-- terceira coluna -->
    <div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Luan Santana <br> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/I3QRtOvOlJs">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/5CF5TCxVXu0">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/MKY9bmNrSP0">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>
	</div>	
	
	 <div class="col-md-3"> <!-- terceira coluna -->		
            <p></p> Anitta <br> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/wlS6Ix7mA0w">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/7Yrghfw1eNo">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/Xp-dKdSUuLk">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
	</div>	

	 <div class="col-md-3"> <!-- terceira coluna -->		
            <p></p> Shakira <br> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/6Mgqbai3fKo">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/-UV0QGLmYys">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/XEvKn-QgAY0">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
	</div>	


	 <div class="col-md-3"> <!-- terceira coluna -->		
            <p></p> BackstreetBoys <br> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/OT5msu-dap8">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/4fndeDfaWCg">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/0Gl2QnHNpkA">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
	</div>	


	 <div class="col-md-3"> <!-- terceira coluna -->		
            <p></p> Bon Jovi <br> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/a1ZFkmTHTQ0">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/vx2u5uUu3DE">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/9BMwcO6_hyA">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
	</div>	
	
	
		<div class="col-md-3"> <!-- terceira coluna -->
             <p></p> Paulo Ricardo / RPM <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/CrBPebqM5V4">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/ej0yOgLkpxw">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/Jan2XcpYTos">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
	</div>	


	
	
	 <div class="col-md-3"> <!-- terceira coluna -->		
            <p></p> Marilia Mendonça <br> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/HJqrbPC6bXM">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/-IYIVmoEXa8">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/HL_uHQDi_0w">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>	
	</div>

		 <div class="col-md-3"> <!-- terceira coluna -->				
	        <p></p> Maiara e Maraisa <br>
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/zpOSJ22Ai7s">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 			
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/0fHKqwhdNJ8">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/lPXinWn-azQ">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p>
	</div>
	
	 <div class="col-md-3"> <!-- terceira coluna -->				
	        <p></p> Simone e Simara <br> 	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/UrT0zCmsN8c">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/9fKyIZPYTrE">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/4n5n4Qqpzmw">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
	</div>
	

	 <div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Enrique e Juliano <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/LmRrLl8aLfE">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>	
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/r73ANL4ecnE">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p> 
            <iframe width="90%" height="auto" src="https://www.youtube.com/embed/2Q6eFRuYa2w">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->	
			<p>			
    </div>


   <div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Iza <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/g8psa0UBZKA">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/NcY80SPnvfE">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/hb0jh-f5zX4">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
	</div>	

	<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Ludmilla <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/8aQTjEotXVw">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/m5h_vEh8Noo">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/3o6uCK4yz7M">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
	</div>	
	
	<div class="col-md-3"> <!-- terceira coluna -->
            <p></p> Projota <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/SBs_pd1QQu8">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/sMUVXJId8Eo">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/lYi02cf89SA">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
            <p> 
	</div>		
	
	 <div class="col-md-3"> <!-- terceira coluna -->
             <p></p> Di Ferrero | NX Zero <br> 		 
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/BtW3bL-r9tg">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/8ZNuugyU2go">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
			<iframe width="90%" height="auto" src="https://www.youtube.com/embed/6tHfr-3P6t4">
            </iframe>  <!--  video Youtube tamanho width="420" height="315" -->
			<p>	
	</div>	

	
	
</body>
 
</html>
