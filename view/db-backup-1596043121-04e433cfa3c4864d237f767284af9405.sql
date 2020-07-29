DROP TABLE IF EXISTS admin_table;

CREATE TABLE `admin_table` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone_number` bigint(13) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin_created_on` varchar(30) NOT NULL,
  `picture` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `salt` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO admin_table VALUES("14","Ejigson","Ejigson","8135777465","ejigsonpeter1@gmail.com","b708707e45a6be469b9794c4f46a646eec64c5ed628831b05ae8064e5fb49630","2020-06-23 04:42:37","images.png","active","v7M8AE75ueZhnVvQTIvlf9fDDjdoEqtIw2UChh8v0Q612rGdQh1HWr5qFHQCgMb2qjoWBNA0oGFTPQFp3oxKDxCX02Mguk6Ed5Hu"),
("18","Ejigson","Lasun","8135777462","ejigsonpeter2@gmail.com","783acb3f841348cdfc3577aef96261b7b9d192dcf85f77f6462db90cec730415","2020-07-29 09:15:00","images.png","active","cm5JxDugUMaK5ueTAGywDtZ4Tr2SwA74naRUmaHWJKkB6vFAIT7oMEI67a1B7A6q23JTEAldhKcrGIwaFlFaxrzsIV9Ui29l2kgc");



DROP TABLE IF EXISTS agent;

CREATE TABLE `agent` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `exam_id` int(100) NOT NULL,
  `exam_title` varchar(100) NOT NULL,
  `Agent_status` varchar(100) NOT NULL,
  `exam_status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO agent VALUES("8","1","Engish","Not Active","pending"),
("9","6","Maths","Active","pending");



DROP TABLE IF EXISTS agent_logs;

CREATE TABLE `agent_logs` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `exam_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `score` int(20) NOT NULL,
  `time` varchar(50) NOT NULL,
  `classification` varchar(50) NOT NULL,
  `Datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO agent_logs VALUES("1","1","5","9","15","no_threat","2020-07-29 07:59:21");



DROP TABLE IF EXISTS alerts;

CREATE TABLE `alerts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `exam_id` int(30) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `offence` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO alerts VALUES("6","1","Engish","Ejigson  Lagun","Impersonation","2020-07-29 00:48:38","Threat"),
("7","1","Engish","Ejigson  Lagun","Impersonation","2020-07-29 00:53:55","Threat"),
("8","0","","Ejigson  Lagun","Impersonation","2020-07-29 07:04:44","Threat"),
("9","1","Engish","Ejigson  Lagun","Impersonation","2020-07-29 07:05:10","Threat"),
("10","1","Engish","Ejigson  Lagun","Impersonation","2020-07-29 07:06:01","Threat"),
("11","1","Engish","Ejigson  Lagun","Impersonation","2020-07-29 07:26:51","Threat");



DROP TABLE IF EXISTS exam_table;

CREATE TABLE `exam_table` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `exam_title` varchar(250) NOT NULL,
  `exam_datetime` datetime NOT NULL,
  `exam_duration` varchar(30) NOT NULL,
  `total_question` int(10) NOT NULL,
  `marks_per_right_answer` varchar(30) NOT NULL,
  `marks_per_wrong_answer` varchar(30) NOT NULL,
  `exam_created_on` datetime NOT NULL,
  `exam_status` enum('pending','completed','started','') NOT NULL,
  `exam_code` varchar(100) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO exam_table VALUES("1","14","Engish","2020-07-18 22:59:00","30","50","1","1","2020-07-29 18:59:49","pending","b8e6876a6711062394e6213aa6bc0833");



DROP TABLE IF EXISTS question_table;

CREATE TABLE `question_table` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `online_exam_id` int(11) NOT NULL,
  `question_title` varchar(200) NOT NULL,
  `answer_option` varchar(200) NOT NULL,
  `option_1` varchar(200) NOT NULL,
  `option_2` varchar(200) NOT NULL,
  `option_3` varchar(200) NOT NULL,
  `option_4` varchar(200) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=latin1;

