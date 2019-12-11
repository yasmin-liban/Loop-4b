        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="colorful-bg site-font justify-content-center">
                        <h1 class="log-sig"> <?php bem_vindo_user(); ?> </h1>
                        <div id="tabela">
                            <h3> Esses são os seus produtos disponíveis para troca: </h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr> 
                                        <th scope="col" class="site-font">Nº</th>
                                        <th scope="col" class="site-font"> Nome </th>
                                        <th scope="col" class="site-font"> Trocaria por </th>
                                        <th scope="col" class="site-font"> Descrição </th> 
                                    </tr>
                                </thead>
                                <?php lista_items(); ?>
                            </table> 
                        </div>
                        
                        <div class="alert alert-warning " role="alert" id="noitem" style="display:none;">
                            Opa! Aqui ainda não tem nada. Clique no botão de baixo para para poder começar as suas trocas!
                        </div>
                        <?php echo $no_item;?>
                        <a href="add_prod(M).php" class="btn btn-dark "> Clique aqui para adicionar um item </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
</html>
