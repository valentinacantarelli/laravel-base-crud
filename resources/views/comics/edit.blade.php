@extends('layout.base')

@section('pageContent')
<div class="container">
	<h3> Inserisci un nuovo fumetto</h3>
	<form action="{{route("comics.store")}}"  method="POST">
		@csrf 
        @method('PUT') 
		<div class="formContainer">
			<label for="title">Titolo</label>
			<input type="text" class="form" id="title" name="title" placeholder="Insersci il titolo" value="{{old('title') ? old('title') : $comic['title']}}">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div> 
		<div class="formContainer">
			<label for="description">Descrizione</label>
			<input type="text" class="form" id="description" name="description" placeholder="Insersci la descrizione" value="{{old('description') ? old('description') : $comic['description']}}">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div> 
		<div class="formContainer">
			<label for="image">Immagine</label>
			<input type="text" class="form" id="image" name="image" placeholder="Insersci l'immagine" value="{{old('image') ? old('image') : $comic['image']}}">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div> 
		<div class="formContainer">
			<label for="price">Prezzo</label>
			<input type="text" class="form" id="price" name="price" placeholder="Insersci il prezzo" value="{{old('price') ? old('price') : $comic['price']}}">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="formContainer">
			<label for="series">Serie</label>
			<input type="text" class="form" id="series" name="series" placeholder="Insersci la serie" value="{{old('series') ? old('series') : $comic['series']}}">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="formContainer">
			<label for="sale_date">Data di uscita</label>
			<input type="text" class="form" id="sale_date" name="sale_date" placeholder="Insersci la data d'uscita" value="{{old('sale_date') ? old('sale_date') : $comic['sale_date']}}">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="formContainer">
			<label for="type">Tipologia</label>
			<input type="text" class="form" id="type" name="type" placeholder="Insersci la tipologia" value="{{old('type') ? old('type') : $comic['type']}}"">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>              
	</form>
</div>



@endsection