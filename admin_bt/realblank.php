<?php
require_once "../config/connect.php";
require_once "../functions/functions.php";

if (!isset($_SESSION['log'])) {
	header('location:login.php');
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
	require_once("includes/head.php");
	require_once("includes/pajinate_includes.php");
	?>
	<title>SB Admin 2 - Blank</title>

	
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php require_once("includes/sidebar.php") ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php require_once("includes/navbar.php") ?>
				<!-- End of Topbar -->




















				<!-- Begin Page Content -->

				<div id="wrapper">
					<div id="paging_container1" class="container">
						<h2>Vanilla</h2>
						<div class="page_navigation"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
						</ul>
					</div>

					<div id="paging_container3" class="container">
						<h2>Custom List Size</h2>
						<div class="alt_page_navigation"></div>

						<ul class="alt_content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
						</ul>

					</div>


					<div id="paging_container2" class="container">
						<h2>Two Nav Panels</h2>
						<div class="page_navigation"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
						</ul>

						<div class="page_navigation"></div>

					</div>


					<div id="paging_container6" class="container">
						<h2>Custom Start Page</h2>
						<div class="page_navigation"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
						</ul>

					</div>

					<div id="paging_container4" class="container">
						<h2>Mixed List Element Types</h2>
						<div class="page_navigation"></div>

						<div class="content">
							<p>One</p>
							<span style="font-size:18px">Two</span>
							<p>Three</p>
							<p>Four</p>
							<p>Five</p>
							<p>Six</p>
							<div style="color: red">Seven</div>
							<p>Eight</p>
							<a href="#">Nine</a>
							<p>Ten</p>
							<p>Eleven</p>
							<p>Twelve</p>
							<p>Thirteen</p>
							<p>Fourteen</p>
							<p>Fifteen</p>
							<p>Sixteen</p>
						</div>

					</div>

					<div id="paging_container5" class="container">
						<h2>Custom Navigation Labels</h2>
						<div class="page_navigation"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
						</ul>

					</div>

					<div id="paging_container7" class="container">
						<h2>Show Subset of Page Links</h2>
						<div class="page_navigation"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
							<li>
								<p>Seventeen</p>
							</li>
							<li>
								<p>Eightteen</p>
							</li>
							<li>
								<p>Nineteen</p>
							</li>
							<li>
								<p>Twintig</p>
							</li>
							<li>
								<p>Een en Twintig</p>
							</li>
							<li>
								<p>Twee en Twintig</p>
							</li>
							<li>
								<p>Dree en Twintig</p>
							</li>
							<li>
								<p>Vier en Twintig</p>
							</li>
							<li>
								<p>Fyf en Twintig</p>
							</li>
							<li>
								<p>Twenty Six</p>
							</li>
							<li>
								<p>Twenty Seven</p>
							</li>
							<li>
								<p>Twenty Eight</p>
							</li>
							<li>
								<p>Twenty Nine</p>
							</li>
							<li>
								<p>Dertig</p>
							</li>
							<li>
								<p>Een en Dertig</p>
							</li>
							<li>
								<p>Twee en Dertig</p>
							</li>
						</ul>

					</div>

					<div id="paging_container8" class="container">
						<h2>Style First/Next and Last/Next</h2>
						<div class="page_navigation"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
						</ul>

					</div>

					<div id="paging_container9" class="container">
						<h2>Wrapping Navigation</h2>
						<div class="page_navigation"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
						</ul>

					</div>

					<div id="paging_container10" class="container">
						<h2>Disable On Small Lists</h2>
						<div class="page_navigation"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
						</ul>

					</div>

					<div id="paging_container11" class="container">
						<h2>Navigation with info text</h2>
						<div class="page_navigation"></div>
						<div class="info_text"></div>

						<ul class="content">
							<li>
								<p>One</p>
							</li>
							<li>
								<p>Two</p>
							</li>
							<li>
								<p>Three</p>
							</li>
							<li>
								<p>Four</p>
							</li>
							<li>
								<p>Five</p>
							</li>
							<li>
								<p>Six</p>
							</li>
							<li>
								<p>Seven</p>
							</li>
							<li>
								<p>Eight</p>
							</li>
							<li>
								<p>Nine</p>
							</li>
							<li>
								<p>Ten</p>
							</li>
							<li>
								<p>Eleven</p>
							</li>
							<li>
								<p>Twelve</p>
							</li>
							<li>
								<p>Thirteen</p>
							</li>
							<li>
								<p>Fourteen</p>
							</li>
							<li>
								<p>Fifteen</p>
							</li>
							<li>
								<p>Sixteen</p>
							</li>
						</ul>

					</div>

				</div>
				<!-- /.container-fluid -->






























			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<?php require_once("includes/footer.php") ?>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<?php require_once("includes/logout_modal.php") ?>

	<?php require_once("includes/js_includes.php") ?>
</body>

</html>