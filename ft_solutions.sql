-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 01:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ft_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `text_id` int(11) NOT NULL,
  `text1` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `text2` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `text3` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `text4` text NOT NULL,
  `text5` text NOT NULL,
  `text6` text NOT NULL,
  `text7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`text_id`, `text1`, `image1`, `text2`, `image2`, `text3`, `image3`, `text4`, `text5`, `text6`, `text7`) VALUES
(1, 'Everybody is different, which is why we offer various gadgets for everybody.', 'fit.png', 'One of the many reasons you can shop with peace of mind.', 'exchange.png', 'They are here to help you. That\'s quite literally what we pay them for.', 'contact.png', 'When you have a lot to offer you have to be selective.', 'You can find your desired product here.', 'We are trusted worldwide for our genuine products.', 'Technology has become a part of our daily lives and for a huge portion of our life, we are dependent on tech products daily. There is hardly a home in Bangladesh without a tech product. This is where we come in. We always prioritize our customers and ensure better customer service. The goal was to meet more customer needs in the shortest time.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'Tarik', '180204061@aust.edu', 'test'),
(2, 'Sadee', '180204066@aust.edu', 'Hi, I need a full build.'),
(3, 'Mahin', '180204077@aust.edu', 'Can I have a single cpu?');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `address`, `phone_no`, `email`) VALUES
(1, '123 Street, New York, USA', '+880 1521260328', 'ftsolutions@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`page_id`, `page_name`, `page_link`) VALUES
(1, 'Home', 'index.php\r\n'),
(2, 'About Us', 'aboutUs.php'),
(3, 'Contact Us', 'contactus.php'),
(4, 'Products', 'products.php');

-- --------------------------------------------------------

--
-- Table structure for table `private`
--

CREATE TABLE `private` (
  `private_id` int(11) NOT NULL,
  `private_product` int(11) NOT NULL,
  `featured_products` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `private`
--

INSERT INTO `private` (`private_id`, `private_product`, `featured_products`) VALUES
(1, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_warranty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_price`, `product_description`, `product_warranty`) VALUES
(1, 'MONTECH X3 GLASS HIGH AIRFLOW ATX MID TOWER GAMING CASE (BLACK )', 'MONTECH X3 GLASS HIGH AIRFLOW ATX MID TOWER GAMING CASE (BLACK ).jpg', '4,700', 'Model	X3 Glass Black\nMotherboard Support	ATX/Micro ATX/Mini ITX\nColor	Black\nDrive Bay(s)	2.5\":2 3.5\" or 2.5\":2\nExpansion Slots	7\nFan	Pre-installed Fan(s): Front:140mm x 3 (LED Rainbow fan) Top:120mm x 2 (LED Rainbow fan) Rear:120mm x 1 (LED Rainbow fan) Fan Support: Front:120/140mm x3 Rear:120mm x 1 Top:120mm x 2\nOthers	Dust Filters:Top, Bottom\nPSU	Bottom mount, ATX\nCPU Clearance	160mm\nI/O	USB2.0*2, USB3.0*1, Audio*1, mic*1, Light switch\nDimensions	(LxWxH)/:370*210*480(Case), 530*265*425(Carton)mm/\nVGA Length	305mm\nWeight	N.W./G.W:6.1 Kg/ 6.97 Kg', 'No Warranty'),
(2, 'ANTEC DF600 FLUX ARGB MID TOWER TEMPERED GLASS ATX CASE', 'ANTEC DF600 FLUX ARGB MID TOWER TEMPERED GLASS ATX CASE.jpg', '6,300', 'Type: Mid tower\nMotherboard Support: ATX, Micro-ATX, Mini-ITX\nExpansion Slots: 7\nColor: Black\nWeight: 7.38 Kg\nDimensions: 467 x 220 x 486 mm\nRadiator Support \nFront: 120 / 240 / 280 / 360 mm\n(≤ 55 mm thickness when fans are installed outside of front panel)\n(≤ 30 mm thickness when fans are installed inside of front panel)\n\nTop: 120 / 240 / 280 / 360 mm\nRear: 120 mm \n\nFan Support \nFront: 3 x 120 mm / 3 x 140 mm\nTop: 3 x 120 mm / 2 x 140 mm\n\nPower Supply \nShroud: 2 x 120 mm\nRear: 1 x 120 mm\n\nPre- Installed Fans: \n3 x 120 mm ARGB fans in front\n1 x 120 mm fan (Reverse Fan) on PSU shroud & 1 x 120 mm fan in the rear\nDrive Bays: \n3.5\"/2.5\" (convertible): 3/2\n2.5\": 3\nI/O Port: Power, LED Control Button, 2 x USB3.0, HD-AUDIO\nAdditional Feature\nPSU: ≤ 205 mm\nSide Panel: 4 mm Tempered Glass Side Panel\nClearance Space\nMaximum Processor Height: ≤ 175 mm\nMaximum Graphics Card Length: ≤ 405 mm', 'No Warranty'),
(3, 'AMD RYZEN 5 5600G 6 CORE 12 THREAD AM4 PROCESSOR WITH RADEON GRAPHICS', 'AMD RYZEN 5 5600G 6 CORE 12 THREAD AM4 PROCESSOR WITH RADEON GRAPHICS.jpg', '28,500', 'Brand : AMD\nModel : Ryzen 5 5600G\nBase Frequency: 3.9GHz\nMaximum Turbo Frequency: 4.4GHz\nCache: Total Cache: L2: 3MB, L3: 16MB\nCores: 6\nThreads: 12\nDefault TDP 65W\ncTDP: 45-65W\nSupported Technologies : Display Port, HDMI\nMaximum Speed: 3200MHz\nType: DDR4\nMax Number of Channels 2\nProcessor Graphics: Radeon Graphics\nBase Frequency: 1900MHz\nCore Count: 7', '3 Years'),
(4, 'AMD RYZEN 5 5600X 6 CORE 12 THREAD AM4 PROCESSOR', 'AMD RYZEN 5 5600X 6 CORE 12 THREAD AM4 PROCESSOR.jpg', '29,000', 'Brand	65W\nProcessor Series	AMD Ryzen 5000 Series\nProcessor Speed	Base Clock: 3.7GHz Max Boost Clock: Up to 4.6GHz\nCache	Total L2 Cache: 3MB Total L3 Cache: 32MB\nBus Speed	Up to 3200MHz\nNumber Of Cores	6\nNumber Of Threads	12\nMemory Type	DDR4', '3 Years'),
(5, 'INTEL CORE I5-11600K 6 CORE 12 THREAD 11TH GEN PROCESSOR', 'INTEL CORE I5-11600K 6 CORE 12 THREAD 11TH GEN PROCESSOR.jpg', '25,800', 'Brand  Intel\nModel  Core i5-11600K\nBase Frequency 3.90 GHz\nMaximum Turbo Frequency 4.90 GHz\nCache 12MB\nCores  6\nThreads 12\nDefault TDP 125W\nMaximum Size  128 GB\nMaximum Speed 3200MHz\nType DDR4\nMax Number of Channels 2\nProcessor Graphics  Intel UHD Graphics 750\nBase Frequency  350 MHz\nMax Dynamic Frequency 1.30 GHz\nMax Video Memory  64 GB\nMax Resolution (HDMI): 4096x2160@60Hz\nMax Resolution (DP): 5120 x 3200 @60Hz\nMax Resolution (eDP - Integrated Flat Panel): 5120 x 3200 @60Hz\nCore Count 32', '3 Years'),
(6, 'INTEL CORE I7-11700 8 CORE 16 THREAD 11TH GEN PROCESSOR', 'INTEL CORE I7-11700 8 CORE 16 THREAD 11TH GEN PROCESSOR.jpg', '31,500', 'Brand  Intel\nModel  Core i7 11700\nBase Frequency  2.90 GHz\nMaximum Turbo Frequency  4.40 GHz\nCache  16MB\nCores  8\nThreads 16\nDefault TDP  65 W\nMaximum Size  128 GB\nMaximum Speed 3200MHz\nType  DDR4\nMax Number of Channels 2\nProcessor Graphics  Intel Iris Xe Graphics 32 (Rocket Lake S)\nBase Frequency  0.40 GHz\nMax Dynamic Frequency  1.35 GHz\nMax Video Memory  16 GB', '3 Years'),
(7, 'ASUS PRO B460M-C 10TH & 11TH GEN MICRO-ATX MOTHERBOARD', 'ASUS PRO B460M-C 10TH & 11TH GEN MICRO-ATX MOTHERBOARD.jpg', '11,200', 'Supported CPU	Intel Socket 1200 for 10th Gen Intel Core, Pentium Gold and Celeron Processors Supports Intel 14 nm CPU Supports Intel Turbo Boost Technology 2.0 and Intel Turbo Boost Max Technology 3.0\nChipset	Intel B460 Chipset\nMemory	Type DDR4 Slots 4 x DIMM slots Supported Memory 2933/ 2800/ 2666/ 2400/ 2133 MHz Non-ECC, Un-buffered Memory Dual Channel Memory Architecture Supports Intel Extreme Memory Profile (XMP) OptiMem Maximum Memory 128GB\nGraphics	Integrated Graphics Processor 2 x DisplayPort 1.4 1 x D-Sub 1 x HDMI 1.4b\nSlots	PCI 16-Lane CPU 1 x PCIe 3.0/2.0 x16 (x16 mode) Intel B460 Chipset 2 x PCIe 3.0/2.0 x1 1 x PCI M.2 Socket 1 x M.2 Socket 3, with M key, type 2242/ 2260/ 2280 storage devices support (both SATA & PCIE mode) 1 x M.2 Socket 3, with M Key, type 2242/ 2260/ 2280 storage devices support (x4 PCIE mode)\nSupported Storage	Total supports 2 x M.2 slots and 6 x SATA 6Gb/s ports Intel B460 Chipset : 1 x M.2 Socket 3, with M key, type 2242/ 2260/ 2280 storage devices support (both SATA & PCIE mode) 1 x M.2 Socket 3, with M Key, type 2242/ 2260/ 2280 storage devices support (x4 PCIE mode) 6 x SATA 6Gb/s port(s) Support Raid 0, 1, 5, 10 Intel Rapid Storage Technology supports Intel Optane Memory Ready\nLAN	Intel® I219V, 1 x Gigabit LAN Controller(s) ASUS LANGuard\nAudio	Realtek ALC887 7.1-Channel High Definition Audio CODEC *3 - Supports : Jack-detection, Multi-recording, Front Panel Jack-retasking, up to 24-Bit/192kHz playback\nUSB Port	Rear USB Port ( Total 6 ) 4 x USB 3.2 Gen 1 port(s) (4 x Type-A) 2 x USB 2.0 port(s) (2 x Type-A) Front USB Port ( Total 6 ) 2 x USB 3.2 Gen 1 port(s) 4 x USB 2.0 port(s)\nInternal I/O Ports	1 x CPU Fan connector(s) (1 x 4 -pin) 2 x Chassis Fan connector(s) (2 x 4 -pin) 1 x MONO out header (with Amp IC) 1 x USB 3.2 Gen 1(up to 5Gbps) connector(s) support(s) additional 2 USB 3.2 Gen 1 port(s) 2 x USB 2.0 connector(s) support(s) additional 4 USB 2.0 port(s) 1 x M.2 Socket 3 with M key, type 2242/2260/2280 storage devices support (SATA & PCIE 3.0 x 4 mode) 1 x M.2 Socket 3 with M Key, type 2242/2260/2280 storage devices support (PCIE mode only) 1 x LPT header 2 x COM port(s) connector(s) 6 x SATA 6Gb/s connector(s) 1 x 24-pin EATX Power connector(s) 1 x 8-pin ATX 12V Power connector(s) 1 x Front panel audio connector(s) (AAFP) 1 x Internal speaker connector(s) 1 x System panel(s) 1 x Chassis Intrusion connector(s) 1 x Clear CMOS jumper(s) 1 x LPC Debug header\nForm Factor	mATX Form Factor 9.6 inch x 9.6 inch ( 24.4 cm x 24.4 cm )\nBIOS	128 Mb Flash ROM, UEFI AMI BIOS', '3 Years'),
(8, 'ASUS PRIME B550M-K AM4 MICRO ATX AMD MOTHERBOARD', 'ASUS PRIME B550M-K AM4 MICRO ATX AMD MOTHERBOARD.jpg', '12,500', 'Supported CPU	AMD AM4 Socket for AMD Ryzen 5000 Series/ 4000 G-Series/ 3000 Series Desktop Processors\nChipset	AMD B550\nMemory	Type Dual Channel DDR4 Memory Technology Slots 4 x DIMM Supported Memory AMD Ryzen 5000 Series/ 3000 Series Desktop Processors: 4600(O.C)/4400(O.C)/4266(O.C.)/4133(O.C.)/4000(O.C.)/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3333(O.C.)/3200/3000/2800/2666/2400/2133 MHz Un-buffered Memory AMD Ryzen 4000 G-Series Processors: 4800(O.C.)/4600(O.C)/4466(O.C.)/4400(O.C)/4266(O.C.)/4133(O.C.)/4000(O.C.)/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3333(O.C.)/3200/3000/2800/2666/2400/2133 MHz Un-buffered Memory Maximum Mamory 128GB, DDR4\nGraphics	1 x D-Sub 1 x DVI-D 1 x HDMI 2.1(4K@60HZ)\nSlots	AMD Ryzen 5000 Series/ 3000 Series Desktop Processors 1 x PCIe 4.0 x16 (x16 mode) AMD Ryzen 4000 G-Series Processors 1 x PCIe 3.0 x16 (x16 mode) AMD B550 Chipset 2 x PCIe 3.0 x 1\nSupported Storage	Total supports 2 x M.2 slot(s) and 4 x SATA 6Gb/s ports AMD Ryzen 5000 Series/ 3000 Series Desktop Processors : 1 x M.2_1 socket 3, with M Key, Type 2242/2260/ 2280/ 22110(PCIE 4.0 x4 and SATA modes) storage devices support AMD Ryzen 4000 G-Series Processors : 1 x M.2_1 socket 3, with M Key, Type 2242/2260/2280/22110(PCIE 3.0 x4 and SATA modes) storage devices support AMD B550 Chipset : 1 x M.2_2 socket 3, with M Key, Type 2242/2260/2280 (PCIE 3.0 x4 and SATA modes) storage devices support 4 x SATA 6Gb/s port(s), Support Raid 0, 1, 10\nLAN	Realtek RTL8111H 1GB Ethernet ASUS LANGuard\nAudio	Realtek ALC887/897 7.1 Surround Sound High Definition Audio CODEC * - Supports : Jack-detection, Multi-streaming, Front Panel Jack-retasking, up to 24-Bit/192kHz playback Audio Feature : - LED-illuminated design - Audio Shielding - Dedicated audio PCB layers - Premium Japanese audio capacitors\nUSB Port	Rear USB Port ( Total 6 ) 2 x USB 3.2 Gen 2 port(s)(2 x Type-A) 4 x USB 3.2 Gen 1 port(s)(4 x Type-A) Front USB Port ( Total 6 ) 2 x USB 3.2 Gen 1 port(s)(2 x Type-A) 4 x USB 2.0 port(s)(4 x Type-A)\nInternal I/O Ports	Internal I/O Ports: 1 x CPU Fan connector(s) 2 x Chassis Fan connector(s) 1 x USB 3.2 Gen 1(up to 5Gbps) connector(s) support(s) additional 2 USB 3.2 Gen 1 port(s) 2 x USB 2.0 connector(s) support(s) additional 4 USB 2.0 port(s) 1 x M.2 Socket 3 with M Key, type 2242/2260/2280/22110 storage devices support (SATA mode & X4 PCIE mode) 1 x M.2 Socket 3 with M Key, type 2242/2260/2280 storage devices support (SATA mode & X4 PCIE mode) 1 x SPI TPM header 4 x SATA 6Gb/s connector(s) 1 x S/PDIF out header(s) 1 x 24-pin EATX Power connector(s) 1 x 8-pin EATX 12V Power connectors 1 x Front panel audio connector(s) (AAFP) 1 x Clear CMOS jumper(s) 1 x System panel connector 1 x COM port header 1 x Speaker connector\nExternal I/O Ports	1 x PS/2 keyboard/mouse combo port(s) 1 x DVI-D 1 x D-Sub 1 x HDMI 1 x LAN (RJ45) port(s) 2 x USB 3.2 Gen 2 (teal blue) (2 x Type-A) 4 x USB 3.2 Gen 1 (blue) Type-A 3 x Audio jack(s)\nForm Factor	mATX Form Factor 9.6 inch x 9.6 inch ( 24.4 cm x 24.4 cm )\nBIOS	256 MB Flash ROM, UEFI AMI BIOS\nHDMI	1 x HDMI 2.1 (4K@60Hz)', '3 Years'),
(9, 'CORSAIR VENGEANCE LPX 8GB DDR4 3200MHZ DESKTOP RAM', 'CORSAIR VENGEANCE LPX 8GB DDR4 3200MHZ DESKTOP RAM.jpg', '5,000', 'Capacity	8GB\nMemory Type	DDR4\nBus-Speed	3200Mhz\nMemory Platform	Desktop\nSingle/Dual sticks	Single\nNumber-of-Pin	288 Pin\nLatency	16-20-20-38\nVoltage	1.35V\nHeat sink type	Aluminum Heatsink\nRGB Type	None\nHeight	31mm', 'Lifetime'),
(10, 'G.SKILL RIPJAWS-V 8GB DDR4 2666MHZ DESKTOP RAM', 'G.SKILL RIPJAWS-V 8GB DDR4 2666MHZ DESKTOP RAM.jpg', '3,800', 'Capacity	8 GB\nMemory Type	DDR4\nBus-Speed	2666MHz\nMemory Platform	Dual Channel Kit\nNumber-of-Pin	15-15-15-35\nVoltage	1.20v\nOthers	Intel XMP 2.0 (Extreme Memory Profile) Ready', 'Lifetime'),
(11, 'WESTERN DIGITAL GREEN 120GB M.2 SSD', 'WESTERN DIGITAL GREEN 120GB M.2 SSD.jpg', '3,000', 'Capacity: 120GB\n\nSLC (single-level cell) caching boosts write performance to quickly perform everyday tasks. \n\nSequential read speeds of up to 545MB/s. \n\nUltra low power-draw so you can use your laptop PC for longer periods of time. \n\nAvailable in 2.5”/7mm cased and M.2 2280 models to accommodate most PCs. \n\nWD FIT Lab™ certification for compatibility across a wide range of laptop and desktop computers. \n\nFree downloadable software to monitor the status of your drive and clone a drive, or backup your data. ', '3 Years'),
(12, 'WESTERN DIGITAL GREEN 240GB M.2 SSD', 'WESTERN DIGITAL GREEN 240GB M.2 SSD.jpg', '3,500', 'Capacity 240GB\n\nSLC (single-level cell) caching boosts write performance to quickly perform everyday tasks. \n\nSequential read speeds of up to 545MB/s. \n\nUltra low power-draw so you can use your laptop PC for longer periods of time. \n\nAvailable in M.2 cased PCs. \n\nWD FIT Lab™ certification for compatibility across a wide range of laptop and desktop computers. \n\nFree downloadable software to monitor the status of your drive and clone a drive, or backup your data. ', '3 Years'),
(13, 'SEAGATE BARRACUDA 1TB 7200RPM SATA DESKTOP HDD', 'SEAGATE BARRACUDA 1TB 7200RPM SATA DESKTOP HDD.jpg', '3,600', 'Features\nType  SATA\nCapacity 1TB\nInterface  SATA 6Gb/s\nRPM Class  7,200 RPM\nRead/Write Speed  Read: 210MB/s\nDimensions\nDimension20 x 101 x 147mm\nWeight400 gm', '2 Years'),
(14, 'SEAGATE BARRACUDA 2TB 5400 RPM SATA DESKTOP HDD', 'SEAGATE BARRACUDA 2TB 5400 RPM SATA DESKTOP HDD.jpg', '5,800', 'Model: ST2000DM005\n Generation: 5400.14\n Package: Kit\n Capacity: 2TB\nInterface: SATA 6Gb/s\nCache: 64 MB\nDimension (LxWxH): 146.05 mm x 101.6 mm x 26.11 mm\nTypical Weight: 408 g \nAverage Operating Power: 6.19 W ', '2 Years'),
(15, 'GIGABYTE GEFORCE GT 1030 2GB OC GRAPHICS CARD', 'GIGABYTE GEFORCE GT 1030 2GB OC GRAPHICS CARD.jpg', '10,500', 'Memory Size	2 GB\nEngine Clock	GeForce® GT 1030\nMemory Type	GDDR5\nCore Clock	Boost: 1544 MHz/ Base: 1290 MHz in OC Mode Boost: 1518 MHz/ Base: 1265 MHz in Gaming Mode\nMemory Clock	6008 MHz\nCard Size	H=26.8 L=167.7 W=111.2 mm\nMemory Bus (Bit)	64 bit\nInterface (PCI Express)	DVI-D *1 HDMI-2.0b*1\nDirectX	12\nOpenGL	4.5', '2 Years'),
(16, 'GIGABYTE GEFORCE GTX 1050 TI OC 4B GRAPHICS CARD', 'GIGABYTE GEFORCE GTX 1050 TI OC 4B GRAPHICS CARD.jpg', '27,500', 'Graphics Chipset	GeForce GTX 1050 Ti\nMemory Size	4 GB\nMemory Type	GDDR5\nCUDA Cores (Nvidia)	768\nCore Clock	Boost: 1455 MHz / Base: 1341 MHz in OC mode Boost: 1430 MHz / Base: 1316 MHz in Gaming mode\nMemory Clock	7008 MHz\nCard Size	H=36 L=191 W=111 mm\nMemory Bus (Bit)	128 bit\nRecommended PowerSupply	300W\nResolution	7680x4320@60Hz\nInterface (PCI Express)	PCI-E 3.0 x 16\nDirectX	12\nPorts	HDMI-2.0b*1 Display Port-1.4 *1\nOpenGL	4.5', '2 Years'),
(17, 'ANTEC ATOM V550 550 WATT POWER SUPPLY', 'ANTEC ATOM V550 550 WATT POWER SUPPLY.jpg', '3,050', 'Power	550 Watt\nFan	120 mm\nInput	Voltage 100VAC - 240VAC Frequency Range 47-63Hz Current 5A\nOutput	Total Power 550W AC Input 230VAC 4A 47-63Hz DC Output +3.3V, +5V, +12V, -12V, +5Vsb', '2 Years'),
(18, 'WALTON 450W 80 PLUS BRONZE CERTIFIED POWER SUPPLY', 'WALTON 450W 80 PLUS BRONZE CERTIFIED POWER SUPPLY.jpg', '3,300', 'Type\nATX 12V\nMaximum power\n450W\nInput Voltage\n100-240 Vac\nInput Frequency Range\n50-60Hz\nInput current\n8A\nActive PFC\nPower factor Correction (PFC)\nEfficiency\n80 Plus Bronze Certified\nFan Size\n120mm', '1 Year'),
(19, 'LG 22MK600M 22 INCH IPS BORDERLESS FULL HD MONITOR', 'LG 22MK600M 22 INCH IPS BORDERLESS FULL HD MONITOR.jpg', '15,500', 'Screen Size	21.5\"\nDisplay Type	IPS\nBrightness	250cd/m2(Typ.) 200cd/m2(Min.)\nContrast Ratio	1000:1(Typ.)\nResolution	1920 X 1080\nResponse Time	5ms(Faster)\nViewing Angle	178/178\nColor Support	16.7M colors\nPower	Normal On(EPA Typ.): 13.5W|| Power Save/Sleep Mode(Max): Under 0.3W || Adapter: 100-240Vac, 50/60Hz\nI/O Port	HDMI - 2||D-Sub - 1||Headphone Out\nWeight	Set (with Stand):2.7|| Set (without Stand): 2.3\nDimensions	Set (with Stand): 488.7x182x386.7 || Set (without Stand): 488.7x66.8x293', '3 Years'),
(20, 'HP 22FW 21.5-INCH FULL HD IPS LED SLIM MONITOR', 'HP 22FW 21.5-INCH FULL HD IPS LED SLIM MONITOR.jpg', '15,500', 'Screen Size	21.5\"\nBrightness	300 cd/m²\nContrast Ratio	1000:1 static 10000000:1 dynamic\nAspect ratio	16:9\nResolution	1920 x 1080 @ 60 Hz\nResponse Time	5 ms gray to gray (with overdrive)\nViewing Angle	178° horizontal, 178° vertical', '3 Years'),
(21, 'A4 TECH KRS-83 WIRED MULTIMEDIA KEYBOARD', 'A4 TECH KRS-83 WIRED MULTIMEDIA KEYBOARD.jpg', '575', 'Keyboard: KRS-83\nKeycaps: A-Shape, Round Edge\nHotkeys: 12 FN Multimedia Hotkeys\nCharacter: Laser Engraving\nSplash Proof: Yes\nAdjustable Keyboard Legs: Yes\nRating: 5 V / 30 mA\nDimension: 449 × 150 × 23 mm\nWeight: 510 g\nCable Length: 150 cm\nHardware Connectivity: USB\nIlluminated: No\nSystem Requirements：Windows XP / Vista / 7 / 8 / 8.1 / 10', '1 Year'),
(22, 'A4TECH KB-8A SMART KEY KEYBOARD', 'A4TECH KB-8A SMART KEY KEYBOARD.jpg', '665', 'Keyboard: KB-8A\n\nKeycaps: Traditional\n\nHotkeys: No\n\nCharacter: Laser Engraving\n\nSplash Proof: Yes\n\nAdjustable Keyboard Legs: Yes\n\nRating: 5 V / 30 mA\n\nDemension: 459 × 165 × 25 mm\n\nWeight: 640 g\n\nCable Length: 150 cm\n\nHardware Connectivity: USB / PS2\n\nIlluminated: No\n\nSystem Requirements：Windows XP / Vista / 7 / 8 / 8.1 / 10', '1 Year'),
(23, 'A4 TECH OP-620D 2X CLICK WIRED USB MOUSE', 'A4 TECH OP-620D 2X CLICK WIRED USB MOUSE.jpg', '375', 'A4 Tech OP-620D, Type - Optical, Connectivity - Wired, 2X Click - Yes, Wheel - Yes, Dimension-  Mouse:4.68L x 2.48W x 1.39H in, Weight- 0.19 Ib.', 'No Warranty'),
(24, 'A4TECH OP-730D 2X CLICK OPTICAL WIRED MOUSE', 'A4TECH OP-730D 2X CLICK OPTICAL WIRED MOUSE.jpg', '300', 'Model：A4Tech OP-730D\nType: Wired\nErgonomic Design: Symmetric\nSensor: Optical\nResolution: 1000 DPI\nButtons No.: 4\nPort: USB\nCable Length: 150 cm\nSystem Requirements: Windows XP / Vista / 7 / 8 / 8.1 / 10', 'No Warranty'),
(25, 'A4 TECH BLOODY G200S USB GAMING HEADPHONE', 'A4 TECH BLOODY G200S USB GAMING HEADPHONE.jpg', '1,550', 'Headset\nSpeaker Unit: 50mm Driver\nFrequency Response: 20 Hz - 20 kHz\nSensitivity: 100 dB\nImpedance: 16 ohm\nMicrophone\nFrequency Response: 100 Hz-10 kHz\nSensitivity : - 44 dB\nCable\nMaterial: Tangle-Free Braided Cable\nCable Length: 200 cm\nPort: USB', '1 Year');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` int(11) NOT NULL,
  `member_image` varchar(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_designation` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`member_id`, `member_image`, `member_name`, `member_designation`, `facebook`, `linkedin`) VALUES
(1, 'user1.png', 'Faysal Mahmud', 'Developer', 'https://www.facebook.com/faysal.fmahmud', 'https://www.linkedin.com/in/faysalmahmud/'),
(2, 'user2.png', 'Ahammed Tarik Aziz', 'Developer', 'https://www.facebook.com/profile.php?id=100009249422674', 'https://www.linkedin.com/in/tarik-aziz-010227180/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `Email`, `password`, `status`, `created_at`) VALUES
(25, 'Aziz', '180204061@aust.edu', '$2y$10$PPcFYHlZZdnWE262ovdgOOeuGjLSFDFufW9ESDZC1bdjANEv2g.ki', 2, '2021-10-06 22:16:18'),
(26, 'Tarik', 'aziztarik816@gmail.com', '$2y$10$Wax2LiOJ5c4N4n9Xp2LGauxmI5/jEbftsOQcuztsAKbfadQdzhI8q', 2, '2021-10-07 16:59:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `private`
--
ALTER TABLE `private`
  ADD PRIMARY KEY (`private_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `private`
--
ALTER TABLE `private`
  MODIFY `private_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
