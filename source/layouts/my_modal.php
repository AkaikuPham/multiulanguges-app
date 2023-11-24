<div id="myModal" class="reveal-modal">
    <div id="loginform" class="loginform n">
        <div>
            <div class="loginformfield">
                <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
            </div>
            <div class="loginformfield">
                <span class="form-title">
                    <h2><?php echo $langs['use_your_phonenumber']; ?></h2>
                </span>
            </div>
            <div class="loginformfield">
                <label class="field-name"><?php echo $langs['phonenumber']; ?>:</label>
                <input id="phone-1" placeholder="<?php echo $langs['placeholder_phonenumber']; ?>">
                <div class="loginformfield-hint form-error">
                    <span id="login-phone-error"></span>
                </div>
            </div>
            <div class="loginformfield">
                <label class="field-name"><?php echo $langs['password']; ?>:</label>
                <span class="fp"><a href="#" id="forget-password" class="forget-password"><?php echo $langs['forgot_pass']; ?></a></span>
                <input id="login-pwd" type="password" placeholder="<?php echo $langs['password']; ?>">
                <div class="loginformfield-hint form-error">
                    <span id="login-pwd-error"></span>
                </div>
            </div>
        </div>
        <div class="loginform-buttons">
            <a id="checkin" class="save-btn" href="#"><?php echo $langs['login']; ?></a>
            <span><?php echo $langs['dont_have_account']; ?><a id="register"><?php echo $langs['register']; ?></a></span>
        </div>
    </div>
    <div id="registerform" class="registerform n">
        <div>
            <div class="loginformfield">
                <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
            </div>
            <div class="loginformfield">
                <span class="form-title">
                    <h2><?php echo $langs['create_new_acc']; ?></h2>
                </span>
            </div>
            <div class="loginformfield">
                <label class="field-name"><?php echo $langs['phonenumber']; ?>:</label>
                <input id="phone-2" placeholder="<?php echo $langs['placeholder_phonenumber']; ?>">
                <div class="loginformfield-hint form-error">
                    <span id="register-phone-error"></span>
                </div>
            </div>
            <!--                <div class="loginformfield field-confirm-code">-->
            <!--                    <label class="field-name">验证码:</label>-->
            <!--                    <input   id="register-confirm-code" placeholder="请输入验证码">-->
            <!--                    <button id="register-code" class="phone-code-btn">获取验证码</button>-->
            <!--                    <input type="hidden" id="register-hid-code">-->
            <!--                    <div class="loginformfield-code-hint form-error">-->
            <!--                        <span id="register-code-error"></span>-->
            <!--                    </div>-->
            <!--                </div>-->
            <div class="loginformfield">
                <label class="field-name"><?php echo $langs['please_enter_pass']; ?>:</label>
                <input id="register-pwd" type="password" placeholder="<?php echo $langs['please_enter_more_6']; ?>">
                <div class="loginformfield-hint form-error">
                    <span id="register-pwd-error"></span>
                </div>
            </div>
        </div>
        <div class="loginform-buttons">
            <a id="create" class="save-btn" href="#"><?php echo $langs['create']; ?></a>
            <span><?php echo $langs['have_an_acc']; ?><a id="login"><?php echo $langs['login']; ?></a></span>
        </div>
    </div>
    <div id="chpwdform" class="chpwdform n">
        <div>
            <div class="loginformfield">
                <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
            </div>
            <div class="loginformfield">
                <span class="form-title">
                    <h2><?php echo $langs['change_pass']; ?></h2>
                </span>
            </div>
            <div class="loginformfield">
                <label class="field-name"><?php echo $langs['phonenumber']; ?>:</label>
                <input id="phone-3" placeholder="<?php echo $langs['placeholder_phonenumber']; ?>">
                <div class="loginformfield-hint form-error">
                    <span id="chpwd-phone-error"></span>
                </div>
            </div>
            <div class="loginformfield field-confirm-code">
                <label class="field-name"><?php echo $langs['verify_code']; ?>:</label>
                <input id="chpwd-confirm-code" placeholder="<?php echo $langs['enter_code']; ?>">
                <button id="chpwd-code" class="phone-code-btn"><?php echo $langs['get_verify_code']; ?></button>
                <input type="hidden" id="chpwd-hid-code">
                <div class="loginformfield-code-hint form-error">
                    <span id="chpwd-code-error"></span>
                </div>
            </div>
            <div class="loginformfield">
                <label class="field-name"><?php echo $langs['new_pass']; ?>:</label>
                <input id="chpwd-pwd" type="password" placeholder="<?php echo $langs['please_enter_more_6']; ?>">
                <div class="loginformfield-hint form-error">
                    <span id="chpwd-pwd-error"></span>
                </div>
            </div>
        </div>
        <div class="loginform-buttons">
            <a id="chpwd" class="save-btn" href="#"><?php echo $langs['sure']; ?></a>
            <span><?php echo $langs['dont_forget_pass']; ?><a id="back-login"><?php echo $langs['return']; ?></a></span>
        </div>
    </div>


    <a class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
</div>