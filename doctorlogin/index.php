<?php
$host    = "localhost";
$user    = "root";
$pass    = "1234";
$db_name = "ehospital";

// Create connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = mysqli_connect($host, $user, $pass, $db_name);

// Get results from the database
$result = mysqli_query($connection, "SELECT * FROM appointment");

// Get column names
$columns = [];
while ($property = mysqli_fetch_field($result)) {
    $columns[] = $property->name;
}
echo '<div class="hero-image">
<div class="container">
  <h1>Doctor Dashboard</h1>
</div>
</div>';
// Start building the HTML table
echo '<table class="data-table">
        <thead>
            <tr class="data-heading">';

// Display dropdown for the delete button column
echo '<th>
        DROP';


echo '</select>
      </th>';

// Display table headers
foreach ($columns as $column) {
    echo '<th>' . htmlspecialchars($column) . '</th>';
}
echo '</tr>
        </thead>
        <tbody>';

// Display table data
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    // Display dropdown for the delete button
    echo '<td>
            <form method="post" action="delete.php">
                <input type="hidden" name="appointment_id" value="' . $row['id'] . '">
                <button type="submit">Delete</button>
            </form>
          </td>';
    // Display table data
    foreach ($row as $item) {
        echo '<td>' . htmlspecialchars($item) . '</td>';
    }
    echo '</tr>';
}

// Close the HTML table
echo '</tbody>
      </table>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 100%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            margin: 0;
            font-size: 32px;
            text-align: center;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #c0392b;
        }


    </style>
    </style>
</head>
<body>
    
</body>
</html>
