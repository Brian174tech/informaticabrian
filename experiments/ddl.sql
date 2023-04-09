CREATE TABLE	`Score`(
    `GameId`		INT(10)		AUTO_INCREMENT,
    `Score`         INT(10) NOT NULL,
	`UserName`		VARCHAR(50)	NOT NULL,
	`Password`		VARCHAR(50)	NOT NULL,
    `GameDate`		DATE		DEFAULT (CURRENT_DATE)  NOT NULL,
	PRIMARY KEY	(`GameId`)
);

INSERT INTO `Score` (`Score`,`Username`,`Password`)
VALUES('1337','Briantest', '8683');