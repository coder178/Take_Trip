-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 12:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `best`
--

CREATE TABLE `best` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pinfo` text NOT NULL,
  `pcost` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best`
--

INSERT INTO `best` (`id`, `pname`, `pinfo`, `pcost`, `img`, `duration`) VALUES
(1, 'Taj Mahal', 'The site recognised world-over, the Taj Mahal is one of the world’s greatest buildings and the ultimate symbol of love. Emperor Shah Jahan was the mind behind the grand design in order to enshrine his favourite wife.The best time to see the Taj Mahal is in the early morning', '1500/person', 'https://spiderimg.amarujala.com/assets/images/2021/03/11/750x506/taj-mahal_1615458152.jpeg', 'one day'),
(2, 'Jaisalmer', 'Jaisalmer is the quintessential desert town, located in the western Rajasthan. Amid the Thar desert, the golden sandstone architecture towers over the landscape, explaining the nickname of the “Golden City”.its bazaar still lively and engaging and unique location.', '2000/person', 'https://media-cdn.tripadvisor.com/media/photo-s/00/1b/5a/72/jaisalmer-fort.jpg', 'one day'),
(3, 'Varanasi', 'Varanasi is known as the City of Light and is one of the oldest living cities in the world.it remains a place of holy significance - in its location alongside the Ganges river, thousands of people come for their daily ablutions to the large stone ghats.', '1000/person', 'https://mk0cs00242yfx7ww7i54.kinstacdn.com/wp-content/uploads/sites/5/iStock_000058485880_XXXLarge.jpg', 'one day'),
(4, 'Hampi', 'Once the capital of the Hindu empire, Vijayanagar was devastated in the 16th century and now all that remains is the ruined “City of Victory”, a surreal landscape of golden boulders, ancient sculptures and banana fields. ', '900/person', 'https://indiaforbeginners.com/wp-content/uploads/2020/04/India-for-Beginners-custom-tours-6-1280x660.jpg', 'one day'),
(5, 'Kulu-Manali', 'This route to Ladakh is also one of the most spectacular drives. Taking you through the Himalayas, the Manali-Leh Highway crosses some of the highest mountain passes in the world.', '3000/person', 'https://www.flyingroups.com/assets/provider/uploads/UCA/15611081014.jpg', 'one day'),
(6, 'Allepey', 'Kerala is divided between the mountains of the Western Ghats rivers, canals and lagoons. It’s these backwaters that make Kerala such a beautiful place to travel in India, on tranquil boat rides through the tropical surroundings.\r\n\r\n', '500/person', 'https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/4945/backwater-allepey1.jpg?crop=370:240&downsize=370:240\r\n\r\n', 'one day');

-- --------------------------------------------------------

--
-- Table structure for table `best_bookings`
--

