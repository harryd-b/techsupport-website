<?php
require_once __DIR__ . '/src/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>IT Support Services</title>
<link rel="stylesheet" href="/assets/bootstrap.min.css">
<style>
body { background-color: #f0f2f5; font-family: Arial, sans-serif; }
.header, .footer { background: #212529; color: #fff; padding: 15px; text-align: center; }
.service-card { background: #fff; border:1px solid #ddd; border-radius:4px; padding:20px; margin-bottom:20px; }
.button-subscribe { background:#28a745; color:#fff; padding:10px 15px; text-decoration:none; border-radius:4px; }
.button-subscribe:hover { background:#218838; }
</style>
</head>
<body>
<div class="header">
    <h1>Professional IT Support Services</h1>
</div>
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-4 service-card">
            <h3>Monthly Subscription (£11.50/month)</h3>
            <p>24/7 AI-powered helpdesk. Expert advice at your fingertips!</p>
            <p>Telephone Support: £1/min. On-site: £150/hour.</p>
            <a class="button-subscribe" href="/register.php">Subscribe Now</a>
        </div>
        <div class="col-md-4 service-card">
            <h3>Instant Remote Support</h3>
            <p>Urgent fixes for Mac, Windows, and Mobile. Fast and Reliable.</p>
        </div>
        <div class="col-md-4 service-card">
            <h3>On-Site Repairs</h3>
            <p>Professional, transparent, and quick on-site service.</p>
        </div>
    </div>
</div>
<div class="footer">
    <p>&copy; <?php echo date('Y'); ?> Tech Support Services</p>
</div>
</body>
</html>
