-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: FinalProject
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercises` (
  `exercise_name` varchar(255) NOT NULL,
  `muscle` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `exercise_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weights` varchar(3) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`exercise_id`),
  UNIQUE KEY `name` (`exercise_name`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercises`
--

LOCK TABLES `exercises` WRITE;
/*!40000 ALTER TABLE `exercises` DISABLE KEYS */;
INSERT INTO `exercises` VALUES ('Push ups','Chest','http://www.bodybuilding.com/exercises/detail/view/name/pushups',6,'No','Place your hands shoulder width apart and create a plank position with arms fully extended. Keeping a flat back, bend your arms until they reach a 90 degrees angle and go back up'),('Sit ups','Abdominals','http://30dayfitnesschallenges.com/how-to-do-sit-ups/',7,'No','Lay on your back with your knees bent. Pivoting at the hips, sit up until your body is a perpendicular to the ground. Then return to back on the ground. '),('Leg lifts','Abdominals','http://www.wikihow.com/Do-Leg-Lifts',8,'No','Lie on your back with your hands under your pelvic bone. Keeping your legs straight, lift them up to perpendicular to your body, and then slowly return them to just about the ground. '),('Triangle push ups','Triceps','',9,'No','Do a push up with your hands in a triangle instead of shoulder width'),('Bicep curls','Biceps','http://www.bodybuilding.com/exercises/detail/view/name/dumbbell-bicep-curl',10,'Yes','With a weight in your hand and forearms facing up , curl your arm. Then, slowly return to the original position        '),('Air bike','Abdominals','http://www.bodybuilding.com/exercises/detail/view/name/air-bike',16,'No','While lying on your back, place your hands behind your head, like a sit up. Bring your knees up and bring your elbows down so they touch in the middle '),('Butt ups','Abdominals','http://www.bodybuilding.com/exercises/detail/view/name/butt-ups',17,'No','Start in a plank position. Pinch your abs and lift your butt up. Slowly return to the starting position'),('Hammer curls','Biceps','http://www.bodybuilding.com/exercises/detail/view/name/alternate-hammer-curl',18,'Yes','Start with weights in each hand, similar to a bicep curl, except palms facing inwards. Curl your arms and exhale. Then return to the original position        '),('Calf circles','Calves','http://www.bodybuilding.com/exercises/detail/view/name/ankle-circles',19,'No','Lift one of your feet up and draw circles with them in the air.'),('Barbell seated calf raises','Calves','http://www.bodybuilding.com/exercises/detail/view/name/barbell-seated-calf-raise',20,'Yes','Sit down on a bench and place the ball of your feet on a slightly elevated surface. Have a friend place a barbell 3 inches above your knees. Stretch your calves as high as possible, and then return to the original position.'),('Dumbbell calf raises','Calves','http://www.bodybuilding.com/exercises/detail/view/name/calf-raise-on-a-dumbbell',21,'Yes','Grab a sturdy object. Place the middle of one foot on the handle of the dumbbell. Roll your foot so that the ball is now on the handle. Then return to the original position\r\nNOTICE: BE CAUTIOUS'),('Calf raises','Calves','http://www.wikihow.com/Do-Calf-Raises',22,'No','Stand with the balls of your feet on the edge of an elevated platform. Then, stand as high as you can, stretching your calves. Then return to the original position. '),('Alternating floor press','Chest','http://www.bodybuilding.com/exercises/detail/view/name/alternating-floor-press',23,'Yes','Lay on your back with dumbbells in each hand, arms fully extended above your shoulder. Lower one dumbbell to your chest, and then raise it back up to the original position. Repeat with the other dumbbell'),('Decline push up','Chest','http://www.bodybuilding.com/exercises/detail/view/name/decline-push-up',24,'No','Lie on the floor face down in push up position (arms slightly wider than shoulder-width apart). Place your feet on an elevated bench. Lower yourself until your chest almost touches the floor, and then return to the original position. '),('Dumbbell flyes','Chest','http://www.bodybuilding.com/exercises/detail/view/name/dumbbell-flyes',25,'Yes','Lie down on your back and use your thighs to help lift the dumbbells above your shoulder, elbows not locked. This is your starting position. Move the dumbbells in a wide arc until you look like a plane. Then return to starting position'),('Incline dumbbell press','Chest','http://www.bodybuilding.com/exercises/detail/view/name/incline-dumbbell-press',26,'Yes','Lie back on an incline plane with a dumbbell in each hand. Raise your dumbbells to shoulder with apart, hands facing away from your body. Fully extend them upwards, and then return to the original position.          '),('Stomach flutter kicks','Glutes','http://www.bodybuilding.com/exercises/detail/view/name/flutter-kicks',27,'No','Lie on your stomach on a bench with legs hanging off and body straight (arms should be gripping the bench). Keeping your legs straight, alternate between lifting your left and right legs up.         '),('Glute kickbacks','Glutes','http://www.bodybuilding.com/exercises/detail/view/name/glute-kickback',28,'No','Kneel on the floor and bend at the hips with your arms extended out in front of your shoulders on the floor. Maintaining a 90 degree angle, lift one of your legs so that your quad is parallel with the floor and your calf is perpendicular. Repeat.        '),('Squat','Glutes','http://www.bodybuilding.com/exercises/detail/view/name/bodyweight-squat',29,'No','Stand with your feet shoulder width apart. Pretend as if you are sitting down on a chair, making sure your knees are directly above your feet.        '),('Chin ups','Lats','http://www.bodybuilding.com/exercises/detail/view/name/chin-up',30,'No','Grab a bar with hands facing towards your body. Start with your arms fully extended, and then, keeping your torso still, pull yourself up until your chin passes the bar. Return to fully extended'),('Pull ups','Lats','http://www.bodybuilding.com/exercises/detail/view/name/pullups',31,'No','Grab a bar with hands facing away from your body. Start with your arms fully extended, and then, keeping your torso still, pull yourself up until your chin passes the bar. Return to fully extended'),('Wide-grip pull ups','Lats','http://www.bodybuilding.com/exercises/detail/view/name/wide-grip-rear-pull-up',32,'No','Grab a bar with hands facing away from your body. Start with your arms fully extended, more than shoulder width apart, and then, keeping your torso still, pull yourself up until your chin passes the bar. Return to fully extended'),('Hyperextension','Lower Back','http://www.bodybuilding.com/exercises/detail/view/name/hyperextensions-with-no-hyperextension-bench',33,'No','Lie on a bench your someone holding your feet and your torso hanging off the bench. Cross your arms and lower your body slightly. Then return to the original position        '),('Superman','Lower Back','http://www.bodybuilding.com/exercises/detail/view/name/superman',34,'No','Lie on your stomach with arms extended in front of you. Lift your legs and chest as high as possible and hold for two seconds. Then, return to your original position'),('Pelvic tilt into bridge','Lower Back','http://www.bodybuilding.com/exercises/detail/view/name/pelvic-tilt-into-bridge',35,'No','Lie on your back with your knees bent and feet flat on the floor. Arch your bank into a mini-bridge, and then return to the original position.         '),('Bench jump','Quads','http://www.bodybuilding.com/exercises/detail/view/name/bench-jump',36,'No','Start in a mini squat position. Swing your arms to jump over a block or bench. Turn around and repeat        '),('Lunges','Quads','http://www.bodybuilding.com/exercises/detail/view/name/bodyweight-walking-lunge',37,'No','Begin with your hands on your hips standing up. Take one step forward and lower yourself until your back knee touches the ground and your front knee is at a 90 degree angle. Stand back up and repeat.         '),('Burpees','Quads','http://www.bodybuilding.com/exercises/detail/view/name/burpee',38,'No','Begin standing with your legs shoulder-width apart. Place your hands on the floor and kick your legs back so you end up in a push up position. Jump your feet to under your hips and then jump into the air. Repeat'),('Double butt kcik','Quads','http://www.bodybuilding.com/exercises/detail/view/name/double-leg-butt-kick',39,'No','Start in a squat position. Do a mini squat and jump as high as possible. While in the air, kick your heels to touch your butt. Land on your feet and repeat.'),('Mountain climber','Quads','http://www.bodybuilding.com/exercises/detail/view/name/mountain-climbers',40,'No','Start in push-up position and bring one knee up to under your chest. This is your starting position. Rapidly alternate your legs for 30 seconds. '),('Bench dips','Triceps','http://www.bodybuilding.com/exercises/detail/view/name/bench-dips',41,'No','Sit against a bench. Hold the edges of your bench with your hands and fully extend. Then, using your triceps, lower your body until your butt is almost touching the ground. Then, fully extend your arms.         '),('Body ups','Triceps','http://www.bodybuilding.com/exercises/detail/view/name/body-up',42,'No','Start in a plank position. Pressing your hands into the floor, lift your body until your arms fully extend. Slowly return to the original position.         '),('Dumbbell tricep extension','Triceps','http://www.bodybuilding.com/exercises/detail/view/name/dumbbell-one-arm-triceps-extension',43,'Yes','Grab a dumbbell and place your arm behind your head and bend at the elbow to create a triangle. Fully extend your elbow to above your shoulder. Return to the original position');
/*!40000 ALTER TABLE `exercises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `routine`
--

DROP TABLE IF EXISTS `routine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `routine` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `workout_id` int(10) NOT NULL,
  `exercise_id` int(10) NOT NULL,
  `position` int(10) NOT NULL,
  `numsets` int(10) NOT NULL,
  `reps` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `routine`
--

LOCK TABLES `routine` WRITE;
/*!40000 ALTER TABLE `routine` DISABLE KEYS */;
INSERT INTO `routine` VALUES (2,5,7,0,4,-1),(3,5,7,0,-2,-1),(4,5,6,0,1,1),(5,5,6,0,345,2),(6,5,8,0,1,1),(7,5,8,0,1,1),(8,5,8,0,1,1),(9,5,6,0,3,3),(10,5,6,0,3,3),(11,5,6,0,3,3),(12,5,6,0,3,3),(13,5,7,0,3,4),(14,5,7,0,3,4),(15,5,7,0,3,4),(16,5,7,0,3,4),(17,5,7,0,3,4),(18,5,7,0,3,4),(19,5,7,0,3,4),(20,5,7,0,3,4),(21,5,7,0,3,4),(22,6,8,0,4,6),(23,6,8,0,4,6),(24,6,8,0,4,6),(25,6,8,0,4,6),(26,6,8,0,4,6),(27,6,8,0,4,6),(28,6,8,0,4,6),(29,6,6,0,3,2),(30,6,6,0,3,2),(31,7,7,0,3,12),(32,7,7,0,3,2),(33,7,9,0,2,4),(34,7,9,0,2,4),(35,7,9,0,2,4),(36,8,7,0,5,5),(37,7,6,0,34,2),(38,9,7,0,100,100),(39,10,6,0,1,300),(40,12,14,0,2,2),(41,11,10,0,4,2),(42,11,9,0,89,788),(43,16,10,0,2,11),(44,19,7,0,3,12),(45,11,17,0,22,3),(46,11,17,0,22,3),(47,11,17,0,22,3),(48,11,7,0,1,1),(49,11,7,0,1,1),(50,12,7,0,1,1),(51,12,7,0,1,1),(52,12,7,0,1,1),(53,11,17,0,2,1),(54,11,7,0,2,1),(55,11,6,0,2,1),(56,11,7,0,1,1),(57,21,17,0,4,2);
/*!40000 ALTER TABLE `routine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'skroob','$2y$10$Ux8mm/O85ODsfHxON4/UQOowmOzqGX/Iu2QHu4CsiUBh..uu3ejmm'),(2,'darwin','$2y$10$5z3TsAMr8Cg7h9mehMLQ8upER65NYbuKX62Bxb64KGDJKTqVLtbJ.'),(3,'l','$2y$10$xHYA/6f53HcsI0YUvrU1tOqH8hgue3CePdFLJOU0sQnCZpv4ohSlK'),(4,'nick','$2y$10$d5nRDqrbBXJZj7.PvHOl1uqd/clRuJFf4kWJ34STxjc0BZOCvzaNW'),(5,'anton','$2y$10$n4aqwVbaBMaPvhsgjsdj/.E6e0pV1vIvVMV4O4.gB4P4jaOBXY6wW'),(6,'bovey','$2y$10$Nq.CDBhYDl0xdaq2ssc16eQFVypEhANMEr5VIjp9CFV3dblL3E01C'),(7,'justa','$2y$10$xhsfXtAboSeWEk4oj/Zpmu1Y338695g.upieecM5qJ.gILtvbFw1e'),(8,'Darwin2','$2y$10$wJXGlZ.fP0CuDRVqZ9G8EONgdIDBB73kq0EC.DAnONhH7Ovx3tcWO'),(9,'curtis','$2y$10$ramqjyo4L23fbFSn5LCMkuQ2nqJNqAyRjLhdCq3SCtaBvwUaIRrpu'),(10,'shannon','$2y$10$xp2K/JNMgINUfiBF09Kz1uDXoSZLc8c5uqsMI9uNc0v4k7vvEDvm2'),(11,'siqi','$2y$10$oKZ0oUS6Wws2Lp290DogtOmgbUMigqwUlDzFpljpcmv5/SvWdymNS'),(12,'curtishsu','$2y$10$9VQ2mK48vwl9/3R1eMtGKu9/hnpIy2Y2z7XENB0Uwhrgjv4dg6Zzy'),(13,'Joseph','$2y$10$8.thxaj1s6f9kJ/wgIFdxunDpgUoYnRpQ/SJ.lzTSFYjalb4HhlC6'),(14,'djm','$2y$10$OJ15NXie02zb7zJtG2qIYukIPfixvLE4m5u77/StUP9tpe2t/VKaS');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workouts`
--

DROP TABLE IF EXISTS `workouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workouts` (
  `workout_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `workout_name` varchar(255) NOT NULL,
  `intensity` varchar(6) NOT NULL,
  PRIMARY KEY (`workout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workouts`
--

LOCK TABLES `workouts` WRITE;
/*!40000 ALTER TABLE `workouts` DISABLE KEYS */;
INSERT INTO `workouts` VALUES (1,8,'baby        ','hi',''),(2,9,'baby        ','hi',''),(3,9,'You lie in bed all day        ','super intense stuff!',''),(4,9,'hi        ','baby',''),(5,10,'do a backflip\r\n        ','backflip',''),(6,10,'fdds        ','sfds',''),(7,11,'burning all my fat off in 5 minutes        ','abs on fire',''),(8,11,'We go to swim practice','Test','High'),(9,11,'sit in math all day        ','spencers','High'),(10,11,'Inteval training','Rana','High'),(11,1,'teehee        ','cynthia','Low'),(12,1,'JUST GAINZZZZZZZ','gainszilla','Low'),(13,12,'        ','Abs and shoulders','0'),(14,12,'        ','Lie in bed all day','0'),(15,12,'        ','Cry more','0'),(16,12,'','cry less?','Low'),(17,12,'        ','cry a bit more','Low'),(18,12,'just sit around','Darwin work out','Low'),(19,13,'stay up late. eat a burrito','ashims','High'),(20,1,'        ','h','Low'),(21,14,'Abs all day!!        ','Rock hard abs','High');
/*!40000 ALTER TABLE `workouts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-05  2:38:27
