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
            <a href="labscheduling.php" class="list-group-item active">Lab Scheduling</a>
            <a href="softwareresources.php" class="list-group-item list-group-item-action">Software Resources</a>
          </div>
        </div>
        <div class = "container-fluid m-5 p-3 bgInverse" id = "main" >
          <div class ="container">
            <form>
              <div class="form-group">
                <div class = "row">
                  <label class = "col-6" for="name">Name</label>
                  <label class = "col-1 ml-5" for="MM">Month</label>
                  <label class = "col-1 ml-1" for="DD">Day</label>
                  <label class = "col-1 ml-1" for="YYYY">Year</label>
                </div>
                <div class = "row">
                  <input type="name" class="form-control col-6" id="name" aria-describedby="emailHelp" placeholder="Enter name">
                  <input type="MM" class="form-control col-1 ml-5" id="name" aria-describedby="Month" placeholder="MM">
                  <input type="DD" class="form-control col-1 ml-1" id="name" aria-describedby="Month" placeholder="DD">
                  <input type="YYYY" class="form-control col-1 ml-1 mr-0" id="name" aria-describedby="Month" placeholder="YYYY">
                </div>
                <small id="name" class="form-text text-muted ">We'll never share your information with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="InputEmail1">Email address</label>
                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

              </div>
              <div class="form-group">
                <label for="organizationfill">Organization</label>
                <input type="organization" class="form-control" id="organizationfill" placeholder="Organization">
              </div>
              <div class="form-group">
                <label for="reason">Reason</label>
                <textarea class="form-control" id="reason" rows="4"></textarea>
              </div>

              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Check me out
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
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
