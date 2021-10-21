<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- IMPORTANT!!! Viewport meta tag scales things appropriately for mobile. Without it, tables will be too small. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- IMPORTANT!! The selectpicker multiple function found in the modal popups is very dependent on this exact combination of bootstrap css and bootstrap-select versions.
    See for more info: https://stackoverflow.com/questions/67942546/bootstrap-5-select-dropdown-with-the-multiple-attribute-collapsed
   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
      referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css\mystyle.css">

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

<!-- Room Number -->
      <div class="album py-5 bg-light">
        <input type="text" class="d-none" id="room" name="room" />

<!-- Card Container -->
        <div class="container" id="cards">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<!-- Card 1 -->
            <div class="col">
              <div class="card shadow-sm">
                <!-- <a href="page2.html"> -->
                  <img id="stocking" class="bd-placeholder-img card-img-top" src="images\cart.jpg" class="card-img-top" />
                <!-- </a> -->
                <div class="card-body">
                  <!-- <p class="card-text text-center fs-3">Stock Problem</p> -->
                  <div class="text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-stocking">
                      Stocking
                    </button>

                    <input class="form-check-input d-none" type="checkbox" name="report[]" value="Stocking">
                 </div>
                </div>
              </div>
            </div>

<!-- Card 2 -->
            <div class="col">
              <div class="card shadow-sm">
                <!-- <a href="page2.html"> -->
                  <img id="equipment" class="bd-placeholder-img card-img-top" src="images\opthalmoscope.jpg" class="card-img-top" />
                <!-- </a> -->
                <div class="card-body">
                  <!-- <p class="card-text text-center fs-3">Stock Problem</p> -->
                  <div class="text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-equipment">
                      Equipment
                    </button>
                 </div>
                </div>
              </div>
            </div>

<!-- Card 3 -->
            <div class="col">
              <div class="card shadow-sm">
                <!-- <a href="page2.html"> -->
                  <img id="computer" class="bd-placeholder-img card-img-top" src="images\pc.jpg" class="card-img-top" />
                <!-- </a> -->
                <div class="card-body">
                  <!-- <p class="card-text text-center fs-3">Stock Problem</p> -->
                  <div class="text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-computer">
                      Computer
                    </button>
                 </div>
                </div>
              </div>
            </div>

        </div>
      </div> <!--container-->


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>



<!--Modal 1 Stocking -->
      <div class="modal fade" id="modal-stocking" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Optional: Specify items</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php\action_EnterReport.php" method="post">
              <div class="modal-body">
                  <!-- Note: name equipmentPick[] sends multiple picks as an array to php -->
                  <select name = "equipmentPick[]" id="equipmentPick" class="selectpicker" multiple aria-label="size 3 select example">
                    <option selected>General Stocking</option>
                    <option>Tongue Depressors</option>
                    <option>Tape</option>
                    <option>Syringes</option>
                    <option value= "4">Needles</option>
                  </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="saveChanges" type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

<!--Modal 2 Equipment -->
      <div class="modal fade" id="modal-equipment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Optional: Specify items</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php\action_EnterReport.php" method="post">
              <div class="modal-body">
                  <!-- Note: name equipmentPick[] sends multiple picks as an array to php -->
                  <select name = "equipmentPick[]" id="equipmentPick" class="selectpicker" multiple aria-label="size 3 select example">
                    <option>Opthalmoscope</option>
                    <option>Otoscope</option>
                    <option>Monitor</option>
                    <option>Blood Pressure Cuff</option>
                    <option>Thermometer</option>
                    <option>Cart/Gurney/Bed</option>
                  </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="saveChanges" type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

<!--Modal 3 Computer -->
      <div class="modal fade" id="modal-computer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Optional: Specify items</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php\action_EnterReport.php" method="post">
              <div class="modal-body">
                  <!-- Note: name equipmentPick[] sends multiple picks as an array to php -->
                  <select name = "equipmentPick[]" id="equipmentPick" class="selectpicker" multiple aria-label="size 3 select example">
                    <option>Epic</option>
                    <option>Other Software</option>
                    <option>Monitor</option>
                    <option>Keyboard</option>
                    <option>Mouse</option>
                    <option>PC wont Startup</option>
                  </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="saveChanges" type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

<!--Modal Get Room Number if not in URLParameters -->
      <div class="modal fade" id="roomNumber" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Enter Room Number</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="modal-body">
                <div class="form-outline">
                  <input type="number" pattern ="[0-9]*" id="roomInput" class="form-control" />
                </div>
              </div>
              <div class="modal-footer">
                <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="saveRoomNumber" type="button" class="btn btn-primary">Save Room Number</button>
              </div>
          </div>
        </div>
      </div>




    </main>





    <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
