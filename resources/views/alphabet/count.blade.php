@extends('layouts.app')
@section('title', 'Count Result')
@section('content')
<div class="container">
  <div class="alert alert-success" role="alert">
    <h2 class="text-center">
      I can se your voice.
    </h2>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Character</th>
        <th scope="col">Count</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($alpha_counts as $alpha=>$count)
          <tr>
            <td>
              {{ $alpha }}
            </td>
            <td>
              {{ $count }}
            </td>
          </tr>
      @endforeach
      <tr>
        <td>
          Total Chracter
        </td>
        <td>
          {{ $total_alpha }}
        </td>
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-primary" onclick="window.history.back()">Back</button>
</div>
@endsection