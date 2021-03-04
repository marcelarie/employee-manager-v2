DROP DATABASE IF EXISTS employeesV2;
CREATE DATABASE employeesV2;
USE employeesV2;

DROP TABLE IF EXISTS  employees;
 
CREATE TABLE employees (
  id int(50) AUTO_INCREMENT NOT NULL,
  name varchar(50) NOT NULL,
  lastName varchar(50),
  email varchar(50) NOT NULL,
  gender varchar(50),
  age int(50) NOT NULL,
  streetAddress varchar(50) NOT NULL,
  city varchar(50) NOT NULL,
  state varchar(3) NOT NULL,
  PC varchar(50) NOT NULL,
  phoneNumber varchar(50) NOT NULL,
  admin bool not null DEFAULT 0,
  PRIMARY KEY (id)
);

INSERT INTO employees 
(name, lastName, email, gender, age, streetAddress, city, state, PC, phoneNumber, admin) VALUES
('Alfonso', 'Leiff', 'djaskld@network.com', 'male', 24, '126', 'San Jose', 'CA', '394221', '73836276273', 1),
('Rack', 'Leiff', 'jackon@network.com', 'male', 24, '126', 'San Jose', 'CA', '394221', '73836276273', 1),
('John', 'Doe', 'jhondoe@foo.com', 'male', 34, '89', 'New York', 'WA', '09889', '1283645645', 0),
('Leila', 'Mills', 'mills@leila.com', 'female', 29, '55', 'San Diego', 'CA', '098765', '9983632461', 0),
('Richard', 'Desmond', 'dismond@foo.com', 'male', 30, '90', 'Salt lake city', 'UT', '457320', '90876987654', 0),
('Susan', 'Smith', 'susansmith@baz.com', 'female', 28, '43', 'Luisville', 'KNT', '445321', '224355488976', 0),
('Brad', 'Simpson', 'brad@foo.com', 'male', 40, '128', 'Atlanta', 'GEO', '394221', '6854634522', 0),
('Neil', 'Walker', 'walkerneil@baz.com', 'male', 42, '1', 'Nashville', 'TN', '90143', '45372788192', 0),
('Robert', 'Thomson', 'jackon@network.com', 'male', 24, '126', 'New Orleans', 'LU', '63281', '91232876454', 0);

