# PHP-SQL-Laurea-app
R0315-3002 Web App Development with PHP/SQL

This is a web app for my frend who has a rental buisness.

1. Database.

Name - Birstonodviraciai

first table
feedback

1. name - VARCHAR(50) //Persons who fills out the contact form name
2. last - VARCHAR(50) //Persons who fills out the contact form last name
3. email - VARCHAR(50) //Persons who fills out the contact form email
4. sub - longtext //Feedback message

second table
users

1. id - INT(10) - MUST BE AUTO INCREMENT //Users ID
2. username - VARCHAR(100) //Username for log in
3. email - VARCHAR(100) //Email for login
4. user_type - VARCHAR(20) //User type either admin or user
5. password - VARCHAR(100) //Password for login (it gets encrypted)

third table
uzsakymai //Orders in english

1. id - INT(100) //ID
2. tipas - VARCHAR(100) //Type
3. valsk - VARCHAR(50) //Time of rent
4. valgr - VARCHAR(50) //Time of return
5. kiek - INT(50) //Amount of ordered vehicles
6. nuom - VARCHAR(100) //The name of the person ordering

2. Deployment

Every table every column is case sensitive. First a database is set up, then a user can be registered. It will be registered as a normal user. If that user needs to be an Admin, then user type needs to be changed in users table from User to Admin.

https://en.wikipedia.org/wiki/Select_(SQL)
https://en.wikipedia.org/wiki/Delete_(SQL)






