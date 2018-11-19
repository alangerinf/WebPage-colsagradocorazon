<?php
  require_once("header.php");
?>
<div class="container">
<div class="row">
	<div class="col-md-12">
	<h1>Noticias y Eventos</h1>
        <ul class="breadcrumb">
          <li><a href="#"> Inicio </a> <span class="divider"> </span></li>
          <li class="active">Noticias y Eventos </li>
        </ul> 
    </div>
<!-- =========================Start Col left section ============================= -->
<aside class="col-md-4 col-sm-4">
<div class="col-left">
	<h3>Buscar Noticias</h3>
	<div class="form-group">
				<form class="form-search form-inline">
					<input type="text" class="input-medium form-control">
					<button type="submit" class="button_medium" style="position:relative; top:2px;">Buscar </button>
				</form>
                </div>
	<hr>
	<h3>Ultimas Noticias</h3>
	<div class="widget">
		<ul class="latest_news">
			<li><i class="icon-calendar-empty"></i> 23 de Octubre, 2015 <div><a href="#">Nueva Pagina web del Colegio</a></div></li>
			
		</ul>
	</div>
</div>
			<div class="box-style-1 ribbon borders">
            	<span class="date"><i class="icon-calendar-empty"></i> 23 de Octubre, 2015</span>
           		<h4><a href="#">Nueva Pagina web del Colegio</a></h4>
                <p>La Renovada y nueva Pagina web del Colegio </p>
            </div>
  
</aside>

<!-- =========================Start Col right section ============================= --> 
<section class="col-md-8 col-sm-8">
	<div class="col-right">
        <p class="lead">Enterate de las Ultimas Noticias y Eventos en el Colegio</p>
        <hr>
        <div class="news-strip">
            <ul>
            
            	<li class="row">
                	<div class="date-news"><strong>23 </strong>Octubre de 2015</div>
                    	<h5><a href="#"><i class="icon-file"></i> Nueva Pagina web del Colegio/a></h5>
                        <p>La Renovada y nueva Pagina web del Colegio.</p>
                </li>

            </ul>
        </div>
        
           <hr>
           <!-- 
           <div class="text-center">
               <ul class="pagination">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
              </ul>
          </div>end pagination-->
           
    </div>
	
</section>

  </div><!-- end row-->
  </div> <!-- end container-->
<?php
  require_once("footer.php");
?>