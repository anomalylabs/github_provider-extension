<?php namespace Anomaly\GithubProviderExtensionExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class GithubProviderExtensionExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\GithubProviderExtensionExtension
 */
class GithubProviderExtensionExtension extends Extension
{

    /**
     * This extension provides the github
     * oauth provider for the API module.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.api.oauth_provider.github';

}
