/* Создание таблицы фотографий */
USE gallery;
CREATE TABLE gallery (
	id smallint unsigned not null auto_increment,		    # id фотографии
	url varchar(255) not null,								# url
	size integer unsigned not null,							# размер
	name varchar(255) not null,								# наименование
	description varchar(1024),								# описание
	views smallint,											# количество просмотров
	constraint pk_id primary key (id)               # первичнй ключ
);