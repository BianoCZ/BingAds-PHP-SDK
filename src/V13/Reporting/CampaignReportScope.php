<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a campaign to include in the report.
     * @link https:/learn.microsoft.com/advertising/reporting-service/campaignreportscope?view=bingads-13 CampaignReportScope Data Object
     * 
     * @used-by AccountThroughAdGroupReportScope
     * @used-by AccountThroughCampaignReportScope
     */
    final class CampaignReportScope
    {
        /**
         * A list of up to 1,000 account identifiers to include in the report.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The identifier of the account that the campaign belongs to.
         * @var integer
         */
        public $AccountIds;

        /**
         * The identifier of the campaign to limit the scope to.
         * @var integer
         */
        public $CampaignId;
    }

}
