<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\TrackingServiceWS;

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
            'resultTrackWithSenderRef' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ResultTrackWithSenderRef',
            'listEvents' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ListEvents',
            'event' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\Event',
            'resultTrackSearch' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ResultTrackSearch',
            'infosPOD' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\InfosPOD',
            'resultTrackSkybillV2' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ResultTrackSkybillV2',
            'listEventInfoComps' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ListEventInfoComps',
            'eventInfoComp' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\EventInfoComp',
            'infoComp' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\InfoComp',
            'resultCancelSkybill' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ResultCancelSkybill',
            'resultTrackSkybill' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ResultTrackSkybill',
            'resultSearchPOD' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ResultSearchPOD',
            'resultSearchPODWithSenderRef' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ResultSearchPODWithSenderRef',
            'parcelPOD' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\ParcelPOD',
            'trackWithSenderRef' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\TrackWithSenderRef',
            'trackWithSenderRefResponse' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\TrackWithSenderRefResponse',
            'trackSearch' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\TrackSearch',
            'trackSearchResponse' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\TrackSearchResponse',
            'trackSkybillV2' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\TrackSkybillV2',
            'trackSkybillV2Response' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\TrackSkybillV2Response',
            'cancelSkybill' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\CancelSkybill',
            'cancelSkybillResponse' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\CancelSkybillResponse',
            'trackSkybill' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\TrackSkybill',
            'trackSkybillResponse' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\TrackSkybillResponse',
            'searchPOD' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\SearchPOD',
            'searchPODResponse' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\SearchPODResponse',
            'searchPODWithSenderRef' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\SearchPODWithSenderRef',
            'searchPODWithSenderRefResponse' => '\\Drupal\\commerce_chronopost\\Endpoint\\TrackingServiceWS\\StructType\\SearchPODWithSenderRefResponse',
        ];
    }
}
