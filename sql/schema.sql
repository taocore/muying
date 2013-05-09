drop database if exists muying;
create database muying;
use muying;

create table category_t(
	id_c bigint auto_increment,
	name_c varchar(128),
	primary key (id_c)
);

create table article_t(
	id_c bigint auto_increment,
	title_c varchar(128),
	content_c text,
	time_c datetime,
	author_c varchar(128),
	source_c varchar(128),
	category_id_c bigint,
	primary key (id_c),
	foreign key (category_id_c) references category_t(id_c)
);

create table tag_t(
	id_c bigint auto_increment,
	name_c varchar(128),
	primary key (id_c)
);

create table article_tag_t(
	article_id_c bigint,
	tag_id_c bigint,
	primary key (article_id_c, tag_id_c),
	foreign key (article_id_c) references article_t(id_c),
	foreign key (tag_id_c) references tag_t(id_c)
);

