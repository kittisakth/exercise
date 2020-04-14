<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <h1 class="text-center">Count Character Result</h1>
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
</body>
</html>
<script>

</script>