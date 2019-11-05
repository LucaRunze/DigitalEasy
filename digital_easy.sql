-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Out-2019 às 20:01
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_easy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) NOT NULL,
  `modelo_produto` varchar(50) NOT NULL,
  `preco_produto` varchar(10) NOT NULL,
  `categoria_produto` varchar(20) NOT NULL,
  `descricao_produto` text,
  `marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `modelo_produto`, `preco_produto`, `categoria_produto`, `descricao_produto`, `marca`) VALUES
(2, 'HTG-244', '1.490,00', 'computador', 'Nome da marca: G-FIRE\r\nModelo: HTG----244\r\nCor: Branco e Vermelho\r\nTamanho do HD: 1 TB\r\nModelo da placa de vídeo: AMD radeon R7 graphics\r\nNúmero de processadores: 4\r\n\r\nDescrição: PC G-FIRE AMD A10 9700 3.8 GHz 8 GB 1 TB R7 1029 MHz integrada Computador GamerProcessador AMD A10-9700 3.5/3.8 GHz, 10 núcleos (4 CPU + 6 GPU)Conta com um processador AMD Elite Series APUs A10-9700 total de 10 núcleos e cache de 2 MB.A inovação da AMD projetada para executar os mais modernos aplicativos e Jogos. Com velocidade máxima de 3.8GHz.Placa de VídeoPlaca gráfica AMD Radeon R7 Graphics conta com GPU de 6 núcleos e frequência de 1029 MHz, integrada ao processador. Apresenta ótimo desempenho em jogos MOBA e filmes.ESPECIFICAÇÕES TÉCNICASCaracterísticas:- Marca: G-FIRE- Modelo: HTG-244Especificações:- HD: 1TBProcessador:- AMD A10-9700 3.5 (3.8GHz Max Turbo), 10 núcleos (4 CPU + 6 GPU)- Socket: AM4- Cache: 2MBMemória RAM:- Capacidade: 8GB- Tipo: DDR4Placa Mãe:- Áudio: Áudio HD- Rede: Gigabit LAN 10/100/1000 Mb/s- Portas USB integradasFonte:- 200W Real ou Superior- Voltagem: BivoltGabinete:- Gabinete GamerHTC10B branco- Suporte para placa mãe micro ATX, ATX- Revestimento interno na cor preta- 2 entradas USB 2.0- Áudio Frontal: HD ÁudioPlaca de Vídeo:- AMD Radeon R7 1GB (Integrada ao Processador) 1029 MHzConteúdo da Embalagem:- 01 Computador Gamer G-Fire- 01 Manual*Sistema Operacional: LINUX.* Não acompanha: Leitor/Gravador de CD/DVDGarantia12 meses de garantiaDimensões-Medidas da embalagem ( C x L x A ): 58 x 27 x 59 cm-Medidas do produto ( C x L x A ): 40 x 17 x 39 cmPeso10Kg (bruto com embalagem)* Imagem meramente ilustrativa.\r\n', 'G-FIRE'),
(3, 'HTAVA-R83', '1.835,68', 'computador', 'Cor: Vermelho e Preto\r\nTamanho do HD: 1 TB\r\nModelo da placa de Video: AMD A6 7400K\r\nNúmero de processadores: 4\r\n\r\nDescrição: PC G-FIRE AMD A6 7400K 8GB 1TB Radeon R5 2GB Integrada Computador Gamer GKAC HTG-268RProcessadorAMD A6 7400K 3.5/ 3.9GHz, 06 núcleos (2 CPU + 4 GPU)Conta com um processador AMD Elite Series APUs A6-7400K total de 6 núcleos. A inovação da AMD projetada para executar os mais modernos aplicativos. Com velocidade máxima da 3.9GHz.Placa De Vídeo Integrada ao Processador -AMD Radeon R5GraphicsPlaca gráfica AMD Radeon R5 Graphics conta com GPU de 4 núcleos integrada ao processador. Apresenta ótimo desempenho em games e filmes.ESPECIFICAÇÕES TÉCNICASCaracterísticas:- Marca: G-Fire- Modelo: HTG-268Especificações:- HD: 1TBProcessador:- AMD A6 7400K 3.5/3.9GHz- Socket: FM2+- Cache L1: 128KB- Cache L2: 1MB- Núcleos: 06 (2 CPU + 4 GPU)- SOCKET: FM2+Memória RAM:- Capacidade: 8GB- Tipo: DDR3Placa Mãe:- Áudio: Áudio HD- Rede: Gigabit LAN 10/100/1000 Mb/s- HDMI- Portas USB integradasFonte:- 200W Real ou Superior- Voltagem: BivoltGabinete:- Gabinete GamerHTSY137Preto- Suporte para placa mãe micro ATX- Revestimento interno na cor preta- 2 entradas USB 2.0- Áudio Frontal: HD ÁudioPlaca de Vídeo:- AMD Radeon R5 Graphics 2GB (Integrada ao Processador) 758MHz- Núcleos Gráficos: 256- DirectX 12Acessórios:KIT de Acessórios GamerTeclado Gamer Profissional: KG10BKC3THMouse Gamer: MOGT2 G-FIREHeadset: EPH501Mouse PAD: MP2018A G-FIREConteúdo da Embalagem:- 01 Computador Gamer G-Fire- 01 Manual- 01 Teclado- 01 Mouse- 01 Headset- 01 Mouse PAD*Sistema Operacional: LINUX.* Não acompanha: Leitor/gravador de CD/DVDGarantia12 meses de garantiaDimensões-Medidas da embalagem ( C x L x A ): 58 x 27 x 59cm-Medidas do computador ( C x L x A ): 46,8 x 19,7 x 41,7cmPeso12 Kg (bruto com embalagem)* Imagem do Fabricante - Meramente Ilustrativa. A marca das peças pode variar de acordo com o estoque momentâneo em nossa fábrica, garantimos manter sempre o nível de ótima qualidade dos produtos e atender o minimo estipulado no computador. Nunca um modelo inferior.\r\n', 'G-FIRE'),
(4, 'G-FIRE AMD A6 7400K', '1.299,00 ', 'computador', 'Descrição: PC G-FIRE AMD A6 7400K 8GB 1TB Radeon R5 2GB Integrada Computador Gamer HTG-273ProcessadorAMD A6 7400K 3.5/ 3.9GHz, 06 núcleos (2 CPU + 4 GPU)Conta com um processador AMD Elite Series APUs A6-7400K total de 6 núcleos. A inovação da AMD projetada para executar os mais modernos aplicativos. Com velocidade máxima da 3.9GHz.Placa De Vídeo Integrada ao Processador AMD Radeon R5GraphicsPlaca gráfica AMD Radeon R5 Graphics conta com GPU de 4 núcleos integrada ao processador. Apresenta ótimo desempenho em games e filmes.', 'G-FIRE'),
(5, 'A315-51-347W', ' 2.199,00', 'notebook', 'Marca: Acer\r\nCor: Preto	\r\nHD: 500GB\r\nRam: 4GB\r\nPlaca de Vídeo: Intel HD Graphics 520\r\n\r\n\r\nDescrição: O notebook Acer A315-51-347W possui processador Intel Core i3-6006U, memória RAM de 4GB, 500GB de HD e sistema operacional Windows 10 Home 64-bits. Seus trabalhos, apresentações, filmes ou vídeos poderão ser vistos de forma clara na tela LED de 15,6\". Sua placa de vídeo integrada deixa tudo ainda melhor para você.\r\n', 'Acer'),
(6, 'Ideapad 330', ' 3.299,00', 'notebook', 'Marca: Lenovo\r\nCor: Cinza\r\nHD: 1TB\r\nRam: 8GB\r\nPlaca de Vídeo: Intel UHD Graphics 620\r\n\r\nDescrição: Lenovo ideapad 330: Design sofisticado e tela antirreflexo de 15.6\" para mais conforto visual. Um notebook perfeito para produtividade e entretenimento com certificação Dolby Audio, entrada USB tipo C, WiFi AC ultrarrápido e teclado numérico. Conta com abertura de tela de 180 graus para mais flexibilidade e facilidade de uso.\r\n', 'Lenovo'),
(7, 'P30 lite', '1.337,56', 'celular', 'Cores: Azul ou Preto\r\nArmazenamento: 128GB\r\nRam: 6GB\r\nCameras: 24MP + 8MP + 2MP \r\nFrontal: 32MP \r\n\r\nDescrição:Beleza em todas as fotosTodo rosto é diferente e único. A tecnologia Selfie, dirigida pela IA da HUAWEI, embeleza os seus auto-retratos com base no seu formato e tipo de rosto exclusivos. A tecnologia mapeia os contornos de seus recursos e cria um algoritmo personalizado para garantir que você sempre mostre seu melhor lado.Visão mais ampla. Possibilidades mais amplasAmplie sua perspectiva com a lente Ultra-Wide Angle de 120° do HUAWEI P30 lite e capture paisagens expansivas em fotos impressionantes que não deixam nada fora de vista. Atire sem limites.Seu assistente de câmera inteligenteMelhore suas fotos com a poderosa tecnologia de reconhecimento de cena IA. A câmera frontal HUAWEI P30 lite pode identificar mais de 8 categorias em tempo real, enquanto a câmera traseira pode reconhecer 22 categorias diferentes. Configurações como cor, iluminação e contraste são ajustadas automaticamente para produzir fotos deslumbrantes.Incrível displayVeja, faça e crie mais com o novo display com \"notch\" em formato de gota d\'água do HUAWEI P30 lite. Grande, arrojado e bonito, a tela FHD de 6.15\" com um entalhe delicado é deslumbrante para viver a sua vida em cores brilhantes. Além disso, o display tem a Certificação TÜV Rheinland Eye Comfort e foi desenvolvido para ser mais fácil para os olhos, resultando em uma experiência de visualização mais confortável.Design atraenteElegante e simplificado; o HUAWEI P30 lite cabe confortavelmente na palma da sua mão. O design fino de vidro curvo em 3D é feito para fácil aderência e uso com uma mão. Está disponível em três cores, incluindo um acabamento de cor gradiente iridescente atraente.*Imagens meramente ilustrativas.\r\n', 'Huawei'),
(8, 'Zenfone 6', '2.758,76', 'celular', 'Cor: Preto\r\nArmazenamento: 128GB\r\nRam: 6GB\r\nCameras: 13mp+48mp (Flip camera)\r\n\r\nDescrição: O ASUS Zenfone é um verdadeiro telefone de tela cheia. A tela de 6,4 polegadas sem quaisquer entalhes ou furos de empurrar o limite de quadro estreito e tela grande, atinge 92% de ração de tela para corpo. A câmera flip indústria pioneira tem 48MP + 13MP lente dupla, quebra o limite da câmera traseira e câmera frontal. Desfrute de alta definição e grande angular em fotos de selfie e cenário. Processo mais recente de 7nm octa-core processador Qualcomm Snapdragon 855 faz com que seja um dos mais poderosos smartphones Android.\r\n', 'Asus'),
(9, 'Redmi Airdots Tws ', '135,53', 'fone', 'Descrição: Conexão automática rápida: os fones de ouvido podem se conectar de forma rápida e automática ao Bluetooth, para que você possa usá-los quando for buscá-los.adotando a tecnologia bluetooth 5.0 para uma conexão mais estável;12 horas de brincadeira;assistente de voz siriTeclas multifuncionais em ambos os fones de ouvido para evitar erros de operaçãoParâmetros:Conexão Sem Fio: Bluetooth 5.0distância de comunicação: 10 metros (sem barreiras)tempo de escuta contínua de fones de ouvido duplos: 4 horastempo de espera de fone de ouvido: cerca de 150 horascapacidade da bateria única fone de ouvido: 40mahcapacidade da bateria da caixa de carregamento: 300mahtempo de carregamento de fone de ouvido: cerca de 1,5 horastempo de carregamento da caixa de carregamento: aproximadamente 2 horas\r\n', 'Xiaomi '),
(10, 'T110', '90.00', 'fone', 'Descrição:JBL é especialista em tudo que há de melhor no mundo do som.Descubra a magia dos compactos fones In Ear Jbl e explore o melhor que a música pode lhe proporcionar em qualquer lugar. Confira a nossa seleção de In Ear e escolha o seu. Os fones intra-auriculares Jbl T110 são leves, confortáveis e compactos, e reproduzem o melhor do som com a incrível tecnologia Pure Bass, áudio com incrível clareza e graves profundos, onde você só experimentou em salas de concertos, arenas e estúdios de gravação em todo o mundo. Além disso, possui um controle remoto de um único botão em um cabo plano, livre de emaranhados, que permite que você controle a reprodução de música, bem como atender chamadas através de microfone embutido.\r\n', 'JBL'),
(11, 'Endurance dive', ' 513,97 ', 'fone', 'Marca: JBL\r\nTipo: Bluetooth 5.0\r\nPreço: 513,97 \r\nCor: Preto / Amarelo\r\n\r\nDescrição: Quando a sua rotina acontece dentro e fora d’água, os fones de ouvido Jbl Endurance Dive são feitos para acompanhar. Com a garantia de nunca machucar ou cair, o Dive amplifica o seu exercício com a classificação à prova d’água IPX7. Seu elegante mecanismo PowerHookTM liga automaticamente quando você o coloca atrás da orelha, enquanto o suporte neckband o mantém firme no pescoço. Deixe o seu dispositivo para trás com o armazenamento na memória de 1 Gb (até 200 faixas de música), com acesso via controles de toque. Curta tudo isso por até 8 horas de bateria, com Dive na piscina, nas pistas de corrida, na academia durante todo o dia.Conteúdo da Caixa1x Fone de ouvido Endurance Dive3x Tamanhos de ponteiras1x PotencializadorCabo de carregamento1x Estojo de transporte esportivo1x Certificado de garantia1x Folheto de segurança1x QSGEspecificações GeraisDimensões (A X L X C): 4,3 x 6 x 3 cmTipo De Bateria: Polímero de íons de lítio (3,7 V, 120 mAh)Tempo De Recarga Da Bateria: 2 horasTempo De Reprodução De Música: até 8 horasSensibilidade: 85 dBResposta de frequência do sistema: 20 Hz a 20 kHzImpedância De Entrada: 16 OhmsDriver Alto falante: 10mmVersão Do Bluetooth: 4.2.\r\n', 'JBL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sobrenome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Senha_C` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nome`, `Sobrenome`, `Email`, `Senha`, `Senha_C`) VALUES
(42, 'Luca', 'Barros', ' mailiveskate@gmail.com', 'zecabialuc4', 'zecabialuc4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
