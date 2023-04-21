create database palabras;
use palabras;
create table palabras(
                         id_palabra int auto_increment,
                         palabra varchar(30) not null,
                         constraint palabras_pk primary key(id_palabra),
                         constraint palabras_uk1 unique(palabra)
);
create user palabras@localhost identified by 'uierfh3478ghu3f39jinerf';
grant select,insert,update,delete on palabras.* to palabras@localhost;
select * from palabras;