<?php

namespace Milly\Laragram\Types;

/**
* BotCommandScopeChatAdministrators
 *
 *<p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopechatadministrators
 */
class BotCommandScopeChatAdministrators
{
    /**
    * <p>Scope type, must be *chat\_administrators*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
    * @var any_of
    */
    public any_of $chat_id;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->chat_id = $data['chat_id'];
    }
}