### Very simple MVC

This is an easy understand of why symfony and laravel exists.
The example was taken from symfony website but the code was refactored to implement new 
php feature, i cannot resist to do that XD

### Explaination

The projects is structure in this way: 

 - index.php is the front controller
 - model.php is the model used to get data from database
 - controllers.php are controllers use to take a request, use model and actions and supply a response
 
 - - templates
 - - - layout.php is the layout of the simple blog
 - - - list.php, supply a list of blog articles to click
 - - - show.php used to get an id and show the post, post can be clicked by list.php

### Front Controller

Take urls like:

- /about
- /show
- /company

This urls are redirect by a webserver configuration to index.php, inside index.php we are taking /about, /show, /company and connect to their specific page to show their content

This is the cycle
 - A user go to https://mywebsite.example/about
 - Webserver point https://mywebsite.example/about to https://mywebsite.example/index.php(user see /about on browser)
 - index.php is the front controller and look through php global variable and get /about
 - index.php match /about with page about.php where inside there is the content to show on user browser(we suppose there is an html response)
 
