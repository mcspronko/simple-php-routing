# Simple PHP Routing

The Simple PHP Routing project source code. It provides an example of a routing based on functions.

## Installation

Pre-requisites:

- git
- terminal

1. Clone the repository to your local environment by running the command:

```bash
git clone git@github.com:mcspronko/simple-php-routing.git
```

2. Navigate to the `simple-php-routing` directory:

```bash
cd simple-php-routing
```

3. Start local server:

```bash
php -S localhost:9000
```

4. Open browser

## How to add a new route

Navigate to the `index.php` file and add a new route. For example, if you need to have a `contact` page, the following needs to be added.

```php
route('/contact', function () {
  echo "Contact";
});
```
