create database tcc;
use tcc;

create table cliente(
cpf int not null,
nome_cliente varchar(30),
data_nascimento date,
email varchar(30),
celular varchar(11),
primary key(cpf));


create table produto(
id_produto int not null AUTO_INCREMENT ,
nome_produto varchar(30),
valor_produto varchar(6),
primary key(id_produto));



create table venda(
    id_venda int not null AUTO_INCREMENT ,
    cpf int(14),
    email varchar(30),
    id_produto int,
    primary key(id_venda));
  
    /**foreigns keys de VENDA

  ALTER TABLE venda
  ADD FOREIGN KEY (cpf) REFERENCES cliente (cpf);
    ALTER TABLE venda
  ADD FOREIGN KEY (email) REFERENCES cliente (email);
    ALTER TABLE venda
  ADD FOREIGN KEY (valor_produto) REFERENCES produto (valor_produto);

   foreigns keys de VENDA **/



create table pagamento(
    id_pagamento int not null AUTO_INCREMENT,
    email varchar(30) not null,
    id_produto int not null,
    valor_produto varchar(6),
    primary key(id_pagamento));

/**foreigns keys de PAGAMENTO

ALTER TABLE pagamento
  ADD FOREIGN KEY (email) REFERENCES cliente (email);

  ALTER TABLE pagamento
  ADD FOREIGN KEY (id_produto) REFERENCES produto (id_produto);
  
  ALTER TABLE pagamento
  ADD FOREIGN KEY (valor_produto) REFERENCES produto (valor_produto);

foreigns keys de PAGAMENTO**/

create table envio_produto(
    id_envio int,
    codigo_jogo int  AUTO_INCREMENT,
    primary key (codigo_jogo));



