CREATE DATABASE gerenciador_tarefas;

USE gerenciador_tarefas;

CREATE TABLE tarefas (
    id int NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(250) NOT NULL,
    descricao TEXT NOT NULL,
    data_de_vencimento DATETIME NOT NULL,
    status BOOLEAN NOT NULL,
    PRIMARY KEY (id)
);