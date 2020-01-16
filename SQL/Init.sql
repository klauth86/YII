INSERT INTO `t_orm_event`(`description`, `start_date`, `end_date`) VALUES
('На всю жизнь...', date("2020-01-01"), date("2020-12-31"));
INSERT INTO `t_orm_event`(`description`, `start_date`, `end_date`) VALUES
('На Young Lions...', date("2020-01-01"), date("2020-12-31"));

INSERT INTO `t_orm_position`(`description`) VALUES ('копирайтер');
INSERT INTO `t_orm_position`(`description`) VALUES ('арт-директор');

commit;