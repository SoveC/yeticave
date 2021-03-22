INSERT INTO categories SET categ_id = "board", categ_name = "Доски и лыжи";
INSERT INTO categories SET categ_id = "kreps", categ_name = "Крепления";
INSERT INTO categories SET categ_id = "boots", categ_name = "Ботинки";
INSERT INTO categories SET categ_id = "clothes", categ_name = "Одежда";
INSERT INTO categories SET categ_id = "tools", categ_name = "Инструменты";
INSERT INTO categories SET categ_id = "misc", categ_name = "Разное";

INSERT INTO users SET user_id = "", user_name = "Дима", user_email = "dima@gmail.com", user_password="33332",user_image="user.png", user_signup_date="04.03.2021", user_contact="89275858587";
INSERT INTO users SET user_id = "", user_name = "Сергей", user_email = "serega@gmail.com", user_password="44455",user_image="user_serega.png", user_signup_date="03.02.2021", user_contact="89236911187";


INSERT INTO lots SET   lot_name="2014 Rossignol District Snowboard", lot_image="img/lot-1.jpg", lot_start_price="10999";
INSERT INTO lots SET   lot_name="DC Ply Mens 2016/2017 Snowboard", lot_image="img/lot-2.jpg", lot_start_price="159999";
INSERT INTO lots SET   lot_name="Union Contact Pro 2015 года размер L/XL", lot_image="img/lot-3.jpg", lot_start_price="8000";
INSERT INTO lots SET   lot_name="Ботинки для сноуборда DC Mutiny Charocal", lot_image="img/lot-4.jpg", lot_start_price="10999";
INSERT INTO lots SET   lot_name="Куртка для сноуборда DC Mutiny Charocal", lot_image="img/lot-5.jpg", lot_start_price="7500";
INSERT INTO lots SET   lot_name="Маска Oakley Canopy", lot_image="img/lot-6.jpg", lot_start_price="5400";


INSERT INTO rate SET rate_id="1", rate_date="05.03.2021", rate_price="1250";




SELECT * FROM lots WHERE lot_cr_date > SUBDATE(now(),0);
UPDATE lots SET lot_name = "novoe imya" WHERE lot_id = "1";
SELECT lot_id FROM rate WHERE rate_date > SUBDATE(now(),0);




