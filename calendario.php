<?php
  require_once("header.php");
?>
<div class="container">

	<div class="row">
    <div class="col-md-12">
		<h1>Eventos del Calendario Academico</h1>     
			<ul class="breadcrumb">
				<li><a href="index.html"> Inicio </a><span class="divider"> </span></li>
				<li class="active">Eventos del Calendario Academico</li>
			</ul>
		</div> 
        
	<!-- =========================Start Col left section ============================= -->        
		<aside class="col-md-4 col-sm-4">
		<div class="col-left">
			<h4>ORGANIZACIÓN DEL TRABAJO ESCOLAR </h4>
			<p>	CALENDARIZACIÓN ESCOLAR 2015.</p>
			<h6>I BIMESTRE ( 10 semanas)</h6>
			<ul class=" list_2">
				<li>Inicio : Del lunes 2 de marzo al viernes 8 de Mayo </li>
				<li>Vacaciones : Del lunes 11 al viernes 15 de Mayo</li>
			</ul>
			<h6>II BIMESTRE ( 10 Semanas)</h6>
			<ul class=" list_2">
				<li>Inicio : Del lunes 18 de Mayo al viernes 24 de Julio</li>
				<li>Vacaciones : Del lunes 27 de Julio al viernes 7 de Agosto</li>
			</ul>
			<h6>III BIMESTRE (9 Semanas)</h6>
			<ul class=" list_2">
				<li>Inicio : Del lunes 10 de Agosto al viernes 9 de Octubre </li>
				<li>Vacaciones : Del lunes 12 al viernes 16 de Octubre</li>
			</ul>
			<h6>IV BIMESTRE ( 9 Semanas))</h6>
			<ul class=" list_2">
				<li>Del lunes 19 de Octubre al lunes 21 de Diciembre </li>
			</ul>

		</div>
		</aside>
        

        <!-- =========================Start Col right section ============================= -->
		<section class="col-md-8 col-sm-8">
		<div class="col-right">
			<div id="calendar"></div><!-- End calendar --> 
		</div>
		</section><!-- end col right-->
	</div><!-- end row-->
</div><!-- end container-->
<?php
  require_once("footer.php");
?>