  create database tcc;
  use tcc;

  create table cliente(
  cpf int not null,
  nome_cliente varchar(45) not null,
  data_nascimento date,
  email varchar(30) not null,
  celular varchar(11),
  usuario varchar(30) not null,
  senha varchar(30) not null,
  primary key(cpf));

  create table promocoes(
    id_promocoes int not null AUTO_INCREMENT,
    descricao text(150),
    id_produto int,
    valor_promocao float,
    data_inicio date,
    data_final date,
    primary key(id_promocoes));
  /**
  foreign key(id_produto) references produto(id_produto),
  **/
ALTER TABLE promocoes
ADD CONSTRAINT id_produto FOREIGN KEY (id_produto) REFERENCES produto(id_produto);

create table produto(
id_produto int not null AUTO_INCREMENT ,
nome_produto varchar(45),
valor_produto varchar(45),
foto blob,
primary key(id_produto));
/**
foreign key(id_itens_pedido) references itens_pedido(id_itens_pedido),
foreign key(cpf) references cliente(cpf),
**/
ALTER TABLE produto
ADD CONSTRAINT id_venda FOREIGN KEY (id_venda) REFERENCES venda(id_venda);



create table itens_pedido(
  id_itens_pedido int not null AUTO_INCREMENT ,
  id_produto varchar(45),
  valor_produto varchar(45),
  cpf int,
  id_venda int,
  primary key(id_itens_pedido));

  /**
  foreign key(id_venda) references venda(id_venda),
  foreign key(cpf) references cliente(cpf),
 **/

ALTER TABLE itens_pedido
ADD CONSTRAINT id_venda FOREIGN KEY (id_venda) REFERENCES venda(id_venda);
ALTER TABLE itens_pedido
ADD CONSTRAINT cpf FOREIGN KEY (cpf) REFERENCES cliente(cpf);



create table venda(
    id_venda int not null AUTO_INCREMENT ,
    cpf int,
    email varchar(30),
    id_produto int,
     primary key(id_venda));

     /**
    foreign key(cpf) references cliente(cpf),
     foreign key(id_produto) references produto(id_produto),
   **/

ALTER TABLE venda
ADD CONSTRAINT cpf FOREIGN KEY (cpf) REFERENCES cliente(cpf);
ALTER TABLE venda
ADD CONSTRAINT id_produto FOREIGN KEY (id_produto) REFERENCES produto(id_produto);


create table genero(
  id_genero int not null AUTO_INCREMENT,
  gen_produto varchar(45),
  id_produto int,
   primary key(id_genero));

   /**
  foreign key(id_produto) references produto(id_produto),
 **/

ALTER TABLE genero
ADD CONSTRAINT id_produto FOREIGN KEY (id_produto) REFERENCES produto(id_produto);


create table pagamento(
    id_pagamento int not null AUTO_INCREMENT,
    descricao text(150),
    id_venda int,
    primary key(id_pagamento));

    /**
    foreign key(id_venda) references venda(id_venda),
    **/

ALTER TABLE pagamento
ADD CONSTRAINT id_venda FOREIGN KEY (id_venda) REFERENCES venda (id_venda);
