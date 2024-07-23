@extends('layouts.master')
@section('title')
  Article 

@endsection
@section('contenu')

<h2>Bienvenu dans le contenu des articles</h2>
 @each('articles.partials.index',$articles,'article','articles.partials.no-articles')


@endsection