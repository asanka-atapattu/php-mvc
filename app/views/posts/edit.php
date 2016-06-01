<?php if (isset($data) && !empty($data)): ?>
    <div class="col-xs-12">

        <div class="col-xs-12">
            <div class="col-xs-12 col-sm-2"><h4>id</h4></div>
            <div class="col-xs-12 col-sm-4"><h4>Title</h4></div>
            <div class="col-xs-12 col-sm-4"><h4>Author</h4></div>
            <div class="col-xs-12 col-sm-2"><h4>Action</h4></div>
        </div>
        <?php foreach ($data as $dt) : ?>
            <div class="col-xs-12">
                <div class="col-xs-12 col-sm-2"><?php echo $dt->post_id ?></div>
                <div class="col-xs-12 col-sm-4"><?php echo $dt->post_title ?></div>
                <div class="col-xs-12 col-sm-4"><?php echo $dt->post_author ?></div>
                <div class="col-xs-12 col-sm-2"><a
                        href="<?php echo Config::getRootUrl() ?>/posts/remove/<?php echo $dt->post_id; ?>">Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

