# databases

This docker compose contains these services

* MySQL - a MySQL database

* Postgres - a Postgres database

* adminer - adminer; an admin tool for databases - go to hostname:8080. Use mysql as the server name for mysql and postgres for postgres. Passwords are in the docker-compose.yml file.

* www - a simple web server - go to hostname:88

The docker-compose.yml file contains the configuration including the passwords

Run it as follows for an interactive session

    docker compose up
  
To run as detached processes
  
    docker compose up -d
  
Run the following to stop all the containers
  
    docker compose down
