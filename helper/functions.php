<?php
function addRecord($name, $email)
{
    global $conn;
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);

    $query = "INSERT INTO records (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $query);
}

function updateRecord($id, $name, $email)
{
    global $conn;
    $id = (int)$id;
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);

    $query = "UPDATE records SET name = '$name', email = '$email' WHERE id = $id";
    mysqli_query($conn, $query);
}

function deleteRecord($id)
{
    global $conn;
    $id = (int)$id;

    $query = "DELETE FROM records WHERE id = $id";
    mysqli_query($conn, $query);
}

function getRecords()
{
    global $conn;

    $query = "SELECT * FROM records";
    $result = mysqli_query($conn, $query);

    $records = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $records[] = $row;
    }

    return $records;
}

function displayRecords($records)
{
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>';

    foreach ($records as $record) {
        echo '<tr>';
        echo '<td>' . $record['id'] . '</td>';
        echo '<td>' . $record['name'] . '</td>';
        echo '<td>' . $record['email'] . '</td>';
        echo '<td>
                <form method="post">
                    <input type="hidden" name="id" value="' . $record['id'] . '">
                    <input type="submit" name="update" value="Update">
                    <input type="submit" name="delete" value="Delete">
                </form>
              </td>';
        echo '</tr>';
    }

    echo '</table>';
}
