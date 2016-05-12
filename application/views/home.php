<section class="header" role="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h1>تصفح قوائمنا</h1>
            </div>
        </div>
    </div>
</section>

<section class="lists" role="lists">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="cd-main-content">
                    <div class="cd-tab-filter-wrapper">
                        <div class="cd-tab-filter">
                            <ul class="cd-filters pull-left">

                                <li class="placeholder">
                                    <a data-type="all" href="#">الكل</a>
                                </li>

                                <li class="filter"><a class="selected" href="#" data-type="all">الكل</a></li>

                                <?php foreach($all_main_categories as $m_category):?>
                                <li class="filter" data-filter=".tag-<?=$m_category->id;?>">
                                    <a href="#" data-type="tag-<?=$m_category->id;?>" title="<?=$m_category->name;?>">
                                        <?=$m_category->name;?>
                                    </a>
                                </li>
                                <?php endforeach;?>

                            </ul>
                        </div>
                    </div>
                    <div class="cd-gallery">
                        <ul>
                            <?php foreach($all_sub_categories as $s_category):?>

                            <li class="mix tag-<?=$s_category->parent_id;?>">
                                <div class="list">
                                    <a href="<?=base_url();?>lists/<?=$s_category->id;?>/" title="<?=$s_category->name?>">
                                        <i class="fa fa-<?=$s_category->class;?>"></i> <?=$s_category->name?>
                                    </a>
                                </div>
                            </li>

                            <?php endforeach;?>

                            <li class="gap hidden-xs"></li>
                            <li class="gap hidden-xs"></li>
                            <li class="gap hidden-xs"></li>
                        </ul>

                        <div class="cd-fail-message">لم يتم إيجاد أي قوائم.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>