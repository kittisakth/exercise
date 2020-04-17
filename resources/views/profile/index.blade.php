@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="container">
  <form action="{{ route('update_profile') }}" method="post" enctype="multipart/form-data">
  @csrf
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
    <div class="row">
      <div class="col-md-6">
        <h3>
          Edit Profile
        </h3>
        <div class="row">
          
          <div class="col-md-8">
            <img src="{{ $user_profile->img_path != null ? asset($user_profile->img_path): config('app.default_profile') }}" 
              alt="Profile image"
              accept="image/*" 
              class="img-thumbnail"
              id="img_preview"
              />
          </div>
        </div>
        <div class="row">
          <div class="custom-file mt-3 col-md-8">
            <input type="file" hidden class="custom-file-input" id="profile_img" name="profile_img" onchange="setPreview(this)">
            <button class="btn btn-primary" onclick="clickImgInput()" type="button">Browse</button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        @if ($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
            {{ $error }}
            
          </div>
          @endforeach  
        @endif
        <div class="form-group">
          <label for="username">Username</label>
        <input disabled type="text"value="{{ $user_profile->name }}" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" value="{{ $user_profile->firstname }}" class="form-control" id="firstname" name="firstname" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" value="{{ $user_profile->lastname }}" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="type">Type</label>
        <select {{ !Auth::user()->isAdmin() || Auth::user()->id == $user_profile->id ? 'disabled': '' }} id="type" name="type" class="form-control" value="{{ $user_profile->level }}">
            <option {{ $user_profile->level == 'Administrator' ? 'selected': '' }} value="Administrator">Administrator</option>
            <option {{ $user_profile->level == 'Standard' ? 'selected': '' }}  value="Standard">Standard</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
        <textarea class="form-control" name="address" id="address" rows="5">{{ $user_profile->address }}</textarea>
        </div>
        <div class="form-group">
          <label for="birthdate">Birth Date</label>
          <input type="date" value="{{ $user_profile->birthdate }}" class="form-control" name="birthdate" id="birthdate">
        </div>
        <div class="form-group">
          <label for="hobby">Hobby</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sport" name="sport"
              {{ $user_profile->getHobby()->sport ? 'checked': '' }}
            >
            <label class="form-check-label" for="sport">Sport</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="game" name="game"
              {{ $user_profile->getHobby()->game ? 'checked': '' }}
            >
            <label class="form-check-label" for="game">Game</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="reading" name="reading"
              {{ $user_profile->getHobby()->reading ? 'checked': '' }}
            >
            <label class="form-check-label" for="reading">Reading</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gardening" name="gardening" 
              {{ $user_profile->getHobby()->gardening ? 'checked': '' }}
            >
            <label class="form-check-label" for="gardening">Gardening</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="movie" name="movie"
              {{ $user_profile->getHobby()->movie ? 'checked': '' }}
            >
            <label class="form-check-label" for="movie">Movie</label>
          </div>
        </div>
      </div>
    <input type="hidden" name="user_id" value="{{ $user_profile->id }}">
      <button type="submit" class="btn btn-success ml-auto">save</button>
    </div>
  </form>
</div>
<script>
  clickImgInput = () => {
    document.getElementById("profile_img").click();
  }

  setPreview = (input) => {
    if (input.files && input.files[0]) {
      let reader = new FileReader()
      reader.onload = function(e) {
        document.getElementById("img_preview").setAttribute("src", e.target.result)
      }
      reader.readAsDataURL(input.files[0])
    }
  }
</script>
@endsection
