INSERT INTO `products`(`name`, `subtitle`, `price`, `description`, `benefits`, `details`, `more_details`) VALUES ('Embrace Sideboard','Teixeira Design Studio',71.56,"When it's colder than the far side of the moon and spitting rain too, you've still got to look good. From water-repellent leather to a rugged outsole, the Lunar Force 1 adapts AF-1 style, so you can keep your flame burning when the weather hits. Metal lace hardware and extended tongue bring mountain boot toughness, while the star-studded toe design gives your look the edge","Durable leather is easily cleanable so you can keep your look fresh.
Water-repellent finish and internal membrane help keep your feet dry.
Toe piece with star pattern adds durability.
Synthetic insulation helps keep you warm.
Originally designed for performance hoops, the Air unit delivers lightweight cushioning.
Plush tongue wraps over the ankle to help keep out the moisture and cold.
Rubber outsole with aggressive traction pattern adds durable grip.
Durable leather is easily cleanable so you can keep your look fresh.","Not intended for use as Personal Protective Equipment (PPE)
Water-repellent finish and internal membrane help keep your feet dry.","Lunarlon midsole delivers ultra-plush responsiveness
Encapsulated Air-Sole heel unit for lightweight cushioning
Colour Shown: Ale Brown/Black/Goldtone/Ale Brown
Style: 805899-20");

INSERT INTO `images`(`product_id`, `image_path`) VALUES (1,'images/1/img1.jpg');
INSERT INTO `images`(`product_id`, `image_path`) VALUES (1,'images/1/img2.jpg');
INSERT INTO `images`(`product_id`, `image_path`) VALUES (1,'images/1/img3.jpg');
INSERT INTO `images`(`product_id`, `image_path`) VALUES (1,'images/1/img4.jpg');

INSERT INTO `carts`(`total_price`) VALUES (0);

INSERT INTO `cart_items`(`product_id`, `quantity`, `size`, `color`, `cart_id`) VALUES (1,2,'small','#ECDECC',1);
INSERT INTO `cart_items`(`product_id`, `quantity`, `size`, `color`, `cart_id`) VALUES (1,1,'medium','#ECDECC',1);
INSERT INTO `cart_items`(`product_id`, `quantity`, `size`, `color`, `cart_id`) VALUES (1,3,'large','#ECDEFF',1);

Update `carts` set `total_price` = 71.56*6*(1+25/100.0) where `id` = 1;
