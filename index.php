<?php
include "includes/header.php";
?>
<style>
	/* Target the Select2 dropdown */
	.select2-container--default .select2-selection--single {
		height: 60px;
		border: 1px solid #ced4da;
		border-radius: 0px;
	}

	.select2-selection__arrow {
		height: 60px;
		/* border: 1px solid #ced4da; */
		padding: 19px 0px;
		border-radius: 0px;
	}

	.select2-container--default .select2-selection--single .select2-selection__arrow {
		height: 60px;
		position: absolute;
		top: 1px;
		right: 1px;
		width: 20px;
	}

	.select2-selection__rendered {
		/* width: 100%; */
		color: #6b797c !important;
		padding: 19px 15px;
		border: none;
		border-radius: 0;
		text-align: left;
		height: auto;
		line-height: 1.5;
		font-size: 16px;
		height: 60px;
	}
	.my-3{
		margin: 10px 0px;
	}
</style>
<section class="main-banner" style="background:#242c36 url(img/slider-01.jpg) no-repeat">
	<div class="container">
		<div class="caption">
			<h2>Build Your Career</h2>
			<form action="Resume-list.php" method="get" enctype="application/x-www-form-urlencoded">
				<fieldset>
					<div class="col-md-4 col-sm-4 no-pad">
						<input type="text" name="job_title" class="form-control border-right" placeholder="Skills, Designation" />
					</div>
					<div class="col-md-3 col-sm-3 no-pad">
						<select class="course-option selectpicker border-right mb-0" name="exp_duration" id="exp_duration">
							<option value="">Select Experience</option>
							<option value="fresh">Fresher</option>
							<option value="1">1 Year</option>
							<option value="2">2 Year</option>
							<option value="3">3 Year</option>
							<option value="4">4 Year</option>
							<option value="5">5 Year</option>
							<option value="6">6 Year</option>
							<option value="7">7 Year</option>
							<option value="8">8 Year</option>
							<option value="9">9 Year</option>
							<option value="10">10 Year</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-3 no-pad">
						<select class="selectpicker" name="job_category">
							<option value="">Select Category</option>

							<?php
							$job_cat = mysqli_query($dbc, "SELECT * FROM `job_type`");

							if (mysqli_num_rows($job_cat) > 0) :
								$a = 1;
								while ($row = mysqli_fetch_assoc($job_cat)) :
							?>
									<option value="<?= $row['category_id'] ?>"><?= ucwords($row['category_name']) ?></option>
							<?php
									$a++;
								endwhile;
							endif;
							?>
						</select>
					</div>
					<div class="col-md-2 col-sm-2 no-pad">
						<input type="submit" class="btn seub-btn" value="submit" />
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</section>

<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="features-content">
					<span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
					<h3>Search Desired Job</h3>
					<p>Explore countless opportunities,
						and find your dream job.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="features-content">
					<span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
					<h3>Send Your Resume</h3>
					<p>Submit your resume today
						and unlock new career prospects.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="counter">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 my-3">
				<div class="counter-text">
					<span aria-hidden="true" class="icon-briefcase"></span>
					<h3>1000</h3>
					<p>Jobs Posted</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 my-3">
				<div class="counter-text">
					<span class="box1"><span aria-hidden="true" class="icon-expand"></span></span>
					<h3>207</h3>
					<p>All Companies</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 my-3">
				<div class="counter-text">
					<span class="box1"><span aria-hidden="true" class="icon-profile-male"></span></span>
					<h3>700+</h3>
					<p>Total Members</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 my-3">
				<div class="counter-text">
					<span class="box1"><span aria-hidden="true" class="icon-sad"></span></span>
					<h3>802+</h3>
					<p>Happy Members</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="jobs">
	<div class="container">
		<div class="row heading">
			<h2>Find Popular Jobs</h2>
			<p>Explore our collection of popular jobs
				and take the next step in your career journey.
				Your dream job awaits!</p>
		</div>
		<div class="companies">
			<div class="company-list">
				<div class="row flex ">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/IFL_LOGO.png" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Software Engineer</a>
								<!-- <span class="full-time">Full Time</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>IBRAHIM FIBRES LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> Ibrahim Centre 15 - Club Road Faisalabad, 38000 Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 22,000- Rs 50,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/rafhan.png" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">IT Project Manager</a>
								<!-- <span class="part-time">Part Time</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>RAFHAN MAIZE PRODUCTS COMPANY LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> Rakh Canal East Road Faisalabad, Punjab, 38860 Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 20,000- Rs 52,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/SadaqatLogo2.png" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Network Administrator</a>
								<!-- <span class="freelance">Freelance</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>SADAQAT LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> 2KM, Sahianwala Road Khurrianwala Faisalabad, Punjab, 37630 Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 22,000- Rs 50,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/MTM_Logo_.png" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Database Administrator</a>
								<!-- <span class="internship">Intership</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>MASOOD TEXTILE MILLS LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> Universal House P-17/1 New Civil Lines Bilal Road Faisalabad, Punjab, 38000 Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 24,000- Rs 52,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/klaash.png" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Textile Engineer</a>
								<!-- <span class="full-time">Full Time</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>KLASH (PVT.) LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> 117 J.B Paharang Drainage Millat Road Faisalabad, Punjab, 37020 Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 24,000- Rs 48,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- ================ -->
			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/Jk-Group-logo.png" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Garment Designer</a>
								<!-- <span class="full-time">Full Time</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>J.K. SPINNING MILLS LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> 29-KM, Sheikhupura Road Khurrianwala Faisalabad, Punjab, 38000 Pakistan </span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 22,000- Rs 50,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/logo-gohar-180x64.webp" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Production Manager</a>
								<!-- <span class="part-time">Part Time</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>GOHAR TEXTILE MILLS (PVT.) LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> 3-Km, Chak Jhumra Road, Faisalabad, Punjab, 37020 Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 20,000- Rs 52,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/sitara.png" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Quality Control Inspector</a>
								<!-- <span class="freelance">Freelance</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>SITARA CHEMICAL INDUSTRIES LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> 32 KM, Sheikhupura Road Faisalabad, Punjab, 74900 Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 22,000- Rs 50,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/crestex.png" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Supply Chain Manager</a>
								<!-- <span class="internship">Intership</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>THE CRESCENT TEXTILE MILLS LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> Mills Premises, Sargodha Road Faisalabad, Punjab Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 24,000- Rs 52,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company-list">
				<div class="row flex">
					<div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12">
						<div class="company-logo">
							<img src="img/company_logos/bismillah.jpg" class="img-responsive" alt="" />
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="company-content">
							<h3>
								<a href="ApplyForJob.php">Sales Associate</a>
								<!-- <span class="full-time">Full Time</span> -->
							</h3>
							<p>
								<span class="company-name"><i class="fa fa-briefcase"></i>BISMILLAH TEXTILES LIMITED</span>
							</p>
							<p>
								<span class="company-location"><i class="fa fa-map-marker"></i> 1-Km, Jarranwala Road, Khurrianwala Khurrianwala, Punjab Province Faisalabad, 37020 Pakistan</span>
							</p>
							<p>
								<span class="package"><i class="fa fa-money"></i>Rs 24,000- Rs 48,000</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
				<h2>Want More Job & Latest Job? </h2>
				<p>Subscribe to our mailing list to receive an update when new Job arrive!</p>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Type Your Email Address...">
					<span class="input-group-btn">
						<button type="button" class="btn btn-default">subscribe!</button>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include "includes/footer.php";
?>