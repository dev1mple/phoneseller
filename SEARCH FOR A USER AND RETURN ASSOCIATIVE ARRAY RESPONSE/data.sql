create table search_users_data (
	id INT AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	gender VARCHAR(255),
	address VARCHAR(255),
	city VARCHAR(255),
	nationality VARCHAR(255),
	work_experience VARCHAR(255),
	date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);