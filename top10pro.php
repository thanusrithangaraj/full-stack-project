<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./adminstyle.css">
    <link rel="stylesheet" href="./whiteform.css">
</head>

<body>

    <div class="admin-dashboard-parent">

        <?php include('admin-sidebar.php') ?>

        <div class="admin-panel">

            <div class="container my-4 admin-header">
                <h1>TOP 10 PRODUCTS</h1>
            </div>

            <div class="hamburger-admin">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="container products-data">

                <div class="products-data-table mb-5">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="row">PRODUCTS ID</th>
                                <th scope="row">PRODUCTS NAME</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `products` ORDER BY id DESC LIMIT 10 OFFSET 20";
                            $top10p = mysqli_query($conn, $sql);
                            while ($rowtopp = mysqli_fetch_array($top10p)) { ?>
                                <tr>
                                    <td scope="row">
                                        <?php echo $rowtopp['id']; ?>
                                    </td>
                                    <td scope="row">
                                        <?php echo $rowtopp['product_name']; ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>


    <script src="./script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>