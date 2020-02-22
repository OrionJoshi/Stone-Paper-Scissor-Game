<?php 

			function display_item($item=null){

				$items  = array(
						
						"rock" => '<a href="?item=rock">Stone<br /><img src="images/stone.jpg" width="135" height="135" alt="Rock"></a>',
						"paper" => '<a href="?item=paper">Paper<br /><img src="images/paper.jpg" width="135" height="135" alt="Rock"></a>',
						"scissor" => '<a href="?item=scissor">Scissor<br /><img src="images/scissor.jpg" width="135" height="135" alt="Rock"></a>' 
		


				);
				if($item==null){
					foreach ($items as $item => $value) :
					echo $value;
				endforeach;
			}else{
				echo str_replace("?item={$item}","#",$items[$item]);
				
			}
		}
		function game(){
			if(isset($_GET['item'])== TRUE){
			//all possiblem items
				
				$items = array('rock','paper','scissor');
				//users item

				$user_item=strtolower($_GET['item']);

				//computer item

				$comp_item =$items[rand(0,2)];

				if(in_array($user_item, $items) == FALSE){
					echo "You must choose either rock | paper |scissor";
					die;
				}else{
				//scissors beats Paper
				//Paper beats Rock
				//Rock beats Scissors

					if($user_item == 'scissor' && $comp_item == 'paper' ||
						$user_item == 'paper' && $comp_item == 'rock'	||
						$user_item == 'rock' && $comp_item == 'scissor'){

						echo '<h1>You win !</h1>';
					}
					if($comp_item == 'scissor' && $user_item == 'paper' ||
						$comp_item== 'paper' && $user_item == 'rock'	||
						$comp_item == 'rock' && $user_item == 'scissor'){

						echo '<h1>You Lose !</h1>';
					}
					if($comp_item ==$user_item){

						echo '<h1>Match Tie !</h1>';
					}
					//user item
					echo "Your choice:";
					display_item($user_item);
					echo "Computer choice:";
					display_item($comp_item);

					echo '<a href="./">Play Again</a>';
				}
			}
			else{
				display_item(null);
			}
			}
		

 ?>			
