-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 08:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companies`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_types`
--

CREATE TABLE `business_types` (
  `business_type_id` int(11) NOT NULL,
  `business_type` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `num_companies` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `business_companies` varchar(27) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `business_types`
--

INSERT INTO `business_types` (`business_type_id`, `business_type`, `num_companies`, `business_companies`) VALUES
(1, 'Visa Card', '', ''),
(2, 'Credit Card', '', ''),
(3, 'Debit Card', '', ''),
(4, 'PayPal', '', ''),
(5, 'Pyoneer', '', ''),
(6, 'Visa Card', '', ''),
(7, 'Credit Card', '', ''),
(8, 'Debit Card', '', ''),
(9, 'PayPal', '', ''),
(10, 'Pyoneer', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(27) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_trading_name` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_cat` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_email` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_website` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_phone` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_fax` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_country` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_state` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_postal_code` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_physical_address` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_zip_code` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_owner` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_capital_stack` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_annual_sales` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_num_employees` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_executive_director` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_director` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_auditor` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_logo` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_establish_date` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_reg_no` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_tax_reg_no` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_bank` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_payment_terms` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_start_work_at` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_end_work_at` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_daily_work_hours` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_activation_day` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_vat_no` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_product_range` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_experince_years` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_key_markets` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_key_customers` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_dealers_type` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_materials_used` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_minimum_quantity` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_business_seg` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_business_sub_seg` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_sample_lead_time` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_production_lead_time` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_overtime_threshold` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_techniques_used` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_start_of_acc_year` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_end_of_acc_year` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_imgs` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_breif` text COLLATE utf8_unicode_ci NOT NULL,
  `company_owner_img` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_city` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `company_trading_name`, `company_cat`, `company_email`, `company_website`, `company_phone`, `company_fax`, `company_country`, `company_state`, `company_postal_code`, `company_physical_address`, `company_zip_code`, `company_owner`, `company_capital_stack`, `company_annual_sales`, `company_num_employees`, `company_executive_director`, `company_director`, `company_auditor`, `company_logo`, `company_establish_date`, `company_reg_no`, `company_tax_reg_no`, `company_bank`, `company_payment_terms`, `company_start_work_at`, `company_end_work_at`, `company_daily_work_hours`, `company_activation_day`, `company_vat_no`, `company_product_range`, `company_experince_years`, `company_key_markets`, `company_key_customers`, `company_dealers_type`, `company_materials_used`, `company_minimum_quantity`, `company_business_seg`, `company_business_sub_seg`, `company_sample_lead_time`, `company_production_lead_time`, `company_overtime_threshold`, `company_techniques_used`, `company_start_of_acc_year`, `company_end_of_acc_year`, `company_imgs`, `company_breif`, `company_owner_img`, `company_city`, `company_address`) VALUES
(50, 'kurytygfrhj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"Debit Card\"]', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'iuhdoiuhf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'comp_6', 'trade_6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"Credit Card\"]', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 'lkfnfbnmnjrfnjfr', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\"\"', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 'ftff', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 'vfcds', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\"\"', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 'iuhdoiuhf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 'kjcbdbcjh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', '', '', '', 'null', '', 'null', 'null', 'null', 'null', '', '', '', '', '', '', 'null', '', '', '', '', '', '', ''),
(74, 'kjcbdbcjh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', '', '', '', 'null', '', 'null', 'null', 'null', 'null', '', '', '', '', '', '', 'null', '', '', '', '', '', '', ''),
(75, 'jkdcnj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 'kjjcj', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'الشركة', '', 'cat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 'الشركة 2', '', 'cat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'الشركة 2', '', 'cat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'avatar.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'avatar2.png', '', ''),
(82, 'test', '', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"1\"]', '', '', '', '', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'tetetetetetett', '', '', '', '', '', '', '\"\"', '\"\"', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\"\"', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\"\"', ''),
(85, 'comp_5', '', '', '', '', '', '', '\"\"', '\"\"', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\"\"', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\"\"', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_categories`
--

CREATE TABLE `company_categories` (
  `id` int(11) NOT NULL,
  `category_id` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` varchar(27) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_terms`
--

CREATE TABLE `payment_terms` (
  `payment_term_id` int(11) NOT NULL,
  `payment_name` varchar(27) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_terms`
--

INSERT INTO `payment_terms` (`payment_term_id`, `payment_name`) VALUES
(1, 'Visa Card'),
(2, 'Credit Card'),
(3, 'Debit Card'),
(4, 'PayPal'),
(5, 'Pyoneer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(27) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(27) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'mahmoud', '123456', 'mahmoud@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_types`
--
ALTER TABLE `business_types`
  ADD PRIMARY KEY (`business_type_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_categories`
--
ALTER TABLE `company_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_terms`
--
ALTER TABLE `payment_terms`
  ADD PRIMARY KEY (`payment_term_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_types`
--
ALTER TABLE `business_types`
  MODIFY `business_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `company_categories`
--
ALTER TABLE `company_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_terms`
--
ALTER TABLE `payment_terms`
  MODIFY `payment_term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
