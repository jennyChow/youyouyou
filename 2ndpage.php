<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>软木板</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- 
Concept Template 
http://www.templatemo.com/preview/templatemo_397_concept 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

<link rel='stylesheet' href='style.css' media='screen' />

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">
	<link rel="stylesheet" href="css/2ndpage.css">


	<!-- Main CSS -->
	<link rel="stylesheet" href="css/templatemo_style.css">

	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    
    
    
    
    
    
    <script src="jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="../html5.js"></script>
<![endif]-->
<script src="blocksit.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/2ndpage.js"></script>
<script>
$(document).ready(function() {
	//vendor script
	$('#header')
	.css({ 'top':-40 })
	.delay(1000)
	.animate({'top': 0}, 800);
	
	$('#footer')
	.css({ 'bottom':-15 })
	.delay(1000)
	.animate({'bottom': 0}, 800);
	
	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 4,
			offsetX: 4,
			offsetY: 8
		});
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth <= 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 4,
				offsetY: 8
			});
		}
	});
});
</script>

</head>

<body>



<?php
	require_once('test/bookmark_fns.php'); 
	session_start();
	?>


	<div class="site-header">
		<div class="main-navigation">
			<div class="responsive_menu">
				<ul>
					<li><a class="show-1 templatemo_home" href="#">Gallery</a></li>
					<li><a class="show-2 templatemo_page2" href="#">Products</a></li>
					<li><a class="show-3 templatemo_page3" href="#">Services</a></li>
					<li><a class="show-4 templatemo_page4" href="#">About Us</a></li>
					<li><a class="show-5 templatemo_page5" href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 responsive-menu">
						<a href="#" class="menu-toggle-btn">
				            <i class="fa fa-bars"></i>
				        </a>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12 main_menu">
						<ul>
							<li><a href="http://youyouyou.co/index.php" >陈列室</a></li>`
							<li><a href="http://youyouyou.co/2ndpage.php" >软木板</a></li>
							<li><a href="http://youyouyou.co/3rdpage.php" >我想有</a></li>
							<li><a href="http://youyouyou.co/4thpage.php" target="_self">关于</a></li>
							<li><a class="show-5 templatemo_page5" href="#">联系</a></li>
						<?php
							if(isset($_SESSION[ 'valid_user'])) { 
								  ?>
						
								<li style="float: right"><a href="http://youyouyou.co/3rdpage.php" target="_self"> <?php echo $_SESSION[ 'valid_user'] ?> </a> <a href="test/logout.php">Logout</a> </li>
							<?php } 
							else { ?>
								<li style="float: right"><a href="http://youyouyou.co/test/login.php" target="_self">登陆/注册</a></li>
							<?php } ?>
							
							
						</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						<h1>有有有</h1>
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->
 
	<p style="text-align:center; font-size:18px; color: #33CCCC"> 
    		在软木板上钉上你认为值得分享的物品，再看看大家都在谈论什么 </p>



<!-- Header --> 


<!-- Content -->
<section id="wrapper">
		<?php
			$conn = db_connect();
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT `id` FROM `product`";
			$result = $conn->query($sql);
			$idArray = Array();

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result-> fetch_array()) {
					 $idArray[] = $row["id"];
					 
				}
			} else {
				echo "0 results";
			}
		?>
			
		<div id="container">
	
				<?php		
				for($i=0; $i< count($idArray); $i++){  ?>
					<div class="grid">

						<div class="imgholder">
							<a href="#" data-toggle="modal" data-target="#myModal<?php echo $idArray[$i] ?>" >
								<img src="images/products/<?php echo $idArray[$i] ?>.jpg" width="150" class="img-responsive img-rounded center-block" alt="" />
							</a>
						</div>


						<!-- Modal -->
						<div class="modal fade" id="myModal<?php echo $idArray[$i] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="myModalLabel">

											<?php
											$sql = "SELECT title FROM product WHERE id = '$idArray[$i]'";
											$r = $conn->query($sql);

											if ($r->num_rows > 0) {
												// output data of each row
												while($row = $r->fetch_assoc()) {
													$title = $row["title"] ;
												}
											} else {
												echo "0 results";
											}
											?>
											<?php echo $title ?>



										</h3>
									</div>
									<div class="modal-body">
										<img src="images/products/<?php echo $idArray[$i] ?>.jpg" class="img-responsive img-rounded center-block" alt=""/>
										<?php
										$comments = array();
										$sql = "SELECT content, email FROM comment WHERE product_id = '$idArray[$i]'";
										$r = $conn->query($sql);

										if ($r->num_rows > 0) {
											// output data of each row
											while($row = $r->fetch_assoc()) {
												$comments[] = array(
													'comment' => $row["content"],
													'email' => $row['email']
												);
											}
										}
										foreach ($comments as $comment) {

											$current_comment = $comment['comment'];
											$current_email = $comment['email'];

											$sql = "SELECT username FROM user WHERE email = '$current_email'";
											$r = $conn->query($sql);
											$username = null;
											if ($r->num_rows > 0) {
												// output data of each row
												while($row = $r->fetch_assoc()) {
													$username = $row['username'];
													break;
												}
											}

										}
										?>

										<div>
											<div class="comment-title">
												comment
											</div>
											<p class="comment-user">
												<span class="userName">UserName:</span>  <?php echo $username;?>
											</p>
											<p class="comment-content">
												<?php echo $current_comment;?>
											</p>
										</div>




										<!--php for saving comment content-->
										<?php
										if (isset($_POST["submit"])) {
											$message = $_POST['message-text'];
											//$current_comment = addslashes ($_POST['message-text']);

											//$sql = "UPDATE comment SET content=$message WHERE email = $current_email";

											$sql = "UPDATE comment SET content=$message";

											//$body = "From: $name\n E-Mail: $email\n Message:\n $message";


											//Check if message has been entered
											if (!$_POST['message']) {
												$errMessage = 'Please enter your message';
												console.log("aaaaaa");
											}

										    // If there are no errors, send the email
											if ( !$errMessage) {
												if (mail ($message)) {
													$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
												} else {
													$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
												}
											}
										}
										?>
									</div>


									<!--<form action="welcome.php" method="post">
										Name: <input type="text" name="name"><br>
										E-mail: <input type="text" name="email"><br>
										<input type="submit">
									</form>-->


									<div class="modal-footer">
										<form  method="post">
											<div class="form-group">
												<!--<label for="message-text" class="control-label">Message:</label>-->
												<textarea class="form-control" id="message-text" name="message-text">
													<?php echo htmlspecialchars($_POST['message-text']);?>
												</textarea>
												<?php echo "<p class='text-danger'>$errMessage</p>";?>
											</div>

											<!--<div class="form-group">
												<div class="col-sm-10 col-sm-offset-2">
													<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
												</div>
											</div>-->

										</form>
										<form>
											<div class="form-group">
												<div class="col-sm-10 col-sm-offset-2">
													<input id="submit" name="submit" type="submit" value="Comment" class="btn btn-primary">
												</div>
											</div>
										</form>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

									</div>

								</div>
							</div>
						</div>




						<?php
						$sql = "SELECT title FROM product WHERE id = '$idArray[$i]'";
											$r = $conn->query($sql);

											if ($r->num_rows > 0) {
											// output data of each row
												while($row = $r->fetch_assoc()) {
												$title = $row["title"] ; 
												}
											} else {
												echo "0 results";
											}	

											$sql2 = "SELECT description FROM product WHERE id ='$idArray[$i]'";
											$r2 = $conn->query($sql2);

											if ($r2->num_rows > 0) {
											// output data of each row
												while($row2 = $r2->fetch_assoc()) {
												$description = $row2["description"] ; 
												}
											} else {
												echo "0 results";
											}	
						?>	
						<strong> <?php echo $title ?> </strong>
						<p> <?php echo $description ?> </p>
						
						
						<?php
						$sql = "SELECT owner FROM product WHERE id = '$idArray[$i]'";
									$r = $conn->query($sql);

									if ($r->num_rows > 0) {
									// output data of each row
										while($row = $r->fetch_assoc()) {
										$owner = $row["owner"] ; 
										}
									} else {
										echo "0 results";
									}	
						?>
						<div class="meta">by <?php echo '<a href="http://youyouyou.co/member.php?user='.$owner.'">'.$owner.'</a>'; ?>
						</div>

					</div> <!-- class='grid' -->


			<?php } ?>  <!-- for -->

		</div> <!-- id="container" -->
			



<!--
<div id="container">
	<div class="grid">
		<div class="imgholder">
			<img src="images/img27.jpg" />
		</div>
		<strong>Sunset Lake</strong>
		<p>A peaceful sunset view...</p>
		<div class="meta">by j osborn</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img26.jpg" />
		</div>
		<strong>Bridge to Heaven</strong>
		<p>Where is the bridge lead to?</p>
		<div class="meta">by SigitEko</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img15.jpg" />
		</div>
		<strong>Autumn</strong>
		<p>The fall of the tree...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img23.jpg" />
		</div>
		<strong>Winter Whisper</strong>
		<p>Winter feel...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img17.jpg" />
		</div>
		<strong>Light</strong>
		<p>The only shinning light...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img22.jpg" />
		</div>
		<strong>Rooster's Ranch</strong>
		<p>Rooster's ranch landscape...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img16.jpg" />
		</div>
		<strong>Autumn Light</strong>
		<p>Sun shinning into forest...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img21.jpg" />
		</div>
		<strong>Yellow cloudy</strong>
		<p>It is yellow cloudy...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img28.jpg" />
		</div>
		<strong>Herringfleet Mill</strong>
		<p>Just a herringfleet mill...</p>
		<div class="meta">by Ian Flindt</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img2.jpg" />
		</div>
		<strong>Battle Field</strong>
		<p>Battle Field for you...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img24.jpg" />
		</div>
		<strong>Sundays Sunset</strong>
		<p>Beach view sunset...</p>
		<div class="meta">by Robert Strachan</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img19.jpg" />
		</div>
		<strong>Sun Flower</strong>
		<p>Good Morning Sun flower...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img5.jpg" />
		</div>
		<strong>Beach</strong>
		<p>Something on beach...</p>
		<div class="meta">by unknown</div>
	</div>
	<div class="grid">
		<div class="imgholder"> 
			<img src="images/img25.jpg" />
		</div>
		<strong>Flowers</strong>
		<p>Hello flowers...</p>
		<div class="meta">by R A Stanley</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img20.jpg" />
		</div>
		<strong>Alone</strong>
		<p>Lonely plant...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div> 
</div>

-->



</section>




<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy; 2015 Handsome Four</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.templatemo_footer -->








</body>
</html>