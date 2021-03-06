
<head>
  <meta charset="UTF-8">
  <title>Sport Club</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>

  <?php
  if (!isset($_SESSION["user"])) {
    session_start();
  }
  if (($_SESSION == null)) {
    include 'Views/header.php';
  } else if ($_SESSION["user"]["admin"] == '1') {
    include 'Views/view_header_admin.php';
  } else if ($_SESSION["user"]["admin"] == '0') {
    include 'Views/header.php';
  }
  ?>
  <main>
    <?php
    if (isset($_GET['c'])) {
      include "Controller/" . $_GET['c'] . ".php";
    } else {
      include 'Views/home.php';
    }
    ?>
  </main>
  <?php include 'Views/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
	  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
	  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
  crossorigin="anonymous"></script>

</body>

