<?php require_once __DIR__ . '/partials/get-customers.php'; ?>

<!-- head -->
<?php require_once __DIR__ . '/partials/templates/head.php';?>

<body>
    <main class="container">
        <h1 class='my-5'>Customers</h1>

        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php 
                if(!empty($customers)){                
                    foreach($customers as $customer) { ?>
                        <tr> 
                            <td><?php echo $customer['id']; ?> </td>
                            <td><?php echo $customer['name']; ?> </td>
                            <td><?php echo $customer['lastname']; ?> </td>
                            <td>
                                <a href="./details.php?id=<?php echo $customer['id'];?>">details</a>
                            </td>
                        </tr>

                    <?php } 
                    }?>
            </tbody>
        </table>
    </main>












</body>
</html>