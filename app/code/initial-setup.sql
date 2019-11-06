 --Created!
--You have successfully created a new database. The details are below.
--Username: T8wyt07TfK
--Database name: T8wyt07TfK
--Password: gIJxlN5rpP
--Server: remotemysql.com
--Port: 3306
--These are the username and password to log in to your database and phpMyAdmin
--Make sure you keep your password secure. Ensure you keep back ups of your database in case it gets deleted.

use T8wyt07TfK;

create table tbl_encuestas ( id_encuesta integer not null auto_increment,
id_persona integer,
id_formulario integer,
primary key (id_encuesta) );

create table tbl_personas ( id_persona integer not null auto_increment,
nombre varchar(99),
sexo varchar(1),
salario decimal(8,
2),
provincia varchar(99),
edad integer,
primary key (id_persona) );

create table tbl_formulario ( id_formulario integer not null auto_increment,
preg_1 integer,
preg_2 integer,
preg_3 integer,
preg_4 integer,
preg_5 integer,
preg_6 integer,
preg_7 integer,
preg_8 integer,
preg_9 integer,
preg_10 integer,
res_1 integer,
res_2 integer,
res_3 integer,
res_4 integer,
res_5 integer,
res_6 integer,
res_7 integer,
res_8 integer,
res_9 integer,
res_10 integer,
primary key (id_formulario) );

create table tbl_cat_preguntas ( id_cat_pregunta integer not null auto_increment,
descripcion varchar(999),
primary key (id_cat_pregunta) );

create table tbl_cat_respuestas ( id_cat_respuesta integer not null auto_increment,
id_cat_pregunta integer,
descripcion varchar(999),
primary key (id_cat_respuesta) );

alter table tbl_encuestas add constraint encuestas_personas_fk foreign key (id_persona) references tbl_personas (id_persona);

alter table tbl_encuestas add constraint encuestas_formulario_fk foreign key (id_formulario) references tbl_formulario (id_formulario);

alter table tbl_cat_respuestas add constraint respuestas_preguntas_fk foreign key (id_cat_pregunta) references tbl_cat_preguntas (id_cat_pregunta);

INSERT
	INTO
	tbl_cat_preguntas
VALUES (1,
'¿Le gusta comprar por internet?');

--
INSERT
	INTO
	tbl_cat_preguntas
VALUES (2,
'¿Cuándo compra, suele dejar comentarios sobre su compra?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (3,
'¿Usted prefiere comprar de forma física o digital?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (4,
'¿Usted que tipo de productos compra por Internet?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (5,
'¿Qué formas de pago ha utilizado en sus compras por Internet?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (6,
'¿Cuál de las siguientes tiendas prefiere para sus compras por Internet?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (7,
'¿Usted qué características positivas destaca de la(s) tienda(s) virtuales que visitó?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (8,
'¿Con qué frecuencia suele comprar por internet?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (9,
'¿Qué presupuesto estima para sus compras?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (10,
'¿Por qué compra por Internet?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (11,
'¿En qué países usualmente compra?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (12,
'¿Es mejor comprar ropa por internet que en un almacen?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (13,
'Ha tenido alguna mala experiencia comprando por internet?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (14,
'¿Devolviste alguno de los productos que compraste?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (15,
'¿Cómo te enteraste de las compras por internet?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (16,
'¿En que condiciones le llegó, en general, lo adquirido por Internet?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (17,
'¿Recomendarías a otras personas usar internet para comprar?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (18,
'¿Consideras que es complicado realizar compras online?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (19,
'¿Las tiendas donde compras estan es español?');

INSERT
	INTO
	tbl_cat_preguntas
VALUES (20,
'¿Què te gusta para conocer el producto?');

INSERT
	INTO
	tbl_cat_respuestas
VALUES (1,
1,
'Sí');

INSERT
	INTO
	tbl_cat_respuestas
VALUES (2,
1,
'No');

INSERT
	INTO
	tbl_cat_respuestas
VALUES (3,
2,
'Sí');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (4,
2,
'No');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (5,
2,
'A veces');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (6,
3,
'Prefiero ir a la tienda personalmente');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (7,
3,
'Prefiero comprar por internet');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (8,
4,
'Aparatos electrónicos');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (9,
4,
'Ropa');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (10,
4,
'Productos de Belleza');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (11,
5,
'Tarjeta de Crédito Propia');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (12,
5,
'Paypal vinculada a mi TC');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (13,
5,
'No tengo TC, Solicito asistencia');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (14,
6,
'Amazon.com');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (15,
6,
'Ebay.com');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (16,
6,
'Alibaba.com / Aliexpress.com');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (17,
7,
'Siempre encuentro lo que busco');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (18,
7,
'Es una tienda segura y confiable');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (19,
7,
'Es una tienda segura y confiable');

INSERT
	INTO
	tbl_cat_respuestas
VALUES (20,
7,
'Es fácil de usar');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (21,
8,
'1 vez al mes');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (22,
8,
'1 vez cada 3 meses');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (23,
8,
'1 vez cada 6 meses');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (24,
8,
'1 vez al año');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (25,
9,
'menos de $50');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (26,
9,
'$50- $200');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (27,
9,
'$200-$500');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (28,
9,
'$500 + ');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (29,
10,
'Precio');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (30,
10,
'Calidad');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (31,
10,
'Confiabilidad del Vendedor');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (32,
11,
'Estados Unidos');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (33,
11,
'China');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (34,
11,
'Países de Europa');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (35,
12,
'Sí');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (36,
12,
'No');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (37,
13,
'Sí');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (38,
13,
'No');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (39,
14,
'Sí');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (40,
14,
'No');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (41,
15,
'Publicidad en las calles');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (42,
15,
'Lo vi por redes sociales');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (43,
15,
'Me enteré por un amigo / familiar');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (44,
16,
'En perfecto estado');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (45,
16,
'Con detalles en la cajeta por transporte');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (46,
16,
'En mal estado');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (47,
17,
'Sí');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (48,
17,
'No');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (49,
18,
'Sí');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (50,
18,
'No');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (51,
19,
'Sí');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (52,
19,
'No');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (53,
20,
'Ver los comentarios de otros compradores');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (54,
20,
'Ver videos del producto');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (55,
20,
'Ver fotos del producto');

--
INSERT
	INTO
	tbl_cat_respuestas
VALUES (56,
20,
'Ver la descripcion que brinda el vendedor');

INSERT
	INTO
	tbl_personas
VALUES (1,
'Keanu Reeves',
'm',
9876.54,
'Panamá',
55 );

