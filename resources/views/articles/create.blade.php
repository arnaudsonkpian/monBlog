@extends('layouts.master')
@section('title')
Creer un article
@endsection
@section('contenu')
<form enctype="multipart/form-data" action="/articles" method="get" >
@csrf
@if ($errors->any())
<p class="alert"></p>

@endif    


<div class="form-group mb-3">
        <label for="title" class="form-label"> Titre de l'article</label>
        <input type="text" class="form-control" placeholder="Le Titre">
        <textarea name="body" style=height:300px; id="body">Corps de l'article</textarea>
</div>
<div> 
    <label for="image" class="form-label">Choisir une image pour l'article</label>
    <button type="submit" class="btn-primary">Envoyer</button>
    <input type="file" class="form-control" id="image" name="image">
</form>
@endsection
<div>

</div>