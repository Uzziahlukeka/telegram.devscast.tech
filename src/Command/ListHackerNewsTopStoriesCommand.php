<?php

declare(strict_types=1);

namespace App\Command;

use App\Telegram\BotReply;
use App\Telegram\BotTrigger;

/**
 * class ListHackerNewsTopStoriesCommand.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class ListHackerNewsTopStoriesCommand extends AbstractCommand
{
    public const NAME = 'hackernews';

    public const RESTRICTED = true;

    public const TRIGGERS = [BotTrigger::CHAT, BotTrigger::CLI];

    public const REPLY_MODE = BotReply::CURRENT_CHAT;

    public const CLI_DEVSCAST_CHAT = 'devscast-community';
}
