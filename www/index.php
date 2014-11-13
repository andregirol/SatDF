<?php
require("includes/functions.php");

# Inicializa variáveis de menu
require_once ("includes/resetvars.php");
# Pega nome da página para ativar o menu CSS
$index = active();

# Inclui cabeçalho
include("includes/header.php");
?>
	
	<!-- start content -->
	<div id="content">
		
		<div class="post">
			<h1 class="title">Apresentação</h1>
			<div class="entry">
				        
			<p>Seja bem vindo! Nesse espaço estão disponíveis várias informações a respeito do 
			Departamento de Física (DF) da Faculdade de Filosofia, Ciências e Letras de Ribeirão Preto (FFCLRP).</p>

			<p>O Departamento de Física (DF) é responsável pelo curso de graduação em Física Médica, no período noturno, 
			com duração mínima de cinco anos. Esse é o único curso de graduação em Física Médica do Brasil, os outros são ênfases ou especializações.</p>

			<p>O Departamento também oferece disciplinas da área de Física a outros cursos da FFCLRP e de outras unidades do Campus de Ribeirão Preto.</p>

			<p>Desde 1986 oferece o curso de pós-graduação em Física Aplicada à Medicina e Biologia em nível de Mestrado e desde 1995 oferece o mesmo curso em nível de Doutorado. 
			Esse curso foi o primeiro nesta especialidade a ser oferecido na América Latina.</p>
			
			<p>Para saber mais sobre o curso de graduação, acesse a <a href="fisicamedica.php" title="Ir para página do curso de Física Médica" >página do curso</a>.</p>
				
			</div>
		</div>
	</div>
	
	<!-- end content -->
	

<?php
include("includes/footer.html")
?>