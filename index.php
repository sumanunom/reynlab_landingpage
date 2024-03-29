<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReynLab</title>
    
    <!-- ---------------------------- FONT AWESOME ---------------------------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css?v=<?php echo rand();?>">
</head>
<body>

    <div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md-5">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-5 col-md-12 col-12">
                <img src="assets/img/Logo.png" alt="">
                <h5 class="mt-3 mb-3">Lorem ipsum dolor sit amet,</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit diam, bibendum id massa nec, hendrerit posuere ligula. Phasellus feugiat odio vehicula venenatis congue.</p>
            </div>
            <div class="col-lg-7 col-md-12 col-12">
                <button type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
                
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" required>
                      </div>

                    <div class="mb-3">
                      <label for="Email" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" required>
                    </div>

                    <div class="mb-3">
                      <label for="mobile" class="form-label">Mobile Number</label>
                      <input type="number" name="mobile" class="form-control" id="mobile" required>
                    </div>
                    <button type="submit" class="btn btn-submit">Apply Now</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>

    <div class="container home">    
        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/Logo.png" alt="" class="d-inline-block align-text-top">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#keyfeatures">KEY FEATURES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#program">PROGRAM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#certificate">CERTIFICATE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#programfees">PROGRAM FEE</a>
              </li>
            </ul>
            <div class="header-button">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">BOOK A FREE DEMO</button>
                <button class="btn btn-info">FREE COUNSELLING</button>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="container-fluid apply-section">
        <div>
            <img class="banner-img" src="assets/img/banner.png" alt="">
        </div>
        
        <div class="container">
            <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <button class="btn btn-secondary"></button>
                <button class="btn btn-secondary"></button>
    
                <div class="reyn-heading">
                    <h2>Certificate Program In Advanced ECU Tuning and Remaps</h2>
                    <p>Advance your career with out top ECU Tuning Certificate Program. <span>Master installation, tuning and remapping for automotive excellence with S.T.E.M Accredited Certification.</span></p>
                </div>

                <div class="stem-logo">
                    <p>Certification Collaborator <span><img src="assets/img/STEM-accredited.png" alt=""></span></p>
                </div>

                <div class="badge-info">

                    <div><span> <img src="assets/img/banner-icon-1.png" alt=""></span> <p>  Choose live, office, or hybrid for a flexiable learning experience.</p></div>
                    <div><span> <img src="assets/img/banner-icon-3.png" alt=""></span> <p>  No prerequisites Required</p></div>

                </div>

                <div class="badge-info">

                    <div><span> <img src="assets/img/banner-icon-2.png" alt=""></span> <p>  Globally accepted certificate by S.T.E.M</p></div>
                    <div><span> <img src="assets/img/banner-icon-4.png" alt=""></span> <p>  No Content</p></div>

                </div>

                <div class="apply-down-button">
                    <button class="btn apply" data-bs-toggle="modal" data-bs-target="#exampleModal"> APPLY NOW</button>
                    <button class="btn download"> DOWNLOAD SYLLABUS</button>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
            </div>
        </div>
    </div>
    </div>
  
        <div class="container section-3">
            <div class="row">
            <div class="col col-lg-3 col-md-12 col-sm-12">
                <div> <img src="assets/img/batch.png" alt=""></div>
                <div><h6>Lorem Ipsum</h6>
                <p>Lorem Ipsum is simply dummy text</p></div>
            </div>
            <div class="col col-lg-3 col-md-12 col-sm-12">
                <div><img src="assets/img/duration.png" alt=""></div>
                <div><h6>Lorem Ipsum</h6>
                <p>Lorem Ipsum is simply dummy text.</p></div>
            </div>
            <div class="col col-lg-3 col-md-12 col-sm-12">
                <div><img src="assets/img/placement.png" alt=""></div>
                <div><h6>Lorem Ipsum</h6>
                <p>Lorem Ipsum is simply dummy text.</p></div>
            </div>
            <div class="col col-lg-3 col-md-12 col-sm-12">
                <div><img src="assets/img/university.png" alt=""></div>
                <div><h6>Lorem Ipsum</h6>
                <p>Lorem Ipsum is simply dummy text.</p></div>
            </div>
            <div class="col col-lg-3 col-md-12 col-sm-12">
                 <div><img src="assets/img/liveproject.png" alt=""></div>
                <div><h6>Lorem Ipsum</h6>
                <p>Lorem Ipsum is simply dummy text</p></div>
            </div>
        </div>
    </div>

    <div class="container section-4" id="keyfeatures">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h3>Key Features</h3>
                <ul>
                    <li>
                        <p>
                            S.T.E.M-USA Certified Education: Receive top-tier training in automotive tuning, certified by STEM-USA, ensuring high-quality education in science, technology, engineering, and mathematics.
                        </p>
                    </li>
                    <li>
                        <p>
                            Career & Business Support: Benefit from comprehensive career guidance and assistance in setting up your own tuning business, shaping a successful path in the automotive industry.
                        </p>
                    </li>
                    <li>
                        <p>
                            Hands-On Practical Learning: Dive into real-world tuning experiences, working on both petrol and diesel engines for cars and bikes to apply theoretical knowledge in a practical setting.
                        </p>
                    </li>
                    <li>
                        <p>
                            Mastering ECUs: Acquire advanced skills by mastering piggyback and standard Engine Control Units (ECUs), including tuning standalone ECUs and remapping OEM petrol and diesel ECUs.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 section4-sec_col">

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <p>Courses aligned with industry norms</p>
                        <img src="assets/img/key-features-1.png" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <p>Hands-on Learning with live project Integration</p>
                        <img src="assets/img/key-features-3.png" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <p>lorem Ipsum is simply dummy text.</p>
                        <img src="a" alt="">
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <p> Globally Accepted Certificate from S.T.E.M</p>
                        <img src="assets/img/key-features-2.png" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <p>24/7 Personalized Assitance for Clearing Doubts</p>
                        <img src="assets/img/key-features-4.png" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <p>lorem Ipsum is simply dummy text.</p>
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container section-5" id="program">
        <h3> Program Overview</h3>
        <div class="row">
            <div class="col col-lg-3 col-md-3 col-12">
                <img src="assets/img/program-overview-1.png" alt="">
                <h6>COURSES OFFERED</h6>
                <p>Our ECU tuning courses suit everyone, whether you're a working professional seeking skill upgrades or a fresher kickstarting a career.</p>
            </div>
            <div class="col col-lg-3 col-md-3 col-12">
                <img src="assets/img/program-overview-2.png" alt="">
                <h6>ELIGIBILITY</h6>
                <p>Open to all skill level from beginner to advanced. Our course have no educational prerequisites, ensuring accessibility for enthusiasts of all backgrounds.</p>
            </div>
            <div class="col col-lg-3 col-md-3 col-12">
                <img src="assets/img/program-overview-3.png" alt="">
                <h6>Lorem ipsum</h6>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual</p>
            </div>
            <div class="col col-lg-3 col-md-3 col-12">
                <img src="assets/img/program-overview-4.png" alt="">
                <h6>Lorem ipsum</h6>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual</p>
            </div>
        </div>
    </div>
    
    <div class="container-fluid section-6" id="certificate">
        <div class="container">
            <div class="row">
            <h2> Program Completion Certification</h2>
            <p> Student wiil be awarded a certificate upon successfully finishing the program.</p>
            <div>
                <button class="btn">ECU Tuning</button>
            </div>
            
            <div class="col col-lg-6 col-md-6 col-12 content">
                <h5>Certification Recognized by STEM Accreditation</h5>
                <p>Upon course completion, you'll achieve a distinguished STEM-USA Certified certification, a recognition of your advanced skills in ECU Tuning and Remaps. This certification signifies your commitment to excellence and guarantees top-tier education and recognition.</p>
                
                <p class="text-img"><img src="assets/img/check-icon.png" alt=""> Engage in 100% live sessions with exclusive 1:1 mentorship.</p>
                <p class="text-img"><img src="assets/img/check-icon.png" alt=""> Lorem ipsum dolor sit amet consectetur adipiscing</p>
                <p class="text-img"><img src="assets/img/check-icon.png" alt=""> Lorem ipsum dolor sit amet consectetur adipiscing</p>
            </div>
    
            <div class="col col-lg-6 col-md-6 col-12 image">
                <img src="assets/img/certificate.png" alt="">
            </div>
        </div>
        </div>
    </div>

    <div class="container-fluid section-7">
    <div class="container ">
        <div class="row text_img">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <h3>Recent success stories</h3>
                <p>Demonstrating our expertise in education and state-of-the-art technology through impactful placements.</p>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6 col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6 col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6 col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6 col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p>
            </div>
        <!--</div>-->

        <!--<div class="row image-box">-->
            <div class="col col-lg-3 col-md-6 col-sm-6 image-box col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p></div>
            <div class="col col-lg-3 col-md-6 col-sm-6 image-box col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p></div>
            <div class="col col-lg-3 col-md-6 col-sm-6 image-box col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6 image-box col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6 image-box col-6">
                <img src="assets/img/success-stories.png" alt="">
                <p>Lorem ipsum dolor</p>
                <p>(GET, Designing)</p>
                <p>CITIUSKBE, HYDRABAD</p>
            </div>
        </div>
    </div>
    </div>

    <div class="container section-8">
        <h3>Gallery</h3>
        <p>Lorem ipsum dolor</p>
        <div class="row">
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
 
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
            <div class="col col-lg-3 col-md-4 col-6">
                <img src="assets/img/rectangle.png" alt="">
            </div>
        </div>
    </div>

    <div class="container section-9">
        
        <h3>Program Outline</h3>
        <p>Explore our course's modules and components for a concise program overview.</p>

        <div class="row">
            <div class="col col-lg-4 col-md-6 col-12">

                <div class="dropdown">
                    <div class="dropname dropmenu">AIR FUEL RATIOS <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content" style="display: block;">
                        <p><i class="fa-solid fa-circle-check"></i>Course Introduction</p>
                        <p><i class="fa-solid fa-circle-check"></i>What is an Engine?</p>
                        <p><i class="fa-solid fa-circle-check"></i>Stoichiometric Air Fuel Ratios</p>
                        <p><i class="fa-solid fa-circle-check"></i>Volumetric Efficiency</p>
                        <p><i class="fa-solid fa-circle-check"></i>Air Fuel Ratios</p>
                        <p><i class="fa-solid fa-circle-check"></i>AFR vs Lambda</p>
                        <p><i class="fa-solid fa-circle-check"></i>Power Calculations</p>
                        <p><i class="fa-solid fa-circle-check"></i>AFR Summary</p>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropname dropmenu">SPARK THEORY <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>Introduction to Spark Theory</p>
                        <p><i class="fa-solid fa-circle-check"></i>Spark Advance and its Calculation (Part - 4)</p>
                        <p><i class="fa-solid fa-circle-check"></i>Factors affecting Spark Advances</p>
                        
                    </div>
                </div>

                <div class="dropdown">
                    <div class="dropname dropmenu">DRIVING CONDITIONS <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content" >
                        <p><i class="fa-solid fa-circle-check"></i>Driving Conditions Introduction</p>
                        <p><i class="fa-solid fa-circle-check"></i>Driving Conditions and Quantifiable Parameters</p>
                        <p><i class="fa-solid fa-circle-check"></i>Driving Cycles vs Driving Conditions</p>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropname dropmenu">AUTOMOTIVE WIRING <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>Wiring diagram basics</p>
                        <p><i class="fa-solid fa-circle-check"></i>Reading a vehicle wiring diagram</p>
                        <p><i class="fa-solid fa-circle-check"></i>Current Track Diagram</p>
                    </div>
                </div>

                <div class="dropdown">
                    <div class="dropname dropmenu">AUTOMOTIVE SENSORS <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>Sensors Introduction</p>
                        <p><i class="fa-solid fa-circle-check"></i>Types of Sensors</p>
                        <p><i class="fa-solid fa-circle-check"></i>Analog vs Digital Sensors</p>
                        <p><i class="fa-solid fa-circle-check"></i>Crank Sensor</p>
                        <p><i class="fa-solid fa-circle-check"></i>Cam Sensor</p>
                        <p><i class="fa-solid fa-circle-check"></i>CKP and CMP Demo</p>
                        <p><i class="fa-solid fa-circle-check"></i>Throttle Position and Coolant Temperature Sensors</p>
                        <p><i class="fa-solid fa-circle-check"></i>TPS and ECT Demo</p>
                        <p><i class="fa-solid fa-circle-check"></i>Other Sensors</p>   
                    </div>
                </div>

            </div>
            <div class="col col-lg-4 col-md-6 col-12">

                <div class="dropdown">
                    <div class="dropname dropmenu">CONTROL STRATEGY <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>ECU Control Strategy</p>
                        <p><i class="fa-solid fa-circle-check"></i>Speed Density Control Strategy</p>
                        <p><i class="fa-solid fa-circle-check"></i>Alpha N Control Strategy</p>
                        <p><i class="fa-solid fa-circle-check"></i>Alpha N vs Speed Density</p>
                        <p><i class="fa-solid fa-circle-check"></i>Outliers</p>
                        <p><i class="fa-solid fa-circle-check"></i>Enrichments</p>
                        <p><i class="fa-solid fa-circle-check"></i>Control Strategy Wrap Up</p>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropname dropmenu">STAND-ALONE-ECU TUNING <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>Introduction to Tuner Studio</p>
                        <p><i class="fa-solid fa-circle-check"></i>Engine Parameters Setting</p>
                        <p><i class="fa-solid fa-circle-check"></i>Base Tune - VE Table</p>
                        <p><i class="fa-solid fa-circle-check"></i>Base Tune - AFR Table</p>
                        <p><i class="fa-solid fa-circle-check"></i>Base Tune - Spark Table</p>
                    </div>
                </div>

                <div class="dropdown">
                    <div class="dropname dropmenu">HANDS-ON TUNING <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>ReynICE - Virtual Dyno Testing</p>
                        <p><i class="fa-solid fa-circle-check"></i>ReynICE</p>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropname dropmenu">DIESEL TUNING <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>Introduction to Diesel Engines</p>
                        <p><i class="fa-solid fa-circle-check"></i>Diesel Engines Part 2</p>
                        <p><i class="fa-solid fa-circle-check"></i>Diesel Engines Part 3</p>
                        <p><i class="fa-solid fa-circle-check"></i>Diesel Control Strategy</p>
                        <p><i class="fa-solid fa-circle-check"></i>VAGEDC Suite Introduction</p>
                        <p><i class="fa-solid fa-circle-check"></i>VAGEDC Part 2</p>
                        <p><i class="fa-solid fa-circle-check"></i>Smoke Limiter Map</p>
                        <p><i class="fa-solid fa-circle-check"></i>VAGEDC Wrap Up</p>
                        <p><i class="fa-solid fa-circle-check"></i>SOI Map</p> 
                        <p><i class="fa-solid fa-circle-check"></i>Air Control Maps</p>
                        <p><i class="fa-solid fa-circle-check"></i>Pseudo Closed Loop Map</p> 
                    </div>
                </div>

            </div>
            <div class="col col-lg-4 col-md-6 col-12">

                <div class="dropdown">
                    <div class="dropname dropmenu">ADVANCED ECU CONTROL STRATEGIES <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>Engine Phase Detection</p>
                        <p><i class="fa-solid fa-circle-check"></i>Enrichments</p>
                        <p><i class="fa-solid fa-circle-check"></i>Injector Placement and Swirl Generation</p>
                        <p><i class="fa-solid fa-circle-check"></i>Spark Advances vs Emissions</p>
                        <p><i class="fa-solid fa-circle-check"></i>Torque Based Calibration</p>
                        <p><i class="fa-solid fa-circle-check"></i>Component Protection Strategies</p>
                        <p><i class="fa-solid fa-circle-check"></i>Self Diagnosis</p>
                        <p><i class="fa-solid fa-circle-check"></i>OBD Protocols</p>
                        <p><i class="fa-solid fa-circle-check"></i>ECU Communications</p>     
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropname dropmenu">PERFORMANCE TUNING <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>Introduction to Performance Tuning</p>
                        <p><i class="fa-solid fa-circle-check"></i>Performance Concepts Revisited</p>
                        <p><i class="fa-solid fa-circle-check"></i>Intake System</p>
                        <p><i class="fa-solid fa-circle-check"></i>Intake System - Filter and Plumbing</p>
                        <p><i class="fa-solid fa-circle-check"></i>Intake System - Manifold Design</p>
                        <p><i class="fa-solid fa-circle-check"></i>Intake System - Wave Tuning</p>
                        <p><i class="fa-solid fa-circle-check"></i>Exhaust System - Header Theory</p>
                        <p><i class="fa-solid fa-circle-check"></i>Cam Theory</p> 
                    </div>
                </div>

                <div class="dropdown">
                    <div class="dropname dropmenu">TURBO CHARGING <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="dropdown-content">
                        <p><i class="fa-solid fa-circle-check"></i>Introduction to Forced Induction Systems</p>
                        <p><i class="fa-solid fa-circle-check"></i>Turbo Charger vs Supercharger</p>
                        <p><i class="fa-solid fa-circle-check"></i>Turbocharger Fundamentals</p>
                        <p><i class="fa-solid fa-circle-check"></i>Wastegate</p>
                        <p><i class="fa-solid fa-circle-check"></i>Boost Control</p>
                        <p><i class="fa-solid fa-circle-check"></i>Turbo Selection Guide</p>
                        <p><i class="fa-solid fa-circle-check"></i>Turbo Manifolds</p>
                        <p><i class="fa-solid fa-circle-check"></i>Turbo Plumbing</p>
                        <p><i class="fa-solid fa-circle-check"></i>Turbo Down Pipe</p> 
                        <p><i class="fa-solid fa-circle-check"></i>Supporting Mods for Turbocharging</p>
                        <p><i class="fa-solid fa-circle-check"></i>Calibration / Tuning Turbocharged Vehicles</p> 
                    </div>
                </div>
                
            </div>
        </div>

    </div>

    <div class="container section-10">
        <div class="header-button">
            <a href="#" class="btn btn-primary">VIEW DETAILED CURRICULUM</a>
            <a href="#"  class="btn btn-info">DOWNLOAD SYLLABUS</a>
        </div>
    </div>

    <div class="container section-11">
        <h3>What Can You Achieve with Our ECU Course?</h3>
        <p>Discover Your Ideal Career Path with ReynLabs</p>
        <div class="course_link">
            <div class="row1">
                <p href="#" class="btn">ECU Tuning Engineer</p>
                <p href="#"  class="btn">Performance Tuning Technician</p>
                <p href="#" class="btn">Automotive Electronics Engineer</p>
                <p href="#"  class="btn">Engine Control System Developer</p>
                <p href="#" class="btn">Dyno Testing Technician</p>
                <p href="#"  class="btn">Vehicle Performance Analyst</p>
                <p href="#" class="btn">Motorsport ECU Specialist</p>
                <p href="#"  class="btn">Automotive Calibration Specialist</p>
            </div>
        </div>
    </div>

    <div class="container section-12">
        <h3>Mentors & Trainers</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan nisl ut orci interdum luctus. Fusce egestas leo quis felis feugiat posuere. In at consectetur arcu,</p>

        <div class="row">
            <div class="col col-lg-3 col-md-3 col-6">
                <div>
                    <img src="assets/img/rectangle.png" alt=""></div>
                <div class="mentor">
                    <h6>Lorem ipsum dolor</h6>
                    <p>Mentors</p>
                </div>
                <div class="more">
                    <a href="">Know More</a>
                </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-6">
                <div><img src="assets/img/rectangle.png" alt=""></div>
                <div class="mentor">
                    <h6>Lorem ipsum dolor</h6>
                    <p>Mentor</p>
                </div>
                <div class="more">
                    <a href="">Know More</a>
                </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-6">
                <div><img src="assets/img/rectangle.png" alt=""></div>
                <div class="mentor">
                    <h6>Lorem ipsum dolor</h6>
                    <p>Mentor</p>
                </div>
                <div class="more">
                    <a href="">Know More</a>
                </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-6">
                <div><img src="assets/img/rectangle.png" alt=""></div>
                <div class="mentor">
                    <h6>Lorem ipsum dolor</h6>
                    <p>Mentor</p>
                </div>
                <div class="more">
                    <a href="">Know More</a>
                </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-6">
                <div><img src="assets/img/rectangle.png" alt=""></div>
                <div class="mentor">
                    <h6>Lorem ipsum dolor</h6>
                    <p>Mentor</p>
                </div>
                <div class="more">
                    <a href="">Know More</a>
                </div>
            </div>
    </div>
