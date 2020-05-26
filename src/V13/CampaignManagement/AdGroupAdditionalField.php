<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional ad group properties that you can request when calling GetAdGroupsByCampaignId and GetAdGroupsByIds.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/adgroupadditionalfield?view=bingads-13 AdGroupAdditionalField Value Set
     * 
     * @used-by GetAdGroupsByCampaignIdRequest
     * @used-by GetAdGroupsByIdsRequest
     */
    final class AdGroupAdditionalField
    {
        /** Request that the AdScheduleUseSearcherTimeZone element be included within each returned AdGroup object. */
        const AdScheduleUseSearcherTimeZone = 'AdScheduleUseSearcherTimeZone';
    }

}
