
<html>
<head>

<!--  Sidebar Menu Músicas - Bootstrap - Static collapsible  -->

<!--  Menu Musicas Youtube -->
<!-- inicio do MENU VERTICAL / MUSICAS / CANTORES -->  <b>
	 
<style>

aside {
  width: 30%;
  padding-left: 15px;
  margin-left: 15px;
  float: right;
  font-style: italic;
  background-color: aliceblue;
}

/* Add a black background color to the top navigation */
.topnav {background-color: #333; overflow: hidden;}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {background-color: #04AA6D; color: white;}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {display: none;}

/* Dropdown container - needed to position the dropdown content */
.dropdown {float: left; overflow: hidden;}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {background-color: #555; color: white;}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd; color: black;}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {display: block;}

/* When the screen is less than 600 pixels wide, hide all links, 
   except for the first one ("Home"). Show the link that contains 
			should open and close the topnav (.icon) */
			
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {display: none;}
  .topnav a.icon {float: right; display: block;}
}


/* The "responsive" class is added to the topnav with JavaScript when the user 
   clicks on the icon. This class makes the topnav	look good on small screens 
			(display the links vertically instead of horizontally) */
			
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

</style>	


<script>

/* Toggle between adding and removing the "responsive" class 
   to topnav when the user clicks on the icon 
*/

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
     

<body>

<!--  Menu Musicas Youtube -->
<?php 
require_once("musicas/musicas.php"); 
require_once("musicas/musicas-topo.php"); 
?>
<!-- fim do MENU -->
<p> <br> </p>

<div class="container-fluid">
<div class="row">
<p> <br> </p>


<!-- Barra Lateral -->    
<aside> 
   <h3>Musicas Preferidas</h3>
   <p></p>
   <p>Menu Lateral</p>
   <p><p>
</aside>


<div class="topnav" id="myTopnav">

     <div class="dropdown">
          <button class="dropbtn"><b>Homens Cantores</b>
          <i class="fa fa-caret-down"></i>
          </button> 	    
     <div class="dropdown-content">
     <ol>
         <li> <a href="alejandrosans.php" id="alejandrosans"> Alejandro Sans </a> </li>	
				     <li> <a href="backstreetboys.php" id="backstreetboys"> Backstreet Boys </a> </li> 
				     <li> <a href="bandamalta.php" id="bandamalta"> Banda Malta </a> </li>
		       <li> <a href="cazuza.php" id="cazuza"> Barão Vermelho (Cazuza) </a> </li>	
         <li> <a href="frejat.php" id="Frejat"> Barão Vermelho (Frejat) </a> </li>			
				     <li> <a href="blitzevandromesquita.php" id="blitzevandromesquita"> Blitz (Evandro Mesquita) </a> </li>	
				     <li> <a href="blakeshelton.php" id="blakeshelton"> Blake Shelton </a> </li>	
         <li> <a href="bonjovi.php" id="bonjovi"> Bon Jovi </a> </li>
         <li> <a href="boyceavenue.php" id="boyceavenue"> Boyce Avenue </a> </li>
				     <li> <a href="brianadams.php" id="brianadams"> Brian Adams </a> </li>	
         <li> <a href="brunomars.php" id="brunomars"> Bruno Mars </a> </li>
         <li> <a href="davidbustamante.php" id="davidbustamante"> David Bustamante </a> </li>
         <li> <a href="calvinharris.php" id="calvinharris"> Calvin Harris </a> </li>					
         <li> <a href="capitalinicial.php" id="capitalinicial"> Capital Inicial (Dinho) </a> </li>
				     <li> <a href="davidfranciosa.php" id="davidfranciosa"> David Franciosa </a> </li>
				     <li> <a href="diferrero.php" id="diferrero">Di Ferrero (NX Zero) </a> </li>
				     <li> <a href="diogonogueira.php" id="diogonogueira">Diogo Nogueira </a> </li>
			      <li> <a href="enriqueiglesias.php" id="enriqueiglesias"> Enrique Iglesias </a> </li>
         <li> <a href="enriquejuliano.php" id="enriquejuliano"> Enrique e Juliano </a> </li> 
				     <li> <a href="fabiojunior.php" id="fabiojunior"> Fabio Junior </a> </li>	
				     <li> <a href="fiukbandahori.php" id="fiukbandahori"> Fiuk (Banda Hori) </a> </li>
         <li> <a href="fredmercury.php" id="fredmercury"> Fred Mercury </a> </li>					
				     <li> <a href="axlgunsnroses.php" id="axlgunsnroses"> Axl (Guns N' Roses) </a> </li>	
				     <li> <a href="jamesblunt.php" id="jamesblunt"> James Blunt </a> </li>	
				     <li> <a href="johnlenon.php" id="johnlenon"> John Lenon </a> </li>	
         <li> <a href="johnsecada.php" id="johnsecada"> John Secada </a> </li>					
         <li> <a href="jotaquest.php" id="jotaquest">Jota Quest</a> </li>
				     <li> <a href="julioiglesias.php" id="julioiglesias"> Julio Iglesias </a> </li>	
         <li> <a href="joejonas.php" id="joejonas"> Joe Jonas (Jonas Brothers)</a> </li>				
         <li> <a href="nickjonas.php" id="nickjonas"> Nick Jonas (Jonas Brothers) </a> </li>
				     <li> <a href="justinbieber.php" id="justinbieber"> Justin Bieber </a> </li>					
         <li> <a href="justintimberlake.php" id="justintimberlake"> Justin Timberlake </a> </li>	
				     <li> <a href="leonardo.php" id="leonardo"> Leonardo </a> </li>	
				     <li> <a href="legiaourbana.php" id="legiaourbana"> Renato Russo <br> (Legião Urbana) </a> </li>	
				     <li> <a href="lifehouse.php" id="lifehouse"> Lifehouse </a> </li>	
				     <li> <a href="lionelrichie.php" id="lionelrichie"> Lionel Richie</a> </li>				
         <li> <a href="luansantana.php" id="luansantana"> Luan Santana</a></li>				
         <li> <a href="luisfonsi.php" id="luisfonsi"> Luis Fonsi</a></li>
         <li> <a href="maluma.php" id="maluma"> Maluma </a></li>
				     <li> <a href="michaelbuble.php" id="michaelbuble"> Michael Bublé </a> </li>
         <li> <a href="michaelbolton.php" id="michaelbolton"> Michael Bolton </a> </li>
         <li> <a href="michaeljackson.php" id="michaeljackson"> Michael Jackson </a> </li>
         <li> <a href="micheltelo.php" id="micheltelo"> Michel Teló </a> </li>				
				     <li> <a href="maroon5.php" id="maroon5"> Maroon5 </a> </li>
				     <li> <a href="onedirection.php" id="onedirection"> One Direction </a> </li>
				     <li> <a href="paralamasdosucesso.php" id="paralamasdosucesso">Paralamas do Sucesso</a>
         <li> <a href="pauloricardorpm.php" id="pauloricardorpm"> Paulo Ricardo (RPM) </a> </li> 
         <li> <a href="projota.php" id="projota"> Projota </a> </li> 				
				     <li> <a href="rickymartin.php" id="rickymartin"> Ricky Martin </a></li>
				     <li> <a href="robertocarlos.php" id="robertocarlos"> Roberto Carlos </a> </li>	
         <li> <a href="roupanova.php" id="roupanova">Roupa Nova</a> </li>
									<li> <a href="samsmith.php" id="samsmith"> Sam Smith </a> </li>
				     <li> <a href="simplyred.php" id="simplyred"> Simply Red </a> </li>
         <li> <a href="skank.php" id="skank"> Skank</a> </li>
				     <li> <a href="snowpatrol.php" id="snowpatrol"> Snow Patrol </a> </li>
         <li> <a href="tiagoiorc.php" id="tiagoiorc"> Tiago Iorc </a> </li>				
				     <li> <a href="titas.php" id="titas"> Titãs </a> </li>	
				     <li> <a href="tizianoferro.php" id="tizianoferro"> Tiziano Ferro </a> </li>	
         <li> <a href="victoreleo.php" id="victoreleo"> Victor & Leo</a> </li>
				     <li> <a href="wesleysafadao.php" id="wesleysafadao"> Wesley Safadão </a> </li>
         <li> <a href="westlife.php" id="westlife"> Westlife </a> </li>
         <li> <a href="zecapagodinho.php" id="zecapagodinho"> Zeca Pagodinho </a> </li>				
				     <li> <a href="zezedicamargoluciano.php" id="zezedicamagoluciano"> Zezé DiCamargo e Luciano</a> </li>				
     </ol>   
     </div> </div>
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>  


<div class="topnav" id="myTopnav">

     <div class="dropdown">
          <button class="dropbtn"><b>Mulheres Cantores</b>
          <i class="fa fa-caret-down"></i>
          </button> 			    
     <div class="dropdown-content">
        <ol>
            <li> <a href="adele.php"> Adele </a> </li>	
			         <li> <a href="anacarolina.php"> Ana Carolina </a> </li>
            <li> <a href="alessandraamoroso.php"> Alessandra Amoroso </a> </li>				
			         <li> <a href="anitta.php"> Anitta </a> </li>
            <li> <a href="arianagrande.php"> Ariana Grande </a> </li>
				        <li> <a href="avrillavigne.php"> Avril Lavigne </a> </li>	
			         <li> <a href="Bodine.php"> Bodine </a> </li>	
				        <li> <a href="bonnietyler.php"> Bonnie Tyler </a> </li>
            <li> <a href="elliegolding.php"> Ellie Golding </a> </li>					
            <li> <a href="joelmabandacalypso.php"> Joelma (Banda Calypso) </a> </li>					
				        <li> <a href="beyonce.php"> Beyoncé </a> </li>
            <li> <a href="cassiaeller.php"> Cassia Eller </a> </li>					
            <li> <a href="celinedion.php"> Celine Dion </a> </li>
				        <li> <a href="claudialeitte.php"> Claudia Leitte </a> </li>	
			         <li> <a href="colbiecaillat.php"> Colbie Caillat </a> </li>	
				        <li> <a href="christinaaguilera.php"> Christina Aguilera </a> </li>	
            <li> <a href="danielamercury.php"> Daniela Mercury </a> </li>
				        <li> <a href="fifthharmony.php"> Fifth Harmony </a> </li>
            <li> <a href="hillaryduff.php"> Hillary Duff </a> </li>					
            <li> <a href="ivetesangalo.php"> Ivete Sangalo </a> </li>	
            <li> <a href="iza.php"> Iza </a> </li>							
            <li> <a href="jenniferlopez.php"> Jennifer Lopez </a> </li>
				        <li> <a href="kattyperry.php"> Katty Perry </a> </li>
				        <li> <a href="kellykey.php" id="kellykey"> Kelly Key </a> </li>	
				        <li> <a href="kesha.php" id="Kesha"> Kesha </a> </li>
				        <li> <a href="ladyantebellum.php" id="ladyantebellum"> Lady Antebellum </a> </li>
			         <li> <a href="laurapausine.php" id="laurapausine"> Laura Pausine </a> </li>
				        <li> <a href="leonalewis.php" id="leonalewis"> Leona Lewis </a> </li>	
				        <li> <a href="lexa.php" id="lexa"> Lexa </a> </li>
            <li> <a href="ludmilla.php" id="ludmilla"> Ludmilla </a> </li>	
            <li> <a href="madonna.php" id="madonna"> Madonna </a> </li>					
            <li> <a href="maiaraemaraisa.php" id="maiaraemaraisa"> Maiara e Maraisa </a> </li>					
            <li> <a href="mariliamendonca.php" id="mariliamendonca"> Marilia Mendonça </a> </li>
			         <li> <a href="marinaelali.php" id="marinaelali"> Marina Elali </a> </li>
				        <li> <a href="marisamonte.php" id="marisamonte"> Marisa Monte </a> </li>	
            <li> <a href="mileycyrus.php" id="mileycyrus"> Miley Cyrus </a> </li>
            <li> <a href="paulafernandes.php" id="paulafernandes"> Paula Fernandes </a> </li>
            <li> <a href="paulatoller.php" id="paulatoller"> Paula Toller <br> (Kid Abelha) </a> </li>
            <li> <a href="rachelplatten.php" id="rachelplatten"> Rachel Platten</a> </li>				
            <li> <a href="rihanna.php" id="rihanna"> Rihanna</a> </li>
				        <li> <a href="roxette.php" id="roxette"> Roxette </a> </li>	
				        <li> <a href="sandy.php" id="sandy"> Sandy e Junior </a> </li>
            <li> <a href="selenagomes.php" id="selenagomes"> Selena Gomes </a> </li>					
            <li> <a href="shakira.php" id="shakira"> Shakira</a> </li>	
				        <li> <a href="shaniatwain.php" id="shaniatwain"> Shania Twain </a> </li>	
            <li> <a href="simonesimara.php" id="simonesimara"> Simone e Simara </a> </li>
            <li> <a href="taylorswift.php" id="taylorswift"> Taylor Swift </a> </li>					
            <li> <a href="wanessacamargo.php" id="wanessacamargo"> Wanessa Camargo </a> </li>
            <li> <a href="zeliaduncan.php" id="zeliaduncan"> Zelia Duncan </a> </li>					
        </ol>
        </div> </div>  
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>  

</div> </div>

</body>
</html>