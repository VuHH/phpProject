ALTER TABLE customer
MODIFY COLUMN CustomerPassword Varchar(32);

Alter table news add TitleNews varchar(100) NOT NULL


ALTER TABLE admin 
MODIFY COLUMN AdminPass Varchar(32);

ALTER TABLE feedback
ADD CONSTRAINT PK_Feedback PRIMARY KEY (FeedbackID);

ALTER TABLE type add IsView boolean