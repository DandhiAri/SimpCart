-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 11.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbunga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`id`, `name`, `address`, `product_name`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 'bogeng', 'dabsdjak', 'Rose Flower', '1', '42331', '2021-12-06 02:46:55', '2021-12-06 02:46:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_03_163753_create_products_table', 1),
(6, '2021_12_04_074948_create_transecs_table', 1),
(7, '2021_12_04_130824_create_carts_table', 1),
(8, '2021_12_05_140335_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` double(12,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `deskripsi`, `foto`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Rose Flower', 'voluptatem-mollitia-quisquam-rerum-unde-ducimus', '<p>Aut autem ducimus assumenda et eligendi esse. Eligendi saepe rerum dolor alias reiciendis qui ea. Tenetur dolorem nemo id reprehenderit rerum atque.</p><p>Eligendi ut molestiae nihil fugiat omnis est libero. Et molestiae alias ducimus maxime. Qui et voluptatibus est vel.</p><p>Incidunt non et quibusdam. Debitis voluptatem repellendus beatae. Mollitia voluptatem adipisci corrupti doloribus voluptas. Harum laboriosam quos cumque maiores molestias.</p><p>Numquam accusamus dignissimos ea eveniet sed et nostrum. Earum delectus eligendi aut dignissimos occaecati officiis. Consequuntur aut nesciunt repellendus doloremque quisquam. Porro voluptatum vel provident.</p><p>Dolor eum ut consequatur aut. Asperiores explicabo porro voluptate molestiae perferendis voluptate voluptatem. Sit qui fugiat saepe quisquam qui. Est dolorum rem quod voluptatem rem expedita.</p><p>Repellat consectetur nihil praesentium unde dolor. Esse eveniet fugit sunt maxime dolores ea rerum. Non deleniti debitis molestias rerum vel quidem. Veniam aspernatur dolorem molestiae magnam.</p>', NULL, 42331.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(2, 'Rose Flower', 'fugiat-consequatur-qui-distinctio-aut-aliquid', '<p>Sit quasi totam possimus temporibus harum nihil debitis. Suscipit tempora nam et earum assumenda fuga vel. Similique rerum consequatur atque sed. Inventore aut recusandae et et quos dolorem inventore.</p><p>Fugit nesciunt laboriosam odio vel maiores est ducimus aut. Non a consequuntur quis iusto eos. Quae ullam mollitia quia corporis at dolorum. Consequuntur distinctio commodi dolores quasi.</p><p>Recusandae excepturi molestias aut sequi ipsum quia. Adipisci eveniet quibusdam est soluta veritatis facere dolores. Sed id dignissimos suscipit eius sed in. Sit suscipit corporis eos culpa.</p><p>Maiores velit nemo vero. Architecto optio cum non rerum dolorum atque et quia. Earum iusto vel dolores nemo corporis vero. Iusto ut dolor mollitia et a quia tempore.</p><p>At cum qui autem id placeat. Aut iusto voluptatem beatae esse non molestiae quasi quis. Eius minima est nemo ad molestias.</p><p>Aliquid voluptates voluptatum sit est quasi. Dolorem expedita inventore voluptas. Perferendis error deserunt officia quibusdam velit error.</p><p>Quam voluptate sunt eum qui. Dolorem non necessitatibus non. Et aut debitis reiciendis voluptatibus quos nulla.</p><p>Quia minima est est. Quidem neque et dolorem qui pariatur. Veritatis nulla sequi voluptatem sit perferendis. Excepturi distinctio impedit fugit recusandae.</p><p>Modi dolores dolor placeat eos molestiae. Quas molestiae necessitatibus recusandae voluptas quasi ipsum explicabo. Vel repellat nihil assumenda reprehenderit omnis voluptate. Nesciunt illo ratione aut quam sed magni. Quaerat sit magnam ipsa ex.</p><p>Optio facere reiciendis voluptatibus rerum aut reprehenderit a. Aperiam ut soluta et et aut. Et omnis eius aut aut sed et velit.</p>', NULL, 84210.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(3, 'Orchid', 'temporibus-quo-porro-veniam-perferendis-nihil', '<p>Nesciunt et earum molestiae eveniet. Fuga aut odit iure ipsa qui. Laboriosam mollitia fugit qui excepturi.</p><p>Soluta non ut in voluptas. Doloribus repellendus at saepe fugiat. Suscipit et ut occaecati consequatur.</p><p>Deleniti numquam nobis laboriosam sequi quas ipsum doloribus aut. Ut eum minus at ratione. Id est et rerum repellendus sit libero temporibus. Dolorem molestiae ratione laudantium iste. Consequatur sed cumque repellat omnis reprehenderit aut deleniti numquam.</p><p>Reprehenderit sunt provident dignissimos ea iure et. Similique est itaque temporibus nemo ab.</p><p>Voluptatibus unde nemo commodi omnis accusantium nostrum et quidem. Eaque perspiciatis et harum enim id. Officia aut non accusamus beatae aut quod officia.</p><p>Sed ex omnis necessitatibus omnis ut. Explicabo praesentium ea aperiam suscipit eum. Nesciunt ullam quo aut dolores id.</p><p>Quidem et voluptatem mollitia voluptates id ut beatae inventore. Assumenda tempora modi doloremque expedita officiis. Rerum ea at et sint sed asperiores.</p>', NULL, 12250.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(4, 'Tulip', 'sed-delectus-assumenda-numquam-id-eum-consequatur-et-distinctio', '<p>Ut accusamus perferendis ut veniam tempore. Aliquid sunt deserunt repellendus aliquid quia. Non atque iste voluptatem. In repellat repellat labore dolore aliquid consequatur fugit.</p><p>Rerum id temporibus velit quidem enim eligendi. Illo architecto reiciendis omnis harum et non. Beatae nobis maiores pariatur dolore maxime aut impedit aliquam.</p><p>Tempore autem tempore ab qui minima. Aut voluptatem excepturi nostrum debitis est aperiam. Maxime doloribus occaecati earum in illo illum.</p><p>Voluptates eum nobis sint eveniet incidunt porro quos. Sed odio possimus rem nisi sed qui non vitae. Officiis voluptatum aut illo natus dolore. Possimus cumque exercitationem et ut debitis corrupti rerum.</p><p>Aperiam sit neque enim exercitationem est qui autem. Molestiae repudiandae iusto incidunt ut modi. Quaerat fugiat repellendus vel molestiae id odit sit.</p><p>Possimus molestiae velit est provident adipisci quasi voluptatem. Voluptatem velit libero non commodi. Aut suscipit quia sint totam blanditiis sit pariatur et. Quo itaque voluptatem optio doloremque voluptatem.</p>', NULL, 81791.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(5, 'Orchid', 'dolor-quia-perspiciatis-sed-sunt-quae-voluptatem-sequi-illum', '<p>Quo eos ex animi. Voluptatem ut et ut omnis et quia dolores nemo. Et est dolores voluptatibus id commodi.</p><p>Quibusdam tenetur alias et beatae harum. Dolorem voluptatum voluptatem occaecati occaecati perspiciatis voluptas tempora. Veritatis dolore et delectus et commodi sed dolorem. Sint aliquam similique earum necessitatibus molestias in.</p><p>Accusamus ea dolores nulla nihil sint. Ut quia non veniam officia quae. Nam rerum aut sit nesciunt optio. Quasi magnam nobis tempora tempore deleniti.</p><p>Dolore fugit vitae sapiente. Sed molestiae ea eveniet eos nesciunt blanditiis beatae vitae. Molestiae dolor facilis nihil aut expedita ipsam. Omnis et vitae porro nesciunt ad laborum consectetur facilis.</p><p>Nostrum nemo molestias quasi nemo dicta officiis placeat quam. Dolore aut aut quibusdam sint ut enim. Ipsum impedit minus id qui quas est illo esse.</p><p>Necessitatibus distinctio beatae voluptatem aliquam recusandae. Qui qui dolor voluptatem sed quia dolor quod voluptatum. Qui vero saepe dolorem.</p><p>Eum veritatis omnis similique minima. Omnis a impedit ut qui excepturi vitae. Assumenda omnis voluptatem ut labore.</p><p>Ut culpa quas rerum consectetur repudiandae. Eum blanditiis reiciendis officiis et quae qui. Aut dolor ea omnis quis ut iure. Quos ducimus nemo officiis mollitia est illo tempora.</p><p>Ipsam architecto ab inventore suscipit odit. Excepturi ullam et ut at in voluptas aperiam. Tempore beatae voluptatibus explicabo enim excepturi saepe.</p>', NULL, 94180.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(6, 'Orchid', 'aliquid-aut-aliquid-qui-eos-exercitationem-ut-qui', '<p>Accusantium et quia impedit aliquid doloremque. Qui voluptas qui ab culpa. Tempora non fuga inventore sit est. Saepe in possimus qui sed vero.</p><p>Voluptate eius hic qui quis at quis. Totam quis enim quibusdam vitae excepturi id. Incidunt consequatur sapiente eius delectus natus.</p><p>Impedit et iusto minima repudiandae repellat. Odio eaque temporibus voluptatibus numquam enim. Consectetur amet itaque eaque et qui.</p><p>Amet minus ut voluptates explicabo voluptatem. Voluptas minus illum aliquid reiciendis molestias fuga aut. Quas error commodi neque quasi quasi.</p><p>Nam voluptatum eveniet beatae expedita reprehenderit. Numquam facere nulla commodi animi amet velit dolores. Recusandae alias sint cupiditate tenetur laudantium.</p><p>Est quis expedita deleniti. Veritatis et enim exercitationem. Natus aliquam qui inventore facere rerum consectetur porro.</p><p>Quis aut quibusdam aperiam quis esse. In cum atque beatae accusamus harum tenetur assumenda. Necessitatibus eligendi nostrum sit delectus est ea et. Qui qui deserunt nihil quisquam alias ut. Quo enim consequatur non perspiciatis ab officiis natus eveniet.</p><p>Sed nihil est tenetur iure non. Ratione dolorem aut iusto ut. Libero voluptatum architecto fuga vitae. Possimus ut accusamus nihil commodi cumque dolor ea aliquid. Maxime consequatur quia ullam et sunt.</p><p>Nulla vero consequatur tempore fugiat quia reiciendis. Sit illum fugiat deleniti beatae culpa ex voluptatem. Quia nisi saepe qui maiores aspernatur. Esse ad non temporibus deserunt ipsum omnis laboriosam ducimus. Deleniti dolorum fugiat et est.</p><p>Praesentium dolor a qui et sed aspernatur. Est tenetur dignissimos laborum tempore quam iusto. Officiis consequatur dolore nulla. Consectetur reprehenderit consequatur quibusdam qui voluptas deserunt.</p>', NULL, 46729.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(7, 'Rose Flower', 'ducimus-omnis-quisquam-amet-ut', '<p>Cum et ut ex provident eos. Maiores qui quo at reprehenderit et possimus ex sunt. Saepe atque ut velit. Corrupti nisi voluptas non in optio ratione.</p><p>Consequatur eos illum ut voluptas corrupti quos. Animi alias sint nobis eligendi fugiat. Impedit non veniam facilis officiis qui dolor.</p><p>Minus aut magnam et. Sit autem minima rerum aut accusamus repellat. Saepe et voluptatem velit deserunt facere vero ad. Quia sint ex laudantium molestiae.</p><p>Quo eveniet dolor est omnis quasi dolor. Voluptate minus mollitia consequatur tempora dolorem reprehenderit.</p><p>Ullam temporibus dolorem est fuga eum et non. Recusandae et eaque qui.</p>', NULL, 72230.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(8, 'Tulip', 'dolor-occaecati-officiis-voluptatibus-vero-praesentium-autem-vel', '<p>Dignissimos velit ut qui eligendi vero. Atque architecto sit et neque. Velit quis architecto laudantium tempora minima.</p><p>Rem molestias laborum quod voluptates nobis voluptatem atque magni. Accusamus modi nam et quod nobis hic. Id eos sed et quis quasi. Pariatur odit temporibus maxime et dicta dolorum.</p><p>Molestiae nulla facilis aut impedit illum. Aut saepe qui iste.</p><p>Quam et vel et vitae aut qui. Vitae dolorem ab quos possimus nisi adipisci. Ut qui nesciunt voluptatem sed reiciendis voluptate. Dolores quos distinctio voluptas qui.</p><p>Neque aut est error temporibus. Repudiandae nulla dolor sit quis eum tempora. Doloribus dolorem quo perferendis officia aut suscipit. Nostrum deserunt suscipit quos aperiam sed. Facilis et eos laborum perferendis.</p><p>Amet nobis quidem et aut quia. Nihil harum voluptatem cum delectus sunt ducimus reprehenderit. Sunt tempore quis dolores vitae nihil.</p>', NULL, 78344.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(9, 'Orchid', 'et-qui-doloremque-dolor-est-voluptatibus-dolore-voluptatem', '<p>Ut enim dolorem recusandae nisi earum consequuntur et. Quisquam cupiditate optio nostrum eaque consequuntur eos. Eum cumque vel aut sequi nam. Ut ut unde fugiat dolor qui sapiente voluptas dolor.</p><p>Culpa quis quibusdam corporis harum explicabo neque et omnis. Omnis et autem vitae aliquid. Quasi expedita exercitationem ex id eius. Et itaque aut sint et dolores nam similique.</p><p>Esse vero eius debitis corporis veniam. Placeat et dolorem voluptatem atque quasi porro a ut. Sint iusto quia deserunt ratione debitis ut odit. Molestias quis similique doloremque. Quo saepe illo non rerum.</p><p>Alias error et illo omnis. Doloremque suscipit maxime quis aliquam nihil. Laboriosam incidunt qui repellat. Qui vel facilis et saepe rem eos.</p><p>Magnam fugit dolor rerum placeat sit sed veniam. Illo corrupti illo sunt deleniti ipsa dolore. Qui et quas exercitationem omnis aut est.</p><p>At ducimus unde ab similique. Ipsum quisquam accusamus ut aliquid ad. Rem consequatur numquam accusantium eos delectus nemo. Vero id in delectus eos dignissimos et fugit esse. Repellendus hic et nisi omnis.</p><p>Labore aut impedit quo et reiciendis in rerum. Sed cum qui totam asperiores deleniti beatae quae. Et ipsam hic incidunt itaque rerum quia vitae. Eos rem magni voluptas similique recusandae qui ut.</p><p>Autem iure eius non deleniti sed ipsum qui. Voluptatem explicabo officiis tempora quia fuga qui ut. Omnis sint accusantium quidem voluptatem consequatur ut saepe. Quasi qui assumenda sapiente similique nihil unde inventore magnam.</p><p>Eum quos voluptatum eum esse culpa veniam dolores. Et libero aliquid rerum velit est. Soluta numquam ut ipsam nam eaque provident. Nam nostrum sint aperiam et.</p>', NULL, 27998.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(10, 'Orchid', 'consectetur-qui-hic-voluptatem-illum-corporis-praesentium-quia-consequatur', '<p>Corrupti rerum aliquam qui tempore ad. Itaque accusamus dolores assumenda eligendi atque iusto ea beatae. Atque molestiae sed iure quam explicabo voluptatem. Quo tempore minima sit.</p><p>Nisi iste ullam similique eveniet quam nesciunt ratione beatae. Sunt dolores architecto qui ab nostrum autem consectetur. Quis dolor temporibus rerum dolor id esse.</p><p>Animi sapiente molestias magnam quis. In tempora omnis asperiores quidem quis enim sint.</p><p>Quibusdam corporis nostrum officia et omnis. Accusamus alias officia dolorem quibusdam ut quia. Dolore quis reiciendis suscipit sit deleniti.</p><p>Dolores aut beatae eligendi similique nisi et eum. Temporibus ea modi magni provident. Vel repellendus aspernatur in eum consequatur culpa.</p><p>Ut odit rem nihil qui beatae in ut. Quia aliquid dolores cum ut est quod deserunt. Quia eveniet et voluptate veritatis minus.</p><p>Non quia rem laborum. Rerum aut eaque tempora. Ab maxime commodi temporibus quisquam aut enim ea. Similique vitae dolores consequatur.</p>', NULL, 69349.00, '2021-12-06 02:39:22', '2021-12-06 02:39:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transecs`
--

CREATE TABLE `transecs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bogeng', 'bogeng@example.com', 'admin', 'dabsdjak', NULL, '$2y$10$7w5qfAU22YFxFhvqjJ2x4ORO228ygyV5XJEZGCrjScqHMlACZhUvu', NULL, '2021-12-06 02:39:19', '2021-12-06 02:39:19'),
(2, 'Devin Nienow', 'bauch.madie@example.net', 'user', '172 Harvey Valley\nBulahbury, WI 95687-3043', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'p2i8wry9wP', '2021-12-06 02:39:21', '2021-12-06 02:39:21'),
(3, 'Mr. Americo Bruen', 'rutherford.reese@example.org', 'user', '973 Ashley Pass Apt. 055\nNorth Ramona, RI 36059', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RzqdEi6Dql', '2021-12-06 02:39:21', '2021-12-06 02:39:21'),
(4, 'Marjolaine Bradtke', 'bfranecki@example.org', 'admin', '7439 Coralie Land\nPort Virginiabury, MI 73181-7416', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TGrpOAKc8K', '2021-12-06 02:39:21', '2021-12-06 02:39:21'),
(5, 'Mrs. Emily Rolfson', 'jaskolski.hildegard@example.net', 'admin', '35524 Alexandria Club\nMurphyborough, WI 81850', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ie02XiZr4c', '2021-12-06 02:39:21', '2021-12-06 02:39:21'),
(6, 'Darrion Terry', 'fkuphal@example.net', 'admin', '16031 Geovanny Drive Apt. 196\nSouth Rosie, PA 60549', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1LTUDzVpoc', '2021-12-06 02:39:21', '2021-12-06 02:39:21'),
(7, 'Daphney Ward', 'dare.adrien@example.org', 'admin', '52790 Lavada Shoals Apt. 634\nPort Yasmin, WY 52298', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6jfxgwlH4Z', '2021-12-06 02:39:21', '2021-12-06 02:39:21'),
(8, 'Miss Sadye Grant Jr.', 'gudrun.murazik@example.com', 'admin', '83117 Brown Walk Suite 204\nEast Cristian, MN 91723-2667', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Pgll2wCUaQ', '2021-12-06 02:39:21', '2021-12-06 02:39:21'),
(9, 'Isabelle Konopelski', 'borer.chelsey@example.net', 'admin', '159 Kilback Curve Suite 346\nLake Lavonnetown, AZ 34551', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H8stxmHqN5', '2021-12-06 02:39:21', '2021-12-06 02:39:21'),
(10, 'Cortez Murray', 'gaylord.ida@example.org', 'user', '9920 Noah Tunnel Apt. 334\nNew Willard, NV 59547', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DpybaGpPHY', '2021-12-06 02:39:22', '2021-12-06 02:39:22'),
(11, 'Marcella Will', 'april.lemke@example.com', 'user', '3670 Edison Turnpike\nClementineshire, FL 60677', '2021-12-06 02:39:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'I1m3YOGdE5', '2021-12-06 02:39:22', '2021-12-06 02:39:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indeks untuk tabel `transecs`
--
ALTER TABLE `transecs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transecs`
--
ALTER TABLE `transecs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
