DELIMITER $

CREATE TRIGGER BanExpiration
BEFORE INSERT ON Ban
FOR EACH ROW
BEGIN
 
     IF NEW.ban_duration IS NOT NULL THEN
 		SET NEW.ban_expiration = DATE_ADD(CURDATE(), INTERVAL NEW.ban_duration HOUR);
     END IF;
 
END$
 

CREATE TRIGGER CalcAverageRating
AFTER INSERT ON Rating
FOR EACH ROW
BEGIN
 
 	 DECLARE n INT;
     DECLARE sum INT;
     DECLARE average FLOAT;
     
     SELECT SUM(rtg_value), COUNT(*)
     INTO sum,n
     FROM Rating
     WHERE rtg_recipe = NEW.rtg_recipe;
     
     SET average = sum / n;
     
     UPDATE Recipe
     SET rec_avgRating = average
     WHERE rec_id = NEW.rtg_recipe;
     
END