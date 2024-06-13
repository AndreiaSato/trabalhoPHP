CREATE DATABASE stayin;
USE stayin;
CREATE TABLE estudante(
    cpf VARCHAR(14) NOT NULL PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    instituicao_ensino VARCHAR(50) NOT NULL,
    senha VARCHAR(20) NOT NULL
);
CREATE TABLE proprietario(
    cpf VARCHAR(14) NOT NULL PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    senha VARCHAR(20) NOT NULL
);

CREATE TABLE endereco(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    cidade VARCHAR(50) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    rua VARCHAR(50) NOT NULL,
    numero INTEGER(10) NOT NULL,
    complemento VARCHAR(50) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    cep VARCHAR(20) NOT NULL
);

CREATE TABLE imovel(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(20) NOT NULL,
    valor DOUBLE NOT NULL,
    contrato VARCHAR(50) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    situacao VARCHAR(20) NOT NULL,
    proprietario_id VARCHAR(14),
    FOREIGN KEY (proprietario_id) REFERENCES proprietario (cpf),
    endereco_id INTEGER,
    FOREIGN KEY (endereco_id) REFERENCES endereco (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE reserva(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    data_inicial DATE NOT NULL,
    data_final DATE NOT NULL,
    situacao VARCHAR(5) NOT NULL,
    estudante_id VARCHAR(14),
    FOREIGN KEY (estudante_id) REFERENCES estudante (cpf),
    imovel_id INTEGER,
    FOREIGN KEY (imovel_id) REFERENCES imovel (id)
);