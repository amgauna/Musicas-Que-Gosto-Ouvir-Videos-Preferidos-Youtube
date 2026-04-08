<?php  // Report all PHP errors
error_reporting(E_ALL);
header ('content-type:text-html,charset:UTF-8;');
parse_url('http://www.anagauna.eti.br'); 
set_include_path('/home/anagauna/public_html/musicas/');
?>

<!DOCTYPE html>

<html lang="BR">

<head>

        <title>Musicas Preferidas (anagaunatech) </title>
        <link rel="icon" href="img/anagauna.ico" type="image/x-icon">  <!-- falta fazer icon da imagem do titulo -->	
        <meta name="date" content="18/04/2017">
        <meta name="author" content="Ana Mercedes Gauna">
		
        <meta name="description" content="Músicas preferidas - Youtube"/>	

        <meta name="keywords" content="músicas preferidas, videos, youtube"/>

	<base href="http://www.anagauna.eti.br/musicas/" target="_sef" />  

    <link rel="icon" href="../img/gauna2.jpg" type="image/x-icon">  <!-- icon do Site -->	       
 
    
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, 
	                               maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <!-- navegadores web compativeis -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,IE=7,IE=9,IE=10,chrome=1,mozilla=firefox" /> 

    <meta name="generator" content="Notepad++">

    <!-- Define o tipo padrão da linguagem de script do documento -->
    <meta http-equiv="content-script-type" content="text/javascript" /> 
	<meta http-equiv="content-style-type" content="text/css" />	
    <meta http-equiv="content-html-type" content="text/html" />	

    <!-- Charset = UTF-8 / ISO-8859-1 / HTML5 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="pt-br" />
    <meta charset="utf-8" />  
	
	<!-- the document's preferred stylesheet -->
	<meta http-equiv="default-style" content="/css/estilo2020.css" />
	    
	<!--  CSS - Estilo Padrão -->
    <link href="../css/estilo2020.css" rel="stylesheet" type="text/css"> 

	<!-- CSS / BOOTSTRAP 4.4.1 --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            
    <!--  JavaScript / JQUERY / AJAX / ANGULAR JS (colocar no final dentro do body) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--  Fim SCRIPT (colocar no final dentro do Body) -->


<style>

@chatset 'UTF-8'; /* 'ISO-8859-1 */
@encode 'UTF-8';
@language 'pt-BR';

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
		
		/* unvisited link */
        a:link { color: red; text-decoration: none;}

       /* visited link */
       a:visited { color: green; text-decoration: none;}

       /* mouse over link */
       a:hover { color: hotpink; text-decoration: none;}

       /* selected link */
       a:active { color: blue; text-decoration: none;}

</style>
		 
</head>  <!-- fim do cabecalho -->


<body>
		 
<div style="background:#9F00FF /* violeta */; color:white; border:2px solid #aaa;
                              margin:0px; padding-top:10px; padding-bottom:10px; 
							  padding-left:10px; padding-right:10px;">
    <!-- primeira coluna -->		
	<!-- #FFEBCD cor blanchedalmond -->	 <!-- #F0FFF0  cor manÃ¡ verde claro  -->	
		<center> 
        <span> 
		     <b>  Ana Gauna (IT Consultant | Senior Business Systems Analyst | Web Developer Back-end ) <br> 
		     Hangouts:  <a href="mailto:amgauna@gmail.com" style="color:gold;"> amgauna@gmail.com  </a> 
		     | Skype:   <a href="mailto:amgauna@gmail.com"  style="color:gold;"> amgauna@hotmail.com </a> 
		     | Twitter: <a href="http://twitter.com/amgauna/" style="color:gold;"> @amgauna </a> <br>  
             Site utilizando as tecnologias: HTML5, CSS3, JavaScript, Bootstrap 4.3.1, PHP7, JQuery <p> </p>
			 Ultima atualizacao de links em 12 de Maio de 2020 (Site ainda em construcao)</b> 
	    </span>
		</center>
</div>

    <!-- primeira coluna -->
	<!-- #FFEBCD cor blanchedalmond / #F0FFF0  cor manÃ¡ verde claro  / #007bff  / #6351ce violeta -->	

<div style="background: linear-gradient(to right, #6351ce, #33AEFF, #6351ce);
	        color:#ffffff; margin:0px; padding:10px; border: 1px solid #aaa;"> 
	
        <center>
		<span> <b> <i> Videos preferidos do Youtube - Musicas que gosto de ouvir </b> </i> </span> 
        </center>
</div>
	

<p> </p>

<!--  Sidebar Menu Músicas - Bootstrap - Static collapsible  -->

<!--  Menu Musicas Youtube -->

<!-- inicio do MENU VERTICAL / MUSICAS / CANTORES --> 


<!--  Menu Musicas Youtube -->
<?php require_once("menu-musicas-sidebar.php"); ?>
<!-- fim do MENU -->

<p> </p>

	

