<?php
    session_start();
    $user_info = $_SESSION['login_info'];
    $nome = $user_info['username'];
    $ola_user = "<spam class='navbar-text'> Oi, <a href='user_page.php'> $nome.</a> </spam>";
    include 'template.php';
?>
    <body>
        <div class="container" id="add-prod">
            <div class="row">
                <div class="col-md-4 block-middle">
                    <h1 class="log-sig text-center" >Adicione um item</h1>
                </div>
                <div class="col-md-8">
                    <form action="add_prod.php" method="POST" id="prodform" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">

                        <!--Nome-->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <div class="imp">* </div> <i class="fas fa-paperclip"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="nome" placeholder="Nome do item">
                                </div>
                            </div>

                        <!--Categoria-->
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"> <div class="imp">* </div> <i class="fas fa-box"></i></span>
                                    </div>
                                    <select class="custom-select" name="categoria" form="prodform">
                                        <option selected>De que categoria ele(a) é?</option>
                                        <option value="V">Vestimenta</option>
                                        <option value="U">Utensilio</option>
                                        <option value="E">Eletrônico</option>
                                        <option value="L">Leitura</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--Troco por-->
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-prepend">
                                    <span class="input-group-text"> <div class="imp">* </div> <i class="fas fa-sync-alt"></i></span>
                            </div>
                            <textarea class="form-control" name="troco_por" rows = "3" cols = "40" placeholder="Pelo que você trocaria ele(a)?"></textarea>
                        </div>
                        
                        <!--Conte um pouco-->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="fas fa-pen-nib" style="margin:6px;"></i></span>
                            </div>
                            <textarea class="form-control" name="info" rows = "3" cols = "40" placeholder="Conte-nos um pouco sobre o seu item..."></textarea>
                        </div>

                        <!--Forma de Contato-->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <div class="imp">* </div> <i class="fas fa-phone"></i></span>
                            </div>
                            <textarea class="form-control" name="contato_info" rows = "3" cols = "40" placeholder="Como as pessoas podem te contactar? Atenção: Essa informação ficará pública após adicionar o item."></textarea>
                        </div>

                        <!--Foto-->
                            <label for="browse-file" >Adicione uma imagem</label>
                            <input type="file" class="form-control-file" id="browse-file" value="Escolha uma imagem" name="img">

                        <!--Submit-->
                        <input type="submit" class="btn btn-dark btn-custom btn-lg" value="Adicionar">
                        <?=$item_add?>
                    </form>
                    
                </div>
            </div>
        </div> 
    </body>
</html>





