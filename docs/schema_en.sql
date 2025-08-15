-- English translation of the original SQL schema

CREATE TABLE faults (
  id INT AUTO_INCREMENT PRIMARY KEY,
  equipment_id INT NOT NULL,
  status_id INT NOT NULL,
  user_id INT NOT NULL,
  entry_date DATE NOT NULL,
  delivery_date DATE NOT NULL,
  budget DOUBLE NULL,
  client_id INT NULL,
  observations VARCHAR(2048) NOT NULL,
  expected_date DATE NULL,
  CONSTRAINT fk_faults_equipment FOREIGN KEY (equipment_id) REFERENCES equipment(id),
  CONSTRAINT fk_faults_status FOREIGN KEY (status_id) REFERENCES statuses(id),
  CONSTRAINT fk_faults_user FOREIGN KEY (user_id) REFERENCES users(id),
  CONSTRAINT fk_faults_client FOREIGN KEY (client_id) REFERENCES clients(id)
);

CREATE TABLE clients (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(512) NOT NULL,
  address VARCHAR(512) NULL,
  phone INT NOT NULL,
  email VARCHAR(512) NULL,
  user_id INT NOT NULL
);

CREATE TABLE equipment (
  id INT AUTO_INCREMENT PRIMARY KEY,
  imei VARCHAR(512) NOT NULL UNIQUE,
  model VARCHAR(254) NOT NULL,
  observations VARCHAR(512) NOT NULL,
  client_id INT NOT NULL,
  CONSTRAINT fk_equipment_client FOREIGN KEY (client_id) REFERENCES clients(id)
);

CREATE TABLE statuses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  description VARCHAR(512) NOT NULL,
  css_class VARCHAR(24) NOT NULL
);

INSERT INTO statuses (id, description, css_class) VALUES
(1, 'Under Analysis', 'alert-info'),
(2, 'Under Repair', 'alert-warning'),
(3, 'Not Repairable', 'alert-danger'),
(4, 'Repaired', 'alert-success'),
(5, 'Delivered', 'alert-success'),
(6, 'Delivered without Repair', 'alert-danger');

CREATE TABLE stock (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  equipment VARCHAR(30) NOT NULL,
  cases INT NOT NULL,
  white_frames INT NULL,
  black_frames INT NULL,
  white_glasses INT NULL,
  black_glasses INT NULL,
  polarized_films INT NULL,
  tempered_films INT NULL
);

INSERT INTO stock (id, equipment, cases, white_frames, black_frames, white_glasses, black_glasses, polarized_films, tempered_films) VALUES
(6, 'Apppp', 56, 78, 67, 67, 76, 100, 65),
(7, 'Apure', 55, 66, 77, 99, 98, 77, 66);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(512) NOT NULL,
  username VARCHAR(254) NOT NULL,
  password VARCHAR(254) NOT NULL,
  type INT NOT NULL
);
