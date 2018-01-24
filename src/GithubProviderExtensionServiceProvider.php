<?php namespace Anomaly\GithubProviderExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Routing\UrlGenerator;
use Illuminate\Contracts\Config\Repository;

/**
 * Class GithubProviderExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GithubProviderExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * Boot the addon.
     *
     * @param Repository   $config
     * @param UrlGenerator $url
     */
    public function boot(Repository $config, UrlGenerator $url)
    {
        $config->set('services.github.redirect', $url->to('social/github/callback'));
    }
}
