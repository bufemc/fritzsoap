<?php

namespace blacksenator\fritzsoap;

/**
 * The class provides functions to read and manipulate
 * data via TR-064 interface on FRITZ!Box router from AVM.
 * No documentation available!
 * @see: https://avm.de/service/schnittstellen/
 *
 * With the instantiation of the class, all available
 * services of the addressed FRITZ!Box are determined.
 * The service parameters and available actions are
 * provided in a compressed form as XML and can be output
 * with getServiceDescription().
 * The matching SOAP client only needs to be called with
 * the name of the services <services name = "..."> and
 * gets the correct location and uri from the XML
 * (see getFritzBoxServices() for details)
 *
 * +++++++++++++++++++++ ATTENTION +++++++++++++++++++++
 * THIS FILE IS AUTOMATIC ASSEMBLED!
 * ALL FUNCTIONS ARE FRAMEWORKS AND HAVE TO BE CORRECTLY
 * CODED, IF THEIR COMMENT WAS NOT OVERWRITTEN!
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * @author Volker Püschel <knuffy@anasco.de>
 * @copyright Volker Püschel 2019 - 2021
 * @license MIT
**/

use blacksenator\fritzsoap\fritzsoap;

class Control2 extends fritzsoap
{
    const
        SERVICE_TYPE = 'urn:schemas-upnp-org:service:ConnectionManager:1',
        CONTROL_URL  = '/MediaServer/ConnectionManager/Control';

    /**
     * getProtocolInfo
     *
     * automatically generated; complete coding if necessary!
     *
     * out: Source (string)
     * out: Sink (string)
     *
     * @return array
     */
    public function getProtocolInfo()
    {
        $result = $this->client->GetProtocolInfo();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * getCurrentConnectionIDs
     *
     * automatically generated; complete coding if necessary!
     *
     * out: ConnectionIDs (string)
     *
     * @return string
     */
    public function getCurrentConnectionIDs()
    {
        $result = $this->client->GetCurrentConnectionIDs();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * getCurrentConnectionInfo
     *
     * automatically generated; complete coding if necessary!
     *
     * in: ConnectionID (i4)
     * out: RcsID (i4)
     * out: AVTransportID (i4)
     * out: ProtocolInfo (string)
     * out: PeerConnectionManager (string)
     * out: PeerConnectionID (i4)
     * out: Direction (string)
     * out: Status (string)
     *
     * @param int $connectionID
     * @return array
     */
    public function getCurrentConnectionInfo($connectionID)
    {
        $result = $this->client->GetCurrentConnectionInfo(
            new \SoapParam($connectionID, 'ConnectionID'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

}
