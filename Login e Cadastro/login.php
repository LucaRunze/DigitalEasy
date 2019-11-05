


<?php require 'header.php'; ?>
<div class = "container">
    <div class="menu">
    <div class="menuint">
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            
            <li><a href="sobre.php">Sobre</a><li>


            <li>
                <a href="#"> Biquínis</a>
                <img src="img/seta.png " border="0" width="10px" height="10px">
                <div class="submenu">

                    <a href="cortininha.php">
                        <div class="submenuitem">
                            Cortininha
                        </div>
                    </a>

                    <a href="cropped.php">
                        <div class="submenuitem">
                            Cropped
                        </div>
                    </a>
                </div>
            </li>

            <li><a href="#"> Roupas </a>
                <img src="img/seta.png " border="0" width="10px" height="10px">
                <div class="submenu">

                    <a href="blusa.php">
                        <div class="submenuitem">
                            Camisas
                        </div>
                    </a>

                    <a href="saia.php">
                        <div class="submenuitem">
                            Saias/Shorts
                        </div>
                    </a>
                </div>
            </li>

            <li><a href="maio.php"> Maiôs </a>
            <li>

            <li><a href="#"> Infantil </a>
                <img src="img/seta.png " border="0" width="10px" height="10px">
                <div class="submenu">

                    <a href="feminino.php">
                        <div class="submenuitem">
                            Feminino
                        </div>
                    </a>

                    <a href="masculino.php">
                        <div class="submenuitem">
                            Masculino
                        </div>
                    </a>
                </div>
            </li>

            <li><a href="#"> Masculino </a>
                <img src="img/seta.png " border="0" width="10px" height="10px">
                <div class="submenu">


                    <a href="sunga.php">
                        <div class="submenuitem">
                            Sunga
                        </div>
                    </a>

                    <a href="roupas.php">
                        <div class="submenuitem">
                            Roupa
                        </div>
                    </a>
                </div>
            </li>


            <li><a href="plus.php"> Plus Size </a></li>

            <li><a href="#"> Atendimento </a>
                <img src="img/seta.png " border="0" width="10px" height="10px">
                <div class="submenu">

                    <a href="contato.php">
                        <div class="submenuitem">
                            Contato
                        </div>
                    </a>

                    <a href="ondeencontrar.php">
                        <div class="submenuitem">
                            Onde Encontrar
                        </div>
                    </a>

                    <a href="termos.php">
                        <div class="submenuitem">
                            Termos
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>

<div class="container">
     <div class="login-header">
        <h1>MINHA CONTA</h1>
        <p>FAÇA LOGIN OU CADASTRE-SE PARA ACESSAR A ÁREA DE PEDIDOS</p>
         
    </div>
    
    <div class="form-switch">
        <button class="active">Entrar</button>
        <button>Criar conta</button>
    </div>

    <div class="login">
         <h3> Fazer Login</h3>
        
    </div>


    
    <form action = "carregarlogin.php" method = "post">
        
        <div class="box-login active">
            <div class = "form-item">
                <label for = "nome">Nome: </label>
                <input type = "text" name = "nome" id = "nome" class = "campo-lg"/><br>
            </div>

            <div class = "form-item">
                <label for = "senha">Senha:</label>
                <input type = "password" name = "senha" id = "senha" class = "campo-lg"/><br>
            </div>

            <div class = "form-botao">
                <input type = "submit" value = "Logar" class = "botao botao-pd" />
            </div>
        </div>
    </form>
    

</div>


<?php require 'footer.php'; ?>