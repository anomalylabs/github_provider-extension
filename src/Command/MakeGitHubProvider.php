<?php namespace Anomaly\GithubProviderExtension\Command;

use Anomaly\Streams\Platform\Routing\UrlGenerator;
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
     * @param Repository   $config
     * @param UrlGenerator $url
     * @return Github
     */
    public function handle(Repository $config, UrlGenerator $url)
    {
        $id     = $config->get('services.github.client_id');
        $secret = $config->get('services.github.client_secret');

        return new Github(
            [
                'clientId'     => $id,
                'clientSecret' => $secret,
                'redirectUri'  => $url->to('social/github/login'),
            ]
        );
    }
}
