<html>
<head>
    <meta charset="UTF-8">
	<title>Это мой первый веб-сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	$array = [
				[
				'item_image' => '1.jpg',
				'item_title' => 'Авокадо, 6 шт.'
				],
				[
				'item_image' => '2.jpg',
				'item_title' => 'Манго, 3 шт.'
				],
				[
				'item_image' => '3.jpg',
				'item_title' => 'Коробка фруктов с ананасом'
				],
				[
				'item_image' => '4.jpg',
				'item_title' => 'Коробка фруктов'
				],
				[
				'item_image' => '5.jpg',
				'item_title' => ' Коробка фруктов'
				],
				[
				'item_image' => '6.jpg',
				'item_title' => 'Тарелка фруктов'
				],
				[
				'item_image' => '7.jpg',
				'item_title' => 'Коробка фруктов подарочная'
				],
				[
				'item_image' => '8.jpg',
				'item_title' => 'Тарелка фруктов'
				],
	];
	?>

    <div class="header">Магазин свежих фруктов</div>
    <div class="menu">
        <ul class="menu-list">
            <li class="menu-item"><a class="menu-link" href="">Главная</a></li>
            <li class="menu-item"><a class="menu-link" href="">Каталог</a></li>
            <li class="menu-item cart"><a class="menu-link" href="">Корзина</a></li>
            <li class="menu-item"><a class="menu-link" href="">Контакты</a></li>
        </ul>
    </div>
    <div class="content">
	
		<?php foreach($array as $item): ?>
				<div class="item">
					<div class="item-img img-cover">
						<img src="<?php	echo $item['item_image']; ?>">
					</div>
					<div class="item-title">
						<?php echo $item['item_title']; ?>
					</div>
					<div class="item-btn">
						<button class="btn">
							Заказать
						</button>
					</div>
				</div>

		<?php endforeach; ?>
	
  <!--  <div class="item">
            <div class="item-img">
                <img src="1.jpg">
            </div>
            <div class="item-title">
                Авокадо, 6 шт.
            </div>
            <div class="item-btn">
                <button class="btn">
                    Заказать
                </button>
            </div>
        </div>
        <div class="item">
            <div class="item-img">
                <img src="2.jpg">
            </div>
            <div class="item-title">
                Манго, 3 шт.
            </div>
            <div class="item-btn">
                <button class="btn">
                    Заказать
                </button>
            </div>
        </div>
        <div class="item">
            <div class="item-img">
                <img src="3.jpg">
            </div>
            <div class="item-title">
                Коробка фруктов с ананасом
            </div>
            <div class="item-btn">
                <button class="btn">
                    Заказать
                </button>
            </div>
        </div>
        <div class="item">
            <div class="item-img">
                <img src="4.jpg">
            </div>
            <div class="item-title">
                Коробка фруктов
            </div>
            <div class="item-btn">
                <button class="btn">
                    Заказать
                </button>
            </div>
        </div>
        <div class="item">
            <div class="item-img">
                <img src="5.jpg">
            </div>
            <div class="item-title">
                Коробка фруктов
            </div>
            <div class="item-btn">
                <button class="btn">
                    Заказать
                </button>
            </div>
        </div>
        <div class="item">
            <div class="item-img">
                <img src="6.jpg" width="300px" height="300px">
            </div>
            <div class="item-title">
                Тарелка фруктов
            </div>
            <div class="item-btn">
                <button class="btn">
                    Заказать
                </button>
            </div>
        </div>
        <div class="item">
            <div class="item-img">
                <img src="7.jpg">
            </div>
            <div class="item-title">
                Коробка фруктов подарочная
            </div>
            <div class="item-btn">
                <button class="btn">
                    Заказать
                </button>
            </div>
        </div>
        <div class="item">
            <div class="item-img">
                <img src="8.jpg">
            </div>
            <div class="item-title">
                Тарелка фруктов
            </div>
            <div class="item-btn">
                <button class="btn">
                    Заказать
                </button>
            </div>
        </div> -->
    </div>
    <div class="footer">
        Это меой первый проект. Изучение свойства position
        <br><br>
        &copy Цветов Григорий Владимирович
    </div>
</body>
</html>