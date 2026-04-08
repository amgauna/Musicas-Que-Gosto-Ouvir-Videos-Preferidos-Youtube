

<head>

    <!-- inicio do cabeçalho (propriedades padrão) -->
    <title>INDICE BARRA LATERAL SIDEBAR</title>
    <base href="http://anagauna.eti.br/musicas/videos-cantores.php" target="_sef">

    <meta charset="utf-8">
		
    <!-- compativel com navegadores -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        
    <!-- uso com Mobile -->  
	<meta name="viewport" content="width=device-width, initial-scale=1">         

    <meta name="date" content="18/12/2022">
    <meta name="author" content="Ana Mercedes Gauna">
		
    <meta name="description" content="Músicas Favoritas - Vídeos do Youtube" />	
    <meta name="keywords" content="Músicas, vídeos, Youtube, cantores, cantoras">
   

	<!-- BOOTSTRAP 5.2.3 / CSS  --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
       
    
    <!-- Fonte Awesome 4.3.0 -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		

<!--  CSS  ===========================================================================  -->    

    <style> 
        
        /*  CSS */
        @charset 'UTF-8'; 
        @language 'pt-br';
		 
	    /*  Background Image Responsive */
        .img background-image { max-width: 100%; height: auto; 
                                background-image: url ("#");
                                background-repeat: no-repeat;
                                background-size: 100% 100%;  
                                border: 0px solid #aaa; 
                             }

/* =================================================================================== */

        /* Controle de Volume / Som dos Videos */
        var video = document.getElementById();
        video.volume = 0.5;
        audio.volume = 0.5;
        video.width = 420px; 
        video.height = 315px;


/* ========================================================================================= */

/* The side navigation menu */
.sidenav {
  height: auto; /* 100% Full-height */
  width: 150px; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
  border: 1px solid #aaa;
  float:left;
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: medium;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover { color: blue; }

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: large;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
  float: right;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: medium;}
}    

</style>

<!--  JAVASCRIPT  ===========================================================================  -->

        <!-- BOOTSTRAP 5.2.3 / JavaScript  --> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>	


        <!--  JQUERY / AJAX -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
 

        <script>
        /* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
        </script>	

<!--  JAVASCRIPT  ===========================================================================  -->  

</head>  <!-- fim do cabecalho -->


<!-- INDICE / Side navigation / Menu Lateral -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <span><b>CANTORES</b></span>
      <p></p>				
      <a href="#"> Alejandro Sans </a> 
      <a href="#"> Backstreet Boys </a>  
      <a href="#"> Banda Malta </a> 
      <a href="#"> Barão Vermelho <br> Cazuza </a> 
      <a href="#"> Barão Vermelho <br> Frejat </a> 		
      <a href="#"> Evandro Mesquita <br> Blitz </a> 	
      <a href="#"> Blake Shelton </a> 	
      <a href="#"> Bon Jovi </a> 
      <a href="#"> Boyce Avenue </a> 
      <a href="#"> Brian Adams </a> 	
      <a href="#"> Bruno Mars </a> 
      <a href="#"> David Bustamante </a> 
      <a href="#"> Calvin Harris </a> 					
      <a href="#"> Dinho <br> Capital Inicial</a>
		  <a href="#"> David Franciosa </a> 
		  <a href="#"> Di Ferrero <br> NX Zero</a> 
		  <a href="#"> Diogo Nogueira </a> 
		  <a href="#"> Enrique Iglesias </a> 
      <a href="#"> Enrique e Juliano </a> 
		  <a href="#"> Fabio Junior </a> 
		  <li> <a href="#"> Fiuk (Banda Hori) </a> 
        <li> <a href="#"> Fred Mercury </a> 				
		  <li> <a href="#"> Guns N' Roses (Axl)</a> 
		  <li> <a href="#"> James Blunt </a> 	
	 	  <li> <a href="#"> John Lenon </a>
        <li> <a href="#"> John Secada </a> 					
        <li> <a href="#"> Jota Quest</a> 
		  <li> <a href="#"> Julio Iglesias </a> 
        <li> <a href="#"> Joe (Jonas Brothers)</a> 			
        <li> <a href="#"> Nick (Jonas Brothers) </a> 
		  <li> <a href="#"> Justin Bieber </a> 				
        <li> <a href="#"> Justin Timberlake </a> 	
		  <li> <a href="#"> Leonardo </a> 	
		  <li> <a href="#"> Legião Urbana <br> Renato Russo </a> 	
		  <li> <a href="#"> Lifehouse </a> 	
		  <li> <a href="#"> Lionel Richie</a> 				
        <li> <a href="#"> Luan Santana</a>			
        <li> <a href="#"> Luis Fonsi</a>
        <li> <a href="#"> Maluma </a>
		  <li> <a href="#"> Michael Bublé </a> 
        <li> <a href="#"> Michael Bolton </a> 
        <li> <a href="#"> Michael Jackson </a> 
        <li> <a href="#"> Michel Teló </a> 				
		  <li> <a href="#"> Maroon5 </a> 
		  <li> <a href="#"> One Direction </a> 
		  <li> <a href="#"> Paralamas do Sucesso</a>
        <li> <a href="#"> Paulo Ricardo (RPM) </a>  
        <li> <a href="#"> Projota </a> 				
		  <li> <a href="#"> Ricky Martin </a>
		  <li> <a href="#"> Roberto Carlos </a> 
        <li> <a href="#"> Roupa Nova</a> 
		  <li> <a href="#"> Sam Smith </a> 
		  <li> <a href="#"> Simply Red </a> 
        <li> <a href="#"> Skank</a> 
	 	  <li> <a href="#"> Snow Patrol </a> 
        <li> <a href="#"> Tiago Iorc </a> 			
		  <li> <a href="#"> Titãs </a> 	
		  <li> <a href="#"> Tiziano Ferro </a> 
        <li> <a href="#"> Victor e Leo</a> 
		  <li> <a href="#"> Wesley Safadão </a> 
        <li> <a href="#"> Westlife </a> 
    <a href="#"> Zeca Pagodinho </a> 			
		<a href="#"> Zezé DiCamargo e Luciano</a> 	
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">open</span>

<!-- Add all page content inside this div if you want the sidenav 
     to push page content to the right (not used if you only want
     the sidenav to sit on top of the page -->
<!-- Exibição dos vídeos  / Videos Youtube tamanho = width="420" e height="315" -->
<div id="main" class="col-lg-12" style="margin:auto; padding: 9px 9px 9px 9px;">

<div> Dinho / Capital Inicial <br> 		 
	<iframe width="350" height="300" src="https://youtube.com/embed/jabmx3QoJGA"></iframe>  	
    <iframe width="350" height="300" src="https://youtube.com/embed/ekupEx3YLSk"></iframe>  
    <iframe width="350" height="300" src="https://youtube.com/embed/Tm9tJ80GR_M"></iframe> 			
</div>	
	
<hr color="blue" size="10px" width="100%">

</div>

