<script src="editor/ckeditor.js"></script>
<?php include'database.php';?>
<html>
<head>
    
    <title> Add New Book</title>
    <link href="Bootstrap/bootstrap.min.css" rel="stylesheet"> 
    
</head> 
<body> 
 
        <div class="container-fluid">
        <div class="container mt-5">

        <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8  p-3"><br>
        
        <h2 class="text-center mb-3 text-dark">ADD NEW Book</h2><br>
        <form method="POST" autocomplete="off"  enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" name="authorname" class="form-control" placeholder="authorname" required>
            </div>
            <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="title" required>
            </div>
            <div class="form-group">
              <input type="text" name="serialno" class="form-control" placeholder="serialno" required>
            </div>
         
            <div class="form-group">
              <input type="submit" name="add" class="btn btn-control  btn-outline-dark" value="Add">
              <input type="reset" name="clear" class="btn btn-control  btn-outline-dark" value="Clear">
            </div>

       </form>

       <?php

         if(isset($_POST['add']))
         {
            
            
             $txt=addslashes($_POST['editor']);
            $sql="insert into addbooks(authorname,title,serialno)values('$_POST[authorname]','$_POST[title]','$_POST[serialno]');";
            if($conn->query($sql)===TRUE)
            {
              echo "<script> window.alert('New book added successfully');</script>";
            }
            else
            {
              echo "ERROR".$sql."<br>".$conn->error;
            }
          }
        

       ?>
            
    </div>

    <div class="col-md-2">
      
    </div>

    

    </div>

    </div>
    </div>

</body>
</html>
<script> CKEDITOR.replace('editor');</script>

<?php include'footer.php';?>