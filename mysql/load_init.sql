CREATE DATABASE IF NOT EXISTS glpidb;
CREATE USER glpi_admin@localhost;
GRANT ALL PRIVILEGES ON glpidb.* TO glpi_admin@%localhost IDENTIFIED BY 'GlpiAdminPassWd';
FLUSH PRIVILEGES;