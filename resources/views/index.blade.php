@extends('layouts.site')
@section('content')
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block hero header" src="img/background-coleman.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block hero header" src="img/background-coleman-2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block hero header" src="img/background-coleman-3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="container">
	<div class="row mt-4">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<h1>COLEMAN MÉXICO</h1>
			<h2>¿Por qué elegirnos?</h2>
			<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, quia! Autem amet, aut quia corrupti, distinctio fugit iste laudantium, quidem asperiores, earum tempora pariatur dolorem dolorum molestias necessitatibus inventore. Mollitia.</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<form action="">
				@csrf
				<div class="form-group row">
					<div class="col-xs-12 col-md-12">
						<label for="Nombre">Nombre</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<label for="">Correo</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<label for="">Número de teléfono</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-12">
						<label for="">Mensaje</label>
						<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection