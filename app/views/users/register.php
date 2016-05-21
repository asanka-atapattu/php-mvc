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
            <form id="register-form" class="login-form" role="form" action="<?php Config::getRootUrl()?>/users/adduser" method="post" data-toggle="validator">
                <input type="text" id="fname" class="required" name="fname" placeholder="First Name"/>
                <input type="text" id="lname" name="lname" placeholder="Lase Name"/>
                <input type="email" id="email" name="email" placeholder="Email"/>
                <input type="text" id="username" name="username" placeholder="Username"/>
                <input type="password" id="password" name="password" placeholder="Password"/>

                <button>Create an account</button>
                <p class="message">Registered? <a href="<?php Config::getRootUrl(); ?>/users/login">Login</a></p>
            </form>
        </div>
    </div>
</div>



