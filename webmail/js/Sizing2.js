//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
// Sizing
//
// Hunter Schoonover
// October 2015
//
// Adjusts all of the sizes of HTML elements after the page has loaded. This allows for dynamic
// sizing.
// 
//

//Reset element sizes every time the window resizes
$(window).resize(setElementSizes);

var sizing;
var narrow;
var medium;
var wide;
var windowWidth;
var webmailHeight;

//-------------------------------------------------------------------------------------------------
// sizingOnload
//
// The onload function for the sizing program.
//
// Should be called after the page has loaded.
//

function sizingOnload() {
    
    narrow = new Narrow();
    medium = new Medium();
    wide = new Wide();
    
    setElementSizes();
    
}// end of sizingOnload
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// setElementSizes
//
// Calculates and sets the sizes of the HTML elements inside the folders container.
//

function setElementSizes() {
    
    windowWidth = $(window).width();
    webmailHeight = $("#container").height() - $("#header").height() - $("#v-spacer1").height();
    
    if (windowWidth <= 850) { sizing = narrow; }
    else if ((windowWidth > 850) & (windowWidth <= 1250)) { sizing = medium; }
    else { sizing = wide; }
    
    sizing.setElementSizes();
    
    //DEBUG HSS//
    $("#test").text(windowWidth);
    
}// end of setElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
// class Narrow
//
// Hunter Schoonover
// October 2015
//
// This class is used for the narrow version of the webpage.
//
// Adjusts all of the sizes of HTML elements after the page has loaded.
// 

//Define the Narrow class
function Narrow() {}

//Define functions for this class
Narrow.prototype.setElementSizes = narrow_setElementSizes;

//-------------------------------------------------------------------------------------------------
// narrow_setElementSizes
//
// Calculates and sets the sizes of the HTML elements.
//

function narrow_setElementSizes() {
    
    narrow_setFolderElementSizes();
    narrow_setWebmailElementSizes();
    
    //DEBUG HSS//
    console.log("narrow_setElementSizes() reached");
    
}// end of narrow_setElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// narrow_setFolderElementSizes
//
// Calculates and sets the sizes of the HTML elements inside the folders container.
//

function narrow_setFolderElementSizes() {
    
    //Set the folders height its child element (wrap content)
    $("#folders").height($("#narrow").outerHeight());
    
}// end of narrow_setFolderElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// narrow_setWebmailElementSizes
//
// Calculates and sets the sizes of the HTML elements inside the webmail container.
//

function narrow_setWebmailElementSizes() {  
    
    //Set the messages width to the webmail width
    $("#messages").width($("#webmail").width());
    
    //Set the webmail height to auto
    $("#webmail").css("height", "auto");
    
    //Set messages column widths
    narrow_setMessageColumnWidths();
    
}// end of narrow_setWebmailElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// narrow_setMessageColumnWidths
//
// Calculates and sets the widths of the messages columns (checkbox, subject, from, date).
//

function narrow_setMessageColumnWidths() {  
    
    var messagesListWidth = $("#messages ul").width();
    
    var remainingWidth = messagesListWidth - $(".checkbox").width();
    
    //set the subject to occupy 100% of the remaining width
    $(".subject").width(remainingWidth);
    
    var dateAndFromWidth;
    if (windowWidth <= 500) { dateAndFromWidth = messagesListWidth; }
    else if (windowWidth > 500) { dateAndFromWidth = messagesListWidth/2; }
    
    $(".from").width(dateAndFromWidth);
    $(".date").width(dateAndFromWidth);
    
}// end of narrow_setMessageColumnWidths
//-------------------------------------------------------------------------------------------------

// end of class Narrow
//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------


//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
// class Medium
//
// Hunter Schoonover
// October 2015
//
// This class is used for the medium version of the webpage.
//
// Adjusts all of the sizes of HTML elements after the page has loaded.
// 

//Define the Medium class
function Medium() {}

//Define functions for this class
Medium.prototype.setElementSizes = medium_setElementSizes;

//-------------------------------------------------------------------------------------------------
// medium_setElementSizes
//
// Calculates and sets the sizes of the HTML elements.
//

