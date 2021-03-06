-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2014 at 08:27 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freelance`
--

--
-- Truncate table before insert `fx_activities`
--

TRUNCATE TABLE `fx_activities`;
--
-- Dumping data for table `fx_activities`
--

INSERT INTO `fx_activities` (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `icon`, `deleted`) VALUES
(1, 1, 'invoices', 1, 'INVOICE #411561 created.',  'fa-plus', 0),
(2, 1, 'invoices', 2, 'INVOICE #472449 created.',  'fa-plus', 0),
(3, 1, 'invoices', 2, 'INVOICE #472449 marked as Sent',  'fa-envelope', 0),
(4, 1, 'estimates', 1, 'Estimate #719365 created.', 'fa-plus', 0),
(5, 1, 'invoices', 1, 'Payment of USD 500 received and applied to INVOICE #411561',  'fa-usd', 0),
(6, 1, 'projects', 1, 'Admin created a project #53578',  'fa-coffee', 0),
(7, 1, 'projects', 1, 'Admin edited a project #53578',  'fa-coffee', 0),
(8, 1, 'projects', 1, 'Admin edited a project #53578',  'fa-coffee', 0),
(9, 1, 'projects', 1, 'Added a task API v1.0 callbacks',  'fa-tasks', 0),
(10, 1, 'projects', 1, 'Added a comment to Project #53578', 'fa-comment', 0),
(11, 1, 'projects', 1, 'Added a comment to Project #53578',  'fa-comment', 0),
(12, 1, 'bugs', 1, 'Created an Issue #694596',  'fa-plus', 0),
(13, 1, 'bugs', 1, 'Added a comment to a bug', 'fa-comment', 0),
(14, 1, 'bugs', 1, 'Marked Issue #694596 as Confirmed',  'fa-info', 0),
(15, 4, 'projects', 1, 'Added a comment to Project #53578', 'fa-comment', 0),
(16, 4, 'projects', 1, 'Added a task API v2.0 JSON returns FALSE',  'fa-tasks', 0),
(17, 4, 'projects', 1, 'Edited a task API v2.0 JSON returns FALSE',  'fa-tasks', 0),
(18, 4, 'projects', 1, 'Edited a task API v2.0 JSON returns FALSE', 'fa-tasks', 0),
(19, 5, 'projects', 1, 'Added a comment to Project #53578', 'fa-comment', 0);

--
-- Truncate table before insert `fx_bugs`
--

TRUNCATE TABLE `fx_bugs`;
--
-- Dumping data for table `fx_bugs`
--

INSERT INTO `fx_bugs` (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `last_modified`) VALUES
(1, 694596, 1, 1, 4, 'Confirmed', 'Low', '<blockquote>We built a Backbone Note application for your inspiration, It supports local storage and mysql data save. We also created a RESTful api to Get, Post, Put and Delete the data.</blockquote>', '');

--
-- Truncate table before insert `fx_bug_comments`
--

TRUNCATE TABLE `fx_bug_comments`;
--
-- Dumping data for table `fx_bug_comments`
--

INSERT INTO `fx_bug_comments` (`c_id`, `bug_id`, `comment_by`, `comment` ) VALUES
(1, 1, 1, 'We built a Backbone Note application for your inspiration, It supports local storage and mysql data save. We also created a RESTful api to Get, Post, Put and Delete the data.');

--
-- Truncate table before insert `fx_bug_files`
--

TRUNCATE TABLE `fx_bug_files`;
--
-- Truncate table before insert `fx_comments`
--

TRUNCATE TABLE `fx_comments`;
--
-- Dumping data for table `fx_comments`
--

INSERT INTO `fx_comments` (`comment_id`, `project`, `posted_by`, `message`,  `deleted`) VALUES
(1, 1, 3, 'Please let me know when Issue #3287 has been fixed. <br> <strong>Thanks</strong>', 'No'),
(4, 1, 5, '@DevTeam I keep getting Error 503 Authentication', 'No');

--
-- Truncate table before insert `fx_comment_replies`
--

TRUNCATE TABLE `fx_comment_replies`;
--
-- Truncate table before insert `fx_estimates`
--

TRUNCATE TABLE `fx_estimates`;
--
-- Dumping data for table `fx_estimates`
--

INSERT INTO `fx_estimates` (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`,  `emailed`, `invoiced`) VALUES
(1, '719365', '2', '11-12-2014', 'Looking forward to doing business with you.', 'Pending', '', 'No', 'No', 'No');

