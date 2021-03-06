-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2016 г., 14:12
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `profit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Author`
--

CREATE TABLE IF NOT EXISTS `Author` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Author`
--

INSERT INTO `Author` (`id`, `name`) VALUES
(1, 'Lenta.RU'),
(2, 'Яндекс Новости');

-- --------------------------------------------------------

--
-- Структура таблицы `Country`
--

CREATE TABLE IF NOT EXISTS `Country` (
  `id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_story` text NOT NULL,
  `full_story` text NOT NULL,
  `author_id` bigint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `News`
--

INSERT INTO `News` (`id`, `title`, `short_story`, `full_story`, `author_id`) VALUES
(1, 'Дипломаты не нашли доказательств обвинений Лондона в адрес России из-за Сирии', 'Посольство России в Великобритании констатировало отсутствие у Лондона фактов, подтверждающих заявления главы МИД Бориса Джонсона. Об этом говорится в адресованном британским парламентариям открытом письме посла Александра Яковенко, касающемся ситуации в Сирии. Текст размещен на сайте дипмиссии в понедельник, 17 октября.\r\n\r\n«Члены парламента огульно обвиняли Россию наряду с сирийским правительством в преднамеренном нанесении ударов по гражданским лицам, что Мининдел Великобритании пыталось квалифицировать как военные преступления», — пишет Яковенко.', 'По его словам, 10 дней назад у Форин Офиса была запрошена информация о доказательствах. В запросе отмечалось, что без предоставления адекватных данных Россия будет «рассматривать эти утверждения как наглую ложь, призванную обеспечить защиту "ан-Нусре" и, возможно, британским военнослужащим, находящимся в Сирии». По словам посла, суть полученного ответа «сводится к тому, что такими доказательствами британская сторона не располагает».\r\n\r\nБолее того, продолжил Яковенко, Джонсон, выступая в парламенте с обвинениями в адрес Москвы относительно удара по гуманитарному конвою ООН близ Алеппо, ссылался на данные из соцсетей. «Это не может не вызывать удивления (...). Посольство также запросило Форин Офис направить нам эту информацию из социальных сетей, которой пользовалось британское правительство. Мы ждем ответа», — подчеркнул посол.\r\n\r\n2 октября, как передавал Reuters, министр иностранных дел Великобритании заявил о том, что режим президента Башара Асада совершает в Сирии военные преступления «при поддержке русских». Он пояснил, что речь идет о бомбардировках госпиталей (Россия ранее неоднократно отрицала, что наносит удары по гражданским объектам).\r\n\r\n17 октября главы МИД стран-членов Евросоюза проводят встречу, одна из тем которой — усиление давления на Сирию и Россию.', 1),
(2, 'Венесуэльские заключенные съели двух сокамерников во время бунта', 'В венесуэльской тюрьме Тачира заключенные во время бунта съели нескольких сокамерников. С таким заявлением перед прессой выступил отец одного из погибших Хуан Карлос Эррара (Juan Carlos Herrara), пишет в понедельник, 17 октября, The Independent.\r\n\r\nМужчина сообщил, что посетил исправительное учреждение через несколько дней после того, как ситуация в нем нормализовалась. Один из заключенных рассказал ему, что видел расправу собственными глазами.\r\n\r\n«Моего сына и еще двоих [мужчин] захватили 40 человек. Они изрезали их ножом и подвесили, чтобы те истекали кровью. А затем Дорангель (Дорангель Варгас, венесуэльский серийный убийца и каннибал — прим. «Ленты.ру») разделывал их, чтобы накормить остальных», — заявил Эррара.', '«Я молю, чтобы мне отдали хотя бы одну кость [моего сына], чтобы я мог похоронить его и хоть немного облегчить его боль», — отметил мужчина.\r\n\r\nАнонимный источник в местной полиции подтвердил Fox News Latino гибель двоих человек. «Их зарезали и скормили остальным, а кости спрятали. Дорангель резал плоть», — добавил он. Министр тюрем Венесуэлы Ирис Варела (Iris Varela) со своей стороны заявила, что двое мужчин действительно исчезли, однако факт каннибализма подтвердить отказалась.\r\n\r\nБунт в Тачире начался 8 сентября, после того, как заключенные взяли в заложники восемь посетителей и двоих охранников. Это стало возможным из-за переполненности тюрьмы: в здании, рассчитанном на 120 преступников, разместили 350 человек.\r\n\r\n17 сентября стало известно о гибели 25 человек в результате столкновений между двумя группировками в тюрьме на севере Бразилии. Семь человек были обезглавлены, еще шестерых сожгли заживо.', 2),
(3, 'Историю британской литературы показали за 45 секунд', 'Британская правительственная организация для развития туризма VisitBritain в рамках спецпроекта с журналом Euromag создала мультфильм, за 45 секунд раскрывающий главные вехи в истории британской литературы.', 'В ролике, опубликованном на YouTube-канале Euromag, схематично показаны основные произведения классиков, включая трагедии Уильяма Шекспира, приключенческий роман «Остров сокровищ» Роберта Льюиса Стивенсона и серию книг о Гарри Поттере Джоан Роулинг.', 3),
(4, 'Появилось видео с эвакуацией Медведева из зала в Сколково', 'Телеканал «Россия 24» показал видео из зала, где проходила пленарная сессия форума «Открытые инновации» в Сколково, прерванная из-за внештатной ситуации. На записи, опубликованной сайтом «Вести.ру», ведущий просит присутствующих, среди которых был премьер-министр Дмитрий Медведев, покинуть помещение в целях безопасности. Участники стали выходить.', 'Заседание было приостановлено после хлопков, в зале ощущался запах гари. В пресс-службе правительства пояснили, что «в связи с коротким замыканием произошло возгорание, которое тут же было потушено, но пленарную сессию пришлось прервать». Форум уже возобновил работу.', 0),
(5, 'Песков объяснил увеличение числа мигалок для депутатов', 'Увеличение числа автомобилей со спецсигналами для Госдумы обусловлено «изменениями в рамках естественных колебаний», заявил пресс-секретарь главы государства Дмитрий Песков. Об этом в среду, 26 октября, сообщает корреспондент «Ленты.ру».', '«Нет, тенденцию не стоит в этом усматривать», — подчеркнул официальный представитель Кремля. По его словам, речи о значительном росте количества машин с мигалками не идет.\r\n\r\nРешение было обосновано и одобрено президентом, добавил Песков.\r\n\r\nРанее в среду вице-спикер нижней палаты парламента Игорь Лебедев сообщил, что имена депутатов, которые получат спецсигналы на свои автомобили, станут известны в начале следующей неделе. Распределять мигалки будет спикер Госдумы Вячеслав Володин.\r\n\r\nПрезидент России Владимир Путин подписал 26 октября указ, согласно которому ГД седьмого созыва выделяется 12 автомобилей со спецсигналами — в полтора раза больше, чем предыдущему составу.\r\n\r\nС 1 июля 2012 года количество машин с мигалками у органов власти России сократилось почти вдвое: с 1040 до 569. Впоследствии оно увеличилось на 10 процентов — до 627, в частности, дополнительно четыре таких автомобиля появились у правительства России, два — у администрации президента.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` bigint(20) unsigned NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `firstname`, `middlename`, `lastname`, `login`, `pass`, `email`, `birthday`) VALUES
(1, 'Сергей', 'Петрович', 'Ромашкин', 'serg', '', 'serg@domain.local', '0000-00-00'),
(2, 'Василий ', 'Иванович', 'Чапаев', 'chapayev', '', 'vasya@domain.local', '0000-00-00'),
(3, 'Василий', 'Петрович', 'Пупкин', 'vasya', '', 'pupkin@domain.local', '0000-00-00'),
(5, 'Кот Матроскин', '', '', 'matroska', '', NULL, '0000-00-00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `Country`
--
ALTER TABLE `Country`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Author`
--
ALTER TABLE `Author`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `Country`
--
ALTER TABLE `Country`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `News`
--
ALTER TABLE `News`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
