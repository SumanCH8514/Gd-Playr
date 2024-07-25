<?php
$apikey = "AIzaSyC1AbMGQxr6Fgz27N6VL-jab9wXwyHEJ2g";
if (isset($_GET['id'])) {
    $id = $_GET['id']; 

} else {
    header('location:index.php') ;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SumanMovies Player</title>
    <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />
  </head>
  <body>
    <video 
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="640"
    height="264"
    poster=""
    data-setup="{}"
  >
  <source src="https://www.googleapis.com/drive/v3/files/<?php echo $id ; ?>?alt=media&key=<?php echo $apikey ; ?>" type="video/mp4" >
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that supports HTML5 video
    </p>
  </video>

  <script src="https://vjs.zencdn.net/8.16.1/video.min.js"></script>
</body>
  </body>
</html>
