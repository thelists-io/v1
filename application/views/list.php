<script>
category_name = '<?= $category->name; ?>';
</script>
 <!-- remove this 
<section class="header" role="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h1><?= $category->name; ?></h1>
            </div>
        </div>
    </div>
</section>
-->
<section class="listDetails" role="listDetails">
    <div class="container todolists">
        <div class="row">

            <!-- remove this -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="<?= base_url(); ?>">الأولى</a></li>
                    <li><a href="<?= base_url(); ?>lists/<?= $category->id; ?>/"><?= $category->name; ?></a></li>
                </ol>
            </div><!-- -->

            <div class="main_container">
            </div>
        </div>
    </div>

    <input type="hidden" id="category_id" value="<?= $category->id; ?>">
    <input type="hidden" id="child_category_id" value="0">
    <input type="hidden" id="category_name" value="<?= $category->name; ?>">

</section>
