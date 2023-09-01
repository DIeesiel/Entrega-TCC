CREATE TABLE usuarios(
      id_usuario int auto_increment primary key not null unique,
      email varchar(50) not null,
      nome varchar(50) not null,
      sobrenome varchar(50) not null,
      senha varchar(50) not null
);

CREATE TABLE dizimista (
    id_dizimista INT AUTO_INCREMENT PRIMARY KEY NOT NULL UNIQUE,
    nome VARCHAR(50) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    logradouro VARCHAR(50),
    cpf VARCHAR(15) NOT NULL,
    FOREIGN KEY (id_dizi)
        REFERENCES dizimo (id_dizimo)
);

create table dizimo (
	id_dizimo int auto_increment primary key not null unique
);

select * from usuarios;