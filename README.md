# HRM-SYSTEM

A simple Web Application that can be used to manage a company's human resources.

## Project descripton

A group project developed by four team members.

Four type of user: 1. Admin 2. Management
3. Employee 4. Board of Director
Common Features for all user:
1) All users can Login to the system
2) Can register to the system.
3) Can manipulate their profile information (edit-deleteview etc.)
Admin User Functionality: (KHAN, M A MOHIT)
1) Website Management
2) Website Updates
3) Security management
4) Glitch Fixing/Bug fixing
5) Frequent news updates
6) Social Media Management
7) Monitor performance
8) User Interface Simplification
9) monitor website traffic
10) Can add Management/Employee/Board of Director.
11) Can verify Management/Employee/Board of Director profiles -- Can block .
12) Can manipulate Management/Employee/Board of
Director information (edit-delete-view etc.) etc…
13) Admin can give update approval
14) Advertisement Management
15) Notifications Management
16) Help Seeking Notifications Management

 Management User Functionality : (AMIN, RUHUL)
1) Job Requisitions
2) Job Descriptions
3) Job Board Posting
4) Social Recruiting
5) Job Offer Extension
6) Background Check
7) Organizing Training Program
8) Candidate Pre-Screening
9) Applicant Tracking System (ATS)
10) Emp Application Review
11) Emp Performance
12) Branded Company Job Sit
13) Salary Planning
14) Hiring
15) Firing
16) Auto-Response
Employee User Functionality : (HOSSAIN, MD. FAHAD)
1) Attendance
2) Vacation Application
3) requesting overtime payment
4) Transfer Application
5) Resignation Application
6) Business Idea Presentation
7) Job reference application
8) submitting reimbursement slips
9) self training
10) promotional application
11) overall performance
12) reviewing timesheets and tasks
13) ensuring all necessary document
14) profile details
15) inquiring about available loan programs
Board of Director User Functionality : (RAHMAN, S.M MUNTASIR)
1) Training Program Approval
2) Executive Hiring
3) Executive Firing
4) Executive performance Appraisal
5) Executive Salary
6) Attendance record
7) Personnel Planning
8) Annual Budget
9) Executive Compensation
10) Executive Job advertisement
11) Inquiry
12) Checking loan application
13) Employee Hiring Confirmation
14) Meeting set up
15) Plan set up

## Prerequisites

Make sure you have the following software installed on your machine:

- [XAMPP](https://www.apachefriends.org/index.html) or [LAMP](https://bitnami.com/stack/lamp)
- [MySQL](https://dev.mysql.com/downloads/mysql/) or [phpMyAdmin](https://www.phpmyadmin.net/)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/php-project.git
    ```

2. Move the project to the appropriate directory:

   For XAMPP (on Windows, typically in the `htdocs` folder):

    ```bash
    move php-project C:\xampp\htdocs\
    ```

   For LAMP (on Linux, typically in the `/var/www/html` folder):

    ```bash
    mv php-project /var/www/html/
    ```

3. Start your XAMPP or LAMP server.

## MySQL Database Setup

1. Open phpMyAdmin:

    ```url
    http://localhost/phpmyadmin/
    ```

2. Create a new database:

    - Click on the "Databases" tab.
    - Enter a database name (e.g., `php_project_db`) and click "Create."

3. Import sample data (optional):

    - Select the newly created database.
    - Navigate to the "Import" tab.
    - Choose a sample SQL file (if provided) and click "Go."

4. Update the project configuration:

    - Open the project's configuration file (e.g., `config.php`).
    - Update the database connection details (hostname, username, password, and database name).

## Usage

1. Open your web browser and navigate to the following URL:

    For XAMPP:

    ```url
    http://localhost/php-project/
    ```

    For LAMP:

    ```url
    http://localhost/php-project/
    ```

2. You should see the project running with the data from your MySQL database.

## Configuration

- Ensure that your server (XAMPP or LAMP) is running and configured correctly.
- Check the project configuration files (e.g., `config.php`) for any specific settings.
