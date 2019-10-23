<?php

class Kesehatan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_kesehatan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_pembayaran;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $penyakit;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $status;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    public $tensi;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_si_disat");
        $this->setSource("kesehatan");
        $this->belongsTo('id_pembayaran', '\Pembayaran', 'id_pembayaran', ['alias' => 'Pembayaran']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'kesehatan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kesehatan[]|Kesehatan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kesehatan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
