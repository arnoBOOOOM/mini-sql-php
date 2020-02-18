<!doctype html>

<html>

    <head>
      <link rel="stylesheet" href="databank.css">
        <title>Garage Devolder!</title>
        <link type="text/css" rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <header>
                <div class="container .container-fluid .text-center bg-warning">
                    <div class="text-center"><br> GD - Garage Devolder</div>
                </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light .container-fluid container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            <div class="container .text-center .conatainer-fluid">
                <div class="text-center"><br><h1>Nieuw!</h1><br><h4>Nieuwe auto's te koop</h4><br>
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
                  <br><br></div>
            </div>
        </main>

        <footer>
            <div class="container .text-center .container-fluid bg-light">
                <div class="row">
                    <div class="col text-center bg-warning"><br>Openingsuren<br><br>Di-Do:8u - 19u <br>Vrij: 8u-16u <br>Za-Zo:10u - 18u <br><br></div>
                    <div class="col text-center bg-warning"><br>Contactinformatie<br><br>Tel: 0498545085 <br>E-mail: devolder.arno@outlook.com<br>Adres : Marktstraat 3<br>9870 Zulte<br><br></div>
                </div>
                <div class="text-center" style="padding: 10px;">Copyright &copy; 2019 - "Garage Devolder"</div>
            </div>
        </footer>




    </body>

</html>
