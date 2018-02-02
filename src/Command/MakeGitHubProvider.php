<?php namespace Anomaly\GithubProviderExtension\Command;

use Illuminate\Contracts\Config\Repository;
use League\OAuth2\Client\Provider\Github;

/**
 * Class MakeGitHubProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MakeGitHubProvider
{

    /**
     * Handle the command.
     *
     * @param Repository $config
     * @return Github
     */
    public function handle(Repository $config)
    {
        $id       = $config->get('services.github.client_id');
        $secret   = $config->get('services.github.client_secret');
        $redirect = $config->get('services.github.redirect');
        $scope    = $config->get('services.github.scope');

        return new Github(
            [
                'clientId'     => $id,
                'clientSecret' => $secret,
                'redirectUri'  => $redirect,
                'scope'        => $scope,
            ]
        );
    }
}
