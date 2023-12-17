<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP CRUD Application</title>
</head>

<body>
    <h1>PHP CRUD Application</h1>

    <?php
    // Include configuration and helper functions
    require_once 'helper/config.php';

    // Handling CRUD operations
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            addRecord($name, $email);
        } elseif (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            updateRecord($id, $name, $email);
        } elseif (isset($_POST['delete'])) {
            $id = $_POST['id'];
            deleteRecord($id);
        }
    }

    // Display records
    $records = getRecords();
    displayRecords($records);

    // Include the form for adding/updating records
    include 'helper/form.php';
    ?>

</body>

</html>