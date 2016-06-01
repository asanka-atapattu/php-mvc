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
    <div class="login-page">
        <div class="form">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                <!-- Identify your business so that you can collect the payments. -->
                <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

                <!-- Specify a Buy Now button. -->
                <input type="hidden" name="cmd" value="_xclick">

                <!-- Specify details about the item that buyers will purchase. -->
                <input type="hidden" name="item_name" value="Hot Sauce-12oz Bottle">
                <input type="hidden" name="amount" value="5.95">
                <input type="hidden" name="currency_code" value="USD">

                <!-- Display the payment button. -->
                <input type="image" name="submit" border="0"
                       src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" style="width: 150px;"
                       alt="PayPal - The safer, easier way to pay online">
                <img alt="" border="0" width="1" height="1"
                     src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                <input type="hidden" name="return" value="http://abc.pqr/shop/paypal_sucess.php" />
                <input type="hidden" name="cancel_return" value="http://abc.pqr/shop/paypal_cancel.php" />
            </form>
        </div>
    </div>
</div>