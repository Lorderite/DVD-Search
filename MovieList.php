<!DOCTYPE html>
    <head>
        <title>Movie Rentals</title>
        <link rel="stylesheet" type="text/css" href="Rentalcss.css"/>
    </head>

    <body>
        <header>
            <?php
                require_once'nav.php'; 
            ?>
        </header>

        <div class="container">
            <div class="content">
                <h1>Movie List:</h1>

                <?php 
                    require'Connection.php';

                    $sql = "SELECT * FROM movies_tbl";

                    //Make query and get result
                    $result = mysqli_query($conn, $sql);

                    //Create table
                    echo "<table border = '1' align = 'center'>";
                    echo "<th> &nbsp ID &nbsp</th>" 
                    . "<th> &nbsp Title &nbsp</th>" 
                    . "<th> &nbsp Studio &nbsp</th>"
                    . "<th> &nbsp Status &nbsp</th>"
                    . "<th> &nbsp Sound &nbsp</th>"
                    . "<th> &nbsp Versions &nbsp</th>"
                    . "<th> &nbsp RecRetPrice &nbsp</th>"
                    . "<th> &nbsp Rating &nbsp</th>"
                    . "<th> &nbsp Year &nbsp</th>"
                    . "<th> &nbsp Genre &nbsp</th>"
                    . "<th> &nbsp Aspect &nbsp</th>"
                    . "<th> &nbsp Search Count </th>";

                    //Display table data
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td> &nbsp" . $row['ID'] . "&nbsp </td>"
                        . "<td> &nbsp" . $row['title'] . "&nbsp </td>"
                        . "<td> &nbsp" . $row['studio'] . "&nbsp </td>" 
                        . "<td> &nbsp" . $row['status'] . "&nbsp </td>" 
                        . "<td> &nbsp" . $row['sound'] . "&nbsp </td>" 
                        . "<td> &nbsp" . $row['versions'] . "&nbsp </td>" 
                        . "<td> &nbsp" . $row['recRetPrice'] . "&nbsp </td>" 
                        . "<td> &nbsp" . $row['rating'] . "&nbsp </td>" 
                        . "<td> &nbsp" . $row['year'] . "&nbsp </td>"
                        . "<td> &nbsp" . $row['genre'] . "&nbsp </td>" 
                        . "<td> &nbsp" . $row['aspect'] . "&nbsp </td>"
                        . "<td> &nbsp" . $row['searchNo'] . "</td></tr>";
                    }
                    
                    //Send Table to Browser
                    echo "</table>";
                ?>


            </div>
        </div>
        
        <footer>
            <?php
                require_once'footer.php'; 
            ?>      
        </footer>
    </body>
</html>