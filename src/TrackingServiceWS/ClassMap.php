<?php

declare(strict_types=1);

namespace Maetva\Chronopost\TrackingServiceWS;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'resultTrackWithSenderRef' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ResultTrackWithSenderRef',
            'listEvents' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ListEvents',
            'event' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\Event',
            'resultTrackSearch' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ResultTrackSearch',
            'infosPOD' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\InfosPOD',
            'resultTrackSkybillV2' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ResultTrackSkybillV2',
            'listEventInfoComps' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ListEventInfoComps',
            'eventInfoComp' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\EventInfoComp',
            'infoComp' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\InfoComp',
            'resultCancelSkybill' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ResultCancelSkybill',
            'resultTrackSkybill' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ResultTrackSkybill',
            'resultSearchPOD' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ResultSearchPOD',
            'resultSearchPODWithSenderRef' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ResultSearchPODWithSenderRef',
            'parcelPOD' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\ParcelPOD',
            'trackWithSenderRef' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\TrackWithSenderRef',
            'trackWithSenderRefResponse' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\TrackWithSenderRefResponse',
            'trackSearch' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\TrackSearch',
            'trackSearchResponse' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\TrackSearchResponse',
            'trackSkybillV2' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\TrackSkybillV2',
            'trackSkybillV2Response' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\TrackSkybillV2Response',
            'cancelSkybill' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\CancelSkybill',
            'cancelSkybillResponse' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\CancelSkybillResponse',
            'trackSkybill' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\TrackSkybill',
            'trackSkybillResponse' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\TrackSkybillResponse',
            'searchPOD' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\SearchPOD',
            'searchPODResponse' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\SearchPODResponse',
            'searchPODWithSenderRef' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\SearchPODWithSenderRef',
            'searchPODWithSenderRefResponse' => '\\Maetva\\Chronopost\\TrackingServiceWS\\StructType\\SearchPODWithSenderRefResponse',
        ];
    }
}
