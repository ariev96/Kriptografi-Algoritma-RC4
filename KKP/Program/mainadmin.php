<?php
    $kd_admin   = $_SESSION['kd_admin'];
if ($kd_admin != null){
?>
<div id="navigation">
				  <ul>

			  
						<li>
							<a href="?hal=home">Home</a>
						</li>
						<li>
							<a href="?hal=listuser">List User</a>
						</li>
						<li>
							<a href="?hal=listfileadmin">List File</a>
						</li>
						
						
						<li>
							<a href="?hal=reset">Reset</a>
						</li>
						<li>
							<a href="?hal=help-admin">Help</a>
						</li>
						<li>
							<a href="?hal=about-admin">About</a>
						</li>
						<li>
							<a href="logout.php">Logout</a>
						</li>
						
					
				
				
				</ul>
				
				</div>
			</div>
			<?php
	}else{
    
    echo "<script>window.location='index.php'</script>";
}
	?>