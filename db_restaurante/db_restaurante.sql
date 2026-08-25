CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (id, nome, email, senha) VALUES
(1, 'Maria', 'maria@gmail.com', '123456'),
(2, 'Carlos Souza', 'carlos@email.com', 'segredo123'),
(3, 'Jose Lima', 'joselima@gmail.com', '12345');