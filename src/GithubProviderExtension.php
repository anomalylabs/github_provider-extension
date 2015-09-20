<?php namespace Anomaly\GithubProviderExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class GithubProviderExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\GithubProviderExtension
 */
class GithubProviderExtension extends Extension
{

    /**
     * This extension provides the github
     * oauth provider for the API module.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.api::oauth_provider.github';

}
