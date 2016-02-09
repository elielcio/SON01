<?php
class Cliente
{
    public $pNome;
    public $sNome;
    public $end;
    public $tel;
    public $email;
    public $profissao;
    public $cpf;

    /**
     * @return mixed
     */
    public function getPNome()
    {
        return $this->pNome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
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
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * @param mixed $profissao
     */
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }


}