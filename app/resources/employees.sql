CREATE DATABASE IF NOT EXISTS employeesV2;
USE employeesV2;

DROP TABLE IF EXISTS  admin, employees;
 
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
  avatar varchar(100),
  PRIMARY KEY (id)
);

CREATE TABLE admin (
    id int(50) NOT NULL AUTO_INCREMENT,
    id_employee int(50) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_employee) REFERENCES employees(id)
);

INSERT INTO employees 
(id, name, lastName, email, gender, age, streetAddress, city, state, PC, phoneNumber, avatar) VALUES
(1, 'Rack', 'Leiff', 'jackon@network.com', 'man', 24, '126', 'San Jose', 'CA', '394221', '73836276273', '\"..\\/assets\\/images\\/no-user.png\"'),
(2, 'John', 'Doe', 'jhondoe@foo.com', 'man', 34, '89', 'New York', 'WA', '09889', '1283645645', '\"..\\/assets\\/images\\/no-user.png\"'),
(3, 'Leila', 'Mills', 'mills@leila.com', 'woman', 29, '55', 'San Diego', 'CA', '098765', '9983632461', '\"..\\/assets\\/images\\/no-user.png\"'),
(4, 'Richard', 'Desmond', 'dismond@foo.com', 'man', 30, '90', 'Salt lake city', 'UT', '457320', '90876987654', '\"..\\/assets\\/images\\/no-user.png\"'),
(5, 'Susan', 'Smith', 'susansmith@baz.com', 'woman', 28, '43', 'Luisville', 'KNT', '445321', '224355488976', '\"..\\/assets\\/images\\/no-user.png\"'),
(6, 'Brad', 'Simpson', 'brad@foo.com', 'man', 40, '128', 'Atlanta', 'GEO', '394221', '6854634522', '\"..\\/assets\\/images\\/no-user.png\"'),
(7, 'Neil', 'Walker', 'walkerneil@baz.com', 'man', 42, '1', 'Nashville', 'TN', '90143', '45372788192', '\"..\\/assets\\/images\\/no-user.png\"'),
(8, 'Robert', 'Thomson', 'jackon@network.com', 'man', 24, '126', 'New Orleans', 'LU', '63281', '91232876454', '\"..\\/assets\\/images\\/no-user.png\"');


INSERT INTO admin (id_employee) VALUES 
(1);

