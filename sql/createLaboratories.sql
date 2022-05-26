use sistema_inventario;

## Creating the categories
DELETE FROM categories;

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

/* Exámenes de hematología */

/* ('', '', '[]', '[]') */
INSERT INTO laboratory(category, name, parameters, ranges)
values 
('HEMATOLOGIA', 'HEMATOLOGIA COMPLETA 22/P ERITROSEDIMENTACION INCLUIDA', '[]', '[]'),
('HEMATOLOGIA', 'ERITROSEDIMENTACION', '[]', '[]'),
('HEMATOLOGIA', 'CLASIFICACION DE ANEMIAS', '[]', '[]'),
('HEMATOLOGIA', 'FROTE PERIFERICO', '[]', '[]'),
('HEMATOLOGIA', 'GOTA GRUESA', '[]', '[]'),
('HEMATOLOGIA', 'GRUPO SANGUINEO Y FACTOR RH', '[]', '[]'),
('HEMATOLOGIA', 'HEMOGLOBINA- HEMATOCRITO', '[]', '[]'),
('HEMATOLOGIA', 'RECUENTO DE BLANCOS Y FORMULA', '[]', '[]'),
('HEMATOLOGIA', 'RECUENTO DE EOSINOFILOS', '[]', '[]'),
('HEMATOLOGIA', 'RECUENTO DE ERITROCITOS', '[]', '[]'),
('HEMATOLOGIA', 'RECUENTO DE PLAQUETAS ', '[]', '[]'),
('HEMATOLOGIA', 'Recuento de Reticulositos', '[]', '[]'),
('HEMATOLOGIA', 'CRIOGLOBULINAS', '[]', '[]'),
('HEMATOLOGIA', 'ELECTROFORESIS DE HEMOGLOBINA', '[]', '[]'),
('HEMATOLOGIA', 'ELECTROFORESIS DE PROTEINAS', '[]', '[]'),
('HEMATOLOGIA', 'ELECTROFORESIS DE LIPOPROTEINAS', '[]', '[]');





select * from categories;