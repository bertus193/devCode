@extends('layout')
@section('page')
<style type="text/css">
		.table_url:hover{
			text-decoration: none;
		}

		#maincontainer {
			width: 400px;
			height: 80px;
			margin: 0 auto;
		}
		#leftcolumn {
			float:left;
			display:inline-block;
			width: 100px;
			height: 100%;
		}
		#contentwrapper {
			float:left;
			display:inline-block;
			width: -moz-calc(100% - 100px);
			width: -webkit-calc(100% - 100px);
			width: calc(100% - 100px);
			height: 100%;
		}
		p {
			font-family: Verdana;
		}
		td, th{
			text-align: center;
			font-size: 12px;
			border: 1px solid lightgrey;
			padding: 10px;
		}
		.table_lateral {
			text-align: left;
		}
		.card {
		    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		    max-width: 800px;
		    margin: auto;
		    font-family: Verdana;
		}
		.center {
    	margin-left: auto;
    	margin-right: auto;
    	display: block;
}
</style>

<div class="inner-body">
	<div class="col-md-12">
		<h1 align=center> Suscríbete a Devcode <h1>
		<h3 align=center> Y forma parte de los más de 120 mil estudiantes que están aprendiendo con nosotros </h2>
		<div id="maincontainer">
			<div id="leftcolumn">{{ HTML::image('images/users.png', 'users', array('class' => 'center')) }}</div>
			<div id="contentwrapper">
				<p> ¿Tienes dudas en algun plan? </p>
				<p> Háblanos por {{ HTML::image('images/whatsapp.png', 'whatsapp', array( 'width' => '18px', 'height' => '18px' )) }} +51 980654016 </p>
			</div>
		</div>
	</div>

	@for ($i = 0; $i < count($plans); $i++)
	<img src='images\whatsapp.png' width="18" height="18">
	@endfor

	<div class="card">
		<table align="center">
				<thead>
					<tr class="table_header">
						<th scope="col"> </th>
						@for ($i = 0; $i < count($plans) - 1; $i++)
						<th scope="col" class="table_url_th">
							<h3> {{$plans[$i]->type}} </h3>
							<h4> ${{$plans[$i]->monthly_price}}/mes</h3>
						</th>
						@endfor
					</tr>
				</thead>
				<tbody>
						<tr>
							<td class="table_lateral"> Beneficios</td>
							<td> Acceso a todos los cursos por 12 meses</td>
							<td> Acceso a todos los cursos por 1 mes </td>
							<td> Acceso al contenido gratuito </td>
						</tr>
						<tr>
							<td class="table_lateral"> Acceso a cursos gratuitos </td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
						</tr>
						<tr>
							<td class="table_lateral"> Cursos nuevos todos los meses </td>
							<td>{{ HTML::image('images/check.JPG') }}</img></td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/x.JPG') }}</td>
						</tr>
						<tr>
							<td class="table_lateral"> Acceso a todos los repositorios de proyectos </td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/x.JPG') }}</td>
						</tr>
						<tr>
							<td class="table_lateral"> Respuesta a tus preguntas por la comunidad </td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
						</tr>
						<tr>
							<td class="table_lateral"> Pago con tarjeta de crédito o débito </td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/x.JPG') }}</td>
						</tr>
						<tr>
							<td class="table_lateral"> Pago en depósito, PayPal y otros métodos </td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/check.JPG') }}</td>
							<td>{{ HTML::image('images/x.JPG') }}</td>
						</tr>
			</tbody>
		</table>
	</div>
</div>

@stop
