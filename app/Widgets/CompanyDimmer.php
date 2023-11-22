<?php

namespace App\Widgets;

use App\Models\Company;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class CompanyDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Company::count();
        $string = 'Companies';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-world',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Companies',
                'link' => route('voyager.companies.index'),
            ],
            'image' => 'storage/companies/company.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    // public function shouldBeDisplayed()
    // {
    //     return Auth::user()->can('browse', Voyager::model('Post'));
    // }
}
