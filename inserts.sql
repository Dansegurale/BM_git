--inserts en cicles
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('0151', 'Activitats físiques i esportives');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('AGB0', 'Administració i finances');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('CMB0', 'Comerç internacional');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('EEC0', 'Manteniment electrònic');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('ICB0', 'Desenvolupament d''aplicacions multiplataforma');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('ICC0', 'Desenvolupament d''aplicacions web');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('IMC0', 'Mecatrònica industrial');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('QUD0', 'Laboratori d''analisi i control de qualitat');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('SAH0', 'Higiene bucodental');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('SCB0', 'Educació infantil');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('SCC0', 'Integració social');
INSERT INTO `borsamila`.`cicles` (`codi`, `nom`) VALUES ('TMA0', 'Automoció');

INSERT INTO `borsamila`.`empreses` (`cif`, `nom`, `rao_social`, `seu_social`, `website`, `logo`) VALUES ('00000000001', 'emp1', 'emp1', 'Barcelona', 'www.emp1.com', 'logoemp1.png');
INSERT INTO `borsamila`.`empreses` (`cif`, `nom`, `rao_social`, `seu_social`, `website`, `logo`) VALUES ('00000000002', 'emp2', 'emp2', 'Lleida', 'www.emp2.com', 'logoemp2.png');
INSERT INTO `borsamila`.`empreses` (`cif`, `nom`, `rao_social`, `seu_social`, `website`, `logo`) VALUES ('00000000003', 'emp3', 'emp3', 'Tarragona', 'www.emp3.com', 'logoemp3.png');
INSERT INTO `borsamila`.`empreses` (`cif`, `nom`, `rao_social`, `seu_social`, `website`, `logo`) VALUES ('00000000004', 'emp4', 'emp4', 'Girona', 'www.emp4.com', 'logo4.png');



CREATE TABLE IF NOT EXISTS `empresaris` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `cognom1` varchar(255) NOT NULL,
  `cognom2` varchar(255) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `empresa_id` int(10) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `carrec` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniquemail` (`mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--trabajadores
INSERT INTO `borsamila`.`empresaris` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `empresa_id`, `dept`, `carrec`)
 VALUES (1, 'worker1', 'worker1@gmail.com', 'worker1', 'worker1', 'worker1', 'worker1', '11111111A', '00000000001', 'dept1', 'cap');
INSERT INTO `borsamila`.`empresaris` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `empresa_id`, `dept`, `carrec`)
 VALUES (2, 'worker2', 'worker2@gmail.com', 'worker2', 'worker2', 'worker2', 'worker2', '22222222B', '00000000001', 'dept2', 'cap');
 
INSERT INTO `borsamila`.`empresaris` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `empresa_id`, `dept`, `carrec`)
 VALUES (3, 'worker3', 'worker3@gmail.com', 'worker3', 'worker3', 'worker3', 'worker3', '33333333C', '00000000002', 'dept1', 'cap');
INSERT INTO `borsamila`.`empresaris` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `empresa_id`, `dept`, `carrec`)
 VALUES (4, 'worker4', 'worker4@gmail.com', 'worker4', 'worker4', 'worker4', 'worker4', '44444444D', '00000000002', 'dept2', 'cap');
 
INSERT INTO `borsamila`.`empresaris` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `empresa_id`, `dept`, `carrec`)
 VALUES (5, 'worker5', 'worker5@gmail.com', 'worker5', 'worker5', 'worker5', 'worker5', '55555555E', '00000000003', 'dept1', 'cap');
INSERT INTO `borsamila`.`empresaris` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `empresa_id`, `dept`, `carrec`)
 VALUES (6, 'worker6', 'worker6@gmail.com', 'worker6', 'worker6', 'worker6', 'worker6', '66666666F', '00000000003', 'dept2', 'cap');
 
INSERT INTO `borsamila`.`empresaris` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `empresa_id`, `dept`, `carrec`)
 VALUES (7, 'worker7', 'worker7@gmail.com', 'worker7', 'worker7', 'worker7', 'worker7', '77777777G', '00000000004', 'dept1', 'cap');
INSERT INTO `borsamila`.`empresaris` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `empresa_id`, `dept`, `carrec`)
 VALUES (8, 'worker8', 'worker8@gmail.com', 'worker8', 'worker8', 'worker8', 'worker8', '88888888H', '00000000004', 'dept2', 'cap');
 
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`, `cf`)
 VALUES (NULL, 'alumne2', 'alumne2@gmail.com', 'alumne2', 'alumne', '2', '', '22222222B', '');
 
-- alumnos
 
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne1', 'alumne1@gmail.com', 'alumne1', 'alumne', '1', '', '00000001A');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne2', 'alumne2@gmail.com', 'alumne2', 'alumne', '2', '', '00000002B');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne3', 'alumne3@gmail.com', 'alumne3', 'alumne', '3', '', '00000003C');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne4', 'alumne4@gmail.com', 'alumne4', 'alumne', '4', '', '00000004D');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne5', 'alumne5@gmail.com', 'alumne5', 'alumne', '5', '', '00000005E');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne6', 'alumne6@gmail.com', 'alumne6', 'alumne', '6', '', '00000006F');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne7', 'alumne7@gmail.com', 'alumne7', 'alumne', '7', '', '00000007G');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne8', 'alumne8@gmail.com', 'alumne8', 'alumne', '8', '', '00000008H');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne9', 'alumne9@gmail.com', 'alumne9', 'alumne', '9', '', '00000009I');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne10', 'alumne10@gmail.com', 'alumne10', 'alumne', '10', '', '00000010J');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne11', 'alumne11@gmail.com', 'alumne11', 'alumne', '11', '', '00000011K');
INSERT INTO `borsamila`.`alumnes` (`id`, `alias`, `mail`, `password`, `nom`, `cognom1`, `cognom2`, `nif`)
 VALUES (NULL, 'alumne12', 'alumne12@gmail.com', 'alumne12', 'alumne', '12', '', '00000012L');
 