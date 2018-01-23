<?php namespace Anomaly\GithubProviderExtension;

use Anomaly\ApiModule\Provider\Contract\ProviderExtensionInterface;
use Anomaly\GithubProviderExtension\Command\MakeGitHubAccessToken;
use Anomaly\GithubProviderExtension\Command\MakeGitHubProvider;
use Anomaly\SocialModule\Provider\ProviderExtension;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;

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
    protected $provides = 'anomaly.module.api::oauth_provider.github';

    /**
     * Return a provider instance.
     *
     * @return AbstractProvider
     */
    public function make()
    {
        return $this->dispatch(new MakeGitHubProvider());
    }

    /**
     * Return the provider's access token.
     *
     * @return AccessToken
     */
    public function token()
    {
        return $this->dispatch(new MakeGitHubAccessToken());
    }
}
