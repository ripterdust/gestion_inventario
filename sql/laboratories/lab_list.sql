create table lab_list(
    id              int primary key auto_increment,
    name            varchar(255) not null,
    lab_category    int not null,
    FOREIGN KEY     (lab_category) REFERENCES lab_categories(id)
);