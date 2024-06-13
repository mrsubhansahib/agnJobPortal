<?php

include_once "db_conn.php";

// print_r($_SESSION);

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>AGN | Job Portal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================== -->
    <?php
    if (isset($_REQUEST['Job'])) {
        $job_id = base64_decode(@$_REQUEST['Job']);

        $job_query = mysqli_query($dbc, "SELECT jobs.*, job_type.* FROM `jobs` INNER JOIN `job_type` ON jobs.category_id = job_type.category_id WHERE jobs.job_id = '$job_id'");

        if ($job_query) {
            $job = mysqli_fetch_assoc($job_query);
        } else {
            echo "Error fetching job details.";
        }
    } else {
        $job = array();
    }
    ?>

    <meta property="og:title" content="AGN JOB BANK: Largest Recruitment Agency">
    <meta property="og:site_name" content="Largest Recruitment Agency">
    <meta property="og:description" content="Required a <?= ucwords(@$job['job_name']) ?> Qualification : <?= ucwords(@$job['qualification']) ?> Experience : <?= @$job['min_exp'] ?> to <?= @$job['max_exp'] ?> Year Job Details : <?= @$job['job_detail'] ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://agnjobbank.com/img/AGN-Logo-meta.png">
    <meta property="og:url" content="https://agnjobbank.com/ApplyForJob.php?Job=<?= urlencode(base64_encode(@$job['Job'])) ?>">



    <!-- ================== -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- Style & Common Css -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Include Dropzone CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/follow-up.png">

</head>

<body>

    <!-- Navigation Start  -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/AGN-Logo.png" class="logo" alt="">
                    <!-- <h2>
                        <span class="text-danger">AGN </span> <span> Job Bank</span>
                    </h2> -->
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="index.php">Home</a></li>
                    <!-- <li><a href="login.php">Login</a></li> -->
                    <li><a href="companies.php">Companies</a></li>

                    <li><a href="LatestJobs.php">Latest Jobs</a></li>
                    <!-- <li><a- class="button-job" href="Resume-list.php">Hire a person</a></li> -->
                    <li><a class="button-job" href="Resume-list.php">Hire a person</a></li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse</a>
                        <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                             <li class="active"><a href="browse-job.php">Browse Jobs</a></li>
                            <li><a href="Resume-list.php">Job Detail</a></li>
                            <li><a href="resume.php">Resume Detail</a></li>
                        </ul>
                    </li> -->
                    <li><a class="button-applicant" href="ApplyForJob.php">Apply for Job</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation End  -->
    <a class="" href="https://api.whatsapp.com/send?phone=+923037774400&amp;text=Hi..!." target="_blank">
        <img style="right: 80px;" class="my-float float" src="img/icons/whatsapp1.png" width="50px" alt="">
    </a>