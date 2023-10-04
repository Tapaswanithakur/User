<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="styles.css" />
    <title>Users List</Form></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            width: 80%;
            margin: 0 auto; /* Center the table horizontally */
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
  </head>
  <body>

  <header>
        <div class="web logo">
            <img src="logo.png" alt="Company Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="allUsers.php">All Users</a></li>
            </ul>
        </nav>
    </header>
<main>
      <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email Id</th>
                <th>User Type</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include "database.php";
        $sql = "select * FROM users";

        $result = $conn->query($sql);

        
        if ($result->num_rows > 0) {
           
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["user_id"] . "</td>";
                echo "<td>" . $row["user_name"] . "</td>";
                echo "<td>" . $row["user_email"] . "</td>";
                echo "<td>" . $row["user_type"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No data available</td></tr>";
        }

        $conn->close();
        ?>
    </tbody>
    <main>
    <!-- <footer>
        &copy; <?php echo date("Y"); ?> Your Company Name. All rights reserved.
    </footer> -->
</body>
</html>