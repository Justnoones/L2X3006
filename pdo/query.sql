CREATE DATABASE school;

CREATE TABLE students (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL,
password VARCHAR(200) NOT NULL,
gender CHAR(6) NOT NULL,
date_of_birth DATE NOT NULL,
age TINYINT UNSIGNED
);

CREATE TABLE courses (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL
);

CREATE TABLE students_courses (
student_id INT NOT NULL,
course_id INT NOT NULL
);

INSERT INTO students (name, email, password, gender, date_of_birth, age) VALUES
	("Admin", "admin@gmail.com", "admin123", "male", "2006-2-14", 17);
	("Jhon", "Jhon@gmail.com", "jhon123", "male", "1999-5-12", 24),
	("Joe", "joe@gmail.com", "jhon123", "male", "2004-7-2", 19),
	("Peter", "peter@gmail.com", "peter123", "male", "200-4-8", 23),
	("Mery", "mery@gmail.com", "mery123", "female", "2006-2-14", 17),
	("Quagmire", "quagmire@gmail.com", "quagmire123", "male", "1995-12-1", 28),
	("Hinata", "hinata@gmail.com", "hinata123", "fmale", "2005-9-30", 16);

INSERT INTO courses (name) VALUES
	('PHP'),
	('JavaScript'),
	('Java'),
	('Python');

INSERT INTO students_courses VALUES
(1, 1),
(1, 3),
(2, 3),
(2, 4),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(1, 4),
(5, 1),
(5, 2);

SELECT students.name, students.age, students.gender, students.email, courses.name as course FROM students
	JOIN students_courses ON students_courses.student_id = students.id
	JOIN courses ON courses.id = students_courses.course_id
	ORDER BY students.name ASC;

SELECT students.name, students.age, students.gender, students.email, COUNT(students_courses.student_id) AS courses
FROM students
	JOIN students_courses ON students_courses.student_id = students.id
	WHERE id = 1;


C - create.php
    
    INSERT INTO `students` (`name`, `age`, `gender`, `email`, `password`) VALUES
    ('Jhon', 18, 'male', 'jhon@gmail.com', 'jhon123');

R - reade.php
    SELECT * FROM `students`;
    SELECT * FROM `students` WHERE `id` = 1;

U - update.php
    UPDATE `students`
    SET `name` = 'Mery', `age` = 17, `gender` = 'female', `email` = 'mery@gmail.com', `password` = 'mery123'
    WHERE `id` = 7;


D - delete.php
    DELETE FROM `students` WHERE `id` = 7;