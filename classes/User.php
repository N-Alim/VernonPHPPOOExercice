<?php

class User
{
    private string $nomUser;
    private string $prenomUser = "";
    private string $mailUser = "";
    private string $dateNaissance = "";
    private int $role = 0;

    public function setNomUser(string $nomUser) : void
    {
        $this->nomUser = $nomUser;
    }

    public function getNomUser() : string|bool
    {
        return isset($this->nomUser) ? $this->nomUser : false;
    }

    public function setPrenomUser(string $prenomUser) : void
    {
        $this->prenomUser = $prenomUser;
    }

    public function getPrenomUser() : string|bool
    {
        return isset($this->prenomUser) ? $this->prenomUser : false;
    }

    public function setMailUser(string $mailUser) : bool
    {
        if (filter_var($mailUser, FILTER_VALIDATE_EMAIL))
        {
            $this->mailUser = $mailUser;
            return true;
        }

        else
            return false;
    }

    public function getMailUser() : string|bool
    {
        return isset($this->mailUser) ? $this->mailUser : false;
    }

    public function setDateNaissance(string $dateNaissance) : void
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function getDateNaissance() : string|bool
    {
        return isset($this->dateNaissance) ? $this->dateNaissance : false;
    }

    public function setRole(string $role) : void
    {
        $this->role = $role;
    }

    public function getRole() : string|bool
    {
        return isset($this->role) ? $this->role : false;
    }
}