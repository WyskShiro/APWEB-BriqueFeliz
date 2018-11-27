
--
-- Database: `brinque_feliz_production_full`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL PRIMARY KEY,
  `cpf` varchar(11)  NOT NULL,
  `nome` varchar(30)  NOT NULL,
  `endereco` varchar(35)  NOT NULL,
  `cidade` varchar(20)  NOT NULL,
  `estado` varchar(20)  NOT NULL,
  `tefelone` varchar(11)  NOT NULL,
  `email` varchar(25)  DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `fornecedor`
--

CREATE TABLE `fornecedor` (
  `fornecedor_id` int(11) NOT NULL PRIMARY KEY,
  `cnpj` varchar(14)  NOT NULL,
  `nome_fantasia` varchar(30)  NOT NULL,
  `razao_social` varchar(30)  NOT NULL,
  `endereco` varchar(50)  NOT NULL,
  `cidade` varchar(20)  NOT NULL,
  `estado` varchar(20)  NOT NULL,
  `telefone` varchar(11)  NOT NULL,
  `email` varchar(30)  DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `funcionario_id` int(11) NOT NULL PRIMARY KEY,
  `cpf` int(11) NOT NULL,
  `nome` varchar(35)  NOT NULL,
  `endereco` varchar(40)  NOT NULL,
  `cidade` varchar(20)  NOT NULL,
  `estado` varchar(20)  NOT NULL,
  `telefone_residencial` varchar(10)  NOT NULL,
  `telefone_celular` varchar(11)  DEFAULT NULL,
  `email` varchar(30)  DEFAULT NULL,
  `data_contratacao` date NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `produto_id` int(11) NOT NULL PRIMARY KEY,
  `codigo_de_barras` int(11) NOT NULL,
  `nome` varchar(30)  NOT NULL,
  `descricao` text ,
  `preco_venda` float NOT NULL,
  `fornecedor_id` int(11) NOT NULL
);

