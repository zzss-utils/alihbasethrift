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

class THBaseService_checkAndMutate_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'table',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'row',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'family',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'qualifier',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'compareOp',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        6 => array(
            'var' => 'value',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'rowMutations',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\TRowMutations',
        ),
    );

    /**
     * to check in and delete from
     * 
     * @var string
     */
    public $table = null;
    /**
     * row to check
     * 
     * @var string
     */
    public $row = null;
    /**
     * column family to check
     * 
     * @var string
     */
    public $family = null;
    /**
     * column qualifier to check
     * 
     * @var string
     */
    public $qualifier = null;
    /**
     * comparison to make on the value
     * 
     * @var int
     */
    public $compareOp = null;
    /**
     * the expected value to be compared against, if not provided the
     * check is for the non-existence of the column in question
     * 
     * @var string
     */
    public $value = null;
    /**
     * row mutations to execute if the value matches
     * 
     * @var \TRowMutations
     */
    public $rowMutations = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['table'])) {
                $this->table = $vals['table'];
            }
            if (isset($vals['row'])) {
                $this->row = $vals['row'];
            }
            if (isset($vals['family'])) {
                $this->family = $vals['family'];
            }
            if (isset($vals['qualifier'])) {
                $this->qualifier = $vals['qualifier'];
            }
            if (isset($vals['compareOp'])) {
                $this->compareOp = $vals['compareOp'];
            }
            if (isset($vals['value'])) {
                $this->value = $vals['value'];
            }
            if (isset($vals['rowMutations'])) {
                $this->rowMutations = $vals['rowMutations'];
            }
        }
    }

    public function getName()
    {
        return 'THBaseService_checkAndMutate_args';
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
                        $xfer += $input->readString($this->table);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->row);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->family);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->qualifier);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->compareOp);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->value);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRUCT) {
                        $this->rowMutations = new \TRowMutations();
                        $xfer += $this->rowMutations->read($input);
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
        $xfer += $output->writeStructBegin('THBaseService_checkAndMutate_args');
        if ($this->table !== null) {
            $xfer += $output->writeFieldBegin('table', TType::STRING, 1);
            $xfer += $output->writeString($this->table);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->row !== null) {
            $xfer += $output->writeFieldBegin('row', TType::STRING, 2);
            $xfer += $output->writeString($this->row);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->family !== null) {
            $xfer += $output->writeFieldBegin('family', TType::STRING, 3);
            $xfer += $output->writeString($this->family);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->qualifier !== null) {
            $xfer += $output->writeFieldBegin('qualifier', TType::STRING, 4);
            $xfer += $output->writeString($this->qualifier);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->compareOp !== null) {
            $xfer += $output->writeFieldBegin('compareOp', TType::I32, 5);
            $xfer += $output->writeI32($this->compareOp);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->value !== null) {
            $xfer += $output->writeFieldBegin('value', TType::STRING, 6);
            $xfer += $output->writeString($this->value);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->rowMutations !== null) {
            if (!is_object($this->rowMutations)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('rowMutations', TType::STRUCT, 7);
            $xfer += $this->rowMutations->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
