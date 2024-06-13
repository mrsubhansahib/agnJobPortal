<?php
include "includes/header.php";
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="inner-banner" style="background: url('img/companies.jpg');">
    <div class="container">
        <div class="caption">
            <h2>Get your jobs</h2>
            <p>Get your Latest jobs <span><?php echo rand(100, 999); ?> New job</span></p>
        </div>
    </div>
</section>

<section class="jobs">
    <div class="container">
        <div class="row heading">
            <h2>Find Latest Jobs</h2>
            <p>
                Explore our collection of popular jobs
                and take the next step in your career journey.
                Your dream job awaits!
            </p>
        </div>

        <?php
        $sql = mysqli_query($dbc, "SELECT * FROM `jobs` WHERE `job_status` = '1'");
        if (mysqli_num_rows($sql) > 0) {
            while ($a = mysqli_fetch_assoc($sql)) {
        ?>
                <div class="companies">
                    <div class="company-list">
                        <div class="row flex ">
                            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="company-logo">
                                    <img src="img/jobs.png" class="img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="company-content">
                                    <h3>
                                        <a href="ApplyForJob.php"><?= @$a['job_name'] ?></a>
                                    </h3>
                                    <?php
                                    if (@$a['company_name'] != '') {
                                    ?>
                                        <p>
                                            <span class="company-name"><i class="fa fa-briefcase"></i><?= ucwords(@$a['company_name']) ?></span>
                                        </p>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if (@$a['qualification'] != '') {
                                    ?>
                                        <p>
                                            <span class="company-location"><i class="fa fa-graduation-cap"></i>Qualification Required : <?= ucwords(@$a['qualification']) ?></span>
                                        </p>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if (@$a['min_exp'] != '' && @$a['max_exp'] != '') {
                                    ?>
                                        <p>
                                            <span class="package"><i class="fa fa-money"></i>Experience Required : <?= @$a['min_exp'] ?> to <?= @$a['max_exp'] ?> Year</span>
                                        </p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php

            }
        }
        ?>

    </div>
</section>



<?php
include "includes/footer.php";
?>