<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>
<section id="home">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"><img src="<?= $this->assetUrl('img/Min_Bimorph_deformable_mirrors.png') ?>" class="img-responsive" alt="bimorph_deformable_mirrors"></li>
		    <li data-target="#myCarousel" data-slide-to="1"><img src="<?= $this->assetUrl('img/Min_Stack_actuator_deformable_mirrors.png') ?>" class="img-responsive" alt="stack_actuator_deformable_mirrors" /></li>
		    <li data-target="#myCarousel" data-slide-to="2"><img src="<?= $this->assetUrl('img/Min_Very_large_deformable_mirrors.png') ?>" class="img-responsive" alt="very_large_deformable_mirrors"></li>
		    <li data-target="#myCarousel" data-slide-to="3"><img src="<?= $this->assetUrl('img/Min_Wavefront_sensor.png') ?>" class="img-responsive" alt="wavefront_sensor"></li>
		  </ol>
	  <!-- Wrapper for slides -->
	
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      	<a href="#">
		      		<img src="<?= $this->assetUrl('img/Bimorph_deformable_mirrors.png') ?>" alt="bimorph_deformable_mirrors">
		      		 <div class="carousel-caption">
						<h2>Bimorph deformable mirrors</h2>
					</div>
		      	</a>
		    </div>
			<div class="item">
		    	 <a href="#">
		    	 	<img src="<?= $this->assetUrl('img/Stack_actuator_deformable_mirrors.png') ?>" alt="stack_actuator_deformable_mirrors">
		    	 	<div class="carousel-caption">
	      				<h2>Stack actuator deformable mirrors </h2>
					</div>
		    	 </a>
		    </div>
	
		    <div class="item">
		     	<a href="#">
		     		<img src="<?= $this->assetUrl('img/Very_large_deformable_mirrors.png') ?>" alt="very_large_deformable_mirrors">
		     		<div class="carousel-caption">
	       				<h2>Very large deformable mirrors</h2>
	       			</div>
		     	</a>
		    </div>
	
		    <div class="item">
		     	<a href="#">
		     		<img src="<?= $this->assetUrl('img/Wavefront_sensor.png') ?>" alt="wavefront_sensor">
		     		 <div class="carousel-caption">
	        			<h2>Wavefront sensor</h2>
	        		</div>
		     	</a>
		    </div>
		  </div>
	
	  	<!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  	<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  	<span class="sr-only">Next</span>
		  </a>
	</div>
	<div class="container">
  <h2 class="meet">Meet Aka Optics</h2>
  </div>
    <div id="events" class="container ul">
        
       
        <ul class="list-inline list-unstyled anim">
        	
        <?php
			if (count($events)>0)
			{
	        	// S'il n'y a pas d'events, afficher un message "No events." par exemple
	        	foreach ($events as $event)
	        	{ 
	        		$date = strtotime($event['date']);
        			$event['formatDate'] = date('Y-M-d', $date);
	        	?>
	        		<li><a href="<?php echo $event['link'] ?>"><?php echo $event['title'] ?></a> <?php echo $event['place'] ?> <?php echo $event['description'] ?> <?php echo $event['formatDate'] ?></li>
        <?php
        		}
			}
			else
			{
		?>
				<li><?php echo 'No scheduled event'; ?></li>
		<?php
			}
        ?>
        
        </ul>
        
    </div>
    
</section>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/home.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/home.js') ?>"></script>
<?php $this->stop('js') ?>