INSERT INTO question_table VALUES("1","1","6W2fYU8fNIt5/h3TTBJnmomXnC0VVDfjL5Fe27w3Bw==","2g==","0WeRMkcCfpA=","1WSeNA==","0W6fIk4N","3HCYIFQF"),
("2","1","yW2fYU8fNIt5/h3sURl904KU0hBTXg==","3w==","0WeRYWcIcZh+8Fg=","0WeRYWcOcZ1w4lLR","0WeRYWcAdZR0","0WeRDkEZeg=="),
("3","1","12uUJFYJept09V7GHhN1ig==","8XWEKEkCS54=","8WaEYRcfYA==","+mCTYRRfZps=","1GSeNEcebd8g6Ek=","0WaEYUMCcA=="),
("4","1","6W2VLwYFZ991/lDMXQV1kJQ=","8XWEKEkCS54=","rzfdC1MC","rzfdC0cC","rDfdDkUY","rTXdC1MC"),
("5","1","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z27YqA3eYso2z1+gnmArTXwdzl95O4pauMLhmXe4j0bOHW9iODULoq5LqjYMWmPRjqg==","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("6","1","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z27YqA3eYso2z1+gnmArTXwdzl95O4pauMLhmXe4j0bOHW9iODULoq5LqjYMWmPRjqg==","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("7","1","yW2VLwYPe5N9/l7XVxh604KU0i9USTisFIsZ3aEzFmyIpN+h1+swlBHBCwNzitJU8pW5e/toVvk+x67TC96VEl/u5tz7ltQQnuww9gUsGqdts3XIPLnqNX4cY9n3uGF7qOFBLg==","8XWEKEkCS54=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("8","1","yW2VLwYPe5N9/l7XVxh604KU0i9USTisFIsZ3aEzFmyIpN+h1+swlBHBCwNzitJU8pW5e/toVvk+x67TC96VEl/u5tz7ltQQnuww9gUsGqdts3XIPLnqNX4cY9n3uGF7qOFBLg==","8XWEKEkCS54=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("9","1","12vQIkkBZIpl/k+DUBJghIKAmXlbVDWmEthYzKs=","8XWEKEkCS5s=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("10","1","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS5s=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("11","1","10a9EQYFZ99h6VTOXwV9n5TShypQX3GlDoo=","8XWEKEkCS54=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("12","1","ym2VYUgJYIh+6VaDUhZtlp/SgitaTz6gDpQZ0ah+D3eIpN+8kux1mA8=","8XWEKEkCS5s=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("13","1","ym2VYUgJYIh+6VaDUhZtlp/SgitaTz6gDpQZ0ah+D3eIpN+8kux1mA8=","8XWEKEkCS5w=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("14","1","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z171+BzmIs8y8hOg6gwiSRwMqnMka5YuzL/dkUfBsnQ==","8XWEKEkCS5s=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("15","1","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z171+BzmIs8y8hOg6gwiSRwMqnMka5YuzL/dkUfBsnQ==","8XWEKEkCS5w=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("16","1","yneRL1UBfYxi8lLNHhR7nZmAnTUVSyOsFZda0aJ+D2o=","8XWEKEkCS5s=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("17","1","ynKfYUIJYpZy/k6DXwVx04Sc0jdQTyasE5MZ16g=","8XWEKEkCS54=","/yWAM0kPcYxiu1TNHhh6ls2Wly9cWDTjCIsZ36wyAzmIro23j/s9kBLVTkI6l91V55S9L/FoULw7y7TPC8zMEVnk6Jn8itQQhL9x+wYxF6xrvzHZIrXncA==","/yWAM0kPcYxiu1TQHgVhnYObnD4VVD/jA5dN1u46A2+Vosih","zky0MgYDct9l81iDTgV7kIiBgTxGGyO2D5ZQ0Kl+CX/cpcS0kf0nlBLGCwY2j9JZ8Ir8OupiHu8tz6U=","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("18","1","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS54=","zXyeNUcU","zWCdIEgYfZxi","zXGCNEUY","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("19","1","3yWvHnkzS9946B3CHhNxhYSRl3lBUzC3QZ5WzLk/FH2P4d2zlPMwhQ+SSQcnjt5f+9myPuxwUe4n0eDFUo2cE0To7o/8kJoeyut48Ek3ELxt9jvbdLXqc3gaLtHw8W105ORKKSdCP07IEE9m75lvaaeX3ktZnq9G","8XWEKEkCS5s=","/HeZJUEJ","+GyCJFENeJM=","7GqFNUMe","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("20","1","ym2VYUAFZoxlu3PGSgB7gYY=","8XWEKEkCS5s=","3Uu+BHI=","0Fa2D2M4","31axEWgpQA==","31egAGgpQA=="),
("21","1","yW2ZIk5Me5kx71XKTVd9gM2cnS0VWnGtBIxO0bw1RnyYpsjyk/0jmB/XC10=","8XWEKEkCS50=","zkY=","zWiRM1IcfJB//k4=","zWCCN0MeZw==","zXKZNUUE"),
("22","1","3yWDJFJMe5kx6UjPWwQ0h4WThnlSVCemE5ZKnqo/EnjcosK/mu07mB/TXws8lw==","8XWEKEkCS54=","znefNUkPe5Ni","zXGRL0INZpti","zEOzMg==","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("23","1","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS5s=","y2uZMUkFeos=","03CcNU8ce5Z/7w==","zmqZL1JMYJAx61LKUAM=","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("24","1","ym2VYUgJYIh+6VaDUhZtlp/SkTZbWDSxD4sZyacqDg==","8XWEKEkCS5w=","/GyEMg==","+HeRLEMf","7mSTKkMYZw==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("25","1","ym2VYRJMdoZl/h3qbld1l4mAlypGGzKsD4tQzbotRnaa","8XWEKEkCS5w=","8GCENkkef99w/1nRWwRn","9mqDNQYNcJtj/k7Q","/GqEKQZEddYx+lPHHl922g==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("26","1","ym2VYUgJYIh+6VaDUhZtlp/SgitaTz6gDpQZ0ah+D3eIpN+8kux1mA8=","8XWEKEkCS50=","+3GYJFQCcYs=","92uEJFQCcYsx60/MShh3nIE=","9nyAJFQYcYdlu0nRXxlnlYiA0ilHVCWsApdV","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("27","1","10a9EQYFZ99h6VTOXwV9n5TShypQX3GlDoo=","8XWEKEkCS54=","+3eCLlRMdZF1u1nKXxB6nJ6GmzoVXSStAoxQ0aAt","/2GUM0MfZ5Z//A==","+GqCNkcecJZ//A==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("28","1","yW2RNQYFZ99l81iDXxR3lp6B0ilaUj+3QdB47ud+D3fctsSgkvQwgg+SZyMdxg==","8XWEKEkCS50=","+mCGKEUJNIt5+kmDXxt4nJqB0i5cSTSvBItKnqo7EHCfpN7yg/d1khPcRQcwjZtO+tm9e+9uTPkogq7CX9qDE0A=","6WyCJEoJZ4wx/1jVVxRxgM2bhipQVzc=","/GqEKQZEddYx+lPHHl922g==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("29","1","12vQNk8ecZN06E6DWh5nh5+bkCxBUj6tQYtAzbo7Cw==","8XWEKEkCS54=","83CcNU8ceJox+l7AWwRn052dmzdBGzCxBNhQ0Lo7FDSfrsO8kvshlBiSXAsnkZtf9Jq0e/dzVvk+","6m2VM0NMfYwx9VKDXxR3lp6B0ilaUj+3","8WucOAYDepox+l7AWwRn052dmzdBGzS7CItNzQ==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("30","1","yW2RNQYFZ99Gy3yc","8XWEKEkCS54=","6WzdJ09MZI1+71jAShJw04yRkTxGSA==","6WyCJEJMZI1+71jAShJw04yRkTxGSA==","6WyCJEJMZI1++FjQTVd1kI6XgSo=","6WzdJ09MZI1++FjQTVd1kI6XgSo="),
("31","1","yneRL1Uce41lu1HCRxJm04yVlStQXDC3BIsZ2q8qBzmas8K/1/w8lxrXWQc9jZtb5YmwMvtmSvUjzLOHQsOYDgvqq4/ml5MVj79j4RsgHqQ5/TDaO67hNWcJMMPt9mU6rfkEPiQ=","8XWEKEkCS54=","8GCENkkef999+kTGTA==","+mSEIAYAfZF6u1HCRxJm","/3WALU8PdYt49FODUhZtlp8=","7m2JMk8PdZMx91zaWwU="),
("32","1","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z171+BzmIs8y8hOg6gwiSRwMqnMka5YuzL/dkUfBs17PCT42FDwvi5Yjqi5ocnr8v","8XWEKEkCS5w=","ykag","62GA","/GqEKQZEddYx+lPHHl922g==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("33","1","yneRL1UBfYxi8lLNHhR7nZmAnTUVSyOsFZda0aJ+D2o=","8XWEKEkCS50=","/WqeL0MPYJZ+9R3MTB5xnZmXlnlFST63DptW0g==","63aVMgYNNIt56VjGHgB1is2akzdRSDmiCp0ZyqF+A2qIoM++nus90R2SSA09l95Z4ZCzNQ==","7GCTKEMaZ991+knCHhFmnIDSkylFVzigAIxQ0aB+B2rcoI2hnvYynRmSWBYhnNpX","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("34","1","yneRL1Uce41lu1HCRxJm052AnS1aWD6vEthd268yFTmLqNm6","8XWEKEkCS50=","/3WALU8PdYt49FODShg0kp2CnjBWWiWqDpYZ3aEzC2ySqM6zg/E6nw==","7nefIkMfZ99l9B3TTBh3lp6B0jpaVjy2D5Fa37o3CXc=","8GqUJAYYe99/9FnGHhR7noCHnDBWWiWqDpY=","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("35","1","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z171+BzmIs8y8hOg6gwiSRwMqnMka5YuzL/dkUfBsnQ==","8XWEKEkCS50=","7XGCJEcBNJx+9UnRURs0h5+TnCpYUiKwCJdXnr4sCW2TosK+","92uEJFQCcYsx+FLNSgV7n82flypGWjamQYhL0boxBXaQ","8GCZJk4Oe40x/1TQXRhilp+L0ilHVCWsApdV","+nyeIEsFd9959E7XHhR7nYublSxHWiWqDpYZzrwxEnafrsE="),
("36","1","3yWvHnkzS9946B3CHiNXo82ckzRQGzesE9hYnrosB3ePscKgg7gmlA7EQgE22dpZ9pyvKLh3UfUi1u4=","8XWEKEkCS54=","7mqCNQ==","7myAJA==","8GqUJA==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("37","1","zVa4YUUNet9z/h3WTRJw04Sc0jZbVyg=","8XWEKEkCS5w=","62uZOQsAfZR0u1LTWwV1h4SclXlGQiK3BJVK","6WyeJUkbZw==","/GqEKQZEddYx+lPHHl922g==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("38","1","zVa4YVMfcYwxxGL8YShLrM2GnXlUTiWrBJZN160/EnzctcW31+ownBPGTkIwltZK4I25KbY=","8XWEKEkCS54=","7nCSLU8POZR04h3ATA5kh4KVgDhFUyg=","7neZN0cYcdJ6/kSDXQVtg5mdlStUSzm6","/GqEKQZEddYx+lPHHl922g==","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("39","1","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z37sqDnyStcSxluw8nhKSRgcnkdRetZCve+10W/hswLmHeP6kXg==","8XWEKEkCS5s=","7nCSLU8POZR04g==","9mqDNQYOdYx0/w==","zkSjEnEjRrs=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("40","1","yW2ZIk5MZ4tw9VnCTBM0p66i0ilaSSXjCIsZ370tD36SpMnykfcn0R/dRRYyms9T+578CMtPHu8p0LbCWd7MXg==","8XWEKEkCS50=","7mqCNQZeJQ==","7mqCNQZeJg==","7mqCNQZeJw==","7mqCNQZeIA=="),
("41","4","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z171+CHaI4dihkvx1hROSTAc9nMlb4Zz8P+FpX/ElweDQTs/MEUrs7o+w","8XWEKEkCS5s=","zk2g","/3aAb0gJYA==","9HaA","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("42","4","yW2RNQYFZ99wu0rGXFd2gYKFgTxHG24=","8XWEKEkCS5s=","/yWAM0kLZp58u0nLXwM0kIyc0j1cSCGvAIEZ3+4pA3vcscy1kg==","/yWAM0kLZp58u0jQWxM0h4LShDBQTHGrFZVVnqoxBWyRpMOmhA==","93HQJEgNdpN06B3WTRJm05md0jhWWDSwEthN1qt+FHyPrtiglP0m0RPUCws9jd5I+5yo","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("43","4","zm2JMk8PdZMx9E+DUhhzmo6TnnlUSSOiD59c06swEjmTp428kuwing7ZCwsg","8XWEKEkCS54=","6mqALkoDc4Y=","7GqFNU8Ccw==","8GCENkkef5Z//A==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("44","4","12vQNU4FZ99l9E3MUhhzis2GmjxHXnGqEthYnq07CG2OoMHylPc7hQ7dRw42i5tV59m0Lvo=","8XWEKEkCS5w=","7XGRMw==","82CDKQ==","7GyeJg==","/HCD"),
("45","4","ym2ZMgYYe49+91LER1dmlpyHmytQSHGuFJRN174xD3eI4c69mfYwkgjbRAw=","8XWEKEkCS5s=","7XGRMw==","82CDKQ==","7GyeJg==","/HCD"),
("46","4","2mSEIAYPe5J87lPKXRZgmoKc0ipMSCWmDNhKzq8wCHCSpo2hg/khlA+eCwE8jNVO55C5KLQnUe5s1qjCC9qEDkfuq4vgi5gdyvZj","8XWEKEkCS5w=","8mSe","82Se","6WSe","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("47","4","2mSEIAYPe5J87lPKXRZgmoKc0ipMSCWmDNhO17o2D3fcoI2wgvE5lRXcTEI8i5tZ9JSsLusnV+8=","8XWEKEkCS54=","8mSe","82Se","6WSe","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("48","4","zmyeJgYPdZE=","8XWEKEkCS5s=","02CRMlMecd9j9EjNWlpggYSC0i1cVjQ=","zGCALlQYNI9w+FbGSld4nJ6B","zGCALlQYNJNw71jNXQ4=","32mcYUkKNIt5/h3OWxlgmoKclz0="),
("49","4","12PQOEkZNIhw9UmDShg0lYSclnlBUzTjD41U3KssRnaa4d+9guwwgw+SSQcnjt5f+9m9e+toS+4vx+DGRcnMBU74/5XhmIAQhfE8tR0tGuls6zzQPaj9NWMHY9LhuHdpoekEIzg=","8XWEKEkCS5s=","7GqFNUM=","13WTLkgKfZg=","12OTLkgKfZg=","yneRIkMee4pl/g=="),
("50","4","ym2ZMgYNeJN+7E6DShg0kIWXkTIVUjfjANhd0aM/D3fcqN7ylu40mBDTSQ422d1V59muPv9uTeg+w7TORMPC","8XWEKEkCS54=","2mqdIE8CNLx5/l7I","2mqdIE8CNLt+6E7KWwU=","2mqdIE8CNLN+9FbWTg==","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("51","4","yW2ZIk5Me5kx71XGHhF7n4GdhTBbXHGqEthX0bp+B2mMrcSxlvo5lFzURBBzsOsaqg==","8XWEKEkCS5s=","23eCLlRMZpph9E/XVxlz","1mSeJUoJNJ51/0/GTQR9nYrSkTZbTTStFZFW0L0=","zmSTKkMYNJdw9VnPVxlz046dnC9QVSWqDpZK","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("52","4","ym2VYUINYJ4x/VTGUhM0kIyc0jpUSSO6QY9R1602Rnaa4dm6krgznhDeRBU6l9wF","8XWEKEkCS5w=","ykagYVUJc5p89Uk=","y0GgYVUJc5p89Uk=","10a9EQYBcYxi+lrGTQ==","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("53","4","ym2VYXI4WN938ljPWld8kp7ShDhZTjTjUMgXnoYxETmRoMOr1+o6hAjXWRFz0dZb7dD8OPlpHuw+zaPCWN7MFUPi+NzrmIAYje1x+El6","8XWEKEkCS54=","rzQ=","qw==","rzU=","pw=="),
("54","4","yW2fYU8fNJlw71XGTFd7lc2x0hVUVTa2AJ9cgQ==","8XWEKEkCS50=","3G+RM0gJNKxl6VLWTQNmhp0=","2mCeL08fNK14717LVxI=","1GSdJFVMVdEx3FLQUh56lA==","2nfeYWNCUtEx2FLHWg=="),
("55","4","3SWAM0kLZp586B3CTBI0kIKchDxHTzSnQZFXyqF+C3ifqcS8krg5kBLVXgM0nJtN/I20e+xvW7wkx6zXC8KK","8XWEKEkCS50=","32vQBEIFYJBj","/yWTLkscfZN06Q==","/2vQLlYJZp5l8lPEHgRtgJmXnw==","8GqeJAYDct9l81iDXxV7hYg="),
("56","4","3yWzYVANZpZw+VHGHhR1nYOdhnlGTzCxFdhO17o2","8XWEKEkCS5s=","32vQIEocfJ5z/kk=","/yWeNEsOcY0=","3yWDMUMPfZ59u07aUxV7n82dhjFQSXG3CZlXnrswAnyOss69hf0=","/GqEKQZEdtYx+lPHHl932g=="),
("57","4","yW2ZIk5Me5kx71XGHhF7n4GdhTBbXHGqEthY0qIxEXyY4cS81/l1slzzWQsnkdZf4ZC/e/FpTeg+16PTQsKC","8XWEKEkCS5w=","xVg=","5Xg=","tiw=","8GqeJAYDct9l81iDXxV7hYg="),
("58","4","yW2ZIk5Me5kx71XGHhF7n4GdhTBbXHGwCZdOze4qDnzcosKghf02hVzaQgchmMlZ/YD8NP4nX+4l1qjKTtmFAgvk+5n9mIAQhfFjtQArX4o=","8XWEKEkCS5s=","sSXbYQxMOQ==","tCXdYQlMPw==","tSXdYQlMPg==","tCXfYQ1MOQ=="),
("59","4","yW2RNQYFZ99w9R3CTAV1itI=","8XWEKEkCS50=","32vQIFQedYYx8k6DX1d3nIGelzpBUj6tQZdfnrg/FHCdo8G3hLghmR3GCwMhnJtV89moM/0nWvU/0anKQsGNEwvv6oju2YAAmvo=","32vQIFQedYYx8k6DX1d3nIGelzpBUj6tQZdfnrg/FHCdo8G3hLghmR3GCwMhnJtV89moM/0nTf0hx+DDStmNQV/y+5k=","32vQIFQedYYx8k6DUBhg04zSkTZZVzSgFZFW0O4xADmKoN+7lvo5lA+SXwoyjZtb55z8NP4nSvQpgrPGRsjMBUr/6tz7gIQc","0GqeJAYDct9l81iDXxV7hYg="),
("60","4","yW2RNQYFZ99j8lrLSldjkpTShjYVcj+qFZFY0qckB22VrsPyluonkAWN","8XWEKEkCS54=","92uEYUgZeaQnxh2eHgw0wcHSxnUVCmPvQc0VnvprSjnJ4dDyzA==","92uEYUgXad8su0aDDFs0x8HSw2sZG2TvQcwMku5rRmTc+g==","92uEYUgXIoIxph3YHkU409ne0mgHGyzjWg==","92uEYUhEItYxph3YHkU409ne0mgHF3H2TdgNi+J+UzmB4ZY="),
("61","4","yW2RNQYFZ99l81iDTB5zm5nShThMGyWsQZla3astFTmKoMGnkrg6l1zBXxAmms9P55z8Lfl1V/0uzqWHScKDClCr+47mmpFVyu9x8gxlAukm","8XWEKEkCS54=","7neZL1IKPKMzvlmGWis2382QnTZeFSGxCJtcku48CXaX792zkP18yg==","7neZL1IKPKMzvlmGWis2382CgDBWXn+hDpdSku4uB36Z78+9mPN8yg==","7neZL1IKPKMzvlmGWis2382CgDBWXmv5A5dW1eJ+FnibpJfolfc6mlWJ","7neZL1IKPKMzvlmGWis2382CgDBWXnz9A5dW1eJ+FnibpIDslfc6mlWJ"),
("62","4","3GyENk8fcd9+61jRXwN7gZ7SkThbGz6zBIpYyqt+E2mTr43t","8XWEKEkCS5s=","+mqFI0oJNJ5//x3AVhZmgA==","+GmfIFIfNJ5//x3HUQJ2n4iB","92uEMgYNepsx/VHMXwNn","92uEMgYNepsx+FXCTAQ="),
("63","4","yW2RNQYFZ99Su2nMVRJ6gM3N","8XWEKEkCS5s=","ym2VYVUBdZN9/k7XHh56l4SEmz1AWj3jFJZQyr1+CX/coo2ihfcygx3f","ym2VYUQNZ5Zyu1jPWxpxnZnSgDxWVDatCIJc2u48HzmIqcjylPc4gRXeThA=","ym2VYUoNZph06EmDVxlwmpublixUV3G2D5FNze4xADmMs8K1hfk4","3GqEKQZEddYxvR2LXF4="),
("64","4","yW2RNQYFZ99a/kTUUQVwgM3N","8XWEKEkCS5w=","1WCJNkkecIwx81zVW1dnnICX0ilHXjWmB5FX2+4zA3iSqMO1hLg0nxiSXwo2it4a+Jy9NfFpWe9swaHJC8+JQUjj6pLonJA=","1WCJNkkecIwx81zVW1dnnICX0ixbUD+sFpYZ06s/CHCSpt7ylvYx0QjaThE22dZf9Je1Nf90Hv8tzK7IX42OBAvo453hnpEd","1WCJNkkecIwx81zVW1dnnICX0ilHXjWmB5FX2+4zA3iSqMO1hLg0nxiSXwo2it4a+Jy9NfFpWe9swaHJRcKYQUnuq5/nmJoej/s=","0GqeJAYDct9l81iDXxV7hYg="),
("65","4","yW2RNQYFZ99y9FPQShZ6h83N","8XWEKEkCS5s=","3WqeMlINeotiu1XCSBI0lYSKlz0VTTCvFJ1Knro2B23cpcLymfch0R/aSgw0nJte4Iu1Nf8nSvQpgqXfTs6ZFULk5dzgn9QYyu9i+g43HqQ=","3WqeMlINeotiu1XCSBI0lYSKlz0VTTCvFJ1Knro2B23cosWzmf8w0RjHWQs9nptO/Zz8PuBiXek4y6/JC8KKQUqr+47gnoYYhw==","3WqeMlINeotiu1XCSBI0hoOZnDZCVXG1AJRM271+EnGdtY2/luF1kxmSSAoyl9xftZ2pKfFpWbw4yqWHTtWJAl7/4pPh2Zsfyv4w5RsqGLt48g==","0GqeJAYDct9l81iDXxV7hYg="),
("66","4","yW2ZIk5MfYwx71XGHgV9lIWG0i5UQnG3Dthd260yB2uZ4c69meshkBLGCws92fgaqg==","8XWEKEkCS5s=","92uEYUUDeoxl+lPXHgF1gc3Pw2kO","92uEYUUDeoxlu0vCTFcp09zCyQ==","/WqeMlJMfZFlu0vCTFcp09zCyQ==","3CXWYWVMVpBl8w=="),
("67","4","yW2ZIk5Me4906VzXUQVn04yAl3leVT60D9hYze4KA2uSoN+r19cllA7TXw0h2YQ=","8XWEKEkCS50=","pD/cYRk=","oSnQew==","oSnQeh0=","0GqeJAYDct9l81iDXxV7hYg="),
("68","4","12vQMlEFYJx5u07XXwNxnoichnUVXjCgCdha3707RnCSstmzmfsw0QrTRxc22dZP5o38Of0nYcMT/Z/4dJI=","8XWEKEkCS54=","3WqeMlINeos=","yGSCKEcOeJo=","zXWVIk8NeN9C4lDBURs=","0GqeJAYDct9l81iDXxV7hYg="),
("69","4","yW2RNQYFZ99l81iDSRhmmM2dlHlXSTSiCthS27cpCWuY4ZI=","8XWEKEkCS5w=","1mScNQYJbJpy7knKURk0nIvSgitaXCOiDA==","zGCDNUceYN9041jASwN9nIPSnT8VSyOsBopY0w==","232ZNQYKZpB8u1HMUQc0nJ/SgS5cTzKrQYtN37o7C3yStQ==","0GqeJAYDct9l81iDXxV7hYg="),
("70","4","6W2RNQYFZ9937lPASh57nc3N","8XWEKEkCS5s=","2HCeIlIFe5Ex8k6DX1d2n4KRmXlaXXGwFZlN26M7CG2P4dm6lux1gRnATQ0hlJtJ+pS5e+t3W/8lxKnEC9mNEkA=","2HCeIlIFe5Ex8k6DSh9x04uHnD1UVjStFZlVnqMxAmyQoN/ygvY8hVKSakI1jNVZ4ZCzNbhuTbw50bXGR8GVQU/u+JXol5Edyut/tRkgDa927TicNfz3ZXILKtbt+yJupf5P","2HCeIlIFe5Ex8k6DX1d2n4KRmXlaXXGgDpxcnro2B23cscigkfcnnA+SSkIgid5Z/J+1OLhzX+8njODuX42EAFir6tzhmJkcyv5+8UksC+lw7HXOMan3dHUEJg==","32mcYVIEcd9w+VLVWw=="),
("71","0","tjbDdg9MIcoktgmbBkA=","0GSdb0UDeox06kjCSllwnIGdgBlUXzizCIta16A5SHqTrA==","rzM=","rA==","",""),
("72","0","tjHCcg9MJskitgiSBkU=","6GyEIENCdZN46kjGSll6lo6yhjxYSz6xAIpay5g7FW2Vo9i+gvV7kh0=","qQ==","rQ==","",""),
("73","0","tjLEcA9MIcgitg+WBkI=","/2iVNQgAYZxl7k6NSAJ4g5iGky1QezKsD4tc3bo7EmyZs9+6mPY2hA+cSA19jNA=","rzQ=","qg==","",""),
("74","0","tjbAdA9MJ8gltgqQDEI=","+2KVMlINZ9Fz91zNWh5gs6OHnjVUVjemFJ9Q37pwBXaR","rTA=","qA==","",""),
("75","0","tjHDeA9MLc4htgWUCkA=","0HCcLUcsZ5B1+lHGTTp1hp+bgTtZWj+nCIwX0Ksq","pg==","qg==","",""),
("76","0","tjDHcA9MI8kitg2aDEE=","7WaVLUMefYxg7liNWgJ9s4OdnHdWVDw=","rTI=","rg==","",""),
("77","0","tjHDdw9MIs4gtg2TDkI=","/3GwIEIFZJZi+FTNWRJ4mpm3hjBUVn+mBY0=","rTI=","qg==","",""),
("78","6","yW2ZIk5MZ4tw9VnCTBM0p66i0ilaSSXjCIsZ370tD36SpMnykfcn0R/dRRYyms9T+578CMtPHu8p0LbCWd7MXg==","8XWEKEkCS54=","7mqCNQZeJQ==","7mqCNQZeJg==","7mqCNQZeJw==","7mqCNQZeIA=="),
("79","6","3WSCJU8CdZN470SDTQdxkISUmzxGGzmsFthU36AnRnCSstmzmfswglzdTUIyl5tf+421L+EnTPkgw7TCC9mDQUTl7tzml4cNi/Fz8EkqGel48TrIPLn2NXIGN9nw4Q==","8XWEKEkCS54=","rw==","rg==","/GqEKQYNNNkx+Q==","8GqeJAYDct9l81iDXxV7hYg="),
("80","6","22STKQYcZpB26VzOHhp1moOGkzBbSHGqFYsZ0bkwRmqZtY29kbgxkAjTBUIAlptP5pyuKLhoWLwjzKWHW9+DBlnq5tzimI1ZiPow4AckCKhr+nXTMvz0emMNLcTt+W52va1ROS5RLkeMVEd8rs1vaeuDn0pL27QcgacY6kkyiJloYa2X9+1HbJYdeQuUq3iAug+pFfnF","8XWEKEkCS50=","rw==","rg==","/GqEKQYNNNkx+Q==","8GqeJAYDct9l81iDXxV7hYg="),
("81","6","22STKQYcZpB26VzOHhp1moOGkzBbSHGqFYsZ0bkwRmqZtY29kbgxkAjTBUIAlptP5pyuKLhoWLwjzKWHW9+DBlnq5tzimI1ZiPow4AckCKhr+nXTMvz0emMNLcTt+W52va1ROS5RLkeMVEd8rs1vaeuDn0pL27QcgacY6kkyiJloYa2X9+1HbJYdeQuUq3iAug+pFfnF","8XWEKEkCS5s=","rw==","rg==","/GqEKQYNNNkx+Q==","8GqeJAYDct9l81iDXxV7hYg="),
("82","6","3WqeIkMcYIpw9x3HXwN104CdljxZGziwQYxR2+4tCWyOosjymP510VzbRQQ8i9Zb4ZCzNbgnHvoj0ODLRMqFAkrnq5jqip0ehL9g/Qg2Gg==","8XWEKEkCS50=","rw==","rg==","/GqEKQYNNNkx+Q==","8GqeJAYDct9l81iDXxV7hYg="),
("83","6","vUuxDGNT","8XWEKEkCS50=","zm2JMk8PdZMx/1zXX1d2kp6X","z3CVM19MVZFw90TZWwU=","2mSEIAYofZxl8lLNXwVt","2mSEIAYvdYtw91LE"),
("84","6","ym2VYVYee519/lCDSh91h82bgXlWVDyzDo1X2qs6Rm6UpMPylPc7ggjASgs9jcga/JeqNPRxW7w/x7bCWcyAQU/q/52vkIAch+ww8xsqEul99jPaMa7he2NIJdno/XE6pf9BaghWN0fJVAYl4sAqIarKkg==","8XWEKEkCS5w=","yneRL1UNd4t49FODfRh6h5+dnnl4Wj+iBp1U26AqRkmOrs++kvU=","zWCTNFQFYIYxy0/MXBtxng==","12uEJEEefYtou23RURV4loA=","2nCCIEQFeJZl4h3zTBh2n4if"),
("85","6","22STKQYcZpB26VzOHhp1moOGkzBbSHGqFYsZ0bkwRmqZtY29kbgxkAjTBUIAlptP5pyuKLhoWLwjzKWHW9+DBlnq5tzimI1ZiPow4AckCKhr+nXTMvz0emMNLcTt+W52va1ROS5RLkeMVEd8rs1vaeuDn0pL27QcgacY6kkyiJloYa2X9+1HbJYdeQuUq3iAug+pFfnF","8XWEKEkCS50=","rw==","rg==","/GqEKQYNNNkx+Q==","8GqeJAYDct9l81iDXxV7hYg="),
("86","6","22STKQYcZpB26VzOHhp1moOGkzBbSHGqFYsZ0bkwRmqZtY29kbgxkAjTBUIAlptP5pyuKLhoWLwjzKWHW9+DBlnq5tzimI1ZiPow4AckCKhr+nXTMvz0emMNLcTt+W52va1ROS5RLkeMVEd8rs1vaeuDn0pL27QcgacY6kkyiJloYa2X9+1HbJYdeQuUq3iAug+pFfnF","8XWEKEkCS5w=","rw==","rg==","/GqEKQYNNNkx+Q==","0GqeJAYDct9l81iDXxV7hYg="),
("87","6","3WSeJU8IdYt0u1bGR1d3koPSmjhDXnGiQZZM0qJ+EHiQtMg=","8XWEKEkCS50=","rw==","rg==","/GqEKQYNNNkx+Q==","0GqeJAYDct9l81iDXxV7hYg="),
("88","6","vUuxDGNT","8XWEKEkCS50=","yneRL1UNd4t49FM=","3WqeIlMeZpp/7x3MThJmkpmbnTc=","33GfLEkPfYto","2nCCIEQFeJZl4g=="),
("89","6","3yXdbAtBOdI8thCDVwQ0koPSkypGVDKqAIxQ0aB+BHyItsi3mbgwnwjbXws2ig==","8XWEKEkCS5w=","zGCcIFIFe5E=","0WuVYVIDNLB//g==","2WCeJFQNeJZr+knKURk=","zXWVIk8NeJZr+knKURk="),
("90","6","3yXdbAtBOdI8thCDVwQ0koPSkypGVDKqAIxQ0aB+BHyItsi3mbgwnwjbXws2ig==","8XWEKEkCS5s=","zGCcIFIFe5E=","0WuVYVIDNLB//g==","2WCeJFQNeJZr+knKURk=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("91","6","93bQNU4JNJJ49VTOXxs0gJiClysVUDS6","8XWEKEkCS50=","7neZLEcebd96/kQ=","/WSeJU8IdYt0u1bGRw==","7XCCM0kLdYt0u1bGRw==","62uZMFMJNJR04g=="),
("92","6","yW2ZIk5Me4906VzXUQVn04yAl3leVT60D9hYze4KA2uSoN+r19cllA7TXw0h2YQ=","8XWEKEkCS50=","pD/cYRk=","oSnQew==","oSnQeh0=","0GqeJAYDct9l81iDXxV7hYg="),
("93","6","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58ZzaswEnySosih1/Em0QjAXgdzxg==","8XWEKEkCS50=","ym2VYUQDcIYx9FuDX1djm4Sel3lZVD6zQZFKnqsmA3qJtci21/kh0RDXShEn2dRU9pw=","ym2VYUQDcIYx9FuDX1dwnM3c3HcVTDmqDZ0Z0qExFjmVso23j/02hAjXT0IyjZtW8JivL7hoUP8p","ym2VYUQDcIYx9FuDX1dwnM3c3HcVTDmqDZ0Z0qExFjmVso23j/02hAjXT0IpnMlVtZaue/VoTPls1qnKTt4=","3yWWLlRMeJB+6x3AXxk0nYiElysVWTTjFItc2u43CDmMrcyxkrg6l1zTCxU7kNdftZWzNOg="),
("94","6","6W2RNQYFZ9937lPASh57nc3N","8XWEKEkCS54=","2HCeIlIFe5Ex8k6DX1d2n4KRmXlaXXGwFZlN26M7CG2P4dm6lux1gRnATQ0hlJtJ+pS5e+t3W/8lxKnEC9mNEkA=","2HCeIlIFe5Ex8k6DSh9x04uHnD1UVjStFZlVnqMxAmyQoN/ygvY8hVKSakI1jNVZ4ZCzNbhuTbw50bXGR8GVQU/u+JXol5Edyut/tRkgDa927TicNfz3ZXILKtbt+yJupf5P","2HCeIlIFe5Ex8k6DX1d2n4KRmXlaXXGgDpxcnro2B23cscigkfcnnA+SSkIgid5Z/J+1OLhzX+8njODuX42EAFir6tzhmJkcyv5+8UksC+lw7HXOMan3dHUEJg==","0GqeJAYDct9l81iDXxV7hYg="),
("95","6","yW2RNQYFZ99y9FPQShZ6h83N","8XWEKEkCS54=","3WqeMlINeotiu1XCSBI0lYSKlz0VTTCvFJ1Knro2B23cpcLymfch0R/aSgw0nJte4Iu1Nf8nSvQpgqXfTs6ZFULk5dzgn9QYyu9i+g43HqQ=","3WqeMlINeotiu1XCSBI0lYSKlz0VTTCvFJ1Knro2B23cosWzmf8w0RjHWQs9nptO/Zz8PuBiXek4y6/JC8KKQUqr+47gnoYYhw==","3WqeMlINeotiu1XCSBI0hoOZnDZCVXG1AJRM271+EnGdtY2/luF1kxmSSAoyl9xftZ2pKfFpWbw4yqWHTtWJAl7/4pPh2Zsfyv4w5RsqGLt48g==","8GqeJAYDct9l81iDXxV7hYg="),
("96","6","ym2VYWIJcp5k90mDbhZmkoCXhjxHGwGiEotQ0Kl+K3yfqcy8nus40RXBCwEylddf8dm9KA==","8XWEKEkCS54=","3WScLQYObd9H+lHWWw==","3WScLQYObd9D/lvGTBJ6kIg=","3WScLQYObd9Q/1nRWwRn","3WScLQYObd9f+lDG"),
("97","6","yW2RNQYbfZN9u1/GHgN8ls2dhy1FTiXjDp4ZyqY7Rn+TrcG9gPE7llzBXwMnnNZf+42ve6dYRqx8koT4d8OFD1+r6tyy2cBVyv0wqElyU6oivzacafzlNSpIfpDmoyJqtuRKPi0fBwmJWXoq444uNw==","8XWEKEkCS54=","rg==","+3eCLlQ=","rw==","+WSCI0cLcd9n+lHWWw=="),
("98","6","yW2RNQYbfZN9u1/GHgN8ls2dhy1FTiXjDp4ZyqY7Rn+TrcG9gPE7llzBXwMnnNZf+42ve6dYRqx8koT4d8OFD1+r86e7pNREyuQhuVtpTLQivyXOPbLwcz80YZXguCd+5KhgFmkbI3CfbQpwlN9aIP+8jnUbwA==","8XWEKEkCS54=","rjbVBQ==","rg==","rTc=","rTfB"),
("99","6","yW2RNQYbfZN9u1/GHgN8ls2dhy1FTiXjDp4Z2KEyCnaLqMO11+gnnhvASg9zxuRCpcnsH8dbUL8lzKPLXsmJPlO7u8zLpqgXh/55+0FsILEpr2X4C4DqbkgQc4C03F1GquRKPmtPd1KMDQY5/9ZYdLfXj2xtp7UQyf9Ksxlqx7BPTIzfiLUDNM8qBjufum6a9A+gedCX","8XWEKEkCS50=","+3eCLlQ=","rg==","rzU=","+WSCI0cLcd9n+lHWWw=="),
("100","6","yW2ZIk5MfYwx71XGHgV9lIWG0i5UQnG3Dthd260yB2uZ4c69meshkBLGCws92fgaqg==","8XWEKEkCS5s=","92uEYUUDeoxl+lPXHgF1gc3Pw2kO","92uEYUUDeoxlu0vCTFcp09zCyQ==","/WqeMlJMfZFlu0vCTFcp09zCyQ==","3CXWYWVMVpBl8w=="),
("101","6","yW2RNQYbfZN9u1XCTgdxnc2blHlcVXGiQbsZzrwxAWudrI2rmO11kA/BQgU92doa45iwLv0nSvNsw66HSt+eAFKr7pDqlJEXnr9n/QY2Gulq6jfPN67tZWNIJsjn/Wd+t61QIi4XKELWVQZnqc1mfvWGxhc=","8XWEKEkCS5w=","ym2VYUMAcZJ09UmDSR54n82Ql3lGXiXjFZcZjg==","ym2VYUUDeY9491jRHgB7hoGW0itQSz6xFdhY0O47FGuTsw==","ym2VYVYee5hj+lCDUxZt046AkypdGzilQYtW06t+D3SMrt+mlvYh0RjTXwNznt5O5tmzLf11Se4l1rTCRQ==","ym2VYUceZp5ou07KRBI0hIKHnj0VWiGzE5dJzKc/EnyQuI21hfci"),
("102","6","vUuxDGNT","8XWEKEkCS5s=","33CEKUkefYVw71TMUFdZkoOTlTxH","zXGfM0cLcd9c+lPCWRJm","6neRL1UNd4t49FODcxZ6koqXgA==","3HCWJ0MeNLJw9VzEWwU="),
("103","6","vUuxDGNT","8XWEKEkCS5s=","33CEKUkefYVw71TMUFdZkoOTlTxH","zXGfM0cLcd9c+lPCWRJm","6neRL1UNd4t49FODcxZ6koqXgA==","3HCWJ0MeNLJw9VzEWwU="),
("104","6","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z171+CHaI4dihkvx1hROSTAc9nMlb4Zz8P+FpX/ElweDQTs/MEUrs7o+w","8XWEKEkCS5s=","zk2g","/3aAb0gJYA==","9HaA","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("105","6","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z171+CHaI4dihkvx1hROSTAc9nMlb4Zz8P+FpX/ElweDQTs/MEUrs7o+w","8XWEKEkCS5s=","zk2g","/3aAb0gJYA==","9HaA","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("106","6","12PQOEkZNIhw9UmDShg0lYSclnlBUzTjD41U3KssRnaa4d+9guwwgw+SSQcnjt5f+9m9e+toS+4vx+DGRcnMBU74/5XhmIAQhfE8tR0tGuls6zzQPaj9NWMHY9LhuHdpoekEIzg=","8XWEKEkCS50=","7GqFNUM=","13WTLkgKfZg=","12OTLkgKfZg=","yneRIkMee4pl/g=="),
("107","6","yW2RNQYFZ99l81iDTB5zm5nShThMGyWsQZla3astFTmKoMGnkrg6l1zBXxAmms9P55z8Lfl1V/0uzqWHScKDClCr+47mmpFVyu9x8gxlAukm","8XWEKEkCS54=","7neZL1IKPKMzvlmGWis2382QnTZeFSGxCJtcku48CXaX792zkP18yg==","7neZL1IKPKMzvlmGWis2382CgDBWXn+hDpdSku4uB36Z78+9mPN8yg==","7neZL1IKPKMzvlmGWis2382CgDBWXmv5A5dW1eJ+FnibpJfolfc6mlWJ","7neZL1IKPKMzvlmGWis2382CgDBWXnz9A5dW1eJ+FnibpIDslfc6mlWJ"),
("108","6","yW2ZIk5Me5kx71XGHhF7n4GdhTBbXHGqEthY0qIxEXyY4cS81/l1slzzWQsnkdZf4ZC/e/FpTeg+16PTQsKC","8XWEKEkCS54=","xVg=","5Xg=","tiw=","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("109","6","yW2RNQYFZ99j8lrLSldjkpTShjYVcj+qFZFY0qckB22VrsPyluonkAWN","8XWEKEkCS54=","92uEYUgZeaQnxh2eHgw0wcHSxnUVCmPvQc0VnvprSjnJ4dDyzA==","92uEYUgXad8su0aDDFs0x8HSw2sZG2TvQcwMku5rRmTc+g==","92uEYUgXIoIxph3YHkU409ne0mgHGyzjWg==","92uEYUhEItYxph3YHkU409ne0mgHF3H2TdgNi+J+UzmB4ZY="),
("110","6","ym2VYXI4WN938ljPWld8kp7ShDhZTjTjUMgXnoYxETmRoMOr1+o6hAjXWRFz0dZb7dD8OPlpHuw+zaPCWN7MFUPi+NzrmIAYje1x+El6","8XWEKEkCS5w=","rzQ=","qw==","rzU=","pw=="),
("111","6","3GyENk8fcd9+61jRXwN7gZ7SkThbGz6zBIpYyqt+E2mTr43t","8XWEKEkCS5s=","+mqFI0oJNJ5//x3AVhZmgA==","+GmfIFIfNJ5//x3HUQJ2n4iB","92uEMgYNepsx/VHMXwNn","92uEMgYNepsx+FXCTAQ="),
("112","6","yneRL1Uce41lu1HCRxJm04yVlStQXDC3BIsZ2q8qBzmas8K/1/w8lxrXWQc9jZtb5YmwMvtmSvUjzLOHQsOYDgvqq4/ml5MVj79j4RsgHqQ5/TDaO67hNWcJMMPt9mU6rfkEPiQ=","8XWEKEkCS5w=","8GCENkkef999+kTGTA==","+mSEIAYAfZF6u1HCRxJm","/3WALU8PdYt49FODUhZtlp8=","7m2JMk8PdZMx91zaWwU="),
("113","1","1yWTLksJNNE/tRONHj5gkoGL","8XWEKEkCS54=","6mo=","+HefLAY=","/3HQ","92s="),
("114","1","1myDYUkKcpZy/h3KTVd7nc2GmjwVXTixEowZkOBwSDfS74Py","8XWEKEkCS5w=","vmmVN0MA","vmKCLlMCcN8=","vnaEIEEJNA==","vmOcLkkeNA=="),
("115","1","sCvebwhCNIt5/k/GHhZ6is2RkytGGz6tQYxR2+4tEmuZpNnt1w==","8XWEKEkCS50=","/3eV","93Y=","32g=","93aeNQ=="),
("116","1","tkqeYVIEcd9h81LNW140u4ienjYbGxu2DZFcyu5wSDfS74P82bZ1","8XWEKEkCS50=","vnaAJEcHNA==","vnaAJEcHfZF2uw==","6mScKk8Cc98=","vnGRLU1M"),
("117","1","sCvebwhCOtE/u1nMHg57hs2VnXlBVHG3CZ0Z2bczWTnR4fmlnvsw0R2SXAc2kpU=","8XWEKEkCS54=","1mqHYUkKYJp/uw==","yW2VM0NM","1mqHYQ==","yW2JYQ=="),
("118","1","1yWcKE0JNNE/tRONEFk604Sc0jRMGyKzAIpcnro3C3zS4Q==","8XWEKEkCS54=","7GCRJU8Cc98=","7GCRJQY=","6mrQM0MNcN8=","6mrQM0MNcJZ//B0="),
("119","1","1yXebwhCOtE/tRODXBhmnc2bnHkEAmjx","8XWEKEkCS5s=","6WSDYQ==","/2jQ","6WCCJAY=","/3eV"),
("120","1","yW2VM0NMOtE/tRONEFk606ycnHlUVTXjLJlLx+4/EjnK4d2/1+EwggjXWQYygIQ=","8XWEKEkCS5w=","/3eV","6WCCJA==","6WSD","9mSGJAYOcZp/"),
("121","1","yW2VM0NMOtE/tRONEFk606ycnHlUVTXjLJlLx+4/EjnK4d2/1+EwggjXWQYygIQ=","8XWEKEkCS5w=","/3eV","6WCCJA==","6WSD","9mSGJAYOcZp/"),
("122","1","1mDQKFVMfZFl/k/GTQNxl83c3HcbFX/tT9YZ0qs/FHeVr8rypfc4kBLbSgx9","8XWEKEkCS50=","92vQ","8WvQ","6mrQ","+GqC"),
("123","1","yWqFLUJMbZBku1HKVRI03cPc3HcbFX/tT9hN0e46FHCSqoHyhPEnzg==","8XWEKEkCS54=","/2uJNU4Fepg=","/2uJNk4JZpo=","8GqEKU8Ccw==","7WqdJFIEfZF2"),
("124","1","ym2VYUIDd4t+6R3EXwFx04CX0jgVFX/tT9YXkOBwSH+Ts42hmPUw0RHXTwswkNVftZW9KOwnSfkpye4=","8XWEKEkCS50=","8GqEJAY=","7GCTKFYJNA==","7neVMkUefY9l8lLNHg==","7GCTJE8cYA=="),
("125","1","yW2RNQZCOtE/tRONEFk63cPc3HcbFX/tT9hX27YqRm6ZpMa3mfxq","8XWEKEkCS50=","+mrQOEkZNJt+uw==","/3eVYV8DYd919FTNWVc=","vnKZLUpMbZBku1nMHg==","vmGZJQYVe4ox/1KD"),
("126","1","0mqfKgdMQJd0u1/WTVc63cPc3HcbFX/tT9YXkOBwSDfS74P82bg=","8XWEKEkCS54=","/3eVYUUDeZZ//B0=","93bQIkkBfZF2uw==","/WqdJFVM","/WqdJFU="),
("127","1","03zQLEkYfJpjuxONEFk63cPc3HcbFX/jFZBcnq0/FGmZtY2ln/070TWSTA0n2dNV+JyANeFiTegp0KTGUo2NB1/u+ZLglppX","8XWEKEkCS50=","93bQKUkDYppj8lPEHg==","6WSDYU4De4l06VTNWVc=","vnKVM0NMfJB+7VjRVxlz","vm2RMgYOcZp/u1XMUQFxgYSclXk="),
("128","1","1yWAM0kBfYx0u3SDEFk63cPc3HcbFX/tT9YXkOBwRmqItMmr1/A0gxjXWUxz","8XWEKEkCS50=","vnKZLUo=","vmSdYUEDfZF2u0nM","vmiROAY=","83CDNQ=="),
("129","1","13bQBEsBdd8/tRONEFk63cPc3HcbFX/tT9YXno0/FHWd/o0=","8XWEKEkCS50=","6mScLQYNZ98=","/3bQNUcAeN9w6B0=","vnGRLUoJZt9l81zXHg==","vmifM0NMYJ599w=="),
("130","1","13bQNU4NYN9h7k/QW1c63cPc3HcbFX/tT9YXnvE=","8XWEKEkCS50=","6mrQOEkZNA==","vnyfNAY=","52qFM1VM","vnyfNFRM"),
("131","1","1yXebwhCOtE/tRONEFk63cPc3HcbGzy6QZVW3KcyAzmMqcK8krgmmBLRTkJhyYsDu9k=","8XWEKEkCS50=","9mSGJAYEdZsx","vm2RN0NM","vm2RJQY=","/2jQKUcafZF2uw=="),
("132","1","1mqHYUoDepgxtRONEFk63cPc3HcbFX/tT9YXkOBwSDfS74PysvYynRXBQ11z","8XWEKEkCS50=","vmSCJAYVe4ox91jCTBl9nYo=","vm2RN0NMbZBku1/GWxk0n4iTgDdcVTbj","+mrQOEkZNJN0+k/NHg==","52qFYUoJdY1/uw=="),
("133","1","yW2VM0NMOtE/tRONEFk606ycnHlUVTXjLJlLx+4/EjnK4d2/1+EwggjXWQYygIQ=","8XWEKEkCS50=","/3eV","6WCCJA==","6WSD","9mSGJAYOcZp/"),
("134","1","1yWTLksJNNE/tRONHj5gkoGL","8XWEKEkCS50=","6mrQ","/3HQ","92s=","+HefLA=="),
("135","1","1myDYUkKcpZy/h3KTVd7nc2GmjwVXTixEowZkOBwSDfS74M=","8XWEKEkCS50=","8mCGJEo=","+XefNEgINA==","7XGRJkNM","+GmfLlQ="),
("136","1","sCvebwhCNIt5/k/GHhZ6is2RkytGGz6tQYxR2+4tEmuZpNnt1w==","8XWEKEkCS50=","/3eV","93Y=","32g=","93aeNQ=="),
("137","1","tkqeYVIEcd9h81LNW140u4ienjYbGxu2DZFcyu5wSDfS74P82bZ1","8XWEKEkCS5w=","7XWVIE1M","vnaAJEcHfZF2uw==","6mScKk8Cc98=","6mScKgY="),
("138","1","sCvebwhCOtE/u1nMHg57hs2VnXlBVHG3CZ0Z2bczWTnR4fmlnvsw0R2SXAc2kpU=","8XWEKEkCS54=","1mqHYUkKYJp/","yW2VM0M=","1mqHYQ==","yW2JYQ=="),
("139","1","1yWcKE0JNNE/tRONEFk604Sc0jRMGyKzAIpcnro3C3zS","8XWEKEkCS54=","7GCRJU8Ccw==","7GCRJQY=","6mrQM0MNcA==","6mrQM0MNcJZ//B0="),
("140","1","1yXebwhCOtE/tRODXBhmnc2bnHkEAmjx","8XWEKEkCS5s=","6WSD","/2jQ","6WCCJAY=","/3eV"),
("141","1","yW2VM0NMOtE/tRONEFk606ycnHlUVTXjLJlLx+4/EjnK4d2/1+EwggjXWQYygIQ=","8XWEKEkCS5w=","/3eV","6WCCJA==","6WSD","9mSGJAYOcZp/"),
("142","1","1mDQKFVMfZFl/k/GTQNxl83c3HcbFX/tT9YZ0qs/FHeVr8rypfc4kBLbSgx9","8XWEKEkCS5s=","92vQ","8WvQ","6mrQ","+GqC"),
("143","1","yWqFLUJMbZBku1HKVRI03cPc3HcbFX/tT9hN0e46FHCSqoHyhPEnzg==","8XWEKEkCS50=","/2uJNU4Fepg=","/2uJNk4JZpo=","8GqEKU8Ccw==","7WqdJFIEfZF2"),
("144","1","ym2VYUIDd4t+6R3EXwFx04CX0jgVFX/tT9YXkOBwSH+Ts42hmPUw0RHXTwswkNVftZW9KOwnSfkpye4=","8XWEKEkCS50=","8GqEJAY=","7GCTKFYJNN8=","7neVMkUefY9l8lLN","7GCTJE8cYA=="),
("145","1","yW2RNQZCOtE/tRONEFk63cPc3HcbFX/tT9hX27YqRm6ZpMa3mfxq","8XWEKEkCS50=","+mrQOEkZNJt+uw==","/3eVYV8DYd919FTNWQ==","6WycLQYVe4ox/1I=","+myUYV8DYd919B0="),
("146","1","03zQLEkYfJpjuxONEFk63cPc3HcbFX/jFZBcnq0/FGmZtY2ln/070TWSTA0n2dNV+JyDI6g3DtgT/q7eTt6YBFnv6oWvmJINj+1++gYrUQ==","8XWEKEkCS50=","93bQKUkDYppj8lPEHg==","6WSDYU4De4l06VTNWVc=","6WCCJAYEe5Bn/k/KUBA=","9mSDYUQJcZEx81LMSBJmmoOV0g=="),
("147","1","1yWAM0kBfYx0u3SDEFk63cPc3HcbFX/tT9YXkOBwRmqItMmr1/A0gxjXWUxz","8XWEKEkCS50=","6WycLQ==","vmSdYUEDfZF2u0nM","82SJYQ==","83CDNQ=="),
("148","1","13bQBEsBdd8/tRONEFk63cPc3HcbFX/tT9YXno0/FHWd/g==","8XWEKEkCS50=","6mScLQYNZ98=","/3bQNUcAeN9w6B0=","6mScLUMeNIt5+kmD","82qCJAYYdZN9"),
("149","4","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z27YqA3eYso2z1+gnmArTXwdzl95O4pauMLhmXe4j0bOHW9iODULoq5LqjYMWmPRjqg==","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("150","4","yW2VLwYPe5N9/l7XVxh604KU0i9USTisFIsZ3aEzFmyIpN+h1+swlBHBCwNzitJU8pW5e/toVvk+x67TC96VEl/u5tz7ltQQnuww9gUsGqdts3XIPLnqNX4cY9n3uGF7qOFBLg==","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","+myDNVQFdopl/lmDTQ5nh4if","/GqEKQZEddYx+lPHHl922g==","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("151","4","ynKfYUIJYpZy/k6DXwVx04Sc0jdQTyasE5MZ16g=","8XWEKEkCS54=","/yWAM0kPcYxiu1TNHhh6ls2Wly9cWDTjCIsZ36wyAzmIro23j/s9kBLVTkI6l91V55S9L/FoULw7y7TPC8zMEVnk6Jn8itQQhL9x+wYxF6xrvzHZIrXncA==","/yWAM0kPcYxiu1TQHgVhnYObnD4VVD/jA5dN1u46A2+Vosih","zky0MgYDct9l81iDTgV7kIiBgTxGGyO2D5ZQ0Kl+CX/cpcS0kf0nlBLGCwY2j9JZ8Ir8OupiHu8tz6U=","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("152","4","12vQIkkBZIpl/k+DUBJghIKAmXlbVDWmEthYzKs=","8XWEKEkCS5s=","6m2VYUUDeY9k71jRHgN8kpnSnStcXDitAIxcze4qDnzcpcymlg==","6m2VYUUDeY9k71jRHgN8kpnSgDZATzSwQYxR2+46B22d","6m2VYUUDeY9k71jRHgN8kpnShjxHVjitAIxcze4qDnzcpcymlg==","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("153","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS54=","/HefIEIPdYxlu1PGSgB7gYY=","62uZIkcfYN9//knUUQV/","83CcNU8PdYxlu1PGSgB7gYY=","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("154","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS54=","/HefIEIPdYxlu1PGSgB7gYY=","62uZIkcfYN9//knUUQV/","83CcNU8PdYxlu1PGSgB7gYY=","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("155","4","3yWvHnkzS9946B3CHhNxhYSRl3lBUzC3QZ5WzLk/FH2P4d2zlPMwhQ+SSQcnjt5f+9myPuxwUe4n0eDFUo2cE0To7o/8kJoeyut48Ek3ELxt9jvbdLXqc3gaLtHw8W105ORKKSdCP07IEE9m75lvaaeX3ktZnq9G","8XWEKEkCS5w=","/HeZJUEJ","+GyCJFENeJM=","+GyCJFENeJM=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("156","4","92vQIkcfcd9+/R3XTBZylYSR0jZDXiOvDpld16A5","8XWEKEkCS54=","6W2VLwYNNIxo6EnGU1dglp+fmzdUTzSw","6W2VLwYPe5F//l7XVxh604+Xhi5QXj/jFY9WnqAxAnyP4dm3hfU8nx3GThE=","8GqeJAYDct9l81iDUxJ6h4SdnDxR","6W2VLwYNNIxo6EnGU1dglp+fmzdUTzSw"),
("157","4","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS50=","zXyeNUcU","zWCdIEgYfZxi","zXGCNEUY","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("158","4","3WqdLFMCfZxw71TMUFd2lpmFlzxbGzDjApdUzrsqA2vcoMO21/l1mhnLSQ0yi98a/JeqNPRxW+9s/Z/4dPKzPnTU1KPQpqtZnu1x+xooFrpq9jrS","8XWEKEkCS50=","33CELksNYJZy","1mScJwsIYY99/kU=","2HCcLQsIYY99/kU=","zWydMUoJbA=="),
("159","4","yW2ZIk5Me5F0u1LFHgN8ls2UnTVZVCaqD58Z27YqA3eYso2z1+gnmArTXwdzl95O4pauMLhmXe4j0bOHW9iODULoq5LqjYMWmPRjqg==","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("160","4","yW2VLwYPe5N9/l7XVxh604KU0i9USTisFIsZ3aEzFmyIpN+h1+swlBHBCwNzitJU8pW5e/toVvk+x67TC96VEl/u5tz7ltQQnuww9gUsGqdts3XIPLnqNX4cY9n3uGF7qOFBLg==","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("161","4","ynKfYUIJYpZy/k6DXwVx04Sc0jdQTyasE5MZ16g=","8XWEKEkCS5w=","8mqTIEpMdY10+h3NWwNjnJ+Z","rg==","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("162","4","12vQIkkBZIpl/k+DUBJghIKAmXlbVDWmEthYzKs=","8XWEKEkCS54=","6m2VYUUDeY9k71jRHgN8kpnSnStcXDitAIxcze4qDnzcpcymlg==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","0GqeJAYDct9l81iDXxV7hYg="),
("163","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS5w=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","8GqeJAYDct9l81iDXxV7hYg="),
("164","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("165","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("166","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","rg==","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","0GqeJAYDct9l81iDXxV7hYg="),
("167","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS5w=","8mqTIEpMdY10+h3NWwNjnJ+Z","rg==","/GqEKQYNNNkx+Q==","8GqeJAYDct9l81iDXxV7hYg="),
("168","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("169","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("170","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","/GqEKQYNNNkx+Q==","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("171","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","0GqeJAYDct9l81iDXxV7hYg="),
("172","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","/3eV","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","8GqeJAYDct9l81iDXxV7hYg="),
("173","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","/GqEKQYNNNkx+Q==","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("174","4","3WqdLFMCfZxw71TMUFd3m4ycnDxZGziwQYtR37w7AjmeuI2zm/R1hRTXCw8ymtNT+5yve/dpHugkx+DJTtmbDlngq5Xh","8XWEKEkCS54=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("175","4","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS5w=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("176","4","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS5w=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","0GqeJAYDct9l81iDXxV7hYg="),
("177","4","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","8GqeJAYDct9l81iDXxV7hYg="),
("178","4","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","/GqEKQYNNNkx+Q==","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("179","4","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("180","4","ym2VYVUYZopy70jRW1d7gc2UnStYWiXjDp4Z2q8qBzmVso2xlvQ5lBg=","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("181","4","yW2ZIk5Me5kx71XKTVd9gM2cnS0VWnGtBIxO0bw1RnyYpsjyk/0jmB/XC10=","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","0GqeJAYDct9l81iDXxV7hYg="),
("182","4","yW2ZIk5Me5kx71XKTVd9gM2cnS0VWnGtBIxO0bw1RnyYpsjyk/0jmB/XC10=","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","rg==","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","8GqeJAYDct9l81iDXxV7hYg="),
("183","4","yW2ZIk5Me5kx71XKTVd9gM2cnS0VWnGtBIxO0bw1RnyYpsjyk/0jmB/XC10=","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("184","4","yW2ZIk5Me5kx71XKTVd9gM2cnS0VWnGtBIxO0bw1RnyYpsjyk/0jmB/XC10=","8XWEKEkCS54=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","8GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("185","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("186","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","/GqEKQYNNNkx+Q==","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("187","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","0GqeJAYDct9l81iDXxV7hYg="),
("188","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("189","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","7XGfM0cLcd9w6VjCHhlxh5qdgDI="),
("190","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","/WqdMVMYcY0x9VjXSRhmmA==","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","8GqeJAYDct9l81iDXxV7hYg="),
("191","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","/GqEKQYNNNkx+Q==","0GqeJAYDct9l81iDUxJ6h4SdnDxR"),
("192","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","/GqEKQYNNNkx+Q==","0GqeJAYDct9l81iDXxV7hYg="),
("193","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS5w=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","8GqeJAYDct9l81iDXxV7hYg="),
("194","4","ym2CJENMe40x9lLRW1dwlpubkTxGGyKrAIpcnq9+CnCSqo27mbgKriPtdD0MpptZ+peyPvtzV/Mi","8XWEKEkCS50=","8mqTIEpMdY10+h3NWwNjnJ+Z","6GyCNVMNeN9h6VTVXwNx04OXhi5aSTo=","+2uEJFQcZpZi/h3TTB5ikpmX0jdQTyasE5M=","/2mcYUkKNIt5/h3OWxlgmoKclz0="),
("195","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("196","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("197","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("198","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("199","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("200","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("201","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("202","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("203","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("204","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("205","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("206","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("207","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("208","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("209","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("210","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("211","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("212","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("213","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("214","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("215","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("216","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("217","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("218","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("219","0","","","","","",""),
("220","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("221","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("222","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("223","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("224","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("225","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","",""),
("226","0","zm2fL0M=","+2iRKEo=","6mydJA==","7WafM0M=","","");



DROP TABLE IF EXISTS result;

CREATE TABLE `result` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `attend_que` varchar(100) NOT NULL,
  `obtained_marks` varchar(100) NOT NULL,
  `exam_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS send_notification;

CREATE TABLE `send_notification` (
  `n_id` int(200) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `exam_id` int(10) NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_on` varchar(100) NOT NULL,
  `admin_id` int(30) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO send_notification VALUES("3","Attention ","1"," Your Exams Ends In 5 Minutes","sent","2020-07-18 18:00:52","14"),
("5","Check","1"," Hello","sent","2020-07-29 09:17:38","14");



DROP TABLE IF EXISTS student_table;

CREATE TABLE `student_table` (
  `student_id` int(50) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mother_maiden_name` varchar(50) DEFAULT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `favoritesport` varchar(100) DEFAULT NULL,
  `petname` varchar(100) DEFAULT NULL,
  `favoritefood` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `lga` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `salt` varchar(200) NOT NULL,
  `user_created_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO student_table VALUES("5","Ejigson","Lagun","Peter","ejigson@gmail.com","b8a550e2f8c60ed840aa3cab9d056517b26355aced5a59705e15122601b0db84","12345678907","Nimat","1.jpg","Football","Dog","Rice","Ebonyi","Ohaozara","2020-07-29","Lokoja","u5Kw1PC9DFMP5OVFu6s8ZYgP2jSJYb8XI00Ls6hPjc5mg1HPZPZZ55YV7KPs9F5L3uDYQ1oGZTbAw8YWs74UIYbupWV854Kr6nxK","2020-07-04 18:56:38");



DROP TABLE IF EXISTS tbl_email;

CREATE TABLE `tbl_email` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tbl_email VALUES("1","ejigsonpeter1@gmail.com"),
("2","ejigson@gmail.com"),
("3","femigst2015@gmail.com"),
("4","femigist2015@gmail.com"),
("5","student@student.com");



DROP TABLE IF EXISTS user_exam_enroll_table;

CREATE TABLE `user_exam_enroll_table` (
  `user_exam_enroll_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `attendance_status` enum('Absent','Present') NOT NULL,
  PRIMARY KEY (`user_exam_enroll_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO user_exam_enroll_table VALUES("11","5","1","Absent");



DROP TABLE IF EXISTS user_logs;

CREATE TABLE `user_logs` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `admin_id` int(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `access_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO user_logs VALUES("1","14","Ejigson Ejigson","Administrator","active","2020-06-24 07:26:42"),
("2","14","Ejigson Ejigson","Administrator","active","2020-06-24 09:11:28"),
("3","14","Ejigson Ejigson","Administrator","active","2020-06-24 09:13:55"),
("4","14","Ejigson Ejigson","Administrator","active","2020-06-25 07:19:20"),
("5","15","Ejigson Ejigson","Administrator","active","2020-06-29 12:54:23"),
("6","14","Ejigson Ejigson","Administrator","active","2020-06-29 13:02:09"),
("7","14","Ejigson Ejigson","Administrator","active","2020-07-04 14:47:10"),
("8","14","Ejigson Ejigson","Administrator","active","2020-07-04 18:09:03"),
("9","14","Ejigson Ejigson","Administrator","active","2020-07-04 18:22:21"),
("10","14","Ejigson Ejigson","Administrator","active","2020-07-10 21:31:23"),
("11","14","Ejigson Ejigson","Administrator","active","2020-07-12 20:24:11"),
("12","14","Ejigson Ejigson","Administrator","active","2020-07-13 19:17:57"),
("13","14","Ejigson Ejigson","Administrator","active","2020-07-14 14:39:54"),
("14","14","Ejigson Ejigson","Administrator","active","2020-07-14 16:55:50"),
("15","14","Ejigson Ejigson","Administrator","active","2020-07-16 19:07:25"),
("16","14","Ejigson Ejigson","Administrator","active","2020-07-16 19:43:30"),
("17","14","Ejigson Ejigson","Administrator","active","2020-07-16 19:47:15"),
("18","14","Ejigson Ejigson","Administrator","active","2020-07-17 08:25:00"),
("19","14","Ejigson Ejigson","Administrator","active","2020-07-17 09:06:38"),
("20","14","Ejigson Ejigson","Administrator","active","2020-07-18 19:57:05"),
("21","14","Ejigson Ejigson","Administrator","active","2020-07-26 14:39:41"),
("22","14","Ejigson Ejigson","Administrator","active","2020-07-26 14:42:01"),
("23","14","Ejigson Ejigson","Administrator","active","2020-07-29 07:17:05"),
("24","14","Ejigson Ejigson","Administrator","active","2020-07-29 07:27:17"),
("25","14","Ejigson Ejigson","Administrator","active","2020-07-29 08:00:28"),
("26","14","Ejigson Ejigson","Administrator","active","2020-07-29 08:14:30"),
("27","14","Ejigson Ejigson","Administrator","active","2020-07-29 08:59:26"),
("28","14","Ejigson Ejigson","Administrator","active","2020-07-29 09:00:24"),
("29","14","Ejigson Ejigson","Administrator","active","2020-07-29 09:01:00"),
("30","14","Ejigson Ejigson","Administrator","active","2020-07-29 08:29:50"),
("31","14","Ejigson Ejigson","Administrator","active","2020-07-29 19:11:16"),
("32","14","Ejigson Ejigson","Administrator","active","2020-07-29 19:18:35");



