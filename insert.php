<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashley's Website - Module 10</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Nav Bar-->
        <nav id="navbar">
            <div id="site-logo">
                <span style="font-size: xx-large"><a href="index.html">Ashley's Site</a></span>
            </div>
            <div id="navlinks">
                <a href="index.html">Home</a>
                <a href="module3.html">Module 3</a>
                <a href="module4.html">Module 4</a>
                <a href="module5.html">Module 5</a>
                <a href="module6_7.php">Module 6/7</a>
                <a href="module8.html">Module 8</a>
                <a href="module8.html">Module 10</a>
            </div>
        </nav>

            <?php
            $servername = "sql301.infinityfree.com";
            $username = "if0_35788056";
            $password = "R0scoestinks";
            $dbname = "if0_35788056_module10";

            // Create connection
            $conn = new mysqli($sql301.infinityfree.com, $if0_35788056, $R0scoestinks, $if0_35788056_module10);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO Students (FirstName, LastName, Email)
            VALUES ('John', 'Doe', 'john@example.com')";

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            ?>
    </div>

    <!-- Footer -->
    <div class="copyright">
        © 2024 Ashley Graham</a>
    </div>

</body>
</html>