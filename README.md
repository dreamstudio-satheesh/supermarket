# Supermarket POS System

This is a Supermarket Point-Of-Sale (POS) system built using Laravel. It supports features like inventory management, GST return calculation, purchase management, and stock management.

## Features

-   Product and Category Management
-   Customer Management
-   Employee and Shift Management
-   Supplier Management
-   Purchases and Sales Management
-   Store and Inventory Management
-   Receipt Generation
-   Discount Management
-   GST Rates and Tax Entries

## Prerequisites

Before you begin, ensure you have met the following requirements:

-   You have installed PHP 7.4 or later
-   You have installed Composer
-   You have installed MySQL 5.7 or later
-   You are using a Linux or Mac OS machine. Windows is not currently supported.

## Installing Supermarket POS System

To install Supermarket POS System, follow these steps:

1.  Clone the repository
    
    bashCopy code
    
    `git clone https://github.com/dreamstudio-satheesh/supermarket.git` 
    
2.  Install dependencies
    
    bashCopy code
    
    `cd supermarket-pos
    composer install` 
    
3.  Copy the example env file and make the required configuration changes in the .env file
    

    ```sh
    `cp .env.example .env` 
    ```
    
4.  Generate a new application key
    

    ```sh
    `php artisan key:generate` 
    ```
    
5.  Run the database migrations (Set the database connection in .env before migrating)
    
    
    
   ```sh
    `php artisan migrate` 
   ```
    
6.  Start the local development server
    
   
    ```python
    `php artisan serve` 
    ```
    

You can now access the server at [http://localhost:8000](http://localhost:8000/)

## Contributing to Supermarket POS System

To contribute to Supermarket POS System, follow these steps:

1.  Fork this repository.
2.  Create a branch: `git checkout -b <branch_name>`.
3.  Make your changes and commit them: `git commit -m '<commit_message>'`
4.  Push to the original branch: `git push origin <project_name>/<location>`
5.  Create the pull request.

## Contact

If you want to contact me you can reach me at [your_email@domain.com](mailto:your_email@domain.com).

## License

This project uses the following license: [MIT License](https://chat.openai.com/c/link).