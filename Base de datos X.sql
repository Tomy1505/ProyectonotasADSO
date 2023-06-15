create database Notas2023;
use Notas2023;
create table usuarios(
	id_usu int auto_increment not null primary key,
    Nombreusu varchar(60) not null,
    Apellidousu varchar(60) not null,
    Usuario varchar(40) not null,
    Passwordusu varchar(80) not null,
    Perfil varchar(30) not null,
    Estado varchar(20) not null
);
create table materias(
	id_materia int auto_increment not null primary key,
    Nombremat varchar(30) not null
);
create table estudiantes(
	id_estu int auto_increment not null primary key,
    Nombreestu varchar(60) not null,
    Apellidoestu varchar(60) not null,
    Documentoestu varchar(12) not null,
    Correoestu varchar(60) not null,
    Materiaestu varchar(30) not null,
    Docenteestu varchar(60) not null,
    Promedioestu int(3) not null,
    fecha_registro date not null
);
create table docentes(
	id_docente int auto_increment not null primary key,
    Nombredoc varchar(60) not null,
    Apellidodoc varchar(60) not null,
    Documentodoc varchar(12) not null,
    Correodoc varchar(60) not null,
    Materiadoc varchar(40) not null,
    Notasmate decimal(10,1) not null
);
create table notas_estudiantes_materia(
	id int auto_increment not null primary key,
    id_estudiante int not null,
    id_materia int not null,
    id_docente int not null,
    Puntaje decimal(10,1) not null,
    foreign key(id_estudiante) references estudiantes(id_estu) on delete cascade on update cascade,
    foreign key(id_materia) references materias(id_materia) on delete cascade on update cascade,
    foreign key(id_docente) references docentes(id_docente) on delete cascade on update cascade
);