<?php

namespace Output;

interface IOutput
{
    /**
     * output the results of a calculation.  maybe results are printed to the screen, maybe they are dumped
     * into a text file, maybe they are emailed to someone.
     */
    public function output( \stdClass $output );
}
