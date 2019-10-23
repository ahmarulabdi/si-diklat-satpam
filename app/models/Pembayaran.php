<?php

class Pembayaran extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama;

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_pembayaran;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $keterangan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $jumlah;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_si_disat");
        $this->setSource("pembayaran");
        $this->hasMany('id_pembayaran', 'DataCalonDiksar', 'id_pembayaran', ['alias' => 'DataCalonDiksar']);
        $this->hasMany('id_pembayaran', 'Kesehatan', 'id_pembayaran', ['alias' => 'Kesehatan']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pembayaran';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pembayaran[]|Pembayaran|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pembayaran|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
