CREATE TABLE la_clientes (
clientid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
RUC VARCHAR(10) NOT NULL,
  username VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP,
  tipousuarioid int (11) NOT NULL
);


CREATE TABLE la_facturas (
facturaid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
clientid int(11) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
  tipofacturaid int(11) NOT NULL,
reg_date TIMESTAMP
);


CREATE TABLE la_tiposusuarios (
  tipofacturaid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

  tipousuario VARCHAR(50)
);

CREATE TABLE la_tiposfacturas (
  tipofacturaid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

  tipofactura VARCHAR(50)
);
