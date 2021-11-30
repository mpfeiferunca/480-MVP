CREATE TABLE bike(
brand VARCHAR(30),
model VARCHAR(30),
kit VARCHAR(60),
msrp DECIMAL(7,2) UNSIGNED,
modelyear INT UNSIGNED,
material ENUM('Carbon', 'Aluminum', 'Titanium', 'Steel', 'Other'),
#geoid INT UNSIGNED,
#FOREIGN KEY(geoid) REFERENCES geo(gid),
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);
