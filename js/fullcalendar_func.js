$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: 
			{
				left: 'prev,next',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2015-03-02',
			editable: true,
			events: [
				{
					title: 'APERTURA DEL AÑO ESCOLAR',
					start: '2015-03-02',
					end: '2015-03-02'
				},
				{
					title: '“DIA INTERNACIONAL DE LA MUJER',
					start: '2015-03-06',
					end: '2015-03-06'
				},
				{
					id: 999,
					title: 'ELECCION DE COMITÉS DE GRADO (1ra. Reunión de PP.FF.)',
					start: '2015-03-07'
				},
				{
					id: 999,
					title: 'UNDACIÓN DEL COLEGIO “SAGRADO CORAZÓN” - Trujillo',
					start: '2015-03-27',
					end: '2015-03-28'
				},
				{
					title: 'SEMANA SANTA',
					start: '2015-03-30T10:30:00',
					end: '2015-04-01T12:30:00'
				},
				{
					title: 'DÍA MUNDIAL DE LA SALUD',
					start: '2015-04-09'
				},
				{
					title: 'DÍA DE LAS AMÉRICAS',
					start: '2015-04-14'
				},
				{
					title: 'DIA DE LA GRATITUD',
					start: '2015-04-15'
				},
				{
					title: 'DIA DEL PLANETA',
					start: '2015-04-22'
				},
				{
					title: 'DÍA DEL IDIOMA',
					start: '2015-04-23'
				},
				{
					title: 'DÍA DEL TRABAJADOR',
					start: '2015-04-30'
				},
				{
					title: 'DIA DE LA MADRE: Programa,ambientación',
					start: '2015-05-09'
				},

				{
					title: 'SANTA MAGDALENA SOFIA',
					start: '2015-05-25'
				},

				{
					title: 'DIA NACIONAL DE LA REFLEXIÓN SOBRE LOS DESASTRES NATURALES',
					start: '2015-05-29',
					end: '2015-05-30'
				},

				{
					title: 'DIA MUNDIAL DEL MEDIO AMBIENTE',
					start: '2015-06-05'
				},

				{
					title: 'DIA DE LA BANDERA',
					start: '2015-06-07',
					end: '2015-06-08'
				},

				{
					title: 'FIESTA DEL SAGRADO CORAZON (Jornada de Reflexión, Juegos Florales, DIA FELIZ)',
					start: '2015-06-12',
					end: '2015-06-13'
				},

				{
					title: 'DIA DEL PADRE',
					start: '2015-06-19',
					end: '2015-06-19'
				},

				{
					title: 'DIA DEL CAMPESINO',
					start: '2015-06-24'
				},
				
				{
					title: 'DIA DE LOS MAESTROS Y MAESTRAS',
					start: '2015-07-03'
				},

				{
					title: 'FIESTAS PATRIAS',
					start: '2015-07-20',
					end: '2015-07-24'
				},
				
				{
					title: 'Día del Niño',
					start: '2015-08-14'
				},

				{
					title: 'DÍA DE SANTA ROSA DE LIMA',
					start: '2015-08-28'
				},

				{
					title: 'FESTIVAL DE DANZAS FOLKLORICAS PERUANAS Y LATINOAMERICANAS Y DE PLATOS TIPICOS',
					start: '2015-09-05'
				},

				{
					title: 'DIA DE LOS DERECHOS CIVICOS DE LA MUJER',
					start: '2015-09-07'
				},

				{
					title: 'DIA INTERNACIONAL DE LA PAZ',
					start: '2015-09-17'
				},

				{
					title: 'OLIMPIADAS (Competencias)',
					start: '2015-09-20'
				},

				{
					title: 'DIA DE LA ALUMNA',
					start: '2015-09-23'
				},

				{
					title: 'DIA DEL COMBATE DE ANGAMOS',
					start: '2015-10-07',
					end: '2015-10-08'
				},
				
				{
					title: 'FIESTA DE MATER',
					start: '2015-10-20'
				},

				{
					title: 'BODAS DE ORO Y PLATA',
					start: '2015-10-29'
				},

				{
					title: 'DIA DE LA COMUNIDAD',
					start: '2015-10-30',
					end: '2015-10-31'
				},

				{
					title: 'FIESTA DE FILIPINA',
					start: '2015-11-18'
				},

				{
					title: 'ELECCIONES DEL CONSEJO ESTUDIANTIL',
					start: '2015-11-19'
				},

				{
					title: 'ANIVERSARIO DE LA CONGREGACIÓN',
					start: '2015-11-20'
				},
				
				{
					title: 'DÍA INTERNACIONAL DE LA ELIMINACIÓN DE LA VIOLENCIA CONTRA LA MUJER',
					start: '2015-11-25'
				},

				{
					title: 'CEREMONIA DE CONFIRMACIÓN - CEREMONIA DE PRIMERA COMUNIÓN',
					start: '2015-11-26',
					end: '2015-11-30'
				},

				{
					title: 'DESPEDIDA DE 5º A 6º DE PRIMARIA',
					start: '2015-12-05'
				},

				{
					title: 'DESPEDIDA DE 4º A 5º DE Secundaria ',
					start: '2015-12-07'
				},

				{
					title: 'NAVIDAD( Festival de villancicos de Alumnas y Profesores',
					start: '2015-12-20'
				},

				{
					title: 'CLAUSURA ACADEMICA',
					start: '2015-12-28'
				},

				{
					title: 'Fin de Actividades Academicas 2015 ',
					url: 'http://www.colsagradocorazon.edu.pe',
					start: '2015-12-30'
				}
			]
		});
});