<html>
 <head></head>
 <body>
  	<?php
  		class Anime {
  			public $show_episode = '';
  			public $length_episode = '';
  			public function set_episode($show, $length) {
  				$this->first_name = $show;
  				$this->last_name = $length;
  			}
  		}

  		$naruto = new anime;
  		$naruto->set_episode('Sakura', 'Rock Lee');
  		$luffy = new anime;
  		$luffy->set_episode('Zorro', 'nami');
  		var_dump($naruto);
  		var_dump($luffy);

	?>
 </body>
</html>
