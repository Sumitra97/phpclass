<?php
$currentFileName= basename($_SERVER['SCRIPT_NAME']);
$title= "Nepal Tours and Travels";

include"menus.php";

?>
<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">Traveler <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>

						<?php foreach ($menus as $menu) {?>
						<?php

						$class="";
						if($menu['link']== $currentFileName){
							$class= "active";

						}
							?>

						<li class="<php echo $class; ?>"> <a href=" <?php echo $menu['link']; ?>">
							<?php echo $menu['name']; ?></a></li>
						<?php } ?>
						
					</ul>	


				</div>
			</div>
			
		</div>
	</nav>