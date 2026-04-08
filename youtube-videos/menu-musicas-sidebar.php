<?php  // Report all PHP errors
error_reporting(E_ALL);
header ('content-type:text-html,charset:UTF-8;');
parse_url('http://www.anagauna.eti.br'); 
set_include_path('/home/anagauna/public_html/musicas/');
?>

<!--  Sidebar Menu Músicas - Bootstrap - Static collapsible  -->

<!--  Menu Musicas Youtube -->

<!-- inicio do MENU VERTICAL / MUSICAS / CANTORES --> 
	
<style> 

@chatset 'UTF-8';
@encode 'UTF-8'; /* ISO-8859-1 */
@language 'BR';

/* CSS / Cores padrão */
		/* color: #f4511e = laranja escuro */
        /* color: #9F00FF = violeta médio royal */
        /* color: #c71585 = rosa médio royal */		 
		/* color: #fffddd = amarelo claro */
		/* color: #ffffff = branco escuro */
		/* color: #005aff = azul royal */
        /* color: #4CAF50 = verde */
        /* color: #D6EFFF = azul muito claro */
        /* color: #C6E9FF = azul claro */
		/* color: #6D6D6D = cinza escuro */


/* CSS LINKS */	
		
        /* CSS LINKS */	
		
		/* unvisited link */
        a:link { color: red; text-decoration: none;}

       /* visited link */
       a:visited { color: green; text-decoration: none;}

       /* mouse over link */
       a:hover { color: hotpink; text-decoration: none;}

       /* selected link */
       a:active { color: blue; text-decoration: none;}


.vertical-menu a { width:200px; /* Set a width if you like */
    background-color: #eeeeee; 
	font-size:normal; position: relative; cursor: pointer;  
    line-height: 1.4em; letter-spacing: 0.1em; word-spacing: 0.1em; 
    display: block; /* Make the links appear below each other */
    margin:0; padding:0; /* Add some padding */ }

