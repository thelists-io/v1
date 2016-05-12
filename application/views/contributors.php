<section class="header" role="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h2>المساهمون</h2>
            </div>
        </div>
    </div>
</section>

<section class="contributors" role="contributors">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <?php foreach($contributors as $contributor):?>
                <div class="col-xs-6 col-md-2 item">
                    <img style="width: 128px; height: 128px;" alt="" src="<?=$contributor->avatar?>">
                    <h6 class="heading"><?=$contributor->name?></h6>
                    <a title="" href="https://twitter.com/<?=$contributor->twitter?>" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
