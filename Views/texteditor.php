<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Ask a Question</h3>
        </div>
        <div class="modal-body" style="height:400px;">

     <form action="" method="post"  >

         <div class="col-xs-12"><select class="form-control" name="category" >
                 <option>Select a category</option>
                <option>Measurements </option>
                <option>Algebra </option>
                <option>Numbers </option>
                <option>Geometry  </option>
                <option>Sets and Probability </option>
                <option>Statistics </option>
              </select></div>

      
     <div style="width:100%; height:20%; margin:1%;" class="col-lg-10 nopadding">
    <textarea id="txtEditor" name="body" ></textarea> </div> 


    <div class="col-xs-12">
        <input type="text" class="form-control" placeholder="Tags(max 5 tags)"  name="tag" id="tag"></div>

      </div>


        <div class="modal-footer">
          <button type="submit" name="submit"  class="btn btn-primary btn-md">SUBMIT QUESTION</button>
          <php><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      
      
    </div>

</body>
</html>