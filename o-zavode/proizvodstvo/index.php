<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Производство");
$APPLICATION->SetPageProperty('title', 'Производство');
?><div class="single">
	<div class="single-header single-header_gray">
		<div class="single-header__content">
			<div class="wrapper wrapper_default">
				<h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
				<div class="single__desc">
					<p>
 <br>
					</p>
				</div>
			</div>
		</div>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"inner",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>
	<div class="section section_default section_animated wow">
		<div class="wrapper wrapper_default">
			<div class="row">
				<div class="col col--xl-8 col--xl-offset-2">
					<div class="paragraph">
						<p>
							Организация производства является залогом эффективной работы предприятия, так как она создает возможности для высокой производительности трудовых коллективов, выпуска качественного продукта, оптимального использования ресурсов предприятия, а также развития организационной культуры и личности в процессе работы.
						</p>
						<h3 class="h3 title title_middle-offset">На предприятии существует ряд цехов, каждый из которых имеет свою специфику производства.</h3>
						<div class="box box_offset">
							<h4 class="h4 title title_middle-offset">Заготовительное производство:</h4>
							<ul>
								<li>Заготовительное производство занимает первое и самое важное место в технологической цепочке. Здесь мы производим детали для дальнейшей сварки, механической обработки или сразу сборки готовой продукции. </li>
								<li>Непрерывный цикл инвестиции, направленный в использование самого современного оборудования по резке, рубке, гибке и прочей обработке металла, позволяет нам решать вопросы повышения коэффициента использования материалов, точности изделий, уменьшения трудоемкости, энергоемкости, металлоемкости и, как следствие, повышение качества и эффективности производства. </li>
							</ul>
							<div class="row">
								<div class="col col--xs-12 col--md-4">
									<img src="/upload/medialibrary/a7e/_-_-2.jpg" alt="">
								</div>
								<div class="col col--xs-12 col--md-4">
									<img src="/upload/medialibrary/8a9/_-_-3.JPG" alt="">
								</div>
								<div class="col col--xs-12 col--md-4">
									<img src="/upload/medialibrary/c54/_-_-1.JPG" alt="">
								</div>
							</div>
						</div>
						<div class="box box_offset">
							<h4 class="h4 title title_middle-offset">Цех механической обработки деталей:</h4>
							<ul>
								<li>Используя высокопроизводительные станки с ЧПУ, цех механической обработки производит самые сложные, высокоточные и ответственные детали и узлы для наших машин. На этом участке мы осуществляем контроль качества 100% всей производимой продукции. </li>
								<li>В цеху механической обработки производятся такие операции, как: токарные, фрезерные, мелкие сварочные работы, расточные и шлифовальные операции. </li>
							</ul>
							<div class="row">
								<div class="col col--xs-12 col--md-3">
									<img src="/upload/medialibrary/6ad/_.JPG" alt="">
								</div>
								<div class="col col--xs-12 col--md-3">
									<img src="/upload/medialibrary/8a5/_-_-_.JPG" alt="">
								</div>
								<div class="col col--xs-12 col--md-3">
									<img src="/upload/medialibrary/694/_-_-2.JPG" alt="">
								</div>
								<div class="col col--xs-12 col--md-3">
									<img src="/upload/medialibrary/f96/_-_-_.JPG" alt="">
								</div>
							</div>
						</div>
						<div class="box box_offset">
							<h4 class="h4 title title_middle-offset">Участок термообработки:</h4>
							<ul>
								<li>Для обеспечения высоких заявленных требований по надежности и качеству наших машин самые ответственные, силовые и ресурсные детали, такие как: валы, шестерни, звездочки и т.д., мы закаляем в специальных термических или индукционных печах. </li>
							</ul>
						</div>
						<div class="box box_offset">
							<h4 class="h4 title title_middle-offset">Сварочный цех:</h4>
							<ul>
								<li>В сварочном цеху мы производим сварку бункеров, рам, бочек, кабин и т.д. Те изделия, которые имеют большую вариативность исполнения производятся вручную или в полуавтоматическом режиме при помощи ручных полуавтоматов или сварочных тракторов. Высокоточные однотипные изделия мы производим в автоматическом режиме при помощи сварочного робота и это позволяет нам существенно повысить качество нашей продукции и на несколько шагов быть впереди наших конкурентов! </li>
							</ul>
							<div class="row">
								<div class="col col--xs-12 col--md-12">
									<img src="/upload/medialibrary/dc6/_-_-4-_-_.JPG" alt="">
								</div>
							</div>
						</div>
						<div class="box box_offset">
							<h4 class="h4 title title_middle-offset">Участок дробеструйной обработки и окраски изделий:</h4>
							<ul>
								<li>Мы прекрасно понимаем, что сегодня качеству и эстетике техники уделяется особое внимание, что, безусловно, должно отражаться на иных подходах к ее производству. Наши машины эксплуатируются как на крайнем севере, так и в южных широтах нашей страны и когда условия эксплуатации наших машин особо жесткие или заказчик предъявляет повышенные антикоррозийные требования, то с помощью автоматизированной 18 метровой камеры дробеструйной обработки и использовании специальных полиэпокситных красок мы добиваемся гарантии в 10 лет от сквозной коррозии металла! </li>
							</ul>
							<div class="row">
								<div class="col col--xs-12 col--md-12">
									<img src="/upload/medialibrary/593/_-_.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="box box_offset">
							<h4 class="h4 title title_middle-offset">Сборочное производство:</h4>
							<ul>
								<li>Сюда стекаются детали и узлы со всего завода, двигатели, турбины, мосты и прочие комплектующие поступают со складов. Именно здесь, благодаря высококлассным сборщикам, гидравлистам, электрикам, машина делает свой первый запуск, обретает свой вид, проезжает первые метры! Это самый ответственный, сложный и требующий особого контроля и внимания участок, поэтому за каждой без исключения машиной следит внутренний контроль. </li>
							</ul>
							<div class="row">
								<div class="col col--xs-12 col--md-6">
									<img src="/upload/medialibrary/764/_-_-_.JPG" alt="">
								</div>
								<div class="col col--xs-12 col--md-6">
									<img src="/upload/medialibrary/7cd/_-_.JPG" alt="">
								</div>
							</div>
						</div>
						<div class="box box_offset">
							<h4 class="h4 title title_middle-offset">Испытание готовой продукции:</h4>
							<ul>
								<li>После сборки спецтехника проходит обязательные пробеговые и стендовые испытания. Для этого на заводе разработана специальная программа, исключающая выпуск дефектной продукции. </li>
							</ul>
							<div class="row">
								<div class="col col--xs-12 col--md-12">
									<img src="/upload/medialibrary/d37/_.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br><?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>