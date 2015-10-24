<!DOCTYPE html>
<html>

	<head>
		<title>Webmail</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
        <link rel='stylesheet' media='only screen and (max-width: 500px)' href='css/basic.css' />
        <!-- use different stylesheets for different widths -->
        <link rel='stylesheet' media='only screen and (max-width: 500px)' href='css/narrow.css' />
        <link rel='stylesheet' media='only screen and (min-width: 900px)' href='css/wide.css' />
	</head>
    
    <body>
        
        <table>
        
            <!-- HEADER -->
            <tr><td id="HEADER">
                <nav><img src="images/png/menu-button-30-by-30.png" alt="menu-button-20-by-20" id="menu-button"></nav>
                <img src="images/logo/logo-100-by-100-dark-blue.png" alt="logo-100-by-100.png" id="logo">
                <span id="pageHeader">WEBMAIL</span>
            </td></tr>
            <!-- END OF HEADER -->

            <!-- BODY -->
            <tr><td id="BODY"><div>
                <table style="padding: 10px;"><tr>
                    <td class="folders-container">
                        <div class="default-folders">
                            <ul class="default-folders">
                                <li class="selected">Inbox</li> <!-- DEBUG HSS -- remove selected -->
                                <li>Drafts</li>
                                <li>Sent</li>
                                <li>Trash</li>
                            </ul>
                        </div>
                        <div class="custom-folders-header">Folders</div>
                        <div></div>
                        </ul>
                    </td>
                    <td style="width: 15px;"></td>
                    <td class="message-list">
                        <!-- DEBUG HSS -- test content for construction -->
                        <ul class="unread">
                            <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                            <li class="subject"><div>The link should take you to the browser..</div></li>
                            <li class="from"><div>help@hswebservices.com</div></li>
                            <li class="date"><div>06/14/12 2:37 AM</div></li>
                        </ul>
                        
                        <ul class="unread">
                            <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                            <li class="subject"><div>An event from Gmail has been added to your Google Calendar</div></li>
                            <li class="from"><div>ray@rgndt.com</div></li>
                            <li class="date"><div>08/15/12 12:37 AM</div></li>
                        </ul>
                        
                        <ul>
                            <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                            <li class="subject"><div>I miss you baby girl - Invitation to edit</div></li>
                            <li class="from"><div>ray@rgndt.com</div></li>
                            <li class="date"><div>08/15/12 12:37 AM</div></li>
                        </ul>
                        
                        <ul class="unread">
                            <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                            <li class="subject"><div>New sign-in from Safari on iPad</div></li>
                            <li class="from"><div>help@hswebservices.com</div></li>
                            <li class="date"><div>06/14/12 2:37 AM</div></li>
                        </ul>
                        
                        <ul>
                            <li class="checkbox"><form action=""><input type="checkbox" name="WIPHSS" value="WIPHSS"></form></li>
                            <li class="subject"><div>An event from Gmail has been added to your Google Calendar</div></li>
                            <li class="from"><div>ray@rgndt.com</div></li>
                            <li class="date"><div>08/15/12 12:37 AM</div></li>
                        </ul>
                        <!-- DEBUG HSS -- test content for construction -->
                    </td>
                </tr></table>
            </div></td></tr>
            <!-- END OF BODY -->
        
        </table>
        
    </body>
    
</html>