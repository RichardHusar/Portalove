<div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="6">
    <div class="tm-contact-page">
        <div class="row">
            <div class="col-xs-12">
                <div class="tm-flex tm-contact-container">
                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">

                        <!-- contact form -->
                        <div class="login">
                            <h1>Login</h1>
                            <form action="authenticate.php" method="post">
                                <label for="username">
                                    <i class="fas fa-user"></i>
                                </label>
                                <input type="text" name="username" placeholder="Username" id="username" required>
                                <label for="password">
                                    <i class="fas fa-lock"></i>
                                </label>
                                <input type="password" name="password" placeholder="Password" id="password" required>
                                <input type="submit" value="Login">
                            </form>
                        </div>
                    </div>

                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                        <div class="register">
                            <h1>Register</h1>
                            <form action="register.php" method="post" autocomplete="off">
                                <label for="username">
                                    <i class="fas fa-user"></i>
                                </label>
                                <input type="text" name="username" placeholder="Username" id="username" required>
                                <label for="password">
                                    <i class="fas fa-lock"></i>
                                </label>
                                <input type="password" name="password" placeholder="Password" id="password" required>
                                <label for="email">
                                    <i class="fas fa-envelope"></i>
                                </label>
                                <input type="email" name="email" placeholder="Email" id="email" required>
                                <input type="submit" value="Register">
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>