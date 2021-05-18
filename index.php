<?php
$submit = filter_input(INPUT_POST, 'submit');
if(isset($_POST{'genres'})){
  $genres = $_POST['genres' ];
}
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($sumbit)){
  echo "formular byl odeslan";
  var_dump($genres);

} else { ?>

<h1> Vyber oblíbené hry <h1>
<ul>
  <form action="index.php" method="post"
<label for="genre1">Strategie</label>
<input type="checkbox" name="genres[]" id="genre1" value="strategy"</li>
   <li><form action="index.php" method="post"
<label for="genre1">RPG</label>
<input type="checkbox" name="genres[]" id="genre2" value="RPG"</li>
<li><form action="index.php" method="post"
<label for="genre1">Akční</label>
<input type="checkbox" name="genres[]" id="genre3" value="action"</li>
  <li><form action="index.php" method="post"
<label for="genre1">Střílečky z první osoby</label>
<input type="checkbox" name="genres[]" id="genre4" value="shooters"</li>
 <li><form action="index.php" method="post"
<label for="genre1">Střílečky ze třetí osoby</label>
<input type="checkbox" name="genres[]" id="genre5" value="shooters"</li>
 <li><form action="index.php" method="post"
<label for="genre1">Skákačky</label>
<input type="checkbox" name="genres[]" id="genre6" value="jumpers"</li>
<li><form action="index.php" method="post"
<label for="genre1">Příběhovky</label>
<input type="checkbox" name="genres[]" id="genre7" value="story"</li>
 <li><form action="index.php" method="post"
<label for="genre1">Sportovní hry</label>
<input type="checkbox" name="genres[]" id="genre8" value="sport"</li>
  <li><form action="index.php" method="post"
<label for="genre1">Kreativní</label>
<input type="checkbox" name="genres[]" id="genre9" value="creative"</li>
 <li><form action="index.php" method="post"
<label for="genre1">Hry o přežití</label>
<input type="checkbox" name="genres[]" id="genre10" value="survival"</li>
</ul>
<input type="submit" value="Odeslat">




<?php } ?>


  

    
</body>
</html>