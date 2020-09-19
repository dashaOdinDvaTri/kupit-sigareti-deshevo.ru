<?php require 'functions.php';
header('Content-type: text/html; charset=utf-8');
$ini = parse_ini_file('./config/config.ini');
if (!$ini) {
	echo '&#1054;&#1096;&#1080;&#1073;&#1082;&#1072; &#1074; &#1082;&#1086;&#1085;&#1092;&#1080;&#1075;&#1091;&#1088;&#1072;&#1094;&#1080;&#1086;&#1085;&#1085;&#1086;&#1084; &#1092;&#1072;&#1081;&#1083;&#1077;';
	die();
}
?><!DOCTYPE html><html>
    <head>
        <title><?php print $ini['title']; ?></title>
        <meta name=’description’ content=’Оптовая продажа сигарет различных торговых марок по низким ценам. У нас вы можете купить сигареты дёшево, позвонив по телефону +74952014931 или оставив заявку на сайте!’ >
        <meta name=’keywords’ content=’сигареты оптом, дешевые сигареты, купить сигареты дёшево, ротманс, родопи, опал, минск, корона, winston, marlboro, nz, оптовая, продажа, сигарет, низкие цены, разные тороговые марки’>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="user-scalable=yes, width=1100, initial-scale=1">
        <meta name="yandex-verification" content="648dc72e9e00731d" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500">
        <link href="css/sreset.css?v123" rel="stylesheet" type="text/css">
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link href="css/user_style.css?v123" rel="stylesheet" type="text/css"><?php if ($ini['head_code']) include($ini['head_code']); ?>
        
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        
        <script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        
        
        </head>
        
        <body data-metrika="<?php if ($ini['metrika_id']) print $ini['metrika_id']; ?>">
         <!-- 18лет --> 
         <!-- popup Start -->
<script type="text/javascript" src="js/pop_up.js"></script>
<link href="/popup/pop_up.css" type="text/css" rel="stylesheet" />
<div id="popup_tabak_overlay"></div>
<div id="popup_tabak_window" class="popup_tabak">

