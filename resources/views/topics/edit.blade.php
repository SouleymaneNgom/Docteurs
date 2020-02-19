@extends('layouts.app')

@section('content')
        <div class="conterner">
            <h1>{{$topic->title}}</h1>
            <hr>
            <form action="{{route('topics.update', $topic)}}" method="POST" >
            @csrf 
            @method('patch')
            <div class="form-group">
            <label for="title">Titre tu Topic</label>
            <input type="text"  class="form-control @error('title') is-invalid @enderror"  name="title" id="title" value="{{$topic->title}}" >
            @error('title')
            <div class="invalid-feedback">{{$errors->first('title')}}</div>
            @enderror
            </div>
            <div class="form-group">
            <label for="content">Votre sujet</label>
            <textarea name="content" id="content" class="form-control   @error('content') is-invalid @enderror" rows="5">{{$topic->content}}</textarea>
            @error('content')
            <div class="invalid-feedback">{{$errors->first('content')}}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifier mon Topic</button>
            </form>
        </div>
@endsection