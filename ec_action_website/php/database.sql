CREATE TABLE IF NOT EXISTS ecstock (
  report_id int(11) auto_increment PRIMARY KEY not null,
  room varchar (11) not null,
  report varchar(256) not null,
  tim datetime(6) DEFAULT CURRENT_TIMESTAMP,
  status varchar(20) not null
);

INSERT INTO ecstock (report, tim, status) VALUES ('Tongue Depressors', NOW(), 'ACTIVE');
