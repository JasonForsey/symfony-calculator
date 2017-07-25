# symfony-calculator

Simple Calculator using Symfony

## Using the Calculator Application
First please clone the project onto your machine. Once the project is cloned onto your machine please change your working directory to it.

Now we will start the PHP server using the following command:

```shell
php bin/console server:run 0.0.0.0
```

You can then open a web browser and navigate to <http://localhost:8000/calculator> to see the calculator.

You will be presented with a form that will allow you to enter two numbers and an operation. There is some validation on the number fields to ensure only integers are submitted. 

## Running Unit Tests
The project includes some unit tests that test some core functionality of the application. To run theses tests and ensure they are passing following any code changes please run:

```shell
php vendor/phpunit/phpunit/phpunit
```