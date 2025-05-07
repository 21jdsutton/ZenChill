CREATE TABLE MOVIES (
  movie_id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255),
  description TEXT,
  genre VARCHAR(50),
  release_year INT,
  duration INT,
  thumbnail VARCHAR(255)
);