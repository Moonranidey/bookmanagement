<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Book List</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sl</th>
        <th>Book Name</th>
        <th>Publisher Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($alldata as $data)

        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->bookname}}</td>
            <td>{{$data->publishername}}</td>
          </tr>

        @endforeach
        
    </tbody>

  </table>
</div>

</body>
</html>