<a href="/" id="popup_tabak_yes" title="Мне 18 лет" alt="Мне 18 лет" class="yes">Мне уже есть 18 лет!!</a>
<a href="https://www.smeshariki.ru" id="popup_tabak_no-thanks" title="Мне нет 18 лет" alt="Мне нет 18 лет" class="no-thanks">Мне нет 18 лет((</a>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
	window.setTimeout('showPopup("tabak", false);', 3000);
});
</script>
<!-- popup End -->
         <!-- 18лет конец -->   
            
        <!-- VWO Container -->
        <div id="root_container">
            <div class="header">
                <div class="inner">
					<div id="logo" contenteditable="true"><img alt="купить сигареты дёшево" src="i/logo.png"></div>
                    <span data-offset="-120" data-href=".form-wrapper" class="scroll-link green-btn top-btn">ОТПРАВИТЬ ЗАЯВКУ</span>
                    <span class="open-modal call-req" data-modal="#call">Заказать звонок</span>
					<?php if ($ini['phone']) { ?><span class="phone"><?php print $ini['phone']; ?></span><?php } ?></div>
            </div>
			<div class="sl-wr">
				<div class="inner">
					
					<div class="b-slider">
						<ul id="slider"><?php $imgs = scandir('./slider');
									foreach ($imgs as $img){
										$ext = explode('.',$img);
										if ($img && in_array(strtolower(end($ext)),array('jpg','png','jpeg','gif'))){
											echo chr(60).'li'.chr(62).chr(60).'img src="slider/'.$img.'" /'.chr(62).chr(60).'/li'.chr(62);
										}
									
									}
								?></ul></div>
				</div>
			</div>
            <div class="promo clearfix">
                <div class="inner clearfix">
                    <div class="title" contenteditable="true" id="id-block1"><h1>Купить сигареты дёшево? Легко!</h1></div>
                    <div class="post-title" contenteditable="true" id="id-block2"><h2>Посмотрите прайс-лист и убедитесь в том, что купить сигареты оптом по самой низкой цене очень просто!</h2></div>
                    <div class="product-block">
                        <div contenteditable="true" id="id-block3"><ul class="clearfix">
                            
                            <li><img title="Купить сигареты Dover дёшево" alt="сигареты довер" src="ckfinder/userfiles/images/sigareti_dover_export.png" style="width: 190px; height: 164px;">
                            <div class="text">
							<p class="tit"><h3>Dover</h3></p>

							<p class="tit_2">Standart, slim</p>
							<p class="tit_3"> <span> Black, White  </span></p>
							</div>
							</li>
							
							<li><img title="Купить сигареты Faraon дёшево" alt="сигареты фараон" src="ckfinder/userfiles/images/sigareti_faraon.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Faraon</h3></p>

							<p class="tit_2">Standart</p>

							<p class="tit_3"> <span>Yellow </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Корона дёшево" alt="сигареты корона 24" src="ckfinder/userfiles/images/sigareti_korona_24.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Корона</h3></p>

							<p class="tit_2">Standart, slim</p>

							<p class="tit_3"> <span>Yellow, Blue, Grey </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Кресты дёшево" alt="сигареты кресты" src="ckfinder/userfiles/images/sigareti_kresti.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Кресты</h3></p>

							<p class="tit_2">Standard</p>

							<p class="tit_3"> <span> Red, Blue </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Marlboro дёшево" alt="сигареты мальборо" src="ckfinder/userfiles/images/sigareti_marlboro.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Marlboro</h3></p>

							<p class="tit_2">Standart,compact</p>

							<p class="tit_3"> <span> Red, White, Click </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты NZ дёшево" alt="сигареты нз" src="ckfinder/userfiles/images/sigareti_nz_gold_compact.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>NZ</h3></p>

							<p class="tit_2">Standart, slim, compact.</p>

							<p class="tit_3"> <span>Black, White, Gold </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Престиж дёшево" alt="сигареты престиж" src="ckfinder/userfiles/images/sigareti_prestige.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Престиж</h3></p>

							<p class="tit_2">Standart</p>

							<p class="tit_3"> <span> Red, Blue </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Прима дёшево" alt="сигареты прима" src="ckfinder/userfiles/images/sigareti_prima_dona.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Прима Дона</h3></p>

							<p class="tit_2">Standart</p>

							<p class="tit_3"> <span> Без фильтра </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Родопи дёшево" alt="сигареты родопи" src="ckfinder/userfiles/images/sigareti_rodopi.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Родопи</h3></p>

							<p class="tit_2">Standart</p>

							<p class="tit_3"> <span> Grey </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Rothmans дёшево" alt="сигартеы ротманс" src="ckfinder/userfiles/images/sigareti_rothmans_demi.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Rothmans</h3></p>

							<p class="tit_2">Standart, slim, compact</p>

							<p class="tit_3"> <span> Red, blue, Demi </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Стюардесса дёшево" alt="сигареты стюардесса" src="ckfinder/userfiles/images/sigareti_stuardess.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Стюардесса</h3></p>

							<p class="tit_2">Standart</p>

							<p class="tit_3"> <span> Blue </span></p>
							</div>
							</li>
							<li><img title="Купить сигареты Тройка дёшево" alt="сигратеы тройка" src="ckfinder/userfiles/images/sigareti_troyka.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Тройка</h3></p>

							<p class="tit_2">Standart</p>

							<p class="tit_3"> <span> Black, Brown </span></p>
							</div>
							</li>
								<li><img title="Купить сигареты Winston дёшево" alt="сигареты винстон" src="ckfinder/userfiles/images/sigareti_winston.png" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit"><h3>Winston</h3></p>

							<p class="tit_2">Standart, slim, compact.</p>

							<p class="tit_3"> <span> Red, blue </span></p>
							</div>
							</li>
							
						</ul></div>
                    </div>
					 <div class="timer">
                            <div class="left">
                                <div class="top" contenteditable="true" id="id-block4"><span>Получите </span><br>
персональное предложение!</div>
                                <div class="bottom" contenteditable="true" id="id-block5">Отправьте заявку на получение<br>
прайс-листа на сигареты!</div>
                            </div>
                               
                            
                        </div>
                    <div class="right b-form">
                        <div class="form-wrapper">
                            <form class="fck" action="form/form.php" method="POST"><input type="hidden" name="type" value="catalog">
                            <div class="form-title" contenteditable="true" id="id-block6">Получить прайс</div>
                                <p contenteditable="true" id="id-block7">с актульным наличием сигарет<br>
                                <span>по оптовым ценам</span></p>
                                <div>
                                    <input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name"></div>
                                <div>
                                    <input class="<?php if ($ini['phone_required']) print 'required'; ?> phone" placeholder="Ваш телефон" type="text" name="phone"></div>
                                <div>
                                    <input data-valid="email" class="<?php if ($ini['email_required']) print 'required'; ?> email" placeholder="Ваша электропочта" type="text" name="email"></div>

                                <div>
                                    <input class="green-btn" type="submit" name="sub" value="ОТПРАВИТЬ"></div>
                                <?php if ($ini['catalog_file']) { ?><p class="bot" contenteditable="true" id="id-block8">Прайс придет на почту сразу</p><?php } ?></form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ags">
                <div class="inner clearfix" contenteditable="true" id="id-block9"><span class="number">>5</span>
