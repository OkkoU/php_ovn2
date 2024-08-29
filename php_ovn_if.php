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
  $i = 2;

  if ($i >= 2) {
    echo "<p>Variabeln är större än eller lika stort som 2</p>";
  }


  # 2.
  $yrke = "kodare";
  $svar = "";

  if ($yrke == "kodare") {
    $svar = "Kalle är kodare";
  } elseif ($yrke == "svetsare") {
    $svar = "Kalle är svetsare";
  } elseif ($yrke == "kock") {
    $svar = "Kalle är kock";
  } else {
    $svar = "Vet inte vad Kalle gör";
  }

  echo "<p>$svar</p>";


  # 3.
  $yrke = "svetsare";
  $svar = "";

  switch ($yrke) {
    case "kodare":
      $svar = "Kalle är kodare";
      break;

    case "svetsare":
      $svar = "Kalle är svetsare";
      break;

    case "kock":
      $svar = "Kalle är kock";
      break;

    default:
      $svar = "Vet inte vad Kalle gör";
  }

  echo "<p>$svar</p>";


  # 4.
  $x = 5;

  if ($x > 2 && $x < 10) {
    echo "Variabeln är större än 2 och mindre än 10";
  }

  echo "<br>";


  # 5.
  echo date("D");

  echo "<br>";


  # 6.
  $today = date("D");

  if ($today == "Mon") {
    echo "Det är måndag";
  } elseif ($today == "Tue") {
    echo "Det är tisdag";
  } elseif ($today == "Wed") {
    echo "Det är onsdag";
  } elseif ($today == "Thu") {
    echo "Det är torsdag";
  } elseif ($today == "Fri") {
    echo "Det är fredag";
  } elseif ($today == "Sat") {
    echo "Det är lördag";
  } elseif ($today == "Sun") {
    echo "Det är söndag";
  } else {
    echo "Ogiltigt värde";
  }

  ?>

</body>

</html>
