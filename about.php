<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | About Us </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">About Us</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- about -->
	<section class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<?php 
$pagetype="aboutus";
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
			<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title"><?php   echo htmlentities($result->PageName); ?></h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
			</div>
			<p class="aboutpara text-center mx-auto">
				<p>
				Welcome to our blood bank website! Our mission is to provide a reliable and efficient service for those in need of blood transfusions. We are committed to ensuring that patients receive the blood they need, when they need it.

Our team of dedicated professionals works tirelessly to ensure that every donor is screened thoroughly, and that their blood is handled with the utmost care and attention to detail. We follow strict protocols for blood collection, testing, and storage to ensure the safety of both donors and recipients.

We understand that donating blood can be a daunting experience for some, which is why we strive to create a welcoming and comfortable environment for all our donors. Our staff is highly trained and skilled at making the process as easy and stress-free as possible.

We also believe in giving back to the community. We regularly organize blood donation drives in various locations, making it easy for people to donate blood and help save lives. Additionally, we provide education and awareness programs to raise public understanding of the importance of blood donation.

Thank you for considering us as your blood bank of choice. We are proud to serve our community and are committed to providing the highest level of service possible.






				</p>
			</p>
<?php } } ?>
		</div>
	</section>
	<!-- //about -->



	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>