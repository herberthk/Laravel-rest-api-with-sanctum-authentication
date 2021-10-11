# Laravel REST API with Sanctum authetication

This is a REST API using auth tokens with Laravel Sanctum

## Usage

Change the *.env.example* to *.env* and add your database info

For MySQL, add
```
Edit .env file to meet database requirement

# Run the webserver on port 8000
php artisan serve
```

## Routes

```
# Public

GET   /api/products
GET   /api/products/:id

POST   /api/login
@body: email, password

POST   /api/register
@body: name, email, password, password_confirmation


# Protected

POST   /api/products
@body: name, slug, description, price

PUT   /api/products/:id
@body: ?name, ?slug, ?description, ?price

DELETE  /api/products/:id

POST    /api/logout
```
