<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLUSH ND GLOW</title>
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
                <h1>ADD NEW CATEGORY</h1>
            </div>

            <div class="hamburger-admin">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="container dashboard-boxes-parent my-5 py-5">
                <div class="main">
                    <div class="content">
                        <form method="POST">
                            <label for="username">Category Name</label>
                            <input type="text" placeholder="Add New Category Here" name="newcat" required>

                            <button class="button" type="submit" name="addcat" required>Add New Category</button>
                        </form>
                    </div>

                    <!-- PHP Part  -->

                    <?php

                    if (isset($_POST['addcat'])) {

                        $newcat = $_POST['newcat'];

                        $sqlnewcat = "INSERT INTO `categories`(`category_name`) VALUES ('$newcat')";

                        $resultnewcat = mysqli_query($conn, $sqlnewcat);

                        if ($resultnewcat == true) {
                            $new_category_id = $conn->insert_id;
                        } else {
                            echo "Error creating category: " . mysqli_error($conn);
                        }

                        // Create the new file
                        $new_category_file = "cat" . $new_category_id . ".php";

                        if (file_put_contents($new_category_file, file_get_contents("category_template.php"))) {
                            // File created successfully
                    
                            // Open the file in write mode
                            $file = fopen($new_category_file, "w");

                            // Write the variables at the beginning
                            fwrite($file, "<?php \$category_name = '$newcat'; \$category_id = $new_category_id; ?>");

                            // Append the template content
                            fwrite($file, file_get_contents("category_template.php"));

                            // Close the file
                            fclose($file);

                            // Redirect to the new category page
                            header("Location: cat" . $new_category_id . ".php");
                        }

                    } 
                    ?>


                    <div class="container products-data">
                        <div class="heading">
                            <h1>CATEGORIES DATA</h1>
                        </div>

                        <div class="products-data-table">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1.5">id</th>
                                        <th>category_name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $allcat = "SELECT * FROM `categories`";
                                    $resultallcat = mysqli_query($conn, $allcat);
                                    while ($rowcat = mysqli_fetch_array($resultallcat)) { ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $rowcat['id']; ?>
                                            </th>
                                            <th scope="row">
                                                <?php echo $rowcat['category_name']; ?>
                                            </th>
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

        </div>

    </div>

    <script src="./script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>