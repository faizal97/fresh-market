            <div class="container-fluid">
            	<?php 
            	if(!isset($_GET['page'])) {
					$page = 'home';
					}
				else {
					$page = $_GET['page'];
					}

				if(file_exists('pages/'.$page.'.php')){
					include 'pages/'.$page.'.php';
					}
				else {
					include 'template/404.html';
					}
            	 ?>
            </div>