/*SELECIONAR O BANCO*/
USE EstudosPHP;

/*INSERIR NA TABELA*/
INSERT INTO usuarios (id,nome,email) VALUES (10,'tiago','tiago@gmail.com');/*varificar a chave primaria para auto incremento*/

/*SELECIONAR NO BANCO*/
SELECT * FROM usuarios;

/*DELETANDO NO BANCO*/
DELETE usuarios WHERE nome = 'TIMTEO';

/*ATUALIZANDO DADOS*/
UPDATE usuarios SET nome = 'joelma' WHERE id = 6;
