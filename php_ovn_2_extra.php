<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  # 1.
  $text = "tomosarts future crypto site";
  echo strlen($text);

  echo "<br>";
  echo "<br>";


  # 2.
  echo str_replace("future", "past", $text);

  echo "<br>";
  echo "<br>";


  # 3.
  $str1 = "Future";
  $str2 = "future";

  if (strcmp($str1, $str2) == 0) {
    echo "Textsträngarna är lika.";
  } else {
    echo "Textsträngarna är inte lika.";
  }

  echo "<br>";
  echo "<br>";


  # 4.
  echo readfile("tomosarts.txt");

  echo "<br>";
  echo "<br>";

  ?>


  <!-- 5. -->
  <form action="name.php" method="POST">
    Namn: <input type="text" name="name"><br>
    <input type="submit">
  </form>


  <?php

  # 6.
  $day = "Monday";
  $result = "";

  switch ($day) {
    case 'Monday':
      $result = "Start the week with a workout in the gym.";
      break;

    case "Tuesday":
      $result = "Go out for a walk.";
      break;

    case 'Wednesday':
      $result = "Let's play golf";
      break;

    case "Thursday":
      $result = "Time to rest.";
      break;

    case 'Friday':
      $result = "Hit the gym";
      break;

    case "Saturday":
      $result = "Watch some TV.";
      break;

    case 'Sunday':
      $result = "Time to rest.";
      break;

    default:
      $result = "Invalid";
  }

  echo "<p>$result</p>";


  # 7.
  $numbers = array(4, 2, 8, 1, 9);
  sort($numbers);

  $arrlength = count($numbers);
  for ($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
  }

  echo "<br>";

  ?>

  <!-- 8. -->
  <form action="name_age.php" method="POST">
    Namn: <input type="text" name="name"><br>
    Ålder: <input type="text" name="age"><br>
    <input type="submit">
  </form>

  <br>
  <br>


  <!-- 9. -->
  <form action="calculator.php" method="POST">
    <label for="num1">Nummer 1:</label>
    <input type="number" id="num1" name="num1" step="any" required>
    <br>

    <label for="num2">Nummer 2:</label>
    <input type="number" id="num2" name="num2" step="any" required>
    <br>

    <label for="operation">Operation:</label>
    <select id="operation" name="operation" required>
      <option value="add">Addition</option>
      <option value="subtract">Subtraktion</option>
      <option value="multiply">Multiplikation</option>
      <option value="divide">Division</option>
    </select>
    <br>

    <input type="submit" name="submit" value="Calculate">
  </form>

</body>

</html>
