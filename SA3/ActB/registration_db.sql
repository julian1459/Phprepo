CREATE TABLE registrations (

    id INT AUTO_INCREMENT PRIMARY KEY,

    fname VARCHAR(50) NOT NULL,

    mname VARCHAR(50) NOT NULL,

    lname VARCHAR(50) NOT NULL,

    username VARCHAR(50) NOT NULL UNIQUE,

    password VARCHAR(255) NOT NULL,

    birthday VARCHAR(50) NOT NULL,

    email VARCHAR(100) NOT NULL,

    contact VARCHAR(20) NOT NULL

);