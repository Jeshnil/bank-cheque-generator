# Bank Cheque Generator

This is a Drupal (core 8.x) module to take user input and generate a bank cheque.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them.

* Local server eg. XAMPP, etc.
* Drupal (core 8.x or above)
* MySQL database

### Downloading and setting up the environment

* Ensure you have the local environment set up and running using XAMPP, Drupal 8.x, MySQL, etc.

* Download a copy of the Bank Cheque Generator module from [GitHub](https://github.com/Jeshnil/bank-cheque-generator)

* In the website directory (inside 'htdocs' in XAMPP), open the 'modules' folder and create a folder named 'custom'.

* Inside the 'custom' folder, extract the downloaded Bank Cheque Generator module folder so that the folder structure looks like this:

```
htdocs 
|
+-> modules
    |
    +-> custom 
        |
        +-> chequedemo
            |
            +-> src
            |   |
            |   +-> Form
            |        |-- ChequeForm.php
            |        |-- ChequeResultForm.php
            |
            |-- chequedemo.info.yml
            |-- chequedemo.links.menu.yml
            |-- chequedemo.module
            |-- chequedemo.routing.yml
```


## Installation

Once the files are set up as above, follow these steps to install the module:

* Navigate to the './admin/modules' url eg. localhost/admin/modules.

* Under the List tab, select the CHEQUE GENERATOR module and click Install.

* Module Cheque Generator will be enabled and a 'Generate Cheque' tab will appear in the main navigation bar of the website.

## Using the module

* Click on the Cheque Generator link and fill out the following details:

    * First Name
    * Last Name
    * Payee Name
    * Sum

* Click the 'Generate Cheque' button to view the cheque.

### Uninstall

* Navigate to the './admin/modules' url eg. localhost/admin/modules.

* Under the Uninstall tab, select the CHEQUE GENERATOR module and click Uninstall.

* Module Cheque Generator will be removed from the list of installed modules.

* It is now safe to delete the module folder inside the 'custom' folder.
