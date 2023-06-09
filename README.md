# college website
its a college website miniproject  with database integrated using php and searching usn using the regex
## HOME PAGE
![HOME PAGE](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_3.png?raw=true)

# Project Reports
For college reports that I have submitted to college refer the reports folder where I provides the reports in the form of pdf and word document


# Installation
you need to paste the test1 in the sense the project folder to 
htdocs in xampp folder

create the database  in xampp php my admin section\
copy paste the below section to sql in my php admin


CREATE DATABASE project02;\
USE project02;\
CREATE TABLE contact(messageId INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(255),mailFrom VARCHAR(255),message TEXT);\
CREATE TABLE faculty(faculty_id VARCHAR(255) PRIMARY KEY NOT NULL, password VARCHAR(255));\
CREATE TABLE stddata(usn VARCHAR(255) PRIMARY KEY, name VARCHAR(255),branch VARCHAR(255),adhar BLOB,pan BLOB);\
CREATE TABLE users(usn VARCHAR(255) PRIMARY KEY,name VARCHAR(255),password VARCHAR(255));\
CREATE TABLE verify(usn PRIMARY KEY VARCHAR(255),checkbox BOOLEAN);\

# SNAPSHOTS
![image_1](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_1.png?raw=true)
![image_2](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_2.png?raw=true)
![image_3](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_3.png?raw=true)
![image_4](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_4.png?raw=true)
![image_5](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_5.png?raw=true)
![image_6](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_6.png?raw=true)
![image_7](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_7.png?raw=true)
![image_8](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_8.png?raw=true)
![image_9](https://github.com/pavanparashuramdevang/college-website/blob/main/snapshots/image_9.png?raw=true)

