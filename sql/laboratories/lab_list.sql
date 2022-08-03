CREATE TABLE lab_list(
    lab_cd      INT NOT NULL AUTO_INCREMENT,
    cat_fk      INT NOT NULL,
    lab_nm      VARCHAR(255) NOT NULL,
    lab_pc      INT NOT NULL,
    FOREIGN KEY (cat_fk) REFERENCES lab_categories(id)
)