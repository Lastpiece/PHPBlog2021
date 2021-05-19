<?php

    class ArticleManager
    {
        //! Propriétés
        
        private $db;

        public function __construct(){
            $this->db;
        }
    

        public function setDb(){
            try{
                $this->db = new PDO(DB_HOST, DB_USER, DB_PASS);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $this->db;
            } catch (PDOException $err){
                echo 'Erreur : '.$err->getMessage();
            }
        }
        
        function getDb(){
            if(null === $this->db){
                return $this->setDb();
            }

            return $this->db;
        }

        //! Partie gestion d'articles dans la bdd
        function buildArticle($row){
            return new Article($row);
        }

        // function getAllArticles(){
        //     $articles = [];

        //     $req = $this->db->prepare('SELECT * FROM article ORDER BY created_at DESC');
        //     $req->execute();
        //     $result = $req->fetchAll();

        //     foreach($result as $row){
        //         $id = $row['id'];
        //         $articles[$id] = $this->buildArticle($row);
        //     }
        // }
    }