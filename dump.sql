-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.0
-- Время создания: Июн 02 2025 г., 01:52
-- Версия сервера: 8.0.35
-- Версия PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dump`
--

-- --------------------------------------------------------

--
-- Структура таблицы `help_me`
--

CREATE TABLE `help_me` (
  `id_user` int NOT NULL,
  `prob_category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int NOT NULL,
  `prob_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_problem` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `help_me`
--

INSERT INTO `help_me` (`id_user`, `prob_category_id`, `status_id`, `prob_description`, `id_problem`) VALUES
(17, 'Ошибка передачи данных', 4, 'ffffgrgrgtrgtrth', 1),
(17, 'Ошибка пользователя', 2, 'rgsgsrg', 2),
(16, 'Безопасность данных', 3, 'Ошибка 0000', 3),
(18, 'Ошибка передачи данных', 4, 'Огромная ошибка', 4),
(19, 'Техническая', 4, 'Пипец ошибка', 5),
(19, 'Ошибка пользователя', 4, 'ZOV', 6),
(19, 'Безопасность данных', 1, 'erfwefwefwe', 7),
(19, 'Безопасность данных', 1, 'daadawdaw', 8),
(19, 'Безопасность данных', 1, '32erfwesafse', 9),
(19, 'Техническая', 1, 'dawerawdA', 10),
(19, 'Техническая', 1, 'dawWDWAdawd', 11),
(19, 'Безопасность данных', 1, 'DWawdawdawd', 12),
(19, 'Безопасность данных', 3, 'DWawdawdawd', 13),
(20, 'Безопасность данных', 2, 'rewrwefwfwefwfwefwefw', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `item`
--

CREATE TABLE `item` (
  `id_items` int NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `item`
--

INSERT INTO `item` (`id_items`, `price`, `name`, `room`, `image`) VALUES
(1, '1000', 'Подушка', 'bedroom', 'assets\\bludo1.jpg'),
(2, '600', 'Ночник', 'bedroom', 'assets\\bludo2.jpg'),
(3, '1000', 'Плед', 'bedroom', 'assets\\bludo3.jpg'),
(4, '4000', 'Тумба', 'bedroom', 'assets\\bludo4.jpg'),
(5, '1500', 'Одеяло', 'bedroom', 'assets\\bludo5.jpg'),
(6, '1000', 'Ваза', 'bedroom', 'assets\\bludo6.jpg'),
(7, '550', 'Доска для нарезки', 'kitchen', 'assets\\bludo7.jpg'),
(8, '650', 'Комплект ножей', 'kitchen', 'assets\\bludo8.jpg'),
(9, '750', 'Набор тарелок', 'kitchen', 'assets\\bludo9.jpg'),
(10, '850', 'Набор столовых приборов', 'kitchen', 'assets\\bludo10.jpg'),
(11, '950', 'Чайник', 'kitchen', 'assets\\bludo11.jpg'),
(12, '1050', 'Конфетница', 'kitchen', 'assets\\bludo12.jpg'),
(13, '600', 'Полотенце', 'bathroom', 'assets\\bludo13.jpg'),
(14, '700', 'Мыльница', 'bathroom', 'assets\\bludo14.jpg'),
(15, '2500', 'Зеркало настенное', 'bathroom', 'assets\\bludo15.jpg'),
(16, '900', 'Зеркало настольное', 'bathroom', 'assets\\bludo16.jpg'),
(17, '1000', 'Держатель для полотенца', 'bathroom', 'assets\\bludo17.jpg'),
(18, '1100', 'Коврик для ног', 'bathroom', 'assets\\bludo18.jpg'),
(19, '999', 'Пододеяльник', 'bedroom', 'assets\\bludo19.jpg'),
(20, '3499', 'Шторы', 'bedroom', 'assets\\bludo20.jpg'),
(21, '1299', 'Картина', 'bedroom', 'assets\\bludo21.jpg'),
(22, '799', 'Цветок искусственный', 'bedroom', 'assets/bludo22.jpg'),
(23, '4999', 'Стеллаж (дерево)', 'bedroom', 'assets/bludo23.jpg'),
(24, '5699', 'Стеллаж (металл)', 'bedroom', 'assets/bludo24.jpg'),
(25, '1299', 'Ваза', 'bedroom', 'assets/bludo25.jpg'),
(26, '2199', 'Лампа', 'bedroom', 'assets/bludo26.jpg'),
(27, '2199', 'Комплект картин', 'bedroom', 'assets/bludo27.jpg'),
(28, '3099', 'Стеллаж ячеичный', 'bedroom', 'assets/bludo28.jpg'),
(29, '1599', 'Полка для книг\r\n', 'bedroom', 'assets/bludo29.jpg'),
(30, '999', 'Декоративные книги', 'bedroom', 'assets/bludo30.jpg'),
(31, '1900', 'Постельного белье', 'bedroom', 'assets/bludo31.jpg'),
(32, '1799', 'Постельного белье', 'bedroom', 'assets/bludo32.jpg'),
(33, '599', 'Коврик для ног', 'bedroom', 'assets/bludo33.jpg'),
(34, '3899', 'Тумба прикроватная', 'bedroom', 'assets/bludo34.jpg'),
(35, '499', 'Наволочки (комплект)', 'bedroom', 'assets/bludo35.jpg'),
(36, '599', 'Наволочки (шелк)', 'bedroom', 'assets/bludo36.jpg'),
(37, '1999', 'Зеркало', 'bedroom', 'assets/bludo37.jpg'),
(38, '299', 'Рамка', 'bedroom', 'assets/bludo38.jpg'),
(39, '799', 'Лента RGB', 'bedroom', 'assets/bludo39.jpg'),
(40, '599', 'Часы', 'bedroom', 'assets/bludo40.jpg'),
(41, '1599', 'Часы', 'bedroom', 'assets/bludo41.jpg'),
(42, '1099', 'Часы', 'bedroom', 'assets/bludo42.jpg'),
(43, '5999', 'Стол косметический', 'bedroom', 'assets/bludo43.jpg'),
(44, '799', 'Простыня (Шелк)', 'bedrom', 'assets/bludo44.jpg'),
(45, '2099', 'Cтул', 'bedroom', 'assets/bludo45.jpg'),
(46, '599', 'Вешалка для обуви', 'bedroom', 'assets/bludo46.jpg'),
(47, '2499', 'Стул-пуфик', 'bedroom', 'assets/bludo47.jpg'),
(48, '1999', 'Ковер', 'bedroom', 'assets/bludo48.jpg'),
(49, '2399', 'Лампа напольная', 'bedroom', 'assets/bludo49.jpg'),
(50, '2999', 'Сковорода', 'kitchen', 'assets/bludo50.jpg\r\n'),
(51, 'Набор ножей', '1999', 'kitchen', 'assets\\bludo51.jpg'),
(52, '999', 'Кувшин', 'kitchen', 'assets\\bludo52.jpg'),
(53, '1899', 'Противень (форма)', 'kitchen', 'assets\\bludo53.jpg'),
(54, '1299', 'Полка', 'kitchen', 'assets\\bludo54.jpg'),
(55, '1599', 'Комплект приборов', 'kitchen', 'assets\\bludo55.jpg'),
(56, '2199', 'Комплект приборов', 'kitchen', 'assets\\bludo56.jpg'),
(57, '1699', 'Комплект для мытья', 'kitchen', 'assets\\bludo57.jpg'),
(58, '399', 'Полотенце', 'kitchen', 'assets\\bludo58.jpg'),
(59, '99', 'Салфетки', 'kitchen', 'assets\\bludo59.jpg'),
(60, '799', 'Комплект ложек', 'kitchen', 'assets\\bludo60.jpg'),
(61, '899', 'Комплект ложек', 'kitchen', 'assets\\bludo61.jpg'),
(62, '849', 'Подушка для стула', 'kitchen', 'assets\\bludo62.jpg'),
(63, '639', 'Скатерть (края)', 'kitchen', 'assets\\bludo63.jpg'),
(64, '709', 'Скатерть (клетка)', 'kitchen', 'assets\\bludo64.jpg'),
(65, '1199', 'Кофеварка', 'kitchen', 'assets\\bludo65.jpg'),
(66, '999', 'Турка', 'kitchen', 'assets\\bludo66.jpg'),
(67, '1599', 'Противень ', 'kitchen', 'assets\\bludo67.jpg'),
(68, '1999', 'Противень (круг)', 'kitchen', 'assets\\bludo68.jpg'),
(70, '3099', 'Фильтр (кран)', 'kitchen', 'assets\\bludo70.jpg'),
(71, '269', 'Набор губок', 'kitchen', 'assets\\bludo71.jpg'),
(72, '239', 'OLLY ', 'kitchen', 'assets\\bludo72.jpg'),
(73, '299', 'Fairy', 'kitchen', 'assets\\bludo73.jpg'),
(74, '689', 'Сушилка', 'kitchen', 'assets\\bludo74.jpg'),
(75, '999', 'Сушилка (полка)', 'kitchen', 'assets\\bludo75.jpg'),
(76, '499', 'Коврик для сушки', 'kitchen', 'assets\\bludo76.jpg'),
(78, '299', 'Коврик для сушки', 'kitchen', 'assets\\bludo77.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `item_order`
--

CREATE TABLE `item_order` (
  `id` int NOT NULL,
  `id_items` int NOT NULL,
  `price` int NOT NULL,
  `count` int NOT NULL,
  `id_order` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `item_order`
--

INSERT INTO `item_order` (`id`, `id_items`, `price`, `count`, `id_order`) VALUES
(76, 6, 1000, 1, 50),
(77, 3, 1000, 5, 52),
(78, 15, 2500, 1, 53);

-- --------------------------------------------------------

--
-- Структура таблицы `leads`
--

CREATE TABLE `leads` (
  `id` int NOT NULL,
  `id_status` int NOT NULL,
  `fio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `leads`
--

INSERT INTO `leads` (`id`, `id_status`, `fio`, `phone`, `email`) VALUES
(1, 3, 'test', '+71234567890', 'test@test.ru'),
(2, 1, 'test', '+71234567891', 'test@test2.ru'),
(3, 1, 'Иван Неткачев', '+79115822400', 'bobmufer@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int NOT NULL,
  `id_user` int NOT NULL,
  `id_status` int NOT NULL,
  `full_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `id_status`, `full_price`) VALUES
(50, 16, 1, 1000),
(51, 17, 3, 0),
(52, 17, 1, 0),
(53, 17, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `prob_category`
--

CREATE TABLE `prob_category` (
  `id` int NOT NULL,
  `prob_category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(3, 'В процессе'),
(1, 'Новое'),
(2, 'Одобрено'),
(4, 'Отклонено');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `phone`, `email`, `password`) VALUES
(8, 'admin', '+79115833400', 'admin@gmail.com', '$2y$10$ioXUVi6/Ima4CevcCLlv3uVdgsgj9mFDJ6w3.7hAQ9/vyTTmVt04y'),
(16, 'test', '+71234567890', 'test@test.ru', '$2y$10$HRFUWS8apH/2p.ZI881cReC.MGl0rsTPB7kj7FKPFtN/jvHCJ.ffK'),
(17, 'Иван Неткачев', '+79115822400', 'bobmufer@gmail.com', '$2y$10$7oGlaEFjK1s7LtDcne7jrOiCWW39oNNL5ZFETGfvulsuqfjzPLXMi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_items`);

--
-- Индексы таблицы `item_order`
--
ALTER TABLE `item_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_food` (`id_items`),
  ADD KEY `id_order` (`id_order`);

--
-- Индексы таблицы `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `status` (`id_status`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `item`
--
ALTER TABLE `item`
  MODIFY `id_items` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT для таблицы `item_order`
--
ALTER TABLE `item_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT для таблицы `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `item_order`
--
ALTER TABLE `item_order`
  ADD CONSTRAINT `item_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_order_ibfk_2` FOREIGN KEY (`id_items`) REFERENCES `item` (`id_items`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
