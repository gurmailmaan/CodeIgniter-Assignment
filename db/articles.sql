-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2023 at 07:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmaan1_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`title`, `description`, `filename`, `author_id`, `article_id`) VALUES
('Virtual Reality (VR) technology', 'Virtual Reality (VR) technology has come a long way since its inception in the 1960s. Today, it has become a widely used technology, with applications in various fields such as entertainment, education, healthcare, and engineering. VR technology is transforming the way we interact with digital content and is poised to revolutionize many industries in the coming years.\r\n\r\nVR technology is essentially a simulation of a 3D environment that can be experienced through a head-mounted display (HMD) or a VR headset. These devices use a combination of sensors, cameras, and display screens to create an immersive experience that can trick the brain into thinking that the user is actually present in the virtual world.\r\n\r\nOne of the most significant advantages of VR technology is its ability to provide a highly immersive experience. By creating a fully simulated environment, VR technology can transport users to places they might never have the opportunity to visit otherwise. For example, VR can be used to simulate a visit to a museum, allowing users to explore exhibits and artifacts from around the world without ever leaving their homes.', 'VR.jpg', 4, 8),
('Cloud computing', 'Cloud computing has revolutionized the world of technology in recent years, providing a wide range of benefits across various industries. One of the sectors that have been significantly impacted by the rise of cloud computing is the gaming industry. Cloud computing has opened up new possibilities for game developers and gamers alike, making games more accessible, affordable, and convenient than ever before.\r\n\r\nSo, what is cloud computing, and how does it relate to gaming? Simply put, cloud computing refers to the delivery of computing services, including storage, processing power, and applications, over the internet. In the context of gaming, cloud computing allows developers to create and deliver games that can be accessed and played entirely online, without the need for powerful hardware or expensive gaming consoles.\r\n\r\nThe primary advantage of cloud gaming is that it eliminates the need for gamers to invest in expensive hardware. Instead, players can access games on any device with an internet connection, including smartphones, tablets, laptops, and desktop computers. This means that gamers can enjoy high-quality games without having to worry about compatibility issues or system requirements. Cloud gaming also makes it possible for gamers to play the latest titles on older hardware, as all of the processing power is provided by remote servers.', 'cloud_computing.jpg', 4, 9),
('AI: The Future of Technology', 'Artificial Intelligence (AI) is one of the most promising fields in the technology industry. It involves the development of intelligent machines that can perform tasks that usually require human intelligence, such as visual perception, speech recognition, decision-making, and natural language processing. AI has the potential to transform the way we live, work, and interact with each other.\r\n\r\nTypes of AI\r\n\r\nThere are two main types of AI: Narrow or Weak AI and General or Strong AI.\r\n\r\nNarrow AI is designed to perform specific tasks, such as playing chess, driving a car, or recognizing faces. It uses machine learning algorithms to analyze data, make decisions, and learn from its mistakes. Examples of narrow AI include Siri, Alexa, and Google Assistant.\r\n\r\nGeneral AI, on the other hand, is designed to perform any intellectual task that a human can do. It can reason, learn, understand, and make decisions like a human being. However, the development of General AI is still in its early stages, and scientists and researchers are working hard to make it a reality.', 'ai.jpg', 2, 10),
('Electric Vehicles (EVs)', 'Electric Vehicles (EVs) are becoming increasingly popular as people are becoming more conscious about the environment and the impact of fossil fuels on the planet. EVs use electric motors and batteries instead of internal combustion engines, which run on gasoline or diesel. EVs have numerous benefits, including reducing greenhouse gas emissions, improving air quality, and reducing our dependence on fossil fuels.\r\n\r\nTypes of EVs\r\n\r\nThere are three main types of EVs: Battery Electric Vehicles (BEVs), Plug-in Hybrid Electric Vehicles (PHEVs), and Hybrid Electric Vehicles (HEVs).\r\n\r\nBattery Electric Vehicles (BEVs) - BEVs run entirely on electric power and do not have a gasoline engine. They are powered by a large battery pack that stores electricity, which is used to power the electric motor. BEVs need to be charged regularly and can be charged at home or at public charging stations.\r\n\r\nPlug-in Hybrid Electric Vehicles (PHEVs) - PHEVs have both an electric motor and a gasoline engine. They can run on electric power for a certain distance before the gasoline engine kicks in. PHEVs can be charged at home or at public charging stations, and the gasoline engine can also charge the battery while driving.\r\n\r\nHybrid Electric Vehicles (HEVs) - HEVs have an electric motor and a gasoline engine, but the electric motor is not powerful enough to drive the vehicle on its own. HEVs use regenerative braking to charge the battery while driving and can also charge the battery using the gasoline engine.', 'evs.jpg', 2, 11),
('Internet of Things (IoT)', 'The Internet of Things (IoT) is a concept that refers to the connection of everyday objects to the internet, allowing them to communicate with each other and with people. IoT has been described as the \"third wave\" of the internet, following the first wave of computers and the second wave of mobile devices. With the growth of IoT technology, there is enormous potential for connected devices to improve efficiency, convenience, and quality of life for individuals and businesses.\r\n\r\nHow does IoT Work?\r\n\r\nIoT devices are connected to the internet and can communicate with each other using a variety of technologies, such as Wi-Fi, Bluetooth, and cellular networks. These devices often have sensors that can gather data, which can then be analyzed and used to make decisions or automate processes. For example, a smart thermostat can gather data on a person\'s heating and cooling preferences and adjust the temperature accordingly, without the need for manual adjustments.\r\n\r\nBenefits of IoT\r\n\r\nImproved Efficiency: IoT can improve efficiency by automating processes and reducing the need for manual intervention. This can lead to cost savings and increased productivity.\r\n\r\nIncreased Convenience: IoT devices can provide convenience by automating tasks that would normally require human intervention. For example, a smart fridge can order groceries automatically when supplies run low.\r\n\r\nBetter Quality of Life: IoT devices can improve quality of life by providing real-time data and feedback that can help individuals make better decisions about their health and lifestyle.\r\n\r\nEnhanced Safety: IoT devices can enhance safety by monitoring and alerting individuals to potential hazards. For example, a smart smoke detector can alert individuals to a fire even when they are not at home.', 'iot.jpg', 3, 12),
('5G Internet', '5G internet is the latest iteration of wireless technology that promises to revolutionize the way we use the internet. This technology promises to provide faster internet speeds, lower latency, and more reliable connectivity. With 5G, the world is set to experience a whole new level of high-speed connectivity that will drive innovation and transform industries.\r\n\r\nWhat is 5G?\r\n\r\n5G is the fifth generation of wireless technology that succeeds 4G, 3G, and 2G. It is the latest technology in mobile networks that promises to deliver lightning-fast internet speeds. 5G uses high-frequency radio waves to transmit data at speeds of up to 20 Gbps. It also has lower latency than 4G, which means there is less lag when using the internet.\r\n\r\nBenefits of 5G\r\n\r\nFaster internet speeds: 5G promises to deliver faster internet speeds than any other technology. This means users can download large files, stream high-definition videos, and play online games without any buffering.\r\n\r\nLower latency: 5G has lower latency than 4G, which means there is less lag when using the internet. This makes 5G ideal for online gaming, virtual reality, and other applications that require real-time responsiveness.\r\n\r\nMore reliable connectivity: 5G uses multiple antennas to provide more reliable connectivity, even in areas with high network congestion.\r\n\r\nIncreased capacity: 5G has the capacity to connect more devices than any other technology. This makes it ideal for the Internet of Things (IoT) and other applications that require connectivity for multiple devices.\r\n\r\nImproved healthcare: 5G has the potential to improve healthcare by enabling remote surgeries, real-time monitoring of patients, and faster response times in emergency situations.', '5g.jpg', 3, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
