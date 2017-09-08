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
    <div class = "jumbotron jumbotron-fluid text-white text-center m-0 bgCol" >
        <div class = "container">
          <h1 class = "display-1">Welcome to the <strong>Beach</strong>CAVE</h1>
          <p class = "lead">An immersive virtual reality environment that will facilitate ongoing interdisciplinary research at California State University, Long Beach</p>
        </div>
      </div>
      <div class = "container-fluid  m-0 p-0">
        <div class = "row m-0 p-0" >
          <div class = "col-md-12 col-lg-4 col-sm-12 p-0 m-0 ">
            <div class = "card text-center border-0 rounded-0">
              <img class = "card-img rounded-0" src="../Images/cave1.jpg" alt = "collaborative use of VR system.">
              <div class = "card-img-overlay">
                <div class  ="row justify-content-center" style = "height:80%">
                  <h4 class = "card-title text-white">Human-robot Interaction</h4>
                </div>
                <div class = "row justify-content-center" >
                  <a href="#" class=" btn btn-outline-primary" data-toggle="modal"data-target=".hrinter">Find out more</a>
                  <?php include '../Includes/humanrobotmodal.php'; ?>
                </div>
              </div>
          </div>
        </div>
        <div class = "col-md-12 col-lg-4 col-sm-12 p-0 m-0">
          <div class = "card text-center border-0 rounded-0">
            <img class = "card-img  rounded-0" src="../Images/cave3.jpg" alt = "collaborative use of VR system.">
            <div class = "card-img-overlay">
              <div class = "row justify-content-center" style = "height:80%">
                <h4 class = "card-title text-white">Human interaction in complex systems</h4>
              </div>
              <div class = "row justify-content-center"  >
                <a href="#" class="btn btn-outline-primary" data-toggle="modal"data-target=".comsysmodal">Find out more</a>
                <?php include '../Includes/complexsysmodal.php'; ?>
              </div>
            </div>
        </div>
      </div>
      <div class = "col-md-12 col-lg-4 col-sm-12 p-0 m-0">
        <div class = "card text-center border-0 rounded-0">
          <img class = "card-img rounded-0" src="../Images/cave2.jpg" alt = "collaborative use of VR system.">
          <div class = "card-img-overlay">
            <div class = "row justify-content-center" style = "height:80%">
              <h4 class = "card-title text-white">Human motor and learning performance</h4>
            </div>
            <div class = "row justify-content-center">
              <a href="#" class="btn btn-outline-primary" data-toggle="modal"data-target=".motormodal">Find out more</a>
              <?php include '../Includes/motormodal.php'; ?>
            </div>
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
