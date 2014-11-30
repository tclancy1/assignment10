CREATE TABLE IF NOT EXISTS tblMember (
    pmkStoryTeller varchar(300) NOT NULL,
    fmkEmail varchar(64) NOT NULL,
    fldPassword varchar(100) NOT NULL,
    fldFirstName varchar(100) NOT NULL,
    fldSurname varchar(100) NOT NULL,
    PRIMARY KEY (pmkStoryTeller),
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65;

CREATE TABLE IF NOT EXISTS tblPhoto (
    pmkPhotoID int(11) NOT NULL,
    fmkEmail varchar(64) NOT NULL,
    fldFileName VarChar(100) Not Null,
    fldDimensions Int Unsigned NOT NULL DEFAULT 0,
    PRIMARY KEY (pmkPhotoID),
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65;

CREATE TABLE IF NOT EXISTS tblStory (
    pmkStoryID int(11),
    fnkStoryTeller varchar(300) NOT NULL,
    fldStoryTitle varchar(100),
    fldStoryText TEXT(65535),
    fldDatePublished DATE NOT NULL,
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65;


CREATE TABLE IF NOT EXISTS tblContact (
    pmkEmail varchar(64) NOT NULL,
    fldFirstName varchar (100) NOT NULL,
    fldSurname varchar (100)NOT NULL,
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65;



    
    



