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
		
select * from productos where idProductos = 131;
select * from modelos where fkProductos = 131;
select * from imagen where fkModelos = 218;

update modelos set Descripcion="Banca de espera para 2 personas, con asiento y respaldo tapizados con vinil o pliana sobre espuma de poliuretano de alta densidad, con estructura de tubo de acero rectangular de 2 1/2 pulgadas X 1 1/4 en calibre 18, esmaltada en negro con pintura horneada<br>Medidas:<br>2 plazas (largo de 109 cm)", Precio = 1450 where idModelos = 191;
insert into modelos values(null, "BANCA DE ESPERA TAPIZADA", "BR-T", "Banca de espera para 3 personas, con asiento y respaldo tapizados con vinil o pliana sobre espuma de poliuretano de alta densidad, con estructura de tubo de acero rectangular de 2 1/2 pulgadas X 1 1/4 en calibre 18, esmaltada en negro con pintura horneada<br>Medidas: 3 plazas (largo de 164 cms)", 1975,131);
insert into modelos values(null, "BANCA DE ESPERA TAPIZADA", "BR-T", "Banca de espera para 4 personas, con asiento y respaldo tapizados con vinil o pliana sobre espuma de poliuretano de alta densidad, con estructura de tubo de acero rectangular de 2 1/2 pulgadas X 1 1/4 en calibre 18, esmaltada en negro con pintura horneada<br>Medidas: 4 plazas (con pata intermedia y largo de 218 cms)", 2650,131);

insert into imagen values(null, "./img/espera/espera principal/br-t 3p.jpg", 218);
insert into imagen values(null, "no existe", 219);
