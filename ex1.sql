use mysql;
create user 'adcli'@'localhost' identified by "Daw2022@";
create database bdcli;
use bdcli;
grant all privileges on bdcli.* to 'adcli'@'localhost';
