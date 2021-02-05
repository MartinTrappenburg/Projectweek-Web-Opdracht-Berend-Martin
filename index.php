<?php
      require_once('./connect.php');
      $sql = "SELECT * FROM `projectweek`";
      $result = mysqli_query($conn, $sql);
      $records = "";
      while ($record = mysqli_fetch_assoc($result))
      {
          $records .= "<tr>
                          <th scope='row' class='generated-text'>" . $record["username"] . "</th>
                          <td class='generated-text'>" . $record["comment"] . "</td>
                          <td>
                              <a href='./delete.php?id=" . $record["id"] . "'>
                                  <img src='./img/icons/b_drop.png' alt='pencil'>
                              </a>
                          </td>
                      </tr>";
      }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!--Icon for webpage-->
    <link rel="shortcut icon" href="./img/cube.ico" type="image/x-icon">
    
    <!--Page Title-->
    <title>Minecraft Wiki</title>
  </head>
  
  <body id="Body">
    <!-- Jumbotron for banner on top of the page -->
    <div id="FUCKINGCONTAINER1"></div>
      <div id="Minecraft_banner" class="jumbotron jumbotron-fluid" style="background-image: url('./img/minecraft.png');">
        <div class="container">
          <h1 class="display-4" id="Banner_subtext">Gather, Craft, Create!</h1>
        </div>
      </div>

      <!-- Navbar for webpage navigation -->
      <div class="bg-dark">
        <nav id="Nav_content" class="navbar navbar-expand-lg navbar-light bg-dark">
          <a class="navbar-brand text-light" href="./index.html">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="text-light nav-item nav-link" href="./creatorpage.php">Creator</a>
              <a class="text-light nav-item nav-link" href="./gameversions.php">Versions</a>
              <a class="text-light nav-item nav-link" href="./mods.php">Mods</a>
              <a class="text-light nav-item nav-link" href="./multiplayer.php">Multiplayer</a>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!--Main div for text-->
    <div id="Main_body_text">
      <h1 class="Paragrap_title">Titel hier</h1>
      <p class="Paragraph_text">text hier</p>
      <br>
      <h1 class="Paragrap_title">Titel hier</h1>
      <p class="Paragraph_text">text hier</p>
      <br>
      <h1 class="Paragrap_title">Titel hier</h1>
      <p class="Paragraph_text">text hier</p>
      <br>
      <h1 class="Paragrap_title">Titel hier</h1>
      <p class="Paragraph_text">text hier</p>
      <br>
      <h1 class="Paragrap_title">Titel hier</h1>
      <p class="Paragraph_text">text hier</p>
      <br>
      <h1 class="Paragrap_title">Titel hier</h1>
      <p class="Paragraph_text">text hier</p>
      <br>
    </div>

    <!--Comment section-->
    <h1>Comments</h1>
    <div class="row">
        <div class="col-6">
          <form action="./create.php" method="post">
            <div class="form-group">
              <label for="user">Username</label>
              <input type="text" class="form-control text-white bg-dark" id="username" aria-describedby="userHelp" placeholder="Username here" name="username" required>
            </div>
            
            <div class="form-group">
              <label for="commenttext">Comment</label>
              <input type="text" class="form-control text-white bg-dark" id="commenttext" aria-describedby="commentHelp" placeholder="Comment here" name="commenttext">
            </div>
          </form>
        </div>

        <!--Comment list-->
        <div class="col-12">
      <table class="table table-hover">
        <thead>
            <tr>
            <th class='generated-text' scope="col">username</th>
            <th class='generated-text' scope="col">comment</th>

            </tr>
        </thead>
        <tbody>
            <?php
                echo $records;
            ?>
        </tbody>
        </table>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>