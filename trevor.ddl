DROP TABLE IF EXISTS restaurant; -- dropping this table first as it is created last
DROP TABLE IF EXISTS review; -- dropping this table next
DROP TABLE IF EXISTS profile; -- dropping this table last as it is created first

 CREATE TABLE profile ( -- creating table called profile
  profileId INT UNSIGNED AUTO_INCREMENT NOT NULL, -- unsigned as I don't think the value would ever be negative?
  email VARCHAR(128) NOT NULL, -- 128 characters for an email address? challenge accepted!
  password VARCHAR(32), -- 32 characters for password so there are more characters for users to forget
  bio VARCHAR(32), -- 32 characters for bio info as we don't really want to know too much about users
  INDEX profileId(profileId), -- creating key for this table
  UNIQUE(email), -- creating unique attribute
  PRIMARY KEY(profileId) -- creating primary key for this table
 );

CREATE TABLE review ( -- creating table called review
 reviewId INT UNSIGNED AUTO_INCREMENT NOT NULL, -- unsigned for same reason as above?
 profileId INT UNSIGNED NOT NULL, -- link to profile table key
 date VARCHAR(32) NOT NULL, -- 32 characters for date of review
 content VARCHAR(128), -- 128 characters for content of review
 INDEX reviewId(reviewId), -- creating key for this table
 FOREIGN KEY(profileId) REFERENCES profile(profileId), -- identifying profile table key as foreign key
 PRIMARY KEY(reviewId) -- creating primary key for this table
);

 CREATE TABLE restaurant ( -- creating table called restaurant
  restaurantId INT UNSIGNED AUTO_INCREMENT NOT NULL, -- unsigned as above
  reviewId INT UNSIGNED NOT NULL, -- link to review table key
  address VARCHAR(128) NOT NULL, -- 128 characters for address
  INDEX restaurantId(restaurantId), -- creating key for this table
  INDEX(reviewId), -- indexing review table key
  FOREIGN KEY(reviewId) REFERENCES review(reviewId), -- identifying review table as foreign key
  PRIMARY KEY(restaurantId) -- creating primary key for this table
 );

