CREATE DATABASE YourMovie

CREATE TABLE ACTOR
(
	codigo varchar(10) not null,
	nombre varchar(30),
	CONSTRAINT ACTOR_PK PRIMARY KEY (codigo)
); 

CREATE TABLE GENERO
(
	codigo varchar(10) not null,
	nombre varchar(30),
	CONSTRAINT GENERO_PK PRIMARY KEY (codigo)
); 

CREATE TABLE CINE
(
	codigo varchar(10) not null,
	nombre varchar(30),
	CONSTRAINT CINE_PK PRIMARY KEY (codigo)
); 

CREATE TABLE DIRECTOR
(
	codigo varchar(10) not null,
	nombre varchar(30),
	CONSTRAINT DIRECTOR_PK PRIMARY KEY (codigo)
); 

CREATE TABLE PELICULA
(
	codigo varchar(10) not null,
	nombre varchar(30),
	coddirector varchar(10),
	codgenero varchar(10),
	descripcion varchar(50),
	CONSTRAINT PELICULA_PK PRIMARY KEY (codigo),
	CONSTRAINT FK_DIRECTOR FOREIGN KEY (coddirector) REFERENCES DIRECTOR(codigo),
	CONSTRAINT FK_GENERO FOREIGN KEY (codgenero) REFERENCES GENERO(codigo)
); 

CREATE TABLE ACTOR_X_PELICULA 
(
	codActor varchar(10),
	codPelicula varchar(10),
	CONSTRAINT PK_ACTOR_X_PELICULA	PRIMARY KEY (codActor,codPelicula),
	CONSTRAINT FK_ACTOR_PELICULA FOREIGN KEY (codActor) REFERENCES ACTOR(codigo),
	CONSTRAINT FK_PELICULA_ACTOR FOREIGN KEY (codPelicula) REFERENCES PELICULA(codigo)
);

CREATE TABLE USUARIO
(
	codigo varchar(10) not null,
	nombre_apellido varchar(50),
	user varchar(30),
	password varchar(30),
	sexo varchar(15),
	CONSTRAINT USUARIO_PK PRIMARY KEY (codigo)
); 

CREATE TABLE USUARIO_X_CINE
(
	codUser varchar(10),
	codCine varchar(10),
	CONSTRAINT PK_USUARIO_X_CINE	PRIMARY KEY (codUser,codCine),
	CONSTRAINT FK_USUARIO_CINE FOREIGN KEY (codUser) REFERENCES USUARIO(codigo),
	CONSTRAINT FK_CINE_USUARIO FOREIGN KEY (codCine) REFERENCES CINE(codigo)
);

CREATE TABLE USUARIO_X_PELICULA
(
	codUser varchar(10),
	codPelicula varchar(10),
	CONSTRAINT PK_USUARIO_X_PELICULA PRIMARY KEY (codUser,codPelicula),
	CONSTRAINT FK_USUARIO_PELICULA FOREIGN KEY (codUser) REFERENCES USUARIO(codigo),
	CONSTRAINT FK_PELICULA_USUARIO FOREIGN KEY (codPelicula) REFERENCES PELICULA(codigo)
);

CREATE TABLE USUARIO_X_ACTOR
(
	codUser varchar(10),
	codActor varchar(10),
	CONSTRAINT PK_USUARIO_X_ACTOR	PRIMARY KEY (codUser,codActor),
	CONSTRAINT FK_USUARIO_ACTOR FOREIGN KEY (codUser) REFERENCES USUARIO(codigo),
	CONSTRAINT FK_ACTOR_USUARIO FOREIGN KEY (codActor) REFERENCES ACTOR(codigo)
);

CREATE TABLE USUARIO_X_GENERO
(
	codUser varchar(10),
	codgenero varchar(10),
	CONSTRAINT PK_USUARIO_X_GENERO	PRIMARY KEY (codUser,codgenero),
	CONSTRAINT FK_USUARIO_GENERO FOREIGN KEY (codUser) REFERENCES USUARIO(codigo),
	CONSTRAINT FK_GENERO_USUARIO FOREIGN KEY (codgenero) REFERENCES GENERO(codigo)
);

