-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 172.19.6.64    Database: iziscom
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `calculation`
--

DROP TABLE IF EXISTS `calculation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calculation` (
  `id_calculation` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_calculation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calculation`
--

LOCK TABLES `calculation` WRITE;
/*!40000 ALTER TABLE `calculation` DISABLE KEYS */;
/*!40000 ALTER TABLE `calculation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emails` (
  `id_email` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `code` int DEFAULT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (3,'wladislaw109@mail.ru',1544),(4,'hancharou@rnpcmt.by',7041),(5,'halushka@rnpcmt.by',8002);
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faults`
--

DROP TABLE IF EXISTS `faults`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faults` (
  `id_fault` int NOT NULL AUTO_INCREMENT,
  `date_fault` date DEFAULT NULL,
  `date_call_service` date DEFAULT NULL,
  `reason_fault` text,
  `date_procedure_purchase` date DEFAULT NULL,
  `date_dogovora` date DEFAULT NULL,
  `cost_repair` int DEFAULT NULL,
  `time_repair` date DEFAULT NULL,
  `downtime` varchar(100) DEFAULT NULL,
  `id_oborudovanie` int DEFAULT NULL,
  PRIMARY KEY (`id_fault`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faults`
--

LOCK TABLES `faults` WRITE;
/*!40000 ALTER TABLE `faults` DISABLE KEYS */;
INSERT INTO `faults` VALUES (19,'2024-04-02','0000-00-00','Отключение во время работы. Ошибка «Front Jedi: Heater 1 detector open circuit» 02.04.2024 Вызов сервисной организации для диагностики 03.04.2024 Диагностика сервисной организацией ИУП «Традинтек Сервис». В процессе диагностики выявлено: обнаружено контактное замыкание на контактах C-G2 рентгеновской трубки. Рентгеновская трубка неисправна, требуется замена трубки с последующей диагностикой. По акту ввода гарантия на рентгеновскую трубку составляет 3 года со дня ввода в эксплуатацию. 05.04.2024 направлено письмо в ИУП «Традинтек Сервис» с просьбой заменить рентгеновскую трубку в рамках гарантийных обязательств. 15.04.2024 Направлено письмо в ИУП «Традинтек Сервис», представительство Tradintek S.A., УП «Белмедтехника» о сроках замены рентгеновской трубки. 18.04.2024 Представители поставщиков Tradintek SA прислали письмо от 09.04.2024 №43-Т/24 «О замене по гарантии», в котором сказано, что их компания прилагает все возможные усилия, чтобы сроки замены трубки не превышали 4-6 недель. Трубка передана УП «Белмедтехника». По информации от УП «Белмедтехника» новая рентгеновская трубка ожидает растаможки после одобрения Министерства Здравоохранения на вывоз дефектной трубы на завод изготовитель. 24.05.2024 Направлен запрос о сроках поставки рентгеновской трубки в Tradindek S.A. и УП «Белмедтехника». 27.05.2024 получен ответ от Tradindek S.A.: для выпуска запасной части (новой) в свободное обращение необходим экспорт дефектной трубки, который запланирован на 29.05.2024 с таможенного склада УП «Белмедтехника». УП «Белмедтехника» подан запрос на импорт новой трубки, находящейся в таможенной зоне.  Ожидается официальное подтверждение полученной информации. 31.05.2024 получен официальный ответ от УП «Белмедтехника»» «31 мая 2024г. в Минскую таможню подан комплект документов. После принятия решения таможенными органами о целесообразности замены по гарантии трубки рентгеновской нами будет произведено таможенное оформление новой. О Готовности товара к отгрузке Вам будет направлено письменное уведомление»  07.06.2024 По информации от УП «Белмедтехника» решения таможенными органа-ми о целесообразности замены по гарантии трубки рентгеновской на данный момент не получено (Ориентировочный срок восстановления – 30.06.2024)','0000-00-00',NULL,0,'0000-00-00','0',9),(20,'2024-02-12','2024-02-12','12.02.2024 выход из строя, выдан дефектный акт. Сервисная организация заключать договор отказалась ввиду отсутствия лицензии. УП «Медтехника» г. Барановичи проводит процедуру закупки. 27.03.2024г. УП «Медтехника» уведомляет, что по итогам проведенной процедуры, предложений нет. Проводится повторная процедура ЗОИ. Выбран победитель – РУП «Медтехноцентр». Заключен договор №199 от 12.04.2024 Ориентировочные сроки поставки - в течение 60 рабочих дней.','2024-04-12','0000-00-00',102287,'0000-00-00','4 месяца',11),(21,'0000-00-00','0000-00-00','На 22.05.2024 выход из строя, выдан дефектный акт. Перечислены денежные средства поставщику запасных частей. По полученной информации рентгеновская трубка поставлена в Республику Беларусь, получение 30.05.2024. Выполнение работ по ремонту начато 03.06.2024. Выполняются пусконаладочные работы ООО «АФС Медицинтехник Бел» на основании договора комиссии между УЗ и УП «Белмедтехника».','0000-00-00',NULL,0,'0000-00-00','21 день',12),(22,'2024-05-28','2024-05-28','28.05.2024 выход из строя рентгеновской трубки. Выдан дефектный акт. Проводится процедура закупки на ремонт.','0000-00-00',NULL,500800,'0000-00-00','0',14),(23,'0000-00-00','0000-00-00','Отсутствие герметичности, требуется замена световода','0000-00-00',NULL,0,'0000-00-00','0',15),(25,'2024-04-11','0000-00-00','11.04.2024 выход из строя. Закупка через УП «Белмедтехника», срок поставки 90 дней. 17.04.2024 документы для проведения процедуры закупки направлены в УП «Белмедтехника». 22.04.2024 заключен договор на поставку запасной части, со сроком 90 рабочих дней. Ориентировочно до 28.08.2024.','0000-00-00',NULL,0,'0000-00-00',NULL,17),(26,'2024-03-29','0000-00-00','29.03.2024 выход из строя. Выдан дефектный акт. Сервисной организацией направлены запросы на определение ориентировочной стоимости запасных частей. 09.04.2024 заключен договор с ООО «Медтехнопарк», срок поставки 120 дней.','0000-00-00',NULL,0,'0000-00-00',NULL,18),(27,'2024-05-29','0000-00-00','29.05.2024 выход из строя. 30.05.2024 выдан дефектный акт. 04.06.2024 получено коммерческое предложение от ООО «Драйв». 11.06.2024 проводится процедура закупки.','0000-00-00',NULL,0,'0000-00-00',NULL,19),(28,'2024-05-15','0000-00-00','15.05.2024 выход из строя. Проведена процедура закупки на диагностику аппарата. 20.05.2024 заключен договор с ООО «Компания Ремод». Выдан дефектный акт. Заключен договор на ремонт с ООО «Компания Ремод», приезд специалистов запланирован на 07.06.2024. В процессе ввода в эксплуатацию оборудования запустить аппарат не представилось возможным. Предположительно вышел из строя генератор высокого напряжения. Сотрудники ООО «Компания Ремод» приступили к проведению повторной диагностике аппарата.','0000-00-00',NULL,0,'0000-00-00',NULL,21),(29,'2024-02-07','0000-00-00','07.02.2024 выход из строя. Проводится процедура закупки на диагностику и ремонт аппарата. На 20.02.2024 подписывается договор на проведение диагностики с ЧУП «Белмедтехносервис». 26.02.2024 проведена диагностика аппарата. На 04.03.2024 УЗ готовятся документы для объявления процедуры закупки. Запасная часть является товаром двойного назначения. ЧТУП «Белмедтехносервис» направлен запрос в ЗАО «АДВИН Смарт Фэктори» о наличии запасной части. На 26.03.2024 получено письмо от ЧТУП «Белмедтехносервис», что запасные части заказаны у производителя, срок восстановления неизвестен по причине санкций и логистики поставки запасных частей. По устной информации, полученной от ЗАО «АДВИН Смарт Фэктори» таможенный контроль не пропускал запасную часть, искали посредника. 31.05.2024 запасная часть выехала из Италии, срок поставки 2 месяца. Ориентировочно до 31.07.2024. 04.06.2024 объявлена процедура закупки. 07.06.2024 выбран победитель ЧТУП «Белмедтехносервис».','0000-00-00',NULL,0,'0000-00-00',NULL,22),(30,'2024-03-01','0000-00-00','01.03.2024 выход из строя, вызваны специалисты сервисной организации. 06.03.2024 выдан дефектный акт. 11.03.2024 объявлена процедура закупки. Выбран победитель ООО «АФС Медицинтехник Бел», заключен договор от 19.03.2024. Ориентировочная дата поставки 16.07.2024.','0000-00-00',NULL,0,'0000-00-00',NULL,23),(31,'2024-05-17','0000-00-00','17.05.2024 выход из строя. Проведена диагностика, 20.05.2024 получен дефектный акт. 24.05.2024 направлено письмо в КЗ МГИ о выделении дополнительных средств на ремонт аппарата. 28.05.2024 объявлена процедура закупки. 30.05.2024 выбран победитель ИТСУП «Медисфера». 31.05.2024 заключен договор со сроком выполнения работ 90 дней, ориентировочно до 31.08.2024.','0000-00-00',NULL,0,'0000-00-00',NULL,24),(32,'2024-06-10','0000-00-00','10.06.2024 выход из строя блока питания градиентных усилителей. Выдан дефектный акт.','0000-00-00',NULL,0,'0000-00-00',NULL,25),(33,'2022-12-27','0000-00-00','27.12.2022 выход из строя. 19.04.2023 произведена замена катушки. В процессе наладки аппарата специалистами сервисной организации были выявлены проблемы оборудования, которые не были зафиксированы на момент составления дефектного акта. Специалистами сервисной организации были проведены все необходимые измерения и тесты системы, которые были направлены в адрес завода-изготовителя. 28.08.2023 главное управление по здравоохранения Минского облисполкома в адрес УП «Белмедтехника» направлено письмо о предоставлении информации о поставке по гарантии катушки Spare part body coil P004. 29.08.2023 получен ответ УП «Белмедтехника», в связи с нарушеним сроков замены запасной части, в настоящее время ведется претензионная работа с поставщиком «Медисфера», в части взыскания денежных средств за оплату товара. 13.09.2023 УП «Белмедтехника» вернула денежные средства. 15.09.2023 направлена заявка в УП «Белмедтехника» для проведения новой процедуры закупки. Выбран победитель - SIA «SIS BIZNESA SERVISS». Срок поставки товара в течение150 рабочих дней и дополнительных 30 календарных дней, а при поставке товара подлежащего сертификации либо требующего получения иных разрешительных документов дополнительных 50 календарных дней. 22.12.2023 УП «Белмедтехника» открыт аккредитив. 07.06.2024 запасные части получены. 10.06.2024 начаты ремонтно-восстановительные работы.','0000-00-00',NULL,0,'0000-00-00',NULL,26),(34,'2024-05-02','0000-00-00','02.05.2024 выход из строя. 06.05.2024 УЗ направлена заявка на закупку запасной части в УП «Белмедтехника». 30.05.2024 выбран победитель «BNT Medical SA», срок поставки – 120 календарных дней. 04.06.2024 в УП «Белмедтехника» дополнительно поступило предложению потенциального поставщика ООО «Новые Медицинские Технологии». 05.06.2024 УЗ было предоставлено экспертное заключение. Рассмотрение запланировано на 13.06.2024.','0000-00-00',NULL,0,'0000-00-00',NULL,27),(35,'2024-05-27','0000-00-00','27.05.2024 выход из строя. 29.04.2024 выдан дефектный акт. 03.05.2024 УЗ была подана заявка в УП «Белмедтехника». 06.05.2024 получен ответ, что в рамках состоявшейся процедуры закупки заключен договор на поставку L-22/744 с организацией \"Spectrix S.A\" рентгеновской трубки. Срок поставки – 60 календарных дней. 10.05.2024 УЗ в адрес УП «Белмедтехника» направлено письмо-уведомление о готовности принять и оплатить товар. Поставка товара – июль 2024. 07.06.2024 запасная часть получена. 10.06.2024 начаты ремонтно-восстановительные работы.','0000-00-00',NULL,0,'0000-00-00',NULL,28),(36,'2024-03-05','0000-00-00','25.03.2024 выход из строя. Необходима замена рентгеновской трубки по гарантии; - закупка высоковольтного трансформатора SC-Fast KV HV Tank, набора кабелей Jedi SC cables set/ Ориентировочный срок поставки 25.06.2024.','0000-00-00',NULL,0,'0000-00-00',NULL,29),(37,'2024-05-28','0000-00-00','На 28.05.2024 выход из строя блока связи модулей управления ULI (RoHS), интерфейсной платы стола OR Table Interface. Проводится процедура закупки.','0000-00-00',NULL,0,'0000-00-00',NULL,30),(38,'2024-04-15','0000-00-00','15.04.2024 выход из, выдан дефектный акт. 24.04.2024 объявлена процедура закупки. 24.05.2024 договор заключен, срок выполнения работ 90 дней.','0000-00-00',NULL,0,'0000-00-00',NULL,31),(39,'2024-05-10','0000-00-00','10.05.2024 выход из строя, выдан дефектный акт. УЗ переданы документы в УП «Белмедтехника» для объявления процедуры закупки. Запасная часть находится на территории Республики Беларусь. Выбран победитель ООО «Медтехнопарк». 31.05.2024 переданы документы на контракт, сроки поставки 10 рабочих дней с даты направления уведомления. 11.06.2024 договор заключен, до 14.06.2024 планируется восстановление работоспособности аппарата.','0000-00-00',NULL,0,'0000-00-00',NULL,32),(40,'2024-05-28','0000-00-00','28.05.2024 вышел из строя, выдан дефектный акт. 05.06.2024 получено коммерческое предложение. 06.06.2024 УЗ направлены документы в УП «Белмедтехника» для проведения процедуры закупки.','0000-00-00',NULL,0,'0000-00-00',NULL,33),(41,'2023-12-14','0000-00-00','14.12.2023 ошибка MLC при лечении. Выполняется ремонт. 05.01.2024 получено коммерческое предложение о стоимости запасных частей. 10.01.2024 в УП «Белмедтехника» направлено письмо о поставке запасных частей по контракту L-19/1808. Ориентировочный срок поставки запасных частей 10.04.2024. 12.04.2024 после установки запасных частей аппарат неработоспособен. Требуется замена платы Soft Pod. Ожидается поставка дополнительных запасных частей, ориентировочный срок – июль 2024 г.','0000-00-00',NULL,0,'0000-00-00',NULL,34);
/*!40000 ALTER TABLE `faults` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `haract_object`
--

DROP TABLE IF EXISTS `haract_object`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `haract_object` (
  `id_haract_object` int NOT NULL AUTO_INCREMENT,
  `type_zdanie` int DEFAULT NULL,
  `zdanie` int DEFAULT NULL,
  `stage` int DEFAULT NULL,
  `height` int DEFAULT NULL,
  `obem` int DEFAULT NULL,
  `height_pol` int DEFAULT NULL,
  `radio_zdanie` int DEFAULT NULL,
  `temperature` int DEFAULT NULL,
  `nasishenost` int DEFAULT NULL,
  `aggresive_vozdeistvie` int DEFAULT NULL,
  `checkb1` int DEFAULT NULL,
  `checkb2` int DEFAULT NULL,
  `checkb3` int DEFAULT NULL,
  `checkb4` int DEFAULT NULL,
  `checkb5` int DEFAULT NULL,
  `checkb6` int DEFAULT NULL,
  `checkb7` int DEFAULT NULL,
  `checkb8` int DEFAULT NULL,
  `checkb9` int DEFAULT NULL,
  `checkb10` int DEFAULT NULL,
  `checkb11` int DEFAULT NULL,
  `checkb12` int DEFAULT NULL,
  `id_smeta` int DEFAULT NULL,
  PRIMARY KEY (`id_haract_object`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haract_object`
--

LOCK TABLES `haract_object` WRITE;
/*!40000 ALTER TABLE `haract_object` DISABLE KEYS */;
INSERT INTO `haract_object` VALUES (7,1,7,5,20,900,5,NULL,2,1,0,1,0,0,0,1,0,0,0,1,0,0,0,25),(8,3,7,9,8,7,6,NULL,0,0,0,0,0,0,1,0,0,0,1,0,0,0,1,26),(9,3,1,5,20,500,3,NULL,2,1,0,1,0,0,0,1,0,0,0,1,0,0,0,27),(10,2,2,2,4,1111,2,NULL,2,2,0,0,1,1,0,0,1,1,0,0,1,1,0,28);
/*!40000 ALTER TABLE `haract_object` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oblast`
--

DROP TABLE IF EXISTS `oblast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oblast` (
  `id_oblast` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `hrefadded` text,
  PRIMARY KEY (`id_oblast`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oblast`
--

LOCK TABLES `oblast` WRITE;
/*!40000 ALTER TABLE `oblast` DISABLE KEYS */;
INSERT INTO `oblast` VALUES (1,'Брестская область','brestobl'),(2,'Витебская область','vitebskobl'),(3,'Гомельская область','gomelobl'),(4,'Гродненская область','grodnoobl'),(5,'Минская область','minskobl'),(6,'Могилевская область','mogilevobl'),(7,'Минск','minsk');
/*!40000 ALTER TABLE `oblast` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obmernie_raboty`
--

DROP TABLE IF EXISTS `obmernie_raboty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `obmernie_raboty` (
  `id_obmernie_raboty` int NOT NULL AUTO_INCREMENT,
  `obmerobs` varchar(45) DEFAULT NULL,
  `choosCunstruct4` varchar(45) DEFAULT NULL,
  `toggleZd41` varchar(45) DEFAULT NULL,
  `toggleZd42` varchar(45) DEFAULT NULL,
  `toggleZd43` varchar(45) DEFAULT NULL,
  `toggleZd44` varchar(45) DEFAULT NULL,
  `toggleZd45` varchar(45) DEFAULT NULL,
  `toggleZd46` varchar(45) DEFAULT NULL,
  `toggleZd47` varchar(45) DEFAULT NULL,
  `toggleZd48` varchar(45) DEFAULT NULL,
  `toggleZd49` varchar(45) DEFAULT NULL,
  `toggleZd449` varchar(45) DEFAULT NULL,
  `conval41` varchar(45) DEFAULT NULL,
  `conval42` varchar(45) DEFAULT NULL,
  `conval43` varchar(45) DEFAULT NULL,
  `conval44` varchar(45) DEFAULT NULL,
  `conval45` varchar(45) DEFAULT NULL,
  `conval46` varchar(45) DEFAULT NULL,
  `conval47` varchar(45) DEFAULT NULL,
  `conval48` varchar(45) DEFAULT NULL,
  `conval49` varchar(45) DEFAULT NULL,
  `conval449` varchar(45) DEFAULT NULL,
  `toggleZdDopUsl` varchar(45) DEFAULT NULL,
  `toggleZdDopUsl1` varchar(45) DEFAULT NULL,
  `id_smeta` int DEFAULT NULL,
  PRIMARY KEY (`id_obmernie_raboty`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obmernie_raboty`
--

LOCK TABLES `obmernie_raboty` WRITE;
/*!40000 ALTER TABLE `obmernie_raboty` DISABLE KEYS */;
INSERT INTO `obmernie_raboty` VALUES (1,'1','1','1','1','1','1','0','1','1','0','1','0','1','0','1','0','1','0','1','0','1','0','1','0',25);
/*!40000 ALTER TABLE `obmernie_raboty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oborudovanie`
--

DROP TABLE IF EXISTS `oborudovanie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oborudovanie` (
  `id_oborudovanie` int NOT NULL AUTO_INCREMENT,
  `id_type_oborudovanie` int DEFAULT NULL,
  `id_uz` int DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `date_create` varchar(10) DEFAULT NULL,
  `date_postavki` date DEFAULT NULL,
  `date_release` date DEFAULT NULL,
  `date_dogovora` date DEFAULT NULL,
  `service_organization` text,
  `date_last_TO` date DEFAULT NULL,
  `status` int DEFAULT NULL,
  `id_serviceman` int DEFAULT NULL,
  PRIMARY KEY (`id_oborudovanie`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oborudovanie`
--

LOCK TABLES `oborudovanie` WRITE;
/*!40000 ALTER TABLE `oborudovanie` DISABLE KEYS */;
INSERT INTO `oborudovanie` VALUES (9,4,3,2682144.59,'0000-00-00','0000-00-00','2021-01-01','0000-00-00','ИУП «Традинтек Сервис»','0000-00-00',0,1),(11,11,4,0,'2020-01-01','0000-00-00','2021-01-01','0000-00-00','ИТСУП «Медисфера» (Siemens Healthcare GmbH, Германия)','0000-00-00',0,0),(12,4,5,0,'2005-01-01','0000-00-00','2005-01-01','0000-00-00','ООО «Медтехнопарк»','0000-00-00',0,2),(14,4,6,0,'2015-01-01','0000-00-00','0000-00-00','0000-00-00','ООО «Традинтек сервис»','0000-00-00',0,0),(17,11,9,0,'2009-01-01','0000-00-00','0000-00-00','0000-00-00','ИУП «Техмедсервис Спектрикс» (Toshiba Medical Systems Corporation, Япония)','0000-00-00',0,0),(18,2,13,0,'0000-00-00','0000-00-00','2018-01-01','0000-00-00','ООО «Медтехнопарк» (Philips Medical Systems Nederland B.V., Нидерланды)','0000-00-00',0,2),(19,11,15,0,'0000-00-00','0000-00-00','2013-01-01','0000-00-00','ООО «Драйв»','0000-00-00',0,3),(21,4,16,0,'0000-00-00','0000-00-00','2012-01-01','0000-00-00','ИУП «Традинтек Сервис»  (GE Medical Systems S.C.S, Франция)','0000-00-00',0,0),(22,4,20,0,'0000-00-00','0000-00-00','2018-01-01','0000-00-00','(НПЧУП «Адани»)','0000-00-00',0,4),(23,4,21,0,'0000-00-00','0000-00-00','2024-01-01','0000-00-00','ООО «АФС Медицинтехник Бел»  (Philips Medical Systems Nederland B.V., Нидерланды)','0000-00-00',0,0),(24,4,22,0,'0000-00-00','0000-00-00','2012-01-01','0000-00-00','ИТСУП «Медисфера» (Siemens AG Medical Solutions Business Unit AX, Германия)','0000-00-00',0,0),(25,2,23,0,'0000-00-00','0000-00-00','2020-01-01','0000-00-00','ИУП «Традинтек Сервис»  (GE Medical System LLC, США)','0000-00-00',0,0),(26,2,25,0,'0000-00-00','0000-00-00','2019-01-01','0000-00-00','ИТСУП «Медисфера» (Siemens Healthcare GmbH, Германия)','0000-00-00',0,0),(27,11,26,0,'0000-00-00','0000-00-00','2014-01-01','0000-00-00','ИУП «Традинтек Сервис»  (GE Healthcare Japan Corporation (завод GE Medical Systems LLC в США), Япония)','0000-00-00',0,0),(28,4,27,0,'0000-00-00','0000-00-00','2014-01-01','0000-00-00','ИУП «Техмедсервис Спектрикс»','0000-00-00',0,0),(29,11,32,0,'0000-00-00','0000-00-00','2012-01-01','0000-00-00','ИУП «Традинтек сервис»  (GE Medical Systems LLC, США)','0000-00-00',0,0),(30,4,34,0,'0000-00-00','0000-00-00','0000-00-00','0000-00-00','(Siemens AG Medical Solutions Business Unit AX, Германия)','0000-00-00',0,0),(31,12,14,0,'0000-00-00','0000-00-00','2009-01-01','0000-00-00','ООО «Медтехнопарк» (Elekta Limited)','0000-00-00',0,2),(32,12,20,0,'0000-00-00','0000-00-00','2020-01-01','0000-00-00','ООО «Медтехнопарк» (Elekta Limited, Великобритания)','0000-00-00',0,2),(33,12,20,0,'0000-00-00','0000-00-00','2015-01-01','0000-00-00','ООО «Медтехнопарк» (Elekta Limited, Великобритания)','0000-00-00',0,2),(34,12,32,0,'0000-00-00','0000-00-00','2017-01-01','0000-00-00','ИУП «Традинтек сервис»  (Varian Medical Systems Inc., США)','0000-00-00',0,0),(35,11,7,NULL,'2019','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(36,11,36,NULL,'2018','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(37,11,37,NULL,'2015','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(38,11,37,NULL,'2009','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(39,11,38,NULL,'2019','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(40,11,39,NULL,'2015','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(41,11,40,NULL,'2021','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(42,11,41,NULL,'2020','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(43,11,42,NULL,'2022','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(44,11,43,NULL,'2022','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(45,11,44,NULL,'2020','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(46,11,45,NULL,'2021','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(47,11,46,NULL,'2022','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(48,11,47,NULL,'2005','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(49,11,47,NULL,'2021','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(50,11,48,NULL,'УЗ «Иванов','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(51,2,36,NULL,'2018','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(52,2,37,NULL,'2014','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(53,2,38,NULL,'2021','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',0,NULL),(54,2,39,NULL,'2015','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(55,11,49,NULL,'2018','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(56,2,49,NULL,'2018','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(57,2,6,NULL,'2014','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL),(58,2,47,NULL,'2014','0000-00-00','0000-00-00','0000-00-00','','0000-00-00',1,NULL);
/*!40000 ALTER TABLE `oborudovanie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obsled_raboty`
--

DROP TABLE IF EXISTS `obsled_raboty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `obsled_raboty` (
  `id_obsled_raboty` int NOT NULL AUTO_INCREMENT,
  `predvOsmotr` varchar(45) DEFAULT NULL,
  `choosCunstruct5` varchar(45) DEFAULT NULL,
  `toggleZd51` varchar(45) DEFAULT NULL,
  `toggleZd52` varchar(45) DEFAULT NULL,
  `toggleZd53` varchar(45) DEFAULT NULL,
  `toggleZd54` varchar(45) DEFAULT NULL,
  `toggleZd55` varchar(45) DEFAULT NULL,
  `toggleZd56` varchar(45) DEFAULT NULL,
  `toggleZd57` varchar(45) DEFAULT NULL,
  `toggleZd58` varchar(45) DEFAULT NULL,
  `toggleZd59` varchar(45) DEFAULT NULL,
  `conval51` varchar(45) DEFAULT NULL,
  `conval52` varchar(45) DEFAULT NULL,
  `conval53` varchar(45) DEFAULT NULL,
  `conval54` varchar(45) DEFAULT NULL,
  `conval55` varchar(45) DEFAULT NULL,
  `conval56` varchar(45) DEFAULT NULL,
  `conval57` varchar(45) DEFAULT NULL,
  `conval58` varchar(45) DEFAULT NULL,
  `conval59` varchar(45) DEFAULT NULL,
  `toggleSelect1` varchar(45) DEFAULT NULL,
  `toggleSelect2` varchar(45) DEFAULT NULL,
  `povkef` varchar(45) DEFAULT NULL,
  `sooruzhzd` varchar(45) DEFAULT NULL,
  `id_smeta` int DEFAULT NULL,
  PRIMARY KEY (`id_obsled_raboty`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obsled_raboty`
--

LOCK TABLES `obsled_raboty` WRITE;
/*!40000 ALTER TABLE `obsled_raboty` DISABLE KEYS */;
INSERT INTO `obsled_raboty` VALUES (1,'1','2','1','3','1','0','1','0','0','1','2','1','0','1','1','0','0','1','1','1','0','2','3','1',25);
/*!40000 ALTER TABLE `obsled_raboty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otdel_construct`
--

DROP TABLE IF EXISTS `otdel_construct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otdel_construct` (
  `id_otdel_construct` int NOT NULL AUTO_INCREMENT,
  `toggleZd81` varchar(45) DEFAULT NULL,
  `toggleZd82` varchar(45) DEFAULT NULL,
  `toggleZd83` varchar(45) DEFAULT NULL,
  `toggleZd84` varchar(45) DEFAULT NULL,
  `toggleZd85` varchar(45) DEFAULT NULL,
  `toggleZd86` varchar(45) DEFAULT NULL,
  `toggleZd87` varchar(45) DEFAULT NULL,
  `toggleZd88` varchar(45) DEFAULT NULL,
  `toggleZd89` varchar(45) DEFAULT NULL,
  `toggleZd081` varchar(45) DEFAULT NULL,
  `toggleZd082` varchar(45) DEFAULT NULL,
  `toggleZd083` varchar(45) DEFAULT NULL,
  `toggleZd084` varchar(45) DEFAULT NULL,
  `toggleZd085` varchar(45) DEFAULT NULL,
  `toggleZd086` varchar(45) DEFAULT NULL,
  `toggleZd087` varchar(45) DEFAULT NULL,
  `toggleZd088` varchar(45) DEFAULT NULL,
  `toggleZd089` varchar(45) DEFAULT NULL,
  `toggleZd0081` varchar(45) DEFAULT NULL,
  `toggleZd0082` varchar(45) DEFAULT NULL,
  `toggleZd0083` varchar(45) DEFAULT NULL,
  `conval81` varchar(45) DEFAULT NULL,
  `conval82` varchar(45) DEFAULT NULL,
  `conval83` varchar(45) DEFAULT NULL,
  `conval84` varchar(45) DEFAULT NULL,
  `conval85` varchar(45) DEFAULT NULL,
  `conval86` varchar(45) DEFAULT NULL,
  `conval87` varchar(45) DEFAULT NULL,
  `conval88` varchar(45) DEFAULT NULL,
  `conval89` varchar(45) DEFAULT NULL,
  `conval811` varchar(45) DEFAULT NULL,
  `conval822` varchar(45) DEFAULT NULL,
  `conval833` varchar(45) DEFAULT NULL,
  `conval844` varchar(45) DEFAULT NULL,
  `conval855` varchar(45) DEFAULT NULL,
  `conval866` varchar(45) DEFAULT NULL,
  `conval877` varchar(45) DEFAULT NULL,
  `conval888` varchar(45) DEFAULT NULL,
  `conval899` varchar(45) DEFAULT NULL,
  `conval081` varchar(45) DEFAULT NULL,
  `conval082` varchar(45) DEFAULT NULL,
  `conval083` varchar(45) DEFAULT NULL,
  `conval084` varchar(45) DEFAULT NULL,
  `conval085` varchar(45) DEFAULT NULL,
  `conval086` varchar(45) DEFAULT NULL,
  `conval087` varchar(45) DEFAULT NULL,
  `conval088` varchar(45) DEFAULT NULL,
  `conval089` varchar(45) DEFAULT NULL,
  `conval0811` varchar(45) DEFAULT NULL,
  `conval0822` varchar(45) DEFAULT NULL,
  `conval0833` varchar(45) DEFAULT NULL,
  `conval0844` varchar(45) DEFAULT NULL,
  `conval0855` varchar(45) DEFAULT NULL,
  `conval0866` varchar(45) DEFAULT NULL,
  `conval0877` varchar(45) DEFAULT NULL,
  `conval0888` varchar(45) DEFAULT NULL,
  `conval0899` varchar(45) DEFAULT NULL,
  `conval0081` varchar(45) DEFAULT NULL,
  `conval0082` varchar(45) DEFAULT NULL,
  `conval0083` varchar(45) DEFAULT NULL,
  `conval00811` varchar(45) DEFAULT NULL,
  `conval00822` varchar(45) DEFAULT NULL,
  `conval00833` varchar(45) DEFAULT NULL,
  `id_smeta` int DEFAULT NULL,
  PRIMARY KEY (`id_otdel_construct`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otdel_construct`
--

LOCK TABLES `otdel_construct` WRITE;
/*!40000 ALTER TABLE `otdel_construct` DISABLE KEYS */;
INSERT INTO `otdel_construct` VALUES (1,'1','1','1','1','1','2','1','2','1','2','1','1','2','2','3','1','2','1','1','1','1','0','0','0','0','0','0','0','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1',25);
/*!40000 ALTER TABLE `otdel_construct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametr_peremen`
--

DROP TABLE IF EXISTS `parametr_peremen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parametr_peremen` (
  `id_parametr_peremen` int NOT NULL AUTO_INCREMENT,
  `name_director` varchar(256) DEFAULT NULL,
  `name_IOdirector` varchar(256) DEFAULT NULL,
  `index_current_year` double DEFAULT NULL,
  `index_next_year` double DEFAULT NULL,
  `value_usn` double DEFAULT NULL,
  `value_nds` double DEFAULT NULL,
  `cost_work14` double DEFAULT NULL,
  `analizb14` double DEFAULT NULL,
  PRIMARY KEY (`id_parametr_peremen`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametr_peremen`
--

LOCK TABLES `parametr_peremen` WRITE;
/*!40000 ALTER TABLE `parametr_peremen` DISABLE KEYS */;
INSERT INTO `parametr_peremen` VALUES (1,'asdasdasdasd','asdasdas',12,12,13,14,14,15);
/*!40000 ALTER TABLE `parametr_peremen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `podryadchik`
--

DROP TABLE IF EXISTS `podryadchik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `podryadchik` (
  `id_podryadchik` int NOT NULL AUTO_INCREMENT,
  `namePodryadchik` varchar(528) DEFAULT NULL,
  PRIMARY KEY (`id_podryadchik`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `podryadchik`
--

LOCK TABLES `podryadchik` WRITE;
/*!40000 ALTER TABLE `podryadchik` DISABLE KEYS */;
INSERT INTO `podryadchik` VALUES (1,'ООО \"Изиском\"');
/*!40000 ALTER TABLE `podryadchik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redaktor`
--

DROP TABLE IF EXISTS `redaktor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `redaktor` (
  `id_redaktor` int NOT NULL AUTO_INCREMENT,
  `toggleZd71` varchar(45) DEFAULT NULL,
  `toggleZd72` varchar(45) DEFAULT NULL,
  `toggleZd73` varchar(45) DEFAULT NULL,
  `toggleZd74` varchar(45) DEFAULT NULL,
  `conval71` varchar(45) DEFAULT NULL,
  `conval72` varchar(45) DEFAULT NULL,
  `conval73` varchar(45) DEFAULT NULL,
  `conval74` varchar(45) DEFAULT NULL,
  `id_smeta` int DEFAULT NULL,
  PRIMARY KEY (`id_redaktor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redaktor`
--

LOCK TABLES `redaktor` WRITE;
/*!40000 ALTER TABLE `redaktor` DISABLE KEYS */;
/*!40000 ALTER TABLE `redaktor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `name_role` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_role`),
  UNIQUE KEY `id_role_UNIQUE` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Админ'),(2,'Минздрав'),(3,'Гузо'),(4,'Пользователь');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sbor_ishod_value`
--

DROP TABLE IF EXISTS `sbor_ishod_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sbor_ishod_value` (
  `id_sbor_ishod_value` int NOT NULL AUTO_INCREMENT,
  `pasport_na_zdanie` varchar(45) DEFAULT NULL,
  `toggleZd1` varchar(45) DEFAULT NULL,
  `conval1` varchar(45) DEFAULT NULL,
  `toggleZd2` varchar(45) DEFAULT NULL,
  `conval2` varchar(45) DEFAULT NULL,
  `toggleZd3` varchar(45) DEFAULT NULL,
  `conval3` varchar(45) DEFAULT NULL,
  `toggleZd4` varchar(45) DEFAULT NULL,
  `conval4` varchar(45) DEFAULT NULL,
  `toggleZd5` varchar(45) DEFAULT NULL,
  `conval5` varchar(45) DEFAULT NULL,
  `toggleZd6` varchar(45) DEFAULT NULL,
  `conval6` varchar(45) DEFAULT NULL,
  `toggleZd7` varchar(45) DEFAULT NULL,
  `conval7` varchar(45) DEFAULT NULL,
  `toggleZd8` varchar(45) DEFAULT NULL,
  `conval8` varchar(45) DEFAULT NULL,
  `toggleZd9` varchar(45) DEFAULT NULL,
  `conval9` varchar(45) DEFAULT NULL,
  `choosCunstruct` varchar(45) DEFAULT NULL,
  `id_smeta` int DEFAULT NULL,
  PRIMARY KEY (`id_sbor_ishod_value`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sbor_ishod_value`
--

LOCK TABLES `sbor_ishod_value` WRITE;
/*!40000 ALTER TABLE `sbor_ishod_value` DISABLE KEYS */;
INSERT INTO `sbor_ishod_value` VALUES (2,NULL,'1','100','1','100','1','100','0','','0','','1','100','0','','0','','0','','1',25),(5,NULL,'1','100','0','100','0','100','0','','0','','0','100','0','','0','','0','','1',28);
/*!40000 ALTER TABLE `sbor_ishod_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicemans`
--

DROP TABLE IF EXISTS `servicemans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicemans` (
  `id_serviceman` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_serviceman`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicemans`
--

LOCK TABLES `servicemans` WRITE;
/*!40000 ALTER TABLE `servicemans` DISABLE KEYS */;
INSERT INTO `servicemans` VALUES (1,'ИУП «Традинтек Сервис»'),(2,'ООО «Медтехнопарк»'),(3,'ООО «Драйв»'),(4,'НПЧУП «Адани»'),(5,'ИТСУП «Медисфера»'),(6,'ЗАО «АДВИН Смарт Фэктори»'),(7,'ИУП «Техмедсервис Спектрикс»'),(9,'ОДО «Белмедсервис»'),(10,'ОДО «Геол М»'),(11,'ООО «АриМедСервис»'),(12,'ООО «БТЛ-смарт»'),(14,'ООО «Праймедикал»'),(15,'ООО «Спектротрейдинг»'),(16,'ООО «Экстрамед»'),(17,'РУП «Медтехноцентр»');
/*!40000 ALTER TABLE `servicemans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smets`
--

DROP TABLE IF EXISTS `smets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smets` (
  `id_smeta` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_zakazchik` int NOT NULL,
  `id_podryadchik` int NOT NULL,
  `date_nach_rab` date DEFAULT NULL,
  `date_okonch_rab` date DEFAULT NULL,
  PRIMARY KEY (`id_smeta`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smets`
--

LOCK TABLES `smets` WRITE;
/*!40000 ALTER TABLE `smets` DISABLE KEYS */;
INSERT INTO `smets` VALUES (25,'Моя Смета 2',2,1,'2024-08-01','2024-08-15'),(28,'Новая смета1',1,1,'2024-08-07','2024-08-23');
/*!40000 ALTER TABLE `smets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sost_tech_otchet`
--

DROP TABLE IF EXISTS `sost_tech_otchet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sost_tech_otchet` (
  `id_sost_tech_otchet` int NOT NULL AUTO_INCREMENT,
  `zaklSostStr` varchar(45) DEFAULT NULL,
  `toggleZd61` varchar(45) DEFAULT NULL,
  `toggleZd62` varchar(45) DEFAULT NULL,
  `toggleZd63` varchar(45) DEFAULT NULL,
  `toggleZd64` varchar(45) DEFAULT NULL,
  `toggleZd65` varchar(45) DEFAULT NULL,
  `toggleZd66` varchar(45) DEFAULT NULL,
  `toggleZd67` varchar(45) DEFAULT NULL,
  `toggleZd68` varchar(45) DEFAULT NULL,
  `toggleZd69` varchar(45) DEFAULT NULL,
  `conval61` varchar(45) DEFAULT NULL,
  `conval62` varchar(45) DEFAULT NULL,
  `conval63` varchar(45) DEFAULT NULL,
  `conval64` varchar(45) DEFAULT NULL,
  `conval65` varchar(45) DEFAULT NULL,
  `conval66` varchar(45) DEFAULT NULL,
  `conval67` varchar(45) DEFAULT NULL,
  `conval68` varchar(45) DEFAULT NULL,
  `conval69` varchar(45) DEFAULT NULL,
  `toggleZdDopUslseism` varchar(45) DEFAULT NULL,
  `toggleZdDopUslrazrab` varchar(45) DEFAULT NULL,
  `toggleZdDopUslrazrabrek` varchar(45) DEFAULT NULL,
  `id_smeta` varchar(45) DEFAULT NULL,
  `choosCunstruct6` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_sost_tech_otchet`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sost_tech_otchet`
--

LOCK TABLES `sost_tech_otchet` WRITE;
/*!40000 ALTER TABLE `sost_tech_otchet` DISABLE KEYS */;
INSERT INTO `sost_tech_otchet` VALUES (1,'1','2','1','0','0','1','1','0','1','2','1','0','3','1','2','3','0','1','3','2','1','3','25','1');
/*!40000 ALTER TABLE `sost_tech_otchet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_faults_by_date`
--

DROP TABLE IF EXISTS `table_faults_by_date`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_faults_by_date` (
  `id_table_faults` int NOT NULL AUTO_INCREMENT,
  `id_oborudovanie` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_table_faults`)
) ENGINE=InnoDB AUTO_INCREMENT=2150 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_faults_by_date`
--

LOCK TABLES `table_faults_by_date` WRITE;
/*!40000 ALTER TABLE `table_faults_by_date` DISABLE KEYS */;
INSERT INTO `table_faults_by_date` VALUES (9,9,'2024-06-11'),(10,11,'2024-06-11'),(11,12,'2024-06-11'),(12,14,'2024-06-11'),(13,15,'2024-06-11'),(16,9,'2024-06-12'),(17,11,'2024-06-12'),(18,12,'2024-06-12'),(19,14,'2024-06-12'),(20,15,'2024-06-12'),(23,9,'2024-06-13'),(24,11,'2024-06-13'),(25,12,'2024-06-13'),(26,14,'2024-06-13'),(27,15,'2024-06-13'),(30,9,'2024-06-14'),(31,11,'2024-06-14'),(32,12,'2024-06-14'),(33,14,'2024-06-14'),(34,17,'2024-06-14'),(35,18,'2024-06-14'),(36,19,'2024-06-14'),(37,21,'2024-06-14'),(38,22,'2024-06-14'),(39,23,'2024-06-14'),(40,24,'2024-06-14'),(41,25,'2024-06-14'),(42,26,'2024-06-14'),(43,27,'2024-06-14'),(44,28,'2024-06-14'),(45,29,'2024-06-14'),(46,30,'2024-06-14'),(47,31,'2024-06-14'),(48,32,'2024-06-14'),(49,33,'2024-06-14'),(50,34,'2024-06-14'),(61,9,'2024-06-15'),(62,11,'2024-06-15'),(63,12,'2024-06-15'),(64,14,'2024-06-15'),(65,17,'2024-06-15'),(66,18,'2024-06-15'),(67,19,'2024-06-15'),(68,21,'2024-06-15'),(69,22,'2024-06-15'),(70,23,'2024-06-15'),(71,24,'2024-06-15'),(72,25,'2024-06-15'),(73,26,'2024-06-15'),(74,27,'2024-06-15'),(75,28,'2024-06-15'),(76,29,'2024-06-15'),(77,30,'2024-06-15'),(78,31,'2024-06-15'),(79,32,'2024-06-15'),(80,33,'2024-06-15'),(81,34,'2024-06-15'),(92,9,'2024-06-16'),(93,11,'2024-06-16'),(94,12,'2024-06-16'),(95,14,'2024-06-16'),(96,17,'2024-06-16'),(97,18,'2024-06-16'),(98,19,'2024-06-16'),(99,21,'2024-06-16'),(100,22,'2024-06-16'),(101,23,'2024-06-16'),(102,24,'2024-06-16'),(103,25,'2024-06-16'),(104,26,'2024-06-16'),(105,27,'2024-06-16'),(106,28,'2024-06-16'),(107,29,'2024-06-16'),(108,30,'2024-06-16'),(109,31,'2024-06-16'),(110,32,'2024-06-16'),(111,33,'2024-06-16'),(112,34,'2024-06-16'),(123,9,'2024-06-17'),(124,11,'2024-06-17'),(125,12,'2024-06-17'),(126,14,'2024-06-17'),(127,17,'2024-06-17'),(128,18,'2024-06-17'),(129,19,'2024-06-17'),(130,21,'2024-06-17'),(131,22,'2024-06-17'),(132,23,'2024-06-17'),(133,24,'2024-06-17'),(134,25,'2024-06-17'),(135,26,'2024-06-17'),(136,27,'2024-06-17'),(137,28,'2024-06-17'),(138,29,'2024-06-17'),(139,30,'2024-06-17'),(140,31,'2024-06-17'),(141,32,'2024-06-17'),(142,33,'2024-06-17'),(143,34,'2024-06-17'),(154,9,'2024-06-18'),(155,11,'2024-06-18'),(156,12,'2024-06-18'),(157,14,'2024-06-18'),(158,17,'2024-06-18'),(159,18,'2024-06-18'),(160,19,'2024-06-18'),(161,21,'2024-06-18'),(162,22,'2024-06-18'),(163,23,'2024-06-18'),(164,24,'2024-06-18'),(165,25,'2024-06-18'),(166,26,'2024-06-18'),(167,27,'2024-06-18'),(168,28,'2024-06-18'),(169,29,'2024-06-18'),(170,30,'2024-06-18'),(171,31,'2024-06-18'),(172,32,'2024-06-18'),(173,33,'2024-06-18'),(174,34,'2024-06-18'),(185,9,'2024-06-19'),(186,11,'2024-06-19'),(187,12,'2024-06-19'),(188,14,'2024-06-19'),(189,17,'2024-06-19'),(190,18,'2024-06-19'),(191,19,'2024-06-19'),(192,21,'2024-06-19'),(193,22,'2024-06-19'),(194,23,'2024-06-19'),(195,24,'2024-06-19'),(196,25,'2024-06-19'),(197,26,'2024-06-19'),(198,27,'2024-06-19'),(199,28,'2024-06-19'),(200,29,'2024-06-19'),(201,30,'2024-06-19'),(202,31,'2024-06-19'),(203,32,'2024-06-19'),(204,33,'2024-06-19'),(205,34,'2024-06-19'),(216,9,'2024-06-20'),(217,11,'2024-06-20'),(218,12,'2024-06-20'),(219,14,'2024-06-20'),(220,17,'2024-06-20'),(221,18,'2024-06-20'),(222,19,'2024-06-20'),(223,21,'2024-06-20'),(224,22,'2024-06-20'),(225,23,'2024-06-20'),(226,24,'2024-06-20'),(227,25,'2024-06-20'),(228,26,'2024-06-20'),(229,27,'2024-06-20'),(230,28,'2024-06-20'),(231,29,'2024-06-20'),(232,30,'2024-06-20'),(233,31,'2024-06-20'),(234,32,'2024-06-20'),(235,33,'2024-06-20'),(236,34,'2024-06-20'),(247,9,'2024-06-21'),(248,11,'2024-06-21'),(249,12,'2024-06-21'),(250,14,'2024-06-21'),(251,17,'2024-06-21'),(252,18,'2024-06-21'),(253,19,'2024-06-21'),(254,21,'2024-06-21'),(255,22,'2024-06-21'),(256,23,'2024-06-21'),(257,24,'2024-06-21'),(258,25,'2024-06-21'),(259,26,'2024-06-21'),(260,27,'2024-06-21'),(261,28,'2024-06-21'),(262,29,'2024-06-21'),(263,30,'2024-06-21'),(264,31,'2024-06-21'),(265,32,'2024-06-21'),(266,33,'2024-06-21'),(267,34,'2024-06-21'),(278,9,'2024-06-22'),(279,11,'2024-06-22'),(280,12,'2024-06-22'),(281,14,'2024-06-22'),(282,17,'2024-06-22'),(283,18,'2024-06-22'),(284,19,'2024-06-22'),(285,21,'2024-06-22'),(286,22,'2024-06-22'),(287,23,'2024-06-22'),(288,24,'2024-06-22'),(289,25,'2024-06-22'),(290,26,'2024-06-22'),(291,27,'2024-06-22'),(292,28,'2024-06-22'),(293,29,'2024-06-22'),(294,30,'2024-06-22'),(295,31,'2024-06-22'),(296,32,'2024-06-22'),(297,33,'2024-06-22'),(298,34,'2024-06-22'),(309,9,'2024-06-23'),(310,11,'2024-06-23'),(311,12,'2024-06-23'),(312,14,'2024-06-23'),(313,17,'2024-06-23'),(314,18,'2024-06-23'),(315,19,'2024-06-23'),(316,21,'2024-06-23'),(317,22,'2024-06-23'),(318,23,'2024-06-23'),(319,24,'2024-06-23'),(320,25,'2024-06-23'),(321,26,'2024-06-23'),(322,27,'2024-06-23'),(323,28,'2024-06-23'),(324,29,'2024-06-23'),(325,30,'2024-06-23'),(326,31,'2024-06-23'),(327,32,'2024-06-23'),(328,33,'2024-06-23'),(329,34,'2024-06-23'),(340,9,'2024-06-24'),(341,11,'2024-06-24'),(342,12,'2024-06-24'),(343,14,'2024-06-24'),(344,17,'2024-06-24'),(345,18,'2024-06-24'),(346,19,'2024-06-24'),(347,21,'2024-06-24'),(348,22,'2024-06-24'),(349,23,'2024-06-24'),(350,24,'2024-06-24'),(351,25,'2024-06-24'),(352,26,'2024-06-24'),(353,27,'2024-06-24'),(354,28,'2024-06-24'),(355,29,'2024-06-24'),(356,30,'2024-06-24'),(357,31,'2024-06-24'),(358,32,'2024-06-24'),(359,33,'2024-06-24'),(360,34,'2024-06-24'),(371,9,'2024-06-25'),(372,11,'2024-06-25'),(373,12,'2024-06-25'),(374,14,'2024-06-25'),(375,17,'2024-06-25'),(376,18,'2024-06-25'),(377,19,'2024-06-25'),(378,21,'2024-06-25'),(379,22,'2024-06-25'),(380,23,'2024-06-25'),(381,24,'2024-06-25'),(382,25,'2024-06-25'),(383,26,'2024-06-25'),(384,27,'2024-06-25'),(385,28,'2024-06-25'),(386,29,'2024-06-25'),(387,30,'2024-06-25'),(388,31,'2024-06-25'),(389,32,'2024-06-25'),(390,33,'2024-06-25'),(391,34,'2024-06-25'),(402,9,'2024-06-26'),(403,11,'2024-06-26'),(404,12,'2024-06-26'),(405,14,'2024-06-26'),(406,17,'2024-06-26'),(407,18,'2024-06-26'),(408,19,'2024-06-26'),(409,21,'2024-06-26'),(410,22,'2024-06-26'),(411,23,'2024-06-26'),(412,24,'2024-06-26'),(413,25,'2024-06-26'),(414,26,'2024-06-26'),(415,27,'2024-06-26'),(416,28,'2024-06-26'),(417,29,'2024-06-26'),(418,30,'2024-06-26'),(419,31,'2024-06-26'),(420,32,'2024-06-26'),(421,33,'2024-06-26'),(422,34,'2024-06-26'),(433,9,'2024-06-27'),(434,11,'2024-06-27'),(435,12,'2024-06-27'),(436,14,'2024-06-27'),(437,17,'2024-06-27'),(438,18,'2024-06-27'),(439,19,'2024-06-27'),(440,21,'2024-06-27'),(441,22,'2024-06-27'),(442,23,'2024-06-27'),(443,24,'2024-06-27'),(444,25,'2024-06-27'),(445,26,'2024-06-27'),(446,27,'2024-06-27'),(447,28,'2024-06-27'),(448,29,'2024-06-27'),(449,30,'2024-06-27'),(450,31,'2024-06-27'),(451,32,'2024-06-27'),(452,33,'2024-06-27'),(453,34,'2024-06-27'),(464,9,'2024-06-28'),(465,11,'2024-06-28'),(466,12,'2024-06-28'),(467,14,'2024-06-28'),(468,17,'2024-06-28'),(469,18,'2024-06-28'),(470,19,'2024-06-28'),(471,21,'2024-06-28'),(472,22,'2024-06-28'),(473,23,'2024-06-28'),(474,24,'2024-06-28'),(475,25,'2024-06-28'),(476,26,'2024-06-28'),(477,27,'2024-06-28'),(478,28,'2024-06-28'),(479,29,'2024-06-28'),(480,30,'2024-06-28'),(481,31,'2024-06-28'),(482,32,'2024-06-28'),(483,33,'2024-06-28'),(484,34,'2024-06-28'),(495,9,'2024-06-29'),(496,11,'2024-06-29'),(497,12,'2024-06-29'),(498,14,'2024-06-29'),(499,17,'2024-06-29'),(500,18,'2024-06-29'),(501,19,'2024-06-29'),(502,21,'2024-06-29'),(503,22,'2024-06-29'),(504,23,'2024-06-29'),(505,24,'2024-06-29'),(506,25,'2024-06-29'),(507,26,'2024-06-29'),(508,27,'2024-06-29'),(509,28,'2024-06-29'),(510,29,'2024-06-29'),(511,30,'2024-06-29'),(512,31,'2024-06-29'),(513,32,'2024-06-29'),(514,33,'2024-06-29'),(515,34,'2024-06-29'),(526,9,'2024-06-30'),(527,11,'2024-06-30'),(528,12,'2024-06-30'),(529,14,'2024-06-30'),(530,17,'2024-06-30'),(531,18,'2024-06-30'),(532,19,'2024-06-30'),(533,21,'2024-06-30'),(534,22,'2024-06-30'),(535,23,'2024-06-30'),(536,24,'2024-06-30'),(537,25,'2024-06-30'),(538,26,'2024-06-30'),(539,27,'2024-06-30'),(540,28,'2024-06-30'),(541,29,'2024-06-30'),(542,30,'2024-06-30'),(543,31,'2024-06-30'),(544,32,'2024-06-30'),(545,33,'2024-06-30'),(546,34,'2024-06-30'),(557,9,'2024-07-01'),(558,11,'2024-07-01'),(559,12,'2024-07-01'),(560,14,'2024-07-01'),(561,17,'2024-07-01'),(562,18,'2024-07-01'),(563,19,'2024-07-01'),(564,21,'2024-07-01'),(565,22,'2024-07-01'),(566,23,'2024-07-01'),(567,24,'2024-07-01'),(568,25,'2024-07-01'),(569,26,'2024-07-01'),(570,27,'2024-07-01'),(571,28,'2024-07-01'),(572,29,'2024-07-01'),(573,30,'2024-07-01'),(574,31,'2024-07-01'),(575,32,'2024-07-01'),(576,33,'2024-07-01'),(577,34,'2024-07-01'),(588,9,'2024-07-02'),(589,11,'2024-07-02'),(590,12,'2024-07-02'),(591,14,'2024-07-02'),(592,17,'2024-07-02'),(593,18,'2024-07-02'),(594,19,'2024-07-02'),(595,21,'2024-07-02'),(596,22,'2024-07-02'),(597,23,'2024-07-02'),(598,24,'2024-07-02'),(599,25,'2024-07-02'),(600,26,'2024-07-02'),(601,27,'2024-07-02'),(602,28,'2024-07-02'),(603,29,'2024-07-02'),(604,30,'2024-07-02'),(605,31,'2024-07-02'),(606,32,'2024-07-02'),(607,33,'2024-07-02'),(608,34,'2024-07-02'),(619,9,'2024-07-03'),(620,11,'2024-07-03'),(621,12,'2024-07-03'),(622,14,'2024-07-03'),(623,17,'2024-07-03'),(624,18,'2024-07-03'),(625,19,'2024-07-03'),(626,21,'2024-07-03'),(627,22,'2024-07-03'),(628,23,'2024-07-03'),(629,24,'2024-07-03'),(630,25,'2024-07-03'),(631,26,'2024-07-03'),(632,27,'2024-07-03'),(633,28,'2024-07-03'),(634,29,'2024-07-03'),(635,30,'2024-07-03'),(636,31,'2024-07-03'),(637,32,'2024-07-03'),(638,33,'2024-07-03'),(639,34,'2024-07-03'),(650,9,'2024-07-04'),(651,11,'2024-07-04'),(652,12,'2024-07-04'),(653,14,'2024-07-04'),(654,17,'2024-07-04'),(655,18,'2024-07-04'),(656,19,'2024-07-04'),(657,21,'2024-07-04'),(658,22,'2024-07-04'),(659,23,'2024-07-04'),(660,24,'2024-07-04'),(661,25,'2024-07-04'),(662,26,'2024-07-04'),(663,27,'2024-07-04'),(664,28,'2024-07-04'),(665,29,'2024-07-04'),(666,30,'2024-07-04'),(667,31,'2024-07-04'),(668,32,'2024-07-04'),(669,33,'2024-07-04'),(670,34,'2024-07-04'),(681,9,'2024-07-05'),(682,11,'2024-07-05'),(683,12,'2024-07-05'),(684,14,'2024-07-05'),(685,17,'2024-07-05'),(686,18,'2024-07-05'),(687,19,'2024-07-05'),(688,21,'2024-07-05'),(689,22,'2024-07-05'),(690,23,'2024-07-05'),(691,24,'2024-07-05'),(692,25,'2024-07-05'),(693,26,'2024-07-05'),(694,27,'2024-07-05'),(695,28,'2024-07-05'),(696,29,'2024-07-05'),(697,30,'2024-07-05'),(698,31,'2024-07-05'),(699,32,'2024-07-05'),(700,33,'2024-07-05'),(701,34,'2024-07-05'),(712,9,'2024-07-06'),(713,11,'2024-07-06'),(714,12,'2024-07-06'),(715,14,'2024-07-06'),(716,17,'2024-07-06'),(717,18,'2024-07-06'),(718,19,'2024-07-06'),(719,21,'2024-07-06'),(720,22,'2024-07-06'),(721,23,'2024-07-06'),(722,24,'2024-07-06'),(723,25,'2024-07-06'),(724,26,'2024-07-06'),(725,27,'2024-07-06'),(726,28,'2024-07-06'),(727,29,'2024-07-06'),(728,30,'2024-07-06'),(729,31,'2024-07-06'),(730,32,'2024-07-06'),(731,33,'2024-07-06'),(732,34,'2024-07-06'),(743,9,'2024-07-07'),(744,11,'2024-07-07'),(745,12,'2024-07-07'),(746,14,'2024-07-07'),(747,17,'2024-07-07'),(748,18,'2024-07-07'),(749,19,'2024-07-07'),(750,21,'2024-07-07'),(751,22,'2024-07-07'),(752,23,'2024-07-07'),(753,24,'2024-07-07'),(754,25,'2024-07-07'),(755,26,'2024-07-07'),(756,27,'2024-07-07'),(757,28,'2024-07-07'),(758,29,'2024-07-07'),(759,30,'2024-07-07'),(760,31,'2024-07-07'),(761,32,'2024-07-07'),(762,33,'2024-07-07'),(763,34,'2024-07-07'),(774,9,'2024-07-08'),(775,11,'2024-07-08'),(776,12,'2024-07-08'),(777,14,'2024-07-08'),(778,17,'2024-07-08'),(779,18,'2024-07-08'),(780,19,'2024-07-08'),(781,21,'2024-07-08'),(782,22,'2024-07-08'),(783,23,'2024-07-08'),(784,24,'2024-07-08'),(785,25,'2024-07-08'),(786,26,'2024-07-08'),(787,27,'2024-07-08'),(788,28,'2024-07-08'),(789,29,'2024-07-08'),(790,30,'2024-07-08'),(791,31,'2024-07-08'),(792,32,'2024-07-08'),(793,33,'2024-07-08'),(794,34,'2024-07-08'),(805,9,'2024-07-09'),(806,11,'2024-07-09'),(807,12,'2024-07-09'),(808,14,'2024-07-09'),(809,17,'2024-07-09'),(810,18,'2024-07-09'),(811,19,'2024-07-09'),(812,21,'2024-07-09'),(813,22,'2024-07-09'),(814,23,'2024-07-09'),(815,24,'2024-07-09'),(816,25,'2024-07-09'),(817,26,'2024-07-09'),(818,27,'2024-07-09'),(819,28,'2024-07-09'),(820,29,'2024-07-09'),(821,30,'2024-07-09'),(822,31,'2024-07-09'),(823,32,'2024-07-09'),(824,33,'2024-07-09'),(825,34,'2024-07-09'),(836,9,'2024-07-10'),(837,11,'2024-07-10'),(838,12,'2024-07-10'),(839,14,'2024-07-10'),(840,17,'2024-07-10'),(841,18,'2024-07-10'),(842,19,'2024-07-10'),(843,21,'2024-07-10'),(844,22,'2024-07-10'),(845,23,'2024-07-10'),(846,24,'2024-07-10'),(847,25,'2024-07-10'),(848,26,'2024-07-10'),(849,27,'2024-07-10'),(850,28,'2024-07-10'),(851,29,'2024-07-10'),(852,30,'2024-07-10'),(853,31,'2024-07-10'),(854,32,'2024-07-10'),(855,33,'2024-07-10'),(856,34,'2024-07-10'),(867,9,'2024-07-11'),(868,11,'2024-07-11'),(869,12,'2024-07-11'),(870,14,'2024-07-11'),(871,17,'2024-07-11'),(872,18,'2024-07-11'),(873,19,'2024-07-11'),(874,21,'2024-07-11'),(875,22,'2024-07-11'),(876,23,'2024-07-11'),(877,24,'2024-07-11'),(878,25,'2024-07-11'),(879,26,'2024-07-11'),(880,27,'2024-07-11'),(881,28,'2024-07-11'),(882,29,'2024-07-11'),(883,30,'2024-07-11'),(884,31,'2024-07-11'),(885,32,'2024-07-11'),(886,33,'2024-07-11'),(887,34,'2024-07-11'),(898,9,'2024-07-12'),(899,11,'2024-07-12'),(900,12,'2024-07-12'),(901,14,'2024-07-12'),(902,17,'2024-07-12'),(903,18,'2024-07-12'),(904,19,'2024-07-12'),(905,21,'2024-07-12'),(906,22,'2024-07-12'),(907,23,'2024-07-12'),(908,24,'2024-07-12'),(909,25,'2024-07-12'),(910,26,'2024-07-12'),(911,27,'2024-07-12'),(912,28,'2024-07-12'),(913,29,'2024-07-12'),(914,30,'2024-07-12'),(915,31,'2024-07-12'),(916,32,'2024-07-12'),(917,33,'2024-07-12'),(918,34,'2024-07-12'),(929,9,'2024-07-13'),(930,11,'2024-07-13'),(931,12,'2024-07-13'),(932,14,'2024-07-13'),(933,17,'2024-07-13'),(934,18,'2024-07-13'),(935,19,'2024-07-13'),(936,21,'2024-07-13'),(937,22,'2024-07-13'),(938,23,'2024-07-13'),(939,24,'2024-07-13'),(940,25,'2024-07-13'),(941,26,'2024-07-13'),(942,27,'2024-07-13'),(943,28,'2024-07-13'),(944,29,'2024-07-13'),(945,30,'2024-07-13'),(946,31,'2024-07-13'),(947,32,'2024-07-13'),(948,33,'2024-07-13'),(949,34,'2024-07-13'),(960,9,'2024-07-14'),(961,11,'2024-07-14'),(962,12,'2024-07-14'),(963,14,'2024-07-14'),(964,17,'2024-07-14'),(965,18,'2024-07-14'),(966,19,'2024-07-14'),(967,21,'2024-07-14'),(968,22,'2024-07-14'),(969,23,'2024-07-14'),(970,24,'2024-07-14'),(971,25,'2024-07-14'),(972,26,'2024-07-14'),(973,27,'2024-07-14'),(974,28,'2024-07-14'),(975,29,'2024-07-14'),(976,30,'2024-07-14'),(977,31,'2024-07-14'),(978,32,'2024-07-14'),(979,33,'2024-07-14'),(980,34,'2024-07-14'),(991,9,'2024-07-15'),(992,11,'2024-07-15'),(993,12,'2024-07-15'),(994,14,'2024-07-15'),(995,17,'2024-07-15'),(996,18,'2024-07-15'),(997,19,'2024-07-15'),(998,21,'2024-07-15'),(999,22,'2024-07-15'),(1000,23,'2024-07-15'),(1001,24,'2024-07-15'),(1002,25,'2024-07-15'),(1003,26,'2024-07-15'),(1004,27,'2024-07-15'),(1005,28,'2024-07-15'),(1006,29,'2024-07-15'),(1007,30,'2024-07-15'),(1008,31,'2024-07-15'),(1009,32,'2024-07-15'),(1010,33,'2024-07-15'),(1011,34,'2024-07-15'),(1022,9,'2024-07-16'),(1023,11,'2024-07-16'),(1024,12,'2024-07-16'),(1025,14,'2024-07-16'),(1026,17,'2024-07-16'),(1027,18,'2024-07-16'),(1028,19,'2024-07-16'),(1029,21,'2024-07-16'),(1030,22,'2024-07-16'),(1031,23,'2024-07-16'),(1032,24,'2024-07-16'),(1033,25,'2024-07-16'),(1034,26,'2024-07-16'),(1035,27,'2024-07-16'),(1036,28,'2024-07-16'),(1037,29,'2024-07-16'),(1038,30,'2024-07-16'),(1039,31,'2024-07-16'),(1040,32,'2024-07-16'),(1041,33,'2024-07-16'),(1042,34,'2024-07-16'),(1053,9,'2024-07-17'),(1054,11,'2024-07-17'),(1055,12,'2024-07-17'),(1056,14,'2024-07-17'),(1057,17,'2024-07-17'),(1058,18,'2024-07-17'),(1059,19,'2024-07-17'),(1060,21,'2024-07-17'),(1061,22,'2024-07-17'),(1062,23,'2024-07-17'),(1063,24,'2024-07-17'),(1064,25,'2024-07-17'),(1065,26,'2024-07-17'),(1066,27,'2024-07-17'),(1067,28,'2024-07-17'),(1068,29,'2024-07-17'),(1069,30,'2024-07-17'),(1070,31,'2024-07-17'),(1071,32,'2024-07-17'),(1072,33,'2024-07-17'),(1073,34,'2024-07-17'),(1084,9,'2024-07-18'),(1085,11,'2024-07-18'),(1086,12,'2024-07-18'),(1087,14,'2024-07-18'),(1088,17,'2024-07-18'),(1089,18,'2024-07-18'),(1090,19,'2024-07-18'),(1091,21,'2024-07-18'),(1092,22,'2024-07-18'),(1093,23,'2024-07-18'),(1094,24,'2024-07-18'),(1095,25,'2024-07-18'),(1096,26,'2024-07-18'),(1097,27,'2024-07-18'),(1098,28,'2024-07-18'),(1099,29,'2024-07-18'),(1100,30,'2024-07-18'),(1101,31,'2024-07-18'),(1102,32,'2024-07-18'),(1103,33,'2024-07-18'),(1104,34,'2024-07-18'),(1115,9,'2024-07-19'),(1116,11,'2024-07-19'),(1117,12,'2024-07-19'),(1118,14,'2024-07-19'),(1119,17,'2024-07-19'),(1120,18,'2024-07-19'),(1121,19,'2024-07-19'),(1122,21,'2024-07-19'),(1123,22,'2024-07-19'),(1124,23,'2024-07-19'),(1125,24,'2024-07-19'),(1126,25,'2024-07-19'),(1127,26,'2024-07-19'),(1128,27,'2024-07-19'),(1129,28,'2024-07-19'),(1130,29,'2024-07-19'),(1131,30,'2024-07-19'),(1132,31,'2024-07-19'),(1133,32,'2024-07-19'),(1134,33,'2024-07-19'),(1135,34,'2024-07-19'),(1146,9,'2024-07-20'),(1147,11,'2024-07-20'),(1148,12,'2024-07-20'),(1149,14,'2024-07-20'),(1150,17,'2024-07-20'),(1151,18,'2024-07-20'),(1152,19,'2024-07-20'),(1153,21,'2024-07-20'),(1154,22,'2024-07-20'),(1155,23,'2024-07-20'),(1156,24,'2024-07-20'),(1157,25,'2024-07-20'),(1158,26,'2024-07-20'),(1159,27,'2024-07-20'),(1160,28,'2024-07-20'),(1161,29,'2024-07-20'),(1162,30,'2024-07-20'),(1163,31,'2024-07-20'),(1164,32,'2024-07-20'),(1165,33,'2024-07-20'),(1166,34,'2024-07-20'),(1177,9,'2024-07-21'),(1178,11,'2024-07-21'),(1179,12,'2024-07-21'),(1180,14,'2024-07-21'),(1181,17,'2024-07-21'),(1182,18,'2024-07-21'),(1183,19,'2024-07-21'),(1184,21,'2024-07-21'),(1185,22,'2024-07-21'),(1186,23,'2024-07-21'),(1187,24,'2024-07-21'),(1188,25,'2024-07-21'),(1189,26,'2024-07-21'),(1190,27,'2024-07-21'),(1191,28,'2024-07-21'),(1192,29,'2024-07-21'),(1193,30,'2024-07-21'),(1194,31,'2024-07-21'),(1195,32,'2024-07-21'),(1196,33,'2024-07-21'),(1197,34,'2024-07-21'),(1208,9,'2024-07-22'),(1209,11,'2024-07-22'),(1210,12,'2024-07-22'),(1211,14,'2024-07-22'),(1212,17,'2024-07-22'),(1213,18,'2024-07-22'),(1214,19,'2024-07-22'),(1215,21,'2024-07-22'),(1216,22,'2024-07-22'),(1217,23,'2024-07-22'),(1218,24,'2024-07-22'),(1219,25,'2024-07-22'),(1220,26,'2024-07-22'),(1221,27,'2024-07-22'),(1222,28,'2024-07-22'),(1223,29,'2024-07-22'),(1224,30,'2024-07-22'),(1225,31,'2024-07-22'),(1226,32,'2024-07-22'),(1227,33,'2024-07-22'),(1228,34,'2024-07-22'),(1229,9,'2024-07-23'),(1230,11,'2024-07-23'),(1231,12,'2024-07-23'),(1232,14,'2024-07-23'),(1233,17,'2024-07-23'),(1234,18,'2024-07-23'),(1235,19,'2024-07-23'),(1236,21,'2024-07-23'),(1237,22,'2024-07-23'),(1238,23,'2024-07-23'),(1239,24,'2024-07-23'),(1240,25,'2024-07-23'),(1241,26,'2024-07-23'),(1242,27,'2024-07-23'),(1243,28,'2024-07-23'),(1244,29,'2024-07-23'),(1245,30,'2024-07-23'),(1246,31,'2024-07-23'),(1247,32,'2024-07-23'),(1248,33,'2024-07-23'),(1249,34,'2024-07-23'),(1260,9,'2024-07-24'),(1261,11,'2024-07-24'),(1262,12,'2024-07-24'),(1263,14,'2024-07-24'),(1264,17,'2024-07-24'),(1265,18,'2024-07-24'),(1266,19,'2024-07-24'),(1267,21,'2024-07-24'),(1268,22,'2024-07-24'),(1269,23,'2024-07-24'),(1270,24,'2024-07-24'),(1271,25,'2024-07-24'),(1272,26,'2024-07-24'),(1273,27,'2024-07-24'),(1274,28,'2024-07-24'),(1275,29,'2024-07-24'),(1276,30,'2024-07-24'),(1277,31,'2024-07-24'),(1278,32,'2024-07-24'),(1279,33,'2024-07-24'),(1280,34,'2024-07-24'),(1291,9,'2024-07-25'),(1292,11,'2024-07-25'),(1293,12,'2024-07-25'),(1294,14,'2024-07-25'),(1295,17,'2024-07-25'),(1296,18,'2024-07-25'),(1297,19,'2024-07-25'),(1298,21,'2024-07-25'),(1299,22,'2024-07-25'),(1300,23,'2024-07-25'),(1301,24,'2024-07-25'),(1302,25,'2024-07-25'),(1303,26,'2024-07-25'),(1304,27,'2024-07-25'),(1305,28,'2024-07-25'),(1306,29,'2024-07-25'),(1307,30,'2024-07-25'),(1308,31,'2024-07-25'),(1309,32,'2024-07-25'),(1310,33,'2024-07-25'),(1311,34,'2024-07-25'),(1322,9,'2024-07-26'),(1323,11,'2024-07-26'),(1324,12,'2024-07-26'),(1325,14,'2024-07-26'),(1326,17,'2024-07-26'),(1327,18,'2024-07-26'),(1328,19,'2024-07-26'),(1329,21,'2024-07-26'),(1330,22,'2024-07-26'),(1331,23,'2024-07-26'),(1332,24,'2024-07-26'),(1333,25,'2024-07-26'),(1334,26,'2024-07-26'),(1335,27,'2024-07-26'),(1336,28,'2024-07-26'),(1337,29,'2024-07-26'),(1338,30,'2024-07-26'),(1339,31,'2024-07-26'),(1340,32,'2024-07-26'),(1341,33,'2024-07-26'),(1342,34,'2024-07-26'),(1343,53,'2024-07-26'),(1353,9,'2024-07-27'),(1354,11,'2024-07-27'),(1355,12,'2024-07-27'),(1356,14,'2024-07-27'),(1357,17,'2024-07-27'),(1358,18,'2024-07-27'),(1359,19,'2024-07-27'),(1360,21,'2024-07-27'),(1361,22,'2024-07-27'),(1362,23,'2024-07-27'),(1363,24,'2024-07-27'),(1364,25,'2024-07-27'),(1365,26,'2024-07-27'),(1366,27,'2024-07-27'),(1367,28,'2024-07-27'),(1368,29,'2024-07-27'),(1369,30,'2024-07-27'),(1370,31,'2024-07-27'),(1371,32,'2024-07-27'),(1372,33,'2024-07-27'),(1373,34,'2024-07-27'),(1374,53,'2024-07-27'),(1384,9,'2024-07-28'),(1385,11,'2024-07-28'),(1386,12,'2024-07-28'),(1387,14,'2024-07-28'),(1388,17,'2024-07-28'),(1389,18,'2024-07-28'),(1390,19,'2024-07-28'),(1391,21,'2024-07-28'),(1392,22,'2024-07-28'),(1393,23,'2024-07-28'),(1394,24,'2024-07-28'),(1395,25,'2024-07-28'),(1396,26,'2024-07-28'),(1397,27,'2024-07-28'),(1398,28,'2024-07-28'),(1399,29,'2024-07-28'),(1400,30,'2024-07-28'),(1401,31,'2024-07-28'),(1402,32,'2024-07-28'),(1403,33,'2024-07-28'),(1404,34,'2024-07-28'),(1405,53,'2024-07-28'),(1415,9,'2024-07-29'),(1416,11,'2024-07-29'),(1417,12,'2024-07-29'),(1418,14,'2024-07-29'),(1419,17,'2024-07-29'),(1420,18,'2024-07-29'),(1421,19,'2024-07-29'),(1422,21,'2024-07-29'),(1423,22,'2024-07-29'),(1424,23,'2024-07-29'),(1425,24,'2024-07-29'),(1426,25,'2024-07-29'),(1427,26,'2024-07-29'),(1428,27,'2024-07-29'),(1429,28,'2024-07-29'),(1430,29,'2024-07-29'),(1431,30,'2024-07-29'),(1432,31,'2024-07-29'),(1433,32,'2024-07-29'),(1434,33,'2024-07-29'),(1435,34,'2024-07-29'),(1436,53,'2024-07-29'),(1437,9,'2024-07-30'),(1438,11,'2024-07-30'),(1439,12,'2024-07-30'),(1440,14,'2024-07-30'),(1441,17,'2024-07-30'),(1442,18,'2024-07-30'),(1443,19,'2024-07-30'),(1444,21,'2024-07-30'),(1445,22,'2024-07-30'),(1446,23,'2024-07-30'),(1447,24,'2024-07-30'),(1448,25,'2024-07-30'),(1449,26,'2024-07-30'),(1450,27,'2024-07-30'),(1451,28,'2024-07-30'),(1452,29,'2024-07-30'),(1453,30,'2024-07-30'),(1454,31,'2024-07-30'),(1455,32,'2024-07-30'),(1456,33,'2024-07-30'),(1457,34,'2024-07-30'),(1458,53,'2024-07-30'),(1468,9,'2024-07-31'),(1469,11,'2024-07-31'),(1470,12,'2024-07-31'),(1471,14,'2024-07-31'),(1472,17,'2024-07-31'),(1473,18,'2024-07-31'),(1474,19,'2024-07-31'),(1475,21,'2024-07-31'),(1476,22,'2024-07-31'),(1477,23,'2024-07-31'),(1478,24,'2024-07-31'),(1479,25,'2024-07-31'),(1480,26,'2024-07-31'),(1481,27,'2024-07-31'),(1482,28,'2024-07-31'),(1483,29,'2024-07-31'),(1484,30,'2024-07-31'),(1485,31,'2024-07-31'),(1486,32,'2024-07-31'),(1487,33,'2024-07-31'),(1488,34,'2024-07-31'),(1489,53,'2024-07-31'),(1499,9,'2024-08-01'),(1500,11,'2024-08-01'),(1501,12,'2024-08-01'),(1502,14,'2024-08-01'),(1503,17,'2024-08-01'),(1504,18,'2024-08-01'),(1505,19,'2024-08-01'),(1506,21,'2024-08-01'),(1507,22,'2024-08-01'),(1508,23,'2024-08-01'),(1509,24,'2024-08-01'),(1510,25,'2024-08-01'),(1511,26,'2024-08-01'),(1512,27,'2024-08-01'),(1513,28,'2024-08-01'),(1514,29,'2024-08-01'),(1515,30,'2024-08-01'),(1516,31,'2024-08-01'),(1517,32,'2024-08-01'),(1518,33,'2024-08-01'),(1519,34,'2024-08-01'),(1520,53,'2024-08-01'),(1530,9,'2024-08-02'),(1531,11,'2024-08-02'),(1532,12,'2024-08-02'),(1533,14,'2024-08-02'),(1534,17,'2024-08-02'),(1535,18,'2024-08-02'),(1536,19,'2024-08-02'),(1537,21,'2024-08-02'),(1538,22,'2024-08-02'),(1539,23,'2024-08-02'),(1540,24,'2024-08-02'),(1541,25,'2024-08-02'),(1542,26,'2024-08-02'),(1543,27,'2024-08-02'),(1544,28,'2024-08-02'),(1545,29,'2024-08-02'),(1546,30,'2024-08-02'),(1547,31,'2024-08-02'),(1548,32,'2024-08-02'),(1549,33,'2024-08-02'),(1550,34,'2024-08-02'),(1551,53,'2024-08-02'),(1561,9,'2024-08-03'),(1562,11,'2024-08-03'),(1563,12,'2024-08-03'),(1564,14,'2024-08-03'),(1565,17,'2024-08-03'),(1566,18,'2024-08-03'),(1567,19,'2024-08-03'),(1568,21,'2024-08-03'),(1569,22,'2024-08-03'),(1570,23,'2024-08-03'),(1571,24,'2024-08-03'),(1572,25,'2024-08-03'),(1573,26,'2024-08-03'),(1574,27,'2024-08-03'),(1575,28,'2024-08-03'),(1576,29,'2024-08-03'),(1577,30,'2024-08-03'),(1578,31,'2024-08-03'),(1579,32,'2024-08-03'),(1580,33,'2024-08-03'),(1581,34,'2024-08-03'),(1582,53,'2024-08-03'),(1592,9,'2024-08-04'),(1593,11,'2024-08-04'),(1594,12,'2024-08-04'),(1595,14,'2024-08-04'),(1596,17,'2024-08-04'),(1597,18,'2024-08-04'),(1598,19,'2024-08-04'),(1599,21,'2024-08-04'),(1600,22,'2024-08-04'),(1601,23,'2024-08-04'),(1602,24,'2024-08-04'),(1603,25,'2024-08-04'),(1604,26,'2024-08-04'),(1605,27,'2024-08-04'),(1606,28,'2024-08-04'),(1607,29,'2024-08-04'),(1608,30,'2024-08-04'),(1609,31,'2024-08-04'),(1610,32,'2024-08-04'),(1611,33,'2024-08-04'),(1612,34,'2024-08-04'),(1613,53,'2024-08-04'),(1623,9,'2024-08-05'),(1624,11,'2024-08-05'),(1625,12,'2024-08-05'),(1626,14,'2024-08-05'),(1627,17,'2024-08-05'),(1628,18,'2024-08-05'),(1629,19,'2024-08-05'),(1630,21,'2024-08-05'),(1631,22,'2024-08-05'),(1632,23,'2024-08-05'),(1633,24,'2024-08-05'),(1634,25,'2024-08-05'),(1635,26,'2024-08-05'),(1636,27,'2024-08-05'),(1637,28,'2024-08-05'),(1638,29,'2024-08-05'),(1639,30,'2024-08-05'),(1640,31,'2024-08-05'),(1641,32,'2024-08-05'),(1642,33,'2024-08-05'),(1643,34,'2024-08-05'),(1644,53,'2024-08-05'),(1654,9,'2024-08-06'),(1655,11,'2024-08-06'),(1656,12,'2024-08-06'),(1657,14,'2024-08-06'),(1658,17,'2024-08-06'),(1659,18,'2024-08-06'),(1660,19,'2024-08-06'),(1661,21,'2024-08-06'),(1662,22,'2024-08-06'),(1663,23,'2024-08-06'),(1664,24,'2024-08-06'),(1665,25,'2024-08-06'),(1666,26,'2024-08-06'),(1667,27,'2024-08-06'),(1668,28,'2024-08-06'),(1669,29,'2024-08-06'),(1670,30,'2024-08-06'),(1671,31,'2024-08-06'),(1672,32,'2024-08-06'),(1673,33,'2024-08-06'),(1674,34,'2024-08-06'),(1675,53,'2024-08-06'),(1685,9,'2024-08-07'),(1686,11,'2024-08-07'),(1687,12,'2024-08-07'),(1688,14,'2024-08-07'),(1689,17,'2024-08-07'),(1690,18,'2024-08-07'),(1691,19,'2024-08-07'),(1692,21,'2024-08-07'),(1693,22,'2024-08-07'),(1694,23,'2024-08-07'),(1695,24,'2024-08-07'),(1696,25,'2024-08-07'),(1697,26,'2024-08-07'),(1698,27,'2024-08-07'),(1699,28,'2024-08-07'),(1700,29,'2024-08-07'),(1701,30,'2024-08-07'),(1702,31,'2024-08-07'),(1703,32,'2024-08-07'),(1704,33,'2024-08-07'),(1705,34,'2024-08-07'),(1706,53,'2024-08-07'),(1716,9,'2024-08-08'),(1717,11,'2024-08-08'),(1718,12,'2024-08-08'),(1719,14,'2024-08-08'),(1720,17,'2024-08-08'),(1721,18,'2024-08-08'),(1722,19,'2024-08-08'),(1723,21,'2024-08-08'),(1724,22,'2024-08-08'),(1725,23,'2024-08-08'),(1726,24,'2024-08-08'),(1727,25,'2024-08-08'),(1728,26,'2024-08-08'),(1729,27,'2024-08-08'),(1730,28,'2024-08-08'),(1731,29,'2024-08-08'),(1732,30,'2024-08-08'),(1733,31,'2024-08-08'),(1734,32,'2024-08-08'),(1735,33,'2024-08-08'),(1736,34,'2024-08-08'),(1737,53,'2024-08-08'),(1747,9,'2024-08-09'),(1748,11,'2024-08-09'),(1749,12,'2024-08-09'),(1750,14,'2024-08-09'),(1751,17,'2024-08-09'),(1752,18,'2024-08-09'),(1753,19,'2024-08-09'),(1754,21,'2024-08-09'),(1755,22,'2024-08-09'),(1756,23,'2024-08-09'),(1757,24,'2024-08-09'),(1758,25,'2024-08-09'),(1759,26,'2024-08-09'),(1760,27,'2024-08-09'),(1761,28,'2024-08-09'),(1762,29,'2024-08-09'),(1763,30,'2024-08-09'),(1764,31,'2024-08-09'),(1765,32,'2024-08-09'),(1766,33,'2024-08-09'),(1767,34,'2024-08-09'),(1768,53,'2024-08-09'),(1778,9,'2024-08-10'),(1779,11,'2024-08-10'),(1780,12,'2024-08-10'),(1781,14,'2024-08-10'),(1782,17,'2024-08-10'),(1783,18,'2024-08-10'),(1784,19,'2024-08-10'),(1785,21,'2024-08-10'),(1786,22,'2024-08-10'),(1787,23,'2024-08-10'),(1788,24,'2024-08-10'),(1789,25,'2024-08-10'),(1790,26,'2024-08-10'),(1791,27,'2024-08-10'),(1792,28,'2024-08-10'),(1793,29,'2024-08-10'),(1794,30,'2024-08-10'),(1795,31,'2024-08-10'),(1796,32,'2024-08-10'),(1797,33,'2024-08-10'),(1798,34,'2024-08-10'),(1799,53,'2024-08-10'),(1809,9,'2024-08-11'),(1810,11,'2024-08-11'),(1811,12,'2024-08-11'),(1812,14,'2024-08-11'),(1813,17,'2024-08-11'),(1814,18,'2024-08-11'),(1815,19,'2024-08-11'),(1816,21,'2024-08-11'),(1817,22,'2024-08-11'),(1818,23,'2024-08-11'),(1819,24,'2024-08-11'),(1820,25,'2024-08-11'),(1821,26,'2024-08-11'),(1822,27,'2024-08-11'),(1823,28,'2024-08-11'),(1824,29,'2024-08-11'),(1825,30,'2024-08-11'),(1826,31,'2024-08-11'),(1827,32,'2024-08-11'),(1828,33,'2024-08-11'),(1829,34,'2024-08-11'),(1830,53,'2024-08-11'),(1840,9,'2024-08-12'),(1841,11,'2024-08-12'),(1842,12,'2024-08-12'),(1843,14,'2024-08-12'),(1844,17,'2024-08-12'),(1845,18,'2024-08-12'),(1846,19,'2024-08-12'),(1847,21,'2024-08-12'),(1848,22,'2024-08-12'),(1849,23,'2024-08-12'),(1850,24,'2024-08-12'),(1851,25,'2024-08-12'),(1852,26,'2024-08-12'),(1853,27,'2024-08-12'),(1854,28,'2024-08-12'),(1855,29,'2024-08-12'),(1856,30,'2024-08-12'),(1857,31,'2024-08-12'),(1858,32,'2024-08-12'),(1859,33,'2024-08-12'),(1860,34,'2024-08-12'),(1861,53,'2024-08-12'),(1871,9,'2024-08-13'),(1872,11,'2024-08-13'),(1873,12,'2024-08-13'),(1874,14,'2024-08-13'),(1875,17,'2024-08-13'),(1876,18,'2024-08-13'),(1877,19,'2024-08-13'),(1878,21,'2024-08-13'),(1879,22,'2024-08-13'),(1880,23,'2024-08-13'),(1881,24,'2024-08-13'),(1882,25,'2024-08-13'),(1883,26,'2024-08-13'),(1884,27,'2024-08-13'),(1885,28,'2024-08-13'),(1886,29,'2024-08-13'),(1887,30,'2024-08-13'),(1888,31,'2024-08-13'),(1889,32,'2024-08-13'),(1890,33,'2024-08-13'),(1891,34,'2024-08-13'),(1892,53,'2024-08-13'),(1902,9,'2024-08-14'),(1903,11,'2024-08-14'),(1904,12,'2024-08-14'),(1905,14,'2024-08-14'),(1906,17,'2024-08-14'),(1907,18,'2024-08-14'),(1908,19,'2024-08-14'),(1909,21,'2024-08-14'),(1910,22,'2024-08-14'),(1911,23,'2024-08-14'),(1912,24,'2024-08-14'),(1913,25,'2024-08-14'),(1914,26,'2024-08-14'),(1915,27,'2024-08-14'),(1916,28,'2024-08-14'),(1917,29,'2024-08-14'),(1918,30,'2024-08-14'),(1919,31,'2024-08-14'),(1920,32,'2024-08-14'),(1921,33,'2024-08-14'),(1922,34,'2024-08-14'),(1923,53,'2024-08-14'),(1933,9,'2024-08-15'),(1934,11,'2024-08-15'),(1935,12,'2024-08-15'),(1936,14,'2024-08-15'),(1937,17,'2024-08-15'),(1938,18,'2024-08-15'),(1939,19,'2024-08-15'),(1940,21,'2024-08-15'),(1941,22,'2024-08-15'),(1942,23,'2024-08-15'),(1943,24,'2024-08-15'),(1944,25,'2024-08-15'),(1945,26,'2024-08-15'),(1946,27,'2024-08-15'),(1947,28,'2024-08-15'),(1948,29,'2024-08-15'),(1949,30,'2024-08-15'),(1950,31,'2024-08-15'),(1951,32,'2024-08-15'),(1952,33,'2024-08-15'),(1953,34,'2024-08-15'),(1954,53,'2024-08-15'),(1964,9,'2024-08-16'),(1965,11,'2024-08-16'),(1966,12,'2024-08-16'),(1967,14,'2024-08-16'),(1968,17,'2024-08-16'),(1969,18,'2024-08-16'),(1970,19,'2024-08-16'),(1971,21,'2024-08-16'),(1972,22,'2024-08-16'),(1973,23,'2024-08-16'),(1974,24,'2024-08-16'),(1975,25,'2024-08-16'),(1976,26,'2024-08-16'),(1977,27,'2024-08-16'),(1978,28,'2024-08-16'),(1979,29,'2024-08-16'),(1980,30,'2024-08-16'),(1981,31,'2024-08-16'),(1982,32,'2024-08-16'),(1983,33,'2024-08-16'),(1984,34,'2024-08-16'),(1985,53,'2024-08-16'),(1995,9,'2024-08-17'),(1996,11,'2024-08-17'),(1997,12,'2024-08-17'),(1998,14,'2024-08-17'),(1999,17,'2024-08-17'),(2000,18,'2024-08-17'),(2001,19,'2024-08-17'),(2002,21,'2024-08-17'),(2003,22,'2024-08-17'),(2004,23,'2024-08-17'),(2005,24,'2024-08-17'),(2006,25,'2024-08-17'),(2007,26,'2024-08-17'),(2008,27,'2024-08-17'),(2009,28,'2024-08-17'),(2010,29,'2024-08-17'),(2011,30,'2024-08-17'),(2012,31,'2024-08-17'),(2013,32,'2024-08-17'),(2014,33,'2024-08-17'),(2015,34,'2024-08-17'),(2016,53,'2024-08-17'),(2026,9,'2024-08-18'),(2027,11,'2024-08-18'),(2028,12,'2024-08-18'),(2029,14,'2024-08-18'),(2030,17,'2024-08-18'),(2031,18,'2024-08-18'),(2032,19,'2024-08-18'),(2033,21,'2024-08-18'),(2034,22,'2024-08-18'),(2035,23,'2024-08-18'),(2036,24,'2024-08-18'),(2037,25,'2024-08-18'),(2038,26,'2024-08-18'),(2039,27,'2024-08-18'),(2040,28,'2024-08-18'),(2041,29,'2024-08-18'),(2042,30,'2024-08-18'),(2043,31,'2024-08-18'),(2044,32,'2024-08-18'),(2045,33,'2024-08-18'),(2046,34,'2024-08-18'),(2047,53,'2024-08-18'),(2057,9,'2024-08-19'),(2058,11,'2024-08-19'),(2059,12,'2024-08-19'),(2060,14,'2024-08-19'),(2061,17,'2024-08-19'),(2062,18,'2024-08-19'),(2063,19,'2024-08-19'),(2064,21,'2024-08-19'),(2065,22,'2024-08-19'),(2066,23,'2024-08-19'),(2067,24,'2024-08-19'),(2068,25,'2024-08-19'),(2069,26,'2024-08-19'),(2070,27,'2024-08-19'),(2071,28,'2024-08-19'),(2072,29,'2024-08-19'),(2073,30,'2024-08-19'),(2074,31,'2024-08-19'),(2075,32,'2024-08-19'),(2076,33,'2024-08-19'),(2077,34,'2024-08-19'),(2078,53,'2024-08-19'),(2088,9,'2024-08-20'),(2089,11,'2024-08-20'),(2090,12,'2024-08-20'),(2091,14,'2024-08-20'),(2092,17,'2024-08-20'),(2093,18,'2024-08-20'),(2094,19,'2024-08-20'),(2095,21,'2024-08-20'),(2096,22,'2024-08-20'),(2097,23,'2024-08-20'),(2098,24,'2024-08-20'),(2099,25,'2024-08-20'),(2100,26,'2024-08-20'),(2101,27,'2024-08-20'),(2102,28,'2024-08-20'),(2103,29,'2024-08-20'),(2104,30,'2024-08-20'),(2105,31,'2024-08-20'),(2106,32,'2024-08-20'),(2107,33,'2024-08-20'),(2108,34,'2024-08-20'),(2109,53,'2024-08-20'),(2119,9,'2024-08-21'),(2120,11,'2024-08-21'),(2121,12,'2024-08-21'),(2122,14,'2024-08-21'),(2123,17,'2024-08-21'),(2124,18,'2024-08-21'),(2125,19,'2024-08-21'),(2126,21,'2024-08-21'),(2127,22,'2024-08-21'),(2128,23,'2024-08-21'),(2129,24,'2024-08-21'),(2130,25,'2024-08-21'),(2131,26,'2024-08-21'),(2132,27,'2024-08-21'),(2133,28,'2024-08-21'),(2134,29,'2024-08-21'),(2135,30,'2024-08-21'),(2136,31,'2024-08-21'),(2137,32,'2024-08-21'),(2138,33,'2024-08-21'),(2139,34,'2024-08-21'),(2140,53,'2024-08-21');
/*!40000 ALTER TABLE `table_faults_by_date` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_ishod_dannih`
--

DROP TABLE IF EXISTS `table_ishod_dannih`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_ishod_dannih` (
  `id_table_ishod_dannih` int NOT NULL AUTO_INCREMENT,
  `visota_zdanie` varchar(45) DEFAULT NULL,
  `pasport_zdanie` varchar(45) DEFAULT NULL,
  `hard_zdanie` varchar(45) DEFAULT NULL,
  `ishod_value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_table_ishod_dannih`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_ishod_dannih`
--

LOCK TABLES `table_ishod_dannih` WRITE;
/*!40000 ALTER TABLE `table_ishod_dannih` DISABLE KEYS */;
INSERT INTO `table_ishod_dannih` VALUES (1,'1','1','1','0.012'),(2,'2','1','1','0.01'),(3,'3','1','1','0.01'),(4,'4','1','1','0.009'),(5,'5','1','1','0.009'),(6,'6','1','1','0.007'),(7,'7','1','1','0.007'),(8,'8','1','1','0.006'),(9,'9','1','1','0.006'),(10,'10','1','1','0.006'),(11,'11','1','1','0.004'),(12,'12','1','1','0.004'),(13,'13','1','1','0.004'),(14,'14','1','1','0.003'),(15,'15','1','1','0.003'),(16,'16','1','1','0.003'),(17,'17','1','1','0.003'),(18,'18','1','1','0.003'),(19,'1','1','2','0.017'),(20,'2','1','2','0.016'),(21,'3','1','2','0.014'),(22,'4','1','2','0.014'),(23,'5','1','2','0.012'),(24,'6','1','2','0.011'),(25,'7','1','2','0.01'),(26,'8','1','2','0.01'),(27,'9','1','2','0.009'),(28,'10','1','2','0.009'),(29,'11','1','2','0.007'),(30,'12','1','2','0.007'),(31,'13','1','2','0.006'),(32,'14','1','2','0.006'),(33,'15','1','2','0.006'),(34,'16','1','2','0.004'),(35,'17','1','2','0.004'),(36,'18','1','2','0.004'),(37,'1','1','3','0.021'),(38,'2','1','3','0.02'),(39,'3','1','3','0.018'),(40,'4','1','3','0.017'),(41,'5','1','3','0.014'),(42,'6','1','3','0.012'),(43,'7','1','3','0.011'),(44,'8','1','3','0.011'),(45,'9','1','3','0.01'),(46,'10','1','3','0.01'),(47,'11','1','3','0.009'),(48,'12','1','3','0.009'),(49,'13','1','3','0.007'),(50,'14','1','3','0.007'),(51,'15','1','3','0.007'),(52,'16','1','3','0.006'),(53,'17','1','3','0.006'),(54,'18','1','3','0.006'),(55,'1','2','1','0.017'),(56,'2','2','1','0.016'),(57,'3','2','1','0.014'),(58,'4','2','1','0.012'),(59,'5','2','1','0.011'),(60,'6','2','1','0.01'),(61,'7','2','1','0.01'),(62,'8','2','1','0.009'),(63,'9','2','1','0.007'),(64,'10','2','1','0.007'),(65,'11','2','1','0.007'),(66,'12','2','1','0.006'),(67,'13','2','1','0.006'),(68,'14','2','1','0.006'),(69,'15','2','1','0.004'),(70,'16','2','1','0.004'),(71,'17','2','1','0.004'),(72,'18','2','1','0.004'),(73,'1','2','2','0.022'),(74,'2','2','2','0.021'),(75,'3','2','2','0.02'),(76,'4','2','2','0.018'),(77,'5','2','2','0.018'),(78,'6','2','2','0.018'),(79,'7','2','2','0.018'),(80,'8','2','2','0.017'),(81,'9','2','2','0.016'),(82,'10','2','2','0.014'),(83,'11','2','2','0.014'),(84,'12','2','2','0.012'),(85,'13','2','2','0.011'),(86,'14','2','2','0.011'),(87,'15','2','2','0.01'),(88,'16','2','2','0.01'),(89,'17','2','2','0.009'),(90,'18','2','2','0.009'),(91,'1','2','3','0.029'),(92,'2','2','3','0.027'),(93,'3','2','3','0.026'),(94,'4','2','3','0.023'),(95,'5','2','3','0.021'),(96,'6','2','3','0.02'),(97,'7','2','3','0.02'),(98,'8','2','3','0.018'),(99,'9','2','3','0.018'),(100,'10','2','3','0.017'),(101,'11','2','3','0.016'),(102,'12','2','3','0.016'),(103,'13','2','3','0.014'),(104,'14','2','3','0.012'),(105,'15','2','3','0.012'),(106,'16','2','3','0.011'),(107,'17','2','3','0.011'),(108,'18','2','3','0.01');
/*!40000 ALTER TABLE `table_ishod_dannih` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_ishod_dannih_mnogoetazh`
--

DROP TABLE IF EXISTS `table_ishod_dannih_mnogoetazh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_ishod_dannih_mnogoetazh` (
  `id_table_ishod_dannih_mnogoetazh` int NOT NULL AUTO_INCREMENT,
  `visota_zdanie` varchar(45) DEFAULT NULL,
  `pasport_zdanie` varchar(45) DEFAULT NULL,
  `hard_zdanie` varchar(45) DEFAULT NULL,
  `ishod_value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_table_ishod_dannih_mnogoetazh`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_ishod_dannih_mnogoetazh`
--

LOCK TABLES `table_ishod_dannih_mnogoetazh` WRITE;
/*!40000 ALTER TABLE `table_ishod_dannih_mnogoetazh` DISABLE KEYS */;
INSERT INTO `table_ishod_dannih_mnogoetazh` VALUES (1,'1','1','1','0.020'),(2,'2','1','1','0.018'),(3,'3','1','1','0.017'),(4,'4','1','1','0.016'),(5,'5','1','1','0.014'),(6,'6','1','1','0.012'),(7,'7','1','1','0.011'),(8,'8','1','1','0.011'),(9,'9','1','1','0.010'),(10,'10','1','1','0.010'),(11,'11','1','1','0.009'),(12,'12','1','1','0.007'),(13,'13','1','1','0.007'),(14,'14','1','1','0.006'),(15,'15','1','1','0.006'),(16,'16','1','1','0.006'),(19,'1','1','2','0.023'),(20,'2','1','2','0.022'),(21,'3','1','2','0.020'),(22,'4','1','2','0.018'),(23,'5','1','2','0.017'),(24,'6','1','2','0.016'),(25,'7','1','2','0.016'),(26,'8','1','2','0.014'),(27,'9','1','2','0.012'),(28,'10','1','2','0.012'),(29,'11','1','2','0.011'),(30,'12','1','2','0.010'),(31,'13','1','2','0.010'),(32,'14','1','2','0.009'),(33,'15','1','2','0.009'),(34,'16','1','2','0.009'),(37,'1','1','3','0.031'),(38,'2','1','3','0.029'),(39,'3','1','3','0.027'),(40,'4','1','3','0.026'),(41,'5','1','3','0.023'),(42,'6','1','3','0.022'),(43,'7','1','3','0.021'),(44,'8','1','3','0.020'),(45,'9','1','3','0.018'),(46,'10','1','3','0.017'),(47,'11','1','3','0.016'),(48,'12','1','3','0.016'),(49,'13','1','3','0.014'),(50,'14','1','3','0.012'),(51,'15','1','3','0.011'),(52,'16','1','3','0.011'),(55,'1','2','1','0.027'),(56,'2','2','1','0.021'),(57,'3','2','1','0.020'),(58,'4','2','1','0.019'),(59,'5','2','1','0.017'),(60,'6','2','1','0.016'),(61,'7','2','1','0.014'),(62,'8','2','1','0.013'),(63,'9','2','1','0.012'),(64,'10','2','1','0.011'),(65,'11','2','1','0.010'),(66,'12','2','1','0.009'),(67,'13','2','1','0.009'),(68,'14','2','1','0.008'),(69,'15','2','1','0.008'),(70,'16','2','1','0.007'),(73,'1','2','2','0.032'),(74,'2','2','2','0.031'),(75,'3','2','2','0.029'),(76,'4','2','2','0.028'),(77,'5','2','2','0.027'),(78,'6','2','2','0.023'),(79,'7','2','2','0.022'),(80,'8','2','2','0.021'),(81,'9','2','2','0.020'),(82,'10','2','2','0.018'),(83,'11','2','2','0.017'),(84,'12','2','2','0.016'),(85,'13','2','2','0.014'),(86,'14','2','2','0.012'),(87,'15','2','2','0.011'),(88,'16','2','2','0.010'),(91,'1','2','3','0.040'),(92,'2','2','3','0.039'),(93,'3','2','3','0.038'),(94,'4','2','3','0.035'),(95,'5','2','3','0.033'),(96,'6','2','3','0.032'),(97,'7','2','3','0.031'),(98,'8','2','3','0.028'),(99,'9','2','3','0.027'),(100,'10','2','3','0.026'),(101,'11','2','3','0.023'),(102,'12','2','3','0.022'),(103,'13','2','3','0.021'),(104,'14','2','3','0.020'),(105,'15','2','3','0.018'),(106,'16','2','3','0.017');
/*!40000 ALTER TABLE `table_ishod_dannih_mnogoetazh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test` (
  `id_test` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_oborudovanie`
--

DROP TABLE IF EXISTS `type_oborudovanie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_oborudovanie` (
  `id_type_oborudovanie` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_type_oborudovanie`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_oborudovanie`
--

LOCK TABLES `type_oborudovanie` WRITE;
/*!40000 ALTER TABLE `type_oborudovanie` DISABLE KEYS */;
INSERT INTO `type_oborudovanie` VALUES (2,'МРТ'),(3,'КТ'),(4,'Аппарат ангиографический'),(11,'Томограф рентгеновский компьютерный'),(12,'Ускоритель линейный');
/*!40000 ALTER TABLE `type_oborudovanie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `use_efficiency`
--

DROP TABLE IF EXISTS `use_efficiency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `use_efficiency` (
  `id_use_efficiency` int NOT NULL AUTO_INCREMENT,
  `id_oborudovanie` int DEFAULT NULL,
  `count_research` int DEFAULT NULL,
  `count_patient` int DEFAULT NULL,
  PRIMARY KEY (`id_use_efficiency`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `use_efficiency`
--

LOCK TABLES `use_efficiency` WRITE;
/*!40000 ALTER TABLE `use_efficiency` DISABLE KEYS */;
INSERT INTO `use_efficiency` VALUES (2,2,4000,200000),(4,1,3,2),(5,6,123,33),(6,4,444,333);
/*!40000 ALTER TABLE `use_efficiency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(256) DEFAULT NULL,
  `login` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `id_role` varchar(50) DEFAULT NULL,
  `online` varchar(256) DEFAULT NULL,
  `last_act` varchar(256) DEFAULT NULL,
  `last_time_online` varchar(256) DEFAULT NULL,
  `last_page` varchar(256) DEFAULT NULL,
  `token` varchar(512) DEFAULT NULL,
  `id_uz` int DEFAULT NULL,
  `id_obl` int DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user_UNIQUE` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Админ2','admin','21232f297a57a5a743894a0e4a801fc3',NULL,'1','261k9jrp43a88rek5thcjk2bsl02jdp6','261k9jrp43a88rek5thcjk2bsl02jdp6','2024-09-05 15:34:48','/index.php?smetaPodryad','86f3059b228c8acf99e69734b6bb32cc',NULL,NULL),(2,'Минздрав1','minzdrav3','9b7f5ca777e1247cd4b9f27e4659a7fe',NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Гузо1','guzo1','c11905ea997d3f668fccf1ab023856b0',NULL,'3','08f9c9f0a7bb19a74799b586ac623381','08f9c9f0a7bb19a74799b586ac623381','2024-08-22 11:23:33','/index.php?main','f1f497abd7d4043a51f3afbb7970f0f7',NULL,1),(4,'УЗ \"Столинская ЦРБ\"','stolincrb','fc97cc20db5e98a7678029a847340f73',NULL,'4',NULL,NULL,NULL,NULL,NULL,4,NULL),(5,'Гузо2','guzo2','c6195027c023e119b800e58f825d371f',NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,2),(6,'Гузо3','guzo3','802307158a02eab7ccb0f1d58505ae88',NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,3),(7,'Гузо4','guzo4','e79624b07b795c0207fadcda7fad9a7c',NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,4),(8,'Гузо5','guzo5','74a4bf1177eaecdaa63bdf5d60cc46f9',NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,5),(9,'Гузо6','guzo6','1ba79b86e9706fbb6c8ca8883a98885e',NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,6),(10,'Гузо7','guzo7','75ea71e8b2bac9cc4e6d31673f7d51a2',NULL,'3',NULL,NULL,NULL,NULL,NULL,NULL,7),(11,'УЗ «Могилевская областная клиническая больница»','mogoblkb','e552a82812a6a4ec1480f7257b2d37f8',NULL,'4',NULL,NULL,NULL,NULL,NULL,3,NULL),(12,'УЗ «Брестская городская больница №1»','brgb1','e9b5c2bfb6d4c2b169e696b9ccd74ad1',NULL,'4',NULL,NULL,NULL,NULL,NULL,5,NULL),(13,'УЗ «Барановичская городская больница»','bargb','7ee79f34ec85c50e05731f4dd05cd075',NULL,'4',NULL,NULL,NULL,NULL,NULL,6,NULL),(14,'ГУЗ «Пинский межрайонный онкологический диспансер»','pinmod','0a869b3728fa99db6154a23fdccec467',NULL,'4',NULL,NULL,NULL,NULL,NULL,7,NULL),(15,'УЗ «Витебская областная клиническая больница»','vitokb','7ac4ffda6047c3da2d15e1bfc09916b0',NULL,'4',NULL,NULL,NULL,NULL,NULL,8,NULL),(16,'УЗ «Витебский областной клинический диагностический центр»','vitokdc','cdf28d8fef77a06f095c47f43b28c5f7',NULL,'4',NULL,NULL,NULL,NULL,NULL,9,NULL),(17,'УЗ «Витебский городской клинический родильный дом № 2»','vitgkrd2','87133366b27502521323507d8fa3afbd',NULL,'4',NULL,NULL,NULL,NULL,NULL,10,NULL),(18,'ГУЗ «Полоцкая ЦГБ», Полоцкая центральная городская поликлиника','polcgp','433b889e2312c7fb2ea800df1c799567',NULL,'4',NULL,NULL,NULL,NULL,NULL,11,NULL),(19,'УЗ «Глубокская ЦРБ»','glubcrb','a8db1f4de9480adc9c5b9d5619732b18',NULL,'4',NULL,NULL,NULL,NULL,NULL,12,NULL),(20,'УЗ «Гомельская областная детская клиническая больница»','gomodkb','2be522fc0d4be123f54461932b544beb',NULL,'4',NULL,NULL,NULL,NULL,NULL,13,NULL),(21,'УЗ «Гомельский областной клинический онкологический диспансер»','gomokod','ff97fc05e1da379e88e6cc3190a82045',NULL,'4',NULL,NULL,NULL,NULL,NULL,14,NULL),(22,'ГУЗ «Гомельская городская клиническая поликлиника № 5 им.С.В.Голуховой»','gomgkp5','ff2f1e87a33a294c2079908d99e9115f',NULL,'4',NULL,NULL,NULL,NULL,NULL,15,NULL),(23,'УЗ «Гродненский областной клинический кардиологический центр»','grokkc','997275d2dde9a7fc4de65b25c6280b61',NULL,'4',NULL,NULL,NULL,NULL,NULL,16,NULL),(24,'УЗ «10-я городская клиническая больница»','gkb10','48e793ddcba9aef12cab66e763e6cde3',NULL,'4',NULL,NULL,NULL,NULL,NULL,17,NULL),(25,'УЗ «12-я городская клиническая стоматологическая поликлиника»','gksp12','f778996c1fc0d297cb4ce07ace8c65e4',NULL,'4',NULL,NULL,NULL,NULL,NULL,18,NULL),(26,'УЗ «Минский городской клинический наркологический центр»','mingknc','5129680c5450df58280ad0e439d0b9ac',NULL,'4',NULL,NULL,NULL,NULL,NULL,19,NULL),(27,'УЗ «Минский городской клинический онкологический центр»','mingkoc','9fda96eee2d349416ffd8b4fb48b5b16',NULL,'4',NULL,NULL,NULL,NULL,NULL,20,NULL),(28,'УЗ «2-я городская клиническая больница»','gkb2','6e93d2aed3f455e4e36c3301f84d5240',NULL,'4',NULL,NULL,NULL,NULL,NULL,21,NULL),(29,'УЗ «1-я городская клиническая больница»','gkb1','2ff7d814cb977b937bec900f6f02f5cb',NULL,'4',NULL,NULL,NULL,NULL,NULL,22,NULL),(30,'ГУ «Минский научно-практический центр хирургии, трансплантологии и гематологии»','minnpchtg','64fbaf569335a9b9310ba5079b0482d5',NULL,'4',NULL,NULL,NULL,NULL,NULL,23,NULL),(31,'УЗ «Вилейская ЦРБ»','vilcrb','588a84fc50ed757adbeb8cdeab640202',NULL,'4',NULL,NULL,NULL,NULL,NULL,24,NULL),(32,'УЗ «Молодечненская ЦРБ»','molcrb','0df4ec5baf9d898c547e16708be7aa99',NULL,'4',NULL,NULL,NULL,NULL,NULL,25,NULL),(33,'УЗ «Минская областная клиническая больница»','minokb','6faf5bfabfa1f3320fa3657e22560d35',NULL,'4',NULL,NULL,NULL,NULL,NULL,26,NULL),(34,'УЗ «Солигорская ЦРБ»','solcrb','4f4dec863c2864f128412e35d692d3c9',NULL,'4',NULL,NULL,NULL,NULL,NULL,27,NULL),(35,'УЗ «Могилевская областная детская больница»','mogodb','5dd029fca6c6a7f50e494dc90b4baa16',NULL,'4',NULL,NULL,NULL,NULL,NULL,28,NULL),(36,'УЗ «Могилевский областной онкологический диспансер»','mogood','73091626cd8794542f27ff62312bafee',NULL,'4',NULL,NULL,NULL,NULL,NULL,29,NULL),(37,'УЗ «Бобруйская городская больница скорой медицинской помощи им. В.О. Морзона»','bobgbsmp','e9c3957c2bf1b99f6aa2c85867ee09a5',NULL,'4',NULL,NULL,NULL,NULL,NULL,30,NULL),(38,'ГУ «РНПЦ детской онкологии, гематологии и иммунологии»','rnpcdogi','191e474c8532f1f43fd166df09e7663d',NULL,'4',NULL,NULL,NULL,NULL,NULL,31,NULL),(39,'ГУ «РНПЦ онкологии и медицинской радиологии им. Н.Н.Александрова»','rnpcomr','68accdc2b78f4b38f49fa780ebc76978',NULL,'4',NULL,NULL,NULL,NULL,NULL,32,NULL),(40,'ГУ «РНПЦ пульмонологии и фтизиатрии»','rnpcpf','0c2673584174f2653324545cb1fe7058',NULL,'4',NULL,NULL,NULL,NULL,NULL,33,NULL),(41,'ГУ «РНПЦ «Кардиология»','rnpckard','fadc672078fef62883bd9c9ddf6c39fa',NULL,'4',NULL,NULL,NULL,NULL,NULL,34,NULL),(42,'ГУ «РНПЦ РМиЭЧ»','rnpcrmiech','58f17369da360a7533845bf665757b67',NULL,'4',NULL,NULL,NULL,NULL,NULL,35,NULL),(43,'УЗ «Брестская областная клиническая больница»','brokb','1f4ef445e80efd0ef55914d41bfc00d1',NULL,'4',NULL,NULL,NULL,NULL,NULL,36,NULL),(44,'УЗ «Брестский областной онкологический диспансер»','brood','5de7de9c7f11f229fbf4b610e71b9b7a',NULL,'4',NULL,NULL,NULL,NULL,NULL,37,NULL),(45,'УЗ «Брестская детская областная больница»','brdob','c5378de801669704d8b709df8453608d',NULL,'4',NULL,NULL,NULL,NULL,NULL,38,NULL),(46,'УЗ «Брестская центральная городская больница»','brcgb','9b1a71e72846e3746ef78f2927cc83d1',NULL,'4',NULL,NULL,NULL,NULL,NULL,39,NULL),(47,'Онкологический диспансер г. Барановичи УЗ «Барановичская центральная поликлиника»','onkdbbcp','e7bac496746c0cfd7e0ff978b1440cd1',NULL,'4',NULL,NULL,NULL,NULL,NULL,40,NULL),(48,'УЗ «Берёзовская центральная районная больница им. Э.Э.Вержбицкого»','bercrb','1f82b5b94cc6ac53e9c920af086d09cd',NULL,'4',NULL,NULL,NULL,NULL,NULL,41,NULL),(49,'УЗ «Дрогичинская центральная районная больница»','drogcrb','8b96f4dd7bec02ca733935914210d95b',NULL,'4',NULL,NULL,NULL,NULL,NULL,42,NULL),(50,'УЗ «Каменецкая центральная районная больница»','kamcrb','5bf84401c307bf1d2639690f8b6cc5ed',NULL,'4',NULL,NULL,NULL,NULL,NULL,43,NULL),(51,'УЗ «Кобринская центральная районная больница»','kobcrb','9037d3774be486f29a3b2c5dcf47b7be',NULL,'4',NULL,NULL,NULL,NULL,NULL,44,NULL),(52,'УЗ «Лунинецкая центральная районная больница»','luncrb','45f3e7ce49d4d1f580bf42c491764917',NULL,'4',NULL,NULL,NULL,NULL,NULL,45,NULL),(53,'УЗ «Ляховичская центральная районная больница»','lyzhcrb','c904879928feb43a9e21e6b14964270e',NULL,'4',NULL,NULL,NULL,NULL,NULL,46,NULL),(54,'УЗ «Пинская центральная районная больница»','pincrb','1183f96a0437b814e56eed377c04e634',NULL,'4',NULL,NULL,NULL,NULL,NULL,47,NULL),(55,'УЗ «Ивановская центральная районная больница»','ivancrb','9c83e1575050880d632598aa8f7ec63f',NULL,'4',NULL,NULL,NULL,NULL,NULL,48,NULL),(56,'УЗ «Брестская городская больница скорой помощи»','brgbsp','2bb8f0d42ffb1331bda2d9ed09374f80',NULL,'4',NULL,NULL,NULL,NULL,NULL,49,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uz`
--

DROP TABLE IF EXISTS `uz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uz` (
  `id_uz` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `id_oblast` int DEFAULT NULL,
  PRIMARY KEY (`id_uz`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uz`
--

LOCK TABLES `uz` WRITE;
/*!40000 ALTER TABLE `uz` DISABLE KEYS */;
INSERT INTO `uz` VALUES (3,'УЗ «Могилевская областная клиническая больница» ',6),(4,'УЗ «Столинская ЦРБ»',1),(5,'УЗ «Брестская городская больница №1»',1),(6,'УЗ «Барановичская городская больница»',1),(7,'ГУЗ «Пинский межрайонный онкологический диспансер»',1),(8,'УЗ «Витебская областная клиническая больница»',2),(9,'УЗ «Витебский областной клинический диагностический центр»',2),(10,'УЗ «Витебский городской клинический родильный дом № 2»',2),(11,'ГУЗ «Полоцкая ЦГБ», Полоцкая центральная городская поликлиника',2),(12,'УЗ «Глубокская ЦРБ»',2),(13,'УЗ «Гомельская областная детская клиническая больница»',3),(14,'УЗ «Гомельский областной клинический онкологический диспансер»',3),(15,'ГУЗ «Гомельская городская клиническая поликлиника № 5 им.С.В.Голуховой»',3),(16,'УЗ «Гродненский областной клинический кардиологический центр»',4),(17,'УЗ «10-я городская клиническая больница»',7),(18,'УЗ «12-я городская клиническая стоматологическая поликлиника»',7),(19,'УЗ «Минский городской клинический наркологический центр»',7),(20,'УЗ «Минский городской клинический онкологический центр»',7),(21,'УЗ «2-я городская клиническая больница»',7),(22,'УЗ «1-я городская клиническая больница»',7),(23,'ГУ «Минский научно-практический центр хирургии, трансплантологии и гематологии»',7),(24,'УЗ «Вилейская ЦРБ»',5),(25,'УЗ «Молодечненская ЦРБ»',5),(26,'УЗ «Минская областная клиническая больница»',5),(27,'УЗ «Солигорская ЦРБ»',5),(28,'УЗ «Могилевская областная детская больница»',6),(29,'УЗ «Могилевский областной онкологический диспансер»',6),(30,'УЗ «Бобруйская городская больница скорой медицинской помощи им. В.О. Морзона»',6),(31,'ГУ «РНПЦ детской онкологии, гематологии и иммунологии»',7),(32,'ГУ «РНПЦ онкологии и медицинской радиологии им. Н.Н.Александрова»',7),(33,'ГУ «РНПЦ пульмонологии и фтизиатрии»',7),(34,'ГУ «РНПЦ «Кардиология»',7),(35,'ГУ «РНПЦ РМиЭЧ»',7),(36,'УЗ «Брестская областная клиническая больница»',1),(37,'УЗ «Брестский областной онкологический диспансер»',1),(38,'УЗ «Брестская детская областная больница»',1),(39,'УЗ «Брестская центральная городская больница»',1),(40,'Онкологический диспансер г. Барановичи УЗ «Барановичская центральная поликлиника»',1),(41,'УЗ «Берёзовская центральная районная больница им. Э.Э.Вержбицкого»',1),(42,'УЗ «Дрогичинская центральная районная больница»',1),(43,'УЗ «Каменецкая центральная районная больница»',1),(44,'УЗ «Кобринская центральная районная больница»',1),(45,'УЗ «Лунинецкая центральная районная больница»',1),(46,'УЗ «Ляховичская центральная районная больница»',1),(47,'УЗ «Пинская центральная районная больница»',1),(48,'УЗ «Ивановская центральная районная больница»',1),(49,'УЗ «Брестская городская больница скорой помощи»',1);
/*!40000 ALTER TABLE `uz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zakazchik`
--

DROP TABLE IF EXISTS `zakazchik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zakazchik` (
  `id_zakazchik` int NOT NULL AUTO_INCREMENT,
  `nameZakazchik` varchar(256) DEFAULT NULL,
  `dolzhnostIP` varchar(128) DEFAULT NULL,
  `dolzhnostRP` varchar(128) DEFAULT NULL,
  `fioIP` varchar(128) DEFAULT NULL,
  `fioRP` varchar(128) DEFAULT NULL,
  `osnovanie` varchar(45) DEFAULT NULL,
  `rekvizit` varchar(1024) DEFAULT NULL,
  `contact` varchar(1024) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `pochtaIndex` varchar(128) DEFAULT NULL,
  `primechanie` varchar(1028) DEFAULT NULL,
  PRIMARY KEY (`id_zakazchik`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zakazchik`
--

LOCK TABLES `zakazchik` WRITE;
/*!40000 ALTER TABLE `zakazchik` DISABLE KEYS */;
INSERT INTO `zakazchik` VALUES (1,'Веренич Андрей Степанович',NULL,NULL,'Веренич А.С. ',NULL,NULL,'Паспорт ВМ1536230 выданный Октябрьским РОВД г. Витебска от 24.04.2007г. регистрация: ул. Киселёва, 18, кв. 8.',NULL,NULL,NULL,'Июнь 2018 г. Частник. Узаконка перепланировки. Оплата без задержек, вопросов не было.'),(2,'ООО \"Архитектурное Ателье\"','директор','директора',' Усов Ф.Н.','Усова Ф.Н.','Устава','220024, г. Минск, пер. Корженевского, 28-114 УНП 191441526, ОКПО 379662985000 р/с BY53MTBK30120001093300069151 БИК MTBKBY22 в ЗАО \"МТБанк\"',NULL,NULL,NULL,'Работы в основном по обследованию медучреждений под замену рентгеноборудования');
/*!40000 ALTER TABLE `zakazchik` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-05 15:36:15
