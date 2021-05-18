<?php

class Article {
    //! Propriétés
    /**
     * ID of article
     *
     * @var Int
     */
    private $id;

    /**
     * Undocumented variable
     *
     * @var String
     */
    private $title;

    /**
     * Undocumented variable
     *
     * @var String
     */
    private $theme;

    /**
     * Undocumented variable
     *
     * @var String
     */
    private $content;

    /**
     * Undocumented variable
     *
     * @var DateTime
     */
    private $createdAt;

    /**
     * Undocumented variable
     *
     * @var DateTime
     */
    private $updateAt;

    //! Méthodes magique et de construction


    public function __concstruct(array $data){
        $this->hydrate($data);
    }

    public function hydrate(array $dataforObj){
        foreach($dataforObj as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->{$method}($value);
            }
        }
    }


    //! Méthodes Getters & Setters

    /**
     * Get iD of article
     *
     * @return  Int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iD of article
     *
     * @param  Int  $id  ID of article
     *
     */
    public function setId(Int $id)
    {
        if($id>0){
            $this->id = $id;
        }
    }

    /**
     * Get undocumented variable
     *
     * @return  String
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set undocumented variable
     *
     * @param  String  $title  Undocumented variable
     *
     */
    public function setTitle(String $title)
    {
        if(strlen($title)>3){
            $this->title = $title;
        }
    }

    /**
     * Get undocumented variable
     *
     * @return  String
     */
    public function gettheme()
    {
        return $this->theme;
    }

    /**
     * Set undocumented variable
     *
     * @param  String  $theme  Undocumented variable
     *
     */
    public function settheme(String $theme)
    {
        if(!empty($theme)){
            $this->theme = $theme;
        }
    }

    /**
     * Get undocumented variable
     *
     * @return  String
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set undocumented variable
     *
     * @param  String  $content  Undocumented variable
     *
     */
    public function setContent(String $content)
    {
        if(strlen($content>10)){
            $this->content = $content;
        }
    }

    /**
     * Get undocumented variable
     *
     * @return  DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set undocumented variable
     *
     * @param  DateTime  $createdAt  Undocumented variable
     *
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get undocumented variable
     *
     * @return  DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set undocumented variable
     *
     * @param  DateTime  $updateAt  Undocumented variable
     *
     */
    public function setUpdateAt(DateTime $updateAt)
    {
        $this->updateAt = $updateAt;
    }
}