<p>лет <br>на рынке</p>
<span class="number">>5</span>

<p>отгрузок<br>
в день</p>
<span class="number">>500</span>

<p class="end">постоянных <br>
 покупателей</p>
</div>
            </div>
            <div class="well">
                <div class="inner">
                    <div class="title" contenteditable="true" id="id-block10">Преимущества</div>
                    <div contenteditable="true" id="id-block11">
                        <ul class="clearfix">
                            
    <li><img alt="" src="i/well1.png"><p class="tit">Качество.</p>
	<p>Только проверенные и оригинальные сигареты, которые пользуются популярностью уже многие годы!</p>
	</li>
	
	<li><img alt="" src="i/well2.png"><p class="tit">Надёжность.</p>
	<p>У покупателей нет сомнений в исполнении договоренностей!</p>
	</li>
	
	<li><img alt="" src="i/well3.png"><p class="tit">Комфорт.</p>
	<p>Условия покупки сигарет будут для вас приятны и обеспечат вам уют. </p>
	</li>
	
	<li><img alt="" src="i/well4.png"><p class="tit">Забота.</p>
	<p>Мгновенный отклик, качественная консультация, принятие решений в короткие сроки - это всё забота о вашем времени!</p>
	</li>
	
	<li><img alt="" src="i/well5.png"><p class="tit">Безопасность.</p>
	<p>У третьих лиц нет доступа к личной информации покупателей!</p>
	</li>
	
</ul></div>
				</div>
            </div>
            <div class="scheme">
                <div class="inner">
                    <div class="title" contenteditable="true" id="id-block12">Схема работы</div>
                    <div contenteditable="true" id="id-block13"><ul class="clearfix">
    <li class="width134">Вы присылаете свои контакты, с вами связывается менеджер</li>
	<li class="sep"> </li>
	<li class="width142">Согласовываете наименования сигарет, объём заказа и способ оплаты</li>
	<li class="sep"> </li>
	<li class="width160">В зависимости от объёма, в качестве обеспечения, вы вносите предоплату 2-5%</li>
	<li class="sep"> </li>
	<li class="width197">Груз доставляется <br>на транспортную <br>компанию и вам <br>высылается накладная</li>
	<li class="sep"> </li>
	<li class="end width178">Вы перечисляете остаток оплаты 95-98% и ожидаете прибытия сигарет</li>
</ul></div>
				</div>
            </div>
			
			
			<div class="hor-form">
				<br><br><div class="inner">
					 <form action="form/form.php" method="POST"><input type="hidden" name="type" value="catalog">
					 <div class="title" contenteditable="true" id="id-block14">Получить прайс-лист на сигареты</div>
                        <p contenteditable="true" id="id-block15">С актуальным наличием <span>и оптовыми ценами!</span></p>
                        <div>
                            <input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name">
                            <input class="<?php if ($ini['phone_required']) print 'required'; ?> phone" placeholder="Ваш телефон" type="text" name="phone">
                            <input data-valid="email" class="<?php if ($ini['email_required']) print 'required'; ?> email" placeholder="Ваша электропочта" type="text" name="email">
                            <input class="green-btn" type="submit" name="sub" value="ОТПРАВИТЬ"></div>
                        
						<?php if ($ini['catalog_file']) { ?><div class="note" contenteditable="true" id="id-block16">
                            Прайс придет на почту сразу
                        </div><?php } ?></form>
				</div>
			</div>
			
			
			<div class="b-reviews">
				<div class="inner">
					 <div class="title" contenteditable="true" id="id-block18">Отзывы</div>
					
					<!---->
					
					<div class="rev-wr" contenteditable="true" id="id-block19">
					    <div class="rev-info pos-rev">
<p class="rev-cont">Занимаюсь сигаретами уже больше года. До сих пор тарился на рынке в Москве, но как-то знакомый посоветовал этот сайт. 
Сразу скажу -  «солидная контора». После оформления заказа оперативно перезвонил менеджер, который, что приятно, в теме того, что продает.
Сделел предоплату, заказал доставку. Привезли все вовремя, как и договаривались. В общем, доволен!</p>

<p class="b-data">11.03.2013</p>
</div>

