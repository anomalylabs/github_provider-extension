<?php namespace Anomaly\GithubProviderExtension\Command;

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
     * Handle the command.
     *
     * @param Repository $config
     * @return AccessToken
     * @throws \Exception
     */
    public function handle(Repository $config)
    {
        $token = $config->get('services.github.token');

        if (!$token) {
            throw new \Exception('Please generate tokens for the GitHub provider first.');
        }

        return new AccessToken(['access_token' => $token]);
    }
}
