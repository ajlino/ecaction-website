<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- IMPORTANT!!! Viewport meta tag scales things appropriately for mobile. Without it, tables will be too small. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js\getURLParameters.js"></script>
    <script src="js\buttonToggle.js"></script>

  <title>EC MAINTENANCE REPORT</title>
  </head>
  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">The EC Action site is a tool to log and organize common maintenance issues that occur in the emergency center resulting in efficient and timely restocking and repairs. </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Info</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Common Phone Numbers</a></li>
                <li><a href="#" class="text-white">Stock Info</a></li>
                <li><a href="#" class="text-white">Procedures</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
            <svg width="30" height="30" class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.5 63"><polygon points="26.5 29 14 29 21 0 0 34 20.06 34 26.5 29" style="fill:#bfbfbf"/><polygon points="0 34 12.5 34 5.5 63 26.5 29 6.44 29 0 34" style="fill:#bfbfbf"/></svg>
            <strong>EC Action</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main>

      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light" id="demo"></h1>
            <p class="lead text-muted">To make a report, select one or multiple categories. </br> Hit Submit to send the report. </p>
            <p>
              <a href="php\action_MakeReportList.php" class="btn btn-primary my-2">Action List</a>
              <a href="#" class="btn btn-secondary my-2">Send Message</a>
            </p>
          </div>
        </div>
      </section>

      <!-- Cards -->

      <div class="album py-5 bg-light">

      <form action="php\action_EnterReport.php" method="post">
        <input type="text" class="d-none" id="room" name="room" />

        <div class="container" id="cards">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <!-- Card 1 -->
            <div class="col">
              <div class="card shadow-sm">

                <!-- <a href="page2.html"> -->
                  <img id="equipment" class="bd-placeholder-img card-img-top" src="images\cart.jpg" class="card-img-top" />
                <!-- </a> -->

                <div class="card-body">
                  <!-- <p class="card-text text-center fs-3">Stock Problem</p> -->
                  <div class="text-center">
                    <button type="button" class="btn btn-light reportButton" value="Stocking" data-checked = "false">Stocking Problem</button>
                    <input class="form-check-input d-none" type="checkbox" name="report[]" value="Stocking">
                 </div>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
              <div class="card shadow-sm">

                <!-- <a href="page2.html"> -->
                  <img class="bd-placeholder-img card-img-top" src="images\opthalmoscope.jpg" class="card-img-top" />
                <!-- </a> -->

                <div class="card-body">
                  <!-- <p class="card-text text-center fs-3">Stock Problem</p> -->
                  <div class="text-center">
                    <button type="button" class="btn btn-light reportButton" value="Equipment" data-checked = "false">Equipment Problem</button>
                    <input class="form-check-input d-none" type="checkbox" name="report[]" value="Equipment">
                  </div>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
              <div class="card shadow-sm">

                <!-- <a href="page2.html"> -->
                  <img class="bd-placeholder-img card-img-top" src="images\pc.jpg" class="card-img-top" />
                <!-- </a> -->

                <div class="card-body">
                  <!-- <p class="card-text text-center fs-3">Stock Problem</p> -->
                  <div class="text-center">
                    <button type="button" class="btn btn-light reportButton" value="Computer" data-checked = "false">Computer Problem</button>
                    <input class="form-check-input d-none" type="checkbox" name="report[]" value="Computer">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row mt-5">
              <button type="submit" class="btn btn-primary text-">Submit</button>
            </div>
          </div>

        </div>
      </form>

      </div>

      <!--Modal 1 Equipment -->
      <div class="modal fade" id="modal-equipment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    </main>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>
