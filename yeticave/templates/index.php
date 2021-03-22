
<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
            <?php foreach ($categories as $item): ?>
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="pages/all-lots.html"><?=$item['categ_name'];?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
            <?php foreach ($info as $lots): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=$lots['lot_image'];?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$lots['lot_categ_id'];?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?=$lots['lot_id']; ?>"><?=$lots['lot_name'];?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=format_sum($lots['lot_start_price']); ?></span>
                        </div>
                        <div class="lot__timer timer">
                            <?=time_lots();?>
                        </div>
                    </div>
                </div>
            </li>
            <?endforeach;?>
        </ul>
    </section>
</main>
