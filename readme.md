# Support Ticket

- A support ticket application built using the Laravel framework.

## Getting Started

- Clone the project repository by running the command below if you use SSH

        git clone https://github.com/akshay-k/Support-Ticket.git

- You can also download the .zip file and extract the contents.

- Run the command below to install Laravel dependencies (Implying that you already have composer. If not install 
composer on your machine).

        composer install

## Setting Up
- First setup your database. The details of database are mentioned in the .env file. You are free to keep it as it is or 
change it to your liking.

- Run the following command

        php artisan migrate

- If everything works perfectly, migrations should be setup and the console should show the that migrations are setup
successfully. If not revisit earlier steps. After migrations are setup run the following command. 

        php artisan serve

and visit [http://localhost:8000/](http://localhost:8000/) to see the application in action.

