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
