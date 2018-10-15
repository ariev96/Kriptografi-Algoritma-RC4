<?php
    $kd_user   = $_SESSION['kd_user'];
if ($kd_user != null){
?>
<div id="navigation">
				  <ul>		  
						<li>
							<a href="?hal=home">Home</a>
						</li>
						<li>
							<a href="?hal=enkrip">Enkripsi</a>
						</li>
						<li>
							<a href="?hal=dekrip">Dekripsi</a>
						</li>
						<li>
							<a href="?hal=file">List File</a>
						</li>						
						<li>
							<a href="?hal=help">Help</a>
						</li>
						<li>
							<a href="?hal=about">About</a>
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