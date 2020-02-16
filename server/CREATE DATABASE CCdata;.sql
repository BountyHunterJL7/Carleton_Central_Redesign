CREATE DATABASE CCdata;

CREATE TABLE student (
studentID int NOT NULL,
lastName varchar(255),
firstName varchar(255),
username char(20) NOT NULL UNIQUE,
pass char(255) NOT NULL,
address varchar(255),
PRIMARY KEY (studentID)
);

insert into student (studentID, lastName, firstName, username, pass, address) values (101125765, McGregor, Mark, markmcgregor, pass1, house1);
insert into student (studentID, lastName, firstName, username, pass, address) values (101143098, White, Brandon, brandonwhite, pass2, house2);
insert into student (studentID, lastName, firstName, username, pass, address) values (101234790, Scheidl, Anna, annascheidl, pass3, house3);