<?php
  require_once("header.php");
?>
<div class="container">
	
	<div class="row">
    	<div class="col-md-12">
		<h1>Contactos</h1>
			<ul class="breadcrumb">
				<li><a href="index.php">Inicio </a><span class="divider"> </span></li>
				<li class="active">Contactos</li>
			</ul>
		</div>
        <!-- =========================Start Col left section ============================= -->
		<aside class="col-md-4 col-sm-4">
		<div class="col-left">
			<h2>Dirección</h2>
			<ul>
				<li>
					<i class="icon-home"></i>
						Av. Prolongación Unión N° 1757<br>
						Trujillo - La Libertad - Perú
				</li>
				<li>
					<i class="icon-phone">
					</i> Telefono : + 51 (044) 217449
				</li>
				<li>
					<i class="icon-phone-sign"></i> 
					Fax: + 51 (044) 217449
				</li>

				<li>
					<i class="icon-envelope"></i> 
					Email: <a href="mailto:info@colsagradocorazon.edu.pe"><span class="__cf_email__">info@colsagradocorazon.edu.pe</a><br>
					<a href="mailto:info@colsagradocorazon.comeze.com"><span class="__cf_email__">info@colsagradocorazon.comeze.com</a>
				</li>
			</ul>
			<hr>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.5898498901847!2d-79.01175165592785!3d-8.095539269621803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad1622f3a63f39%3A0x5c6415971498d326!2sColegio+Parroquial+Sagrado+Corazon!5e0!3m2!1ses!2spe!4v1445136943698" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
			<br>
			<small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.5898498901847!2d-79.01175165592785!3d-8.095539269621803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad1622f3a63f39%3A0x5c6415971498d326!2sColegio+Parroquial+Sagrado+Corazon!5e0!3m2!1ses!2spe!4v1445136943698" style="text-align:left">Ver Grande</a></small>
            <hr>
             <p>Obtener direcciones desde su punto de origen.</p>
            <form action="http://maps.google.com/maps" method="get" target="_blank">
               <input type="text" name="saddr" placeholder="Ingresa tu Ubicacion" class="form-control">
                <input type="hidden" name="daddr" value="Colegio+Parroquial+Sagrado+Corazon"> <!-- Write here your end point -->
                <input type="submit" value="Obtener Direcciones" class=" button_medium">
            </form>    
		</div>
		
		</aside>
        
        <!-- =========================Start Col right section ============================= -->
		<section class="col-md-8 col-sm-8">
		<div class="col-right">
			<p class="lead">
				Envianos un correo a : <a href="mailto:info@colsagradocorazon.edu.pe"><strong>info@colsagradocorazon.edu.pe</strong></a>. o dejanos un mensaje en el siguiente formulario y gustosos te responderemos.
			</p>
			<hr>
			<h4>Dejanos un mensaje</h4>
            
			<div id="message-contact"></div>
			<form method="post" action="assets/mail.php" id="contactform">
				<div class="row">
					<div class="col-md-6">
						<label>Nombres <span class="required">* </span></label>
						<input type="text" class="form-control ie7-margin" id="name_contact" name="name_contact">
					</div>
					<div class="col-md-6">
						<label>Apellidos <span class="required">* </span></label>
						<input type="text" class="form-control ie7-margin" id="lastname_contact" name="lastname_contact">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Email <span class="required">* </span></label>
						<input type="email" id="email_contact" class="form-control ie7-margin" name="email_contact">
					</div>
					<div class="col-md-6">
						<label>Movil <span class="required">* </span></label>
						<input type="text" id="phone_contact" class="form-control ie7-margin" name="phone_contact">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Selecciona un Departamento</label>
						<select id="subject_contact" class="form-control" name="subject_contact">
							<option value="SecretariaGeneral">Secretaria General
							<option value="Recepcionista">Recepcionista
							<option value="Tesoreria">Tesorería
							<option value="Contabilidad">Contabilidad
						</select>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12">
						<label>Mensaje <span class="required">*</span></label>
						<textarea rows="5" id="message_contact" class="form-control" name="message_contact"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<label><span class="required">*</span>¿Eres persona? : 3 + 1 =</label>
						<input type="text" id="verify_contact" class="form-control">
					</div>
					<div class="button-align col-md-3">
						<input type="submit" id="submit-contact" value="Enviar Mensaje" class=" button_medium">
					</div>
				</div>
				<hr>
			</form>
			<div id="result"></div>
            <!--
			<h4>Plan a visit</h4>
			<div id="message-visit"></div>
			<form method="post" action="assets/visit.php" id="visit">
				<div class="row">
					<div class="col-md-6">
						<label>Name <span class="required">* </span></label>
						<input type="text" class="form-control ie7-margin" id="name_visit">
					</div>
					<div class="col-md-6">
						<label>Last name <span class="required">* </span></label>
						<input type="text" class="form-control ie7-margin" id="lastname_visit">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Email <span class="required">* </span></label>
						<input type="email" id="email_visit" class="form-control ie7-margin">
					</div>
					<div class="col-md-6">
						<label>Phone <span class="required">* </span></label>
						<input type="text" id="phone_visit" class="form-control ie7-margin">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div id="datetimepicker" class="input-append" style="position:relative;">
							<label>Select a date <span class="required">* </span></label>
							<input type="text" class=" dateinput form-control" id="date_visit">
							<span class="add-on" style="position:absolute; top:34px; right:5px; cursor:pointer"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
						</div>
					</div>
					<div class="col-md-6">
						<label><span class="required">*</span> Are you human? 3 + 1 =</label>
						<input type="text" id="verify_visit" class="form-control">
					</div>
				</div>
				
				<input type="submit" id="submit-visit" value="Submit" class=" button_medium">
			</form><!-- end row-->
            
		</div><!-- end col right-->
		</section>
	</div><!-- end row-->
</div><!-- end container-->
<?php
  require_once("footer.php");
?>