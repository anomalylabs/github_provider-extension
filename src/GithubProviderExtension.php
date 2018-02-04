<?php namespace Anomaly\GithubProviderExtension;

use Anomaly\GithubProviderExtension\Command\MakeGitHubAccessToken;
use Anomaly\SocialModule\Provider\ProviderExtension;

/**
 * Class GithubProviderExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\GithubProviderExtension
 */
class GithubProviderExtension extends ProviderExtension
{

    /**
     * This extension provides the github
     * oauth provider for the API module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.social::provider.github';

}
