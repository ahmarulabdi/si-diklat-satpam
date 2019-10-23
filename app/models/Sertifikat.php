<?php

class Sertifikat extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_sertifikat;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $periode;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_si_disat");
        $this->setSource("sertifikat");
        $this->hasMany('id_sertifikat', 'DataDiksar', 'id_sertifikat', ['alias' => 'DataDiksar']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sertifikat';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Sertifikat[]|Sertifikat|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Sertifikat|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
