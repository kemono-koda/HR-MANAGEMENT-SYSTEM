# HR Management System (HRM-SYSTEM)

## Project Overview

The HR Management System is an ERP-based project designed to efficiently manage human resources within a company. Proper utilization of human resources is crucial for a company’s growth, and our system facilitates this by tracking all relevant records. This group project was developed by four team members.

## User Types

There are four types of users in the system:
1. **Admin**
2. **Management**
3. **Employee**
4. **Board of Director**

### Common Features for All Users:
- **Login to the System**
- **Register to the System**
- **Manage Profile Information** (edit, delete, view, etc.)

### Admin User Functionality (KHAN, M A MOHIT):
- Website Management
- Website Updates
- Security Management
- Glitch/Bug Fixing
- Frequent News Updates
- Social Media Management
- Monitor Performance
- User Interface Simplification
- Monitor Website Traffic
- Add/Verify/Block Management, Employee, and Board of Director Profiles
- Manipulate Management/Employee/Board of Director Information (edit, delete, view, etc.)
- Update Approval
- Advertisement Management
- Notifications Management
- Help Seeking Notifications Management

### Management User Functionality (AMIN, RUHUL):
- Job Requisitions
- Job Descriptions
- Job Board Posting
- Social Recruiting
- Job Offer Extension
- Background Check
- Organize Training Programs
- Candidate Pre-Screening
- Applicant Tracking System (ATS)
- Employee Application Review
- Employee Performance Monitoring
- Branded Company Job Site Management
- Salary Planning
- Hiring and Firing
- Auto-Response Management

### Employee User Functionality (HOSSAIN, MD. FAHAD):
- Attendance Management
- Vacation Application
- Overtime Payment Requests
- Transfer Application
- Resignation Application
- Business Idea Presentation
- Job Reference Application
- Submit Reimbursement Slips
- Self-Training Management
- Promotional Application
- Overall Performance Review
- Timesheet and Task Review
- Document Management
- Inquiry About Loan Programs

### Board of Director User Functionality (RAHMAN, S.M MUNTASIR):
- Training Program Approval
- Executive Hiring and Firing
- Executive Performance Appraisal
- Executive Salary Management
- Attendance Record Review
- Personnel Planning
- Annual Budget Management
- Executive Compensation Management
- Executive Job Advertisement
- Inquiry Handling
- Loan Application Review
- Employee Hiring Confirmation
- Meeting Setup
- Strategic Planning



## Prerequisites

Ensure that the following software is installed on your machine:

- [XAMPP](https://www.apachefriends.org/index.html) or [LAMP](https://bitnami.com/stack/lamp)
- [MySQL](https://dev.mysql.com/downloads/mysql/) or [phpMyAdmin](https://www.phpmyadmin.net/)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/M-A-Mohit-Khan/HR-MANAGEMENT-SYSTEM.git
    ```

2. Move the project to the appropriate directory:

    For XAMPP (Windows, typically in the `htdocs` folder):

    ```bash
    move HR-MANAGEMENT-SYSTEM C:\xampp\htdocs\
    ```

    For LAMP (Linux, typically in the `/var/www/html` folder):

    ```bash
    sudo mv HR-MANAGEMENT-SYSTEM /var/www/html/
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

3. Import Sample Data (optional):
    - Select the newly created database.
    - Navigate to the "Import" tab.
    - Choose a sample SQL file (if provided) and click "Go."

4. Update the Project Configuration:
    - Open the project’s configuration file (e.g., `config.php`).
    - Update the database connection details (hostname, username, password, and database name).

## Usage

1. Open your web browser and navigate to the following URL:

    For XAMPP:

    ```url
    http://localhost/HR-MANAGEMENT-SYSTEM/
    ```

    For LAMP:

    ```url
    http://localhost/HR-MANAGEMENT-SYSTEM/
    ```

2. You should see the project running with data from your MySQL database.

## Configuration

- Ensure that your server (XAMPP or LAMP) is running and configured correctly.
- Check the project configuration files (e.g., `config.php`) for any specific settings.

---

This version organizes the content clearly, making it easy to understand and follow the instructions.
