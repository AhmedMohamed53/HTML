<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alles.css">
</head>
<body>


    <header>
        <nav>
            <h1 class="h1">Artiesten</h1>
        </nav>


    </header>

    <div class="flex">
    <button><div><a href="alles.php?p=home">Home</a></div></button>
    <button><div><a href="alles.php?p=select">Select</a></div></button>
    <button><div><a href="alles.php?p=insert">Insert Artist</a></div></button>
</div>

<div class="content">
    <?php

    if(isset($_GET["p"])){
        // echo $_GET["p"];

        include "content/". $_GET["p"] . ".php";
    }
    // echo "Hoi ik ben chris";
    
        ?>
        </div>
        
</body>
</html>