# GISSforms
This is a simple page built for the GISS game - a shortlarp based on overcoming polarized views. Players receive their form in game, with a code that can be entered on this page. This gives them some additional context and background. 

# Installation
It's all static HTML, just upload the whole repo to some webserver or hoster. You configure the codes and context in the giss.js file.

# Usage
Players on their form get a code at the bottom. This code translates to their specific context entries in this page. There are a number of ways they can enter this code:
- Use the URL directly, with a question mark. For example, https://eproprio.otting.org/?AABBCCDD
- Scan the QR code at the bottom of their form using their phone camera
- Use the base URL without a code parameter and enter their own code into the text field
- An additional special URL is there for game setup using the ?ADMIN url, which shows all available entries

In game setup, the organizer should use the ?ADMIN url, consider which codes to add to a form and add these together. Then either add that directly to the form or use the base URL to test the code and generate a QR code image.  
   
# Configuration
### Codes
Note that codes are stupid and simple. In the configuration file, every bit of context should have a unique 2 letter partial code. In game setup, a number of these are added to create an interesting character. 

### giss.js
For most of the layout, the following type of setup is given:
```
{ 
    'entry_type': {
        'AA': {
            'description';'Short single linge description matching the text in the form',
            'context':'Longer paragraph detailing the information  
        }
    } 
} 
```
 
Entries can contain simple HTML such as the \<b\> tags for bold. Remember to use double quotes, single quotes break your JSON. 

The layout of this JSON file is as following
- The introduction contains the note mentioned at the head of the page
- Generic entries are 

### Entry types
The entry types have no actual function at the moment, they just add some clarity. The exception is the "generic" entry type, every entry in "generic" is always shown. This also has a different setup in that there is not code before the description.  

### URL
In the configuration file there is mention of an URL used to generate the QR codes. This is optional, if left empty it will use the current browser URL as a base.
   

# Libaries used
- Semantic UI
- JQuery
- Handlebars.js
 




