 	<?php session_start();
 	?>
 	<div class="navbar-fixed">
 		<nav>
 			<div class="nav-wrapper">
 				<a href="#!" class="brand-logo">Logo</a>
 				<ul class="right hide-on-med-and-down">
 					<li><a href="sass.html">Sass</a></li>
 					<?php 
 					if(!isset($_SESSION['login'])){
 						//echo "this is the prob";
 						echo "<li><a href='index.php'>Login</a></li>";
 					}
 					else if($_SESSION['login'] == 1){
 						echo $_SESSION['login'];
 						echo "<li><a href='logout.php'>Logout</a></li>";
 					}
 					else{
 						echo $_SESSION['login'];  						
 						echo "<li><a href='index.php'>Login</a></li>";
 					}
 					?>
 				</ul>
 			</div>
 		</nav>
 	</div>
