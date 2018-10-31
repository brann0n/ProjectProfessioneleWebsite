<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" type="text/css" href="nieuwsbrief.css">
        <title>T' Veenhoog</title>
    </head>
    <body>
        <div class="centering">
            <div class="logo">
                <a href="index.php"><img src="../image/logo.png" alt="logo" /></a>
            </div>


            <div class="mainBody">
                <div class="mainHeader">
                    <div class="h1Title">
                        <h1 id="h1Titlestyle">Technische Hogeschool 'T Veenhoog</h1>
                    </div>
                </div>
                <div class="mainContent">
                    <!-- Title -->
                    <div id="mainContentTitle">
                        <h2>Het laatste nieuws</h2>
                    </div>
                    
                    <!-- news automotive -->
                    <div id="newsAutomotive">
                        <div id="automotiveBox">
                            <h3>Automotive&GT;</h3>
                        </div>
                        <?php
                        $rss = new DOMDocument();
                        $rss->load('https://nl.hardware.info/updates/news.rss');
                        $feed = array();
                        foreach($rss ->getElementsByTagName('item') as $node){
                            $item = array(
                                'title' => $node ->getElementsByTagName('title')->item(0)->nodeValue,
                                'desc' => $node ->getElementsByTagName('description') ->item(0) ->nodeValue,
                                'link' => $node ->getElementsByTagName('link') ->item(0) ->nodeValue,
                                'date' => $node ->getElementsByTagName('pubDate')->item(0)->nodeValue,
                            );
                            array_push($feed, $item);
                        }
                        $limit = 5;
                        for($x=0; $x<$limit; $x++){
                            $title = str_replace(' & ', ' &amp: ', $feed[$x]['title']);
                            $link = $feed[$x]['link'];
                            $description = $feed[$x]['desc'];
                            $date = date('1 F d, Y', strtotime($feed[$x]['date']));
                            echo'<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong<br />';
                            echo'<small><em>Posted on '.$date.'</em></small></p>';
                            echo'<p>'.$description.'</p>';
                        }
                        ?>
                    </div>
                    
                    <!-- news mechatronica -->
                    <div id="newsMechatronica">
                        <div id="mechatronicaBox">
                            <h3>Mechatronica&GT;</h3>
                        </div>
                        <div id="feedMecha">
                        <?php
                        $rss2 = new DOMDocument();
                        $rss2->load('https://nl.hardware.info/updates/news.rss');
                        $feed2 = array();
                        foreach($rss2 ->getElementsByTagName('item') as $node2){
                            $item2 = array(
                                'title' => $node2 ->getElementsByTagName('title')->item(0)->nodeValue,
                                'desc' => $node2 ->getElementsByTagName('description') ->item(0) ->nodeValue,
                                'link' => $node2 ->getElementsByTagName('link') ->item(0) ->nodeValue,
                                'date' => $node2 ->getElementsByTagName('pubDate')->item(0)->nodeValue,
                            );
                            array_push($feed2, $item2);
                        }
                        $limit2 = 5;
                        for($x2=0; $x2<$limit2; $x2++){
                            $title2 = str_replace(' & ', ' &amp: ', $feed2[$x2]['title']);
                            $link2 = $feed2[$x2]['link'];
                            $description2 = $feed2[$x2]['desc'];
                            $date2 = date('1 F d, Y', strtotime($feed2[$x2]['date']));
                            echo'<p><strong><a href="'.$link2.'" title="'.$title2.'">'.$title2.'</a></strong<br />';
                            echo'<small><em>Posted on '.$date2.'</em></small></p>';
                            echo'<p>'.$description2.'</p>';
                        }
                        ?>
                        </div>
                    </div>
                    
                </div>
                <div class="mainFooter">
                    <div class="navFooterLeft">
                        <ul>
                            <li class="footerTopElement">T' Veenhoog:</li>
                            <li><a href="opleidingen.php">Opleidingen</a></li>
                            <li><a href="inschrijven.php">Inschrijven</a></li>
                            <li><a href="opendagen.php">Open dagen</a></li>
                            <li><a href="evenementen.php">Evenementen</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="navFooterCenter">
                        <ul>
                            <li class="footerTopElement">Onze partners:</li>
                            <li><a href="">(text)</a></li>
                            <li><a href="">(text)</a></li>
                            <li><a href="">(text)</a></li>
                            <li><a href="">(text)</a></li>
                        </ul>
                    </div>
                    <div class="navFooterRight">
                        <ul>
                            <li class="footerTopElementSocial">Volgs ons:</li>
                            <li><a href="https://www.facebook.com/"><img src="../image/facebook.png" alt="Facebook"/></a>
                                <a href="https://twitter.com/"><img src="../image/twitter.png" alt="Twitter"/></a>
                                <a href="https://youtube.com/"><img src="../image/youtube.png" alt="Youtube"/></a>
                            </li>
                            <li class="socialStyle">
                                <a href="https://www.linkedin.com/"><img src="../image/linkedin.png" alt="Linkedin"/></a>
                                <a href="https://instagram.com/"><img src="../image/instagram.png" alt="Instagram"/></a>
                            </li>
                        </ul>
                    </div>
                </div>	
            </div>
            <div class="rightBlok">
                <a href="index.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="../en/index.php">
                    <div class="languageEnglish">
                        <h3>English</h3>
                    </div>
                </a>
                <a href="signout.php">
                    <div class="loginRight">	
                        <h3>Login</h3>
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>
