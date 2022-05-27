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
INSERT INTO laboratories(category, name, parameters)
values 
('HEMATOLOGIA', 'HEMATOLOGIA COMPLETA 22/P ERITROSEDIMENTACION INCLUIDA', '{}'),
('HEMATOLOGIA', 'ERITROSEDIMENTACION', '{}'),
('HEMATOLOGIA', 'CLASIFICACION DE ANEMIAS', '{}'),
('HEMATOLOGIA', 'FROTE PERIFERICO', '{}'),
('HEMATOLOGIA', 'GOTA GRUESA', '{}'),
('HEMATOLOGIA', 'GRUPO SANGUINEO Y FACTOR RH', '{}'),
('HEMATOLOGIA', 'HEMOGLOBINA- HEMATOCRITO', '{}'),
('HEMATOLOGIA', 'RECUENTO DE BLANCOS Y FORMULA', '{}'),
('HEMATOLOGIA', 'RECUENTO DE EOSINOFILOS', '{}'),
('HEMATOLOGIA', 'RECUENTO DE ERITROCITOS', '{}'),
('HEMATOLOGIA', 'RECUENTO DE PLAQUETAS ', '{}'),
('HEMATOLOGIA', 'Recuento de Reticulositos', '{}'),
('HEMATOLOGIA', 'CRIOGLOBULINAS', '{}'),
('HEMATOLOGIA', 'ELECTROFORESIS DE HEMOGLOBINA', '{}'),
('HEMATOLOGIA', 'ELECTROFORESIS DE PROTEINAS', '{}'),
('HEMATOLOGIA', 'ELECTROFORESIS DE LIPOPROTEINAS', '{}');


/* HEMOTASIS */
INSERT INTO laboratories(category, name, parameters)
values 
('HEMOTASIS', 'TIEMPO DE PROTOMBINA (TP)', '{}'),
('HEMOTASIS', 'TIEMPOPARCIAL DE TROMBOPLASTINA (PTP)', '{}'),
('HEMOTASIS', 'INR', '{}'),
('HEMOTASIS', 'TIEMPO DE COAGULACION', '{}'),
('HEMOTASIS', 'TIEMPO DE SANGRIA', '{}'),
('HEMOTASIS', 'FIBRIOGENO', '{}');


update laboratories 
set 
    parameters = '{"Rec. Globulos blancos":"5000 - 10,000 mm3","Rec. Globulos rojos":"4,5000,000 - 10,000,00 mm3","Hemoglobina":"12.6 - 16.0 gr/dr","Plaquetas":"150.000 - 500.00/ mm3","Formula Referencia":"","Segmentados":"45 - 64%","Linfositos":"20 - 45%","Monocitos":"0 - 5%","Eosinofilos":"1.0 - 5.0%","Velocidad de sedmentación":"0 - 15 mm/hrs"}'
where id = 1;