HOW TO EXPORT WPDEVART CONTACT FORM TABLES FROM DATABASE ?
=============================================

If you're using phpMyAdmin for exporting SQL then choose Custom Export Method. 
Then among the checkbox options, select "Disable foreign key checks".
The exported SQL statement should have the disable and enable foreign key checks at
the beginning and end of the output file respectively.