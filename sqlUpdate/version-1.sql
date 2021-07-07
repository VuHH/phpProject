-- release v1
-- Create database
CREATE DATABASE FASTFOODMANAGER;

create table ADMIN(
AdminID varchar(13) NOT NULL,
UsernameAdmin varchar(25) NOT NULL,
AdminName varchar(50) NOT NULL,
AdminPass varchar(25) NOT NULL,
RoleAdmin int NOT NULL,
IsDisable boolean,
PRIMARY KEY(AdminID)
);

create table CUSTOMER(
CustomerID varchar(13) NOT NULL,
CustomerName varchar(50) NOT NULL,
UsernameCustomer varchar(25) NOT NULL,
CustomerPassword varchar(25) NOT NULL,
CustomerEmail varchar(50) unique,
CustomerAddress varchar(300),
CustomerPhone varchar(10),
IsDisable boolean,
PRIMARY KEY(CustomerID)
);

create table COMMENT(
CommentID varchar(13) NOT NULL,
CommentDate date,
CommentContent varchar(100),
CustomerID varchar(13) NOT NULL,
FoodID varchar(13) NOT NULL,
AnwserComment varchar(100),
AnwserDate date,
IsView boolean,
PRIMARY KEY(CommentID),
CONSTRAINT FK_CommentFood FOREIGN KEY (FoodID)
 REFERENCES Food(FoodID), 

CONSTRAINT FK_CommentCust FOREIGN KEY (CustomerID)
 REFERENCES Customer(CustomerID) 
);


create table TYPE(
TypeID varchar(13) NOT NULL,
TypeName varchar(50) NOT NULL,
TypeDescribe varchar(200),
DirImage varchar(100),
PRIMARY KEY(TypeID)
);

create table NEWS(
NewsID varchar(13) NOT NULL,
Description varchar(100),
DatePost date,
DirImage varchar(100),
PRIMARY KEY(NewsID)
); 


create table FOOD(
FoodID varchar(13) NOT NULL,
FoodName varchar(50) NOT NULL,
FoodDescribe varchar(500),
DirImage varchar(100),
Price int,
TypeID varchar(13) NOT NULL,
PRIMARY KEY(FoodID),
CONSTRAINT FK_TypeFood FOREIGN KEY (TypeID)
 REFERENCES Type(TypeID)
 
);



create table FEEDBACK(
FeedbackID varchar(13) NOT NULL,
FeedbackDate date,
FeedbackContent varchar(100),
CustomerID varchar(13) NOT NULL,
AnswerFeedback varchar(100),
AnswerDate date,
IsView boolean,

CONSTRAINT FK_FeedbackCust FOREIGN KEY (CustomerID)
 REFERENCES Customer(CustomerID) 
);

 
create table ORDERFOOD(
OrderID varchar(13) NOT NULL,
OrderDate date,
CustomerID varchar(13) NOT NULL,
PRIMARY KEY(OrderID),
CONSTRAINT FK_OrderCust FOREIGN KEY (CustomerID)
 REFERENCES Customer(CustomerID) 
);


create table ORDERDETAIL(
OrderID varchar(13) NOT NULL,
FoodId varchar(13) NOT NULL,
Quantity int,
PRIMARY KEY(OrderID, FoodId),
CONSTRAINT FK_OrderDOder FOREIGN KEY (OrderID)
 REFERENCES ORDERFOOD(OrderID),
 CONSTRAINT FK_OderDFood FOREIGN KEY (FoodId)
 REFERENCES FOOD(FoodId)
);



