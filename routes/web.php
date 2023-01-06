<?php

use App\Http\Controllers\Assets\AssestCategoryController;
use App\Http\Controllers\Finance\AdvancerequestController;
use App\Http\Controllers\Form\GeneralFormController;
use App\Http\Controllers\Hr\DepartmentController;
use App\Http\Controllers\Hr\AppreciationController;
use App\Http\Controllers\Hr\ComplaintsController;
use App\Http\Controllers\Hr\WarningsController;
use App\Http\Controllers\Hr\LeaveApplicationController;
use App\Http\Controllers\requisition\TravelController;
use App\Http\Controllers\requisition\RequisitiontravelController;
use App\Http\Controllers\Hr\MangeHolidayController;
use App\Http\Controllers\Hr\ShiftRosterController;
use App\Http\Controllers\Hr\TransferController;
use App\Http\Controllers\Master\AddSupplierController;
use App\Http\Controllers\Master\AttendanceFromController;
// use App\Http\Controllers\Hr\EmployeeController;
use App\Http\Controllers\Master\EmployeeController;
use App\Http\Controllers\work\WorkProjectsController;
use App\Http\Controllers\work\TasksbladeController;
use App\Http\Controllers\Master\CityController;
use App\Http\Controllers\Master\CountryController;
use App\Http\Controllers\Finance\CreditNotesController;
use App\Http\Controllers\Finance\EstimatesController;
use App\Http\Controllers\Finance\FinancePayController;
use App\Http\Controllers\Finance\ProposalController;
use App\Http\Controllers\Finance\FinanceExpensesController;
use App\Http\Controllers\Hr\DesignationController;
use App\Http\Controllers\Master\DepartmentController as MasterDepartmentController;
use App\Http\Controllers\Master\DistrictController;
use App\Http\Controllers\Master\FleetController;
use App\Http\Controllers\Master\HolidayTypesController;
use App\Http\Controllers\Master\TraveltypesController;
use App\Http\Controllers\Master\NationalityController;
use App\Http\Controllers\Master\OrganizationCategoryController;
use App\Http\Controllers\Master\EmploymentSizeCategoryController;
use App\Http\Controllers\Master\JobTitleController;
use App\Http\Controllers\Master\OrganizationTypeController;
use App\Http\Controllers\Master\PolicyController;
use App\Http\Controllers\Master\StateController;
use App\Http\Controllers\Master\ownershipController;
use App\Http\Controllers\Notice\AnnouncementController;
use App\Http\Controllers\Inventory\Brand\BrandController;
use App\Http\Controllers\Inventory\Category\CategoryController;
use App\Http\Controllers\Inventory\Price\PriceController;
use App\Http\Controllers\Inventory\Product\ProductController;
use App\Http\Controllers\Inventory\PurchaseEntry\PurchaseEntryController;
use App\Http\Controllers\Inventory\Purchaseorder\purchaseorderController;
use App\Http\Controllers\Inventory\Sale\SaleController;
use App\Http\Controllers\Inventory\Supplier\SupplierController;
use App\Http\Controllers\Inventory\Unit\UnitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Settings\SettingController;




