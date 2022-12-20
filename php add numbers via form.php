<!DOCTYPE html>
<html>
  <head>
    <title>php practice</title>
  </head>

  <body>

<form action="php file.php" method="POST">

Number 1: <input type="number" name="num1" >
<br><br>
Number 2: <input type="number" name="num2">
<br><br>
<input type="submit">
<br>
</form>


  <?php 
  
  function addnumbers($num1, $num2)
  {
    echo "<br>", ($num1 + $num2);
  }


  addnumbers($_POST["num1"], $_POST["num2"]);


  ?>



</body>
</html>
