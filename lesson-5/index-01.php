<?php

require_once 'db.php';

$result = mysqli_query( $link, 'select id, image_patch, viewed from test.images order by viewed' );

while ( $row = mysqli_fetch_assoc($result) ) {
  echo "<a href=\"/lesson-5/get_image.php?id=$row[id]\" target=\"_blank\">
      <img src=\"$row[image_patch]\" width=\"200\">
     </a><br>";
}

?>
