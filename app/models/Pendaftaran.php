<?php

class Pendaftaran extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_pendaftaran;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $umur;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $jenis_kelamin;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $agama;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $tempat_lahir;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_lahir;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $tinggi;

    /**
     *
     * @var string
     * @Column(type="string", length=250, nullable=true)
     */
    public $alamat;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $riwayat_sekolah;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $berat;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $status_bayar;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("kp_si_disat");
        $this->setSource("pendaftaran");
        $this->hasMany('id_pendaftaran', 'Pembayaran', 'id_pendaftaran', ['alias' => 'Pembayaran']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pendaftaran';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pendaftaran[]|Pendaftaran|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pendaftaran|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
