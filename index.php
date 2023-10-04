<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Registration</title>
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
        <div class="container">
            <h2>User Registration</h2>
            <form action="uploadData.php" method="POST" id = "registration_id">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
              <label for="usertype">Department:</label>
              <select id="usertype" name="usertype" required>
                  <option value="Super Admin">HR</option>
                  <option value="Admin">SALES</option>
                  <option value="User">IT</option>
              </select>
          </div>
          <input type="submit" value="Submit">
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>