
-- --
-- -- Database: `gin`
-- --
-- CREATE DATABASE IF NOT EXISTS `gin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
-- USE `gin`;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `orders`
-- --

-- CREATE TABLE IF NOT EXISTS `orders` (
--   `id` int(15) NOT NULL AUTO_INCREMENT,
--   `product_code` varchar(255) NOT NULL,
--   `product_name` varchar(255) NOT NULL,
--   `product_desc` varchar(255) NOT NULL,
--   `price` int(10) NOT NULL,
--   `units` int(5) NOT NULL,
--   `total` int(15) NOT NULL,
--   `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
--   `email` varchar(255) NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `products`
-- --

-- CREATE TABLE IF NOT EXISTS `products` (
--   `id` int(11) NOT NULL AUTO_INCREMENT,
--   `product_code` varchar(60) NOT NULL,
--   `product_name` varchar(60) NOT NULL,
--   `product_desc` tinytext NOT NULL,
--   `product_img_name` varchar(60) NOT NULL,
--   `qty` int(5) NOT NULL,
--   `price` decimal(10,2) NOT NULL,
--   PRIMARY KEY (`id`),
--   UNIQUE KEY `product_code` (`product_code`)
-- ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --
-- -- Dumping data for table `products`
-- --

-- INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
-- (1, 'GIN1', 'Malfy Gin', 'Distilled from Juniper, Coriander, Italian Pink Grapefruit, Rhubarb and 4 furtherbotanicals. 41% Alcohol.', 'gin1.jpg', 30, '350.00'),
-- (2, 'GIN2', 'Sugar Bird Gin', 'It’s got that lightly floral flavour that you’d expect from a quality gin, but – surprise! – you won’t expect the rare citrus twang, which is uniquely Sugarbird. You may also pick up notes of honeybush, rooibos, rose geranium, orange peel and buchu, originally sourced from the garden of one of our founders.', 'gin2.jpg', 25, '360.00'),
-- (3, 'GIN3', 'KWV Cruxland Gin', 'Cruxland's infusion of eight exotic signature botanicals and rare Kalahari !N'abbas is a world-first Also known as 'Kalahari truffles, this unique ingredient grows in the Kalahari region and is only harvested after the first rains by those who have the rare skill to do so.', 'gin3.jpg', 30, '350.00');

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `users`
-- --

-- CREATE TABLE IF NOT EXISTS `users` (
--   `id` int(11) NOT NULL AUTO_INCREMENT,
--   `fname` varchar(255) NOT NULL,
--   `lname` varchar(255) NOT NULL,
--   `address` varchar(255) NOT NULL,
--   `city` varchar(100) NOT NULL,
--   `pin` int(6) NOT NULL,
--   `email` varchar(255) NOT NULL,
--   `password` varchar(15) NOT NULL,
--   `type` varchar(20) NOT NULL DEFAULT 'user',
--   PRIMARY KEY (`id`),
--   UNIQUE KEY `email` (`email`)
-- ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --
-- -- Dumping data for table `users`
-- --

-- INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
-- (1, 'admin', 'admin', 'admin', 'admin', admin, 'admin@admin.com', 'password', 'admin');


-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