.vertical-menu a:hover { background-color: #fffccc; /* Dark grey background on mouse-over */ }

.vertical-menu a:active { background-color: #4CAF50; /* Add a green color to the "active/current" link */ }

</style>	


<body>

<!--  Sidebar Menu Músicas - Bootstrap - Static collapsible  -->

<!--  Menu Musicas Youtube -->

<!-- inicio do MENU VERTICAL / MUSICAS / CANTORES --> 

<p> <br> </p>


<div class="section">
<div class="container-fluid">

<div class="col-md-12">	 <!-- primeira coluna -->
<span>Musicas Preferidas - Menu Lateral</span> <p> </p>

<!-- Sidebar -->
<nav id="sidebar">
		
<div class="col-md-2" style="float:left; margin-right:0px; padding-bottom:15px;"> 
        
    <ol class="Homem-Cantores"> Cantores <br>
	     <div class="vertical-menu"> <!-- primeira coluna -->
         <aside id="sidebar">
                <li> <a href="alejandrosans.php" id="alejandrosans"> Alejandro Sans </a> </li>	
				<li class="active"> <a href="backstreetboys.php" id="backstreetboys"> <b> Backstreet Boys </b> </a> </li> 
				<li> <a href="bandamalta.php" id="bandamalta"> <b> Banda Malta </b> </a> </li>
				<li> <a href="cazuza.php" id="cazuza"> Barão Vermelho (Cazuza) </a> </li>	
	            <li> <a href="frejat.php" id="Frejat"> Barão Vermelho (Frejat) </a> </li>			
				<li> <a href="blitzevandromesquita.php" id="blitzevandromesquita"> Blitz (Evandro Mesquita) </a> </li>	
				<li> <a href="blakeshelton.php" id="blakeshelton"> Blake Shelton </a> </li>	
                <li> <a href="bonjovi.php" id="bonjovi"> <b> Bon Jovi </b> </a> </li>
                <li> <a href="boyceavenue.php" id="boyceavenue"> Boyce Avenue </a> </li>
				<li> <a href="brianadams.php" id="brianadams"> Brian Adams </a> </li>	
                <li> <a href="brunomars.php" id="brunomars"> Bruno Mars </a> </li>
                <li> <a href="davidbustamante.php" id="davidbustamante"> David Bustamante </a> </li>
                <li> <a href="calvinharris.php" id="calvinharris"> Calvin Harris </a> </li>					
                <li> <a href="capitalinicial.php" id="capitalinicial"> <b> Capital Inicial <br> (Dinho) </b> </a> </li>
				<li> <a href="davidfranciosa.php" id="davidfranciosa"> David Franciosa </a> </li> 
				<li> <a href="diferrero.php" id="diferrero"> <b> Di Ferrero <br> (NX Zero) </b>  </a> </li>
				<li> <a href="diogonogueira.php" id="diogonogueira">Diogo Nogueira </a> </li> 
			    <li> <a href="enriqueiglesias.php" id="enriqueiglesias"> Enrique Iglesias </a> </li>
                <li> <a href="enriquejuliano.php" id="enriquejuliano"> Enrique & Juliano </a> </li> 
				<li> <a href="fabiojunior.php" id="fabiojunior"> Fabio Junior </a> </li>	
				<li> <a href="fiukbandahori.php" id="fiukbandahori"> Fiuk (Banda Hori) </a> </li>
                <li> <a href="fredmercury.php" id="fredmercury"> Fred Mercury </a> </li>					
				<li> <a href="axlgunsnroses.php" id="axlgunsnroses"> Axl (Guns N' Roses) </a> </li>	
				<li> <a href="jamesblunt.php" id="jamesblunt"> James Blunt </a> </li>	
				<li> <a href="johnlenon.php" id="johnlenon"> John Lenon </a> </li>	
                <li> <a href="johnsecada.php" id="johnsecada"> John Secada </a> </li>				
                <li> <a href="jotaquest.php" id="jotaquest"> <b> Jota Quest </b> </a> </li>
				<li> <a href="julioiglesias.php" id="julioiglesias"> Julio Iglesias </a> </li>	
                <li> <a href="joejonas.php" id="joejonas"> Joe Jonas <br> (Jonas Brothers)</a> </li>				
                <li> <a href="nickjonas.php" id="nickjonas"> Nick Jonas <br> (Jonas Brothers) </a> </li>
				<li> <a href="justinbieber.php" id="justinbieber"> Justin Bieber </a> </li>					
                <li> <a href="justintimberlake.php" id="justintimberlake"> Justin Timberlake </a> </li>	
				<li> <a href="leonardo.php" id="leonardo"> Leonardo </a> </li>	
				<li> <a href="legiaourbana.php" id="legiaourbana"> Renato Russo <br> (Legião Urbana) </a> </li>	
				<li> <a href="lifehouse.php" id="lifehouse"> Lifehouse </a> </li>	
				<li> <a href="lionelrichie.php" id="lionelrichie"> Lionel Richie</a> </li>				
                <li> <a href="luansantana.php" id="luansantana"> <b> Luan Santana </b> </a></li>				
                <li> <a href="luisfonsi.php" id="luisfonsi"> Luis Fonsi</a></li>
                <li> <a href="maluma.php" id="maluma"> Maluma </a></li>
				<li> <a href="michaelbuble.php" id="michaelbuble"> Michael Bublé </a> </li>
                <li> <a href="michaelbolton.php" id="michaelbolton"> Michael Bolton </a> </li>
                <li> <a href="michaeljackson.php" id="michaeljackson"> Michael Jackson </a> </li>
                <li> <a href="micheltelo.php" id="micheltelo"> <b> Michel Teló </b> </a> </li>				
				<li> <a href="maroon5.php" id="maroon5"> Maroon5 </a> </li>
				<li> <a href="onedirection.php" id="onedirection"> One Direction </a> </li>
				<li> <a href="paralamasdosucesso.php" id="paralamasdosucesso">Paralamas do Sucesso</a>
                <li> <a href="pauloricardorpm.php" id="pauloricardorpm"> Paulo Ricardo (RPM) </a> </li> 
                <li> <a href="projota.php" id="projota"> <b>  Projota </b> </a> </li> 				
				<li> <a href="rickymartin.php" id="rickymartin"> Ricky Martin </a></li>
				<li> <a href="robertocarlos.php" id="robertocarlos"> Roberto Carlos </a> </li>	
                <li> <a href="roupanova.php" id="roupanova"> <b> Roupa Nova </b> </a> </li>
				<li> <a href="samsmith.php" id="samsmith"> Sam Smith </a> </li>
				<li> <a href="simplyred.php" id="simplyred"> Simply Red </a> </li>
                <li> <a href="skank.php" id="skank"> <b> Skank </b> </a> </li>
				<li> <a href="snowpatrol.php" id="snowpatrol"> Snow Patrol </a> </li>
                <li> <a href="tiagoiorc.php" id="tiagoiorc"> Tiago Iorc </a> </li>				
				<li> <a href="titas.php" id="titas"> Titãs </a> </li>	
				<li> <a href="tizianoferro.php" id="tizianoferro"> Tiziano Ferro </a> </li>	
                <li> <a href="victoreleo.php" id="victoreleo"> Victor & Leo</a> </li>
				<li> <a href="wesleysafadao.php" id="wesleysafadao"> Wesley Safadão </a> </li>
                <li> <a href="westlife.php" id="westlife"> Westlife </a> </li>
                <li> <a href="zecapagodinho.php" id="zecapagodinho"> Zeca Pagodinho </a> </li>				
				<li> <a href="zezedicamargoluciano.php" id="zezedicamagoluciano"> Zezé DiCamargo <br> & Luciano</a> </li>				
        </aside>
		</div>
	</ol> 
</div>             


<div class="col-md-2" style="float:left; margin:0px; padding:5px;"> <!-- segunda coluna -->
    
    <ol class="Mulher-Cantoras"> Cantoras <br> 
	    <div class="vertical-menu"> <!-- segunda coluna -->
		<aside id="sidebar">
                <li> <a href="adele.php" id="adele"> Adele </a> </li>	
			   <li> <a href="anacarolina.php" id="anacarolina"> Ana Carolina </a> </li>
                <li> <a href="alessandraamoroso.php" id="alessandraamoroso"> Alessandra Amoroso </a> </li>				
			    <li class="active"> <a href="anitta.php" id="anitta"> <b> Anitta </b> </a> </li>
			 	<li> <a href="arianagrande.php" id="arianagrande"> Ariana Grande </a> </li>
				<li> <a href="avrillavigne.php" id="avrillavigne"> Avril Lavigne </a> </li>	
				<li> <a href="Bodine.php" id="Bodine"> Bodine </a> </li>	
				<li> <a href="bonnietyler.php" id="bonnietyler"> Bonnie Tyler </a> </li>
                <li> <a href="elliegolding.php" id="elliegolding"> Ellie Golding </a> </li>					
                <li> <a href="joelmabandacalypso.php" id="joelmabandacalypso"> Joelma <br> (Banda Calypso) </a> </li> 					
				<li> <a href="beyonce.php" id="beyonce"> <b> Beyonce </b> </a> </li>
                <li> <a href="cassiaeller.php" id="cassiaeller"> Cassia Eller </a> </li>					
                <li> <a href="celinedion.php" id="celinedion"> Celine Dion </a> </li>
				<li> <a href="claudialeitte.php" id="claudialeitte"> Claudia Leitte </a> </li>	
				<li> <a href="colbiecaillat.php" id="colbiecaillat"> Colbie Caillat </a> </li>	
				<li> <a href="christinaaguilera.php" id="christinaaguilega"> Christina Aguilera </a> </li>	
                <li> <a href="danielamercury.php" id="danielamercury"> Daniela Mercury </a> </li>
				<li> <a href="fifthharmony.php" id="fifthharmony"> Fifth Harmony </a> </li>
                <li> <a href="hillaryduff.php" id="hillaryduff"> Hillary Duff </a> </li>					
                <li> <a href="ivetesangalo.php" id="ivetesangalo"> <b> Ivete Sangalo </b> </a> </li>	
                <li> <a href="iza.php" id="iza"> <b> Iza </b> </a> </li>							
                <li> <a href="jenniferlopez.php" id="jenniferlopez"> <b> Jennifer Lopez </b> </a> </li>
				<li> <a href="kattyperry.php" id="kattyperry"> Katty Perry </a> </li>
				<li> <a href="kellykey.php" id="kellykey"> Kelly Key </a> </li>	
				<li> <a href="kesha.php" id="Kesha"> Kesha </a> </li>
				<li> <a href="ladyantebellum.php" id="ladyantebellum"> Lady Antebellum </a> </li>
			    <li> <a href="laurapausine.php" id="laurapausine"> Laura Pausine </a> </li>
				<li> <a href="leonalewis.php" id="leonalewis"> Leona Lewis </a> </li>	
				<li> <a href="lexa.php" id="lexa"> <b> Lexa </b> </a> </li>
                <li> <a href="ludmilla.php" id="ludmilla"> <b> Ludmilla </b> </a> </li>	
                <li> <a href="madonna.php" id="madonna"> Madonna </a> </li>					
                <li> <a href="maiaraemaraisa.php" id="maiaraemaraisa"> <b> Maiara & Maraisa </b> </a> </li>					
                <li> <a href="mariliamendonca.php" id="mariliamendonca"> <b> Marilia Mendonça </b> </a> </li>
				<li> <a href="marinaelali.php" id="marinaelali"> Marina Elali </a> </li>
				<li> <a href="marisamonte.php" id="marisamonte"> Marisa Monte </a> </li>	
                <li> <a href="mileycyrus.php" id="mileycyrus"> Miley Cyrus </a> </li>
                <li> <a href="paulafernandes.php" id="paulafernandes"> <b> Paula Fernandes </b> </a> </li>
                <li> <a href="paulatoller.php" id="paulatoller"> Paula Toller <br> (Kid Abelha) </a> </li>
                <li> <a href="rachelplatten.php" id="rachelplatten"> Rachel Platten</a> </li>				
                <li> <a href="rihanna.php" id="rihanna"> Rihanna</a> </li>
				<li> <a href="roxette.php" id="roxette"> Roxette </a> </li>	
				<li> <a href="sandy.php" id="sandy"> Sandy & Junior </a> </li>
                <li> <a href="selenagomes.php" id="selenagomes"> Selena Gomes </a> </li>					
                <li> <a href="shakira.php" id="shakira"> Shakira</a> </li>	
				<li> <a href="shaniatwain.php" id="shaniatwain"> Shania Twain </a> </li>	
                <li> <a href="simonesimara.php" id="simonesimara"> <b> Simone & Simara </b> </a> </li>
                <li> <a href="taylorswift.php" id="taylorswift"> Taylor Swift </a> </li>					
                <li> <a href="wanessacamargo.php" id="wanessacamargo"> <b> Wanessa Camargo </b> </a> </li>
                <li> <a href="zeliaduncan.php" id="zeliaduncan"> Zelia Duncan </a> </li>					
        </aside>
		</div>		
	</ol>
	    
</div> <!-- col-md-3 -->



