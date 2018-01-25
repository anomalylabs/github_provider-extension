<?php namespace Anomaly\GithubProviderExtension\Command;

use Anomaly\GithubProviderExtension\GithubProviderExtension;
use Anomaly\SocialModule\Credentials\Contract\CredentialsRepositoryInterface;
use Illuminate\Contracts\Config\Repository;
use League\OAuth2\Client\Token\AccessToken;

/**
 * /**
 * Class MakeGitHubAccessToken
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MakeGitHubAccessToken
{

    /**
     * The provider instance.
     *
     * @var GithubProviderExtension
     */
    protected $provider;

    /**
     * Create a new MakeGitHubAccessToken instance.
     *
     * @param GithubProviderExtension $provider
     */
    public function __construct(GithubProviderExtension $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Handle the command.
     *
     * @param Repository $config
     * @return AccessToken
     * @throws \Exception
     */
    public function handle(CredentialsRepositoryInterface $credentials)
    {
        $credentials = $credentials->findByProvider($this->provider);

        if (!$authentication = $credentials->getAuthentication()) {
            throw new \Exception('Please authenticate this provider first.');
        }

        return new AccessToken(['access_token' => $authentication->getAccessToken()]);
    }
}
