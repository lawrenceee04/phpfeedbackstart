<?php
require_once "includes/db_connect.php";

$sql = "SELECT * FROM phpfeedbackstart.feedback";

$result = $conn->query($sql);

$dayOfTheWeek = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta
    http-equiv="X-UA-Compatible"
    content="IE=edge" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <title>Leave Feedback</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a
        class="navbar-brand"
        href="#">Kodego Bootcamp</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse"
        id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a
              class="nav-link"
              href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="./feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="./about.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container text-center">
      <h2>Feedbacks</h2>
      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

          date_default_timezone_set('Asia/Taipei');
          $datetime = date_create($row['datetime']);
          $time = date_format($datetime, 'g:i A');
          $date = date_format($datetime, 'l jS F Y');
          echo "<div class='card my-3'>
          <div class='card-body'>
            <p class='card-text'>" . $row['body'] . "</p>
            <p class='card-title'>" . $row['name'] . " wrote on " . $time . " on " . $date . "</p>
          </div>
        </div>";
        }
      } else {
        echo "<p class='my-4'>No feedbacks received yet.</p>";
      }
      ?>
    </div>
  </main>

  <footer class="text-center mt-5">Copyright &copy; 2023</footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>