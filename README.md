# GISSforms
This is a simple page built for the GISS game - a shortlarp based on overcoming polarized views. Players receive their form in game appended by a code that can be entered on this page. This gives them some additional context and background. 

# Installation
It's all static HTML, just upload the whole repo to some webserver or hoster. You configure the codes and context in the giss.js file.

# Intended usage
Not in this repo: players in this game get a randomized "character form". As the form is part of their role we need an outside source to provide additional information which this character would know. Thus, players get a QR code at the bottom for their form. They can scan this QR code and be forwarded to this page, showing only context information relevant for this player.
![Example player screen](https://github.com/b0tting/GISSforms/tree/master/screens/player.png) 

For game setup, the organizer should use the ?ADMIN parameter, for example, <https://eproprio.otting.org/?ADMIN>. From here, the organizer can consider which codes to add to a form and add these together by clicking the red ribbons. Then either add the given URL directly to the form or use the generated QR code image. 
![Example admin screen](https://github.com/b0tting/GISSforms/tree/master/screens/admin.png)
   
# Configuration
### Codes
Note that codes are stupid and simple. In the configuration file, every bit of context should have a unique 2 letter partial code, based on characters and numbers only. In game setup, a number of these are added together to create an interesting character. 

### giss.js
The layout of this JSON file is as following
- There is a lexicon entry for all text used on the page shown to users, change these values in case you need to localize. 
- In "codes" comes the seperate block for all the information entries. 

For most of the entry layout, the following type of setup is given:
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
- Entries are grouped by type. The entry types have no actual function at the moment, they just make editing the file more clear. 
- "code" is a two letter code used to build up the URL. This code should be unique for each entry. Yes, this makes them easily guessable, but that is not the point in this game. If you leave the "code" attribute out this context is displayed to every user under the "What everybody knows" header. 
- "description" is a short 20 letter header
- "context" is the actual description.  Entries can contain simple HTML such as the \<b\> tags for bold. In hyperlinks and so, use single quotes, don't use double quotes.  

### URL
In the configuration file there is mention of an URL used to generate the QR codes. This is optional, if left empty it will use the current browser URL as a base.

# Github webhook
There is a simple stupid github webhook php file which is optional in usage. This can be attached to from a github webhook to trigger an automatic pull on the server. This way editors can change the giss.js file without any intervention required to put it online. 

Note that this also requires a sudo rule to allow the webserver to use git commands. 

# Thanks to
I used the following javascript frameworks. Devs, thank you for your effort! 
- [Semantic UI](https://semantic-ui.com/)
- [Handlebars.js](https://handlebarsjs.com/)
- [qrcode.js](https://davidshimjs.github.io/qrcodejs/)
 