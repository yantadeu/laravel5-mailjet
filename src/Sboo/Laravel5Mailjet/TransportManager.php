<?php namespace Sboo\Laravel5Mailjet;

use Sboo\Laravel5Mailjet\Transport\MailjetTransport;
use Illuminate\Mail\TransportManager as BaseTransportManager;

class TransportManager extends BaseTransportManager {

    /**
     * Create an instance of the Mailgun Swift Transport driver.
     *
     * @return \Illuminate\Mail\Transport\MailgunTransport
     */
    protected function createMailjetDriver()
    {
        $config = $this->app['config']->get('services.mailjet', array());

        return new MailjetTransport($config['key'], $config['secret']);
    }

}