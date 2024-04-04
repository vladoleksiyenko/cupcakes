<?php

$user_name = $_POST['user-name'];
$flavors = $_POST['flavor'];

$count = count($flavors);

$total = 3.50 * $count;

echo "
    <div class='receipt'>
        <h1>Thank you for your order, $user_name!</h1>
        <h2>Order Summary</h2>
    </div>
";

foreach ($flavors as $flavor) {
    echo("
        <li>$flavor</li>
    ");
}

echo "Order Total: $total";

?>