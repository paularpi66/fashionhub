CREATE TABLE `products` (
  `id` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `created_at` timestamp  DEFAULT NOW(),
  `updated_at` timestamp DEFAULT NOW(),
  `deleted_at` timestamp DEFAULT NOW(),
  `name` varchar(255),
  `subtitle` varchar(255),
  `price` float,
  `description` varchar(512),
  `benefits` varchar(512),
  `details` varchar(512),
  `more_details` varchar(512)
);

CREATE TABLE `images` (
  `id` integer PRIMARY KEY NOT null AUTO_INCREMENT,
  `product_id` integer,
  `image_path` varchar(255)
);

CREATE TABLE `cart_items` (
  `id` integer PRIMARY KEY NOT null AUTO_INCREMENT,
  `created_at` timestamp DEFAULT NOW(),
  `updated_at` timestamp DEFAULT NOW(),
  `deleted_at` timestamp DEFAULT NOW(),
  `product_id` integer,
  `quantity` integer,
  `size` varchar(255),
  `color` varchar(255),
  `cart_id` integer
);

CREATE TABLE `carts` (
  `id` integer PRIMARY KEY NOT null AUTO_INCREMENT,
  `total_price` float
);

ALTER TABLE `images` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `cart_items` ADD FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

ALTER TABLE `cart_items` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
