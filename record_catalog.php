<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Revival Records - Eau Claire Records</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="stylesheet" href="css/master.css">
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<?php include 'header-footer.php' ?>
						
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Login</h4>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="inputEmail">Email/Username</label>
								<input type="email" class="form-control" id="inputEmail" placeholder="Email/Username">
							</div>
							<div class="form-group">
								<label for="inputRecord">Password</label>
								<input type="record" class="form-control" id="inputRecord" placeholder="Password">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-lg" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-lg btn-primary">Login</button>
					</div>
				</div>
			</div>
		</div>
			
		<div class="recordsTitle" align="center">
			<h2 style="font-size: 36px; padding: 2px 25px">Record <span class="text-muted">Catalog</span></h2>
		</div>
		<div class = "catalog" align = "center">
			<div class="pagination" >
				<ul align = "center">
					<li class="active"><a href="#">A</a></li>
					<li><a href="#">B</a></li>
					<li><a href="#">C</a></li>
					<li><a href="#">D</a></li>
					<li><a href="#">E</a></li>
					<li><a href="#">F</a></li>
					<li><a href="#">G</a></li>
					<li><a href="#">H</a></li>
					<li><a href="#">I</a></li>
					<li><a href="#">J</a></li>
					<li><a href="#">K</a></li>
					<li><a href="#">L</a></li>
					<li><a href="#">M</a></li>
					<li><a href="#">N</a></li>
					<li><a href="#">O</a></li>
					<li><a href="#">P</a></li>
					<li><a href="#">Q</a></li>
					<li><a href="#">R</a></li>
					<li><a href="#">S</a></li>
					<li><a href="#">T</a></li>
					<li><a href="#">U</a></li>
					<li><a href="#">V</a></li>
					<li><a href="#">W</a></li>
					<li><a href="#">X</a></li>
					<li><a href="#">Y</a></li>
					<li><a href="#">Z</a></li>
				</ul>
			</div>
		</div>
			<div class = "container main-content">
				<table cellpadding="0" width="100%" cellspacing="0" style = "font-size: 16px">
				<tr>
					<td>
					<div  data-toggle="modal" data-target="#myModal" id="requestRecord" style="width:80px;height:80px;">
							
						 User Login<img src="img/recordcatalogicon.jpg" alt="" width="80" height="80" border="1"></a>
					</div>
					</td>
				</tr>
				<tr>
					<td>Example Record 1<img src="img/requestrecord.jpg" alt="" width="80" height="80" border="1"></a></td>
					<td>Example Record 2<img src="img/requestrecord.jpg" alt="" width="80" height="80" border="1"></a></td>
					<td>Example Record 3<img src="img/requestrecord.jpg" alt="" width="80" height="80" border="1"></a></td>					
				</tr>
				<tr>
					<td>Example Record 4<img src="img/requestrecord.jpg" alt="" width="80" height="80" border="1"></a></td>
					<td>Example Record 5<img src="img/requestrecord.jpg" alt="" width="80" height="80" border="1"></a></td>
					<td>Example Record 6<img src="img/requestrecord.jpg" alt="" width="80" height="80" border="1"></a></td>
				</tr>
			</table>
		</div>
		
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>