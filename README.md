# Rajasthan-Trip-Form

This is a simple web application for collecting user information for a trip to Jaipur. The form collects basic user details and stores them in a MySQL database.

## Features

- Collects user details: name, age, gender, email, phone number, and other information.
- Stores the collected data in a MySQL database.
- Simple and intuitive user interface.

## Technologies Used

- PHP
- MySQL
- HTML
- CSS

## Setup Instructions

### Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) or any other local server environment.
- [phpMyAdmin](https://www.phpmyadmin.net/) for database management.
- [Git](https://git-scm.com/) for version control.

### Steps to Set Up the Project

1. **Clone the Repository:**

    ```sh
    git clone https://github.com/your-username/jaipur-trip-form.git
    cd jaipur-trip-form
    ```

2. **Set Up the Database:**

    - Open phpMyAdmin and create a new database named `trip`.
    - Execute the following SQL command to create the `trip` table:

    ```sql
    CREATE TABLE trip (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        age INT NOT NULL,
        gender VARCHAR(10) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(15) NOT NULL,
        other TEXT,
        date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

3. **Configure the Project:**

    - Ensure your PHP file (e.g., `index.php`) has the correct database connection details:

    ```php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trip";
    ```

4. **Run the Project:**

    - Place the project folder in the `htdocs` directory of your XAMPP installation.
    - Start the Apache and MySQL services from the XAMPP control panel.
    - Open your web browser and navigate to `http://localhost/jaipur-trip-form`.

## Usage

- Fill out the form with the required details.
- Click the "Submit" button.
- The submitted data will be stored in the `trip` table of the `trip` database.

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries, please contact Pratap Singh at [kunwarsingh9752005805@gmail.com](mailto:kunwarsingh9752005805@gmail.com).


