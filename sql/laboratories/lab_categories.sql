CREATE TABLE lab_categories(
    id          int primary key auto_increment,
    name        varchar(50)
);

CREATE TABLE laboratory(
    lab_cd      INT NOT NULL AUTO_INCREMENT,
    cat_fk      INT NOT NULL,
    lab_nm      VARCHAR(255) NOT NULL,
    lab_pc      INT NOT NULL,
    FOREIGN KEY (cat_fk) REFERENCES lab_categories(id)
)

CREATE TABLE fields(
    lab_id          INT NOT NULL AUTO_INCREMENT,
    fields_pm       VARCHAR(50) NOT NULL,
    fields_rgmin    INT NOT NULL,
    fields_rgmax    INT NOT NULL,
    fields_tp       CHAR(5),
    FOREIGN KEY (lab_id) REFERENCES laboratory(lab_cd)
)
