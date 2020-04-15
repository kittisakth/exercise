@extends('layouts.app')
@section('title', 'History')
@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">Sentence</th>
      <th class="text-center" scope="col">Alphabet Count</th>
      <th class="text-center" scope="col">Result</th>
      <th class="text-center" scope="col">View</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($histories as $history)
        <tr>
          <td>
            {{ $history->sentence }}
          </td>
          <td class="text-center">
            {{ $history->alpha_count }}
          </td>
          <td>
            {{ $history->getStringResult() }}
          </td>
          <td class="text-center">
          <a class="btn btn-success" href="{{ route('show', ['id' => $history->id]) }}" >View</a>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection