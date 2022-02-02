<?php

class mails {

    public string $to;
    public string $subject;
    public string $mail;


    /**
     * @param $to
     * @param $subject
     * @param $mail
     */
public function __construct($to ,$subject ,$mail) {

    $this->setTo($to);
    $this->setTo($subject);
    $this->setTo($mail);
}

    /**
     * @return string
     */
    public function sendMail():string{
        if (mail($this->to,  $this->subject, $this->mail)){
            return "Mail envoyé";
        }
        else{
            return "Un problème est survenue !";
        }
    }
    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

}