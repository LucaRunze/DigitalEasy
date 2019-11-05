<?php 
require 'header.php'; 


/*
echo "<pre>";
var_dump($_SESSION);
echo "</pre>"; 
*/

?>

<style>
    .ab{
        
    margin-left: 71%;
    margin-top: 1%;

    }
</style>

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
        <h1>Minha Conta</h1>
        <p>Faça login ou cadastra-se para acessar a área de pedidos.</p>
    </div>
    
    <div class="form-switch">
        <button>Entrar</button>
        <button class="active">Criar conta</button>

    </div>
    <div class="login">
    <h3>Cadastre-Se</h3>
    </div>
    <form method = "POST" action="cadastrar.php">
    
        <div class = "form-item">
            <label for = "nome">Nome: </label>
            <input type = "text" name = "nome" id = "nome" class = "campo-lg" placeholder = "Digite seu nome"/><br>
            <?php
                if(isset($_SESSION['msg']['nome'])){
                    echo $_SESSION['msg']['nome'];
                }
            ?>            
        </div>
        
        <div class = "form-item">
            <label for = "nome">Sobrenome: </label>
            <input type = "text" name = "sobrenome" id = "sobrenome" class = "campo-lg" placeholder = "Digite seu sobrenome"/><br>
            <?php
                if(isset($_SESSION['msg']['sobrenome'])){
                    echo $_SESSION['msg']['sobrenome'];
                }
            ?>            
        </div>
        
        
        <div class = "form-item">
            <label for = "email">E-mail:</label>
            <input type = "text" name = "email" id = "email" class = "campo-lg" placeholder = "Digite seu email"/><br>
            <?php
                if(isset($_SESSION['msg']['email'])){
                    echo $_SESSION['msg']['email'];
                }
            ?>            
        </div>
        
        <div class = "form-item">
            <label for = "senha">Senha:</label>
            <input type = "password" name = "senha" id = "senha" class = "campo-lg" placeholder = "Digite sua senha"/><br>
            <?php
                if(isset($_SESSION['msg']['senha'])){
                    echo $_SESSION['msg']['senha'];
                }
            ?>            
        </div>
        
        <div class = "form-item">
            <label for = "senha">Senha_C:</label>
            <input type = "password" name = "senha_c" id = "senha_c" class = "campo-lg" placeholder = "Confirme sua senha"/><br>
            <?php
                if(isset($_SESSION['msg']['senha_c'])){
                    echo $_SESSION['msg']['senha_c'];
                }
            ?>            
        </div>
    

        <div class = "form-botao">
            <input type = "submit" value = "Cadastrar" class = " botao botao-pd"/>
        </div>
        
    </form>
    
</div>

<?php
session_destroy();
?>

<?php require 'footer.php'; ?>