<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="color: green">Contact Form</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name: </th>
        <td>{{ $data['name'] }}</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Email: </th>
        <td>{{ $data['email'] }}</td>
      </tr>
      <tr>
        <th>Subject: </th>
        <td>{{ $data['subject'] }}</td>
      </tr>
      <tr>
        <th>Message: </th>
        <td>{{ $data['message'] }}</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