CREATE TABLE `best_bookings` (
  `No` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_bookings`
--

INSERT INTO `best_bookings` (`No`, `bid`, `uid`, `date`) VALUES
(1, 2, 10, '2021-07-06'),
(2, 1, 10, '2021-07-06'),
(5, 5, 23, '2021-07-08'),
(6, 2, 10, '2021-07-08'),
(7, 3, 27, '2021-07-08'),
(9, 6, 29, '2021-07-08'),
(10, 3, 30, '2021-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `no` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`no`, `userid`, `pid`, `date`) VALUES
(1, 10, 2, '0000-00-00'),
(3, 10, 5, '2021-07-06'),
(5, 10, 1, '2021-07-06'),
(8, 23, 39, '2021-07-08'),
(9, 10, 15, '2021-07-08'),
(10, 24, 29, '2021-07-08'),
(11, 27, 3, '2021-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`no`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES
(1, 'drashti', 'pateldrashti1708@gmail.com', 2147483647, 'excellent', 'responce'),
(3, 'anisha', 'pateldrashti1708@gmail.com', 1546987234, 'neutral', 'nice one'),
(4, 'anisha', 'pateldrashti1708@gmail.com', 1546987234, 'neutral', 'nice one'),
(5, 'abc', 'pateldrashti1708@gmail.com', 1564789523, 'good', 'nothing'),
(6, 'xyw', 'pateldrashti1708@gmail.com', 0, 'good', 'nothing'),
(7, 'Abc', 'pateldrashti1708@gmail.com', 1564789523, 'excellent', 'nothing'),
(8, 'UserA', 'pateldrashti1708@gmail.com', 1234569852, 'good', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `SrNo` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `package` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `know` text NOT NULL,
  `images` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`SrNo`, `st_id`, `package`, `details`, `know`, `images`, `duration`, `cost`) VALUES
(1, 1, 'Yusmarg ', 'Yusmarg is a hill station in the western part of the valley of Kashmir. The Ahmadiyya Muslim community believes it to be the place where Jesus once lived. The landscape here is more beautiful than anything you will ever see.There are plenty of options for sightseeing and trying out activities like trekking and horse riding.g', 'https://en.wikipedia.org/wiki/Yusmarg', 'https://upload.wikimedia.org/wikipedia/commons/6/63/Yousmarg.jpg', 'One day trip', 2500),
(2, 1, 'Vaishnodevi :', 'Those who are spiritually inclined should not miss out on visiting Vaishno Devi, a major Hindu pilgrimage destination in India. The temple stands on the Trikuta Hills in Jammu. The Mother Goddess, who is the main deity, is believed to fulfil the wishes of her devotees.\r\n', 'https://en.wikipedia.org/wiki/Vaishno_Devi', 'https://www.maavaishnodevi.org/Home2020/img6.jpg', 'One day trip', 2000),
(3, 1, 'Gulmarg :', 'Gulmarg has everything going for it: snowdressed mountains, greenery, lakes, pine & fir forests and different types of flowers. It is snug in a valley in the Pir Panjal Range. Its name means, the meadows of flowers, and you will come across a lot of meadows decorated with daisies. Most of all though, Gulmarg is the best skiing destination in Asia,', 'https://www.tripadvisor.in/Tourism-g317095-Gulmarg_Baramulla_District_Kashmir_Jammu_and_Kashmir-Vacations.html', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Gulmarg_road_December_2020_by_Mutahir_Showkat.jpg/800px-Gulmarg_road_December_2020_by_Mutahir_Showkat.jpg', 'One day trip', 1500),
(4, 1, 'Doda :', 'Doda is a district located in the eastern part of Jammu and has plenty of opportunities for sightseeing and even adventure. Those who are spiritually inclined should certainly visit Doda, since there are plenty of temples and a splendid mosque too.', 'https://districts.ecourts.gov.in/doda', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/View_of_Doda_city_in_Jammu.jpg/1280px-View_of_Doda_city_in_Jammu.jpg', 'One day trip', 1500),
(5, 2, 'Daman and Diu :', 'Daman and Diu, union territory of India, comprising two widely separated districts on the country’s western coast. Daman is an enclave on the state of Gujarat’s southern coast, situated 100 miles (160 km) north of Mumbai (Bombay). Diu encompasses an island off the southern coast of Gujarat’s Kathiawar Peninsula, 40 miles (64 km) southeast of Veraval, as well as a small area on the mainland. The town of Daman, in the Daman district, is the capital of the territory.', 'https://www.treebo.com/blog/places-to-visit-in-daman-diu/', 'https://dseventsco.in/wp-content/uploads/2019/07/daman-diu.jpg', 'One day trip', 5500),
(6, 2, 'Gir National Park :', 'It is a famous tourist attraction as it is the only place in India with largest population of asiatic lions. The park is also home to around 300 species of birds. It attracts large number of tourists to witness the Asiatic lion, as this is the sole place all across the world where these creatures are presently found. Once extinct, numbers have been recovered owing to the conservation efforts. The Sanctuary is open for tourism from 16th October to 15th June every year.', 'https://www.girnationalpark.in/', 'https://i.pinimg.com/736x/4c/05/0b/4c050be8f12a82ba7c42f29889db6198.jpg', 'One day trip', 5000),
(7, 2, 'Akshardham temple :', 'It is an eternal place for one to offer devotion and experience everlasting peace. Swaminarayan Akshardham at Gandhinagar is a mandir – a Hindu house of worship, a dwelling place for God, and a spiritual and cultural campus dedicated to devotion, education and unification. Timeless devotional messages and vibrant Hindu traditions are echoed in its art and architecture. The mandir is a humble tribute to Bhagwan Swaminarayan (1781- 1830) and the avatars, devas and sages of Hinduism.\r\n\r\n', 'https://akshardham.com/gujarat/', 'https://upload.wikimedia.org/wikipedia/commons/7/77/Akshardham_Gandhinagar_Gujarat.jpg', 'One day trip', 1000),
(8, 2, 'Kankaria Lake :', 'Kankaria lake can be found in the south-eastern section of Ahmedabad near the Maninagar area, in Gujrat. It is said to be the second largest lake in the city. Multiple tourist spots like the zoo, kids city, toy-train, hot-air balloon ride, water-based rides and other such entertainment attractions are in abundance in the lakefront that has been developed around Kankaria lake.', 'https://www.gujarattourism.com/central-zone/ahmedabad/kankaria-lake.html', 'https://upload.wikimedia.org/wikipedia/commons/5/53/Kankaria_Carnival.JPG', 'One day trip', 1000),
(9, 2, 'Great Rann of Kutch :', 'The great Rann of Kutch should be visited during the Rann Utsav, celebrated between November and March. It is one of the world\'s largest white salt deserts. Rann Utsav is a Carnival of Music, Dance, nature beauty of White Rann and much more then that when visit under the full Moon. Kutch Rann Utsav is the shimmering landscape that gives the enchanting moments of this Fest, which feels like as Heaven On Earth during Festival Time. In fact, it’s a Family holiday destination to explore fun moments and store in cameras for life time.', 'https://www.gujarattourism.com/kutch-zone/kutch/great-rann-of-kutch.html', 'https://imgmedia.lbb.in/media/2018/11/5bea75c28b7e5f08c629cd82_1542092226697.jpg', 'One day trip', 2000),
(10, 2, 'Rani ka vav :', 'Located on the banks of the Saraswati River,Patan in Gujarat. This is one of the oldest and finest stepwells in Gujarat and is remarkably preserved. Its construction is attributed to Udayamati, daughter of Khengara of Saurashtra, queen of the 11th-century Solanki dynasty and spouse of Bhima I. It has been listed as one of UNESCO\'s World Heritage Sites since 2014. The stepwell is divided into seven levels of stairs which lead down to deep circular well.', 'https://en.wikipedia.org/wiki/Rani_ki_vav', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Rani_ki_vav_-_Gujarat_-_06.jpg/1200px-Rani_ki_vav_-_Gujarat_-_06.jpg', 'One day trip', 1000),
(11, 2, 'Somnath temple :', 'Primarily a temple town, Somnath is a place where a strong scent of religion and legends lingers around tourism and even daily life. Its spiritual environment is ornamented by the huge number of temples in the area, however, Somnath also offers beaches, museums and other attractions. While the Somnath temple and Somnath beach are the primary places to visit here, Gita Mandir, Balukha Tirtha, Kamnath Mahadev Temple, Somnath Museum are some of the other places that one can visit.', 'https://www.somnath.org/', 'https://pravase.co.in/admin_pravase/uploads/yatradham/Sonath%20Temple_1558702865.JPG', 'One day trip', 750),
(12, 2, 'Junagadh :', 'Being the capital of Junagadh Princely State once, the town shines with historical significance with many historical monuments to see.One should absolutely visit the city of junagadh to explore it\'s Buddhist cave groups, Jnagadh museum, Somnath temple and Damodar kund.', 'https://www.gujarattourism.com/saurashtra/junagadh.html', 'https://upload.wikimedia.org/wikipedia/commons/3/38/Mahabat_Maqbara_-_Junagadh_-_Gujarat_-_005.jpg', 'One day trip', 2500),
(13, 2, 'Nalsarovar Bird Sanctuary :', 'Nal Sarovar literally translates to ‘Tap Lake’. The resemblance is in the fact that this famous tourist attraction houses various different kinds of bird species which in turn are attracted to this lake.It has many small islands (records say 36) and the region is spread over a large area such that the birds can roam about without any conflict among the different species . This bird sanctuary is located at about 64 km to the west of Ahmedabad near Sanand village,Gujarat.', 'https://ahmedabadtourism.in/nal-sarovar-bird-sanctuary-ahmedabad', 'https://res.cloudinary.com/roundglass/image/upload/c_fill,ar_1.1,g_auto/f_auto/v1584805859/roundglass/sustain/Nalsarovar_Nalsarovar_seagull_swapan-banikShutterstock-copy_ym5mqx.jpg', 'One day trip', 1500),
(14, 2, 'Statue of Unity :', 'Sabarmati Ashram formerly known as Satyagraha Ashram, was witness to many historical events that shook up the British Empire. Set up in 1915, the Ashram was also a perfect example of a model community based on rules and values. It is situated about 5 km from the center of Ahmedabad, (Gujarat State), on the west bank of Sabarmati river.The Ashram premises houses a museum, which has five units – office, library, two photo galleries and an auditorium. It is perhaps having the largest number of original manuscripts of Gandhiji’s letters and articles.', 'https://statueofunity.guide/', 'https://statueofunity.guide/assets/images/statue-of-unity-1462x875.jpeg', 'One day trip', 1500),
(15, 3, 'The Backwaters of Alleppey : ', 'Alleppey or Alappuzha is best known for the world renowned backwaters of Kerala. The backwaters are a network of brackish canals, rivers and lakes that weave through half of the state of Kerala. One can cruise down the backwaters while enjoying the unique feel of the “Kettuvallams” or house boats which provide amenities including a taste of typical Kerala cuisine. ', 'https://www.tripadvisor.in/Attraction_Review-g608471-d2389583-Reviews-Alleppey_Backwaters-Alappuzha_Alappuzha_District_Kerala.html', 'https://media-cdn.tripadvisor.com/media/photo-s/13/5e/59/d4/alleppey-backwater-tour.jpg', 'One day trip', 5000),
(16, 3, 'Kochi : ', 'Kochi is the cultural and economic capitals of Kerala. It’s a hub of tourist activity and attracts visitors from all over the world. From Chinese fishing nets to exotic spice cultivations, there’s a lot to feast your eyes upon in Kochi. This city is an amalgamation of various cultures which seek to endure even till date. There’s a surprise in every corner of Kochi, just waiting to be discovered.', 'https://www.thrillophilia.com/cities/kochi', 'https://english.mathrubhumi.com/polopoly_fs/1.3531872.1549003245!/image/image.jpg_gen/derivatives/landscape_894_577/image.jpg', 'One day trip', 5500),
(17, 3, 'Munnar :', 'Munnar is considered one of the most beautiful tourist places in Kerala. Situated on the Western Ghats, Munnar is evidently one of the highest producers of tea on the Indian subcontinent. The view of undulating hills as the touch the clouds in Munnar rejuvenates your mind and soul. The town is flanked by a narrow patch of the Arabian Sea and The Western Ghats on the other side which makes Munnar a unique getaway from the city life.', 'https://www.thrillophilia.com/cities/munnar', 'data:image/jpeg;base64,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', 'One day trip', 500),
(18, 3, 'Wayanad :', 'Porbandar, best known as the birthplace of Mahatma Gandhi, is a beautiful beach town with some temples and dams and is now also a popular trading hub. The ancient port city with a significant event in its history is a tourist destination which modestly offers a number of attractions. It attracts pilgrims with temples such as the Sudama Mandir, Bharat Mandir, Ram Dhoon Mandir, Hanuman temple and more.', 'https://www.thrillophilia.com/cities/wayanad', 'https://r1imghtlak.mmtcdn.com/b929d782fe2311eab0fc0242ac110003.jpeg?&output-quality=75&downsize=520:350&crop=520:350;2,0&output-format=jpg', 'One day trip', 3000),
(19, 4, 'Kasol : ', 'On the banks of Parvati River lies a photogenic hamlet of Kasol, also referred to as the ‘Little Israel of India’. Laidback and serene, Kasol is popular among backpackers and hippies, and with good reason. The stunning landscape of snow-capped mountains, lush valleys, scenic waterfalls and undisturbed trekking routes makes it a paradise for nature lovers and trekkers.', 'https://www.thrillophilia.com/things-to-do-in-kasol', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/33/a3/ef/snow-fall-at-parvati.jpg?w=900&h=-1&s=1', 'One day trip', 2500),
(20, 4, 'Shimla :', 'Also called the Queen of Hills, Shimla is a gorgeous colonial hill station, where picturesque vistas will greet you at every nook. A perfect place to wander, Shimla showcases some of the best colonial-era architecture, including the Viceregal Lodge, the Town Hall, Gaiety Theatre and the Christ Church.', 'https://www.india.com/travel/shimla/', 'https://akm-img-a-in.tosshub.com/indiatoday/images/story/201810/SHIMLA.jpeg?p8rkDgUaxdIezLOdixVSYZfIdYEkHBUU', 'One day trip', 5000),
(21, 4, 'Dharamshala :', 'Nestled in the upper reaches of Kangra Valley, Dharamshala enjoys one of the best climates in Himachal. Surrounded by snow-laden peaks of Dhauladhar mountains and lush pine and deodar forests, the town is brimming with cultural and architectural attractions, along with a great number of restaurants, cafes and shops catering to its extensive multicultural Indian and Tibetan communities.', 'https://himachaltourism.gov.in/destination/dharamshala/', 'https://5.imimg.com/data5/HX/SR/EI/SELLER-1387981/dharamsala-tour-500x500.jpg', 'One day trip', 3500),
(22, 4, 'Kasauli :', 'At an elevation of 1,900 meters lies a small colonial town of Kasauli. The town has little in terms of attractions, commerce and population. However, that’s exactly where its beauty and appeal lies – its unadulterated air, serene and peaceful vibe, and an abundance of nature is what attracts travellers.', 'https://www.tripadvisor.in/Tourism-g1152631-Kasauli_Kasauli_Tehsil_Solan_District_Himachal_Pradesh-Vacations.html', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/10/2e/e0/kasauli.jpg?w=700&h=-1&s=1', 'One day trip', 1000),
(23, 5, 'Qutub Minar : ', 'Construction on this sandstone minaret was begun in 1192. Surrounded by other historical sites, it is the most popular monument in India. Miniature Souvenir is available at Luv Indiya, 12 B Janpath Market, Connaught Place, New Delhi', 'https://www.indiaculture.nic.in/qutb-minar-and-its-monuments', 'https://c.ndtvimg.com/qutub-minar-650_625x300_1530453081066.jpg', 'One day trip', 1500),
(24, 5, 'India gate:', 'The India Gate, built in 1931 and designed by Sir Edwin Lutyens, was inspired by the Arc de Triomphe. It commemorates India\'s war dead and houses an eternal flame.', 'https://www.britannica.com/topic/India-Gate', 'https://cdn.britannica.com/38/189838-050-83C7395E/India-War-Memorial-arch-New-Delhi-Sir.jpg', 'One day trip', 800),
(25, 5, 'Humayun’s tomb : ', 'This tomb, built in 1570, is of particular cultural significance as it was the first garden-tomb on the Indian subcontinent. It inspired several major architectural innovations, culminating in the construction of the Taj Mahal and many other Mughal architecture and garden complexes in India.', 'https://whc.unesco.org/en/list/232/', 'https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/very_big_1/public/feature/images/3_19.jpg?itok=6n_aMrET', 'One day trip', 800),
(26, 5, 'Chandni chowk:', 'The bustling wholesale market here is an excellent place to shop, explore, eat and soak up life in New Delhi.One of the oldest markets in Old Delhi, Chandni Chowk is Old Delhi\'s main thoroughfare which is a chaotic wholesale market lined by hawkers and porters offering full medieval bazaar experience. It is an important historical site renowned for the availability of every kind of goods as well as food.', 'https://www.holidify.com/places/delhi/chandni-chowk-sightseeing-1713.html', 'https://www.holidify.com/images/cmsuploads/compressed/-26975_10253_20170814163325.jpg', 'One day trip', 0),
(27, 5, 'Red fort: ', 'Red Fort, also called Lal Qalʿah, also spelled Lal Kila or Lal Qila, Mughal fort in Old Delhi, India. It was built by Shah Jahān in the mid-17th century and remains a major tourist attraction. The fort was designated a UNESCO World Heritage site in 2007.\r\n', 'https://www.britannica.com/topic/Red-Fort', 'https://images.indianexpress.com/2018/06/red-fort-1200-getty-images.jpg', 'One day trip', 2500),
(28, 6, 'Mahabaleshwar :', 'Mahabaleshwar is a hill station in Maharashtra and is located at the Western Ghats. The average elevation of the place is approximately 1,353 meters above sea level and is the source of the Krishna River. The water originates from a spout which is shaped like the mouth of a cow and is situated at an ancient temple of Lord Shiva. The city is a famous summer retreat for the people in Mumbai and is famous for its lakes and trekking hotspots.', 'https://www.thrillophilia.com/cities/mahabaleshwar', 'https://www.holidify.com/images/bgImages/MAHABALESHWAR.jpg', 'One day trip', 4500),
(29, 6, 'Matheran :', 'Another great hill station located at the Western Ghats in the state of Maharashtra, Matheran is located at an elevation of approximately 800 meters above sea level. The city is famous for its cool and less humid climate and is a popular summer retreat for the population of Maharashtra. The British influence on the architecture is pretty evident and is well preserved by the officials.', 'https://www.thrillophilia.com/cities/matheran', 'https://static.india.com/wp-content/uploads/2019/07/Roads-leading-up-to-the-gorgeous-Matheran.-.jpg?impolicy=Medium_Resize&w=1200&h=800', 'One day trip', 1000),
(30, 6, 'Ratnagiri : ', 'Ratnagiri is a sea port located near the Arabian Sea in the State of Maharashtra. The town has been mentioned prominently in the Hindu mythology and is famous for its Temples. The place contains several different breathtaking natural phenomena like the Rajapur Ganga which is a collection of 14 pools of water which appear almost once in every 3 years. The old palaces and forts are also great places to explore on your trip here.', 'https://www.thrillophilia.com/places-to-visit-in-ratnagiri', 'https://www.tourmyindia.com/states/maharashtra/images/best-time-to-visit-ratnagiri.jpg', 'One day trip', 1000),
(31, 7, 'Mount Abu :  ', 'Mount Abu is a hill station that offers exceptional views of the surrounding area. A rocky plateau of a summit means that there is a large space to explore, not to mention an abundance of attractions. Nakki Lake is a must-see spot near Mount Abu, and you can even rent an affordable paddle boat to get on the water and admire the hills surrounding the lake. Also of interest in Mount Abu will be the Dilwara Temples. These temples from the Jain religion date from about the 12th century and are carved from an exquisite white marble.', 'http://www.tourism.rajasthan.gov.in/mount-abu.html', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Mount_Abu.jpg/1200px-Mount_Abu.jpg', 'One day trip', 5000),
(32, 7, 'Chittorgarh:', 'he city of Chittorgrah, situated on the banks of the Berach River, is known for one particularly impressive attraction: The Chittorgarh Fort. Built in the seventh century, the fort is one of the largest in India and is guarded by seven gates. The fort is large, and seeing it all in a day can be challenging. Start with the Victory Tower, built in the 15th century and illuminated beautifully each night.', 'https://www.chittorgarh.com/', 'https://www.holidify.com/images/bgImages/CHITTORGARH.jpg', 'One day trip', 1000),
(33, 7, 'Ranthambore National Park :', 'This national park is also a wildlife sanctuary, and it is known as one of the top spots in the entire world to see tigers in the wild. You can book a wildlife safari to explore the park and see the animals up close. A smaller, open-top vehicle called a gypsy is best for the braver visitors, and the larger open-top vehicles called canters offer a little more protection. In addition to the tigers, Ranthambhore National Park boasts wildlife that includes leopards, hyenas, sloth bears and so much more.\r\n', 'https://www.ranthamborenationalpark.com/', 'https://assets.traveltriangle.com/blog/wp-content/uploads/2016/08/Untitled-design-33.jpg', 'One day trip', 3000),
(34, 7, 'Jaisalmer :', 'Also known as the Golden City, Jaisalmer is a remarkable city right on the fringes of the Thar Desert. The dominating features of Jaisalmer is the Jaisalmer Fort, or Sonar Qila, which is still an inhabited space. Unlike virtually every other fort in India, Jaisalmer is completely functioning, and within the fort you’ll find private residences, shops and even restaurants.', 'http://www.tourism.rajasthan.gov.in/jaisalmer.html', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/View_from_Jaisalmer_fort.jpg/1200px-View_from_Jaisalmer_fort.jpg', 'One day trip', 1000),
(35, 7, 'Jodhpur :', 'Jodhpur, or the Blue City, is located on the edge of the Thar Desert. Its colorful nickname comes from the many blue homes in the city, which make it look blue when viewed from above. Filled with forts and temples, Jodhpur is a historic destination with plenty of appeal.', 'http://www.tourism.rajasthan.gov.in/jodhpur.html', 'https://images.thrillophilia.com/image/upload/s--xcGixI2x--/c_fill,h_600,q_auto,w_975/f_auto,fl_strip_profile/v1/images/photos/000/056/079/original/1601016860_shutterstock_789611971.jpg.jpg?1601016860', 'One day trip', 2000),
(36, 7, 'Jaipur:', 'The capital of Rajasthan is Jaipur, a bustling city teeming with interesting attractions and things to do. Jaipur forms one corner of the Golden Triangle, and it makes a great gateway into the lesser-known destinations within Rajasthan. There are three major forts in Jaipur: Amber Fort, Nahargarh Fort and Jaigarh Fort. ', 'http://www.tourism.rajasthan.gov.in/jaipur.html', 'https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/17/29/5c.jpg', 'One day trip', 1500),
(37, 8, 'Varanasi :', 'Nestled on the banks of the sacred Ganges river, Varanasi is one of the world’s oldest continuously inhabited cities. For centuries, culture, religion, history, art and education have thrived here, and that’s exactly what makes it one of the most visited cities in the country. This holy place is associated with Lord Shiva, and is the most sacred place for Hindus. ', 'https://www.amarujala.com/uttar-pradesh/varanasi', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Ahilya_Ghat_by_the_Ganges%2C_Varanasi.jpg/800px-Ahilya_Ghat_by_the_Ganges%2C_Varanasi.jpg', 'One day trip', 2000),
(38, 8, 'Vrindavan :', 'If you’re a temple lover, then Vrindavan is a must-visit. Located just 15 kilometres (9.3 miles) from Mathura, it is another sacred retreat dedicated to Lord Krishna and his lover, Radha. It is the place where Krishna spent his childhood years. This heritage town has about 5,000 temples with intricate architecture and carvings that showcase the divine love of Krishna and Radha. ', 'https://www.tripadvisor.in/Tourism-g951350-Vrindavan_Mathura_District_Uttar_Pradesh-Vacations.html', 'https://upload.wikimedia.org/wikipedia/commons/b/bf/Iskon_Temple%2C_Vrindawan.jpg', 'One day trip', 1500),
(39, 8, 'Mathura', 'Mathura is the birthplace of the Hindu God, Krishna, and also among the seven sacred cities of Hinduism. The town is filled with temples dating back centuries. Of particular note are Sri Krishna Janma Bhoomi, Dwarkadhish temple and Gita Mandir. Also, the sacred Yamuna River flows past this town and is dotted with 25+ ghats, of which the Vishram ghat is considered to be the most sacred.', 'https://www.holidify.com/places/mathura/', 'https://img.traveltriangle.com/blog/wp-content/uploads/2019/11/cover-image-of-Mathura_30th-nov.jpg', 'One day trip', 1000),
(40, 8, 'Ayodhya', 'The birthplace of Lord Rama, Ayodhya is also one of the seven sacred places for Hindus. With temples on almost every corner, Ayodhya is a spiritual seeker’s paradise. Ramkot is the main hub of worship in the town that attracts devotees from across the world. Other significant temples worthy of a visit include Nageshwarnath temple, Hanuman Garhi, Treta Ke Thakur, Kanak Bhawan and Ram Janmabhoomi temple.', 'https://srjbtkshetra.org/', 'https://c.ndtvimg.com/2020-08/l7l9chag_ram-temple-proposed-design-august-2020_625x300_04_August_20.jpg', 'One day trip', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `username`, `email`, `contact`, `message`) VALUES
(4, 'drashti', 'pateldrashti1708@gmail.com', 2147483647, 'fesfewrer'),
(5, 'xyz', 'anishamalhotra0607@gmail.com', 2147483647, 'to cancel booking\r\n'),
(6, 'mansi', 'mansi.kundariya2612@gmail.com', 1234567891, 'to cancel booking'),
(7, 'User', 'pateldrashti1708@gmail.com', 2147483647, 'canel booking'),
(9, 'UserA', 'pateldrashti1708@gmail.com', 2147483647, 'cancel booking');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`) VALUES
(1, 'Jammu kasmir'),
(2, 'Gujarat'),
(3, 'Kerala'),
(4, 'HimachalPradesh'),
(5, 'Delhi'),
(6, 'Maharashtra'),
(7, 'Rajsthan'),
(8, 'UttarPradesh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(10, 'drashti', 'pateldrashti1708@gmail.com', 'RHJhc2h0aUAxMjM='),
(20, 'xyz', 'anishamalhotra0607@gmail.com', 'WHl6QDEyMzQ1'),
(23, 'mansi', 'mansi.kundariya2612@gmail.com', 'Manu@123'),
(24, 'anisha', 'pateldrashti1708@gmail.com', 'QW5pQDEyMzQ1'),
(27, 'User', 'pateldrashti1708@gmail.com', 'VXNlckAxMjM0NQ=='),
(29, 'Abc', 'pateldrashti1708@gmail.com', 'MTIz'),
(30, 'UserA', 'pateldrashti1708@gmail.com', 'MTIz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best`
--
ALTER TABLE `best`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_bookings`
--
ALTER TABLE `best_bookings`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best`
--
ALTER TABLE `best`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `best_bookings`
--
ALTER TABLE `best_bookings`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
