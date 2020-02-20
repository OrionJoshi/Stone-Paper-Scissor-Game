<!DOCTYPE html>
<html>
<head>
	<title>Rock - Paper - Scissor</title>
</head>
<body>

	<div id="game">
		<?php 

			function display_item(){

				$items  = array(
						
						"rock" => '<a href="?item=rock">Stone<br /><img src="images/stone.jpg" width="135" height="135" alt="Rock"></a>',
						"paper" => '<a href="?item=paper">Paper<br /><img src="images/paper.jpg" width="135" height="135" alt="Rock"></a>',
						"scissor" => '<a href="?item=scissor">Scissor<br /><img src="images/scissor.jpg" width="135" height="135" alt="Rock"></a>' 
		


				);
				foreach ($items as $item => $value) :
					echo $value;
				endforeach;
				
			}
			display_item();

		 ?>

	</div>

</body>
</html>