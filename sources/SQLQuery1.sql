create database MusicWeb
use MusicWeb

create table Song(
	songID int identity(1,1) primary key,
	country nvarchar(10),
	proposer nvarchar(20),
	rating float,
	[view] int

);

insert into Song(country,proposer,rating,[view]) values 
('UK','Adele','5','100')
