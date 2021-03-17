INSERT INTO categories SET categ_id = "board", categ_name = "Доски и лыжи";
INSERT INTO categories SET categ_id = "fastenings", categ_name = "Крепления";
INSERT INTO categories SET categ_id = "boots", categ_name = "Ботинки";
INSERT INTO categories SET categ_id = "clothing", categ_name = "Одежда";
INSERT INTO categories SET categ_id = "tools", categ_name = "Инструменты";
INSERT INTO categories SET categ_id = "other", categ_name = "Разное";

INSERT INTO users SET user_id = "", user_name = "Дима",user_email="Susf@gmail.com",user_password="192923dfdf",user_signup_date="03.04.2001",user_image="gdfsdfsdfsdf33rredf",user_contact="sfssvsvsdv";
INSERT INTO users SET user_id = "", user_name = "Дина",user_email="DImaC@gmail.com",user_password="1fwe6378",user_signup_date="15.04.2001",user_image="gdfoppr33rredf",user_contact="sfssvsv1dv";
INSERT INTO users SET user_id = "", user_name = "Димас",user_email="DivC@gmail.com",user_password="12щцуао",user_signup_date="06.04.2001",user_image="gdfsdfsd13322redf",user_contact="sfssgggggv";
INSERT INTO users SET user_id = "", user_name = "Диман",user_email="Ds@gmail.com",user_password="1ааауауыа5",user_signup_date="23.04.2010",user_image="gdfsdfsdfs0099rredf",user_contact="sfssfsfesdv";
INSERT INTO users SET user_id = "", user_name = "Диматрон",user_email="Dfffffimas@gmail.com",user_password="12645",user_signup_date="13.04.2001",user_image="gdfsdfsdfsd",user_contact="sfssvrrrv";

INSERT INTO lots SET lot_id = "", lot_cr_date = "03.04.2020", lot_name="Bruses", lot_descr="gkndfn jnnnn. dekkfmee;cld, lfkf", lot_image="tythfnbfn", lot_start_price="1200", lot_comp_date="05.03.2021", lot_step="150", lot_user_id="34", lot_winner_id="2", lot_categ_id="1";
INSERT INTO `lots` (`lot_id`, `lot_cr_date`, `lot_name`, `lot_descr`, `lot_image`, `lot_start_price`, `lot_comp_date`, `lot_step`, `lot_user_id`, `lot_winner_id`, `lot_categ_id`) VALUES ('', '2021-03-05 00:00:00', 'fgredfeg', 'erherjbbffrfkfmkcmfjkg', 'sdjkbbgjgksdf.png', '1200', '2021-03-23 00:00:00', '123', '1', NULL, '1')

INSERT INTO rate SET rate_id = "2", lot_id="1", user_id="1", rate_date="03.02.2001", rate_price="1550";

SELECT  * FROM lots WHERE lot_cr_date > SUBDATE(now(),0);
UPDATE lots SET lot_name ="new name" WHERE lot_id="1";
SELECT lot_id FROM rate WHERE rate_date > SUBDATE(now(),0);
