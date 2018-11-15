use sym;

show tables;

select * from categorias;
select * from productos;
select * from modelos; 
select * from imagen;

create table modelos(idModelos int primary key not null auto_increment,
					Nombre varchar(100),
                    Modelo varchar(15),
                    Descripcion varchar(5000),
                    Precio double,
                    fkProductos int,
                    foreign key(fkProductos) references productos(idProductos));
                    
create table imagen(idImagen int primary key not null auto_increment,
					Ruta varchar(500),
                    fkModelos int,
                    foreign key(fkModelos) references modelos(idModelos));
                    
select * from productos where idProductos = 92;
select * from modelos where fkProductos = 92;

select * from imagen where fkModelos = 154;
update imagen set Ruta = "./img/oficina/oficina principal/modulo directivo.jpg" where idImagen = 192;