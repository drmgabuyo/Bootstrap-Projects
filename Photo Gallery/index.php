<!DOCTYPE html>

<html>
     <head>
          <title>Photo Gallery</title>
          <link rel="stylesheet" href="css/bootstrap.min.css">
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.min.js"></script> 
		 
	</head>
	
	<body>
	
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="row">
			<div class="navbar-header">
				<div class="navbar-brand">Photo Gallery</div>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="albums.php">Taylor Albums</a></li>
					<li><a href="songs.php">Songs</a></li>
				</ul>
			</div>
		</nav>
		<center>
		<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div id="mycarousel" class="carousel slide" data-ride="carousel" style="width: 1000px;">
				<ol class="carousel-indicators">
					<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
					<li data-target="#mycarousel" data-slide-to="1"></li>
					<li data-target="#mycarousel" data-slide-to="2"></li>
					<li data-target="#mycarousel" data-slide-to="3"></li>
					<li data-target="#mycarousel" data-slide-to="4"></li>
					<li data-target="#mycarousel" data-slide-to="5"></li>
					<li data-target="#mycarousel" data-slide-to="6"></li>
					<li data-target="#mycarousel" data-slide-to="7"></li>
					<li data-target="#mycarousel" data-slide-to="8"></li>
					<li data-target="#mycarousel" data-slide-to="9"></li>
					<li data-target="#mycarousel" data-slide-to="10"></li>
					<li data-target="#mycarousel" data-slide-to="11"></li>
				</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="pic/taylor1.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Folklore</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				<div class="item">
					<img src="pic/taylor2.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Evermore</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				<div class="item">
					<img src="pic/taylor3.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Red (Taylor's Version)</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
					<div class="item">
					<img src="pic/taylor4.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Fearless (Taylor's Version)</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
				<div class="item">
					<img src="pic/taylor5.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Lover</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
				<div class="item">
					<img src="pic/taylor6.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Speak Now</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
				<div class="item">
					<img src="pic/taylor7.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Reputation</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
				<div class="item">
					<img src="pic/taylor8.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Midnights</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
				<div class="item">
					<img src="pic/taylor9.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Taylor Swift Debut</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
				<div class="item">
					<img src="pic/taylor10.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>1989</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
				<div class="item">
					<img src="pic/taylor11.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Red</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				
				<div class="item">
					<img src="pic/taylor12.jpg" style="width:1000px; height:500px;">
					<div class="carousel-caption">
						<h3>Fearless</h3>
						<p>by Taylor Swift</p>
					</div>
				</div>
				<a class="left carousel-control" href="#mycarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				
				<a class="right carousel-control" href="#mycarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			
			</div>
			</div>
		</div>
		</div>
		

		<div class="container">
		<div class="page-header">
			<h3>Photo Gallery</h3>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<a href="#m1" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor1.jpg">
			</a>
			
			<div class="modal fade" id="m1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Folklore</div>
						<div class="modal-body">
							<img src="pic/taylor1.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Folklore by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			
			</div>
			
			<div class="col-md-4">
				<a href="#m2" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor2.jpg">
			</a>
			<div class="modal fade" id="m2">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Evermore</div>
						<div class="modal-body">
							<img src="pic/taylor2.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Evermore by Taylor Swift</div>
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m3" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor3.jpg">
			</a>
			<div class="modal fade" id="m3">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Red (Taylor's Version)</div>
						<div class="modal-body">
							<img src="pic/taylor3.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Red (Taylor's Version) by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m4" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor4.jpg">
			</a>
			<div class="modal fade" id="m4">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Fearless (Taylor's Version)</div>
						<div class="modal-body">
							<img src="pic/taylor4.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Fearless (Taylor's Version) by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m5" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor5.jpg">
			</a>
			<div class="modal fade" id="m5">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Lover</div>
						<div class="modal-body">
							<img src="pic/taylor5.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Lover by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m6" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor6.jpg">
			</a>
			<div class="modal fade" id="m6">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Speak Now</div>
						<div class="modal-body">
							<img src="pic/taylor6.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Speak Now by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m7" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor7.jpg">
			</a>
			<div class="modal fade" id="m7">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Reputation</div>
						<div class="modal-body">
							<img src="pic/taylor7.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Reputation by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m8" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor8.jpg">
			</a>
			<div class="modal fade" id="m8">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Midnights</div>
						<div class="modal-body">
							<img src="pic/taylor8.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Midnights by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m9" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor9.jpg">
			</a>
			<div class="modal fade" id="m9">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Taylor Swift Debut</div>
						<div class="modal-body">
							<img src="pic/taylor9.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Taylor Swift Debut by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m10" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor10.jpg">
			</a>
			<div class="modal fade" id="m10">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">1989</div>
						<div class="modal-body">
							<img src="pic/taylor10.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">1989 by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m11" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor11.jpg">
			</a>
			<div class="modal fade" id="m11">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Red</div>
						<div class="modal-body">
							<img src="pic/taylor11.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Red by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
			
			<div class="col-md-4">
				<a href="#m12" data-toggle="modal" class="thumbnail">
				<img src="pic/taylor12.jpg">
			</a>
			<div class="modal fade" id="m12">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">Fearless</div>
						<div class="modal-body">
							<img src="pic/taylor12.jpg" class="img-thumbnail">
						</div>
						<div class="modal-footer">Fearless by Taylor Swift</div>
					
					</div>
				</div>
			</div>
			</div>
		</div>
		<br/>
		<br/>
		<br/>
		<br/><br/>
		<footer class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="text-center" style="padding: 10px;">Created by: <b>Dyna Rose Gabuyo</b></p>
			</div>
		</footer>
	</div>
	</div>
	
	
	</body>
	
	
	
</html>