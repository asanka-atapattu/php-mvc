<div class="col-xs-12">
    <h1 style="text-align: center">Blog</h1>

    <?php if (isset($data) && !empty($data)): ?>
        <?php foreach ($data as $item):?>
        <div class="col-xs-12">
            <div class="col-xs-12"><h2><?php echo $item->post_title; ?></h2></div>
            <div class="col-xs-12"><h4><?php echo $item->post_date; ?></h4></div>
            <div class="col-xs-12"><?php echo $item->post_content; ?></div>
            <div class="col-xs-12"><h4><?php echo $item->post_author; ?></h4></div>
            <div class="col-xs-12"><hr/></div>
        </div>
            <?php endforeach; ?>
    <?php endif; ?>
</div>
