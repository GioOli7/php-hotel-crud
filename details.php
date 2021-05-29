<!-- head -->
<?php 
    require_once __DIR__ . '/partials/get-customer-details.php';
    require_once __DIR__ . '/partials/templates/head.php';
?>


<body>
    <main class="container">

        <?php if(!empty($customer)) { ?>
            <h1 class='my-5'>Detail of <?php echo $customer['name'] ?> <?php echo $customer['lastname'] ?></h1>

            <ul>
                <li>Date of Birth: <?php echo $customer['date_of_birth'] ?> </li>
                <li>Document Type: <?php echo $customer['document_type'] ?> </li>
                <li>Document Number: <?php echo $customer['document_number'] ?> </li>
            </ul>

        <?php } else { ?>
                <h2 class='my-5'>No customer found</h2>
        <?php } ?>

        <a href="./index.php">Back to Home</a>
    </main>
</body>