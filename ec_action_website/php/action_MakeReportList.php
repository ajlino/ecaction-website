<?php
  //Here we can include our database connection in order to access it further down the page
  include 'dbh.inc.php';
  $sql = "SELECT * FROM ecstock WHERE status ='ACTIVE'";
	$result = mysqli_query($conn, $sql) or die("database error:".mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- IMPORTANT!!! Viewport meta tag scales things appropriately for mobile. Without it, tables will be too small. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

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
          <a href="../index.php" class="navbar-brand d-flex align-items-center">
            <svg width="30" height="30" class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.5 63"><polygon points="26.5 29 14 29 21 0 0 34 20.06 34 26.5 29" style="fill:#bfbfbf"/><polygon points="0 34 12.5 34 5.5 63 26.5 29 6.44 29 0 34" style="fill:#bfbfbf"/></svg>
            <strong>EC Action</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
    <!-- <div class="col-lg-12">
    <div class="table-responsive"> -->

    <table class = "table table-bordered">
      <thead>
        <tr>
          <th scope='col'>Room</th>
          <th scope='col'>Report</th>
          <th scope='col'>Date Time</th>
          <th scope='col'>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <form action = 'action_clearRow.php' method='post'>
            <tr>
              <th scope='col'><?php echo $row['room']; ?></td>
              <th scope='col'><?php echo $row['report']; ?></td>
              <th scope='col'><?php echo $row['tim']; ?></td>
              <th scope='col'><button type='submit' class = 'btn-danger'
                name='report_id' value='"+<?php echo $row['report_id']; ?>+"'>Clear</button></td
            </tr>
          </form>
        <?php } ?>
      </tbody>
    </table>
    <!-- </div>
    </div> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>
