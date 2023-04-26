# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 127.0.0.1
# Database:             bloodoxy
# Server version:       10.5.9-MariaDB
# Server OS:            Win64
# Target-Compatibility: Standard ANSI SQL
# HeidiSQL version:     3.2 Revision: 1129
# --------------------------------------------------------

/*!40100 SET CHARACTER SET latin1;*/
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'bloodoxy'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "bloodoxy" /*!40100 DEFAULT CHARACTER SET latin1 */;

USE "bloodoxy";


#
# Table structure for table 'bloodorder'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "bloodorder" (
  "ordid" int(11) NOT NULL AUTO_INCREMENT,
  "user" varchar(30) DEFAULT NULL,
  "supplier" varchar(30) DEFAULT NULL,
  "type" varchar(10) DEFAULT NULL,
  "size" int(11) DEFAULT NULL,
  "qty" int(11) DEFAULT NULL,
  "price" float DEFAULT NULL,
  "dateord" varchar(15) DEFAULT NULL,
  "status" varchar(20) DEFAULT NULL,
  PRIMARY KEY ("ordid")
) AUTO_INCREMENT=23 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'bloodorder'
#

LOCK TABLES "bloodorder" WRITE;
/*!40000 ALTER TABLE "bloodorder" DISABLE KEYS;*/
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(10,'pooja@gmail.com','Prime Blood Bank','A+',100,5,'200','12/03/2022','Shipped');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(11,'pooja@gmail.com','Prime Blood Bank','A+',100,15,'200','12/03/2022','Shipped');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(12,'pooja@gmail.com','Prime Blood Bank','AB+',200,4,'200','13/03/2022','Accepted');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(13,'pooja@gmail.com','Prime Blood Bank','AB+',100,3,'200','22/03/2022','Pending');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(14,'pooja@gmail.com','Prime Blood Bank','AB+',100,2,'200','22/03/2022','Pending');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(15,'rims@gmail.com','Prime Blood Bank','O-',300,5,'200','22/03/2022','Pending');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(16,'rims@gmail.com','Prime Blood Bank','O-',300,5,'200','22/03/2022','Pending');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(17,'rims@gmail.com','Prime Blood Bank','O+',300,2,'200','22/03/2022','Pending');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(18,'pooja@gmail.com','Prime Blood Bank','O+',300,1,'200','22/03/2022','Pending');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(19,'pooja@gmail.com','Prime Blood Bank','O+',300,2,'200','22/03/2022','Pending');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(20,'rims@gmail.com','Prime Blood Bank','O+',300,2,'200','22/03/2022','Pending');
REPLACE INTO "bloodorder" ("ordid", "user", "supplier", "type", "size", "qty", "price", "dateord", "status") VALUES
	(21,'pooja@gmail.com','Prime Blood Bank','O+',200,3,'200','24/03/2022','Accepted');
/*!40000 ALTER TABLE "bloodorder" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'bloodstock'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "bloodstock" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "name" varchar(30) DEFAULT NULL,
  "type" varchar(20) DEFAULT NULL,
  "qty" int(10) unsigned DEFAULT NULL,
  "price" float unsigned DEFAULT NULL,
  "size" int(10) unsigned DEFAULT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=13 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'bloodstock'
#

LOCK TABLES "bloodstock" WRITE;
/*!40000 ALTER TABLE "bloodstock" DISABLE KEYS;*/
REPLACE INTO "bloodstock" ("id", "name", "type", "qty", "price", "size") VALUES
	('1','prime@gmail.com','A+','0','200','200');
REPLACE INTO "bloodstock" ("id", "name", "type", "qty", "price", "size") VALUES
	('2','prime@gmail.com','B+','10','100','200');
REPLACE INTO "bloodstock" ("id", "name", "type", "qty", "price", "size") VALUES
	('3','prime@gmail.com','AB+','11','300','300');
REPLACE INTO "bloodstock" ("id", "name", "type", "qty", "price", "size") VALUES
	('4','prime@gmail.com','O+','20','200','200');
REPLACE INTO "bloodstock" ("id", "name", "type", "qty", "price", "size") VALUES
	('10','prime@gmail.com','A-','10','250','250');
REPLACE INTO "bloodstock" ("id", "name", "type", "qty", "price", "size") VALUES
	('11','prime@gmail.com','O-','15','300','300');
REPLACE INTO "bloodstock" ("id", "name", "type", "qty", "price", "size") VALUES
	('12','prime@gmail.com','A+','10','200','200');
