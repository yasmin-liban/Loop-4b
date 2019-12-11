<?php
    session_start();
    include "template.php";
    $msg1 = $_SESSION['msg1'];
    $msg2 = $_SESSION['msg2'];
?>
    <div class=colorful-bg>
        <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="login-block">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center fields log-sig">
                                    <h1>Login</h1>
                                </div>
                                <form action="enter.php" method="POST">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nome de Usuário" name="username">
                                            
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Senha" name="senha">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn btn-success btn-custom">
                                        <?=$msg1?>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="login-block colorful-bg">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center fields log-sig">
                                    <h1>Sign Up</h1>
                                </div>
                                <form action="create.php" method="POST">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nome de Usuário" name="username">           
                                    </div>

                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>

                                    <div class="input-group form-group">
                                      <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Senha" name="senha">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Criar conta" class="btn btn-outline-light btn-custom">
                                        <?=$msg2?>                                  
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div> 
    </div>   
  </body>
</html>

<?php session_destroy(); 
