<?php
/* Your password */
   $password = 'admin';

   /* Redirects here after login */
   $redirect_after_login = 'addremovecar.php';

   /* Will not ask password again for */
   $remember_password = strtotime('+30 days'); // 30 days

   if (isset($_POST['password']) && $_POST['password'] == $password) {
       setcookie("password", $password, $remember_password);
       header('Location: ' . $redirect_after_login);
       exit;
   }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div style="text-align:center;margin-top:50px;">
        You must enter the password to view this content.
        <form method="post">
            <input type="text" placeholder="wachtwoord" name="password">
        </form>
    </div>
  </body>
</html>
