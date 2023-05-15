-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: blueolz8_vanvihar
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Test','vaibhavblueocean@gmail.com','0123456789',NULL,'This is my first test feedback.','2022-03-03 04:27:40','2022-03-03 04:27:40');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documents_slug_unique` (`slug`),
  KEY `documents_user_id_foreign` (`user_id`),
  CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,2,'Birds of Van Vihar','birds-of-van-vihar',NULL,'Birds-of-Van-Vihar.pdf','0ba3f881b09f9708aacd039023da4839277b6580.pdf',306875,'pdf',0,'2022-05-20 05:45:20','2022-05-20 05:49:00'),(2,2,'Butterfly Park Write Up','butterfly-park-write-up',NULL,'Butterfly-Park-Write-Up.pdf','ed8aa7778cae98816172d01f09cde722a3feee6c.pdf',1442464,'pdf',0,'2022-05-20 05:45:50','2022-05-20 05:49:01'),(3,2,'Butterfly Diversity Report','butterfly-diversity-report',NULL,'Butterfly-Diversity-Report.pdf','5b7ecda068a936400ebe3f483b48699749e5565c.pdf',7637405,'pdf',0,'2022-05-20 05:47:30','2022-05-20 05:49:01'),(4,2,'Snake Interpritation Cetnter','snake-interpritation-cetnter',NULL,'Snake-Interpritation-Cetnter.pdf','5471ce71c0f82f404109dc20227b81c58f784244.pdf',39545938,'pdf',0,'2022-05-20 05:48:55','2022-05-20 05:49:01'),(5,2,'Vulture Importance and Conservation Timeline','vulture-importance-and-conservation-timeline',NULL,'Vulture-Importance.pdf','ad224b00c112c7b5a519b28b43a8ea196dd6fab6.pdf',4524506,'pdf',0,'2022-05-20 06:17:48','2022-05-20 06:18:14'),(6,2,'Varieties of Vultures','varieties-of-vultures',NULL,'Varieties-of-Vultures.pdf','845a6b7759975a3d29b06b28385e11f7cabd15fe.pdf',3960955,'pdf',0,'2022-05-20 06:18:11','2022-10-08 04:15:01');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_images`
--

DROP TABLE IF EXISTS `event_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_images_event_id_foreign` (`event_id`),
  CONSTRAINT `event_images_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_images`
--

LOCK TABLES `event_images` WRITE;
/*!40000 ALTER TABLE `event_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `language` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `events_slug_unique` (`slug`),
  KEY `events_user_id_foreign` (`user_id`),
  CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,2,'International Biodiversity Day 22 May 2022','international-biodiversity-day-22-may-2022','2022-05-18','16:00:00','Vihar Vithika Van Vihar National Park, Bhopal','<p style=\"text-align:justify\"><strong>&quot;International Biodiversity Day 22 May 2022&quot; to be organized in Van Vihar National Park- Zoo</strong></p>\r\n\r\n<p style=\"text-align:justify\">A program is being organized on the occasion of International Biodiversity Day, 22 May 2022 under the joint aegis of Van Vihar Management and Biodiversity Board at Van Vihar National Park and Zoo, Bhopal. During this program competition related to Biodiversity education and awareness will be organized for students. Painting competition on the subject of Wildlife and Environment (classes 6 to 8), Essay writing on the topic of Biodiversity of Madhya Pradesh (for students of classes 9 to 11) and a open quiz competition (for open category). About 75 participants will be given free admission in this camp. Interested participants can submit their name, class, institution / school and contact telephone / mobile number etc. in the office of Van Vihar National Park, Bhopal by 20.05.2022 in office hours. Participants can register themselves individually or in group on Van Vihar&#39;s email E-mail: fdvanvnp.bpl@mp.gov, in which it will be mandatory to clearly mention the competition (painting or essay). The drawing sheet for the painting competition and the copy for the essay competition will be provided by the Van Vihar management and the other material used in the competition will have to be brought by the participant himself. Quiz program will be organized for all the participants. Only the first 75 entries in the program will be given free admission.</p>\r\n\r\n<p>Program Details<br />\r\nVenue - Vihar Vithika Van Vihar National Park, Bhopal<br />\r\nRegistration - 7.00 am<br />\r\nCompetition (Essay/Painting)-7.30 -9.00 PM<br />\r\nQuiz from 9.00 to 9.30 for all participants<br />\r\nPrize Distribution, Refreshments &amp; Closing - 10.00 to 11.00 PM</p>\r\n\r\n<p>Contact person-<br />\r\nOffice Van Vihar &ndash; Office Hours<br />\r\nUnit Incharge Management &ndash; 9424790614<br />\r\nE-mail: fdvanvnp.bpl@mp.gov<br />\r\nVan vihar website- www.vanviharnationalpark.org<br />\r\nFacebook page -@vanviharknationalparkofficialpage<br />\r\nInstagram: @vanviharnationalparkbhopal<br />\r\nTwitter :@van_vihar</p>','1653036275bio-diversity-event.jpg',0,1,'2022-05-20 03:14:35','2022-10-06 04:10:11'),(2,2,'अंतर्राष्ट्रीय जैव विविधता दिवस 22 मई 2022','international-biodiversity-day-22-may-2022-hi','2022-05-18','16:00:00','विहार वीथिका वन विहार राष्ट्रीय उद्यान, भोपाल','<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>वन विहार राष्ट्रीय उद्यान- जू में &quot;अंतर्राष्ट्रीय जैव विविधता दिवस 22 मई 2022&quot; का आयोजन</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">वन विहार राष्ट्रीय उद्यान एवं जू, भोपाल में वन विहार प्रबंधन एवं बायोडायवर्सिटी बोर्ड के संयुक्त तत्वाधान में अंतर्राष्ट्रीय जैव विविधता दिवस 22 मई 2022 के अवसर पर एक कार्यक्रम आयोजित किया जा रहा है जिसमें <strong>वन्यजीव एवं पर्यावरण विषय</strong> पर चित्रकला प्रतियोगिता (कक्षा 6 से 8 के विद्यार्थियों हेतु) तथा <strong>मध्यप्रदेश की जैव विविधता विषय पर</strong> निबंध लेखन प्रतियोगिता (कक्षा 9 से 11 के विद्यार्थियों हेतु) एवं प्रश्नोत्तरी प्रतियोगिता (खुला वर्ग हेतु) इत्यादि जैव विविधता शिक्षा एवं जागरूकता से संबंधित कार्यक्रम आयोजित होगें। इस शिविर में लगभग 75 प्रतिभागियों को निःशुल्क प्रवेश दिया जावेगा। इच्छुक प्रतिभागी अपना नाम, कक्षा, संस्था / विद्यालय एवं संपर्क दूरभाष/मोबाईल क्रमांक आदि की जानकारी संलग्न कर कार्यालय वन विहार राष्ट्रीय उद्यान भोपाल में दिनांक 20.05.2022 तक कार्यालयीन समय में प्रस्तुत कर सकते हैं। प्रतिभागी वन विहार के ईमेल <strong>E-mail: fdvanvnp.bpl@mp.gov</strong> पर व्यक्तिगत अथवा समूह में अपना पंजीयन करा सकते हैं जिसमें प्रतियोगिता (चित्रकला अथवा निबंध) का स्पष्ट उल्लेख करना अनिवार्य होगा। चित्रकला प्रतियोगिता हेतु ड्रॉइंग शीट तथा निबंध प्रतियोगिता हेतु कॉपी वन विहार प्रबंधन द्वारा उपलब्ध कराई जावेगी तथा प्रतियोगिता में उपयोग की जाने वाली अन्य सामग्री कलर, पेन इत्यादि प्रतिभागी को स्वयं लाना होगी। प्रश्नोत्तरी कार्यक्रम समस्त प्रतिभागियों हेतु आयोजित रहेगा। कार्यक्रम में प्रथम 75 प्रविष्टियों को ही निःशुल्क प्रवेश दिया जावेगा।</p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>कार्यक्रम का विवरण</strong>&nbsp;</span></p>\r\n\r\n<p>कार्यक्रम स्थल - विहार वीथिका वन विहार राष्ट्रीय उद्यान, भोपाल&nbsp;</p>\r\n\r\n<p>पंजीयन - प्रातः 7.00 बजे</p>\r\n\r\n<p>प्रतियोगिता (निबंध/ चित्रकला)-7.30 -9.00 बजे तक&nbsp;</p>\r\n\r\n<p>प्रश्नोत्तरी 9.00 बजे से 9.30 समस्त प्रतिभागियों हेतु&nbsp;</p>\r\n\r\n<p>पुरस्कार वितरण, स्वल्पाहार एवं समापन - 10.00 से 11.00 बजे</p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>संपर्क सूत्र-</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>कार्यालय वन विहार &ndash; कार्यालयीन समय&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>इकाई प्रभारी प्रबंधन &ndash; 9424790614</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>E-mail: fdvanvnp.bpl@mp.gov&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Van vihar website- www.vanviharnationalpark.org&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Facebook page -@vanviharknationalparkofficialpage&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Instagram: @vanviharnationalparkbhopal&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Twitter :@van_vihar</strong></span></p>','1662621536bio-diversity-event.jpg',0,2,'2022-09-08 01:48:56','2022-10-08 04:18:58');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_user_id_foreign` (`user_id`),
  CONSTRAINT `galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,2,'van_vihar_41','8d99166c70fd31dc2d6c8319c0f7b4fa260b84b2.jpg','jpg',201452,0,'2022-02-07 05:51:18','2022-02-07 05:54:22'),(2,2,'van_vihar_42','b89b74be691667bfce979cf9816428b9205bc251.jpg','jpg',205489,0,'2022-02-07 05:51:18','2022-02-07 05:54:22'),(3,2,'van_vihar_43','03feb33aad814e5bcac5866f637edf5caa6577ca.jpg','jpg',204487,0,'2022-02-07 05:51:19','2022-02-07 05:54:21'),(4,2,'van_vihar_44','ac5a9e7f996c97d1aa8645a9ff437c7440d42316.jpg','jpg',196461,0,'2022-02-07 05:51:19','2022-02-07 05:54:20'),(5,2,'van_vihar_36','f3be22184afc1c74371780f645971222ad64caea.jpg','jpg',26562,0,'2022-02-07 05:51:29','2022-02-07 05:54:17'),(6,2,'van_vihar_37','5b1e4b84ddaa65dccd58b145367fc1d6b7da5bd5.jpg','jpg',201897,0,'2022-02-07 05:51:29','2022-02-07 05:54:16'),(7,2,'van_vihar_38','550382217f47660f5cc724e186fd96e1c4270d44.jpg','jpg',7666,0,'2022-02-07 05:51:30','2022-02-07 05:54:15'),(8,2,'van_vihar_39','ac25328ad09869dd7a70b6420fd804bbae0c0d5c.jpg','jpg',208737,0,'2022-02-07 05:51:30','2022-02-07 05:54:13'),(9,2,'van_vihar_40','df42a7b02956c510e953f8025f0e72ed53e1912c.jpg','jpg',199578,0,'2022-02-07 05:51:30','2022-02-07 05:54:12'),(10,2,'van_vihar_31','70ff2d1cf99e41694bf54321eedf6981fd3757c5.jpg','jpg',200796,0,'2022-02-07 05:51:41','2022-02-07 05:54:11'),(11,2,'van_vihar_32','c9ee7feb950dded7314497cb078c86468ed1cab2.jpg','jpg',199913,0,'2022-02-07 05:51:41','2022-02-07 05:54:11'),(12,2,'van_vihar_33','8817186867ec9476f0ad6c0349c877265cb867d9.jpg','jpg',200167,0,'2022-02-07 05:51:42','2022-02-07 05:54:10'),(13,2,'van_vihar_34','aa7db81c1053f92ccd0bd7e22e3bb001f6630ec4.jpg','jpg',201713,0,'2022-02-07 05:51:42','2022-02-07 05:54:09'),(14,2,'van_vihar_35','35cd68a60816720c6f8357cd2c3caf3a2eb9f9a3.jpg','jpg',23555,0,'2022-02-07 05:51:42','2022-02-07 05:54:09'),(15,2,'van_vihar_26','a3f3f21d0bc68e4cf485be7e8a5c507617b32bda.jpg','jpg',190859,0,'2022-02-07 05:51:54','2022-02-07 05:54:05'),(16,2,'van_vihar_27','10a04cbc565bd0ff5b3f960ccac95322157209f0.jpg','jpg',203960,0,'2022-02-07 05:51:54','2022-02-07 05:54:04'),(17,2,'van_vihar_29','95504960a474bc636138c4641a9de14285f78474.jpg','jpg',199302,0,'2022-02-07 05:51:54','2022-02-07 05:54:01'),(18,2,'van_vihar_30','7f0146259eda9e759d2602ad0ca2a10170582248.jpg','jpg',161454,0,'2022-02-07 05:51:55','2022-02-07 05:54:01'),(19,2,'van_vihar_21','ee313eabbce2a72e50d439acfd8d9bb34e39c490.jpg','jpg',188654,0,'2022-02-07 05:52:12','2022-02-07 05:54:00'),(20,2,'van_vihar_22','b7d280d187096c6aa3a1504cd93ad1a08322e579.jpg','jpg',193257,0,'2022-02-07 05:52:12','2022-02-07 05:53:59'),(21,2,'van_vihar_23','0eda28da0bce4a47a9d20d3b1c3160805684a22e.jpg','jpg',195173,0,'2022-02-07 05:52:12','2022-02-07 05:53:58'),(22,2,'van_vihar_24','d273f5cfcf8349321f837f73d29393f55f9cb339.jpg','jpg',154537,0,'2022-02-07 05:52:12','2022-02-07 05:53:57'),(23,2,'van_vihar_25','09bdb374ed0a3599195e1b0efb7b8146206d0dbd.jpg','jpg',210959,0,'2022-02-07 05:52:13','2022-02-07 05:53:56'),(24,2,'van_vihar_17','c59112d9a851554178e48ab79a4c2f966fb1967a.jpg','jpg',197301,0,'2022-02-07 05:52:27','2022-02-07 05:53:53'),(25,2,'van_vihar_18','28ccea2b62af785232fd2c8e40a8439a7222d576.jpg','jpg',205680,0,'2022-02-07 05:52:27','2022-02-07 05:53:51'),(26,2,'van_vihar_19','331f0fd871200ac5ea9cb6d393bb49fc7ab2da0a.jpg','jpg',195169,0,'2022-02-07 05:52:27','2022-02-07 05:53:50'),(27,2,'van_vihar_20','7066615e0b826b68d95595900ab6b7b878b3317f.jpg','jpg',204903,0,'2022-02-07 05:52:28','2022-02-07 05:53:49'),(28,2,'van_vihar_11','c71c8ed6f237816d77586968f32d037945861f54.jpg','jpg',225033,0,'2022-02-07 05:52:41','2022-02-07 05:53:48'),(29,2,'van_vihar_13','5bea9c0533a1091795eb3e306c8e32143127f506.jpg','jpg',181967,0,'2022-02-07 05:52:42','2022-02-07 05:53:46'),(30,2,'van_vihar_14','66b0f9793d3c05430acf507cdd36ec18d56a2139.jpg','jpg',187706,0,'2022-02-07 05:52:42','2022-02-07 05:53:45'),(31,2,'van_vihar_15','6ef215758412e4454603f70a721082ba42f2ede4.jpg','jpg',160666,0,'2022-02-07 05:52:42','2022-02-07 05:53:45'),(32,2,'van_vihar_7','0bfe6dc74c65d0515ba1ea24c0b5046d5704bd97.jpg','jpg',199186,0,'2022-02-07 05:52:51','2022-02-07 05:53:32'),(33,2,'van_vihar_8','b5b1b5eafa2585ed63a3d4633223f06a8f9513d7.jpg','jpg',195052,0,'2022-02-07 05:52:52','2022-02-07 05:53:30'),(34,2,'van_vihar_9','1ae9b559653e3d7379838b563e39474966777f59.jpg','jpg',191075,0,'2022-02-07 05:52:52','2022-02-07 05:53:17'),(35,2,'van_vihar_1','36150570c315c58e50a4481e71d738d5d44fa4a6.jpg','jpg',182659,0,'2022-02-07 05:53:02','2022-02-07 05:53:16'),(36,2,'van_vihar_2','d93fe1ca030b2cfb08a016f5da1c53fa75f0dc0a.jpg','jpg',180518,0,'2022-02-07 05:53:02','2022-02-07 05:53:14'),(37,2,'van_vihar_3','ba9d8ab6d1b4b527b915865dc78d06d0a4f4ac59.jpg','jpg',170320,0,'2022-02-07 05:53:03','2022-02-07 05:53:14'),(38,2,'van_vihar_4','a63271a76783c612d0d3ec511ff3850a687aa382.jpg','jpg',188933,0,'2022-02-07 05:53:03','2022-02-07 05:53:13'),(39,2,'van_vihar_5','9b20158c9446ad2b76d1b7edf2b614cd8e66fe55.jpg','jpg',179502,0,'2022-02-07 05:53:03','2022-02-07 05:53:12'),(40,2,'van_vihar_6','3e3ba7a26282c829bb61209c643d959f40768721.jpg','jpg',168719,0,'2022-02-07 06:18:19','2022-02-15 11:11:34'),(41,2,'Aakash-Bharti','5352b95c7af8eed3dad20bb00f6ad466340a3c0d.jpg','jpg',99457,0,'2022-05-02 07:00:46','2022-05-02 07:14:53'),(42,2,'nature-4','32ae8ad35add195eeb93b19f589e77834aad0570.jpg','jpg',218125,0,'2022-05-20 03:04:26','2022-05-20 03:05:49'),(43,2,'sambar-1','b4c61c7f01fe4ef35911e5e2ce891da6823231b8.jpg','jpg',190304,0,'2022-05-20 03:04:26','2022-05-20 03:05:48'),(44,2,'tiger-1','efdd74f93e88edcc741762e8d67dcba14a8140cc.jpg','jpg',192041,0,'2022-05-20 03:04:27','2022-05-20 03:05:44'),(45,2,'tiger-2','fc226c3f40a5b2935e8bd92c76c6fdbefc1a03c4.jpg','jpg',191138,0,'2022-05-20 03:04:27','2022-05-20 03:05:45'),(46,2,'butterfly-1','4fae57dc612236bf635da11bda27c94d882dab84.jpg','jpg',119328,0,'2022-05-20 03:04:56','2022-05-20 03:05:43'),(47,2,'nature-1','92764aba127821fc604221ba45f0c4223db63d8a.jpg','jpg',212993,0,'2022-05-20 03:04:57','2022-05-20 03:05:41'),(48,2,'nature-3','9db8f075962974185eeb02f7566dcffba7128a59.jpg','jpg',120857,0,'2022-05-20 03:04:57','2022-05-20 03:05:42'),(49,2,'nature-5','417f405d6ae30f2143c7dabceb6db1221a6a4803.jpg','jpg',6498883,0,'2022-05-20 03:04:57','2022-05-20 03:05:41'),(50,2,'bird-1','94e8b1b903521214ab4bec68c22acf7faebc80ff.jpg','jpg',28601,0,'2022-05-20 03:05:28','2022-05-20 03:05:39'),(51,2,'green-nature','1aad28825647d02c09a5362c0e0d4e91157c261c.jpg','jpg',228299,0,'2022-05-20 03:05:28','2022-05-20 03:05:39'),(52,2,'lepord-1','9279f29f00060a5585027d3fe3148c318bfc466e.jpg','jpg',330625,0,'2022-05-20 03:05:29','2022-05-20 03:05:38'),(53,2,'nature-2','7d2c341c6c750e4f1e8dd96aceff5af77ebf091f.jpg','jpg',237439,0,'2022-05-20 03:05:29','2022-10-08 04:07:34');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English (US)','en_US','ltr',0,'2022-10-04 05:07:09','2022-10-04 06:20:06'),(2,'हिन्दी','hi_IN','ltr',0,'2022-10-04 05:14:56','2022-10-04 06:02:59');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_03_20_060813_create_galleries_table',1),(6,'2021_07_15_054832_create_tenders_table',1),(7,'2021_07_29_063621_create_trackers_table',1),(8,'2021_07_30_153218_create_documents_table',1),(9,'2021_10_09_152334_create_news_table',1),(10,'2021_10_09_161629_create_news_images_table',1),(11,'2021_12_09_062520_create_events_table',1),(12,'2021_12_09_064502_create_event_images_table',1),(13,'2022_01_20_094518_create_roles_table',1),(14,'2022_02_17_095845_create_contacts_table',2),(15,'2022_10_04_053725_create_languages_table',3),(16,'2022_10_04_125246_add_language_to_news_table',4),(17,'2022_10_06_093005_add_language_to_events_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `language` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`),
  KEY `news_user_id_foreign` (`user_id`),
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,2,'Machmachi leaves for Heavenly adobe','machmachi-tiger','2022-05-11','<p><span style=\"color:#000000; font-family:Arial; font-size:12pt\">वन विहार राष्ट्रीय उद्यान भोपाल की लगभग 11 वर्षीय बाघिन &quot;मचमची&quot; की आज दिनांक 11.05.2022 के प्रातः मृत्यु हो गई है। बाघिन </span><span style=\"font-size:12pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">&ldquo;मचमची&rdquo;</span></span></span><span style=\"font-size:12pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">&nbsp;को दिनांक 24.10.2018 को बांधवगढ टाईगर रिजर्व उमरिया से रेस्क्यू कर वन विहार लाया गया था। उस समय इसकी उम्र लगभग 7-8 वर्ष थी। वन विहार राष्ट्रीय उद्यान में इसे लायन हाउसिंग क्र. 1 में रखा गया था। उक्त बाघिन को वन विहार का वातावरण खूब रास आया तथा वह पूर्ण रूपेण स्वस्थ थी।</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">विगत दो दिवस से मचमची बाघिन ने अपना नियमित भोजन नहीं लिया, ऐसा वह सामान्य रूप से अक्सर करती रही है। कल दिनांक 10.05.2022 को वह देर रात तक अपने हाउसिंग में सामान्य ही थी लेकिन आज प्रातः लगभग 4.45 बजे रात्रि गश्ती दल को वह अपने हाउसिंग में निश्चेत अवस्था में पाई गई। प्रातः ही वन्यप्राणी चिकित्सक वन विहार डॉ. अतुल गुप्ता द्वारा इसका परीक्षण किया जाकर इसे मृत घोषित किया गया।</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">बाघिन &quot;मचमची&rdquo; का पोस्टमार्टम डॉ. अतुल गुप्ता, वन्यप्राणी चिकित्सक वन विहार राष्ट्रीय उद्यान, डॉ. आरती सक्सेना, राज्य पशु रोग अन्वेषण प्रयोगशाला भोपाल, डॉ. प्रवेश भारद्वाज, राज्य पशु चिकित्ससालय भोपाल, डॉ. प्रशांत देशमुख, वाईल्डलाईफ कंजर्वेशन ट्रस्ट एवं डॉ. रजत कुलकर्णी, वाईल्ड लाईफ एस.ओ.एस. वन विहार तथा अन्य सहायक चिकित्सक दल द्वारा संयुक्त रूप से किया गया। मृत बाघिन &quot;मचमची&quot; के पोस्टमार्टम उपरांत उसके आंतरिक अंगों को परीक्षण हेतु स्कूल आफ वाईल्ड लाईफ फॉरंसिक एंड हैल्थ जबलपुर एवं पशु रोग अन्वेषण प्रयोगशाला जहांगीराबाद भोपाल भेजा जा रहा है। मृत बाघिन की मृत्यु का वास्तविक कारण तो पोस्टमार्टम रिपोर्ट आने के पश्चात ही पता चल सकेगा। पोस्टमार्टम उपरांत मृत बाघिन &ldquo;मचमची&quot; का वन विहार राष्ट्रीय उद्यान में वरिष्ठ अधिकारियों एवं अन्य पंचगणों की उपस्थिति में नियमानुसार दाह संस्कार कर दिया गया। &ldquo;मचमची&quot; बाघिन की अचानक मृत्यु के कारण वन विहार में अत्यंत ही शोक का माहौल है। वर्तमान में वन विहार राष्ट्रीय उद्यान में 13 बाघ शेष बचे हैं।</span></span></span></p>','1653034220machmachi-tiger.jpg',0,2,'2022-05-20 02:40:20','2022-10-06 02:34:44'),(2,2,'Machmachi leaves for Heavenly adobe','machmachi-leaves-for-heavenly-adobe','2022-05-11','<p style=\"text-align:justify\">Tigress &quot;Machamchi&quot; who was about 11 years old died on the morning of 11.05.2022. Tigress Machamchi was rescued from Bandhavgarh Tiger Reserve Umaria and brought to Van Vihar on 24.10.2018. At that time her age was about 7-8 years. She was very well acquainted with the environement of Van Vihar and she was completely healthy.<br />\r\nHowever for the past two days, the tigress has not taken her regular food which she has been doing quite often. Till 10.05.2022 late night she was behaving normally in her housing till late night but during the night patrol at around 4.45 am the team found her in an unconscious state in her housing. In the morning she was examined by wildlife doctor Van Vihar Dr. Atul Gupta and declared dead.<br />\r\nPost mortem of tigress &quot;Machamchi&quot; was conducted by the team comprising of Dr. Atul Gupta, wildlife doctor Van Vihar National Park, Dr. Aarti Saxena, State Animal Disease Investigation Laboratory, Bhopal, Dr. Pravesh Bhardwaj, State Veterinary Hospital, Dr. Prashant Deshmukh, Wildlife Conservation Trust and Dr. Rajat Kulkarni, Wild Life S.O.S. Van Vihar and other assistant medical team. After the post-mortem, her internal organs are being sent to School of Wild Life Forensic and Health, Jabalpur and Animal disease investigation laboratory Jahangirabad, Bhopal for further examination. The actual cause of death of the dead tigress will be known only after the post-mortem report. &quot;Machamchi&quot; was cremated in Van Vihar National Park in the presence of senior officials and other member as per the rules after the medical examination. In general entire Van Vihar team is saddened due to the sudden death of &quot;Machamchi&quot; tigress. Presently there are 13 tigers left in Van Vihar National Park.</p>','1653037027machmachi-tiger.jpg',0,1,'2022-05-20 03:27:07','2022-10-06 02:34:26'),(3,2,'Treatment of Leopard Cub in Van Vihar National Park Zoo','treatment-of-leopard-cub-in-van-vihar-national-park-zoo','2022-09-03','<p style=\"text-align:justify\">In the midnight of 31.08.2022, a leopard cub was brought in a critically injured condition by the rescue team of Satpura Tiger Reserve from Amla range of Betul, South Forest. On 03.09.2022, a detailed in-depth examination was done after giving him anaesthesia. Diagnosis through X-rays was done and blood samples were also taken. In the X-ray, it was found that the backbone &amp; the spinal cord is broken, due to which its back part is paralyzed. Intensive health test was done under the leadership of Dr. Atul Gupta by Dr. Sunil Kumar Tumdia, Dr. Rajat Kulkarni and Dr. Amit and leopard is being treated.</p>','1662551993main.jpg',0,1,'2022-09-07 06:29:53','2022-10-06 02:34:18'),(4,2,'वन विहार राष्ट्रीय उद्यान चिड़ियाघर में तेंदुए के शावक का उपचार','treatment-of-leopard-cub-in-van-vihar-national-park-zoo-hi','2022-09-03','<p style=\"text-align:justify\">वन विहार राष्ट्रीय उद्यान भोपाल दिनांक 31.08.2022 की मध्य रात्रि में दक्षिण वनमण्डल बैतूल के आमला परिक्षेत्र के सतपुडा टाइगर रिजर्व की रेस्क्यू टीम द्वारा एक तेन्दुआ शावक गंभीर घायल अवस्था में लाया गया था। जिसका आज दिनांक 03.09.2022 को निश्चेतन कर विस्तृत गहन परिक्षण किया गया। जिसके तहत एक्स-रे किया गया तथा रक्त के नमूने भी लिये गये। एक्स-रे में पाया कि उक्त तेन्दुआ शावक की रीढ़ की हड्डी टूटी हुई है तथा मेरूदण्ड भी टूटा हुआ है जिससे उसका पिछला हिस्सा लकवा ग्रस्त है। उक्त गहन स्वास्थ्य परिक्षण डॉ0 अतुल गुप्ता के नेतृत्व में डॉ सुनील कुमार तुमडिया, डॉ० रजत कुलकर्णी एवं डॉ0 अमित द्वारा किया गया। जिसका उपचार किया जा रहा।</p>','1662618709main.jpg',0,2,'2022-09-08 01:01:49','2022-10-06 02:34:10'),(5,2,'विश्व पर्यावरण दिवस-2022','world-environment-day-2022','2022-06-04','<p style=\"text-align:justify\">वनविहार रा.उ.मे विश्व पर्यावरण दिवस के अवसर दिनांक 05/06/2022 पर 7 बजे से पक्षी दर्शन,स्पाट क्विज,पौधा रोपण आदि कार्यक्रम आयोजित किये जाएंगे, जिसमें वनविहार, बायोडायवर्सिटी बोर्ड, भोपाल बर्डस आदि के अधिकारियों- विद्यार्थियों के साथ विषय विशेषज्ञ उपस्थित रहेंगे।</p>','1662968829world-environment-day.jpg',0,2,'2022-09-12 02:17:09','2022-10-06 02:34:01'),(6,2,'विश्व पर्यावरण दिवस पर वन विहार राष्ट्रीय उद्यान में जन जागरूकता कार्यक्रम','public-awareness-program-at-van-vihar-national-park-on-world-environment-day','2022-06-05','<p style=\"text-align:justify\"><span style=\"font-size:16px\">इस वर्ष आजादी के अमृत महोत्सव अभियान के अंतर्गत ही 5 जून 2022 को विश्व पर्यावरण दिवस के अवसर पर जन मानस में पर्यावरण के प्रति जागरूकता लाने के उददेश्य से वन विहार राष्ट्रीय उद्यान भोपाल में जन चेतना कार्यक्रम का आयोजन वन विहार, जैव विविधता बोर्ड एवं किताबखाना एन. जी.ओ. द्वारा संयुक्त रूप से किया गया। इस अवसर पर पर्यावरण प्रेमियों एवं छात्र/छात्राओं हेतु पक्षी अवलोकन शिविर का आयोजन किया गया तथा विद्यार्थियों हेतु भाषण प्रतियोगिता, पोस्टर मेकिंग, खुला प्रश्न मंच प्रतियोगिता भी आयोजित की गई। इस वर्ष विश्व पर्यावरण दिवस का मुख्य विषय &quot;Living sustainably in harmony with nature&quot; का समाज में संदेश प्रसारित करना है। तथा कैम्पेन का स्लोगन Only One Earth रखा गया है।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">उक्त अवसर पर म.प्र. जैव विविधता बोर्ड के सदस्य सचिव एवं प्रधान मुख्य वन सरक्षक डॉ. अतुल श्रीवास्तव, संचालक वन विहार श्री एच.सी.गुप्ता, उप वन संरक्षक एवं सहायक संचालक श्री ए.के.जैन, सहायक सदस्य सचिव जैव विविधता बोर्ड डॉ. बकल लॉड तथा वन विहार एवं जैव विविधता बोर्ड के अधिकारी/कर्मचारी उपस्थित रहे। कार्यक्रम में विभिन्न विद्यालयों /महाविद्यालय/ एन.एस. एस. के लगभग 225 विद्यार्थियों तथा लगभग 75 पर्यावरण प्रेमियों ने भाग लिया। श्री ए.के.जैन, सहायक संचालक द्वारा कार्यक्रम की विषय वस्तु पर प्रकाश डाला गया तथा कार्यक्रम का संचालन किया गया। इस अवसर पर उपस्थित जन समूह को पर्यावण संरक्षण करने एवं प्रदूषण न फैलाने हेतु शपथ दिलाई गई। खुला प्रश्न मंच का संचालन डॉ. सुदेश वाघमारे से.नि. उप वनसंरक्षक द्वारा किया गया एवं विशिष्ट अतिथियों द्वारा 20 विद्यार्थियों / पर्यावरण प्रेमियों को पुरस्कृत किया गया। इस दौरान प्रतिभागियों को वन विहार की जैव विविधता से भी परिचय कराया गया।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">साथ ही प्रतिभागियों को भोपाल बर्ड्स की डॉ. संगीता राजगीर एवं मो. खालिक द्वारा पक्षी दर्शन कराया गया एवं वन विहार में पाये जाने वाले विभिन्न जातियों के पक्षियों की जानकारी दी गई इसमें अजीम प्रेमजी फाउंडेशन संस्था के सदस्यों द्वारा भी भाग लिया गया।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">कार्यक्रम के अंत में श्री ए.के.जैन, उप वनसंरक्षक द्वारा उपस्थित प्रतिभागियों, शिक्षकों अभिभावकों, पर्यावरण प्रेगियों तथा उपस्थित अधिकारियों/कर्मचारियों का कार्यक्रम में सम्मिलित होने हेतु आभार व्यक्त किया गया। दोनों प्रवेश द्वारों पर पर्यटकों के मध्य संदेश प्रसारित हेतु पर्यावरण फ्रेंडली बेनर लगाये गये तथा आगंतुक पर्यटकों को पर्यावरण महत्व एवं प्रदूषण के नियंत्रण हेतु सहभागिता करने हेतु सहयोग मांगा गया। इस अवसर पर अधिकारियों/कर्मचारियों द्वारा सांकेतिक रूप से पौधारोपण का कार्य भी किया गया।</span></p>','1662969101main.jpg',0,2,'2022-09-12 02:21:41','2022-10-06 02:33:45'),(7,2,'वन विहार राष्ट्रीय उद्यान में नर बाघ \"शौर्य\" का बचाव','rescue-of-male-tiger-shaurya-in-van-vihar-national-park','2022-06-07','<p style=\"text-align:justify\"><span style=\"font-size:16px\">आज दिनांक 07.06.2022 को प्रातः 10.00 बजे नर बाघ शौर्य अपने बाड़े से वन विहार के खुले क्षेत्र में बाहर निकल गया था। सूचना प्राप्त होते ही प्रबंधन द्वारा वन विहार से समस्त पर्यटकों को सुरक्षित बाहर निकालने की कार्यवाही की गई। दोनों प्रवेश द्वारों को पर्यटकों हेतु तत्काल बंद किया गया। नर बाघ की तलाश करने हेतु चार दलों का गठन कर अलग - अलग क्षेत्र में खोज करने हेतु भेजा गया। बाघ खोजने हेतु निकले एक दल जिसमें श्री शर्मानंद गैरे वनरक्षक एवं अन्य सदस्य सम्मिलित थे उन्हें ये &quot;शौर्य&#39; बाघ बारासिंगा बाडे के किनारे छाँव में लेटा हआ मिला। स्थल की जानकारी प्राप्त होते ही समस्त गठित दलों को वाहन सहित मौके पर पहुँचने हेतु निर्देश दिये गये तथा वाहनों से स्थल को चारों ओर से घेरा गया ताकि बाघ किसी भी स्थिति में बाहर की ओर न जा सके। तत्पश्चात् वन्यप्राणी चिकित्सक डॉ. अतल गप्ता द्वारा उसे टेंक्यलाइज कर बेहोश किया गया । निश्चेत बाघ को आवश्यक सावधानी बरती जाकर टाइगर केज में रख कर एंटीडोट दिया गया तथा उसे रेस्क्यू वाहन से रेस्क्यू सेंटर में उसकी हाउसिंग में वापस पहुंचा दिया गया। उक्त घटना के दौरान किसी भी प्रकार की कोई क्षति नहीं हयी। प्रथम दृष्टया जू कीपर की गलती से इन्क्लोजर का गेट खुल जाने के कारण यह बाघ &quot;शौर्य बाहर निकला था।वनविहार प्रबंधन ने जांच शुरू कर दी है, दोषियों को नियमानुसार दण्डित किया जायेगा।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">उक्त नर बाघ को अत्यंत गंभीर अवस्था में दिनांक 13.01.2021 को हरदा से रेस्क्यू कर उपचार हेतु वन विहार लाया गया था तथा पूर्णतः स्वस्थ होने के उपरांत इसको सतपुड़ा टाइगर रिजर्व में दिनांक 09.03.2021 को प्राकृतिक रहवास में छोड़ा गया था। अपरिहार्य कारणवश उक्त नर बाघ शौर्य को पुनः रेस्क्यू कर दिनांक 16.06.2021 को सतपुड़ा टाइगर रिजर्व से वापस वन विहार लाया गया था।</span></p>','1662969309Shaurya.jpg',0,2,'2022-09-12 02:25:09','2022-10-06 02:33:26'),(8,2,'वन विहार की मादा शेर \"वरु\" की मौत','the-death-of-the-female-lion-varu-of-van-vihar','2022-06-20','<p style=\"text-align:justify\"><span style=\"font-size:16px\">वन विहार राष्ट्रीय उद्यान के रेस्क्यू सेंटर में रखी गई मादा सिंह &quot;वरू&quot; की आज दिनांक 20.06.2022 को प्रातः मृत्यु हो गई। मादा सिंह वरू को गुवाहाटी जू असम से दिनांक 14.04.2017 को लगभग 10 वर्ष की उम्र में वन विहार राष्ट्रीय उद्यान भोपाल लाया गया था। वर्तमान में। उसकी उम्र लगभग 15 वर्ष हो चुकी थी।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">उक्त मादा सिंह वरू दो दिन से बीमार होने की वजह से वन विहार के वन्य प्राणी चिकित्सक द्वारा उसका उपचार किया जा रहा था। साथ ही मादा सिंह वरू ने पिछले दो दिन से अपना नियमित भोजन लेना भी बंद कर दिया था।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">मृत मादा सिंह वरू का पोस्टमार्टम डॉ. एस.के.तुमड़िया, राज्य पशु चिकित्ससालय भोपाल, डॉ. प्रशांत देशमुख, वाईल्डलाईफ कंजर्वेशन ट्रस्ट एवं डॉ. रजत कुलकर्णी, वाईल्ड लाईफ एस.ओ. एस. वन विहार द्वारा संयुक्त रूप से किया गया। मृत मादा सिंह वरू के पोस्टमार्टम उपरांत उसके आंतरिक अंगों को परीक्षण हेतु स्कूल आफ वाईल्ड लाईफ फॉरंसिक एंड हैल्थ जबलपुर एवं पशु रोग अन्वेषण प्रयोगशाला जहांगीराबाद भोपाल भेजा जा रहा है। मृत मादा सिंह वरू की मृत्यु का वास्तविक कारण तो पोस्टमार्टम रिपोर्ट आने के पश्चात ही पता चल सकेगा। पोस्टमार्टम उपरांत मृत मादा सिंह का शवदाह संचालक वन विहार राष्ट्रीय उद्यान एवं अन्य उपस्थित अधिकारियों/कर्मचारियों के समक्ष किया गया। वर्तमान में वन विहार राष्ट्रीय उद्यान में 02 सिंह शेष बचे हैं।</span></p>','1662969667main.jpg',0,2,'2022-09-12 02:31:07','2022-10-06 02:33:10'),(9,2,'Jungle Safari closes in Van Vihar National Park and Zoo','jungle-safari-closes-in-van-vihar-national-park-and-zoo','2022-07-25','<p style=\"text-align:justify\"><span style=\"font-size:16px\">Jungle Safari of the day&quot; operating in the interior areas of Van Vihar National Park &amp; Zoo has been closed from 22.07.2022 till further orders due to excessive rainfall and damage to forest roads keeping safety of tourists on priority.</span></p>','1662969889Safari-Booking-Closed.png',0,1,'2022-09-12 02:34:49','2022-10-06 02:32:54'),(10,2,'वन विहार नेशनल पार्क और चिड़ियाघर में जंगल सफारी बंद','jungle-safari-closes-in-van-vihar-national-park-and-zoo-hi','2022-07-25','<p style=\"text-align:justify\"><span style=\"font-size:16px\">वन विहार राष्ट्रीय उद्यान, जू के आंतरिक क्षेत्रों में संचालित &quot;दिन की जंगल सफारी&rdquo; अत्यधिक वर्षा होने से एवं वनमार्गों के क्षतिग्रस्त होने के कारण पर्यटकों की सुरक्षा की दृष्टि से दिनांक 22.07.2022 से आगामी आदेश तक बंद की गई है।</span></p>','1662970137Safari-Booking-Closed.png',0,2,'2022-09-12 02:38:57','2022-10-06 02:32:45'),(11,2,'Pancham Tiger departs for Jamnagar, Gujarat','pancham-tiger-departs-for-jamnagar-gujarat','2022-07-26','<p style=\"text-align:justify\"><span style=\"font-size:16px\">On 26.07.2022 &ldquo;Pancham Tiger&rdquo; Greens Zoological Rescue and Rehabilitation Center in Van Vihar National Park- Zoo was handed over in a healthy condition to Jamnagar Gujarat. This fifth tiger was rescued from &quot;Kanha Tiger Reserve&quot; and brought to Van Vihar on 17.12.2020, at that time its age was 3.5 years. This tiger was unable to hunt because its canines were damaged for some unknown reason. The permission of the Principal Chief Conservator of Forests and Chief Wildlife Custodian of Madhya Pradesh and Central Zoo Authority was obtained for 1 tiger and 3 leopards, in the same manner, &quot;Five Tiger&quot; was in a healthy condition &quot;Greens Ghulological Rescue and Rehabilitation Center Jamnagar, Gujarat&#39;s team wildlife doctor Dr. Ankush Dubey and Mr. Akshay Shah has left for Jamnagar, Gujarat. It will take about 24 hours to reach there. Now there are 13 tigers left in Van Vihar.</span></p>','1662970864main.jpg',0,1,'2022-09-12 02:51:04','2022-10-06 02:45:08'),(12,2,'पंचम टाइगर जामनगर, गुजरात के लिए रवाना','pancham-tiger-departs-for-jamnagar-gujarat-hi','2022-07-26','<p style=\"text-align:justify\"><span style=\"font-size:16px\">वन विहार राष्ट्रीय उद्यान- जू में दिनांक 26.07.2022 को &quot;पंचम टाइगर&quot; ग्रीन्स जूलॉजिकल रेस्क्यू एंड रिहेविलीटेशन सेंटर जामनगर गुजरात को स्वस्थ हालत में सौंपा गया। इस पंचम टाइगर को &quot; कान्हा टाइगर रिजर्व&quot; से रेस्क्यू कर 17.12.2020 को वन विहार लाया गया था तत्समय इसकी उम्र 3.5 वर्ष थी। यह टाइगर शिकार करने में असमर्थ था क्योंकि इसके केनाइन किसी अज्ञात कारण से क्षतिग्रस्त हो चुके थे। प्रधान मुख्य वन संरक्षक एवं मुख्य वन्यप्राणी अभिरक्षक मध्यप्रदेश एवं केंद्रीय चिड़ियाघर प्राधिकरण की अनुमति 1 बाघ एवं 3 तेंदुऐ की प्राप्त हुई थी इसी तारतम्य में &quot; पंचम टाइगर&quot; को स्वस्थ हालत में &quot; ग्रीन्स घुलाजिकल रेस्क्यू एंड रिहेविलीटेशन सेंटर जामनगर गुजरात की टीम वन्यप्राणी चिकित्सक डॉ. अंकुश दुबे एवं श्री अक्षय शाह के नेतृत्व में इसे लेकर जामनगर गुजरात को रवाना हो गई है। इसे वहाँ पहुंचने में लगभग 24 घंटे लगेंगे। वन विहार में अब 13 टाइगर शेष बचे हैं।</span></p>','1662971037main.jpg',1,2,'2022-09-12 02:53:57','2022-10-08 07:12:04');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `news_id` bigint unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_images_news_id_foreign` (`news_id`),
  CONSTRAINT `news_images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_images`
--

LOCK TABLES `news_images` WRITE;
/*!40000 ALTER TABLE `news_images` DISABLE KEYS */;
INSERT INTO `news_images` VALUES (1,3,'16625519931.jpg','2022-09-07 06:29:53','2022-09-07 06:29:53'),(2,3,'16625519932.jpg','2022-09-07 06:29:53','2022-09-07 06:29:53'),(3,3,'16625519933.jpg','2022-09-07 06:29:53','2022-09-07 06:29:53'),(4,3,'16625519934.jpg','2022-09-07 06:29:53','2022-09-07 06:29:53'),(5,3,'16625519945.jpg','2022-09-07 06:29:54','2022-09-07 06:29:54'),(6,4,'16626187091.jpg','2022-09-08 01:01:49','2022-09-08 01:01:49'),(7,4,'16626187092.jpg','2022-09-08 01:01:49','2022-09-08 01:01:49'),(8,4,'16626187093.jpg','2022-09-08 01:01:49','2022-09-08 01:01:49'),(9,4,'16626187094.jpg','2022-09-08 01:01:49','2022-09-08 01:01:49'),(10,4,'16626187095.jpg','2022-09-08 01:01:49','2022-09-08 01:01:49'),(11,6,'16629691011.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(12,6,'16629691022.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(13,6,'16629691023.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(14,6,'16629691024.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(15,6,'16629691025.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(16,6,'16629691026.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(17,6,'16629691027.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(18,6,'16629691028.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(19,6,'16629691029.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(20,6,'166296910210.jpg','2022-09-12 02:21:42','2022-09-12 02:21:42'),(21,8,'16629696671.jpg','2022-09-12 02:31:07','2022-09-12 02:31:07'),(22,8,'16629696672.jpg','2022-09-12 02:31:07','2022-09-12 02:31:07'),(23,9,'1662969889Notice.jpg','2022-09-12 02:34:49','2022-09-12 02:34:49'),(24,10,'1662970137Notice.jpg','2022-09-12 02:38:57','2022-09-12 02:38:57'),(25,11,'16629708641.jpg','2022-09-12 02:51:04','2022-09-12 02:51:04'),(26,11,'16629708642.jpg','2022-09-12 02:51:04','2022-09-12 02:51:04'),(27,11,'16629708643.jpg','2022-09-12 02:51:04','2022-09-12 02:51:04'),(28,12,'16629710371.jpg','2022-09-12 02:53:57','2022-09-12 02:53:57'),(29,12,'16629710372.jpg','2022-09-12 02:53:57','2022-09-12 02:53:57'),(30,12,'16629710373.jpg','2022-09-12 02:53:57','2022-09-12 02:53:57');
/*!40000 ALTER TABLE `news_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Server Admin','server','2022-02-07 05:06:54','2022-02-07 05:06:54'),(2,'Super Admin','super','2022-02-07 05:06:54','2022-02-07 05:06:54'),(3,'Admin','admin','2022-02-07 05:06:54','2022-02-07 05:06:54');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenders`
--

