<!DOCTYPE html>
<html>
	<head>
		<?php include 'head.php';?>
	</head>
    
	<body id="media">
        
        <?php include 'header.php';?>

		<div class="l-wrap">
			<div class="main-grid">

				<div class="grid-item l-6">
					<div class="grid-inner">
						<div class="heading">
							<h1>Media</h1>
						</div>
						
							<a href="2017.php" class="year">2017</a>
							<a href="2016.php" class="year" style="color: #ffc700">2016</a>
							<a href="2015.php" class="year">2015</a>
							<a href="2014.php" class="year">2014</a>
							<a href="2013.php" class="year">2013</a>
							<a href="2012.php" class="year">2012</a>
                            <br>
                            <a href="2016pictures.php" class="year">Pictures</a>
							<a href="2016videos.php" class="year" style="color: #ffc700">Videos</a>

							<div id="row">

                            <?php
                                $files = glob("Media/2016/videos/*.*");
                                for ($i=1; $i<count($files); $i++)
                                    {
                                    $video = $files[$i];
                                    $slide = $i + 1;
                                    echo '<div class="container"><img src="'.$video .'" alt="2016 video" onclick="openModal();currentSlide('.$slide.')" class="hover-shadow cursor"></div>';
                                    }
                            ?>

							</div>
							<div class="clear"></div>
							<div id="idModal" class="modal" >
								<span class="close cursor" onclick="closeModal()">&times;</span>
								<div id="modal-content">
									
									<div class="slides">
										<img src="Media/2016/1.JPG">
									</div>
                                    
                                    <?php
                                        $files = glob("Media/2016/videos/*.*");
                                        for ($i=1; $i<count($files); $i++)
                                            {
                                            $video = $files[$i];
                                            echo '<div class="slides"><img src="'.$video.'" alt="2016 video"></div>';
                                            }
                                    ?>
                                    
                                    
                                    
                                    <a class="prev" onclick="plusSlides(-1);">&#10094;</a>
									<a class="next" onclick="plusSlides(1);">&#10095;</a>
	
								</div>
							</div>
							<script src="JS/slides.js"></script>
					</div>
				</div>
                
                <?php include 'sidebar.php';?>
                
			</div>
		</div>
        
        
		<?php include 'footer.php';?>

	</body>
</html>
