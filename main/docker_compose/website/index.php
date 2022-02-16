<html>
    <head>
        <title>My Persistent</title>
    </head>

    <body>
       <p style="color:orange"> <h1><center>Welcome to Persistent</center></h1></p>
        <ul>
            <?php

            $json = file_get_contents('http://product-service/');
            $obj = json_decode($json);

#            $persistents = $obj->persistents;
#            foreach ($persistents as $persistent) {
#                echo "<li>$persistent</li>";
            $persistent = $obj->persistent;
            foreach ($persistent as $persistents) {
            echo "<h2><li>$persistents</li></h2>";


	    }

            ?>
        </ul>
    </body>
</html>
