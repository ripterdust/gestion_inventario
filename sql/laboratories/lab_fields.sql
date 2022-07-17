CREATE TABLE fields(
    lab_id          INT NOT NULL AUTO_INCREMENT,
    fields_pm       VARCHAR(50) NOT NULL,
    fields_rgmin    INT NOT NULL,
    fields_rgmax    INT NOT NULL,
    fields_tp       CHAR(5),
    FOREIGN KEY (lab_id) REFERENCES laboratory(lab_cd)
)
