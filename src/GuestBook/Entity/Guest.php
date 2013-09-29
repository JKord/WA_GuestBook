<?php
namespace GuestBook\Entity;

class Guest
{
    private $name,
            $email,
            $text,
            $date;

    public function __construct($request)
    {
        $this->name = $request->get('name');
        $this->email = $request->get('email');
        $this->text = $request->get('text');
        $this->date = time();
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;

        return this;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }
}