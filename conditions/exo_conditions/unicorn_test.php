<?php
	$genre = isset($_POST['genre']) ? $_POST['genre'] : NULL;
	$human = '<iframe src="https://giphy.com/embed/vF3xoAO52mBcQ" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/gifart-vitruvio-vF3xoAO52mBcQ"></a></p>';
	$cat = '<iframe src="https://giphy.com/embed/ArAgo5dU2z2xO" width="416" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/atinum-cat-animation-ArAgo5dU2z2xO"></a></p>';
	$unicorn = '<iframe src="https://giphy.com/embed/j5qzc6PESIYGA" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/j5qzc6PESIYGA"></a></p>';

  $gifResult = $genre == "humain" ? $human : ($genre == "licorne" ? $unicorn : $cat);

  echo $gifResult;
	echo "<br>
		  <a href='unicorn.php'>Retour</a>"
?>
