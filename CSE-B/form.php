<?php 
echo 'welcome'.' '.$_POST['username'];
?>
  <!DOCTYPE html>
  <html>
  <title>Input Form</title>
  </head>
   <body>
   <form action="form.php" method="post">
   Name: <input type="text" name="username">
   <br>
   <input type="submit" name='btn'>

  </body>
</html>