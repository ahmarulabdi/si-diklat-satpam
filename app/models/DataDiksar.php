<?php

class DataDiksar extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_diksar;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_kesehatan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_sertifikat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $nilai;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_si_disat");
        $this->setSource("data_diksar");
        $this->belongsTo('id_sertifikat', '\Sertifikat', 'id_sertifikat', ['alias' => 'Sertifikat']);
        $this->belongsTo('id_kesehatan', '\Kesehatan', 'id_kesehatan', ['alias' => 'Kesehatan']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'data_diksar';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataDiksar[]|DataDiksar|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataDiksar|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
