-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Dez-2021 às 16:33
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos_aulas`
--

DROP TABLE IF EXISTS `acessos_aulas`;
CREATE TABLE IF NOT EXISTS `acessos_aulas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int NOT NULL,
  `aula_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `acessos_aulas`
--

INSERT INTO `acessos_aulas` (`id`, `ip`, `usuario_id`, `aula_id`, `created`, `modified`) VALUES
(1, '177.204.208.175', 1, 1, '2021-12-23 01:00:00', NULL),
(2, '177.204.208.176', 2, 1, '2021-12-23 01:10:00', NULL),
(3, '177.204.208.177', 3, 1, '2021-12-23 01:20:00', NULL),
(4, '177.204.208.175', 1, 2, '2021-12-23 01:30:00', NULL),
(5, '177.204.208.175', 1, 3, '2021-12-23 01:40:00', NULL),
(6, '177.204.208.177', 3, 2, '2021-12-23 01:50:00', NULL),
(7, '177.204.208.176', 2, 2, '2021-12-23 02:00:00', NULL),
(9, '177.204.208.177', 3, 3, '2021-12-23 02:20:00', NULL),
(10, '177.204.208.176', 2, 3, '2021-12-23 02:30:00', NULL),
(12, '177.204.208.175', 1, 4, '2021-12-23 02:50:00', NULL),
(13, '177.204.208.175', 1, 5, '2021-12-23 03:00:00', NULL),
(14, '177.204.208.178', 4, 1, '2021-12-23 03:10:00', NULL),
(16, '177.204.208.175', 1, 6, '2021-12-23 03:30:00', NULL),
(17, '177.204.208.178', 4, 2, '2021-12-23 03:40:00', NULL),
(18, '177.204.208.177', 3, 4, '2021-12-23 03:50:00', NULL),
(19, '177.204.208.178', 5, 1, '2021-12-23 04:00:00', NULL),
(23, '177.204.208.178', 5, 2, '2021-12-23 04:40:00', NULL),
(24, '177.204.208.176', 2, 4, '2021-12-23 04:50:00', NULL),
(25, '177.204.208.175', 1, 7, '2021-12-23 05:00:00', NULL),
(26, '177.204.208.177', 3, 5, '2021-12-23 05:10:00', NULL),
(27, '177.204.208.175', 1, 8, '2021-12-23 05:20:00', NULL),
(28, '177.204.208.178', 4, 3, '2021-12-23 05:30:00', NULL),
(29, '177.204.208.176', 2, 5, '2021-12-23 05:40:00', NULL),
(30, '177.204.208.175', 1, 9, '2021-12-23 05:50:00', NULL),
(32, '177.204.208.175', 1, 10, '2021-12-23 06:10:00', NULL),
(33, '177.204.208.177', 3, 6, '2021-12-23 06:20:00', NULL),
(34, '177.204.208.176', 2, 6, '2021-12-23 06:30:00', NULL),
(35, '177.204.208.178', 4, 5, '2021-12-23 06:40:00', NULL),
(36, '177.204.208.175', 1, 11, '2021-12-23 06:50:00', NULL),
(37, '177.204.208.178', 5, 3, '2021-12-23 07:00:00', NULL),
(38, '177.204.208.177', 3, 7, '2021-12-23 07:10:00', NULL),
(39, '177.204.208.176', 2, 7, '2021-12-23 07:20:00', NULL),
(42, '177.204.208.177', 3, 8, '2021-12-23 07:50:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

DROP TABLE IF EXISTS `aulas`;
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso_id` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`id`, `nome`, `conteudo`, `curso_id`, `created`, `modified`) VALUES
(1, 'Aula 1', 'Conteúdo 1', 1, '2021-12-23 12:30:00', NULL),
(2, 'Aula 2', 'Conteúdo 2', 1, '2021-12-23 12:30:00', NULL),
(3, 'Aula 3', 'Conteúdo 3', 1, '2021-12-23 12:30:00', NULL),
(4, 'Aula 4', 'Conteúdo 4', 1, '2021-12-23 12:30:00', NULL),
(5, 'Aula 5', 'Conteúdo 5', 1, '2021-12-23 12:30:00', NULL),
(6, 'Aula 6', 'Conteúdo 6', 1, '2021-12-23 12:30:00', NULL),
(7, 'Aula 7', 'Conteúdo 7', 1, '2021-12-23 12:30:00', NULL),
(8, 'Aula 8', 'Conteúdo 8', 1, '2021-12-23 12:30:00', NULL),
(9, 'Aula 9', 'Conteúdo 9', 1, '2021-12-23 12:30:00', NULL),
(10, 'Aula 10', 'Conteúdo 10', 1, '2021-12-23 12:30:00', NULL),
(11, 'Aula 11', 'Conteúdo 11', 1, '2021-12-23 12:30:00', NULL),
(12, 'Aula 12', 'Conteúdo 12', 1, '2021-12-23 12:30:00', NULL),
(13, 'Aula 1', 'Conteúdo 1', 3, '2021-12-23 12:30:00', NULL),
(14, 'Aula 2', 'Conteúdo 2', 3, '2021-12-23 12:30:00', NULL),
(15, 'Aula 3', 'Conteúdo 3', 3, '2021-12-23 12:30:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `telefone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `telefone`, `celular`, `usuario_id`, `created`, `modified`) VALUES
(1, '41988610440', '41988610440', 1, '2021-11-23 16:14:33', NULL),
(2, NULL, '41988610440', 2, '2021-11-23 16:14:33', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `conteudo`, `preco`, `created`, `modified`) VALUES
(1, 'Curso 1', 'Descrição do curso 1', 47.34, '2021-12-23 10:58:48', NULL),
(2, 'Curso 2', 'Descrição do curso 2', 97.52, '2021-12-23 10:58:48', NULL),
(3, 'Curso 2', 'Descrição do curso 3', 147.07, '2021-12-23 10:58:48', NULL),
(4, 'Curso 3', 'Descrição do curso 4', 247.16, '2021-12-23 10:58:48', NULL),
(5, 'Curso 4', 'Descrição do curso 5', 297.61, '2021-12-23 10:58:48', NULL),
(6, 'Curso 5', 'Descrição do curso 6', 347.43, '2021-12-23 10:58:48', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `logradouro`, `numero`, `bairro`, `cidade`, `usuario_id`, `created`, `modified`) VALUES
(1, 'Av. Winston Churchill', '936', 'Capão Raso', 'Curitiba', 1, '2021-11-23 16:17:52', NULL),
(2, 'Rua Marechal Deodoro', '630', 'Centro', 'Curitiba', 2, '2021-11-23 16:17:52', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricoes_cursos`
--

DROP TABLE IF EXISTS `inscricoes_cursos`;
CREATE TABLE IF NOT EXISTS `inscricoes_cursos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `preco` double NOT NULL,
  `usuario_id` int NOT NULL,
  `curso_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `inscricoes_cursos`
--

INSERT INTO `inscricoes_cursos` (`id`, `preco`, `usuario_id`, `curso_id`, `created`, `modified`) VALUES
(1, 47.34, 1, 1, '2021-12-23 11:27:52', NULL),
(2, 57.34, 2, 1, '2021-12-23 11:27:52', NULL),
(3, 67.34, 3, 1, '2021-12-23 11:27:52', NULL),
(4, 77.34, 4, 1, '2021-12-23 11:27:52', NULL),
(5, 147.07, 5, 3, '2021-12-23 11:27:52', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

DROP TABLE IF EXISTS `niveis_acessos`;
CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordem` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `ordem`, `created`, `modified`) VALUES
(1, 'Super Administrador', 1, '2021-11-23 15:24:57', NULL),
(2, 'Administrador', 2, '2021-11-23 15:24:57', NULL),
(3, 'Aluno', 5, '2021-11-23 15:25:16', NULL),
(4, 'Financeiro', 3, '2021-11-23 11:54:53', NULL),
(5, 'Atendimento', 4, '2021-11-23 16:49:37', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sists_usuarios`
--

DROP TABLE IF EXISTS `sists_usuarios`;
CREATE TABLE IF NOT EXISTS `sists_usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sists_usuarios`
--

INSERT INTO `sists_usuarios` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2021-11-23 15:16:58', NULL),
(2, 'Inativo', '2021-11-23 15:16:58', NULL),
(3, 'Aguardado confirmação', '2021-11-23 15:17:13', NULL),
(4, 'Spam', '2021-11-23 11:30:44', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sists_usuario_id` int NOT NULL DEFAULT '3',
  `niveis_acesso_id` int NOT NULL DEFAULT '3',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sists_usuario_id` (`sists_usuario_id`),
  KEY `niveis_acesso_id` (`niveis_acesso_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `sists_usuario_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', '$2y$10$H1JY9xNvH01ZfH0n8GJcJeY7LIudr/aFW11zoTvMRWLomOe0T8eeW', 1, 1, '2021-11-15 10:55:51', NULL),
(2, 'kelly', 'kelly@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 1, 2, '2021-11-16 13:17:58', NULL),
(3, 'Jessica', 'jessica@celke.com.br', '$2y$10$mOZSAD26aMn9Cag4e6MKvOeZNkBspejSeI6w4hL0bxSAkcosvyMsW', 3, 3, '2021-11-17 13:19:52', NULL),
(4, 'Gabrielly', 'gabrielly@celke.com.br', '$2y$10$R7SwL/7GZmv8Rn7U8pJLWugKvCCsrQy/ybYENmVX2E4xwRg4TDouW', 1, 2, '2021-11-18 13:20:42', NULL),
(5, 'Cesar 1', 'cesar1@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 3, '2021-11-19 15:39:52', NULL),
(6, 'Cesar 2', 'cesar2@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 3, '2021-11-20 15:39:52', NULL),
(7, 'A Cesar 3', 'cesar3@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 3, '2021-11-21 15:39:52', NULL),
(8, 'Gabrielly 1', 'gabrielly1@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 1, 4, '2021-11-22 15:39:52', NULL),
(9, 'Gabrielly 2', 'gabrielly2@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 5, '2021-11-23 15:39:52', NULL),
(10, 'kelly 1', 'kelly1@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 4, '2021-11-24 15:39:52', NULL);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `contatos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`niveis_acesso_id`) REFERENCES `niveis_acessos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`sists_usuario_id`) REFERENCES `sists_usuarios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
