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
INSERT INTO laboratory(category, name, references, count)
values 
('HEMATOLOGIA', 'HEMATOLOGIA COMPLETA 22/P ERITROSEDIMENTACION INCLUIDA', '[]', '[]');


select * from categories;