-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jul-2022 às 01:21
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ppi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `biografias`
--

CREATE TABLE `biografias` (
  `id_biografia` int(6) NOT NULL,
  `nome_conhecido` varchar(255) NOT NULL,
  `nome_verdadeiro` varchar(255) NOT NULL,
  `endereco_imagem` varchar(255) DEFAULT 'upload/default_imgs/sem_imagem.png',
  `data_nascimento` date NOT NULL,
  `data_falecimento` date NOT NULL,
  `local_nascimento` varchar(255) NOT NULL,
  `local_falecimento` varchar(255) NOT NULL,
  `pais` longtext NOT NULL,
  `famosos_familia` longtext NOT NULL,
  `grupo_social_familia` longtext NOT NULL,
  `formacao` longtext NOT NULL,
  `profissao` longtext NOT NULL,
  `importancia_area_conhecimento` longtext NOT NULL,
  `mudanca_grupo_social` longtext NOT NULL,
  `evento_historico` longtext NOT NULL,
  `preconceito` longtext NOT NULL,
  `contribuicao` longtext NOT NULL,
  `legado` longtext NOT NULL,
  `ato_politico` longtext NOT NULL,
  `ideias_reacao` longtext NOT NULL,
  `frase_marcante` longtext NOT NULL,
  `referencias` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `biografias`
--

INSERT INTO `biografias` (`id_biografia`, `nome_conhecido`, `nome_verdadeiro`, `endereco_imagem`, `data_nascimento`, `data_falecimento`, `local_nascimento`, `local_falecimento`, `pais`, `famosos_familia`, `grupo_social_familia`, `formacao`, `profissao`, `importancia_area_conhecimento`, `mudanca_grupo_social`, `evento_historico`, `preconceito`, `contribuicao`, `legado`, `ato_politico`, `ideias_reacao`, `frase_marcante`, `referencias`) VALUES
(32, 'César Lattes', 'Cesare Mansueto Giulio Lattes', 'upload/9140acc326f42966836cf998b98bab0d.png', '1924-07-11', '2005-03-08', 'Curitiba, Paraná, Brasil', 'Campinas, São Paulo, Brasil', 'Giuseppe Lattes e Carolina Maroni, ambos imigrantes italianos da região de Piemonte, das cidades de Turim e Alessandria, respectivamente . Sendo seu pai criador do banco Brasul.', 'Não há outras pessoas destacáveis devido à fama em sua família.', 'Não foram encontradas informações   precisas o suficiente que falem sobre a classe social da família de Lattes. Porém, pelo fato de seu pai ser criador e gerente de bancos (e também considerando que Lattes constituía uma equipe que ganhou um Nobel), é possível concluir que esse estava em uma classe alta da sociedade e não deve ter passado por dificuldades socioeconômicas em sua vida.', 'Concluiu seu ensino primário na Escola Americana de Curitiba, o secundário no Instituto Médio Dante Alighieri. Posteriormente cursou e graduou-se em física e matemática pela Faculdade de Filosofia, Ciências e Letras da Universidade de São Paulo.', 'Trabalhou como pesquisador na Inglaterra; também como pesquisador pela Universidade Federal do Rio de Janeiro e do Centro Brasileiro de Pesquisas Físicas (CBPF, o qual tinha envolvimento na fundação); além de ter sido professor da USP e da Unicamp.', 'Física', 'Não foram encontradas informações   precisas o suficiente que falem sobre mudanças de classe social na vida de Lattes.', 'Constituía a equipe de pesquisa de Cecil Frank Powell que foi laureado com o Prêmio Nobel de Física do ano de 1950, sendo Lattes um dos principais pesquisadores dessa equipe.', 'Lattes era homem, hétero e caucasoide (branco); fazendo com que nunca tenha sofrido nenhum tipo de preconceito em sua carreira.', 'Referindo-se à bolha científica da sociedade, a descoberta do méson π (píon) contribuiu de forma notável no estudo das partículas fundamentais (física de partículas).', 'O codescobrimento do méson π, a influência na criação do CBPF e a responsabilidade na fundação do Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq) são legados de suma importância para pesquisa científica tanto nacional quanto internacional, inclusive, devido a esses fatos e outros, seu nome foi imortalizado no principal sistema de currículos virtuais do Brasil.', 'Cesar Lattes não envolveu-se em nenhum movimento/ato político destacável.', 'Não. As ideias defendidas por ele foram plenamente aceitas pela comunidade científica da época, inclusive uma das quais trabalhou na construção foi responsável por um Prêmio Nobel.', '\"A ciência não pode prever o que vai acontecer. Só pode calcular a probabilidade de alguma coisa acontecer.\"', 'Centro de Memória do CNPq. Cesare Giulio Lattes. [S. l.], [S. d.]. Disponível em: https://memoria.cnpq.br/web/portal-lattes/cesare-giulio-lattes. Acesso em: 23 abr. 2022\r\n**-**\r\nFIOCRUZ. Cesare Mansueto Giulio Lattes. [S. l.],[S. d.]. Disponível em: http://www.fiocruz.br/biosseguranca/Bis/Biograf/ilustres/cesare.htm. Acesso em: 23 abr. 2022.\r\n**-**\r\nFRASÃO, Dilva. César Lattes: Físico Brasileiro. [S. l.], 30 maio 2020. Disponível em: https://www.ebiografia.com/cesar_lattes/. Acesso em: 23 abr. 2022.\r\n**-**\r\nLIMA, Gabriel Augusto Câmara Paiva. SAPUNARU, Raquel Anna. César Lattes: Uma vida a ser contada. Revista Científica Multidisciplinar Núcleo do Conhecimento. Ano 05, Ed. 10, Vol. 05, pp. 181-196. Outubro de 2020. ISSN: 2448-0959, Disponível em: https://www.nucleodoconhecimento.com.br/fisica/cesar-lattes, DOI: 10.32749 \r\n**-**\r\nMARQUES, Alfredo. Cesar Lattes 1924 – 2005. Ciência e Sociedade, Rio de Janeiro, v. 1, n. 1, p. 10-17, out. 2013. Brazilian Center for Physical Research. http://dx.doi.org/10.7437/cs2317-4595/2013.01.004.\r\n**-**\r\nVIEIRA, Cassio Leite. César Lattes: Arrastado Pela História. 3ª. ed. Rio de Janeiro: CBPF, 2019. 82 p. Disponível em: https://www2.cbpf.br/pt-br/livros/cesar-lattes-arrastado-pela-historia#:~:text=O%20embri%C3%A3o%20desta%20biografia%20foi,Faperj)%20e%20publicado%20pela%20EDUERJ. Acesso em: 23 abr. 2022.'),
(33, 'Dom Pedro I', 'Pedro de Alcântara Francisco Antônio João Carlos Xavier de Paula Miguel Rafael Joaquim José Gonzaga Pascoal Cipriano Serafim de Bragança e Bourbon', 'upload/c12443a905448e60fc556f296ead0537.jpg', '1798-10-12', '1834-09-24', 'Palácio Nacional e Jardins de Queluz, Queluz, Lisboa, Portugal', 'Palácio Nacional e Jardins de Queluz, Queluz, Lisboa, Portugal', 'João VI de Portugal e Carlota Joaquina da Espanha, ambos da realeza de Portugal.', 'Pelo fato de ser filho de um monarca e ser um rei em si, a família de Dom Pedro I está repleta de pessoas famosas. Dentre elas: seus pais citados anteriormente; Dona Maria I (avó); Maria Leopoldina da Áustria (esposa); Amélia de Leuchtenberg (esposa); Dom Pedro II (filho); Miguel I de Portugal (irmão); Fernando VII de Espanha (tio); além de muitos outros.', 'Toda a ascendência e descendência de Dom Pedro I fez parte da realeza, compostas por diversos reis e rainhas de Portugal e da Espanha.', 'Dom Pedro começou sua educação básica sob a tutela de José Monteiro da Rocha e o Frei Antônio de Nossa Senhora da Salete e ao vir para o Brasil, passou a ser instruído pelo Frei Antônio de Arrábida. Dom Pedro não formou-se em um curso de ensino superior.', 'Não sabemos se podem necessariamente ser consideradas profissões, mas Dom Pedro I foi imperador do Império do Brasil durante o período de 1822 a 1831, rei de Portugal e Algarves por um curto período de 1826 e regente de Portugal de 1832 a 1834.', 'História', 'Não, permaneceu na realeza até o final de sua vida. ', 'Fez parte da independência do Brasil, tal participação foi constituída por diversas ações, dentre as quais se destacam: o “Dia do Fico” em 9 de janeiro de 1822, dia no qual Dom Pedro (que era príncipe regente do Brasil) contrariou ordens de retorno a Portugal feitas pelas Cortes Portuguesas e proferiu a célebre frase “Se é para o bem de todos e felicidade geral da Nação, estou pronto! Digam ao povo que fico”, sendo essa ação de grande importância no contexto da independência; além da proclamação da mesma, que foi um ato contrário às ordens de rebaixar o Brasil ao estado de colônia (que havia sido transformado em reino no ano de 1815, com a elevação de condição e integração do mesmo ao Reino Unido de Portugal,  Brasil e Algarves) e do retorno de Dom Pedro à Portugal, culminando no Grito do Ipiranga: “Independência ou Morte!”.\r\n', 'Dom Pedro I era homem, hétero, caucasoide (branco) e monarca; fazendo com que nunca tenha sofrido nenhum tipo de preconceito em sua carreira.', 'Dom Pedro I foi de suma importância para sua época, com diversas contribuições dentro dela. Entretanto é necessário destacar que a mais notável delas foi sem dúvida a independência do Brasil.', 'O fato do Brasil ser independente desde 1822 até os dias atuais, deve ser creditado em grande proporção à Dom Pedro I. Fazendo com que enquanto o Brasil existir, seu nome e sua história não sejam abandonados.', 'A independência previamente citada, além dos atos que a constituíram; e a “Guerra dos Miguelista” que foi uma guerra civil portuguesa que Pedro travou contra seu irmão Miguel por causa de uma crise de sucessão do trono português;', 'A independência do Brasil foi ovacionada e apoiada pela sociedade brasileira, entretanto foi criticada pelas Cortes e elite portuguesa gerando inclusive um período de guerras para que ocorresse plenamente, que durou de 1822 a 1825. Tal período foi encerrado com o Tratado do Rio de Janeiro (Tratado de Paz, Amizade e Aliança entre Brasil e Portugal) com intermediação do Reino Unido.', '“Independência ou morte!”', 'GRAHAM, Maria. Escorço biográfico de Dom Pedro I. Rio de Janeiro: Biblioteca Nacional, 2010. 365 p. \r\n**-**\r\nNEVES, Fárima Maria. D. PEDRO I, A EDUCAÇÃO E A FORMAÇÃO DA SOCIEDADE BRASILEIRA. XXVII Simpósio Nacional de História: Conhecimento histórico e diálogo social, Natal - RN, p. 1-13, 2013. \r\n**-**\r\nPEDREIRA, Jorge M. Economia e política na explicação da independência do Brasil. In: MALERBA, Jurandir. A independência brasileira: novas dimensões. Rio de Janeiro: Editora FGV, 2006. cap. 1, p. 54-97. Disponível em: https://ria.ufrn.br/jspui/handle/123456789/1097 Acesso em: 02 de maio de 2022. \r\n**-**\r\nSOUSA, Otávio Tarquínio de. História dos Fundadores do Império do Brasil. 2. ed. Brasília: Senado Federal, 2015. 367 p.'),
(34, 'John Locke', 'John Locke', 'upload/dc945b1608843c81e1a83bdec836d367.jpg', '1632-08-29', '1704-10-28', 'Wrington, Somerset, Inglaterra', 'Oates, High Laver, Essex, Inglaterra', 'John Locke Esq. e Agnes Keene Locke.', 'Não há outras pessoas destacáveis em sua família.', 'Locke fazia parte de uma elite burguesa formada durante o século XVI e XVII na Inglaterra. ', 'Sua formação básica foi feita por meio de ensino domiciliar por causa da Guerra Civil Inglesa e por sua saúde delicada, e aos quatorze anos ingressou na Westminster School onde concluiu o ensino básico. Posteriormente cursou filosofia, ciências naturais e medicina pela Christ Church na Universidade de Oxford.', 'Trabalhou como médico, como secretário, além de também ter atuado na filosofia e de ter sido um excelente acadêmico.', 'Sociologia', 'Não foram encontradas informações precisas o suficiente que falem sobre mudanças de classe social na vida de Locke.  ', 'O Iluminismo. Locke foi de imensa importância para o movimento pelo fato de ter desenvolvido diversas teorias para a explicação da organização e estrutura da sociedade e da sua relação com o Estado. Defendendo ideias liberais e empiristas que seriam extremamente influentes desde sua época até os dias atuais. Tais ideias foram expressas principalmente pelas obras: “Dois Tratados sobre o Governo”, “Ensaio sobre o Entendimento Humano” e “Cartas sobre a Tolerância”.', 'Locke era homem e caucasoide (branco); fazendo com que nunca tenha sofrido nenhum tipo de preconceito em sua carreira.', 'Os seus pensamentos e teorias liberais. Pelo fato dos mesmos terem sedimentado e dado motivos para uma série de mudanças e modernizações que viriam acontecer na sociedade da época. Dentre as quais destacam-se a “Revolução Gloriosa”, a qual colocou uma monarquia parlamentarista constitucional como governo na Inglaterra; além da própria “Revolução Francesa” séculos depois, que foi fundamentada, em certos pontos, nas ideias do rompimento do absolutismo monárquico de Locke.', 'As suas concepções de sociedade e seu vínculo com o Estado, foram e serão fundamentais para a visão de Estado e liberdade moderna.', 'Sim. Participou ativamente das revoluções inglesas, destacando-se a “Revolução Gloriosa” de 1688 que, seguindo seus ideais liberais de governo, pôs no trono inglês Guilherme de Orange e Maria Stuart. Evento que marcou   a  queda   do   absolutismo   no   país   e culminou na criação de uma monarquia parlamentarista constitucional baseada nos princípios liberais de Locke, marcados pelas determinações da Bill of the Rights.', 'Primeiramente é importante destacar que o século XVII na Inglaterra é marcado pela “disputa” entre o rei (teoria do direito divino de governar) e o parlamento (teoria liberal da relação entre sociedade e governo). \r\n	Considerando:\r\n.	O fato que Locke era contra a teoria da origem divina do governo civil;\r\n.	Defendia que o estado de natureza (método de organização da sociedade sem o Estado) não era necessariamente uma condição caótica, e que mesmo nessa situação os indivíduos tinham direitos fundamentais; \r\n.	Via o Estado como um pacto de consentimento de indivíduos para com indivíduos (um “contrato social”) e que este só possuía como objetivos somente a manutenção dos direitos naturais e a preservação do corpo político.\r\n	É possível concluir que através da visão de seu período, Locke era tido até certo ponto como extremista. Por exemplo, a obra “Segundo Tratado sobre o Governo” foi vista como proveniente de um radicalismo liberal extremo na época em que foi lançada.\r\n', '“A necessidade de procurar a verdadeira felicidade é o fundamento da nossa liberdade.”', 'MARTINS, Renato de Almeida; BERNARDES, Sueli Teresinha de Abreu. PRIMEIRAS LEITURAS SOBRE O PENSAMENTO DE JOHN LOCKE. Simpós: V Simpósio de Pós-Graduação, [s. l.], p. 1-11, 2018.\r\n**-**\r\nO PENSAMENTO POLÍTICO DE JOHN LOCKE E O SURGIMENTO DO LIBERALISMO. In: VARNÁGY, Tomás. Filosofia e Política Moderna. Buenos Aires: CLACSO, 2006. Disponível em: http://biblioteca.clacso.edu.ar/gsdl/cgi-bin/library.cgi?e=d-11000-00---off-0clacso--00-1----0-10-0---0---0direct-10---4-------0-0l--11-es-Zz-1---20-about---00-3-1-00-0--4----0-0-01-00-0utfZz-8-00&a=d&cl=CL4.9&d=D829.4. Acesso em: 07 de maio de 2022. \r\n**-**\r\nWOOLHOUSE, Roger. Locke: A Biography. Cambridge University Press, Londres, p. 1-29, 2007. Disponível em: https://assets.cambridge.org/97805218/17868/frontmatter/9780521817868_frontmatter.pdf. Acesso em: 07 de maio de 2022.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `biografias`
--
ALTER TABLE `biografias`
  ADD PRIMARY KEY (`id_biografia`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `biografias`
--
ALTER TABLE `biografias`
  MODIFY `id_biografia` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
