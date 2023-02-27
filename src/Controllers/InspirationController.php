<?php
namespace Phpcoderpl\Inspire\Controllers;

use Illuminate\Http\Request;
use Phpcoderpl\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
