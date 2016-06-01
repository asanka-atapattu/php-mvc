<?php if (isset($data) && !empty($data)): ?>
    <div class="col-xs-12">
        <div class="alert alert-danger" role="alert">
            <ul style="list-style: none; padding: 0px;">
                <?php foreach ($data as $dt) : ?>
                    <?php foreach ($dt as $k=>$msgs) : ?>
                        <li>
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo $k; ?>:</span>
                            <?php echo $msgs; ?></li>

                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<div class="col-xs-12">
    <div class="col-xs-12">
        <div class="login-page">
            <div class="form">
                <form id="post-register-form" class="login-form" role="form" action="<?php Config::getRootUrl()?>/posts/addnewpost" method="post" data-toggle="validator">
                    <input type="text" id="post_author" name="post_author" placeholder="Author"/>
                    <input type="text" id="datepicker" name="post_date" placeholder="Date"/>
                    <input type="text" id="post_title" name="post_title" placeholder="Title"/>
                    <textarea id="message" class="input" name="post_content" rows="7" placeholder="Content" cols="30"></textarea><br />
                    <button>Add Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>