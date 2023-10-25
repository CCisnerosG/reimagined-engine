create database SweetSeasons;
use SweetSeasons;

CREATE TABLE categoria(
	id_categoria  INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Descripcion VARCHAR(100)
)
ENGINE = InnoDB;

CREATE TABLE productos(
	id_producto INT PRIMARY KEY,
    Nombre VARCHAR(50),
    id_categoria INT,
    Cantidad INT,
    Descripcion VARCHAR(100),
    Tamano VARCHAR(1),
    Precio INT,    
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
)
ENGINE = InnoDB;

CREATE TABLE clientes(
	id_cliente INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Primer_apellido VARCHAR(50),
    Segundo_apellido VARCHAR(50),
    Correo VARCHAR(50),
    Numero_telefonico VARCHAR(10),
    Direccion varchar(50)
)
ENGINE = InnoDB;

CREATE TABLE ventas(
	id_venta INT PRIMARY KEY,
    Fecha_venta DATE,
    id_cliente INT,
    id_producto INT,
    Cantidad INT,
    Precio INT,
    Total INT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
)
ENGINE = InnoDB;

CREATE TABLE ingredientes(
	id_ingrediente INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Unidad_medida VARCHAR(50),
    Precio INT,
    id_proveedor INT
)
ENGINE = InnoDB;

CREATE TABLE proveedores(
	id_proveedor INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Primer_apellido VARCHAR(50),
    Segundo_apellido VARCHAR(50),
    Numero_telefonico VARCHAR(10),
    Correo VARCHAR(50),
    id_ingrediente INT,
    Estado VARCHAR(10),
    FOREIGN KEY (id_ingrediente) REFERENCES ingredientes(id_ingrediente)
)
ENGINE = InnoDB;

CREATE TABLE compras(
	id_compra INT PRIMARY KEY,
    Fecha_compra DATE,
    id_proveedor INT,
    id_producto INT,
    Cantidad INT,
    Precio INT,
    Total INT,
    FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
)
ENGINE = InnoDB;


ALTER TABLE ingredientes
ADD FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor);

INSERT INTO `sweetseasons`.`categoria` (`id_categoria`, `Nombre`, `Descripcion`) VALUES ('1', 'Pasteleria', 'Productos de pasteleria');
INSERT INTO `sweetseasons`.`productos` (`id_producto`, `Nombre`, `id_categoria`, `Cantidad`, `Descripcion`, `Tamano`, `Precio`) VALUES ('1', 'Pastel Choco', '1', '4', 'Pastel delicioso de chocolate', 'M', '15000');
INSERT INTO `sweetseasons`.`productos` (`id_producto`, `Nombre`, `id_categoria`, `Cantidad`, `Descripcion`, `Tamano`, `Precio`) VALUES ('2', 'Pastel Red', '1', '4', 'Pastel de Red Velvet', 'M', '15700');
