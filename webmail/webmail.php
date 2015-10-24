<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ---------------------------------------------------------------------------------------------------- -->
    <meta charset="utf-8">
    <title>Webmail</title>
    <meta name="description" content="This page serves as a webmail client for YB Tech webmail services.">
    <meta name="author" content="Hunter Schoonover">

    <!-- Mobile Specific Metas
    ---------------------------------------------------------------------------------------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    
    <!-- jQuery Libraries
    ---------------------------------------------------------------------------------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- jQuery Custom
    ---------------------------------------------------------------------------------------------------- -->
    <script src="js/Main.js"></script>
    <script src="js/Sizing.js"></script>

    <!-- CSS
    ---------------------------------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="css/uni/normalize.css">
    <link rel="stylesheet" href="css/layout2.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/folders.css">
    <link rel="stylesheet" href="css/messages.css">
    
    <!-- Favicon
    ---------------------------------------------------------------------------------------------------- -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> 
    
</head>
<body>

    <div id="container">
        <div id="header">
            <img class="header-image" src="images/header-450-by-100.png" alt="header-450-by-100.png">
        </div>
        <div id="v-spacer1"></div>        
        <div id="webmail">
            <div id="folders">
                <div id="wide">
                    <div id="default">
                        <ul>
                            <li class="selected">Inbox</li> <!-- DEBUG HSS -- remove selected class -->
                            <li>Drafts</li>
                            <li>Sent</li>
                            <li>Trash</li>
                        </ul>
                    </div>
                    <div id="custom-header"><div><div>Folders</div></div></div>
                    <div id="custom">
                        <ul>
                            <!-- DEBUG HSS -- test content -->
                            <li class="selected">Mike Schoonover</li>
                            <li id="test">Mike Scho</li>
                            <li>Opel</li>
                            <li>Audi</li>
                            <li>Mike Schoonover</li>
                            <li>Noah Schoonover</li>
                            <li>Opel</li>
                            <li>Audi</li>
                            <li>Noah Schoonover</li>
                            <li>Opel</li>
                            <li>Audi</li>
                            <li>Mike Schoonover</li>
                            <!-- end of DEBUG HSS -- test content -->
                        </ul>
                    </div>
                </div>
                <div id="narrow">
                    <select>
                        <option value="inbox">Inbox</option>
                        <option value="inbox">Drafts</option>
                        <option value="inbox">Sent</option>
                        <option value="inbox">Trash</option>
                        <option value="volvo">Mike Schoonover</option>
                        <option value="saab">Mike Scho</option>
                        <option value="mercedes">Opel</option>
                        <option value="audi">Audi</option>
                        <option value="volvo">Mike Schoonover</option>
                        <option value="saab">Noah Schoonover</option>
                        <option value="mercedes">Opel</option>
                        <option value="audi">Audi</option>
                        <option value="volvo">Noah Schoonover</option>
                        <option value="saab">Opel</option>
                        <option value="mercedes">Audi</option>
                        <option value="audi">Mike Schoonover</option>
                    </select> 
                </div>
            </div>
            <div id="messages"><div>
                <!-- DEBUG HSS -- test content -->
                <ul class="unread odd">
                    <li class="checkbox"><input type="checkbox" name="WIPHSS" value="WIPHSS"></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="odd">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="unread odd">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="unread odd">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="odd">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="unread odd">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="unread odd">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="odd">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="unread odd">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <ul class="even">
                    <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                    <li class="subject">The link should take you to the browser asdlkjalsdkfalsjdadada sdl;kjasldfjasldfjalskdjflaksdjflkajsdfk;lajsd;klfjas;lkdfja;ksldjf;lakjd;a;ds</li>
                    <li class="from">help@hswebservices.com</li>
                    <li class="date">06/14/12 2:37 AM</li>
                </ul>
                <!-- end of DEBUG HSS -- test content -->
            </div></div>
        </div>
    </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
