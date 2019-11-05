 <?php     
    
    session_start();
    include("db_conexao.php");
        

    $nome_usuario = $_POST["nome"];
    $sobrenome_usuario = $_POST["sobrenome"];
    $email_usuario = $_POST["email"];
    $senha_usuario = $_POST["senha"];
    $senha_c_usuario = $_POST["senha_c"];
    
    //VALIDAÇÃO//

$erro = 0;
$msg = [];

    if(empty($nome_usuario)){
        $msg['nome'] = "<li class='ab'>Preencha este campo!</li>"; 
        $erro ++; # $erro = $erro + 1; $erro += 1; $erro++;
    }

    if(empty($sobrenome_usuario)){
        $msg['sobrenome']= "<li>Preencha este campo!</li>";
        $erro ++;
    }

    if(empty($email_usuario)){
        $msg['email']= "<li>Preencha este campo!</li>";
        $erro ++;
    }

    if(empty($senha_usuario)){
        $msg['senha']= "<li>Preencha este campo!</li>";
        $erro ++;
    }
        
    if(empty($senha_c_usuario)){
        $msg['senha_c']= "<li>Preencha este campo!</li>";
        $erro ++;
    }
/*
    if(strlen($nome_usuario) > 20)
        $msg['nome'] = "Nome deve conter no mínimo 20 caracteres";
    if(strlen($sobrenome_usuario) > 20)
        $msg['sobrenome']= "Nome deve conter no mínimo 20 caracteres";
    if(strlen($email_usuario) > 30)
        echo "Nome deve conter no mínimo 20 caracteres";
    if(strlen($senha_usuario) > 20)
        echo "Nome deve conter no mínimo 20 caracteres";
    if(strlen($senha_c_usuario) > 20)
        echo "Nome deve conter no mínimo 20 caracteres";
*/
    if($senha_usuario != $senha_c_usuario)
        echo "As senhas não correspondem";

    

    $result_usuario = "INSERT INTO usuarios (Nome, Sobrenome, Email, Senha, Senha_C) VALUES ('$nome_usuario', '$sobrenome_usuario', ' $email_usuario', '$senha_usuario', '$senha_c_usuario')";
    
    if ($erro == 0){
        
     $resultado_usuario = mysqli_query($connect, $result_usuario);   
    
        header('Location: login.php');    
    } else {
        header("Location: cadastre-se.php");
        $_SESSION['msg']=$msg;
        $_SESSION['erros']=$erro;
    }
    
?>
