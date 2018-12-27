<?php
$files = glob("../Media/2016/images/*.bmp");
for ($i=1; $i<count($files); $i++)
{
$image = $files[$i];
echo '<div class="container"><img src="'.$image .'" onclick="openModal();currentSlide(' + i + ')" class="hover-shadow cursor"></div>';
}
?>
