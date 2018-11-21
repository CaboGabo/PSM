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
                    
                    
select * from productos where idProductos=6;
select * from modelos where fkProductos=6;


update modelos set Nombre="TABLÓN RECTANGULAR PLEGABLE", Modelo="MP-R 2475", Descripcion="Tablón plegable rectangular para eventos, de 2.35 x .75 x .75 de altura, con sistema plegable semiautomático, y cubierta protegida en su perimetro con moldura de aluminio, estructura esmaltada en negro con pintura horneada. Con cubierta de fibra de de vidrio y estructura reforzada.", Precio=1200 where idModelos=13; 
select * from imagen where fkModelos=13;
update imagen set Ruta="./img/plegables/plegables principal/tablon rectangular triplay.jpg" where idImagen=13;
insert into imagen values(null, "./img/plegables/plegables principal/tablones en varias medidas.jpg", 193);



				