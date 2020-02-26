<?php
include _DIR_ . '/../db.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dist/app.css">
    <title>dischi</title>
  </head>
  <body>
    <header>
      <div class="header">
        <img src="https://gogomagazine.it/wp-content/uploads/2018/01/Spotify-logo.jpg" alt="">
      </div>
    </header>

    <main>
      <div class="wrapper">

        <?php if (empty($db)) { ?>
          <div class="box">
            <?php foreach ($database as $value) { ?>
              <div class="box_img">
                <img src="<?php echo $value['poster'] ?>" alt="">
                <h2><?php echo $value['title'];?></h2>
                <h3>  <?php echo $value['author'];?></h3>
                <h2><?php echo $value['year'];?></h2>
              </div>
            <?php } ?>
          </div>
          <?php } else { ?>
            <h2>non ci sono cd</h2>
          <?php } ?>
      </div>
    </main>

  </body>
</html>
