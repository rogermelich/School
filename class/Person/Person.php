<?php namespace Com\iesebre\Dam2\rogermelich\Person;

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 17:50
 */
class Person
{
    public $type = "estudiant";
    /**
     * Idetificador de la persona.Per exemple DNI NIE Passaport
     * @var
     */
    public $personalId;

    /**
     * Nom Complet de la person
     * @var
     */
    public $givenName;


    /**
     * Cognom de la persona
     * @var
     */
    public $sn1;


    /**
     * Segon Cognom de la persona
     * @var
     */
    public $sn2;

    public $email;

    public $postalAdress;

    public $locality;

    public $postalCode;

    public $state;

    public $country;

    /**
     * Person constructor.
     * @param string $type
     * @param $personalId
     * @param $givenName
     * @param $sn1
     * @param $sn2
     * @param $email
     * @param $postalAdress
     * @param $locality
     * @param $postalCode
     * @param $state
     * @param $country
     */
    public function __construct($type, $personalId, $givenName, $sn1, $sn2, $email, $postalAdress, $locality, $postalCode, $state, $country)
    {
        $this->type = $type;
        $this->personalId = $personalId;
        $this->givenName = $givenName;
        $this->sn1 = $sn1;
        $this->sn2 = $sn2;
        $this->email = $email;
        $this->postalAdress = $postalAdress;
        $this->locality = $locality;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->country = $country;
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
    public function getPostalAdress()
    {
        return $this->postalAdress;
    }

    /**
     * @param mixed $postalAdress
     */
    public function setPostalAdress($postalAdress)
    {
        $this->postalAdress = $postalAdress;
    }

    /**
     * @return mixed
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param mixed $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }



    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param mixed $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * @param mixed $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * @return mixed
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * @param mixed $sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    /**
     * @return mixed
     */
    public function getPersonalId()
    {
        return $this->personalId;
    }

    /**
     * @param mixed $personalId
     */
    public function setPersonalId($personalId)
    {
        $this->personalId = $personalId;
    }

    public function render()
    {
        if ($this->dual){
            echo "El {$this->type} té el nom" . $this->get . givenName();
        }
    }
}