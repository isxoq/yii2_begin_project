-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 15 2021 г., 07:18
-- Версия сервера: 5.7.29
-- Версия PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blogloc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `source_message`
--

CREATE TABLE `source_message` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `source_message`
--

INSERT INTO `source_message` (`id`, `category`, `message`, `created_at`, `updated_at`) VALUES
(2, 'app', 'Home', 1617277117, 1617277117),
(7, 'app', 'Name', 1617277117, 1617277117),
(8, 'app', 'Category', 1617277117, 1617277117),
(25, 'app', 'Title', 1617277117, 1617277117),
(27, 'app', 'Page', 1617277117, 1617277117),
(28, 'app', 'Post', 1617277117, 1617277117),
(29, 'app', 'Template', 1617277117, 1617277117),
(30, 'app', 'Other', 1617277117, 1617277117),
(32, 'app', 'Translation', 1617277117, 1617277117),
(34, 'app', 'Date', 1617277117, 1617277117),
(40, 'app', 'Posts', 1617277117, 1617277117),
(64, 'app', 'Image', 1617277117, 1617277117),
(85, 'app', 'Read more', 1617277117, 1617277117),
(100, 'app', 'Page not found!', 1617277117, 1617277117),
(113, 'app', 'Send', 1617277117, 1617277117),
(117, 'app', 'New', 1617277117, 1617277117),
(166, 'app', 'This field is required.', 1617277117, 1617277117),
(186, 'app', 'Forget Password?', 1617277117, 1617277117),
(187, 'app', 'Remember me', 1617277117, 1617277117),
(190, 'app', 'Incorrect username or password.', 1617277117, 1617277117),
(191, 'app', 'Request password reset', 1617277117, 1617277117),
(198, 'app', 'Incorrect username or email.', 1617277117, 1617277117),
(313, 'app', 'All messages', 1617277117, 1617277117),
(314, 'app', 'Profile', 1617277117, 1617277117),
(315, 'app', 'Logout', 1617277117, 1617277117),
(327, 'app', 'With selected', 1617277117, 1617277117),
(348, 'app', 'Lastname', 1617277117, 1617277117),
(349, 'app', 'Change password', 1617277117, 1617277117),
(350, 'app', 'Repeat new password', 1617277117, 1617277117),
(351, 'app', 'New password', 1617277117, 1617277117),
(352, 'app', 'Current password', 1617277117, 1617277117),
(353, 'app', 'Current login', 1617277117, 1617277117),
(354, 'app', 'Change login', 1617277117, 1617277117),
(366, 'app', 'Change user password', 1617277117, 1617277117),
(387, 'app', 'This login has already been taken.', 1617277117, 1617277117),
(388, 'app', 'This email address has already been taken.', 1617277117, 1617277117),
(390, 'app', 'This phone number has already been taken', 1617277117, 1617277117),
(393, 'app', 'Invalid phone number', 1617277117, 1617277117),
(394, 'app', 'or', 1617277117, 1617277117),
(395, 'app', 'Don’t have an Account?', 1617277117, 1617277117),
(396, 'app', 'Register now!', 1617277117, 1617277117),
(397, 'app', 'Your lastname', 1617277117, 1617277117),
(398, 'app', 'Enter the password again', 1617277117, 1617277117),
(399, 'app', 'Enter the phone number with the operator code.', 1617277117, 1617277117),
(400, 'app', 'Example', 1617277117, 1617277117),
(401, 'app', 'The re-entered password does not match', 1617277117, 1617277117),
(402, 'app', 'Password should contain at least 5 characters', 1617277117, 1617277117),
(403, 'app', 'An error occurred', 1617277117, 1617277117),
(404, 'app', 'Verification code has been expired', 1617277117, 1617277117),
(405, 'app', 'Verification code has not been expired', 1617277117, 1617277117),
(406, 'app', 'Activate account', 1617277117, 1617277117),
(407, 'app', 'Enter the code sent to your phone number', NULL, NULL),
(409, 'app', 'Resend code', 1617277117, 1617277117),
(413, 'app', 'Incorrect verification code', 1617277117, 1617277118),
(414, 'app', 'Congratulations. Your account has been successfully activated', 1617277118, 1617277118),
(415, 'app', 'Incorrect verification code. Repeat again.', 1617277118, 1617277118),
(416, 'app', 'Login to the site', 1617277118, 1617277118),
(417, 'app', 'Enter your phone number and password to access the site', 1617277118, 1617277118),
(418, 'app', 'Phone number', 1617277118, 1617277118),
(419, 'app', 'Remeber me', 1617277118, 1617277118),
(420, 'app', 'Enter', 1617277118, 1617277118),
(421, 'app', 'Register', 1617277118, 1617277118),
(422, 'app', 'Incorrect phone number or password', 1617277118, 1617277118),
(423, 'app', 'Please fill out your phone number. A code to reset password will be sent to your number.', 1617277118, 1617277118),
(424, 'app', 'This phone number is not registered', 1617277118, 1617277118),
(425, 'app', 'Your password has been changed successfully', 1617277118, 1617277118),
(426, 'app', 'Set new password', 1617277118, 1617277118),
(427, 'app', 'Congratulations!', 1617277118, 1617277118),
(434, 'app', 'Add to cart', 1617277118, 1617277118),
(435, 'app', 'Added to cart', 1617277118, 1617277118),
(436, 'app', 'There are no products in your shopping cart', 1617277118, 1617277118),
(437, 'app', 'Availability', 1617277118, 1617277118),
(438, 'app', 'Add to Wishlist', 1617277118, 1617277118),
(439, 'app', 'You need to register to perform this action', 1617277118, 1617277118),
(440, 'app', 'You may also like', 1617277118, 1617277118),
(441, 'app', 'Shopping Cart', 1617277118, 1621505701),
(442, 'app', 'Total price', 1617277118, 1617277118),
(443, 'app', 'View cart', 1617277118, 1617277118),
(444, 'app', 'Checkout', 1617277118, 1617277118),
(446, 'app', 'You have to login to check out', 1617277118, 1617277118),
(449, 'app', 'Your order has been accepted', 1617277118, 1617277118),
(452, 'app', 'Recommended', 1617277118, 1617277118),
(453, 'app', 'Categories', 1617277118, 1617277118),
(454, 'app', 'My orders', 1617277118, 1617277118),
(455, 'app', 'Language', 1617277118, 1617277118),
(456, 'app', 'sum', 1617277118, 1617277118),
(461, 'app', 'Search results', 1617277118, 1617277118),
(475, 'app', 'Settings', 1617277118, 1617277118),
(477, 'app', 'Orders', 1617277118, 1617277118),
(487, 'app', 'Send us a Message!', 1617277118, 1617277118),
(488, 'app', 'Your email or phone number', 1617277118, 1617277118),
(489, 'app', 'Verification code', 1617277118, 1617277118),
(490, 'app', 'Your message', 1617277118, 1617277118),
(491, 'app', 'You did not write any messages!', 1617277118, 1617277118),
(492, 'app', 'Thank you for leaving us a message!', 1617277118, 1617277118),
(493, 'app', 'News', 1617277118, 1617277118),
(498, 'app', 'Your email', 1617277118, 1617277118),
(499, 'app', 'Subscribe', 1617277118, 1617277118),
(500, 'app', 'Follow us on social media', 1617277118, 1617277118),
(503, 'app', 'Wishlist', 1617277118, 1617277118),
(504, 'app', 'Cart', 1617277118, 1617277118),
(505, 'app', 'Our latest news', 1617277118, 1617277118),
(507, 'app', 'Search', 1617277118, 1617277118),
(509, 'app', 'Popular articles', 1617277118, 1617277118),
(510, 'app', 'Our blog', 1617277118, 1617277118),
(511, 'app', 'Related articles', 1617277118, 1617277118),
(512, 'app', 'Contact information', 1617277118, 1617277118),
(516, 'app', 'Send message', 1617277118, 1617277118),
(517, 'app', 'Firstname is required.', 1617277118, 1617277118),
(518, 'app', 'Phone number is required.', 1617277118, 1617277118),
(519, 'app', 'Password is required.', 1617277118, 1617277118),
(520, 'app', 'Activation code of your account on {hostInfo}: {code}', 1617277118, 1617277118),
(521, 'app', 'Invalid verification code', 1617277118, 1617277118),
(522, 'app', 'Enter the code sent to your phone number', NULL, NULL),
(523, 'app', 'Reset password', 1617277118, 1617277118),
(524, 'app', 'An error occured while sending activation code to your phone number', 1617277118, 1617277118),
(525, 'app', 'Personal cabinet', 1617277118, 1617277118),
(538, 'app', 'Thank you for leaving your email', 1617277118, 1617277118),
(539, 'app', 'Your order has been accepted. We will contact you as soon as possible!', 1617277118, 1617277118),
(540, 'app', 'Support phone', 1617277118, 1617277118),
(542, 'app', 'Socials', 1617277118, 1617277118),
(543, 'app', 'Slider', 1617277118, 1617277118),
(550, 'app', 'Russian', 1617277118, 1617277118),
(551, 'app', 'English', 1617277118, 1617277118),
(552, 'app', 'Uzbek', 1617277118, 1617277118),
(578, 'app', 'Location', 1617277118, 1617277118),
(579, 'app', 'Contacts', 1617277118, 1617277118),
(580, 'app', 'Our office', 1617277118, 1617277118),
(583, 'app', 'We are in social networks', 1617277118, 1617277118),
(584, 'app', 'Thank you for leaving your information. We will contact you as soon as possible!', 1617277118, 1617277118),
(595, 'app', 'You can download our application', 1617277118, 1617277118),
(598, 'app', 'Administration', 1617277118, 1617277118),
(599, 'app', 'Sign in to start your session', 1617277118, 1617277118),
(600, 'app', 'Welcome', 1617277118, 1617277118),
(605, 'app', 'Your firstname', 1617277118, 1617277118),
(606, 'app', 'Password', 1617277118, 1617277118),
(607, 'app', 'What will you learn in this course?', 1617277118, 1617277118),
(608, 'app', 'Enroll course', 1617277118, 1617277118),
(609, 'app', 'Courses', 1617277118, 1617277118),
(610, 'app', 'All courses', 1617277118, 1617277118),
(611, 'app', 'Continue', 1617277118, 1617277118),
(642, 'app', 'Information about yourself', 1617277118, 1617277118),
(643, 'app', 'Your address', 1617277118, 1617277118),
(645, 'app', 'Attach a file', 1617277118, 1617277118),
(651, 'app', 'Latest posts', 1617277118, 1617277118),
(653, 'app', 'My courses', 1617277118, 1617277118),
(656, 'app', 'About course', 1617277119, 1617277119),
(657, 'app', 'Teacher', 1617277119, 1617277119),
(658, 'app', 'Requirements', 1617277119, 1617277119),
(659, 'app', 'Price', 1617277119, 1617277119),
(660, 'app', 'Students', 1617277119, 1617277119),
(661, 'app', 'Members', 1617277119, 1617277119),
(665, 'app', 'Pages', 1617277119, 1617277119),
(666, 'app', 'Preview course', 1617277119, 1617277119),
(674, 'app', 'Enter the verification code', 1617277119, 1617277119),
(675, 'app', 'Return back', 1617277119, 1617277119),
(678, 'app', 'Order date', 1617277119, 1617277119),
(680, 'app', 'Order', 1617277119, 1617277119),
(681, 'app', 'Payment status', 1617277119, 1617277119),
(682, 'app', 'days', 1617277119, 1617277119),
(683, 'app', 'months', 1617277119, 1617277119),
(684, 'app', 'years', 1617277119, 1617277119),
(686, 'app', 'year', 1617277119, 1617277119),
(687, 'app', 'Enter your login and password to access the site', 1617277119, 1617277119),
(688, 'app', 'Not registered yet?', 1617277119, 1617277119),
(689, 'app', 'Register right now', 1617277119, 1617277119),
(690, 'app', 'Enter your email or phone number', 1617277119, 1617277119),
(693, 'app', 'Your age', 1617277119, 1617277119),
(694, 'app', 'Male', 1617277119, 1617277119),
(695, 'app', 'Female', 1617277119, 1617277119),
(696, 'app', 'Select', 1617277119, 1617277119),
(697, 'app', 'About us', 1617277119, 1617277119),
(698, 'app', 'Useful links', 1617277119, 1617277119),
(699, 'app', 'Contact with Us', 1617277119, 1617277119),
(702, 'app', 'View all news', 1617277119, 1617277119),
(703, 'app', 'All', 1617277119, 1617277119),
(704, 'app', 'Please fill with your details', 1617277119, 1617277119),
(705, 'app', 'Backward', 1617277119, 1617277119),
(706, 'app', 'Forward', 1617277119, 1617277119),
(707, 'app', 'Submit', 1617277119, 1617277119),
(708, 'app', 'Enter your address', 1617277119, 1617277119),
(709, 'app', 'Accept terms and conditions', 1617277119, 1617277119),
(711, 'app', 'Search courses', 1617277119, 1617277119),
(712, 'app', 'New courses', 1617277119, 1617277119),
(716, 'app', 'Duration', 1617277119, 1617277119),
(717, 'app', 'Already have an acccount?', 1617277119, 1617277119),
(718, 'app', 'Log in to the site', 1617277119, 1617277119),
(719, 'app', 'Kodni kiritish', 1617277119, 1617277119),
(721, 'app', 'Enter the code', 1617277119, 1617277119),
(722, 'app', 'Code', 1617277119, 1617277119),
(725, 'app', 'Level', 1617277119, 1617277119),
(726, 'app', 'Offline payment', 1617277119, 1617277119),
(730, 'app', 'Terms and conditions', 1617277119, 1617277119),
(732, 'app', 'Email address', 1617277119, 1617277119),
(733, 'app', 'Send a message', 1617277119, 1617277119),
(740, 'app', 'Specialities', 1617277119, 1617277119),
(741, 'app', 'Curriculums', 1617277119, 1617277119),
(762, 'app', 'Firstname', 1617277119, 1617277119),
(763, 'app', 'Middlename', 1617277119, 1617277119),
(764, 'app', 'Birth Date', 1617277119, 1617277119),
(767, 'app', 'Address', 1617277119, 1617277119),
(770, 'app', 'Status', 1617277120, 1617277120),
(782, 'app', 'Passport Serial Number', 1617277120, 1617277120),
(783, 'app', 'Passport Code', 1617277120, 1617277120),
(786, 'app', 'Photo', 1617277120, 1617277120),
(790, 'app', 'Login and password', 1617277120, 1617277120),
(802, 'app', 'Add new file', 1617277120, 1617277120),
(803, 'app', 'Add new page', 1617277120, 1617277120),
(808, 'app', 'Upload report', 1617277120, 1617277120),
(809, 'app', 'Your report has been sent', 1617277120, 1617277120),
(810, 'app', 'An error occured while sending your report', 1617277120, 1617277120),
(812, 'app', 'Has been sent', 1617277120, 1617277120),
(813, 'app', 'Report has been sent', 1617277120, 1617277120),
(814, 'app', 'Select file', 1617277120, 1617277120),
(815, 'app', 'Open file', 1617277120, 1617277120),
(816, 'app', 'Tasks', 1617277120, 1617277120),
(827, 'app', 'Mark', 1617700438, 1617700438),
(828, 'app', 'Point', 1617700494, 1617700494),
(831, 'app', 'List of tasks', 1617787749, 1617787749),
(838, 'app', 'Module', 1617790227, 1617790227),
(841, 'app', 'Maximum', 1617792812, 1617792812),
(842, 'app', 'Change', 1617793224, 1617793224),
(849, 'app', 'Home page', 1617968854, 1617968854),
(850, 'app', 'Create new material', 1618218530, 1618218530),
(851, 'app', 'Products', 1620203198, 1620203198),
(852, 'app', 'Shop by categories', 1620621598, 1620621598),
(853, 'app', 'Banners', 1620636577, 1620636577),
(854, 'app', 'Browse our categories', 1620669275, 1620669275),
(855, 'app', 'Subtotal', 1620721799, 1620721799),
(856, 'app', 'go to checkout', 1620722075, 1620722075),
(857, 'app', 'call us now', 1620722267, 1620722267),
(858, 'app', 'welcome to the store', 1620723654, 1620723654),
(859, 'app', 'All categories', 1620723977, 1620723977),
(860, 'app', 'Description', 1620724154, 1620724154),
(861, 'app', 'Related products', 1620724274, 1620724274),
(862, 'app', 'Product', 1620724989, 1620724989),
(863, 'app', 'Quantity', 1620725297, 1620725297),
(864, 'app', 'Cart totlas', 1620725442, 1620725442),
(865, 'app', 'Related posts', 1620753689, 1620753689),
(866, 'app', 'search in blogs', 1620753839, 1620753839),
(867, 'app', 'Blog categories', 1620753972, 1620753972),
(868, 'app', 'you do not have the selected product', 1620754639, 1620754639),
(869, 'app', 'In stock', 1620754894, 1620754894),
(870, 'app', 'Not in stock', 1620755001, 1620755001),
(871, 'app', 'All products', 1620755398, 1620755398),
(872, 'app', 'Brand', 1621056422, 1621056422),
(873, 'app', 'Additional Information', 1621063746, 1621505630),
(874, 'app', 'Account', 1621226029, 1621226029),
(875, 'app', 'My account', 1621226249, 1621226249),
(876, 'app', 'go to shop', 1621226732, 1621226732),
(877, 'app', 'Log out', 1621226821, 1621226821),
(878, 'app', 'Account details', 1621229275, 1621229275),
(879, 'app', 'Leave blank empty no to change password', 1621231449, 1621231449),
(880, 'app', 'Save changes', 1621231493, 1621231493),
(881, 'app', 'Current password does not match', 1621231785, 1621231785),
(882, 'app', 'Your personal data has been successfully updated', 1621232238, 1621232238),
(883, 'app', 'An error occured while saving your personal data', 1621232312, 1621232312),
(884, 'app', 'Successfully added', 1621250715, 1621250715),
(885, 'app', 'Soni', 1621251604, 1621251604),
(886, 'app', 'Product has been added to cart', 1621253563, 1621253563),
(887, 'app', 'Recommended categories', 1621313410, 1621313410),
(888, 'app', 'shop now', 1621319610, 1621319610),
(889, 'app', 'Confirm the code', 1621399298, 1621399298),
(890, 'app', 'Please fill in the following:', 1621400096, 1621400096),
(891, 'app', 'Password repeat', 1621400634, 1621400634),
(892, 'app', 'Fill in the profile', 1621400767, 1621400767),
(893, 'app', 'Data validation', 1621401056, 1621401056),
(894, 'app', 'Menu', 1621405696, 1621405804),
(895, 'app', 'Billing Details', 1621505588, 1621505588),
(896, 'app', 'Order Complete', 1621505720, 1621505720),
(897, 'app', 'Proceed to checkout', 1621505840, 1621505840),
(898, 'app', 'Continue shopping', 1621505876, 1621505876),
(899, 'app', 'Place Order', 1621830908, 1621830908),
(900, 'app', 'Have a coupon?', 1621830939, 1621830939),
(901, 'app', 'Click here to enter your code', 1621830964, 1621830964),
(902, 'app', 'If you have a coupon code, please apply it below.', 1621830988, 1621830988),
(903, 'app', 'Apply Coupon', 1621831029, 1621831029),
(904, 'app', 'Your Order', 1621831076, 1621831076),
(905, 'app', 'Calculate Shipping', 1621831129, 1621831129),
(906, 'app', 'Total', 1621831156, 1621831156),
(907, 'app', 'Fast delivery', 1621831302, 1621831302),
(908, 'app', 'Free shipping', 1621831327, 1621831327),
(909, 'app', 'Local pickup', 1621831349, 1621831349),
(910, 'app', 'Payment method', 1621831928, 1621835553),
(911, 'app', 'Cash on delivery', 1621832107, 1621832107),
(912, 'app', 'Online payment', 1621832127, 1621832127),
(913, 'app', 'Town ID', 1621833307, 1621833307),
(914, 'app', 'ZIP', 1621833400, 1621833400),
(915, 'app', 'Notes', 1621833441, 1621833441),
(916, 'app', 'Phone', 1621834742, 1621834742),
(917, 'app', 'Thank You!', 1621834828, 1621834828),
(918, 'app', 'Your order has been received', 1621834865, 1621834865),
(919, 'app', 'Order Number', 1621834921, 1621834921),
(920, 'app', 'Order Details', 1621835274, 1621835274),
(921, 'app', 'Shipping', 1621835387, 1621835387),
(922, 'app', 'Billing Address', 1621837994, 1621837994),
(923, 'app', 'Pay with CLICK', 1621838109, 1621838109),
(924, 'app', 'Back to Home', 1621838147, 1621838147),
(925, 'app', 'v Rassrochku', 1621918681, 1621918681),
(926, 'app', 'v Rassrochku Month {price}', 1621920124, 1621920318),
(927, 'app', 'kupit v Rassrochku', 1622031339, 1622031339),
(928, 'app', 'First Payment', 1622093110, 1622093110),
(929, 'app', 'Taqsimlanish', 1622093150, 1622093150),
(930, 'app', 'oyiga {month} {sum}', 1622093199, 1622093199),
(931, 'app', 'Your Billing Details', 1622093256, 1622093256),
(932, 'app', 'First Name', 1622436203, 1622436203),
(933, 'app', 'Last Name', 1622436219, 1622436219),
(934, 'app', 'Work', 1622436231, 1622436231),
(935, 'app', 'Profession', 1622436240, 1622436240),
(936, 'app', 'Card Phone', 1622436259, 1622436259),
(937, 'app', 'Card Number', 1622436303, 1622436303),
(938, 'app', 'Card Expiry', 1622436382, 1622436382),
(939, 'app', 'Salary', 1622436555, 1622436555),
(940, 'app', 'Passport Information', 1622436583, 1622436583),
(941, 'app', 'Passport Front', 1622436599, 1622436599),
(942, 'app', 'Passport Back', 1622436622, 1622436622),
(943, 'app', 'Passport With Person', 1622436642, 1622436642),
(944, 'app', 'CARD Information', 1622452781, 1622452781),
(945, 'app', 'Personal Informaton', 1622452807, 1622452807),
(946, 'app', 'Status Pending', 1622526626, 1622526626),
(947, 'app', 'Verify code', 1623237430, 1623237430),
(948, 'app', 'Resend Verfy Code', 1623237472, 1623237472),
(949, 'app', 'Get Verify Code', 1623237500, 1626496813);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `source_message`
--
ALTER TABLE `source_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_source_message_category` (`category`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `source_message`
--
ALTER TABLE `source_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=950;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;