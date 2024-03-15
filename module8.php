<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ashley's Website - Module 8</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            </div>
        </nav>

            <!-- Header -->
            <header id="header">
                <center>
                    <h1>Module 8</h1>
                </center>
            </header>

            <!-- Main -->
            <section id="main">

                <center>
                    <h2>Thank you, <?php echo $_POST["fname"]; ?>, your submission was successful!</h2>
                    <br><br>
                    <h2>Submitted form details:</h2>
                    <b>First Name:</b> <?php echo $_POST["fname"]; ?>
                    <br>
                    <b>Last Name:</b> <?php echo $_POST["lname"]; ?>
                    <br>
                    <b>Phone:</b> <?php echo $_POST["phone"]; ?>
                    <br>
                    <b>Email:</b> <?php echo $_POST["email"]; ?>
                    <br>
                    <b>Subject:</b> <?php echo $_POST["subject"]; ?>
                    <br>
                    <b>Message:</b> <?php echo $_POST["message"]; ?>
                    <br>
                    <b>Preferred Contact Method:</b> 
                    <br>
                    <?php 
                    if (isset($_POST["pref_contact"])) {
                        $pref_contact = $_POST["pref_contact"];
                        if ($pref_contact == "phone") {
                            echo "Phone";
                        } else if ($pref_contact == "email") {
                            echo "Email";
                        }
                    } else {
                        echo "No preference specified.";
                    }
                    ?>
                </center>

            </section>

    </div>

    <!-- Footer -->
    <div class="copyright">
        © 2024 Ashley Graham | Made with: <a href="https://templated.co/">Templated.co</a>
    </div>

</body>

</html>