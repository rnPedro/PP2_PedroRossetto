

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `form` (
  `cpf` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `assunto` text NOT NULL,
  `servico` text NOT NULL,
  `contato` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `form`
  ADD PRIMARY KEY (`cpf`);
COMMIT;
