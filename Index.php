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
                <h1>Welcome To The Home Menu</h1>

                <p>This is the home menu. now yes,
                    this is a beautiful website.
                    But it is so much more.
                    Here, you can do many things.
                    Just click on the tabs and find out!
                </p>

                <?php 
                    require'Connection.php';
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