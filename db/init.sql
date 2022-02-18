CREATE TABLE `user`
(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(10) NOT NULL,
    password VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB COMMENT='User';

INSERT INTO `user` (username, password) VALUES
    ('admin', 'password'),
    ('Alice', '12345');
