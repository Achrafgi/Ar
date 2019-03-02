# Laravel Book Store


+ [Database Structure](https://github.com/mkondratek/Bookstore-Database-Design)
+ [Sttellar - Free Bootstrap 4 Admin Template](https://github.com/BootstrapDash/Stellar)


I suggest to look at the diagram. A picture is worth a thousand words.
![diagram](diagram.png?raw=true)

### Tables
|tablename|description|
|----------|----------|
|books|books' data like ISBN, title, author, publisher, etc.|
|authors|authors' data, can be a porson or a company|
|publishers|publishers' data, just name|
|genres|list of them|
|books_genres|points which genre or genres is a book|
|customers|list of them, contains a lot of personal info|
|discounts|name and % value|
|books_discounts|points discounts of specific book|
|customers_discounts|points discounts of a costumer|
|shippers|list of couriers and their phone numbers|
|orders|list of them, points shipper, discount and customer|
|orders_details|points orders and tells amount of specific book|
|reviews|0 - 10 ratings and comments|