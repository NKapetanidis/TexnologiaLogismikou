<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css">
<title>Kolokithaki</title>
</head>
<?php
include "../header.php"
?>

<body class="bg-light">
  <form class="d-flex" action="../upload_recipe/index.php">
      <button class="btn btn-outline-success rounded-0" type="submit">Αναζήτηση</button>
  </form>
  <div class="mycontainer">
    <h1 class="text-center">Νέες συνταγές</h1><br>
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-4">
        <div class="p-3 border bg-light">
          Συνταγή 1
        </div>
      </div>
      <div class="col-sm-4">
        <div class="p-3 border bg-light">
          Συνταγή 2
        </div>
      </div>
      <div class="col-sm-4">
        <div class="p-3 border bg-light">
          Συνταγή 3
        </div>
      </div>
      <div class="col-sm-4">
        <div class="p-3 border bg-light">
          Συνταγή 4
        </div>
      </div>
      <div class="col-sm-4">
        <div class="p-3 border bg-light">
          Συνταγή 5
        </div>
      </div>
      <div class="col-sm-4">
        <div class="p-3 border bg-light">
          Συνταγή 6
        </div>
      </div>
  </div>
</div>

<div class="mycontainer">
  <h1 class="text-center">Οι κατηγορίες μου</h1><br>
  <div class="row justify-content-center align-items-center">
    <div class="col-sm-4">
      <div class="p-3 border bg-light">
        Κατηγορία 1
      </div>
    </div>
    <div class="col-sm-4">
      <div class="p-3 border bg-light">
        Κατηγορία 2
      </div>
    </div>
    <div class="col-sm-4">
      <div class="p-3 border bg-light">
        Κατηγορία 3
      </div>
    </div>
    <div class="col-sm-4">
      <div class="p-3 border bg-light">
        Κατηγορία 4
      </div>
    </div>
    <div class="col-sm-4">
      <div class="p-3 border bg-light">
        Κατηγορία 5
      </div>
    </div>
    <div class="col-sm-4">
      <div class="p-3 border bg-light">
        Κατηγορία 6
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
<?php
include "../footer.php"
?>
</html>
