<!DOCTYPE HTML>
<html>

<head>
    <title>Ashley's Website - Module 8</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">

    <script>
        function validateForm() {
            var fName = document.forms["myForm"]["fname"].value;
            var lName = document.forms["myForm"]["lname"].value;
            var phone = document.forms["myForm"]["phone"].value;
            var email = document.forms["myForm"]["email"].value;
            var msg = document.forms["myForm"]["message"].value;

            if (fName == "") {
                alert("Please enter your first name");
                return false;
            }
            if (lName == "") {
                alert("Please enter your last name");
                return false;
            }
            if (phone == "") {
                alert("Please enter your phone number");
                return false;
            }
            if (!validatePhone(phone)) {
                alert("Please enter a valid phone number (i.e. 123-456-7890)");
                return false;
            }
            if (email == "") {
                alert("Please enter your email address");
                return false;
            }
            if (!validateEmail(email)) {
                alert("Please enter a valid email address (i.e. youremail@website.com)");
                return false;
            }
            if (msg == "") {
                alert("Please enter a message");
                return false;
            }

            alert("Thank you, your form has been submitted!");
            return true;
        }

        function validatePhone(phone) {
            // Regular expression to validate phone number format   
            var re = /^\(?\d{3}\)?[- ]?\d{3}[- ]?\d{4}$/;

            // Check if the phone number matches the regular expression
            return re.test(phone);
        }

        function validateEmail(email) {
            // Regular expression to validate email address format
            var re = /\S+@\S+\.\S+/;

            // Check if the email address matches the regular expression
            return re.test(email);
        }

    </script>

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
                Thank you, <?php echo $_POST["fname"]; ?>, your submission was successful!
                <br>
                Submitted form details:
                <br>
                First Name: <?php echo $_POST["fname"]; ?>
                Last Name: <?php echo $_POST["lname"]; ?>
                Phone: <?php echo $_POST["phone"]; ?>
                Email: <?php echo $_POST["email"]; ?>
                Subject: <?php echo $_POST["subject"]; ?>
                Message: <?php echo $_POST["message"]; ?>
                Preferred Contact Method: <?php echo $_POST["pref_contact"]; ?>
            </center>

        </section>

    </div>

    <!-- Footer -->
    <div class="copyright">
        © 2024 Ashley Graham | Made with: <a href="https://templated.co/">Templated.co</a>
    </div>

</body>

</html>