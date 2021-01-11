<?php
    require "header.php";
 ?>

      <main>
        <div>
          <section>
            <h1>Resetovani hesla</h1>
            <p>Bude ti zaslan email s instrukcemi na resetovani hesla.</p>
            <form action="includes/reset-request.inc.php" method="post">
              <input type="text" name="email" placeholder="Zadej email...">
              <button type="submit" name="reset-request-submit">Zaslat email</button>
            </form>
            <?php
              if (isset($_GET["reset"])) {
                if($_GET["reset"] == "success"){
                  echo "<p>Zkontroluj si email!</p>";
                }
              }
             ?>
          </section>
        </div>
      </main>

 <?php
     require "footer.php";
  ?>
