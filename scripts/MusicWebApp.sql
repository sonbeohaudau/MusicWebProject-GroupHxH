create database MusicAppWebProgramming;
use MusicAppWebProgramming;

create table Account (
	AccountID int primary key,
	Username nvarchar(15),
	PasswordHash varbinary(64)
);


create table Song(
	SongID int primary key,
	SongTitle nvarchar(30),
	Genre nvarchar(15),
	Country nvarchar(30),
	[Views] int,
	Link nvarchar(100),
	ImageLink nvarchar(250) 
);

create table Track(
	TrackID int primary key,
	SongID int,
	AccountID int,

	foreign key (SongID) references Song(SongID) 
	on delete cascade on update cascade,
	foreign key (AccountID) references Account(AccountID) 
	on delete cascade on update cascade,
);

create table Singer(
	SingerID int primary key,
	SingerName nvarchar(30),
	BirthYear nvarchar(10),
	Background nvarchar(max),
	ImageLink nvarchar(250)
);

create table PerformedBy(
	PerformanceID int primary key,
	SingerID int,
	SongID int,

	foreign key (SingerID) references Singer(SingerID) 
	on delete cascade on update cascade,
	foreign key (SongID) references Song(SongID) 
	on delete cascade on update cascade
);

go
create procedure AddUser
	@pAccountID int = 0,
	@pUsername nvarchar(15) = NULL,
	@pPassword nvarchar(30) = NULL,
	@responseMessage nvarchar(250) output
as
begin
	set nocount on

	begin try
		insert into Account (AccountID, Username, PasswordHash)
		values (@pAccountID, @pUsername, hashbytes('SHA2_256', @pPassword));
		
		set @responseMessage = 'Successfully inserted into table Account.';
	end try

	begin catch
		set @responseMessage = error_message();
	end catch
end
exec AddUser @pAccountID = '?', @pUsername = '?', @pPassword = '?';
go
declare @responseMessage nvarchar(250)
exec AddUser
	@pAccountID = 123, 
	@pUsername = 'Nguyen Van A',
	@pPassword = '123123', 
	@responseMessage = @responseMessage OUTPUT;

select * from Account;

--drop table Account;
--drop table Song;
--drop table Track;
--drop table Singer;
--drop table PerformedBy;

select DB_NAME()