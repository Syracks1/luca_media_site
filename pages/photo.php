<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="menu_bar">
      <ul>
        <li><img class="logo" src="../img/logo/logo_yellow.png"><a href="#">contact</a><a href="#">about</a><a href="#">webdesign</a><a href="#">graphic design</a><a href="../index.html">home</a></li>
      </ul>
    </div>
    <div class="photos">
     <?php
          $dirname = "../img/photo_port/iconized/";
          $images = glob($dirname."*.png");

          foreach($images as $image) {
              echo '<img src="'.$image.'" /><br />';
          }
      ?>
</div>
</body>
</html>
