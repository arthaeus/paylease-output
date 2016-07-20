<?php

namespace Output;

class ScreenOutput implements IOutput, \SPLObserver
{

    public function update( \SPLSubject $subject )
    {
        $message = $subject->getMessage();
        $this->output( $message );
    }

    public function output( \stdClass $output )
    {
        echo $output->message;
    }
}
