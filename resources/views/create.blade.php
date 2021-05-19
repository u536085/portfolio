<!DOCTYPE html>
<html>
<head>
   <title>Registration Form</title>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
</head>
<body>
   <div class="signup-form">
       <form action="{{ url('works') }}" method="POST" id="regForm">
           {{ csrf_field() }}
           <div class="form-group">
               <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-user"></i></span>
                   <input type="text" class="form-control" name="title" id="inputTitle" placeholder="title" required="required">
               </div>
               @if ($errors->has('title'))
                   <span class="error">{{ $errors->first('title') }}</span>
               @endif
           </div>
           <div class="form-group">
               <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                   <input type="description" class="form-control" name="description" id="description" placeholder="description" required="required">
               </div>
               @if ($errors->has('description'))
                   <span class="error">{{ $errors->first('description') }}</span>
               @endif
           </div>
           <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" name="image" required>
    </div>
           <div class="form-group">
               <button type="submit" class="btn btn-primary btn-block btn-lg">Create</button>
           </div>
       </form>
   </div>
</body>
</html>

<?php

?>
