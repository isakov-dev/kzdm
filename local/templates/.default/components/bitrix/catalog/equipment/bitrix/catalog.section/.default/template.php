<?php
$this->setFrameMode(true);
?>
<?php
    $fSections = CIBlockSection::GetList(
        false,
        Array("IBLOCK_ID" => 19, "ID" => $arResult ['ID'], "ACTIVE"=>"Y", "GLOBAL_ACTIVE"=>"Y", "SECTION_ACTIVE" => "Y"),
        false,
        Array("UF_TEXT_AFTER_H1"),
        false
    );

    $flSections = $fSections->Fetch();

    if ($flSections['UF_TEXT_AFTER_H1'])
        $single__desc = $flSections['UF_TEXT_AFTER_H1'];
?>

<?php $this->SetViewTarget('page_description'); ?>
<div class="single__desc">
    <p><?= $single__desc; ?></p>
</div>
<?php $this->EndViewTarget(); ?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default  section_animated wow">
        <div class="catalog">
            <div class="wrapper wrapper_default">
                <div class="cars">
                    <div class="row row_middle">
                        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                            <div class="col col--lg-4 col--sm-6">
                                <?php if (SITE_ID != 'en'): ?>
                                    <div class="prod-tile prod-tile_offset">
                                        <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                            <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="prod-tile__img">
                                                <img class="prod-tile__pic" src="<?= resizeImage($value['PREVIEW_PICTURE'], 568, 320); ?>" alt="<?= $value['NAME']; ?>">
                                            </a>
                                        <?php endif; ?>
                                        <div class="prod-tile__desc match-height">
                                            <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="prod-tile__title title_demi title_block h4"><?= $value['NAME']; ?></a>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="prod-tile prod-tile_offset">
                                        <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                            <div class="prod-tile__img">
                                                <img class="prod-tile__pic" src="<?= resizeImage($value['PREVIEW_PICTURE'], 568, 320); ?>" alt="<?= $value['NAME']; ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="prod-tile__desc match-height">
                                            <div class="prod-tile__title title_demi title_block h4"><?= $value['NAME']; ?></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?= $arResult['NAV_STRING']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php
    if($arResult['ID'] == 0) { ?>
        <div class="section section_animated wow">
            <div class="wrapper wrapper_default">
                <div class="paragraph paragraph_middle">
                    <h2> Application of attachments for special equipment </h2>

                    <p> Public utility vehicles are machines that cost a lot of money, but you can't refuse them. They are designed to keep the area clean - to take out garbage, clean sidewalks and roads, remove snow in the cold season. These are just a few of the tasks with which this technique successfully copes. Such machines cost millions of rubles, and if you buy a separate type of equipment to complete each task, it won't take long to go broke. Is there a way to reduce the required costs? </p>

                    <p> So that you do not have to keep a whole fleet of vehicles to maintain the area in good condition, we recommend making a choice in favor of attachments for communal machines. Attached equipment is much cheaper, but it can be installed on different types of equipment, which makes it versatile. Buy the machine and utility attachments you need, which will significantly expand its capabilities. </p>

                    <h2> About Attachment Models </h2>

                    <p> Having visited the Kurgandormash website, you will see that all attachments for special equipment are divided into three categories - for KDM, for VPUM and for a mini-loader. Here's what the company can offer you today: </p>
                    <ul style="padding-left: 30px">
                        <li> brushes - designed to clean the area from all kinds of dirt; </li>
                        <li> dumps - they perform landscaping and earthworks and are used to clear the area from snow; </li>
                        <li> buckets are, perhaps, the main type of attachment, and it is used to move loads and feed them to the desired height; </li>
                        <li> cargo forks - used for lifting loads, which makes them the best tool for loading and unloading trucks; </li>
                        <li> grader knives are utility attachments well suited for construction work. </li>
                    </ul>

                    <p> Whichever add-on for municipal vehicles you decide to purchase, you can easily find it in the range of Kurgandormash. </p>

                    <h2> Advantages of Kurgandormash </h2>

                    <p> Of course, this is not the only plant that produces attachments for utility vehicles. But why should you choose his products? Let's figure it out now. </p>
                    <p> First, for its quality. The company has been operating since 1941, and during its existence it continued to improve production technologies and develop new models. Kurgandormash products serve for many years without any complaints, and a large number of buyers have already checked this. </p>
                    <p> Secondly, for customer relationships. Kurgandormash understands that the purchase of expensive equipment is a serious matter, so it tries to make the acquisition process comfortable for you. The company's specialists are ready to deliver the purchase to the buyer's residence address, teach how to use it, and, if necessary, re-equip the car. </p>
                    <p> And these are just a few of the company's advantages compared to competitors! </p>

                    <h2> Frequently Asked Questions </h2>

                    <p> Customers often ask us how the purchase process will go, and we are ready to tell you about it right now. </p>
                    <ul style="padding-left: 30px">
                        <li>
                            Do I need to go for attachments for special equipment myself? <br>
                            No - we will deliver the goods you need to the specified address in a convenient way - by trawl, on our own, by rail or by water transport.
                        </li>
                        <li> What to do if utility vehicle attachments break down? <br>
                            You can buy the necessary spare parts for its repair from us, because they are produced at the Kurgandormash plant.
                        </li>
                        <li>
                            How to choose attachments? <br>
                            Focus on what tasks it should cope with. And don't forget that it must be suitable for your technique.
                        </li>
                        <li>
                            Do you provide a product warranty? <br>
                            Yes, we are responsible for the products, because we are confident in their quality and long service life.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
<?php } else { ?>
<?php if (!empty($arResult['DESCRIPTION'])): ?>
    <div class="wrapper wrapper_default">
        <?= $arResult['DESCRIPTION']; ?>
    </div>
<?php endif; ?>
<?php } ?>
