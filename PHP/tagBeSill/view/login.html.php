<?php
$title = 'Tag be sill Login';

if (isset($success) && $success) {
    $success = '<p class="alert alert-success">Login accepted</p>';
} else {
    $success = '';
}

if (isset($error) && $error) {
    $error = '<p class="alert alert-warning">Login failed</p>';
} else {
    $error = '';
}

$content = <<<EOT
<div class="container">
    $success
    $error
    <h2>Login</h2>
    <p>Please fill in your credentials to login.</p>
<form method="POST">
  <div class="form-group">
    <label for="exampleName">User</label>
    <input type="text" class="form-control" name="nickname" id="nickname" aria-describedby="emailHelp" placeholder="Username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="Password" id="Password" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
    
  </div>
<a href="/">
    <button type="button" class="btn btn-success">Back</button>
</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
EOT;

include __DIR__ . '/Base.html.php';
