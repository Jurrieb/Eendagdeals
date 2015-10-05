<?php
namespace App\Shell;

use Cake\Console\Shell;

class ImportShell extends Shell
{
    public function main()
    {
        $this->out('Commands');
        $this->out('- products');
    }

    public function products()
    {
        $startTime = microtime(true);
        $this->out('Starting import of products at: '. date("F j, Y, g:i a"));

        $this->out('Finished import of products at: '. date("F j, Y, g:i a"));
        $this->out('Elapsed time is: '. (microtime(true) - $startTime) .' seconds');
    }

}
