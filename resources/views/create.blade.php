@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Movie CRUD</h1>
        <form class="needs-validation" action="{{route('movies.store')}}" method="post">
        @csrf
        @method('POST')
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="titolo">Titolo</label>
      <input type="text" placeholder="Titolo" class="form-control" id="titolo" name="titolo" value="{{old('titolo')}}">
    </div>
    <div class="col-md-6 mb-3">
      <label for="anno">Anno</label>
      <input type="text" placeholder="Anno" class="form-control" id="anno" name="anno" value="{{old('anno')}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="desc">Descrizione</label>
      <textarea placeholder="Descrizione" class="form-control" name="desc" id="desc" cols="30" rows="10">{{old('desc')}}</textarea>
    </div>
    <div class="col-md-3 mb-3">
      <label for="vote">Voto</label>
      <input type="text" placeholder="Voto" class="form-control" name="vote" id="vote" value="{{old('vote')}}">
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit movie</button>
</form>
    </div>
@endsection