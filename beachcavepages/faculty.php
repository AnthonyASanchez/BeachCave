<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Icons Link -->
    <!-- Bootstrap CSS -->
    <?php include '../Includes/bootstraphead.php'; ?>
  </head>
  <body style="min-width:900px;">
    <!--Including the header-->
    <?php include '../Includes/header.php'; ?>
    <div class = "container-fluid m-0 p-5 bgCol" >
      <div class ="container-fluid bgInverse p-1">
        <h1 class ="display-4"><u>CSULB Faculty & Staff</u></h1>
        <?php
      $hostName = "50.87.249.116";
      $databaseName = "beachcav_staff";
      $databaseUsername = "beachcav_dbAdmin";
      $dataPassword = "CaveCasl21!";
      $con = mysqli_connect($hostName,$databaseUsername,$dataPassword,$databaseName) or die("Error Connect");
      $query = "SELECT * FROM `faculty`";
      $result = mysqli_query($con,$query);
      while($row = mysqli_fetch_array($result)){
        echo '
        <div class = "row facrow">
          <div class ="col-3 m-3">
            <img class = "img-fluid mx-auto d-block"src="../Faculty/'.$row["image"].'" style="max-width:200px;max-height:200px">
            <p class = "lead text-center">'. $row["Name"] .'</p>
          </div>
          <div class = "col-8 m-3 facblock" >
            <p class = "lead"><u>Department</u>: '. $row["Department"].'</p>
            <p class = "lead"><u>ResearchArea</u>: '. $row["researchArea"].'</p>
            <p class = "lead"><u>Research Project</u>: '.  $row["researchProject"]. '</p>
            <p class = "lead"> <a href="'. $row["website"].'">Website</a>, email:<a href="mailto:'. $row["email"].'">'. $row["email"].'</a></p>
          </div>
        </div>';
      }
      ?>

      </div>
    </div>


    <!--Including Footer-->
    <?php include '../Includes/footer.php';?>
    <!--</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <?php include '../Includes/bootstrapfooter.php'; ?>
  </body>
</html>
