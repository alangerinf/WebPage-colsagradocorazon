<?php
  require_once("header.php");
?>
<div class="container">

	<div class="row">
    	<div class="col-md-12">
		<h1>Galería</h1>     
			<ul class="breadcrumb">
				<li><a href="index.php">Inicio</a><span class="divider"></span></li>
				<li><a href="galeria.php">Galería</a><span class="divider"></span></li>
				<li class="active">Institucional</li>
			</ul>
		</div>
        
	<!-- =========================Start Col left section ============================= -->        
		<aside class="col-md-4 col-sm-4">
		<div class="col-left">
			<h4>Foto Galeria</h4>
			<h6>Elige la  sección de tu preferencia :</h6>
			<ul class=" list_2">
				<li><a href="alumnas.php">Alumnas </a></li>
				<li><a href="fotoprofesores.php">Profesores</a></li>
				<li><a href="institucional.php">Institucional</a></li>
				<li><a href="religioso.php">Religioso</a></li>
			</ul>
		</div>
		</aside>
        
        <!-- =========================Start Col right section ============================= -->
		<section class="col-md-8 col-sm-8">
		<div class="col-right">
            
				<div class="row">
					<div class="col-md-4 picture">
						<a href="galeria\institucional\1.jpg" title="Simulacro de Sismos" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="galeria\institucional\1.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-md-4 picture">
						<a href="galeria\institucional\2.jpg" title="Simulacro de Sismos" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="galeria\institucional\2.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-md-4 picture">
						<a href="galeria\institucional\3.jpg" title="Alumnas del Nivel Primario" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="galeria\institucional\3.jpg" alt="" class="img-responsive">
						</a>
					</div>
					
                    </div>

                    <div class="row">
					<div class="col-md-4 picture">
						<a href="galeria\institucional\4.jpg" title="Simulacro de Sismos" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="galeria\institucional\4.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-md-4 picture">
						<a href="galeria\institucional\5.jpg" title="Simulacro de Sismos" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="galeria\institucional\5.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-md-4 picture">
						<a href="galeria\institucional\6.jpg" title="Alumnas del Nivel Primario" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="galeria\institucional\6.jpg" alt="" class="img-responsive">
						</a>
					</div>
					
                    </div>    
			</div>
		</section><!-- end col right-->
	</div><!-- end row-->
</div><!-- end container-->
<?php
  require_once("footer.php");
?>