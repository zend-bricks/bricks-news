<?php

namespace ZendBricks\BricksNews\Model;

use BricksCommon\Model\MailModel;
use Zend\Mail\Message as MailMessage;

class NewsMailModel extends MailModel
{
    public function sendNewsMail(array $email, array $tags, $projectName)
    {
        $translator = $this->getTranslator();
        $mail = new MailMessage();
        $mail->setSubject(sprintf($translator->translate('send.news.from.%s'), $projectName));
        $this->addTarget($email, $username);
        
        $viewVariables = [
            'projectName' => $projectName,
            'username' => $username
        ];
        
        $this->prepareMail($mail, $viewVariables, 'mail/send-news.phtml');
        $this->sendMail($mail);
    }
}
