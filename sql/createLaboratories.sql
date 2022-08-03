-- Active: 1658080016491@@127.0.0.1@3306@sistema_inventario
use sistema_inventario;

## Creating the categories
DELETE FROM categories;

-- NOTAS:
-- Se asume que cada categoria comparte los mismos campos entre laboratorios
-- Por ejemplo todos los laboratorios de Hematología tienen los mismos campos
-- 
INSERT INTO categories(category)
values('HEMATOLOGIA'), 
('HEMOTASIS'),
('UROLOGIA'),
('Coprologia'),
('MARCADORES TUMORALES'),
('INMUNOLOGIA'),
('INFECCIOSAS'),
('QUIMICA'),
('TIROIDEOS'),
('HORMONAS'),
('MICROBIOLOGIA'),
('DROGAS'),
('MICROSCOPIA');


INSERT INTO fields(cat_id, field_pm, field_rgmin, field_rgmax, field_tp)
    VALUES
(1, 'Rec. Globulos blancos', '5000.00', '10000.00', 'mm3'),
(1, 'Rec. Globulos rojos', '4500.00', '10000.00', 'mm3'),
(1, 'Hemoglobina', '12.6', '16.0', 'gr/dr'),
(1, 'Plaquetas', '150.00', '500.00', 'mm3'),
(1, 'Formula Referencia', '0', '0', ''),
(1, 'Segmentados', '45', '64', '%'),
(1, 'Linfositos', '20', '45', '%'),
(1, 'Monocitos', '0', '5', '%'),
(1, 'Eosinofilos', '1.0', '5.0', '%'),
(1, 'Velocidad de sedmentación', '0', '15', 'mm/hrs'),

-- HEMOTASIS CAMPOS
(2, 'Campo de Prueba1', '10', '20', 'mm3');

INSERT INTO lab_types(field_id, cat_id, lab_name, lab_pc)
    VALUES
(1, 1, 'HEMATOLOGIA COMPLETA 22/P ERITROSEDIMENTACION INCLUIDA', '399'),
(1, 1, 'ERITROSEDIMENTACION', '247'),
(1, 1, 'CLASIFICACION DE ANEMIAS', '890'),
(1, 1, 'FROTE PERIFERICO', '123'),
(1, 1, 'GOTA GRUESA', '546'),
(1, 1, 'GRUPO SANGUINEO Y FACTOR RH', '200'),
(1, 1, 'HEMOGLOBINA - HEMATOCRITO', '200'),
(1, 1, 'RECUENTO DE BLANCOS Y FORMULA', '200'),
(1, 1, 'RECUENTO DE EOSINOFILOS', '200'),
(1, 1, 'RECUENTO DE PLAQUETAS', '200'),
(1, 1, 'Recuento de Reticulositos', '200'),
(1, 1, 'CRIOGLOBULINAS', '200'),
(1, 1, 'ELECTROFORESIS DE HEMOGLOBINA', '200'),
(1, 1, 'ELECTROFORESIS DE PROTEINAS', '200'),
(1, 1, 'ELECTROFORESIS DE LIPOPROTEINAS', '200'),
(2, 2, 'TIEMPO DE PROTOMBINA (TP)', '115'),
(2, 2, 'TIEMPOPARCIAL DE TROMBOPLASTINA (PTP)', '117'),
(2, 2, 'INR', '128'),
(2, 2, 'TIEMPO DE COAGULACION', '135'),
(2, 2, 'TIEMPO DE SANGRIA', '75'),
(2, 2, 'FIBRIOGENO', '80');

/* HEMOTASIS */

/* Exámenes de hematología */
/* ('', '', '[]', '[]') */

update laboratories 
set 
    parameters = '{"Rec. Globulos rojos":"4,5000,000 - 10,000,00 mm3","Hemoglobina":"12.6 - 16.0 gr/dr","Plaquetas":"150.000 - 500.00/ mm3","Formula Referencia":"","Segmentados":"45 - 64%","Linfositos":"20 - 45%","Monocitos":"0 - 5%","Eosinofilos":"1.0 - 5.0%","Velocidad de sedmentación":"0 - 15 mm/hrs"}'
where id = 1;

-- Estructura de base de datos

-- // Laboratory

-- laboratory -> lab_cod cat_fk lab_nm, lab_pc

-- fields -> laboratory_id, fields_pm (Rec. Globulos blancos), fields_rgmin 5000 fields_rgmax 10000 fields_tp 'm3'

-- /laboratories - select lab_nm, cat_nm, lab_pc

/* Creating new client */

INSERT INTO clients(name, nit, mail)
VALUES 
('Bryan Arévalo', '1428075-8', 'Bryantello2010@hotmail.com'),
('Juanito Perez', '12313414', 'juanitoperez@correoelectronico.com');