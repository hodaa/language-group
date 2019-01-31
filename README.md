
# Language-group

Command line you give it any country,it will type the language that country speaks if you gave it two countries ,it will explain to you if they speak the same language or not.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See How to use for notes on how to deploy the project on a live system.

### Prerequisites

PHP 7.0
Composer (https://getcomposer.org/)


### Installing

Execute the following command in your project root to install this library:

      composer install
      composer dump-autoload -o


## How To Use 

##### Execute the following command in your project root :

To get country code and other countries that speak the same languages

      php index.php [Countery Name]

To check if two countries are speaking the same languages or not.

```bash
php index.php [First country name] [Second country name]
```

## Running the tests
  Execute the following command in your project root to install this library:

	./vendor/bin/phpunit tests



## Built With

* [Composer autoloading Package]
* [PHPunit](https://phpunit.de/) -Used to generate unit testing
* [Guzzel](http://docs.guzzlephp.org) -Used to fetch data from api




## Authors

* **Hoda Hussin** -- (https://github.com/hodaa)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

