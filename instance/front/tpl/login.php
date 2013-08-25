<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Welcome to Phone-Book</h2>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
    <div class="well span5 center login-box">

	<?php if ($error): ?>
    	<div class="alert alert-error">
    	    <strong>Error!</strong>&nbsp;&nbsp;<?php print $error; ?>
    	</div>
	<?php else: ?>
    	<div class="alert alert-info">
    	    Please login with your Username and Password.
    	</div>
	<?php endif; ?>


        <form class="form-horizontal" action="<?php print l('login'); ?>" method="post">
            <fieldset>
                <div class="input-prepend" title="Username" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input style="width:300px" autofocus class="input-large span10" name="username" id="username" type="email" value="" required  />
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend" title="Password" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span>
                    <input style="width:300px" class="input-large span10" name="password" id="password" type="password" value=""  required/>
                </div>

                <div class="clearfix"></div>

                <p class="center span5">
                    <button type="submit"  name="btnLogin" class="btn btn-primary">Login</button>
                </p>
            </fieldset>
        </form>
    </div><!--/span-->
</div><!--/row-->