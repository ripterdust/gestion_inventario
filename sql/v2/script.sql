-- Login

create table if not EXISTS categories (
    id          int not null auto_increment primary key,
    category        varchar(200) not null unique
);


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

create table laboratories (
    id          int not null auto_increment primary key,
    name        varchar(200) not null,
    price       float not null,
    category      int not null
);

create table packs (
    pack_id     int not null auto_increment primary key,
    name        varchar(200),
    price       float not null,
    description varchar(200) default 'N/A'
);

create table pack_labs (
    pack_id                 int not null,
    laboratory_id           int not null,
    FOREIGN KEY (pack_id) REFERENCES packs(pack_id),
    FOREIGN key (laboratory_id) REFERENCES laboratories(id)
);


alter table pack_labs add constraint fk_pack_labs_pack_id 
FOREIGN key (pack_id) REFERENCES packs(pack_id);

ALTER TABLE pack_labs
add constraint fk_pack_labs_laboratory_id
FOREIGN key (laboratory_id) REFERENCES laboratories(id);


-- Fields
create table fields (
    lab_id      int not null,
    name        varchar(200) not null,
    min         float not null,
    max         float not null,
    symbol      varchar(10) not null,
    FOREIGN key (lab_id) REFERENCES laboratories(id)
);

INSERT INTO fields(lab_id, name, min, max, symbol)
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
(1, 'Velocidad de sedmentación', '0', '15', 'mm/hrs');



-- Query to get the laboratorie
select l.name, l.price, c.category, f.name, f.min, f.max, f.symbol
from laboratories l
left join categories c on c.id = l.category
left join fields f on l.id = f.lab_id;

