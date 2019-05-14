CREATE DATABASE IF NOT EXISTS `forum`;

USE `forum`;

DROP TABLE IF EXISTS `forum`.`Questions` ;

CREATE TABLE IF NOT EXISTS `forum`.`Questions` (
  `questionsID` INT NOT NULL,
  `universityStatus` VARCHAR(45) NULL,
  `userName` VARCHAR(45) NULL,
  `questionTitle` VARCHAR(45) NULL,
  `postText` TEXT NULL,
  PRIMARY KEY (`questionsID`)
 ) ENGINE = InnoDB;

DROP TABLE IF EXISTS `forum`.`Answers` ;

CREATE TABLE IF NOT EXISTS `forum`.`Answers` (
  `answerID` INT NOT NULL,
  `answer` TEXT NULL,
  `questionsID` INT NOT NULL,
  PRIMARY KEY (`answerID`)
 ) ENGINE = InnoDB;
