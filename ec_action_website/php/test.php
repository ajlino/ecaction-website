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
    <title></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  </head>
  <body>

    <table class = "table">
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


  </body>
</html>
