<?php
include "../header.php"
?>

<body class="bg-light">

  <div class="recipe-form justify-content-center align-items-center">
      <form action="../includes/rec_upload.inc.php" method="post" class="form-horizontal">
        	<div class="row">
          	<div class="col-8 offset-4">
  				<h2>Δημιουργία συνταγής</h2>
  			</div>
        	</div>
          <div class="form-group row">
      			<label class="col-form-label col-4">Όνομα συνταγής</label>
      			<div class="col-8">
              <input type="text" id="r_name" name="r_name" class="form-control">
            </div>
          </div>
      <!--
  		<div class="form-group row">
  			<label class="col-form-label col-4">Συστατικά</label>
  			<div class="col-8">
          <input type="text" id="r_ing" class="form-control" name="r_ing">
        </div>
      </div>
    -->
  		<div class="form-group row">
  			<label class="col-form-label col-4 textarea">Εκτέλεση</label>
  			<div class="col-8">
          <textarea class="form-control" name="r_desc" id="r_desc" ></textarea>
        </div>
      </div>
  		<div class="form-group row">
  			<div class="col-8 offset-4">
  				<button type="submit" name="submit" class="btn btn-primary btn-lg">Δημιουργία</button>
  			</div>
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
