  
<?php
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
?>
<html>
    <head>
        <title> ENTERTAINMENT ZONE </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    </head>
    <body>
                <div class="wrapper">
                        <div class="index"> <img src="https://github.com/AngeloMartinBHilado/HiladoCardones/issues/1#issue-564372552="" style="width:600px;height:300px;"> </div>
                        <div class="nav">
                          <ul class="nav-menu">
                            <li> <a href="index.php?navigation=home"> HOME </a> </li>
                            <li> <a href="index.php?navigation=Games"> GAMES </a> </li>
                            <li> <a href="index.php?navigation=Music"> MUSIC  </a> </li>
                            <li> <a href="index.php?navigation=tvshows"> TV SHOWS </a> </li>
                     
                          </ul>
                        </div>

                        <div class="content">
                        <?php
                        switch($navigation){           
                            case 'Games':
                            require_once 'Games.php';
                            break;
                            case 'Music':
                            require_once 'music.php';
                            break;
                            case 'tvshows':
                            require_once 'tvshows.php';
                            break;
                            default:
                            require_once 'home.php';
                            break;
                        }
                        ?>
                        </div>

                        <div id="footer">
                        <div class="index"> <div class="fonttitle"> RELAX AND LIVE A LITTLE! </div></div>
                        </div>
    </div>
    </body>
</html>
