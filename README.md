# tapq(Tech Acoustic Past Questions)

**tapq** is a website that provides well formatted and well typed past questions for students. It also has a feature for viewing a curated past question list of the most occuring questions by scanning and comparing different exams for different years of the same topic. This feature means, if a particular question under a particular topic appears regularly throughout the years, said question will be featured on the CPQL(Curated Past Question List).  

The project is built mainly in PHP and JavaScript. The main reason being a higher range of support and currently the creators arsenal  

The greatest challenge in building the project was the  CMS; I had to keep in mind the nature of the data that was being input, which consisted of multiple questions and answers of different courses in different years.  

I plan to make the cms a bit easier to use, and also add a feature to store entries as a user enters them(They're usually large and can get completely lost if the site is closed unknowingly.)  
I also plan to find smarter ways to layout questions and answers so they are easy for users/students to read.  


## Table of Contents
1. How to install and run locally
2. How to use the project
3. Credits
4. How to contribute	


## How To Install And Run Locally
I use a windows operating system, so my explanation might be a bit limited, but with a little googling you should be able to do the same with any other OS.  

The site is made mainly with php so you'll need a localhost to be able to run the code. I use XAMPP, an apache emulator. You can download it for any machine [here](https://www.apachefriends.org/download.html).  
After installation, go to the folder you installed it in, then htdocs and copy the project to it. The file path will look something like this: C:\xampp\htdocs\tapq  

Make sure the virtual server is running, then go to this address in your browser: localhost\phpmyadmin and create a database called tapq. After the folder is succesfully created, import the mysql file 'tapq.sql' located in the root folder of the project, if successful, your done.
On your browser go to this address: localhost/tapq/ and the home page should load up.  

## How To Use The Project
Once the virtual server is setup, the rest is easy. Go to the navbar and choose a level; Each level signifies a year, and in each level there are different courses. In each course there are exams, differentiated by years. If you click on an exam, you can view the questions and answers under it.  

The project/site contains an admin side; To login use admin@mail.com as the email and 1 as the password. Here you can create a new course, and a new exam. Just follow the navbar.  

## Credits
I had the assistance of many people whilst building the project; in the way of coding, design, testing, data entry and advice. They are all featured on the home page of the site, but i shall mention their names in no particular order:
1. Okorie Emmanuel
2. Chiemerie Daze
3. Izaak Walex
4. Ikeonyia Stellamaris
5. Nnamani Ifeanyi 
6. Chidera Stanley

## How to contribute
If you find any part of the site you can improve, just fork the project, work on your own copy then send me a pull request, i reply as soon as possible. Do try to make the pull request as small as possible, that way its easier to read through them.