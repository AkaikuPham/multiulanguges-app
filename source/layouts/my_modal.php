<div id="myModal" class="reveal-modal">
    <div id="loginform" class="loginform n">
        <div>
            <div class="loginformfield">
                <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
            </div>
            <div class="loginformfield">
                <span class="form-title">
                    <h2>使用手机号登录订饭组</h2>
                </span>
            </div>
            <div class="loginformfield">
                <label class="field-name">手机号:</label>
                <input id="phone-1" placeholder="请输入您的手机号">
                <div class="loginformfield-hint form-error">
                    <span id="login-phone-error"></span>
                </div>
            </div>
            <div class="loginformfield">
                <label class="field-name">密码:</label>
                <span class="fp"><a href="#" id="forget-password" class="forget-password">忘记密码？</a></span>
                <input id="login-pwd" type="password" placeholder="密码">
                <div class="loginformfield-hint form-error">
                    <span id="login-pwd-error"></span>
                </div>
            </div>
        </div>
        <div class="loginform-buttons">
            <a id="checkin" class="save-btn" href="#">登录</a>
            <span>还没有账号？<a id="register">创建一个</a></span>
        </div>
    </div>
    <div id="registerform" class="registerform n">
        <div>
            <div class="loginformfield">
                <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
            </div>
            <div class="loginformfield">
                <span class="form-title">
                    <h2>创建新账号</h2>
                </span>
            </div>
            <div class="loginformfield">
                <label class="field-name">手机号:</label>
                <input id="phone-2" placeholder="请输入您的手机号">
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
                <label class="field-name">请输入密码:</label>
                <input id="register-pwd" type="password" placeholder="请输入6位以上字母或数字密码">
                <div class="loginformfield-hint form-error">
                    <span id="register-pwd-error"></span>
                </div>
            </div>
        </div>
        <div class="loginform-buttons">
            <a id="create" class="save-btn" href="#">创建</a>
            <span>已经有账号？<a id="login">登录</a></span>
        </div>
    </div>
    <div id="chpwdform" class="chpwdform n">
        <div>
            <div class="loginformfield">
                <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
            </div>
            <div class="loginformfield">
                <span class="form-title">
                    <h2>修改密码</h2>
                </span>
            </div>
            <div class="loginformfield">
                <label class="field-name">手机号:</label>
                <input id="phone-3" placeholder="请输入您的手机号">
                <div class="loginformfield-hint form-error">
                    <span id="chpwd-phone-error"></span>
                </div>
            </div>
            <div class="loginformfield field-confirm-code">
                <label class="field-name">验证码:</label>
                <input id="chpwd-confirm-code" placeholder="请输入验证码">
                <button id="chpwd-code" class="phone-code-btn">获取验证码</button>
                <input type="hidden" id="chpwd-hid-code">
                <div class="loginformfield-code-hint form-error">
                    <span id="chpwd-code-error"></span>
                </div>
            </div>
            <div class="loginformfield">
                <label class="field-name">新密码:</label>
                <input id="chpwd-pwd" type="password" placeholder="请输入6位以上字母或数字密码">
                <div class="loginformfield-hint form-error">
                    <span id="chpwd-pwd-error"></span>
                </div>
            </div>
        </div>
        <div class="loginform-buttons">
            <a id="chpwd" class="save-btn" href="#">确定</a>
            <span>没有忘记密码？<a id="back-login">返回</a></span>
        </div>
    </div>


    <a class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
</div>
