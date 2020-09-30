<?php

namespace Akaneapp\Controller;

class EmailController extends \Akane\Controller\BaseController
{
	public function testAction()
	{
        // add your html
        $html = $this->layout->render('email/layout', [
            'content' => $this->layout->render('email/test', [
                'name' => 'Akane Tendo',
                'notif_message' => 'you have a new message',
            ])
        ]);
        
        // add your css
        $css = $this->assetHelper->get_css_content('bootstrap.min.css');
        $css .= $this->assetHelper->get_css_content('email/layout.css');

        $email_content = $this->mailHelper->makeinline($html, $css);
        
        $to = 'webhadecreative@gmail.com'; 
        $subject = 'Hello from Akane';
        
        $send = $this->mailHelper->mailgun($to, $subject, $email_content);
        var_export($send);
	}
}
