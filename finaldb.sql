drop database if exists finaldb;
create schema finaldb;
use finaldb;

create table login(
	user_id tinyint auto_increment primary key,
    users_name varchar(30),
    user_email varchar(55),
    user_password varchar(80)
);

create table student(
student_id  tinyint(10) auto_increment primary key,
staff_id tinyint,
session_id tinyint,
fname varchar(20),
lname varchar(40),
tel varchar(20),
age tinyint,
ygroup varchar(10),
gender varchar(10),
school varchar(50),
_date date,
learn_disability enum('Yes', 'No'),
attendance enum('P', 'A')
);

