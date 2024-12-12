<?php
require_once __DIR__ . '/../src/bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="/assets/bootstrap.min.css"></head>
<body class="p-4">
<h1>Register for Subscription</h1>
<form method="post" action="/handle_register.php">
    <div class="form-group"><label>Full Name</label><input type="text" name="fullname" class="form-control" required></div>
    <div class="form-group"><label>Email</label><input type="email" name="email" class="form-control" required></div>
    <div class="form-group"><label>Password</label><input type="password" name="password" class="form-control" required></div>
    <div class="form-group"><label>Payment Details (Card)</label><input type="text" name="ccnum" class="form-control" placeholder="**** **** **** ****" required></div>
    <div class="form-group"><label>Requirements</label><textarea name="requirements" class="form-control"></textarea></div>
    <button class="btn btn-primary" type="submit">Register & Pay £11.50</button>
</form>
</body>
</html>