function medium_setElementSizes() {
    
    medium_setFolderElementSizes();
    medium_setWebmailElementSizes();
    
}// end of medium_setElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// medium_setFolderElementSizes
//
// Calculates and sets the sizes of the HTML elements inside the folders container.
//

function medium_setFolderElementSizes() {
    
    $("#folders").height(webmailHeight);
    
    var customFoldersHeight = webmailHeight - $("#default").height() - $("#custom-header").height();
    $("#custom").height(customFoldersHeight);
    
}// end of medium_setFolderElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// medium_setWebmailElementSizes
//
// Calculates and sets the sizes of the HTML elements inside the webmail container.
//

function medium_setWebmailElementSizes() { 
    
    $("#webmail").height(webmailHeight);
    
    //Set widths
    var messagesWidth = $("#container").width() - $("#folders").width() - 1; //1 is subtracted as a safety cushion
    $("#messages").width(messagesWidth);
    
    //Set messages column widths
    medium_setMessageColumnWidths();
    
}// end of medium_setWebmailElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// medium_setMessageColumnWidths
//
// Calculates and sets the widths of the messages columns (checkbox, subject, from, date).
//

function medium_setMessageColumnWidths() {  
    
    var messagesListWidth = $("#messages ul").width();
    
    var remainingWidth = messagesListWidth - $(".checkbox").width();
    
    //set the subject to occupy 100% of the remaining width
    $(".subject").outerWidth(remainingWidth);
    
    //set the from and date columns to each occupy half of their own row
    $(".from").outerWidth(messagesListWidth/2 - 1); //1 subtracted as safety cushion
    $(".date").outerWidth(messagesListWidth/2 - 1); //1 subtracted as safety cushion
    
}// end of medium_setMessageColumnWidths
//-------------------------------------------------------------------------------------------------

// end of class Medium
//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------


//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
// class Wide
//
// Hunter Schoonover
// October 2015
//
// This class is used for the wide version of the webpage.
//
// Adjusts all of the sizes of HTML elements after the page has loaded.
// 

//Define the Wide class
function Wide() {}

//Define functions for this class
Wide.prototype.setElementSizes = wide_setElementSizes;

//-------------------------------------------------------------------------------------------------
// wide_setElementSizes
//
// Calculates and sets the sizes of the HTML elements.
//

function wide_setElementSizes() {
    
    wide_setFolderElementSizes();
    wide_setWebmailElementSizes();
    
}// end of wide_setElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// wide_setFolderElementSizes
//
// Calculates and sets the sizes of the HTML elements inside the folders container.
//

function wide_setFolderElementSizes() {
    
    $("#folders").height(webmailHeight);
    
    var customFoldersHeight = webmailHeight - $("#default").height() - $("#custom-header").height();
    $("#custom").height(customFoldersHeight);
    
}// end of wide_setFolderElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// wide_setWebmailElementSizes
//
// Calculates and sets the sizes of the HTML elements inside the webmail container.
//

function wide_setWebmailElementSizes() { 
    
    $("#webmail").height(webmailHeight);
    
    //Set widths
    var messagesWidth = $("#container").width() - $("#folders").width() - 1; //1 is subtracted as a safety cushion
    $("#messages").width(messagesWidth);
    
    //Set messages column widths
    wide_setMessageColumnWidths();
    
}// end of wide_setWebmailElementSizes
//-------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------
// wide_setMessageColumnWidths
//
// Calculates and sets the widths of the messages columns (checkbox, subject, from, date).
//

function wide_setMessageColumnWidths() {  
    
    var messagesListWidth = $("#messages ul").width();
    
    var remainingWidth = messagesListWidth - $(".checkbox").width();
    
    //set the subject to occupy half of the remaining width
    $(".subject").outerWidth(remainingWidth/2-1); //subtract 1 as safety cushion
    
    //set the from and date columns to each occupy 1/4 of the remaining space
    $(".from").outerWidth(remainingWidth/4-1); //subtract 1 as safety cushion
    $(".date").outerWidth(remainingWidth/4-1); //subtract 1 as safety cushion
    
}// end of wide_setMessageColumnWidths
//-------------------------------------------------------------------------------------------------

// end of class Wide
//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------