USE dbteste;

/*INSERINDO DADOS EM UM BANCO DE DADOS
perceba que nesse insert nao precisamos informar o nome das colunas
isso aconteceu porque estamo inserindo todas as colunas da nossa tabela
é implicito que estamos inserindo todos dados da tabela */
INSERT INTO
produtos
VALUES
(1,'camiseta gremio','CAMISETA COM LISTAS',89.95,1.5,5,2,'DISPONIVEL COM SEGUINTES NUMERACOES: 3,5,2');

/*na neste insert como queremos inserir apenas alguns dados precisamos
  informar quais campos queremos prencher*/
INSERT INTO produtos (CODIGO_PRODUTO) VALUE (3);

