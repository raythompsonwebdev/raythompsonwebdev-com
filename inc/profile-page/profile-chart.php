<?php

$chartBars = '[
  {
		"id": "1",
		"language":"HTML",    
    "datapercentage": "75"
  }, {
    "id": "2",    
    "language":"CSS",   
    "datapercentage": "75" 
  }, {
    "id": "3",    
    "language":"Javascript",    
    "datapercentage": "60"
  }, {
    "id": "4",
    "language":"PHP",    
    "datapercentage": "70"
  }, {
    "id": "5",
    "language":"MYSQL",    
    "datapercentage": "60"
  }
]';
	
$bars = json_decode($chartBars, true);

?>
	
	<section id="prof_cont">

		<h1><?php _e('Web Skills Graph', 'raythompsonwebdev-com'); ?></h1>

		<article id="chart">
			
			<ul id="bars">

			<?php 

				foreach($bars as $bar):				
					
				?>
				
				<li>				
					<div data-percentage="<?=$bar['datapercentage']?>" class="bar"></div>
					<span><?php _e($bar['language'], 'raythompsonwebdev-com'); ?></span>
				</li>
				<?php endforeach ?>
			
			</ul>

		</article>

	</section><!--end of prof cont-->

<?php   


