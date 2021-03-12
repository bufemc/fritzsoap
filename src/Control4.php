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

class Control4 extends fritzsoap
{
    const
        SERVICE_TYPE = 'urn:avm.de:service:AVM_ServerStatus:1',
        CONTROL_URL  = '/MediaServer/ServerStatus/Control';

    /**
     * scanInfo
     *
     * automatically generated; complete coding if necessary!
     *
     * out: StartTime (string)
     * out: EndTime (string)
     * out: AudioFiles (ui4)
     * out: MovieFiles (ui4)
     * out: ImageFiles (ui4)
     *
     * @return array
     */
    public function scanInfo()
    {
        $result = $this->client->ScanInfo();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

}
