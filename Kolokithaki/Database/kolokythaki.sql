CREATE DATABASE kolokythaki;

USE kolokythaki;

CREATE TABLE Usr (
	
    usr_email VARCHAR(100) NOT NULL,
    usr_username VARCHAR(100) NOT NULL,
    usr_password VARCHAR(100) NOT NULL,
    usr_street VARCHAR(100),
    usr_streetNumber INT,
    usr_isBanned BOOL,
    
    PRIMARY KEY (wrk_email),
    
    UNIQUE (usr_username),
    UNIQUE (usr_password)

);

CREATE TABLE Admn (

	adm_email VARCHAR(100) NOT NULL,
    
    PRIMARY KEY (adm_email),
	
    CONSTRAINT adm
    FOREIGN KEY (adm_email) REFERENCES Usr(usr_email)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    
    );


CREATE TABLE Lst (

	lst_id INT NOT NULL AUTO_INCREMENT,
    lst_name VARCHAR(100) NOT NULL,
    lst_isPrivate BOOL DEFAULT TRUE,
    lst_user VARCHAR(100) NOT NULL,
    
    PRIMARY KEY (lst_id),
    
    CONSTRAINT lst
    FOREIGN KEY (lst_user) REFERENCES Usr(usr_email)
    ON DELETE CASCADE
    ON UPDATE CASCADE

);

CREATE TABLE Recipe (

	rec_id INT NOT NULL AUTO_INCREMENT,
    rec_title VARCHAR(100) NOT NULL,
    rec_author VARCHAR(100) NOT NULL,
    rec_avgRating INT,
    rec_uploadDate DATETIME,
    rec_isFeatured BOOL DEFAULT FALSE,
    rec_content TEXT(10000),
    
    PRIMARY KEY (rec_id),
    
    CONSTRAINT rec
    FOREIGN KEY (rec_author) REFERENCES Usr(usr_email)
    ON DELETE CASCADE
    ON UPDATE CASCADE

);

CREATE TABLE List_Recipes (
	
    lr_list INT NOT NULL,
	lr_recipe INT NOT NULL,
    
	PRIMARY KEY (lr_list,lr_recipe),
    
    CONSTRAINT lr1
    FOREIGN KEY (lr_lits) REFERENCES Lst(lst_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    
    CONSTRAINT lr2
    FOREIGN KEY (lr_recipe) REFERENCES Recipe(rec_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    
); 
    
CREATE TABLE Tag (

	tag_name VARCHAR(20) NOT NULL,
	
    PRIMARY KEY (tag_name)
    
);    

CREATE TABLE Recipe_Tags (

	rt_recipe INT NOT NULL,
    rt_tag VARCHAR(20) NOT NULL,
	
    PRIMARY KEY (rt_recipe,rt_tag),
    
    CONSTRAINT rt1
    FOREIGN KEY (rt_tag) REFERENCES Tag(tag_name)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    
    CONSTRAINT rt2
    FOREIGN KEY (rt_recipe) REFERENCES Recipe(rec_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    
);

CREATE TABLE Commnt (

	com_id INT NOT NULL AUTO_INCREMENT,
    com_author VARCHAR(100) NOT NULL,
    com_recipe INT NOT NULL,
    com_text TEXT(1000),
    com_datetime DATETIME,
    
    PRIMARY KEY (com_id),
    
    CONSTRAINT com1
    FOREIGN KEY (com_author) REFERENCES Usr(usr_email)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
	
    CONSTRAINT com2
    FOREIGN KEY (com_recipe) REFERENCES Recipe(rec_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    
);

CREATE TABLE Rating (

	rtg_user VARCHAR(100) NOT NULL,
    rtg_recipe INT NOT NULL,
    rtg_number INT NOT NULL,
    
    PRIMARY KEY (rtg_user,rtg_recipe),
    
    CONSTRAINT rtg1
    FOREIGN KEY (rtg_user) REFERENCES Usr(usr_email)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
	
    CONSTRAINT rtg2
    FOREIGN KEY (rtg_recipe) REFERENCES Recipe(rec_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE

);

CREATE TABLE Ban (
	
    ban_id INT NOT NULL AUTO_INCREMENT,
    ban_user VARCHAR(100) NOT NULL,
    ban_author VARCHAR(100) NOT NULL,
    ban_expiration DATETIME,
    
    PRIMARY KEY (ban_id),
    
    CONSTRAINT ban1
    FOREIGN KEY (ban_user) REFERENCES Usr(usr_email)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    
    CONSTRAINT ban2
    FOREIGN KEY (ban_admin) REFERENCES Admn(adm_email)
    ON DELETE CASCADE
    ON UPDATE CASCADE

);