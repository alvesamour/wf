<?php
$title = 'Tag be sill Registration';

$nicknameError = '';
if (! empty($errors['nickname'])) {
    $nicknameError = '<ul class="alert alert-danger" role="alert">';
    foreach ($errors['nickname'] as $errorText) {
        $nicknameError .= '<li>' . $errorText . '</li>';
    }
    $nicknameError .= '</ul>';//si nickname erreur
}
$password1Error = '';
if (! empty($errors['Password1'])) {
    $password1Error = '<ul class="alert alert-danger" role="alert">';
    foreach ($errors['Password1'] as $errorText) {
        $password1Error .= '<li>' . $errorText . '</li>';
    }
    $password1Error .= '</ul>';
}
$password2Error = '';
if (! empty($errors['Password2'])) {
    $password2Error = '<ul class="alert alert-danger" role="alert">';
    foreach ($errors['Password2'] as $errorText) {
        $password2Error .= '<li>' . $errorText . '</li>';
    }
    $password2Error .= '</ul>';
}

$nickname = $_POST['nickname'] ?? '';//pas besoin de retapper nickname si erreur dans le login

if (isset($success) && $success) {
    $success = '<p class="alert alert-success">Your account was successfully created</p>';
} else {
    $success = '';
}

$content = <<<EOT
<div class="container">
    $success
<form method="POST">
  <div class="form-group">
    <label for="exampleName">User</label>
    <input type="text" class="form-control" name="nickname" id="nickname" aria-describedby="emailHelp" placeholder="Username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
    $nicknameError
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="Password1" id="Password1" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
    $password1Error
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Retype your Password</label>
    <input type="password" class="form-control" name="Password2" id="Password2" placeholder="Password Confirm">
    $password2Error
  </div>
<a href="/">
    <button type="button" class="btn btn-success">Back</button>
</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
EOT;

include __DIR__ . '/Base.html.php';
