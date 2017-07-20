<?php

  include('../config/link.php');

  $query = "SELECT * FROM products WHERE CONCAT(mark,  ' ', name) LIKE '%" . $_POST['text'] . "%'";

  $result = $link->query($query);

  while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $cantC = '';
    if ($row[6] == 0) {
      $cantC = 'rgba(231, 76, 60,1.0) !important';
    } else if ($row[6] <= 10 && $row[6] > 0) {
      $cantC = 'rgba(233,212,96,1.0) !important';
    }
    echo '<button style="color: ' . $cantC . ';" class="findPro ' .
          $_POST['back'] . '" ' .
          'data-id="' . $row[0] . '" ' .
          'data-name="' . $row[1] . '" ' .
          'data-mark="' . $row[2] . '" ' .
          'data-type="' . $row[3] . '" ' .
          'data-description="' . $row[4] . '" ' .
          'data-price="' . $row[5] . '" ' .
          'data-quantity="' . $row[6] . '" ' .
          '><div>' .
          $row[2] . ' | ' . $row[1] . ' >> Cantidad: ' . $row[6] .
          '</div></button>';
  }

?>
