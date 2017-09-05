<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SendSmsMessageCommand extends Command
{
    protected function configure()
    {
        $this->setName('send:sms:message');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Sms message "sent". You know. I just "sent" the MESSAGE. "Sent" it. (smirking smile with threatening gaze)');
    }
}