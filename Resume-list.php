<?php
include "includes/header.php";
// print_r($_REQUEST);
?>
<script>
	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}
</script>
<style>
	.company-logo {
		position: relative;
		display: inline-block;
	}

	.my-2 {
		margin: 10px 0px;
	}

	.hover-text {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		visibility: hidden;
		opacity: 0;
		font-size: 13px;
		color: #fff;
		padding: 0px 5px;
		font-weight: 600;
		background-color: rgba(0, 0, 0, 0.6);
		transition: opacity 0.3s ease;
		border-radius: 6px;
	}

	.company-logo:hover .hover-text {
		height: 90%;
		visibility: visible;
		opacity: 6;
	}

	/* Target the Select2 dropdown */
	.select2-container--default .select2-selection--single {
		height: 45px;
		border: 1px solid #ced4da;
		border-radius: 0px;
	}

	.select2-selection__arrow {
		height: 45px;
		/* border: 1px solid #ced4da; */
		padding: 9px 0px;
		border-radius: 0px;
	}

	.select2-container--default .select2-selection--single .select2-selection__arrow {
		height: 45px;
		position: absolute;
		top: 1px;
		right: 1px;
		width: 20px;
	}

	.select2-selection__rendered {
		width: 100%;
		color: #6b797c;
		padding: 9px 15px;
		border: none;
		border-radius: 0;
		height: auto;
		line-height: 1.5;
		font-size: 16px;
		height: 60px;
	}
</style>
<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="inner-banner" style="background: url('img/iconic_25_01.jpg');">
	<div class="container">
		<div class="caption">
			<h2>Hire a person</h2>
			<p>Explore our collection of popular jobs
				and take the next step in your career journey.
				Your dream job awaits!</p>
		</div>
	</div>
