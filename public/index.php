<?php include('./includes/inc_header.php'); ?>

<link rel="stylesheet" href="./css/login.css">
<div class="container">
    <form name="login" action="#">
        <div class="form-login">
            <div class="form-group">
                <div class="input-group">
                    <input autocomplete="off" id="email" type="text" name="email" id="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <input autocomplete="off" id="password" type="password" name="password" id="password" placeholder="********">
                </div>
                <div class="submit-group">
                    <button>Log in</button>
                </div>
            </div>
            <div class="tips">
                <div class="tooltips">
                    <div class="forget">
                        <p>Esqueceu sua senha?</p>
                    </div>
                    <div style="margin-left: 20px;" class="signup">
                        <p>Cadastre-se</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('readystatechange', function() {
        document.forms.login.reset();
    })
</script>