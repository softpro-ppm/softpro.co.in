<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>Softpro| About Us</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Customer Login</h4>
                </div>
                <div class="modal-body customer-box">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
                        <li><a href="#Registration" data-toggle="tab">Join Us</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email1" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="exampleInputPassword1" placeholder="Email"
                                            type="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                            Submit
                                        </button>
                                        <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="Registration">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="password" placeholder="Password"
                                            type="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                            Save &amp; Continue
                                        </button>
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                            Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Courses
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="course-grid-2.html">Hardware & Networking </a>
                                <a class="dropdown-item" href="course-grid-2.html">Mobile Technician </a>
                                <a class="dropdown-item" href="course-grid-2.html">Hotel Management </a>
                                <a class="dropdown-item" href="course-grid-2.html">Sales Associate </a>
                                <a class="dropdown-item" href="course-grid-2.html">Data Entry Operator </a>
                                <a class="dropdown-item" href="course-grid-2.html">Tailoring</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Partners
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="team.html">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal"
                                data-target="#login"><span>Login/Join</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <div class="all-title-box">
        <div class="container text-center">
            <h1>Veryfy<span class="m_1">What we do, what we achieve...</span></h1>
        </div>
    </div>

    <div id="overviews" class="section lb">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    
                    <?php
                    // DB credentials.
                    define('DB_HOST', 'localhost');
                    define('DB_USER', 'u820431346_smis');
                    define('DB_PASS', 'Metx@123');
                    define('DB_NAME', 'u820431346_smis');
                    
                    // Establish database connection.
                    try {
                        $dbh = new PDO(
                            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                            DB_USER,
                            DB_PASS,
                            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
                        );
                    } catch (PDOException $e) {
                        exit("Error: " . $e->getMessage());
                    }
                    
                    // Initialize search variable
                    $search = '';
                    $results = [];
                    
                    // Handle form submission
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $search = trim($_POST['search']); // Get the search input
                    
                        if (!empty($search)) {
                            // SQL query to search by name, enrollmentid, aadharnumber, or phonenumber
                            $sql = "SELECT * FROM tblcandidate 
                                    WHERE candidatename LIKE :search 
                                       OR enrollmentid LIKE :search 
                                       OR aadharnumber LIKE :search 
                                       OR phonenumber LIKE :search";
                            $query = $dbh->prepare($sql);
                    
                            // Bind the parameter with wildcards for partial matches
                            $query->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
                    
                            // Execute the query
                            $query->execute();
                    
                            // Fetch results
                            $results = $query->fetchAll(PDO::FETCH_ASSOC);
                        }
                    }
                    ?>
                    
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 20px;
                            }
                            form {
                                margin-bottom: 20px;
                            }
                            input[type="text"] {
                                padding: 10px;
                                width: 300px;
                                font-size: 14px;
                            }
                            input[type="submit"] {
                                padding: 10px 15px;
                                font-size: 14px;
                                cursor: pointer;
                            }
                            .result {
                                margin-top: 20px;
                                padding: 10px;
                                border: 1px solid #ddd;
                                background-color: #f9f9f9;
                            }
                        </style>
                    </head>
                    <body>
                        <h1>Search Enrollment Records</h1>
                        <form method="post" action="">
                            <label for="search">Search by Name, Enrollment ID, Aadhar, or Phone:</label><br><br>
                            <input type="text" name="search" id="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Enter search term" required>
                            <input type="submit" value="Search">
                        </form>
                    
                        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                            <?php if (!empty($results)): ?>
                                <h2>Search Results:</h2>
                                <?php foreach ($results as $row): ?>
                                    <div class="result">
                                        <p><strong>Enrollment ID:</strong> <?php echo htmlspecialchars($row['enrollmentid']); ?></p>
                                        <p><strong>Name:</strong> <?php echo htmlspecialchars($row['candidatename']); ?></p>
                                        <p><strong>Father Name:</strong> <?php echo htmlspecialchars($row['fathername']); ?></p>
                                        <p><strong>Aadhar Number:</strong> <?php echo htmlspecialchars($row['aadharnumber']); ?></p>
                                        <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($row['phonenumber']); ?></p>
                                        <p><strong>Result:</strong> Pass</p>
                                        
                                        
                                        
                                        <?php

                                            // Check if tblbatch_id is provided (for example, through a GET parameter)
                                            if (isset($row['tblbatch_id'])) {
                                                $tblbatch_id = intval($row['tblbatch_id']); // Ensure it's an integer
                                            
                                                // Prepare the query
                                                $sql = "SELECT * FROM tblbatch WHERE id = :tblbatch_id";
                                                $query = $dbh->prepare($sql);
                                            
                                                // Bind the parameter
                                                $query->bindParam(':tblbatch_id', $tblbatch_id, PDO::PARAM_INT);
                                            
                                                // Execute the query
                                                $query->execute();
                                            
                                                // Fetch the result
                                                $result = $query->fetch(PDO::FETCH_ASSOC);
                                                
                                                $job_roll_id = $result['job_roll_id'];
                                                
                                                /// course
                                                $sqlj = "SELECT * FROM tbljobroll WHERE JobrollId = :job_roll_id";
                                                $queryj = $dbh->prepare($sqlj);
                                            
                                                // Bind the parameter
                                                $queryj->bindParam(':job_roll_id', $job_roll_id, PDO::PARAM_INT);
                                            
                                                // Execute the query
                                                $queryj->execute();
                                            
                                                // Fetch the result
                                                $resultj = $queryj->fetch(PDO::FETCH_ASSOC);
                                                
                                                $coursename = $resultj['jobrollname'];
                                                echo ' <p><strong>Course:</strong> '.$coursename.'</p>';
                                                /// course 
                                            
                                            } else {
                                                echo "<p><strong>Course is not found</strong></p>";
                                            }
                                            ?>


                                        
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <h2>NO RECORDS FOUND SEARCH AGAIN</h2>
                                <!--<h2>No records found for "<?php // echo htmlspecialchars($search); ?>"</h2>-->
                            <?php endif; ?>
                        <?php endif; ?>
                  


                   
                </div><!-- end col -->

              
            </div>
           
        </div><!-- end container -->
    </div><!-- end section -->

  

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Softpro is catering to unemployed youth of Andhra Pradesh and neighbouring States and
                            provides specialised short-term training in vocational trades aligned to National Skill
                            Qualification Framework (NSQF). In addition to specialized technical training, SOFTPRO
                            will also provide training on soft skills and language proficiency to make the
                            candidates job fit for the industry, both within India and Overseas.</p>
                        <div class="footer-right">
                            <ul class="footer-links-soi">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul><!-- end links -->
                        </div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@softpro.co.in</a></li>
                            <li><a href="#">www.softpro.co.in</a></li>
                            <li>Opp Style Bazar, Main Road, Parvathipuram, Vizianagaram, AP-535501</li>
                            <li>+91 7799 7736 56</li>
                            <li>+91 9550 7550 39</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">Softpro</a> Design By :
                        <a href="http://www.softpro.co.in">Softpro Skill Solutions</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>

</html>