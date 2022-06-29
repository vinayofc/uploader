<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.js"></script> 
    <title>Upload Progress</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
    <div class="main">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
  <input type="file" name="myfile" class="form-control" id="inputGroupFile02">
  <input type="text" name="fname" class="form-control" id="inputGroupFile02">
  <button type="submit" class="btn-primary input-group-text">Upload</label>
</div>
</form>
<div class="progress" style="display: none;">
  <div class="progress-bar progress-bar-striped progress-bar-animated bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
</div>
<br>
<div class="alert alert-success status" style="display:none" role="alert">
  Your file is successfully uploaded !
</div>
<div class="alert alert-primary status" style="display:none" role="alert">
  Here is Your Url:<span id="urlop"></span>
</div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   
    <script>
$(document).ready(function(){
$(function(){

  $("form").ajaxForm({
    beforeSend:function(){
      $(".status").css("display","none");

      $(".progress").css("display","");
      var percentVal = "0%";
      $(".bar").css("width",percentVal);
    },
    uploadProgress:function(event,position,total,percentComplete){
var percentVal = percentComplete +"%";
$(".bar").css("width",percentVal);
    },
    complete:function(xhr){
      $(".progress").css("display","none");
      $(".status").css("display","");
    },
    success:function(data){
      $("#urlop").html(data);
      // console.log(data);
    }
  });

});
});
    </script>
    
   
</body>
</html>