// Route::get('/dashboard', function () {    return view('omis\welcome');});
Route::get('/', function () {
    return redirect('/login');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('omis\welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix("form")->group(
        function () {
            Route::get('/', [GeneralFormController::class, 'create'])->name('form.create');
            Route::get('/store', [GeneralFormController::class, 'store'])->name('form.store');
        }
    );
    Route::prefix("master")->group(
        function () {
            Route::prefix("country")->group(
                function () {
                    Route::get('/', [CountryController::class, 'index'])->name('master.country.index');
                    Route::get('/create', [CountryController::class, 'create'])->name('master.country.create');
                    Route::post('/store', [CountryController::class, 'store'])->name('master.country.store');
                    Route::get('/show/{id}', [CountryController::class, 'show'])->name('master.country.show');
                    Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('master.country.edit');
                    Route::put('/update/{id}', [CountryController::class, 'update'])->name('master.country.update');
                    Route::delete('/destroy/{id}', [CountryController::class, 'destroy'])->name('master.country.destroy');
                }
            );

            Route::prefix("city")->group(
                function () {
                    Route::get('/', [CityController::class, 'index'])->name('master.city.index');
                    Route::get('/create', [CityController::class, 'create'])->name('master.city.create');
                    Route::post('/store', [CityController::class, 'store'])->name('master.city.store');
                    Route::get('/show/{id}', [CityController::class, 'show'])->name('master.city.show');
                    Route::get('/edit/{id}', [CityController::class, 'edit'])->name('master.city.edit');
                    Route::put('/update/{id}', [CityController::class, 'update'])->name('master.city.update');
                    Route::delete('/destroy/{id}', [CityController::class, 'destroy'])->name('master.city.destroy');
                }
            );

            Route::prefix("district")->group(
                function () {
                    Route::get('/', [DistrictController::class, 'index'])->name('master.district.index');
                    Route::get('/create', [DistrictController::class, 'create'])->name('master.district.create');
                    Route::post('/store', [DistrictController::class, 'store'])->name('master.district.store');
                    Route::get('/show/{id}', [DistrictController::class, 'show'])->name('master.district.show');
                    Route::get('/edit/{id}', [DistrictController::class, 'edit'])->name('master.district.edit');
                    Route::put('/update/{id}', [DistrictController::class, 'update'])->name('master.district.update');
                    Route::delete('/destroy/{id}', [DistrictController::class, 'destroy'])->name('master.district.destroy');
                }
            );
            Route::prefix("nationality")->group(
                function () {
                    Route::get('/', [NationalityController::class, 'index'])->name('master.nationality.index');
                    Route::get('/create', [NationalityController::class, 'create'])->name('master.nationality.create');
                    Route::post('/store', [NationalityController::class, 'store'])->name('master.nationality.store');
                    Route::get('/show/{id}', [NationalityController::class, 'show'])->name('master.nationality.show');
                    Route::get('/edit/{id}', [NationalityController::class, 'edit'])->name('master.nationality.edit');
                    Route::put('/update/{id}', [NationalityController::class, 'update'])->name('master.nationality.update');
                    Route::delete('/destroy/{id}', [NationalityController::class, 'destroy'])->name('master.nationality.destroy');
                }
            );
            Route::prefix("policy")->group(
                function () {
                    Route::get('/', [PolicyController::class, 'index'])->name('master.policy.index');
                    Route::get('/create', [PolicyController::class, 'create'])->name('master.policy.create');
                    Route::post('/store', [PolicyController::class, 'store'])->name('master.policy.store');
                    Route::get('/show/{id}', [PolicyController::class, 'show'])->name('master.policy.show');
                    Route::get('/edit/{id}', [PolicyController::class, 'edit'])->name('master.policy.edit');
                    Route::put('/update/{id}', [PolicyController::class, 'update'])->name('master.policy.update');
                    Route::delete('/destroy/{id}', [PolicyController::class, 'destroy'])->name('master.policy.destroy');
                }
            );

            Route::prefix("state")->group(
                function () {
                    Route::get('/', [StateController::class, 'index'])->name('master.state.index');
                    Route::get('/create', [StateController::class, 'create'])->name('master.state.create');
                    Route::post('/store', [StateController::class, 'store'])->name('master.state.store');
                    Route::get('/show/{id}', [StateController::class, 'show'])->name('master.state.show');
                    Route::get('/edit/{id}', [StateController::class, 'edit'])->name('master.state.edit');
                    Route::put('/update/{id}', [StateController::class, 'update'])->name('master.state.update');
                    Route::delete('/destroy/{id}', [StateController::class, 'destroy'])->name('master.state.destroy');
                }
            );

            Route::prefix("organizationType")->group(
                function () {
                    Route::get('/', [OrganizationTypeController::class, 'index'])->name('master.organizationtype.index');
                    Route::get('/create', [OrganizationTypeController::class, 'create'])->name('master.organizationtype.create');
                    Route::post('/store', [OrganizationTypeController::class, 'store'])->name('master.organizationtype.store');
                    Route::get('/show/{id}', [OrganizationTypeController::class, 'show'])->name('master.organizationtype.show');
                    Route::get('/edit/{id}', [OrganizationTypeController::class, 'edit'])->name('master.organizationtype.edit');
                    Route::put('/update/{id}', [OrganizationTypeController::class, 'update'])->name('master.organizationtype.update');
                    Route::delete('/destroy/{id}', [OrganizationTypeController::class, 'destroy'])->name('master.organizationtype.destroy');
                }
            );


            Route::prefix("employee")->group(
                function () {
                    Route::get('/', [EmployeeController::class, 'index'])->name('master.employee.index');
                    Route::get('/create', [EmployeeController::class, 'create'])->name('master.employee.create');
                    Route::post('/store', [EmployeeController::class, 'store'])->name('master.employee.store');
                    Route::get('/show/{id}', [EmployeeController::class, 'show'])->name('master.employee.show');
                    Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('master.employee.edit');
                    Route::put('/update/{id}', [EmployeeController::class, 'update'])->name('master.employee.update');
                    Route::delete('/destroy/{id}', [EmployeeController::class, 'destroy'])->name('master.employee.destroy');
                }
            );
            Route::prefix("ownership")->group(
                function () {
                    Route::get('/', [OwnershipController::class, 'index'])->name('master.ownership.index');
                    Route::get('/create', [OwnershipController::class, 'create'])->name('master.ownership.create');
                    Route::post('/store', [OwnershipController::class, 'store'])->name('master.ownership.store');
                    Route::get('/show/{id}', [OwnershipController::class, 'show'])->name('master.ownership.show');
                    Route::get('/edit/{id}', [OwnershipController::class, 'edit'])->name('master.ownership.edit');
                    Route::put('/update/{id}', [OwnershipController::class, 'update'])->name('master.ownership.update');
                    Route::delete('/destroy/{id}', [OwnershipController::class, 'destroy'])->name('master.ownership.destroy');
                }
            );

            Route::prefix("traveltypes")->group(
                function () {
                    Route::get('/', [TraveltypesController::class, 'index'])->name('master.traveltypes.index');
                    Route::get('/create', [TraveltypesController::class, 'create'])->name('master.traveltypes.create');
                    Route::post('/store', [TraveltypesController::class, 'store'])->name('master.traveltypes.store');
                    Route::get('/show/{id}', [TraveltypesController::class, 'show'])->name('master.traveltypes.show');
                    Route::get('/edit/{id}', [TraveltypesController::class, 'edit'])->name('master.traveltypes.edit');
                    Route::put('/update/{id}', [TraveltypesController::class, 'update'])->name('master.traveltypes.update');
                    Route::delete('/destroy/{id}', [TraveltypesController::class, 'destroy'])->name('master.traveltypes.destroy');
                }
            );
            Route::prefix("employmentSizeCategory")->group(
                function () {
                    Route::get('/', [EmploymentSizeCategoryController::class, 'index'])->name('master.employmentsizecategory.index');
                    Route::get('/create', [EmploymentSizeCategoryController::class, 'create'])->name('master.employmentsizecategory.create');
                    Route::post('/store', [EmploymentSizeCategoryController::class, 'store'])->name('master.employmentsizecategory.store');
                    Route::get('/show/{id}', [EmploymentSizeCategoryController::class, 'show'])->name('master.employmentsizecategory.show');
                    Route::get('/edit/{id}', [EmploymentSizeCategoryController::class, 'edit'])->name('master.employmentsizecategory.edit');
                    Route::put('/update/{id}', [EmploymentSizeCategoryController::class, 'update'])->name('master.employmentsizecategory.update');
                    Route::delete('/destroy/{id}', [EmploymentSizeCategoryController::class, 'destroy'])->name('master.employmentsizecategory.destroy');
                }
            );

            Route::prefix("organizationCategory")->group(
                function () {
                    Route::get('/', [OrganizationCategoryController::class, 'index'])->name('master.organizationcategory.index');
                    Route::get('/create', [OrganizationCategoryController::class, 'create'])->name('master.organizationcategory.create');
                    Route::post('/store', [OrganizationCategoryController::class, 'store'])->name('master.organizationcategory.store');
                    Route::get('/show/{id}', [OrganizationCategoryController::class, 'show'])->name('master.organizationcategory.show');
                    Route::get('/edit/{id}', [OrganizationCategoryController::class, 'edit'])->name('master.organizationcategory.edit');
                    Route::put('/update/{id}', [OrganizationCategoryController::class, 'update'])->name('master.organizationcategory.update');
                    Route::delete('/destroy/{id}', [OrganizationCategoryController::class, 'destroy'])->name('master.organizationcategory.destroy');
                }
            );
            Route::prefix("jobTitle")->group(
                function () {
                    Route::get('/', [JobTitleController::class, 'index'])->name('master.jobtitle.index');
                    Route::get('/create', [JobTitleController::class, 'create'])->name('master.jobtitle.create');
                    Route::post('/store', [JobTitleController::class, 'store'])->name('master.jobtitle.store');
                    Route::get('/show/{id}', [JobTitleController::class, 'show'])->name('master.jobtitle.show');
                    Route::get('/edit/{id}', [JobTitleController::class, 'edit'])->name('master.jobtitle.edit');
                    Route::put('/update/{id}', [JobTitleController::class, 'update'])->name('master.jobtitle.update');
                    Route::delete('/destroy/{id}', [JobTitleController::class, 'destroy'])->name('master.jobtitle.destroy');
                }
            );


            Route::prefix("holidayTypes")->group(
                function () {
                    Route::get('/', [HolidayTypesController::class, 'index'])->name('master.holidaytypes.index');
                    Route::get('/create', [HolidayTypesController::class, 'create'])->name('master.holidaytypes.create');
                    Route::post('/store', [HolidayTypesController::class, 'store'])->name('master.holidaytypes.store');
                    Route::get('/show/{id}', [HolidayTypesController::class, 'show'])->name('master.holidaytypes.show');
                    Route::get('/edit/{id}', [HolidayTypesController::class, 'edit'])->name('master.holidaytypes.edit');
                    Route::put('/update/{id}', [HolidayTypesController::class, 'update'])->name('master.holidaytypes.update');
                    Route::delete('/destroy/{id}', [HolidayTypesController::class, 'destroy'])->name('master.holidaytypes.destroy');
                }
            );

            Route::prefix("fleet")->group(
                function () {
                    Route::get('/', [FleetController::class, 'index'])->name('master.fleet.index');
                    Route::get('/create', [FleetController::class, 'create'])->name('master.fleet.create');
                    Route::post('/store', [FleetController::class, 'store'])->name('master.fleet.store');
                    Route::get('/show/{id}', [FleetController::class, 'show'])->name('master.fleet.show');
                    Route::get('/edit/{id}', [FleetController::class, 'edit'])->name('master.fleet.edit');
                    Route::put('/update/{id}', [FleetController::class, 'update'])->name('master.fleet.update');
                    Route::delete('/destroy/{id}', [FleetController::class, 'destroy'])->name('master.fleet.destroy');
                }
            );

            Route::prefix("department")->group(
                function () {
                    Route::get('/', [MasterDepartmentController::class, 'index'])->name('master.department.index');
                    Route::get('/create', [MasterDepartmentController::class, 'create'])->name('master.department.create');
                    Route::post('/store', [MasterDepartmentController::class, 'store'])->name('master.department.store');
                    Route::get('/show/{id}', [MasterDepartmentController::class, 'show'])->name('master.department.show');
                    Route::get('/edit/{id}', [MasterDepartmentController::class, 'edit'])->name('master.department.edit');
                    Route::put('/update/{id}', [MasterDepartmentController::class, 'update'])->name('master.department.update');
                    Route::delete('/destroy/{id}', [MasterDepartmentController::class, 'destroy'])->name('master.department.destroy');
                }
            );

            Route::prefix("attendanceFrom")->group(
                function () {
                    Route::get('/', [AttendanceFromController::class, 'index'])->name('master.attendancefrom.index');
                    Route::get('/create', [AttendanceFromController::class, 'create'])->name('master.attendancefrom.create');
                    Route::post('/store', [AttendanceFromController::class, 'store'])->name('master.attendancefrom.store');
                    Route::get('/show/{id}', [AttendanceFromController::class, 'show'])->name('master.attendancefrom.show');
                    Route::get('/edit/{id}', [AttendanceFromController::class, 'edit'])->name('master.attendancefrom.edit');
                    Route::put('/update/{id}', [AttendanceFromController::class, 'update'])->name('master.attendancefrom.update');
                    Route::delete('/destroy/{id}', [AttendanceFromController::class, 'destroy'])->name('master.attendancefrom.destroy');
                }
            );

            Route::prefix("addSupplier")->group(function () {
                Route::get('/', [AddSupplierController::class, 'index'])->name('master.addsupplier.index');
                Route::get('/create', [AddSupplierController::class, 'create'])->name('master.addsupplier.create');
                Route::post('/store', [AddSupplierController::class, 'store'])->name('master.addsupplier.store');
                Route::get('/show/{id}', [AddSupplierController::class, 'show'])->name('master.addsupplier.show');
                Route::get('/edit/{id}', [AddSupplierController::class, 'edit'])->name('master.addsupplier.edit') ;
                Route::put('/update/{id}', [AddSupplierController::class, 'update'])->name('master.addsupplier.update');
                Route::delete('/destroy/{id}', [AddSupplierController::class, 'destroy'])->name('master.addsupplier.destroy');
            });




            Route::get('usersettings', [App\Http\Controllers\Settings\UserSettingController::class, 'index'])->name('usersettings.index');
            Route::put('usersettings/update', [App\Http\Controllers\Settings\UserSettingController::class, 'update'])->name('usersettings.update');
        }
    );


    Route::prefix("notice")->group(
        function () {
            Route::prefix("announcement")->group(function () {
                Route::get('/', [AnnouncementController::class, 'index'])->name('notice.announcement.index');
                Route::get('/create', [AnnouncementController::class, 'create'])->name('notice.announcement.create');
                Route::post('/store', [AnnouncementController::class, 'store'])->name('notice.announcement.store');
                Route::get('/show/{id}', [AnnouncementController::class, 'show'])->name('notice.announcement.show');
                Route::get('/edit/{id}', [AnnouncementController::class, 'edit'])->name('notice.announcement.edit') ;
                Route::put('/update/{id}', [AnnouncementController::class, 'update'])->name('notice.announcement.update');
                Route::delete('/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('notice.announcement.destroy');
            });

        });



    Route::prefix("assets")->group(
        function () {
             Route::prefix("assestCategory")->group(function () {
            Route::get('/', [AssestCategoryController::class, 'index'])->name('assets.assestcategory.index');
            Route::get('/create', [AssestCategoryController::class, 'create'])->name('assets.assestcategory.create');
            Route::post('/store', [AssestCategoryController::class, 'store'])->name('assets.assestcategory.store');
            Route::get('/show/{id}', [AssestCategoryController::class, 'show'])->name('assets.assestcategory.show');
            Route::get('/edit/{id}', [AssestCategoryController::class, 'edit'])->name('assets.assestcategory.edit') ;
            Route::put('/update/{id}', [AssestCategoryController::class, 'update'])->name('assets.assestcategory.update');
            Route::delete('/destroy/{id}', [AssestCategoryController::class, 'destroy'])->name('assets.assestcategory.destroy');
        });
                                        }
    );

    Route::prefix("dictonary")->group(
        function () {
            Route::get('/', [DictonaryController::class, 'index']);
            Route::get('/add', [DictonaryController::class, 'create']);
            Route::get('/view', [DictonaryController::class, 'view']);
            Route::post('/store', [DictonaryController::class, 'store']);
            Route::get('/edit/{id}', [DictonaryController::class, 'edit']);
            Route::post('/update/{id}', [DictonaryController::class, 'update']);
            Route::delete('/destroy/{id}', [DictonaryController::class, 'destroy']);
        }
    );




    // Route::prefix("department")->group(function () {
    //     Route::get('/', [DepartmentController::class, 'index']);
    //     Route::get('/add', [DepartmentController::class, 'create']);
    //     Route::get('/view', [DepartmentController::class, 'view']);
    //     Route::post('/store', [DepartmentController::class, 'store']);
    //     Route::get('/edit/{id}', [DepartmentController::class, 'edit']);
    //     Route::post('/update/{id}', [DepartmentController::class, 'update']);
    //     Route::delete('/destroy/{id}', [DepartmentController::class, 'destroy']);
    // });


    Route::get('/settings/{name?}', [SettingController::class, 'master'])->where('name', '(.*)');


    // End Settings Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('hr')->group(
        function () {
            Route::get('/employee', [EmployeeController::class, 'index'])->name('hr.employee.index');
            Route::get('/employee/create', [EmployeeController::class, 'create'])->name('hr.employee.create');
            Route::post('/employee/store', [EmployeeController::class, 'store'])->name('hr.employee.store');
            Route::get('/employee/edit', [EmployeeController::class, 'edit'])->name('hr.employee.edit');
            Route::put('/employee/update', [EmployeeController::class, 'update'])->name('hr.employee.update');

            Route::prefix("department")->group(
                function () {
                        Route::get('/', [DepartmentController::class, 'index'])->name('hr.department.index');
                        Route::get('/create', [DepartmentController::class, 'create'])->name('hr.department.create');
                        Route::post('/store', [DepartmentController::class, 'store'])->name('hr.department.store');
                        Route::get('/show/{id}', [DepartmentController::class, 'show'])->name('hr.department.show');
                        Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('hr.department.edit');
                        Route::put('/update/{id}', [DepartmentController::class, 'update'])->name('hr.department.update');
                        Route::delete('/destroy/{id}', [DepartmentController::class, 'destroy'])->name('hr.department.destroy');
                    }
            );
            Route::prefix("shiftRoster")->group(function () {
                Route::get('/', [ShiftRosterController::class, 'index'])->name('hr.shiftroster.index');
                Route::get('/create', [ShiftRosterController::class, 'create'])->name('hr.shiftroster.create');
                Route::post('/store', [ShiftRosterController::class, 'store'])->name('hr.shiftroster.store');
                Route::get('/show/{id}', [ShiftRosterController::class, 'show'])->name('hr.shiftroster.show');
                Route::get('/edit/{id}', [ShiftRosterController::class, 'edit'])->name('hr.shiftroster.edit') ;
                Route::put('/update/{id}', [ShiftRosterController::class, 'update'])->name('hr.shiftroster.update');
                Route::delete('/destroy/{id}', [ShiftRosterController::class, 'destroy'])->name('hr.shiftroster.destroy');
            });

            Route::prefix("designation")->group(function () {
                Route::get('/', [DesignationController::class, 'index'])->name('hr.designation.index');
                Route::get('/create', [DesignationController::class, 'create'])->name('hr.designation.create');
                Route::post('/store', [DesignationController::class, 'store'])->name('hr.designation.store');
                Route::get('/show/{id}', [DesignationController::class, 'show'])->name('hr.designation.show');
                Route::get('/edit/{id}', [DesignationController::class, 'edit'])->name('hr.designation.edit') ;
                Route::put('/update/{id}', [DesignationController::class, 'update'])->name('hr.designation.update');
                Route::delete('/destroy/{id}', [DesignationController::class, 'destroy'])->name('hr.designation.destroy');
            });
            Route::prefix("leaveApplication")->group(function () {
                Route::get('/', [LeaveApplicationController::class, 'index'])->name('hr.leaveapplication.index');
                Route::get('/create', [LeaveApplicationController::class, 'create'])->name('hr.leaveapplication.create');
                Route::post('/store', [LeaveApplicationController::class, 'store'])->name('hr.leaveapplication.store');
                Route::get('/show/{id}', [LeaveApplicationController::class, 'show'])->name('hr.leaveapplication.show');
                Route::get('/edit/{id}', [LeaveApplicationController::class, 'edit'])->name('hr.leaveapplication.edit') ;
                Route::put('/update/{id}', [LeaveApplicationController::class, 'update'])->name('hr.leaveapplication.update');
                Route::delete('/destroy/{id}', [LeaveApplicationController::class, 'destroy'])->name('hr.leaveapplication.destroy');
            });
               Route::prefix("mangeHoliday")->group(function () {
                Route::get('/', [MangeHolidayController::class, 'index'])->name('hr.mangeholiday.index');
                Route::get('/create', [MangeHolidayController::class, 'create'])->name('hr.mangeholiday.create');
                Route::post('/store', [MangeHolidayController::class, 'store'])->name('hr.mangeholiday.store');
                Route::get('/show/{id}', [MangeHolidayController::class, 'show'])->name('hr.mangeholiday.show');
                Route::get('/edit/{id}', [MangeHolidayController::class, 'edit'])->name('hr.mangeholiday.edit') ;
                Route::put('/update/{id}', [MangeHolidayController::class, 'update'])->name('hr.mangeholiday.update');
                Route::delete('/destroy/{id}', [MangeHolidayController::class, 'destroy'])->name('hr.mangeholiday.destroy');
            });




            Route::prefix("appreciation")->group(function () {
                Route::get('/', [AppreciationController::class, 'index'])->name('hr.appreciation.index');
                Route::get('/create', [AppreciationController::class, 'create'])->name('hr.appreciation.create');
                Route::post('/store', [AppreciationController::class, 'store'])->name('hr.appreciation.store');
                Route::get('/show/{id}', [AppreciationController::class, 'show'])->name('hr.appreciation.show');
                Route::get('/edit/{id}', [AppreciationController::class, 'edit'])->name('hr.appreciation.edit') ;
                Route::put('/update/{id}', [AppreciationController::class, 'update'])->name('hr.appreciation.update');
                Route::delete('/destroy/{id}', [AppreciationController::class, 'destroy'])->name('hr.appreciation.destroy');
            });

            Route::prefix("complaints")->group(function () {
                Route::get('/', [ComplaintsController::class, 'index'])->name('hr.complaints.index');
                Route::get('/create', [ComplaintsController::class, 'create'])->name('hr.complaints.create');
                Route::post('/store', [ComplaintsController::class, 'store'])->name('hr.complaints.store');
                Route::get('/show/{id}', [ComplaintsController::class, 'show'])->name('hr.complaints.show');
                Route::get('/edit/{id}', [ComplaintsController::class, 'edit'])->name('hr.complaints.edit') ;
                Route::put('/update/{id}', [ComplaintsController::class, 'update'])->name('hr.complaints.update');
                Route::delete('/destroy/{id}', [ComplaintsController::class, 'destroy'])->name('hr.complaints.destroy');
            });

            Route::prefix("warnings")->group(function () {
                Route::get('/', [WarningsController::class, 'index'])->name('hr.warnings.index');
                Route::get('/create', [WarningsController::class, 'create'])->name('hr.warnings.create');
                Route::post('/store', [WarningsController::class, 'store'])->name('hr.warnings.store');
                Route::get('/show/{id}', [WarningsController::class, 'show'])->name('hr.warnings.show');
                Route::get('/edit/{id}', [WarningsController::class, 'edit'])->name('hr.warnings.edit') ;
                Route::put('/update/{id}', [WarningsController::class, 'update'])->name('hr.warnings.update');
                Route::delete('/destroy/{id}', [WarningsController::class, 'destroy'])->name('hr.warnings.destroy');
            });

            Route::prefix("transfer")->group(function () {
                Route::get('/', [TransferController::class, 'index'])->name('hr.transfer.index');
                Route::get('/create', [TransferController::class, 'create'])->name('hr.transfer.create');
                Route::post('/store', [TransferController::class, 'store'])->name('hr.transfer.store');
                Route::get('/show/{id}', [TransferController::class, 'show'])->name('hr.transfer.show');
                Route::get('/edit/{id}', [TransferController::class, 'edit'])->name('hr.transfer.edit') ;
                Route::put('/update/{id}', [TransferController::class, 'update'])->name('hr.transfer.update');
                Route::delete('/destroy/{id}', [TransferController::class, 'destroy'])->name('hr.transfer.destroy');
            });




        }

    );
    Route::prefix("requisition")->group(
        function () {
            Route::prefix("travel")->group(function () {
                Route::get('/', [TravelController::class, 'index'])->name('requisition.travel.index');
                Route::get('/create', [TravelController::class, 'create'])->name('requisition.travel.create');
                Route::post('/store', [TravelController::class, 'store'])->name('requisition.travel.store');
                Route::get('/show/{id}', [TravelController::class, 'show'])->name('requisition.travel.show');
                Route::get('/edit/{id}', [TravelController::class, 'edit'])->name('requisition.travel.edit') ;
                Route::put('/update/{id}', [TravelController::class, 'update'])->name('requisition.travel.update');
                Route::delete('/destroy/{id}', [TravelController::class, 'destroy'])->name('requisition.travel.destroy');
            });


            Route::prefix("requisitiontravel")->group(function () {
                Route::get('/', [RequisitiontravelController::class, 'index'])->name('requisition.requisitiontravel.index');
                Route::get('/create', [RequisitiontravelController::class, 'create'])->name('requisition.requisitiontravel.create');
                Route::post('/store', [RequisitiontravelController::class, 'store'])->name('requisition.requisitiontravel.store');
                Route::get('/show/{id}', [RequisitiontravelController::class, 'show'])->name('requisition.requisitiontravel.show');
                Route::get('/edit/{id}', [RequisitiontravelController::class, 'edit'])->name('requisition.requisitiontravel.edit') ;
                Route::put('/update/{id}', [RequisitiontravelController::class, 'update'])->name('requisition.requisitiontravel.update');
                Route::delete('/destroy/{id}', [RequisitiontravelController::class, 'destroy'])->name('requisition.requisitiontravel.destroy');
            });




        }
    );

    Route::prefix("Finance")->group(
        function () {
            Route::prefix("creditNotes")->group(function () {
                Route::get('/', [CreditNotesController::class, 'index'])->name('finance.creditnotes.index');
                Route::get('/create', [CreditNotesController::class, 'create'])->name('finance.creditnotes.create');
                Route::post('/store', [CreditNotesController::class, 'store'])->name('finance.creditnotes.store');
                Route::get('/show/{id}', [CreditNotesController::class, 'show'])->name('finance.creditnotes.show');
                Route::get('/edit/{id}', [CreditNotesController::class, 'edit'])->name('finance.creditnotes.edit') ;
                Route::put('/update/{id}', [CreditNotesController::class, 'update'])->name('finance.creditnotes.update');
                Route::delete('/destroy/{id}', [CreditNotesController::class, 'destroy'])->name('finance.creditnotes.destroy');
            });
            Route::prefix("estimates")->group(function () {
                Route::get('/', [EstimatesController::class, 'index'])->name('finance.estimates.index');
                Route::get('/create', [EstimatesController::class, 'create'])->name('finance.estimates.create');
                Route::post('/store', [EstimatesController::class, 'store'])->name('finance.estimates.store');
                Route::get('/show/{id}', [EstimatesController::class, 'show'])->name('finance.estimates.show');
                Route::get('/edit/{id}', [EstimatesController::class, 'edit'])->name('finance.estimates.edit') ;
                Route::put('/update/{id}', [EstimatesController::class, 'update'])->name('finance.estimates.update');
                Route::delete('/destroy/{id}', [EstimatesController::class, 'destroy'])->name('finance.estimates.destroy');
            });
            Route::prefix("proposal")->group(function () {
                Route::get('/', [ProposalController::class, 'index'])->name('finance.proposal.index');
                Route::get('/create', [ProposalController::class, 'create'])->name('finance.proposal.create');
                Route::post('/store', [ProposalController::class, 'store'])->name('finance.proposal.store');
                Route::get('/show/{id}', [ProposalController::class, 'show'])->name('finance.proposal.show');
                Route::get('/edit/{id}', [ProposalController::class, 'edit'])->name('finance.proposal.edit') ;
                Route::put('/update/{id}', [ProposalController::class, 'update'])->name('finance.proposal.update');
                Route::delete('/destroy/{id}', [ProposalController::class, 'destroy'])->name('finance.proposal.destroy');
            });

            Route::prefix("financeExpenses")->group(function () {
                Route::get('/', [FinanceExpensesController::class, 'index'])->name('finance.financeexpenses.index');
                Route::get('/create', [FinanceExpensesController::class, 'create'])->name('finance.financeexpenses.create');
                Route::post('/store', [FinanceExpensesController::class, 'store'])->name('finance.financeexpenses.store');
                Route::get('/show/{id}', [FinanceExpensesController::class, 'show'])->name('finance.financeexpenses.show');
                Route::get('/edit/{id}', [FinanceExpensesController::class, 'edit'])->name('finance.financeexpenses.edit') ;
                Route::put('/update/{id}', [FinanceExpensesController::class, 'update'])->name('finance.financeexpenses.update');
                Route::delete('/destroy/{id}', [FinanceExpensesController::class, 'destroy'])->name('finance.financeexpenses.destroy');
            });
            Route::prefix("financePay")->group(function () {
                Route::get('/', [FinancePayController::class, 'index'])->name('finance.financepay.index');
                Route::get('/create', [FinancePayController::class, 'create'])->name('finance.financepay.create');
                Route::post('/store', [FinancePayController::class, 'store'])->name('finance.financepay.store');
                Route::get('/show/{id}', [FinancePayController::class, 'show'])->name('finance.financepay.show');
                Route::get('/edit/{id}', [FinancePayController::class, 'edit'])->name('finance.financepay.edit') ;
                Route::put('/update/{id}', [FinancePayController::class, 'update'])->name('finance.financepay.update');
                Route::delete('/destroy/{id}', [FinancePayController::class, 'destroy'])->name('finance.financepay.destroy');
            });

            Route::prefix("advancerequest")->group(function () {
                Route::get('/', [AdvancerequestController::class, 'index'])->name('finance.advancerequest.index');
                Route::get('/create', [AdvancerequestController::class, 'create'])->name('finance.advancerequest.create');
                Route::post('/store', [AdvancerequestController::class, 'store'])->name('finance.advancerequest.store');
                Route::get('/show/{id}', [AdvancerequestController::class, 'show'])->name('finance.advancerequest.show');
                Route::get('/edit/{id}', [AdvancerequestController::class, 'edit'])->name('finance.advancerequest.edit') ;
                Route::put('/update/{id}', [AdvancerequestController::class, 'update'])->name('finance.advancerequest.update');
                Route::delete('/destroy/{id}', [AdvancerequestController::class, 'destroy'])->name('finance.advancerequest.destroy');
            });



        }



    );
    Route::prefix("work")->group(
        function () {
            Route::prefix("workProjects")->group(function () {
                Route::get('/', [WorkProjectsController::class, 'index'])->name('work.workprojects.index');
                Route::get('/create', [WorkProjectsController::class, 'create'])->name('work.workprojects.create');
                Route::post('/store', [WorkProjectsController::class, 'store'])->name('work.workprojects.store');
                Route::get('/show/{id}', [WorkProjectsController::class, 'show'])->name('work.workprojects.show');
                Route::get('/edit/{id}', [WorkProjectsController::class, 'edit'])->name('work.workprojects.edit');
                Route::put('/update/{id}', [WorkProjectsController::class, 'update'])->name('work.workprojects.update');
                Route::delete('/destroy/{id}', [WorkProjectsController::class, 'destroy'])->name('work.workprojects.destroy');
            }
            );

            Route::prefix("tasksblade")->group(function () {
                Route::get('/', [TasksbladeController::class, 'index'])->name('work.tasksblade.index');
                Route::get('/create', [TasksbladeController::class, 'create'])->name('work.tasksblade.create');
                Route::post('/store', [TasksbladeController::class, 'store'])->name('work.tasksblade.store');
                Route::get('/show/{id}', [TasksbladeController::class, 'show'])->name('work.tasksblade.show');
                Route::get('/edit/{id}', [TasksbladeController::class, 'edit'])->name('work.tasksblade.edit') ;
                Route::put('/update/{id}', [TasksbladeController::class, 'update'])->name('work.tasksblade.update');
                Route::delete('/destroy/{id}', [TasksbladeController::class, 'destroy'])->name('work.tasksblade.destroy');
            });


        }
    );

    Route::prefix('inventory')->group(function () {
        /**
             * --------------------------------------
             *      Brand
             * --------------------------------------
             */
            Route::get('/brand/index', [BrandController::class, 'index'])->name('inventory.brand.index'); //View
            Route::get('brand-data', [BrandController::class, 'getAllData'])->name('inventory.brand.data');
            Route::get('/brand/create', [BrandController::class, 'create'])->name('inventory.brand.create'); //View
            Route::post('/brand/store', [BrandController::class, 'store'])->name('inventory.brand.store'); // Create
            Route::put('/brand/{brand}', [BrandController::class, 'update'])->name('inventory.brand.update');
            Route::get('/brand/edit/{brand}', [BrandController::class, 'edit'])->name('inventory.brand.edit');
            Route::get('/delete/brand/{id}', [BrandController::class, 'destroy'])->name('inventory.brand.delete'); // Delete ajax

            /**
             * --------------------------------------
             *      Category
             * --------------------------------------
             */
            Route::get('/category/index', [CategoryController::class, 'index'])->name('inventory.category.index'); //View
            Route::get('category-data', [CategoryController::class, 'getAllData'])->name('inventory.category.data');
            Route::get('/category/create', [CategoryController::class, 'create'])->name('inventory.category.create'); //View
            Route::post('/category/store', [CategoryController::class, 'store'])->name('inventory.category.store'); // Create
            Route::put('/category/{category}', [CategoryController::class, 'update'])->name('inventory.category.update');
            Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('inventory.category.edit');
            Route::get('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('inventory.category.delete'); // Delete ajax


            /**
             * --------------------------------------
             *      Supplier
             * --------------------------------------
             */
            Route::get('/supplier/index', [SupplierController::class, 'index'])->name('inventory.supplier.index'); //View
            Route::get('supplier-data', [SupplierController::class, 'getAllData'])->name('inventory.supplier.data');
            Route::get('/supplier/create', [SupplierController::class, 'create'])->name('inventory.supplier.create'); //View
            Route::post('/supplier/store', [SupplierController::class, 'store'])->name('inventory.supplier.store'); // Create
            Route::put('/supplier/{supplier}', [SupplierController::class, 'update'])->name('inventory.supplier.update');
            Route::get('/supplier/{supplier}/edit', [SupplierController::class, 'edit'])->name('inventory.supplier.edit');
            Route::get('/delete/supplier/{id}', [SupplierController::class, 'destroy'])->name('inventory.supplier.delete'); // Delete ajax

            /**
             * --------------------------------------
             *      Unit
             * --------------------------------------
             */
            Route::get('/unit/index', [UnitController::class, 'index'])->name('inventory.unit.index'); //View
            Route::get('unit-data', [UnitController::class, 'getAllData'])->name('inventory.unit.data');
            Route::get('/unit/create', [UnitController::class, 'create'])->name('inventory.unit.create'); //View
            Route::post('/unit/store', [UnitController::class, 'store'])->name('inventory.unit.store'); // Create
            Route::put('/unit/{unit}', [UnitController::class, 'update'])->name('inventory.unit.update');
            Route::get('/unit/{unit}/edit', [UnitController::class, 'edit'])->name('inventory.unit.edit');
            Route::post('/delete/unit/{id}', [UnitController::class, 'destroy'])->name('inventory.unit.delete'); // Delete ajax
            Route::post('unitstore', [UnitController::class, 'unitStore'])->name('inventory.unit.unitStore');


            /**
             * --------------------------------------
             *      Product
             * --------------------------------------
             */
            Route::get('/product/index', [ProductController::class, 'index'])->name('inventory.product.index'); //View
            Route::get('product-data', [ProductController::class, 'getAllData'])->name('inventory.product.data');
            Route::get('/product/create', [ProductController::class, 'create'])->name('inventory.product.create'); //View
            Route::post('/product/store', [ProductController::class, 'store'])->name('inventory.product.store'); // Create
            Route::put('/product/{product}', [ProductController::class, 'update'])->name('inventory.product.update');
            Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('inventory.product.edit');
            Route::get('/delete/product/{id}', [ProductController::class, 'destroy'])->name('inventory.product.delete'); // Delete ajax

            /**
             * --------------------------------------
             *      Price
             * --------------------------------------
             */
            Route::get('/price/index', [PriceController::class, 'index'])->name('inventory.price.index'); //View
            Route::get('price-data', [PriceController::class, 'getAllData'])->name('inventory.price.data');
            Route::get('/price/create', [PriceController::class, 'create'])->name('inventory.price.create'); //View
            Route::post('/price/store', [PriceController::class, 'store'])->name('inventory.price.store'); // Create
            Route::put('/price/{price}', [PriceController::class, 'update'])->name('inventory.price.update');
            Route::get('/price/{price}/edit', [PriceController::class, 'edit'])->name('inventory.price.edit');
            Route::get('/delete/price/{id}', [PriceController::class, 'destroy'])->name('inventory.price.delete'); // Delete ajax


            /**
             * --------------------------------------
             *      Sale
             * --------------------------------------
             */
            Route::get('/sale/index', [SaleController::class, 'index'])->name('inventory.sale.index'); //View
            Route::get('sale-data', [SaleController::class, 'getAllData'])->name('inventory.sale.data');
            Route::get('/sale/create', [SaleController::class, 'create'])->name('inventory.sale.create'); //View
            Route::post('/sale/store', [SaleController::class, 'store'])->name('inventory.sale.store'); // Create
            Route::put('/sale/{sale}', [SaleController::class, 'update'])->name('inventory.sale.update');
            Route::get('/sale/{sale}/edit', [SaleController::class, 'edit'])->name('inventory.sale.edit');
            Route::post('/delete/sale/{id}', [SaleController::class, 'destroy'])->name('inventory.sale.delete'); // Delete ajax

            /**
             * --------------------------------------
             *      Puchase Order
             * --------------------------------------
             */
            Route::get('/purchaseorder/index', [PurchaseOrderController::class, 'index'])->name('inventory.purchaseorder.index'); //View
            Route::get('purchaseorder-data', [PurchaseOrderController::class, 'getAllData'])->name('inventory.purchaseorder.data');
            Route::get('/purchaseorder/create', [PurchaseOrderController::class, 'create'])->name('inventory.purchaseorder.create'); //View
            Route::post('/purchaseorder/store', [PurchaseOrderController::class, 'store'])->name('inventory.purchaseorder.store'); // Create
            Route::put('/purchaseorder/{purchaseorder}', [PurchaseOrderController::class, 'update'])->name('inventory.purchaseorder.update');
            Route::get('/purchaseorder/{purchaseorder}/edit', [PurchaseOrderController::class, 'edit'])->name('inventory.purchaseorder.edit');
            Route::post('/purchaseorder/delete', [PurchaseOrderController::class, 'destroy'])->name('inventory.purchaseorder.delete'); // Delete ajax
            Route::post('quntitycheckajax', [PurchaseOrderController::class, 'quantityCheckAjax'])->name('inventory.purchaseorder.quntitycheckajax');


            /**
             * --------------------------------------
             *      Puchase Entry
             * --------------------------------------
             */
            Route::get('/purchaseentry/index', [PurchaseEntryController::class, 'index'])->name('inventory.purchaseentry.index'); //View
            Route::get('purchaseentry-data', [PurchaseEntryController::class, 'getAllData'])->name('inventory.purchaseentry.data');
            Route::get('/purchaseentry/create', [PurchaseEntryController::class, 'create'])->name('inventory.purchaseentry.create'); //View
            Route::post('/purchaseentry/store', [PurchaseEntryController::class, 'store'])->name('inventory.purchaseentry.store'); // Create
            Route::put('/purchaseentry/{purchaseentry}', [PurchaseEntryController::class, 'update'])->name('inventory.purchaseentry.update');
            Route::get('/purchaseentry/{purchaseentry}/edit', [PurchaseEntryController::class, 'edit'])->name('inventory.purchaseentry.edit');
            Route::post('/purchaseentry/delete', [PurchaseEntryController::class, 'destroy'])->name('inventory.purchaseentry.delete'); // Delete ajax
            Route::get('getproductorder', [PurchaseEntryController::class, 'getProductOrder'])->name('inventory.purchaseentry.getproductorder');


    });
    Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');
});

require __DIR__ . '/auth.php';
