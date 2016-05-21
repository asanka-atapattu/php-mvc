<?php if (isset($data) && !empty($data)): ?>
    <div class="jumbotron <?php echo $data['type']?>" style="text-align: center;">
        <p><?php echo$data['msg']; ?></p>
    </div>
<?php endif; ?>

