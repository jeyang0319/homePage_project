CREATE TABLE guestbook (
   num int(10) DEFAULT '0' NOT NULL auto_increment,
   name varchar(15),
   email varchar(30),
   hp varchar(50),
   memo varchar(100),
   ip varchar(15),
   date_time date DEFAULT '0000-00-00',
   visit int(10) DEFAULT '0',
   pass varchar(8),
   PRIMARY KEY (num)
);