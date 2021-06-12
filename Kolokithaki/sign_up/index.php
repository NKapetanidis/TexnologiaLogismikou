<?php
include "../header.php"
?>

<body class="bg-light">

  <div class="signup-form justify-content-center align-items-center">
      <form action="../includes/signup.inc.php" method="post" class="form-horizontal">
        	<div class="row">
          	<div class="col-8 offset-4">
  				<h2>Εγγραφή</h2>
  			</div>
        	</div>
          <div class="form-group row">
  			<label class="col-form-label col-4">Όνομα Χρήστη</label>
  			<div class="col-8">
                  <input type="text" id="uid" class="form-control" name="uid">
              </div>
          </div>
  		<div class="form-group row">
  			<label class="col-form-label col-4">Διεύθυνση email</label>
  			<div class="col-8">
                  <input type="email" id="email" class="form-control" name="email">
              </div>
          </div>
  		<div class="form-group row">
  			<label class="col-form-label col-4">Κωδικός</label>
  			<div class="col-8">
                  <input type="password" id="pwd" class="form-control" name="pwd">
              </div>
          </div>
  		<div class="form-group row">
  			<label class="col-form-label col-4">Επιβεβαίωση κωδικού</label>
  			<div class="col-8">
                  <input type="password" id="pwdrepeat" class="form-control" name="pwdrepeat">
              </div>
          </div>
  		<div class="form-group row">
  			<div class="col-8 offset-4">
  				<p><label class="form-check-label"><input type="checkbox" > Συμφωνώ με <a href="#">Όρους Χρήσης</a> &amp; <a href="#">Πολιτική Απορρήτου</a>.</label></p>
  				<button type="submit" name="submit" class="btn btn-primary btn-lg">Εγγραφή</button>
  			</div>
  		</div>
      <div class="form-group row">
        <?php
          include "../includes/errorsSign.inc.php"
        ?>
      </div>
      </form>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
<?php
include "../footer.php"
?>
</html>
