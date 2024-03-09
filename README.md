# Portfolio Builder System 

This repository contains the source code and documentation for a Portfolio Management System. The system is designed to help users create and manage their online portfolios with features such as authentication, user registration, login, logout, and portfolio creation. Additionally, it includes functionalities like certificate validation and multilingual language support.

## Modules, Tasks, and Activities

### Authentication

#### User Registration
- **Tasks:**
  - Enter role, name, username, password, and mobile number.
  - Validate user information.
  - Store user information in the database.
  - Notify the user of successful registration.
  - Redirect user to the login page.

#### User Login
- **Tasks:**
  - Enter username and password.
  - Validate user credentials.
  - Create user session.
  - Redirect user to portfolio creation page.
  - Notify user of successful login.

#### User Logout
- **Tasks:**
  - Click on the logout button.
  - Destroy user session.
  - Redirect user to the login page.
  - Notify user of successful logout.
  - Clear user session data.

### Portfolio Creation and Management

#### Home Page & About Page
- **Tasks:**
  - Design and develop the home page.
  - Add profile picture, name, and brief introduction on the home page.
  - Design and develop the about page.
  - Add title and description on the about page.
  - Integrate the home page and about page into the portfolio.

#### Education Page & Work Page
- **Tasks:**
  - Design and develop the education page.
  - Add institution name, degree, percentage, address, and certificate on the education page.
  - Design and develop the work page.
  - Add pictures, title, and description on the work page.
  - Integrate the education page and work page into the portfolio.

#### Contact Page & Testimonials Page
- **Tasks:**
  - Design and develop the contact page.
  - Add address, mobile number, email, WhatsApp, Github, LinkedIn, and Instagram on the contact page.
  - Design and develop the testimonials page.
  - Add title and description on the testimonials page.
  - Integrate the contact page and testimonials page into the portfolio.

#### Certificate Validation and Multilingual Language Feature

##### Certificate Upload
- **Tasks:**
  - Display certificate upload form.
  - Validate user inputs.
  - Save certificate to the database.
  - Display success message upon completion.
  - Allow users to upload multiple certificates.

##### Certificate Approval
- **Tasks:**
  - Display list of pending certificates.
  - Allow admin to review and approve/reject certificates.
  - Update status of certificates in the database.
  - Notify users of approval/rejection.
  - Display success message upon completion.

##### Multilingual Language Support
- **Tasks:**
  - Allow users to select preferred language.
  - Translate portfolio content based on user selection.
  - Provide language switcher option.
  - Store language preference in the user profile.
  - Allow users to edit portfolio content in multiple languages.

## How to Run the System

1. Clone the repository to your local machine.
2. Set up a web server environment with PHP and MySQL support.
3. Import the provided database script to create the necessary tables and data.
4. Configure the database connection in the system files, if needed.
5. Open the system in a web browser.
6. Register a new user or use existing credentials to log in.
7. Explore and utilize the various modules and functionalities described above.

Feel free to customize and enhance the system according to your requirements.
