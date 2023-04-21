create user tareas@localhost identified by 'tareas';
create database tareas;
use tareas;
grant select,insert,update,delete on tareas.* to tareas@localhost;
create table tareas(
                       id_tarea int primary key auto_increment,
                       titulo varchar(100) not null
);
select * from tareas;
drop table tareas;