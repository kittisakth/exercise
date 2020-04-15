@extends('layouts.app')
@section('title', 'Count Character')
@section('content')
  @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      {{ $error }}
      
    </div>
    @endforeach  
  @endif
  <form action="" method="post">
    @csrf
    <div class="form-group">
      <label for="sentence">Enter sentence here:</label>
      <textarea name="sentence" id="sentence" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Count</button>
  </form>
@endsection

