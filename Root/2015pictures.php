<!DOCTYPE html>
<html>
	<head>
        <title>Jawas- Team 1984</title>
		<link href="https://fonts.googleapis.com/css?family=Khula:400,600" rel="stylesheet">
        <link rel="stylesheet" href="CSS/websitecss.css" type="text/css">
        <meta name="viewport" content="width=device-width">
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
						
							<a href="2017pictures.php" class="year">2017</a>
							<a href="2016pictures.php" class="year">2016</a>
							<a href="2015pictures.php" class="year" style="color: #ffc700">2015</a>
							<a href="2014pictures.php" class="year">2014</a>
							<a href="2013pictures.php" class="year">2013</a>
							<a href="2012pictures.php" class="year">2012</a>
                            <br>

							<div id="row">
                                

                            <?php
                                $files = glob("Media/2015/images/*");
                                for ($i=1; $i<count($files); $i++)
                                    {
                                    $image = $files[$i];
                                    echo '<div class="container"><img src="'.$image .'" alt="2015 image" onclick="openModal();currentSlide('.$i.')" class="hover-shadow cursor"></div>';
                                    }
                            ?>



							</div>
							<div class="clear"></div>
							<div id="idModal" class="modal" >
								<span class="close cursor" onclick="closeModal()">&times;</span>
								<div id="modal-content">
									
                                    
                                    <?php
                                        $files = glob("Media/2015/images/*");
                                        for ($i=1; $i<count($files); $i++)
                                            {
                                            $image = $files[$i];
                                            echo '<div class="slides"><img src="'.$image.'" alt="2015 image"></div>';
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
