<?php
include "includes/header.php";
?>
<style>
	body {
		background-color: #f4f4f4;
	}
</style>

<?php
header('Location: index.php');
exit();
if (isset($_REQUEST['usermail'])) {
	$user_email = $_REQUEST['usermail'];
	$password = md5($_REQUEST['password']);
	$select = mysqli_query($dbc, "SELECT * FROM users WHERE user_email='$user_email' AND password='$password'");

	if (mysqli_num_rows($select) > 0) {
		$row = mysqli_fetch_assoc($select);
		$_SESSION['user_id'] = $row['user_id'];
		// Login successful, redirect to index.php
		header("location:index.php");
		// exit;
	} else {
		$error[] = "Invalid Username or Password";
	}
}

?>

<!-- login section start -->
<section class="">
	<div class="container">
		<div class="row">
			<?php if (isset($error)) :
				foreach ($error as $error) {

			?>
					<div class="alert alert-info alert-dismissible fade show">
						<?= $error ?>
					</div>
			<?php
				}
			endif
			?>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 login-container">
				<form action="#" method="post">
					<h1>
						<span class="text-danger">AGN </span> <span> Job Bank</span>
					</h1>
					<label for="username">Email</label>
					<input required type="email" name="usermail" id="username" class="form-control input-lg" placeholder="Enter your Email">

					<label for="password">Password</label>
					<input type="password" id="password" name="password" class="form-control input-lg" placeholder="Enter your password" required>

					<!-- <label><a href="#">Forget Password?</a></label> -->
					<button type="submit" class="btn btn-primary">Login</button>

					<p>Don't have an account? <a href="#">Create an Account</a></p>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- login section End -->

<?php
include "includes/footer.php";
?>