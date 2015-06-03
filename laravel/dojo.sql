-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela dojo.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_categoria` varchar(50) NOT NULL,
  `ds_categoria` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dojo.categoria: ~6 rows (aproximadamente)
DELETE FROM `categoria`;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id_categoria`, `nm_categoria`, `ds_categoria`, `created_at`, `updated_at`) VALUES
	(3, 'categoria do alemão', 'da cuica.\r\ncuica ASD ASD A', '2015-05-14 17:29:45', '2015-05-28 13:15:19'),
	(4, 'Categoria do Ricardo', 'dsfjhasdkjf f sad', '2015-05-14 17:48:00', '2015-05-14 17:48:00'),
	(5, 'Categoria do Alisson', 'sdfsdaf', '2015-05-14 17:48:08', '2015-05-14 17:48:08'),
	(6, 'Categoria do Giuseppe', 'fhsdaf', '2015-05-14 17:48:20', '2015-05-14 17:48:20'),
	(7, 'OUTRA CATEGORIA', 'OUTRA', '2015-05-28 13:15:29', '2015-05-28 13:15:29'),
	(8, 'categoria teste 321', 'testando  aaaa', '2015-05-28 13:23:55', '2015-05-28 13:24:26');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


-- Copiando estrutura para tabela dojo.comentario
DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `ds_comentario` text NOT NULL,
  `nm_email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `FK_comentario_post` (`id_post`),
  CONSTRAINT `FK_comentario_post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dojo.comentario: ~2 rows (aproximadamente)
DELETE FROM `comentario`;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` (`id_comentario`, `id_post`, `ds_comentario`, `nm_email`, `created_at`, `updated_at`) VALUES
	(1, 3, 'Alguma coisa aqui', 'stroff.felipe@gmail.com', '2015-05-28 11:17:41', '2015-05-28 11:17:42'),
	(2, 3, 'asdsadsadqui', 'dnevescarlos@gmail.com', '2015-05-28 11:17:41', '2015-05-28 11:17:42'),
	(4, 3, 'asdasdasdas', 'asdasd@adsa.com', '2015-06-03 12:36:23', '2015-06-03 12:36:23'),
	(5, 3, 'comentario bacana', 'mauricio@canoaste.com.br', '2015-06-03 12:36:39', '2015-06-03 12:36:39'),
	(6, 3, 'Meu comentario', 'douglas@canoastec.com', '2015-06-03 12:38:19', '2015-06-03 12:38:19'),
	(7, 3, '', '', '2015-06-03 12:39:08', '2015-06-03 12:39:08'),
	(8, 3, 'Teste', 'douglas@teste.com', '2015-06-03 13:09:00', '2015-06-03 13:09:00');
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;


-- Copiando estrutura para tabela dojo.post
DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ds_post` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_categoria` int(10) unsigned NOT NULL,
  `nm_titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `FK_post_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela dojo.post: ~7 rows (aproximadamente)
DELETE FROM `post`;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id_post`, `ds_post`, `created_at`, `updated_at`, `id_categoria`, `nm_titulo`) VALUES
	(2, 'Eiiitaaa Mainhaaa!! Esse Lorem ipsum é só na sacanageeem!! E que abundância meu irmão viuu!! Assim você vai matar o papai. Só digo uma coisa, Domingo ela não vai! Danadaa!! Vem minha odalisca, agora faz essa cobra coral subir!!! Pau que nasce torto, Nunca se endireita. Tchannn!! Tchannn!! Tu du du pááá! Eu gostchu muitchu, heinn! danadinha! Mainhaa! Agora use meu lorem ipsum ordinária!!! Olha o quibeee! rema, rema, ordinária!.', '2015-05-07 04:14:23', '2015-05-28 13:06:22', 3, 'exemplo'),
	(3, 'Você usa o Lorem Ipsum tradicional? Sabe de nada inocente!! Conheça meu lorem que é Tchan, Tchan, Tchannn!! Txu Txu Tu Paaaaa!! Vem, vem ordinária!! Venha provar do meu dendê que você não vai se arrepender. Só na sacanageeem!! Eu gostchu muitchu, heinn! Eitchaaa template cheio de abundância danadaaa!! Assim você mata o papai hein!? Etâaaa Mainhaaaaa...me abusa nesse seu layout, me gera, me geraaaa ordinária!!! Só na sacanagem!!!! Venha provar do meu dendê Tu du du pááá!.', '2015-05-07 04:15:02', '2015-05-21 17:09:16', 4, 'teste'),
	(4, 'werwerwerw', '2015-05-14 17:42:48', '2015-05-21 17:09:10', 3, 'teste2'),
	(5, 'post novo do alisson', '2015-05-21 16:52:39', '2015-05-21 17:07:06', 5, 'teste3'),
	(6, 'otimizando asdas ', '2015-05-21 18:46:04', '2015-05-21 18:46:20', 5, 'teste4'),
	(7, 'asdas das 12312', '2015-05-21 18:47:13', '2015-05-21 18:47:13', 3, 'teste5'),
	(8, 'um novo 2', '2015-05-21 20:18:00', '2015-05-21 20:18:08', 3, 'teste6'),
	(9, 'Texto texto', '2015-05-28 13:50:12', '2015-05-28 13:52:09', 3, 'aaasdadad');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
