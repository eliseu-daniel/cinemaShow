-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/05/2025 às 06:58
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filmes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `IDfilme` int(11) NOT NULL,
  `tituloFilme` varchar(50) NOT NULL,
  `generoFilme` varchar(50) NOT NULL,
  `sinopseFilme` text NOT NULL,
  `atoresFilme` varchar(255) NOT NULL,
  `duracaoFilme` int(10) NOT NULL,
  `lancamentoFilme` year(4) NOT NULL,
  `imagemFilme` varchar(255) NOT NULL,
  `traillerFilme` varchar(255) NOT NULL,
  `favFilme` int(11) DEFAULT NULL,
  `IDuser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`IDfilme`, `tituloFilme`, `generoFilme`, `sinopseFilme`, `atoresFilme`, `duracaoFilme`, `lancamentoFilme`, `imagemFilme`, `traillerFilme`, `favFilme`, `IDuser`) VALUES
(1, 'Oppenheimer', 'cinebiografia, ficção científica, drama', 'Em 1926, o estudante de doutorado J. Robert Oppenheimer, de 22 anos, estuda com o físico experimental Patrick Blackett no Laboratório Cavendish, em Cambridge. Após muito tempo longe de seu lar e sofrendo de ansiedade em decorrência do trabalho no laboratório, Oppenheimer deixa para o exigente Blackett uma maçã envenenada, porém, a recupera das mãos do cientista visitante Niels Bohr, que fica impressionado o suficiente com seu intelecto para recomendar que ele estude física teórica na Alemanha, onde Oppenheimer completa seus estudos do PhD. Mais tarde, conhece o físico teórico Werner Heisenberg em uma conferência na Suíça.\r\n\r\nOppenheimer retorna aos Estados Unidos, querendo expandir a pesquisa de física quântica em seu país. Começa a lecionar na Universidade da Califórnia em Berkeley e no Instituto de Tecnologia da Califórnia. Ele conhece a sua futura esposa, Katherine \"Kitty\" Puening, bióloga e ex-comunista — também tem um caso intermitente com Jean Tatlock, membra do Partido Comunista dos Estados Unidos. Em 1938, o progresso da Alemanha Nazista durante a primeira pesquisa de fissão nuclear estimula Oppenheimer e seus colegas a replicarem seus resultados. Em 1942, em meio à Segunda Guerra Mundial, o general do Exército americano, Leslie Groves, recruta Oppenheimer para liderar o Projeto Manhattan para desenvolver uma bomba nuclear depois que ele dá garantias de que não tem simpatias comunistas. Sendo judeu, Oppenheimer é particularmente motivado pelo potencial dos nazistas de completar seu programa de armas nucleares, liderado por Heisenberg. Uma equipe científica que foi formada, sendo composta por Edward Teller e Isidor Isaac Rabi em Los Alamos, Novo México, com colaboração também de Enrico Fermi e David L. Hill. À medida que o trabalho continua, Oppenheimer fica sabendo do suicídio de Tatlock.', 'Cillian Murphy, \r\nEmily Blunt, \r\nMatt Damon, \r\nRobert Downey Jr., \r\nFlorence Pugh, \r\nJosh Hartnett, \r\nCasey Affleck, \r\nRami Malek, \r\nKenneth Branagh, \r\nBenny Safdie, \r\nJason Clarke, \r\nDylan Arnold, \r\nGustaf Skarsgård, \r\nDavid Krumholtz, \r\nMatthew Modine, ', 180, '2023', 'Oppenheimer.jpg', 'https://www.youtube.com/watch?v=bK6ldnjE3Y0&ab_channel=UniversalPictures', 1, 1),
(3, 'Moana 2', ' Aventura, Animação, Família', 'Sequência da já clássica animação musical da Disney, Moana 2 acompanha o reencontro de Moana e Maui para uma nova aventura pelos mares. Passados três anos desde a última jornada marítima, um chamado de seus ancestrais leva a jovem polinésia Moana de volta para águas perigosas e distantes da Oceania com um grupo improvável de marinheiros. Com a ajuda também do semideus Maui, ela deve quebrar uma maldição terrível que um deus cruel e com sede de poder colocou sobre uma das ilhas de seu povo. Nessa grandiosa missão, Moana e sua equipe vão desbravar novos territórios e enfrentar velhos e novos inimigos, como monstros marítimos, feitiços e deuses do mal. Tudo isso em busca de reconectar sua nação e assegurar a paz dos oceanos.', 'Any Gabrielly, Auli\'i Cravalho, Saulo Vasconcelos', 100, '2024', 'moana2.jpg', 'https://www.youtube.com/watch?v=Sh3wM7ak8rc&t=1s&ab_channel=MovieTrailersSource', 1, 2),
(6, 'Tropa de Elite', 'A&ccedil;&atilde;o, Drama, Suspense', 'Em Tropa de Elite, o dia-a-dia do grupo de policiais e de um capit&atilde;o do BOPE (Wagner Moura), que quer deixar a corpora&ccedil;&atilde;o e tenta encontrar um substituto para seu posto. Paralelamente dois amigos de inf&acirc;ncia se tornam policiais e se destacam pela honestidade e honra ao realizar suas fun&ccedil;&otilde;es, se indignando com a corrup&ccedil;&atilde;o existente no batalh&atilde;o em que atuam.', ' Wagner Moura, Caio Junqueira, Andr&eacute; Ramiro', 115, '2007', '681591093c277_tropa_de_elite.jpg.jpg', 'https://www.youtube.com/watch?v=_V_nZNWPYQk&amp;ab_channel=xDVLx', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`IDfilme`),
  ADD KEY `IDuser` (`IDuser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `IDfilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `filmes`
--
ALTER TABLE `filmes`
  ADD CONSTRAINT `IDuser` FOREIGN KEY (`IDuser`) REFERENCES `users` (`IDuser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
