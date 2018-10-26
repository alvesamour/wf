<?php
$title = 'Tag be sill Registration';



$content = <<<EOT
<div class="container">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">User</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Retype your Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password Confirm">
  </div>
<a href="/">
    <button type="button" class="btn btn-success">Back</button>
</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
EOT;



include __DIR__ . '/Base.html.php';
