<?php
 session_start();

 include_once("connection.php");
 include_once("url.php");
 
 $data =$_POST;
 if(!empty($data)){



       //criar contato
       if($data["type"] === "create"){
             
           $nome = $data["nome"] ;  
           $phone = $data["phone"] ;  
           $observations = $data["observations"] ;  

           $query = "INSERT INTO contacts(nome,phone,observations) VALUES(:nome,:phone,:observations)";
           $stmt = $conn->prepare($query);

           $stmt->bindParam(":nome",$nome);
           $stmt->bindParam(":phone",$phone);
           $stmt->bindParam(":observations",$observations);

           try {

                     $stmt->execute();
                     $_SESSION["msg"] = "contato cadastrado com sucesso!";
   
              } catch (PDOexception $e) {
       
               $error = $e->getMessage();
               echo "Erro  $error" ;
              }
       }else if($data["type"]==="edit"){
              $nome = $data["nome"] ;  
              $phone = $data["phone"] ;  
              $observations = $data["observations"] ;  
              $id = $data["id"];


              $query = "UPDATE contacts 
                        SET nome = :nome, phone = :phone, observations = :observations 
                        where id = :id";

              $stmt = $conn->prepare($query);

              $stmt->bindParam(":nome",$nome);
              $stmt->bindParam(":phone",$phone);
              $stmt->bindParam(":observations",$observations);
              $stmt->bindParam(":id",$id);

              try {

                     $stmt->execute();
                     $_SESSION["msg"] = "contato Atualizado com sucesso!";
   
              } catch (PDOexception $e) {
       
               $error = $e->getMessage();
               echo "Erro  $error" ;
              }
   
       }else if($data["type"] === "delete"){
              $id = $data["id"];

              $query = "DELETE FROM contacts WHERE id = :id";
              $stmt = $conn->prepare($query);

              $stmt->bindParam(":id",$id);

              try {

                     $stmt->execute();
                     $_SESSION["msg"] = "contato deletado com sucesso!";
   
              } catch (PDOexception $e) {
       
               $error = $e->getMessage();
               echo "Erro  $error" ;
              }


       }
       
       //redirecionando para home
       header("location:".$BASE_URL ."../index.php");

 }else{
       
        
        $id;
       
        if(!empty($_GET)){
               $id = $_GET["id"];
       
        }
        
        if(!empty($id)){
       
               $query = "SELECT * FROM contacts where id = :id";
               $stmt=$conn->prepare($query);
               
               $stmt->bindParam(":id",$id);
           
               $stmt->execute();
       
               $contact = $stmt->fetch();
       
        }else{
       
                $contacts = [];
                $query = "SELECT * FROM contacts";
               
               
                $stmt = $conn->prepare($query);
               
                $stmt->execute();
               
                $contacts = $stmt->fetchAll();
        }
        
 }

 //fechar conexao
 $conn = null;