<?php
class Cliente implements ClienteInterface
{
    public $id;
    public $pNome;
    public $sNome;
    public $end;
    public $tel;
    public $email;
    public $doc;
    public $tipoDoc;
    public $stars;
    public $endEntrega;

    /**
     * @return mixed
     */
    public function getEndEntrega()
    {
        return $this->endEntrega;
    }

    /**
     * @param mixed $endEntrega
     */
    public function setEndEntrega($endEntrega)
    {
        $this->endEntrega = $endEntrega;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPNome()
    {
        return $this->pNome;
    }

    /**
     * @param mixed $pNome
     */
    public function setPNome($pNome)
    {
        $this->pNome = $pNome;
    }

    /**
     * @return mixed
     */
    public function getSNome()
    {
        return $this->sNome;
    }

    /**
     * @param mixed $sNome
     */
    public function setSNome($sNome)
    {
        $this->sNome = $sNome;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param mixed $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * @param mixed $doc
     */
    public function setDoc($doc)
    {
        $this->doc = $doc;
    }

    /**
     * @return mixed
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * @param mixed $tipoDoc
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param mixed $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
    }
}