This is a super-simple todo-list application with PHP and MYSQL using a not-that-good-MVC-architecture

In order to make this thing working, you need to :

1. Make sure you have PHP and MYSQL installed on your computer.

2. Enter MYSQL in your terminal.

3. Create a new database called "todo" in your terminal (without the double-quotes).

4. Use todo and create a new table with two column, first column is "id" stands for identify which is used for differentiate you and me- no. I mean the data. This "id" is a column with integer data type, primary key, auto increment, and not null attribute.

5. Second column is "judul", this is where we stored the input data from users. Create it with varchar(255) data type.

6. Done. No it's not, you still have to change the configuration file inside this app/config/ directory, inside the file, fill it with your username and password database, e.g define('USERNAME', 'your_username_database'), define('PASSWORD', 'your_password_database'). If you use sudo mysql, then change the 'your_username_database' to 'root' and 'your_password_database' to ''.

7. Move this todo-list folder to /var/www/html/ directory

8. Open any browser and type localhost/todo-list/public

9. That's All. Bye~
