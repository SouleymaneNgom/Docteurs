@extends('layouts.app')



@section('extra-js')
<script>

function toggleReplyComment(id){

            let element = document.getElementById('replyComment-' + id);
            element.classList.toggle('d-none');
}

</script>
@endsection

@section('content')
        <div class="conterner">
            <div class="card">
            <div class="card-body">

            <h5 class="card-title">{{$topic->title}}</h5>
            <p>{{$topic->content}}</p>
            <div class="d-flex justify-content-between align-items-center " >
            <small>Poste le {{$topic->created_at->format('d/m/y a H:m')}}</small>
            <span class="badge badge-primary">{{$topic->user->name}}</span>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3 " >
            @can('update',$topic)
            <a href="{{route('topics.edit', $topic)}}" class=" btn btn-warning">Editer ce Topic</a>
            @endcan

            @can('delete',$topic)
            <form action="{{route('topics.destroy', $topic)}}"  method="POST">
            
            @csrf 
            @method('delete')
            <button type="submit" class="btn btn-danger">Suprimer</button>
            
            </form>
            @endcan
             </div>
            </div>
            

            </div>
            <hr>
            <h5>Commentaires</h5>
            @forelse($topic->comments as $comment)
            <div class="card mb-2">
            <div class="card-body">
            
            {{$comment->content}}
            <div class="d-flex justify-content-between align-items-center " >
            <small>Poste le {{$comment->created_at->format('d/m/y')}}</small>
            <span class="badge badge-primary">{{$comment->user->name}}</span>
            </div>
            </div>
            </div>
            @foreach($comment->comments as $replyComment)
            <div class="card mb-2">
                <div class="card-body">
                
                {{ $replyComment->content}}
                <div class="d-flex justify-content-between align-items-center " >
                <small>Poste le {{$replyComment->created_at->format('d/m/y')}}</small>
                <span class="badge badge-primary">{{$replyComment->user->name}}</span>
                </div>
            </div>
            </div>
            @endforeach

            @auth
            <button class="btn btn-info mb-3" onclick="toggleReplyComment({{$comment->id}})" >Repondre</button>
            <form action="{{route('comments.storeReply', $comment)}}" method="POST" class="mb-3 ml-5 d-none" id="replyComment-{{ $comment->id  }}">
            @csrf
            <div class="form-group">
                <label for="replyCommen">Ma reponse</label>
                <textarea name="replyComment" class="form-control @error('replyComment') is-invqlid @enderror" id="replyComment"  rows="5"></textarea>
                @error('replyComment')
                <div class="invalid-feedback">{{ $errors->first('replyComment') }}</div>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Repondre a ce commentaire</button>
            </form>
            @endauth
            @empty
            <div class="alert alert-info">Aucun commentaire pour ce Topic</div>
            @endforelse

            <form action="{{route('comments.store', $topic)}}" method="POST" class="mt-2" >
            @csrf 
            <div class="from-group">
            <label for="content">Votre commentaire</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content"  rows="5"></textarea>
            
            @error('content')
            <div class="invalid-feedback">{{ $errors->first('content')}}</div>
            @enderror
            </div>
            
            <button type="submit" class="btn btn-primary  mt-3">Soumettre mon commentaire</button>
            </form>
           
        </div>
@endsection