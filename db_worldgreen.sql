CREATE DATABASE db_worldgreen;
USE db_worldgreen;

-- Tabel Users (Pelanggan)
CREATE TABLE users (
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id int(11) DEFAULT NULL,
);

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`,  `created_at`, `updated_at`) VALUES
(1, 'tezt', 'tezt@gmail.com', 1, '', '2025-03-11 03:01:35', '2025-03-14 01:48:20'),

ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
