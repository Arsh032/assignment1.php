<?php include'database.php';?>

<html>
<head> 
 
<title>books</title>   
<link href="Bootstrap/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    
 <div class="container-fluid">
 <div class="container mt-3">
      
 <div class="row"> 
    
   
    
   <div class="col-md-12">
   <h1 class="text-center mb-3 text dark">books List</h1><br>
   <div class="table responsive">
        <table class="table table-striped table-bordered table-hover" style="text-align:center;">
            
          <tr style="background-image:linear-gradient(to bottom right,cadetblue,skyblue,aqua,cyan,pink);">

             <th>authorname</th>
             <th>title</th>
             <th>serialno</th>
          
    
             
          </tr>


          <?php

          $sql="select* from addbooks order by authorname DESC";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
            while($row=$result->fetch_assoc())
            {  
              $authorname=$row['authorname'];
              echo "<tr>";
              echo "<td>".$row['authorname']."</td>";
              echo "<td>".$row['title']."</td>";
              echo "<td>".$row['serialno']."</td>";
    
              echo "</tr>";
            }
          } 
          else
          {
            echo "<script>window.alert('No books found');</script>";
          }



          

        ?>
            
      </table>
      </div>
      </div>  
     
  
    
 </div>
     
 </div>
 </div>
    <br><br><br><br><br><br><br>
</body>
</html>

<?php include 'footer.php';?>