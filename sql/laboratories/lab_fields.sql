create table lab_fields(
    id      int auto_increment,
    field   varchar(255),
    lab_id  int not null,
    PRIMARY KEY     (id),
    FOREIGN KEY     (lab_id) REFERENCES lab_list(id)
)