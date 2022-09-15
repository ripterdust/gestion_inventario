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

select p.name, p.price, p.description, lab.name as 'Lab name'
from packs p
left join pack_labs pl on p.pack_id = pl.pack_id
left join laboratories lab on pl.laboratory_id = lab.id;