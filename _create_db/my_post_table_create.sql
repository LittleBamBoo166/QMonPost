CREATE TABLE province (
    proid int(3) NOT NULL AUTO_INCREMENT,
    proname varchar(50) NOT NULL,
    PRIMARY KEY (proid)
);

ALTER TABLE province
    ADD UNIQUE (proname);


CREATE TABLE district (
    disid int(6) NOT NULL AUTO_INCREMENT,
    proid int(3) NOT NULL,
    disname varchar(50) NOT NULL,
    PRIMARY KEY (disid)
);

-- CREATE INDEX ON district
--     (proid);

CREATE TABLE town (
    townid int(9) NOT NULL AUTO_INCREMENT,
    proid int(6) NOT NULL,
    disid int(3) NOT NULL,
    townname varchar(50) NOT NULL,
    PRIMARY KEY (townid)
);

-- CREATE INDEX ON town
--     (proid);
-- CREATE INDEX ON town
--     (disid);


CREATE TABLE shopinfo (
    shopid int(11) NOT NULL AUTO_INCREMENT,
    shopname varchar(100) NOT NULL,
    shopaddress varchar(100) NOT NULL,
    shoppass varchar(30) NOT NULL,
    shopphonenum char(11) NOT NULL,
    townid int(9) NOT NULL,
    PRIMARY KEY (shopid)
);

-- CREATE INDEX ON shopinfo
--     (townid);


CREATE TABLE proorder (
    orderid int(11) NOT NULL AUTO_INCREMENT,
    deliverytime int(1) NOT NULL,
    deliveryrequirement bool NOT NULL,
    pickrequest bool NOT NULL,
    ortherrequirement text NOT NULL,
    payers bool NOT NULL,
    deliverystatus int(1) NOT NULL,
    paymentstatus bool NOT NULL,
    shopid int(11) NOT NULL,
    cusid int(11) NOT NULL,
    PRIMARY KEY (orderid)
);

-- CREATE INDEX ON proorder
--     (shopid);
-- CREATE INDEX ON proorder
--     (cusid);


CREATE TABLE cusinfo (
    cusid int(11) NOT NULL AUTO_INCREMENT,
    cusname varchar(100) NOT NULL,
    cusaddress varchar(100) NOT NULL,
    cusphonenum char(11) NOT NULL,
    townid int(9) NOT NULL,
    PRIMARY KEY (cusid)
);

-- CREATE INDEX ON cusinfo
--     (townid);


CREATE TABLE proorderinfo (
    proid int(11) NOT NULL AUTO_INCREMENT,
    proname varchar(100) NOT NULL,
    quantity int(3) NOT NULL,
    weight double(3, 3) NOT NULL,
    cost int(10) NOT NULL,
    lenght double(3 , 3) NOT NULL,
    width double(3 , 3) NOT NULL,
    height double(3 , 3) NOT NULL,
    orderid int(11) NOT NULL,
    PRIMARY KEY (proid)
);

-- CREATE INDEX ON proorderinfo
--     (orderid);


ALTER TABLE district ADD CONSTRAINT FK_district__proid FOREIGN KEY (proid) REFERENCES province(proid);
ALTER TABLE town ADD CONSTRAINT FK_town__proid FOREIGN KEY (proid) REFERENCES province(proid);
ALTER TABLE town ADD CONSTRAINT FK_town__disid FOREIGN KEY (disid) REFERENCES district(disid);
ALTER TABLE shopinfo ADD CONSTRAINT FK_shopinfo__townid FOREIGN KEY (townid) REFERENCES town(townid);
ALTER TABLE proorder ADD CONSTRAINT FK_proorder__shopid FOREIGN KEY (shopid) REFERENCES shopinfo(shopid);
ALTER TABLE proorder ADD CONSTRAINT FK_proorder__cusid FOREIGN KEY (cusid) REFERENCES cusinfo(cusid);
ALTER TABLE cusinfo ADD CONSTRAINT FK_cusinfo__townid FOREIGN KEY (townid) REFERENCES town(townid);
ALTER TABLE proorderinfo ADD CONSTRAINT FK_proorderinfo__orderid FOREIGN KEY (orderid) REFERENCES proorder(orderid);