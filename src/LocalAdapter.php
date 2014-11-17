<?php
/**
 * Created by PhpStorm.
 * User: onysko
 * Date: 17.11.2014
 * Time: 14:12
 */

namespace samson\upload;


class LocalAdapter implements iAdapter {
    public function putContent($data, $filename = '', $uploadDir = '')
    {
        // Put file
        file_put_contents($uploadDir.'/'.$filename, $data);

        return $uploadDir;
    }
}
