<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form>
      <?php
        print_r($_POST);
        ?>

      <form action="" method="post">
        <p>Username: <input type="text" Username="name" /></p>
        <p>Password: <input type="password" Password="password" /></p>
        <input type="submit" />
      </form>
    </form>
  </body>
</html>
