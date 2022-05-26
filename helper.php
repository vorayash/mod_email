<?php

// no direct access
defined('_JEXEC') or die;

class ModEmailHelper
{
    public static function getCloakedEmail($email)
    {
        return JHtml::_('email.cloak', $email,0);;
    }
}