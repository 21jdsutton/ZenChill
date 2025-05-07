CREATE TABLE PAYMENT_METHOD (
  payment_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  card_number VARCHAR(20),
  card_name VARCHAR(100),
  billing_address VARCHAR(255),
  zip_code VARCHAR(10),
  FOREIGN KEY (user_id) REFERENCES USERS(user_id)
);