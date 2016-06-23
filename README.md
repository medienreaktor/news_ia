# TYPO3-Extension "news_instantarticles"

![News Instant Articles](ext_icon.png)

Generates a Facebook Instant Articles :zap: RSS-feed for TYPO3 extension "news" (tx_news).

## Installation

 * Install and configure "news"
 * Install "news_instantarticles"
 * Include static template "News Instant Articles"

Please configure the page to use absolute URLs. You can do this either globally via

    config.absRefPrefix = http://example.com

or just for the Facebook Instant Articles RSS-feed page type:

    instantarticles.config.absRefPrefix = http://example.com


## Configuration

The constant editor allows you some customization:

Name | Description | Default value
---- | ----------- | -------------
Language (two letters) | ISO language code, e.g. "en", "de" | en
Facebook Article Style | The article style you configured in your Instant Articles settings on Facebook | default

Besides these settings, make sure to configure your RSS-feed for "news" as always (everything in plugin.tx_news.rss.channel).

## URLs

The plugin works by configuring a new page type with typeNum = 800. You can access this RSS-feed with the URL http://example.com/?type=800.

Of course, you can generate speaking URLs using CoolURI or RealUrl. Then you can access your RSS-feed with http://example.com/rss-instantarticles.xml.

### CoolURI configuration

    <valuemaps>
        <valuemap>
            <parameter>type</parameter>
            <value key="rss-instantarticles.xml">800</value>
        </valuemap>
    </valuemap>

### RealUrl configuration

    'fileName' => array (
       'index' => array(
           'rss-instantarticles.xml' => array(
               'keyValues' => array (
                   'type' => 800,
               )
           ),
       ),
    ),

## Publishing

Publish your new RSS-feed as described in the [Facebook Instant Articles documentation](https://developers.facebook.com/docs/instant-articles/publishing/setup-rss-feed).
