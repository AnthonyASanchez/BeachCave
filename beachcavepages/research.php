<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Icons Link -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Style-Color.css">
  </head>
  <body>
    <!--Including the header-->
    <?php include '../Includes/header.php'; ?>
    <div class = "container-fluid m-0 p-0 bgCol" >
      <div class = "row m-0 p-0" >
        <div class = "col-2 ml-5 mt-5">
          <div class="list-group sideList">
            <a href="research.php" class="list-group-item active">
              Projects
            </a>
            <a href="publications.php" class="list-group-item list-group-item-action">Publications</a>
            <a href="researchopportunities.php" class="list-group-item list-group-item-action">Research Opportunities</a>
          </div>
        </div>
        <div class = "container-fluid m-5 bgInverse" id = "main" >
            <div class = "container m-0 p-3">
                <div class = "researchBlock py-4" id = "humanrobot">
                  <h1 class = "display-4"><u>Human-Robot Interaction</u></h1>
                    <p class = "lead">The research in this area focuses on the use of the CAVE environment in studying the interaction between human and robot in a dynamic environment in order to develop effective
                      control strategies for single and /or multiple user and robot collaboration. The applicants cover two primary areas: rehabilitation and advanced manufacturing</p>
                  <h2 class = "h5"><strong><u>Rehabilitation</u></strong></h2>
                    <p class = "lead"><a> Emel Demircan</a>, <a>Vennila Krishnan</a>, and <a>Panadda Marayong</a> will research in human-robot interaction for rehabilitation. This research area will capitalize
                      on the synergy between robotics and biomechanics for modeling the dynamics and simulating the motion of humans. This opens up the possibility of quantitative prediction of subject-specific
                      response to proposed training interventions by incorporating a model of the central nervous system (CNS) behavior and consequent change in control signals.
                    </p>
                  <h2 class = "h5"><strong><u>Advanced Manufacturing</u></strong></h2>
                      <p class = "lead"><a>Praveen Shankar</a> and <a>Ehsan Barjasteh</a> will be using the CAVE system in the area of manufacturing. This research will implement and test reconfigurable strategies
                        for controlling multiple manufacturing robots in collaboration with a human operator in an uncertain dynamic environment. The primary usage of the immersive virtual environment and the motion
                        capture system in this research is the ability to simulate either the human operator or the manufacturing robots while the other actively interacts with the simulation.
                      </p>
                        <img class = "img-fluid rounded-0 mx-auto d-block" src="../Images/HRInteractionTwoAreas.png" alt ="Diagram of human operator under manufacturing task and other of robots. Robots have a global motion planner that sends signals to local controls. Local controls then send image back to global motion planner.">
                  </div>
                  <div class = "researchBlock py-4" id = "complexsystem">
                    <h1 class = "display-4"><u>Human Interaction in Complex Systems</u></h1>
                      <p class = "lead">The research proposed in this area focus on gaining basic understanding and develop metrics for evaluation of various aspects of human interactions in complex systems, which embody multiple sensory feedback, perturbations,
                         advanced modes of display, and multiple users. The results of research activities in this area will enhance the development of human-machine technologies
                       </p>
                    <h2 class = "h5"><strong><u>Human Movement and Perception</u></strong></h2>
                      <p class = "lead"><a>Jim Miles</a>, and <a>Will Wu</a> will research in human interaction in complex systems through human movement and perception. This research will involve two categories:
                        perceptual contributions to human movement, and the influence of physical state on attention and perception of the environment.
                      </p>
                    <h2 class = "h5"><strong><u>Intelligent Cockpit</u></strong></h2>
                        <p class = "lead"><a>Mehrdad Aliasgari</a>, <a>Qingbin Gao</a>, <a>Panadda Marayong</a>, <a>Jim Miles</a>, and <a>Praveen Shankar</a> will be using the CAVE system to
                          study intelligent cockpits. This project focuses on the development and evaluation of technologies associated with the intelligent cockpit of a next generation civilian and military
                          aircraft.
                        </p>
                          <img class = "img-fluid card-img rounded-0 mx-auto d-block" src="../Images/comsysone.png" alt = "Two human figures, left figure is slow and has high attention directly in front of him. Right figure is moving fast and attention is vertically skewed but distance increases.">
                  </div>
                  <div class = "py-4" id = "motorandlearning">
                    <h1 class = "display-4"><u>Human Motor Learning & Performance</u></h1>
                      <p class = "lead">The CSULB Department of Physical Therapy (PT) established multiple rehabilitation and training programs that serve the local community. These programs and available resources have lead
                         to several collaborative projects using the CAVE involving the development of technologies to enhance motor skills and performance.
                       </p>
                    <h2 class = "h5"><strong><u>Rehabilitation</u></strong></h2>
                      <p class = "lead"><a>I-Hung Khoo</a>, <a>Vennila Krishnan</a>, <a>Emel Demircan</a>, <a>Will Wu</a>, and <a>Panadda Marayong</a> will be researching human motor learning and performance on rehabilitation.
                        An advantage of an immersive virtual reality is that it could enable patients to practice intensively in a much more motivating and engaging way than the conventional exercise, which
                        can sometimes be tedious. Additionally the simulation can be altered to accommodate different training scenarios in a convenient and cost effective way.
                      </p>
                      <img class = "img-fluid card-img rounded-0 mx-auto d-block" src="../Images/motorone.png" alt = "Man walking, gait being measured. Prosthetic leg that has three components, control unit, optical marker, and vibrotactile unit. Bottom of prosthetic leg has a solenoid and motor housing.">
                      <h2 class = "h5"><strong><u>Sport Training</u></strong></h2>
                          <p class = "lead"><a>George Beneck</a> and <a>Will Wu</a> will be using the CAVE system to create realistic environments to conduct movement research for sport training. One
                            of the research projects that will be enabled by the system is the study of mechanics of throwing a football in quarterbacks. This research will enable coaches to teach and
                            train these mechanics in future quarterbacks.
                          </p>
                      <h2 class = "h5"><strong><u>Sport Training</u></strong></h2>
                          <p class = "lead"><a>Emel Demircan</a> will be researching musculoskeletal modeling and motion analysis. The research will use the CAVE system to include real-time interpretation
                            of the movements and prediction of movement patterns that may result in a short or long-term impairment in human performance will be developed.
                          </p>
                            <img class = "img-fluid card-img rounded-0 mx-auto d-block" src="../Images/skeletalsys.png" alt = "Skeleton walking, posture and gait of legs are measured on each step taken.">


                  </div>



            </div>
        </div>
      </div>
    </div>



    <!--Including Footer-->
    <?php include '../Includes/footer.php';?>
    <!--</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
