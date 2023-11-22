<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('name', 'employees');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug'                  => 'employees',
                'display_name_singular' => 'Employee',
                'display_name_plural'   => 'Employees',
                'icon'                  => 'voyager-people',
                'model_name'            => 'App\\Models\\Employee',
                'controller'            => 'App\\Http\\Controllers\\EmployeeController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        //Data Rows
        $employeeDataType = DataType::where('slug', 'employees')->firstOrFail();
        $dataRow = $this->dataRow($employeeDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($employeeDataType, 'company_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Company',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'default' => '',
                    'null'    => '',
                    'options' => [
                        '' => '-- Choose Company --',
                    ],
                    'relationship' => [
                        'key'   => 'id',
                        'label' => 'name',
                    ],
                ],
                'order' => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($employeeDataType, 'fname');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'First Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($employeeDataType, 'lname');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Last Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4
            ])->save();
        }

        $dataRow = $this->dataRow($employeeDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.email'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($employeeDataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Phone No',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($employeeDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($employeeDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 8,
            ])->save();
        }



        // $dataRow = $this->dataRow($employeeDataType, 'name');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => __('voyager::seeders.data_rows.name'),
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'order'        => 4,
        //     ])->save();
        // }



        // $dataRow = $this->dataRow($employeeDataType, 'created_at');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'timestamp',
        //         'display_name' => __('voyager::seeders.data_rows.created_at'),
        //         'required'     => 0,
        //         'browse'       => 0,
        //         'read'         => 1,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'order'        => 6,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($employeeDataType, 'updated_at');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'timestamp',
        //         'display_name' => __('voyager::seeders.data_rows.updated_at'),
        //         'required'     => 0,
        //         'browse'       => 0,
        //         'read'         => 0,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'order'        => 7,
        //     ])->save();
        // }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Employees',
            'url'     => '',
            'route'   => 'voyager.employees.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-people',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 8,
            ])->save();
        }

        //Permissions
        Permission::generateFor('employees');

        //Content

        // Employee::factory()->count(50)->create();

        $employee = Employee::firstOrNew([
            'email' => 'rick@companyone.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Rick',
                'lname' => 'Novek',
                'email' => 'rick@companyone.com',
                'phone' => '09326382232',
                'company_id' => 1
            ])->save();
        }

        $employee = Employee::firstOrNew([
            'email' => 'susan@companyone.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Susan',
                'lname' => 'Cannor',
                'email' => 'susan@companyone.com',
                'phone' => '09327828329',
                'company_id' => 1
            ])->save();
        }

        $employee = Employee::firstOrNew([
            'email' => 'ronald@companyone.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Ronald',
                'lname' => 'Barr',
                'email' => 'ronald@companyone.com',
                'phone' => '099868559',
                'company_id' => 1
            ])->save();
        }

        $employee = Employee::firstOrNew([
            'email' => 'mark@companyone.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Mark',
                'lname' => 'Adam',
                'email' => 'mark@companyone.com',
                'phone' => '09297663222',
                'company_id' => 1
            ])->save();
        }

        $employee = Employee::firstOrNew([
            'email' => 'bett@companyone.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Bett',
                'lname' => 'Porter',
                'email' => 'bett@companyone.com',
                'phone' => '09675322119',
                'company_id' => 1
            ])->save();
        }

        //

        $employee = Employee::firstOrNew([
            'email' => 'lucus@companytwo.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Lucus',
                'lname' => 'Dave',
                'email' => 'lucus@companytwo.com',
                'phone' => '0982216521',
                'company_id' => 2
            ])->save();
        }

        $employee = Employee::firstOrNew([
            'email' => 'ellis@companytwo.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Ellis',
                'lname' => 'Kan',
                'email' => 'ellis@companytwo.com',
                'phone' => '0987836222',
                'company_id' => 2
            ])->save();
        }

        $employee = Employee::firstOrNew([
            'email' => 'jack@companytwo.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Jack',
                'lname' => 'London',
                'email' => 'jack@companytwo.com',
                'phone' => '0986272712',
                'company_id' => 2
            ])->save();
        }

        $employee = Employee::firstOrNew([
            'email' => 'powell@companytwo.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Powell',
                'lname' => 'Roge',
                'email' => 'powell@companytwo.com',
                'phone' => '09673352212',
                'company_id' => 2
            ])->save();
        }

        $employee = Employee::firstOrNew([
            'email' => 'mike@companytwo.com',
        ]);
        if (!$employee->exists) {
            $employee->fill([
                'fname' => 'Mike',
                'lname' => 'Sam',
                'email' => 'mike@companytwo.com',
                'phone' => '097872322222',
                'company_id' => 2

            ])->save();
        }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
