<!DOCTYPE html>
<html>
<head>
   <title>Registration Form</title>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <link rel="stylesheet" href="{{ url('assets/css/dashboard.css') }}">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <h1 id="ad">Admin Panel</h1>
  </header>
  <main>
    <div class="container">
    <div class="butn_update">
      <a class="bttn" href="/update">Update Projects</a>
    </div>
    <div class="butn_create">
      <a class="bttn" href="/create">Add Projects</a>
    </div>
    <div class="butn_delete">
      <a class="bttn" href="/delete">Delete Projects</a>
    </div>
    </div>
  </main>
</body>
</html>
