<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">


    <?php
    

      // Create an array of post objects using the display_post function

      $post_title = ["KFC", "Pizza", "BK", "MCD"];


      // Loop through array of posts and display each one on the page

      foreach ($post_title as $name) {
               // Call the display_title function and pass it the $post
        display_title($name);
      }

      /**
       * Custom function for displaying the title and content for a post
       *
       * @param string $title The title to be displayed
       */
      function display_title( $name ) {

      echo "<h3>$name</h3>";

      }



    ?>

  </div>

</body>
</html>
