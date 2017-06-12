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

table, th, td {
    border: 1px solid lightblue;
}

</style>
</head>
<body>
<!-- Add Navbar -->
<?php include('navbar.php');?>

<!-- pastpaper category -->

<div>
	<table width="80%" style="margin-left:10%;margin-right:5%;min-width:820px;">
        <tr style="background-color:white;">
        <td class="service-box" width="25%" align="center">
        <img src="assets/dpt.png">
            <h2>G.C.E. O/L</h2>
            <p>You can view past years past papers.</p>
            <a href="pastpapers.php"><input type="button" value="Click here"></a>
        </td>
            
        <td class="service-box" width="25%" align="center">
        <img src="assets/schl.png">
        <br>
            <h2>Term Test Papers</h2>
            <p>You can add/view school term test papers.</p>
            <a href="termtest.php"><input type="button" value="Click here">
        </td>
            
        <td class="service-box" width="25%" align="center">
        <img src="assets/tea.png">
        <br>
            <h2>Suggested Papers</h2>
            <p>You can view suggested papers.</p>
            <a href="sugpaper.php"><input type="button" value="Click here">
        </td>
        </tr>
    </table>
</div> 
</body>
</html>