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
      <div class = "row m-0 p-0" >
        <div class = "col-2 ml-5 mt-5">
          <div class="list-group sideList">
            <a href="research.php" class="list-group-item list-group-item-action">
              Projects
            </a>
            <a href="publications.php" class="list-group-item active" >Publications</a>
            <a href="researchopportunities.php" class="list-group-item list-group-item-action">Research Opportunities</a>
          </div>
        </div>
        <div class = "container-fluid m-5 bgInverse" id = "main" style="height:600px;" >
            <div class = "container m-0 p-3">
                <h1 class = "h1 text-center"><u>Publications</u></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Year</th>
                      <th>Research Area</th>
                      <th>Author</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Situation awareness and workload Air Traffic Control</td>
                      <td>9/2016</td>
                      <td>Human Factors</td>
                      <td>T. Strybel</td>
                    </tr>
                    <tr>
                      <td>Marco Botton Tuttofare</td>
                      <td>2/2016</td>
                      <td>Sensation Perception</td>
                      <td>A. Manabat</td>
                    </tr>
                    <tr>
                      <td>Design integration with tools</td>
                      <td>11/2015</td>
                      <td>Design</td>
                      <td>Y. Wong</td>
                    </tr>
                    <tr>
                      <td>Mechanical Engineering</td>
                      <td>5/2015</td>
                      <td>Engineering</td>
                      <td>A. Shaw</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>



    <!--Including Footer-->
    <?php include '../Includes/footer.php';?>
    <!--</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <?php include '../Includes/bootstrapfooter.php'; ?>
  </body>
</html>
