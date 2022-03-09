# GYM-MANAGEMENT-SYSTEM-MINI-PROJECT

This is a mini project on gym management system developed by Akhil Kailas, Kishore Chandran and Midhun Mohan for easing the the management of data in a Gym. 



1] How to install PHP in windows:

- download and install xampp

- download phpmyadmin

	create a folder name localhost in c: drive then extract to C:\localhost\phpmyadmin

- go to C:\xampp then open xampp-control then start apache and mysql

- in command prompt to to location

	C:\xampp\mysql\bin
	then type mysql -u root
	then click enter for mysql

- run php file
	
	start apache and mysql in xampp
	go to C:\xampp\htdocs
	paste our project folder in this location
	then go to browser and type
	localhost/file_name
	
	
2] Mysql commands used:

	create database gym;
	use gym;
	create table member_details(id int primary key auto_increment,name varchar(30),gender varchar(30),email varchar(30),age int);
	create table trainer_details(id int primary key,name varchar(30),gender varchar(30),email varchar(30),age int);
	create table trainer_shift(id int primary key,name varchar(30),shift varchar(30));
	create table fitness(id int primary key,activity varchar(30),trainer varchar(30),slot varchar(30));
