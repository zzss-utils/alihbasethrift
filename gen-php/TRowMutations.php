<?php
/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * A TRowMutations object is used to apply a number of Mutations to a single row.
 */
class TRowMutations
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'row',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'mutations',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\TMutation',
                ),
        ),
    );

    /**
     * @var string
     */
    public $row = null;
    /**
     * @var \TMutation[]
     */
    public $mutations = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['row'])) {
                $this->row = $vals['row'];
            }
            if (isset($vals['mutations'])) {
                $this->mutations = $vals['mutations'];
            }
        }
    }

    public function getName()
    {
        return 'TRowMutations';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->row);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->mutations = array();
                        $_size119 = 0;
                        $_etype122 = 0;
                        $xfer += $input->readListBegin($_etype122, $_size119);
                        for ($_i123 = 0; $_i123 < $_size119; ++$_i123) {
                            $elem124 = null;
                            $elem124 = new \TMutation();
                            $xfer += $elem124->read($input);
                            $this->mutations []= $elem124;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('TRowMutations');
        if ($this->row !== null) {
            $xfer += $output->writeFieldBegin('row', TType::STRING, 1);
            $xfer += $output->writeString($this->row);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->mutations !== null) {
            if (!is_array($this->mutations)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('mutations', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->mutations));
            foreach ($this->mutations as $iter125) {
                $xfer += $iter125->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
