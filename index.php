<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

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
    <div class="container d-flex flex-column align-items-center">
      <img
        src="./img/logo.png"
        width="200"
        class="mb-3"
        alt="" />
      <h2>Feedback</h2>
      <p class="lead text-center">Leave feedback for Kodego Bootcamp</p>
      <form
        action="includes/form_handler.php"
        class="mt-4 w-75"
        method="POST">
        <div class="mb-3">
          <label
            for="name"
            class="form-label">Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Enter your name" />
        </div>
        <div class="mb-3">
          <label
            for="email"
            class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Enter your email" />
        </div>
        <div class="mb-3">
          <label
            for="body"
            class="form-label">Feedback</label>
          <textarea
            class="form-control"
            id="body"
            name="body"
            placeholder="Enter your feedback"></textarea>
        </div>
        <div class="mb-3">
          <input
            type="submit"
            name="submit"
            value="Submit"
            class="btn btn-dark w-100" />
        </div>
      </form>
    </div>
  </main>

  <footer class="text-center mt-5">Copyright &copy; 2024</footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>