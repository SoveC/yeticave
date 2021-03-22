<meta charset="utf8">
<nav class="nav">
    <ul class="nav__list container">
        <?php foreach($info as $item):?>
            <li class="nav__item">
                <a href="all-lots.html"><?=$item['categ_name'];?></a>
            </li>
        <?php endforeach;?>
    </ul>
</nav>
<section class="lot-item container">
    <h2><?=$lot['lot_name'];?></h2>
    <div class="lot-item__content">
        <div class="lot-item__left">
            <div class="lot-item__image">
                <img src="<?=$lot['lot_image'];?>" width="730" height="548" alt="Сноуборд">
            </div>

            <p class="lot-item__category" >Категория: <span> <?=$info[$lotID]['lot_categ_id'];?> </span></p>
            <p class="lot-item__description"> Описание: <?=$lot['lot_discr']?> </p>

        </div>

        <div class="lot-item__right">
            <div class="lot-item__state">
                <div class="lot-item__timer timer">
                    <?= time_lots($times_left);?>
                </div>
                <div class="lot-item__cost-state">
                    <div class="lot-item__rate">
                        <span class="lot-item__amount">Текущая цена</span>
                        <span class="lot-item__cost"><?=format_sum($lot['lot_start_price']);?></span>
                    </div>

                </div>
            </div>
        </div>
</section>
