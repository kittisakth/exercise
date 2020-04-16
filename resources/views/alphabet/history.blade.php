@extends('layouts.app')
@section('title', 'History')
@section('content')
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th class="text-center" scope="col">Sentence</th>
        <th class="text-center" scope="col">Alphabet Count</th>
        <th class="text-center" scope="col">Result</th>
        @if (Auth::user()->isAdmin())
          <th class="text-center" scope="col">Username</th>
        @endif
        <th class="text-center" scope="col">View</th>
      </tr>
    </thead>
    <tbody>
      @if (count($histories) > 0)
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
            @if (Auth::user()->isAdmin())
              <td class="text-center">
                {{ $history->getUsername() }}
              </td>
            @endif
            <td class="text-center">
            <a class="btn btn-success" href="{{ route('show', ['id' => $history->id]) }}" >View</a>
            </td>
          </tr>
        @endforeach
      @else
          <tr>
            <td colspan="5">
              <div class="alert alert-danger" role="alert">
                No data
              </div>
            </td>
          </tr>
      @endif
     
    </tbody>
  </table>
  {{ $histories->links() }}
</div>
@endsection