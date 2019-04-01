CREATE TABLE IF NOT EXISTS test.Users ( 
	FirstName varchar(20) not null,
	LastName varchar(20) not null,
	Age INT(3) not null,
	CreatedAtTimestamp  timestamp default current_timestamp, primary key (FirstName, LastName) );
