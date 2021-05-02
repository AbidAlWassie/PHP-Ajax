<?php
  include_once "dbh.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Ajax</title>
</head>
<body>
  <div id="comments">
    <?php
      $sql = "SELECT * FROM comments LIMIT 2";

      $result = mysqli_query($connect, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<p>";
          echo $row['author'];
          echo "<br>";
          echo $row['message'];
          echo "</p>";
        }
      } else {
        echo "There are no comments!";
      }

    ?>
  </div>

  <button>Show more comments</button>

</body>
</html>