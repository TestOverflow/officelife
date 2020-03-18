<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Models\User\User;
use App\Models\Company\Employee;
use App\Http\Controllers\Controller;
use App\Exceptions\NotEnoughPermissionException;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ControllerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_validates_permission_level(): void
    {
        // administrator has all rights
        $stub = $this->getMockForAbstractClass(Controller::class);
        $employee = factory(Employee::class)->create([
            'permission_level' => config('officelife.authorizations.administrator'),
        ]);

        $this->assertInstanceOf(
            User::class,
            $stub->asUser($employee->user)
                ->forEmployee($employee)
                ->forCompanyId($employee->company_id)
                ->asPermissionLevel(config('officelife.authorizations.administrator'))
                ->canAccessCurrentPage()
        );

        // now testing the HR access level
        $employee = factory(Employee::class)->create([
            'permission_level' => config('officelife.authorizations.hr'),
        ]);
        $this->assertInstanceOf(
            User::class,
            $stub->asUser($employee->user)
                ->forEmployee($employee)
                ->forCompanyId($employee->company_id)
                ->asPermissionLevel(config('officelife.authorizations.hr'))
                ->canAccessCurrentPage()
        );

        // now testing the normal access level
        $employee = factory(Employee::class)->create([
            'permission_level' => config('officelife.authorizations.user'),
        ]);
        $this->assertInstanceOf(
            User::class,
            $stub->asUser($employee->user)
                ->forEmployee($employee)
                ->forCompanyId($employee->company_id)
                ->asPermissionLevel(config('officelife.authorizations.user'))
                ->canAccessCurrentPage()
        );

        // test that a normal user can't see another employee's forbidden content
        $employee = factory(Employee::class)->create([
            'permission_level' => config('officelife.authorizations.user'),
        ]);
        $employeeB = factory(Employee::class)->create([
            'permission_level' => config('officelife.authorizations.user'),
            'company_id' => $employee->company_id,
        ]);

        $this->expectException(NotEnoughPermissionException::class);
        $stub->asUser($employee->user)
            ->forEmployee($employeeB)
            ->forCompanyId($employee->company_id)
            ->asPermissionLevel(config('officelife.authorizations.hr'))
            ->canAccessCurrentPage();

        // // same, but with different companies
        $employee = factory(Employee::class)->create([
            'permission_level' => config('officelife.authorizations.user'),
        ]);
        $employeeB = factory(Employee::class)->create([
            'permission_level' => config('officelife.authorizations.user'),
        ]);

        $this->expectException(NotEnoughPermissionException::class);
        $stub->asUser($employee->user)
            ->forEmployee($employeeB)
            ->forCompanyId($employeeB->company_id)
            ->asPermissionLevel(config('officelife.authorizations.hr'))
            ->canAccessCurrentPage();
    }
}
