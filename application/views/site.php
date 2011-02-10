<html>
    <head>
        <title>We've got a message for you!</title>
        <style type="text/css">
            body {font-family: Georgia;}
            h1 {font-style: italic;}

        </style>
    </head>
    <body>
        <h1>These are my songs</h1>
        <ul>
            <?php
                foreach($items as $song)
                {
                    echo '<li>'.$song->artist.' - '.$song->song.'</li>';
                }
            ?>
        </ul>
    </body>
</html>