</section>
<section class="jobs">
	<div class="container">
		<!-- <div class="row heading">
			<h2>Hire a person</h2>
			<p>Explore our collection of popular jobs
				and take the next step in your career journey.
				Your dream job awaits!</p>
		</div> -->
		<div class="container mt-5">
			<!-- <h2 class="text-center mb-4">Job Search Form</h2> -->
			<form action="Resume-list.php" method="get">
				<fieldset>
					<div class="form-row">
						<div class="col-md-6 col-lg-4 col-sm-12 my-2">
							<label for="job_title">Skills, Designation</label>
							<input type="text" value="<?= @$_REQUEST['job_title'] ?>" name="job_title" class="form-control" placeholder="Skills, Designation" />
						</div>
						<div class="col-md-6 col-lg-4 col-sm-12 my-2">
							<label for="exp_duration">Select Experience</label>
							<select class="form-control" name="exp_duration" id="exp_duration">
								<option value="">Select Experience</option>
								<option value="fresh" <?= (@$_REQUEST['exp_duration'] == 'fresh' ? 'selected' : '') ?>>Fresher</option>
								<option value="1" <?= (@$_REQUEST['exp_duration'] == '1' ? 'selected' : '') ?>>1 Year</option>
								<option value="2" <?= (@$_REQUEST['exp_duration'] == '2' ? 'selected' : '') ?>>2 Year</option>
								<option value="3" <?= (@$_REQUEST['exp_duration'] == '3' ? 'selected' : '') ?>>3 Year</option>
								<option value="4" <?= (@$_REQUEST['exp_duration'] == '4' ? 'selected' : '') ?>>4 Year</option>
								<option value="5" <?= (@$_REQUEST['exp_duration'] == '5' ? 'selected' : '') ?>>5 Year</option>
								<option value="6" <?= (@$_REQUEST['exp_duration'] == '6' ? 'selected' : '') ?>>6 Year</option>
								<option value="7" <?= (@$_REQUEST['exp_duration'] == '7' ? 'selected' : '') ?>>7 Year</option>
								<option value="8" <?= (@$_REQUEST['exp_duration'] == '8' ? 'selected' : '') ?>>8 Year</option>
								<option value="9" <?= (@$_REQUEST['exp_duration'] == '9' ? 'selected' : '') ?>>9 Year</option>
								<option value="10" <?= (@$_REQUEST['exp_duration'] == '10' ? 'selected' : '') ?>>10 Year</option>
							</select>
						</div>
						<div class="col-md-12 col-lg-4 col-sm-12 my-2">
							<label for="job_category">Select Category</label>
							<select class="form-control" name="job_category">
								<option value="">Select Category</option>
								<?php
								$job_cat = mysqli_query($dbc, "SELECT * FROM `job_type`");

								if (mysqli_num_rows($job_cat) > 0) :
									$a = 1;
									while ($row = mysqli_fetch_assoc($job_cat)) :
										@$selected = (@$_REQUEST['job_category'] == $row['category_id']) ? 'selected' : '';
								?>
										<option <?= @$selected ?> value="<?= $row['category_id'] ?>"><?= ucwords($row['category_name']) ?></option>
								<?php
										$a++;
									endwhile;
								endif;
								?>
							</select>
						</div>
						<div class="col-md-12 col-sm-12 d-flex justify-content-end">
							<input type="submit" style="margin-top: 5px;" class="btn btn-primary " value="Filter" />
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="companies">
			<?php
			if (isset($_REQUEST['job_title']) || isset($_REQUEST['exp_duration']) || isset($_REQUEST['job_category'])) {
				$search_keyword = $duration = $category = '';

				$job_title = $_REQUEST['job_title'];
				$exp_duration = $_REQUEST['exp_duration'];
				$job_category = $_REQUEST['job_category'];

				if (isset($_REQUEST['job_title']) && $_REQUEST['job_title'] != '') {
					$search_keyword = "AND `apply_for` LIKE '%$job_title%'";
				}

				if (isset($_REQUEST['job_category']) && $_REQUEST['job_category'] != '') {
					$duration = "AND `department` = '$job_category'";
				}

				if (isset($_REQUEST['exp_duration']) && $_REQUEST['exp_duration'] != '') {
					$category = "AND `exp_duration` = '$exp_duration'";
				}

				$query = mysqli_query($dbc, "SELECT `candidate_id`,`candidate_name`, `candidate_location`, `candidate_education`, `apply_for`, `department`, `exp_duration`, `candidate_experience`, `candidate_agreement`
					FROM `candidates_info`
					WHERE  status ='1'
					$search_keyword
					$duration
					$category ");
			} else {
				$query = mysqli_query($dbc, "SELECT * FROM `candidates_info` WHERE  status ='1' ");
			}

			if ($query) :
				if (mysqli_num_rows($query) > 0) {
					$a = 1;
					while ($row = mysqli_fetch_assoc($query)) :
			?>
						<div class="company-list">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-12">
									<div class="company-logo">
										<span>
											<img src="img/resume.png" class="img-responsive" alt="" />
										</span>
									</div>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-12 padding">
									<div class="company-content">
										<h3>
											<?= ucwords(@$row['candidate_name']) ?>
											<span>
												<a target="_blank" class="view_cv btn btn-danger" href="admin/Resumepdf.php?Resume_id=<?= $row['candidate_id'] ?>">
													View CV
												</a>
											</span>
										</h3>
										<p>
											<span class="company-location">
												<i class="fa fa-briefcase"></i>
												<?= ucwords(@$row['apply_for']) ?>
											</span>
										</p>
										<p>
											<span class="company-name">
												<i class="fa fa-graduation-cap"></i>
												<?= ucwords(@$row['candidate_education']) ?>
											</span>
										</p>
										<p>
											<span class="company-location">
												<i class="fa fa-map-marker"></i>
												<?= ucwords(@$row['candidate_location']) ?>
											</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					<?php
						$a++;
					endwhile;
				} else {
					?>
					<h3>
						No matching result found
					</h3>
			<?php
				}
			endif;
			?>
		</div>
	</div>
</section>



<?php
include "includes/footer.php";
?>

<script>
	$(document).ready(function() {
		// view customer detail

		$(document).on('click', '.view_cv', function() {

			var custmer_info = $(this).attr("id");
			var applicant_id = $("#applicant_id").val(custmer_info);
			$('#exampleModal').modal('show');
			// alert(custmer_info);
			$.ajax({
				url: 'php_actions/custom_action.php',
				type: "POST",
				data: {
					custmer_info: custmer_info
				},
				dataType: "json",
				success: function(data) {

				}

			});
		});
	});
</script>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Share your details and we'll share their details</h5>
			</div>
			<form action="">
				<div class="modal-body">
					<input type="hidden" name="applicant_id" id="applicant_id">
					<input placeholder="Tell us your full name." type="text" required class="form-control my-2" name="customer_name">
					<input placeholder="Which organization do you own or work for?" type="text" required class="form-control my-2" name="company_name">
					<input placeholder="Best number to reach you at?" type="text" required class="form-control my-2" name="customer_number">
				</div>
				<div class="modal-footer">
					<input type="submit" name="submit_info" class="btn btn-success" value="Submit">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div> -->