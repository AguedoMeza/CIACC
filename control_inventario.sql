/*
Navicat MySQL Data Transfer

Source Server         : ProyectoPablo
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : control_inventario

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2018-07-10 22:59:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cajas
-- ----------------------------
DROP TABLE IF EXISTS `cajas`;
CREATE TABLE `cajas` (
  `id_caja` int(11) NOT NULL auto_increment,
  `nombre` text,
  `descripcion` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_caja`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cajas
-- ----------------------------
INSERT INTO `cajas` VALUES ('1', '$pNombre2', 'rter', '0000-00-00', '00:00:00', '1', '0');
INSERT INTO `cajas` VALUES ('2', '', null, '2018-06-19', '01:39:24', '0', '3');
INSERT INTO `cajas` VALUES ('3', '$pNombre', null, '0000-00-00', '00:00:00', '1', '1');
INSERT INTO `cajas` VALUES ('4', 'caja1', null, '2018-06-20', '16:22:38', '1', '21');
INSERT INTO `cajas` VALUES ('5', 'holanda2', 'ffdsfd', '2018-06-20', '16:31:03', '1', '21');
INSERT INTO `cajas` VALUES ('6', 'cajero', null, '2018-06-20', '16:31:47', '1', '21');
INSERT INTO `cajas` VALUES ('7', 'Master Box1', 'caja master 1', '2018-06-21', '14:52:10', '1', '3');

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL auto_increment,
  `nombre_cliente` text,
  `numero_cliente` text,
  `responsable` text,
  `direccion` text,
  `telefono` text,
  `rfc` text,
  `correo` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'afsf', 'asfs', 'asfsdf', 'sgdg', 'asdgsdg', 'sdgsdg', 'sdgdg', '2018-07-01', '00:42:59', '1', '30');
INSERT INTO `clientes` VALUES ('2', 'Gokulove', '2345', 'ertyui', 'linares', '45678', 'fdx567', 'cvghbjnk.com', '2018-07-01', '00:48:50', '1', '30');
INSERT INTO `clientes` VALUES ('3', 'erty', '456', '456', '456', '456', '456', '56', '2018-07-01', '00:51:37', '1', '30');
INSERT INTO `clientes` VALUES ('4', 'wertyui', 'rtyu', 'rtyu', 'tyu', '45678', 'fghj', '56789Â´', '2018-07-01', '00:55:16', '1', '30');
INSERT INTO `clientes` VALUES ('5', 'hola', '321351684', 'luis', 'petaca', '11111', '11111111', '11111', '2018-07-01', '02:33:14', '1', '30');
INSERT INTO `clientes` VALUES ('6', 'Soriana', '0123', '5456', '564', '654', '654', '654', '2018-07-01', '02:45:06', '1', '30');

-- ----------------------------
-- Table structure for departamentos
-- ----------------------------
DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE `departamentos` (
  `id_departamento` int(11) NOT NULL auto_increment,
  `nom_departamento` text,
  `sigla_departamento` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_departamento`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departamentos
-- ----------------------------
INSERT INTO `departamentos` VALUES ('1', 'Recursos Humanos', 'RH', '2018-05-18', '04:34:26', '1', '1');
INSERT INTO `departamentos` VALUES ('2', 'jhv', 'J', '2018-05-08', '04:35:05', '1', '1');

-- ----------------------------
-- Table structure for estados
-- ----------------------------
DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` text,
  `abreviatura` text,
  PRIMARY KEY  (`id_estado`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estados
-- ----------------------------
INSERT INTO `estados` VALUES ('1', 'Aguascalientes', 'Ags.');
INSERT INTO `estados` VALUES ('2', 'Baja California', 'BC');
INSERT INTO `estados` VALUES ('3', 'Baja California Sur', 'BCS');
INSERT INTO `estados` VALUES ('4', 'Campeche', 'Camp.');
INSERT INTO `estados` VALUES ('5', 'Coahuila de Zaragoza', 'Coah.');
INSERT INTO `estados` VALUES ('6', 'Colima', 'Col.');
INSERT INTO `estados` VALUES ('7', 'Chiapas', 'Chis.');
INSERT INTO `estados` VALUES ('8', 'Chihuahua', 'Chih.');
INSERT INTO `estados` VALUES ('9', 'Distrito Federal', 'DF');
INSERT INTO `estados` VALUES ('10', 'Durango', 'Dgo.');
INSERT INTO `estados` VALUES ('11', 'Guanajuato', 'Gto.');
INSERT INTO `estados` VALUES ('12', 'Guerrero', 'Gro.');
INSERT INTO `estados` VALUES ('13', 'Hidalgo', 'Hgo.');
INSERT INTO `estados` VALUES ('14', 'Jalisco', 'Jal.');
INSERT INTO `estados` VALUES ('15', 'México', 'Mex.');
INSERT INTO `estados` VALUES ('16', 'Michoacán de Ocampo', 'Mich.');
INSERT INTO `estados` VALUES ('17', 'Morelos', 'Mor.');
INSERT INTO `estados` VALUES ('18', 'Nayarit', 'Nay.');
INSERT INTO `estados` VALUES ('19', 'Nuevo León', 'NL');
INSERT INTO `estados` VALUES ('20', 'Oaxaca', 'Oax.');
INSERT INTO `estados` VALUES ('21', 'Puebla', 'Pue.');
INSERT INTO `estados` VALUES ('22', 'Querétaro', 'Qro.');
INSERT INTO `estados` VALUES ('23', 'Quintana Roo', 'Q. Roo');
INSERT INTO `estados` VALUES ('24', 'San Luis Potosí', 'SLP');
INSERT INTO `estados` VALUES ('25', 'Sinaloa', 'Sin.');
INSERT INTO `estados` VALUES ('26', 'Sonora', 'Son.');
INSERT INTO `estados` VALUES ('27', 'Tabasco', 'Tab.');
INSERT INTO `estados` VALUES ('28', 'Tamaulipas', 'Tamps.');
INSERT INTO `estados` VALUES ('29', 'Tlaxcala', 'Tlax.');
INSERT INTO `estados` VALUES ('30', 'Veracruz de Ignacio de la Llave', 'Ver.');
INSERT INTO `estados` VALUES ('31', 'Yucatán', 'Yuc.');
INSERT INTO `estados` VALUES ('32', 'Zacatecas', 'Zac.');

-- ----------------------------
-- Table structure for municipios
-- ----------------------------
DROP TABLE IF EXISTS `municipios`;
CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `id_estado` int(11) default NULL,
  `estado` text,
  `cve_municipio` text,
  `municipio` text,
  PRIMARY KEY  (`id_municipio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of municipios
-- ----------------------------
INSERT INTO `municipios` VALUES ('1', '1', 'Aguascalientes', '1', 'Aguascalientes');
INSERT INTO `municipios` VALUES ('2', '1', 'Aguascalientes', '2', 'Asientos');
INSERT INTO `municipios` VALUES ('3', '1', 'Aguascalientes', '3', 'Calvillo');
INSERT INTO `municipios` VALUES ('4', '1', 'Aguascalientes', '4', 'Cosío');
INSERT INTO `municipios` VALUES ('5', '1', 'Aguascalientes', '5', 'Jesús María');
INSERT INTO `municipios` VALUES ('6', '1', 'Aguascalientes', '6', 'Pabellón de Arteaga');
INSERT INTO `municipios` VALUES ('7', '1', 'Aguascalientes', '7', 'Rincón de Romos');
INSERT INTO `municipios` VALUES ('8', '1', 'Aguascalientes', '8', 'San José de Gracia');
INSERT INTO `municipios` VALUES ('9', '1', 'Aguascalientes', '9', 'Tepezalá');
INSERT INTO `municipios` VALUES ('10', '1', 'Aguascalientes', '10', 'El Llano');
INSERT INTO `municipios` VALUES ('11', '1', 'Aguascalientes', '11', 'San Francisco de los Romo');
INSERT INTO `municipios` VALUES ('12', '2', 'Baja California', '1', 'Ensenada');
INSERT INTO `municipios` VALUES ('13', '2', 'Baja California', '2', 'Mexicali');
INSERT INTO `municipios` VALUES ('14', '2', 'Baja California', '3', 'Tecate');
INSERT INTO `municipios` VALUES ('15', '2', 'Baja California', '4', 'Tijuana');
INSERT INTO `municipios` VALUES ('16', '2', 'Baja California', '5', 'Playas de Rosarito');
INSERT INTO `municipios` VALUES ('17', '3', 'Baja California Sur', '1', 'Comondú');
INSERT INTO `municipios` VALUES ('18', '3', 'Baja California Sur', '2', 'Mulegé');
INSERT INTO `municipios` VALUES ('19', '3', 'Baja California Sur', '3', 'La Paz');
INSERT INTO `municipios` VALUES ('20', '3', 'Baja California Sur', '8', 'Los Cabos');
INSERT INTO `municipios` VALUES ('21', '3', 'Baja California Sur', '9', 'Loreto');
INSERT INTO `municipios` VALUES ('22', '4', 'Campeche', '1', 'Calkiní');
INSERT INTO `municipios` VALUES ('23', '4', 'Campeche', '2', 'Campeche');
INSERT INTO `municipios` VALUES ('24', '4', 'Campeche', '3', 'Carmen');
INSERT INTO `municipios` VALUES ('25', '4', 'Campeche', '4', 'Champotón');
INSERT INTO `municipios` VALUES ('26', '4', 'Campeche', '5', 'Hecelchakán');
INSERT INTO `municipios` VALUES ('27', '4', 'Campeche', '6', 'Hopelchén');
INSERT INTO `municipios` VALUES ('28', '4', 'Campeche', '7', 'Palizada');
INSERT INTO `municipios` VALUES ('29', '4', 'Campeche', '8', 'Tenabo');
INSERT INTO `municipios` VALUES ('30', '4', 'Campeche', '9', 'Escárcega');
INSERT INTO `municipios` VALUES ('31', '4', 'Campeche', '10', 'Calakmul');
INSERT INTO `municipios` VALUES ('32', '4', 'Campeche', '11', 'Candelaria');
INSERT INTO `municipios` VALUES ('33', '5', 'Coahuila de Zaragoza', '1', 'Abasolo');
INSERT INTO `municipios` VALUES ('34', '5', 'Coahuila de Zaragoza', '2', 'Acuña');
INSERT INTO `municipios` VALUES ('35', '5', 'Coahuila de Zaragoza', '3', 'Allende');
INSERT INTO `municipios` VALUES ('36', '5', 'Coahuila de Zaragoza', '4', 'Arteaga');
INSERT INTO `municipios` VALUES ('37', '5', 'Coahuila de Zaragoza', '5', 'Candela');
INSERT INTO `municipios` VALUES ('38', '5', 'Coahuila de Zaragoza', '6', 'Castaños');
INSERT INTO `municipios` VALUES ('39', '5', 'Coahuila de Zaragoza', '7', 'Cuatro Ciénegas');
INSERT INTO `municipios` VALUES ('40', '5', 'Coahuila de Zaragoza', '8', 'Escobedo');
INSERT INTO `municipios` VALUES ('41', '5', 'Coahuila de Zaragoza', '9', 'Francisco I. Madero');
INSERT INTO `municipios` VALUES ('42', '5', 'Coahuila de Zaragoza', '10', 'Frontera');
INSERT INTO `municipios` VALUES ('43', '5', 'Coahuila de Zaragoza', '11', 'General Cepeda');
INSERT INTO `municipios` VALUES ('44', '5', 'Coahuila de Zaragoza', '12', 'Guerrero');
INSERT INTO `municipios` VALUES ('45', '5', 'Coahuila de Zaragoza', '13', 'Hidalgo');
INSERT INTO `municipios` VALUES ('46', '5', 'Coahuila de Zaragoza', '14', 'Jiménez');
INSERT INTO `municipios` VALUES ('47', '5', 'Coahuila de Zaragoza', '15', 'Juárez');
INSERT INTO `municipios` VALUES ('48', '5', 'Coahuila de Zaragoza', '16', 'Lamadrid');
INSERT INTO `municipios` VALUES ('49', '5', 'Coahuila de Zaragoza', '17', 'Matamoros');
INSERT INTO `municipios` VALUES ('50', '5', 'Coahuila de Zaragoza', '18', 'Monclova');
INSERT INTO `municipios` VALUES ('51', '5', 'Coahuila de Zaragoza', '19', 'Morelos');
INSERT INTO `municipios` VALUES ('52', '5', 'Coahuila de Zaragoza', '20', 'Múzquiz');
INSERT INTO `municipios` VALUES ('53', '5', 'Coahuila de Zaragoza', '21', 'Nadadores');
INSERT INTO `municipios` VALUES ('54', '5', 'Coahuila de Zaragoza', '22', 'Nava');
INSERT INTO `municipios` VALUES ('55', '5', 'Coahuila de Zaragoza', '23', 'Ocampo');
INSERT INTO `municipios` VALUES ('56', '5', 'Coahuila de Zaragoza', '24', 'Parras');
INSERT INTO `municipios` VALUES ('57', '5', 'Coahuila de Zaragoza', '25', 'Piedras Negras');
INSERT INTO `municipios` VALUES ('58', '5', 'Coahuila de Zaragoza', '26', 'Progreso');
INSERT INTO `municipios` VALUES ('59', '5', 'Coahuila de Zaragoza', '27', 'Ramos Arizpe');
INSERT INTO `municipios` VALUES ('60', '5', 'Coahuila de Zaragoza', '28', 'Sabinas');
INSERT INTO `municipios` VALUES ('61', '5', 'Coahuila de Zaragoza', '29', 'Sacramento');
INSERT INTO `municipios` VALUES ('62', '5', 'Coahuila de Zaragoza', '30', 'Saltillo');
INSERT INTO `municipios` VALUES ('63', '5', 'Coahuila de Zaragoza', '31', 'San Buenaventura');
INSERT INTO `municipios` VALUES ('64', '5', 'Coahuila de Zaragoza', '32', 'San Juan de Sabinas');
INSERT INTO `municipios` VALUES ('65', '5', 'Coahuila de Zaragoza', '33', 'San Pedro');
INSERT INTO `municipios` VALUES ('66', '5', 'Coahuila de Zaragoza', '34', 'Sierra Mojada');
INSERT INTO `municipios` VALUES ('67', '5', 'Coahuila de Zaragoza', '35', 'Torreón');
INSERT INTO `municipios` VALUES ('68', '5', 'Coahuila de Zaragoza', '36', 'Viesca');
INSERT INTO `municipios` VALUES ('69', '5', 'Coahuila de Zaragoza', '37', 'Villa Unión');
INSERT INTO `municipios` VALUES ('70', '5', 'Coahuila de Zaragoza', '38', 'Zaragoza');
INSERT INTO `municipios` VALUES ('71', '6', 'Colima', '1', 'Armería');
INSERT INTO `municipios` VALUES ('72', '6', 'Colima', '2', 'Colima');
INSERT INTO `municipios` VALUES ('73', '6', 'Colima', '3', 'Comala');
INSERT INTO `municipios` VALUES ('74', '6', 'Colima', '4', 'Coquimatlán');
INSERT INTO `municipios` VALUES ('75', '6', 'Colima', '5', 'Cuauhtémoc');
INSERT INTO `municipios` VALUES ('76', '6', 'Colima', '6', 'Ixtlahuacán');
INSERT INTO `municipios` VALUES ('77', '6', 'Colima', '7', 'Manzanillo');
INSERT INTO `municipios` VALUES ('78', '6', 'Colima', '8', 'Minatitlán');
INSERT INTO `municipios` VALUES ('79', '6', 'Colima', '9', 'Tecomán');
INSERT INTO `municipios` VALUES ('80', '6', 'Colima', '10', 'Villa de Álvarez');
INSERT INTO `municipios` VALUES ('81', '7', 'Chiapas', '1', 'Acacoyagua');
INSERT INTO `municipios` VALUES ('82', '7', 'Chiapas', '2', 'Acala');
INSERT INTO `municipios` VALUES ('83', '7', 'Chiapas', '3', 'Acapetahua');
INSERT INTO `municipios` VALUES ('84', '7', 'Chiapas', '4', 'Altamirano');
INSERT INTO `municipios` VALUES ('85', '7', 'Chiapas', '5', 'Amatán');
INSERT INTO `municipios` VALUES ('86', '7', 'Chiapas', '6', 'Amatenango de la Frontera');
INSERT INTO `municipios` VALUES ('87', '7', 'Chiapas', '7', 'Amatenango del Valle');
INSERT INTO `municipios` VALUES ('88', '7', 'Chiapas', '8', 'Angel Albino Corzo');
INSERT INTO `municipios` VALUES ('89', '7', 'Chiapas', '9', 'Arriaga');
INSERT INTO `municipios` VALUES ('90', '7', 'Chiapas', '10', 'Bejucal de Ocampo');
INSERT INTO `municipios` VALUES ('91', '7', 'Chiapas', '11', 'Bella Vista');
INSERT INTO `municipios` VALUES ('92', '7', 'Chiapas', '12', 'Berriozábal');
INSERT INTO `municipios` VALUES ('93', '7', 'Chiapas', '13', 'Bochil');
INSERT INTO `municipios` VALUES ('94', '7', 'Chiapas', '14', 'El Bosque');
INSERT INTO `municipios` VALUES ('95', '7', 'Chiapas', '15', 'Cacahoatán');
INSERT INTO `municipios` VALUES ('96', '7', 'Chiapas', '16', 'Catazajá');
INSERT INTO `municipios` VALUES ('97', '7', 'Chiapas', '17', 'Cintalapa');
INSERT INTO `municipios` VALUES ('98', '7', 'Chiapas', '18', 'Coapilla');
INSERT INTO `municipios` VALUES ('99', '7', 'Chiapas', '19', 'Comitán de Domínguez');
INSERT INTO `municipios` VALUES ('100', '7', 'Chiapas', '20', 'La Concordia');
INSERT INTO `municipios` VALUES ('101', '7', 'Chiapas', '21', 'Copainalá');
INSERT INTO `municipios` VALUES ('102', '7', 'Chiapas', '22', 'Chalchihuitán');
INSERT INTO `municipios` VALUES ('103', '7', 'Chiapas', '23', 'Chamula');
INSERT INTO `municipios` VALUES ('104', '7', 'Chiapas', '24', 'Chanal');
INSERT INTO `municipios` VALUES ('105', '7', 'Chiapas', '25', 'Chapultenango');
INSERT INTO `municipios` VALUES ('106', '7', 'Chiapas', '26', 'Chenalhó');
INSERT INTO `municipios` VALUES ('107', '7', 'Chiapas', '27', 'Chiapa de Corzo');
INSERT INTO `municipios` VALUES ('108', '7', 'Chiapas', '28', 'Chiapilla');
INSERT INTO `municipios` VALUES ('109', '7', 'Chiapas', '29', 'Chicoasén');
INSERT INTO `municipios` VALUES ('110', '7', 'Chiapas', '30', 'Chicomuselo');
INSERT INTO `municipios` VALUES ('111', '7', 'Chiapas', '31', 'Chilón');
INSERT INTO `municipios` VALUES ('112', '7', 'Chiapas', '32', 'Escuintla');
INSERT INTO `municipios` VALUES ('113', '7', 'Chiapas', '33', 'Francisco León');
INSERT INTO `municipios` VALUES ('114', '7', 'Chiapas', '34', 'Frontera Comalapa');
INSERT INTO `municipios` VALUES ('115', '7', 'Chiapas', '35', 'Frontera Hidalgo');
INSERT INTO `municipios` VALUES ('116', '7', 'Chiapas', '36', 'La Grandeza');
INSERT INTO `municipios` VALUES ('117', '7', 'Chiapas', '37', 'Huehuetán');
INSERT INTO `municipios` VALUES ('118', '7', 'Chiapas', '38', 'Huixtán');
INSERT INTO `municipios` VALUES ('119', '7', 'Chiapas', '39', 'Huitiupán');
INSERT INTO `municipios` VALUES ('120', '7', 'Chiapas', '40', 'Huixtla');
INSERT INTO `municipios` VALUES ('121', '7', 'Chiapas', '41', 'La Independencia');
INSERT INTO `municipios` VALUES ('122', '7', 'Chiapas', '42', 'Ixhuatán');
INSERT INTO `municipios` VALUES ('123', '7', 'Chiapas', '43', 'Ixtacomitán');
INSERT INTO `municipios` VALUES ('124', '7', 'Chiapas', '44', 'Ixtapa');
INSERT INTO `municipios` VALUES ('125', '7', 'Chiapas', '45', 'Ixtapangajoya');
INSERT INTO `municipios` VALUES ('126', '7', 'Chiapas', '46', 'Jiquipilas');
INSERT INTO `municipios` VALUES ('127', '7', 'Chiapas', '47', 'Jitotol');
INSERT INTO `municipios` VALUES ('128', '7', 'Chiapas', '48', 'Juárez');
INSERT INTO `municipios` VALUES ('129', '7', 'Chiapas', '49', 'Larráinzar');
INSERT INTO `municipios` VALUES ('130', '7', 'Chiapas', '50', 'La Libertad');
INSERT INTO `municipios` VALUES ('131', '7', 'Chiapas', '51', 'Mapastepec');
INSERT INTO `municipios` VALUES ('132', '7', 'Chiapas', '52', 'Las Margaritas');
INSERT INTO `municipios` VALUES ('133', '7', 'Chiapas', '53', 'Mazapa de Madero');
INSERT INTO `municipios` VALUES ('134', '7', 'Chiapas', '54', 'Mazatán');
INSERT INTO `municipios` VALUES ('135', '7', 'Chiapas', '55', 'Metapa');
INSERT INTO `municipios` VALUES ('136', '7', 'Chiapas', '56', 'Mitontic');
INSERT INTO `municipios` VALUES ('137', '7', 'Chiapas', '57', 'Motozintla');
INSERT INTO `municipios` VALUES ('138', '7', 'Chiapas', '58', 'Nicolás Ruíz');
INSERT INTO `municipios` VALUES ('139', '7', 'Chiapas', '59', 'Ocosingo');
INSERT INTO `municipios` VALUES ('140', '7', 'Chiapas', '60', 'Ocotepec');
INSERT INTO `municipios` VALUES ('141', '7', 'Chiapas', '61', 'Ocozocoautla de Espinosa');
INSERT INTO `municipios` VALUES ('142', '7', 'Chiapas', '62', 'Ostuacán');
INSERT INTO `municipios` VALUES ('143', '7', 'Chiapas', '63', 'Osumacinta');
INSERT INTO `municipios` VALUES ('144', '7', 'Chiapas', '64', 'Oxchuc');
INSERT INTO `municipios` VALUES ('145', '7', 'Chiapas', '65', 'Palenque');
INSERT INTO `municipios` VALUES ('146', '7', 'Chiapas', '66', 'Pantelhó');
INSERT INTO `municipios` VALUES ('147', '7', 'Chiapas', '67', 'Pantepec');
INSERT INTO `municipios` VALUES ('148', '7', 'Chiapas', '68', 'Pichucalco');
INSERT INTO `municipios` VALUES ('149', '7', 'Chiapas', '69', 'Pijijiapan');
INSERT INTO `municipios` VALUES ('150', '7', 'Chiapas', '70', 'El Porvenir');
INSERT INTO `municipios` VALUES ('151', '7', 'Chiapas', '71', 'Villa Comaltitlán');
INSERT INTO `municipios` VALUES ('152', '7', 'Chiapas', '72', 'Pueblo Nuevo Solistahuacán');
INSERT INTO `municipios` VALUES ('153', '7', 'Chiapas', '73', 'Rayón');
INSERT INTO `municipios` VALUES ('154', '7', 'Chiapas', '74', 'Reforma');
INSERT INTO `municipios` VALUES ('155', '7', 'Chiapas', '75', 'Las Rosas');
INSERT INTO `municipios` VALUES ('156', '7', 'Chiapas', '76', 'Sabanilla');
INSERT INTO `municipios` VALUES ('157', '7', 'Chiapas', '77', 'Salto de Agua');
INSERT INTO `municipios` VALUES ('158', '7', 'Chiapas', '78', 'San Cristóbal de las Casas');
INSERT INTO `municipios` VALUES ('159', '7', 'Chiapas', '79', 'San Fernando');
INSERT INTO `municipios` VALUES ('160', '7', 'Chiapas', '80', 'Siltepec');
INSERT INTO `municipios` VALUES ('161', '7', 'Chiapas', '81', 'Simojovel');
INSERT INTO `municipios` VALUES ('162', '7', 'Chiapas', '82', 'Sitalá');
INSERT INTO `municipios` VALUES ('163', '7', 'Chiapas', '83', 'Socoltenango');
INSERT INTO `municipios` VALUES ('164', '7', 'Chiapas', '84', 'Solosuchiapa');
INSERT INTO `municipios` VALUES ('165', '7', 'Chiapas', '85', 'Soyaló');
INSERT INTO `municipios` VALUES ('166', '7', 'Chiapas', '86', 'Suchiapa');
INSERT INTO `municipios` VALUES ('167', '7', 'Chiapas', '87', 'Suchiate');
INSERT INTO `municipios` VALUES ('168', '7', 'Chiapas', '88', 'Sunuapa');
INSERT INTO `municipios` VALUES ('169', '7', 'Chiapas', '89', 'Tapachula');
INSERT INTO `municipios` VALUES ('170', '7', 'Chiapas', '90', 'Tapalapa');
INSERT INTO `municipios` VALUES ('171', '7', 'Chiapas', '91', 'Tapilula');
INSERT INTO `municipios` VALUES ('172', '7', 'Chiapas', '92', 'Tecpatán');
INSERT INTO `municipios` VALUES ('173', '7', 'Chiapas', '93', 'Tenejapa');
INSERT INTO `municipios` VALUES ('174', '7', 'Chiapas', '94', 'Teopisca');
INSERT INTO `municipios` VALUES ('175', '7', 'Chiapas', '96', 'Tila');
INSERT INTO `municipios` VALUES ('176', '7', 'Chiapas', '97', 'Tonalá');
INSERT INTO `municipios` VALUES ('177', '7', 'Chiapas', '98', 'Totolapa');
INSERT INTO `municipios` VALUES ('178', '7', 'Chiapas', '99', 'La Trinitaria');
INSERT INTO `municipios` VALUES ('179', '7', 'Chiapas', '100', 'Tumbalá');
INSERT INTO `municipios` VALUES ('180', '7', 'Chiapas', '101', 'Tuxtla Gutiérrez');
INSERT INTO `municipios` VALUES ('181', '7', 'Chiapas', '102', 'Tuxtla Chico');
INSERT INTO `municipios` VALUES ('182', '7', 'Chiapas', '103', 'Tuzantán');
INSERT INTO `municipios` VALUES ('183', '7', 'Chiapas', '104', 'Tzimol');
INSERT INTO `municipios` VALUES ('184', '7', 'Chiapas', '105', 'Unión Juárez');
INSERT INTO `municipios` VALUES ('185', '7', 'Chiapas', '106', 'Venustiano Carranza');
INSERT INTO `municipios` VALUES ('186', '7', 'Chiapas', '107', 'Villa Corzo');
INSERT INTO `municipios` VALUES ('187', '7', 'Chiapas', '108', 'Villaflores');
INSERT INTO `municipios` VALUES ('188', '7', 'Chiapas', '109', 'Yajalón');
INSERT INTO `municipios` VALUES ('189', '7', 'Chiapas', '110', 'San Lucas');
INSERT INTO `municipios` VALUES ('190', '7', 'Chiapas', '111', 'Zinacantán');
INSERT INTO `municipios` VALUES ('191', '7', 'Chiapas', '112', 'San Juan Cancuc');
INSERT INTO `municipios` VALUES ('192', '7', 'Chiapas', '113', 'Aldama');
INSERT INTO `municipios` VALUES ('193', '7', 'Chiapas', '114', 'Benemérito de las Américas');
INSERT INTO `municipios` VALUES ('194', '7', 'Chiapas', '115', 'Maravilla Tenejapa');
INSERT INTO `municipios` VALUES ('195', '7', 'Chiapas', '116', 'Marqués de Comillas');
INSERT INTO `municipios` VALUES ('196', '7', 'Chiapas', '117', 'Montecristo de Guerrero');
INSERT INTO `municipios` VALUES ('197', '7', 'Chiapas', '118', 'San Andrés Duraznal');
INSERT INTO `municipios` VALUES ('198', '7', 'Chiapas', '119', 'Santiago el Pinar');
INSERT INTO `municipios` VALUES ('199', '8', 'Chihuahua', '1', 'Ahumada');
INSERT INTO `municipios` VALUES ('200', '8', 'Chihuahua', '2', 'Aldama');
INSERT INTO `municipios` VALUES ('201', '8', 'Chihuahua', '3', 'Allende');
INSERT INTO `municipios` VALUES ('202', '8', 'Chihuahua', '4', 'Aquiles Serdán');
INSERT INTO `municipios` VALUES ('203', '8', 'Chihuahua', '5', 'Ascensión');
INSERT INTO `municipios` VALUES ('204', '8', 'Chihuahua', '6', 'Bachíniva');
INSERT INTO `municipios` VALUES ('205', '8', 'Chihuahua', '7', 'Balleza');
INSERT INTO `municipios` VALUES ('206', '8', 'Chihuahua', '8', 'Batopilas');
INSERT INTO `municipios` VALUES ('207', '8', 'Chihuahua', '9', 'Bocoyna');
INSERT INTO `municipios` VALUES ('208', '8', 'Chihuahua', '10', 'Buenaventura');
INSERT INTO `municipios` VALUES ('209', '8', 'Chihuahua', '11', 'Camargo');
INSERT INTO `municipios` VALUES ('210', '8', 'Chihuahua', '12', 'Carichí');
INSERT INTO `municipios` VALUES ('211', '8', 'Chihuahua', '13', 'Casas Grandes');
INSERT INTO `municipios` VALUES ('212', '8', 'Chihuahua', '14', 'Coronado');
INSERT INTO `municipios` VALUES ('213', '8', 'Chihuahua', '15', 'Coyame del Sotol');
INSERT INTO `municipios` VALUES ('214', '8', 'Chihuahua', '16', 'La Cruz');
INSERT INTO `municipios` VALUES ('215', '8', 'Chihuahua', '17', 'Cuauhtémoc');
INSERT INTO `municipios` VALUES ('216', '8', 'Chihuahua', '18', 'Cusihuiriachi');
INSERT INTO `municipios` VALUES ('217', '8', 'Chihuahua', '19', 'Chihuahua');
INSERT INTO `municipios` VALUES ('218', '8', 'Chihuahua', '20', 'Chínipas');
INSERT INTO `municipios` VALUES ('219', '8', 'Chihuahua', '21', 'Delicias');
INSERT INTO `municipios` VALUES ('220', '8', 'Chihuahua', '22', 'Dr. Belisario Domínguez');
INSERT INTO `municipios` VALUES ('221', '8', 'Chihuahua', '23', 'Galeana');
INSERT INTO `municipios` VALUES ('222', '8', 'Chihuahua', '24', 'Santa Isabel');
INSERT INTO `municipios` VALUES ('223', '8', 'Chihuahua', '25', 'Gómez Farías');
INSERT INTO `municipios` VALUES ('224', '8', 'Chihuahua', '26', 'Gran Morelos');
INSERT INTO `municipios` VALUES ('225', '8', 'Chihuahua', '27', 'Guachochi');
INSERT INTO `municipios` VALUES ('226', '8', 'Chihuahua', '28', 'Guadalupe');
INSERT INTO `municipios` VALUES ('227', '8', 'Chihuahua', '29', 'Guadalupe y Calvo');
INSERT INTO `municipios` VALUES ('228', '8', 'Chihuahua', '30', 'Guazapares');
INSERT INTO `municipios` VALUES ('229', '8', 'Chihuahua', '31', 'Guerrero');
INSERT INTO `municipios` VALUES ('230', '8', 'Chihuahua', '32', 'Hidalgo del Parral');
INSERT INTO `municipios` VALUES ('231', '8', 'Chihuahua', '33', 'Huejotitán');
INSERT INTO `municipios` VALUES ('232', '8', 'Chihuahua', '34', 'Ignacio Zaragoza');
INSERT INTO `municipios` VALUES ('233', '8', 'Chihuahua', '35', 'Janos');
INSERT INTO `municipios` VALUES ('234', '8', 'Chihuahua', '36', 'Jiménez');
INSERT INTO `municipios` VALUES ('235', '8', 'Chihuahua', '37', 'Juárez');
INSERT INTO `municipios` VALUES ('236', '8', 'Chihuahua', '38', 'Julimes');
INSERT INTO `municipios` VALUES ('237', '8', 'Chihuahua', '39', 'López');
INSERT INTO `municipios` VALUES ('238', '8', 'Chihuahua', '40', 'Madera');
INSERT INTO `municipios` VALUES ('239', '8', 'Chihuahua', '41', 'Maguarichi');
INSERT INTO `municipios` VALUES ('240', '8', 'Chihuahua', '42', 'Manuel Benavides');
INSERT INTO `municipios` VALUES ('241', '8', 'Chihuahua', '43', 'Matachí');
INSERT INTO `municipios` VALUES ('242', '8', 'Chihuahua', '44', 'Matamoros');
INSERT INTO `municipios` VALUES ('243', '8', 'Chihuahua', '45', 'Meoqui');
INSERT INTO `municipios` VALUES ('244', '8', 'Chihuahua', '46', 'Morelos');
INSERT INTO `municipios` VALUES ('245', '8', 'Chihuahua', '47', 'Moris');
INSERT INTO `municipios` VALUES ('246', '8', 'Chihuahua', '48', 'Namiquipa');
INSERT INTO `municipios` VALUES ('247', '8', 'Chihuahua', '49', 'Nonoava');
INSERT INTO `municipios` VALUES ('248', '8', 'Chihuahua', '50', 'Nuevo Casas Grandes');
INSERT INTO `municipios` VALUES ('249', '8', 'Chihuahua', '51', 'Ocampo');
INSERT INTO `municipios` VALUES ('250', '8', 'Chihuahua', '52', 'Ojinaga');
INSERT INTO `municipios` VALUES ('251', '8', 'Chihuahua', '53', 'Praxedis G. Guerrero');
INSERT INTO `municipios` VALUES ('252', '8', 'Chihuahua', '54', 'Riva Palacio');
INSERT INTO `municipios` VALUES ('253', '8', 'Chihuahua', '55', 'Rosales');
INSERT INTO `municipios` VALUES ('254', '8', 'Chihuahua', '56', 'Rosario');
INSERT INTO `municipios` VALUES ('255', '8', 'Chihuahua', '57', 'San Francisco de Borja');
INSERT INTO `municipios` VALUES ('256', '8', 'Chihuahua', '58', 'San Francisco de Conchos');
INSERT INTO `municipios` VALUES ('257', '8', 'Chihuahua', '59', 'San Francisco del Oro');
INSERT INTO `municipios` VALUES ('258', '8', 'Chihuahua', '60', 'Santa Bárbara');
INSERT INTO `municipios` VALUES ('259', '8', 'Chihuahua', '61', 'Satevó');
INSERT INTO `municipios` VALUES ('260', '8', 'Chihuahua', '62', 'Saucillo');
INSERT INTO `municipios` VALUES ('261', '8', 'Chihuahua', '63', 'Temósachic');
INSERT INTO `municipios` VALUES ('262', '8', 'Chihuahua', '64', 'El Tule');
INSERT INTO `municipios` VALUES ('263', '8', 'Chihuahua', '65', 'Urique');
INSERT INTO `municipios` VALUES ('264', '8', 'Chihuahua', '66', 'Uruachi');
INSERT INTO `municipios` VALUES ('265', '8', 'Chihuahua', '67', 'Valle de Zaragoza');
INSERT INTO `municipios` VALUES ('266', '9', 'Distrito Federal', '2', 'Azcapotzalco');
INSERT INTO `municipios` VALUES ('267', '9', 'Distrito Federal', '3', 'Coyoacán');
INSERT INTO `municipios` VALUES ('268', '9', 'Distrito Federal', '4', 'Cuajimalpa de Morelos');
INSERT INTO `municipios` VALUES ('269', '9', 'Distrito Federal', '5', 'Gustavo A. Madero');
INSERT INTO `municipios` VALUES ('270', '9', 'Distrito Federal', '6', 'Iztacalco');
INSERT INTO `municipios` VALUES ('271', '9', 'Distrito Federal', '7', 'Iztapalapa');
INSERT INTO `municipios` VALUES ('272', '9', 'Distrito Federal', '8', 'La Magdalena Contreras');
INSERT INTO `municipios` VALUES ('273', '9', 'Distrito Federal', '9', 'Milpa Alta');
INSERT INTO `municipios` VALUES ('274', '9', 'Distrito Federal', '10', 'Álvaro Obregón');
INSERT INTO `municipios` VALUES ('275', '9', 'Distrito Federal', '11', 'Tláhuac');
INSERT INTO `municipios` VALUES ('276', '9', 'Distrito Federal', '12', 'Tlalpan');
INSERT INTO `municipios` VALUES ('277', '9', 'Distrito Federal', '13', 'Xochimilco');
INSERT INTO `municipios` VALUES ('278', '9', 'Distrito Federal', '14', 'Benito Juárez');
INSERT INTO `municipios` VALUES ('279', '9', 'Distrito Federal', '15', 'Cuauhtémoc');
INSERT INTO `municipios` VALUES ('280', '9', 'Distrito Federal', '16', 'Miguel Hidalgo');
INSERT INTO `municipios` VALUES ('281', '9', 'Distrito Federal', '17', 'Venustiano Carranza');
INSERT INTO `municipios` VALUES ('282', '10', 'Durango', '1', 'Canatlán');
INSERT INTO `municipios` VALUES ('283', '10', 'Durango', '2', 'Canelas');
INSERT INTO `municipios` VALUES ('284', '10', 'Durango', '3', 'Coneto de Comonfort');
INSERT INTO `municipios` VALUES ('285', '10', 'Durango', '4', 'Cuencamé');
INSERT INTO `municipios` VALUES ('286', '10', 'Durango', '5', 'Durango');
INSERT INTO `municipios` VALUES ('287', '10', 'Durango', '6', 'General Simón Bolívar');
INSERT INTO `municipios` VALUES ('288', '10', 'Durango', '7', 'Gómez Palacio');
INSERT INTO `municipios` VALUES ('289', '10', 'Durango', '8', 'Guadalupe Victoria');
INSERT INTO `municipios` VALUES ('290', '10', 'Durango', '9', 'Guanaceví');
INSERT INTO `municipios` VALUES ('291', '10', 'Durango', '10', 'Hidalgo');
INSERT INTO `municipios` VALUES ('292', '10', 'Durango', '11', 'Indé');
INSERT INTO `municipios` VALUES ('293', '10', 'Durango', '12', 'Lerdo');
INSERT INTO `municipios` VALUES ('294', '10', 'Durango', '13', 'Mapimí');
INSERT INTO `municipios` VALUES ('295', '10', 'Durango', '14', 'Mezquital');
INSERT INTO `municipios` VALUES ('296', '10', 'Durango', '15', 'Nazas');
INSERT INTO `municipios` VALUES ('297', '10', 'Durango', '16', 'Nombre de Dios');
INSERT INTO `municipios` VALUES ('298', '10', 'Durango', '17', 'Ocampo');
INSERT INTO `municipios` VALUES ('299', '10', 'Durango', '18', 'El Oro');
INSERT INTO `municipios` VALUES ('300', '10', 'Durango', '19', 'Otáez');
INSERT INTO `municipios` VALUES ('301', '10', 'Durango', '20', 'Pánuco de Coronado');
INSERT INTO `municipios` VALUES ('302', '10', 'Durango', '21', 'Peñón Blanco');
INSERT INTO `municipios` VALUES ('303', '10', 'Durango', '22', 'Poanas');
INSERT INTO `municipios` VALUES ('304', '10', 'Durango', '23', 'Pueblo Nuevo');
INSERT INTO `municipios` VALUES ('305', '10', 'Durango', '24', 'Rodeo');
INSERT INTO `municipios` VALUES ('306', '10', 'Durango', '25', 'San Bernardo');
INSERT INTO `municipios` VALUES ('307', '10', 'Durango', '26', 'San Dimas');
INSERT INTO `municipios` VALUES ('308', '10', 'Durango', '27', 'San Juan de Guadalupe');
INSERT INTO `municipios` VALUES ('309', '10', 'Durango', '28', 'San Juan del Río');
INSERT INTO `municipios` VALUES ('310', '10', 'Durango', '29', 'San Luis del Cordero');
INSERT INTO `municipios` VALUES ('311', '10', 'Durango', '30', 'San Pedro del Gallo');
INSERT INTO `municipios` VALUES ('312', '10', 'Durango', '31', 'Santa Clara');
INSERT INTO `municipios` VALUES ('313', '10', 'Durango', '32', 'Santiago Papasquiaro');
INSERT INTO `municipios` VALUES ('314', '10', 'Durango', '33', 'Súchil');
INSERT INTO `municipios` VALUES ('315', '10', 'Durango', '34', 'Tamazula');
INSERT INTO `municipios` VALUES ('316', '10', 'Durango', '35', 'Tepehuanes');
INSERT INTO `municipios` VALUES ('317', '10', 'Durango', '36', 'Tlahualilo');
INSERT INTO `municipios` VALUES ('318', '10', 'Durango', '37', 'Topia');
INSERT INTO `municipios` VALUES ('319', '10', 'Durango', '38', 'Vicente Guerrero');
INSERT INTO `municipios` VALUES ('320', '10', 'Durango', '39', 'Nuevo Ideal');
INSERT INTO `municipios` VALUES ('321', '11', 'Guanajuato', '1', 'Abasolo');
INSERT INTO `municipios` VALUES ('322', '11', 'Guanajuato', '2', 'Acámbaro');
INSERT INTO `municipios` VALUES ('323', '11', 'Guanajuato', '3', 'San Miguel de Allende');
INSERT INTO `municipios` VALUES ('324', '11', 'Guanajuato', '4', 'Apaseo el Alto');
INSERT INTO `municipios` VALUES ('325', '11', 'Guanajuato', '5', 'Apaseo el Grande');
INSERT INTO `municipios` VALUES ('326', '11', 'Guanajuato', '6', 'Atarjea');
INSERT INTO `municipios` VALUES ('327', '11', 'Guanajuato', '7', 'Celaya');
INSERT INTO `municipios` VALUES ('328', '11', 'Guanajuato', '8', 'Manuel Doblado');
INSERT INTO `municipios` VALUES ('329', '11', 'Guanajuato', '9', 'Comonfort');
INSERT INTO `municipios` VALUES ('330', '11', 'Guanajuato', '10', 'Coroneo');
INSERT INTO `municipios` VALUES ('331', '11', 'Guanajuato', '11', 'Cortazar');
INSERT INTO `municipios` VALUES ('332', '11', 'Guanajuato', '12', 'Cuerámaro');
INSERT INTO `municipios` VALUES ('333', '11', 'Guanajuato', '13', 'Doctor Mora');
INSERT INTO `municipios` VALUES ('334', '11', 'Guanajuato', '14', 'Dolores Hidalgo Cuna de la Independencia Nacional');
INSERT INTO `municipios` VALUES ('335', '11', 'Guanajuato', '15', 'Guanajuato');
INSERT INTO `municipios` VALUES ('336', '11', 'Guanajuato', '16', 'Huanímaro');
INSERT INTO `municipios` VALUES ('337', '11', 'Guanajuato', '17', 'Irapuato');
INSERT INTO `municipios` VALUES ('338', '11', 'Guanajuato', '18', 'Jaral del Progreso');
INSERT INTO `municipios` VALUES ('339', '11', 'Guanajuato', '19', 'Jerécuaro');
INSERT INTO `municipios` VALUES ('340', '11', 'Guanajuato', '20', 'León');
INSERT INTO `municipios` VALUES ('341', '11', 'Guanajuato', '21', 'Moroleón');
INSERT INTO `municipios` VALUES ('342', '11', 'Guanajuato', '22', 'Ocampo');
INSERT INTO `municipios` VALUES ('343', '11', 'Guanajuato', '23', 'Pénjamo');
INSERT INTO `municipios` VALUES ('344', '11', 'Guanajuato', '24', 'Pueblo Nuevo');
INSERT INTO `municipios` VALUES ('345', '11', 'Guanajuato', '25', 'Purísima del Rincón');
INSERT INTO `municipios` VALUES ('346', '11', 'Guanajuato', '26', 'Romita');
INSERT INTO `municipios` VALUES ('347', '11', 'Guanajuato', '27', 'Salamanca');
INSERT INTO `municipios` VALUES ('348', '11', 'Guanajuato', '28', 'Salvatierra');
INSERT INTO `municipios` VALUES ('349', '11', 'Guanajuato', '29', 'San Diego de la Unión');
INSERT INTO `municipios` VALUES ('350', '11', 'Guanajuato', '30', 'San Felipe');
INSERT INTO `municipios` VALUES ('351', '11', 'Guanajuato', '31', 'San Francisco del Rincón');
INSERT INTO `municipios` VALUES ('352', '11', 'Guanajuato', '32', 'San José Iturbide');
INSERT INTO `municipios` VALUES ('353', '11', 'Guanajuato', '33', 'San Luis de la Paz');
INSERT INTO `municipios` VALUES ('354', '11', 'Guanajuato', '34', 'Santa Catarina');
INSERT INTO `municipios` VALUES ('355', '11', 'Guanajuato', '35', 'Santa Cruz de Juventino Rosas');
INSERT INTO `municipios` VALUES ('356', '11', 'Guanajuato', '36', 'Santiago Maravatío');
INSERT INTO `municipios` VALUES ('357', '11', 'Guanajuato', '37', 'Silao de la Victoria');
INSERT INTO `municipios` VALUES ('358', '11', 'Guanajuato', '38', 'Tarandacuao');
INSERT INTO `municipios` VALUES ('359', '11', 'Guanajuato', '39', 'Tarimoro');
INSERT INTO `municipios` VALUES ('360', '11', 'Guanajuato', '40', 'Tierra Blanca');
INSERT INTO `municipios` VALUES ('361', '11', 'Guanajuato', '41', 'Uriangato');
INSERT INTO `municipios` VALUES ('362', '11', 'Guanajuato', '42', 'Valle de Santiago');
INSERT INTO `municipios` VALUES ('363', '11', 'Guanajuato', '43', 'Victoria');
INSERT INTO `municipios` VALUES ('364', '11', 'Guanajuato', '44', 'Villagrán');
INSERT INTO `municipios` VALUES ('365', '11', 'Guanajuato', '45', 'Xichú');
INSERT INTO `municipios` VALUES ('366', '11', 'Guanajuato', '46', 'Yuriria');
INSERT INTO `municipios` VALUES ('367', '12', 'Guerrero', '1', 'Acapulco de Juárez');
INSERT INTO `municipios` VALUES ('368', '12', 'Guerrero', '2', 'Ahuacuotzingo');
INSERT INTO `municipios` VALUES ('369', '12', 'Guerrero', '3', 'Ajuchitlán del Progreso');
INSERT INTO `municipios` VALUES ('370', '12', 'Guerrero', '4', 'Alcozauca de Guerrero');
INSERT INTO `municipios` VALUES ('371', '12', 'Guerrero', '5', 'Alpoyeca');
INSERT INTO `municipios` VALUES ('372', '12', 'Guerrero', '6', 'Apaxtla');
INSERT INTO `municipios` VALUES ('373', '12', 'Guerrero', '7', 'Arcelia');
INSERT INTO `municipios` VALUES ('374', '12', 'Guerrero', '8', 'Atenango del Río');
INSERT INTO `municipios` VALUES ('375', '12', 'Guerrero', '9', 'Atlamajalcingo del Monte');
INSERT INTO `municipios` VALUES ('376', '12', 'Guerrero', '10', 'Atlixtac');
INSERT INTO `municipios` VALUES ('377', '12', 'Guerrero', '11', 'Atoyac de Álvarez');
INSERT INTO `municipios` VALUES ('378', '12', 'Guerrero', '12', 'Ayutla de los Libres');
INSERT INTO `municipios` VALUES ('379', '12', 'Guerrero', '13', 'Azoyú');
INSERT INTO `municipios` VALUES ('380', '12', 'Guerrero', '14', 'Benito Juárez');
INSERT INTO `municipios` VALUES ('381', '12', 'Guerrero', '15', 'Buenavista de Cuéllar');
INSERT INTO `municipios` VALUES ('382', '12', 'Guerrero', '16', 'Coahuayutla de José María Izazaga');
INSERT INTO `municipios` VALUES ('383', '12', 'Guerrero', '17', 'Cocula');
INSERT INTO `municipios` VALUES ('384', '12', 'Guerrero', '18', 'Copala');
INSERT INTO `municipios` VALUES ('385', '12', 'Guerrero', '19', 'Copalillo');
INSERT INTO `municipios` VALUES ('386', '12', 'Guerrero', '20', 'Copanatoyac');
INSERT INTO `municipios` VALUES ('387', '12', 'Guerrero', '21', 'Coyuca de Benítez');
INSERT INTO `municipios` VALUES ('388', '12', 'Guerrero', '22', 'Coyuca de Catalán');
INSERT INTO `municipios` VALUES ('389', '12', 'Guerrero', '23', 'Cuajinicuilapa');
INSERT INTO `municipios` VALUES ('390', '12', 'Guerrero', '24', 'Cualác');
INSERT INTO `municipios` VALUES ('391', '12', 'Guerrero', '25', 'Cuautepec');
INSERT INTO `municipios` VALUES ('392', '12', 'Guerrero', '26', 'Cuetzala del Progreso');
INSERT INTO `municipios` VALUES ('393', '12', 'Guerrero', '27', 'Cutzamala de Pinzón');
INSERT INTO `municipios` VALUES ('394', '12', 'Guerrero', '28', 'Chilapa de Álvarez');
INSERT INTO `municipios` VALUES ('395', '12', 'Guerrero', '29', 'Chilpancingo de los Bravo');
INSERT INTO `municipios` VALUES ('396', '12', 'Guerrero', '30', 'Florencio Villarreal');
INSERT INTO `municipios` VALUES ('397', '12', 'Guerrero', '31', 'General Canuto A. Neri');
INSERT INTO `municipios` VALUES ('398', '12', 'Guerrero', '32', 'General Heliodoro Castillo');
INSERT INTO `municipios` VALUES ('399', '12', 'Guerrero', '33', 'Huamuxtitlán');
INSERT INTO `municipios` VALUES ('400', '12', 'Guerrero', '34', 'Huitzuco de los Figueroa');
INSERT INTO `municipios` VALUES ('401', '12', 'Guerrero', '35', 'Iguala de la Independencia');
INSERT INTO `municipios` VALUES ('402', '12', 'Guerrero', '36', 'Igualapa');
INSERT INTO `municipios` VALUES ('403', '12', 'Guerrero', '37', 'Ixcateopan de Cuauhtémoc');
INSERT INTO `municipios` VALUES ('404', '12', 'Guerrero', '38', 'Zihuatanejo de Azueta');
INSERT INTO `municipios` VALUES ('405', '12', 'Guerrero', '39', 'Juan R. Escudero');
INSERT INTO `municipios` VALUES ('406', '12', 'Guerrero', '40', 'Leonardo Bravo');
INSERT INTO `municipios` VALUES ('407', '12', 'Guerrero', '41', 'Malinaltepec');
INSERT INTO `municipios` VALUES ('408', '12', 'Guerrero', '42', 'Mártir de Cuilapan');
INSERT INTO `municipios` VALUES ('409', '12', 'Guerrero', '43', 'Metlatónoc');
INSERT INTO `municipios` VALUES ('410', '12', 'Guerrero', '44', 'Mochitlán');
INSERT INTO `municipios` VALUES ('411', '12', 'Guerrero', '45', 'Olinalá');
INSERT INTO `municipios` VALUES ('412', '12', 'Guerrero', '46', 'Ometepec');
INSERT INTO `municipios` VALUES ('413', '12', 'Guerrero', '47', 'Pedro Ascencio Alquisiras');
INSERT INTO `municipios` VALUES ('414', '12', 'Guerrero', '48', 'Petatlán');
INSERT INTO `municipios` VALUES ('415', '12', 'Guerrero', '49', 'Pilcaya');
INSERT INTO `municipios` VALUES ('416', '12', 'Guerrero', '50', 'Pungarabato');
INSERT INTO `municipios` VALUES ('417', '12', 'Guerrero', '51', 'Quechultenango');
INSERT INTO `municipios` VALUES ('418', '12', 'Guerrero', '52', 'San Luis Acatlán');
INSERT INTO `municipios` VALUES ('419', '12', 'Guerrero', '53', 'San Marcos');
INSERT INTO `municipios` VALUES ('420', '12', 'Guerrero', '54', 'San Miguel Totolapan');
INSERT INTO `municipios` VALUES ('421', '12', 'Guerrero', '55', 'Taxco de Alarcón');
INSERT INTO `municipios` VALUES ('422', '12', 'Guerrero', '56', 'Tecoanapa');
INSERT INTO `municipios` VALUES ('423', '12', 'Guerrero', '57', 'Técpan de Galeana');
INSERT INTO `municipios` VALUES ('424', '12', 'Guerrero', '58', 'Teloloapan');
INSERT INTO `municipios` VALUES ('425', '12', 'Guerrero', '59', 'Tepecoacuilco de Trujano');
INSERT INTO `municipios` VALUES ('426', '12', 'Guerrero', '60', 'Tetipac');
INSERT INTO `municipios` VALUES ('427', '12', 'Guerrero', '61', 'Tixtla de Guerrero');
INSERT INTO `municipios` VALUES ('428', '12', 'Guerrero', '62', 'Tlacoachistlahuaca');
INSERT INTO `municipios` VALUES ('429', '12', 'Guerrero', '63', 'Tlacoapa');
INSERT INTO `municipios` VALUES ('430', '12', 'Guerrero', '64', 'Tlalchapa');
INSERT INTO `municipios` VALUES ('431', '12', 'Guerrero', '65', 'Tlalixtaquilla de Maldonado');
INSERT INTO `municipios` VALUES ('432', '12', 'Guerrero', '66', 'Tlapa de Comonfort');
INSERT INTO `municipios` VALUES ('433', '12', 'Guerrero', '67', 'Tlapehuala');
INSERT INTO `municipios` VALUES ('434', '12', 'Guerrero', '68', 'La Unión de Isidoro Montes de Oca');
INSERT INTO `municipios` VALUES ('435', '12', 'Guerrero', '69', 'Xalpatláhuac');
INSERT INTO `municipios` VALUES ('436', '12', 'Guerrero', '70', 'Xochihuehuetlán');
INSERT INTO `municipios` VALUES ('437', '12', 'Guerrero', '71', 'Xochistlahuaca');
INSERT INTO `municipios` VALUES ('438', '12', 'Guerrero', '72', 'Zapotitlán Tablas');
INSERT INTO `municipios` VALUES ('439', '12', 'Guerrero', '73', 'Zirándaro');
INSERT INTO `municipios` VALUES ('440', '12', 'Guerrero', '74', 'Zitlala');
INSERT INTO `municipios` VALUES ('441', '12', 'Guerrero', '75', 'Eduardo Neri');
INSERT INTO `municipios` VALUES ('442', '12', 'Guerrero', '76', 'Acatepec');
INSERT INTO `municipios` VALUES ('443', '12', 'Guerrero', '77', 'Marquelia');
INSERT INTO `municipios` VALUES ('444', '12', 'Guerrero', '78', 'Cochoapa el Grande');
INSERT INTO `municipios` VALUES ('445', '12', 'Guerrero', '79', 'José Joaquín de Herrera');
INSERT INTO `municipios` VALUES ('446', '12', 'Guerrero', '80', 'Juchitán');
INSERT INTO `municipios` VALUES ('447', '12', 'Guerrero', '81', 'Iliatenco');
INSERT INTO `municipios` VALUES ('448', '13', 'Hidalgo', '1', 'Acatlán');
INSERT INTO `municipios` VALUES ('449', '13', 'Hidalgo', '2', 'Acaxochitlán');
INSERT INTO `municipios` VALUES ('450', '13', 'Hidalgo', '3', 'Actopan');
INSERT INTO `municipios` VALUES ('451', '13', 'Hidalgo', '4', 'Agua Blanca de Iturbide');
INSERT INTO `municipios` VALUES ('452', '13', 'Hidalgo', '5', 'Ajacuba');
INSERT INTO `municipios` VALUES ('453', '13', 'Hidalgo', '6', 'Alfajayucan');
INSERT INTO `municipios` VALUES ('454', '13', 'Hidalgo', '7', 'Almoloya');
INSERT INTO `municipios` VALUES ('455', '13', 'Hidalgo', '8', 'Apan');
INSERT INTO `municipios` VALUES ('456', '13', 'Hidalgo', '9', 'El Arenal');
INSERT INTO `municipios` VALUES ('457', '13', 'Hidalgo', '10', 'Atitalaquia');
INSERT INTO `municipios` VALUES ('458', '13', 'Hidalgo', '11', 'Atlapexco');
INSERT INTO `municipios` VALUES ('459', '13', 'Hidalgo', '12', 'Atotonilco el Grande');
INSERT INTO `municipios` VALUES ('460', '13', 'Hidalgo', '13', 'Atotonilco de Tula');
INSERT INTO `municipios` VALUES ('461', '13', 'Hidalgo', '14', 'Calnali');
INSERT INTO `municipios` VALUES ('462', '13', 'Hidalgo', '15', 'Cardonal');
INSERT INTO `municipios` VALUES ('463', '13', 'Hidalgo', '16', 'Cuautepec de Hinojosa');
INSERT INTO `municipios` VALUES ('464', '13', 'Hidalgo', '17', 'Chapantongo');
INSERT INTO `municipios` VALUES ('465', '13', 'Hidalgo', '18', 'Chapulhuacán');
INSERT INTO `municipios` VALUES ('466', '13', 'Hidalgo', '19', 'Chilcuautla');
INSERT INTO `municipios` VALUES ('467', '13', 'Hidalgo', '20', 'Eloxochitlán');
INSERT INTO `municipios` VALUES ('468', '13', 'Hidalgo', '21', 'Emiliano Zapata');
INSERT INTO `municipios` VALUES ('469', '13', 'Hidalgo', '22', 'Epazoyucan');
INSERT INTO `municipios` VALUES ('470', '13', 'Hidalgo', '23', 'Francisco I. Madero');
INSERT INTO `municipios` VALUES ('471', '13', 'Hidalgo', '24', 'Huasca de Ocampo');
INSERT INTO `municipios` VALUES ('472', '13', 'Hidalgo', '25', 'Huautla');
INSERT INTO `municipios` VALUES ('473', '13', 'Hidalgo', '26', 'Huazalingo');
INSERT INTO `municipios` VALUES ('474', '13', 'Hidalgo', '27', 'Huehuetla');
INSERT INTO `municipios` VALUES ('475', '13', 'Hidalgo', '28', 'Huejutla de Reyes');
INSERT INTO `municipios` VALUES ('476', '13', 'Hidalgo', '29', 'Huichapan');
INSERT INTO `municipios` VALUES ('477', '13', 'Hidalgo', '30', 'Ixmiquilpan');
INSERT INTO `municipios` VALUES ('478', '13', 'Hidalgo', '31', 'Jacala de Ledezma');
INSERT INTO `municipios` VALUES ('479', '13', 'Hidalgo', '32', 'Jaltocán');
INSERT INTO `municipios` VALUES ('480', '13', 'Hidalgo', '33', 'Juárez Hidalgo');
INSERT INTO `municipios` VALUES ('481', '13', 'Hidalgo', '34', 'Lolotla');
INSERT INTO `municipios` VALUES ('482', '13', 'Hidalgo', '35', 'Metepec');
INSERT INTO `municipios` VALUES ('483', '13', 'Hidalgo', '36', 'San Agustín Metzquititlán');
INSERT INTO `municipios` VALUES ('484', '13', 'Hidalgo', '37', 'Metztitlán');
INSERT INTO `municipios` VALUES ('485', '13', 'Hidalgo', '38', 'Mineral del Chico');
INSERT INTO `municipios` VALUES ('486', '13', 'Hidalgo', '39', 'Mineral del Monte');
INSERT INTO `municipios` VALUES ('487', '13', 'Hidalgo', '40', 'La Misión');
INSERT INTO `municipios` VALUES ('488', '13', 'Hidalgo', '41', 'Mixquiahuala de Juárez');
INSERT INTO `municipios` VALUES ('489', '13', 'Hidalgo', '42', 'Molango de Escamilla');
INSERT INTO `municipios` VALUES ('490', '13', 'Hidalgo', '43', 'Nicolás Flores');
INSERT INTO `municipios` VALUES ('491', '13', 'Hidalgo', '44', 'Nopala de Villagrán');
INSERT INTO `municipios` VALUES ('492', '13', 'Hidalgo', '45', 'Omitlán de Juárez');
INSERT INTO `municipios` VALUES ('493', '13', 'Hidalgo', '46', 'San Felipe Orizatlán');
INSERT INTO `municipios` VALUES ('494', '13', 'Hidalgo', '47', 'Pacula');
INSERT INTO `municipios` VALUES ('495', '13', 'Hidalgo', '48', 'Pachuca de Soto');
INSERT INTO `municipios` VALUES ('496', '13', 'Hidalgo', '49', 'Pisaflores');
INSERT INTO `municipios` VALUES ('497', '13', 'Hidalgo', '50', 'Progreso de Obregón');
INSERT INTO `municipios` VALUES ('498', '13', 'Hidalgo', '51', 'Mineral de la Reforma');
INSERT INTO `municipios` VALUES ('499', '13', 'Hidalgo', '52', 'San Agustín Tlaxiaca');
INSERT INTO `municipios` VALUES ('500', '13', 'Hidalgo', '53', 'San Bartolo Tutotepec');
INSERT INTO `municipios` VALUES ('501', '13', 'Hidalgo', '54', 'San Salvador');
INSERT INTO `municipios` VALUES ('502', '13', 'Hidalgo', '55', 'Santiago de Anaya');
INSERT INTO `municipios` VALUES ('503', '13', 'Hidalgo', '56', 'Santiago Tulantepec de Lugo Guerrero');
INSERT INTO `municipios` VALUES ('504', '13', 'Hidalgo', '57', 'Singuilucan');
INSERT INTO `municipios` VALUES ('505', '13', 'Hidalgo', '58', 'Tasquillo');
INSERT INTO `municipios` VALUES ('506', '13', 'Hidalgo', '59', 'Tecozautla');
INSERT INTO `municipios` VALUES ('507', '13', 'Hidalgo', '60', 'Tenango de Doria');
INSERT INTO `municipios` VALUES ('508', '13', 'Hidalgo', '61', 'Tepeapulco');
INSERT INTO `municipios` VALUES ('509', '13', 'Hidalgo', '62', 'Tepehuacán de Guerrero');
INSERT INTO `municipios` VALUES ('510', '13', 'Hidalgo', '63', 'Tepeji del Río de Ocampo');
INSERT INTO `municipios` VALUES ('511', '13', 'Hidalgo', '64', 'Tepetitlán');
INSERT INTO `municipios` VALUES ('512', '13', 'Hidalgo', '65', 'Tetepango');
INSERT INTO `municipios` VALUES ('513', '13', 'Hidalgo', '66', 'Villa de Tezontepec');
INSERT INTO `municipios` VALUES ('514', '13', 'Hidalgo', '67', 'Tezontepec de Aldama');
INSERT INTO `municipios` VALUES ('515', '13', 'Hidalgo', '68', 'Tianguistengo');
INSERT INTO `municipios` VALUES ('516', '13', 'Hidalgo', '69', 'Tizayuca');
INSERT INTO `municipios` VALUES ('517', '13', 'Hidalgo', '70', 'Tlahuelilpan');
INSERT INTO `municipios` VALUES ('518', '13', 'Hidalgo', '71', 'Tlahuiltepa');
INSERT INTO `municipios` VALUES ('519', '13', 'Hidalgo', '72', 'Tlanalapa');
INSERT INTO `municipios` VALUES ('520', '13', 'Hidalgo', '73', 'Tlanchinol');
INSERT INTO `municipios` VALUES ('521', '13', 'Hidalgo', '74', 'Tlaxcoapan');
INSERT INTO `municipios` VALUES ('522', '13', 'Hidalgo', '75', 'Tolcayuca');
INSERT INTO `municipios` VALUES ('523', '13', 'Hidalgo', '76', 'Tula de Allende');
INSERT INTO `municipios` VALUES ('524', '13', 'Hidalgo', '77', 'Tulancingo de Bravo');
INSERT INTO `municipios` VALUES ('525', '13', 'Hidalgo', '78', 'Xochiatipan');
INSERT INTO `municipios` VALUES ('526', '13', 'Hidalgo', '79', 'Xochicoatlán');
INSERT INTO `municipios` VALUES ('527', '13', 'Hidalgo', '80', 'Yahualica');
INSERT INTO `municipios` VALUES ('528', '13', 'Hidalgo', '81', 'Zacualtipán de Ángeles');
INSERT INTO `municipios` VALUES ('529', '13', 'Hidalgo', '82', 'Zapotlán de Juárez');
INSERT INTO `municipios` VALUES ('530', '13', 'Hidalgo', '83', 'Zempoala');
INSERT INTO `municipios` VALUES ('531', '13', 'Hidalgo', '84', 'Zimapán');
INSERT INTO `municipios` VALUES ('532', '14', 'Jalisco', '1', 'Acatic');
INSERT INTO `municipios` VALUES ('533', '14', 'Jalisco', '2', 'Acatlán de Juárez');
INSERT INTO `municipios` VALUES ('534', '14', 'Jalisco', '3', 'Ahualulco de Mercado');
INSERT INTO `municipios` VALUES ('535', '14', 'Jalisco', '4', 'Amacueca');
INSERT INTO `municipios` VALUES ('536', '14', 'Jalisco', '5', 'Amatitán');
INSERT INTO `municipios` VALUES ('537', '14', 'Jalisco', '6', 'Ameca');
INSERT INTO `municipios` VALUES ('538', '14', 'Jalisco', '7', 'San Juanito de Escobedo');
INSERT INTO `municipios` VALUES ('539', '14', 'Jalisco', '8', 'Arandas');
INSERT INTO `municipios` VALUES ('540', '14', 'Jalisco', '9', 'El Arenal');
INSERT INTO `municipios` VALUES ('541', '14', 'Jalisco', '10', 'Atemajac de Brizuela');
INSERT INTO `municipios` VALUES ('542', '14', 'Jalisco', '11', 'Atengo');
INSERT INTO `municipios` VALUES ('543', '14', 'Jalisco', '12', 'Atenguillo');
INSERT INTO `municipios` VALUES ('544', '14', 'Jalisco', '13', 'Atotonilco el Alto');
INSERT INTO `municipios` VALUES ('545', '14', 'Jalisco', '14', 'Atoyac');
INSERT INTO `municipios` VALUES ('546', '14', 'Jalisco', '15', 'Autlán de Navarro');
INSERT INTO `municipios` VALUES ('547', '14', 'Jalisco', '16', 'Ayotlán');
INSERT INTO `municipios` VALUES ('548', '14', 'Jalisco', '17', 'Ayutla');
INSERT INTO `municipios` VALUES ('549', '14', 'Jalisco', '18', 'La Barca');
INSERT INTO `municipios` VALUES ('550', '14', 'Jalisco', '19', 'Bolaños');
INSERT INTO `municipios` VALUES ('551', '14', 'Jalisco', '20', 'Cabo Corrientes');
INSERT INTO `municipios` VALUES ('552', '14', 'Jalisco', '21', 'Casimiro Castillo');
INSERT INTO `municipios` VALUES ('553', '14', 'Jalisco', '22', 'Cihuatlán');
INSERT INTO `municipios` VALUES ('554', '14', 'Jalisco', '23', 'Zapotlán el Grande');
INSERT INTO `municipios` VALUES ('555', '14', 'Jalisco', '24', 'Cocula');
INSERT INTO `municipios` VALUES ('556', '14', 'Jalisco', '25', 'Colotlán');
INSERT INTO `municipios` VALUES ('557', '14', 'Jalisco', '26', 'Concepción de Buenos Aires');
INSERT INTO `municipios` VALUES ('558', '14', 'Jalisco', '27', 'Cuautitlán de García Barragán');
INSERT INTO `municipios` VALUES ('559', '14', 'Jalisco', '28', 'Cuautla');
INSERT INTO `municipios` VALUES ('560', '14', 'Jalisco', '29', 'Cuquío');
INSERT INTO `municipios` VALUES ('561', '14', 'Jalisco', '30', 'Chapala');
INSERT INTO `municipios` VALUES ('562', '14', 'Jalisco', '31', 'Chimaltitán');
INSERT INTO `municipios` VALUES ('563', '14', 'Jalisco', '32', 'Chiquilistlán');
INSERT INTO `municipios` VALUES ('564', '14', 'Jalisco', '33', 'Degollado');
INSERT INTO `municipios` VALUES ('565', '14', 'Jalisco', '34', 'Ejutla');
INSERT INTO `municipios` VALUES ('566', '14', 'Jalisco', '35', 'Encarnación de Díaz');
INSERT INTO `municipios` VALUES ('567', '14', 'Jalisco', '36', 'Etzatlán');
INSERT INTO `municipios` VALUES ('568', '14', 'Jalisco', '37', 'El Grullo');
INSERT INTO `municipios` VALUES ('569', '14', 'Jalisco', '38', 'Guachinango');
INSERT INTO `municipios` VALUES ('570', '14', 'Jalisco', '39', 'Guadalajara');
INSERT INTO `municipios` VALUES ('571', '14', 'Jalisco', '40', 'Hostotipaquillo');
INSERT INTO `municipios` VALUES ('572', '14', 'Jalisco', '41', 'Huejúcar');
INSERT INTO `municipios` VALUES ('573', '14', 'Jalisco', '42', 'Huejuquilla el Alto');
INSERT INTO `municipios` VALUES ('574', '14', 'Jalisco', '43', 'La Huerta');
INSERT INTO `municipios` VALUES ('575', '14', 'Jalisco', '44', 'Ixtlahuacán de los Membrillos');
INSERT INTO `municipios` VALUES ('576', '14', 'Jalisco', '45', 'Ixtlahuacán del Río');
INSERT INTO `municipios` VALUES ('577', '14', 'Jalisco', '46', 'Jalostotitlán');
INSERT INTO `municipios` VALUES ('578', '14', 'Jalisco', '47', 'Jamay');
INSERT INTO `municipios` VALUES ('579', '14', 'Jalisco', '48', 'Jesús María');
INSERT INTO `municipios` VALUES ('580', '14', 'Jalisco', '49', 'Jilotlán de los Dolores');
INSERT INTO `municipios` VALUES ('581', '14', 'Jalisco', '50', 'Jocotepec');
INSERT INTO `municipios` VALUES ('582', '14', 'Jalisco', '51', 'Juanacatlán');
INSERT INTO `municipios` VALUES ('583', '14', 'Jalisco', '52', 'Juchitlán');
INSERT INTO `municipios` VALUES ('584', '14', 'Jalisco', '53', 'Lagos de Moreno');
INSERT INTO `municipios` VALUES ('585', '14', 'Jalisco', '54', 'El Limón');
INSERT INTO `municipios` VALUES ('586', '14', 'Jalisco', '55', 'Magdalena');
INSERT INTO `municipios` VALUES ('587', '14', 'Jalisco', '56', 'Santa María del Oro');
INSERT INTO `municipios` VALUES ('588', '14', 'Jalisco', '57', 'La Manzanilla de la Paz');
INSERT INTO `municipios` VALUES ('589', '14', 'Jalisco', '58', 'Mascota');
INSERT INTO `municipios` VALUES ('590', '14', 'Jalisco', '59', 'Mazamitla');
INSERT INTO `municipios` VALUES ('591', '14', 'Jalisco', '60', 'Mexticacán');
INSERT INTO `municipios` VALUES ('592', '14', 'Jalisco', '61', 'Mezquitic');
INSERT INTO `municipios` VALUES ('593', '14', 'Jalisco', '62', 'Mixtlán');
INSERT INTO `municipios` VALUES ('594', '14', 'Jalisco', '63', 'Ocotlán');
INSERT INTO `municipios` VALUES ('595', '14', 'Jalisco', '64', 'Ojuelos de Jalisco');
INSERT INTO `municipios` VALUES ('596', '14', 'Jalisco', '65', 'Pihuamo');
INSERT INTO `municipios` VALUES ('597', '14', 'Jalisco', '66', 'Poncitlán');
INSERT INTO `municipios` VALUES ('598', '14', 'Jalisco', '67', 'Puerto Vallarta');
INSERT INTO `municipios` VALUES ('599', '14', 'Jalisco', '68', 'Villa Purificación');
INSERT INTO `municipios` VALUES ('600', '14', 'Jalisco', '69', 'Quitupan');
INSERT INTO `municipios` VALUES ('601', '14', 'Jalisco', '70', 'El Salto');
INSERT INTO `municipios` VALUES ('602', '14', 'Jalisco', '71', 'San Cristóbal de la Barranca');
INSERT INTO `municipios` VALUES ('603', '14', 'Jalisco', '72', 'San Diego de Alejandría');
INSERT INTO `municipios` VALUES ('604', '14', 'Jalisco', '73', 'San Juan de los Lagos');
INSERT INTO `municipios` VALUES ('605', '14', 'Jalisco', '74', 'San Julián');
INSERT INTO `municipios` VALUES ('606', '14', 'Jalisco', '75', 'San Marcos');
INSERT INTO `municipios` VALUES ('607', '14', 'Jalisco', '76', 'San Martín de Bolaños');
INSERT INTO `municipios` VALUES ('608', '14', 'Jalisco', '77', 'San Martín Hidalgo');
INSERT INTO `municipios` VALUES ('609', '14', 'Jalisco', '78', 'San Miguel el Alto');
INSERT INTO `municipios` VALUES ('610', '14', 'Jalisco', '79', 'Gómez Farías');
INSERT INTO `municipios` VALUES ('611', '14', 'Jalisco', '80', 'San Sebastián del Oeste');
INSERT INTO `municipios` VALUES ('612', '14', 'Jalisco', '81', 'Santa María de los Ángeles');
INSERT INTO `municipios` VALUES ('613', '14', 'Jalisco', '82', 'Sayula');
INSERT INTO `municipios` VALUES ('614', '14', 'Jalisco', '83', 'Tala');
INSERT INTO `municipios` VALUES ('615', '14', 'Jalisco', '84', 'Talpa de Allende');
INSERT INTO `municipios` VALUES ('616', '14', 'Jalisco', '85', 'Tamazula de Gordiano');
INSERT INTO `municipios` VALUES ('617', '14', 'Jalisco', '86', 'Tapalpa');
INSERT INTO `municipios` VALUES ('618', '14', 'Jalisco', '87', 'Tecalitlán');
INSERT INTO `municipios` VALUES ('619', '14', 'Jalisco', '88', 'Tecolotlán');
INSERT INTO `municipios` VALUES ('620', '14', 'Jalisco', '89', 'Techaluta de Montenegro');
INSERT INTO `municipios` VALUES ('621', '14', 'Jalisco', '90', 'Tenamaxtlán');
INSERT INTO `municipios` VALUES ('622', '14', 'Jalisco', '91', 'Teocaltiche');
INSERT INTO `municipios` VALUES ('623', '14', 'Jalisco', '92', 'Teocuitatlán de Corona');
INSERT INTO `municipios` VALUES ('624', '14', 'Jalisco', '93', 'Tepatitlán de Morelos');
INSERT INTO `municipios` VALUES ('625', '14', 'Jalisco', '94', 'Tequila');
INSERT INTO `municipios` VALUES ('626', '14', 'Jalisco', '95', 'Teuchitlán');
INSERT INTO `municipios` VALUES ('627', '14', 'Jalisco', '96', 'Tizapán el Alto');
INSERT INTO `municipios` VALUES ('628', '14', 'Jalisco', '97', 'Tlajomulco de Zúñiga');
INSERT INTO `municipios` VALUES ('629', '14', 'Jalisco', '98', 'San Pedro Tlaquepaque');
INSERT INTO `municipios` VALUES ('630', '14', 'Jalisco', '99', 'Tolimán');
INSERT INTO `municipios` VALUES ('631', '14', 'Jalisco', '100', 'Tomatlán');
INSERT INTO `municipios` VALUES ('632', '14', 'Jalisco', '101', 'Tonalá');
INSERT INTO `municipios` VALUES ('633', '14', 'Jalisco', '102', 'Tonaya');
INSERT INTO `municipios` VALUES ('634', '14', 'Jalisco', '103', 'Tonila');
INSERT INTO `municipios` VALUES ('635', '14', 'Jalisco', '104', 'Totatiche');
INSERT INTO `municipios` VALUES ('636', '14', 'Jalisco', '105', 'Tototlán');
INSERT INTO `municipios` VALUES ('637', '14', 'Jalisco', '106', 'Tuxcacuesco');
INSERT INTO `municipios` VALUES ('638', '14', 'Jalisco', '107', 'Tuxcueca');
INSERT INTO `municipios` VALUES ('639', '14', 'Jalisco', '108', 'Tuxpan');
INSERT INTO `municipios` VALUES ('640', '14', 'Jalisco', '109', 'Unión de San Antonio');
INSERT INTO `municipios` VALUES ('641', '14', 'Jalisco', '110', 'Unión de Tula');
INSERT INTO `municipios` VALUES ('642', '14', 'Jalisco', '111', 'Valle de Guadalupe');
INSERT INTO `municipios` VALUES ('643', '14', 'Jalisco', '112', 'Valle de Juárez');
INSERT INTO `municipios` VALUES ('644', '14', 'Jalisco', '113', 'San Gabriel');
INSERT INTO `municipios` VALUES ('645', '14', 'Jalisco', '114', 'Villa Corona');
INSERT INTO `municipios` VALUES ('646', '14', 'Jalisco', '115', 'Villa Guerrero');
INSERT INTO `municipios` VALUES ('647', '14', 'Jalisco', '116', 'Villa Hidalgo');
INSERT INTO `municipios` VALUES ('648', '14', 'Jalisco', '117', 'Cañadas de Obregón');
INSERT INTO `municipios` VALUES ('649', '14', 'Jalisco', '118', 'Yahualica de González Gallo');
INSERT INTO `municipios` VALUES ('650', '14', 'Jalisco', '119', 'Zacoalco de Torres');
INSERT INTO `municipios` VALUES ('651', '14', 'Jalisco', '120', 'Zapopan');
INSERT INTO `municipios` VALUES ('652', '14', 'Jalisco', '121', 'Zapotiltic');
INSERT INTO `municipios` VALUES ('653', '14', 'Jalisco', '122', 'Zapotitlán de Vadillo');
INSERT INTO `municipios` VALUES ('654', '14', 'Jalisco', '123', 'Zapotlán del Rey');
INSERT INTO `municipios` VALUES ('655', '14', 'Jalisco', '124', 'Zapotlanejo');
INSERT INTO `municipios` VALUES ('656', '14', 'Jalisco', '125', 'San Ignacio Cerro Gordo');
INSERT INTO `municipios` VALUES ('657', '15', 'México', '1', 'Acambay de Ruíz Castañeda');
INSERT INTO `municipios` VALUES ('658', '15', 'México', '2', 'Acolman');
INSERT INTO `municipios` VALUES ('659', '15', 'México', '3', 'Aculco');
INSERT INTO `municipios` VALUES ('660', '15', 'México', '4', 'Almoloya de Alquisiras');
INSERT INTO `municipios` VALUES ('661', '15', 'México', '5', 'Almoloya de Juárez');
INSERT INTO `municipios` VALUES ('662', '15', 'México', '6', 'Almoloya del Río');
INSERT INTO `municipios` VALUES ('663', '15', 'México', '7', 'Amanalco');
INSERT INTO `municipios` VALUES ('664', '15', 'México', '8', 'Amatepec');
INSERT INTO `municipios` VALUES ('665', '15', 'México', '9', 'Amecameca');
INSERT INTO `municipios` VALUES ('666', '15', 'México', '10', 'Apaxco');
INSERT INTO `municipios` VALUES ('667', '15', 'México', '11', 'Atenco');
INSERT INTO `municipios` VALUES ('668', '15', 'México', '12', 'Atizapán');
INSERT INTO `municipios` VALUES ('669', '15', 'México', '13', 'Atizapán de Zaragoza');
INSERT INTO `municipios` VALUES ('670', '15', 'México', '14', 'Atlacomulco');
INSERT INTO `municipios` VALUES ('671', '15', 'México', '15', 'Atlautla');
INSERT INTO `municipios` VALUES ('672', '15', 'México', '16', 'Axapusco');
INSERT INTO `municipios` VALUES ('673', '15', 'México', '17', 'Ayapango');
INSERT INTO `municipios` VALUES ('674', '15', 'México', '18', 'Calimaya');
INSERT INTO `municipios` VALUES ('675', '15', 'México', '19', 'Capulhuac');
INSERT INTO `municipios` VALUES ('676', '15', 'México', '20', 'Coacalco de Berriozábal');
INSERT INTO `municipios` VALUES ('677', '15', 'México', '21', 'Coatepec Harinas');
INSERT INTO `municipios` VALUES ('678', '15', 'México', '22', 'Cocotitlán');
INSERT INTO `municipios` VALUES ('679', '15', 'México', '23', 'Coyotepec');
INSERT INTO `municipios` VALUES ('680', '15', 'México', '24', 'Cuautitlán');
INSERT INTO `municipios` VALUES ('681', '15', 'México', '25', 'Chalco');
INSERT INTO `municipios` VALUES ('682', '15', 'México', '26', 'Chapa de Mota');
INSERT INTO `municipios` VALUES ('683', '15', 'México', '27', 'Chapultepec');
INSERT INTO `municipios` VALUES ('684', '15', 'México', '28', 'Chiautla');
INSERT INTO `municipios` VALUES ('685', '15', 'México', '29', 'Chicoloapan');
INSERT INTO `municipios` VALUES ('686', '15', 'México', '30', 'Chiconcuac');
INSERT INTO `municipios` VALUES ('687', '15', 'México', '31', 'Chimalhuacán');
INSERT INTO `municipios` VALUES ('688', '15', 'México', '32', 'Donato Guerra');
INSERT INTO `municipios` VALUES ('689', '15', 'México', '33', 'Ecatepec de Morelos');
INSERT INTO `municipios` VALUES ('690', '15', 'México', '34', 'Ecatzingo');
INSERT INTO `municipios` VALUES ('691', '15', 'México', '35', 'Huehuetoca');
INSERT INTO `municipios` VALUES ('692', '15', 'México', '36', 'Hueypoxtla');
INSERT INTO `municipios` VALUES ('693', '15', 'México', '37', 'Huixquilucan');
INSERT INTO `municipios` VALUES ('694', '15', 'México', '38', 'Isidro Fabela');
INSERT INTO `municipios` VALUES ('695', '15', 'México', '39', 'Ixtapaluca');
INSERT INTO `municipios` VALUES ('696', '15', 'México', '40', 'Ixtapan de la Sal');
INSERT INTO `municipios` VALUES ('697', '15', 'México', '41', 'Ixtapan del Oro');
INSERT INTO `municipios` VALUES ('698', '15', 'México', '42', 'Ixtlahuaca');
INSERT INTO `municipios` VALUES ('699', '15', 'México', '43', 'Xalatlaco');
INSERT INTO `municipios` VALUES ('700', '15', 'México', '44', 'Jaltenco');
INSERT INTO `municipios` VALUES ('701', '15', 'México', '45', 'Jilotepec');
INSERT INTO `municipios` VALUES ('702', '15', 'México', '46', 'Jilotzingo');
INSERT INTO `municipios` VALUES ('703', '15', 'México', '47', 'Jiquipilco');
INSERT INTO `municipios` VALUES ('704', '15', 'México', '48', 'Jocotitlán');
INSERT INTO `municipios` VALUES ('705', '15', 'México', '49', 'Joquicingo');
INSERT INTO `municipios` VALUES ('706', '15', 'México', '50', 'Juchitepec');
INSERT INTO `municipios` VALUES ('707', '15', 'México', '51', 'Lerma');
INSERT INTO `municipios` VALUES ('708', '15', 'México', '52', 'Malinalco');
INSERT INTO `municipios` VALUES ('709', '15', 'México', '53', 'Melchor Ocampo');
INSERT INTO `municipios` VALUES ('710', '15', 'México', '54', 'Metepec');
INSERT INTO `municipios` VALUES ('711', '15', 'México', '55', 'Mexicaltzingo');
INSERT INTO `municipios` VALUES ('712', '15', 'México', '56', 'Morelos');
INSERT INTO `municipios` VALUES ('713', '15', 'México', '57', 'Naucalpan de Juárez');
INSERT INTO `municipios` VALUES ('714', '15', 'México', '58', 'Nezahualcóyotl');
INSERT INTO `municipios` VALUES ('715', '15', 'México', '59', 'Nextlalpan');
INSERT INTO `municipios` VALUES ('716', '15', 'México', '60', 'Nicolás Romero');
INSERT INTO `municipios` VALUES ('717', '15', 'México', '61', 'Nopaltepec');
INSERT INTO `municipios` VALUES ('718', '15', 'México', '62', 'Ocoyoacac');
INSERT INTO `municipios` VALUES ('719', '15', 'México', '63', 'Ocuilan');
INSERT INTO `municipios` VALUES ('720', '15', 'México', '64', 'El Oro');
INSERT INTO `municipios` VALUES ('721', '15', 'México', '65', 'Otumba');
INSERT INTO `municipios` VALUES ('722', '15', 'México', '66', 'Otzoloapan');
INSERT INTO `municipios` VALUES ('723', '15', 'México', '67', 'Otzolotepec');
INSERT INTO `municipios` VALUES ('724', '15', 'México', '68', 'Ozumba');
INSERT INTO `municipios` VALUES ('725', '15', 'México', '69', 'Papalotla');
INSERT INTO `municipios` VALUES ('726', '15', 'México', '70', 'La Paz');
INSERT INTO `municipios` VALUES ('727', '15', 'México', '71', 'Polotitlán');
INSERT INTO `municipios` VALUES ('728', '15', 'México', '72', 'Rayón');
INSERT INTO `municipios` VALUES ('729', '15', 'México', '73', 'San Antonio la Isla');
INSERT INTO `municipios` VALUES ('730', '15', 'México', '74', 'San Felipe del Progreso');
INSERT INTO `municipios` VALUES ('731', '15', 'México', '75', 'San Martín de las Pirámides');
INSERT INTO `municipios` VALUES ('732', '15', 'México', '76', 'San Mateo Atenco');
INSERT INTO `municipios` VALUES ('733', '15', 'México', '77', 'San Simón de Guerrero');
INSERT INTO `municipios` VALUES ('734', '15', 'México', '78', 'Santo Tomás');
INSERT INTO `municipios` VALUES ('735', '15', 'México', '79', 'Soyaniquilpan de Juárez');
INSERT INTO `municipios` VALUES ('736', '15', 'México', '80', 'Sultepec');
INSERT INTO `municipios` VALUES ('737', '15', 'México', '81', 'Tecámac');
INSERT INTO `municipios` VALUES ('738', '15', 'México', '82', 'Tejupilco');
INSERT INTO `municipios` VALUES ('739', '15', 'México', '83', 'Temamatla');
INSERT INTO `municipios` VALUES ('740', '15', 'México', '84', 'Temascalapa');
INSERT INTO `municipios` VALUES ('741', '15', 'México', '85', 'Temascalcingo');
INSERT INTO `municipios` VALUES ('742', '15', 'México', '86', 'Temascaltepec');
INSERT INTO `municipios` VALUES ('743', '15', 'México', '87', 'Temoaya');
INSERT INTO `municipios` VALUES ('744', '15', 'México', '88', 'Tenancingo');
INSERT INTO `municipios` VALUES ('745', '15', 'México', '89', 'Tenango del Aire');
INSERT INTO `municipios` VALUES ('746', '15', 'México', '90', 'Tenango del Valle');
INSERT INTO `municipios` VALUES ('747', '15', 'México', '91', 'Teoloyucan');
INSERT INTO `municipios` VALUES ('748', '15', 'México', '92', 'Teotihuacán');
INSERT INTO `municipios` VALUES ('749', '15', 'México', '93', 'Tepetlaoxtoc');
INSERT INTO `municipios` VALUES ('750', '15', 'México', '94', 'Tepetlixpa');
INSERT INTO `municipios` VALUES ('751', '15', 'México', '95', 'Tepotzotlán');
INSERT INTO `municipios` VALUES ('752', '15', 'México', '96', 'Tequixquiac');
INSERT INTO `municipios` VALUES ('753', '15', 'México', '97', 'Texcaltitlán');
INSERT INTO `municipios` VALUES ('754', '15', 'México', '98', 'Texcalyacac');
INSERT INTO `municipios` VALUES ('755', '15', 'México', '99', 'Texcoco');
INSERT INTO `municipios` VALUES ('756', '15', 'México', '100', 'Tezoyuca');
INSERT INTO `municipios` VALUES ('757', '15', 'México', '101', 'Tianguistenco');
INSERT INTO `municipios` VALUES ('758', '15', 'México', '102', 'Timilpan');
INSERT INTO `municipios` VALUES ('759', '15', 'México', '103', 'Tlalmanalco');
INSERT INTO `municipios` VALUES ('760', '15', 'México', '104', 'Tlalnepantla de Baz');
INSERT INTO `municipios` VALUES ('761', '15', 'México', '105', 'Tlatlaya');
INSERT INTO `municipios` VALUES ('762', '15', 'México', '106', 'Toluca');
INSERT INTO `municipios` VALUES ('763', '15', 'México', '107', 'Tonatico');
INSERT INTO `municipios` VALUES ('764', '15', 'México', '108', 'Tultepec');
INSERT INTO `municipios` VALUES ('765', '15', 'México', '109', 'Tultitlán');
INSERT INTO `municipios` VALUES ('766', '15', 'México', '110', 'Valle de Bravo');
INSERT INTO `municipios` VALUES ('767', '15', 'México', '111', 'Villa de Allende');
INSERT INTO `municipios` VALUES ('768', '15', 'México', '112', 'Villa del Carbón');
INSERT INTO `municipios` VALUES ('769', '15', 'México', '113', 'Villa Guerrero');
INSERT INTO `municipios` VALUES ('770', '15', 'México', '114', 'Villa Victoria');
INSERT INTO `municipios` VALUES ('771', '15', 'México', '115', 'Xonacatlán');
INSERT INTO `municipios` VALUES ('772', '15', 'México', '116', 'Zacazonapan');
INSERT INTO `municipios` VALUES ('773', '15', 'México', '117', 'Zacualpan');
INSERT INTO `municipios` VALUES ('774', '15', 'México', '118', 'Zinacantepec');
INSERT INTO `municipios` VALUES ('775', '15', 'México', '119', 'Zumpahuacán');
INSERT INTO `municipios` VALUES ('776', '15', 'México', '120', 'Zumpango');
INSERT INTO `municipios` VALUES ('777', '15', 'México', '121', 'Cuautitlán Izcalli');
INSERT INTO `municipios` VALUES ('778', '15', 'México', '122', 'Valle de Chalco Solidaridad');
INSERT INTO `municipios` VALUES ('779', '15', 'México', '123', 'Luvianos');
INSERT INTO `municipios` VALUES ('780', '15', 'México', '124', 'San José del Rincón');
INSERT INTO `municipios` VALUES ('781', '15', 'México', '125', 'Tonanitla');
INSERT INTO `municipios` VALUES ('782', '16', 'Michoacán de Ocampo', '1', 'Acuitzio');
INSERT INTO `municipios` VALUES ('783', '16', 'Michoacán de Ocampo', '2', 'Aguililla');
INSERT INTO `municipios` VALUES ('784', '16', 'Michoacán de Ocampo', '3', 'Álvaro Obregón');
INSERT INTO `municipios` VALUES ('785', '16', 'Michoacán de Ocampo', '4', 'Angamacutiro');
INSERT INTO `municipios` VALUES ('786', '16', 'Michoacán de Ocampo', '5', 'Angangueo');
INSERT INTO `municipios` VALUES ('787', '16', 'Michoacán de Ocampo', '6', 'Apatzingán');
INSERT INTO `municipios` VALUES ('788', '16', 'Michoacán de Ocampo', '7', 'Aporo');
INSERT INTO `municipios` VALUES ('789', '16', 'Michoacán de Ocampo', '8', 'Aquila');
INSERT INTO `municipios` VALUES ('790', '16', 'Michoacán de Ocampo', '9', 'Ario');
INSERT INTO `municipios` VALUES ('791', '16', 'Michoacán de Ocampo', '10', 'Arteaga');
INSERT INTO `municipios` VALUES ('792', '16', 'Michoacán de Ocampo', '11', 'Briseñas');
INSERT INTO `municipios` VALUES ('793', '16', 'Michoacán de Ocampo', '12', 'Buenavista');
INSERT INTO `municipios` VALUES ('794', '16', 'Michoacán de Ocampo', '13', 'Carácuaro');
INSERT INTO `municipios` VALUES ('795', '16', 'Michoacán de Ocampo', '14', 'Coahuayana');
INSERT INTO `municipios` VALUES ('796', '16', 'Michoacán de Ocampo', '15', 'Coalcomán de Vázquez Pallares');
INSERT INTO `municipios` VALUES ('797', '16', 'Michoacán de Ocampo', '16', 'Coeneo');
INSERT INTO `municipios` VALUES ('798', '16', 'Michoacán de Ocampo', '17', 'Contepec');
INSERT INTO `municipios` VALUES ('799', '16', 'Michoacán de Ocampo', '18', 'Copándaro');
INSERT INTO `municipios` VALUES ('800', '16', 'Michoacán de Ocampo', '19', 'Cotija');
INSERT INTO `municipios` VALUES ('801', '16', 'Michoacán de Ocampo', '20', 'Cuitzeo');
INSERT INTO `municipios` VALUES ('802', '16', 'Michoacán de Ocampo', '21', 'Charapan');
INSERT INTO `municipios` VALUES ('803', '16', 'Michoacán de Ocampo', '22', 'Charo');
INSERT INTO `municipios` VALUES ('804', '16', 'Michoacán de Ocampo', '23', 'Chavinda');
INSERT INTO `municipios` VALUES ('805', '16', 'Michoacán de Ocampo', '24', 'Cherán');
INSERT INTO `municipios` VALUES ('806', '16', 'Michoacán de Ocampo', '25', 'Chilchota');
INSERT INTO `municipios` VALUES ('807', '16', 'Michoacán de Ocampo', '26', 'Chinicuila');
INSERT INTO `municipios` VALUES ('808', '16', 'Michoacán de Ocampo', '27', 'Chucándiro');
INSERT INTO `municipios` VALUES ('809', '16', 'Michoacán de Ocampo', '28', 'Churintzio');
INSERT INTO `municipios` VALUES ('810', '16', 'Michoacán de Ocampo', '29', 'Churumuco');
INSERT INTO `municipios` VALUES ('811', '16', 'Michoacán de Ocampo', '30', 'Ecuandureo');
INSERT INTO `municipios` VALUES ('812', '16', 'Michoacán de Ocampo', '31', 'Epitacio Huerta');
INSERT INTO `municipios` VALUES ('813', '16', 'Michoacán de Ocampo', '32', 'Erongarícuaro');
INSERT INTO `municipios` VALUES ('814', '16', 'Michoacán de Ocampo', '33', 'Gabriel Zamora');
INSERT INTO `municipios` VALUES ('815', '16', 'Michoacán de Ocampo', '34', 'Hidalgo');
INSERT INTO `municipios` VALUES ('816', '16', 'Michoacán de Ocampo', '35', 'La Huacana');
INSERT INTO `municipios` VALUES ('817', '16', 'Michoacán de Ocampo', '36', 'Huandacareo');
INSERT INTO `municipios` VALUES ('818', '16', 'Michoacán de Ocampo', '37', 'Huaniqueo');
INSERT INTO `municipios` VALUES ('819', '16', 'Michoacán de Ocampo', '38', 'Huetamo');
INSERT INTO `municipios` VALUES ('820', '16', 'Michoacán de Ocampo', '39', 'Huiramba');
INSERT INTO `municipios` VALUES ('821', '16', 'Michoacán de Ocampo', '40', 'Indaparapeo');
INSERT INTO `municipios` VALUES ('822', '16', 'Michoacán de Ocampo', '41', 'Irimbo');
INSERT INTO `municipios` VALUES ('823', '16', 'Michoacán de Ocampo', '42', 'Ixtlán');
INSERT INTO `municipios` VALUES ('824', '16', 'Michoacán de Ocampo', '43', 'Jacona');
INSERT INTO `municipios` VALUES ('825', '16', 'Michoacán de Ocampo', '44', 'Jiménez');
INSERT INTO `municipios` VALUES ('826', '16', 'Michoacán de Ocampo', '45', 'Jiquilpan');
INSERT INTO `municipios` VALUES ('827', '16', 'Michoacán de Ocampo', '46', 'Juárez');
INSERT INTO `municipios` VALUES ('828', '16', 'Michoacán de Ocampo', '47', 'Jungapeo');
INSERT INTO `municipios` VALUES ('829', '16', 'Michoacán de Ocampo', '48', 'Lagunillas');
INSERT INTO `municipios` VALUES ('830', '16', 'Michoacán de Ocampo', '49', 'Madero');
INSERT INTO `municipios` VALUES ('831', '16', 'Michoacán de Ocampo', '50', 'Maravatío');
INSERT INTO `municipios` VALUES ('832', '16', 'Michoacán de Ocampo', '51', 'Marcos Castellanos');
INSERT INTO `municipios` VALUES ('833', '16', 'Michoacán de Ocampo', '52', 'Lázaro Cárdenas');
INSERT INTO `municipios` VALUES ('834', '16', 'Michoacán de Ocampo', '53', 'Morelia');
INSERT INTO `municipios` VALUES ('835', '16', 'Michoacán de Ocampo', '54', 'Morelos');
INSERT INTO `municipios` VALUES ('836', '16', 'Michoacán de Ocampo', '55', 'Múgica');
INSERT INTO `municipios` VALUES ('837', '16', 'Michoacán de Ocampo', '56', 'Nahuatzen');
INSERT INTO `municipios` VALUES ('838', '16', 'Michoacán de Ocampo', '57', 'Nocupétaro');
INSERT INTO `municipios` VALUES ('839', '16', 'Michoacán de Ocampo', '58', 'Nuevo Parangaricutiro');
INSERT INTO `municipios` VALUES ('840', '16', 'Michoacán de Ocampo', '59', 'Nuevo Urecho');
INSERT INTO `municipios` VALUES ('841', '16', 'Michoacán de Ocampo', '60', 'Numarán');
INSERT INTO `municipios` VALUES ('842', '16', 'Michoacán de Ocampo', '61', 'Ocampo');
INSERT INTO `municipios` VALUES ('843', '16', 'Michoacán de Ocampo', '62', 'Pajacuarán');
INSERT INTO `municipios` VALUES ('844', '16', 'Michoacán de Ocampo', '63', 'Panindícuaro');
INSERT INTO `municipios` VALUES ('845', '16', 'Michoacán de Ocampo', '64', 'Parácuaro');
INSERT INTO `municipios` VALUES ('846', '16', 'Michoacán de Ocampo', '65', 'Paracho');
INSERT INTO `municipios` VALUES ('847', '16', 'Michoacán de Ocampo', '66', 'Pátzcuaro');
INSERT INTO `municipios` VALUES ('848', '16', 'Michoacán de Ocampo', '67', 'Penjamillo');
INSERT INTO `municipios` VALUES ('849', '16', 'Michoacán de Ocampo', '68', 'Peribán');
INSERT INTO `municipios` VALUES ('850', '16', 'Michoacán de Ocampo', '69', 'La Piedad');
INSERT INTO `municipios` VALUES ('851', '16', 'Michoacán de Ocampo', '70', 'Purépero');
INSERT INTO `municipios` VALUES ('852', '16', 'Michoacán de Ocampo', '71', 'Puruándiro');
INSERT INTO `municipios` VALUES ('853', '16', 'Michoacán de Ocampo', '72', 'Queréndaro');
INSERT INTO `municipios` VALUES ('854', '16', 'Michoacán de Ocampo', '73', 'Quiroga');
INSERT INTO `municipios` VALUES ('855', '16', 'Michoacán de Ocampo', '74', 'Cojumatlán de Régules');
INSERT INTO `municipios` VALUES ('856', '16', 'Michoacán de Ocampo', '75', 'Los Reyes');
INSERT INTO `municipios` VALUES ('857', '16', 'Michoacán de Ocampo', '76', 'Sahuayo');
INSERT INTO `municipios` VALUES ('858', '16', 'Michoacán de Ocampo', '77', 'San Lucas');
INSERT INTO `municipios` VALUES ('859', '16', 'Michoacán de Ocampo', '78', 'Santa Ana Maya');
INSERT INTO `municipios` VALUES ('860', '16', 'Michoacán de Ocampo', '79', 'Salvador Escalante');
INSERT INTO `municipios` VALUES ('861', '16', 'Michoacán de Ocampo', '80', 'Senguio');
INSERT INTO `municipios` VALUES ('862', '16', 'Michoacán de Ocampo', '81', 'Susupuato');
INSERT INTO `municipios` VALUES ('863', '16', 'Michoacán de Ocampo', '82', 'Tacámbaro');
INSERT INTO `municipios` VALUES ('864', '16', 'Michoacán de Ocampo', '83', 'Tancítaro');
INSERT INTO `municipios` VALUES ('865', '16', 'Michoacán de Ocampo', '84', 'Tangamandapio');
INSERT INTO `municipios` VALUES ('866', '16', 'Michoacán de Ocampo', '85', 'Tangancícuaro');
INSERT INTO `municipios` VALUES ('867', '16', 'Michoacán de Ocampo', '86', 'Tanhuato');
INSERT INTO `municipios` VALUES ('868', '16', 'Michoacán de Ocampo', '87', 'Taretan');
INSERT INTO `municipios` VALUES ('869', '16', 'Michoacán de Ocampo', '88', 'Tarímbaro');
INSERT INTO `municipios` VALUES ('870', '16', 'Michoacán de Ocampo', '89', 'Tepalcatepec');
INSERT INTO `municipios` VALUES ('871', '16', 'Michoacán de Ocampo', '90', 'Tingambato');
INSERT INTO `municipios` VALUES ('872', '16', 'Michoacán de Ocampo', '91', 'Tingüindín');
INSERT INTO `municipios` VALUES ('873', '16', 'Michoacán de Ocampo', '92', 'Tiquicheo de Nicolás Romero');
INSERT INTO `municipios` VALUES ('874', '16', 'Michoacán de Ocampo', '93', 'Tlalpujahua');
INSERT INTO `municipios` VALUES ('875', '16', 'Michoacán de Ocampo', '94', 'Tlazazalca');
INSERT INTO `municipios` VALUES ('876', '16', 'Michoacán de Ocampo', '95', 'Tocumbo');
INSERT INTO `municipios` VALUES ('877', '16', 'Michoacán de Ocampo', '96', 'Tumbiscatío');
INSERT INTO `municipios` VALUES ('878', '16', 'Michoacán de Ocampo', '97', 'Turicato');
INSERT INTO `municipios` VALUES ('879', '16', 'Michoacán de Ocampo', '98', 'Tuxpan');
INSERT INTO `municipios` VALUES ('880', '16', 'Michoacán de Ocampo', '99', 'Tuzantla');
INSERT INTO `municipios` VALUES ('881', '16', 'Michoacán de Ocampo', '100', 'Tzintzuntzan');
INSERT INTO `municipios` VALUES ('882', '16', 'Michoacán de Ocampo', '101', 'Tzitzio');
INSERT INTO `municipios` VALUES ('883', '16', 'Michoacán de Ocampo', '102', 'Uruapan');
INSERT INTO `municipios` VALUES ('884', '16', 'Michoacán de Ocampo', '103', 'Venustiano Carranza');
INSERT INTO `municipios` VALUES ('885', '16', 'Michoacán de Ocampo', '104', 'Villamar');
INSERT INTO `municipios` VALUES ('886', '16', 'Michoacán de Ocampo', '105', 'Vista Hermosa');
INSERT INTO `municipios` VALUES ('887', '16', 'Michoacán de Ocampo', '106', 'Yurécuaro');
INSERT INTO `municipios` VALUES ('888', '16', 'Michoacán de Ocampo', '107', 'Zacapu');
INSERT INTO `municipios` VALUES ('889', '16', 'Michoacán de Ocampo', '108', 'Zamora');
INSERT INTO `municipios` VALUES ('890', '16', 'Michoacán de Ocampo', '109', 'Zináparo');
INSERT INTO `municipios` VALUES ('891', '16', 'Michoacán de Ocampo', '110', 'Zinapécuaro');
INSERT INTO `municipios` VALUES ('892', '16', 'Michoacán de Ocampo', '111', 'Ziracuaretiro');
INSERT INTO `municipios` VALUES ('893', '16', 'Michoacán de Ocampo', '112', 'Zitácuaro');
INSERT INTO `municipios` VALUES ('894', '16', 'Michoacán de Ocampo', '113', 'José Sixto Verduzco');
INSERT INTO `municipios` VALUES ('895', '17', 'Morelos', '1', 'Amacuzac');
INSERT INTO `municipios` VALUES ('896', '17', 'Morelos', '2', 'Atlatlahucan');
INSERT INTO `municipios` VALUES ('897', '17', 'Morelos', '3', 'Axochiapan');
INSERT INTO `municipios` VALUES ('898', '17', 'Morelos', '4', 'Ayala');
INSERT INTO `municipios` VALUES ('899', '17', 'Morelos', '5', 'Coatlán del Río');
INSERT INTO `municipios` VALUES ('900', '17', 'Morelos', '6', 'Cuautla');
INSERT INTO `municipios` VALUES ('901', '17', 'Morelos', '7', 'Cuernavaca');
INSERT INTO `municipios` VALUES ('902', '17', 'Morelos', '8', 'Emiliano Zapata');
INSERT INTO `municipios` VALUES ('903', '17', 'Morelos', '9', 'Huitzilac');
INSERT INTO `municipios` VALUES ('904', '17', 'Morelos', '10', 'Jantetelco');
INSERT INTO `municipios` VALUES ('905', '17', 'Morelos', '11', 'Jiutepec');
INSERT INTO `municipios` VALUES ('906', '17', 'Morelos', '12', 'Jojutla');
INSERT INTO `municipios` VALUES ('907', '17', 'Morelos', '13', 'Jonacatepec');
INSERT INTO `municipios` VALUES ('908', '17', 'Morelos', '14', 'Mazatepec');
INSERT INTO `municipios` VALUES ('909', '17', 'Morelos', '15', 'Miacatlán');
INSERT INTO `municipios` VALUES ('910', '17', 'Morelos', '16', 'Ocuituco');
INSERT INTO `municipios` VALUES ('911', '17', 'Morelos', '17', 'Puente de Ixtla');
INSERT INTO `municipios` VALUES ('912', '17', 'Morelos', '18', 'Temixco');
INSERT INTO `municipios` VALUES ('913', '17', 'Morelos', '19', 'Tepalcingo');
INSERT INTO `municipios` VALUES ('914', '17', 'Morelos', '20', 'Tepoztlán');
INSERT INTO `municipios` VALUES ('915', '17', 'Morelos', '21', 'Tetecala');
INSERT INTO `municipios` VALUES ('916', '17', 'Morelos', '22', 'Tetela del Volcán');
INSERT INTO `municipios` VALUES ('917', '17', 'Morelos', '23', 'Tlalnepantla');
INSERT INTO `municipios` VALUES ('918', '17', 'Morelos', '24', 'Tlaltizapán de Zapata');
INSERT INTO `municipios` VALUES ('919', '17', 'Morelos', '25', 'Tlaquiltenango');
INSERT INTO `municipios` VALUES ('920', '17', 'Morelos', '26', 'Tlayacapan');
INSERT INTO `municipios` VALUES ('921', '17', 'Morelos', '27', 'Totolapan');
INSERT INTO `municipios` VALUES ('922', '17', 'Morelos', '28', 'Xochitepec');
INSERT INTO `municipios` VALUES ('923', '17', 'Morelos', '29', 'Yautepec');
INSERT INTO `municipios` VALUES ('924', '17', 'Morelos', '30', 'Yecapixtla');
INSERT INTO `municipios` VALUES ('925', '17', 'Morelos', '31', 'Zacatepec');
INSERT INTO `municipios` VALUES ('926', '17', 'Morelos', '32', 'Zacualpan de Amilpas');
INSERT INTO `municipios` VALUES ('927', '17', 'Morelos', '33', 'Temoac');
INSERT INTO `municipios` VALUES ('928', '18', 'Nayarit', '1', 'Acaponeta');
INSERT INTO `municipios` VALUES ('929', '18', 'Nayarit', '2', 'Ahuacatlán');
INSERT INTO `municipios` VALUES ('930', '18', 'Nayarit', '3', 'Amatlán de Cañas');
INSERT INTO `municipios` VALUES ('931', '18', 'Nayarit', '4', 'Compostela');
INSERT INTO `municipios` VALUES ('932', '18', 'Nayarit', '5', 'Huajicori');
INSERT INTO `municipios` VALUES ('933', '18', 'Nayarit', '6', 'Ixtlán del Río');
INSERT INTO `municipios` VALUES ('934', '18', 'Nayarit', '7', 'Jala');
INSERT INTO `municipios` VALUES ('935', '18', 'Nayarit', '8', 'Xalisco');
INSERT INTO `municipios` VALUES ('936', '18', 'Nayarit', '9', 'Del Nayar');
INSERT INTO `municipios` VALUES ('937', '18', 'Nayarit', '10', 'Rosamorada');
INSERT INTO `municipios` VALUES ('938', '18', 'Nayarit', '11', 'Ruíz');
INSERT INTO `municipios` VALUES ('939', '18', 'Nayarit', '12', 'San Blas');
INSERT INTO `municipios` VALUES ('940', '18', 'Nayarit', '13', 'San Pedro Lagunillas');
INSERT INTO `municipios` VALUES ('941', '18', 'Nayarit', '14', 'Santa María del Oro');
INSERT INTO `municipios` VALUES ('942', '18', 'Nayarit', '15', 'Santiago Ixcuintla');
INSERT INTO `municipios` VALUES ('943', '18', 'Nayarit', '16', 'Tecuala');
INSERT INTO `municipios` VALUES ('944', '18', 'Nayarit', '17', 'Tepic');
INSERT INTO `municipios` VALUES ('945', '18', 'Nayarit', '18', 'Tuxpan');
INSERT INTO `municipios` VALUES ('946', '18', 'Nayarit', '19', 'La Yesca');
INSERT INTO `municipios` VALUES ('947', '18', 'Nayarit', '20', 'Bahía de Banderas');
INSERT INTO `municipios` VALUES ('948', '19', 'Nuevo León', '1', 'Abasolo');
INSERT INTO `municipios` VALUES ('949', '19', 'Nuevo León', '2', 'Agualeguas');
INSERT INTO `municipios` VALUES ('950', '19', 'Nuevo León', '3', 'Los Aldamas');
INSERT INTO `municipios` VALUES ('951', '19', 'Nuevo León', '4', 'Allende');
INSERT INTO `municipios` VALUES ('952', '19', 'Nuevo León', '5', 'Anáhuac');
INSERT INTO `municipios` VALUES ('953', '19', 'Nuevo León', '6', 'Apodaca');
INSERT INTO `municipios` VALUES ('954', '19', 'Nuevo León', '7', 'Aramberri');
INSERT INTO `municipios` VALUES ('955', '19', 'Nuevo León', '8', 'Bustamante');
INSERT INTO `municipios` VALUES ('956', '19', 'Nuevo León', '9', 'Cadereyta Jiménez');
INSERT INTO `municipios` VALUES ('957', '19', 'Nuevo León', '10', 'El Carmen');
INSERT INTO `municipios` VALUES ('958', '19', 'Nuevo León', '11', 'Cerralvo');
INSERT INTO `municipios` VALUES ('959', '19', 'Nuevo León', '12', 'Ciénega de Flores');
INSERT INTO `municipios` VALUES ('960', '19', 'Nuevo León', '13', 'China');
INSERT INTO `municipios` VALUES ('961', '19', 'Nuevo León', '14', 'Doctor Arroyo');
INSERT INTO `municipios` VALUES ('962', '19', 'Nuevo León', '15', 'Doctor Coss');
INSERT INTO `municipios` VALUES ('963', '19', 'Nuevo León', '16', 'Doctor González');
INSERT INTO `municipios` VALUES ('964', '19', 'Nuevo León', '17', 'Galeana');
INSERT INTO `municipios` VALUES ('965', '19', 'Nuevo León', '18', 'García');
INSERT INTO `municipios` VALUES ('966', '19', 'Nuevo León', '19', 'San Pedro Garza García');
INSERT INTO `municipios` VALUES ('967', '19', 'Nuevo León', '20', 'General Bravo');
INSERT INTO `municipios` VALUES ('968', '19', 'Nuevo León', '21', 'General Escobedo');
INSERT INTO `municipios` VALUES ('969', '19', 'Nuevo León', '22', 'General Terán');
INSERT INTO `municipios` VALUES ('970', '19', 'Nuevo León', '23', 'General Treviño');
INSERT INTO `municipios` VALUES ('971', '19', 'Nuevo León', '24', 'General Zaragoza');
INSERT INTO `municipios` VALUES ('972', '19', 'Nuevo León', '25', 'General Zuazua');
INSERT INTO `municipios` VALUES ('973', '19', 'Nuevo León', '26', 'Guadalupe');
INSERT INTO `municipios` VALUES ('974', '19', 'Nuevo León', '27', 'Los Herreras');
INSERT INTO `municipios` VALUES ('975', '19', 'Nuevo León', '28', 'Higueras');
INSERT INTO `municipios` VALUES ('976', '19', 'Nuevo León', '29', 'Hualahuises');
INSERT INTO `municipios` VALUES ('977', '19', 'Nuevo León', '30', 'Iturbide');
INSERT INTO `municipios` VALUES ('978', '19', 'Nuevo León', '31', 'Juárez');
INSERT INTO `municipios` VALUES ('979', '19', 'Nuevo León', '32', 'Lampazos de Naranjo');
INSERT INTO `municipios` VALUES ('980', '19', 'Nuevo León', '33', 'Linares');
INSERT INTO `municipios` VALUES ('981', '19', 'Nuevo León', '34', 'Marín');
INSERT INTO `municipios` VALUES ('982', '19', 'Nuevo León', '35', 'Melchor Ocampo');
INSERT INTO `municipios` VALUES ('983', '19', 'Nuevo León', '36', 'Mier y Noriega');
INSERT INTO `municipios` VALUES ('984', '19', 'Nuevo León', '37', 'Mina');
INSERT INTO `municipios` VALUES ('985', '19', 'Nuevo León', '38', 'Montemorelos');
INSERT INTO `municipios` VALUES ('986', '19', 'Nuevo León', '39', 'Monterrey');
INSERT INTO `municipios` VALUES ('987', '19', 'Nuevo León', '40', 'Parás');
INSERT INTO `municipios` VALUES ('988', '19', 'Nuevo León', '41', 'Pesquería');
INSERT INTO `municipios` VALUES ('989', '19', 'Nuevo León', '42', 'Los Ramones');
INSERT INTO `municipios` VALUES ('990', '19', 'Nuevo León', '43', 'Rayones');
INSERT INTO `municipios` VALUES ('991', '19', 'Nuevo León', '44', 'Sabinas Hidalgo');
INSERT INTO `municipios` VALUES ('992', '19', 'Nuevo León', '45', 'Salinas Victoria');
INSERT INTO `municipios` VALUES ('993', '19', 'Nuevo León', '46', 'San Nicolás de los Garza');
INSERT INTO `municipios` VALUES ('994', '19', 'Nuevo León', '47', 'Hidalgo');
INSERT INTO `municipios` VALUES ('995', '19', 'Nuevo León', '48', 'Santa Catarina');
INSERT INTO `municipios` VALUES ('996', '19', 'Nuevo León', '49', 'Santiago');
INSERT INTO `municipios` VALUES ('997', '19', 'Nuevo León', '50', 'Vallecillo');
INSERT INTO `municipios` VALUES ('998', '19', 'Nuevo León', '51', 'Villaldama');
INSERT INTO `municipios` VALUES ('999', '20', 'Oaxaca', '1', 'Abejones');
INSERT INTO `municipios` VALUES ('1000', '20', 'Oaxaca', '2', 'Acatlán de Pérez Figueroa');
INSERT INTO `municipios` VALUES ('1001', '20', 'Oaxaca', '3', 'Asunción Cacalotepec');
INSERT INTO `municipios` VALUES ('1002', '20', 'Oaxaca', '4', 'Asunción Cuyotepeji');
INSERT INTO `municipios` VALUES ('1003', '20', 'Oaxaca', '5', 'Asunción Ixtaltepec');
INSERT INTO `municipios` VALUES ('1004', '20', 'Oaxaca', '6', 'Asunción Nochixtlán');
INSERT INTO `municipios` VALUES ('1005', '20', 'Oaxaca', '7', 'Asunción Ocotlán');
INSERT INTO `municipios` VALUES ('1006', '20', 'Oaxaca', '8', 'Asunción Tlacolulita');
INSERT INTO `municipios` VALUES ('1007', '20', 'Oaxaca', '9', 'Ayotzintepec');
INSERT INTO `municipios` VALUES ('1008', '20', 'Oaxaca', '10', 'El Barrio de la Soledad');
INSERT INTO `municipios` VALUES ('1009', '20', 'Oaxaca', '11', 'Calihualá');
INSERT INTO `municipios` VALUES ('1010', '20', 'Oaxaca', '12', 'Candelaria Loxicha');
INSERT INTO `municipios` VALUES ('1011', '20', 'Oaxaca', '13', 'Ciénega de Zimatlán');
INSERT INTO `municipios` VALUES ('1012', '20', 'Oaxaca', '14', 'Ciudad Ixtepec');
INSERT INTO `municipios` VALUES ('1013', '20', 'Oaxaca', '15', 'Coatecas Altas');
INSERT INTO `municipios` VALUES ('1014', '20', 'Oaxaca', '16', 'Coicoyán de las Flores');
INSERT INTO `municipios` VALUES ('1015', '20', 'Oaxaca', '17', 'La Compañía');
INSERT INTO `municipios` VALUES ('1016', '20', 'Oaxaca', '18', 'Concepción Buenavista');
INSERT INTO `municipios` VALUES ('1017', '20', 'Oaxaca', '19', 'Concepción Pápalo');
INSERT INTO `municipios` VALUES ('1018', '20', 'Oaxaca', '20', 'Constancia del Rosario');
INSERT INTO `municipios` VALUES ('1019', '20', 'Oaxaca', '21', 'Cosolapa');
INSERT INTO `municipios` VALUES ('1020', '20', 'Oaxaca', '22', 'Cosoltepec');
INSERT INTO `municipios` VALUES ('1021', '20', 'Oaxaca', '23', 'Cuilápam de Guerrero');
INSERT INTO `municipios` VALUES ('1022', '20', 'Oaxaca', '24', 'Cuyamecalco Villa de Zaragoza');
INSERT INTO `municipios` VALUES ('1023', '20', 'Oaxaca', '25', 'Chahuites');
INSERT INTO `municipios` VALUES ('1024', '20', 'Oaxaca', '26', 'Chalcatongo de Hidalgo');
INSERT INTO `municipios` VALUES ('1025', '20', 'Oaxaca', '27', 'Chiquihuitlán de Benito Juárez');
INSERT INTO `municipios` VALUES ('1026', '20', 'Oaxaca', '28', 'Heroica Ciudad de Ejutla de Crespo');
INSERT INTO `municipios` VALUES ('1027', '20', 'Oaxaca', '29', 'Eloxochitlán de Flores Magón');
INSERT INTO `municipios` VALUES ('1028', '20', 'Oaxaca', '30', 'El Espinal');
INSERT INTO `municipios` VALUES ('1029', '20', 'Oaxaca', '31', 'Tamazulápam del Espíritu Santo');
INSERT INTO `municipios` VALUES ('1030', '20', 'Oaxaca', '32', 'Fresnillo de Trujano');
INSERT INTO `municipios` VALUES ('1031', '20', 'Oaxaca', '33', 'Guadalupe Etla');
INSERT INTO `municipios` VALUES ('1032', '20', 'Oaxaca', '34', 'Guadalupe de Ramírez');
INSERT INTO `municipios` VALUES ('1033', '20', 'Oaxaca', '35', 'Guelatao de Juárez');
INSERT INTO `municipios` VALUES ('1034', '20', 'Oaxaca', '36', 'Guevea de Humboldt');
INSERT INTO `municipios` VALUES ('1035', '20', 'Oaxaca', '37', 'Mesones Hidalgo');
INSERT INTO `municipios` VALUES ('1036', '20', 'Oaxaca', '38', 'Villa Hidalgo');
INSERT INTO `municipios` VALUES ('1037', '20', 'Oaxaca', '39', 'Heroica Ciudad de Huajuapan de León');
INSERT INTO `municipios` VALUES ('1038', '20', 'Oaxaca', '40', 'Huautepec');
INSERT INTO `municipios` VALUES ('1039', '20', 'Oaxaca', '41', 'Huautla de Jiménez');
INSERT INTO `municipios` VALUES ('1040', '20', 'Oaxaca', '42', 'Ixtlán de Juárez');
INSERT INTO `municipios` VALUES ('1041', '20', 'Oaxaca', '43', 'Heroica Ciudad de Juchitán de Zaragoza');
INSERT INTO `municipios` VALUES ('1042', '20', 'Oaxaca', '44', 'Loma Bonita');
INSERT INTO `municipios` VALUES ('1043', '20', 'Oaxaca', '45', 'Magdalena Apasco');
INSERT INTO `municipios` VALUES ('1044', '20', 'Oaxaca', '46', 'Magdalena Jaltepec');
INSERT INTO `municipios` VALUES ('1045', '20', 'Oaxaca', '47', 'Santa Magdalena Jicotlán');
INSERT INTO `municipios` VALUES ('1046', '20', 'Oaxaca', '48', 'Magdalena Mixtepec');
INSERT INTO `municipios` VALUES ('1047', '20', 'Oaxaca', '49', 'Magdalena Ocotlán');
INSERT INTO `municipios` VALUES ('1048', '20', 'Oaxaca', '50', 'Magdalena Peñasco');
INSERT INTO `municipios` VALUES ('1049', '20', 'Oaxaca', '51', 'Magdalena Teitipac');
INSERT INTO `municipios` VALUES ('1050', '20', 'Oaxaca', '52', 'Magdalena Tequisistlán');
INSERT INTO `municipios` VALUES ('1051', '20', 'Oaxaca', '53', 'Magdalena Tlacotepec');
INSERT INTO `municipios` VALUES ('1052', '20', 'Oaxaca', '54', 'Magdalena Zahuatlán');
INSERT INTO `municipios` VALUES ('1053', '20', 'Oaxaca', '55', 'Mariscala de Juárez');
INSERT INTO `municipios` VALUES ('1054', '20', 'Oaxaca', '56', 'Mártires de Tacubaya');
INSERT INTO `municipios` VALUES ('1055', '20', 'Oaxaca', '57', 'Matías Romero Avendaño');
INSERT INTO `municipios` VALUES ('1056', '20', 'Oaxaca', '58', 'Mazatlán Villa de Flores');
INSERT INTO `municipios` VALUES ('1057', '20', 'Oaxaca', '59', 'Miahuatlán de Porfirio Díaz');
INSERT INTO `municipios` VALUES ('1058', '20', 'Oaxaca', '60', 'Mixistlán de la Reforma');
INSERT INTO `municipios` VALUES ('1059', '20', 'Oaxaca', '61', 'Monjas');
INSERT INTO `municipios` VALUES ('1060', '20', 'Oaxaca', '62', 'Natividad');
INSERT INTO `municipios` VALUES ('1061', '20', 'Oaxaca', '63', 'Nazareno Etla');
INSERT INTO `municipios` VALUES ('1062', '20', 'Oaxaca', '64', 'Nejapa de Madero');
INSERT INTO `municipios` VALUES ('1063', '20', 'Oaxaca', '65', 'Ixpantepec Nieves');
INSERT INTO `municipios` VALUES ('1064', '20', 'Oaxaca', '66', 'Santiago Niltepec');
INSERT INTO `municipios` VALUES ('1065', '20', 'Oaxaca', '67', 'Oaxaca de Juárez');
INSERT INTO `municipios` VALUES ('1066', '20', 'Oaxaca', '68', 'Ocotlán de Morelos');
INSERT INTO `municipios` VALUES ('1067', '20', 'Oaxaca', '69', 'La Pe');
INSERT INTO `municipios` VALUES ('1068', '20', 'Oaxaca', '70', 'Pinotepa de Don Luis');
INSERT INTO `municipios` VALUES ('1069', '20', 'Oaxaca', '71', 'Pluma Hidalgo');
INSERT INTO `municipios` VALUES ('1070', '20', 'Oaxaca', '72', 'San José del Progreso');
INSERT INTO `municipios` VALUES ('1071', '20', 'Oaxaca', '73', 'Putla Villa de Guerrero');
INSERT INTO `municipios` VALUES ('1072', '20', 'Oaxaca', '74', 'Santa Catarina Quioquitani');
INSERT INTO `municipios` VALUES ('1073', '20', 'Oaxaca', '75', 'Reforma de Pineda');
INSERT INTO `municipios` VALUES ('1074', '20', 'Oaxaca', '76', 'La Reforma');
INSERT INTO `municipios` VALUES ('1075', '20', 'Oaxaca', '77', 'Reyes Etla');
INSERT INTO `municipios` VALUES ('1076', '20', 'Oaxaca', '78', 'Rojas de Cuauhtémoc');
INSERT INTO `municipios` VALUES ('1077', '20', 'Oaxaca', '79', 'Salina Cruz');
INSERT INTO `municipios` VALUES ('1078', '20', 'Oaxaca', '80', 'San Agustín Amatengo');
INSERT INTO `municipios` VALUES ('1079', '20', 'Oaxaca', '81', 'San Agustín Atenango');
INSERT INTO `municipios` VALUES ('1080', '20', 'Oaxaca', '82', 'San Agustín Chayuco');
INSERT INTO `municipios` VALUES ('1081', '20', 'Oaxaca', '83', 'San Agustín de las Juntas');
INSERT INTO `municipios` VALUES ('1082', '20', 'Oaxaca', '84', 'San Agustín Etla');
INSERT INTO `municipios` VALUES ('1083', '20', 'Oaxaca', '85', 'San Agustín Loxicha');
INSERT INTO `municipios` VALUES ('1084', '20', 'Oaxaca', '86', 'San Agustín Tlacotepec');
INSERT INTO `municipios` VALUES ('1085', '20', 'Oaxaca', '87', 'San Agustín Yatareni');
INSERT INTO `municipios` VALUES ('1086', '20', 'Oaxaca', '88', 'San Andrés Cabecera Nueva');
INSERT INTO `municipios` VALUES ('1087', '20', 'Oaxaca', '89', 'San Andrés Dinicuiti');
INSERT INTO `municipios` VALUES ('1088', '20', 'Oaxaca', '90', 'San Andrés Huaxpaltepec');
INSERT INTO `municipios` VALUES ('1089', '20', 'Oaxaca', '91', 'San Andrés Huayápam');
INSERT INTO `municipios` VALUES ('1090', '20', 'Oaxaca', '92', 'San Andrés Ixtlahuaca');
INSERT INTO `municipios` VALUES ('1091', '20', 'Oaxaca', '93', 'San Andrés Lagunas');
INSERT INTO `municipios` VALUES ('1092', '20', 'Oaxaca', '94', 'San Andrés Nuxiño');
INSERT INTO `municipios` VALUES ('1093', '20', 'Oaxaca', '95', 'San Andrés Paxtlán');
INSERT INTO `municipios` VALUES ('1094', '20', 'Oaxaca', '96', 'San Andrés Sinaxtla');
INSERT INTO `municipios` VALUES ('1095', '20', 'Oaxaca', '97', 'San Andrés Solaga');
INSERT INTO `municipios` VALUES ('1096', '20', 'Oaxaca', '98', 'San Andrés Teotilálpam');
INSERT INTO `municipios` VALUES ('1097', '20', 'Oaxaca', '99', 'San Andrés Tepetlapa');
INSERT INTO `municipios` VALUES ('1098', '20', 'Oaxaca', '100', 'San Andrés Yaá');
INSERT INTO `municipios` VALUES ('1099', '20', 'Oaxaca', '101', 'San Andrés Zabache');
INSERT INTO `municipios` VALUES ('1100', '20', 'Oaxaca', '102', 'San Andrés Zautla');
INSERT INTO `municipios` VALUES ('1101', '20', 'Oaxaca', '103', 'San Antonino Castillo Velasco');
INSERT INTO `municipios` VALUES ('1102', '20', 'Oaxaca', '104', 'San Antonino el Alto');
INSERT INTO `municipios` VALUES ('1103', '20', 'Oaxaca', '105', 'San Antonino Monte Verde');
INSERT INTO `municipios` VALUES ('1104', '20', 'Oaxaca', '106', 'San Antonio Acutla');
INSERT INTO `municipios` VALUES ('1105', '20', 'Oaxaca', '107', 'San Antonio de la Cal');
INSERT INTO `municipios` VALUES ('1106', '20', 'Oaxaca', '108', 'San Antonio Huitepec');
INSERT INTO `municipios` VALUES ('1107', '20', 'Oaxaca', '109', 'San Antonio Nanahuatípam');
INSERT INTO `municipios` VALUES ('1108', '20', 'Oaxaca', '110', 'San Antonio Sinicahua');
INSERT INTO `municipios` VALUES ('1109', '20', 'Oaxaca', '111', 'San Antonio Tepetlapa');
INSERT INTO `municipios` VALUES ('1110', '20', 'Oaxaca', '112', 'San Baltazar Chichicápam');
INSERT INTO `municipios` VALUES ('1111', '20', 'Oaxaca', '113', 'San Baltazar Loxicha');
INSERT INTO `municipios` VALUES ('1112', '20', 'Oaxaca', '114', 'San Baltazar Yatzachi el Bajo');
INSERT INTO `municipios` VALUES ('1113', '20', 'Oaxaca', '115', 'San Bartolo Coyotepec');
INSERT INTO `municipios` VALUES ('1114', '20', 'Oaxaca', '116', 'San Bartolomé Ayautla');
INSERT INTO `municipios` VALUES ('1115', '20', 'Oaxaca', '117', 'San Bartolomé Loxicha');
INSERT INTO `municipios` VALUES ('1116', '20', 'Oaxaca', '118', 'San Bartolomé Quialana');
INSERT INTO `municipios` VALUES ('1117', '20', 'Oaxaca', '119', 'San Bartolomé Yucuañe');
INSERT INTO `municipios` VALUES ('1118', '20', 'Oaxaca', '120', 'San Bartolomé Zoogocho');
INSERT INTO `municipios` VALUES ('1119', '20', 'Oaxaca', '121', 'San Bartolo Soyaltepec');
INSERT INTO `municipios` VALUES ('1120', '20', 'Oaxaca', '122', 'San Bartolo Yautepec');
INSERT INTO `municipios` VALUES ('1121', '20', 'Oaxaca', '123', 'San Bernardo Mixtepec');
INSERT INTO `municipios` VALUES ('1122', '20', 'Oaxaca', '124', 'San Blas Atempa');
INSERT INTO `municipios` VALUES ('1123', '20', 'Oaxaca', '125', 'San Carlos Yautepec');
INSERT INTO `municipios` VALUES ('1124', '20', 'Oaxaca', '126', 'San Cristóbal Amatlán');
INSERT INTO `municipios` VALUES ('1125', '20', 'Oaxaca', '127', 'San Cristóbal Amoltepec');
INSERT INTO `municipios` VALUES ('1126', '20', 'Oaxaca', '128', 'San Cristóbal Lachirioag');
INSERT INTO `municipios` VALUES ('1127', '20', 'Oaxaca', '129', 'San Cristóbal Suchixtlahuaca');
INSERT INTO `municipios` VALUES ('1128', '20', 'Oaxaca', '130', 'San Dionisio del Mar');
INSERT INTO `municipios` VALUES ('1129', '20', 'Oaxaca', '131', 'San Dionisio Ocotepec');
INSERT INTO `municipios` VALUES ('1130', '20', 'Oaxaca', '132', 'San Dionisio Ocotlán');
INSERT INTO `municipios` VALUES ('1131', '20', 'Oaxaca', '133', 'San Esteban Atatlahuca');
INSERT INTO `municipios` VALUES ('1132', '20', 'Oaxaca', '134', 'San Felipe Jalapa de Díaz');
INSERT INTO `municipios` VALUES ('1133', '20', 'Oaxaca', '135', 'San Felipe Tejalápam');
INSERT INTO `municipios` VALUES ('1134', '20', 'Oaxaca', '136', 'San Felipe Usila');
INSERT INTO `municipios` VALUES ('1135', '20', 'Oaxaca', '137', 'San Francisco Cahuacuá');
INSERT INTO `municipios` VALUES ('1136', '20', 'Oaxaca', '138', 'San Francisco Cajonos');
INSERT INTO `municipios` VALUES ('1137', '20', 'Oaxaca', '139', 'San Francisco Chapulapa');
INSERT INTO `municipios` VALUES ('1138', '20', 'Oaxaca', '140', 'San Francisco Chindúa');
INSERT INTO `municipios` VALUES ('1139', '20', 'Oaxaca', '141', 'San Francisco del Mar');
INSERT INTO `municipios` VALUES ('1140', '20', 'Oaxaca', '142', 'San Francisco Huehuetlán');
INSERT INTO `municipios` VALUES ('1141', '20', 'Oaxaca', '143', 'San Francisco Ixhuatán');
INSERT INTO `municipios` VALUES ('1142', '20', 'Oaxaca', '144', 'San Francisco Jaltepetongo');
INSERT INTO `municipios` VALUES ('1143', '20', 'Oaxaca', '145', 'San Francisco Lachigoló');
INSERT INTO `municipios` VALUES ('1144', '20', 'Oaxaca', '146', 'San Francisco Logueche');
INSERT INTO `municipios` VALUES ('1145', '20', 'Oaxaca', '147', 'San Francisco Nuxaño');
INSERT INTO `municipios` VALUES ('1146', '20', 'Oaxaca', '148', 'San Francisco Ozolotepec');
INSERT INTO `municipios` VALUES ('1147', '20', 'Oaxaca', '149', 'San Francisco Sola');
INSERT INTO `municipios` VALUES ('1148', '20', 'Oaxaca', '150', 'San Francisco Telixtlahuaca');
INSERT INTO `municipios` VALUES ('1149', '20', 'Oaxaca', '151', 'San Francisco Teopan');
INSERT INTO `municipios` VALUES ('1150', '20', 'Oaxaca', '152', 'San Francisco Tlapancingo');
INSERT INTO `municipios` VALUES ('1151', '20', 'Oaxaca', '153', 'San Gabriel Mixtepec');
INSERT INTO `municipios` VALUES ('1152', '20', 'Oaxaca', '154', 'San Ildefonso Amatlán');
INSERT INTO `municipios` VALUES ('1153', '20', 'Oaxaca', '155', 'San Ildefonso Sola');
INSERT INTO `municipios` VALUES ('1154', '20', 'Oaxaca', '156', 'San Ildefonso Villa Alta');
INSERT INTO `municipios` VALUES ('1155', '20', 'Oaxaca', '157', 'San Jacinto Amilpas');
INSERT INTO `municipios` VALUES ('1156', '20', 'Oaxaca', '158', 'San Jacinto Tlacotepec');
INSERT INTO `municipios` VALUES ('1157', '20', 'Oaxaca', '159', 'San Jerónimo Coatlán');
INSERT INTO `municipios` VALUES ('1158', '20', 'Oaxaca', '160', 'San Jerónimo Silacayoapilla');
INSERT INTO `municipios` VALUES ('1159', '20', 'Oaxaca', '161', 'San Jerónimo Sosola');
INSERT INTO `municipios` VALUES ('1160', '20', 'Oaxaca', '162', 'San Jerónimo Taviche');
INSERT INTO `municipios` VALUES ('1161', '20', 'Oaxaca', '163', 'San Jerónimo Tecóatl');
INSERT INTO `municipios` VALUES ('1162', '20', 'Oaxaca', '164', 'San Jorge Nuchita');
INSERT INTO `municipios` VALUES ('1163', '20', 'Oaxaca', '165', 'San José Ayuquila');
INSERT INTO `municipios` VALUES ('1164', '20', 'Oaxaca', '166', 'San José Chiltepec');
INSERT INTO `municipios` VALUES ('1165', '20', 'Oaxaca', '167', 'San José del Peñasco');
INSERT INTO `municipios` VALUES ('1166', '20', 'Oaxaca', '168', 'San José Estancia Grande');
INSERT INTO `municipios` VALUES ('1167', '20', 'Oaxaca', '169', 'San José Independencia');
INSERT INTO `municipios` VALUES ('1168', '20', 'Oaxaca', '170', 'San José Lachiguiri');
INSERT INTO `municipios` VALUES ('1169', '20', 'Oaxaca', '171', 'San José Tenango');
INSERT INTO `municipios` VALUES ('1170', '20', 'Oaxaca', '172', 'San Juan Achiutla');
INSERT INTO `municipios` VALUES ('1171', '20', 'Oaxaca', '173', 'San Juan Atepec');
INSERT INTO `municipios` VALUES ('1172', '20', 'Oaxaca', '174', 'Ánimas Trujano');
INSERT INTO `municipios` VALUES ('1173', '20', 'Oaxaca', '175', 'San Juan Bautista Atatlahuca');
INSERT INTO `municipios` VALUES ('1174', '20', 'Oaxaca', '176', 'San Juan Bautista Coixtlahuaca');
INSERT INTO `municipios` VALUES ('1175', '20', 'Oaxaca', '177', 'San Juan Bautista Cuicatlán');
INSERT INTO `municipios` VALUES ('1176', '20', 'Oaxaca', '178', 'San Juan Bautista Guelache');
INSERT INTO `municipios` VALUES ('1177', '20', 'Oaxaca', '179', 'San Juan Bautista Jayacatlán');
INSERT INTO `municipios` VALUES ('1178', '20', 'Oaxaca', '180', 'San Juan Bautista Lo de Soto');
INSERT INTO `municipios` VALUES ('1179', '20', 'Oaxaca', '181', 'San Juan Bautista Suchitepec');
INSERT INTO `municipios` VALUES ('1180', '20', 'Oaxaca', '182', 'San Juan Bautista Tlacoatzintepec');
INSERT INTO `municipios` VALUES ('1181', '20', 'Oaxaca', '183', 'San Juan Bautista Tlachichilco');
INSERT INTO `municipios` VALUES ('1182', '20', 'Oaxaca', '184', 'San Juan Bautista Tuxtepec');
INSERT INTO `municipios` VALUES ('1183', '20', 'Oaxaca', '185', 'San Juan Cacahuatepec');
INSERT INTO `municipios` VALUES ('1184', '20', 'Oaxaca', '186', 'San Juan Cieneguilla');
INSERT INTO `municipios` VALUES ('1185', '20', 'Oaxaca', '187', 'San Juan Coatzóspam');
INSERT INTO `municipios` VALUES ('1186', '20', 'Oaxaca', '188', 'San Juan Colorado');
INSERT INTO `municipios` VALUES ('1187', '20', 'Oaxaca', '189', 'San Juan Comaltepec');
INSERT INTO `municipios` VALUES ('1188', '20', 'Oaxaca', '190', 'San Juan Cotzocón');
INSERT INTO `municipios` VALUES ('1189', '20', 'Oaxaca', '191', 'San Juan Chicomezúchil');
INSERT INTO `municipios` VALUES ('1190', '20', 'Oaxaca', '192', 'San Juan Chilateca');
INSERT INTO `municipios` VALUES ('1191', '20', 'Oaxaca', '193', 'San Juan del Estado');
INSERT INTO `municipios` VALUES ('1192', '20', 'Oaxaca', '194', 'San Juan del Río');
INSERT INTO `municipios` VALUES ('1193', '20', 'Oaxaca', '195', 'San Juan Diuxi');
INSERT INTO `municipios` VALUES ('1194', '20', 'Oaxaca', '196', 'San Juan Evangelista Analco');
INSERT INTO `municipios` VALUES ('1195', '20', 'Oaxaca', '197', 'San Juan Guelavía');
INSERT INTO `municipios` VALUES ('1196', '20', 'Oaxaca', '198', 'San Juan Guichicovi');
INSERT INTO `municipios` VALUES ('1197', '20', 'Oaxaca', '199', 'San Juan Ihualtepec');
INSERT INTO `municipios` VALUES ('1198', '20', 'Oaxaca', '200', 'San Juan Juquila Mixes');
INSERT INTO `municipios` VALUES ('1199', '20', 'Oaxaca', '201', 'San Juan Juquila Vijanos');
INSERT INTO `municipios` VALUES ('1200', '20', 'Oaxaca', '202', 'San Juan Lachao');
INSERT INTO `municipios` VALUES ('1201', '20', 'Oaxaca', '203', 'San Juan Lachigalla');
INSERT INTO `municipios` VALUES ('1202', '20', 'Oaxaca', '204', 'San Juan Lajarcia');
INSERT INTO `municipios` VALUES ('1203', '20', 'Oaxaca', '205', 'San Juan Lalana');
INSERT INTO `municipios` VALUES ('1204', '20', 'Oaxaca', '206', 'San Juan de los Cués');
INSERT INTO `municipios` VALUES ('1205', '20', 'Oaxaca', '207', 'San Juan Mazatlán');
INSERT INTO `municipios` VALUES ('1206', '20', 'Oaxaca', '208', 'San Juan Mixtepec');
INSERT INTO `municipios` VALUES ('1207', '20', 'Oaxaca', '209', 'San Juan Mixtepec');
INSERT INTO `municipios` VALUES ('1208', '20', 'Oaxaca', '210', 'San Juan Ñumí');
INSERT INTO `municipios` VALUES ('1209', '20', 'Oaxaca', '211', 'San Juan Ozolotepec');
INSERT INTO `municipios` VALUES ('1210', '20', 'Oaxaca', '212', 'San Juan Petlapa');
INSERT INTO `municipios` VALUES ('1211', '20', 'Oaxaca', '213', 'San Juan Quiahije');
INSERT INTO `municipios` VALUES ('1212', '20', 'Oaxaca', '214', 'San Juan Quiotepec');
INSERT INTO `municipios` VALUES ('1213', '20', 'Oaxaca', '215', 'San Juan Sayultepec');
INSERT INTO `municipios` VALUES ('1214', '20', 'Oaxaca', '216', 'San Juan Tabaá');
INSERT INTO `municipios` VALUES ('1215', '20', 'Oaxaca', '217', 'San Juan Tamazola');
INSERT INTO `municipios` VALUES ('1216', '20', 'Oaxaca', '218', 'San Juan Teita');
INSERT INTO `municipios` VALUES ('1217', '20', 'Oaxaca', '219', 'San Juan Teitipac');
INSERT INTO `municipios` VALUES ('1218', '20', 'Oaxaca', '220', 'San Juan Tepeuxila');
INSERT INTO `municipios` VALUES ('1219', '20', 'Oaxaca', '221', 'San Juan Teposcolula');
INSERT INTO `municipios` VALUES ('1220', '20', 'Oaxaca', '222', 'San Juan Yaeé');
INSERT INTO `municipios` VALUES ('1221', '20', 'Oaxaca', '223', 'San Juan Yatzona');
INSERT INTO `municipios` VALUES ('1222', '20', 'Oaxaca', '224', 'San Juan Yucuita');
INSERT INTO `municipios` VALUES ('1223', '20', 'Oaxaca', '225', 'San Lorenzo');
INSERT INTO `municipios` VALUES ('1224', '20', 'Oaxaca', '226', 'San Lorenzo Albarradas');
INSERT INTO `municipios` VALUES ('1225', '20', 'Oaxaca', '227', 'San Lorenzo Cacaotepec');
INSERT INTO `municipios` VALUES ('1226', '20', 'Oaxaca', '228', 'San Lorenzo Cuaunecuiltitla');
INSERT INTO `municipios` VALUES ('1227', '20', 'Oaxaca', '229', 'San Lorenzo Texmelúcan');
INSERT INTO `municipios` VALUES ('1228', '20', 'Oaxaca', '230', 'San Lorenzo Victoria');
INSERT INTO `municipios` VALUES ('1229', '20', 'Oaxaca', '231', 'San Lucas Camotlán');
INSERT INTO `municipios` VALUES ('1230', '20', 'Oaxaca', '232', 'San Lucas Ojitlán');
INSERT INTO `municipios` VALUES ('1231', '20', 'Oaxaca', '233', 'San Lucas Quiaviní');
INSERT INTO `municipios` VALUES ('1232', '20', 'Oaxaca', '234', 'San Lucas Zoquiápam');
INSERT INTO `municipios` VALUES ('1233', '20', 'Oaxaca', '235', 'San Luis Amatlán');
INSERT INTO `municipios` VALUES ('1234', '20', 'Oaxaca', '236', 'San Marcial Ozolotepec');
INSERT INTO `municipios` VALUES ('1235', '20', 'Oaxaca', '237', 'San Marcos Arteaga');
INSERT INTO `municipios` VALUES ('1236', '20', 'Oaxaca', '238', 'San Martín de los Cansecos');
INSERT INTO `municipios` VALUES ('1237', '20', 'Oaxaca', '239', 'San Martín Huamelúlpam');
INSERT INTO `municipios` VALUES ('1238', '20', 'Oaxaca', '240', 'San Martín Itunyoso');
INSERT INTO `municipios` VALUES ('1239', '20', 'Oaxaca', '241', 'San Martín Lachilá');
INSERT INTO `municipios` VALUES ('1240', '20', 'Oaxaca', '242', 'San Martín Peras');
INSERT INTO `municipios` VALUES ('1241', '20', 'Oaxaca', '243', 'San Martín Tilcajete');
INSERT INTO `municipios` VALUES ('1242', '20', 'Oaxaca', '244', 'San Martín Toxpalan');
INSERT INTO `municipios` VALUES ('1243', '20', 'Oaxaca', '245', 'San Martín Zacatepec');
INSERT INTO `municipios` VALUES ('1244', '20', 'Oaxaca', '246', 'San Mateo Cajonos');
INSERT INTO `municipios` VALUES ('1245', '20', 'Oaxaca', '247', 'Capulálpam de Méndez');
INSERT INTO `municipios` VALUES ('1246', '20', 'Oaxaca', '248', 'San Mateo del Mar');
INSERT INTO `municipios` VALUES ('1247', '20', 'Oaxaca', '249', 'San Mateo Yoloxochitlán');
INSERT INTO `municipios` VALUES ('1248', '20', 'Oaxaca', '250', 'San Mateo Etlatongo');
INSERT INTO `municipios` VALUES ('1249', '20', 'Oaxaca', '251', 'San Mateo Nejápam');
INSERT INTO `municipios` VALUES ('1250', '20', 'Oaxaca', '252', 'San Mateo Peñasco');
INSERT INTO `municipios` VALUES ('1251', '20', 'Oaxaca', '253', 'San Mateo Piñas');
INSERT INTO `municipios` VALUES ('1252', '20', 'Oaxaca', '254', 'San Mateo Río Hondo');
INSERT INTO `municipios` VALUES ('1253', '20', 'Oaxaca', '255', 'San Mateo Sindihui');
INSERT INTO `municipios` VALUES ('1254', '20', 'Oaxaca', '256', 'San Mateo Tlapiltepec');
INSERT INTO `municipios` VALUES ('1255', '20', 'Oaxaca', '257', 'San Melchor Betaza');
INSERT INTO `municipios` VALUES ('1256', '20', 'Oaxaca', '258', 'San Miguel Achiutla');
INSERT INTO `municipios` VALUES ('1257', '20', 'Oaxaca', '259', 'San Miguel Ahuehuetitlán');
INSERT INTO `municipios` VALUES ('1258', '20', 'Oaxaca', '260', 'San Miguel Aloápam');
INSERT INTO `municipios` VALUES ('1259', '20', 'Oaxaca', '261', 'San Miguel Amatitlán');
INSERT INTO `municipios` VALUES ('1260', '20', 'Oaxaca', '262', 'San Miguel Amatlán');
INSERT INTO `municipios` VALUES ('1261', '20', 'Oaxaca', '263', 'San Miguel Coatlán');
INSERT INTO `municipios` VALUES ('1262', '20', 'Oaxaca', '264', 'San Miguel Chicahua');
INSERT INTO `municipios` VALUES ('1263', '20', 'Oaxaca', '265', 'San Miguel Chimalapa');
INSERT INTO `municipios` VALUES ('1264', '20', 'Oaxaca', '266', 'San Miguel del Puerto');
INSERT INTO `municipios` VALUES ('1265', '20', 'Oaxaca', '267', 'San Miguel del Río');
INSERT INTO `municipios` VALUES ('1266', '20', 'Oaxaca', '268', 'San Miguel Ejutla');
INSERT INTO `municipios` VALUES ('1267', '20', 'Oaxaca', '269', 'San Miguel el Grande');
INSERT INTO `municipios` VALUES ('1268', '20', 'Oaxaca', '270', 'San Miguel Huautla');
INSERT INTO `municipios` VALUES ('1269', '20', 'Oaxaca', '271', 'San Miguel Mixtepec');
INSERT INTO `municipios` VALUES ('1270', '20', 'Oaxaca', '272', 'San Miguel Panixtlahuaca');
INSERT INTO `municipios` VALUES ('1271', '20', 'Oaxaca', '273', 'San Miguel Peras');
INSERT INTO `municipios` VALUES ('1272', '20', 'Oaxaca', '274', 'San Miguel Piedras');
INSERT INTO `municipios` VALUES ('1273', '20', 'Oaxaca', '275', 'San Miguel Quetzaltepec');
INSERT INTO `municipios` VALUES ('1274', '20', 'Oaxaca', '276', 'San Miguel Santa Flor');
INSERT INTO `municipios` VALUES ('1275', '20', 'Oaxaca', '277', 'Villa Sola de Vega');
INSERT INTO `municipios` VALUES ('1276', '20', 'Oaxaca', '278', 'San Miguel Soyaltepec');
INSERT INTO `municipios` VALUES ('1277', '20', 'Oaxaca', '279', 'San Miguel Suchixtepec');
INSERT INTO `municipios` VALUES ('1278', '20', 'Oaxaca', '280', 'Villa Talea de Castro');
INSERT INTO `municipios` VALUES ('1279', '20', 'Oaxaca', '281', 'San Miguel Tecomatlán');
INSERT INTO `municipios` VALUES ('1280', '20', 'Oaxaca', '282', 'San Miguel Tenango');
INSERT INTO `municipios` VALUES ('1281', '20', 'Oaxaca', '283', 'San Miguel Tequixtepec');
INSERT INTO `municipios` VALUES ('1282', '20', 'Oaxaca', '284', 'San Miguel Tilquiápam');
INSERT INTO `municipios` VALUES ('1283', '20', 'Oaxaca', '285', 'San Miguel Tlacamama');
INSERT INTO `municipios` VALUES ('1284', '20', 'Oaxaca', '286', 'San Miguel Tlacotepec');
INSERT INTO `municipios` VALUES ('1285', '20', 'Oaxaca', '287', 'San Miguel Tulancingo');
INSERT INTO `municipios` VALUES ('1286', '20', 'Oaxaca', '288', 'San Miguel Yotao');
INSERT INTO `municipios` VALUES ('1287', '20', 'Oaxaca', '289', 'San Nicolás');
INSERT INTO `municipios` VALUES ('1288', '20', 'Oaxaca', '290', 'San Nicolás Hidalgo');
INSERT INTO `municipios` VALUES ('1289', '20', 'Oaxaca', '291', 'San Pablo Coatlán');
INSERT INTO `municipios` VALUES ('1290', '20', 'Oaxaca', '292', 'San Pablo Cuatro Venados');
INSERT INTO `municipios` VALUES ('1291', '20', 'Oaxaca', '293', 'San Pablo Etla');
INSERT INTO `municipios` VALUES ('1292', '20', 'Oaxaca', '294', 'San Pablo Huitzo');
INSERT INTO `municipios` VALUES ('1293', '20', 'Oaxaca', '295', 'San Pablo Huixtepec');
INSERT INTO `municipios` VALUES ('1294', '20', 'Oaxaca', '296', 'San Pablo Macuiltianguis');
INSERT INTO `municipios` VALUES ('1295', '20', 'Oaxaca', '297', 'San Pablo Tijaltepec');
INSERT INTO `municipios` VALUES ('1296', '20', 'Oaxaca', '298', 'San Pablo Villa de Mitla');
INSERT INTO `municipios` VALUES ('1297', '20', 'Oaxaca', '299', 'San Pablo Yaganiza');
INSERT INTO `municipios` VALUES ('1298', '20', 'Oaxaca', '300', 'San Pedro Amuzgos');
INSERT INTO `municipios` VALUES ('1299', '20', 'Oaxaca', '301', 'San Pedro Apóstol');
INSERT INTO `municipios` VALUES ('1300', '20', 'Oaxaca', '302', 'San Pedro Atoyac');
INSERT INTO `municipios` VALUES ('1301', '20', 'Oaxaca', '303', 'San Pedro Cajonos');
INSERT INTO `municipios` VALUES ('1302', '20', 'Oaxaca', '304', 'San Pedro Coxcaltepec Cántaros');
INSERT INTO `municipios` VALUES ('1303', '20', 'Oaxaca', '305', 'San Pedro Comitancillo');
INSERT INTO `municipios` VALUES ('1304', '20', 'Oaxaca', '306', 'San Pedro el Alto');
INSERT INTO `municipios` VALUES ('1305', '20', 'Oaxaca', '307', 'San Pedro Huamelula');
INSERT INTO `municipios` VALUES ('1306', '20', 'Oaxaca', '308', 'San Pedro Huilotepec');
INSERT INTO `municipios` VALUES ('1307', '20', 'Oaxaca', '309', 'San Pedro Ixcatlán');
INSERT INTO `municipios` VALUES ('1308', '20', 'Oaxaca', '310', 'San Pedro Ixtlahuaca');
INSERT INTO `municipios` VALUES ('1309', '20', 'Oaxaca', '311', 'San Pedro Jaltepetongo');
INSERT INTO `municipios` VALUES ('1310', '20', 'Oaxaca', '312', 'San Pedro Jicayán');
INSERT INTO `municipios` VALUES ('1311', '20', 'Oaxaca', '313', 'San Pedro Jocotipac');
INSERT INTO `municipios` VALUES ('1312', '20', 'Oaxaca', '314', 'San Pedro Juchatengo');
INSERT INTO `municipios` VALUES ('1313', '20', 'Oaxaca', '315', 'San Pedro Mártir');
INSERT INTO `municipios` VALUES ('1314', '20', 'Oaxaca', '316', 'San Pedro Mártir Quiechapa');
INSERT INTO `municipios` VALUES ('1315', '20', 'Oaxaca', '317', 'San Pedro Mártir Yucuxaco');
INSERT INTO `municipios` VALUES ('1316', '20', 'Oaxaca', '318', 'San Pedro Mixtepec');
INSERT INTO `municipios` VALUES ('1317', '20', 'Oaxaca', '319', 'San Pedro Mixtepec');
INSERT INTO `municipios` VALUES ('1318', '20', 'Oaxaca', '320', 'San Pedro Molinos');
INSERT INTO `municipios` VALUES ('1319', '20', 'Oaxaca', '321', 'San Pedro Nopala');
INSERT INTO `municipios` VALUES ('1320', '20', 'Oaxaca', '322', 'San Pedro Ocopetatillo');
INSERT INTO `municipios` VALUES ('1321', '20', 'Oaxaca', '323', 'San Pedro Ocotepec');
INSERT INTO `municipios` VALUES ('1322', '20', 'Oaxaca', '324', 'San Pedro Pochutla');
INSERT INTO `municipios` VALUES ('1323', '20', 'Oaxaca', '325', 'San Pedro Quiatoni');
INSERT INTO `municipios` VALUES ('1324', '20', 'Oaxaca', '326', 'San Pedro Sochiápam');
INSERT INTO `municipios` VALUES ('1325', '20', 'Oaxaca', '327', 'San Pedro Tapanatepec');
INSERT INTO `municipios` VALUES ('1326', '20', 'Oaxaca', '328', 'San Pedro Taviche');
INSERT INTO `municipios` VALUES ('1327', '20', 'Oaxaca', '329', 'San Pedro Teozacoalco');
INSERT INTO `municipios` VALUES ('1328', '20', 'Oaxaca', '330', 'San Pedro Teutila');
INSERT INTO `municipios` VALUES ('1329', '20', 'Oaxaca', '331', 'San Pedro Tidaá');
INSERT INTO `municipios` VALUES ('1330', '20', 'Oaxaca', '332', 'San Pedro Topiltepec');
INSERT INTO `municipios` VALUES ('1331', '20', 'Oaxaca', '333', 'San Pedro Totolápam');
INSERT INTO `municipios` VALUES ('1332', '20', 'Oaxaca', '334', 'Villa de Tututepec de Melchor Ocampo');
INSERT INTO `municipios` VALUES ('1333', '20', 'Oaxaca', '335', 'San Pedro Yaneri');
INSERT INTO `municipios` VALUES ('1334', '20', 'Oaxaca', '336', 'San Pedro Yólox');
INSERT INTO `municipios` VALUES ('1335', '20', 'Oaxaca', '337', 'San Pedro y San Pablo Ayutla');
INSERT INTO `municipios` VALUES ('1336', '20', 'Oaxaca', '338', 'Villa de Etla');
INSERT INTO `municipios` VALUES ('1337', '20', 'Oaxaca', '339', 'San Pedro y San Pablo Teposcolula');
INSERT INTO `municipios` VALUES ('1338', '20', 'Oaxaca', '340', 'San Pedro y San Pablo Tequixtepec');
INSERT INTO `municipios` VALUES ('1339', '20', 'Oaxaca', '341', 'San Pedro Yucunama');
INSERT INTO `municipios` VALUES ('1340', '20', 'Oaxaca', '342', 'San Raymundo Jalpan');
INSERT INTO `municipios` VALUES ('1341', '20', 'Oaxaca', '343', 'San Sebastián Abasolo');
INSERT INTO `municipios` VALUES ('1342', '20', 'Oaxaca', '344', 'San Sebastián Coatlán');
INSERT INTO `municipios` VALUES ('1343', '20', 'Oaxaca', '345', 'San Sebastián Ixcapa');
INSERT INTO `municipios` VALUES ('1344', '20', 'Oaxaca', '346', 'San Sebastián Nicananduta');
INSERT INTO `municipios` VALUES ('1345', '20', 'Oaxaca', '347', 'San Sebastián Río Hondo');
INSERT INTO `municipios` VALUES ('1346', '20', 'Oaxaca', '348', 'San Sebastián Tecomaxtlahuaca');
INSERT INTO `municipios` VALUES ('1347', '20', 'Oaxaca', '349', 'San Sebastián Teitipac');
INSERT INTO `municipios` VALUES ('1348', '20', 'Oaxaca', '350', 'San Sebastián Tutla');
INSERT INTO `municipios` VALUES ('1349', '20', 'Oaxaca', '351', 'San Simón Almolongas');
INSERT INTO `municipios` VALUES ('1350', '20', 'Oaxaca', '352', 'San Simón Zahuatlán');
INSERT INTO `municipios` VALUES ('1351', '20', 'Oaxaca', '353', 'Santa Ana');
INSERT INTO `municipios` VALUES ('1352', '20', 'Oaxaca', '354', 'Santa Ana Ateixtlahuaca');
INSERT INTO `municipios` VALUES ('1353', '20', 'Oaxaca', '355', 'Santa Ana Cuauhtémoc');
INSERT INTO `municipios` VALUES ('1354', '20', 'Oaxaca', '356', 'Santa Ana del Valle');
INSERT INTO `municipios` VALUES ('1355', '20', 'Oaxaca', '357', 'Santa Ana Tavela');
INSERT INTO `municipios` VALUES ('1356', '20', 'Oaxaca', '358', 'Santa Ana Tlapacoyan');
INSERT INTO `municipios` VALUES ('1357', '20', 'Oaxaca', '359', 'Santa Ana Yareni');
INSERT INTO `municipios` VALUES ('1358', '20', 'Oaxaca', '360', 'Santa Ana Zegache');
INSERT INTO `municipios` VALUES ('1359', '20', 'Oaxaca', '361', 'Santa Catalina Quierí');
INSERT INTO `municipios` VALUES ('1360', '20', 'Oaxaca', '362', 'Santa Catarina Cuixtla');
INSERT INTO `municipios` VALUES ('1361', '20', 'Oaxaca', '363', 'Santa Catarina Ixtepeji');
INSERT INTO `municipios` VALUES ('1362', '20', 'Oaxaca', '364', 'Santa Catarina Juquila');
INSERT INTO `municipios` VALUES ('1363', '20', 'Oaxaca', '365', 'Santa Catarina Lachatao');
INSERT INTO `municipios` VALUES ('1364', '20', 'Oaxaca', '366', 'Santa Catarina Loxicha');
INSERT INTO `municipios` VALUES ('1365', '20', 'Oaxaca', '367', 'Santa Catarina Mechoacán');
INSERT INTO `municipios` VALUES ('1366', '20', 'Oaxaca', '368', 'Santa Catarina Minas');
INSERT INTO `municipios` VALUES ('1367', '20', 'Oaxaca', '369', 'Santa Catarina Quiané');
INSERT INTO `municipios` VALUES ('1368', '20', 'Oaxaca', '370', 'Santa Catarina Tayata');
INSERT INTO `municipios` VALUES ('1369', '20', 'Oaxaca', '371', 'Santa Catarina Ticuá');
INSERT INTO `municipios` VALUES ('1370', '20', 'Oaxaca', '372', 'Santa Catarina Yosonotú');
INSERT INTO `municipios` VALUES ('1371', '20', 'Oaxaca', '373', 'Santa Catarina Zapoquila');
INSERT INTO `municipios` VALUES ('1372', '20', 'Oaxaca', '374', 'Santa Cruz Acatepec');
INSERT INTO `municipios` VALUES ('1373', '20', 'Oaxaca', '375', 'Santa Cruz Amilpas');
INSERT INTO `municipios` VALUES ('1374', '20', 'Oaxaca', '376', 'Santa Cruz de Bravo');
INSERT INTO `municipios` VALUES ('1375', '20', 'Oaxaca', '377', 'Santa Cruz Itundujia');
INSERT INTO `municipios` VALUES ('1376', '20', 'Oaxaca', '378', 'Santa Cruz Mixtepec');
INSERT INTO `municipios` VALUES ('1377', '20', 'Oaxaca', '379', 'Santa Cruz Nundaco');
INSERT INTO `municipios` VALUES ('1378', '20', 'Oaxaca', '380', 'Santa Cruz Papalutla');
INSERT INTO `municipios` VALUES ('1379', '20', 'Oaxaca', '381', 'Santa Cruz Tacache de Mina');
INSERT INTO `municipios` VALUES ('1380', '20', 'Oaxaca', '382', 'Santa Cruz Tacahua');
INSERT INTO `municipios` VALUES ('1381', '20', 'Oaxaca', '383', 'Santa Cruz Tayata');
INSERT INTO `municipios` VALUES ('1382', '20', 'Oaxaca', '384', 'Santa Cruz Xitla');
INSERT INTO `municipios` VALUES ('1383', '20', 'Oaxaca', '385', 'Santa Cruz Xoxocotlán');
INSERT INTO `municipios` VALUES ('1384', '20', 'Oaxaca', '386', 'Santa Cruz Zenzontepec');
INSERT INTO `municipios` VALUES ('1385', '20', 'Oaxaca', '387', 'Santa Gertrudis');
INSERT INTO `municipios` VALUES ('1386', '20', 'Oaxaca', '388', 'Santa Inés del Monte');
INSERT INTO `municipios` VALUES ('1387', '20', 'Oaxaca', '389', 'Santa Inés Yatzeche');
INSERT INTO `municipios` VALUES ('1388', '20', 'Oaxaca', '390', 'Santa Lucía del Camino');
INSERT INTO `municipios` VALUES ('1389', '20', 'Oaxaca', '391', 'Santa Lucía Miahuatlán');
INSERT INTO `municipios` VALUES ('1390', '20', 'Oaxaca', '392', 'Santa Lucía Monteverde');
INSERT INTO `municipios` VALUES ('1391', '20', 'Oaxaca', '393', 'Santa Lucía Ocotlán');
INSERT INTO `municipios` VALUES ('1392', '20', 'Oaxaca', '394', 'Santa María Alotepec');
INSERT INTO `municipios` VALUES ('1393', '20', 'Oaxaca', '395', 'Santa María Apazco');
INSERT INTO `municipios` VALUES ('1394', '20', 'Oaxaca', '396', 'Santa María la Asunción');
INSERT INTO `municipios` VALUES ('1395', '20', 'Oaxaca', '397', 'Heroica Ciudad de Tlaxiaco');
INSERT INTO `municipios` VALUES ('1396', '20', 'Oaxaca', '398', 'Ayoquezco de Aldama');
INSERT INTO `municipios` VALUES ('1397', '20', 'Oaxaca', '399', 'Santa María Atzompa');
INSERT INTO `municipios` VALUES ('1398', '20', 'Oaxaca', '400', 'Santa María Camotlán');
INSERT INTO `municipios` VALUES ('1399', '20', 'Oaxaca', '401', 'Santa María Colotepec');
INSERT INTO `municipios` VALUES ('1400', '20', 'Oaxaca', '402', 'Santa María Cortijo');
INSERT INTO `municipios` VALUES ('1401', '20', 'Oaxaca', '403', 'Santa María Coyotepec');
INSERT INTO `municipios` VALUES ('1402', '20', 'Oaxaca', '404', 'Santa María Chachoápam');
INSERT INTO `municipios` VALUES ('1403', '20', 'Oaxaca', '405', 'Villa de Chilapa de Díaz');
INSERT INTO `municipios` VALUES ('1404', '20', 'Oaxaca', '406', 'Santa María Chilchotla');
INSERT INTO `municipios` VALUES ('1405', '20', 'Oaxaca', '407', 'Santa María Chimalapa');
INSERT INTO `municipios` VALUES ('1406', '20', 'Oaxaca', '408', 'Santa María del Rosario');
INSERT INTO `municipios` VALUES ('1407', '20', 'Oaxaca', '409', 'Santa María del Tule');
INSERT INTO `municipios` VALUES ('1408', '20', 'Oaxaca', '410', 'Santa María Ecatepec');
INSERT INTO `municipios` VALUES ('1409', '20', 'Oaxaca', '411', 'Santa María Guelacé');
INSERT INTO `municipios` VALUES ('1410', '20', 'Oaxaca', '412', 'Santa María Guienagati');
INSERT INTO `municipios` VALUES ('1411', '20', 'Oaxaca', '413', 'Santa María Huatulco');
INSERT INTO `municipios` VALUES ('1412', '20', 'Oaxaca', '414', 'Santa María Huazolotitlán');
INSERT INTO `municipios` VALUES ('1413', '20', 'Oaxaca', '415', 'Santa María Ipalapa');
INSERT INTO `municipios` VALUES ('1414', '20', 'Oaxaca', '416', 'Santa María Ixcatlán');
INSERT INTO `municipios` VALUES ('1415', '20', 'Oaxaca', '417', 'Santa María Jacatepec');
INSERT INTO `municipios` VALUES ('1416', '20', 'Oaxaca', '418', 'Santa María Jalapa del Marqués');
INSERT INTO `municipios` VALUES ('1417', '20', 'Oaxaca', '419', 'Santa María Jaltianguis');
INSERT INTO `municipios` VALUES ('1418', '20', 'Oaxaca', '420', 'Santa María Lachixío');
INSERT INTO `municipios` VALUES ('1419', '20', 'Oaxaca', '421', 'Santa María Mixtequilla');
INSERT INTO `municipios` VALUES ('1420', '20', 'Oaxaca', '422', 'Santa María Nativitas');
INSERT INTO `municipios` VALUES ('1421', '20', 'Oaxaca', '423', 'Santa María Nduayaco');
INSERT INTO `municipios` VALUES ('1422', '20', 'Oaxaca', '424', 'Santa María Ozolotepec');
INSERT INTO `municipios` VALUES ('1423', '20', 'Oaxaca', '425', 'Santa María Pápalo');
INSERT INTO `municipios` VALUES ('1424', '20', 'Oaxaca', '426', 'Santa María Peñoles');
INSERT INTO `municipios` VALUES ('1425', '20', 'Oaxaca', '427', 'Santa María Petapa');
INSERT INTO `municipios` VALUES ('1426', '20', 'Oaxaca', '428', 'Santa María Quiegolani');
INSERT INTO `municipios` VALUES ('1427', '20', 'Oaxaca', '429', 'Santa María Sola');
INSERT INTO `municipios` VALUES ('1428', '20', 'Oaxaca', '430', 'Santa María Tataltepec');
INSERT INTO `municipios` VALUES ('1429', '20', 'Oaxaca', '431', 'Santa María Tecomavaca');
INSERT INTO `municipios` VALUES ('1430', '20', 'Oaxaca', '432', 'Santa María Temaxcalapa');
INSERT INTO `municipios` VALUES ('1431', '20', 'Oaxaca', '433', 'Santa María Temaxcaltepec');
INSERT INTO `municipios` VALUES ('1432', '20', 'Oaxaca', '434', 'Santa María Teopoxco');
INSERT INTO `municipios` VALUES ('1433', '20', 'Oaxaca', '435', 'Santa María Tepantlali');
INSERT INTO `municipios` VALUES ('1434', '20', 'Oaxaca', '436', 'Santa María Texcatitlán');
INSERT INTO `municipios` VALUES ('1435', '20', 'Oaxaca', '437', 'Santa María Tlahuitoltepec');
INSERT INTO `municipios` VALUES ('1436', '20', 'Oaxaca', '438', 'Santa María Tlalixtac');
INSERT INTO `municipios` VALUES ('1437', '20', 'Oaxaca', '439', 'Santa María Tonameca');
INSERT INTO `municipios` VALUES ('1438', '20', 'Oaxaca', '440', 'Santa María Totolapilla');
INSERT INTO `municipios` VALUES ('1439', '20', 'Oaxaca', '441', 'Santa María Xadani');
INSERT INTO `municipios` VALUES ('1440', '20', 'Oaxaca', '442', 'Santa María Yalina');
INSERT INTO `municipios` VALUES ('1441', '20', 'Oaxaca', '443', 'Santa María Yavesía');
INSERT INTO `municipios` VALUES ('1442', '20', 'Oaxaca', '444', 'Santa María Yolotepec');
INSERT INTO `municipios` VALUES ('1443', '20', 'Oaxaca', '445', 'Santa María Yosoyúa');
INSERT INTO `municipios` VALUES ('1444', '20', 'Oaxaca', '446', 'Santa María Yucuhiti');
INSERT INTO `municipios` VALUES ('1445', '20', 'Oaxaca', '447', 'Santa María Zacatepec');
INSERT INTO `municipios` VALUES ('1446', '20', 'Oaxaca', '448', 'Santa María Zaniza');
INSERT INTO `municipios` VALUES ('1447', '20', 'Oaxaca', '449', 'Santa María Zoquitlán');
INSERT INTO `municipios` VALUES ('1448', '20', 'Oaxaca', '450', 'Santiago Amoltepec');
INSERT INTO `municipios` VALUES ('1449', '20', 'Oaxaca', '451', 'Santiago Apoala');
INSERT INTO `municipios` VALUES ('1450', '20', 'Oaxaca', '452', 'Santiago Apóstol');
INSERT INTO `municipios` VALUES ('1451', '20', 'Oaxaca', '453', 'Santiago Astata');
INSERT INTO `municipios` VALUES ('1452', '20', 'Oaxaca', '454', 'Santiago Atitlán');
INSERT INTO `municipios` VALUES ('1453', '20', 'Oaxaca', '455', 'Santiago Ayuquililla');
INSERT INTO `municipios` VALUES ('1454', '20', 'Oaxaca', '456', 'Santiago Cacaloxtepec');
INSERT INTO `municipios` VALUES ('1455', '20', 'Oaxaca', '457', 'Santiago Camotlán');
INSERT INTO `municipios` VALUES ('1456', '20', 'Oaxaca', '458', 'Santiago Comaltepec');
INSERT INTO `municipios` VALUES ('1457', '20', 'Oaxaca', '459', 'Santiago Chazumba');
INSERT INTO `municipios` VALUES ('1458', '20', 'Oaxaca', '460', 'Santiago Choápam');
INSERT INTO `municipios` VALUES ('1459', '20', 'Oaxaca', '461', 'Santiago del Río');
INSERT INTO `municipios` VALUES ('1460', '20', 'Oaxaca', '462', 'Santiago Huajolotitlán');
INSERT INTO `municipios` VALUES ('1461', '20', 'Oaxaca', '463', 'Santiago Huauclilla');
INSERT INTO `municipios` VALUES ('1462', '20', 'Oaxaca', '464', 'Santiago Ihuitlán Plumas');
INSERT INTO `municipios` VALUES ('1463', '20', 'Oaxaca', '465', 'Santiago Ixcuintepec');
INSERT INTO `municipios` VALUES ('1464', '20', 'Oaxaca', '466', 'Santiago Ixtayutla');
INSERT INTO `municipios` VALUES ('1465', '20', 'Oaxaca', '467', 'Santiago Jamiltepec');
INSERT INTO `municipios` VALUES ('1466', '20', 'Oaxaca', '468', 'Santiago Jocotepec');
INSERT INTO `municipios` VALUES ('1467', '20', 'Oaxaca', '469', 'Santiago Juxtlahuaca');
INSERT INTO `municipios` VALUES ('1468', '20', 'Oaxaca', '470', 'Santiago Lachiguiri');
INSERT INTO `municipios` VALUES ('1469', '20', 'Oaxaca', '471', 'Santiago Lalopa');
INSERT INTO `municipios` VALUES ('1470', '20', 'Oaxaca', '472', 'Santiago Laollaga');
INSERT INTO `municipios` VALUES ('1471', '20', 'Oaxaca', '473', 'Santiago Laxopa');
INSERT INTO `municipios` VALUES ('1472', '20', 'Oaxaca', '474', 'Santiago Llano Grande');
INSERT INTO `municipios` VALUES ('1473', '20', 'Oaxaca', '475', 'Santiago Matatlán');
INSERT INTO `municipios` VALUES ('1474', '20', 'Oaxaca', '476', 'Santiago Miltepec');
INSERT INTO `municipios` VALUES ('1475', '20', 'Oaxaca', '477', 'Santiago Minas');
INSERT INTO `municipios` VALUES ('1476', '20', 'Oaxaca', '478', 'Santiago Nacaltepec');
INSERT INTO `municipios` VALUES ('1477', '20', 'Oaxaca', '479', 'Santiago Nejapilla');
INSERT INTO `municipios` VALUES ('1478', '20', 'Oaxaca', '480', 'Santiago Nundiche');
INSERT INTO `municipios` VALUES ('1479', '20', 'Oaxaca', '481', 'Santiago Nuyoó');
INSERT INTO `municipios` VALUES ('1480', '20', 'Oaxaca', '482', 'Santiago Pinotepa Nacional');
INSERT INTO `municipios` VALUES ('1481', '20', 'Oaxaca', '483', 'Santiago Suchilquitongo');
INSERT INTO `municipios` VALUES ('1482', '20', 'Oaxaca', '484', 'Santiago Tamazola');
INSERT INTO `municipios` VALUES ('1483', '20', 'Oaxaca', '485', 'Santiago Tapextla');
INSERT INTO `municipios` VALUES ('1484', '20', 'Oaxaca', '486', 'Villa Tejúpam de la Unión');
INSERT INTO `municipios` VALUES ('1485', '20', 'Oaxaca', '487', 'Santiago Tenango');
INSERT INTO `municipios` VALUES ('1486', '20', 'Oaxaca', '488', 'Santiago Tepetlapa');
INSERT INTO `municipios` VALUES ('1487', '20', 'Oaxaca', '489', 'Santiago Tetepec');
INSERT INTO `municipios` VALUES ('1488', '20', 'Oaxaca', '490', 'Santiago Texcalcingo');
INSERT INTO `municipios` VALUES ('1489', '20', 'Oaxaca', '491', 'Santiago Textitlán');
INSERT INTO `municipios` VALUES ('1490', '20', 'Oaxaca', '492', 'Santiago Tilantongo');
INSERT INTO `municipios` VALUES ('1491', '20', 'Oaxaca', '493', 'Santiago Tillo');
INSERT INTO `municipios` VALUES ('1492', '20', 'Oaxaca', '494', 'Santiago Tlazoyaltepec');
INSERT INTO `municipios` VALUES ('1493', '20', 'Oaxaca', '495', 'Santiago Xanica');
INSERT INTO `municipios` VALUES ('1494', '20', 'Oaxaca', '496', 'Santiago Xiacuí');
INSERT INTO `municipios` VALUES ('1495', '20', 'Oaxaca', '497', 'Santiago Yaitepec');
INSERT INTO `municipios` VALUES ('1496', '20', 'Oaxaca', '498', 'Santiago Yaveo');
INSERT INTO `municipios` VALUES ('1497', '20', 'Oaxaca', '499', 'Santiago Yolomécatl');
INSERT INTO `municipios` VALUES ('1498', '20', 'Oaxaca', '500', 'Santiago Yosondúa');
INSERT INTO `municipios` VALUES ('1499', '20', 'Oaxaca', '501', 'Santiago Yucuyachi');
INSERT INTO `municipios` VALUES ('1500', '20', 'Oaxaca', '502', 'Santiago Zacatepec');
INSERT INTO `municipios` VALUES ('1501', '20', 'Oaxaca', '503', 'Santiago Zoochila');
INSERT INTO `municipios` VALUES ('1502', '20', 'Oaxaca', '504', 'Nuevo Zoquiápam');
INSERT INTO `municipios` VALUES ('1503', '20', 'Oaxaca', '505', 'Santo Domingo Ingenio');
INSERT INTO `municipios` VALUES ('1504', '20', 'Oaxaca', '506', 'Santo Domingo Albarradas');
INSERT INTO `municipios` VALUES ('1505', '20', 'Oaxaca', '507', 'Santo Domingo Armenta');
INSERT INTO `municipios` VALUES ('1506', '20', 'Oaxaca', '508', 'Santo Domingo Chihuitán');
INSERT INTO `municipios` VALUES ('1507', '20', 'Oaxaca', '509', 'Santo Domingo de Morelos');
INSERT INTO `municipios` VALUES ('1508', '20', 'Oaxaca', '510', 'Santo Domingo Ixcatlán');
INSERT INTO `municipios` VALUES ('1509', '20', 'Oaxaca', '511', 'Santo Domingo Nuxaá');
INSERT INTO `municipios` VALUES ('1510', '20', 'Oaxaca', '512', 'Santo Domingo Ozolotepec');
INSERT INTO `municipios` VALUES ('1511', '20', 'Oaxaca', '513', 'Santo Domingo Petapa');
INSERT INTO `municipios` VALUES ('1512', '20', 'Oaxaca', '514', 'Santo Domingo Roayaga');
INSERT INTO `municipios` VALUES ('1513', '20', 'Oaxaca', '515', 'Santo Domingo Tehuantepec');
INSERT INTO `municipios` VALUES ('1514', '20', 'Oaxaca', '516', 'Santo Domingo Teojomulco');
INSERT INTO `municipios` VALUES ('1515', '20', 'Oaxaca', '517', 'Santo Domingo Tepuxtepec');
INSERT INTO `municipios` VALUES ('1516', '20', 'Oaxaca', '518', 'Santo Domingo Tlatayápam');
INSERT INTO `municipios` VALUES ('1517', '20', 'Oaxaca', '519', 'Santo Domingo Tomaltepec');
INSERT INTO `municipios` VALUES ('1518', '20', 'Oaxaca', '520', 'Santo Domingo Tonalá');
INSERT INTO `municipios` VALUES ('1519', '20', 'Oaxaca', '521', 'Santo Domingo Tonaltepec');
INSERT INTO `municipios` VALUES ('1520', '20', 'Oaxaca', '522', 'Santo Domingo Xagacía');
INSERT INTO `municipios` VALUES ('1521', '20', 'Oaxaca', '523', 'Santo Domingo Yanhuitlán');
INSERT INTO `municipios` VALUES ('1522', '20', 'Oaxaca', '524', 'Santo Domingo Yodohino');
INSERT INTO `municipios` VALUES ('1523', '20', 'Oaxaca', '525', 'Santo Domingo Zanatepec');
INSERT INTO `municipios` VALUES ('1524', '20', 'Oaxaca', '526', 'Santos Reyes Nopala');
INSERT INTO `municipios` VALUES ('1525', '20', 'Oaxaca', '527', 'Santos Reyes Pápalo');
INSERT INTO `municipios` VALUES ('1526', '20', 'Oaxaca', '528', 'Santos Reyes Tepejillo');
INSERT INTO `municipios` VALUES ('1527', '20', 'Oaxaca', '529', 'Santos Reyes Yucuná');
INSERT INTO `municipios` VALUES ('1528', '20', 'Oaxaca', '530', 'Santo Tomás Jalieza');
INSERT INTO `municipios` VALUES ('1529', '20', 'Oaxaca', '531', 'Santo Tomás Mazaltepec');
INSERT INTO `municipios` VALUES ('1530', '20', 'Oaxaca', '532', 'Santo Tomás Ocotepec');
INSERT INTO `municipios` VALUES ('1531', '20', 'Oaxaca', '533', 'Santo Tomás Tamazulapan');
INSERT INTO `municipios` VALUES ('1532', '20', 'Oaxaca', '534', 'San Vicente Coatlán');
INSERT INTO `municipios` VALUES ('1533', '20', 'Oaxaca', '535', 'San Vicente Lachixío');
INSERT INTO `municipios` VALUES ('1534', '20', 'Oaxaca', '536', 'San Vicente Nuñú');
INSERT INTO `municipios` VALUES ('1535', '20', 'Oaxaca', '537', 'Silacayoápam');
INSERT INTO `municipios` VALUES ('1536', '20', 'Oaxaca', '538', 'Sitio de Xitlapehua');
INSERT INTO `municipios` VALUES ('1537', '20', 'Oaxaca', '539', 'Soledad Etla');
INSERT INTO `municipios` VALUES ('1538', '20', 'Oaxaca', '540', 'Villa de Tamazulápam del Progreso');
INSERT INTO `municipios` VALUES ('1539', '20', 'Oaxaca', '541', 'Tanetze de Zaragoza');
INSERT INTO `municipios` VALUES ('1540', '20', 'Oaxaca', '542', 'Taniche');
INSERT INTO `municipios` VALUES ('1541', '20', 'Oaxaca', '543', 'Tataltepec de Valdés');
INSERT INTO `municipios` VALUES ('1542', '20', 'Oaxaca', '544', 'Teococuilco de Marcos Pérez');
INSERT INTO `municipios` VALUES ('1543', '20', 'Oaxaca', '545', 'Teotitlán de Flores Magón');
INSERT INTO `municipios` VALUES ('1544', '20', 'Oaxaca', '546', 'Teotitlán del Valle');
INSERT INTO `municipios` VALUES ('1545', '20', 'Oaxaca', '547', 'Teotongo');
INSERT INTO `municipios` VALUES ('1546', '20', 'Oaxaca', '548', 'Tepelmeme Villa de Morelos');
INSERT INTO `municipios` VALUES ('1547', '20', 'Oaxaca', '549', 'Heroica Villa Tezoatlán de Segura y Luna, Cuna de la Independencia de Oaxaca');
INSERT INTO `municipios` VALUES ('1548', '20', 'Oaxaca', '550', 'San Jerónimo Tlacochahuaya');
INSERT INTO `municipios` VALUES ('1549', '20', 'Oaxaca', '551', 'Tlacolula de Matamoros');
INSERT INTO `municipios` VALUES ('1550', '20', 'Oaxaca', '552', 'Tlacotepec Plumas');
INSERT INTO `municipios` VALUES ('1551', '20', 'Oaxaca', '553', 'Tlalixtac de Cabrera');
INSERT INTO `municipios` VALUES ('1552', '20', 'Oaxaca', '554', 'Totontepec Villa de Morelos');
INSERT INTO `municipios` VALUES ('1553', '20', 'Oaxaca', '555', 'Trinidad Zaachila');
INSERT INTO `municipios` VALUES ('1554', '20', 'Oaxaca', '556', 'La Trinidad Vista Hermosa');
INSERT INTO `municipios` VALUES ('1555', '20', 'Oaxaca', '557', 'Unión Hidalgo');
INSERT INTO `municipios` VALUES ('1556', '20', 'Oaxaca', '558', 'Valerio Trujano');
INSERT INTO `municipios` VALUES ('1557', '20', 'Oaxaca', '559', 'San Juan Bautista Valle Nacional');
INSERT INTO `municipios` VALUES ('1558', '20', 'Oaxaca', '560', 'Villa Díaz Ordaz');
INSERT INTO `municipios` VALUES ('1559', '20', 'Oaxaca', '561', 'Yaxe');
INSERT INTO `municipios` VALUES ('1560', '20', 'Oaxaca', '562', 'Magdalena Yodocono de Porfirio Díaz');
INSERT INTO `municipios` VALUES ('1561', '20', 'Oaxaca', '563', 'Yogana');
INSERT INTO `municipios` VALUES ('1562', '20', 'Oaxaca', '564', 'Yutanduchi de Guerrero');
INSERT INTO `municipios` VALUES ('1563', '20', 'Oaxaca', '565', 'Villa de Zaachila');
INSERT INTO `municipios` VALUES ('1564', '20', 'Oaxaca', '566', 'San Mateo Yucutindoo');
INSERT INTO `municipios` VALUES ('1565', '20', 'Oaxaca', '567', 'Zapotitlán Lagunas');
INSERT INTO `municipios` VALUES ('1566', '20', 'Oaxaca', '568', 'Zapotitlán Palmas');
INSERT INTO `municipios` VALUES ('1567', '20', 'Oaxaca', '569', 'Santa Inés de Zaragoza');
INSERT INTO `municipios` VALUES ('1568', '20', 'Oaxaca', '570', 'Zimatlán de Álvarez');
INSERT INTO `municipios` VALUES ('1569', '21', 'Puebla', '1', 'Acajete');
INSERT INTO `municipios` VALUES ('1570', '21', 'Puebla', '2', 'Acateno');
INSERT INTO `municipios` VALUES ('1571', '21', 'Puebla', '3', 'Acatlán');
INSERT INTO `municipios` VALUES ('1572', '21', 'Puebla', '4', 'Acatzingo');
INSERT INTO `municipios` VALUES ('1573', '21', 'Puebla', '5', 'Acteopan');
INSERT INTO `municipios` VALUES ('1574', '21', 'Puebla', '6', 'Ahuacatlán');
INSERT INTO `municipios` VALUES ('1575', '21', 'Puebla', '7', 'Ahuatlán');
INSERT INTO `municipios` VALUES ('1576', '21', 'Puebla', '8', 'Ahuazotepec');
INSERT INTO `municipios` VALUES ('1577', '21', 'Puebla', '9', 'Ahuehuetitla');
INSERT INTO `municipios` VALUES ('1578', '21', 'Puebla', '10', 'Ajalpan');
INSERT INTO `municipios` VALUES ('1579', '21', 'Puebla', '11', 'Albino Zertuche');
INSERT INTO `municipios` VALUES ('1580', '21', 'Puebla', '12', 'Aljojuca');
INSERT INTO `municipios` VALUES ('1581', '21', 'Puebla', '13', 'Altepexi');
INSERT INTO `municipios` VALUES ('1582', '21', 'Puebla', '14', 'Amixtlán');
INSERT INTO `municipios` VALUES ('1583', '21', 'Puebla', '15', 'Amozoc');
INSERT INTO `municipios` VALUES ('1584', '21', 'Puebla', '16', 'Aquixtla');
INSERT INTO `municipios` VALUES ('1585', '21', 'Puebla', '17', 'Atempan');
INSERT INTO `municipios` VALUES ('1586', '21', 'Puebla', '18', 'Atexcal');
INSERT INTO `municipios` VALUES ('1587', '21', 'Puebla', '19', 'Atlixco');
INSERT INTO `municipios` VALUES ('1588', '21', 'Puebla', '20', 'Atoyatempan');
INSERT INTO `municipios` VALUES ('1589', '21', 'Puebla', '21', 'Atzala');
INSERT INTO `municipios` VALUES ('1590', '21', 'Puebla', '22', 'Atzitzihuacán');
INSERT INTO `municipios` VALUES ('1591', '21', 'Puebla', '23', 'Atzitzintla');
INSERT INTO `municipios` VALUES ('1592', '21', 'Puebla', '24', 'Axutla');
INSERT INTO `municipios` VALUES ('1593', '21', 'Puebla', '25', 'Ayotoxco de Guerrero');
INSERT INTO `municipios` VALUES ('1594', '21', 'Puebla', '26', 'Calpan');
INSERT INTO `municipios` VALUES ('1595', '21', 'Puebla', '27', 'Caltepec');
INSERT INTO `municipios` VALUES ('1596', '21', 'Puebla', '28', 'Camocuautla');
INSERT INTO `municipios` VALUES ('1597', '21', 'Puebla', '29', 'Caxhuacan');
INSERT INTO `municipios` VALUES ('1598', '21', 'Puebla', '30', 'Coatepec');
INSERT INTO `municipios` VALUES ('1599', '21', 'Puebla', '31', 'Coatzingo');
INSERT INTO `municipios` VALUES ('1600', '21', 'Puebla', '32', 'Cohetzala');
INSERT INTO `municipios` VALUES ('1601', '21', 'Puebla', '33', 'Cohuecan');
INSERT INTO `municipios` VALUES ('1602', '21', 'Puebla', '34', 'Coronango');
INSERT INTO `municipios` VALUES ('1603', '21', 'Puebla', '35', 'Coxcatlán');
INSERT INTO `municipios` VALUES ('1604', '21', 'Puebla', '36', 'Coyomeapan');
INSERT INTO `municipios` VALUES ('1605', '21', 'Puebla', '37', 'Coyotepec');
INSERT INTO `municipios` VALUES ('1606', '21', 'Puebla', '38', 'Cuapiaxtla de Madero');
INSERT INTO `municipios` VALUES ('1607', '21', 'Puebla', '39', 'Cuautempan');
INSERT INTO `municipios` VALUES ('1608', '21', 'Puebla', '40', 'Cuautinchán');
INSERT INTO `municipios` VALUES ('1609', '21', 'Puebla', '41', 'Cuautlancingo');
INSERT INTO `municipios` VALUES ('1610', '21', 'Puebla', '42', 'Cuayuca de Andrade');
INSERT INTO `municipios` VALUES ('1611', '21', 'Puebla', '43', 'Cuetzalan del Progreso');
INSERT INTO `municipios` VALUES ('1612', '21', 'Puebla', '44', 'Cuyoaco');
INSERT INTO `municipios` VALUES ('1613', '21', 'Puebla', '45', 'Chalchicomula de Sesma');
INSERT INTO `municipios` VALUES ('1614', '21', 'Puebla', '46', 'Chapulco');
INSERT INTO `municipios` VALUES ('1615', '21', 'Puebla', '47', 'Chiautla');
INSERT INTO `municipios` VALUES ('1616', '21', 'Puebla', '48', 'Chiautzingo');
INSERT INTO `municipios` VALUES ('1617', '21', 'Puebla', '49', 'Chiconcuautla');
INSERT INTO `municipios` VALUES ('1618', '21', 'Puebla', '50', 'Chichiquila');
INSERT INTO `municipios` VALUES ('1619', '21', 'Puebla', '51', 'Chietla');
INSERT INTO `municipios` VALUES ('1620', '21', 'Puebla', '52', 'Chigmecatitlán');
INSERT INTO `municipios` VALUES ('1621', '21', 'Puebla', '53', 'Chignahuapan');
INSERT INTO `municipios` VALUES ('1622', '21', 'Puebla', '54', 'Chignautla');
INSERT INTO `municipios` VALUES ('1623', '21', 'Puebla', '55', 'Chila');
INSERT INTO `municipios` VALUES ('1624', '21', 'Puebla', '56', 'Chila de la Sal');
INSERT INTO `municipios` VALUES ('1625', '21', 'Puebla', '57', 'Honey');
INSERT INTO `municipios` VALUES ('1626', '21', 'Puebla', '58', 'Chilchotla');
INSERT INTO `municipios` VALUES ('1627', '21', 'Puebla', '59', 'Chinantla');
INSERT INTO `municipios` VALUES ('1628', '21', 'Puebla', '60', 'Domingo Arenas');
INSERT INTO `municipios` VALUES ('1629', '21', 'Puebla', '61', 'Eloxochitlán');
INSERT INTO `municipios` VALUES ('1630', '21', 'Puebla', '62', 'Epatlán');
INSERT INTO `municipios` VALUES ('1631', '21', 'Puebla', '63', 'Esperanza');
INSERT INTO `municipios` VALUES ('1632', '21', 'Puebla', '64', 'Francisco Z. Mena');
INSERT INTO `municipios` VALUES ('1633', '21', 'Puebla', '65', 'General Felipe Ángeles');
INSERT INTO `municipios` VALUES ('1634', '21', 'Puebla', '66', 'Guadalupe');
INSERT INTO `municipios` VALUES ('1635', '21', 'Puebla', '67', 'Guadalupe Victoria');
INSERT INTO `municipios` VALUES ('1636', '21', 'Puebla', '68', 'Hermenegildo Galeana');
INSERT INTO `municipios` VALUES ('1637', '21', 'Puebla', '69', 'Huaquechula');
INSERT INTO `municipios` VALUES ('1638', '21', 'Puebla', '70', 'Huatlatlauca');
INSERT INTO `municipios` VALUES ('1639', '21', 'Puebla', '71', 'Huauchinango');
INSERT INTO `municipios` VALUES ('1640', '21', 'Puebla', '72', 'Huehuetla');
INSERT INTO `municipios` VALUES ('1641', '21', 'Puebla', '73', 'Huehuetlán el Chico');
INSERT INTO `municipios` VALUES ('1642', '21', 'Puebla', '74', 'Huejotzingo');
INSERT INTO `municipios` VALUES ('1643', '21', 'Puebla', '75', 'Hueyapan');
INSERT INTO `municipios` VALUES ('1644', '21', 'Puebla', '76', 'Hueytamalco');
INSERT INTO `municipios` VALUES ('1645', '21', 'Puebla', '77', 'Hueytlalpan');
INSERT INTO `municipios` VALUES ('1646', '21', 'Puebla', '78', 'Huitzilan de Serdán');
INSERT INTO `municipios` VALUES ('1647', '21', 'Puebla', '79', 'Huitziltepec');
INSERT INTO `municipios` VALUES ('1648', '21', 'Puebla', '80', 'Atlequizayan');
INSERT INTO `municipios` VALUES ('1649', '21', 'Puebla', '81', 'Ixcamilpa de Guerrero');
INSERT INTO `municipios` VALUES ('1650', '21', 'Puebla', '82', 'Ixcaquixtla');
INSERT INTO `municipios` VALUES ('1651', '21', 'Puebla', '83', 'Ixtacamaxtitlán');
INSERT INTO `municipios` VALUES ('1652', '21', 'Puebla', '84', 'Ixtepec');
INSERT INTO `municipios` VALUES ('1653', '21', 'Puebla', '85', 'Izúcar de Matamoros');
INSERT INTO `municipios` VALUES ('1654', '21', 'Puebla', '86', 'Jalpan');
INSERT INTO `municipios` VALUES ('1655', '21', 'Puebla', '87', 'Jolalpan');
INSERT INTO `municipios` VALUES ('1656', '21', 'Puebla', '88', 'Jonotla');
INSERT INTO `municipios` VALUES ('1657', '21', 'Puebla', '89', 'Jopala');
INSERT INTO `municipios` VALUES ('1658', '21', 'Puebla', '90', 'Juan C. Bonilla');
INSERT INTO `municipios` VALUES ('1659', '21', 'Puebla', '91', 'Juan Galindo');
INSERT INTO `municipios` VALUES ('1660', '21', 'Puebla', '92', 'Juan N. Méndez');
INSERT INTO `municipios` VALUES ('1661', '21', 'Puebla', '93', 'Lafragua');
INSERT INTO `municipios` VALUES ('1662', '21', 'Puebla', '94', 'Libres');
INSERT INTO `municipios` VALUES ('1663', '21', 'Puebla', '95', 'La Magdalena Tlatlauquitepec');
INSERT INTO `municipios` VALUES ('1664', '21', 'Puebla', '96', 'Mazapiltepec de Juárez');
INSERT INTO `municipios` VALUES ('1665', '21', 'Puebla', '97', 'Mixtla');
INSERT INTO `municipios` VALUES ('1666', '21', 'Puebla', '98', 'Molcaxac');
INSERT INTO `municipios` VALUES ('1667', '21', 'Puebla', '99', 'Cañada Morelos');
INSERT INTO `municipios` VALUES ('1668', '21', 'Puebla', '100', 'Naupan');
INSERT INTO `municipios` VALUES ('1669', '21', 'Puebla', '101', 'Nauzontla');
INSERT INTO `municipios` VALUES ('1670', '21', 'Puebla', '102', 'Nealtican');
INSERT INTO `municipios` VALUES ('1671', '21', 'Puebla', '103', 'Nicolás Bravo');
INSERT INTO `municipios` VALUES ('1672', '21', 'Puebla', '104', 'Nopalucan');
INSERT INTO `municipios` VALUES ('1673', '21', 'Puebla', '105', 'Ocotepec');
INSERT INTO `municipios` VALUES ('1674', '21', 'Puebla', '106', 'Ocoyucan');
INSERT INTO `municipios` VALUES ('1675', '21', 'Puebla', '107', 'Olintla');
INSERT INTO `municipios` VALUES ('1676', '21', 'Puebla', '108', 'Oriental');
INSERT INTO `municipios` VALUES ('1677', '21', 'Puebla', '109', 'Pahuatlán');
INSERT INTO `municipios` VALUES ('1678', '21', 'Puebla', '110', 'Palmar de Bravo');
INSERT INTO `municipios` VALUES ('1679', '21', 'Puebla', '111', 'Pantepec');
INSERT INTO `municipios` VALUES ('1680', '21', 'Puebla', '112', 'Petlalcingo');
INSERT INTO `municipios` VALUES ('1681', '21', 'Puebla', '113', 'Piaxtla');
INSERT INTO `municipios` VALUES ('1682', '21', 'Puebla', '114', 'Puebla');
INSERT INTO `municipios` VALUES ('1683', '21', 'Puebla', '115', 'Quecholac');
INSERT INTO `municipios` VALUES ('1684', '21', 'Puebla', '116', 'Quimixtlán');
INSERT INTO `municipios` VALUES ('1685', '21', 'Puebla', '117', 'Rafael Lara Grajales');
INSERT INTO `municipios` VALUES ('1686', '21', 'Puebla', '118', 'Los Reyes de Juárez');
INSERT INTO `municipios` VALUES ('1687', '21', 'Puebla', '119', 'San Andrés Cholula');
INSERT INTO `municipios` VALUES ('1688', '21', 'Puebla', '120', 'San Antonio Cañada');
INSERT INTO `municipios` VALUES ('1689', '21', 'Puebla', '121', 'San Diego la Mesa Tochimiltzingo');
INSERT INTO `municipios` VALUES ('1690', '21', 'Puebla', '122', 'San Felipe Teotlalcingo');
INSERT INTO `municipios` VALUES ('1691', '21', 'Puebla', '123', 'San Felipe Tepatlán');
INSERT INTO `municipios` VALUES ('1692', '21', 'Puebla', '124', 'San Gabriel Chilac');
INSERT INTO `municipios` VALUES ('1693', '21', 'Puebla', '125', 'San Gregorio Atzompa');
INSERT INTO `municipios` VALUES ('1694', '21', 'Puebla', '126', 'San Jerónimo Tecuanipan');
INSERT INTO `municipios` VALUES ('1695', '21', 'Puebla', '127', 'San Jerónimo Xayacatlán');
INSERT INTO `municipios` VALUES ('1696', '21', 'Puebla', '128', 'San José Chiapa');
INSERT INTO `municipios` VALUES ('1697', '21', 'Puebla', '129', 'San José Miahuatlán');
INSERT INTO `municipios` VALUES ('1698', '21', 'Puebla', '130', 'San Juan Atenco');
INSERT INTO `municipios` VALUES ('1699', '21', 'Puebla', '131', 'San Juan Atzompa');
INSERT INTO `municipios` VALUES ('1700', '21', 'Puebla', '132', 'San Martín Texmelucan');
INSERT INTO `municipios` VALUES ('1701', '21', 'Puebla', '133', 'San Martín Totoltepec');
INSERT INTO `municipios` VALUES ('1702', '21', 'Puebla', '134', 'San Matías Tlalancaleca');
INSERT INTO `municipios` VALUES ('1703', '21', 'Puebla', '135', 'San Miguel Ixitlán');
INSERT INTO `municipios` VALUES ('1704', '21', 'Puebla', '136', 'San Miguel Xoxtla');
INSERT INTO `municipios` VALUES ('1705', '21', 'Puebla', '137', 'San Nicolás Buenos Aires');
INSERT INTO `municipios` VALUES ('1706', '21', 'Puebla', '138', 'San Nicolás de los Ranchos');
INSERT INTO `municipios` VALUES ('1707', '21', 'Puebla', '139', 'San Pablo Anicano');
INSERT INTO `municipios` VALUES ('1708', '21', 'Puebla', '140', 'San Pedro Cholula');
INSERT INTO `municipios` VALUES ('1709', '21', 'Puebla', '141', 'San Pedro Yeloixtlahuaca');
INSERT INTO `municipios` VALUES ('1710', '21', 'Puebla', '142', 'San Salvador el Seco');
INSERT INTO `municipios` VALUES ('1711', '21', 'Puebla', '143', 'San Salvador el Verde');
INSERT INTO `municipios` VALUES ('1712', '21', 'Puebla', '144', 'San Salvador Huixcolotla');
INSERT INTO `municipios` VALUES ('1713', '21', 'Puebla', '145', 'San Sebastián Tlacotepec');
INSERT INTO `municipios` VALUES ('1714', '21', 'Puebla', '146', 'Santa Catarina Tlaltempan');
INSERT INTO `municipios` VALUES ('1715', '21', 'Puebla', '147', 'Santa Inés Ahuatempan');
INSERT INTO `municipios` VALUES ('1716', '21', 'Puebla', '148', 'Santa Isabel Cholula');
INSERT INTO `municipios` VALUES ('1717', '21', 'Puebla', '149', 'Santiago Miahuatlán');
INSERT INTO `municipios` VALUES ('1718', '21', 'Puebla', '150', 'Huehuetlán el Grande');
INSERT INTO `municipios` VALUES ('1719', '21', 'Puebla', '151', 'Santo Tomás Hueyotlipan');
INSERT INTO `municipios` VALUES ('1720', '21', 'Puebla', '152', 'Soltepec');
INSERT INTO `municipios` VALUES ('1721', '21', 'Puebla', '153', 'Tecali de Herrera');
INSERT INTO `municipios` VALUES ('1722', '21', 'Puebla', '154', 'Tecamachalco');
INSERT INTO `municipios` VALUES ('1723', '21', 'Puebla', '155', 'Tecomatlán');
INSERT INTO `municipios` VALUES ('1724', '21', 'Puebla', '156', 'Tehuacán');
INSERT INTO `municipios` VALUES ('1725', '21', 'Puebla', '157', 'Tehuitzingo');
INSERT INTO `municipios` VALUES ('1726', '21', 'Puebla', '158', 'Tenampulco');
INSERT INTO `municipios` VALUES ('1727', '21', 'Puebla', '159', 'Teopantlán');
INSERT INTO `municipios` VALUES ('1728', '21', 'Puebla', '160', 'Teotlalco');
INSERT INTO `municipios` VALUES ('1729', '21', 'Puebla', '161', 'Tepanco de López');
INSERT INTO `municipios` VALUES ('1730', '21', 'Puebla', '162', 'Tepango de Rodríguez');
INSERT INTO `municipios` VALUES ('1731', '21', 'Puebla', '163', 'Tepatlaxco de Hidalgo');
INSERT INTO `municipios` VALUES ('1732', '21', 'Puebla', '164', 'Tepeaca');
INSERT INTO `municipios` VALUES ('1733', '21', 'Puebla', '165', 'Tepemaxalco');
INSERT INTO `municipios` VALUES ('1734', '21', 'Puebla', '166', 'Tepeojuma');
INSERT INTO `municipios` VALUES ('1735', '21', 'Puebla', '167', 'Tepetzintla');
INSERT INTO `municipios` VALUES ('1736', '21', 'Puebla', '168', 'Tepexco');
INSERT INTO `municipios` VALUES ('1737', '21', 'Puebla', '169', 'Tepexi de Rodríguez');
INSERT INTO `municipios` VALUES ('1738', '21', 'Puebla', '170', 'Tepeyahualco');
INSERT INTO `municipios` VALUES ('1739', '21', 'Puebla', '171', 'Tepeyahualco de Cuauhtémoc');
INSERT INTO `municipios` VALUES ('1740', '21', 'Puebla', '172', 'Tetela de Ocampo');
INSERT INTO `municipios` VALUES ('1741', '21', 'Puebla', '173', 'Teteles de Avila Castillo');
INSERT INTO `municipios` VALUES ('1742', '21', 'Puebla', '174', 'Teziutlán');
INSERT INTO `municipios` VALUES ('1743', '21', 'Puebla', '175', 'Tianguismanalco');
INSERT INTO `municipios` VALUES ('1744', '21', 'Puebla', '176', 'Tilapa');
INSERT INTO `municipios` VALUES ('1745', '21', 'Puebla', '177', 'Tlacotepec de Benito Juárez');
INSERT INTO `municipios` VALUES ('1746', '21', 'Puebla', '178', 'Tlacuilotepec');
INSERT INTO `municipios` VALUES ('1747', '21', 'Puebla', '179', 'Tlachichuca');
INSERT INTO `municipios` VALUES ('1748', '21', 'Puebla', '180', 'Tlahuapan');
INSERT INTO `municipios` VALUES ('1749', '21', 'Puebla', '181', 'Tlaltenango');
INSERT INTO `municipios` VALUES ('1750', '21', 'Puebla', '182', 'Tlanepantla');
INSERT INTO `municipios` VALUES ('1751', '21', 'Puebla', '183', 'Tlaola');
INSERT INTO `municipios` VALUES ('1752', '21', 'Puebla', '184', 'Tlapacoya');
INSERT INTO `municipios` VALUES ('1753', '21', 'Puebla', '185', 'Tlapanalá');
INSERT INTO `municipios` VALUES ('1754', '21', 'Puebla', '186', 'Tlatlauquitepec');
INSERT INTO `municipios` VALUES ('1755', '21', 'Puebla', '187', 'Tlaxco');
INSERT INTO `municipios` VALUES ('1756', '21', 'Puebla', '188', 'Tochimilco');
INSERT INTO `municipios` VALUES ('1757', '21', 'Puebla', '189', 'Tochtepec');
INSERT INTO `municipios` VALUES ('1758', '21', 'Puebla', '190', 'Totoltepec de Guerrero');
INSERT INTO `municipios` VALUES ('1759', '21', 'Puebla', '191', 'Tulcingo');
INSERT INTO `municipios` VALUES ('1760', '21', 'Puebla', '192', 'Tuzamapan de Galeana');
INSERT INTO `municipios` VALUES ('1761', '21', 'Puebla', '193', 'Tzicatlacoyan');
INSERT INTO `municipios` VALUES ('1762', '21', 'Puebla', '194', 'Venustiano Carranza');
INSERT INTO `municipios` VALUES ('1763', '21', 'Puebla', '195', 'Vicente Guerrero');
INSERT INTO `municipios` VALUES ('1764', '21', 'Puebla', '196', 'Xayacatlán de Bravo');
INSERT INTO `municipios` VALUES ('1765', '21', 'Puebla', '197', 'Xicotepec');
INSERT INTO `municipios` VALUES ('1766', '21', 'Puebla', '198', 'Xicotlán');
INSERT INTO `municipios` VALUES ('1767', '21', 'Puebla', '199', 'Xiutetelco');
INSERT INTO `municipios` VALUES ('1768', '21', 'Puebla', '200', 'Xochiapulco');
INSERT INTO `municipios` VALUES ('1769', '21', 'Puebla', '201', 'Xochiltepec');
INSERT INTO `municipios` VALUES ('1770', '21', 'Puebla', '202', 'Xochitlán de Vicente Suárez');
INSERT INTO `municipios` VALUES ('1771', '21', 'Puebla', '203', 'Xochitlán Todos Santos');
INSERT INTO `municipios` VALUES ('1772', '21', 'Puebla', '204', 'Yaonáhuac');
INSERT INTO `municipios` VALUES ('1773', '21', 'Puebla', '205', 'Yehualtepec');
INSERT INTO `municipios` VALUES ('1774', '21', 'Puebla', '206', 'Zacapala');
INSERT INTO `municipios` VALUES ('1775', '21', 'Puebla', '207', 'Zacapoaxtla');
INSERT INTO `municipios` VALUES ('1776', '21', 'Puebla', '208', 'Zacatlán');
INSERT INTO `municipios` VALUES ('1777', '21', 'Puebla', '209', 'Zapotitlán');
INSERT INTO `municipios` VALUES ('1778', '21', 'Puebla', '210', 'Zapotitlán de Méndez');
INSERT INTO `municipios` VALUES ('1779', '21', 'Puebla', '211', 'Zaragoza');
INSERT INTO `municipios` VALUES ('1780', '21', 'Puebla', '212', 'Zautla');
INSERT INTO `municipios` VALUES ('1781', '21', 'Puebla', '213', 'Zihuateutla');
INSERT INTO `municipios` VALUES ('1782', '21', 'Puebla', '214', 'Zinacatepec');
INSERT INTO `municipios` VALUES ('1783', '21', 'Puebla', '215', 'Zongozotla');
INSERT INTO `municipios` VALUES ('1784', '21', 'Puebla', '216', 'Zoquiapan');
INSERT INTO `municipios` VALUES ('1785', '21', 'Puebla', '217', 'Zoquitlán');
INSERT INTO `municipios` VALUES ('1786', '22', 'Querétaro', '1', 'Amealco de Bonfil');
INSERT INTO `municipios` VALUES ('1787', '22', 'Querétaro', '2', 'Pinal de Amoles');
INSERT INTO `municipios` VALUES ('1788', '22', 'Querétaro', '3', 'Arroyo Seco');
INSERT INTO `municipios` VALUES ('1789', '22', 'Querétaro', '4', 'Cadereyta de Montes');
INSERT INTO `municipios` VALUES ('1790', '22', 'Querétaro', '5', 'Colón');
INSERT INTO `municipios` VALUES ('1791', '22', 'Querétaro', '6', 'Corregidora');
INSERT INTO `municipios` VALUES ('1792', '22', 'Querétaro', '7', 'Ezequiel Montes');
INSERT INTO `municipios` VALUES ('1793', '22', 'Querétaro', '8', 'Huimilpan');
INSERT INTO `municipios` VALUES ('1794', '22', 'Querétaro', '9', 'Jalpan de Serra');
INSERT INTO `municipios` VALUES ('1795', '22', 'Querétaro', '10', 'Landa de Matamoros');
INSERT INTO `municipios` VALUES ('1796', '22', 'Querétaro', '11', 'El Marqués');
INSERT INTO `municipios` VALUES ('1797', '22', 'Querétaro', '12', 'Pedro Escobedo');
INSERT INTO `municipios` VALUES ('1798', '22', 'Querétaro', '13', 'Peñamiller');
INSERT INTO `municipios` VALUES ('1799', '22', 'Querétaro', '14', 'Querétaro');
INSERT INTO `municipios` VALUES ('1800', '22', 'Querétaro', '15', 'San Joaquín');
INSERT INTO `municipios` VALUES ('1801', '22', 'Querétaro', '16', 'San Juan del Río');
INSERT INTO `municipios` VALUES ('1802', '22', 'Querétaro', '17', 'Tequisquiapan');
INSERT INTO `municipios` VALUES ('1803', '22', 'Querétaro', '18', 'Tolimán');
INSERT INTO `municipios` VALUES ('1804', '23', 'Quintana Roo', '1', 'Cozumel');
INSERT INTO `municipios` VALUES ('1805', '23', 'Quintana Roo', '2', 'Felipe Carrillo Puerto');
INSERT INTO `municipios` VALUES ('1806', '23', 'Quintana Roo', '3', 'Isla Mujeres');
INSERT INTO `municipios` VALUES ('1807', '23', 'Quintana Roo', '4', 'Othón P. Blanco');
INSERT INTO `municipios` VALUES ('1808', '23', 'Quintana Roo', '5', 'Benito Juárez');
INSERT INTO `municipios` VALUES ('1809', '23', 'Quintana Roo', '6', 'José María Morelos');
INSERT INTO `municipios` VALUES ('1810', '23', 'Quintana Roo', '7', 'Lázaro Cárdenas');
INSERT INTO `municipios` VALUES ('1811', '23', 'Quintana Roo', '8', 'Solidaridad');
INSERT INTO `municipios` VALUES ('1812', '23', 'Quintana Roo', '9', 'Tulum');
INSERT INTO `municipios` VALUES ('1813', '23', 'Quintana Roo', '10', 'Bacalar');
INSERT INTO `municipios` VALUES ('1814', '24', 'San Luis Potosí', '1', 'Ahualulco');
INSERT INTO `municipios` VALUES ('1815', '24', 'San Luis Potosí', '2', 'Alaquines');
INSERT INTO `municipios` VALUES ('1816', '24', 'San Luis Potosí', '3', 'Aquismón');
INSERT INTO `municipios` VALUES ('1817', '24', 'San Luis Potosí', '4', 'Armadillo de los Infante');
INSERT INTO `municipios` VALUES ('1818', '24', 'San Luis Potosí', '5', 'Cárdenas');
INSERT INTO `municipios` VALUES ('1819', '24', 'San Luis Potosí', '6', 'Catorce');
INSERT INTO `municipios` VALUES ('1820', '24', 'San Luis Potosí', '7', 'Cedral');
INSERT INTO `municipios` VALUES ('1821', '24', 'San Luis Potosí', '8', 'Cerritos');
INSERT INTO `municipios` VALUES ('1822', '24', 'San Luis Potosí', '9', 'Cerro de San Pedro');
INSERT INTO `municipios` VALUES ('1823', '24', 'San Luis Potosí', '10', 'Ciudad del Maíz');
INSERT INTO `municipios` VALUES ('1824', '24', 'San Luis Potosí', '11', 'Ciudad Fernández');
INSERT INTO `municipios` VALUES ('1825', '24', 'San Luis Potosí', '12', 'Tancanhuitz');
INSERT INTO `municipios` VALUES ('1826', '24', 'San Luis Potosí', '13', 'Ciudad Valles');
INSERT INTO `municipios` VALUES ('1827', '24', 'San Luis Potosí', '14', 'Coxcatlán');
INSERT INTO `municipios` VALUES ('1828', '24', 'San Luis Potosí', '15', 'Charcas');
INSERT INTO `municipios` VALUES ('1829', '24', 'San Luis Potosí', '16', 'Ebano');
INSERT INTO `municipios` VALUES ('1830', '24', 'San Luis Potosí', '17', 'Guadalcázar');
INSERT INTO `municipios` VALUES ('1831', '24', 'San Luis Potosí', '18', 'Huehuetlán');
INSERT INTO `municipios` VALUES ('1832', '24', 'San Luis Potosí', '19', 'Lagunillas');
INSERT INTO `municipios` VALUES ('1833', '24', 'San Luis Potosí', '20', 'Matehuala');
INSERT INTO `municipios` VALUES ('1834', '24', 'San Luis Potosí', '21', 'Mexquitic de Carmona');
INSERT INTO `municipios` VALUES ('1835', '24', 'San Luis Potosí', '22', 'Moctezuma');
INSERT INTO `municipios` VALUES ('1836', '24', 'San Luis Potosí', '23', 'Rayón');
INSERT INTO `municipios` VALUES ('1837', '24', 'San Luis Potosí', '24', 'Rioverde');
INSERT INTO `municipios` VALUES ('1838', '24', 'San Luis Potosí', '25', 'Salinas');
INSERT INTO `municipios` VALUES ('1839', '24', 'San Luis Potosí', '26', 'San Antonio');
INSERT INTO `municipios` VALUES ('1840', '24', 'San Luis Potosí', '27', 'San Ciro de Acosta');
INSERT INTO `municipios` VALUES ('1841', '24', 'San Luis Potosí', '28', 'San Luis Potosí');
INSERT INTO `municipios` VALUES ('1842', '24', 'San Luis Potosí', '29', 'San Martín Chalchicuautla');
INSERT INTO `municipios` VALUES ('1843', '24', 'San Luis Potosí', '30', 'San Nicolás Tolentino');
INSERT INTO `municipios` VALUES ('1844', '24', 'San Luis Potosí', '31', 'Santa Catarina');
INSERT INTO `municipios` VALUES ('1845', '24', 'San Luis Potosí', '32', 'Santa María del Río');
INSERT INTO `municipios` VALUES ('1846', '24', 'San Luis Potosí', '33', 'Santo Domingo');
INSERT INTO `municipios` VALUES ('1847', '24', 'San Luis Potosí', '34', 'San Vicente Tancuayalab');
INSERT INTO `municipios` VALUES ('1848', '24', 'San Luis Potosí', '35', 'Soledad de Graciano Sánchez');
INSERT INTO `municipios` VALUES ('1849', '24', 'San Luis Potosí', '36', 'Tamasopo');
INSERT INTO `municipios` VALUES ('1850', '24', 'San Luis Potosí', '37', 'Tamazunchale');
INSERT INTO `municipios` VALUES ('1851', '24', 'San Luis Potosí', '38', 'Tampacán');
INSERT INTO `municipios` VALUES ('1852', '24', 'San Luis Potosí', '39', 'Tampamolón Corona');
INSERT INTO `municipios` VALUES ('1853', '24', 'San Luis Potosí', '40', 'Tamuín');
INSERT INTO `municipios` VALUES ('1854', '24', 'San Luis Potosí', '41', 'Tanlajás');
INSERT INTO `municipios` VALUES ('1855', '24', 'San Luis Potosí', '42', 'Tanquián de Escobedo');
INSERT INTO `municipios` VALUES ('1856', '24', 'San Luis Potosí', '43', 'Tierra Nueva');
INSERT INTO `municipios` VALUES ('1857', '24', 'San Luis Potosí', '44', 'Vanegas');
INSERT INTO `municipios` VALUES ('1858', '24', 'San Luis Potosí', '45', 'Venado');
INSERT INTO `municipios` VALUES ('1859', '24', 'San Luis Potosí', '46', 'Villa de Arriaga');
INSERT INTO `municipios` VALUES ('1860', '24', 'San Luis Potosí', '47', 'Villa de Guadalupe');
INSERT INTO `municipios` VALUES ('1861', '24', 'San Luis Potosí', '48', 'Villa de la Paz');
INSERT INTO `municipios` VALUES ('1862', '24', 'San Luis Potosí', '49', 'Villa de Ramos');
INSERT INTO `municipios` VALUES ('1863', '24', 'San Luis Potosí', '50', 'Villa de Reyes');
INSERT INTO `municipios` VALUES ('1864', '24', 'San Luis Potosí', '51', 'Villa Hidalgo');
INSERT INTO `municipios` VALUES ('1865', '24', 'San Luis Potosí', '52', 'Villa Juárez');
INSERT INTO `municipios` VALUES ('1866', '24', 'San Luis Potosí', '53', 'Axtla de Terrazas');
INSERT INTO `municipios` VALUES ('1867', '24', 'San Luis Potosí', '54', 'Xilitla');
INSERT INTO `municipios` VALUES ('1868', '24', 'San Luis Potosí', '55', 'Zaragoza');
INSERT INTO `municipios` VALUES ('1869', '24', 'San Luis Potosí', '56', 'Villa de Arista');
INSERT INTO `municipios` VALUES ('1870', '24', 'San Luis Potosí', '57', 'Matlapa');
INSERT INTO `municipios` VALUES ('1871', '24', 'San Luis Potosí', '58', 'El Naranjo');
INSERT INTO `municipios` VALUES ('1872', '25', 'Sinaloa', '1', 'Ahome');
INSERT INTO `municipios` VALUES ('1873', '25', 'Sinaloa', '2', 'Angostura');
INSERT INTO `municipios` VALUES ('1874', '25', 'Sinaloa', '3', 'Badiraguato');
INSERT INTO `municipios` VALUES ('1875', '25', 'Sinaloa', '4', 'Concordia');
INSERT INTO `municipios` VALUES ('1876', '25', 'Sinaloa', '5', 'Cosalá');
INSERT INTO `municipios` VALUES ('1877', '25', 'Sinaloa', '6', 'Culiacán');
INSERT INTO `municipios` VALUES ('1878', '25', 'Sinaloa', '7', 'Choix');
INSERT INTO `municipios` VALUES ('1879', '25', 'Sinaloa', '8', 'Elota');
INSERT INTO `municipios` VALUES ('1880', '25', 'Sinaloa', '9', 'Escuinapa');
INSERT INTO `municipios` VALUES ('1881', '25', 'Sinaloa', '10', 'El Fuerte');
INSERT INTO `municipios` VALUES ('1882', '25', 'Sinaloa', '11', 'Guasave');
INSERT INTO `municipios` VALUES ('1883', '25', 'Sinaloa', '12', 'Mazatlán');
INSERT INTO `municipios` VALUES ('1884', '25', 'Sinaloa', '13', 'Mocorito');
INSERT INTO `municipios` VALUES ('1885', '25', 'Sinaloa', '14', 'Rosario');
INSERT INTO `municipios` VALUES ('1886', '25', 'Sinaloa', '15', 'Salvador Alvarado');
INSERT INTO `municipios` VALUES ('1887', '25', 'Sinaloa', '16', 'San Ignacio');
INSERT INTO `municipios` VALUES ('1888', '25', 'Sinaloa', '17', 'Sinaloa');
INSERT INTO `municipios` VALUES ('1889', '25', 'Sinaloa', '18', 'Navolato');
INSERT INTO `municipios` VALUES ('1890', '26', 'Sonora', '1', 'Aconchi');
INSERT INTO `municipios` VALUES ('1891', '26', 'Sonora', '2', 'Agua Prieta');
INSERT INTO `municipios` VALUES ('1892', '26', 'Sonora', '3', 'Alamos');
INSERT INTO `municipios` VALUES ('1893', '26', 'Sonora', '4', 'Altar');
INSERT INTO `municipios` VALUES ('1894', '26', 'Sonora', '5', 'Arivechi');
INSERT INTO `municipios` VALUES ('1895', '26', 'Sonora', '6', 'Arizpe');
INSERT INTO `municipios` VALUES ('1896', '26', 'Sonora', '7', 'Atil');
INSERT INTO `municipios` VALUES ('1897', '26', 'Sonora', '8', 'Bacadéhuachi');
INSERT INTO `municipios` VALUES ('1898', '26', 'Sonora', '9', 'Bacanora');
INSERT INTO `municipios` VALUES ('1899', '26', 'Sonora', '10', 'Bacerac');
INSERT INTO `municipios` VALUES ('1900', '26', 'Sonora', '11', 'Bacoachi');
INSERT INTO `municipios` VALUES ('1901', '26', 'Sonora', '12', 'Bácum');
INSERT INTO `municipios` VALUES ('1902', '26', 'Sonora', '13', 'Banámichi');
INSERT INTO `municipios` VALUES ('1903', '26', 'Sonora', '14', 'Baviácora');
INSERT INTO `municipios` VALUES ('1904', '26', 'Sonora', '15', 'Bavispe');
INSERT INTO `municipios` VALUES ('1905', '26', 'Sonora', '16', 'Benjamín Hill');
INSERT INTO `municipios` VALUES ('1906', '26', 'Sonora', '17', 'Caborca');
INSERT INTO `municipios` VALUES ('1907', '26', 'Sonora', '18', 'Cajeme');
INSERT INTO `municipios` VALUES ('1908', '26', 'Sonora', '19', 'Cananea');
INSERT INTO `municipios` VALUES ('1909', '26', 'Sonora', '20', 'Carbó');
INSERT INTO `municipios` VALUES ('1910', '26', 'Sonora', '21', 'La Colorada');
INSERT INTO `municipios` VALUES ('1911', '26', 'Sonora', '22', 'Cucurpe');
INSERT INTO `municipios` VALUES ('1912', '26', 'Sonora', '23', 'Cumpas');
INSERT INTO `municipios` VALUES ('1913', '26', 'Sonora', '24', 'Divisaderos');
INSERT INTO `municipios` VALUES ('1914', '26', 'Sonora', '25', 'Empalme');
INSERT INTO `municipios` VALUES ('1915', '26', 'Sonora', '26', 'Etchojoa');
INSERT INTO `municipios` VALUES ('1916', '26', 'Sonora', '27', 'Fronteras');
INSERT INTO `municipios` VALUES ('1917', '26', 'Sonora', '28', 'Granados');
INSERT INTO `municipios` VALUES ('1918', '26', 'Sonora', '29', 'Guaymas');
INSERT INTO `municipios` VALUES ('1919', '26', 'Sonora', '30', 'Hermosillo');
INSERT INTO `municipios` VALUES ('1920', '26', 'Sonora', '31', 'Huachinera');
INSERT INTO `municipios` VALUES ('1921', '26', 'Sonora', '32', 'Huásabas');
INSERT INTO `municipios` VALUES ('1922', '26', 'Sonora', '33', 'Huatabampo');
INSERT INTO `municipios` VALUES ('1923', '26', 'Sonora', '34', 'Huépac');
INSERT INTO `municipios` VALUES ('1924', '26', 'Sonora', '35', 'Imuris');
INSERT INTO `municipios` VALUES ('1925', '26', 'Sonora', '36', 'Magdalena');
INSERT INTO `municipios` VALUES ('1926', '26', 'Sonora', '37', 'Mazatán');
INSERT INTO `municipios` VALUES ('1927', '26', 'Sonora', '38', 'Moctezuma');
INSERT INTO `municipios` VALUES ('1928', '26', 'Sonora', '39', 'Naco');
INSERT INTO `municipios` VALUES ('1929', '26', 'Sonora', '40', 'Nácori Chico');
INSERT INTO `municipios` VALUES ('1930', '26', 'Sonora', '41', 'Nacozari de García');
INSERT INTO `municipios` VALUES ('1931', '26', 'Sonora', '42', 'Navojoa');
INSERT INTO `municipios` VALUES ('1932', '26', 'Sonora', '43', 'Nogales');
INSERT INTO `municipios` VALUES ('1933', '26', 'Sonora', '44', 'Onavas');
INSERT INTO `municipios` VALUES ('1934', '26', 'Sonora', '45', 'Opodepe');
INSERT INTO `municipios` VALUES ('1935', '26', 'Sonora', '46', 'Oquitoa');
INSERT INTO `municipios` VALUES ('1936', '26', 'Sonora', '47', 'Pitiquito');
INSERT INTO `municipios` VALUES ('1937', '26', 'Sonora', '48', 'Puerto Peñasco');
INSERT INTO `municipios` VALUES ('1938', '26', 'Sonora', '49', 'Quiriego');
INSERT INTO `municipios` VALUES ('1939', '26', 'Sonora', '50', 'Rayón');
INSERT INTO `municipios` VALUES ('1940', '26', 'Sonora', '51', 'Rosario');
INSERT INTO `municipios` VALUES ('1941', '26', 'Sonora', '52', 'Sahuaripa');
INSERT INTO `municipios` VALUES ('1942', '26', 'Sonora', '53', 'San Felipe de Jesús');
INSERT INTO `municipios` VALUES ('1943', '26', 'Sonora', '54', 'San Javier');
INSERT INTO `municipios` VALUES ('1944', '26', 'Sonora', '55', 'San Luis Río Colorado');
INSERT INTO `municipios` VALUES ('1945', '26', 'Sonora', '56', 'San Miguel de Horcasitas');
INSERT INTO `municipios` VALUES ('1946', '26', 'Sonora', '57', 'San Pedro de la Cueva');
INSERT INTO `municipios` VALUES ('1947', '26', 'Sonora', '58', 'Santa Ana');
INSERT INTO `municipios` VALUES ('1948', '26', 'Sonora', '59', 'Santa Cruz');
INSERT INTO `municipios` VALUES ('1949', '26', 'Sonora', '60', 'Sáric');
INSERT INTO `municipios` VALUES ('1950', '26', 'Sonora', '61', 'Soyopa');
INSERT INTO `municipios` VALUES ('1951', '26', 'Sonora', '62', 'Suaqui Grande');
INSERT INTO `municipios` VALUES ('1952', '26', 'Sonora', '63', 'Tepache');
INSERT INTO `municipios` VALUES ('1953', '26', 'Sonora', '64', 'Trincheras');
INSERT INTO `municipios` VALUES ('1954', '26', 'Sonora', '65', 'Tubutama');
INSERT INTO `municipios` VALUES ('1955', '26', 'Sonora', '66', 'Ures');
INSERT INTO `municipios` VALUES ('1956', '26', 'Sonora', '67', 'Villa Hidalgo');
INSERT INTO `municipios` VALUES ('1957', '26', 'Sonora', '68', 'Villa Pesqueira');
INSERT INTO `municipios` VALUES ('1958', '26', 'Sonora', '69', 'Yécora');
INSERT INTO `municipios` VALUES ('1959', '26', 'Sonora', '70', 'General Plutarco Elías Calles');
INSERT INTO `municipios` VALUES ('1960', '26', 'Sonora', '71', 'Benito Juárez');
INSERT INTO `municipios` VALUES ('1961', '26', 'Sonora', '72', 'San Ignacio Río Muerto');
INSERT INTO `municipios` VALUES ('1962', '27', 'Tabasco', '1', 'Balancán');
INSERT INTO `municipios` VALUES ('1963', '27', 'Tabasco', '2', 'Cárdenas');
INSERT INTO `municipios` VALUES ('1964', '27', 'Tabasco', '3', 'Centla');
INSERT INTO `municipios` VALUES ('1965', '27', 'Tabasco', '4', 'Centro');
INSERT INTO `municipios` VALUES ('1966', '27', 'Tabasco', '5', 'Comalcalco');
INSERT INTO `municipios` VALUES ('1967', '27', 'Tabasco', '6', 'Cunduacán');
INSERT INTO `municipios` VALUES ('1968', '27', 'Tabasco', '7', 'Emiliano Zapata');
INSERT INTO `municipios` VALUES ('1969', '27', 'Tabasco', '8', 'Huimanguillo');
INSERT INTO `municipios` VALUES ('1970', '27', 'Tabasco', '9', 'Jalapa');
INSERT INTO `municipios` VALUES ('1971', '27', 'Tabasco', '10', 'Jalpa de Méndez');
INSERT INTO `municipios` VALUES ('1972', '27', 'Tabasco', '11', 'Jonuta');
INSERT INTO `municipios` VALUES ('1973', '27', 'Tabasco', '12', 'Macuspana');
INSERT INTO `municipios` VALUES ('1974', '27', 'Tabasco', '13', 'Nacajuca');
INSERT INTO `municipios` VALUES ('1975', '27', 'Tabasco', '14', 'Paraíso');
INSERT INTO `municipios` VALUES ('1976', '27', 'Tabasco', '15', 'Tacotalpa');
INSERT INTO `municipios` VALUES ('1977', '27', 'Tabasco', '16', 'Teapa');
INSERT INTO `municipios` VALUES ('1978', '27', 'Tabasco', '17', 'Tenosique');
INSERT INTO `municipios` VALUES ('1979', '28', 'Tamaulipas', '1', 'Abasolo');
INSERT INTO `municipios` VALUES ('1980', '28', 'Tamaulipas', '2', 'Aldama');
INSERT INTO `municipios` VALUES ('1981', '28', 'Tamaulipas', '3', 'Altamira');
INSERT INTO `municipios` VALUES ('1982', '28', 'Tamaulipas', '4', 'Antiguo Morelos');
INSERT INTO `municipios` VALUES ('1983', '28', 'Tamaulipas', '5', 'Burgos');
INSERT INTO `municipios` VALUES ('1984', '28', 'Tamaulipas', '6', 'Bustamante');
INSERT INTO `municipios` VALUES ('1985', '28', 'Tamaulipas', '7', 'Camargo');
INSERT INTO `municipios` VALUES ('1986', '28', 'Tamaulipas', '8', 'Casas');
INSERT INTO `municipios` VALUES ('1987', '28', 'Tamaulipas', '9', 'Ciudad Madero');
INSERT INTO `municipios` VALUES ('1988', '28', 'Tamaulipas', '10', 'Cruillas');
INSERT INTO `municipios` VALUES ('1989', '28', 'Tamaulipas', '11', 'Gómez Farías');
INSERT INTO `municipios` VALUES ('1990', '28', 'Tamaulipas', '12', 'González');
INSERT INTO `municipios` VALUES ('1991', '28', 'Tamaulipas', '13', 'Güémez');
INSERT INTO `municipios` VALUES ('1992', '28', 'Tamaulipas', '14', 'Guerrero');
INSERT INTO `municipios` VALUES ('1993', '28', 'Tamaulipas', '15', 'Gustavo Díaz Ordaz');
INSERT INTO `municipios` VALUES ('1994', '28', 'Tamaulipas', '16', 'Hidalgo');
INSERT INTO `municipios` VALUES ('1995', '28', 'Tamaulipas', '17', 'Jaumave');
INSERT INTO `municipios` VALUES ('1996', '28', 'Tamaulipas', '18', 'Jiménez');
INSERT INTO `municipios` VALUES ('1997', '28', 'Tamaulipas', '19', 'Llera');
INSERT INTO `municipios` VALUES ('1998', '28', 'Tamaulipas', '20', 'Mainero');
INSERT INTO `municipios` VALUES ('1999', '28', 'Tamaulipas', '21', 'El Mante');
INSERT INTO `municipios` VALUES ('2000', '28', 'Tamaulipas', '22', 'Matamoros');
INSERT INTO `municipios` VALUES ('2001', '28', 'Tamaulipas', '23', 'Méndez');
INSERT INTO `municipios` VALUES ('2002', '28', 'Tamaulipas', '24', 'Mier');
INSERT INTO `municipios` VALUES ('2003', '28', 'Tamaulipas', '25', 'Miguel Alemán');
INSERT INTO `municipios` VALUES ('2004', '28', 'Tamaulipas', '26', 'Miquihuana');
INSERT INTO `municipios` VALUES ('2005', '28', 'Tamaulipas', '27', 'Nuevo Laredo');
INSERT INTO `municipios` VALUES ('2006', '28', 'Tamaulipas', '28', 'Nuevo Morelos');
INSERT INTO `municipios` VALUES ('2007', '28', 'Tamaulipas', '29', 'Ocampo');
INSERT INTO `municipios` VALUES ('2008', '28', 'Tamaulipas', '30', 'Padilla');
INSERT INTO `municipios` VALUES ('2009', '28', 'Tamaulipas', '31', 'Palmillas');
INSERT INTO `municipios` VALUES ('2010', '28', 'Tamaulipas', '32', 'Reynosa');
INSERT INTO `municipios` VALUES ('2011', '28', 'Tamaulipas', '33', 'Río Bravo');
INSERT INTO `municipios` VALUES ('2012', '28', 'Tamaulipas', '34', 'San Carlos');
INSERT INTO `municipios` VALUES ('2013', '28', 'Tamaulipas', '35', 'San Fernando');
INSERT INTO `municipios` VALUES ('2014', '28', 'Tamaulipas', '36', 'San Nicolás');
INSERT INTO `municipios` VALUES ('2015', '28', 'Tamaulipas', '37', 'Soto la Marina');
INSERT INTO `municipios` VALUES ('2016', '28', 'Tamaulipas', '38', 'Tampico');
INSERT INTO `municipios` VALUES ('2017', '28', 'Tamaulipas', '39', 'Tula');
INSERT INTO `municipios` VALUES ('2018', '28', 'Tamaulipas', '40', 'Valle Hermoso');
INSERT INTO `municipios` VALUES ('2019', '28', 'Tamaulipas', '41', 'Victoria');
INSERT INTO `municipios` VALUES ('2020', '28', 'Tamaulipas', '42', 'Villagrán');
INSERT INTO `municipios` VALUES ('2021', '28', 'Tamaulipas', '43', 'Xicoténcatl');
INSERT INTO `municipios` VALUES ('2022', '29', 'Tlaxcala', '1', 'Amaxac de Guerrero');
INSERT INTO `municipios` VALUES ('2023', '29', 'Tlaxcala', '2', 'Apetatitlán de Antonio Carvajal');
INSERT INTO `municipios` VALUES ('2024', '29', 'Tlaxcala', '3', 'Atlangatepec');
INSERT INTO `municipios` VALUES ('2025', '29', 'Tlaxcala', '4', 'Atltzayanca');
INSERT INTO `municipios` VALUES ('2026', '29', 'Tlaxcala', '5', 'Apizaco');
INSERT INTO `municipios` VALUES ('2027', '29', 'Tlaxcala', '6', 'Calpulalpan');
INSERT INTO `municipios` VALUES ('2028', '29', 'Tlaxcala', '7', 'El Carmen Tequexquitla');
INSERT INTO `municipios` VALUES ('2029', '29', 'Tlaxcala', '8', 'Cuapiaxtla');
INSERT INTO `municipios` VALUES ('2030', '29', 'Tlaxcala', '9', 'Cuaxomulco');
INSERT INTO `municipios` VALUES ('2031', '29', 'Tlaxcala', '10', 'Chiautempan');
INSERT INTO `municipios` VALUES ('2032', '29', 'Tlaxcala', '11', 'Muñoz de Domingo Arenas');
INSERT INTO `municipios` VALUES ('2033', '29', 'Tlaxcala', '12', 'Españita');
INSERT INTO `municipios` VALUES ('2034', '29', 'Tlaxcala', '13', 'Huamantla');
INSERT INTO `municipios` VALUES ('2035', '29', 'Tlaxcala', '14', 'Hueyotlipan');
INSERT INTO `municipios` VALUES ('2036', '29', 'Tlaxcala', '15', 'Ixtacuixtla de Mariano Matamoros');
INSERT INTO `municipios` VALUES ('2037', '29', 'Tlaxcala', '16', 'Ixtenco');
INSERT INTO `municipios` VALUES ('2038', '29', 'Tlaxcala', '17', 'Mazatecochco de José María Morelos');
INSERT INTO `municipios` VALUES ('2039', '29', 'Tlaxcala', '18', 'Contla de Juan Cuamatzi');
INSERT INTO `municipios` VALUES ('2040', '29', 'Tlaxcala', '19', 'Tepetitla de Lardizábal');
INSERT INTO `municipios` VALUES ('2041', '29', 'Tlaxcala', '20', 'Sanctórum de Lázaro Cárdenas');
INSERT INTO `municipios` VALUES ('2042', '29', 'Tlaxcala', '21', 'Nanacamilpa de Mariano Arista');
INSERT INTO `municipios` VALUES ('2043', '29', 'Tlaxcala', '22', 'Acuamanala de Miguel Hidalgo');
INSERT INTO `municipios` VALUES ('2044', '29', 'Tlaxcala', '23', 'Natívitas');
INSERT INTO `municipios` VALUES ('2045', '29', 'Tlaxcala', '24', 'Panotla');
INSERT INTO `municipios` VALUES ('2046', '29', 'Tlaxcala', '25', 'San Pablo del Monte');
INSERT INTO `municipios` VALUES ('2047', '29', 'Tlaxcala', '26', 'Santa Cruz Tlaxcala');
INSERT INTO `municipios` VALUES ('2048', '29', 'Tlaxcala', '27', 'Tenancingo');
INSERT INTO `municipios` VALUES ('2049', '29', 'Tlaxcala', '28', 'Teolocholco');
INSERT INTO `municipios` VALUES ('2050', '29', 'Tlaxcala', '29', 'Tepeyanco');
INSERT INTO `municipios` VALUES ('2051', '29', 'Tlaxcala', '30', 'Terrenate');
INSERT INTO `municipios` VALUES ('2052', '29', 'Tlaxcala', '31', 'Tetla de la Solidaridad');
INSERT INTO `municipios` VALUES ('2053', '29', 'Tlaxcala', '32', 'Tetlatlahuca');
INSERT INTO `municipios` VALUES ('2054', '29', 'Tlaxcala', '33', 'Tlaxcala');
INSERT INTO `municipios` VALUES ('2055', '29', 'Tlaxcala', '34', 'Tlaxco');
INSERT INTO `municipios` VALUES ('2056', '29', 'Tlaxcala', '35', 'Tocatlán');
INSERT INTO `municipios` VALUES ('2057', '29', 'Tlaxcala', '36', 'Totolac');
INSERT INTO `municipios` VALUES ('2058', '29', 'Tlaxcala', '37', 'Ziltlaltépec de Trinidad Sánchez Santos');
INSERT INTO `municipios` VALUES ('2059', '29', 'Tlaxcala', '38', 'Tzompantepec');
INSERT INTO `municipios` VALUES ('2060', '29', 'Tlaxcala', '39', 'Xaloztoc');
INSERT INTO `municipios` VALUES ('2061', '29', 'Tlaxcala', '40', 'Xaltocan');
INSERT INTO `municipios` VALUES ('2062', '29', 'Tlaxcala', '41', 'Papalotla de Xicohténcatl');
INSERT INTO `municipios` VALUES ('2063', '29', 'Tlaxcala', '42', 'Xicohtzinco');
INSERT INTO `municipios` VALUES ('2064', '29', 'Tlaxcala', '43', 'Yauhquemehcan');
INSERT INTO `municipios` VALUES ('2065', '29', 'Tlaxcala', '44', 'Zacatelco');
INSERT INTO `municipios` VALUES ('2066', '29', 'Tlaxcala', '45', 'Benito Juárez');
INSERT INTO `municipios` VALUES ('2067', '29', 'Tlaxcala', '46', 'Emiliano Zapata');
INSERT INTO `municipios` VALUES ('2068', '29', 'Tlaxcala', '47', 'Lázaro Cárdenas');
INSERT INTO `municipios` VALUES ('2069', '29', 'Tlaxcala', '48', 'La Magdalena Tlaltelulco');
INSERT INTO `municipios` VALUES ('2070', '29', 'Tlaxcala', '49', 'San Damián Texóloc');
INSERT INTO `municipios` VALUES ('2071', '29', 'Tlaxcala', '50', 'San Francisco Tetlanohcan');
INSERT INTO `municipios` VALUES ('2072', '29', 'Tlaxcala', '51', 'San Jerónimo Zacualpan');
INSERT INTO `municipios` VALUES ('2073', '29', 'Tlaxcala', '52', 'San José Teacalco');
INSERT INTO `municipios` VALUES ('2074', '29', 'Tlaxcala', '53', 'San Juan Huactzinco');
INSERT INTO `municipios` VALUES ('2075', '29', 'Tlaxcala', '54', 'San Lorenzo Axocomanitla');
INSERT INTO `municipios` VALUES ('2076', '29', 'Tlaxcala', '55', 'San Lucas Tecopilco');
INSERT INTO `municipios` VALUES ('2077', '29', 'Tlaxcala', '56', 'Santa Ana Nopalucan');
INSERT INTO `municipios` VALUES ('2078', '29', 'Tlaxcala', '57', 'Santa Apolonia Teacalco');
INSERT INTO `municipios` VALUES ('2079', '29', 'Tlaxcala', '58', 'Santa Catarina Ayometla');
INSERT INTO `municipios` VALUES ('2080', '29', 'Tlaxcala', '59', 'Santa Cruz Quilehtla');
INSERT INTO `municipios` VALUES ('2081', '29', 'Tlaxcala', '60', 'Santa Isabel Xiloxoxtla');
INSERT INTO `municipios` VALUES ('2082', '30', 'Veracruz de Ignacio de la Llave', '1', 'Acajete');
INSERT INTO `municipios` VALUES ('2083', '30', 'Veracruz de Ignacio de la Llave', '2', 'Acatlán');
INSERT INTO `municipios` VALUES ('2084', '30', 'Veracruz de Ignacio de la Llave', '3', 'Acayucan');
INSERT INTO `municipios` VALUES ('2085', '30', 'Veracruz de Ignacio de la Llave', '4', 'Actopan');
INSERT INTO `municipios` VALUES ('2086', '30', 'Veracruz de Ignacio de la Llave', '5', 'Acula');
INSERT INTO `municipios` VALUES ('2087', '30', 'Veracruz de Ignacio de la Llave', '6', 'Acultzingo');
INSERT INTO `municipios` VALUES ('2088', '30', 'Veracruz de Ignacio de la Llave', '7', 'Camarón de Tejeda');
INSERT INTO `municipios` VALUES ('2089', '30', 'Veracruz de Ignacio de la Llave', '8', 'Alpatláhuac');
INSERT INTO `municipios` VALUES ('2090', '30', 'Veracruz de Ignacio de la Llave', '9', 'Alto Lucero de Gutiérrez Barrios');
INSERT INTO `municipios` VALUES ('2091', '30', 'Veracruz de Ignacio de la Llave', '10', 'Altotonga');
INSERT INTO `municipios` VALUES ('2092', '30', 'Veracruz de Ignacio de la Llave', '11', 'Alvarado');
INSERT INTO `municipios` VALUES ('2093', '30', 'Veracruz de Ignacio de la Llave', '12', 'Amatitlán');
INSERT INTO `municipios` VALUES ('2094', '30', 'Veracruz de Ignacio de la Llave', '13', 'Naranjos Amatlán');
INSERT INTO `municipios` VALUES ('2095', '30', 'Veracruz de Ignacio de la Llave', '14', 'Amatlán de los Reyes');
INSERT INTO `municipios` VALUES ('2096', '30', 'Veracruz de Ignacio de la Llave', '15', 'Angel R. Cabada');
INSERT INTO `municipios` VALUES ('2097', '30', 'Veracruz de Ignacio de la Llave', '16', 'La Antigua');
INSERT INTO `municipios` VALUES ('2098', '30', 'Veracruz de Ignacio de la Llave', '17', 'Apazapan');
INSERT INTO `municipios` VALUES ('2099', '30', 'Veracruz de Ignacio de la Llave', '18', 'Aquila');
INSERT INTO `municipios` VALUES ('2100', '30', 'Veracruz de Ignacio de la Llave', '19', 'Astacinga');
INSERT INTO `municipios` VALUES ('2101', '30', 'Veracruz de Ignacio de la Llave', '20', 'Atlahuilco');
INSERT INTO `municipios` VALUES ('2102', '30', 'Veracruz de Ignacio de la Llave', '21', 'Atoyac');
INSERT INTO `municipios` VALUES ('2103', '30', 'Veracruz de Ignacio de la Llave', '22', 'Atzacan');
INSERT INTO `municipios` VALUES ('2104', '30', 'Veracruz de Ignacio de la Llave', '23', 'Atzalan');
INSERT INTO `municipios` VALUES ('2105', '30', 'Veracruz de Ignacio de la Llave', '24', 'Tlaltetela');
INSERT INTO `municipios` VALUES ('2106', '30', 'Veracruz de Ignacio de la Llave', '25', 'Ayahualulco');
INSERT INTO `municipios` VALUES ('2107', '30', 'Veracruz de Ignacio de la Llave', '26', 'Banderilla');
INSERT INTO `municipios` VALUES ('2108', '30', 'Veracruz de Ignacio de la Llave', '27', 'Benito Juárez');
INSERT INTO `municipios` VALUES ('2109', '30', 'Veracruz de Ignacio de la Llave', '28', 'Boca del Río');
INSERT INTO `municipios` VALUES ('2110', '30', 'Veracruz de Ignacio de la Llave', '29', 'Calcahualco');
INSERT INTO `municipios` VALUES ('2111', '30', 'Veracruz de Ignacio de la Llave', '30', 'Camerino Z. Mendoza');
INSERT INTO `municipios` VALUES ('2112', '30', 'Veracruz de Ignacio de la Llave', '31', 'Carrillo Puerto');
INSERT INTO `municipios` VALUES ('2113', '30', 'Veracruz de Ignacio de la Llave', '32', 'Catemaco');
INSERT INTO `municipios` VALUES ('2114', '30', 'Veracruz de Ignacio de la Llave', '33', 'Cazones de Herrera');
INSERT INTO `municipios` VALUES ('2115', '30', 'Veracruz de Ignacio de la Llave', '34', 'Cerro Azul');
INSERT INTO `municipios` VALUES ('2116', '30', 'Veracruz de Ignacio de la Llave', '35', 'Citlaltépetl');
INSERT INTO `municipios` VALUES ('2117', '30', 'Veracruz de Ignacio de la Llave', '36', 'Coacoatzintla');
INSERT INTO `municipios` VALUES ('2118', '30', 'Veracruz de Ignacio de la Llave', '37', 'Coahuitlán');
INSERT INTO `municipios` VALUES ('2119', '30', 'Veracruz de Ignacio de la Llave', '38', 'Coatepec');
INSERT INTO `municipios` VALUES ('2120', '30', 'Veracruz de Ignacio de la Llave', '39', 'Coatzacoalcos');
INSERT INTO `municipios` VALUES ('2121', '30', 'Veracruz de Ignacio de la Llave', '40', 'Coatzintla');
INSERT INTO `municipios` VALUES ('2122', '30', 'Veracruz de Ignacio de la Llave', '41', 'Coetzala');
INSERT INTO `municipios` VALUES ('2123', '30', 'Veracruz de Ignacio de la Llave', '42', 'Colipa');
INSERT INTO `municipios` VALUES ('2124', '30', 'Veracruz de Ignacio de la Llave', '43', 'Comapa');
INSERT INTO `municipios` VALUES ('2125', '30', 'Veracruz de Ignacio de la Llave', '44', 'Córdoba');
INSERT INTO `municipios` VALUES ('2126', '30', 'Veracruz de Ignacio de la Llave', '45', 'Cosamaloapan de Carpio');
INSERT INTO `municipios` VALUES ('2127', '30', 'Veracruz de Ignacio de la Llave', '46', 'Cosautlán de Carvajal');
INSERT INTO `municipios` VALUES ('2128', '30', 'Veracruz de Ignacio de la Llave', '47', 'Coscomatepec');
INSERT INTO `municipios` VALUES ('2129', '30', 'Veracruz de Ignacio de la Llave', '48', 'Cosoleacaque');
INSERT INTO `municipios` VALUES ('2130', '30', 'Veracruz de Ignacio de la Llave', '49', 'Cotaxtla');
INSERT INTO `municipios` VALUES ('2131', '30', 'Veracruz de Ignacio de la Llave', '50', 'Coxquihui');
INSERT INTO `municipios` VALUES ('2132', '30', 'Veracruz de Ignacio de la Llave', '51', 'Coyutla');
INSERT INTO `municipios` VALUES ('2133', '30', 'Veracruz de Ignacio de la Llave', '52', 'Cuichapa');
INSERT INTO `municipios` VALUES ('2134', '30', 'Veracruz de Ignacio de la Llave', '53', 'Cuitláhuac');
INSERT INTO `municipios` VALUES ('2135', '30', 'Veracruz de Ignacio de la Llave', '54', 'Chacaltianguis');
INSERT INTO `municipios` VALUES ('2136', '30', 'Veracruz de Ignacio de la Llave', '55', 'Chalma');
INSERT INTO `municipios` VALUES ('2137', '30', 'Veracruz de Ignacio de la Llave', '56', 'Chiconamel');
INSERT INTO `municipios` VALUES ('2138', '30', 'Veracruz de Ignacio de la Llave', '57', 'Chiconquiaco');
INSERT INTO `municipios` VALUES ('2139', '30', 'Veracruz de Ignacio de la Llave', '58', 'Chicontepec');
INSERT INTO `municipios` VALUES ('2140', '30', 'Veracruz de Ignacio de la Llave', '59', 'Chinameca');
INSERT INTO `municipios` VALUES ('2141', '30', 'Veracruz de Ignacio de la Llave', '60', 'Chinampa de Gorostiza');
INSERT INTO `municipios` VALUES ('2142', '30', 'Veracruz de Ignacio de la Llave', '61', 'Las Choapas');
INSERT INTO `municipios` VALUES ('2143', '30', 'Veracruz de Ignacio de la Llave', '62', 'Chocamán');
INSERT INTO `municipios` VALUES ('2144', '30', 'Veracruz de Ignacio de la Llave', '63', 'Chontla');
INSERT INTO `municipios` VALUES ('2145', '30', 'Veracruz de Ignacio de la Llave', '64', 'Chumatlán');
INSERT INTO `municipios` VALUES ('2146', '30', 'Veracruz de Ignacio de la Llave', '65', 'Emiliano Zapata');
INSERT INTO `municipios` VALUES ('2147', '30', 'Veracruz de Ignacio de la Llave', '66', 'Espinal');
INSERT INTO `municipios` VALUES ('2148', '30', 'Veracruz de Ignacio de la Llave', '67', 'Filomeno Mata');
INSERT INTO `municipios` VALUES ('2149', '30', 'Veracruz de Ignacio de la Llave', '68', 'Fortín');
INSERT INTO `municipios` VALUES ('2150', '30', 'Veracruz de Ignacio de la Llave', '69', 'Gutiérrez Zamora');
INSERT INTO `municipios` VALUES ('2151', '30', 'Veracruz de Ignacio de la Llave', '70', 'Hidalgotitlán');
INSERT INTO `municipios` VALUES ('2152', '30', 'Veracruz de Ignacio de la Llave', '71', 'Huatusco');
INSERT INTO `municipios` VALUES ('2153', '30', 'Veracruz de Ignacio de la Llave', '72', 'Huayacocotla');
INSERT INTO `municipios` VALUES ('2154', '30', 'Veracruz de Ignacio de la Llave', '73', 'Hueyapan de Ocampo');
INSERT INTO `municipios` VALUES ('2155', '30', 'Veracruz de Ignacio de la Llave', '74', 'Huiloapan de Cuauhtémoc');
INSERT INTO `municipios` VALUES ('2156', '30', 'Veracruz de Ignacio de la Llave', '75', 'Ignacio de la Llave');
INSERT INTO `municipios` VALUES ('2157', '30', 'Veracruz de Ignacio de la Llave', '76', 'Ilamatlán');
INSERT INTO `municipios` VALUES ('2158', '30', 'Veracruz de Ignacio de la Llave', '77', 'Isla');
INSERT INTO `municipios` VALUES ('2159', '30', 'Veracruz de Ignacio de la Llave', '78', 'Ixcatepec');
INSERT INTO `municipios` VALUES ('2160', '30', 'Veracruz de Ignacio de la Llave', '79', 'Ixhuacán de los Reyes');
INSERT INTO `municipios` VALUES ('2161', '30', 'Veracruz de Ignacio de la Llave', '80', 'Ixhuatlán del Café');
INSERT INTO `municipios` VALUES ('2162', '30', 'Veracruz de Ignacio de la Llave', '81', 'Ixhuatlancillo');
INSERT INTO `municipios` VALUES ('2163', '30', 'Veracruz de Ignacio de la Llave', '82', 'Ixhuatlán del Sureste');
INSERT INTO `municipios` VALUES ('2164', '30', 'Veracruz de Ignacio de la Llave', '83', 'Ixhuatlán de Madero');
INSERT INTO `municipios` VALUES ('2165', '30', 'Veracruz de Ignacio de la Llave', '84', 'Ixmatlahuacan');
INSERT INTO `municipios` VALUES ('2166', '30', 'Veracruz de Ignacio de la Llave', '85', 'Ixtaczoquitlán');
INSERT INTO `municipios` VALUES ('2167', '30', 'Veracruz de Ignacio de la Llave', '86', 'Jalacingo');
INSERT INTO `municipios` VALUES ('2168', '30', 'Veracruz de Ignacio de la Llave', '87', 'Xalapa');
INSERT INTO `municipios` VALUES ('2169', '30', 'Veracruz de Ignacio de la Llave', '88', 'Jalcomulco');
INSERT INTO `municipios` VALUES ('2170', '30', 'Veracruz de Ignacio de la Llave', '89', 'Jáltipan');
INSERT INTO `municipios` VALUES ('2171', '30', 'Veracruz de Ignacio de la Llave', '90', 'Jamapa');
INSERT INTO `municipios` VALUES ('2172', '30', 'Veracruz de Ignacio de la Llave', '91', 'Jesús Carranza');
INSERT INTO `municipios` VALUES ('2173', '30', 'Veracruz de Ignacio de la Llave', '92', 'Xico');
INSERT INTO `municipios` VALUES ('2174', '30', 'Veracruz de Ignacio de la Llave', '93', 'Jilotepec');
INSERT INTO `municipios` VALUES ('2175', '30', 'Veracruz de Ignacio de la Llave', '94', 'Juan Rodríguez Clara');
INSERT INTO `municipios` VALUES ('2176', '30', 'Veracruz de Ignacio de la Llave', '95', 'Juchique de Ferrer');
INSERT INTO `municipios` VALUES ('2177', '30', 'Veracruz de Ignacio de la Llave', '96', 'Landero y Coss');
INSERT INTO `municipios` VALUES ('2178', '30', 'Veracruz de Ignacio de la Llave', '97', 'Lerdo de Tejada');
INSERT INTO `municipios` VALUES ('2179', '30', 'Veracruz de Ignacio de la Llave', '98', 'Magdalena');
INSERT INTO `municipios` VALUES ('2180', '30', 'Veracruz de Ignacio de la Llave', '99', 'Maltrata');
INSERT INTO `municipios` VALUES ('2181', '30', 'Veracruz de Ignacio de la Llave', '100', 'Manlio Fabio Altamirano');
INSERT INTO `municipios` VALUES ('2182', '30', 'Veracruz de Ignacio de la Llave', '101', 'Mariano Escobedo');
INSERT INTO `municipios` VALUES ('2183', '30', 'Veracruz de Ignacio de la Llave', '102', 'Martínez de la Torre');
INSERT INTO `municipios` VALUES ('2184', '30', 'Veracruz de Ignacio de la Llave', '103', 'Mecatlán');
INSERT INTO `municipios` VALUES ('2185', '30', 'Veracruz de Ignacio de la Llave', '104', 'Mecayapan');
INSERT INTO `municipios` VALUES ('2186', '30', 'Veracruz de Ignacio de la Llave', '105', 'Medellín de Bravo');
INSERT INTO `municipios` VALUES ('2187', '30', 'Veracruz de Ignacio de la Llave', '106', 'Miahuatlán');
INSERT INTO `municipios` VALUES ('2188', '30', 'Veracruz de Ignacio de la Llave', '107', 'Las Minas');
INSERT INTO `municipios` VALUES ('2189', '30', 'Veracruz de Ignacio de la Llave', '108', 'Minatitlán');
INSERT INTO `municipios` VALUES ('2190', '30', 'Veracruz de Ignacio de la Llave', '109', 'Misantla');
INSERT INTO `municipios` VALUES ('2191', '30', 'Veracruz de Ignacio de la Llave', '110', 'Mixtla de Altamirano');
INSERT INTO `municipios` VALUES ('2192', '30', 'Veracruz de Ignacio de la Llave', '111', 'Moloacán');
INSERT INTO `municipios` VALUES ('2193', '30', 'Veracruz de Ignacio de la Llave', '112', 'Naolinco');
INSERT INTO `municipios` VALUES ('2194', '30', 'Veracruz de Ignacio de la Llave', '113', 'Naranjal');
INSERT INTO `municipios` VALUES ('2195', '30', 'Veracruz de Ignacio de la Llave', '114', 'Nautla');
INSERT INTO `municipios` VALUES ('2196', '30', 'Veracruz de Ignacio de la Llave', '115', 'Nogales');
INSERT INTO `municipios` VALUES ('2197', '30', 'Veracruz de Ignacio de la Llave', '116', 'Oluta');
INSERT INTO `municipios` VALUES ('2198', '30', 'Veracruz de Ignacio de la Llave', '117', 'Omealca');
INSERT INTO `municipios` VALUES ('2199', '30', 'Veracruz de Ignacio de la Llave', '118', 'Orizaba');
INSERT INTO `municipios` VALUES ('2200', '30', 'Veracruz de Ignacio de la Llave', '119', 'Otatitlán');
INSERT INTO `municipios` VALUES ('2201', '30', 'Veracruz de Ignacio de la Llave', '120', 'Oteapan');
INSERT INTO `municipios` VALUES ('2202', '30', 'Veracruz de Ignacio de la Llave', '121', 'Ozuluama de Mascareñas');
INSERT INTO `municipios` VALUES ('2203', '30', 'Veracruz de Ignacio de la Llave', '122', 'Pajapan');
INSERT INTO `municipios` VALUES ('2204', '30', 'Veracruz de Ignacio de la Llave', '123', 'Pánuco');
INSERT INTO `municipios` VALUES ('2205', '30', 'Veracruz de Ignacio de la Llave', '124', 'Papantla');
INSERT INTO `municipios` VALUES ('2206', '30', 'Veracruz de Ignacio de la Llave', '125', 'Paso del Macho');
INSERT INTO `municipios` VALUES ('2207', '30', 'Veracruz de Ignacio de la Llave', '126', 'Paso de Ovejas');
INSERT INTO `municipios` VALUES ('2208', '30', 'Veracruz de Ignacio de la Llave', '127', 'La Perla');
INSERT INTO `municipios` VALUES ('2209', '30', 'Veracruz de Ignacio de la Llave', '128', 'Perote');
INSERT INTO `municipios` VALUES ('2210', '30', 'Veracruz de Ignacio de la Llave', '129', 'Platón Sánchez');
INSERT INTO `municipios` VALUES ('2211', '30', 'Veracruz de Ignacio de la Llave', '130', 'Playa Vicente');
INSERT INTO `municipios` VALUES ('2212', '30', 'Veracruz de Ignacio de la Llave', '131', 'Poza Rica de Hidalgo');
INSERT INTO `municipios` VALUES ('2213', '30', 'Veracruz de Ignacio de la Llave', '132', 'Las Vigas de Ramírez');
INSERT INTO `municipios` VALUES ('2214', '30', 'Veracruz de Ignacio de la Llave', '133', 'Pueblo Viejo');
INSERT INTO `municipios` VALUES ('2215', '30', 'Veracruz de Ignacio de la Llave', '134', 'Puente Nacional');
INSERT INTO `municipios` VALUES ('2216', '30', 'Veracruz de Ignacio de la Llave', '135', 'Rafael Delgado');
INSERT INTO `municipios` VALUES ('2217', '30', 'Veracruz de Ignacio de la Llave', '136', 'Rafael Lucio');
INSERT INTO `municipios` VALUES ('2218', '30', 'Veracruz de Ignacio de la Llave', '137', 'Los Reyes');
INSERT INTO `municipios` VALUES ('2219', '30', 'Veracruz de Ignacio de la Llave', '138', 'Río Blanco');
INSERT INTO `municipios` VALUES ('2220', '30', 'Veracruz de Ignacio de la Llave', '139', 'Saltabarranca');
INSERT INTO `municipios` VALUES ('2221', '30', 'Veracruz de Ignacio de la Llave', '140', 'San Andrés Tenejapan');
INSERT INTO `municipios` VALUES ('2222', '30', 'Veracruz de Ignacio de la Llave', '141', 'San Andrés Tuxtla');
INSERT INTO `municipios` VALUES ('2223', '30', 'Veracruz de Ignacio de la Llave', '142', 'San Juan Evangelista');
INSERT INTO `municipios` VALUES ('2224', '30', 'Veracruz de Ignacio de la Llave', '143', 'Santiago Tuxtla');
INSERT INTO `municipios` VALUES ('2225', '30', 'Veracruz de Ignacio de la Llave', '144', 'Sayula de Alemán');
INSERT INTO `municipios` VALUES ('2226', '30', 'Veracruz de Ignacio de la Llave', '145', 'Soconusco');
INSERT INTO `municipios` VALUES ('2227', '30', 'Veracruz de Ignacio de la Llave', '146', 'Sochiapa');
INSERT INTO `municipios` VALUES ('2228', '30', 'Veracruz de Ignacio de la Llave', '147', 'Soledad Atzompa');
INSERT INTO `municipios` VALUES ('2229', '30', 'Veracruz de Ignacio de la Llave', '148', 'Soledad de Doblado');
INSERT INTO `municipios` VALUES ('2230', '30', 'Veracruz de Ignacio de la Llave', '149', 'Soteapan');
INSERT INTO `municipios` VALUES ('2231', '30', 'Veracruz de Ignacio de la Llave', '150', 'Tamalín');
INSERT INTO `municipios` VALUES ('2232', '30', 'Veracruz de Ignacio de la Llave', '151', 'Tamiahua');
INSERT INTO `municipios` VALUES ('2233', '30', 'Veracruz de Ignacio de la Llave', '152', 'Tampico Alto');
INSERT INTO `municipios` VALUES ('2234', '30', 'Veracruz de Ignacio de la Llave', '153', 'Tancoco');
INSERT INTO `municipios` VALUES ('2235', '30', 'Veracruz de Ignacio de la Llave', '154', 'Tantima');
INSERT INTO `municipios` VALUES ('2236', '30', 'Veracruz de Ignacio de la Llave', '155', 'Tantoyuca');
INSERT INTO `municipios` VALUES ('2237', '30', 'Veracruz de Ignacio de la Llave', '156', 'Tatatila');
INSERT INTO `municipios` VALUES ('2238', '30', 'Veracruz de Ignacio de la Llave', '157', 'Castillo de Teayo');
INSERT INTO `municipios` VALUES ('2239', '30', 'Veracruz de Ignacio de la Llave', '158', 'Tecolutla');
INSERT INTO `municipios` VALUES ('2240', '30', 'Veracruz de Ignacio de la Llave', '159', 'Tehuipango');
INSERT INTO `municipios` VALUES ('2241', '30', 'Veracruz de Ignacio de la Llave', '160', 'Álamo Temapache');
INSERT INTO `municipios` VALUES ('2242', '30', 'Veracruz de Ignacio de la Llave', '161', 'Tempoal');
INSERT INTO `municipios` VALUES ('2243', '30', 'Veracruz de Ignacio de la Llave', '162', 'Tenampa');
INSERT INTO `municipios` VALUES ('2244', '30', 'Veracruz de Ignacio de la Llave', '163', 'Tenochtitlán');
INSERT INTO `municipios` VALUES ('2245', '30', 'Veracruz de Ignacio de la Llave', '164', 'Teocelo');
INSERT INTO `municipios` VALUES ('2246', '30', 'Veracruz de Ignacio de la Llave', '165', 'Tepatlaxco');
INSERT INTO `municipios` VALUES ('2247', '30', 'Veracruz de Ignacio de la Llave', '166', 'Tepetlán');
INSERT INTO `municipios` VALUES ('2248', '30', 'Veracruz de Ignacio de la Llave', '167', 'Tepetzintla');
INSERT INTO `municipios` VALUES ('2249', '30', 'Veracruz de Ignacio de la Llave', '168', 'Tequila');
INSERT INTO `municipios` VALUES ('2250', '30', 'Veracruz de Ignacio de la Llave', '169', 'José Azueta');
INSERT INTO `municipios` VALUES ('2251', '30', 'Veracruz de Ignacio de la Llave', '170', 'Texcatepec');
INSERT INTO `municipios` VALUES ('2252', '30', 'Veracruz de Ignacio de la Llave', '171', 'Texhuacán');
INSERT INTO `municipios` VALUES ('2253', '30', 'Veracruz de Ignacio de la Llave', '172', 'Texistepec');
INSERT INTO `municipios` VALUES ('2254', '30', 'Veracruz de Ignacio de la Llave', '173', 'Tezonapa');
INSERT INTO `municipios` VALUES ('2255', '30', 'Veracruz de Ignacio de la Llave', '174', 'Tierra Blanca');
INSERT INTO `municipios` VALUES ('2256', '30', 'Veracruz de Ignacio de la Llave', '175', 'Tihuatlán');
INSERT INTO `municipios` VALUES ('2257', '30', 'Veracruz de Ignacio de la Llave', '176', 'Tlacojalpan');
INSERT INTO `municipios` VALUES ('2258', '30', 'Veracruz de Ignacio de la Llave', '177', 'Tlacolulan');
INSERT INTO `municipios` VALUES ('2259', '30', 'Veracruz de Ignacio de la Llave', '178', 'Tlacotalpan');
INSERT INTO `municipios` VALUES ('2260', '30', 'Veracruz de Ignacio de la Llave', '179', 'Tlacotepec de Mejía');
INSERT INTO `municipios` VALUES ('2261', '30', 'Veracruz de Ignacio de la Llave', '180', 'Tlachichilco');
INSERT INTO `municipios` VALUES ('2262', '30', 'Veracruz de Ignacio de la Llave', '181', 'Tlalixcoyan');
INSERT INTO `municipios` VALUES ('2263', '30', 'Veracruz de Ignacio de la Llave', '182', 'Tlalnelhuayocan');
INSERT INTO `municipios` VALUES ('2264', '30', 'Veracruz de Ignacio de la Llave', '183', 'Tlapacoyan');
INSERT INTO `municipios` VALUES ('2265', '30', 'Veracruz de Ignacio de la Llave', '184', 'Tlaquilpa');
INSERT INTO `municipios` VALUES ('2266', '30', 'Veracruz de Ignacio de la Llave', '185', 'Tlilapan');
INSERT INTO `municipios` VALUES ('2267', '30', 'Veracruz de Ignacio de la Llave', '186', 'Tomatlán');
INSERT INTO `municipios` VALUES ('2268', '30', 'Veracruz de Ignacio de la Llave', '187', 'Tonayán');
INSERT INTO `municipios` VALUES ('2269', '30', 'Veracruz de Ignacio de la Llave', '188', 'Totutla');
INSERT INTO `municipios` VALUES ('2270', '30', 'Veracruz de Ignacio de la Llave', '189', 'Tuxpan');
INSERT INTO `municipios` VALUES ('2271', '30', 'Veracruz de Ignacio de la Llave', '190', 'Tuxtilla');
INSERT INTO `municipios` VALUES ('2272', '30', 'Veracruz de Ignacio de la Llave', '191', 'Ursulo Galván');
INSERT INTO `municipios` VALUES ('2273', '30', 'Veracruz de Ignacio de la Llave', '192', 'Vega de Alatorre');
INSERT INTO `municipios` VALUES ('2274', '30', 'Veracruz de Ignacio de la Llave', '193', 'Veracruz');
INSERT INTO `municipios` VALUES ('2275', '30', 'Veracruz de Ignacio de la Llave', '194', 'Villa Aldama');
INSERT INTO `municipios` VALUES ('2276', '30', 'Veracruz de Ignacio de la Llave', '195', 'Xoxocotla');
INSERT INTO `municipios` VALUES ('2277', '30', 'Veracruz de Ignacio de la Llave', '196', 'Yanga');
INSERT INTO `municipios` VALUES ('2278', '30', 'Veracruz de Ignacio de la Llave', '197', 'Yecuatla');
INSERT INTO `municipios` VALUES ('2279', '30', 'Veracruz de Ignacio de la Llave', '198', 'Zacualpan');
INSERT INTO `municipios` VALUES ('2280', '30', 'Veracruz de Ignacio de la Llave', '199', 'Zaragoza');
INSERT INTO `municipios` VALUES ('2281', '30', 'Veracruz de Ignacio de la Llave', '200', 'Zentla');
INSERT INTO `municipios` VALUES ('2282', '30', 'Veracruz de Ignacio de la Llave', '201', 'Zongolica');
INSERT INTO `municipios` VALUES ('2283', '30', 'Veracruz de Ignacio de la Llave', '202', 'Zontecomatlán de López y Fuentes');
INSERT INTO `municipios` VALUES ('2284', '30', 'Veracruz de Ignacio de la Llave', '203', 'Zozocolco de Hidalgo');
INSERT INTO `municipios` VALUES ('2285', '30', 'Veracruz de Ignacio de la Llave', '204', 'Agua Dulce');
INSERT INTO `municipios` VALUES ('2286', '30', 'Veracruz de Ignacio de la Llave', '205', 'El Higo');
INSERT INTO `municipios` VALUES ('2287', '30', 'Veracruz de Ignacio de la Llave', '206', 'Nanchital de Lázaro Cárdenas del Río');
INSERT INTO `municipios` VALUES ('2288', '30', 'Veracruz de Ignacio de la Llave', '207', 'Tres Valles');
INSERT INTO `municipios` VALUES ('2289', '30', 'Veracruz de Ignacio de la Llave', '208', 'Carlos A. Carrillo');
INSERT INTO `municipios` VALUES ('2290', '30', 'Veracruz de Ignacio de la Llave', '209', 'Tatahuicapan de Juárez');
INSERT INTO `municipios` VALUES ('2291', '30', 'Veracruz de Ignacio de la Llave', '210', 'Uxpanapa');
INSERT INTO `municipios` VALUES ('2292', '30', 'Veracruz de Ignacio de la Llave', '211', 'San Rafael');
INSERT INTO `municipios` VALUES ('2293', '30', 'Veracruz de Ignacio de la Llave', '212', 'Santiago Sochiapan');
INSERT INTO `municipios` VALUES ('2294', '31', 'Yucatán', '1', 'Abalá');
INSERT INTO `municipios` VALUES ('2295', '31', 'Yucatán', '2', 'Acanceh');
INSERT INTO `municipios` VALUES ('2296', '31', 'Yucatán', '3', 'Akil');
INSERT INTO `municipios` VALUES ('2297', '31', 'Yucatán', '4', 'Baca');
INSERT INTO `municipios` VALUES ('2298', '31', 'Yucatán', '5', 'Bokobá');
INSERT INTO `municipios` VALUES ('2299', '31', 'Yucatán', '6', 'Buctzotz');
INSERT INTO `municipios` VALUES ('2300', '31', 'Yucatán', '7', 'Cacalchén');
INSERT INTO `municipios` VALUES ('2301', '31', 'Yucatán', '8', 'Calotmul');
INSERT INTO `municipios` VALUES ('2302', '31', 'Yucatán', '9', 'Cansahcab');
INSERT INTO `municipios` VALUES ('2303', '31', 'Yucatán', '10', 'Cantamayec');
INSERT INTO `municipios` VALUES ('2304', '31', 'Yucatán', '11', 'Celestún');
INSERT INTO `municipios` VALUES ('2305', '31', 'Yucatán', '12', 'Cenotillo');
INSERT INTO `municipios` VALUES ('2306', '31', 'Yucatán', '13', 'Conkal');
INSERT INTO `municipios` VALUES ('2307', '31', 'Yucatán', '14', 'Cuncunul');
INSERT INTO `municipios` VALUES ('2308', '31', 'Yucatán', '15', 'Cuzamá');
INSERT INTO `municipios` VALUES ('2309', '31', 'Yucatán', '16', 'Chacsinkín');
INSERT INTO `municipios` VALUES ('2310', '31', 'Yucatán', '17', 'Chankom');
INSERT INTO `municipios` VALUES ('2311', '31', 'Yucatán', '18', 'Chapab');
INSERT INTO `municipios` VALUES ('2312', '31', 'Yucatán', '19', 'Chemax');
INSERT INTO `municipios` VALUES ('2313', '31', 'Yucatán', '20', 'Chicxulub Pueblo');
INSERT INTO `municipios` VALUES ('2314', '31', 'Yucatán', '21', 'Chichimilá');
INSERT INTO `municipios` VALUES ('2315', '31', 'Yucatán', '22', 'Chikindzonot');
INSERT INTO `municipios` VALUES ('2316', '31', 'Yucatán', '23', 'Chocholá');
INSERT INTO `municipios` VALUES ('2317', '31', 'Yucatán', '24', 'Chumayel');
INSERT INTO `municipios` VALUES ('2318', '31', 'Yucatán', '25', 'Dzán');
INSERT INTO `municipios` VALUES ('2319', '31', 'Yucatán', '26', 'Dzemul');
INSERT INTO `municipios` VALUES ('2320', '31', 'Yucatán', '27', 'Dzidzantún');
INSERT INTO `municipios` VALUES ('2321', '31', 'Yucatán', '28', 'Dzilam de Bravo');
INSERT INTO `municipios` VALUES ('2322', '31', 'Yucatán', '29', 'Dzilam González');
INSERT INTO `municipios` VALUES ('2323', '31', 'Yucatán', '30', 'Dzitás');
INSERT INTO `municipios` VALUES ('2324', '31', 'Yucatán', '31', 'Dzoncauich');
INSERT INTO `municipios` VALUES ('2325', '31', 'Yucatán', '32', 'Espita');
INSERT INTO `municipios` VALUES ('2326', '31', 'Yucatán', '33', 'Halachó');
INSERT INTO `municipios` VALUES ('2327', '31', 'Yucatán', '34', 'Hocabá');
INSERT INTO `municipios` VALUES ('2328', '31', 'Yucatán', '35', 'Hoctún');
INSERT INTO `municipios` VALUES ('2329', '31', 'Yucatán', '36', 'Homún');
INSERT INTO `municipios` VALUES ('2330', '31', 'Yucatán', '37', 'Huhí');
INSERT INTO `municipios` VALUES ('2331', '31', 'Yucatán', '38', 'Hunucmá');
INSERT INTO `municipios` VALUES ('2332', '31', 'Yucatán', '39', 'Ixil');
INSERT INTO `municipios` VALUES ('2333', '31', 'Yucatán', '40', 'Izamal');
INSERT INTO `municipios` VALUES ('2334', '31', 'Yucatán', '41', 'Kanasín');
INSERT INTO `municipios` VALUES ('2335', '31', 'Yucatán', '42', 'Kantunil');
INSERT INTO `municipios` VALUES ('2336', '31', 'Yucatán', '43', 'Kaua');
INSERT INTO `municipios` VALUES ('2337', '31', 'Yucatán', '44', 'Kinchil');
INSERT INTO `municipios` VALUES ('2338', '31', 'Yucatán', '45', 'Kopomá');
INSERT INTO `municipios` VALUES ('2339', '31', 'Yucatán', '46', 'Mama');
INSERT INTO `municipios` VALUES ('2340', '31', 'Yucatán', '47', 'Maní');
INSERT INTO `municipios` VALUES ('2341', '31', 'Yucatán', '48', 'Maxcanú');
INSERT INTO `municipios` VALUES ('2342', '31', 'Yucatán', '49', 'Mayapán');
INSERT INTO `municipios` VALUES ('2343', '31', 'Yucatán', '50', 'Mérida');
INSERT INTO `municipios` VALUES ('2344', '31', 'Yucatán', '51', 'Mocochá');
INSERT INTO `municipios` VALUES ('2345', '31', 'Yucatán', '52', 'Motul');
INSERT INTO `municipios` VALUES ('2346', '31', 'Yucatán', '53', 'Muna');
INSERT INTO `municipios` VALUES ('2347', '31', 'Yucatán', '54', 'Muxupip');
INSERT INTO `municipios` VALUES ('2348', '31', 'Yucatán', '55', 'Opichén');
INSERT INTO `municipios` VALUES ('2349', '31', 'Yucatán', '56', 'Oxkutzcab');
INSERT INTO `municipios` VALUES ('2350', '31', 'Yucatán', '57', 'Panabá');
INSERT INTO `municipios` VALUES ('2351', '31', 'Yucatán', '58', 'Peto');
INSERT INTO `municipios` VALUES ('2352', '31', 'Yucatán', '59', 'Progreso');
INSERT INTO `municipios` VALUES ('2353', '31', 'Yucatán', '60', 'Quintana Roo');
INSERT INTO `municipios` VALUES ('2354', '31', 'Yucatán', '61', 'Río Lagartos');
INSERT INTO `municipios` VALUES ('2355', '31', 'Yucatán', '62', 'Sacalum');
INSERT INTO `municipios` VALUES ('2356', '31', 'Yucatán', '63', 'Samahil');
INSERT INTO `municipios` VALUES ('2357', '31', 'Yucatán', '64', 'Sanahcat');
INSERT INTO `municipios` VALUES ('2358', '31', 'Yucatán', '65', 'San Felipe');
INSERT INTO `municipios` VALUES ('2359', '31', 'Yucatán', '66', 'Santa Elena');
INSERT INTO `municipios` VALUES ('2360', '31', 'Yucatán', '67', 'Seyé');
INSERT INTO `municipios` VALUES ('2361', '31', 'Yucatán', '68', 'Sinanché');
INSERT INTO `municipios` VALUES ('2362', '31', 'Yucatán', '69', 'Sotuta');
INSERT INTO `municipios` VALUES ('2363', '31', 'Yucatán', '70', 'Sucilá');
INSERT INTO `municipios` VALUES ('2364', '31', 'Yucatán', '71', 'Sudzal');
INSERT INTO `municipios` VALUES ('2365', '31', 'Yucatán', '72', 'Suma');
INSERT INTO `municipios` VALUES ('2366', '31', 'Yucatán', '73', 'Tahdziú');
INSERT INTO `municipios` VALUES ('2367', '31', 'Yucatán', '74', 'Tahmek');
INSERT INTO `municipios` VALUES ('2368', '31', 'Yucatán', '75', 'Teabo');
INSERT INTO `municipios` VALUES ('2369', '31', 'Yucatán', '76', 'Tecoh');
INSERT INTO `municipios` VALUES ('2370', '31', 'Yucatán', '77', 'Tekal de Venegas');
INSERT INTO `municipios` VALUES ('2371', '31', 'Yucatán', '78', 'Tekantó');
INSERT INTO `municipios` VALUES ('2372', '31', 'Yucatán', '79', 'Tekax');
INSERT INTO `municipios` VALUES ('2373', '31', 'Yucatán', '80', 'Tekit');
INSERT INTO `municipios` VALUES ('2374', '31', 'Yucatán', '81', 'Tekom');
INSERT INTO `municipios` VALUES ('2375', '31', 'Yucatán', '82', 'Telchac Pueblo');
INSERT INTO `municipios` VALUES ('2376', '31', 'Yucatán', '83', 'Telchac Puerto');
INSERT INTO `municipios` VALUES ('2377', '31', 'Yucatán', '84', 'Temax');
INSERT INTO `municipios` VALUES ('2378', '31', 'Yucatán', '85', 'Temozón');
INSERT INTO `municipios` VALUES ('2379', '31', 'Yucatán', '86', 'Tepakán');
INSERT INTO `municipios` VALUES ('2380', '31', 'Yucatán', '87', 'Tetiz');
INSERT INTO `municipios` VALUES ('2381', '31', 'Yucatán', '88', 'Teya');
INSERT INTO `municipios` VALUES ('2382', '31', 'Yucatán', '89', 'Ticul');
INSERT INTO `municipios` VALUES ('2383', '31', 'Yucatán', '90', 'Timucuy');
INSERT INTO `municipios` VALUES ('2384', '31', 'Yucatán', '91', 'Tinum');
INSERT INTO `municipios` VALUES ('2385', '31', 'Yucatán', '92', 'Tixcacalcupul');
INSERT INTO `municipios` VALUES ('2386', '31', 'Yucatán', '93', 'Tixkokob');
INSERT INTO `municipios` VALUES ('2387', '31', 'Yucatán', '94', 'Tixmehuac');
INSERT INTO `municipios` VALUES ('2388', '31', 'Yucatán', '95', 'Tixpéhual');
INSERT INTO `municipios` VALUES ('2389', '31', 'Yucatán', '96', 'Tizimín');
INSERT INTO `municipios` VALUES ('2390', '31', 'Yucatán', '97', 'Tunkás');
INSERT INTO `municipios` VALUES ('2391', '31', 'Yucatán', '98', 'Tzucacab');
INSERT INTO `municipios` VALUES ('2392', '31', 'Yucatán', '99', 'Uayma');
INSERT INTO `municipios` VALUES ('2393', '31', 'Yucatán', '100', 'Ucú');
INSERT INTO `municipios` VALUES ('2394', '31', 'Yucatán', '101', 'Umán');
INSERT INTO `municipios` VALUES ('2395', '31', 'Yucatán', '102', 'Valladolid');
INSERT INTO `municipios` VALUES ('2396', '31', 'Yucatán', '103', 'Xocchel');
INSERT INTO `municipios` VALUES ('2397', '31', 'Yucatán', '104', 'Yaxcabá');
INSERT INTO `municipios` VALUES ('2398', '31', 'Yucatán', '105', 'Yaxkukul');
INSERT INTO `municipios` VALUES ('2399', '31', 'Yucatán', '106', 'Yobaín');
INSERT INTO `municipios` VALUES ('2400', '32', 'Zacatecas', '1', 'Apozol');
INSERT INTO `municipios` VALUES ('2401', '32', 'Zacatecas', '2', 'Apulco');
INSERT INTO `municipios` VALUES ('2402', '32', 'Zacatecas', '3', 'Atolinga');
INSERT INTO `municipios` VALUES ('2403', '32', 'Zacatecas', '4', 'Benito Juárez');
INSERT INTO `municipios` VALUES ('2404', '32', 'Zacatecas', '5', 'Calera');
INSERT INTO `municipios` VALUES ('2405', '32', 'Zacatecas', '6', 'Cañitas de Felipe Pescador');
INSERT INTO `municipios` VALUES ('2406', '32', 'Zacatecas', '7', 'Concepción del Oro');
INSERT INTO `municipios` VALUES ('2407', '32', 'Zacatecas', '8', 'Cuauhtémoc');
INSERT INTO `municipios` VALUES ('2408', '32', 'Zacatecas', '9', 'Chalchihuites');
INSERT INTO `municipios` VALUES ('2409', '32', 'Zacatecas', '10', 'Fresnillo');
INSERT INTO `municipios` VALUES ('2410', '32', 'Zacatecas', '11', 'Trinidad García de la Cadena');
INSERT INTO `municipios` VALUES ('2411', '32', 'Zacatecas', '12', 'Genaro Codina');
INSERT INTO `municipios` VALUES ('2412', '32', 'Zacatecas', '13', 'General Enrique Estrada');
INSERT INTO `municipios` VALUES ('2413', '32', 'Zacatecas', '14', 'General Francisco R. Murguía');
INSERT INTO `municipios` VALUES ('2414', '32', 'Zacatecas', '15', 'El Plateado de Joaquín Amaro');
INSERT INTO `municipios` VALUES ('2415', '32', 'Zacatecas', '16', 'General Pánfilo Natera');
INSERT INTO `municipios` VALUES ('2416', '32', 'Zacatecas', '17', 'Guadalupe');
INSERT INTO `municipios` VALUES ('2417', '32', 'Zacatecas', '18', 'Huanusco');
INSERT INTO `municipios` VALUES ('2418', '32', 'Zacatecas', '19', 'Jalpa');
INSERT INTO `municipios` VALUES ('2419', '32', 'Zacatecas', '20', 'Jerez');
INSERT INTO `municipios` VALUES ('2420', '32', 'Zacatecas', '21', 'Jiménez del Teul');
INSERT INTO `municipios` VALUES ('2421', '32', 'Zacatecas', '22', 'Juan Aldama');
INSERT INTO `municipios` VALUES ('2422', '32', 'Zacatecas', '23', 'Juchipila');
INSERT INTO `municipios` VALUES ('2423', '32', 'Zacatecas', '24', 'Loreto');
INSERT INTO `municipios` VALUES ('2424', '32', 'Zacatecas', '25', 'Luis Moya');
INSERT INTO `municipios` VALUES ('2425', '32', 'Zacatecas', '26', 'Mazapil');
INSERT INTO `municipios` VALUES ('2426', '32', 'Zacatecas', '27', 'Melchor Ocampo');
INSERT INTO `municipios` VALUES ('2427', '32', 'Zacatecas', '28', 'Mezquital del Oro');
INSERT INTO `municipios` VALUES ('2428', '32', 'Zacatecas', '29', 'Miguel Auza');
INSERT INTO `municipios` VALUES ('2429', '32', 'Zacatecas', '30', 'Momax');
INSERT INTO `municipios` VALUES ('2430', '32', 'Zacatecas', '31', 'Monte Escobedo');
INSERT INTO `municipios` VALUES ('2431', '32', 'Zacatecas', '32', 'Morelos');
INSERT INTO `municipios` VALUES ('2432', '32', 'Zacatecas', '33', 'Moyahua de Estrada');
INSERT INTO `municipios` VALUES ('2433', '32', 'Zacatecas', '34', 'Nochistlán de Mejía');
INSERT INTO `municipios` VALUES ('2434', '32', 'Zacatecas', '35', 'Noria de Ángeles');
INSERT INTO `municipios` VALUES ('2435', '32', 'Zacatecas', '36', 'Ojocaliente');
INSERT INTO `municipios` VALUES ('2436', '32', 'Zacatecas', '37', 'Pánuco');
INSERT INTO `municipios` VALUES ('2437', '32', 'Zacatecas', '38', 'Pinos');
INSERT INTO `municipios` VALUES ('2438', '32', 'Zacatecas', '39', 'Río Grande');
INSERT INTO `municipios` VALUES ('2439', '32', 'Zacatecas', '40', 'Sain Alto');
INSERT INTO `municipios` VALUES ('2440', '32', 'Zacatecas', '41', 'El Salvador');
INSERT INTO `municipios` VALUES ('2441', '32', 'Zacatecas', '42', 'Sombrerete');
INSERT INTO `municipios` VALUES ('2442', '32', 'Zacatecas', '43', 'Susticacán');
INSERT INTO `municipios` VALUES ('2443', '32', 'Zacatecas', '44', 'Tabasco');
INSERT INTO `municipios` VALUES ('2444', '32', 'Zacatecas', '45', 'Tepechitlán');
INSERT INTO `municipios` VALUES ('2445', '32', 'Zacatecas', '46', 'Tepetongo');
INSERT INTO `municipios` VALUES ('2446', '32', 'Zacatecas', '47', 'Teúl de González Ortega');
INSERT INTO `municipios` VALUES ('2447', '32', 'Zacatecas', '48', 'Tlaltenango de Sánchez Román');
INSERT INTO `municipios` VALUES ('2448', '32', 'Zacatecas', '49', 'Valparaíso');
INSERT INTO `municipios` VALUES ('2449', '32', 'Zacatecas', '50', 'Vetagrande');
INSERT INTO `municipios` VALUES ('2450', '32', 'Zacatecas', '51', 'Villa de Cos');
INSERT INTO `municipios` VALUES ('2451', '32', 'Zacatecas', '52', 'Villa García');
INSERT INTO `municipios` VALUES ('2452', '32', 'Zacatecas', '53', 'Villa González Ortega');
INSERT INTO `municipios` VALUES ('2453', '32', 'Zacatecas', '54', 'Villa Hidalgo');
INSERT INTO `municipios` VALUES ('2454', '32', 'Zacatecas', '55', 'Villanueva');
INSERT INTO `municipios` VALUES ('2455', '32', 'Zacatecas', '56', 'Zacatecas');
INSERT INTO `municipios` VALUES ('2456', '32', 'Zacatecas', '57', 'Trancoso');
INSERT INTO `municipios` VALUES ('2457', '32', 'Zacatecas', '58', 'Santa María de la Paz');

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL auto_increment,
  `nombre` text,
  `ap_paterno` text,
  `ap_materno` text,
  `correo` text,
  `ecivil` text,
  `estado` text,
  `municipio` text,
  `colonia` text,
  `calle` text,
  `numero` int(11) default NULL,
  `telefono` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  `esusuario` int(11) default NULL,
  `estrabajador` int(11) default NULL,
  PRIMARY KEY  (`id_persona`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES ('25', 'Luis Angel', 'Aguirre', 'TreviÃ±o', 'luis_angel_at@hotmail.com', 'Soltero(a)', '19', '980', 'La Petaca', 'Juan Montero', '331', '8211066404', '2018-07-09', '14:08:42', '1', '30', '1', '1');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL auto_increment,
  `codigo_barras` int(11) default NULL,
  `nombre` text,
  `descripcion_producto` text,
  `id_tipo_producto` int(11) default NULL,
  `cantidad_ultima_agregada` int(11) default NULL,
  `precio_compra` double default NULL,
  `precio_venta` double default NULL,
  `id_proveedor` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  `cantidad_tienda` int(11) default NULL,
  `cantidad_almacen` int(11) default NULL,
  `total_producto` int(11) default NULL,
  `tipo_producto` text,
  PRIMARY KEY  (`id_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('68', '789', 'algo', '32132', '3', '100', '10', '12', '6', '2018-07-10', '02:25:11', '1', '41', null, '100', null, null);
INSERT INTO `productos` VALUES ('69', '125', 'otracosa', '321312', '3', '900', '10', '13', '6', '2018-07-10', '01:33:27', '1', '41', null, '1831', '250', null);
INSERT INTO `productos` VALUES ('70', '1221', 'ileche', 'lkjvyj', '3', '10', '10', '10', '6', '2018-07-10', '03:40:39', '1', '41', null, '2010', '2010', null);
INSERT INTO `productos` VALUES ('71', '1', 'holanda', 'kjgklj', '3', '10', '10', '12', '6', '2018-07-10', '13:57:09', '1', '41', '1', '90', '91', null);
INSERT INTO `productos` VALUES ('67', '989', 'Lecherita', 'Leche Quemada', '3', '10', '15', '23', '6', '2018-07-10', '12:51:23', '1', '41', null, null, null, null);
INSERT INTO `productos` VALUES ('73', '369', 'Choco Krispis', '850 Gramos', '6', '125', '16', '35', '6', '2018-07-10', '04:20:06', '1', '41', null, '595', '595', null);
INSERT INTO `productos` VALUES ('74', '987', 'Napolitano ', 'Pan con Chocolate ', '3', '21', '34', '50', '6', '2018-07-10', '08:18:43', '1', '41', null, '321', '321', null);

-- ----------------------------
-- Table structure for productos_tipo
-- ----------------------------
DROP TABLE IF EXISTS `productos_tipo`;
CREATE TABLE `productos_tipo` (
  `id_tipo_producto` int(11) NOT NULL auto_increment,
  `nombre_tipo_producto` text,
  `descripcion` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_tipo_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos_tipo
-- ----------------------------
INSERT INTO `productos_tipo` VALUES ('7', 'Cerveza', 'Bebida acoholica', '2018-07-10', '20:10:30', '0', '41');
INSERT INTO `productos_tipo` VALUES ('3', 'Enlatado', 'Latas', null, null, '1', null);
INSERT INTO `productos_tipo` VALUES ('6', 'Cereales', 'Nesquik', '0000-00-00', '00:00:00', '1', '0');

-- ----------------------------
-- Table structure for proveedores
-- ----------------------------
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL auto_increment,
  `nombre` text,
  `descripcion` text,
  `direccion` text,
  `telefono` text,
  `correo` text,
  `fax` text,
  `rfc` text,
  `id_tipo_proveedor` int(11) default NULL,
  `id_comprador` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_proveedor`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES ('6', 'Nestle', 'Cereales, yoghurth, etc', 'Av. Las Americas Nuevo LeÃ³n, MÃ©xico', '8214523695', 'nesquik@gmail.com', '3543543', 'SDV321SDD', '3', '1', '2018-07-10', '12:43:12', '1', '41');

-- ----------------------------
-- Table structure for proveedores_tipo
-- ----------------------------
DROP TABLE IF EXISTS `proveedores_tipo`;
CREATE TABLE `proveedores_tipo` (
  `id_tipo_proveedor` int(11) NOT NULL auto_increment,
  `nombre` text,
  `descripcion` text NOT NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` varchar(255) default NULL,
  PRIMARY KEY  (`id_tipo_proveedor`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedores_tipo
-- ----------------------------
INSERT INTO `proveedores_tipo` VALUES ('2', 'Enlatados', 'latas', '2018-06-29', '02:15:50', '1', '30');
INSERT INTO `proveedores_tipo` VALUES ('3', 'Lacteos', 'Leche, Yoghurt LALA', '2018-06-29', '02:18:48', '1', '30');

-- ----------------------------
-- Table structure for puestos
-- ----------------------------
DROP TABLE IF EXISTS `puestos`;
CREATE TABLE `puestos` (
  `id_puesto` int(11) NOT NULL auto_increment,
  `nom_puesto` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_puesto`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of puestos
-- ----------------------------
INSERT INTO `puestos` VALUES ('5', 'Cajero', '2018-05-21', '18:46:35', '1', '1');
INSERT INTO `puestos` VALUES ('16', 'lol', '2018-06-05', '09:46:12', '1', '0');
INSERT INTO `puestos` VALUES ('75', 'jjjj', '2018-06-26', '20:53:47', '1', '30');

-- ----------------------------
-- Table structure for sucursales
-- ----------------------------
DROP TABLE IF EXISTS `sucursales`;
CREATE TABLE `sucursales` (
  `id_sucursal` int(11) NOT NULL auto_increment,
  `nombre` text,
  `descripcion` text,
  `direccion` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_sucursal`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucursales
-- ----------------------------
INSERT INTO `sucursales` VALUES ('2', 'lol', 'no esta chida', 'Monterrey Nuevo Leon', '2018-06-21', '15:10:14', '1', '3');
INSERT INTO `sucursales` VALUES ('3', 'mision', 'nada', 'Sonora', '2018-06-21', '15:28:36', '1', '3');
INSERT INTO `sucursales` VALUES ('4', 'rty', '', '', '2018-06-26', '10:37:44', '0', '36');

-- ----------------------------
-- Table structure for tipo_pago
-- ----------------------------
DROP TABLE IF EXISTS `tipo_pago`;
CREATE TABLE `tipo_pago` (
  `id_tipo_pago` int(11) NOT NULL auto_increment,
  `nombre` text,
  `descripcion` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_tipo_pago`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_pago
-- ----------------------------
INSERT INTO `tipo_pago` VALUES ('1', 'Tarjeta CrÃ©dito/DÃ©bito', 'asfsdvgfb', '2018-06-21', '19:13:17', '1', '3');
INSERT INTO `tipo_pago` VALUES ('2', 'Vales de Despensa', 'Sedesol, Bonos, 70 y mas', '2018-06-26', '11:44:41', '1', '36');
INSERT INTO `tipo_pago` VALUES ('3', 'Efectivo', 'Billetes y monedas', '2018-06-26', '11:46:10', '1', '36');
INSERT INTO `tipo_pago` VALUES ('4', 'Credito1', 'Fiado', '2018-06-26', '11:47:35', '1', '36');

-- ----------------------------
-- Table structure for trabajadores
-- ----------------------------
DROP TABLE IF EXISTS `trabajadores`;
CREATE TABLE `trabajadores` (
  `id_trabajador` int(11) NOT NULL auto_increment,
  `num_empleado` int(11) default NULL,
  `id_departamento` int(11) default NULL,
  `id_puesto` int(11) default NULL,
  `fecha_ingreso` date default NULL,
  `id_persona` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_trabajador`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of trabajadores
-- ----------------------------
INSERT INTO `trabajadores` VALUES ('26', '929', '1', '5', '2018-07-09', '25', '2018-07-09', '14:09:11', '1', '30');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `id_persona` int(11) default NULL,
  `nom_usuario` text,
  `contra` text,
  `tipo_usuario` text,
  `caducidad` date default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  `id_user` int(11) default NULL,
  `primer_acceso` int(11) default NULL,
  `duplicado` text,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('41', '25', 'Gokulove', '4da47cd8c9da987779c51f2278c93ab1', 'Administrador', '2018-07-09', '2018-07-09', '14:09:49', '1', '30', '1', 'dbz');

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL auto_increment,
  `folio` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `subtotal` double default NULL,
  `total` double default NULL,
  `id_caja` int(11) default NULL,
  `id_sucursal` int(11) default NULL,
  PRIMARY KEY  (`id_venta`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ventas
-- ----------------------------
INSERT INTO `ventas` VALUES ('1', '1', '1', null, null, '80', '102', '1', '1');
INSERT INTO `ventas` VALUES ('2', null, null, null, null, null, null, '1', '1');

-- ----------------------------
-- Table structure for ventas_detalle
-- ----------------------------
DROP TABLE IF EXISTS `ventas_detalle`;
CREATE TABLE `ventas_detalle` (
  `id_detalle_venta` int(11) NOT NULL auto_increment,
  `id_venta` int(11) default NULL,
  `id_producto` int(11) default NULL,
  `cantidad` int(11) default NULL,
  `precio_unitario` double default NULL,
  `total` double default NULL,
  PRIMARY KEY  (`id_detalle_venta`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ventas_detalle
-- ----------------------------
INSERT INTO `ventas_detalle` VALUES ('1', '1', '1', '2', '20', '40');
INSERT INTO `ventas_detalle` VALUES ('2', '1', '2', '2', '20', '40');
INSERT INTO `ventas_detalle` VALUES ('3', null, '1', null, '1', null);
INSERT INTO `ventas_detalle` VALUES ('4', null, '1', null, '1', null);
INSERT INTO `ventas_detalle` VALUES ('5', null, '1', null, '1', null);
INSERT INTO `ventas_detalle` VALUES ('6', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('7', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('8', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('9', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('10', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('11', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('12', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('13', null, '3', null, '67', null);
INSERT INTO `ventas_detalle` VALUES ('14', null, '3', null, '67', null);
INSERT INTO `ventas_detalle` VALUES ('15', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('16', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('17', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('18', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('19', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('20', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('21', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('22', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('23', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('24', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('25', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('26', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('27', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('28', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('29', null, '2', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('30', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('31', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('32', null, '1', null, '20', null);
INSERT INTO `ventas_detalle` VALUES ('33', null, '2', null, '20', null);
