# Car Booking Website

## Project Overview

The **Car Booking Website** is a cutting-edge web application designed to revolutionize the car rental industry by offering users a unique and personalized experience. This platform combines the convenience of traditional car booking with the added feature of customizing selected vehicles according to individual preferences. It aims to redefine the car rental experience by seamlessly integrating advanced customization options.

## Features

### User-Facing Features
* **User-Friendly Booking Interface:** Intuitive interface for browsing, selecting, and booking cars based on preferences, location, and rental duration.
* **Extensive Car Inventory:** Diverse fleet of vehicles, from compact cars to luxury SUVs.
* **Dynamic Customization Options:** Personalize chosen cars by selecting color options, interior features, and additional accessories.
* **Real-Time Availability and Pricing:** Accurate information on vehicle availability, pricing, and promotions.
* **Secure Payment Integration:** Seamless and secure transactions with multiple payment options.
* **User Profiles and History:** Create profiles to save preferences, view booking history, and streamline future reservations.
* **Responsive Customer Support:** Dedicated team to assist with queries and issues.

### Admin-Facing Features
* **Car Management:** Add, update, and view car details.
* **User Management:** Manage user accounts, including deletion.
* **Category Management:** Organize and manage vehicle categories/brands.
* **Manage Customization Requests:** Handle user customization requests.
* **Manage Testimonials:** Oversee user testimonials.
* **Manage Contact Us Queries:** Respond to user inquiries.

## System Architecture

The system is a web-based application with two main user roles: **Admin** and **User**. It follows a client-server architecture, with the frontend interacting with a backend that manages data persistence.

### Key Components
* **Frontend:** Built with HTML, CSS, and JavaScript for an interactive user interface.
* **Backend:** Developed using PHP for server-side logic and database interaction.
* **Database:** Utilizes a relational database (managed via XAMPP Server) to store all system data, including user information, vehicle details, bookings, and customization requests.

## Technologies Used

* **Frontend:**
    * HTML5
    * CSS3 (Cascading Style Sheets)
    * JavaScript
    * Bootstrap (for responsive design and UI components)
* **Backend:**
    * PHP
* **Database:**
    * MySQL (via XAMPP Server)
* **Development Environment:**
    * VS Code
    * macOS Sonoma 14.1

## Database Schema

The database is normalized to ensure data integrity and efficient management. Key tables include:

* `tbladmin`
* `tblbooking`
* `tblbrands`
* `tblcontactusinfo`
* `tblcontactusquery`
* `tblpages`
* `tblsubscribers`
* `tbltestimonial`
* `tblusers`
* `tblvehicles`

*(Detailed schema with fields and constraints can be found in the project documentation/report.)*

## Installation and Setup

To set up the project locally, follow these steps:

1.  **Clone the repository:**
    ```bash
    git clone <repository-url>
    cd car-booking-website
    ```
2.  **Set up XAMPP:**
    * Install XAMPP Server on your system (if not already installed).
    * Start Apache and MySQL services from the XAMPP control panel.
3.  **Database Setup:**
    * Create a new database in phpMyAdmin (or your preferred MySQL client).
    * Import the database schema and sample data (if available) from the `database/` directory (or similar, based on actual project structure).
    * Update the database connection details in `includes/config.php` (or equivalent file) to match your local setup.
4.  **Place Project Files:**
    * Move the project files into your XAMPP's `htdocs` directory (e.g., `C:\xampp\htdocs\AutoMotors` on Windows or `/Applications/XAMPP/htdocs/AutoMotors` on macOS).
5.  **Access the Application:**
    * Open your web browser and navigate to `http://localhost/AutoMotors/` for the user interface.
    * Access the admin panel at `http://localhost/AutoMotors/admin/`.

## Usage

### User Access
* Browse available cars.
* Register and log in to create a profile.
* Customize selected vehicles (color, interior, accessories).
* Book cars and manage bookings.
* View booking history.
* Submit contact queries and testimonials.

### Admin Access
* Log in to the admin panel.
* Manage car listings (add, edit, delete vehicles).
* Manage brands and categories.
* Review and confirm bookings.
* Manage user accounts.
* Handle contact us queries and testimonials.
* Update website content (pages, contact info).
