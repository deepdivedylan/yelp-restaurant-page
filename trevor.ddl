CREATE TABLE profile
(
    profileId INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(128) NOT NULL,
    password VARCHAR(32),
    bio VARCHAR(32)
);
CREATE UNIQUE INDEX email ON profile (email);
CREATE INDEX profileId ON profile (profileId);
CREATE TABLE review
(
    reviewId INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    profileId INT UNSIGNED NOT NULL,
    date VARCHAR(32) NOT NULL,
    content VARCHAR(128),
    FOREIGN KEY (profileId) REFERENCES profile (profileId)
);
CREATE INDEX reviewId ON review (reviewId);
