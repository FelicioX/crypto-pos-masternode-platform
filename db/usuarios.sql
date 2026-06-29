-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 07/09/2018 às 22:35
-- Versão do servidor: 5.6.39-83.1
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecostake_pool`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `adm` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(32) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `exibicao` varchar(64) NOT NULL,
  `mutualcoin` double NOT NULL,
  `buzzcoin` double NOT NULL,
  `hold` double NOT NULL,
  `hight` double NOT NULL,
  `monk` double NOT NULL,
  `kb3` double NOT NULL,
  `xgox` double NOT NULL,
  `aerm` double NOT NULL,
  `eddie` double NOT NULL,
  `discord` varchar(64) NOT NULL,
  `hashver` text NOT NULL,
  `ativacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `adm`, `nome`, `senha`, `email`, `exibicao`, `mutualcoin`, `buzzcoin`, `hold`, `hight`, `monk`, `kb3`, `xgox`, `aerm`, `eddie`, `discord`, `hashver`, `ativacao`) VALUES
(2, 0, 'lauroteste', '89e19d540e787db9b1bd027c1435caa7', 'lauroteste@gmail.com', 'lauro', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0),
(3, 1, 'laurobeleche', '0642f981282bdabdce14bf5fce1ea03a', 'laurobeleche@gmail.com', 'Lauro', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f7fc37a843c7a69c868acc48969193411ba17fba', 1),
(4, 1, 'febre', '63ae2525d1009f3ff4ca8ed41ed87730', 'febredobitcoin@gmail.com', 'febre', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '540fe7ca84f96a6c0b02178f3b4310c152ea4c3d', 0),
(5, 1, 'FelicioX', '1257cf22b834224f8103b22d1626afc0', 'felicio_sx92@hotmail.com', 'Felicio S. Xavier', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1f13b880d91153c08ab3878174248b1f72ba34a8', 0),
(6, 0, 'pqp26', 'bc61967e95dc1d8e1492ca3cb0e5bf1f', 'vagnerinfo@hotmail.com', 'vagner', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '95755446c77d885f026662e981380f4b7738c324', 0),
(7, 0, 'Wejudo', 'd68e1b2a3ea4ee5e7a8fa492f220ba48', 'wejudo@gmail.com', 'Wejudo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '88eeafb92e77a4672628f70787f0ceea8643116b', 1),
(8, 0, 'naldo100', 'd0238f2671525477d6cccab801b96f31', 'quintas.tributario@gmail.com', 'Naldo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'e2ae295ea94f5db9af0fcd0415175bb425178b99', 0),
(9, 0, 'patysgrj', 'e9e98119ebb74065d218caeeedb52b69', 'patysgrj@bol.com.br', 'paty', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'fb2a3a3d0460b47bcc1ff2091f2f440cf44c44c8', 0),
(10, 0, 'luisbang', '13445b2c88fb3781cd5cabcba9840bbe', 'yeong37@hotmail.com', 'luis#8029', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ff1bbac8f5e5c6fb5744bee4860945a0ba044341', 0),
(11, 0, 'Fernando', 'fd198cb42c181ba19a3ded378627b589', '7fernandobrito@gmail.com', 'Fernando', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '80868878563911e62b1e7edd172144e0ab582d12', 1),
(12, 0, 'Elisiane', 'bd2a68f8444e5c58627ee1077ac1dc04', 'elisianepamela7@gmail.com', 'Eps', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '35a3359fe546ed57834ae14e8bcef0d1844cc6c0', 0),
(13, 0, 'Renatovenancio', 'f209e1b9693feba9e96f5b42d1e96162', 'Renato-venacio2012@hotmail.com', 'Renato venancio', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '3a901cd76ac27b1bfeaefd18de4637b0f0c6db6f', 0),
(14, 0, 'matheus0904', '7baadccfb5f568cf65b05b02b8e2ff0d', 'matheus0904@hotmail.com', 'Matheus de Almeida', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2026236facfb703d08eb4b4ebb090555fee9aa69', 0),
(15, 0, '390.santos', '0ea9769674c08a9652e95debf17f24a6', '390.santos@gmail.com', 'Stakeprohero', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'c8229bd65d763b6a62619f18e9fad6863641f837', 0),
(16, 0, 'Top1', 'e8120b4f280446ea8d18487dc0b80a74', 'fuuepoia@gmail.com', 'Top1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '3c9974c792375e3bf3a72d1821acd594a673dd3a', 0),
(17, 0, 'luizgranjeiro', '2ca63e962fd489619d49ffba1aa9b28d', 'luizantonio79@yahoo.com.br', 'LUIZ GRANJEIRO', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '3bd087d0c772c3963f03693b34009b1117568a65', 0),
(18, 0, 'tulyorenan', '0d11244282b8d7147127de50f38ccf12', 'tulyorenan@gmail.com', 'tulyorenan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b44c95204e607cf7313b4007fc866e69f0e0b348', 1),
(19, 0, 'sametklou123', 'c4455c69146e776edff29196093dc63a', 'samet.basturk@hotmail.com', 'sametklou', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '01daae8cd4d6447eae544ee69a554068d9700365', 0),
(20, 0, 'edsonmelo', 'da449d56ff35109508d686567f8a409b', 'edsonmelo1985@gmail.com', 'EdsonMelo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '63ffc8080c30c85976ce3f1e1acb7c9e43f334da', 1),
(21, 0, 'Geo', '7e0b553df795d3a20c2f54f8d79286ae', 'geoffrey.conrad@gmail.com', 'Geoffrey Conrad', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '36cc202730352b3de4a9f8fda52ade08e6144df6', 0),
(22, 0, 'bomfim', '9c11bd22f948511c09e211ebf97ba905', 'bomfim.rbbr@hotmail.com', 'bomfim', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '53a420056b329921303a3a04c124fd3a48c2ffbb', 1),
(23, 0, '123456', 'e10adc3949ba59abbe56e057f20f883e', 'gjx15689@nbzmr.com', 'usura uka uka', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '72e080cdf17585efe02f184e3403033b38239363', 1),
(24, 0, 'lub93796@awsoo.com', 'e472994745a31d5d88d357202a7f086b', 'lub93796@awsoo.com', 'Tresna', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '20da9fa8c42dc050d50ca9d7088d3dcfd71e1697', 0),
(25, 0, 'saito', '2bd5fbdf57a68c68f9b2587509762d07', 's.kengo.sk@gmail.com', 'saito', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '4913b3996912cc55476262f29c037fabbcc596e5', 1),
(26, 0, 'housing', 'd45ebc365b0441f5197a3ded47a12ccc', 'housing@vermine.nl', 'naam', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '67687b8fb574c59addfa1397e5698be93d4aee90', 0),
(27, 0, 'Anubis', '4ab636ef797bc61b117ab2c819c7cc37', 'webmaster@penguincoin.io', 'Anubis', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f4ae4a2633b5369cb08ecbb6204c0330a19b4bf1', 0),
(28, 0, 'ramonsenna', '7d78ba360d35ef1e7df86879811c1d73', 'ramonsennabh@gmail.com', 'Ramon Ferreira Sena', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7f5bd419193c4da5b1d75d903a93f1129090096d', 1),
(29, 0, 'ali01', '1c17e23fead07939729f8681fd3c0d2d', 'alijayadi250@gmail.com', 'alijayadi01', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1840e402b8ad253bb1f5913dc1972684bfee6ab1', 1),
(30, 0, 'Silviop4', '916828ba06fb5e2ab660c085b95d8764', 'silviop4@gmail.com', 'Silvio Pereira da Silva', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd379ebc610f8365d86863240789a985a35459ad3', 0),
(31, 0, 'Gui', '8009d7636907b4f48715437154fe7060', 'gaapmafort@hotmail.com', 'Guilherme', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '540c484e9085b0b2a192b751c90f0bf924a909f8', 0),
(32, 0, 'viverdebtc', 'e4f9739b0c60000c7fe21366dfdac434', 'viverdebtc@gmail.com', 'viverdebtc', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'e7481751f31412c6ce2c210c9e3a1e54ed8daba3', 1),
(33, 0, 'joseirineu', '4325c5309b8e6591cb69ef597acfdf79', 'mendesholandaj@gmail.com', 'jose irineu mendes holanda', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '6ce2525849a554c9e91dcc28f2db82cbd436b0dc', 1),
(34, 0, 'Posminer', '80c8902aebba64bbdbc48713f2acff21', 'newmysms@gmail.com', 'Leonardo S', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd6a5c066e80ca4199f26b98ea3887ddc5e8bb71e', 1),
(35, 0, 'joaocffjr', '10aca19536c8f5f5cbd12e02710c045f', 'joao_cffjr@hotmail.com', 'joaocffjr', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'baf587f1aed18ba4d7951cf1491541c4db13a2b2', 0),
(36, 0, 'rodnasci', 'be2994f146b0e61c58253b355ba40110', 'rodrigoblog10@gmail.com', 'Rodrigo Faria', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '13da88109c5256202cf708872e3566b477eb78db', 1),
(37, 0, 'Georgeo', '07fa28f2708354f575d84e68e93d11e4', 'georgeo.ribeiro@hotmail.com', 'Georgeo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '9ee7d8d0dcce94e43b44d721eda00f894e453561', 0),
(38, 0, 'Ednho', '3884bb5939db177f5ea93ca922c8e5ff', 'edsonshigeeda@gmail.com', 'ES', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5d9c5890b014d4b84304456c0134f561a3480609', 1),
(39, 0, 'Jrchuvas', 'aef427c90c0d8ce9cb928935626eb526', 'jr.chuvas@gmail.com', 'Jr.chuvas', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '041f8f73e9d3f85ea378bdffe5a191060b9d1897', 1),
(40, 0, 'soldado100', 'c09d76cf27bcd120d7197875c7f3a689', 'jhonatanddt@gmail.com', 'jhonatan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'e10fe5bb4e61deb166f5fbc5abf59180e7cb9979', 0),
(41, 0, 'gutogn', 'a3cd78db7351dbc10bfa4908cc181223', 'gutogn@gmail.com', 'Gustavo Gonçalves', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'afae2bf1ec95418ac8a58c072f93b7037476b82e', 1),
(42, 0, 'reidagambiarra', '6797f82f504379e72c59879b12594d39', 'reidagambiarra@gmail.com', 'reidagambiarra', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '487b77b2783aefc3771452307fda270d16688eca', 0),
(43, 0, 'joaquimlopes', '04e98745b108597a36df58a2cb37d126', 'joaquimlopes.email@gmail.com', 'joaquimlopes', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7898a60c4365a2180ab2aeddc7fc6e2f11d46b1a', 1),
(44, 0, 'Kedjpa', 'f7bac261c4e802b25f1f86a3fe926e44', 'Viniciusbcanonico@gmail.com', 'Kmdslr', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b731493d62048760738e2f3b41dbba3805806027', 0),
(45, 0, 'ysakreis ', '31b4857c988cb60ead23c89fe2f32992', 'ysakreis@gmail.com', 'Isac Evangelista dos Reis', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '043d4aa04a302df5fe77e18fcee782a751744be3', 0),
(46, 0, 'virtugrana', '3eec1281ac020030efb5693ab91d3178', 'virtugrana@hotmail.com', 'virtugrana', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '6e3dc898278c59ae4d069cb7b007fc38481b82a7', 0),
(47, 0, 'rgxnpx', '4feaa23446fd2063817d57776f234cf3', 'rgxnpx@gmail.com', 'rgxnpx', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '3f38a62c6882c2fe77d2066b5472c4b75b68c144', 0),
(48, 0, 'Therock2309', 'f26b5523cece58b58b70faaefa17bb50', 'therock2309@hotmail.com', 'MIRANDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f14c4267f5e2d2fb8ae2197f2e2fdcdb0e9c734c', 0),
(49, 0, 'dogman', '497791490cdd68825ef5a6ebd8b5c9e0', 'spectrecoin2016@gmail.com', 'dogman', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '985268a5bef2c474b776b3022c9f782245999b58', 1),
(50, 0, 'lual', '82bab2a316a0c5afc0ad6ec3d64a8b43', 'luanalucius@gmail.com', 'Luana Lucios ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'a38493b4afc44877bc282f8adfac0663ca69478f', 0),
(51, 0, 'adrianoplay182', '3ea52640859cdeea32e8cd89fedaf0a7', 'adrianosouza182@live.com', 'adrianoplay182', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '6757515f3d73bc61c3d84b294735f897eb4829dc', 1),
(52, 0, 'luizandre58', '110a2d34f1bea8475e23232568da626f', 'andrebotafogo58@gmail.com', 'Luiz André gomes', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7045b72233a25a6818b0b29e8d0910b8266122e8', 1),
(53, 0, 'Nyel', '4ce5d4c4ce151e104bddb817535717af', 'nyedsonnyel@gmail.com', 'Nyedson', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'c098691a245979a1efe126720d6ca48072b889a6', 1),
(54, 0, 'vagneraraujo', 'a209fed02bdb3bc1950d807199013e5d', 'vagnersa2000@hotmail.com', 'Vagner Araujo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '01ca5bb969ca26caf1332942be9d3827c40528eb', 0),
(55, 0, 'carlosbrum', '04bf4f82befc0a20c86198f45fc28889', 'carlosbrum@email.com', 'Carlos Brum', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2bf2cee8346770b1b7568c7ca49f2e446b455df9', 1),
(56, 0, 'Akino600', 'e95f3155231e294683c6cb32d9fee4b4', 'doug_ha@hotmail.com', 'Consultor Bitcoin', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5f77c16c05e7a2c536a8061c821abc525cae1d6c', 1),
(57, 0, 'Accy Nery Neto', '23efbdcf13ed3aa3b2649ce625070aa6', 'accy0717@gmail.com', 'Accy Mery Neto', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'aeca28ca5a02dd3bbdb300b5a5c93c9ba962fb89', 0),
(58, 0, 'valterdr', '40180f520a7d8086c791d5afffd38dea', 'valter.dias@me.com', 'Valter Dias Ribeiro', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7488f5217b33bf50f97b3fe34d1d974c96e836af', 1),
(59, 0, 'freitasjones ', '2379d93fb034e032a1df1f8927ed4cce', 'jeffersonribeiro7@hotmail.com', 'Jefferson Freitas', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'c547502ff5b6d47405cabb172ad73a92100c57b1', 0),
(60, 0, 'dinheirofree', 'd8e4e4b3d2a51e5ba9bfd0e5b812fdca', 'misplayersp@gmail.com', 'dinheirofree', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd6329dcfb93db99a3185a38f82e9a9f97c0c2eab', 1),
(61, 0, 'rsbit29', 'd9316cf2eb775a2a9c829799bcf6e98f', 'rsbit29@gmail.com', 'Rsbit29', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b62d53cce6d577f81d971831760434a3c15d5162', 1),
(62, 0, 'gilvanclayton', 'aa4729d44df9b8d6cde59a4ac5af6962', 'gilvanclayton@hotmail.com', 'gilvan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ea0bcc58392d32cc0fe54e48c28efdc36c7809b5', 1),
(63, 0, 'Marcos Fontenele', '713141447b5cad9de1f931f8747b5095', 'multiversoonline2017@gmail.com', 'Marcos Fontenele', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f43ab219e1e19c245b303202c275f702676a8b88', 0),
(64, 0, 'alvaroyellow', 'bfb3206155832047330e55a331d6734e', 'alvaroyellow@hotmail.com', 'alvaroyellow', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '80216422d61696881b93778708f3caa12501de66', 0),
(65, 0, 'Duka', '4a50141180b305b519012e2ff706c8a0', 'duk7br@gmail.com', 'DukaSilva', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b5a54c7d900e3fb54c644a7f9470f23e13b56d84', 1),
(66, 0, 'Alisson97', 'd3955fb7de6b72e5d96a405e2095558c', 'allissonlucas71@gmail.com', 'Alisson Santos', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '8f5942aaf43ce8595532da0379848e2f1631641b', 1),
(67, 0, 'josoec1989', '3340ea01040fd5ee2be33eb100ff8ced', 'josoegarcia@gmail.com', 'JOSOE CUSTODIO GARCIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1a5de6b4fe8ff6444308847e6eb20a8f43916399', 0),
(68, 0, 'Jeunesse', '9862574cfadd061924fe9d108e376b0b', 'Boltservicos@hotmail.com', 'Diogoangra', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '26244e628d4a50c75c809f25681845eeea7c471d', 0),
(69, 0, 'pdseven', '287457b8b4b7b4e732e14dddb4b01e67', 'pdseven@outlook.com', 'Diego', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ff813d295ff2e557086f504da0d37c3459d3992a', 1),
(70, 0, 'Wins', 'd0f4008117b906f5cff109153338924c', 'wins.droid@gmail.com', 'Wins', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '530450654c883a095d0519b132797579104873ca', 1),
(71, 0, 'maiconrbit', '898a1ba7baafb875c315749b53c1bb12', 'maiconrbit@gmail.com', 'maicon', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1f66f6538b922f06586f285d59b4970b44468e5c', 1),
(72, 0, 'D3D3C0', 'd6f4e13623a89bc29ece8145077a0d18', 'andrefrancadasilva01@gmail.com', 'D3D3C0', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5903db3a6f583e3fc068edcef6d2d790a00fab2c', 0),
(73, 0, 'WillLima', '3a0c65bd0d293ed93e387d2cb10d30b4', 'williansantos@msn.com', 'Will', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '26b6baa30c5f2beccdab5c3dc6af0d8ca101362f', 1),
(74, 0, 'danielluby', '1130b764eb599293c32050a7ca64ada3', 'daniell1216@hotmail.com', 'Danielluby', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '444cde26183093606baca2062a72c41a9a628323', 0),
(75, 0, 'Tiberiu ', 'dab75772f4170e23c7fbe2d541ef2981', 'mitre.tiberiu@gmail.com', 'TiberiuM', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '94807a51b4b5e90bf94f24873b3053019dfac49d', 0),
(76, 0, 'kprell40', '08e2e3bc85bf13e3286458fe76e10e40', 'kprell26@gmail.com', 'Kevin', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ba3af7a5bc4e97c0db124cbcd5f3cd2fd26eb70a', 0),
(77, 0, 'Duk7', '32166625eb0e3d39e87f1bfb4b08540e', 'amarildo_duka@hotmail.com', 'Dukabr', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '745b0c14de17787eaa42dbe1ef2268a201804cad', 1),
(78, 0, 'wagner1', '370d08b8f1700047d4ce93281d8c97eb', 'wagnerooliveira@gmail.com', 'wagner1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '66a12f9d762a405c36f3b956830b250d46f9379a', 1),
(79, 0, 'cicerow', 'd87c92992c5fff0637b1c336c44999e0', 'cicerowarken@gmail.com', 'Cicero augusto de lima warken', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7b97d84f0a306631861c915d56e941c97567b771', 1),
(80, 0, 'coincash', 'c62d929e7b7e7b6165923a5dfc60cb56', 'rodolfoideias@gmail.com', 'Rodolfo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b8e494fd0b08acfa35564921c4d61e86c9465e62', 0),
(81, 0, 'adrianaarantes10', 'a45eae864ab4a9ad74d5bda43319fbf1', 'adriana.arantes05@hotmail.com', 'Adriana', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '858e693594319dba664882662a4bf5e0dd52cc77', 1),
(82, 0, 'MarceloxD', 'a9ed90b21172fc2caed45b145214b6bd', 'marcelomartinsgoncalves55@gmail.com', 'Marcelo Martins', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'a722fd0bc93107226426b741e776dba86ed2c507', 0),
(83, 0, 'Digao86', '897683241e203dec06e92e8329ba2b5e', 'Rspdigao86@gmail.com', 'Digao86', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '91dc2faa8994e6483045d233bd3956b0f4004af0', 0),
(84, 0, 'josemaramorim', '43d063b5fa593d86c16ad79a60cee2b7', 'amorimtrade@gmail.com', 'Amorim', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5cb6e5454d354e08b21540026d3d7edcf86cab07', 0),
(85, 0, 'Douglas', '4ccef7e13611c849f778a6df248fd6f3', 'Douglaslucasdasilva8@gmail.com', 'Douglas', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '6b246d2206bf84ba3000a73d1c7d88905c6c9444', 0),
(86, 0, 'Felix', '4e435d4633a022d3950a0b443aa0ff9c', 'felicianodearaujo@gmail.com', 'Feliciano', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '661b761c2e2ec698b61c464bc86e336781835fa1', 0),
(87, 0, 'Westerley Campos', '1ddf211aeded067316521210b7139ceb', 'westdfcampos@gmail.com', 'westdfcampos', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '12bdbe7a0ad3f2d37080836359b4b10ca1fd2dc6', 0),
(88, 0, 'Hermano', '1fbe7696c2c74729a05d694e91126cfc', 'arinelson_hermano@hotmail.com', 'Register ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '38d79a89580887d652155e137ba1f73187c9083d', 1),
(89, 0, 'edyjatuba', '2ee85defb19c4615dc8f65a093f6aa73', 'edyjatuba@gmail.com', 'Edgar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '95af71975025d155fd730ce328a373b1b419d050', 0),
(90, 0, 'ditrox20', 'b904f7d1957a6ae2361d6a84f581b3ea', 'ditrox20@gmail.com', 'Ditrox', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'eb8299ecf55b68c2144262c83202ee6e25c27592', 1),
(91, 0, 'cashdtime', 'bb88f291f24c3ec3244a7d51c99767fb', 'cashdtime@gmail.com', 'abdulnaeem akhtar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '85e1966fe3a06f81e4e57bc542203ae62b6458b7', 1),
(92, 0, 'mtezini', '55004b1d53966cb339c1459c399398f7', 'mtezini@gmail.com', 'Marcelo Vaccari', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b0871c85d37d999cde74aeefc67c9e6acd591af5', 0),
(93, 0, 'teste2020', '25d55ad283aa400af464c76d713c07ad', 'ugresyxd.0ve@20mail.it', 'teste', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'cbfdf23df743376eaf0bbbfe6e6499d1397c7bbe', 0),
(94, 0, 'valterdr2', '40180f520a7d8086c791d5afffd38dea', 'valter.dias@gmail.com', 'Valter Ribeiro', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd008e7c87a9ba7d72cb58220c7118e9be6bf20a6', 0),
(95, 0, 'valter77', 'bae05d07c856a02d3f26f8bd54b40795', 'valter570@gmail.com', 'Valter', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1556eb6357a9e6d4f75dab39829cc7a9aa470107', 1),
(96, 0, 'alohaohanablue', '00651d67e3e67f55e9a4621527409499', 'cindyclaire1820@icloud.com', 'alohaohanablue', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'efceb196df9cda0e1a69fa3d8a4af399f93c7534', 1),
(97, 0, 'sageofsixpaths', '71924d4e30fa4cf3317d116c44ee16a1', 'totaleclipse432@gmail.com', 'sageofsixpaths', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7536927d4750dd3ea64856d29666edb54a8c754b', 0),
(98, 0, 'gabriel16781', '2eefe3f6812d945f978fbbe74b0032f8', 'gabriel.alexandreflorenco@gmail.com', 'Gabriel alexandre ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '05cfa03f5c8178147d42b1f7afb6f05973041e69', 1),
(99, 0, 'valeriomarques', 'abf7947e139b50cd3a8ea6aeee09fe0c', 'mmmcryptomoedas@gmail.com', 'VALERIO MARQUES DA SILVA', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '356f35539790181f8964cc335e1aa6cbfc0a4ce8', 1),
(100, 0, 'relapsing', '3ccebc90dd58f135d31931c8e1e44535', 'adrian.archer@yahoo.com', 'Adrian Archer', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7b8d6a92bfd02e0e5037fd6c4ee15462f662d605', 0),
(101, 0, 'ianarong72@gmail.com', '693f90ee840fd964ac66c98a44a673b7', 'ianarong72@gmail.com', 'ian112190', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '01a2e8fa84c473b4bb28569d4001515ce882ce0b', 0),
(102, 0, 'Ramazan', '620f8f280e9e91e0f3161f50869d41ee', '19ramazan92@mail.ru', 'Ramazan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5192b52428ec7b1b17c20c86c641bc6e17169ba2', 0),
(103, 0, 'Bhimshi.0080@?', 'e17b267b818428787533b8c41a1af166', 'Bhimshisuva4u@gmail.com', 'Bhimshi Suva', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1058facd720fd5bd0c0cabf82c83c3a4e8101638', 0),
(104, 0, 'JonathanLS', 'a0af5fa962e9dd96ffffd02b8622b7b0', 'adm.poliveira@gmail.com', 'JonathanLS', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'dc20833c9c592a05e6e329ec0c0ef6aad891e254', 0),
(105, 0, 'bendjozz@gmail.com', 'bdcb566f20e266a38ee2b87cf3ae0dba', 'bendjozz@gmail.com', 'z43n4l', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f287d646c973eda5eec82cdf750ff523ec73a24e', 0),
(106, 0, 'joseda789', '0b5189a3b9556f1641b5017b6e895d20', 'juvedavid774@gmail.com', 'Jose Villacreses', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'c39782b7edbccd54defbcfb6b14a7089c313eaff', 0),
(107, 0, 'Joejiwang', '48792033895725c99ddc97c8c3c48c39', 'joehancur@gmail.com', 'Joejiwang', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b273212f49cc2ec2a99fce8924542b4b0fcd8f77', 0),
(108, 0, 'ivan2003', '245f502e547a0daca9971120aa7304e4', 'pisello01@yahoo.it', 'Luca', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '81f89351b9e52282175d17cd51428161043e33b9', 0),
(109, 0, 'adetos', 'df6a7987e25dd32436d84b25f91bf2af', 'das.wts@gmail.com', 'adedapo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '484818e115cf7f8eb28bd2075aa8cd6d294d96e1', 0),
(110, 0, 'Rmcd67', '66c8e98489fdbbdf976eab1f80f43ae1', 'richardmcd67@gmail.com', 'Richard', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'e06d11b0c3988ab49ce520c0b6dc95ac77806d56', 1),
(111, 0, 'kauanadias', 'c9de14c29bc1ae603403570dcbfa9d45', 'rodolphocriptomoedas@gmail.com', 'rodolphocirino', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '54ea64731294017076d2ef3100c4c6cfd98794dc', 0),
(112, 0, 'Lucasabreu', 'e81d16875eb0738a12aee4021000c700', 'abreu35644@gmail.com', 'Lucas abreu', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '4971fd5de3d6655ea31fc96989620f93b334709d', 0),
(113, 0, 'Gilbertosiquera', 'cbfbb18c6dbcf005bf2d26c38c8d9d02', 'gilbertosiquera23@gmail.com', 'Gilberto', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '85f0d8497c33acce2a10cfcf2da90d39cbc68a1d', 0),
(114, 0, 'Williams Quaresma dos Santos', '59e7b8f030d118815a6e9cf53288c012', 'gluezeus@gmail.com', 'Williams', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd7399dfea33d8c302092448f43fb6f8489e4017f', 0),
(115, 0, 'Ibextronic', 'ca48bd9bee859d61a206b81d95adf11d', 'Ibextronic@hotmail.com', 'Ibextronic', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7c15f9077de1dd57ab0053a45560b061774408c9', 1),
(116, 0, 'bbbcoin1', 'b0512b71a92b0bc885df06946f437e66', 'bbbcoin1@outlook.com', 'bbbcoin', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'a723d9a93ccb61aa1bf3905ffba04b26daf4ae1a', 0),
(117, 0, 'Luidio', 'c5f511a9600b0ddde308bc4b089e7de9', 'luidiobrinques@gmail.com', 'Minerando na rede ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'a351f528ed42f706bf480b0704a57fd4516865b6', 0),
(118, 0, 'sbrebol', '2bc59817c70888f0332d66d72eb9ff69', 'guiganew@outlook.com', 'sbrebol', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1343a0920a1e4523b6640b499d8fe0a148a07afe', 1),
(119, 0, 'cswobruno', '58fdab91c9e66f4139afb1807d5f2fd2', 'brunocoreano@hotmail.com', 'cswobruno', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ad4efe7cd95863db205d0ae96082704f04250566', 0),
(120, 0, 'Sujoys', '407db7ec7552bea69b37c56e612d434c', 'Sujoys.bsa@gmail.com', 'MS H', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b23ebf9375911434c74662bdd874135fc6adb9da', 0),
(121, 0, 'Kescher12', 'f4959e68dbbd3a3715e77f15c67f914c', 'tuer1234567@gmail.com', 'Cyrox', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5cd702ad62725913aed0d0dd36576dfce9eba0f3', 0),
(122, 0, 'hildy', 'de2eb92def1610a03bb65bf219c9beb8', 'hildymedic@aol.com', 'Bill', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '591dbb62e2ebe01873a29bd36358f535d6adf027', 0),
(123, 0, 'M-crypto', 'f0fcf351df4eb6786e9bb6fc4e2dee02', 'endorf78@gmail.com', 'Majestikeco', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '222ab02547b0496678db582b410dee18382a9616', 1),
(124, 0, 'Megabitvalle', '0dd9c83e8c5e0a9ebf17611cea8dc76f', 'rogeriogb72@gmail.com', 'Rogerio Faria T', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '91193976b245a432328d93e78c26b1faf217dbb4', 1),
(125, 0, 'FenixMiner', '2afeab1da6c9493fd2463b6e2796b98f', 'alexxcarros3@gmail.com', 'FenixMiner', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '04805fe55166e891daa21a127d10ee13654a1e1a', 0),
(126, 0, 'Sueli Yumi', 'cfaab0730cd721536dccf418e5877c0e', 'yuefabi@gmail.com', 'yutabi', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'a9b7e387f236f8a753719bed648ea2a86740bd76', 0),
(127, 0, 'wartezao', '49439347098a0a5d619d99d32f93dea2', 'badbrou@gmail.com', 'goodbrou', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'eb96704b518e3e7ae0eb01d80ddf76c8ec242f2d', 1),
(129, 0, 'Adrian Beasley', '4daa5a4cee57413567c943492f77cae1', 'dreamofcoins@gmail.com', 'SquireAu', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '043ade4409b9187701c16ced99adff89a118a9ec', 1),
(130, 0, 'haliluya9Z', '7434d2c4933edf0384ef7b97bc4ea3c1', 'keyc773@gmail.com', 'Adi mucharam', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2fc38219424985bb469fbb37555c1c8fe0425c92', 0),
(131, 0, 'bandung22', '51a8f9dc61d7d3f0b80326144979a03f', 'udedco@gmail.com', 'Uded', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '9df7bc000070dd8256fd944f1de71b1ad9e3d12f', 1),
(132, 0, 'Gtiburtino ', 'a664305b6b855b8251147ef967a8a04b', 'tuannytiburtino@gmail.com', 'Glauco tiburtino ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '675a4d7a0656e52708a33038b6a2a56b988200a3', 0),
(133, 0, 'jelyas', '4975a41f912d47600641d4ecbb87f032', 'jeliasmendez11@gmail.com', 'jelyas', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '97b8519ce38b8cf12d056a2b698027e6e919347e', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
