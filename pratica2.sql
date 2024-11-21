create database pratica2_joao;
use pratica2_joao;
CREATE TABLE cliente(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(100) NOT NULL
);

CREATE TABLE colaborador(
    id INT PRIMARY KEY AUTO_INCREMENT,
    );

CREATE TABLE chamado(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL ,
    descricao TEXT NOT NULL,
    urgencia VARCHAR(15),
    status VARCHAR(15) NOT NULL,
    data_abertura DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_colaborador INT,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id),
    FOREIGN KEY (id_colaborador) REFERENCES colaborador(id)
);