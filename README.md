# GISSforms
This is a simple page built for the GISS game - a shortlarp based on overcoming polarized views. Players receive their form in game, with a code that can be entered on this page. This gives them some additional context and background. 

# Installation
It's all static HTML, just upload the whole repo to some webserver or hoster. You configure the codes and context in the giss.js file.

# Usage
Players on their form get a code at the bottom. This code translates to their specific context entries in this page. There are a number of ways they can enter this code:
- Use the URL directly, with a question mark. For example, <https://eproprio.otting.org/?AABBCCDD>
- Scan the QR code at the bottom of their form using their phone camera

For game setup, the organizer should use the ?ADMIN parameter, for example, <https://eproprio.otting.org/?ADMIN>. From here, the organizer can consider which codes to add to a form and add these together by clicking the red ribbons. Then either add the URL directly to the form or use the QR code image. 
   
# Configuration
### Codes
Note that codes are stupid and simple. In the configuration file, every bit of context should have a unique 2 letter partial code. In game setup, a number of these are added to create an interesting character. 

### giss.js
For most of the layout, the following type of setup is given:
```
{ 
    "housing": {
        {
            "code": "GA",
            "description": "2 bedroom apartment",
            "context": "You own a small (32 m2) two room apartment in a badly maintained apartment complex in the suburbs of the city of Assen"
        }
    }
} 
```
 
Entries can contain simple HTML such as the \<b\> tags for bold. Remember to use double quotes, single quotes break your JSON. 

The layout of this JSON file is as following
- The introduction contains the note mentioned at the head of the page
- Below that come the seperate blocks with coded entries
- Entries without a "code" attribute will always be shown to the player

### Entry types
The entry types have no actual function at the moment, they just add some clarity. The exception is the "generic" entry type, every entry in "generic" is always shown. This also has a different setup in that there is not code before the description.  

### URL
In the configuration file there is mention of an URL used to generate the QR codes. This is optional, if left empty it will use the current browser URL as a base.
   

# Libaries used
- Semantic UI
- JQuery
- Handlebars.js
- qrcode.js
 