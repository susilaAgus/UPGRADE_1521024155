<!DOCTYPE htmal>
<html>
<head>
    <title>3MI-6 UTS.php</title>
</head>
<body>
<table border='1'>
  <tr>
    <th rowspan="2">INPUT</th>
    <th colspan="5">OUTPUT</th>
  </tr>
  <tr>
    <th>A</th>
    <th>E</th>
    <th>I</th>
    <th>U</th>
    <th>O</th>
  </tr>
  <tr>
    <td>
     <?php
      $n1="PRIANTO AGUS SUSILA";
      echo $n1;
     ?>
    </td>
    <td>
     <?php
         $pas = substr_count($n1,"A");
         echo $pas
     ?>
    </td>
    <td>
     <?php
         $pas = substr_count($n1,"E");
         echo $pas
     ?>
    </td>
     <td>
     <?php
         $pas = substr_count($n1,"I");
         echo $pas
     ?>
    </td>
     <td>
     <?php
        $pas = substr_count($n1,"U");
        echo $pas
     ?>
    </td>
     <td>
     <?php
        $pas = substr_count($n1,"O");
        echo $pas
     ?>
    </td>
   </tr>   
</table>
</body>
</html>   
