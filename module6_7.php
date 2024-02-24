<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashley's Website - Module 6 & 7</title>
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
            </div>
        </nav>

            <!-- Header -->
            <header id="header">
                <center>
                    <h1>Module 6 & 7</h1>

                    <?php
                    echo "Hi, I'm a PHP script! Here is a list of grades along with the average passing grade.";
                    ?>
                </center>
            </header>


            <!-- Main -->
            <section id="main">
                <center>

                    <?php
                // Function to calculate average passing grade (above or equal to 60)    
                function calculateAverage($grades) {
                    // Initialize variables
                    $sum = 0;
                    $count = 0;

                    foreach ($grades as $grade) {
                        // Check if the grade is above or equal to 60
                        if ($grade >= 60) {
                            // Add grade to sum
                            $sum += $grade;
                            // Add grade to total count
                            $count++;
                        }
                    }

                    // Calculate average grades above or equal to 60
                    if ($count > 0) {
                        $average = $sum / $count;
                    }
                    return $average;
                }

                $grades = [85, 94, 100, 36, 60, 72, 45, 98, 85, 52];
                $average = calculateAverage($grades);

                // Print list of grades
                echo "All grades: <br>";
                foreach ($grades as $grade) {
                    echo $grade . "<br>";
                }
                
                // Print average grade above or equal to 60
                echo "Average passing grade (above or equal to 60): $average";
                ?>
            </section>      

    <!-- Footer -->
    <div class="copyright">
        © 2024 Ashley Graham</a>
    </div>

</body>
</html>