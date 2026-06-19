<?php
##-----------------------------Core--------------------------##
// Zaroc
require_once("../zaroc/zaroc.php");                          # Zaroc Library
// Vendor
// require_once("../vendor/autoload.php");                    # Optional (For vendor and thir party components)

##------------------Chatbot Variables------------------------##
// Links, Emails, Information
require_once("core/variables.php");                         # Informational Variables
// Url of common images
require_once("core/images.php");                            # Specific Images for your bot

##----------------------Authorization------------------------##
// Makes Authorization Functionality
auth($chatbotName,$chatbotPassword);                       # Remember to put $chatbotName and $chatbotPassword in your bot variables

##---------------------------Classes----------------------------------##
# Classes

require_once("classes/Sessions.php");
require_once("classes/Transcripts.php");
require_once("classes/Productos.php");

##---------------------------VIEWS----------------------------------##
# basicIntents
require_once("intents/test.php"); 
require_once("intents/basic.php"); 
require_once("intents/Productos.php"); 
                       
// require_once("functionalities/functionalities.php");    # Transcripts functionality




?>
