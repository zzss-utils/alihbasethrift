<?php
/**
 * User: 周华
 * Date: 2019-10-28
 * Time: 10:35
 */

namespace Sszh\Alihbasethrift\Serivce;


use Sszh\Alihbasethrift\Exception\MethodNotFoundException;
use Thrift\Protocol\TBinaryProtocol;
use Thrift\Transport\TBufferedTransport;
use Thrift\Transport\THttpClient;

class AliHbaseThriftService implements AliHbaseThriftInterface
{
    public $client;

    public function __construct($host,$port,$key_id,$signature)
    {
        $headers = array('ACCESSKEYID' => $key_id,'ACCESSSIGNATURE' => $signature);

        $socket = new THttpClient($host, $port);
        $socket->addHeaders($headers);
        $transport = new TBufferedTransport($socket);
        $protocol = new TBinaryProtocol($transport);
        $this->client = new \THBaseServiceClient($protocol);
    }

    public function getClient()
    {
        return $this->client;
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->client,$name)) {
            return $this->client->$name(...$arguments);
        }else{
            throw new MethodNotFoundException("method {$name} not found in ali hbase");
        }
    }
}