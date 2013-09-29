<?php
namespace GuestBook\Libraries;

class RepositoryData
{
    const PATH = 'data/GuestBook.txt';

    public static function getAll()
    {
        $data = file_get_contents(self::PATH);
        return ($data != '')? unserialize($data) : [];
    }
    public static function add(\GuestBook\Entity\Guest $eb)
    {
        $data = self::getAll();
        array_unshift($data, $eb);
        file_put_contents(self::PATH, serialize($data));
    }
}