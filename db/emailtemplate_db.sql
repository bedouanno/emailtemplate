-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 01:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emailtemplate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `etemp_category`
--

CREATE TABLE `etemp_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_category`
--

INSERT INTO `etemp_category` (`id`, `category_name`) VALUES
(1, 'APPS'),
(2, 'Form'),
(3, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `etemp_subject_extension`
--

CREATE TABLE `etemp_subject_extension` (
  `id` int(11) NOT NULL,
  `extension_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_subject_extension`
--

INSERT INTO `etemp_subject_extension` (`id`, `extension_name`) VALUES
(3, 'Website Access'),
(1, 'Website Update(s)');

-- --------------------------------------------------------

--
-- Table structure for table `etemp_tags`
--

CREATE TABLE `etemp_tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_tags`
--

INSERT INTO `etemp_tags` (`id`, `tag_name`) VALUES
(5, 'access'),
(18, 'analytics'),
(37, 'audio'),
(35, 'autoplay'),
(52, 'blog'),
(42, 'cache'),
(16, 'calendar'),
(7, 'client complaint'),
(14, 'client inquire'),
(53, 'content posting'),
(48, 'copyright'),
(30, 'cpanel'),
(3, 'dev'),
(41, 'error'),
(31, 'follow up'),
(33, 'fonts'),
(29, 'ftp'),
(11, 'google'),
(12, 'google search'),
(17, 'guidelines'),
(49, 'image'),
(20, 'inquiry'),
(21, 'ip blocker'),
(46, 'job listing'),
(47, 'listing'),
(51, 'local link'),
(6, 'login'),
(32, 'logo'),
(2, 'maintenance'),
(24, 'malware'),
(27, 'music'),
(13, 'newly launched'),
(50, 'other'),
(40, 'plugin'),
(9, 'qa task'),
(39, 'request'),
(25, 'security'),
(1, 'seo'),
(54, 'smm'),
(19, 'ssl'),
(26, 'unlicensed '),
(36, 'video'),
(28, 'website access'),
(15, 'website files'),
(22, 'wp access'),
(8, 'wp dashboard'),
(44, 'wp update'),
(43, 'wp version');

-- --------------------------------------------------------

--
-- Table structure for table `etemp_templates`
--

CREATE TABLE `etemp_templates` (
  `id` int(11) NOT NULL,
  `template_name` varchar(225) NOT NULL,
  `template_body` text NOT NULL,
  `template_category` varchar(225) NOT NULL,
  `template_date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `template_created_by` int(11) NOT NULL,
  `template_subject_ext` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_templates`
--

INSERT INTO `etemp_templates` (`id`, `template_name`, `template_body`, `template_category`, `template_date_created`, `template_created_by`, `template_subject_ext`) VALUES
(1, 'Maintenance', 'Dear Valued Client,<br />\r\n<br />\r\nWe have implemented your requested change(s) on the website:<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><strong>xxxxxxxxxxxxyour orchestra entry will be pasted herexxxxxxxxxxx</strong></span><br />\r\n<br />\r\n<span style=\"color:#c0392b\"><em>======== use text below when instructions are all implemented</em></span><br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<span style=\"color:#c0392b\"><em>======== use text below when there are unimplemented instructions</em></span><br />\r\n<br />\r\nWe are still working on the rest of your instructions.&nbsp; We will send you updates once done.<br />\r\n<br />\r\n<span style=\"color:#c0392b\"><strong>Note: if design na lang ang kulang and for approval pa no need mag we are still working...</strong></span><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 05:51:40', 3, NULL),
(2, 'DEV', 'Dear Valued Client,<br />\r\n<br />\r\nWe have implemented your requested change(s) on the website:<br />\r\n<br />\r\n<span style=\"color:#3498db\"><strong>xxxxxxxxxxxxyour orchestra entry will be pasted herexxxxxxxxxxx</strong></span><br />\r\n<br />\r\n<span style=\"color:#c0392b\"><em>======== use text below when there are unimplemented instructions</em></span><br />\r\n<br />\r\nWe are still working on the rest of your instructions. We will send you updates once done.<br />\r\n<br />\r\n<span style=\"color:#c0392b\"><strong>Note: if design na lang ang kulang and for approval pa no need mag we are still working... and dili npd butngan ug should you have...</strong></span><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Design Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 05:20:06', 3, NULL),
(3, 'Cannot login to WP Dashboard - Client\'s Complaint', 'Dear Valued Client,<br />\r\n<br />\r\nWe were informed that you were unable to log in to your WordPress Dashboard.<br />\r\n<br />\r\nThis is because we have recently customized all websites that are hosted by Proweaver to maximize online security. More importantly, we do this as a preventive measure that will help us reduce the risk of unauthorized logins into the management page of your website.<br />\r\n<br />\r\nMoving forward, if you wish to access your WordPress Dashboard, please provide us the IP address of your local network, which your desktop computer is currently using. We will add your IP address to our Trusted List. If you do not know the IP address of your local network, please visit the link below:<br />\r\n<br />\r\n<a href=\"http://whatismyipaddress.com/ds-check\" target=\"_blank\">http://whatismyipaddress.com/ds-check</a><br />\r\n<br />\r\nWith this, you will be able to determine your IP address when this webpage loads on your browser. After getting your IP address, you can then forward it to our team. We will immediately send you a confirmation that your IP address has been added to the Trusted List.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nThank you.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 05:30:42', 3, NULL),
(4, 'Cannot login to WP Dashboard - Client did not yet complain', 'Dear Valued Client,<br />\r\n<br />\r\nPlease be informed that you may experience difficulties when logging into your WordPress Dashboard. This is because we recently customized all websites hosted by Proweaver to increase security. More importantly, this is a preventive measure to reduce the risk of unauthorized logins to the management page of your website.<br />\r\n<br />\r\nMoving forward, if you wish to access your WordPress Dashboard, please provide us the IP address of your local network your desktop computer is currently using. We will add your IP address to our Trusted List. If you do not know the IP address of your local network, please visit the link below:<br />\r\n<br />\r\n<a href=\"http://whatismyipaddress.com/ds-check\" target=\"_blank\">http://whatismyipaddress.com/ds-check</a><br />\r\n<br />\r\nYou will be able to determine your IP address when this webpage loads on your browser. After getting your IP address, you can forward it to our team. We will then send you a confirmation that your IP address has been added to the Trusted List.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nThank you.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n{control number}', '1', '2023-04-12 05:30:51', 3, NULL),
(5, 'Not Searchable in Google or Yahoo (launched 1 month or more)', 'Dear Valued Client,<br />\r\n<br />\r\nAll of your keywords have already been populated on your website&rsquo;s pages, which has also been long submitted to search engines, like Google and Yahoo, to name a few.<br />\r\n<br />\r\nWe guarantee that your site&rsquo;s search engine ranking will improve over time. Remember, we are always here to help you. Aside from that, we can also add more keywords to continuously update your website&rsquo;s popularity. To start, if somebody would be looking for a company with the services you are offering, what words and phrases would that person most likely search on Google?<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nWe look forward to your reply. Together, let us make your website&rsquo;s popularity happen.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n{control number}', '1', '2023-04-12 05:39:12', 3, NULL),
(6, 'Apps - Not Searchable in Google or Yahoo (Newly launched)', 'Dear Valued Client,<br />\r\n<br />\r\nWe would like you to know that search engines, like Google and Yahoo, do not show a website right away upon launching. This would usually take some time. In our experience as website developers, there&rsquo;s no definite time frame for this progress. Most of the time, your ranking should appear in a week or two, and sometimes, even longer. While we&rsquo;ve submitted your website to these search engines, they would still have to &lsquo;index&rsquo; your website in their databases.<br />\r\n<br />\r\nAlso, please bear in mind that your website was launched just a few days ago. It should appear in Google and Yahoo soon.<br />\r\n<br />\r\n<em><span style=\"color:#2980b9\">{website URL here}</span></em><br />\r\n<br />\r\nShould there be anything else we can do to help you, let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n{control number}', '1', '2023-04-12 05:39:15', 3, NULL),
(7, 'Website Files', 'Dear Valued Client,<br />\r\n<br />\r\n<em><span style=\"color:#3498db\">// use if files are attached</span></em><br />\r\nAs requested, we are sending herewith the files of your website. Please download the attached zipped folder.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\n<span style=\"color:#3498db\"><em>//use if files are to be downloaded thru link</em></span><br />\r\nAs requested, we are sending herewith the files of your website. Please click on the link below.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{downloadable link here}</em></span><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n{control number}', '1', '2023-04-12 05:40:00', 3, NULL),
(8, 'Google Analytics', 'Dear Valued Client,<br />\r\n<br />\r\nWe have added Google Analytics on your website.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nTo manage your Google Analytics account and view your website&#39;s statistics, please use the information below:<br />\r\n<br />\r\n<a href=\"https://analytics.google.com/\" target=\"_blank\">https://analytics.google.com/</a><br />\r\nEmail: <span style=\"color:#2980b9\"><em>{email here}</em></span><br />\r\nPassword: {password here}<br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 05:40:04', 3, NULL),
(9, 'Google Calendar', 'Dear Valued Client,<br />\r\n<br />\r\nWe have updated your website:<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{page title here}</em></span><br />\r\n- added calendar on content area<br />\r\n<span style=\"color:#2980b9\"><em>{page link here}</em></span><br />\r\n<br />\r\nYou need to log in to Google in order to manage the events on the calendar:<br />\r\n<br />\r\n1. Go to this link:<br />\r\n<a href=\"http://www.google.com/calendar\" target=\"_blank\">&nbsp;http://www.google.com/calendar</a><br />\r\n&nbsp;Email: <span style=\"color:#2980b9\"><em>{email here}</em></span><br />\r\n&nbsp;Password: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n2. Click any time on the calendar that doesn&#39;t already have an event scheduled.<br />\r\n3. Enter your event name.<br />\r\n4. Choose {company name here} calendar to add the event from the &quot;<strong>Calendar</strong>&quot; dropdown menu.<br />\r\n5. To add guests or other details, click more options.<br />\r\n6. Click Save.<br />\r\n<br />\r\nTip: To create a longer event, drag your mouse down the page while you&#39;re selecting the time.<br />\r\n&nbsp;<br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n&nbsp;<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n{control number}', '1', '2023-04-12 05:39:50', 3, NULL),
(10, 'What is SSL', 'Dear Valued Client,<br />\r\n<br />\r\nIn regard to your concern about your website not being secure, it is because your website is not using a private connection. Someone might be able to see or change the information you send or get through your website. If you&#39;re using Google Chrome as your browser, you can see on the left side of your domain link the words &quot;Not secure&quot;, this is one way to know that your website is not secure, since Google is concerned about user safety and privacy, Google Chrome checks all the website connection whether it&#39;s secure or not.<br />\r\n<br />\r\nIn order to prevent this, your website needs Secure Sockets Layer, or commonly known as SSL certificate.<br />\r\n<br />\r\nSSL (Secure Sockets Layer) is the standard security technology for establishing an encrypted link between a web server and a browser. This link ensures that all data passed between the web server and browsers remain private and integral. SSL is an industry standard and is used by millions of websites in the protection of their online transactions with their customers.<br />\r\n<br />\r\nYou can purchase the SSL certificate from your hosting provider or you can choose from different sellers. Below is a link to further explain where to get an SSL certificate:<br />\r\n<br />\r\n<a href=\"https://www.quora.com/Should-I-get-my-SSL-certificate-from-host-service-or-domain-registrar\" target=\"_top\">https://www.quora.com/Should-I-get-my-SSL-certificate-from-host-service-or-domain-registrar</a><br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website link here}</em></span><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 05:39:53', 3, NULL),
(11, 'IP Address Blocker (Provided by client)', 'Dear Valued Client,<br />\r\n<br />\r\nThank you.<br />\r\n<br />\r\nWe have added your IP Address to our Trusted List. You can now log in to your WordPress Dashboard.<br />\r\n<br />\r\nLink: <span style=\"color:#2980b9\"><em>{admin login link here}</em></span><br />\r\nUsername: <span style=\"color:#3498db\"><em>{username here}</em></span><br />\r\nPassword: <span style=\"color:#3498db\"><em>{password here}</em></span><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:21', 3, NULL),
(12, 'Malware Attack', 'Dear Valued Client,<br />\r\n<br />\r\n<span style=\"color:#3498db\"><em>// use if hosted by Proweaver</em></span><br />\r\nWe have successfully fixed your website.<br />\r\n<br />\r\n<span style=\"color:#2980b9\">{website URL here}</span><br />\r\n<br />\r\nFor some reason, a malware has illegally injected malicious codes and files on your website. Many other websites all over the world have recently reported similar security issues, as well.<br />\r\n<br />\r\nIt may take a day or two for your site to be back online. Rest assured that our IT personnel are currently working 24/7 to deal with this threat.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>// use if not hosted by Proweaver</em></span><br />\r\nYour website is now back online. We restored your index file from our backup files. We also removed the malwares and malicious codes injected on your website. Please check:<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nPlease consider changing your FTP password to make sure that there are no unauthorized access to your website files. You may contact your hosting provider for assistance.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>// use for Google concerns</em></span><br />\r\nWe already fixed your website. A certain malware, which also recently attacked thousands of websites all over the world, has inserted malicious codes and files on your website. But rest assured, we have successfully removed these codes/files for your convenience.<br />\r\n<br />\r\nHowever, it may take some time for Google to remove the warning from your website. With this malware outbreak, Google has been flooded with several requests for status updates.<br />\r\n<br />\r\n<span style=\"color:#3498db\"><em>{website URL here}</em></span><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:23', 3, NULL),
(13, 'Unlicensed Background Music', 'Dear Valued Client,<br />\r\n<br />\r\nWe received instructions to use &quot;<span style=\"color:#c0392b\"><em>{song title here}</em></span>&quot; by <span style=\"color:#c0392b\"><em>{artist here}</em></span> on your website. Before we can do this, we need to make sure that you have secured a license to use this music on your website to avoid copyright. If you do not know how to obtain a license for this, we recommend that you go to online music stores and ask how to accomplish this. The license needs to be for commercial/public use since we will be using it on your website.<br />\r\n<br />\r\nFor the meantime, we highly recommend that you choose from our library of licensed music. This is the link where you can view and listen to the choices available:<br />\r\n<br />\r\n<a href=\"http://proweaver.me/music/page\" target=\"_blank\">http://proweaver.me/music/page</a><br />\r\n<br />\r\nPlease let us know which title you want to use, so we can update your website accordingly.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:26', 3, NULL),
(14, 'Wrong FTP/cPanel (Not hosted by Proweaver)', 'Dear Valued Client,<br />\r\n<br />\r\nWe tried to access your website to make your requested updates. However, we were unable to access it using these credentials:<br />\r\n<br />\r\nHostname: <span style=\"color:#2980b9\"><em>{hostname here}</em></span><br />\r\nUsername: <span style=\"color:#2980b9\">{<em>username here}</em></span><br />\r\nPassword: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n<br />\r\nCan you please provide us the correct FTP access? These would greatly help us in keeping your website up and running.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nWe look forward to your reply.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n{control number}', '1', '2023-04-12 03:33:27', 3, NULL),
(15, 'Updated WP Admin Logo', 'Dear Valued Client,<br />\r\n<br />\r\nWe have successfully updated your website:<br />\r\n<br />\r\nWordPress Admin Login<br />\r\n<span style=\"color:#2980b9\">- <em>(phrase here)<br />\r\n{website URL here}</em></span><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:28', 3, NULL),
(16, 'Website Visibility on Search Engine Email Template', 'Dear Valued Client,<br />\r\n<br />\r\nUpon checking on your concern, it appears that your website is not yet visible on Google. However, it is already indexed and cached.<br />\r\n<br />\r\nPlease take into consideration that it has just been almost 2 weeks since your website was launched. It would take months before your website shows up organically, considering that no search engine optimizations are being done.<br />\r\n<br />\r\nNonetheless, if you would wish that your website has a better ranking and visibility on Google, you can avail of our SEO service. With this service, we can rank your website in a specific area using the keywords that correspond to your website&rsquo;s niche.<br />\r\n<br />\r\n<span style=\"color:#e74c3c\"><em>// use if client&#39;s query is: site isn&#39;t searchable using general keyword and only visible if using whole company name</em></span><br />\r\nThank you for raising this concern. Technically, you will not find your company when searching the keyword alone, since that keyword is not optimized on your website yet. However, your website is visible when searching for your entire company name, &quot;<span style=\"color:#c0392b\"><strong>Company Name</strong></span>&quot;. Please see (link/screenshot).<br />\r\n<br />\r\nOn the other hand, if you would wish that your website has better visibility on Google, you can avail of our SEO service. With this service, we can rank your website in a specific area using the keywords that correspond to your website&rsquo;s niche. When your website is ranked on the first page of Google Search Engine Results(SERP) by using specific keywords and locations, there&#39;s a bigger possibility that you can gather more potential clients/customers.<br />\r\n<br />\r\nShould you have any other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n{control number}', '1', '2023-04-12 03:33:30', 3, NULL),
(17, 'Updated Images on Google Business Listing', 'Dear Valued Client,<br />\r\n<br />\r\nThe Google Business Listing&#39;s photos are already updated.<br />\r\n<br />\r\nPlease check the link below:<br />\r\n<span style=\"color:#2980b9\"><em>{google business listing&#39;s lists of uploaded photos link}</em></span><br />\r\n<br />\r\n<strong>Google Access:</strong><br />\r\nEmail: <span style=\"color:#2980b9\"><em>{username here}</em></span><br />\r\nPassword: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n<br />\r\nHowever, the changes made are still pending for verification from Google. And, it may take a lot of time for the changes to appear on the search results.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:31', 3, NULL),
(18, 'Clearing Browser\'s Cache on an iPad', 'Dear Valued Client,<br />\r\n<br />\r\nTo view the updates properly on your desktop, hold down &quot;<strong>Ctrl</strong>&quot; and press &quot;<strong>F5</strong>&quot; on your keyboard to clear your browser&#39;s cache.<br />\r\n<br />\r\nAlso, below are the steps for clearing your browser&#39;s cache on your iPad:<br />\r\n<br />\r\n1. Launch the &quot;<strong>Settings</strong>&quot; app on your iPad through the home screen.<br />\r\n2. Scroll down the menu and select &quot;<strong>Safari</strong>&quot;.<br />\r\n3. Scroll down to the bottom of right-hand panel and tap on &quot;<strong>Clear History and Website Data</strong>&quot;<br />\r\n4. Confirm by tapping &quot;<strong>Clear</strong>&quot; from the pop-up window.<br />\r\n<br />\r\nFor more information about clearing your browser&#39;s cache, please visit the link below:<br />\r\n<a href=\"https://support.apple.com/en-us/HT201265\" target=\"_blank\">https://support.apple.com/en-us/HT201265</a><br />\r\n<br />\r\nShould there be anything else we can do to help you, let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:34', 3, NULL),
(19, 'Updating Social Media Links Steps', 'Dear Valued Client,<br />\r\n<br />\r\nTo manage your social media links, follow the steps below:<br />\r\n<br />\r\n1. Go to Dashboard (Use the login details below).<br />\r\n<br />\r\n&nbsp;Link: <span style=\"color:#2980b9\"><em>{website link here}</em></span><br />\r\n&nbsp;Username: <span style=\"color:#2980b9\"><em>{username here}</em></span><br />\r\n&nbsp;Password: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n&nbsp;<br />\r\n2. Hover &#39;<strong>Appearance</strong>&#39; tab on the left column of your Dashboard and click &#39;<strong>Widgets</strong>&#39;.<br />\r\n&nbsp;&nbsp;&nbsp; &gt; Open the button &#39;<strong>Footer Social Media</strong>&#39; and click &#39;<strong>Classic Text Widget</strong>&#39;.<br />\r\n&nbsp;&nbsp;&nbsp; &gt; You will see a text field wherein you&#39;ll add or remove your social media links.<br />\r\n&nbsp;&nbsp;&nbsp; &gt; After adding or removing your social media links, click the &#39;Save&#39; button below the text field.<br />\r\n&nbsp;&nbsp; &nbsp;<br />\r\n3. Refresh the page to see the updates.<br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:35', 3, NULL),
(20, 'Submit Google Business Listing', 'Dear Valued Client,<br />\r\n<br />\r\nWe have created the information to Google Business Listing. However, it will not appear on maps or in search engines online until you verify your business. We can edit your business details, but it will not take effect until you complete the verification process.<br />\r\n<br />\r\nYour postcard that contains the verification code will arrive within 1&ndash;2 weeks at this location:<br />\r\n&nbsp;<br />\r\n<span style=\"color:#2980b9\"><em>{company address}</em></span><br />\r\n<br />\r\nOnce you received the postcard, please send us a screenshot of the code for us to verify your Google Business Listing. Please make sure to send it right away upon receiving since the code may expire after 30 days, or you may verify it on your end.<br />\r\n<br />\r\nHowever, if you have verified your account, you need to log in and add the code in the link provided below:<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{google business link account}</em></span><br />\r\n<br />\r\nPlease refer to the following information for your Google Business Gmail account:<br />\r\nEmail: <span style=\"color:#e74c3c\"><strong>sample@sample.com</strong></span><br />\r\nPassword: <span style=\"color:#e74c3c\"><strong>1234</strong></span><br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website link}</em></span><br />\r\n<br />\r\n&nbsp;<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:38', 3, NULL),
(21, 'Server Maintenance (Website Temp Down)', 'Dear Valued Client,<br />\r\n<br />\r\nWe checked your website, and it&#39;s now working properly. Please be informed that your website&#39;s temporary downtime was caused by the hosting provider&#39;s server maintenance.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website link}</em></span><br />\r\n<br />\r\nIf the problem persists, please send us a screenshot, so we can do further troubleshoot. Should you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:39', 3, NULL),
(22, 'Blog Posting', 'Dear Valued Client,<br />\r\n<br />\r\nWe have updated your website with a new blog. You can click on the link provided below to check the article we have posted on your site.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{post link}</em></span><br />\r\n<br />\r\n&nbsp;If you have any questions and concerns about this update, please do not hesitate to get in touch with us. We will be glad to cater to you anytime.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n&nbsp;<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:42', 3, NULL),
(23, 'Blog Posting (Articles For Approval)', 'Dear Valued Client,<br />\r\n<br />\r\nWe are done writing articles according to your business interests. Here is your copy of the blogs for the month of {month and year}.<br />\r\n<br />\r\nWe chose topics that are relevant to your business, which will also allow us to use the keywords/phrases that will help your online popularity.<br />\r\n<br />\r\n<span style=\"color:#d35400\"><em>================== Article Starts Here ==============</em></span><br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{insert articles here}</em></span><br />\r\n<br />\r\n<span style=\"color:#d35400\"><em>================== Article Ends Here ==============</em></span><br />\r\n<br />\r\nUpon your approval, we will upload the blogs, which is one way to increase traffic to your website.<br />\r\n<br />\r\nMoving forward, do you have suggestions or topics you would prefer for us to write about for next month&#39;s batch of Blogs? Feel free to send your comments. We highly appreciate your input.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:43', 3, NULL),
(24, ' Email Creation', 'Dear Valued Client,<br />\r\n<br />\r\nAs requested, we have set up this email address:<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{created email}</em></span><br />\r\n<br />\r\nTo access, here are the webmail links:<br />\r\n<br />\r\nFor Computers:<br />\r\n<span style=\"color:#e74c3c\"><em>http://webmail.{domain-name}.com</em></span><br />\r\n<br />\r\nFor Mobile Devices:<br />\r\n<span style=\"color:#e74c3c\"><em>http://mail.{domain-name}.com/mobile</em></span><br />\r\nor<br />\r\n<span style=\"color:#e74c3c\"><em>http://webmail.{domain-name}.com/mobile/</em></span><br />\r\n<br />\r\nSample login:<br />\r\nEmail Address (should be complete email): <span style=\"color:#2980b9\"><em>{email address}</em></span><br />\r\nPassword (temporary): <span style=\"color:#2980b9\">{password}</span><br />\r\n<br />\r\nTo change your password, click on &quot;Settings&quot; found in the upper-right corner of the webmail.<br />\r\n<br />\r\nShould you have other concerns, please let us know right away.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:45', 3, NULL),
(25, 'Proweaver Server Down', 'Dear Valued Client,<br />\r\n<br />\r\nWe&#39;d like to inform you that due to some technical difficulties, our servers were down. However, our IT staff have already fixed the issues. Your website is now back online. Please clear your browser&#39;s cache first to delete unnecessary data saved from your browser.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website link here}</em></span><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:46', 3, NULL),
(26, 'How to Make Changes on WP (Classic Editor)', 'Dear Valued Client,<br />\r\n<br />\r\nPlease see below for the steps on making changes on your website:<br />\r\n<br />\r\n1. Login to your Dashboard using the WordPress login details below:<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Login Link: <span style=\"color:#2980b9\"><em>{login link here}</em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Username: <span style=\"color:#2980b9\"><em>{username here}</em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n<br />\r\n2. To add, delete or update pages, locate then click &quot;<strong>Pages</strong>&quot; on the left most section of the dashboard.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOTE: All Pages - lists all pages of your website, Add New &ndash; allows you to add a new page<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.1. To make updates, click on the page you want to update. This will take you to a new window which allows you to make changes on that page. You can also hover on the page you want to update, and options will show below the title.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.1.1. Please take note, there are 2 ways to edit the text contents on certain page of your website. It&#39;s either &quot;<strong>Visual</strong>&quot; or &quot;<strong>Text</strong>&quot;. If you are not capable of editing your website by adding HTML codes. You may select &quot;<strong>Visual</strong>&quot; to add contents. If it&#39;s the other way around, you may select &quot;<strong>Text</strong>&quot;. Also, these options can be found on the upper right portion of the content area text editor.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.1.2. After updating or adding new text contents, you may click on Update, blue button at the right column of the said page. It will then show a message &quot;<strong>Page updated</strong>&quot; and &quot;<strong>View Page</strong>&quot; link to view the said changes online at the top of the editor page, an indicator that the update has been saved.<br />\r\n3. To add images on a page, click on a page you want to add an image.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.1. Locate &quot;<strong>Add Media</strong>&quot; tab on the upper left portion of the content area, above the text editor.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOTE: There are two ways to add images, add current images you have on your Media Library or Upload Files<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.2 Through Media Library<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.2.1 Click on the images you want to add, you may select multiple images by pressing hold &quot;<strong>Ctrl</strong>&quot; key then clicking on the images you want to add.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.2.2 After choosing the images, click &quot;<strong>Insert into page</strong>&quot; on the bottom right of the pop-up window.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.3 Through Upload Files<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.3.1 You can either &quot;<strong>Drag and Drop</strong>&quot; files on the pop window or &quot;<strong>Select Files</strong>&quot; to upload, the images you uploaded will automatically be selected.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.3.2 Once done uploading, click &quot;<strong>Insert into page</strong>&quot; on the bottom right of the pop window.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOTE: You can only upload images with a maximum file size of 128 MB.<br />\r\n<br />\r\nOnce done, hover &quot;<strong>Howdy, <span style=\"color:#c0392b\"><em>{username}</em></span></strong>&quot; on the upper right portion of your dashboard then click &quot;<strong>Log Out</strong>&quot; to avoid unnecessary changes.<br />\r\n<br />\r\nTo further make changes, please click on the link below to download the user manual:<br />\r\n<br />\r\n<strong><span style=\"color:#c0392b\"><em>https://{domain here}/User_Manual_Wordpress.pdf</em></span></strong><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:29', 3, NULL),
(27, 'Uploaded Site to Local Link', 'Dear Valued Client,<br />\r\n<br />\r\nAs requested, please see below for the new website link:<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website local link here}</em></span><br />\r\n<br />\r\nAlso, below are your WordPress Dashboard and Online Forms Database Panel login credentials.<br />\r\n<br />\r\n<strong>WordPress Dashboard</strong><br />\r\n<span style=\"color:#2980b9\"><em>{wordpress login here}</em></span><br />\r\nUsername: <span style=\"color:#2980b9\"><em>{username here}</em></span><br />\r\nPassword: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n<br />\r\n<strong>Online Forms Database Panel</strong><br />\r\n<span style=\"color:#2980b9\"><em>{onlineforms panel login here}</em></span><br />\r\nUsername: <span style=\"color:#2980b9\"><em>{username here}</em></span><br />\r\nPassword: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Design Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:26', 3, NULL),
(28, 'No FTP/cPanel Credentials', 'Dear Valued Client,<br />\r\n<br />\r\nPlease be informed that in order for us to make your requested updates and to deliver better output, we need your FTP login access. These would greatly help us in keeping your website up and running.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nWe look forward to your reply.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Design Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:25', 3, NULL),
(29, 'Already Implemented Instruction', 'Dear Valued Client,<br />\r\n<br />\r\nUpon checking your website on different browsers, we found out that it has already been updated based on your instructions. To view the updates properly, please hold down the &quot;<strong>Ctrl</strong>&quot; button and press &quot;<strong>F5</strong>&quot; on your keyboard to clear your browser&#39;s cache.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:23', 3, NULL),
(30, ' Wrong FTP/cPanel but Task Can Be Done on Dashboard Only', 'Dear Valued Client,<br />\r\n<br />\r\nWe have implemented your requested change(s) on the website:<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{entries here}</em></span><br />\r\n<br />\r\nPlease take note that the changes made are those that do not require us to make changes to your website files through FTP because we weren&#39;t able to access it using these credentials:<br />\r\n<br />\r\nHostname: <span style=\"color:#2980b9\"><em>{hostname here}</em></span><br />\r\nUsername: <span style=\"color:#2980b9\"><em>{username here}</em></span><br />\r\nPassword: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n<br />\r\nPlease provide us with the correct FTP credentials because this will greatly help us keep track of your changes by creating a systematic backup of your website files every after those changes and so that we can keep your website up and running.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website URL here}</em></span><br />\r\n<br />\r\nWe look forward to your reply.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:21', 3, NULL),
(31, 'Copyright Information for the Images on the Website', 'Dear Valued Client,<br />\r\n<br />\r\nBelow is the copyright information for the images on your website:<br />\r\n<br />\r\n<span style=\"color:#7f8c8d\">=======================</span><br />\r\n<br />\r\n&copy; Copyright <span style=\"color:#c0392b\"><em>{year}</em></span> by <span style=\"color:#c0392b\"><em>{company name}</em></span><br />\r\n<br />\r\n<br />\r\nAll photos are taken from stock photography companies. We use free and public domain images, specifically those that fit the nature of the business of the website project.<br />\r\n<br />\r\nThe copyright of this website and its images belong to {company name}. Any form of redistribution or reproduction of part or the entirety of the contents including its images is prohibited except for:<br />\r\n<br />\r\nA. Printing or Downloading to a local hard disk for personal or non-commercial use<br />\r\nB. Copying the content to individual third parties for their personal use, provided that the website is acknowledged as the source of the material<br />\r\n<br />\r\nUnless there is express written permission from {company name} to distribute or commercially exploit the content, viewers, or website visitors may not reproduce the contents from its website.<br />\r\n<br />\r\n<span style=\"color:#7f8c8d\">=======================</span><br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website link here}</em></span><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:18', 3, NULL),
(32, 'ACF Instruction ', 'Dear Valued Client,<br />\r\n<br />\r\nTo update the section contents and images of the pages, see steps below:<br />\r\n<br />\r\n1. Login as administrator.<br />\r\n&nbsp;<br />\r\n<strong>WordPress Login Details:</strong><br />\r\n<span style=\"color:#c0392b\"><em>xxxxx link here xxxxx</em></span><br />\r\nUsername: <em><span style=\"color:#2980b9\">{ username here...}</span></em><br />\r\nPassword: <span style=\"color:#2980b9\"><em>{ password here...}</em></span><br />\r\n<br />\r\n2. After logging in to the Admin page, please hover on the &quot;<strong>Pages Options</strong>&quot; tab below &quot;<strong>Custom Fields</strong>&quot; at the left most column and click on the section you want to edit <em>(ex. Middle Area).</em><br />\r\n<br />\r\n3. It will then show the list of all the editable content. If not, please click the arrow at the top right of the white box to show its contents. After showing all the content, please follow the steps below for updating/adding contents:<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.1 To add row, boxes, or list, simply click the &quot;<strong>Add Row</strong>&quot; button, and the fields with empty values will appear.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; For adding text, click on the field area and type the text contents to be displayed.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To add an image, click &quot;<strong>Select Image</strong>&quot; to select an image on your media library, upload the file if it is not yet added in the media library.<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.2 To edit/update row, boxes, or list, please follow the steps below:<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Update an image or URL by clicking on it or the &quot;<strong>pencil</strong>&quot; icon displayed when hovering on it, and provide the necessary content it requires.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To update texts, click on the text area and update its contents.<br />\r\n&nbsp;&nbsp; &nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.3 To remove certain content/s, see below instructions:<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To remove row/s, list/s, or boxes, simply select the &quot;<strong>-</strong>&quot; button at the right end of every row when you hover on it, and click &quot;<strong>Remove</strong>&quot; after to delete it.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; For removing images and links, click the &quot;<strong>X</strong>&quot; icon found along with its row when hovered.<br />\r\n&nbsp;&nbsp; &nbsp;<br />\r\n&nbsp;&nbsp;&nbsp; Note : Please follow how contents (images, texts, etc.) are configured.<br />\r\n&nbsp;&nbsp; &nbsp;<br />\r\n4. After adding, updating or removing contents, you may click on &quot;<strong>Update</strong>&quot; blue button at the right column of the said page. It will then show a message &quot;<strong>Options Updated</strong>&quot;, an indicator that the update has been saved. Refresh the website page in which you have made changes.<br />\r\n<br />\r\nTo update sections on a specific page, see steps below:<br />\r\n<br />\r\n1. After logging in to the Admin page, please select the option &quot;<strong>Pages</strong>&quot; at the left most column and click on it.<br />\r\n<br />\r\n2. It will then show the list of all pages on your website. Please select the page that you want to edit the content or image.<br />\r\n<br />\r\n3. After selecting the page, it will take you to an editor section to edit the contents or image of your website.<br />\r\n<br />\r\n4. Below the white box, are the editable sections, labeled with its headings. After selecting the section/s you want to update or add, click on it to show its current contents.<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.1 To add row, boxes, or list, simply click the &quot;<strong>Add Row</strong>&quot; button, and the fields with empty values will appear.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; For adding text, click on the field area and type the text contents to be displayed.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To add an image, click &quot;<strong>Select Image</strong>&quot; to select an image on your media library, upload the file if it is not yet added in the media library.<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.2 To edit/update row, boxes, or list, please follow the steps below:<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Update <strong>image </strong>or URL by clicking on it or the &quot;<strong>pencil</strong>&quot; icon displayed when hovering on it, and provide the necessary content it requires.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To update texts, click on the text area and update its contents.<br />\r\n&nbsp;&nbsp; &nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.3 To remove certain content/s, see below instructions:<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To remove row/s, list/s, or boxes, simply select the &quot;<strong>-</strong>&quot; button at the right end of every row when you hover on it, and click &quot;<strong>Remove</strong>&quot; after to delete it.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; For removing images and links, click the &quot;<strong>X</strong>&quot; icon found along with its row when hovered.<br />\r\n&nbsp;&nbsp; &nbsp;<br />\r\n&nbsp;&nbsp;&nbsp; Note : Please follow how contents (images, texts, etc.) are configured.<br />\r\n<br />\r\n5. After adding, updating or removing contents, you may click on &quot;<strong>Update</strong>&quot; blue button at the right column of the said page. It will then show a message &quot;<strong>Page updated</strong>&quot; and &quot;<strong>View Page</strong>&quot; link to view the said changes online at the top of the editor page, an indicator that the update has been saved.<br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:16', 3, NULL),
(33, 'How to Make Changes on WP (Gutenberg)', 'Dear Valued Client,<br />\r\n<br />\r\nPlease see below for the steps on making changes on your website:<br />\r\n<br />\r\n1. Login to your Dashboard using the WordPress login details below:<br />\r\n<br />\r\nLogin Link: <span style=\"color:#2980b9\"><em>{login link here}</em></span><br />\r\nUsername: <em><span style=\"color:#2980b9\">{username here}</span></em><br />\r\nPassword: <span style=\"color:#2980b9\"><em>{password here}</em></span><br />\r\n<br />\r\n2. To add, delete or update pages, locate then click &quot;<strong>Pages</strong>&quot; on the left most section of the dashboard.<br />\r\nNOTE: All Pages &ndash; lists all pages of your website, Add New &ndash; allows you to add a new page<br />\r\n2.1. To make updates, click on the page you want to update. This will take you to a new window which allows you to make changes on that page. You can also hover on the page you want to update, and options will show below the title.<br />\r\n2.1.1. Please take note, there are 2 ways to edit the text contents on certain page of your website. It&#39;s either &quot;<strong>Visual Editor</strong>&quot; or &quot;<strong>Code Editor</strong>&quot;. If you are not capable of editing your website by adding HTML codes. You may select &quot;<strong>Visual Editor</strong>&quot; to add contents. If it&#39;s the other way around, you may select &quot;<strong>Code Editor</strong>&quot;. Also, these options can be found when you click the three dots on the upper right portion of the dashboard.<br />\r\n2.1.2. After updating or adding new text contents, you may click on Update, blue button at the right column of the said page. It will then show a message &quot;<strong>Page updated</strong>&quot; and &quot;<strong>View Page</strong>&quot; link to view the said changes online at the bottom part of the editor page, an indicator that the update has been saved.<br />\r\n3. To add images on a page, click on a page you want to add an image.<br />\r\n3.1. Locate &quot;<strong>Add Media</strong>&quot; button on the top portion of the content area, it will automatically appear when you start editing the page. Just hover on the icons to see the said tab.<br />\r\nNOTE: There are two ways to add images, add current images you have on your Media Library or Upload Files<br />\r\n3.2 Through Media Library<br />\r\n3.2.1 Click on the images you want to add, you may select multiple images by pressing hold &quot;<strong>Ctrl</strong>&quot; key then clicking on the images you want to add.<br />\r\n3.2.2 After choosing the images, click &quot;<strong>Insert into page</strong>&quot; on the bottom right of the pop-up window.<br />\r\n3.3 Through Upload Files<br />\r\n3.3.1 You can either &quot;<strong>Drag and Drop</strong>&quot; files on the pop window or &quot;<strong>Select Files</strong>&quot; to upload, the images you uploaded will automatically be selected.<br />\r\n3.3.2 Once done uploading, click &quot;<strong>Insert into page</strong>&quot; on the bottom right of the pop window.<br />\r\nNOTE: You can only upload images with a maximum file size of 128 MB.<br />\r\n<br />\r\nOnce done, hover &quot;<strong><em>Howdy, <span style=\"color:#c0392b\">{username}</span></em></strong>&quot; on the upper right portion of your dashboard, then click &quot;<strong>Log Out</strong>&quot; to avoid unnecessary changes.<br />\r\n<br />\r\nTo further make changes, please click on the link below to download the user manual:<br />\r\n<br />\r\n<span style=\"color:#c0392b\"><strong><em>https://{domain here}/Wordpress-Guide.pdf</em></strong></span><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:15', 3, NULL),
(34, 'Meta Keywords No Longer Factor on SEO Rankings', 'Dear Valued Client,<br />\r\n<br />\r\nWe have created the information to Google Business Listing. However, it will not appear on maps or in search engines online until you verify your business. We can edit your business details, but it will not take effect until you complete the verification process.<br />\r\n<br />\r\nYour postcard that contains the verification code will arrive within 1&ndash;2 weeks at this location:<br />\r\n&nbsp;<br />\r\n<span style=\"color:#2980b9\"><em>{company address}</em></span><br />\r\n<br />\r\nOnce you received the postcard, please send us a screenshot of the code for us to verify your Google Business Listing. Please make sure to send it right away upon receiving since the code may expire after 30 days, or you may verify it on your end.<br />\r\n<br />\r\nHowever, if you have verified your account, you need to log in and add the code in the link provided below:<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{google business link account}</em></span><br />\r\n<br />\r\nPlease refer the following information for your Google Business Gmail account:<br />\r\nEmail: <span style=\"color:#c0392b\"><em>sample@sample.com</em></span><br />\r\nPassword: <span style=\"color:#c0392b\"><em>1234</em></span><br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{website link}</em></span><br />\r\n<br />\r\n&nbsp;<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-19 06:36:22', 3, NULL);
INSERT INTO `etemp_templates` (`id`, `template_name`, `template_body`, `template_category`, `template_date_created`, `template_created_by`, `template_subject_ext`) VALUES
(35, 'Job Listing', 'Dear Valued Client,<br />\r\n<br />\r\nWe have implemented your requested change(s) on the website:<br />\r\n<br />\r\n<span style=\"color:#c0392b\"><em><strong>{Page Title}</strong></em></span><br />\r\n- added job listing functionality on content area<br />\r\n<span style=\"color:#2980b9\"><em>{page link here...}</em></span><br />\r\n<br />\r\nTo manage the job listing, please follow the steps below:<br />\r\n<br />\r\nFirst, login using the following information:<br />\r\n&nbsp;&nbsp;&nbsp; Login link: <span style=\"color:#2980b9\"><em>{WP login link here...}</em></span><br />\r\n&nbsp;&nbsp;&nbsp; Username: <span style=\"color:#2980b9\"><em>{username here...}</em></span><br />\r\n&nbsp;&nbsp;&nbsp; Password: <span style=\"color:#2980b9\"><em>{password here...}</em></span><br />\r\n<br />\r\nOnce logged in, open the link below for the guidelines on using WP Job Openings plugin.<br />\r\n<br />\r\n<a href=\"https://drive.google.com/file/d/1JwUN7tKbnvFIXVCmyWVKi00nuAtyYYby/view?usp=sharing\" target=\"_blank\">https://drive.google.com/file/d/1JwUN7tKbnvFIXVCmyWVKi00nuAtyYYby/view?usp=sharing</a><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em><br />\r\n<br />\r\n<span style=\"color:#4e5f70\"><em>Sample Task: (Task ID:1267629)</em></span>', '1', '2023-04-12 03:34:11', 3, NULL),
(36, 'Error Updating WordPress Version', 'Dear Valued Client,<br />\r\n<br />\r\nWe&#39;re having an error upgrading your WordPress version is because of the customization we make of all websites that are hosted with us. This is to increase the security of your website as well as the server where it resides. Please be informed that we are currently working on upgrading your WordPress version as well as the PHP version for its compatibility.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{ website link }</em></span><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em><br />\r\n<br />\r\n<span style=\"color:#2c3e50\"><em>Sample Task: (Task ID: 1339269)</em></span>', '1', '2023-04-12 03:34:10', 3, NULL),
(37, 'Clear Cache ', '<em><span style=\"color:#d35400\">// add after update entry or before should you have...</span><br />\r\n<br />\r\n<span style=\"color:#c0392b\"><strong>// Option 1</strong></span></em><br />\r\nHowever, before visiting your website, you may clear your browser&#39;s cache to delete unnecessary data saved from your browser that might affect the said changes.<br />\r\n<br />\r\n<span style=\"color:#c0392b\"><strong>// Option 2</strong></span><br />\r\nAlso, before visiting your website, please clear your browser&#39;s cache to delete unnecessary data saved from your browser that might affect the said changes.', '1', '2023-04-12 03:34:08', 3, NULL),
(38, 'Error Installing WP Plugin Through Dashboard (Hosted by Proweaver)', 'Dear Valued Client,<br />\r\n<br />\r\nRegarding the error you encountered during the installation of your desired plugin through the WordPress dashboard, please be informed that we customized all file permissions for security purposes to avoid injecting malicious files into your website.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{ website link }</em></span><br />\r\n<br />\r\n<span style=\"color:#e67e22\"><strong><em>Option 1: (no specific plugin provided)</em></strong></span><br />\r\nIf you wish to install the plugin, please tell us the plugin name, author, and the plugin&#39;s link on wordpress.org so that we can manually install it through the website files instead.<br />\r\n<br />\r\n<span style=\"color:#e67e22\"><em><strong>Option 2: (with specific plugin provided, we manually install it and inform the client)</strong></em></span><br />\r\nWith this, we manually installed the plugin through the website files instead. Please see the plugin by using the access below:<br />\r\n<br />\r\n<span style=\"color:#3498db\"><em>{ WordPress Access }</em></span><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:06', 3, NULL),
(39, 'No Google Analytics  ', 'Dear Valued Client,<br />\r\n<br />\r\nRegarding your concern, upon checking, it appears that there are no Google Analytics integrated in your website.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{ website link }</em></span><br />\r\n<br />\r\nTherefore, kindly provide us with the existing Google Analytics script code for us to integrate into your website.<br />\r\n<br />\r\nBelow is a link to further explain where to get your Google Analytics script code:<br />\r\n<br />\r\n<a href=\"https://www.semrush.com/blog/google-analytics-tracking-id/\" target=\"_blank\">https://www.semrush.com/blog/google-analytics-tracking-id/</a><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:04', 3, NULL),
(40, 'Client Requests Unsafe Plugin', 'Dear Valued Client,<br />\r\n<br />\r\nIn line with your request to install the plugin <strong><span style=\"color:#c0392b\"><em>{plugin name}</em></span></strong>, we would like to inform you that we will not proceed with this due to recent security reports that have not been addressed by the contributors of this plugin.<br />\r\n<br />\r\nWe have checked these security reports from various WordPress users and conducted our own meticulous study as to the integrity of the plugins requested, and most of these reported plugins have the potential to hijack your website during installation, by injecting malicious codes on your website files during the process.<br />\r\n<br />\r\nFor the safety of our web hosting and to keep your website clean and free from malware and other types of attacks, we tagged these reported plugins as &quot;<strong>unsafe</strong>&quot; and will not allow them to be installed into your website.<br />\r\n<br />\r\nTo know more about plugin reports, you may visit the link below:<br />\r\n<br />\r\n<a href=\"https://wpscan.com/plugins\" target=\"_blank\">https://wpscan.com/plugins</a><br />\r\n<br />\r\nShould you have other concerns, please let us know.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:02', 3, NULL),
(41, 'Auto Play Video and Audio', 'Dear Valued Client,<br />\r\n<br />\r\nRegarding your concern about your video having no sound when autoplaying, please be informed that browsers now restrict autoplaying videos and audio.<br />\r\n<br />\r\n<a href=\"https://developer.chrome.com/blog/autoplay/\" target=\"_blank\">https://developer.chrome.com/blog/autoplay/</a><br />\r\n<br />\r\nAs of date, only videos and audio that are muted can be auto-played. In line with this, if you want to autoplay your video with sound, you can enable your browser&#39;s autoplay function. Please see the links below on how to do this: For Google Chrome:<br />\r\n<a href=\"https://www.ghacks.net/2018/02/06/how-to-control-audio-and-video-autoplay-in-google-chrome/\" target=\"_blank\">https://www.ghacks.net/2018/02/06/how-to-control-audio-and-video-autoplay-in-google-chrome/</a><br />\r\n<br />\r\n<strong>For Firefox:</strong><br />\r\n<a href=\"https://www.makeuseof.com/how-to-block-allow-autoplay-firefox/\" target=\"_blank\">https://www.makeuseof.com/how-to-block-allow-autoplay-firefox/</a><br />\r\n<br />\r\n<strong>For Microsoft Edge:</strong><br />\r\n<a href=\"https://www.windowscentral.com/microsoft-edge-now-limits-autoplaying-videos\" target=\"_blank\">https://www.windowscentral.com/microsoft-edge-now-limits-autoplaying-videos</a><br />\r\n<br />\r\n<strong>For Safari:</strong><br />\r\n<a href=\"https://www.mlb.com/live-stream-games/help-center/desktop-laptop-how-to-enable-autoplay\" target=\"_blank\">https://www.mlb.com/live-stream-games/help-center/desktop-laptop-how-to-enable-autoplay</a><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:34:01', 3, NULL),
(42, 'Client Can\'t Searh in Google or Yahoo (NEW)', 'Dear Valued Client,<br />\r\n<br />\r\nWe have resubmitted your website to search engines such as Google and Yahoo. While we&#39;ve already submitted your website to them, these search engines would still have to &quot;index&quot; your website in their databases, which usually takes some time.<br />\r\n<br />\r\n<em><span style=\"color:#2980b9\">{ website link }</span></em><br />\r\n<br />\r\nOn the other hand, if you would wish that your website has better visibility on Google, you can avail of our SEO service. Where in, we can rank your website in a specific area using the keywords that correspond to your website&#39;s niche. When your website ranked on the first page of Google Search Engine Results(SERP) by using specific keywords and location, there&#39;s a bigger possibility that you can gather more potential client/customer.<br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:59', 3, NULL),
(43, 'Font Updates', 'Dear Valued Client,<br />\r\n<br />\r\nWe hope this email finds you well. We would like to inform you about the recent updates we had to implement on your website to avoid font licensing issues.<br />\r\n<br />\r\nFurthermore, we checked and found out that the fonts currently used on your website are not free for commercial use anymore. To avoid copyright concerns, we took the initiative to update your website&#39;s font and used a font similar to the previous one.<br />\r\n<br />\r\nWe assure you that this change will not negatively impact your website&rsquo;s functionality. Our team has completed the updates, and our specialists have done thorough testing to ensure everything functions correctly.<br />\r\n<br />\r\n<span style=\"color:#2980b9\"><em>{ website link }</em></span><br />\r\n<br />\r\n<br />\r\nSincerely,<br />\r\nProweaver Support Team<br />\r\n<br />\r\n<em>{control number}</em>', '1', '2023-04-12 03:33:56', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `etemp_templates_tags`
--

CREATE TABLE `etemp_templates_tags` (
  `id` int(11) NOT NULL,
  `id_template` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_templates_tags`
--

INSERT INTO `etemp_templates_tags` (`id`, `id_template`, `id_tag`) VALUES
(2, 2, 3),
(3, 1, 2),
(4, 3, 5),
(5, 3, 6),
(6, 3, 7),
(7, 3, 8),
(8, 4, 5),
(9, 4, 6),
(10, 4, 8),
(11, 4, 1),
(12, 4, 11),
(13, 4, 12),
(14, 4, 13),
(15, 5, 11),
(16, 5, 12),
(17, 5, 1),
(18, 6, 11),
(19, 6, 12),
(20, 6, 13),
(21, 6, 1),
(22, 7, 14),
(23, 7, 15),
(24, 8, 11),
(25, 9, 11),
(26, 9, 17),
(27, 9, 16),
(28, 8, 18),
(29, 10, 14),
(30, 10, 20),
(31, 10, 19),
(32, 11, 5),
(33, 11, 21),
(34, 11, 22),
(35, 12, 24),
(36, 12, 25),
(37, 13, 27),
(38, 13, 26),
(39, 14, 5),
(40, 14, 28),
(41, 14, 29),
(42, 14, 30),
(43, 14, 31),
(44, 15, 32),
(45, 16, 11),
(46, 16, 12),
(47, 43, 33),
(48, 42, 11),
(49, 42, 12),
(50, 42, 1),
(51, 41, 37),
(52, 41, 35),
(53, 41, 36),
(54, 39, 18),
(55, 39, 11),
(56, 40, 25),
(57, 40, 39),
(58, 40, 40),
(59, 38, 40),
(60, 38, 8),
(61, 38, 41),
(62, 37, 42),
(63, 36, 41),
(64, 36, 44),
(65, 36, 43),
(66, 35, 17),
(67, 35, 46),
(68, 35, 40),
(69, 34, 37),
(70, 34, 11),
(71, 34, 12),
(72, 34, 47),
(73, 34, 1),
(74, 33, 17),
(75, 33, 20),
(76, 33, 8),
(78, 32, 17),
(79, 32, 20),
(80, 32, 40),
(81, 32, 39),
(82, 32, 8),
(83, 31, 49),
(84, 31, 48),
(85, 31, 25),
(86, 30, 30),
(87, 30, 29),
(88, 30, 28),
(89, 30, 8),
(90, 29, 50),
(91, 29, 20),
(92, 28, 15),
(93, 28, 51),
(94, 27, 28),
(95, 27, 20),
(96, 27, 8),
(99, 23, 52),
(100, 23, 53),
(101, 19, 17),
(102, 19, 20),
(103, 20, 11),
(104, 20, 47);

-- --------------------------------------------------------

--
-- Table structure for table `etemp_users`
--

CREATE TABLE `etemp_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_users`
--

INSERT INTO `etemp_users` (`id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1, 'Obed', 'Ouano', 'bedouano', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Admin', 'User', 'admin', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etemp_category`
--
ALTER TABLE `etemp_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `etemp_subject_extension`
--
ALTER TABLE `etemp_subject_extension`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `extension_name` (`extension_name`);

--
-- Indexes for table `etemp_tags`
--
ALTER TABLE `etemp_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag_name` (`tag_name`);

--
-- Indexes for table `etemp_templates`
--
ALTER TABLE `etemp_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `etemp_templates_tags`
--
ALTER TABLE `etemp_templates_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etemp_users`
--
ALTER TABLE `etemp_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etemp_category`
--
ALTER TABLE `etemp_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etemp_subject_extension`
--
ALTER TABLE `etemp_subject_extension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etemp_tags`
--
ALTER TABLE `etemp_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `etemp_templates`
--
ALTER TABLE `etemp_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `etemp_templates_tags`
--
ALTER TABLE `etemp_templates_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `etemp_users`
--
ALTER TABLE `etemp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
