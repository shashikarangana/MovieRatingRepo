# MovieRatingRepo
php Project

drop database movieRating;

create database movieRating;

use movieRating;

create table movie(
	movieId int not null,
	movieName VARCHAR(1000),
	catogory VARCHAR(100),
	description VARCHAR(1000),
	movieUrl VARCHAR(1000),
	imageUrl VARCHAR(1000),
	derector VARCHAR(100),
	CONSTRAINT PRIMARY KEY (movieId));

create table rate(
	rateId int not null,
	movieId int not null,
	rateCount int,
	CONSTRAINT PRIMARY KEY (rateId),
	CONSTRAINT FOREIGN KEY(movieId) REFERENCES movie(movieId)
	ON UPDATE CASCADE ON DELETE CASCADE
);




