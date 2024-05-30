CREATE DATABASE IF NOT EXISTS beecar;

USE beecar;

CREATE TABLE IF NOT EXISTS usuarios (
	usu_id INT NOT NULL AUTO_INCREMENT,
    usu_nombre VARCHAR(50) NOT NULL,
    usu_apepaterno VARCHAR(50) NOT NULL,
    usu_apematerno VARCHAR(50) NOT NULL,
    usu_correo VARCHAR(30) NOT NULL,
    usu_password VARCHAR(1000) NOT NULL,
    
    PRIMARY KEY(usu_id),
    
    UNIQUE uni_nombreCompleto(usu_nombre,usu_apepaterno,usu_apematerno),
    UNIQUE uni_correo(usu_correo)

);


INSERT INTO usuarios(usu_nombre, usu_apepaterno,usu_apematerno,usu_correo,usu_password)
			VALUES('Antonio','Castillo','Quintanilla','ant@gmail.com','1234');          
            

CREATE TABLE IF NOT EXISTS vehiculos(
	veh_id INT NOT NULL AUTO_INCREMENT,
    veh_modelo VARCHAR(100) NOT NULL, # CAMBIAR EN MODULS EL NOMBRE
    veh_color VARCHAR(50) NOT NULL,
    veh_pasajeros INT NOT NULL,
    veh_maletas INT NOT NULL,
    veh_manejo VARCHAR(10) NOT NULL, # Solo estandar o manual
    veh_combustible VARCHAR(15) NOT NULL,
    veh_disponibles INT,
    veh_costodia DECIMAL(10,2) NOT NULL,
    
    PRIMARY KEY (veh_id),
    INDEX idx_modelo(veh_modelo)   
);

INSERT INTO vehiculos(veh_modelo,veh_color,veh_pasajeros,veh_maletas,veh_manejo,veh_combustible,veh_disponibles,veh_costodia)
			VALUES('March','blanco','4','2','estandar','gasolina','4','540');

CREATE TABLE IF NOT EXISTS tarjeta(
	tar_id INT NOT NULL AUTO_INCREMENT,
	tar_numTarjeta VARCHAR(100) NOT NULL,
    tar_expiracion VARCHAR(10) NOT NULL,
    tar_duenio VARCHAR(100) NOT NULL,
    tar_celular VARCHAR(100) NOT NULL,
    tar_correo VARCHAR(30) NOT NULL,
    
    PRIMARY KEY (tar_id)     
);

INSERT INTO tarjeta(tar_numTarjeta,tar_expiracion,tar_duenio,tar_celular,tar_correo)
		VALUES('148934872364','13/25','Antonio Castillo','4641161514','ant@gmail.com');

CREATE TABLE IF NOT EXISTS reservacion(
	res_id INT NOT NULL AUTO_INCREMENT,
    res_oficinaRenta VARCHAR(200) NOT NULL,
    res_oficinaEntrega VARCHAR(200) NOT NULL,
    res_fechaRenta DATE NOT NULL,
    res_horaRenta TIME NOT NULL,
    res_fechaEntrega DATE NOT NULL,
    res_horaEntrega TIME NOT NULL,
    res_costo DECIMAL(10,2) NOT NULL,
    res_usu_id INT NOT NULL,
    res_veh_id INT NOT NULL,
    res_tar_id INT,
    
    PRIMARY KEY(res_id),
        
	CONSTRAINT fk_res_usu
		FOREIGN KEY (res_usu_id)
		REFERENCES usuarios(usu_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
        
	CONSTRAINT fk_res_veh
		FOREIGN KEY (res_veh_id)
		REFERENCES vehiculos(veh_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
        
	CONSTRAINT fk_res_tar
		FOREIGN KEY (res_tar_id)
		REFERENCES tarjeta(tar_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE   

);

INSERT INTO reservacion(res_oficinaRenta,res_oficinaEntrega,res_fechaRenta,res_horaRenta,res_fechaEntrega,res_horaEntrega,res_costo,res_usu_id,res_veh_id,res_tar_id)
		VALUES('Leon','Leon','2024-03-12','12:00:00','2024-03-17','12:00:00','2390','1','1','1');
        

CREATE TABLE IF NOT EXISTS entrega(
	ent_id INT NOT NULL AUTO_INCREMENT,
    ent_res_id INT NOT NULL,
    ent_fechaReal DATE NOT NULL,
    ent_multa DECIMAL(10,2) NOT NULL,
    ent_danos TEXT,
    ent_costoTotal DECIMAL(10,2) NOT NULL,
    
    PRIMARY KEY (ent_id),
    
	CONSTRAINT fk_ent_res
		FOREIGN KEY (ent_res_id)
		REFERENCES reservacion(res_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);


INSERT INTO entrega(ent_res_id,ent_fechaReal,ent_multa,ent_danos,ent_costoTotal)
	VALUES('1','2024-03-18','600','Ninguno','2990');



