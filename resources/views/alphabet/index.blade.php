<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <style>
    /* html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }
    .text-center {
      text-align: center;
    } */
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Count Character</h1>
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
  </div>
</body>
</html>

