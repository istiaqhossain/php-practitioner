<?php require('partials/header.view.php'); ?>

<div class="jumbotron">
  <h2 class="display-4 text-center">Home</h2>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">
      <form class="" method="POST" action="/names">
        <div class="form-group mx-sm-3 mb-2">
          <label for="username" class="sr-only">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Push</button>
      </form>
    
    </div>
  </div>
</div>

<?php require('partials/footer.view.php'); ?>