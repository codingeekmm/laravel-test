<?php

namespace App\Widgets;


use App\Models\Employee;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class EmployeeDimmer extends BaseDimmer
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
        $count = Employee::count();
        $string = 'Employees';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Employees',
                'link' => route('voyager.employees.index'),
            ],
            'image' => 'storage/employees/employee.jpg',
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