--
-- Truncate table before insert `fx_estimate_items`
--

TRUNCATE TABLE `fx_estimate_items`;
--
-- Dumping data for table `fx_estimate_items`
--

INSERT INTO `fx_estimate_items` (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`) VALUES
(1, 1, 'Laravel Web Application', 450, 1, 450),
(2, 1, 'Forge', 350, 2, 700);

--
-- Truncate table before insert `fx_files`
--

TRUNCATE TABLE `fx_files`;
--
-- Truncate table before insert `fx_invoices`
--

TRUNCATE TABLE `fx_invoices`;
--
-- Dumping data for table `fx_invoices`
--

INSERT INTO `fx_invoices` (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`,  `emailed`) VALUES
(1, '411561', '2', '22-01-2015', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No',  'No'),
(2, '472449', '2', '07-01-2015', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 31, 'Unpaid', 0, '2014-08-30 14:01:53', 'No', 'Yes');

--
-- Truncate table before insert `fx_items`
--

TRUNCATE TABLE `fx_items`;
--
-- Dumping data for table `fx_items`
--

INSERT INTO `fx_items` (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`) VALUES
(1, 1, 'Ruby REST API', 1000, 1, 1000),
(2, 1, 'Server Configuration', 250, 1, 250),
(3, 2, 'Domain Name http://gitbench.com', 11.9, 1, 11.9),
(4, 2, 'Domain SSL Installation', 56.3, 1, 56.3),
(5, 2, 'Email Setup', 50, 1, 50),
(6, 2, 'Website Development', 600, 1, 600);

--
-- Truncate table before insert `fx_items_saved`
--

TRUNCATE TABLE `fx_items_saved`;
--
-- Dumping data for table `fx_items_saved`
--

INSERT INTO `fx_items_saved` (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES
(1, 'Ruby REST API', 1000, 'No');

--
-- Truncate table before insert `fx_messages`
--

TRUNCATE TABLE `fx_messages`;
--
-- Truncate table before insert `fx_payments`
--

TRUNCATE TABLE `fx_payments`;
--
-- Dumping data for table `fx_payments`
--

INSERT INTO `fx_payments` (`p_id`, `invoice`, `paid_by`, `payment_method`, `amount`, `trans_id`, `notes`,  `month_paid`, `year_paid`, `inv_deleted`) VALUES
(1, 1, 1, '1', 500, '389629', 'Received via PayPal Payments Account', '08', '2014', 'No');

--
-- Truncate table before insert `fx_projects`
--

TRUNCATE TABLE `fx_projects`;
--
-- Dumping data for table `fx_projects`
--

INSERT INTO `fx_projects` (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`) VALUES
(1, 53578, 'Ruby RESTful API', 2, '30-08-2014', '14-01-2015', 5, 37, 'We built a Backbone Note application for your inspiration, It supports local storage and mysql data save. We also created a RESTful api to Get, Post, Put and Delete the data.', 4, 'Active', 'Off', 0, 19231, 'No', 'FALSE', 300);

--
-- Truncate table before insert `fx_project_timer`
--

TRUNCATE TABLE `fx_project_timer`;
--
-- Dumping data for table `fx_project_timer`
--

INSERT INTO `fx_project_timer` (`timer_id`, `project`, `start_time`, `end_time`) VALUES
(1, 1, '1409397153', '1409398384');

--
-- Truncate table before insert `fx_tasks`
--

TRUNCATE TABLE `fx_tasks`;
--
-- Dumping data for table `fx_tasks`
--

INSERT INTO `fx_tasks` (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `added_by`) VALUES
(1, 'API v1.0 callbacks', 1, '4', '<blockquote>We built a Backbone Note application for your inspiration, It supports local storage and mysql data save. We also created a RESTful api to Get, Post, Put and Delete the data.</blockquote>', 'Yes', 50, 'Off', 0, 100, 0, 'FALSE', 1),
(2, 'API v2.0 JSON returns FALSE', 1, '4', '<blockquote>We built a Backbone Note application for your inspiration, It supports local storage and mysql data save. We also created a RESTful api to Get, Post, Put and Delete the data.</blockquote>', 'Yes', 80, 'Off', 0, 50, 0, 'FALSE', 4);

--
-- Truncate table before insert `fx_tasks_timer`
--

TRUNCATE TABLE `fx_tasks_timer`;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
