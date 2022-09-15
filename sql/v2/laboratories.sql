create table laboratories (
    id          int not null auto_increment primary key,
    name        varchar(200) not null,
    price       float not null,
    cat_id      int not null
);