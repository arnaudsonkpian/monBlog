@extends('layouts.master')
@section('contenu')
<article class="">
    <div class="card-body">
        <img class="card-img-top" src="{{$article["image"]}}">
        <h2 class="card-title mb-3 mt-3">{{ $article["title"]}}</h2>
        <p class="card-text">{{ $article["body"]}}</p>
    </div>

</article>
@endsection
<section>
    <div class="form-floating">
        <h2>
            <form action="">
                <label for="commentm-input">Commentaires</label>
        </h2>
        <textarea name="comment " class="form-control" id="comment-input"
            placeholder="Laissez votre commentaire ici"></textarea>
        Envoyer <button type="submit" class="btn btn-primary"></button>
        </form>
    </div>
    <div>Vos commentaires ici
        <div class="mt-5">
            @forelse($articles->comments as $comment)
                <span>{{$comment->created_at->diffForhuman()}}</span>
                <strong class="text-primary">{{$comment->user->name}}</strong>
                <div>$comment["comment"]</div>
            @empty
                <p>Aucun article</p>
            @endforelse
        </div>
    </div>
</section>