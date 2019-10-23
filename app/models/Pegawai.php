<?php

class Pegawai extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_pegawai;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", length=250, nullable=true)
     */
    public $alamat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $umur;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $jabatan;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_si_disat");
        $this->setSource("pegawai");
        $this->belongsTo('id_user', '\User', 'id_user', ['alias' => 'User']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pegawai';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pegawai[]|Pegawai|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pegawai|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
