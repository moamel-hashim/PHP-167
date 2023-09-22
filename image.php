<?php

function imageHandler($src, $title, $height, $width) {
  return '<img src='.$src. ' title='.$title. ' height='.$height. ' width='.$width.'>';
}

echo imageHandler('https://hips.hearstapps.com/hmg-prod/images/close-up-of-tulips-blooming-in-field-royalty-free-image-1584131603.jpg', 'Flowers field', '500', '500');
?>
