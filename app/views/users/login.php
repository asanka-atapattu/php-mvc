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
            <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password" class="required"/>
                <input type="text" placeholder="email address"/>
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form id="login-369" class="login-form" role="form" action="<?php Config::getRootUrl()?>/users/loguser" method="post" data-toggle="validator">
                <input type="text" name="user" placeholder="username"/>
                <input type="password" name="pass" placeholder="password"/>
                <button>login</button>
                <p class="message">Not registered? <a href="<?php Config::getRootUrl(); ?>/users/register">Create an account</a></p>
            </form>
        </div>
    </div>
</div>