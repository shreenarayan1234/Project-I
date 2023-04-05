use Project1;

-- student part

create table student(
	s_id int not null auto_increment,
	roll varchar(4) not null, 
	fname varchar(30) not null,
	lname varchar(30) not null,
	email varchar(50) not null,
	phone varchar(10) not null,
	faculty enum('BCA', 'BBS', 'BSW', 'MBS') not null,
	address varchar(30) not null,
	constraint primary key (s_id)
);

desc student;

alter table student 
	add column password varchar(30) not null default 'reliance'
after  address;


select * from student;


-- admin part

create table admin(
	a_id int not null auto_increment,
	fname varchar(30) not null,
	lname varchar(30) not null,
	email varchar(50) not null,
	phone varchar(10) not null,
	address varchar(30) not null,
	password varchar(30) not null default 'reliance',
	role enum ('admin', 'superadmin') not null,
	constraint primary key(a_id)
);

desc admin;

select * from admin;


alter table student 
	add column pcode varchar(5) default '-----'
	after password;

alter table admin 
	add column pcode varchar(5) default ''
	after password;






































