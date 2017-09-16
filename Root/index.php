<!DOCTYPE html>
<html>
	<head>
        <title>Jawas- Team 1984</title>
		<link href="https://fonts.googleapis.com/css?family=Khula:400,600" rel="stylesheet">
        <link rel="stylesheet" href="CSS/websitecss.css" type="text/css">
        <meta name="viewport" content="width=device-width">
	</head>
    
	<body id="media">
        
        <div id="header"></div>
		<script src="JS/header.js"></script>

		<div class="l-wrap">
			<div class="main-grid">

				<div class="grid-item l-6">
					<div class="grid-inner">
						<div class="heading">
							<h1>Media</h1>
						</div>
						
							<a href="2017.html" class="year">2017</a>
							<a href="2016.html" class="year" style="color: #ffa700">2016</a>
							<a href="2015.html" class="year">2015</a>
							<a href="2014.html" class="year">2014</a>
							<a href="2013.html" class="year">2013</a>
							<a href="2012.html" class="year">2012</a>
                            <br>
                            <a href="2016pictures.html" class="year" style="color: #ffa700">Pictures</a>
							<a href="2016videos.html" class="year">Videos</a>

							<div id="row">
                                
                                


<?php
    $files = glob("Media/2016/images/*.*");
    for ($i=1; $i<count($files); $i++)
        {
            $image = $files[$i];
            echo '<div class="container"><img src="'.$image .'" onclick="openModal();currentSlide('.$i.')" class="hover-shadow cursor"></div>';
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
	
								<!--<script>

                                    var images; 
                                    images = '';

                                    for (i = 1; i < 80; i++) {
                                        images += '<div class="slides"><img src="Media/2016/images/2016image_' + i + '.jpg"></div>';
                                        }
                                    document.getElementById("modal-content").innerHTML= images;

                                </script>-->
	      
									<!--<a class="prev" onclick="plusSlides(-1);">&#10094;</a>
									<a class="next" onclick="plusSlides(1);">&#10095;</a>-->
	
								</div>
							</div>
							<script src="JS/slides.js"></script>
					</div>
				</div>
                
                <div id="sidebar"></div>
				<script src="JS/sidebar.js"></script>
                
			</div>
		</div>
        
        <div id="footer"></div>
		<script src="JS/footer.js"></script>

	</body>
</html>
