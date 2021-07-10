API Task



1- create database and name it (new_api) dont add any password.



2- create dumy user with name and password in users table,


3-fill the products table with info,,use this query to fill it with.
INSERT INTO `products` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'chicken', '25', 'chicken.jpg', '2019-02-24 04:02:21', '2019-02-24 04:02:21'),
(2, 'meat', '30', 'meat.jpg', '2019-02-24 04:02:21', '2019-02-24 04:02:21');


3- now run the application and go to postman and enter this link (http://127.0.0.1:8000/api/Login) and if you put the right
email and password you will get token,,

  
4- once you login take the token and put it in the header(bearer token) and enter the link (http://127.0.0.1:8000/api/GetAll)
and you will get the products,,notice if you didnt use token you cant access this link and getting products.

5- you can use the link inside the image and paste it in browser and you will display the image.

(dont forget in postman to put in headers section this key-value(Accept -> application/json ))
and dont forget to add .env file.
