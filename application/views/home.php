<section class="lists" role="lists">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="cd-main-content">
                    <div class="cd-tab-filter-wrapper">
                        <div class="cd-tab-filter">
                            <ul class="cd-filters pull-left">
                                <!-- For Mobile Device Only -->
                                <li class="placeholder">
                                    <a data-type="all" href="#">All</a>
                                </li>
                                <!-- Filters goes here -->
                                <li class="filter"><a class="selected" href="#" data-type="all">All</a></li>
                                <?php foreach($all_main_categories as $m_category):?>
                                <li class="filter" data-filter=".tag-<?=$m_category->id;?>">
                                    <a href="#" data-type="tag-<?=$m_category->id;?>"><?=$m_category->name;?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                            <div class="pull-right hide">
                                <li class="hidden-xs">
                                    <a href="#" class="" title="Start a list">
                                        <i class='flaticon-add'></i> new list
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="cd-gallery">
                        <ul>
                            <?php foreach($all_sub_categories as $s_category):?>
                            <!-- One List Item -->
                            <li class="mix tag-<?=$s_category->parent_id;?>">
                                <div class="list">
                                    <a href="<?=base_url();?>lists/<?=$s_category->id;?>/" title="Sample List"><i class="fa fa-<?=$s_category->class;?>"></i> <?=$s_category->name?></a>
                                </div>
                            </li>
                            <?php endforeach;?>
                            <!-- end grid -->
                            <li class="gap hidden-xs"></li>
                            <li class="gap hidden-xs"></li>
                            <li class="gap hidden-xs"></li>
                        </ul>
                        <!-- no list -->
                        <div class="cd-fail-message">No List found</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq" role="faq">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h3>Capture what’s on your mind</h3>
                <p>
                    This was made mobile-first, so although it's not in the App Store it supports touch gestures like swiping, dragging and tapping, Keep works on your phone, tablet and computer. Everything you add to Keep syncs across your devices so your important stuff is always with you.
                </p>
                <h3 class="helper-mt">When and where you need it</h3>
                <p>
                    This was made mobile-first, so although it's not in the App Store it supports touch gestures like swiping, dragging and tapping, Keep works on your phone, tablet and computer. Everything you add to Keep syncs across your devices so your important stuff is always with you.
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 helper-xs-mt2">
                <h3>Find what you need, fast</h3>
                <p>
                    This was made mobile-first, so although it's not in the App Store it supports touch gestures like swiping, dragging and tapping,Keep works on your phone, tablet and computer. Everything you add to Keep syncs across your devices so your important stuff is always with you.
                </p>
                <h3 class="helper-mt">Always within reach</h3>
                <p>
                    This was made mobile-first, so although it's not in the App Store it supports touch gestures like swiping, dragging and tapping, Keep works on your phone, tablet and computer. Everything you add to Keep syncs across your devices so your important stuff is always with you.
                </p>
            </div>
        </div>
    </div>
</section>