DROP TABLE IF EXISTS `tenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date` datetime NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenders_slug_unique` (`slug`),
  KEY `tenders_user_id_foreign` (`user_id`),
  CONSTRAINT `tenders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenders`
--

LOCK TABLES `tenders` WRITE;
/*!40000 ALTER TABLE `tenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `tenders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trackers`
--

DROP TABLE IF EXISTS `trackers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trackers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `hits` int NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `browser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trackers`
--

LOCK TABLES `trackers` WRITE;
/*!40000 ALTER TABLE `trackers` DISABLE KEYS */;
/*!40000 ALTER TABLE `trackers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Server Admin','botadmin@vvnp.org',NULL,'$2y$10$h1l1Uo5SdCRQJdiDDvs6huRUadap6blaxi9c2ijW.vGq1tS.YBdSe',0,NULL,'2022-02-07 05:07:00','2022-02-07 05:07:00'),(2,2,'Super Admin','super@vvnp.org',NULL,'$2y$10$MIW2WD7dfFmDO1YyBJPgHuV7OJW33LhdC.WiVOeoBYpX4KYlIboSC',0,NULL,'2022-02-07 05:07:00','2022-09-08 04:43:54'),(3,3,'Admin VVNP','admin@vvnp.org',NULL,'$2y$10$F.1KqMSpHkSiBI5xHzslfuf2tww4FwlBVqqD.pxjLk4UrZEyeqWFi',0,NULL,'2022-02-07 05:07:00','2022-10-08 07:21:20'),(4,3,'Vaibhav','vaibhavblueocean@gmail.com',NULL,'$2y$10$0kGkpIEBGVc.bGeQWpZXIOg5CVT3xrnMRFOlNFNMt41jYMjTO5khi',1,NULL,'2022-10-08 07:30:06','2022-10-08 07:32:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-08 18:42:51
