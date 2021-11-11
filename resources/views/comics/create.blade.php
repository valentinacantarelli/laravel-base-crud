@extends('layout.base')

@section('pageContent')
<h3> Inserisci un nuovo fumetto</h3>
<form action="{{route("comics.store")}}"  method="POST">
    @csrf  
    <div class="formContainer">
		<label for="title">Titolo</label>
		<input type="text" class="form @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insersci il titolo" value="{{ old('title') }}">
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div> 
    <div class="formContainer">
		<label for="description">Descrizione</label>
		<input type="text" class="form @error('description') is-invalid @enderror" id="description" name="description" placeholder="Insersci la descrizione" value="{{ old('description') }}">
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div> 
    <div class="formContainer">
		<label for="image">Immagine</label>
		<input type="text" class="form @error('image') is-invalid @enderror" id="image" name="image" placeholder="Insersci l'immagine" value="{{ old('image') }}">
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div> 
    <div class="formContainer">
		<label for="price">Prezzo</label>
		<input type="text" class="form @error('price') is-invalid @enderror" id="price" name="price" placeholder="Insersci il prezzo" value="{{ old('price') }}">
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
    <div class="formContainer">
		<label for="series">Serie</label>
		<input type="text" class="form @error('series') is-invalid @enderror" id="series" name="series" placeholder="Insersci la serie" value="{{ old('series') }}">
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
    <div class="formContainer">
		<label for="sale_date">Data di uscita</label>
		<input type="text" class="form @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Insersci la data d'uscita" value="{{ old('sale_date') }}">
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
    <div class="formContainer">
		<label for="type">Tipologia</label>
		<input type="text" class="form @error('type') is-invalid @enderror" id="type" name="type" placeholder="Insersci la tipologia" value="{{ old('type') }}">
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>              


</form>


@endsection