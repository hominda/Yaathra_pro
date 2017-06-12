<!DOCTYPE html>
<html lang="en">
<head>
<title>Yaathra</title>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="editor.js"></script>
    <script>
      $(document).ready(function() {
        $("#txtEditor").Editor();
      });

      $(document).submit(function(){
            $("#txtEditor").val($("#txtEditor").Editor("getText"));
        });

    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="editor.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="main2.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

body { padding-right: 0 !important }

</style>
</head>
<body>
<!-- Add Navbar -->
<?php include('navbar.php');?>


<table class="table table-striped" style="margin-left:10%; margin-right:5%;">
    <thead>
      <tr>
      <th><h3><b>Sinhala</b></h3></th>
      <th><h3><b>Tamil</b></h3></th>
      <th><h3><b>English</b></h3></th></tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2010.pdf">2010</td>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2010.pdf">2010</td>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2010.pdf">2010</td>
      </tr>
      <tr>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2009.pdf">2009</td>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2009.pdf">2009</td>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2009.pdf">2009</td>
      </tr>
      <tr>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2006.pdf">2006</td>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2006.pdf">2006</td>
        <td><a href="http://localhost/Yaathra_pro/Views/pastpapers/2006.pdf">2006</td>
      </tr>
    </tbody>
  </table>

</body>
</html>