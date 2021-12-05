<?php
/**
 * Created by PhpStorm.
 * User: liangchen
 * Date: 2018/4/24
 * Time: 上午9:39.
 */
use PHPUnit\Framework\TestCase;

final class UtilsTest extends TestCase {
    public function testetEndpointInfoForNormalIpTcp() {
        $result = [
            'sHost' => "127.0.0.1",
            'sProtocol' => "tcp",
            'iPort' => "17890",
            'iTimeout' => "100",
            'bIp' => "127.1.1.0",
            'sIp' => "127.0.0.1",
        ];
        $this->assertEquals(
            $result,
            \Tars\Utils::getEndpointInfo("tcp -h 127.0.0.1 -p 17890 -b 127.1.1.0 -t 100")
        );
    }

    public function testetEndpointInfoForNormalIpUdp() {
        $result = [
            'sHost' => "127.0.0.1",
            'sProtocol' => "udp",
            'iPort' => "17890",
            'iTimeout' => "100",
            'bIp' => "127.1.1.0",
            'sIp' => "127.0.0.1",
        ];
        $this->assertEquals(
            $result,
            \Tars\Utils::getEndpointInfo("udp -h 127.0.0.1 -p 17890 -b 127.1.1.0 -t 100")
        );
    }

    public function testetEndpointInfoForDomainTcp() {
        $result = [
            'sHost' => "tars-registry",
            'sProtocol' => "tcp",
            'iPort' => "17890",
            'iTimeout' => "100",
            'bIp' => "127.1.1.0",
            'sIp' => "tars-registry",
        ];
        $this->assertEquals(
            $result,
            \Tars\Utils::getEndpointInfo("tcp -h tars-registry -p 17890 -b 127.1.1.0 -t 100")
        );
    }

    public function testetEndpointInfoForDomainUdp() {
        $result = [
            'sHost' => "tars-registry",
            'sProtocol' => "udp",
            'iPort' => "17890",
            'iTimeout' => "100",
            'bIp' => "127.1.1.0",
            'sIp' => "tars-registry",
        ];
        $this->assertEquals(
            $result,
            \Tars\Utils::getEndpointInfo("udp -h tars-registry -p 17890 -b 127.1.1.0 -t 100")
        );
    }
}