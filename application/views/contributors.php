<!-- Secondary Header -->
<section class="header" role="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center helper-xs-mt2">
                <h2>المساهمون</h2>
            </div>
        </div>
    </div>
</section>
<section role="contributors" class="contributors">
    <div class="container">
        <div class="row row-primary">
            <div class="col-md-12">
                <p>نخبة مختارة من أفضل المطورين والمصممين .. الخ</p>
            </div>
        </div>

        <?php for($i=0;$i<3;$i++) { ?>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="col-xs-6 col-md-3 item">
                    <img alt="" src="<?php echo base_url();?>assets/img/team/01.jpg">
                    <h6 class="heading">طلال الاسمري</h6>
                    <a title="" href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
                <div class="col-xs-6 col-md-3 item">
                    <img alt="" src="<?php echo base_url();?>assets/img/team/02.jpg">
                    <h6 class="heading">يزيد السويلم</h6>
                    <a title="" href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
                <div class="col-xs-6 col-md-3 item">
                    <img alt="" src="<?php echo base_url();?>assets/img/team/03.jpg">
                    <h6 class="heading">محمد النابلسي</h6>
                    <a title="" href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
                <div class="col-xs-6 col-md-3 item">
                    <img alt="" src="<?php echo base_url();?>assets/img/team/04.jpg">
                    <h6 class="heading">راشد الماجد</h6>
                    <a title="" href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
<?php } ?>

    </div>
    </div>
</section>
