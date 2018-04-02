<?php 
    $linkAction = URL::createLink('admin', 'index', 'login');
    $error = isset($this->errors)? $this->errors : '';
?>
<div class="container">
        <div class="card card-container">
        <?php echo $error; ?>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="<?php echo $linkAction;?>" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="form[username]" id="inputusername" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name="form[password]" id="inputPassword" class="form-control" placeholder="Password" required>
                <input type="hidden"  name="form[token]" value="<?php echo time();?>">
                
                <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" >
            </form><!-- /form -->
            
        </div><!-- /card-container -->
</div><!-- /container -->