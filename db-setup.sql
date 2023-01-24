DROP TABLE `hello`;
--
CREATE TABLE `hello` (
   `helloid` INT NOT NULL AUTO_INCREMENT,
   `hello_text` TEXT,
   `group_name` VARCHAR (255),
   PRIMARY KEY (`helloid`),
   KEY (`group_name`)
);
--
INSERT INTO `hello`
(`helloid`, `hello_text`, `group_name`)
VALUES
(1, 'hello world', 'foo'),
(2, 'Hello World', 'bar');
--
-- SELECT *
-- FROM `hello`;
--
-- UPDATE `hello`
-- SET `hello_text` = 'hello world!'
-- WHERE `helloid` = 1;
