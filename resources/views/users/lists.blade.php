@extends('layouts.app')
@section('title', 'User Lists')
@section('content')
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th class="text-center" scope="col">Username</th>
        <th class="text-center" scope="col">Level</th>
        <th class="text-center" scope="col">View</th>
      </tr>
    </thead>
    <tbody>
      @if (count($users) > 0)
        @foreach ($users as $user)
            <tr>
              <td>

              </td>
              <td>
                {{ $user->name }}
              </td>
              <td class="text-center">
                {{ $user->level }}
              </td>
              <td class="text-center">
                <a class="btn btn-success" href="{{ route('profile_detail', [ 'id' => $user->id ]) }}">profile</a>
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
  {{ $users->links() }}
</div>
@endsection