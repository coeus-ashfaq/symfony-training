<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    public $requirePassword;

    public function __construct($requirePassword = null)
    {

        parent::__construct($requirePassword);
        $this->requirePassword = $requirePassword;
    }

    protected function configure()
    {
        parent::configure(); // TODO: Change the autogenerated stub

        $this->setName('app:create-user')
            ->setDescription('Create a New User')
            ->setHelp('This Command allows you to create new user')
            ->addArgument(
                'password',
                $this->requirePassword ? InputArgument::OPTIONAL : InputArgument::REQUIRED,
                'User password'
            )
            ->addArgument('username', InputArgument::REQUIRED, 'The username of the user.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
//        parent::execute($input, $output); // TODO: Change the autogenerated stub

        $output->writeln([
            'User Creator',
            '=============',
            ''
        ]);

        $output->writeln('Whoa!');
        $output->write("you are about to");
        $output->writeln('create a user.');

        $output->writeln('Username: '.$input->getArgument('username'));
    }
}
