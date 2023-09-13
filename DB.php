<?php
   session_start();
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "dec";

   // connect the database with the server
   $conn = new mysqli($servername,$username,$password,$dbname);
     
   // if error occurs 
   if ($conn -> connect_error){
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
   }

   function phpAlert($msg) {
        echo '<script type="text/javascript">';
        echo 'alert("' . $msg . '");';
        echo '</script>';
    }
?>

<?php 

$value = $_POST['submit'];

//Metodo de inserir projectos
try {
    if ($value =='submitCriar') {
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $descricao = $_POST['descricao'];
        $tamanho = $_POST['tamanho'];
        $quarto = $_POST['quarto'];
        $wc = $_POST['wc'];
        $garagem = $_POST['garagem'];
        $preco = $_POST['preco'];
    
        //Validacao de foto
        //Validacao de foto
        $img = basename($_FILES['foto']['name']); //Get here extension from image
        $result = explode('.',$img);
        $foto= $result[0].date('dmY').'_'.time().'.'.$result[1]; 

        $tempname = $_FILES["foto"]["tmp_name"];
        $folder = "./assets/DB/" . $foto;
    
        $errors     = array();
        $maxsize    = 2097152;
        $acceptable = array(
            'image/jpeg',
            'image/jpg',
            'image/png'
        );


        if(($_FILES['foto']['size'] >= $maxsize) ) {
            echo '<script type="text/javascript">';
            echo 'alert("Ficheiro grande. Deve ser menor que 2 megabytes.");';
            echo 'window.location.href = "gestao.php";';
            echo '</script>';
        }
    
        if((!in_array($_FILES['foto']['type'], $acceptable)) ) {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid file type. So JPG, e PNG sao permitidos");';
            echo 'window.location.href = "gestao.php";';
            echo '</script>';
        }
        list($width, $height, $type, $attr) = getimagesize($tempname);

        if($width > 1500 || $height > 1000){
            echo '<script type="text/javascript">';
            echo 'alert("Imagem excedeu limites");';
            echo 'alert("Limites - width/largura - 1500 pixeis , heigth/altura - 1000 pixeis");';
            echo 'alert("width - '.$width.' height - '.$height.' ");';
            echo 'window.location.href = "gestao.php";';
            echo '</script>';
        }
    
        $stmt = $conn->prepare(" INSERT INTO projecto (pro_nome, pro_tipo, pro_descricao, pro_tamanho, pro_quarto, pro_wc, pro_garagem, pro_preco, pro_img) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param("ssssiiiis", $nome, $tipo, $descricao, $tamanho, $quarto, $wc, $garagem, $preco, $foto);
    
        if (move_uploaded_file($tempname, $folder)) {
                    
            if ($stmt->execute() ) {
                echo '<script type="text/javascript">';
                echo 'alert("Projecto criado");';
                echo 'window.location.href = "gestao.php";';
                echo '</script>';
            }else{
                throw new Exception("Erro - Inseriu dados invalidos");
            } 
        }  
    }
}catch (\Throwable $th) {
        $msg =  " " . $th->getMessage();
        echo '<script type="text/javascript">';
        echo 'alert("'.$msg.'");';
        echo '</script>';
        echo"<td width=14% align=center><input type=button value=Voltar onclick=myselect() /></td>";
}

//Metodo de inserir fotos de projectos
try {
    if ($value =='imagemCriar') {
        $nome = $_POST['idProjecto'];

        //Validacao de foto
        $img = basename($_FILES['fotoImagem']['name']); //Get here extension from image
        $result = explode('.',$img);
        $foto= $result[0].date('dmY').'_'.time().'.'.$result[1]; 
        
       // $foto = $_FILES["fotoImagem"]["name"];
        $tempname = $_FILES["fotoImagem"]["tmp_name"];
        $folder = "./assets/projectos/" . $foto;
    
        $errors     = array();
        $maxsize    = 2097152;
        $acceptable = array(
            'image/jpeg',
            'image/jpg',
            'image/png'
        );


        if(($_FILES['fotoImagem']['size'] >= $maxsize) ) {
            echo '<script type="text/javascript">';
            echo 'alert("Ficheiro grande. Deve ser menor que 2 megabytes.");';
            echo 'window.location.href = "gestao.php";';
            echo '</script>';
        }
    
        if((!in_array($_FILES['fotoImagem']['type'], $acceptable)) ) {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid file type. So JPG, e PNG sao permitidos");';
            echo 'window.location.href = "gestao.php";';
            echo '</script>';
        }
        list($width, $height, $type, $attr) = getimagesize($tempname);

        if($width > 2000 || $height > 2000){
            echo '<script type="text/javascript">';
            echo 'alert("Imagem excedeu limites");';
            echo 'alert("Limites - width/largura - 1500 pixeis , heigth/altura - 1000 pixeis");';
            echo 'alert("width - '.$width.' height - '.$height.' ");';
            echo 'window.location.href = "gestao.php";';
            echo '</script>';
        }
    
        $stmt = $conn->prepare(" INSERT INTO imagens (id_pro, img_ficheiro) VALUES (?, ?) ");
        $stmt->bind_param("ss", $nome, $foto);
    
        if (move_uploaded_file($tempname, $folder)) {
                    
            if ($stmt->execute() ) {
                echo '<script type="text/javascript">';
                echo 'alert("Imagem inserido no projecto '.$nome.' ");';
                echo 'window.location.href = "gestao.php";';
                echo '</script>';
            }else{
                throw new Exception("Erro - Inseriu dados invalidos");
            } 
        }  
    }
}catch (\Throwable $th) {
        $msg =  " " . $th->getMessage();
        phpAlert($msg);
        echo"<td width=14% align=center><input type=button value=Voltar onclick=myselect() /></td>";
}
  

//actualizacao de projectos
try{
    if ($value =='submitActualizar') {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];
    $tamanho = $_POST['tamanho'];
    $quarto = $_POST['quarto'];
    $wc = $_POST['wc'];
    $garagem = $_POST['garagem'];
    $preco = $_POST['preco'];

    $foto = $_FILES["foto"]["name"];

    $count = 0;

    if(isset($nome)){
        $stmt = $conn->prepare(" UPDATE projecto SET pro_nome = ?  WHERE pro_nome = '$nome' ");
        $stmt->bind_param("s", $nome);
        
        if ($stmt->execute()) {
            header("Location: gestao.php");
        }else{
            throw new Exception("Erro - Inseriu dados invalidos");
        }  
    }
    if(isset($tipo)){
        $stmt = $conn->prepare(" UPDATE projecto SET pro_tipo = ?  WHERE pro_nome = '$nome' ");
        $stmt->bind_param("s",$tipo);
        
        if ($stmt->execute()) {
            header("Location: gestao.php");
        }else{
            throw new Exception("Erro - Inseriu dados invalidos");
        }  

    }
    if(isset($descricao)){
        $stmt = $conn->prepare(" UPDATE projecto SET pro_descricao = ?  WHERE pro_nome = '$nome' ");
        $stmt->bind_param("s",$descricao);
        
        if ($stmt->execute()) {
            header("Location: gestao.php");
        } 
        else{
            throw new Exception("Erro - Inseriu dados invalidos");
        }  
    }
    if(isset($tamanho)){
        $stmt = $conn->prepare(" UPDATE projecto SET pro_tamanho = ?  WHERE pro_nome ='$nome' ");
        $stmt->bind_param("i",$tamanho);
        
        if ($stmt->execute()) {
            header("Location: gestao.php");
        }
        else{
            throw new Exception("Erro - Inseriu dados invalidos");
        }   
    }
    if(isset($quarto)){
        $stmt = $conn->prepare(" UPDATE projecto SET pro_quarto = ?  WHERE pro_nome = '$nome' ");    
        $stmt->bind_param("i", $quarto);
        
        if ($stmt->execute()) {
            header("Location: gestao.php");
        } 
        else{
            throw new Exception("Erro - Inseriu dados invalidos");
        }  
    }
    if(isset($wc)){
        $stmt = $conn->prepare(" UPDATE projecto SET pro_wc = ?  WHERE pro_nome = '$nome' ");
        $stmt->bind_param("i", $wc);
        
        if ($stmt->execute()) {
            header("Location: gestao.php");
        } 
        else{
            throw new Exception("Erro - Inseriu dados invalidos");
        }  
    }
    if(isset($garagem)){
        $stmt = $conn->prepare(" UPDATE projecto SET pro_garagem = ?  WHERE pro_nome = '$nome' ");
        $stmt->bind_param("i",$garagem);
        
        if ($stmt->execute()) {
            header("Location: gestao.php");
        }
        else{
            throw new Exception("Erro - Inseriu dados invalidos");
        }  
    }
    if(isset($preco)){
        $stmt = $conn->prepare(" UPDATE projecto SET pro_preco = ?  WHERE pro_nome = '$nome' ");
        $stmt->bind_param("i", $preco);
        
        if ($stmt->execute()) {
            header("Location: gestao.php");
        } 
        else{
            throw new Exception("Erro - Inseriu dados invalidos");
        } 
    }
    if(isset($foto)){
        $tempname = $_FILES["foto"]["tmp_name"];
        $folder = "./assets/DB/" . $foto;
    
        $errors     = array();
        $maxsize    = 2097152;
        $acceptable = array(
            'image/jpeg',
            'image/jpg',
            'image/png'
        );
        if(($_FILES['foto']['size'] >= $maxsize) || ($_FILES["foto"]["size"] == 0)) {
            $errors[] = 'Ficheiro grande. Deve ser menor que 2 megabytes.';
        }
    
        if((!in_array($_FILES['foto']['type'], $acceptable)) ) {
            $errors[] = 'Invalid file type. So JPG, e PNG sao permitidos';
        }
  
        //ApagarFotoAntiga
        unlink($foto);

        
        $stmt = $conn->prepare(" UPDATE projecto SET pro_foto = ?  WHERE pro_nome = $nome ");
        $stmt->bind_param("s", $foto);


        
        if ($stmt->execute() && sizeof($errors) == 0) {
            header("Location: gestao.php");
        } else {
            echo $errors[0];
            echo $errors[1];
            throw new Exception("Erro - Inseriu dados invalidos");
        }

    }

    if($count == 0){
        header("Location: gestao.php");
    }
}
}catch (\Throwable $th) {
    $msg =  " " . $th->getMessage();;
    phpAlert($msg);
    echo"<td width=14% align=center><input type=button value=Voltar onclick=myselect() /></td>";
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

try{
    //Apagar projecto 
    if ($value =='submitApagar') { 
        $nome = $_POST['nomeDEL'];
        $stmt = $conn->prepare("DELETE FROM projecto WHERE pro_nome = ? ");
        $stmt->bind_param("s", $nome);

        $path = './assets/DB/';

            //Apagar foto no ficheiro DB
            $sql = "SELECT pro_img FROM projecto WHERE pro_nome = '$nome' ";
            $result = ($conn->query($sql));
            //declare array to store the data of database
            $row = []; 
            if ($result->num_rows > 0) 
            {
                // fetch all data from db into array 
                $row = $result->fetch_all(MYSQLI_ASSOC);  
            }  
            foreach($row as $rows){                                                            
                $folder = $path . $rows['pro_img']; 
                unlink($folder);
            }

        if ($stmt->execute()) { 
            header("Location: gestao.php");
            
        }else{
            throw new Exception("Erro - Inseriu dados invalidos");
        } 
    }
} catch (\Throwable $th) {
    $msg =  " " . $th->getMessage();;
    phpAlert($msg);
    echo"<td width=14% align=center><input type=button value=Voltar onclick=myselect() /></td>";
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

try{
    //Apagar uma das imagens do projecto 
    if ($value =='imagemApagar') {
         
        $nome = $_POST['IDimagem'];
        $stmt = $conn->prepare("DELETE FROM imagens WHERE id_imagens = ? ");
        $stmt->bind_param("s", $nome);

        $path = './assets/projectos/';

            //Apagar foto no ficheiro DB
            $sql = "SELECT * FROM imagens WHERE id_imagens = '$nome' ";
            $result = ($conn->query($sql));
            //declare array to store the data of database
            $row = []; 
            if ($result->num_rows > 0) 
            {
                // fetch all data from db into array 
                $row = $result->fetch_all(MYSQLI_ASSOC);  
            }  
            foreach($row as $rows){                                                            
                $folder = $path . $rows['img_ficheiro']; 
                unlink($folder);
                header("Location: gestao.php");
            }

        if ($stmt->execute()) { 
            header("Location: gestao.php");
            
        }else{
            throw new Exception("Erro - Inseriu dados invalidos");
        } 
    }
} catch (\Throwable $th) {
    $msg =  " " . $th->getMessage();;
    phpAlert($msg);
    echo"<td width=14% align=center><input type=button value=Voltar onclick=myselect() /></td>";
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
    <script>
        function myselect()
        {
            location.replace("gestao.php");
        }
    </script>
<?php   
