CREATE TABLE
    usuarios (
        id int (255) auto_increment not null,
        nombre varchar(100) not null,
        apellidos varchar(100) not null,
        email varchar(255) not null,
        password varchar(255) not null,
        fecha date not null,
        CONSTRAINT pk_usuarios PRIMARY KEY (id),
        CONSTRAINT uq_email UNIQUE (email)
    ) ENGINE = InnoDb;

CREATE TABLE
    categorias (
        id int (255) auto_increment not null,
        nombre varchar(100),
        CONSTRAINT pk_categorias PRIMARY KEY (id)
    ) ENGINE = InnoDb;

CREATE TABLE
    entradas (
        id int (255) auto_increment not null,
        usuario_id int (255) not null,
        categoria_id int (255) not null,
        titulo varchar(100) not null,
        descripcion MEDIUMTEXT,
        fecha date not null,
        CONSTRAINT pk_entradas PRIMARY KEY (id),
        CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios (id),
        CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias (id) ON DELETE CASCADE
    ) ENGINE = InnoDb;

    -- ON DELETE CASCADE : Hace que cuando se borre el registro en la tabla principal tambien se borre en la fk
    -- ON DELETE SET NULL
    -- ON DELETE SET DEFAULT
    -- ON DELETE NO ACTION: lo que hace por defecto
    -- ON UPDATE CASCADE :