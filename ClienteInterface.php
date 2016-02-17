<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17/02/2016
 * Time: 15:08
 */
interface ClienteInterface
{
    public function getId();
    public function getEnd();
    public function getTipoDoc();
    public function getEmail();
    public function getTel();
    public function getStars();

}