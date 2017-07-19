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
  <body>
    <!--Including the header-->
    <?php include '../Includes/header.php'; ?>
    <div class = "container-fluid m-0 p-0 bgCol" >
      <div class = "row m-0 p-3">
        <div class = "col-2 ml-5 mt-5">
          <div class="list-group sideList">
            <a href="lab.php" class="list-group-item list-group-item-action">
              Lab Information
            </a>
            <a href="labscheduling.php" class="list-group-item list-group-item-action">Lab Scheduling</a>
            <a href="softwareresources.php" class="list-group-item active ">Software Resources</a>
          </div>
        </div>
        <div class = "container-fluid m-5 p-3 bgInverse" id = "main" style="height:600px;" >
          <div class ="container">
            <h1 class = "display-4"><u>Software Resources and Downloads</u></h1>
            <p class ="lead"> currently none are availible.</p>
          </div>
        </div>
      </div>
    </div>



    <!--Including Footer-->
    <?php include '../Includes/footer.php';?>
    <!--</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <?php include '../Includes/bootstrapfooter.php'; ?>
  </body>
</html>
