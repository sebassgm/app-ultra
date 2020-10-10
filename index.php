<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<h1>Hello '.htmlspecialchars($_GET["name"]) .'</h1>'; ?>
 </body>
</html>