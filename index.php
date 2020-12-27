<?php
    require "header.php";
 ?>

      <main>
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<p>Jsi prihlasen</p>';
          }
          else {
            echo '<p>Jsi odhlasen</p>';
          }
         ?>
      </main>

 <?php
     require "footer.php";
  ?>
