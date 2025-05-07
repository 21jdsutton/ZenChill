CREATE TABLE SUBSCRIPTIONS (
  subscription_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  subscription_tier VARCHAR(50),
  price DECIMAL(5,2),
  FOREIGN KEY (user_id) REFERENCES USERS(user_id)
);