</div>

    <div class="container section-13">
        <h3>Our Students Love Reynlab!</h3>
        <p>— And we think you will too!</p>
        <video controls>
            <source src="movie.mp4" type="video/mp4">
          </video>

          <div class="row testimonial">
            <div class="col col-lg-4 col-md-6 col-12">
                <p>The course overall was great as we were taught about strategies of ECU tuning, sensor working and basic tuning practice for Bosch EDC 16. The explanation and topics were extremely understandable. If there is anything to improve on the current course, it would be extending the wiring diagram reading practices, sensor testing and type differentiation, troubleshooting and possibly as an add-on, a timed hands on experience on a real car with dyno test at Reynlab’s facility.</p>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <h6>Aravind R Nair</h6>
                        <p>ECU Tuning Student</p>
                        <span><img src="assets/img/star.png" alt=""></span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <img src="assets/img/testimonial-user-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-6 col-12">
                <p>This is the best place for to learn about automobiles. They'll teach from basic to advance level in depth. The faculty is also very nice and friendly and also experienced All the tools and equipment provided for better knowledge. I learnt here MASTER TECHNICIAN, ECU TUNING AND ECU REPAIRING. They'll provided job placements also for MASTER TECHNICIAN (No institute will provide this kind of facility).</p>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <h6>Girish Teja</h6>
                        <p>ECU Tuning Student</p>
                        <span><img src="assets/img/star.png" alt=""></span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <img src="assets/img/testimonial-user-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-6 col-12">
                <p>Very professional and knowledgeable. They took their time out to explain everything about remapping, recoding, OBD flash, bench flash, what are the effects or remapping m, etc. Very helpful.</p>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <h6>Abhishek Ajithkumar</h6>
                        <p>ECU Tuning Student</p>
                        <span><img src="assets/img/star.png" alt=""></span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <img src="assets/img/testimonial-user-2.png" alt="">
                    </div>
                </div>
            </div>
    
            <div class="col col-lg-4 col-md-6 col-12">
                <p>Hi, I'm Zamzin from Kollam, Kerala, a 10th-grade student. Studying at Reynlab has given me valuable insights into car wiring kits and electrical systems. Understanding how car components connect and function is fascinating, especially the role of the radiator in preventing engine overheating. The car engine's combustion process, with components like pistons, cylinders, crankshafts, and camshafts, is equally intriguing. It's great that you have a keen interest in exploring the intricacies of car engines.</p>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <h6>Zamzin Zamzin</h6>
                        <p>ECU Tuning Student</p>
                        <span><img src="assets/img/star.png" alt=""></span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <img src="assets/img/testimonial-user-1.png" alt="">
                    </div>
                </div>
            </div>
            
            <div class="col col-lg-4 col-md-6 col-12 sign_up">
                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> Sign up today</button>
                <p>Step into mastery – A simple click to revolutionize your ECU tuning journey!</p>
            </div>
            
            <div class="col col-lg-4 col-md-6 col-12">
                <p>This online course on ECU tuning is only reliable source I found in India.</p>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <h6>Ruturaj Mane</h6>
                        <p>ECU Tuning Student</p>
                        <span><img src="assets/img/star.png" alt=""></span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <img src="assets/img/testimonial-user-1.png" alt="">
                    </div>
                </div>
            </div>
  
            <div class="col col-lg-4 col-md-6 col-12">
                <p>I have finished my ECU training here, good teaching and great staffs working on here. Excellent 👌</p>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <h6>Mohammad Ahmed</h6>
                        <p>ECU Tuning Student</p>
                        <span><img src="assets/img/star.png" alt=""></span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <img src="assets/img/testimonial-user-3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-6 col-12">
                <p>I did tuning and remapping … really good and informative for moto lovers.</p>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <h6>Bosco K I</h6>
                        <p>ECU Tuning Student</p>
                        <span><img src="assets/img/star.png" alt=""></span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <img src="assets/img/testimonial-user-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-6 col-12">
                <p>I had a very good experience with Reynlab , I opted the course Model Based Development with Master Technician, ECU-Tunning and remapping. Sajeeth sir guided me toward pursuing my passion as a career. The MT course, led by Hari sir, Sujith sir, and Vasanth sir, provided a strong technical foundation. Mani sir guided me through real projects, and I secured a position as a HIL Validation Engineer at DEP for FORD projects with Reynlab's placement support.</p>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-8">
                        <h6>Nikhil Venkatesh</h6>
                        <p>ECU Tuning Student</p>
                        <span><img src="assets/img/star.png" alt=""></span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <img src="assets/img/testimonial-user-4.png" alt="">
                    </div>
                </div>
            </div>
          </div>
    </div>

    <div class="container section-14">

        <div class="mini-section">

        <h3>
            Join Mason, Dylan, Shenny and many other
            successful marketers and entrepreneurs today
        </h3>
        <h6>
            Level up your advertising and media buying skills. Join elite marketers from
            around the world (we have members in 60+ countries).
        </h6>
        <p>
            Get access to more than 40 full courses you won't find anywhere else, 1,000+ mini
            tutorials, how-tos, case studies and ebooks — more than 500 hours of tips and
            strategies covering every major ad platform.
        </p>
        <p>
            Have questions? Post them and get answers within minutes from more than 700 of the
            world's top digital marketers, media buyers, 7-, 8- and 9-figure agency owners and
            eCommerce entrepreneurs.
        </p>

        <div class="row">
            <div class="col-lg-9 col-md-12 col-12">
                <h5>Special Discount on Our Comprehensive ECU Tuning Course for Webinar Attendees!</h5>
                <p>Deepen your expertise and turn challenges into success stories.
                    Enroll now for an exclusive offer.</p>
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> Sign up today </button>
            </div>
        </div>
    </div>

    </div>

    <div class="container section-15">
        <h3>Admission Process</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        <div class="row admission-tab">
            <div class="row dotted">
                <div class="col col-lg-3 col-md-3 col-12">
                    <div class="tab-1">
                        <img src="assets/img/step-1.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan nisl ut orci interdum luctus.</p>
                    </div>
                </div>
    
                <div class="col col-lg-3 col-md-3 col-12">
                    <div class="tab-1">
                        <img src="assets/img/step-2.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan nisl ut orci interdum luctus.</p>
                    </div>
                </div>
    
                <div class="col col-lg-3 col-md-3 col-12">
                    <div class="tab-1">
                        <img src="assets/img/step-3.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan nisl ut orci interdum luctus.</p>
                    </div>
                </div>
    
                <div class="col col-lg-3 col-md-3 col-12">
                    <div class="tab-1">
                        <img src="assets/img/step-4.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan nisl ut orci interdum luctus.</p>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <div class="container section-16" id="programfees">

        <h3>Program Fees</h3>
        <p>Admission to the program is granted based on student eligibility.</p>
    <div class="row">

        <div id="exTab1">	

        <ul  class="nav nav-pills">
            <li class="active">
                <a  href="#1a" data-toggle="tab">Online</a>
            </li>
            <li>
                <a href="#2a" data-toggle="tab">Hands-On</a>
            </li>
            <li>
                <a href="#3a" data-toggle="tab">Dyno Session</a>
            </li>
	    </ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
          
                <div class="enroll">
                    <p class="btn demo"></p>
                    <p>Prerequisite : Anyone can learn</p>
                    <h6 strike>RS. 35,000.00</h6>
                    <h4>RS. 19,999.00</h4>
                    <button class="btn btn-enroll">Enroll Now</button>
                    <p>*Inclusive of 18% GST</p>
                </div>

                <div class="content">
                    <p><i class="fa-solid fa-check"></i> Petrol and Diesel Engine Tuning</p>
                    <p><i class="fa-solid fa-check"></i> Stand Alone ECU & remaps</p>
                    <p><i class="fa-solid fa-check"></i> Virtual Dyno & Software Emulators</p>
                    <p><i class="fa-solid fa-check"></i> Aftermarket, Exhaust, Intake & Turbocharging</p>   
                </div>
			</div>

			<div class="tab-pane" id="2a">
                <div class="enroll">
                    <button class="btn demo"></button>
                    <p>Prerequisite : Anyone can learn</p>
                    <h6 strike>RS. 35,000.00</h6>
                    <h4>RS. 10,999.00</h4>
                    <button class="btn btn-enroll">Enroll Now</button>
                    <p>*Inclusive of 18% GST</p>
                </div>

                <div class="content">
                    <p><i class="fa-solid fa-check"></i> Petrol and Diesel Engine Tuning</p>
                    <p><i class="fa-solid fa-check"></i> Stand Alone ECU & remaps</p>
                    <p><i class="fa-solid fa-check"></i> Virtual Dyno & Software Emulators</p>
                    <p><i class="fa-solid fa-check"></i> Aftermarket, Exhaust, Intake & Turbocharging</p>   
                </div>
			</div>

            <div class="tab-pane" id="3a">
                <div class="enroll">
                    <button class="btn demo"></button>
                    <p>Prerequisite : Anyone can learn</p>
                    <h6 strike>RS. 35,000.00</h6>
                    <h4>RS. 29,999.00</h4>
                    <button class="btn btn-enroll">Enroll Now</button>
                    <p>*Inclusive of 18% GST</p>
                </div>

                <div class="content">
                    <p><i class="fa-solid fa-check"></i> Petrol and Diesel Engine Tuning</p>
                    <p><i class="fa-solid fa-check"></i> Stand Alone ECU & remaps</p>
                    <p><i class="fa-solid fa-check"></i> Virtual Dyno & Software Emulators</p>
                    <p><i class="fa-solid fa-check"></i> Aftermarket, Exhaust, Intake & Turbocharging</p>   
                </div>
            </div>

			</div>
        </div>
  </div>

    <p class="mt-3">Duration : 180 Days Course & Virtual Dyno Access</p>
    <div class="re-pay">
        <p class="reserve">FOR RESERVE SEAT</p>
        <p class="pay">PAY 5000/-</p>
    </div>
    

</div>

<!-- ------------------------------------------------------ -->
    <div class="container section-17">
        <h3>Frequently Asked Questions</h3>
        <p>Get Answers: Your Questions, Our Solutions</p>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Is it online or offline?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What is the difference between the two course bundles?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Can anyone join this course?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    How long is this course for?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    What can I do after this course?
                  </button>
                </h2>
                <div id="collapseFIve" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
          </div>
    </div>

    <div class="container section-18">
        <div class="row">
            <div class="col col-lg-5 col-md-12 col-12">
                <h3>Our Recruiters</h3>
                <p>Take a chance, be bold, get a recruiter.</p>
            </div>
            <div class="col col-lg-7 col-md-12 col-12">
                <div class="image">
                    <img src="assets/img/image-rect.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer">
        <p>© 2023 Reynlab - All rights reserved</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <script src="assets/reyn.js?v=<?php echo rand();?>"></script>
</body>
</html>