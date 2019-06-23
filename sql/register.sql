CREATE TABLE register (
  id int(11) NOT NULL,
  name varchar(40) NOT NULL,
  lastname varchar(225) NOT NULL,
  email varchar(80) NOT NULL,
  password varchar(8) NOT NULL,
  password2 varchar(8) NOT NULL,
  user varchar(8) NOT NULL
);

ALTER TABLE register
  ADD PRIMARY KEY (id);

ALTER TABLE register
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