<div class="per-img pos-rev-img"><img alt="" src="i/per1.png"></div>
</div>

<!---->
					<div class="rev-wr" contenteditable="true" id="id-block20"><div class="rev-info neg-rev">
<p class="rev-cont">Всё круто - и связь, и информирование о ценах, и доставка, и оперативность, и даже возврат средств в случае сбоя поставки (да, было и такое). 
Но вот один минус всёже есть - предоплата. На какую бы сумму не заказывал, всегда просят предоплату. 
Видети ли, принцип торговли у них такой.</p>

<p class="b-data">24.12.2016</p>
</div>

<div class="per-img pos-neg-img"><img alt="" src="i/per2.png"></div>
</div>

<!---->

<div class="rev-wr" contenteditable="true" id="id-block19">
					    <div class="rev-info pos-rev">
<p class="rev-cont">Первую партию сигарет купил в начале 14го года. С тех пор выбрал не на одну сотню килорублей. Пацаны не пытаются обмануть. Цены на сигареты называют сразу, и ты сразу же можешь рассчитывать, как, куда и что пойдет, и сколько ты сам с этого поимеешь. 
Цены всегда в адеквате, лишнего не накручивают. У меня несколько поставщиков оптовых, но эти всегда на первом месте!</p>

<p class="b-data">01.02.2017</p>
</div>

<div class="per-img pos-rev-img"><img alt="" src="i/per3.png"></div>
</div>



				</div>
			</div>
            <div class="contact">
                <div class="inner">
                    <div class="title" contenteditable="true" id="id-block17">Контактная информация</div>
					<div class="cols clearfix">
						<div id="map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8a837f0adf55ea576d58c5e97546626b32bd190a76292f6a3e559296bb4a655b&amp;width=620&amp;height=385&amp;lang=ru_RU&amp;scroll=true"></script></div>
						
						
						<div class="adres">
							<?php if ($ini['address']) { ?>
							<div>
									<strong>Адрес:</strong><br><?php print $ini['address']; ?></div>
							<?php } ?><?php if ($ini['email']) { ?>
							<div class="ad_email">
									<strong>Электропочта:</strong><br><?php print chr(60).'a href="mailto:'.$ini['email'].'"'.chr(62).$ini['email'].chr(60).'/a'.chr(62);?></div>
							<?php } ?><?php if ($ini['phone']) { ?>
							
							<div class="phone">
									<strong>Телефон:</strong><br><?php print $ini['phone']; ?></div>
							<div class="telega">
									<strong>Телеграм:</strong><br><?php print $ini['telega']; ?></div>
									
							<?php } ?></div>
							
					</div>
                </div>
            </div>
            <a href="https://webmaster.yandex.ru/sqi?host=kupit-sigareti-deshevo.ru">
                            <img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?kupit-sigareti-deshevo.ru&theme=light&lang=ru"/></a>
                            <!--LiveInternet counter--><script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t18.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
</script><!--/LiveInternet-->
            <div class="footer">
                <div>
                    <div class="inner clearfix">
                        
                        <span class="left">© <?php print $ini['company_name'] . ', ' . date('Y'); ?></span>
                        <span class="right">Лэндинг сделан <a target="_blank" href="http://ya.ru/">Руками мастеров</a>
                            
                        </span>
                    </div>
                </div>
            </div>
            
            
            <div class="modals">			
                <div id="call">
                    <span class="close"></span>
                    <form action="form/form.php" method="POST"><input type="hidden" name="type" value="callback"><input type="hidden" name="call" value="1">
                    <div class="title">Мы вам перезвоним!</div>
                        <div>
                            <input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name"></div>
                        <div>
                            <input class="required phone" placeholder="Ваш телефон" type="text" name="phone"></div>
                        <div>
                            <input class="green-btn sub_btn" type="submit" name="sub" value="ОТПРАВИТЬ"></div>
                    </form>
                </div>
                <div id="success">
                    <div>
                        <span class="close"></span>
                        <div class="title">Спасибо за проявленный интерес!</div>
                        <p>
                            Ваша заявка принята!
                        </p>
                        <span class="close-text">Закрыть</span>
                    </div>
                </div>
            </div>
            
            
            
            <div id="overlay"></div>
        </div>
		
		<script type="text/javascript" src="js/jquery-1.10.2-min.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="js/jquery.plugins.js"></script>
		<script type="text/javascript" src="js/common.js?v2"></script>
		<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/pop_up.js"></script>
		
		<?php if ($ini['body_code']) include($ini['body_code']); ?><?php include 'functions_html.php'; ?></body></html>