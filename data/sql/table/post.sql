CREATE TABLE `post` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_0900_ai_ci',
	`subtitle` VARCHAR(255) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_0900_ai_ci',
	`content` TEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`author` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`author_url` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`publish_date` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`image_url` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`featured` TINYINT NOT NULL DEFAULT '0',
	`card_url` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;
