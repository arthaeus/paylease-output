<?php

namespace Output;

class ScreenOutput implements IOutput, \SPLObserver
{

    public function update( \SPLSubject $subject )
    {
        $message = $subject->getMessage();
        $messageObj = new \stdClass();
        $messageObj->message = $message;
        $this->output( $messageObj );
    }

    public function output( \stdClass $output )
    {
        echo $output->message;
    }
}
