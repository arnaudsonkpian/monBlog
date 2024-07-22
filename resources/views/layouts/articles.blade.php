@extends('layouts.master')
@section('title')
  Article 

@endsection
@section('contenu')

<h2>Bienvenu dans le contenu des articles</h2>
@each('articles.index', $articles, 'articles', 'articles.no-articles')
@endsection