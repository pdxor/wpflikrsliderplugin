<?php
//still would like to get the list id which in this case is CNL4 to be dynamically passed via shortcode

  $flickrid = get_query_var('flickrid');
  $photosetid = get_query_var('photosetid');
  $json = file_get_contents('https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=f49d03c03abf6d207a9a10cd3ce11c0f&photoset_id='.$photosetid.'&user_id='.$flickrid.'&format=json&nojsoncallback=1');
  $array = json_decode( $json, true );
  echo '<div class="container">';
  echo '<ul class="vertalign" id="flickSlide'.$photosetid.'">';
  foreach($array['photoset']['photo'] as $item) {
      $i++;
      $farm = $item['farm'];
      $server = $item['server'];
      $id = $item['id'];
      $secret = $item['secret'];
      echo '<li><a target="_blank" href=" https://www.flickr.com/photos/ridgefieldlibrary/albums/'.$photosetid.'"><img src="https://farm'.$farm.'.staticflickr.com/'.$server.'/'.$id.'_'.$secret.'_n.jpg"></a></li>';
      if($i > 7) {
        break;
      }

  }
  echo '</ul>';
  echo '</div>'
?>
