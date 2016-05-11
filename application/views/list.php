<script>
    category_name = '<?= $category->name; ?>';
</script>
<section role="=&quot;listDetails&quot;" class="listDetails">
    <div class="container todolists">
        <div class="row">
            <ol class="breadcrumb" style="margin-bottom: 5px;">
                <li><a href="<?= base_url(); ?>">الأولى</a></li>
                <li><a href="<?= base_url(); ?>lists/<?= $category->id; ?>/"><?= $category->name; ?></a></li>
            </ol>
            <div class="main_container">
            </div>
        </div>
    </div>
    <input type="hidden" id="category_id" value="<?= $category->id; ?>">
    <input type="hidden" id="child_category_id" value="0">
    <input type="hidden" id="category_name" value="<?= $category->name; ?>">
</section>




