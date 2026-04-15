<?php


$names = require __DIR__ . '/../src/Data/names.php';
require __DIR__ . '/../src/Helpers/functions.php';


$totalnames = count($names);
$totalQuantity = getTotalQuantity($names);
$availablenames = getAvailablenames($names);
$availableCount = count($availablenames);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>names</title>
</head>
<body>
    <h1>Library names</h1>


    <h2>Statistics</h2>
    <ul>
        <li>Total products: <?php echo $totalnames; ?></li>
        <li>Total stock: <?php echo $totalQuantity; ?></li>
        <li>Available products: <?php echo $availableCount; ?></li>
    </ul>


    <h2>name List</h2>


    <?php foreach ($names as $name): ?>
        <div style="margin-bottom: 16px; padding: 8px; border: 1px solid #ccc;">
            <p><strong>Title:</strong> <?php echo formatnameTitle($name['name']); ?></p>
            <p><strong>Name:</strong> <?php echo $name['name']; ?></p>
            <p><strong>Group:</strong> <?php echo $name['group']; ?></p>
            <p><strong>Quantity:</strong> <?php echo $name['quantity']; ?></p>
            <p><strong>Status:</strong> <?php echo getStockStatus($name['quantity']); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>