/*!40000 ALTER TABLE "bloodstock" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'feedback'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "feedback" (
  "fid" int(11) NOT NULL AUTO_INCREMENT,
  "email" varchar(30) DEFAULT NULL,
  "name" varchar(30) DEFAULT NULL,
  "feedback" varchar(200) DEFAULT NULL,
  PRIMARY KEY ("fid")
) AUTO_INCREMENT=5 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'feedback'
#

LOCK TABLES "feedback" WRITE;
/*!40000 ALTER TABLE "feedback" DISABLE KEYS;*/
REPLACE INTO "feedback" ("fid", "email", "name", "feedback") VALUES
	(1,'pooja@gmail.com','Pooja Gupta','Nice application, thanks.');
REPLACE INTO "feedback" ("fid", "email", "name", "feedback") VALUES
	(2,'pooja@gmail.com','Pooja Gupta','Good packaging, timely delivery. Thanks a lot for your support.');
REPLACE INTO "feedback" ("fid", "email", "name", "feedback") VALUES
	(3,'rims@gmail.com','RIMS Hospital','Excellent application.');
REPLACE INTO "feedback" ("fid", "email", "name", "feedback") VALUES
	(4,'pooja@gmail.com','Pooja Gupta','Fast delivery, thanks a lot.');
/*!40000 ALTER TABLE "feedback" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'messages'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "messages" (
  "msgid" int(11) NOT NULL AUTO_INCREMENT,
  "ordid" int(11) DEFAULT NULL,
  "user" varchar(30) DEFAULT NULL,
  "supplier" varchar(30) DEFAULT NULL,
  "dateord" varchar(15) DEFAULT NULL,
  "status" varchar(20) DEFAULT NULL,
  PRIMARY KEY ("msgid")
) AUTO_INCREMENT=26 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'messages'
#

LOCK TABLES "messages" WRITE;
/*!40000 ALTER TABLE "messages" DISABLE KEYS;*/
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(8,10,'pooja@gmail.com','Prime Blood Bank','12/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(9,11,'pooja@gmail.com','Prime Blood Bank','12/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(10,12,'pooja@gmail.com','Prime Blood Bank','13/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(11,13,'pooja@gmail.com','Prime Blood Bank','22/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(12,14,'pooja@gmail.com','Prime Blood Bank','22/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(13,15,'rims@gmail.com','Prime Blood Bank','22/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(14,16,'rims@gmail.com','Prime Blood Bank','22/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(15,17,'rims@gmail.com','Prime Blood Bank','22/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(16,18,'pooja@gmail.com','Prime Blood Bank','22/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(17,19,'pooja@gmail.com','Prime Blood Bank','22/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(18,20,'rims@gmail.com','Prime Blood Bank','22/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(19,1,'pooja@gmail.com','Super Industries','23/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(20,2,'pooja@gmail.com','Super Industries','23/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(21,21,'pooja@gmail.com','Prime Blood Bank','24/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(22,3,'pooja@gmail.com','Super Industries','24/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(23,4,'pooja@gmail.com','Super Industries','24/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(24,5,'pooja@gmail.com','Super Industries','24/03/2022','Pending');
REPLACE INTO "messages" ("msgid", "ordid", "user", "supplier", "dateord", "status") VALUES
	(25,6,'pooja@gmail.com','Super Industries','24/03/2022','Pending');
/*!40000 ALTER TABLE "messages" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'oxygenorder'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "oxygenorder" (
  "ordid" int(11) NOT NULL AUTO_INCREMENT,
  "user" varchar(30) DEFAULT NULL,
  "supplier" varchar(30) DEFAULT NULL,
  "type" varchar(10) DEFAULT NULL,
  "size" int(11) DEFAULT NULL,
  "qty" int(11) DEFAULT NULL,
  "price" float DEFAULT NULL,
  "dateord" varchar(15) DEFAULT NULL,
  "status" varchar(20) DEFAULT NULL,
  PRIMARY KEY ("ordid")
) /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'oxygenorder'
#

# (No data found.)



#
# Table structure for table 'oxyorder'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "oxyorder" (
  "pid" int(11) NOT NULL AUTO_INCREMENT,
  "user" varchar(30) DEFAULT NULL,
  "supplier" varchar(30) DEFAULT NULL,
  "gascapa" varchar(30) DEFAULT NULL,
  "purity" varchar(10) DEFAULT NULL,
  "qty" int(11) DEFAULT NULL,
  "price" float DEFAULT NULL,
  "dateord" varchar(15) DEFAULT NULL,
  "status" varchar(10) DEFAULT NULL,
  PRIMARY KEY ("pid")
) AUTO_INCREMENT=7 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'oxyorder'
#

LOCK TABLES "oxyorder" WRITE;
/*!40000 ALTER TABLE "oxyorder" DISABLE KEYS;*/
REPLACE INTO "oxyorder" ("pid", "user", "supplier", "gascapa", "purity", "qty", "price", "dateord", "status") VALUES
	(1,'pooja@gmail.com','Super Industries','600 Liters','95%',2,'500','23/03/2022','Accepted');
REPLACE INTO "oxyorder" ("pid", "user", "supplier", "gascapa", "purity", "qty", "price", "dateord", "status") VALUES
	(2,'pooja@gmail.com','Super Industries','800 Liters','Above 95%',2,'1000','23/03/2022','Accepted');
REPLACE INTO "oxyorder" ("pid", "user", "supplier", "gascapa", "purity", "qty", "price", "dateord", "status") VALUES
	(3,'pooja@gmail.com','Super Industries','600 Liters','Above 95%',2,'200','24/03/2022','Pending');
REPLACE INTO "oxyorder" ("pid", "user", "supplier", "gascapa", "purity", "qty", "price", "dateord", "status") VALUES
	(4,'pooja@gmail.com','Super Industries','600 Liters','95%',2,'200','24/03/2022','Pending');
REPLACE INTO "oxyorder" ("pid", "user", "supplier", "gascapa", "purity", "qty", "price", "dateord", "status") VALUES
	(5,'pooja@gmail.com','Super Industries','700 Liters','95%',2,'200','24/03/2022','Pending');
REPLACE INTO "oxyorder" ("pid", "user", "supplier", "gascapa", "purity", "qty", "price", "dateord", "status") VALUES
	(6,'pooja@gmail.com','Super Industries','700 Liters','95%',2,'1000','24/03/2022','Pending');
/*!40000 ALTER TABLE "oxyorder" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'oxystock'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "oxystock" (
  "pid" int(11) NOT NULL AUTO_INCREMENT,
  "name" varchar(50) DEFAULT NULL,
  "material" varchar(20) DEFAULT NULL,
  "watercapacity" varchar(20) DEFAULT NULL,
  "gascapacity" varchar(20) DEFAULT NULL,
  "purity" varchar(10) DEFAULT NULL,
  "type" varchar(30) DEFAULT NULL,
  "qty" int(11) DEFAULT NULL,
  "price" float DEFAULT NULL,
  PRIMARY KEY ("pid")
) AUTO_INCREMENT=6 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'oxystock'
#

LOCK TABLES "oxystock" WRITE;
/*!40000 ALTER TABLE "oxystock" DISABLE KEYS;*/
REPLACE INTO "oxystock" ("pid", "name", "material", "watercapacity", "gascapacity", "purity", "type", "qty", "price") VALUES
	(1,'super@gmail.com','Aluminium','6.8 Liters','600 Liters','95%','Type 1',38,'500');
REPLACE INTO "oxystock" ("pid", "name", "material", "watercapacity", "gascapacity", "purity", "type", "qty", "price") VALUES
	(2,'super@gmail.com','Stainless Steel','10 Liters','700 Liters','Above 95%','Type 2',30,'700');
REPLACE INTO "oxystock" ("pid", "name", "material", "watercapacity", "gascapacity", "purity", "type", "qty", "price") VALUES
	(3,'super@gmail.com','Aluminium','7 Liters','700 Liters','Above 95%','Type 3',8,'1000');
REPLACE INTO "oxystock" ("pid", "name", "material", "watercapacity", "gascapacity", "purity", "type", "qty", "price") VALUES
	(4,'super@gmail.com','Stainless Steel','8 Liters','800 Liters','Above 95%','Type 4',20,'1200');
REPLACE INTO "oxystock" ("pid", "name", "material", "watercapacity", "gascapacity", "purity", "type", "qty", "price") VALUES
	(5,'super@gmail.com','Aluminium','10 Liters','800 Liters','Above 95 %','Type 1',8,'1000');
/*!40000 ALTER TABLE "oxystock" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'payment'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "payment" (
  "pid" int(11) NOT NULL AUTO_INCREMENT,
  "email" varchar(30) DEFAULT NULL,
  "name" varchar(30) DEFAULT NULL,
  "amount" float DEFAULT NULL,
  "paymode" varchar(20) DEFAULT NULL,
  "date" varchar(15) DEFAULT NULL,
  PRIMARY KEY ("pid")
) AUTO_INCREMENT=7 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'payment'
#

LOCK TABLES "payment" WRITE;
/*!40000 ALTER TABLE "payment" DISABLE KEYS;*/
REPLACE INTO "payment" ("pid", "email", "name", "amount", "paymode", "date") VALUES
	(1,'pooja@gmail.com','Pooja Gupta','400','UPI','22/03/2022');
REPLACE INTO "payment" ("pid", "email", "name", "amount", "paymode", "date") VALUES
	(2,'rims@gmail.com','RIMS Hospital','400','Net-Banking','22/03/2022');
REPLACE INTO "payment" ("pid", "email", "name", "amount", "paymode", "date") VALUES
	(3,'pooja@gmail.com','Pooja Gupta','1000','Debit-Card','23/03/2022');
REPLACE INTO "payment" ("pid", "email", "name", "amount", "paymode", "date") VALUES
	(4,'pooja@gmail.com','Pooja Gupta','2000','COD','23/03/2022');
REPLACE INTO "payment" ("pid", "email", "name", "amount", "paymode", "date") VALUES
	(5,'pooja@gmail.com','Pooja Gupta','600','UPI','24/03/2022');
REPLACE INTO "payment" ("pid", "email", "name", "amount", "paymode", "date") VALUES
	(6,'pooja@gmail.com','Pooja Gupta','2000','Credit-Card','24/03/2022');
/*!40000 ALTER TABLE "payment" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'profile'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "profile" (
  "id" int(11) NOT NULL,
  "uname" varchar(50) DEFAULT NULL,
  "address" varchar(100) DEFAULT NULL,
  "phone" varchar(15) DEFAULT NULL,
  "email" varchar(50) DEFAULT NULL,
  "type" varchar(30) DEFAULT NULL,
  "ppic" varchar(50) DEFAULT NULL
) /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'profile'
#

LOCK TABLES "profile" WRITE;
/*!40000 ALTER TABLE "profile" DISABLE KEYS;*/
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(3,'Pooja Gupta','Amravati','9191900000','pooja@gmail.com','Patient','3.jpg');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(4,'Amit Mishra','Akola','7878787878','amit@gmail.com','Patient','4.jpg');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(5,'RIMS Hospital','Badnera Rd, Amravati','7890231410','rims@gmail.com','Hospital','None');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(7,'Umesh Rathi','rajapeth, Amravati','1717171717','umesh@gmail.com','Patient','7.jpg');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(0,'','','','medinova@gmail.com','Hospital','None');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(9,'Adarsh Blood Bank ','Rajapeth, Amravati','8888899999','adarsh@gmail.com','Blood Bank','None');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(10,'Prime Blood Bank','Rajkamal Chowk, Amravati','8907612345','prime@gmail.com','Blood Bank','None');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(11,'Rajeshwar Blood Bank','Radha Nagar, Amravati','9898989898','raj@yahoo.com','Blood Bank','None');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(15,'Rupam Kumar','Pune','7171717171','rupam@gmail.com','Patient','None');
REPLACE INTO "profile" ("id", "uname", "address", "phone", "email", "type", "ppic") VALUES
	(18,'Super Industries','Saturna MIDC, Amravati','7654321909','super@gmail.com','Oxygen Supplier','None');
/*!40000 ALTER TABLE "profile" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'users'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "users" (
  "id" int(11) NOT NULL AUTO_INCREMENT,
  "emailid" varchar(50) DEFAULT NULL,
  "password" varchar(15) DEFAULT NULL,
  "type" varchar(30) DEFAULT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=19 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'users'
#

LOCK TABLES "users" WRITE;
/*!40000 ALTER TABLE "users" DISABLE KEYS;*/
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(3,'pooja@gmail.com','pooja','Patient');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(4,'amit@gmail.com','amit','Patient');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(5,'rims@gmail.com','rims','Hospital');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(7,'umesh@gmail.com','umesh','Patient');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(8,'medinova@gmail.com','medinova','Hospital');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(9,'adarsh@gmail.com','adarsh','Blood Bank');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(10,'prime@gmail.com','prime','Blood Bank');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(11,'raj@yahoo.com','raj','Blood Bank');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(12,'rakesh@gmail.com','rakesh','Patient');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(15,'rupam@gmail.com','rupam','Patient');
REPLACE INTO "users" ("id", "emailid", "password", "type") VALUES
	(18,'super@gmail.com','super','Oxygen Supplier');
/*!40000 ALTER TABLE "users" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
