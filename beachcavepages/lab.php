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
                    <h1 class = "display-5"><u>Information about the Lab</u></h1>
                      <p class ="lead">This lab aim to acquire an immersive virtual environment that will facilitate ongoing interdisciplinary research in human-machine interaction in a dynamic environment at CSULB.<p>
                      <p class ="lead">The instrument is a turnkey, well integrated immersive virtual reality (VR) environment with synchronized full-body motion tracking. The system includes a four-wall
                        projection system, eight camera real-time motion capture system, and a control software suite that allows customized software development and additional hardware integration.</p>
                      <p class = "lead">The VR system provides a cost-effective design solution that can be adapted, utilized, and evaluated to fit the needs of multiple projects relating to human
                        perception as well as human-machine interaction.</p>
                      <p class ="lead">The flexible usage of the VR environment suits the strong demand to enhance research infrastructure and the use of shared equipment on campus. The system will enable new research
                        activities, teaching opportunities, and enhanced student research training.</p>
                  </div>
                  <div class = "researchBlock py-4">
                    <h1 class = "display-5"><u>How to use the Lab</u></h1>
                      <p class = "lead">Anyone interested in using the facility for research purposes can fill out a <a href = "labscheduling.php">scheduling form</a>.<p>
                      </p>
                      <p class = "lead">Safety and protocols for using the BeachCAVE Lab will be provided upon approval of using the lab for research.
                      </p>
                      <p class = "lead">If you have additional questions regarding how to use the lab, who can use the lab, set-up instructions, rules, protocols, etc. please contact <a href="">Dr.Marayong</a><p>
                      </p>
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
                          <td>ARTTRACKS full body tracking system withb passive markers</td>
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
