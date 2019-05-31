<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Icons Link -->
    <a href="../Includes/formemail.php">
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
            <a href="labscheduling.php" class="list-group-item active">Lab Scheduling</a>
            <a href="softwareresources.php" class="list-group-item list-group-item-action">Software Resources</a>
          </div>
        </div>
        <div class = "container-fluid m-5 p-3 bgInverse" id = "main" >
          <div class ="container">
            <form method = "post" name = "labform" action = "../Includes/formemail.php">
              <div class="form-group">
                <div class = "row">
                  <label class = "col-6" for="name">Name</label>
                  <label class = "col-1 ml-5" for="MM">Month</label>
                  <label class = "col-1 ml-1" for="DD">Day</label>
                  <label class = "col-1 ml-1" for="YYYY">Year</label>
                </div>
                <div class = "row">
                  <input name = "name"type="text" class="form-control col-6"  aria-describedby="emailHelp" placeholder="Enter name">
                  <input name = "month" type="text" class="form-control col-1 ml-5"  aria-describedby="Month" placeholder="MM">
                  <input name = "day" type="text" class="form-control col-1 ml-1"  aria-describedby="Month" placeholder="DD">
                  <input name = "year" type="text" class="form-control col-1 ml-1 mr-0"  aria-describedby="Month" placeholder="YYYY">
                </div>
                <small id="name" class="form-text text-muted ">We'll never share your information with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="InputEmail1">Email address</label>
                <input name = "email" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">

              </div>
              <div class="form-group">
                <label for="organizationfill">Organization</label>
                <input name = "organization" type="text" class="form-control"  placeholder="Organization">
              </div>
              <div class="form-group">
                <label for="reason">Reason</label>
                <textarea name = "message" class="form-control"  rows="4"></textarea>
              </div>
              <button name = "submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
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
