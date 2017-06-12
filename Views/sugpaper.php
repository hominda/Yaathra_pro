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

* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.ttab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height: 137px;
}

/* Style the buttons inside the tab */
div.ttab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.ttab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.ttab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    /*height: 350px;*/
}



body { padding-right: 0 !important }

</style>
</head>
<body>

<!-- Add Navbar -->
<?php include('navbar.php');?>

<div class="ttab">
  <button class="tablinks" onclick="openCity(event, 'Papers')" id="defaultOpen">Papers</button>
  <button class="tablinks" onclick="openCity(event, 'Upload')">Upload</button>
</div>

<div id="Papers" class="tabcontent">
</div>

<div id="Upload" class="tabcontent">
<form action="termtestpaper.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="subjectarea">Subject Area</label>
    <textarea class="form-control" id="subjectarea" rows="1"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
</form>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>