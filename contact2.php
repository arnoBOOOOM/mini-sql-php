<!doctype html>

<html>

    <head>
        <title>Garage Devolder!</title>
        <script src="java.js"></script>
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
                    <li class="nav-item dropdown">
          <a href="aandbod.html"class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Aanbod
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="nieuw.html">Nieuw</a>
            <a class="dropdown-item" href="tweedehands.html">Tweedehands</a>
          </div>

        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>

                </ul>
            </div>
        </nav>

        <main>
            <div class="container .text-center .conatainer-fluid">
                <div class="text-center"><br>
                  <form action="contact1.php" method="post">
                    <div class="elem-group">
                      <label for="department-selection">Kies Afspraak</label>
                      <select name="afspraak" style="width:30%;" onchange="reasonChanged(this);">
                          <option value="">Klik hier en verander Afspraak</option>
                          <option value="">Afspraak onderhoud</option>
                          <option value="">Afspraak aankoop nieuwe wagen</option>
                          <option value="">Afspraak vermogensbank</option>
                          <option value="">Andere</option>
                      </select>
                    </div>
                      <div class="elem-group">
                        <label for="name">Uw Naam</label>
                        <input type="text" id="name" name="naam" placeholder="Pieter Pieters" pattern=[A-Z\sa-z]{3,20} required>
                      </div>
                      <div class="elem-group">
                        <label for="email">Uw E-mail</label>
                        <input type="email" id="email" name="mail" placeholder="Pieter.Peter@email.com" required>
                      </div>
                      <div class="elem-group">
                        <label for="email">Merk wagen</label>
                        <input type="text" id="name" name="merk" placeholder="Audi" required>
                      </div>
                      <div class="elem-group">
                        <label for="email">Model Wagen</label>
                        <input type="text" id="name" name="model" placeholder="RS6" required>
                      </div>
                      <div class="elem-group">
                        <label for="email">Bouwjaar Wagen</label>
                        <input type="text" id="email" name="jaar" placeholder="2019" required>
                      </div>
                      <div class="elem-group">
                        <label>
                        <textarea name="bericht"  form="input" id="txtarea" placeholder="Invullen wanneer je andere hebt geslecteerd"></textarea>
                      </div>
                      <button type="submit">Contact Team-GD</button>
                    </form>
                  <br></div>
            </div>
        </main>
<br><br>
<div class="text-center">
<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=garage%20ampe%20bvba&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
</div>
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
