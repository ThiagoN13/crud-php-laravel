use crud;
create table usuarios (
	id int primary key auto_increment,
    nome varchar(250),
    email varchar(250),
    senha varchar(250),
    tipo_usuario varchar(250),
    descricao varchar(250),
    created_at date,
    updated_at date
);
