<?php
    require_once 'settings.php';

    if ($dbconn) {
        // Step 2: Create your SQL query
        $query = "SELECT * FROM cars";
    
        // Step 3: Execute your SQL query
        $result = mysqli_query($dbconn, $query);
        if ($result) {
            // Step 5: Show results in HTML table
            echo "<table border='1'>";
            echo "<tr><th>Car ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['car_id']}</td>";
                echo "<td>{$row['make']}</td>";
                echo "<td>{$row['model']}</td>";
                echo "<td>{$row['price']}</td>";
                echo "<td>{$row['yom']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            mysqli_free_result($result);
        } else {
            echo "<p>Query failed.</p>";
        }

        // Step 6: Close connection
        mysqli_close($dbconn);
}else {
        echo "<p>Unable to connect to the database.</p>";
    }
?>