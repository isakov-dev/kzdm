<?php
$IBLOCK_ID = 1;
$categories = CIBlockSection::GetList(
    [
        'left_margin' => 'asc',
    ],
    [
        'IBLOCK_ID' => 1,
        'ACTIVE' => 'Y',
        'DEPTH_LEVEL' => 1,
    ],
    null,
    [
        'NAME',
        'SECTION_PAGE_URL',
        'PICTURE',
    ],
    [
        'nTopCount' => '5',
    ]
);

$catalog_ib = CIBlockSection::GetByID($IBLOCK_ID);
$catalog_res = $catalog_ib->GetNext();
?>

<div class="section section_animated wow">
    <div class="wrapper wrapper_default">
        <div class="home-categories">
            <div class="row">
                <?php while ($res = $categories->GetNext()) { ?>
                    <div class="col col--xs-6 col--lg-4">
                        <a href="<?= $res["SECTION_PAGE_URL"]; ?>" class="home-categories__el">
                            <img src="<?= CFile::GetPath($res["PICTURE"]); ?>" alt="<?= $res["NAME"]; ?>">
                            <span class="home-categories__el-name"><?= $res["NAME"]; ?></span>
                        </a>
                    </div>
                <?php } ?>
                <div class="col col--xs-6 col--lg-4">
                    <a href="<?= $catalog_res['LIST_PAGE_URL']; ?>" class="home-categories__el">
                        <img src="<?= SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/main_all_categories.png'; ?>" alt="Все категории">
                        <span class="home-categories__el-name">
                            Все категории
                            <svg class="arrow-r-long-ico iconed__ico">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/icons.svg#arrow-r-long'; ?>"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
