CREATE TABLE WATCH_LATER (
  watch_later_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  movie_id INT,
  date_added DATE,
  FOREIGN KEY (user_id) REFERENCES USERS(user_id),
  FOREIGN KEY (movie_id) REFERENCES MOVIES(movie_id)
);