CREATE TABLE 'cliente' (
  'cliente_id' INTEGER PRIMARY KEY,
  'cpf' TEXT  NOT NULL,
  'nome' TEXT  NOT NULL,
  'endereco' TEXT  NOT NULL,
  'cidade' TEXT  NOT NULL,
  'estado' TEXT  NOT NULL,
  'tefelone' TEXT  NOT NULL,
  'email' TEXT NOT NULL
);


CREATE TABLE 'fornecedor' (
  'fornecedor_id' INTEGER PRIMARY KEY,
  'cnpj' TEXT NOT NULL,
  'nome_fantasia' TEXT  NOT NULL,
  'razao_social' TEXT  NOT NULL,
  'endereco' TEXT  NOT NULL,
  'cidade' TEXT  NOT NULL,
  'estado' TEXT  NOT NULL,
  'telefone' TEXT  NOT NULL,
  'email' TEXT NOT NULL
) ;

CREATE TABLE IF NOT EXISTS "funcionario" (
  "funcionario_id" integer PRIMARY KEY AUTOINCREMENT,
  "cpf" integer NOT NULL,
  "nome" text NOT NULL,
  "endereco" text NOT NULL,
  "cidade" text NOT NULL,
  "estado" text NOT NULL,
  "telefone_residencial" text NOT NULL,
  "telefone_celular" text NOT NULL,
  "email" text NOT NULL,
  "data_contratacao" date NOT NULL,
  "nivel_permissao" integer
);

CREATE TABLE 'produto' (
  'produto_id' INTEGER PRIMARY KEY,
  'nome' TEXT  NOT NULL,
  'codigo_de_barras' INTEGER NOT NULL,
  'descricao' text
);


CREATE TABLE 'venda' (
  'venda_id' INTEGER PRIMARY KEY,
  'valor_total' float NOT NULL,
  'metodo_pagamento' TEXT not null,
  'desconto' float,
  'cliente_id' INTEGER,
  'funcionario_id' INTEGER,
  FOREIGN KEY('cliente_id') REFERENCES cliente('cliente_id'),
  FOREIGN KEY('funcionario_id') REFERENCES funcionario('funcionario_id')
);

CREATE TABLE 'produto_venda' (
  'venda_id' INTEGER,
  'produto_estoque_id' INTEGER,
  'quantidade' INTEGER NOT NULL,
  FOREIGN KEY('venda_id') REFERENCES venda('venda_id'),
  FOREIGN KEY('produto_estoque_id') REFERENCES produto_estoque('produto_estoque_id')
);


CREATE TABLE 'produto_estoque' (
  'produto_estoque_id' INTEGER PRIMARY KEY,
  'preco_compra' float NOT NULL ,
  'preco_venda' float NOT NULL,
  'quantidade' INTEGER NOT NULL,
  'fornecedor_id' INTEGER,
  'produto_id' INTEGER,
  FOREIGN KEY('fornecedor_id') REFERENCES fornecedor('fornecedor_id'),
  FOREIGN KEY('produto_id') REFERENCES produto('produto_id')
);