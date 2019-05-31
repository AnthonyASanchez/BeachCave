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
            <a href="lab.php" class="list-group-item active">
              Lab Information
            </a>
            <a href="labscheduling.php" class="list-group-item list-group-item-action">Lab Scheduling</a>
            <a href="softwareresources.php" class="list-group-item list-group-item-action">Software Resources</a>
          </div>
        </div>
        <div class = "container-fluid m-5 bgInverse" id = "main" >
            <div class = "container m-0 p-3">
                  <div class = "researchBlock py-4">
                    <h1 class = "display-5"><u>About the Lab</u></h1>
                      <p class ="lead">The Beach CAVE lab houses a CAVE immersive virtual environment system to facilitate interdisciplinary research in human-machine interaction in a dynamic environment.
                        Our system, Viscube M4 (visbox Inc., IL), consists of front-projected four panel displays with an eight-camera ARTTrack5 real-time full body motion tracking system and fully-integrated
                        graphics workstation. The acquisition of the CAVE VR system was funded by Nantional Science Foundation Major Research Instrumentation grant (Award number 1626655).<p>

                  </div>
                  <div class = "py-4" >
                    <h1 class = "display-5"><u>Equipment Components and Specs</u></h1>
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Components</th>
                          <th>Specifications</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Center and floor projector</td>
                          <td>1920 x 1200 resolution per surface</td>
                        </tr>
                        <tr>
                          <td>Side wall projector</td>
                          <td>1316 x 1200 resolution per surface</td>
                        </tr>
                        <tr>
                          <td>Screen size</td>
                          <td><p>W 140" x H 87.5" (center and floor)</p>
                              <p>W 94" x H 87.5" (sides)</p></td>
                        </tr>
                        <tr>
                          <td>ARTTRACKS full body tracking system with passive markers</td>
                          <td>8 infrared optical 6-DOF tracking cameras, sensor resolution of 1.3 megapixels at full frame mode, frame rate up to 300 Hz</td>
                        </tr>
                        <tr>
                          <td>ART Fingertracking</td>
                          <td>Frame rate: hand target at 60 Hz and 3-finger thimbles at 20 Hz. Battery-operated(Li-ion battery 3.7V, 700mAh)</td>
                        </tr>
                        <tr>
                          <td>Audio system</td>
                          <td>Yamaha RX-V377 5.1 reciever and Leviton AEH50-BL 5.1 soeaker system</td>
                        </tr>
                        <tr>
                          <td>Operating system and software</td>
                          <td>Windows and/or Linux with open VR libraries</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <div class = "researchBlock py-4">
                    <h1 class = "display-5"><u>Lab Use & Scheduling</u></h1>
                    <div class ="container">
                      <div class ="row justify-content-center">
                      <iframe src="https://calendar.google.com/calendar/embed?src=beachcave21%40gmail.com&ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                    </div>
                      <p class = "lead">The lab is located in the Engineering Technology building room 21(ET-21). Click <a href ="">here</a> for map and direction to campus.
                      </p>
                      <p class = "lead">If you are interested in using the lab facility or have additional questions, please send your inquiries to <a href="mailto: BeachCAVE@csulb.edu" style="text-decoration: none;">BeachCAVE@csulb.edu</a>.
                      </p>
                      <!--<p class = "lead">If you have additional questions regarding how to use the lab, who can use the lab, set-up instructions, rules, protocols, etc. please contact <a href="">Dr.Marayong</a><p>
                      </p>-->
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
