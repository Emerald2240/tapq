# Tech Acoustic Past Questions (tapq)

**tapq** is a website that offers meticulously formatted and accurately typed past questions for students. It features a unique functionality that presents a curated list of frequently encountered questions, derived from scanning and comparing exams from various years within the same topic. This special feature, known as the Curated Past Question List (CPQL), highlights questions that appear consistently across different years.

## Overview

The core architecture of the project is constructed primarily using PHP and JavaScript. The main rationale behind this choice is the broader range of support and the current tools available in the creator's toolkit.

A notable challenge during the development phase was the creation of the content management system (CMS). The data input to the system consisted of diverse questions and answers from various courses spanning different years. Striking a balance between accommodating this variety and maintaining user-friendly data input was a significant task.

Future plans for the project include refining the user experience of the CMS, implementing a feature to auto-save entries as users input them (particularly useful for large entries that might otherwise be lost if the site is inadvertently closed), and exploring improved methods of displaying questions and answers to enhance readability for users, particularly students.

## Table of Contents

1. [Installation and Local Setup](#installation-and-local-setup)
2. [Using the Project](#using-the-project)
3. [Credits](#credits)
4. [How to Contribute](#how-to-contribute)

## Installation and Local Setup

To set up **tapq** locally on your machine, follow these steps:

1. **Download XAMPP**: If you're using Windows, you can download XAMPP, an Apache emulator, from [here](https://www.apachefriends.org/download.html). For other operating systems, similar tools are available.

2. **Install XAMPP**: Install XAMPP and navigate to its installation folder (e.g., `C:\xampp\htdocs`). Create a new folder named `tapq`.

3. **Database Setup**: Launch the XAMPP control panel and ensure that both Apache and MySQL services are running. Then, access your browser and visit `http://localhost/phpmyadmin`. Create a new database called `tapq`. Import the `tapq.sql` file located in the root folder of the project into this newly created database.

4. **Access the Site**: With the virtual server operational, open your browser and enter `http://localhost/tapq/`. This will load the **tapq** home page.

## Using the Project

Navigating and utilizing **tapq** is straightforward:

- **Level Selection**: In the navigation bar, choose a level. Each level corresponds to a year. Within each level, you'll find various courses. Each course contains exams categorized by years. Clicking on an exam allows you to access the associated questions and answers.

- **Admin Side**: The project includes an admin section. To log in, use the email address `admin@mail.com` and the password `1`. Within the admin section, you can create new courses and exams. Simply follow the navigation bar.

## Credits

While building the project, I received valuable assistance from numerous individuals in the areas of coding, design, testing, data entry, and advice. Their contributions are acknowledged on the home page of the site. Here, I would like to recognize their names without a specific order:

1. Okorie Emmanuel
2. Chiemerie Daze
3. Izaak Walex
4. Ikeonyia Stellamaris
5. Nnamani Ifeanyi
6. Chidera Stanley

## How to Contribute

Your contributions to enhancing **tapq** are highly appreciated. To contribute, follow these steps:

1. **Fork the Project**: Start by forking the **tapq** repository.

2. **Make Changes**: Create your own copy of the project and make your improvements.

3. **Pull Request**: Once your changes are ready, submit a pull request. I will review and respond as promptly as possible. To ensure ease of review, try to keep your pull requests concise and focused.

Thank you for your contributions in advancing the **tapq** platform. Your involvement is integral to the project's evolution. I look forward to collaborating with you!
