create database votacao;
use votacao;

create table aluno(
	id_matricula int auto_increment not null,
    senha varchar(20),
    primary key (id_matricula)
);

create table professor(
	id_matricula int auto_increment not null,
    nome varchar(30),
    senha varchar(20),
    primary key (id_matricula)
);

create table votacao(
	id_matricula_aluno int,
    id_voto int auto_increment not null,
    voto int,
    comentario varchar(500),
    primary key(id_voto),
    foreign key (id_matricula_aluno) references aluno(id_matricula)
);

create table comentario(
	id_comentario int auto_increment,
	matricula varchar(50),
    nome varchar(50),
    comentario varchar(500),
    primary key(id_comentario)
);


SELECT * FROM aluno;
SELECT * FROM professor;
SELECT * FROM votacao;
select * from comentario;
truncate table comentario;