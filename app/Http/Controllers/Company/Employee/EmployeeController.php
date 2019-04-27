<?php

namespace App\Http\Controllers\Company\Employee;

use Illuminate\Http\Request;
use App\Models\Company\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Services\Company\Employee\Manager\AssignManager;
use App\Http\Resources\Company\Team\Team as TeamResource;
use App\Services\Company\Employee\Manager\UnassignManager;
use App\Http\Resources\Company\Employee\Employee as EmployeeResource;
use App\Http\Resources\Company\Position\Position as PositionResource;

class EmployeeController extends Controller
{
    /**
     * Display the detail of an employee.
     *
     * @param int $companyId
     * @param int $employeeId
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, int $companyId, int $employeeId)
    {
        $company = Cache::get('currentCompany');
        $employee = Employee::findOrFail($employeeId);

        $managers = $employee->getListOfManagers();
        $directReports = $employee->getListOfDirectReports();
        $positions = $company->positions()->get();
        $teams = $company->teams()->get();

        return View::component('ShowCompanyEmployee', [
            'company' => $company,
            'user' => auth()->user()->getEmployeeObjectForCompany($company),
            'employee' => new EmployeeResource($employee),
            'managers' => EmployeeResource::collection($managers),
            'directReports' => EmployeeResource::collection($directReports),
            'positions' => PositionResource::collection($positions),
            'teams' => TeamResource::collection($teams),
        ]);
    }

    /**
     * Assign a manager to the employee.
     *
     * @param int $companyId
     * @param int $employeeId
     * @return \Illuminate\Http\Response
     */
    public function assignManager(Request $request, int $companyId, int $employeeId)
    {
        $request = [
            'company_id' => $companyId,
            'author_id' => auth()->user()->id,
            'employee_id' => $employeeId,
            'manager_id' => $request->get('id'),
        ];

        $manager = (new AssignManager)->execute($request);

        return new EmployeeResource($manager);
    }

    /**
     * Assign a direct report to the employee.
     *
     * @param int $companyId
     * @param int $employeeId
     * @return \Illuminate\Http\Response
     */
    public function assignDirectReport(Request $request, int $companyId, int $employeeId)
    {
        $data = [
            'company_id' => $companyId,
            'author_id' => auth()->user()->id,
            'employee_id' => $request->get('id'),
            'manager_id' => $employeeId,
        ];

        (new AssignManager)->execute($data);

        $directReport = Employee::findOrFail($request->get('id'));

        return new EmployeeResource($directReport);
    }

    /**
     * Unassign a manager.
     *
     * @param int $companyId
     * @param int $employeeId
     * @return \Illuminate\Http\Response
     */
    public function unassignManager(Request $request, int $companyId, int $employeeId)
    {
        $request = [
            'company_id' => $companyId,
            'author_id' => auth()->user()->id,
            'employee_id' => $employeeId,
            'manager_id' => $request->get('id'),
        ];

        $manager = (new UnassignManager)->execute($request);

        return new EmployeeResource($manager);
    }

    /**
     * Unassign a direct report.
     *
     * @param int $companyId
     * @param int $managerId
     * @return \Illuminate\Http\Response
     */
    public function unassignDirectReport(Request $request, int $companyId, int $managerId)
    {
        $request = [
            'company_id' => $companyId,
            'author_id' => auth()->user()->id,
            'employee_id' => $request->get('id'),
            'manager_id' => $managerId,
        ];

        $manager = (new UnassignManager)->execute($request);

        return new EmployeeResource($manager);
    }
}