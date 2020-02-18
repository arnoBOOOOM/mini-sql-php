<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>nieuwe autos toevoegen</h2>
  </div>
  <form action="add.php" method="POST">

      <input type="text" name="1" placeholder="Merk" required>
      <br>
      <input type="text" name="2" placeholder="Model" required>
      <br>
      <input type="text" name="3" placeholder="Bouwjaar" required>
      <br>
      <input type="text" name="4" placeholder="Brandstof" required>
      <br>
      <input type="text" name="5" placeholder="kleur" required>
      <br>
      <br>
    <button type="submit" name="submit">auto uploaden</button>
    <br>
    <br>
  </form>
  <form action="remove.php" method="POST">
    <input type="text" name="removenieuw" placeholder="id bijvoorbeeld 6" required>
    <br>
    <br>
  <button type="submit" name="submit">auto verwijderen</button>
  <br>
  </form>
  <br><br>
  <?php
  //database connecteren
  include_once 'dbconn.php';

  //databank displayen

  $sql = "SELECT * from nieuwewagens";
  $result = $conn->query($sql);

  if($result->num_rows > 0) {
          //output data of each row
          echo "<h3>nieuwe autos</h3><table><tr><th>id</th><th>merk</th><th>model</th><th>bouwjaar</th><th>brandstof</th><th>kleur</th><th>opties</th></tr>";
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["idnieuwewagens"] . "</td><td>" . $row["merk"] . "</td><td>" . $row["model"] . "</td><td>" . $row["bouwjaar"] . "</td><td>" . $row["brandstof"] . "</td><td>" . $row["kleur"] . "</td><td>" . $row["opties"] . "</td></tr>";
          }
          echo "</table></br></br>&copy; Arno Devolder";
  } else {
    echo "<h3>0 results</h3>";
  }

  $conn->close();

  ?>
  <br><br>
  <h2>twheedhans autos toevoegen</h2>
  </div>
  <form action="add.php" method="POST">

    <input type="text" name="6" placeholder="Merk" required>
    <br>
    <input type="text" name="7" placeholder="Model" required>
    <br>
    <input type="text" name="8" placeholder="Bouwjaar" required>
    <br>
    <input type="text" name="9" placeholder="Brandstof" required>
    <br>
    <input type="text" name="10" placeholder="kleur" required>
    <br>
    <input type="text" name="11" placeholder="aantal km" required>
    <br>
    <br>
    <button type="submit" name="submit">autop uploaden</button>
  </form>
  <br><br>
  <form action="remove.php" method="POST">
    <input type="text" name="remove2" placeholder="id bijvoorbeeld 3" required>
    <br>
    <br>
  <button type="submit" name="submit">auto verwijderen</button>
  <br>
  </form>
  <br><br>


  </body>
</html>
