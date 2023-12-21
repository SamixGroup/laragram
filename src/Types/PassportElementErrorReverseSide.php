<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorReverseSide
 *
 *<p>Error message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorreverseside
 */
class PassportElementErrorReverseSide
{
    /**
    * <p>Error source, must be *reverse\_side*</p>
    * @var string
    */
    public string $source;

    /**
    * <p>The section of the user's Telegram Passport which has the issue, one of “driver\<em>license”, “identity\</em>card”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Base64-encoded hash of the file with the reverse side of the document</p>
    * @var string
    */
    public string $file_hash;

    /**
    * <p>Error message</p>
    * @var string
    */
    public string $message;



    public function __construct($data)
    {
        $this->source = $data['source'];
        $this->type = $data['type'];
        $this->file_hash = $data['file_hash'];
        $this->message = $data['message'];
    }
}