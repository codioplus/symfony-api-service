# symfony-api-service
is about providing an API of products, includes setting up a backend - preferably based on Symfony - provide service which can run an import on the product and category data provided further below. The data should be imported with the help with doctrine to map the data to a SQL database.


to install follow below:

1-run in terminal: composer install

2-in .env adjust database connection

3-run in terminal: php bin/console doctrine:migrations:migrate 

4-run in terminal: symfony server:start 

