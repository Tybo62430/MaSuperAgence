<?php

namespace App\Entity;

use Symfony\Component\Mime\Message;
use Symfony\Component\Validator\Constraint as Assert;

class Contact
{
    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Lenght(min=2, max=100)
     */
    private $firstname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Lenght(min=2, max=100)
     */
    private $lastname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Regex(
     * patern="/[0-9]{10}/"
     * )
     */
    private $phone;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $mail;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Lenght(min=10)
     */
    private $message;

    /**
     * @var Property|null
     */
    private $property;
    
    /**
     * Undocumented function
     *
     * @return string|null
     */
    public function getFirstname() :?string
    {
        return $this->firstname;
    }

    /**
     * Undocumented function
     *
     * @param string|null $firstname
     * @return Contact
     */
    public function setFirstname(?string $firstname): Contact
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * Undocumented function
     *
     * @param string|null $lastname
     * @return Contact
     */
    public function setLastname(?string $lastname): Contact
    {
        $this->lastname = $lastname;
        return $this
    }

    /**
     * Undocumented function
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Undocumented function
     *
     * @param string|null $phone
     * @return Contact
     */
    public function setPhone(?string $phone): Contact
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * Undocumented function
     *
     * @param string|null $mail
     * @return Contact
     */
    public function setMail(?string $mail): Contact
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return message|null
     */
    public function getMessage(): ?message
    {
        return $this->message;
    }

    /**
     * Undocumented function
     *
     * @param string|null $message
     * @return Contact
     */
    public function setMessage(?string $message): Contact
    {
        $this->message = $message;
        return $this
    }

    /**
     * Undocumented function
     *
     * @return Property|null
     */
    public function getProperty(): ?Property
    {
        return $this->property;
    }

    /**
     * Undocumented function
     *
     * @param Property|null $property
     * @return void
     */
    public function setProperty(?Property $property)
    {
        $this->property = $property;
    }
}
