DROP TABLE IF EXISTS "tblLogin";
CREATE TABLE "tblLogin" ("Username" TEXT PRIMARY KEY  NOT NULL  UNIQUE , "Password" TEXT);
INSERT INTO "tblLogin" VALUES('username','password');
INSERT INTO "tblLogin" VALUES('user','pass');
