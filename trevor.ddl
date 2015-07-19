DROP TABLE IF EXISTS restaurant;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS profile;

 CREATE TABLE profile (
  profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  email VARCHAR(128) NOT NULL,
  password VARCHAR(32),
  bio VARCHAR(32),
  INDEX profileId(profileId),
  UNIQUE(email),
  PRIMARY KEY(profileId)
 );

CREATE TABLE review (
 reviewId INT UNSIGNED AUTO_INCREMENT NOT NULL,
 profileId INT UNSIGNED NOT NULL,
 date VARCHAR(32) NOT NULL,
 content VARCHAR(128),
 INDEX reviewId(reviewId),
 FOREIGN KEY(profileId) REFERENCES profile(profileId),
 PRIMARY KEY(reviewId)
);

 CREATE TABLE restaurant (
  restaurantId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  reviewId INT UNSIGNED NOT NULL,
  address VARCHAR(128) NOT NULL,
  INDEX restaurantId(restaurantId),
  INDEX(reviewId),
  FOREIGN KEY(reviewId) REFERENCES review(reviewId),
  PRIMARY KEY(restaurantId)
 );

