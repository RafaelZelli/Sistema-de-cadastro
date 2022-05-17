<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    //Modificações no banco
    if(!empty($data)) {

        //Cria contato
        if($data["type"] === "create") {
            $name = $data["name"];
            $surname = $data["surname"];
            $cpf = $data["cpf"];
            $email = $data["email"];
            $phone = $data["phone"];

            $query = "INSERT INTO contacts (name, surname, cpf, email, phone) 
                      VALUES (:name, :surname, :cpf, :email, :phone)";
            
            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":surname", $surname);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);

            try{
               
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
            
            }catch(PDOException $e){
                //erro de conexã com o banco de dados
                $error = $e->getMessage();
                echo "Erro: $error";
            }     

        }else if($data["type"] === "edit"){

            //Edita os dados
            $id = $data["id"];
            $name = $data["name"];
            $surname = $data["surname"];
            $cpf = $data["cpf"];
            $email = $data["email"];
            $phone = $data["phone"];

            $query = "UPDATE contacts 
                      SET name = :name, surname = :surname, cpf = :cpf, email = :email, phone = :phone 
                      WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":surname", $surname);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":id", $id);

            try{
               
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!";
            
            }catch(PDOException $e){
                //erro de conexã com o banco de dados
                $error = $e->getMessage();
                echo "Erro: $error";
            }

        }else if($data["type"] === "delete"){

            //Remove os dados
            $id = $data["id"];
            $name = $data["name"];
            $surname = $data["surname"];
            $cpf = $data["cpf"];
            $email = $data["email"];
            $phone = $data["phone"]; 
            
            $query = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            try{
               
                $stmt->execute();
                $_SESSION["msg"] = "Contato removido com sucesso!";
            
            }catch(PDOException $e){
                //erro de conexão com o banco de dados
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }
        
        //Redireciona para home
        header("Location:" . $BASE_URL . "../index.php");


        //Seleção de dados
    }else{

        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }
    
        //Retorna o dado de um contato
        if(!empty($id)){
    
            $query = "SELECT * FROM contacts WHERE id = :id";
    
            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(":id", $id);
            
            $stmt->execute();
    
            $contact = $stmt->fetch();
    
        }else{
            //Retorna todos os contatos
            $contacts = [];
    
            $query = "SELECT * FROM contacts";
    
            $stmt = $conn->prepare($query);
    
            $stmt-> execute();
    
            $contacts = $stmt->fetchAll();   //Recebe todos os dados por meio da PDO
        }

    }

    //Fehar conexão
    $conn = null;