<?php
        namespace App\Models\Master;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class Employee extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_employee';
            protected $primaryKey = 'employee_id';
            public $timestamps = true;
            protected $fillable =[
                'employeeFirstName',
'employeeMiddleName',
'employeeLastName',
'phone',
'email',
'employeeRole',
'employeeSalary',
'createdOn',
'createdBy',
'alias',
'status',
'remarks',

            ];

            protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? '<span class="badge text-bg-warning-soft"> Active </span>' : '<span class="badge text-bg-secondary-soft">Inactive</span>',
        );
    }

    protected function createdBy(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  User::find($value) ? User::find($value)->name : '',
        );
    }

    protected function updatedBy(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => User::find($value) ? User::find($value)->name : '',
        );
    }
        }